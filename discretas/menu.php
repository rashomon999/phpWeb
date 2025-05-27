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
        <br>
        <br>
        <strong>4 libros principales:</strong>
        <br><br>
        <a class="btn" href=".\structureInterpretation\Menu.php">structure and interpretation</a>
        <a class="btn" href=".\Rosen\Menu.php">Rosen</a>
        <a class="btn" href=".\Programming_in_Scala\Menu.php">Programming_in_Scala</a>
        <a class="btn" href=".\introduction_to_algorithms\Menu.php"> introduction_to_algorithms (cormen)</a>
    </div>
</body>
</html>
