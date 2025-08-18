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
        <a class="btn" href=".\Direcciones\index.php">Direcciones</a>
        <a class="btn" href=".\Ejemplos\index.php">Ejemplo</a>
        <a class="btn" href=".\direccionamiento\index.php">direccionamiento</a>
        <a class="btn" href=".\guia\index.php"> guia direccionamiento</a>
        <br><br><br>
        <a class="btn" href=".\cuestionario_potencias\index.php"> cuestionario potencias </a>
    </div>
</body>
</html>
