<?php 
$respuesta_1 = ''; $respuesta_2 = ''; $respuesta_3 = ''; $respuesta_4 = ''; $respuesta_5 = ''; 
$respuesta_6 = ''; $respuesta_7 = ''; $respuesta_8 = ''; $respuesta_9 = ''; $respuesta_10 = '';
$respuesta_11 = ''; $respuesta_12 = ''; $respuesta_13 = ''; $respuesta_14 = ''; $respuesta_15 = '';
$respuesta_16 = ''; $respuesta_17 = ''; $respuesta_18 = ''; $respuesta_19 = ''; $respuesta_20 = '';

$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = ''; $verificar_4 = ''; $verificar_5 = ''; 
$verificar_6 = ''; $verificar_7 = ''; $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = ''; 
$verificar_11 = ''; $verificar_12 = ''; $verificar_13 = ''; $verificar_14 = ''; $verificar_15 = ''; 
$verificar_16 = ''; $verificar_17 = ''; $verificar_18 = ''; $verificar_19 = ''; $verificar_20 = '';  

$mostrar_solucion = '';

if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas
        $respuesta_1 = '\frac{CO}{H}';
        $respuesta_2 = '\frac{CA}{H}';
        $respuesta_3 = '\frac{CO}{CA}';
        $respuesta_4 = '\frac{CA}{CO}';
        $respuesta_5 = '\frac{H}{CA}';
        $respuesta_6 = '\frac{H}{CO}';
        $respuesta_7 = '\frac{Cos(a)}{Cot(a)}';
        $respuesta_8 = '\frac{Sin(a)}{Tan(a)}';
        $respuesta_9 = '\frac{Sin(a)}{Cos(a)}';
        $respuesta_10 = '\frac{Cos(a)}{Sin(a)}';
        $respuesta_11 = '\frac{Tan(a)}{Sin(a)}';
        $respuesta_12 = '\frac{Cot(a)}{Cos(a)}';
        $respuesta_13 = '1-Cos^2(a)';
        $respuesta_14 = '1-Sen^2(a)';
        $respuesta_15 = 'Tan^2(a)+1=Sec^2(a)';
        $respuesta_16 = 'Tan^2(a)=Sec^2(a)-1';
        $respuesta_17 = '1=Sec^2(a)-Tan^2(a)';
        $respuesta_18 = 'Csc^2(a)=1+Cot^2(a)';
        $respuesta_19 = 'Cot^2(a)=Csc^2(a)-1';
        $respuesta_20 = '1=Csc^2(a)-Cot^2(a)';
        
        // Marcar todas como correctas
        $verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = $verificar_5 = 
        $verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
        $verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = 
        $verificar_16 = $verificar_17 = $verificar_18 = $verificar_19 = $verificar_20 = "correcto";
    } else {
   // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === '\frac{CO}{H}' || $respuesta_1 === '\frac{Co}{H}') {
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === '\frac{CA}{H}') {
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '\frac{CO}{CA}') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }
 

   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === '\frac{CA}{CO}') {
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === '\frac{H}{CA}') {
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }


   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '\frac{H}{CO}') {
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }


   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === '\frac{Cos(a)}{Cot(a)}') {
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === '\frac{Sin(a)}{Tan(a)}') {
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === '\frac{Sin(a)}{Cos(a)}') {
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }
    

   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === '\frac{Cos(a)}{Sin(a)}') {
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }
   
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === '\frac{Tan(a)}{Sin(a)}') {
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


   $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
   if ($respuesta_12 === '\frac{Cot(a)}{Cos(a)}') {
       $verificar_12 = "correcto";
   } elseif ($respuesta_12 === '') {
       $verificar_12 = '';
   } else {
       $verificar_12 = "incorrecto";
   }


   $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
   if ($respuesta_13 === '1-Cos^2(a)') {
       $verificar_13 = "correcto";
   } elseif ($respuesta_13 === '') {
       $verificar_13 = '';
   } else {
       $verificar_13 = "incorrecto";
   }


   $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
   if ($respuesta_14 === '1-Sen^2(a)') {
       $verificar_14 = "correcto";
   } elseif ($respuesta_14 === '') {
       $verificar_14 = '';
   } else {
       $verificar_14 = "incorrecto";
   }

   $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
   if ($respuesta_15 === 'Tan^2(a)+1=Sec^2(a)' || $respuesta_15 === 'Sec^2(a)=1+Tan^2(a)' || $respuesta_15 === 'Sec^2(a)=Tan^2(a)+1'  ) {
       $verificar_15 = "correcto";
   } elseif ($respuesta_15 === '') {
       $verificar_15 = '';
   } else {
       $verificar_15 = "incorrecto";
   }


   $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
   if ($respuesta_16 === 'Tan^2(a)=Sec^2(a)-1') {
       $verificar_16 = "correcto";
   } elseif ($respuesta_16 === '') {
       $verificar_16 = '';
   } else {
       $verificar_16 = "incorrecto";
   }


   $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
   if ($respuesta_17 === '1=Sec^2(a)-Tan^2(a)') {
       $verificar_17 = "correcto";
   } elseif ($respuesta_17 === '') {
       $verificar_17 = '';
   } else {
       $verificar_17 = "incorrecto";
   }

   $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
   if ($respuesta_18 === 'Csc^2(a)=1+Cot^2(a)') {
       $verificar_18 = "correcto";
   } elseif ($respuesta_18 === '') {
       $verificar_18 = '';
   } else {
       $verificar_18 = "incorrecto";
   }

   $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
   if ($respuesta_19 === 'Cot^2(a)=Csc^2(a)-1') {
       $verificar_19 = "correcto";
   } elseif ($respuesta_19 === '') {
       $verificar_19 = '';
   } else {
       $verificar_19 = "incorrecto";
   }

   $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
   if ($respuesta_20 === '1=Csc^2(a)-Cot^2(a)') {
       $verificar_20 = "correcto";
   } elseif ($respuesta_20 === '') {
       $verificar_20 = '';
   } else {
       $verificar_20 = "incorrecto";
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
    <link rel="stylesheet" href="style2.css">
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
   
    var f = document.getElementById('respuesta_1').value || "";
 


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
   
    var f = document.getElementById('respuesta_2').value || "";
  
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
   
    var f = document.getElementById('respuesta_3').value || "";
 


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
    var f = document.getElementById('respuesta_4').value || "";
   

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
    var f = document.getElementById('respuesta_5').value || "";
  

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
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <Strong>Razones trigonometricas  </Strong> <br>
    Las seis razones trigonométricas en un triángulo
    rectángulo son: seno, coseno, tangente, secante,
    cosecante y cotangente. <Strong>Nota: ingresar tipo: \frac{}{}...</Strong>
    <br><br>
    variables a usar: CO, CA, H. <br><br>
    Sen(a)= <input type="text"  size="12"  name="respuesta_1" 
    id="respuesta_1" oninput="actualizarFormula()" value="<?php echo $respuesta_1 ?>"    >
    <span id="formula">
            \( \frac{0}{0} \)
    </span> 
    <br><br>
    Cos(a)= <input type="text"  size="8"  name="respuesta_2" value="<?php echo $respuesta_2 ?>"  
    id="respuesta_2" oninput="actualizarFormula2()" >
    <span id="formula2">
            \( \frac{0}{0} \)
    </span> 
    <br><br>
    Tan(a)= <input type="text"  size="8"  name="respuesta_3"  
    id="respuesta_3" value="<?php echo $respuesta_3 ?>"  oninput="actualizarFormula3()" >
    <span id="formula3">
            \( \frac{0}{0} \)
    </span> 
    <br><br>
    Cot(a)= <input type="text"  size="8"  name="respuesta_4" 
    id="respuesta_4" value="<?php echo $respuesta_4 ?>"  oninput="actualizarFormula4()" >
    <span id="formula4">
            \( \frac{0}{0} \)
    </span> 
    <br><br> 
    Sec(a)= <input type="text"  size="8"  name="respuesta_5" 
    id="respuesta_5" value="<?php echo $respuesta_5 ?>"  oninput="actualizarFormula5()" >
    <span id="formula5">
            \( \frac{0}{0} \)
    </span> 
    <br><br>
    Csc(a)= <input type="text"  size="8"  name="respuesta_6"  value="<?php echo $respuesta_6 ?>"
    id="respuesta_6"  oninput="actualizarFormula6()" >
    <span id="formula6">
            \( \frac{0}{0} \)
    </span> 
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>


    </form>
</div>




<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <Strong>Continuacion identidades por cociente:</Strong>
    <br><br>
    Nota: anteriormente se hizo Tan y Cot, saltarse estos.
    <br><br>

    Sen(a)= <input type="text"  size="14"  name="respuesta_7" 
    id="respuesta_7" oninput="actualizarFormula7()" value="<?php echo $respuesta_7 ?>"    >
    <span id="formula7">
            \( \frac{0}{0} \)
    </span> 
    <br><br>
    Cos(a)= <input type="text"  size="8"  name="respuesta_8" value="<?php echo $respuesta_8 ?>"  
    id="respuesta_8" oninput="actualizarFormula8()" >
    <span id="formula8">
            \( \frac{0}{0} \)
    </span> 
    <br><br>
    Tan(a)= <input type="text"  size="8"  name="respuesta_9"  
    id="respuesta_9" value="\frac{Sin(a)}{Cos(a)}"  oninput="actualizarFormula9()" >
    <span id="formula9">
            \( \frac{Sin(a)}{Cos(a)} \)
    </span> 
    <br><br>
    Cot(a)= <input type="text"  size="8"  name="respuesta_10" 
    id="respuesta_10" value="\frac{Cos(a)}{Sin(a)}"  oninput="actualizarFormula10()" >
    <span id="formula10">
            \( \frac{Cos(a)}{Sin(a)} \)
    </span> 
    <br><br> 
    Sec(a)= <input type="text"  size="8"  name="respuesta_11" 
    id="respuesta_11" value="<?php echo $respuesta_11 ?>"  oninput="actualizarFormula11()" >
    <span id="formula11">
            \( \frac{0}{0} \)
    </span> 
    <br><br>
    Csc(a)= <input type="text"  size="8"  name="respuesta_12"  value="<?php echo $respuesta_12 ?>"
    id="respuesta_12"  oninput="actualizarFormula12()" >
    <span id="formula12">
            \( \frac{0}{0} \)
    </span> 
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_7 ?>
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?>
    <?php echo $verificar_12 ?>
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
        href="tercero.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
