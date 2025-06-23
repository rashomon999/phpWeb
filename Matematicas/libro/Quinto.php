<?php
// Variable para la primera pregunta
$verificar_1 = '';
$verificar_2 = '';
// Procesar el formulario cuando se envía
if ($_POST) {
    // Verificar la respuesta de la primera pregunta
    $primero = isset($_POST['primero']) ? $_POST['primero'] : '';
  
    if ($primero === 'verdad') {
        $verificar_1 = "correcto";
    } elseif ($primero === '') {
        $verificar_1 = '';
    } else {
        $verificar_1 = "incorrecto";
    }

    // Verificar la respuesta de la segunda pregunta
    
    $segundo = isset($_POST['segundo']) ? $_POST['segundo'] : '';
  
    if ($segundo === 'verdad') {
        $verificar_2 = "correcto";
    } elseif ($segundo === '') {
        $verificar_2 = '';
    } else {
        $verificar_2 = "incorrecto";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre simplificación de expresiones matemáticas</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="Quinto.css">
    <style>
        .imagen {
            max-width: 100%;
            height: auto;
        }

         .seccion {
    width: 50%; /* El 50% del ancho de la página menos el margen izquierdo */
    padding: 20px; /* importante este padding*/
    box-sizing: border-box;
    height: 210vh;
    }
    </style>
    <script>
        function handleSubmit(event) {
            event.preventDefault();

            const formData = new FormData(event.target);

            fetch(event.target.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(html => {
                document.body.innerHTML = html;
            })
            .catch(error => {
                console.error('Error al enviar el formulario:', error);
            });
        }
    </script>
</head>
<body>
<div class="seccion izquierda">
    <form action="./Quinto.php" method="POST" onsubmit="handleSubmit(event)">
        <img src="..\..\img\Captura de pantalla 2024-07-05 075510.png" alt="" >
        <img src="..\..\img\Captura de pantalla 2024-07-05 080913.png" alt="" width="600">
        <img src="..\..\img\Captura de pantalla 2024-07-05 080933.png" alt="" width="600">
        <img src="..\..\img\Captura de pantalla 2024-07-05 080951.png" alt="" width="600">
        <img src="..\..\img\Captura de pantalla 2024-07-05 081031.png" alt=""> <br><br>
        Se puede simplificar una fraccion elevando al cuadrado? <br><br>
        <input type="radio" value="falso" name="primero" id="primero1"> Verdadero
        <input type="radio" value="verdad" name="primero" id="primero2">Falso
        <br><br>
        <button class="btn btn-primary" type="submit">Enviar</button>
        <?php echo isset($verificar_1) ? $verificar_1 : ''; ?> 
    </form>
</div>

<div class="seccion derecha">
    <form action="./Quinto.php" method="POST" onsubmit="handleSubmit(event)"> 
        <img src="..\..\img\Captura de pantalla 2024-07-05 081533.png" alt="">
        <img src="..\..\img\Captura de pantalla 2024-07-05 082841.png" alt="" width="600">
        <img src="..\..\img\Captura de pantalla 2024-07-05 082859.png" alt="" width="600">
        <img src="..\..\img\Captura de pantalla 2024-07-05 083249.png" alt="" width="600">
        <img src="..\..\img\Captura de pantalla 2024-07-05 083259.png" alt="" width="600">
    </form>
</div>

<div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Sexto.php"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
    </div>
    
</body>
</html>
