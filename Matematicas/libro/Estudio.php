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
    <link rel="stylesheet" href="Estudio.css">
    <style>
        .imagen {
            max-width: 100%;
            height: auto;
        }

          .seccion {
    width: 50%; /* El 50% del ancho de la página menos el margen izquierdo */
    padding: 20px; /* importante este padding*/
    box-sizing: border-box;
    height: 170vh;
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
    <form action="./Estudio.php" method="POST" onsubmit="handleSubmit(event)">
        <span><h4>2.punto: </h4></span>
        <img src="..\img\Captura de pantalla 2024-07-03 174710.png" alt="">
        <img src="..\..\img\Captura de pantalla 2024-07-03 174606.png" alt="">
        <img src="..\..\img\Captura de pantalla 2024-07-03 175007.png" alt="" width="600"> <br>
        recordemos: <br>
        <img src="..\..\img\Captura de pantalla 2024-07-03 175140.png" alt=""> <br><br>
        <span><h4>Decimos que converge a 0</h4></span>
    </form>
</div>

<div class="seccion derecha">
    <form action="./Estudio.php" method="POST" onsubmit="handleSubmit(event)"> <br> 
        <img src="..\..\img\Captura de pantalla 2024-07-04 071934.png" alt=""> <br>
        <img src="..\..\img\Captura de pantalla 2024-07-04 072905.png" alt="" width="650">
        <img src="..\..\img\Captura de pantalla 2024-07-04 073028.png" alt=""> <br><br>
        <img src="..\..\img\Captura de pantalla 2024-07-04 073116.png" alt="" width="650"> <br><br>
        <span><h4>Decimos que diverge</h4></span>
    </form>
</div>

<div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Tercero.php"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
    </div>
    
</body>
</html>
