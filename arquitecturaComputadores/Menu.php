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
        /* 
        
        <strong>en construccion: </strong>
        <a class="btn" href=".\analisis_DDE\Menu.php">Analisis y diseño de experimentos (Humberto Gutiérrez Pulido, Román de 
            la Vara Salazar)</a>

        <a class="btn" href=".\ComputerSystem\Menu.php">Computer Systems (Randal E. Bryant • David R. O’Hallaron)</a>


        <br><br>
        <strong>avances:</strong>
        <hr>
        <a class="btn" href=".\material_icesi\Menu.php">Material extra</a>
        
        */
    </style>
</head>
<body>
    <div class="centered-container">
        
         
        
         

        <a class="btn" href=".\anotaciones_clase\index.php">Anotaciones clase</a>

        <a class="btn" href=".\Importante\index.php">Importante</a>

        <br><br>
        <strong>presaberes:</strong>
        <a class="btn" href=".\conceptos\Menu.php">Estadistica</a>

        <a class="btn" href=".\..\fisica\laboratorio\index.php">Error experimental</a>

        <a class="btn" href=".\apuntes\Menu.php">apuntes/preguntas clase/Laboratorio</a>
    </div>
</body>
</html>
