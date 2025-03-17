<?php
 
 
$respuesta_1 = ''; $respuesta_2 = ''; $respuesta_3 = ''; $respuesta_4 = ''; $respuesta_5 = ''; 
$respuesta_6 = ''; $respuesta_7 = ''; $respuesta_8 = ''; $respuesta_9 = '';  $respuesta_10 = '';
$respuesta_11 = ''; $respuesta_12 = ''; $respuesta_13 = ''; $respuesta_14 = ''; $respuesta_15 = '';
$respuesta_16 = '';


$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = ''; $verificar_4 = ''; $verificar_5 = ''; 
$verificar_6 = ''; $verificar_7 = '';  $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = ''; 
$verificar_11 = ''; $verificar_12 = '';   $verificar_13 = '';  $verificar_14 = ''; $verificar_15 = ''; 
$verificar_16 = ''; 

 

if ($_POST) {
   // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'consumo') {
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'proyecciones') {
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

 

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'eje') {
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
   if ($respuesta_5 === '2') {
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }


   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'direccion') {
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }


   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'no') {
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'suma') {
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'pitagoras') {
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }
    

   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'Cos(a)') {
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }
   
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'Sen(a)') {
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


   $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
   if ($respuesta_12 === 'hipotenusa' ) {
       $verificar_12 = "correcto";
   } elseif ($respuesta_12 === '') {
       $verificar_12 = '';
   } else {
       $verificar_12 = "incorrecto";
   }

   $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
   if ($respuesta_13 === '30' ) {
       $verificar_13 = "correcto";
   } elseif ($respuesta_13 === '') {
       $verificar_13 = '';
   } else {
       $verificar_13 = "incorrecto";
   }

   // Para respuesta_14
$respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
if ($respuesta_14 === '161') { // Reemplaza '40' con la respuesta correcta para esta pregunta
    $verificar_14 = "correcto";
} elseif ($respuesta_14 === '') {
    $verificar_14 = '';
} else {
    $verificar_14 = "incorrecto";
}

// Para respuesta_15
$respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
if ($respuesta_15 === '232') { // Reemplaza '50' con la respuesta correcta para esta pregunta
    $verificar_15 = "correcto";
} elseif ($respuesta_15 === '') {
    $verificar_15 = '';
} else {
    $verificar_15 = "incorrecto";
}

// Para respuesta_16
$respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
if ($respuesta_16 === '333') { // Reemplaza '60' con la respuesta correcta para esta pregunta
    $verificar_16 = "correcto";
} elseif ($respuesta_16 === '') {
    $verificar_16 = '';
} else {
    $verificar_16 = "incorrecto";
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
    <form action="./sexto.php" method="POST" onsubmit="handleSubmit(event)">
    Al trabajar con consumo de combustible en  L/100km, la eficiencia es inversamente proporcional al 
    <input type="text" name="respuesta_1" id="" value="<?php echo $respuesta_1 ?>"> 
    , menos litros por distancia recorrida significa más eficiencia.
    <br><br>
    <button type="submit">enviar</button>
    <?php echo $verificar_1 ?> <br>
    <hr>



    Un vector se describe mediante un conjunto de componentes en un sistema de coordenadas dado,
    donde los componentes son las 
    <input type="text" name="respuesta_2" id="" value="<?php echo $respuesta_2 ?>"> 
    del vector sobre cada 
    <input type="text" name="respuesta_3" id="" value="<?php echo $respuesta_3 ?>"> 
    de coordenadas.
    Por lo tanto, en una hoja bidimensional, hay 
    <input type="text" name="respuesta_4" id="" value="<?php echo $respuesta_4 ?>"> 
    coordenadas y, en consecuencia, el vector 
    se describe mediante 
    <input type="text" name="respuesta_5" id="" value="<?php echo $respuesta_5 ?>"> 
    componentes. En el mundo tridimensional real, hay tres coordenadas,
    y un vector se describe mediante tres componentes. Un mundo de cuatro dimensiones se 
    describiría con cuatro coordenadas, y un vector se describiría con cuatro componentes.
    <br><br>
    <button type="submit">enviar</button>
    <?php echo $verificar_2 ?> 
    <?php echo $verificar_3 ?> 
    <?php echo $verificar_4 ?> 
    <?php echo $verificar_5 ?> 
    <hr>
    <p>
        Como los vectores en general tienen más de un componente y por eso se usa más de un número para describirlos,
        evidentemente son más difíciles de sumar y restar que los números simples. En tal caso, ¿por qué trabajar con vectores?
    </p>

        Un vector contiene información sobre la distancia entre dos puntos (la magnitud del vector).
        A diferencia de un escalar, también contiene información sobre la 
        <input type="text" name="respuesta_6" id="" value="<?php echo $respuesta_6 ?>"> 
        . En muchos casos,
        conocer una 
        <input type="text"  id="" value="<?php echo $respuesta_6 ?>" readonly > 
        puede ser tan importante como conocer una magnitud.
        <br><br>
        <button type="submit">enviar</button>
        <?php echo $verificar_6 ?> 

    <hr>
    (si/no) <br><br>
    La masa 
    <input type="text" name="respuesta_7" id="" value="<?php echo $respuesta_7 ?>"  > 
    es una cantidad vectorial. Es una cantidad escalar, ya que 
    <input type="text"  id="" value="<?php echo $respuesta_7 ?>" readonly > 
    tiene sentido asociar una dirección con la masa.
    <br><br>
    <button type="submit">enviar</button>
    <?php echo $verificar_7 ?> 
    <hr>

    
    Un vector puede ser expresado como: <br><br>
    <p>\[ \vec{A} = A_{x} \hat{x} + A_{y} \hat{y} \]</p>
    <br><br>
    De acuerdo a lo anterior, un vector es la 
    <input type="text" name="respuesta_8" id="" value="<?php echo $respuesta_8 ?>"  > 
    de sus componentes en diferentes direcciones (ejes). <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_8 ?>
    <br><br>
    <hr>
    El concepto de sumar componentes de un vector tiene su origen en el teorema de 
    <input type="text" name="respuesta_9" id="" value="<?php echo $respuesta_9 ?>"  > 
    cuando calculamos la magnitud del vector a partir de sus componentes en diferentes direcciones.
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_9 ?>
    </form>
</div>
<div class="seccion derecha">
    <form action="./sexto.php" method="POST" onsubmit="handleSubmit(event)">
        <Strong>Completar</Strong>: <br> recuerde que los angulos son llamados (a). <br><br>
        <Strong>El componente en x de A es igual a:</Strong> <br><br>
        \(  A_{x}  ~~ = ~~ | \vec{A}|  \) * 
        <input type="text" name="respuesta_10" size="8" id="" value="<?php echo $respuesta_10 ?>"  > 
        <br><br>
        <button type="submit">enviar</button>
        <?php echo $verificar_10 ?>

        <br><br><br>

        <Strong>El componente en y de A es igual a:</Strong> <br><br>
        \(  A_{y}  ~~ = ~~ | \vec{A}|  \) * 
        <input type="text" name="respuesta_11" size="8" id="" value="<?php echo $respuesta_11 ?>"  > 
        <br><br>
        <button type="submit">enviar</button>
        <?php echo $verificar_11 ?>
        <br><br>
        En los terminos comunes de cateto opuesto,cateto adyacente, hipotenusa, a que corresponde:
        <br><br>
        \( | \vec{A}|  \) 
        <input type="text" name="respuesta_12" size="8" id="" value="<?php echo $respuesta_12 ?>"  > 
        <br><br>
        <button type="submit">enviar</button>
        <?php echo $verificar_12 ?>
        <br><br><br>
        <hr>
        Indique el valor real respecto al eje x de: <br><br>
        <img src="..\img\Captura de pantalla 2024-12-31 170424.png" alt=""> <br><br>
        \( | \vec{A}|  \) =  
        <input type="text" name="respuesta_13" size="8" id="" value="<?php echo $respuesta_13 ?>"  > 

        <br><br>
        \( | \vec{B}|  \) =  
        <input type="text" name="respuesta_14" size="8" id="" value="<?php echo $respuesta_14 ?>"  >

        <br><br>
        \( | \vec{C}|  \) =  
        <input type="text" name="respuesta_15" size="8" id="" value="<?php echo $respuesta_15 ?>"  >

        <br><br>
        \( | \vec{D}|  \) =  
        <input type="text" name="respuesta_16" size="8" id="" value="<?php echo $respuesta_16 ?>"  >
        <br><br>
        <button type="submit">enviar</button>
        <?php echo $verificar_13 ?>
        <?php echo $verificar_14 ?>
        <?php echo $verificar_15 ?>
        <?php echo $verificar_16 ?>
    </form>
</div>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="septimo.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
