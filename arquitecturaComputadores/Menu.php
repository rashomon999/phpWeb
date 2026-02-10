<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .book-container {
            display: flex;
            width: 80%;
            max-width: 1000px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .page {
            flex: 1;
            padding: 30px;
        }

        .page h2 {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }

        .btn {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            width: 80%;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .divider {
            width: 2px;
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="centered-container">
        
            <div class="book-container">
        
        <!-- Página izquierda -->
        <div class="page">

        <a class="btn" href=".\parcial\index.php">Cuestionario 1</a>
        <hr>
        <a class="btn" href=".\DigitalDataFormats\index.php">Data Formats and Their Effects</a>
        <a class="btn" href=".\anotaciones_clase\index.php">Conversiones numéricas y formatos binarios en punto fijo y flotante</a>
        <a class="btn" href=".\cuestionario_2\index.php">Cuestionario 2 (conversiones)</a>
        <hr>
        <a class="btn" href=".\Importante\index.php">Memoria</a>

        <a class="btn" href=".\registros\index.php">registros</a>

        <a class="btn" href=".\registros_preguntas\index.php">preguntas registros</a>

       <a class="btn" href=".\cache\index.php">cache</a>

        <a class="btn" href=".\semana15\index.php">Ejercicio semana15</a>

         
        </div>
        
         
        <!-- Página derecha -->
        <div class="page">
            <strong>presaberes:</strong>
            <a class="btn" href="..\Estadistica\Menu.php">Estadistica</a>

            <a class="btn" href=".\..\fisica\laboratorio\index.php">Error experimental</a>

            <a class="btn" href=".\apuntes_Lab\Menu.php">apuntes/preguntas clase/Laboratorio</a>
        </div>
         
    </div>
</body>
</html>
