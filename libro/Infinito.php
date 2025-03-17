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
    <link rel="stylesheet" href="Infinito.css">
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
    <form action="./Infinito.php" method="POST" onsubmit="handleSubmit(event)">
        <img src="..\img\Captura de pantalla 2024-07-03 144825.png" alt=""> <br><br>
        <img src="..\img\Captura de pantalla 2024-07-03 144922.png" alt=""> <br><br>
        <span><h3>Ejercicios:</h3> </span> <br>
        <span><h4>1. Punto</h4></span> <br><br>
        <img src="..\img\Captura de pantalla 2024-07-03 151156.png" alt=""> <br><br>
        <img src="..\img\Captura de pantalla 2024-07-03 151612.png" alt=""> <br><br>
    </form>
</div>

<div class="seccion derecha">
    <form action="./Infinito.php" method="POST" onsubmit="handleSubmit(event)">
    <img src="..\img\Captura de pantalla 2024-07-03 151347.png" alt="">
    <img src="..\img\Captura de pantalla 2024-07-03 151829.png" alt=""> <br>
    <span><h4>Un poco sobre codigo antes de continuar: </h4></span> <br>
    <img src="..\img\Captura de pantalla 2024-07-03 164932.png" alt="">
    <img src="..\img\Captura de pantalla 2024-07-03 165231.png" alt="">
    <br> 
    Al ser continua, observese como 2n es diferente (no maker ni style)
    <br>
    sub.plot es solo para ver las 4 funciones en un mismo marco:
    <img src="..\img\Captura de pantalla 2024-07-03 165357.png" alt="">
    <img src="..\img\Captura de pantalla 2024-07-03 170112.png" alt="">

    </form>
</div>

<div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Estudio.php"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
    </div>
    
</body>
</html>
