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
        
        <br><br>
        <strong>Cuestionarios</strong>
        <a class="btn" href=".\capitulo_1_2\index.php">capitulo 1,2 Conceptos</a>
        <a class="btn" href=".\capitulo_7\index.php">capitulo 7: SQL: Data Definition </a>
        <a class="btn" href=".\capitulo_12\index.php">capitulo 12 Modelo entidad-relacion </a>
        <br>
        <a class="btn" href=".\capitulo_12\index.php">capitulo 14 Normalización. </a>
    </div>
</body>
</html>
