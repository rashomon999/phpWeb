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
        <a class="btn" href=".\index.php">primera parte</a>

        <a class="btn" href=".\trigonometricas.php">trigonometricas</a>
        <a class="btn" href=".\fracciones_parciales/index.php">fracciones parciales (en construccion)</a>

        <a class="btn" href=".\sustitucion_geometrica/index.php">sustitucion geometrica (en construccion)</a>
    </div>
</body>
</html>
