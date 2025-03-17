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
    <link rel="stylesheet" href="Doce.css">
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
    <form action="./Doce.php" method="POST" onsubmit="handleSubmit(event)">
       <span><h5>Notas: Se debe tener en cuenta los errores con float que tiene python, pero tambien que se debe poner atencion al indice adecuado, porque muchas veces el arreglo es de por ejemplo de 1,100. por lo tanto para imprimir n=10 tenemos que, para una funcion a_n, imprimir a_n[9]</h5></span>
       <br>
       <span><h5>Se va a mostrar solo un codigo, resaltar en general el uso de comandos como plt.ylim(0.95, 1.01), que hacen posible en estos casos, ajustar el intervalo de interes para mejor visualizacion, dado que E por lo general tomara E=0.001</h5></span>
       <img src="..\img\Captura de pantalla 2024-07-11 110427.png" alt="" >
       <img src="..\img\Captura de pantalla 2024-07-11 110505.png" alt="" width="600">
       <img src="..\img\Captura de pantalla 2024-07-11 110532.png" alt="" width="600">
       <img src="..\img\Captura de pantalla 2024-07-11 110542.png" alt="" width="600">
       <img src="..\img\Captura de pantalla 2024-07-11 110658.png" alt="" width="600">
       <img src="..\img\Captura de pantalla 2024-07-11 110712.png" alt="" width="600">
    </form>
</div>

<div class="seccion derecha">
    <form action="./Doce.php" method="POST" onsubmit="handleSubmit(event)"> 
        <span><h5>Nota importante: Como log(0.98) es en relidad un numero negativo, entonces al pasar a dividir cambia la direccion de la igualdad</h5></span> <br><br>
        <img src="..\img\Captura de pantalla 2024-07-11 112141.png" alt="" width="600">
        <img src="..\img\Captura de pantalla 2024-07-11 112157.png" alt="" width="600"> <br><br>
        <img src="..\img\Captura de pantalla 2024-07-11 115034.png" alt="" width="600"> <br><br>
        <img src="..\img\Captura de pantalla 2024-07-11 115630.png" alt="" width="600">
        
    </form>
</div>

<div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Trece.php";
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
    </div>
    
</body>
</html>
