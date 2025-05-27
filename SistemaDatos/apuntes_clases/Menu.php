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
        Hay mas albunes pero este es el mejor (mas cargado hasta el momento)
        <br><br>
        SQL es un lenguaje que incluye DDL, DML, DCL, TCL y DQL.
        <a class="btn" href=".\SQL\index.php">SQL (Lenguaje estructurado de consultas)</a>
    
        <a class="btn" href=".\algebra\index.php">Relacional</a>
        <a class="btn" href=".\Ejercicio\index.php">Ejercicio SQL</a>
        <a class="btn" href=".\MER\index.php">MER</a>
        <a class="btn" href=".\solucion_3FN\index.php">Solucion 3FN</a>
        <a class="btn" href=".\ER\index.php">ER</a>
        <a class="btn" href=".\Normalizacion\index.php">Normalizacion</a>
        <a class="btn" href=".\pl_sql\Menu.php"> pl / sql</a>
    </div>
</body>
</html>
