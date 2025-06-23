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
         <a class="btn" href=".\libro\comienzo.php">libro (secuencias)</a>
          <a class="btn" href=".\libro2_0\index.php">libro 2.0</a>
    <br><br>
        <a class="btn" href=".\basico\index.php">basico</a>
        <a class="btn" href=".\algebra_lineal\Menu.php">algebra lineal</a>
        <a class="btn" href=".\derivadas\index.php">derivadas</a>
        <a class="btn" href=".\ecuaciones\Menu.php">ecuaciones</a>
        <a class="btn" href=".\formulas\index.php">formulas</a>
        <a class="btn" href=".\graficas\index.php">graficas</a>
        <a class="btn" href=".\integrales\Menu.php">integrales</a>
        <a class="btn" href=".\trigonometricas\index.php">trigonometricas</a>
        <a class="btn" href=".\graficas\index.php">graficas</a>
     </div>
</body>
</html>
