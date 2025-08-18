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
        <a class="btn" href=".\ComputerNet\index.php">Computer Networking</a>
        <a class="btn" href=".\cuestionario_net\index.php">cuestionario Computer Networking</a>
        <br><br>
        <a class="btn" href=".\OSI\index.php">OSI</a>
        <a class="btn" href=".\cuestionario_OSI\index.php">cuestionario OSI</a>

        <br><br>
        <a class="btn" href=".\Protocolo\index.php">1.5 Capas de protocolo y sus modelos de servicio</a>
        <br>
        <br>

    </div>
</body>
</html>
