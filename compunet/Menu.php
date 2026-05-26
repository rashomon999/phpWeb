<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Índice</title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f4f6f8;
    }

    .container {
        display: flex;
        height: 100vh;
    }

    /* 📖 cada mitad de la pantalla */
    .col {
        flex: 1;
        padding: 30px;
        overflow-y: auto;
    }

    .left {
        background: #ffffff;
        border-right: 2px solid #ddd;
    }

    .right {
        background: #f9fafb;
    }

    h1 {
        text-align: center;
        margin-top: 0;
    }

    h2 {
        border-bottom: 1px solid #ddd;
        padding-bottom: 5px;
    }

    .btn {
        display: block;
        margin: 10px 0;
        padding: 10px;
        background: #2563eb;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        text-align: center;
    }

    .btn:hover {
        background: #1e40af;
    }
</style>
</head>

<body>

<div class="container">

    <!-- 📚 LADO IZQUIERDO -->
    <div class="col left">
        <h1>📚 Semanas</h1>

        <h2>Contenido</h2>
        <a class="btn" href="./semana_1/Menu.php">Semana 1</a>
        <a class="btn" href="./semana_2/Menu.php">Semana 2</a>
        <a class="btn" href="./semana_3/Menu.php">Semana 3</a>

        <h2>Evaluaciones</h2>
        <a class="btn" href="./parcial_2/Menu.php">Parcial 2</a>

        <h2>Otros</h2>
        <a class="btn" href="./multihilos/Menu.php">Multihilos</a>
    </div>

    <!-- 📖 LADO DERECHO -->
    <div class="col right">
        <h1>⚙️ Tecnologías</h1>

        <h2>Backend</h2>
        <a class="btn" href="./Spring/Menu.php">Spring</a>
        <a class="btn" href="./SpringJPA/index.php">Spring JPA</a>
        <a class="btn" href="./REST/index.php">REST</a>
        <a class="btn" href="./MVC/index.php">MVC</a>
        <a class="btn" href="./Thymeleaf/index.php">Thymeleaf</a>

        Frontend
        <a class="btn" href="./JAVASCRIPT/index.php">JavaScript</a>
        <a class="btn" href="./REACT/index.php">REACT</a>
        <a class="btn" href="./AXIOS/index.php">AXIOS</a>
        <a class="btn" href="./CRUD/index.php">CRUD</a>

    </div>

</div>

</body>
</html>