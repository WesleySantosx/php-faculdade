<?php

$peso = $_POST['peso'] ?? 0;
$altura = $_POST['altura'] ?? 0;
$resultado = "";

if (isset($_POST['calcular'])) {

    if ($peso > 0 && $altura > 0) {
        $imc = $peso / ($altura * $altura);
        $resultado = "Seu IMC é: " . number_format($imc, 2, ',', '.');
    } else {
        $resultado = "Preencha os campos corretamente.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>

   <main class="container">

    <h2>Calculadora de IMC</h2>

    <form method="post">
        <label>Peso (kg):</label><br>
        <input type="number" name="peso" step="0.01" required><br><br>

        <label>Altura (m):</label><br>
        <input type="number" name="altura" step="0.01" required><br><br>

        <input type="submit" name="calcular" value="Calcular">
    </form>

    <h3><?php echo $resultado; ?></h3>

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