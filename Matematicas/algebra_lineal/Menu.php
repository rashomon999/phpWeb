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
        <a class="btn" href=".\ejercicios_boyd\index.php">ejercicios (boyd)</a>
        <a class="btn" href=".\ejercicios_poole\index.php">ejercicios (poole)</a>
        <br><br>
       
        <a class="btn" href=".\lineal\index.php">linear functions cap(2) (Boyd) (no empezado)</a>
        <br><br>
        <a class="btn" href=".\poole\index.php">vectores (Poole)</a>
        <br><br>
        <strong>cuestionario</strong>
        <a class="btn" href=".\cuestionario\index.php">cuestionario</a>
      
    </div>
</body>
</html>
