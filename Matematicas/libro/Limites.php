<?php
// Variable para la primera pregunta
$verificar_1 = '';
$verificar_2 = '';
// Procesar el formulario cuando se envía
if ($_POST) {
    // Verificar la respuesta de la primera pregunta
    $primero = isset($_POST['primero']) ? $_POST['primero'] : '';
  
    if ($primero === 'verdad1') {
        $verificar_1 = "correcto";
    } elseif ($primero === '') {
        $verificar_1 = '';
    } else {
        $verificar_1 = "incorrecto";
    }

    // Verificar la respuesta de la segunda pregunta
    $segundo = isset($_POST['segundo']) ? $_POST['segundo'] : '';
  
    if ($segundo === 'verdad2') {
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
    <link rel="stylesheet" href="Limites.css">
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
    <form action="./Limites.php" method="POST" onsubmit="handleSubmit(event)">
        <span>Profundizacion N cuando la funcion es divergente: </span> <br>
        <img src="..\..\img\Captura de pantalla 2024-07-03 105452.png" alt="">
        <img src="..\..\img\Captura de pantalla 2024-07-03 105923.png" alt=""> <br>
        Una secuencia {𝑎𝑛} se dice que diverge hacia el infinito si para cualquier número real 𝑀 existe un entero 𝑁 tal que: <br>
        <input style="margin:10px;" value="verdad1" type="radio" name="primero" id="primero1">𝑎𝑛 > 𝑀 siempre que 𝑛 > N <br>
        <input style="margin:10px;" value="falso1" type="radio" name="primero" id="primero2">𝑎𝑛 > 𝑀 siempre que 𝑛 < N.<br>
        <input style="margin:10px;" value="falso1" type="radio" name="primero" id="primero3">No se sabe.<br>
        <button class="btn btn-primary" type="submit">Enviar</button>
        <?php echo isset($verificar_1) ? $verificar_1 : ''; ?> 
        <br>
        <br>
        <br>
        Una secuencia {𝑎𝑛} se dice que diverge hacia el infinito si para cualquier número real 𝑀 existe un entero 𝑁 tal que: <br>
        <input style="margin:10px;" value="falso2" type="radio" name="segundo" id="segundo1">𝑎𝑛 > 𝑀 siempre que 𝑛 > N <br>
        <input style="margin:10px;" value="verdad2" type="radio" name="segundo" id="segundo2">𝑎𝑛 < 𝑀 siempre que 𝑛 > N.<br>
        <input style="margin:10px;" value="falso2" type="radio" name="segundo" id="segundo3">No se sabe.<br>
        <button class="btn btn-primary" type="submit">Enviar</button>
        <?php echo isset($verificar_2) ? $verificar_2 : ''; ?> 
        <br>
        <img src="..\..\img\Captura de pantalla 2024-07-03 120644.png" alt="" width="650">
        <img src="..\..\img\Captura de pantalla 2024-07-03 123118.png" alt="">
    </form>
</div>
<div class="seccion derecha">
    <form action="./Limites.php" method="POST" onsubmit="handleSubmit(event)">
        <span class="titulo_1"><h2>Limites al infinito: </h2></span><br>
        <img src="..\..\img\Captura de pantalla 2024-07-03 131809.png" alt="">
        <img src="..\..\img\Captura de pantalla 2024-07-03 131841.png" alt=""> <br> <br>
        <img src="..\..\img\Captura de pantalla 2024-07-03 143748.png" alt=""> <br>
        <img src="..\..\img\Captura de pantalla 2024-07-03 144136.png" alt="">
    </form>
</div>
<div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Infinito.php"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
        </div>
</body>
</html>
