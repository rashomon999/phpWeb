<?php 
// Verificar si el formulario ha sido enviado
if ($_POST) {
    // Verificar si se ha enviado la opción del método
    $respuestaMetCarro = isset($_POST['metodoCarro']) ? $_POST['metodoCarro'] : '';

    // Comparar la respuesta seleccionada con la opción correcta
    $respuesta = ($respuestaMetCarro === 'toString()') ? "Opción correcta" : "Opción incorrecta";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta sobre Carro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="seccion izquierda">
        <form action="index.php" method="POST" onsubmit="handleSubmit (event)">
            <li>Pregunta: ¿Qué método tengo que hacer si quiero imprimir la información de la clase Carro? <br><br>
                <input type="radio" name="metodoCarro" value="toString()" id="metodoCarro_toString">toString() 
                <input style="margin-left: 50px;" type="radio" name="metodoCarro" value="info()" id="metodoCarro_info">info() <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
            </li>

            <li>Pregunta 2
                <input type="radio">

            </li>
        </form>

        <?php 
        // Mostrar la respuesta después de enviar el formulario
        if (isset($respuesta)) {
            echo "<p>$respuesta</p>";
        }
        ?>
    </div>
    
    <div class="seccion derecha"></div>
</body>
</html>
