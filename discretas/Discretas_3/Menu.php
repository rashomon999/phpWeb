<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirección con Botones</title>
    <style>
        .centered-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .btn {
            display: block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: blue;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="centered-container">
        <a class="btn" href=".\Lenguajes\index.php">Lenguajes</a>
        <a class="btn" href=".\cuestionarioLenguajes\index.php">cuestionario lenguajes</a>
        <a class="btn" href=".\LenguajesRegulares\index.php">Lenguajes regulares</a>
        <a class="btn" href=".\RNN\index.php">Recurrent neural network</a>
        <a class="btn" href=".\Turing\index.php">Turing machine</a>
        <br><br>
        <a class="btn" href=".\sustentacion\index.php">sustentacion</a>

    </div>
</body>
</html>
