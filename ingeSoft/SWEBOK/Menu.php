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
        <a class="btn" href=".\introduccion.php">Introduccion</a>
        <a class="btn" href=".\Part1\Menu.php">Parte 1 SOFTWARE REQUIREMENTS</a>
        <br>
        <a class="btn" href=".\Part2\Menu.php">Parte 2  Software Architecture</a>
        <br>
        <a class="btn" href=".\Part3\Menu.php">Parte 3 Diseño de software</a>
        <br>
        <a class="btn" href=".\Diagramas\Menu.php">Diagramas</a>
        <br>
        <a class="btn" href=".\flynn\Menu.php">flynn</a>
        <br><br>
                <a class="btn" href=".\Parcial_1\index.php">Parcial 1</a>
                <a class="btn" href=".\Parcial_2\index.php">Parcial 2</a>

    </div>
</body>
</html>
