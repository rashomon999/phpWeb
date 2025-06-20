<?php
 
 
$respuesta_1 = ''; $respuesta_2 = ''; $respuesta_3 = ''; $respuesta_3_2 = ''; $respuesta_4 = ''; $respuesta_5 = ''; 
$respuesta_6 = ''; $respuesta_7 = ''; $respuesta_8 = ''; $respuesta_9 = '';  $respuesta_10 = '';
$respuesta_11 = ''; $respuesta_12 = ''; $respuesta_13 = ''; $respuesta_14 = ''; $respuesta_15 = '';
$respuesta_16 = ''; $respuesta_17 = ''; $respuesta_18 = ''; $respuesta_19 = ''; $respuesta_20 = '';
$respuesta_21 = ''; $respuesta_22 = '';  $respuesta_23 = '';  $respuesta_24 = '';
$respuesta_25 = ''; $respuesta_26 = ''; $respuesta_27 = ''; $respuesta_28 = ''; $respuesta_29 = '';
$respuesta_30 = '';
 

$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = '';  $verificar_3_2 = ''; $verificar_4 = ''; $verificar_5 = ''; 
$verificar_6 = ''; $verificar_7 = '';  $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = ''; 
$verificar_11 = ''; $verificar_12 = ''; $verificar_13 = ''; $verificar_14 = ''; $verificar_15 = ''; 
$verificar_16 = '';  $verificar_17 = ''; $verificar_18 = ''; $verificar_19 = ''; $verificar_20 = '';  
$verificar_21 = '';  $verificar_22 = '';  $verificar_23 = '';   $verificar_24 = '';   $verificar_25 = '';  
$verificar_26 = '';  $verificar_27= ''; $verificar_28= '';  $verificar_29= '';  $verificar_30 = ''; 
 

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {  
        // Establecer todas las respuestas correctas
        $verificar_1 = $verificar_2 = $verificar_3 = $verificar_3_2 = $verificar_4 = $verificar_5 = 
        $verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
        $verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = 
        $verificar_16 = $verificar_17 = $verificar_18 = $verificar_19 = $verificar_20 = 
        $verificar_21 = $verificar_22 = $verificar_23 = $verificar_24 = $verificar_25 = 
        $verificar_26 = $verificar_27 = $verificar_28 = $verificar_29 = $verificar_30 = "correcto";
        
        // Establecer los valores correctos en las respuestas
        $respuesta_1 = '0';
        $respuesta_2 = '1';
        $respuesta_3 = '2x';
        $respuesta_3_2 = '5x^4';
        $respuesta_4 = '\frac{1}{2\sqrt{x}}';
        $respuesta_5 = 'e^x';
        $respuesta_6 = '2^xln(2)';
        $respuesta_7 = '\frac{1}{x}';
        $respuesta_8 = '\frac{1}{x}log_{2}e';
        $respuesta_9 = '\frac{1}{ln(3)(x+2)}';
        $respuesta_10 = '\frac{1}{x+2}log_{3}e';
        $respuesta_11 = '-5';
        $respuesta_12 = '\frac{1}{ln(3)(x+2)}';
        $respuesta_13 = 'inferior';
        $respuesta_14 = 'inferior';
        $respuesta_15 = 'superior';
        $respuesta_16 = '\frac{A_L+A_R}{2}';
        $respuesta_17 = 'f(x_{i-1})';
        $respuesta_18 = 'f(x_i)';
        $respuesta_19 = 'x_{i-1}';
        $respuesta_20 = 'x_{i}';
        $respuesta_21 = 'A_M=h\sum_{i=1}^nf(a+(i-\frac{1}{2})h)';
        $respuesta_22 = 'A_S=\frac{1}{3}A_T+\frac{2}{3}A_M';
        $respuesta_23 = 'A_S=\frac{A_T+2A_M}{3}';
        $respuesta_24 = 'C\frac{1}{n}';
        $respuesta_25 = '0';
        $respuesta_26 = '\int_{a}^{b}cdx=c(b-a)';
        $respuesta_27 = '|\int_{a}^{b}f(x)\,dx-\sum_{i=1}^{n}f(c_i)\Delta x_i |<\epsilon';
        $respuesta_28 = 'n';
        $respuesta_29 = '\sum_{i=1}^nf(c_i)\Delta x_i';
        $respuesta_30 = 'A_R=\Delta x\sum_{i=1}^nf(a+i\Delta x)';
    } else {
   // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === '0') {
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === '1') {
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }
   
   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '2x') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }
 
   // Verificar la respuesta de la tercera pregunta
   $respuesta_3_2 = isset($_POST['respuesta_3_2']) ? $_POST['respuesta_3_2'] : '';
   if ($respuesta_3_2 === '5x^4') {
       $verificar_3_2 = "correcto";
   } elseif ($respuesta_3_2 === '') {
       $verificar_3_2 = '';
   } else {
       $verificar_3_2 = "incorrecto";
   }
 

   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === '\frac{1}{2\sqrt{x}}') {
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'e^x') {
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }


   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '2^xln(2)') {
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }


   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === '\frac{1}{x}') {
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }
    
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === '\frac{1}{x}log_{2}e') {
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === '\frac{1}{ln(3)(x+2)}') {
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }
    

   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === '\frac{1}{x+2}log_{3}e') {
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }
   
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === '-5') {
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


   $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
   if ($respuesta_12 === '\frac{1}{ln(3)(x+2)}') {
       $verificar_12 = "correcto";
   } elseif ($respuesta_12 === '') {
       $verificar_12 = '';
   } else {
       $verificar_12 = "incorrecto";
   }


   $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
   if ($respuesta_13 === 'inferior') {
       $verificar_13 = "correcto";
   } elseif ($respuesta_13 === '') {
       $verificar_13 = '';
   } else {
       $verificar_13 = "incorrecto";
   }


   $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
   if ($respuesta_14 === 'inferior') {
       $verificar_14 = "correcto";
   } elseif ($respuesta_14 === '') {
       $verificar_14 = '';
   } else {
       $verificar_14 = "incorrecto";
   }

   $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
   if ($respuesta_15 === 'superior'  ) {
       $verificar_15 = "correcto";
   } elseif ($respuesta_15 === '') {
       $verificar_15 = '';
   } else {
       $verificar_15 = "incorrecto";
   }


   $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
   if ($respuesta_16 === '\frac{A_L+A_R}{2}') {
       $verificar_16 = "correcto";
   } elseif ($respuesta_16 === '') {
       $verificar_16 = '';
   } else {
       $verificar_16 = "incorrecto";
   }


   $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
   if ($respuesta_17 === 'f(x_{i-1})') {
       $verificar_17 = "correcto";
   } elseif ($respuesta_17 === '') {
       $verificar_17 = '';
   } else {
       $verificar_17 = "incorrecto";
   }

   $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
   if ($respuesta_18 === 'f(x_i)') {
       $verificar_18 = "correcto";
   } elseif ($respuesta_18 === '') {
       $verificar_18 = '';
   } else {
       $verificar_18 = "incorrecto";
   }

   $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
   if ($respuesta_19 === 'x_{i-1}') {
       $verificar_19 = "correcto";
   } elseif ($respuesta_19 === '') {
       $verificar_19 = '';
   } else {
       $verificar_19 = "incorrecto";
   }

   $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
   if ($respuesta_20 === 'x_{i}') {
       $verificar_20 = "correcto";
   } elseif ($respuesta_20 === '') {
       $verificar_20 = '';
   } else {
       $verificar_20 = "incorrecto";
   }

   $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'A_M=h\sum_{i=1}^nf(a+(i-\frac{1}{2})h)') {  
        $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }

    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'A_S=\frac{1}{3}A_T+\frac{2}{3}A_M') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

    $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
    if ($respuesta_23 === 'A_S=\frac{A_T+2A_M}{3}') {  
        $verificar_23 = "correcto";
    } elseif ($respuesta_23 === '') {
        $verificar_23 = '';
    } else {
        $verificar_23 = "incorrecto";
    }

    $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
    if ($respuesta_24 === 'C\frac{1}{n}') { // Reemplaza con la respuesta correcta
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
    if ($respuesta_26 === '\int_{a}^{b}cdx=c(b-a)') {  
        $verificar_26 = "correcto";
    } elseif ($respuesta_26 === '') {
        $verificar_26 = '';
    } else {
        $verificar_26 = "incorrecto";
    }

    $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
    if ($respuesta_27 === '|\int_{a}^{b}f(x)\,dx-\sum_{i=1}^{n}f(c_i)\Delta x_i |<\epsilon' || $respuesta_27 === '|\int_{a}^{b}f(x)dx-\sum_{i=1}^nf(c_i)\Delta x_i|<\epsilon') { // Reemplaza con la respuesta correcta
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
    if ($respuesta_29 === '\sum_{i=1}^nf(c_i)\Delta x_i') { // Reemplaza con la respuesta correcta
        $verificar_29 = "correcto";
    } elseif ($respuesta_29 === '') {
        $verificar_29 = '';
    } else {
        $verificar_29 = "incorrecto";
    }

    $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
    if ($respuesta_30 === 'A_R=\Delta x\sum_{i=1}^nf(a+i\Delta x)') { // Reemplaza con la respuesta correcta
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
   
    var f = document.getElementById('respuesta_3').value || "";
 


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
   
    var f = document.getElementById('respuesta_16').value || "";
  
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
   
    var f = document.getElementById('respuesta_21').value || "";
 


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
    var f = document.getElementById('respuesta_22').value || "";
   

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
    var f = document.getElementById('respuesta_23').value || "";
  

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
    var f = document.getElementById('respuesta_26').value || "";
  

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
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <strong>ingresar tipo markdown/latex</strong>
    <br><br>
    Ingrese la derivada de 5:
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_1 ?>
    <br><br>
    Ingrese la derivada de x:
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_2 ?>
    <br>
    Ingrese la derivada de \(x^2\):
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_3 ?>
    <br>
    Ingrese la derivada de \(x^5\):
    <input type="text" name="respuesta_3_2" value="<?php echo $respuesta_3_2; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_4 ?>
    <br>
    Ingrese la derivada de \(\sqrt{x}\):
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_5 ?>
    <br>
    Ingrese la derivada de \(e^x\):
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_6 ?>
    <br>
    Ingrese la derivada de \(2^x\):
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_7 ?>
    <br>

    Ingrese la derivada de \(Lnx\):
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_8 ?>
    <br>

    Ingrese la derivada de \(log_2 x\):
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_8 ?>
    <br>
    con notacion ln <br>
    Ingrese la derivada de \(log_3(x+2)\):
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_9 ?>
    <br>
    con notacion log <br>
    Ingrese la derivada de \(log_3(x+2)\):
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_10 ?>
    <br>

    Ingrese la derivada de \(-5x+2\):
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_11 ?>
    <br>
    ingrese en terminos de ln <br>
    Ingrese la derivada de \( log_3(x+2) \):
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>"><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_11 ?>
    <br>

    <hr>
    <strong>Si desea ver las soluciones escribir: mostrar_solucion</strong>
<br>
<input type="text" id="mostrar_solucion" name="mostrar_solucion" value="<?php echo htmlspecialchars($mostrar_solucion); ?>">
<button type="submit">Mostrar Solución</button>

     </form>
</div>




<div class="seccion derecha">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)"  >
     
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
