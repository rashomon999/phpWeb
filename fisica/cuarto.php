<?php
 
 
$respuesta_1 = ''; $respuesta_2 = ''; $respuesta_3 = ''; $respuesta_4 = ''; $respuesta_5 = ''; 
$respuesta_6 = ''; $respuesta_7 = ''; $respuesta_8 = ''; $respuesta_9 = '';  $respuesta_10 = '';

$pregunta_a13 = "";
$pregunta_a14 = "";
$pregunta_a15 = "";
$pregunta_a16 = "";
$pregunta_a17 = "";

$pregunta_a18 = "";
$pregunta_a19 = "";

$pregunta_a20 = "";
$pregunta_a21 = "";
$pregunta_a22 = "";
$pregunta_a23 = "";

$pregunta_a24 = "";
$pregunta_a25 = "";

$pregunta_a26 = "";
$pregunta_a27 = "";

$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = ''; $verificar_4 = ''; $verificar_5 = ''; 
$verificar_6 = ''; $verificar_7 = '';  $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = ''; 
 

$verificar_a13 = '';
$verificar_a14 = '';
$verificar_a15 = '';
$verificar_a16 = '';
$verificar_a17 = '';

$verificar_a18 = '';
$verificar_a19 = '';

$verificar_a20 = '';
$verificar_a21 = '';
$verificar_a22 = '';
$verificar_a23 = '';

$verificar_a24 = '';
$verificar_a25 = '';

$verificar_a26 = '';
$verificar_a27 = '';


if ($_POST) {
   // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'dividen') {
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === '12.22375') {
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

      // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '20.79625') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === '420') {
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }



   $pregunta_a13 = isset($_POST['a13']) ? $_POST['a13'] : '';
if ($pregunta_a13 === 'descripciones') {
    $verificar_a13 = "correcto";
} elseif ($pregunta_a13 === '') {
    $verificar_a13 = "";
} else {
    $verificar_a13 = "incorrecto";
}


$pregunta_a14 = isset($_POST['a14']) ? $_POST['a14'] : '';
if ($pregunta_a14 === 'cantidades') {
    $verificar_a14 = "correcto";
} elseif ($pregunta_a14 === '') {
    $verificar_a14 = "";
} else {
    $verificar_a14 = "incorrecto";
}

$pregunta_a15 = isset($_POST['a15']) ? $_POST['a15'] : '';
if ($pregunta_a15 === 'magnitud') {
    $verificar_a15 = "correcto";
} elseif ($pregunta_a15 === '') {
    $verificar_a15 = "";
} else {
    $verificar_a15 = "incorrecto";
}

$pregunta_a16 = isset($_POST['a16']) ? $_POST['a16'] : '';
if ($pregunta_a16 === 'direccion') {
    $verificar_a16 = "correcto";
} elseif ($pregunta_a16 === '') {
    $verificar_a16 = "";
} else {
    $verificar_a16 = "incorrecto";
}

$pregunta_a17 = isset($_POST['a17']) ? $_POST['a17'] : '';
if ($pregunta_a17 === 'escalar') {
    $verificar_a17 = "correcto";
} elseif ($pregunta_a17 === '') {
    $verificar_a17 = "";
} else {
    $verificar_a17 = "incorrecto";
}


$pregunta_a18 = isset($_POST['a18']) ? $_POST['a18'] : '';
if ($pregunta_a18 === 'inversas') {
    $verificar_a18 = "correcto";
} elseif ($pregunta_a18 === '') {
    $verificar_a18 = "";
} else {
    $verificar_a18 = "incorrecto";
}

$pregunta_a19 = isset($_POST['a19']) ? $_POST['a19'] : '';
if ($pregunta_a19 === 'angulos') {
    $verificar_a19 = "correcto";
} elseif ($pregunta_a19 === '') {
    $verificar_a19 = "";
} else {
    $verificar_a19 = "incorrecto";
}

$pregunta_a20 = isset($_POST['a20']) ? $_POST['a20'] : '';
if ($pregunta_a20 === 'N=0') {
    $verificar_a20 = "correcto";
} elseif ($pregunta_a20 === '') {
    $verificar_a20 = "";
} else {
    $verificar_a20 = "incorrecto";
}

$pregunta_a21 = isset($_POST['a21']) ? $_POST['a21'] : '';
if ($pregunta_a21 === 'W=270') {
    $verificar_a21 = "correcto";
} elseif ($pregunta_a21 === '') {
    $verificar_a21 = "";
} else {
    $verificar_a21 = "incorrecto";
}


$pregunta_a22 = isset($_POST['a22']) ? $_POST['a22'] : '';
if ($pregunta_a22 === 'E=90') {
    $verificar_a22 = "correcto";
} elseif ($pregunta_a22 === '') {
    $verificar_a22 = "";
} else {
    $verificar_a22 = "incorrecto";
}


$pregunta_a23 = isset($_POST['a23']) ? $_POST['a23'] : '';
if ($pregunta_a23 === 'S=180') {
    $verificar_a23 = "correcto";
} elseif ($pregunta_a23 === '') {
    $verificar_a23 = "";
} else {
    $verificar_a23 = "incorrecto";
}

$pregunta_a24 = isset($_POST['a24']) ? $_POST['a24'] : '';
if ($pregunta_a24 === 'resta') {
    $verificar_a24 = "correcto";
} elseif ($pregunta_a24 === '') {
    $verificar_a24 = "";
} else {
    $verificar_a24 = "incorrecto";
}

$pregunta_a25 = isset($_POST['a25']) ? $_POST['a25'] : '';
if ($pregunta_a25 === '45') {
    $verificar_a25 = "correcto";
} elseif ($pregunta_a25 === '') {
    $verificar_a25 = "";
} else {
    $verificar_a25 = "incorrecto";
}


$pregunta_a26 = isset($_POST['a26']) ? $_POST['a26'] : '';
if ($pregunta_a26 === 'componentes') {
    $verificar_a26 = "correcto";
} elseif ($pregunta_a26 === '') {
    $verificar_a26 = "";
} else {
    $verificar_a26 = "incorrecto";
}

$pregunta_a27 = isset($_POST['a27']) ? $_POST['a27'] : '';
if ($pregunta_a27 === '135') {
    $verificar_a27 = "correcto";
} elseif ($pregunta_a27 === '') {
    $verificar_a27 = "";
} else {
    $verificar_a27 = "incorrecto";
}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Unidades</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <style>
        .input-table td {
            padding: 10px;
            text-align: center;
        }
        .input-cell input {
            width: 100%;
        }
        .error-message {
            color: red;
            font-size: 0.9em;
        }
        .success-message {
            color: green;
            font-size: 0.9em;
        }
    </style>

<script>



function mostrarMensaje() {
    var mensaje = document.getElementById('mensaje');
    mensaje.style.display = 'block';
}

function ocultarMensaje() {
    var mensaje = document.getElementById('mensaje');
    mensaje.style.display = 'none';
}


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

        // Asegúrate de que MathJax procese el nuevo contenido
        if (window.MathJax) {
            MathJax.typeset();
        }
  
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}


</script>
</head>
<body>
<div class="seccion izquierda">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)">
    <p>Ahora dividimos la segunda ecuación entre la primera, obteniendo:</p>
<div class="formula">
    V₂ / V₁ = (r₂ / r₁)²
</div>

<p>Como puede ver, a <code>h</code> no se le puso subíndice porque permaneció constante en el problema; se canceló en la división.</p>

<p>El problema expresa que el cambio en el radio está dado por:</p>
<div class="formula">
    r₂ / r₁ = 2.73
</div>

<p>Sustituimos <code>r₂</code> en nuestra relación:</p>
<div class="formula">
    V₂ / V₁ = (2.73)² = 7.4529
</div>

<p>O bien:</p>
<div class="formula">
    V₂ / V₁ = 7.45
</div>

    <p>donde redondeamos la solución a tres cifras significativas que tenía la cantidad dada en el problema. Así, la respuesta es que el volumen del cilindro aumenta por un factor de <code>7.45</code> cuando incrementa su radio por un factor de <code>2.73</code>.</p>
    <hr>



    Entonces, se escribe la formula 2 veces, se asignan subindices y se
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>">
    las formulas para eliminar o cancelar las variables constantes cuando se comparan las dos situaciones.
    <br><br>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button>  <br>
    <span><?php echo $verificar_1; ?></span>
     <hr>




    <br>
    Los vectores son 
    <input type="text"  id="" size="10"  name="a13" value="<?php echo ($pregunta_a13); ?>"> 
    matemáticas de 
    <input type="text"  id="" size="10"  name="a14" value="<?php echo ($pregunta_a14); ?>">  
    que tienen tanto 
    <input type="text"  id="" size="10"  name="a15" value="<?php echo ($pregunta_a15); ?>"> 
    como
    <input type="text"  id="" size="10"  name="a16" value="<?php echo ($pregunta_a16); ?>"> 
    <br><br>
    <button type="submit">enviar</button>
    <?php echo $verificar_a13?>
    <?php echo $verificar_a14?>
    <?php echo $verificar_a15?>
    <?php echo $verificar_a16?>
    <br>
    La magnitud de un vector es un número no negativo, combinado a menudo con una
    unidad física. <br><br>

    Una cantidad que se puede representar sin dar una dirección se llama
    <input type="text"  id="" size="10"  name="a17" value="<?php echo ($pregunta_a17); ?>">.
    Una cantidad 
    <input type="text"  id="" size="10"   value="<?php echo ($pregunta_a17); ?>" readonly>
    tiene sólo magnitud y posiblemente una unidad física. Ejemplos
    de cantidades 
    <input type="text"  id="" size="10"   value="<?php echo ($pregunta_a17); ?>" readonly>
    son el tiempo y la temperatura. 
    <br><br>
    <button type="submit">enviar</button>
    <?php echo $verificar_a17?>
</form>
</div>
<div class="seccion derecha">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)">
    Las funciones trigonométricas 
    <input type="text"  id="" size="10"  name="a18" value="<?php echo ($pregunta_a18); ?>">.
    , como \( \sin^{-1} \) (arcoseno), \( \cos^{-1} \) (arcocoseno) y \( \tan^{-1} \) (arctangente),
     se utilizan para encontrar 
     <input type="text"  id="" size="10"  name="a19" value="<?php echo ($pregunta_a19); ?>">
     a partir de las razones trigonométricas.
    <br><br>
    <button type="submit">enviar</button>
    <?php echo $verificar_a18?>
    <?php echo $verificar_a19?>
    <hr>
    <br>
    <br>
     Ingresa los puntos cardinales con sus direcciones: <br><br>
    <input type="text" name="a20" id="" size="5" value="<?php echo ($pregunta_a20); ?>" style="display: block; margin: 0 auto;" >

    <div class="container" style="display: flex; justify-content: center; align-items: center;  ">
    <input type="text" name="a21" id="" size="5" value="<?php echo ($pregunta_a21); ?>">
    <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <rect x="40" y="0" width="20" height="100" fill="black"/>
        <rect x="0" y="40" width="100" height="20" fill="black"/>
    </svg>
    <input type="text" name="a22" id="" size="5" value="<?php echo ($pregunta_a22); ?>" >
    </div>
    <input type="text" name="a23" id="" size="5" value="<?php echo ($pregunta_a23); ?>" style="display: block; margin: 0 auto;"  >

    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_a20?>
    <?php echo $verificar_a21?>
    <?php echo $verificar_a22?>
    <?php echo $verificar_a23?>
    <br><br>
    Para obtener el suroeste se 
    <input type="text" name="a24" id="" value="<?php echo ($pregunta_a24); ?>" >
    <input type="text" name="a25" id="" value="<?php echo ($pregunta_a25); ?>" >
    a 180.
    <br>
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_a24?>
    <?php echo $verificar_a25?>

    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Dato</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
        <img src="..\img\Captura de pantalla 2024-12-24 091121.png" alt="" height="200px">
    </div>
    <hr>
    A <sub>x</sub> y A <sub>y</sub> son 
    <input type="text" name="a26" id="" value="<?php echo ($pregunta_a26); ?>">
    cartesianos.
    <br><br>
    <button type="submit">enviar</button>
    <?php echo $verificar_a26?>
    <hr>
    Que angulo tiene el vector final, respecto al eje x?: 
    <p>
    Excursiona en los Everglades de Florida con dirección suroeste desde su campamento de base,
    habiendo recorrido 1.72 km. Llega a la orilla de un río que es demasiado hondo para cruzarlo,
    por lo cual hace un giro de 90° a la derecha y avanza otros 3.12 km
    </p>
    pista, el angulo del primer vector es 225. <br>
    <input type="text" name="a27" id="" value="<?php echo ($pregunta_a27); ?>"> <br><br>
    <button type="submit">enviar</button>
    <?php echo $verificar_a27?>
    <hr>
    </form>
</div>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="quinto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
           
  </body>
</html>
