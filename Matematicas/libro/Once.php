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
    <link rel="stylesheet" href="Once.css">
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
    <form action="./Once.php" method="POST" onsubmit="handleSubmit(event)">
        <img src="..\..\img\Captura de pantalla 2024-07-10 090026.png" alt="">
       <img src="..\..\img\Captura de pantalla 2024-07-10 085859.png" alt="" width="600">
       <img src="..\..\img\Captura de pantalla 2024-07-10 085910.png" alt="" width="600">
       <img src="..\..\img\Captura de pantalla 2024-07-10 085958.png" alt="">
       
    </form>
</div>

<div class="seccion derecha">
    <form action="./Once.php" method="POST" onsubmit="handleSubmit(event)"> 
            <span><h4>Problema diferente: </h4></span><br>
            <span><h5>ChatGpt y Colab arrojaban valores distintos, toco hacer los calculos a mano con ayuda de la calculadora del computador, para hallar que colab estaba en lo correcto, a partir de 8 termino la sucesion toma el valor fijo de 0.5</h5></span> <br>
            <span><h5>Tambien toco que utilizar .10f porque las operaciones daban valores incorrectos</h5></span>
           <br><br>
            <img src="..\..\img\Captura de pantalla 2024-07-10 104616.png" alt="">
            <img src="..\..\img\Captura de pantalla 2024-07-10 104641.png" alt="">
            <img src="..\..img\Captura de pantalla 2024-07-10 104732.png" alt="">
            <img src="..\..\img\Captura de pantalla 2024-07-10 104743.png" alt="">
    </form>
</div>

<div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Doce.php"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
    </div>
    
</body>
</html>
