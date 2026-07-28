<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logica de Programação em PHP</title>
</head>

<body>

    <main class="container">
        <h1 style="text-align: center;">Exercicios IF e ELSE</h1><br>
        <div>
            <a href="Dinheiro/dinheiro.php">Dinheiro</a>
            <a href="Operacao/operacao.php">Operação</a>
            <a href="Idade/idade.php">Idade</a>
        </div>


        <form method="post">
            <button type="submit" name="exibir_enunciado">Exibir enunciado dos exercicios</button>
        </form>
        <div>
            <?php

            if (isset($_POST['exibir_enunciado'])) {
                echo "
                            <h4>1 - Crie uma variável idade, mostre:</h4><br>
                            <p>Você é maior de idade, se a idade for maior ou igual a 18 anos.</p>
                            <p>Você é menor de idade, se a idade for menor que 18 anos.</p>
                            
                            <h4>2 - Crie uma variavel dinheiro, exiba:</h4><br>
                            <p>Pobre, Classe Média, Riquinho, Ricão, Elon Musk.</p>
                            
                            <h4>3 - Crie as variaveis numero1, numero2 e operação.</h4>
                            <p>Faça a operação escolhida usando if ou switch</p>";
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
            max-width: 400px;
            margin: 60px auto;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            display: flex;
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