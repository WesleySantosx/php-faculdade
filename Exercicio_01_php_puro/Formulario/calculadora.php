<?php

$numero1 = $_POST['numero1'] ?? 0;
$numero2 = $_POST['numero2'] ?? 0;
$resultado = "";

if (isset($_POST['somar'])) {
    $resultado = $numero1 + $numero2;
}

if (isset($_POST['subtrair'])) {
    $resultado = $numero1 - $numero2;
}

if (isset($_POST['multiplicar'])) {
    $resultado = $numero1 * $numero2;
}

if (isset($_POST['dividir'])) {
    if ($numero2 != 0) {
        $resultado = $numero1 / $numero2;
    } else {
        $resultado = "Não é possível dividir por zero.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>

   <main class="container">


    <h2>Calculadora</h2>

    <form method="post" style="display: flex; flex-direction: column;">

        <label>Número 1:</label><br>
        <input type="number" name="numero1" step="any" required><br><br>

        <label>Número 2:</label><br>
        <input type="number" name="numero2" step="any" required><br><br>

        <input type="submit" name="somar" value="Somar">
        <input type="submit" name="subtrair" value="Subtrair">
        <input type="submit" name="multiplicar" value="Multiplicar">
        <input type="submit" name="dividir" value="Dividir">

    </form>

    <h3>Resultado: <?php echo $resultado; ?></h3>
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
            gap: 10px;

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