<?php

$info = [

    [$_POST["nome"]],
    [$_POST["idade"]],
    [$_POST["cidade"]],
    [$_POST["tchola"]]

];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
</head>
<body>
    <main class="container">
        <h1>Suas informações</h1>

        <form method="post">
            <input type="text" name="nome" placeholder="Digite seu nome aqui">
            <input type="number" name="idade" placeholder="Digite sua idade aqui">
            <input type="text" name="cidade" placeholder="Digite sua cidade aqui">
            <input type="text" name="tchola" placeholder="Digite ai tchola">
            <button type="submit" name="exibir">Exibir informações</button>
        </form>

        <h4>
            <?php
            foreach( $info as $info)
                 echo "<li>" . $info[0] . "</li>";
            ?>
        </h4>
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
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
    </style>
</body>
</html>