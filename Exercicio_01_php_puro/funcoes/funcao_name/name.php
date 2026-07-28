<?php

function exibirNome($nome = null) {
    if (is_null($nome)) {
        $nome = $nome ?? $_POST["name"] ?? "Visitante";
    }
    return "Olá, $nome!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Nome</title>
</head>

<body>
    <main class="container">

        <h1>Clique no botão para exibir o nome</h1>
        <form method="post">
            <input type="text" name="name" placeholder="Digite o nome aqui">
            <button type="submit" name="exibir">Exibir Nome</button>

                </form>
                <h2>
                    <?php
                    if (isset($_POST['exibir'])) {
                        echo exibirNome();
                    }
                    ?>
                </h2>
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