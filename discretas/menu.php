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
        <a class="btn" href="index.php">relaciones</a>
        <a class="btn" href=".\induccion\index.php">induccion_5_2</a>
        <a class="btn" href=".\induccion_1\index.php">induccion_5_1</a>
        <a class="btn" href=".\recursividad_5_3\index.php">recursividad_5_3</a>
         
    </div>
</body>
</html>
