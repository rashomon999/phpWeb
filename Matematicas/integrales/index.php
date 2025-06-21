<?php
// Inicialización de variables para respuestas
$respuesta_1 = $respuesta_2 = $respuesta_3 = $respuesta_3_2 = $respuesta_4 = $respuesta_5 = 
$respuesta_6 = $respuesta_7 = $respuesta_8 = $respuesta_9 = $respuesta_10 = 
$respuesta_11 = $respuesta_12 = $respuesta_13 = $respuesta_14 = $respuesta_15 = 
$respuesta_16 = $respuesta_17 = $respuesta_18 = $respuesta_19 = $respuesta_20 = 
$respuesta_21 = $respuesta_22 = $respuesta_23 = $respuesta_24 = $respuesta_25 = 
$respuesta_26 = $respuesta_27 = $respuesta_28 = $respuesta_29 = $respuesta_30 = '';

// Inicialización de variables para verificaciones
$verificar_1 = $verificar_2 = $verificar_3 = $verificar_3_2 = $verificar_4 = $verificar_5 = 
$verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
$verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = 
$verificar_16 = $verificar_17 = $verificar_18 = $verificar_19 = $verificar_20 = 
$verificar_21 = $verificar_22 = $verificar_23 = $verificar_24 = $verificar_25 = 
$verificar_26 = $verificar_27 = $verificar_28 = $verificar_29 = $verificar_30 = '';

$mostrar_solucion = '';

if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas
        $respuesta_1 = 'definida';
        $respuesta_2 = '[a,b]';
        $respuesta_3 = 'P={x_0,x_1,x_2,...,x_n}';
        $respuesta_3_2 = 'x_0';
        $respuesta_4 = 'x_n';
        $respuesta_5 = 'b';
        $respuesta_6 = '[a,b]';
        $respuesta_7 = 'n';
        $respuesta_8 = 'm';
        $respuesta_9 = 'M';
        $respuesta_10 = 'f,p';
        $respuesta_11 = '\sum_{i=1}^n M_i*\Delta x_i';
        $respuesta_12 = 'f,p';
        $respuesta_13 = '\sum_{i=1}^n m_i*\Delta x_i';
        $respuesta_14 = 'L(f,p)';
        $respuesta_15 = 'U(f,p)';
        $respuesta_16 = 'integrable';
        $respuesta_17 = 'L(f,p)';
        $respuesta_18 = 'I';
        $respuesta_19 = 'U(f,p)';
        $respuesta_20 = 'c_i';
        $respuesta_21 = 'm_i';
        $respuesta_22 = 'f(c_i)';
        $respuesta_23 = 'M_i';
        $respuesta_24 = 'E';
        $respuesta_25 = '0';
        $respuesta_26 = 'N';
        $respuesta_27 = '|\int_{a}^{b}f(x)\,dx-\sum_{i=1}^{n}f(c_i)\Delta x_i |<\epsilon';
        $respuesta_28 = 'n';
        $respuesta_29 = '\sum_{i=1}^nf(c_i)\Delta x_i';
        $respuesta_30 = 'A_R=\Delta x\sum_{i=1}^nf(a+i\Delta x)';
        
        // Marcar todas como correctas
        $verificar_1 = $verificar_2 = $verificar_3 = $verificar_3_2 = $verificar_4 = $verificar_5 = 
        $verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
        $verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = 
        $verificar_16 = $verificar_17 = $verificar_18 = $verificar_19 = $verificar_20 = 
        $verificar_21 = $verificar_22 = $verificar_23 = $verificar_24 = $verificar_25 = 
        $verificar_26 = $verificar_27 = $verificar_28 = $verificar_29 = $verificar_30 = "correcto";
    } else {
   // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'definida') {
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === '[a,b]') {
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'P={x_0,x_1,x_2,...,x_n}') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }
 
   // Verificar la respuesta de la tercera pregunta
   $respuesta_3_2 = isset($_POST['respuesta_3_2']) ? $_POST['respuesta_3_2'] : '';
   if ($respuesta_3_2 === 'x_0') {
       $verificar_3_2 = "correcto";
   } elseif ($respuesta_3_2 === '') {
       $verificar_3_2 = '';
   } else {
       $verificar_3_2 = "incorrecto";
   }
 

   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'x_n') {
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'b') {
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }


   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '[a,b]') {
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }


   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'n') {
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'm') {
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'M') {
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }
    

   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'f,p') {
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }
   
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === '\sum_{i=1}^n M_i*\Delta x_i'
   || $respuesta_11 === '\sum_{i=1}^n M_i\Delta x_i'
   || $respuesta_11 === '\sum_{i=1}^{n}M_i\Delta x_i'
   ) {
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


   $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
   if ($respuesta_12 === 'f,p') {
       $verificar_12 = "correcto";
   } elseif ($respuesta_12 === '') {
       $verificar_12 = '';
   } else {
       $verificar_12 = "incorrecto";
   }


   $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
   if ($respuesta_13 === '\sum_{i=1}^n m_i*\Delta x_i'
   || $respuesta_13 === '\sum_{i=1}^{n}m_i\Delta x_i') {
       $verificar_13 = "correcto";
   } elseif ($respuesta_13 === '') {
       $verificar_13 = '';
   } else {
       $verificar_13 = "incorrecto";
   }


   $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
   if ($respuesta_14 === 'L(f,p)') {
       $verificar_14 = "correcto";
   } elseif ($respuesta_14 === '') {
       $verificar_14 = '';
   } else {
       $verificar_14 = "incorrecto";
   }

   $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
   if ($respuesta_15 === 'U(f,p)'  ) {
       $verificar_15 = "correcto";
   } elseif ($respuesta_15 === '') {
       $verificar_15 = '';
   } else {
       $verificar_15 = "incorrecto";
   }


   $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
   if ($respuesta_16 === 'integrable') {
       $verificar_16 = "correcto";
   } elseif ($respuesta_16 === '') {
       $verificar_16 = '';
   } else {
       $verificar_16 = "incorrecto";
   }


   $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
   if ($respuesta_17 === 'L(f,p)') {
       $verificar_17 = "correcto";
   } elseif ($respuesta_17 === '') {
       $verificar_17 = '';
   } else {
       $verificar_17 = "incorrecto";
   }

   $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
   if ($respuesta_18 === 'I') {
       $verificar_18 = "correcto";
   } elseif ($respuesta_18 === '') {
       $verificar_18 = '';
   } else {
       $verificar_18 = "incorrecto";
   }

   $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
   if ($respuesta_19 === 'U(f,p)') {
       $verificar_19 = "correcto";
   } elseif ($respuesta_19 === '') {
       $verificar_19 = '';
   } else {
       $verificar_19 = "incorrecto";
   }

   $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
   if ($respuesta_20 === 'c_i') {
       $verificar_20 = "correcto";
   } elseif ($respuesta_20 === '') {
       $verificar_20 = '';
   } else {
       $verificar_20 = "incorrecto";
   }

   $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'm_i') { // Reemplaza con la respuesta correcta
        $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }

    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'f(c_i)') { // Reemplaza con la respuesta correcta
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

    $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
    if ($respuesta_23 === 'M_i') { // Reemplaza con la respuesta correcta
        $verificar_23 = "correcto";
    } elseif ($respuesta_23 === '') {
        $verificar_23 = '';
    } else {
        $verificar_23 = "incorrecto";
    }

    $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
    if ($respuesta_24 === 'E') { // Reemplaza con la respuesta correcta
        $verificar_24 = "correcto";
    } elseif ($respuesta_24 === '') {
        $verificar_24 = '';
    } else {
        $verificar_24 = "incorrecto";
    }

    $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
    if ($respuesta_25 === '0') { // Reemplaza con la respuesta correcta
        $verificar_25 = "correcto";
    } elseif ($respuesta_25 === '') {
        $verificar_25 = '';
    } else {
        $verificar_25 = "incorrecto";
    }

    $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
    if ($respuesta_26 === 'N') { // Reemplaza con la respuesta correcta
        $verificar_26 = "correcto";
    } elseif ($respuesta_26 === '') {
        $verificar_26 = '';
    } else {
        $verificar_26 = "incorrecto";
    }

    $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
    if ($respuesta_27 === '|\int_{a}^{b}f(x)\,dx-\sum_{i=1}^{n}f(c_i)\Delta x_i |<\epsilon' || 
    $respuesta_27 === '|\int_{a}^{b}f(x)dx-\sum_{i=1}^nf(c_i)\Delta x_i|<\epsilon' || 
    $respuesta_27 === '|\int_{a}^{b}f(x)dx-\sum_{i=1}^{n}f(c_i)\Delta x_i |<\epsilon'
    ) { 
        $verificar_27 = "correcto";
    } elseif ($respuesta_27 === '') {
    $verificar_27 = '';
    } else {
        $verificar_27 = "incorrecto";
    }

    $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
    if ($respuesta_28 === 'n') { // Reemplaza con la respuesta correcta
        $verificar_28 = "correcto";
    } elseif ($respuesta_28 === '') {
        $verificar_28 = '';
    } else {
        $verificar_28 = "incorrecto";
    }
     

    $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
    if ($respuesta_29 === '\sum_{i=1}^nf(c_i)\Delta x_i'
    || $respuesta_29 === '\sum_{i=1}^{n}f(c_i)\Delta x_i') { 
        $verificar_29 = "correcto";
    } elseif ($respuesta_29 === '') {
        $verificar_29 = '';
    } else {
        $verificar_29 = "incorrecto";
    }

    $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
    if ($respuesta_30 === 'A_R=\Delta x\sum_{i=1}^nf(a+i\Delta x)'
    || $respuesta_30 === 'A_R=\sum_{i=1}^{n}f(a+i\Delta x)'
    ) { // Reemplaza con la respuesta correcta
        $verificar_30 = "correcto";
    } elseif ($respuesta_30 === '') {
        $verificar_30 = '';
    } else {
        $verificar_30 = "incorrecto";
    }
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
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
    .imagen {
        max-width: 100%;
        height: auto;
    }

    .seccion {
    width: 50%; /* El 50% del ancho de la página menos el margen izquierdo */
    padding: 20px; /* importante este padding*/
    box-sizing: border-box;
    height: 230vh;
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

        // Asegúrate de que MathJax procese el nuevo contenido
        if (window.MathJax) {
            MathJax.typeset();
        }
        actualizarFormula();
        actualizarFormula2();
        actualizarFormula3();
        actualizarFormula4();
        actualizarFormula5();
        actualizarFormula6();
        actualizarFormula7();
        actualizarFormula8();
        actualizarFormula9();
        actualizarFormula10();
        actualizarFormula11();
        actualizarFormula12();
      
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_11').value || "";
 


    // Construir la fórmula dinámica
    var formula = ` \\  ${f} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}
 

function actualizarFormula2() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_13').value || "";
  
    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula3() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_27').value || "";
 


    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_29').value || "";
   

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula4').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula5() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_30').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula6() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_6').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula6').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula7() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_7').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula7').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_8').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula8').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula9() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_9').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula10() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_10').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula10').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula11() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_11').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula12() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_12').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula12').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

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




</script>
    
</head>
<body>
<div class="seccion izquierda">
    a partir pagina 211 sloughter, a partir 405 stewar
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <strong>(Parametros Integral definida)</strong>
     
    <br><br>
    Sea f una funcion 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>">
    en el intervalo
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>">
    (puede no ser continua ), llamamos a un conjunto
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>">
    una particion del intervalo [a,b], si
    a=<input type="text" name="respuesta_3_2" value="<?php echo $respuesta_3_2; ?>"  size="2">
    <  \( x_1 < x_2 <...< \) 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>"  size="2">=
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>"  size="2"> 
    <br><br>
    Tal particion P divide el intervalo
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>"  size="2"> 
    en 
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>"  size="2"> 
    intervalos \( [  x_{i-1} - x_i ]\) de longitud  <br><br>
    \[ \Delta x_i = x_{i-1} - x_i  \]
    <br><br>

       <button type="submit">enviar final</button> <br> <br>
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_3_2 ?>
    <?php echo $verificar_4 ?>  
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?>
    <hr>
    <strong> Suma de rectangulos inscritos y circunscristos (U,L): </strong>
    <br><br>
    Se cumple lo anterior y <br><br>
    En el intervalo [a,b] debe existir un maximo y un minimo, tal que
    <br><br>
     <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>"  size="2">
     \(  \leq f(x) \)
     \(   \leq   \) <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>"  size="2"> 
     <br><br> Ahora definimos:  <br><br>
     U( <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>"  size="2">)=
     \( M_1 \Delta x_1 + M_2 \Delta x_2 + \dots + M_n \Delta x_n
     \)=
     <span id="formula">
        
    </span> 
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>"  size="20"
    id="respuesta_11" oninput="actualizarFormula()" value="<?php echo $respuesta_11 ?>">

     <br><br>






     L( <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>"  size="2">)=
     \( m_1 \Delta x_1 + m_2 \Delta x_2 + \dots + m_n \Delta x_n     \)=
    <span id="formula2">
        \(  \)
    </span> 

    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>"  size="20"
    id="respuesta_13" oninput="actualizarFormula2()" value="<?php echo $respuesta_13 ?>">
    <br>   <br>   
    <button type="submit">enviar final</button> <br> <br>
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?>
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>

    <br> <br>









    Si \( A \) es el área en el intervalo \([a, b]\) y se hace cada vez más pequeña la longitud de los subintervalos en una partición \( P \), entonces las sumas superior \( U(f, P) \) e inferior \( L(f, P) \) se aproximan cada vez más al mismo valor. En ese caso, se espera que \( A \) sea el único número que satisface la propiedad:
    <br> <br> 

    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>"  size="2"
    id="respuesta_14" value="<?php echo $respuesta_14 ?>">
    \( \leq \) A  \( \leq \)
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>"  size="2"
    id="respuesta_15" value="<?php echo $respuesta_15 ?>">



    <br> <br> 
    para toda partición \( P \).

    Esto significa que, al refinar la partición (haciendo los subintervalos más pequeños), las sumas inferior y superior convergen al mismo valor \( A \), justificando así la definición de la integral definida como el límite de estas sumas cuando la norma de la partición tiende a cero.
    
    <br> <br> 
    <br> <br> 

    <strong> Definición 4.1.1.</strong> 
    Usando la notación anterior, decimos que una función \( f \) es 
    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>"  size="8"
    id="respuesta_16" value="<?php echo $respuesta_16 ?>">
    en un intervalo \([a, b]\) si existe un único número \( I \) tal que 
    <br> <br> 
    <br> <br> 
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>"  size="8"
    id="respuesta_17" value="<?php echo $respuesta_17 ?>">
    \( \leq \)
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>"  size="8"
    id="respuesta_18" value="<?php echo $respuesta_18 ?>">
    \( \leq \)
    <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>"  size="8"
    id="respuesta_19" value="<?php echo $respuesta_19 ?>">
     
    <br> <br> 
    <br> <br> 
    para toda partición \( P \) de \([a, b]\). Si \( f \) es integrable en \([a, b]\),
     llamamos a \( I \) la  integral definida de \( f \) en \([a, b]\), que denotamos como:

    \[
    I = \int_{a}^{b} f(x) \, dx.
    \]
    <button type="submit">enviar final</button> <br> <br> 
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?>
    <hr>
    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <strong>Suma Rienmman, integral</strong>
    A la notacion anterior agregamos 
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>"  size="8"
    id="respuesta_20" value="<?php echo $respuesta_20 ?>">
     
    que es un punto dentro del intervalo
    \( [  x_{i-1} - x_i ]\) de la particion de P.


    <br> <br> 
    <br> <br> 

    Recuerde que en la definición de las sumas superior e inferior, \( M_i \) y \( m_i \) se eligen, en parte, de modo que  

    \[
    m_i \leq f(x) \leq M_i
    \]

    para todo \( x \) en \([x_{i-1}, x_i]\), donde \( i = 1, 2, 3, \dots, n \). Se sigue que si elegimos valores \( c_1, c_2, c_3, \dots, c_n \) de modo que  

    \[
    x_{i-1} \leq c_i \leq x_i
    \]

    entonces <br> 
    <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>"  size="8"
    id="respuesta_21" value="<?php echo $respuesta_21 ?>">
    \( \leq \) 
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>"  size="8"
    id="respuesta_22" value="<?php echo $respuesta_22 ?>">
    \( \leq \)
    <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>"  size="8"
    id="respuesta_23" value="<?php echo $respuesta_23 ?>">
     
    <br> <br> 
    para i=1,2,3,....,n, y entonces:
    <br> <br> 
    El significado preciso del límite que define a la integral es como sigue:
    <br> <br>
    Para cualquier numero  
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>"  size="8"
    id="respuesta_24" value="<?php echo $respuesta_24 ?>">
    >
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>"  size="8"
    id="respuesta_25" value="<?php echo $respuesta_25 ?>">
    , existe un numero 
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>"  size="8"
    id="respuesta_26" value="<?php echo $respuesta_26 ?>">
    tal que, 
    <br> <br>
    (utilice \epsilon)
    <br> <br>
    <span id="formula3">
        \(-----\)
    </span> 
    <br> <br>
    <br> <br>
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>"  size="40"
    id="respuesta_27" oninput="actualizarFormula3()" value="<?php echo $respuesta_27 ?>">
    <br> <br> 
    para cualquier 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>"  size="8"
    id="respuesta_28" value="<?php echo $respuesta_28 ?>"> 
    > N y para cualquier \(c_i\) en \([x_{i-1},x_i]\)
    <br> <br> 
    <button type="submit">enviar final</button> <br> 
    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>
    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>
    <?php echo $verificar_26 ?>
    <?php echo $verificar_27 ?>
    <?php echo $verificar_28 ?>
    <br> <br> 





    <strong>La suma: </strong>
    <span id="formula4">
        \(-----\)
    </span> 
    <br> <br>
    <br> <br>
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>"  size="40"
    id="respuesta_29" oninput="actualizarFormula4()" value="<?php echo $respuesta_29 ?>">
    <br> <br> 
    <button type="submit">enviar final</button> <br> 
    <?php echo $verificar_29 ?>
    <br>
    <strong>Definition 4.1.3.</strong>
    Si \( f \) es integrable en \([a, b]\), la aproximación por la regla del extremo derecho para la integral definida  
    \[
    \int_{a}^{b} f(x) \, dx
    \]
    usando \( n \) intervalos está dada por  
    <span id="formula5">
        \(-----\)
    </span> 
    <br><br>
    donde \( \Delta x = \frac{b-a}{n} \).
    <br><br>
   
     
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>"  size="40"
    id="respuesta_30" oninput="actualizarFormula5()" value="<?php echo $respuesta_30 ?>">
    <br> <br> 
    <button type="submit">enviar final</button> <br> 
    <?php echo $verificar_30 ?>
    <hr>

     <hr>
     <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
        
    
    </form>
</div>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="segundo.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
