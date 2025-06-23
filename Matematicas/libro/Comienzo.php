<?php
// Variable para la primera pregunta
$verificar_1 = '';
$verificar_2 = '';
// Procesar el formulario cuando se envía
if ($_POST) {
    // Verificar la respuesta de la primera pregunta
    $primero = isset($_POST['primero']) ? $_POST['primero'] : '';
  
    if ($primero === 'diverge') {
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
    <link rel="stylesheet" href="Comienzo.css">
    <style>
        .imagen {
            max-width: 100%;
            height: auto;
        }

           .seccion {
    width: 50%; /* El 50% del ancho de la página menos el margen izquierdo */
    padding: 20px; /* importante este padding*/
    box-sizing: border-box;
    height: 370vh;
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
    <form action="./Comienzo.php" method="POST" onsubmit="handleSubmit(event)">
        Entendiendo la desigualdad:
        <img src="..\..\img\Captura de pantalla 2024-06-29 101540.png" alt=""><br>
        -Recordar: El calculo diferencial e integral es el lenguaje del cambio.
        <br>
        -Cambio: dada una realcion entre dos cantidades que le pasa a una cantidad cuando
        la otra varia. Que sucede con y cuendo x varia.
        <br>
        -Dentro de los temas de interes del estudio del cambio se tienen los problemas de aproximació  <br>
        <br>
        <img src="..\..\img\Captura de pantalla 2024-06-29 113815.png" alt=""><br>
        <img src="..\..\img\Captura de pantalla 2024-06-29 114029.png" alt="" width="500"><br>
        |an-L|< E significa tambien: 
        𝑎𝑁+1, 𝑎𝑁+2, 𝑎𝑁+3, ... estan en el intervalo (𝐿 − 𝜖, 𝐿 + 𝜖) <br>
        (lo que es igual a, todos los numeros evaluados mayores a un n estan en el intervalo...) <br>
        Como se llego de esto |an-L|< E   a    -E < an-L < E:  <br>
        2 casos: <br>
        1: an-L < E. <br>
        2: <br>
        <img src="..\..\img\Captura de pantalla 2024-07-01 081641.png" alt=""> <br>
        Nota: <br>
        <img src="..\..\img\Captura de pantalla 2024-07-01 083109.png" alt=""> <br>
        Ejemplo: <br>
        <img src="..\..\img\Captura de pantalla 2024-06-29 120734.png" alt=""><br><br>
        invertimos ambos lados de la desigualdad(al invertir el sentido de la desigualdad se invierte) <br>
        <img src="..\..\img\Captura de pantalla 2024-07-01 100137.png" alt=""> <br><br>

       
    </form>
</div>
<div class="seccion derecha">
    <form action="./Comienzo.php" method="POST" onsubmit="handleSubmit(event)">
            <img src="..\..\img\Captura de pantalla 2024-07-01 114311.png" alt="" width="600"> <br>
            Ejemplo2 <br>
            <img src="..\..\img\Captura de pantalla 2024-07-01 115002.png" alt=""> <br>
            aqui no podemos realizar una simple inversion para llegar como se hizo en el ejemplo anterior, a n>1/E, dado que n esta en el exponente. <br>
            <img src="..\..\img\Captura de pantalla 2024-07-03 083905.png" alt="">
            <img src="..\..\img\Captura de pantalla 2024-07-03 084131.png" alt=""> <br>
            <span>Propiedades de los limites: </span> <br>
            <img src="..\..\img\Captura de pantalla 2024-07-03 115842.png" alt="" width="600">
            <img src="..\..\img\Captura de pantalla 2024-07-03 120221.png" alt=""> <br>
            <span>El denominador en una fracción no puede ser cero porque la división entre cero no está definida.</span>
            <img src="..\..\img\Captura de pantalla 2024-07-03 100109.png" alt=""> <br><br>
            *Si el limite de la secuencia no existe, decimos que: <br><br>
            <input style="margin:10px;" value="diverge" type="radio" name="primero" id="primero1">diverge. <br>
            <input style="margin:10px;" value="converge" type="radio" name="primero" id="primero2">converge.<br>
            <input style="margin:10px;" value="No se sabe" type="radio" name="primero" id="primero3">No se sabe.<br>
            <button class="btn btn-primary" type="submit">Enviar</button>
            <?php echo isset($verificar_1) ? $verificar_1 : ''; ?> 
            <br>
            <img src="..\..\img\Captura de pantalla 2024-07-03 101543.png" alt="">
            <img src="..\..\img\Captura de pantalla 2024-07-03 101638.png" alt=""> <br> <br>
            Ejemplo: <br>
            <img src="..\..\img\Captura de pantalla 2024-07-03 120412.png" alt="">            
            
    </form>
</div>
<div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Limites.php"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
        </div>
</body>
</html>
