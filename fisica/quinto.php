<?php
 
 
$respuesta_1 = ''; $respuesta_2 = ''; $respuesta_3 = ''; $respuesta_4 = ''; $respuesta_5 = ''; 
$respuesta_6 = ''; $respuesta_7 = ''; $respuesta_8 = ''; $respuesta_9 = '';  $respuesta_10 = '';
$respuesta_11 = ''; $respuesta_12 = '';


$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = ''; $verificar_4 = ''; $verificar_5 = ''; 
$verificar_6 = ''; $verificar_7 = '';  $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = ''; 
$verificar_11 = ''; $verificar_12 = ''; 

 

if ($_POST) {
   // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'direccion') {
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'longitud') {
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '3') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '4') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === '2') {
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === '3') {
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }


   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '1') {
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }


   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'unitarios') {
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === '3.77*10^4') {
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === '3*10^14') {
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }
    

   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === '3') {
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }
   
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === '(-0.5,-0.9)') {
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


   $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
   if ($respuesta_12 === '0.425 km/L' || $respuesta_12 === '0.425km/L') {
       $verificar_12 = "correcto";
   } elseif ($respuesta_12 === '') {
       $verificar_12 = '';
   } else {
       $verificar_12 = "incorrecto";
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
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
    .imagen {
        max-width: 100%;
        height: auto;
    }
</style>
 
<script>


function mostrarMensaje() {
    document.getElementById("mensaje").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje")]);
}

function ocultarMensaje() {
    document.getElementById("mensaje").style.display = 'none';
}


function mostrarMensaje2() {
    document.getElementById("mensaje2").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje")]);
}

function ocultarMensaje2() {
    document.getElementById("mensaje2").style.display = 'none';
}



function mostrarMensaje3() {
    document.getElementById("mensaje3").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje3")]);
}

function ocultarMensaje3() {
    document.getElementById("mensaje3").style.display = 'none';
}

function mostrarMensaje4() {
    document.getElementById("mensaje4").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje4")]);
}

function ocultarMensaje4() {
    document.getElementById("mensaje4").style.display = 'none';
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
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)">
        
    <div class="contenido" style="display: flex;  align-items: center;  ">
        <img src="..\img\Captura de pantalla 2024-12-24 093836.png" alt="Imagen">
        <p>Lo anterior es posible porque: Podemos mover los vectores a discreción. 
            Mientras dejemos iguales la 
            <input type="text" name="respuesta_1" id="" value="<?php echo $respuesta_1 ?>">
            y la 
            <input type="text" name="respuesta_2" id="" value="<?php echo $respuesta_2 ?>" >
            del vector, éste no se altera.
        
            <button type="submit">enviar</button>
            <?php echo $verificar_1 ?>
            <?php echo $verificar_2 ?>
        </p> 
    </div>
    <hr>
    ¿Dentro de cuál cuadrante señalan cada uno de los siguientes
    vectores? <br><br>
    a) A = (Ax, Ay) con Ax = 1.5 cm, Ay=-1.0 cm 
    <input type="text" name="respuesta_3" id="" value="<?php echo $respuesta_3 ?>" >
    <button type="submit">enviar</button>
    <br>

    b) un vector de longitud 2.3 cm y ángulo de 131° 
    <input type="text" name="respuesta_4" id="" value="<?php echo $respuesta_4 ?>">
    <button type="submit">enviar</button>
    <br>

    c) el vector inverso de B =(0.5 cm, 1.0 cm) 
    <input type="text" name="respuesta_5" id="" value="<?php echo $respuesta_5 ?>">
    <button type="submit">enviar</button>
    <br>

    d) la suma de los vectores unitarios en las direcciones x y y.
    <input type="text" name="respuesta_6" id="" value="<?php echo $respuesta_6 ?>">
    <br>
    <button type="submit">enviar</button>
     

    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <br>
    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Pista(c)</button>
    <p id="mensaje" style="display:none;"> 
        <img src="..\img\Captura de pantalla 2024-12-24 113858.png" alt="" height="250" width="400">
    <p>

    <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Pista(d)</button>
    <p id="mensaje2" style="display:none;"> 
        <img src="..\img\Captura de pantalla 2024-12-24 114245.png" alt="" height="250" width="400">
    <p>
    <hr>
    Esta es imagen es de: 
    <img src="..\img\Captura de pantalla 2024-12-24 114423.png" alt=""> <br>
    vectores <input type="text" name="respuesta_7" id="" value="<?php echo $respuesta_7 ?>">
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_7 ?>
    <hr>

    ¿Cuál es la suma de 5.786 · 10<sup>3</sup> m y 3.19 · 10<sup>4</sup> m  (en 3 cifras significativas)?
    <br>
    <input type="text" name="respuesta_8" id="" value="<?php echo $respuesta_8 ?>">
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_8 ?>
    <hr> 
    <br>
    <strong>1.8 </strong>
    ¿Cuál es el número de átomos de carbono en 0.5 nanomoles de carbono? Un mol contiene 6.02 · 1023 átomos.
    <br><br>
    <p>
        Sabemos que:
        \[
        1 \, \text{nmol} = 10^{-9} \, \text{mol}.
        \]
    </p>
    <p>
        Entonces, si tienes \( 0.5 \, \text{nmol} \), lo multiplicas por \( 10^{-9} \) para convertirlo a moles:
        \[
        0.5 \, \text{nmol} = 0.5 \times 10^{-9} \, \text{mol}.
        \]
    </p>
    <input type="text" name="respuesta_9" id="" value="<?php echo $respuesta_9 ?>">atomos. <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_9 ?>
    <button onmousedown="mostrarMensaje3()" onmouseup="ocultarMensaje3()" class="btn btn-primary mt-3">Pista</button>
    <p id="mensaje3" style="display:none;"> 
    Notación científica estándar requiere que el número que multiplica la potencia de 10 
    (el coeficiente) esté entre 1 y 10.
    <p>
    </form>
</div>
<div class="seccion derecha">
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)">
    La resultante de los vectores en dos dimensiones (1.5 m, 0.7 m), (–3.2 m, 1.7 m), y (1.2 m, –3.3 m) 
    se encuentran en el cuadrante :
    <input type="text" name="respuesta_10" id="" value="<?php echo $respuesta_10 ?>"> <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_10 ?>
    <hr>
    Indique el valor resultante del vector anterior:
    ejemplo: (ej,ej) <br><br>
    <input type="text" name="respuesta_11" id="" value="<?php echo $respuesta_11 ?>"> <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_11 ?>
    <button onmousedown="mostrarMensaje4()" onmouseup="ocultarMensaje4()" class="btn btn-primary mt-3">Pista</button>
    <p id="mensaje4" style="display:none;"> 
        <img src="..\img\Captura de pantalla 2024-12-24 160240.png" alt="" >
    <p>
    <hr>
    <br>
    \[
\frac{1.609}{3.785} \left( \frac{1}{100} \right) = 0.00425
\]


    <br>
    <p><strong>0.425 km/L</strong> indica la cantidad de <strong>kilómetros</strong> que puedes recorrer con 1 litro de combustible.</p>
    <p>Al invertir este valor (<strong>tomar el recíproco</strong>), estamos obteniendo cuántos <strong>litros</strong> necesitas para recorrer <strong>1 kilómetro</strong>.</p>
    <p>Por ejemplo, al tomar el recíproco de <strong>0.425 km/L</strong>:</p>
    <pre>1 / 0.425 = 2.35 L/km</pre>
    <p>Esto significa que para recorrer 1 kilómetro, se necesitan <strong>2.35 litros</strong> de combustible.</p>
    <p>Para 100 kilómetros, se multiplica por 100:</p>
    <pre>2.35 * 100 = 235.24 L/100 km</pre>
    <p>Esto da como resultado <strong>235.24 L/100 km</strong> para 1 milla/galón.</p>
    <hr>
    <br>
    <p>El inverso, 
        <span class="math"> \( \frac{1}{ (L / 100 km)} \) </span>, 
        se convierte en <strong>kilómetros recorridos por litro</strong> 
        (<span class="math">km / L</span>).
    </p> <br>
    Si un vehículo recorre \( 0.425 \, \text{km/L} \), entonces:

\[
L/100 \, \text{km} = \frac{100}{\text{km/L}} = \frac{100}{0.425} \approx 235.24 \, L/100 \, \text{km}.
\]

Multiplicamos por \( 100 \) porque queremos expresar el consumo en términos de "litros por cada 100 kilómetros", que es la unidad estándar en muchos países.
    <br><br>
    <hr>
    Segun lo anterior, a que es igual: <br><br>
    \( \frac{1}{235.24 L/100 km} \) <br><br>
    <input type="text" name="respuesta_12" id="" value="<?php echo $respuesta_12 ?>"> <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_12 ?> <br>
    indica cuántos kilómetros se recorren por litro.
    <hr>
    clave en las igualdades: no se multiplico el 100 en el numerador, se invirtio conservando la igualdad.
    <br>
    \(     \frac{1.609}{3.785}\left(\frac{1}{100}\right)\cdot 100\:\frac{km}{L} = \left(0.00425\right)\left(\frac{1}{L\:/\:100Km}\right) = \left(\frac{1}{\left(235.24\:\frac{L}{100\:km}\right)}\right)
    \)
    <br><br>
    "Por lo tanto, 1 milla/galón es el recíproco de 235.2 L/100 km."

    </form>
</div>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="sexto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
