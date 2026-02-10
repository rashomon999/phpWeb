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

        <a class="btn" href="general/index.php">Java (general)</a>

        <a class="btn" href="capitulo_1/index.php">basico</a>
  
        <a class="btn" href="estructuras/index.php">estructuras</a>

       <a class="btn" href="operadores/index.php">operadores</a>
      
       <a class="btn" href="arreglos/index.php">arreglos</a>

       <a class="btn" href="excepciones/index.php">excepciones</a>

        <a class="btn" href="ArrayList/index.php">ArrayList</a>
        
    </div>
</body>
</html>
