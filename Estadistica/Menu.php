/*<a class="btn" href=".\Conceptos\index.php">Conceptos (no se ha hecho nada)</a>*/
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
        <a class="btn" href="index.php">Conceptos2</a>
        <a class="btn" href=".\Muestreo\index.php">Muestreo</a>
        <a class="btn" href=".\EstimacionPuntual\index.php">Estimacion Puntual</a>
        <a class="btn" href=".\EstimacionPuntual_2\index.php">Estimacion Puntual(2.0)</a>
        
        <a class="btn" href=".\PruebaHipotesis\index.php">Prueba de Hipotesis</a>
      
    </div>
</body>
</html>
