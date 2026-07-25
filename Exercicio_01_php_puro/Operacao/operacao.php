<?php

$numero1 = $_POST['numero1'] ?? 0;
$numero2 = $_POST['numero2'] ?? 0;
$operacao = $_POST['operacao'] ?? 0;
$resultado = "";

if(isset($_POST['resultado'])) {
    switch ($operacao) {
    case 1:
        $resultado = $numero1 + $numero2;
        $resultado = "Resultado da soma: $resultado";
        break;
    case 2:
        $resultado = $numero1 - $numero2;
        $resultado = "Resultado da subtração: $resultado";
        break;
    case 3:
        $resultado = $numero1 * $numero2;
        $resultado = "Resultado da multiplicação: $resultado";
        break;
    case 4:
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
            $resultado = "Resultado da divisão: $resultado";
        } else {
            $resultado = "Erro: Divisão por zero.";
        }
        break;
    default:
        $resultado = "Operação inválida.";
}


}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operação</title>
</head>

<body style="background-color: black; 
        color: white; 
        display: flex; 
        flex-direction: column; 
        justify-content: center; 
        align-items: center;
        position: relative; 
        top: 2vw; display: flex;
        gap: 40px;">

    <h1>Operação</h1>
    <div style="display: flex; 
        flex-direction: column; 
        justify-content: center; 
        align-items: center;">
        <div>
            <form action="operacao.php" method="POST">
                <label>Digite um numero:</label>
                <input type="number" name="numero1" required>
                <label>Digite outro numero:</label>
                <input type="number" name="numero2" required>

                 <label>Escolha a operação:</label>
                <select name="operacao" required>
                    <option value="1">Soma</option>
                    <option value="2">Subtração</option>
                    <option value="3">Multiplicação</option>
                    <option value="4">Divisão</option>
                </select>
                <button type="submit" name="resultado" >Calcular</button>
            </form>
        </div>
    </div>

    <h1>
        <?php
        echo $resultado;
        ?>
    </h1>
</body>

</html>