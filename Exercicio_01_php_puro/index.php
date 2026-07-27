<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logica de Programação em PHP</title>
</head>

<body>

    <main class="container">

        <h1 style="text-align: center;">Escolha as operações</h1><br>

        <div style="display: flex; flex-direction: row; gap: 20px; position: relative; top: 2vw; background-color: #f4f4f4;" class="container">

            <div>
                <a href="Dinheiro/dinheiro.php"

                    style="background-color: lightgray; 
        padding: 20px; 
        border-radius: 8px; 
        text-decoration: none; 
        color: black;
        
        ">Dinheiro</a><br>
            </div>

            <div>
                <a href="Idade/idade.php" style="
        background-color: lightgray; 
        padding: 20px; 
        border-radius: 8px; 
        text-decoration: none; 
        color: black;">Idade </a>
            </div>

            <div>

                <a href="Operacao/operacao.php" style="
        background-color: lightgray; 
        padding: 20px; 
        border-radius: 8px; 
        text-decoration: none; 
        color: black;">Operação</a>
            </div>

             <div>

                <a href="Pares/pares.php" style="
        background-color: lightgray; 
        padding: 20px; 
        border-radius: 8px; 
        text-decoration: none; 
        color: black;">Pares</a>
            </div>

            <a href="Pares/pares.ph" style="
        background-color: lightgray; 
        padding: 20px; 
        border-radius: 8px; 
        text-decoration: none; 
        color: black;">Tabuada</a>
            </div>

        </div>
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
        }

        .container {
            max-width: 800px;
            margin: 60px auto;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }
    </style>

</body>

</html>