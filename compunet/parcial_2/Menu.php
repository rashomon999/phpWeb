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
        <a class="btn" href=".\Gson\index.php">Gson</a>
        <a class="btn" href=".\Reader\index.php">Reader</a>
        <a class="btn" href=".\Problema\index.php">Problema</a>
        <a class="btn" href=".\Generics\index.php">Generics</a> 
        <a class="btn" href=".\SQL\index.php">SQL</a>
        <a class="btn" href=".\TCP_UDP\index.php">TCP/UDP</a>
    </div>
</body>
</html>
