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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="Dieciseis.css">
    <style>
        .imagen {
            max-width: 100%;
            height: auto;
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
    <form action="./Dieciseis.php" method="POST" onsubmit="handleSubmit(event)">
        <img src="..\img\Captura de pantalla 2024-07-24 092142.png" alt="">
        <img src="..\img\Captura de pantalla 2024-07-24 092155.png" alt="">
    </form>
</div>

<div class="seccion derecha">
    <form action="./Dieciseis.php" method="POST" onsubmit="handleSubmit(event)"> 
        <img src="..\img\Captura de pantalla 2024-07-24 100048.png" alt="">
        <img src="..\img\Captura de pantalla 2024-07-24 100111.png" alt=""  width="600">
        <img src="..\img\Captura de pantalla 2024-07-24 100127.png" alt="" width="600">
    </form>
</div>

<div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Diecisiete.php";
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
    </div>
    
</body>
</html>
