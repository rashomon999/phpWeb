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
                <a class="btn" href=".\capitulo_1_2\index.php"> capitulo 1.2 </a>
                <a class="btn" href=".\capitulo_1_3\index.php"> capitulo 1.3 </a>
                <a class="btn" href=".\capitulo_2_2\index.php"> capitulo 2.2 </a>
                <a class="btn" href=".\capitulo_2_3\index.php"> capitulo 2.3 </a>
                <a class="btn" href=".\anotaciones\index.php"> anotaciones </a>
                <a class="btn" href=".\capitulo_3_1\index.php"> capitulo 3.1 </a>
            </div>
        </div>
    </div>
</body>
</html>
