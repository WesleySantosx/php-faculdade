<?php

$idade = $_POST['idade'] ?? 0;
$resultado = "";


if (isset($_POST['resultado'])) {
    if ($idade >= 18) {
        $resultado = "Você é maior de idade.";
    } else {
        $resultado = "Você é menor de idade.";
    }
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>

<body>
    <main class="container">

        <h1>
            DIGITE SUA IDADE
        </h1>

        <form action="idade.php" method="POST">
            <input type="number" name="idade" required>
            <button type="submit" name="resultado">Verificar</button>
        </form>

        <h1>
            <?php
            echo $resultado;
            ?>
        </h1>

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