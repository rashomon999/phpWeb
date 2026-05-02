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
        <a class="btn" href=".\semana_1\Menu.php">semana 1</a>
        <a class="btn" href=".\semana_2\Menu.php">semana 2</a>
        <a class="btn" href=".\semana_3\Menu.php">semana 3</a>
        <br>
        <br>
        <a class="btn" href=".\parcial_2\Menu.php">parcial 2</a>
        <br><br>
        <a class="btn" href=".\multihilos\Menu.php">multihilos</a>
        <br><br>
        <a class="btn" href=".\Spring\Menu.php">Spring</a>
        <br><br>
        <a class="btn" href=".\SpringJPA\index.php">Spring JPA</a>

        <a class="btn" href=".\MVC\index.php">MVC</a>
        
        <a class="btn" href=".\Thymeleaf\index.php">Thymeleaf</a>

        <a class="btn" href=".\REST\index.php">REST</a>
          
    </div>
</body>
</html>
