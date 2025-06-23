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
    <link rel="stylesheet" href="Cuarto.css">
    <style>
        .imagen {
            max-width: 100%;
            height: auto;
        }

         .seccion {
    width: 50%; /* El 50% del ancho de la página menos el margen izquierdo */
    padding: 20px; /* importante este padding*/
    box-sizing: border-box;
    height: 290vh;
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
    <form action="./Cuarto.php" method="POST" onsubmit="handleSubmit(event)">
       <img src="..\..\img\Captura de pantalla 2024-07-04 104403.png" alt="">
       <img src="..\..\img\Captura de pantalla 2024-07-04 105005.png" alt="" >
       <img src="..\..\img\Captura de pantalla 2024-07-04 105342.png" alt="" width="600">
       <img src="..\..\img\Captura de pantalla 2024-07-04 105142.png" alt=""> <br><br>
       <img src="..\..\img\Captura de pantalla 2024-07-04 110515.png" alt="">
       <img src="..\..\img\Captura de pantalla 2024-07-04 113111.png" alt="" width="600">
       <img src="..\..\img\Captura de pantalla 2024-07-04 113130.png" alt="" width="600">
       <img src="..\..\img\Captura de pantalla 2024-07-04 114634.png" alt="" width="600"> <br>
       <span><h4>limite es 1.5</h4></span>
       
    </form>
</div>

<div class="seccion derecha">
    <form action="./Cuarto.php" method="POST" onsubmit="handleSubmit(event)"> <br> 
        La clave es: <br>
        plt.yscale('symlog')  # Escala logarítmica simétrica en el eje y <br><br><br>
        <img src="..\..\img\Captura de pantalla 2024-07-04 115941.png" alt=""> <br><br>
        <img src="..\..\img\Captura de pantalla 2024-07-04 122842.png" alt="" ><br><br>
        <img src="..\..\img\Captura de pantalla 2024-07-04 122921.png" alt="" width="600"><br><br>
        <img src="..\..\img\Captura de pantalla 2024-07-04 122947.png" alt="" width="600"> <br><br>
        <img src="..\..\img\Captura de pantalla 2024-07-04 123002.png" alt="" width="600" > <br><br>
        Otra manera de verlo: <br> <br>
        <img src="..\..\img\Captura de pantalla 2024-07-04 124419.png" alt="" width="600">
    
    </form>
</div>

<div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Quinto.php"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
    </div>
    
</body>
</html>
