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
        <a class="btn" href=".\capitulo4_1\index.php">capitulo 4.1</a>
        <a class="btn" href=".\capitulo4_3\index.php">capitulo 4.3</a>
        <a class="btn" href=".\capitulo4_4\index.php">capitulo 4.4</a>
        <a class="btn" href=".\capitulo4_6\index.php">capitulo 4.6</a>
        <br><br>
        <a class="btn" href=".\ejercicios\index.php">ejercicios clase</a>
        <a class="btn" href=".\cuestionario\index.php">cuestionario 4.1</a>
        <a class="btn" href=".\cuestionario4_3\index.php">cuestionario 4.3</a>
        <a class="btn" href=".\cuestionario4_4\index.php">cuestionario 4.4</a>
    </div>
</body>
</html>
