<?php

$idade = $_POST['idade'] ?? 0;
$resultado = "";


if(isset($_POST['resultado'])) {
    if ($idade >= 18) {
    $resultado = "Você é maior de idade.";
} else {
    $resultado = "Você é menor de idade.";
}
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body   style="background-color: black; 
        color: white; 
        display: flex; 
        flex-direction: column; 
        justify-content: center; 
        align-items: center;
        position: relative; 
        top: 2vw; display: flex;
        gap: 40px;">
    
    <h1>
        DIGITE SUA IDADE 
    </h1>

    <form action="idade.php" method="POST">
        <input type="number" name="idade" required>
        <button type="submit" name="resultado">Verificar</button>
    </form>

    <h1>
        <?php
        echo $resultado;
        ?>
    </h1>
</body>
</html>