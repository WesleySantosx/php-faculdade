<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logica de Programação em PHP</title>
</head>

<body>

    <main class="container">
        <h1 style="text-align: center;">Exercicios Funções</h1><br>
        <div>
            <a href="funcao_name/name.php">Função com nome</a>
            <a href="funcao_operacao/funcao.php">Função com operações</a>
        </div>


        <form method="post">
            <button type="submit" name="exibir_enunciado">Exibir enunciado dos exercicios</button>
        </form>
        <div style="display: flex; flex-direction: column;">
            <?php

            if (isset($_POST['exibir_enunciado'])) {
                echo "
                            <h4>1 - Função nome</h4>
                            <p>Crie uma função que receba um nome </p>
                            <p>Resultado: Olá Carlos Johnson!</p>
                            
                            <br><h4>2 - Função número </h4>
                            <p>Crie uma função que receba dois números e retorne a soma, a subtração e uma frase incrível.</p>";
            }
            ?>
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
            justify-content: center;
            align-items: center;
            max-width: 600px;
            margin: 60px auto;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            gap: 20px;

        }

        div {
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: row;
            gap: 10px;
            flex-wrap: wrap;
        }

        a {
            background-color: lightgray;
            padding: 10px;
            border-radius: 8px;
            text-decoration: none;
            color: black;
        }
    </style>

</body>

</html>