<?php

$numero1 = $_POST['numero1'] ?? 0;
$numero2 = $_POST['numero2'] ?? 0;
$pares = "";


if(isset($_POST['resultado'])) {
    for ($i = $numero1; $i <= $numero2; $i++) {
        if( $i % 2 == 0) {
            $pares .= $i . ", ";
        }
    }
    }

    ?> 

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Numeros pares</title>
    </head>
    <body>
        <main class="container">
            
        <h1>Escolha o intervalo dos números, para exibir os pares entre eles</h1>

        <form action="pares.php" method="POST">
            <input type="number" name="numero1" placeholder="Digite o primeiro número">
            <input type="number" name="numero2" placeholder="Digite o segundo número">
            <button type="submit" name="resultado">Exibir Pares</button>
        </form>

        <h2>Os números pares são: <?php echo $pares; ?></h2>

        </main>

          <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            top: 2vw;
        }

        .container {
            max-width: 800px;
            margin: 60px auto;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            gap: 20px;

        }
       
    </style>
    </body>
    </html>


