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
        <a class="btn" href=".\ejercicios\index.php">inecuaciones</a>
        <a class="btn" href=".\ecuaciones\index.php">ecuaciones</a>
        <a class="btn" href=".\ejercicios_ecuaciones\index.php">ejercicios_ecuaciones</a>
        <a class="btn" href=".\EjerciciosTeoremaMaestro\index.php">Ejercicios Teorema maestro  </a>
        <a class="btn" href=".\TeoremaMaestro\index.php">Teorema maestro </a>

    </div>
</body>
</html>
