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
            height: 120vh;
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
      
        <a class="btn" href=".\capitulo_9_1\index.php">capitulo 9.1</a>
        <a class="btn" href=".\cuestionario_9_1\index.php">cuestionario 9.1</a>
        <br><br>
        <a class="btn" href=".\capitulo_9_2\index.php">capitulo 9.2</a>
        <a class="btn" href=".\capitulo_9_3\index.php">capitulo 9.3</a>
        <a class="btn" href=".\capitulo_9_4\index.php">capitulo 9.4</a>

    </div>
</body>
</html>

