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
    <link rel="stylesheet" href="Decimo.css">
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
    <form action="./Decimo.php" method="POST" onsubmit="handleSubmit(event)">
       <img src="..\img\Captura de pantalla 2024-07-10 080000.png" alt="">
       <img src="..\img\Captura de pantalla 2024-07-10 080013.png" alt="" width="480">
       <img src="..\img\Captura de pantalla 2024-07-10 080049.png" alt=""> <br><br>
       <hr> <br>
       <img src="..\img\Captura de pantalla 2024-07-10 081724.png" alt=""> <br><br>
       <img src="..\img\Captura de pantalla 2024-07-10 082000.png" alt="">
    </form>
</div>

<div class="seccion derecha">
    <form action="./Decimo.php" method="POST" onsubmit="handleSubmit(event)"> 
        <img src="..\img\Captura de pantalla 2024-07-10 082009.png" alt="">
        <img src="..\img\Captura de pantalla 2024-07-10 082135.png" alt="">
        <img src="..\img\Captura de pantalla 2024-07-10 082221.png" alt=""> <br>
        Antes de seguir es importante notar las secuencias geometricas: <br>
        <img src="..\img\Captura de pantalla 2024-07-10 084602.png" alt="">
        <img src="..\img\Captura de pantalla 2024-07-10 084833.png" alt="">

    </form>
</div>

<div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Once.php"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
    </div>
    
</body>
</html>
