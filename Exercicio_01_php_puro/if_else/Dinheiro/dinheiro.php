<?php

$dinheiro = $_POST['dinheiro'] ?? 0;
$resultado = "";
if ($dinheiro == 0) {
    $resultado = "Resultado ira aparecer aqui";
} else if ($dinheiro > 1 && $dinheiro <= 100) {
    $resultado = "Pobre";
} else if ($dinheiro > 100 && $dinheiro <= 599) {
    $resultado = "Classe baixa";
} elseif ($dinheiro >= 600 && $dinheiro <= 999) {
    $resultado = "Classe media";
} else if ($dinheiro >= 1000 && $dinheiro <= 5999) {
    $resultado = "Riquinho";
} else if ($dinheiro >= 6000 && $dinheiro <= 9999) {
    $resultado = "Ricao";
} else if ($dinheiro >= 100000) {
    $resultado = "Elon Musk";
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinheiro</title>
</head>

<body>

    <main class="container">
        <h1>Digite a quantidade de dinheiro</h1>

        <form action="dinheiro.php" method="POST">
            <input type="number" name="dinheiro" required>
            <button type="submit" name="resultado">Verificar</button>
        </form>


        <h2>
            <?php
            echo $resultado;
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
             gap: 30px;

        }
    </style>
</body>

</html>