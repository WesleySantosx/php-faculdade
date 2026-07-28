<?php

$papagaios = [
    "Papagaio-do-congo",
    "Papagaio-verdadeiro",
    "Papagaio-galego"
];

$adicionar = $_POST['raca'];
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papagaios</title>
</head>

<body>
    <main class="container">
        <h1>Raças favoritas de papagaio</h1>

        <h4>
            <?php
            foreach ($papagaios as $papagaios) {
                echo "<li>" . $papagaios . "</li>";
            }
            echo "<li>". $adicionar. "</li>";
            ?>
        </h4>
        <form method="post">
            <input type="text" name="raca" placeholder="Adicionar mais raças">
            <button type="submit" name="add">Adicionar raça</button>
        </form>
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