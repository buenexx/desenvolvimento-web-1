<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 03</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 0 0 2rem;
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>
<body>
    <h1>
        <?php
            session_start();
            echo $_SESSION['isVoter'];
        ?>
    </h1>

    <a href="exercicio-01.html">Avaliar outra pessoa</a>
</body>
</html>
