<?php

$numero1 = 4;
$numero2 = 7;

$numero3 = 12.879;
$numero4 = 5;
$resultado = 0;
$escolha = 0;

$exibirResultado = "";


if (isset($_POST['resultado'])) {
    switch ($_POST['operacao']) {
        case 1:
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero1 * $i;
                $exibirResultado .= "$numero1 x $i = $resultado <br>";
            }
            break;
        case 2:
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero2 * $i;
                $exibirResultado .= "$numero2 x $i = $resultado <br>";
            }
            break;
        case 3:
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero3 * $i;
                $exibirResultado .= "$numero3 x $i = $resultado <br>";
            }
            break;
        case 4:
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero4 * $i;
                $exibirResultado .= "$numero4 x $i = $resultado <br>";
            }
            break;
        default:
            $exibirResultado .= "Escolha inválida.";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada  </title>
</head>

<body>
    <main class="container">

        <h1>Escolha qual número irá exibir a tabuada</h1>

        <form action="tabuada.php" method="post">
            <select name="operacao">
                <option value="1">Tabuada do 4</option>
                <option value="2">Tabuada do 7</option>
                <option value="3">Tabuada do 12.879</option>
                <option value="4">Tabuada do 5</option>
            </select>
            <button type="submit" name="resultado">Exibir Tabuada</button>
        </form>

        <h2>
            <?php echo $exibirResultado; ?>
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