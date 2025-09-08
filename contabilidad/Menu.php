
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
        <a class="btn" href=".\MarcoTeorico\Menu.php">Marco teorico</a>
        
        <a class="btn" href=".\cuestionario_Marco\Menu.php">cuestionario (MarcoTeorico)</a>
         
        <a class="btn" href=".\videos\Menu.php">videos</a>


        <a class="btn" href=".\cuestionario_videos\Menu.php">cuestionario (videos)</a>

        <a class="btn" href=".\Clasificacion\Menu.php"> Clasificacion activos y pasivos. </a>

        <a class="btn" href=".\ClasificacionCuentas\index.php"> Clasificacion cuentas </a>

        <a class="btn" href=".\taller_0\index.php"> Taller 0 cuentas </a>


        <a class="btn" href=".\cuestionarioTaller_1\index.php"> cuestionario Taller 1 </a>


        <a class="btn" href=".\taller_1\index.php"> Taller 1 cuentas </a>

    </div>
</body>
</html>
