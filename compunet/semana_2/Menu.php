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
        <a class="btn" href=".\MediaTypes\index.php">tipos de medios</a>
        <a class="btn" href=".\WirelessNet\index.php">Entendiendo las redes inalámbricas</a> 
        <a class="btn" href=".\EnlaceDatos\index.php">Enlace de datos</a> 
        <a class="btn" href=".\apuntes\index.php"> Apuntes </a> 
        <br><br>
        <a class="btn" href=".\cuestionarioMedia\index.php">cuestionario: tipos de medios</a>
        <a class="btn" href=".\cuestionarioRedInalambrica\index.php">cuestionario: Red Inhalambrica</a>
    </div>
</body>
</html>
