<?php

$memes = [
    ["Se é o bixão memo em doido!"],
    ["Seloko cachoeira"],
    ["O poeta galo cego"],
    ["👍"],
    ["Sabia não"]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memes </title>
</head>

<body>
    <main class="container">

        <h1>Só Reliquias vão lembrar dessas lendas!</h1>

        <h5>
            <?php
            foreach ($memes as $memes) {
                echo "<li>" . $memes[0] . "</li>";
            }
            ?>
        </h5>
        <p>👍</p>
        <video
            width="560"
            height="315"
            src="gif/v132ngkuvodc1.mp4"
            title="Vídeo"
            allow="autoplay"
            allowfullscreen autoplay muted loop></video>
    </main>
    </iframe>


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