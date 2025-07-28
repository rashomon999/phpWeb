<?php
 
 
for ($i = 1; $i <= 13; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 13; $i++) {
    ${"verificar_" . $i} = '';
}

     
$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas (integrales)
        $respuesta_1 = '\frac{6x^5}{5}-5x^3+C';
        $respuesta_2 = '\frac{2x^7}{7}-\frac{2x^6}{3}+\frac{2x^5}{5}+\frac{3x^4}{2}+C';
        $respuesta_3 = '\frac{3x^4}{2}-\frac{7x^3}{3}-10x^2+C';
        $respuesta_4 = '\frac{3x^5}{5}-\frac{4x^3}{3}-15x+C';
        $respuesta_5 = '3x^3-15x^2+25x+C';
        $respuesta_6 = '\frac{4}{3}x^3+12x^2+36x+C';
        $respuesta_7 = '\frac{9}{5}x^5-3x^4+\frac{4}{3}x^3+C';
        $respuesta_8 = 'Ln|x^2-x+4|+C';
        $respuesta_9 = 'Ln|3x^2+2x|+C';
        $respuesta_10 = 'Ln|3x^2-5x|+C';
        $respuesta_11 = 'Ln|5x^3+2x^2-7x+3|+C';
        $respuesta_12 = '\frac{1}{4}Ln|2x^2-5|+C';
        $respuesta_13 = '\frac{1}{6}Ln|3x^2+2|+C';

        // Marcar todas como correctas usando un bucle for
        for ($i = 1; $i <= 13; $i++) {
            ${"verificar_$i"} = "correcto";
        }
    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === '\frac{6x^5}{5}-5x^3+C') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === '\frac{2x^7}{7}-\frac{2x^6}{3}+\frac{2x^5}{5}+\frac{3x^4}{2}+C') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '\frac{3x^4}{2}-\frac{7x^3}{3}-10x^2+C') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === '\frac{3x^5}{5}-\frac{4x^3}{3}-15x+C') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === '3x^3-15x^2+25x+C') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';  
   if ($respuesta_6 === '\frac{4}{3}x^3+12x^2+36x+C'
   || $respuesta_6 === '\frac{4x^3}{3}+12x^2+36x+C'
   ) {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === '\frac{9}{5}x^5-3x^4+\frac{4}{3}x^3+C'
   || $respuesta_7 === '\frac{9x^5}{5}-3x^4+\frac{4x^3}{3}+C'
   ) {   
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'Ln|x^2-x+4|+C') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'Ln|3x^2+2x|+C') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'Ln|3x^2-5x|+C') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'Ln|5x^3+2x^2-7x+3|+C') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === '\frac{1}{4}Ln|2x^2-5|+C') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === '\frac{1}{6}Ln|3x^2+2|+C') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
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
     <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../style_2_0.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 310vh;
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
        actualizarFormula13();
      
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    var f = document.getElementById('respuesta_1').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_2').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_3').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    var f = document.getElementById('respuesta_4').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula4').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_5').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula6() {
    var f = document.getElementById('respuesta_6').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula6').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula7() {
    var f = document.getElementById('respuesta_7').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula7').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_8').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula8').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula9() {
    var f = document.getElementById('respuesta_9').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula10() {
    var f = document.getElementById('respuesta_10').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula10').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula11() {
    var f = document.getElementById('respuesta_11').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula12() {
    var f = document.getElementById('respuesta_12').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula12').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula13() {
    var f = document.getElementById('respuesta_13').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula13').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula14() {
    var f = document.getElementById('respuesta_14').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula14').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula15() {
    var f = document.getElementById('respuesta_15').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula15').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula16() {
    var f = document.getElementById('respuesta_16').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula16').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula17() {
    var f = document.getElementById('respuesta_17').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula17').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula18() {
    var f = document.getElementById('respuesta_18').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula18').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula19() {
    var f = document.getElementById('respuesta_19').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula19').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula20() {
    var f = document.getElementById('respuesta_20').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula20').innerHTML = `$$ ${formula} $$`;
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

<form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
    
    <div class="form-container">

    <div class="seccion izquierda">
    
    
    <p style="text-align: center;">
    \(  \int 3x^2(2x^2-5) dx \) = 
    <span id="formula">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_1"   id="respuesta_1" oninput="actualizarFormula()" 
    value="<?php echo $respuesta_1?>" size="25" >
    </p>
     
    <button type="submit">Enviar</button> 
    <?php echo $verificar_1 ?>
    <hr> 




 
     <p style="text-align: center;">
    \(  \int 2x^3(x^3-2x^2+x+3) dx \) = 
    <span id="formula2">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_2"   id="respuesta_2" oninput="actualizarFormula2()" 
    value="<?php echo $respuesta_2?>" size="25" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_2 ?>
    <hr> 





 
    <p style="text-align: center;">
    \(  \int (2x-5)(3x^2+4x) dx \) = 
    <span id="formula3">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_3"   id="respuesta_3" oninput="actualizarFormula3()" 
    value="<?php echo $respuesta_3?>" size="25" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_3 ?>
    <hr> 
    




    <p style="text-align: center;">
    \(  \int (3x^2+5)(x^2-3) dx \) = 
    <span id="formula4">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_4"   id="respuesta_4" oninput="actualizarFormula4()" 
    value="<?php echo $respuesta_4?>" size="25" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_4 ?>
    <hr>
    
    

    <p style="text-align: center;">
    \(  \int (3x-5)^2 \,\, dx \) = 
    <span id="formula5">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_5"   id="respuesta_5" oninput="actualizarFormula5()" 
    value="<?php echo $respuesta_5?>" size="25" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_5 ?>
    <hr> 


    <p style="text-align: center;">
    \(  \int (2x+6)^2 \,\, dx \) = 
    <span id="formula6">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_6"   id="respuesta_6" oninput="actualizarFormula6()" 
    value="<?php echo $respuesta_6?>" size="25" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_6 ?>
    <hr> 


    <p style="text-align: center;">
    \(  \int (3x^2-2x)^2 \,\, dx \) = 
    <span id="formula7">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_7"   id="respuesta_7" oninput="actualizarFormula7()" 
    value="<?php echo $respuesta_7?>" size="30" >
    </p>


    
    <button type="submit">Enviar</button> 
    <?php echo $verificar_7 ?>

    <hr> 
   
    
</div>




<div class="seccion derecha">
   
    
     <p style="text-align: center;">
    \(  \int \frac{2x-1}{x^2-x+4} \,\, dx \) = 
    <span id="formula8">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_8"   id="respuesta_8" oninput="actualizarFormula8()" 
    value="<?php echo $respuesta_8?>" size="30" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_8 ?>
 <!-- #region -->
    <br><br>
    <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../../img/solucion.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen2() { 
        var imagenMostrada2 = document.getElementById('imagenMostrada2');

        // Mostrar la imagen
        imagenMostrada2.style.display = 'block';
        }

        function ocultarImagen2() {
        var imagenMostrada2 = document.getElementById('imagenMostrada2');

        // Ocultar la imagen al soltar el botón
        imagenMostrada2.style.display = 'none';
        }
    </script>


<button onmousedown="mostrarImagen3()" onmouseup="ocultarImagen3()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada3" src="../../../img/parte_2.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen3() {
        var imagenMostrada2 = document.getElementById('imagenMostrada3');

        // Mostrar la imagen
        imagenMostrada2.style.display = 'block';
        }

        function ocultarImagen3() {
        var imagenMostrada2 = document.getElementById('imagenMostrada3');

        // Ocultar la imagen al soltar el botón
        imagenMostrada2.style.display = 'none';
        }
    </script>


    <hr>



    <p style="text-align: center;">
    \(  \int \frac{6x+2}{3x^2+2x} \,\, dx \) = 
    <span id="formula9">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_9"   id="respuesta_9" oninput="actualizarFormula9()" 
    value="<?php echo $respuesta_9?>" size="30" >
    </p>


    <button type="submit">Enviar</button> 
    <?php echo $verificar_9 ?>
    <hr>




    <p style="text-align: center;">
    \(  \int \frac{6x-5}{3x^2-5x} \,\, dx \) = 
    <span id="formula10">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_10"   id="respuesta_10" oninput="actualizarFormula10()" 
    value="<?php echo $respuesta_10?>" size="30" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_10 ?>
    <hr>


    <p style="text-align: center;">
    \(  \int \frac{15x^2+4x-7}{5x^3+2x^2-7x+3} \,\, dx \) = 
    <span id="formula11">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_11"   id="respuesta_11" oninput="actualizarFormula11()" 
    value="<?php echo $respuesta_11?>" size="30" >
    </p>


    <button type="submit">Enviar</button> 
    <?php echo $verificar_11 ?>
    <hr>

    

    <p style="text-align: center;">
    \(  \int \frac{x}{2x^2-5} \,\, dx \) = 
    <span id="formula12">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_12"   id="respuesta_12" oninput="actualizarFormula12()" 
    value="<?php echo $respuesta_12?>" size="30" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_12 ?>

    <button onmousedown="mostrarImagen4()" onmouseup="ocultarImagen4()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada4" src="../../../img/caso.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen4() {
        var imagenMostrada4 = document.getElementById('imagenMostrada4');

        // Mostrar la imagen
        imagenMostrada4.style.display = 'block';
        }

        function ocultarImagen4() {
        var imagenMostrada4 = document.getElementById('imagenMostrada4');

        // Ocultar la imagen al soltar el botón
        imagenMostrada4.style.display = 'none';
        }
    </script>

    <hr>


    <p style="text-align: center;">
    \(  \int \frac{x}{3x^2+2} \,\, dx \) = 
    <span id="formula13">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_13"   id="respuesta_13" oninput="actualizarFormula13()" 
    value="<?php echo $respuesta_13?>" size="30" >
    </p>

    <hr>
    <button type="submit">Enviar</button> 
    <?php echo $verificar_13 ?>


    <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>

    
</div>
</div>

 </form>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="cuarto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
