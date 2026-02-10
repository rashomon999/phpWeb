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
    <div class="book-container">
        
        <!-- Página izquierda -->
        <div class="page">
            <h2>📘 Teoría y Cuestionarios</h2>

            <a class="btn" href="./MarcoTeorico/Menu.php">Marco Teórico</a>
            <a class="btn" href="./cuestionario_Marco/Menu.php">Cuestionario (Marco Teórico)</a>
            <a class="btn" href="./videos/Menu.php">Videos</a>
            <a class="btn" href="./cuestionario_videos/Menu.php">Cuestionario (Videos)</a>
            <a class="btn" href="./Clasificacion/Menu.php">Clasificación de Activos y Pasivos</a>
            <a class="btn" href="./ClasificacionCuentas/index.php">Clasificación de Cuentas</a>
        </div>

        <div class="divider"></div>

        <!-- Página derecha -->
        <div class="page">
            <h2>📗 Talleres y Costos</h2>

            <a class="btn" href="./taller_0/index.php">Taller 0 – Cuentas</a>
            <a class="btn" href="./taller_1/index.php">Taller 1 – Cuentas</a>
            <a class="btn" href="./cuestionarioTaller_1/index.php">Cuestionario Taller 1</a>
            <a class="btn" href="./costos/index.php">Costos</a>
            <a class="btn" href="./costos_cuestionario/index.php">Cuestionario de Costos</a>
            <a class="btn" href="./margen_contribucion/index.php">Margen de Contribución</a>
            <a class="btn" href="./Cuestionario_margen_contribucion/index.php">Cuestionario Margen de Contribución</a>
              
        </div>

    </div>
</body>
</html>
