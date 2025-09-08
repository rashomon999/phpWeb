<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirección con Botones</title>
    <style>
        .centered-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .menu-columns {
            display: flex;
            gap: 50px;
        }

        .column {
            display: flex;
            flex-direction: column;
            align-items: center;
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
            text-align: center;
        }

        .btn:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="centered-container">
        <div class="menu-columns">
            <div class="column">
                <a class="btn" href=".\capitulo_5\Menu.php">capitulo 5</a>
                <a class="btn" href=".\capitulo_6\Menu.php">capitulo 6</a>
            </div>
            <div class="column">
                
            </div>
        </div>
    </div>
</body>
</html>
