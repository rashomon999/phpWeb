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
        <a class="btn" href=".\analisis_DDE\Menu.php">Analisis y diseño de experimentos (Humberto Gutiérrez Pulido, Román de 
            la Vara Salazar)</a>

        <a class="btn" href=".\ComputerSystem\Menu.php">Computer Systems (Randal E. Bryant • David R. O’Hallaron)</a>
        
        <br><br>

        <a class="btn" href=".\material_icesi\Menu.php">Material extra</a>
    </div>
</body>
</html>
