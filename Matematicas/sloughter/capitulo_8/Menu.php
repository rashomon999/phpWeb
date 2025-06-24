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
        <a class="btn" href=".\parte_1\index.php">subcapitulo 8.1  Numerical solutions</a>
        <a class="btn" href=".\cuestionario_1\index.php">cuestionario_1 </a>
        <br><br>
        <a class="btn" href=".\parte_2\index.php">subcapitulo 8.2  Separation of variables</a>
    </div>
</body>
</html>
