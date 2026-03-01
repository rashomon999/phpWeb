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
        <a class="btn" href=".\Componentes\index.php">Componentes</a>
        <a class="btn" href=".\cuestionarioComponentes\index.php">cuestionario Componentes</a>
        <a class="btn" href=".\Deployment\index.php">Deployment</a>
        <a class="btn" href=".\DeploymentCuestionario\index.php">cuestionario Deployment</a>
        <a class="btn" href=".\CasosDeUso\index.php">Casos de uso</a>
        <a class="btn" href=".\CasosDeUsoCuestionario\index.php">cuestionario Deployment</a>

    </div>
</body>
</html>
