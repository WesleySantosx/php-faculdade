<?php
function operacaoNumber($numero1, $numero2)
{
    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;

    return "A soma dos números é: \n " . $soma .
        "\n <p> A subtração dos números é: " . $subtracao . "</p>" .
        "\n<h2>Fiz o que eu entendi, mas descobri que eu não tinha entendido nada :D</h2>";
}

$numero1 = $_POST["n1"] ?? 0;
$numero2 = $_POST["n2"] ?? 0;

operacaoNumber($numero1, $numero2);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções - Soma e Subtração</title>
</head>

<body>

    <main class="container">
        <h1>Operações usando função </h1>
        <form method="post">
            <input type="number" placeholder="Digite o numero aqui" name="n1" required>
            <input type="number" placeholder="Digite o numero aqui" name="n2" required>
            <button type="submit" name="exibir">Exibir resultado</button>
        </form>


        <h4>
            <?php
            if (isset($_POST['exibir'])) {
                echo operacaoNumber($numero1, $numero2);
            }
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