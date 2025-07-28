<?php
 
 
for ($i = 1; $i <= 17; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 17; $i++) {
    ${"verificar_" . $i} = '';
}

     
$mostrar_solucion = '';
     
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas
        $respuesta_1 = '\frac{1}{4}Ln|6x^2+9|+C';
        $respuesta_2 = '\frac{2}{5}Ln|5x^2-3|+C';
        $respuesta_3 = '\frac{1}{4}Ln|4x^3-2x^2|+C';
        $respuesta_4 = 'x-8+13Ln|x-8|+C';
        $respuesta_5 = 'x+4-7Ln|x+4|+C';
        $respuesta_6 = '\frac{(x^2-5)^5}{5}+C';
        $respuesta_7 = '\frac{(x+4)^4}{4}+C';
        $respuesta_8 = '\frac{(3x^2-2)^5}{5}+C';
        $respuesta_9 = '\frac{(2x^3-5)^5}{30}+C';
        $respuesta_10 = '\frac{(t^4-3)^6}{12}+C';
        $respuesta_11 = '\frac{(3x^2+2x)^7}{14}+C';
        $respuesta_12 = '\frac{2\sqrt{(x^3+5)^3}}{3}+C';
        $respuesta_13 = '\frac{2\sqrt{(2x^4+6)^3}}{3}+C';
        $respuesta_14 = '\frac{3\sqrt[3]{(x^2-5)^4}}{4}+C';
        $respuesta_15 = '\frac{1\sqrt{(3x^2-6)^3}}{9}+C';
        $respuesta_16 = '\frac{1\sqrt{(x^4+2)^3}}{3}+C';
        $respuesta_17 = '\frac{8\sqrt{(5x^3-3)^7}}{105}+C';

        // Marcar todas como correctas
        for ($i = 1; $i <= 17; $i++) {
            ${"verificar_$i"} = "correcto";
        }
    } else {
     $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === '\frac{1}{4}Ln|6x^2+9|+C') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === '\frac{2}{5}Ln|5x^2-3|+C') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '\frac{1}{4}Ln|4x^3-2x^2|+C') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'x-8+13Ln|x-8|+C') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'x+4-7Ln|x+4|+C') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '\frac{(x^2-5)^5}{5}+C'
   || $respuesta_6 === '\frac{1}{5}(x^2-5)^5+C'
   ) {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === '\frac{(x+4)^4}{4}+C') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === '\frac{(3x^2-2)^5}{5}+C') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === '\frac{(2x^3-5)^5}{30}+C'
   || $respuesta_9 === '\frac{1}{30}(2x^3-5)^5+C'
   ) {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === '\frac{(t^4-3)^6}{12}+C') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === '\frac{(3x^2+2x)^7}{14}+C') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === '\frac{2\sqrt{(x^3+5)^3}}{3}+C') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === '\frac{2\sqrt{(2x^4+6)^3}}{3}+C') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === '\frac{3\sqrt[3]{(x^2-5)^4}}{4}+C') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === '\frac{1\sqrt{(3x^2-6)^3}}{9}+C') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === '\frac{1\sqrt{(x^4+2)^3}}{3}+C') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === '\frac{8\sqrt{(5x^3-3)^7}}{105}+C') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
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
    height: 330vh;
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
        actualizarFormula14();
        actualizarFormula15();
        actualizarFormula16();
        actualizarFormula17();
      
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

<form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

<div class="form-container">

<div class="seccion izquierda">
     
    <p style="text-align: center;">
    \(  \int \frac{3x}{6x^2+9} dx \) = 
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
    \(  \int \frac{4xdx}{5x^2-3} dx \) = 
    <span id="formula2">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_2"   id="respuesta_2" oninput="actualizarFormula2()" 
    value="<?php echo $respuesta_2?>" size="25" >

    </p>
    
    <button type="submit">Enviar</button> 
    <?php echo $verificar_2 ?>


    <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../../img/practica.png" style="display: none; max-width: 100%" width="460">

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
     
    <hr>


    <p style="text-align: center;">
    \(  \int \frac{3x^2-x}{4x^3-2x^2} dx \) = 
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
    \(  \int \frac{x+5}{x-8} dx \) = 
    <span id="formula4">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_4"   id="respuesta_4" oninput="actualizarFormula4()" 
    value="<?php echo $respuesta_4?>" size="25" >

    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_4 ?>

    <button onmousedown="mostrarImagen3()" onmouseup="ocultarImagen3()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada3" src="../../../img/case.png" style="display: none; max-width: 100%" width="460">

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

     <button onmousedown="mostrarImagen4()" onmouseup="ocultarImagen4()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada4" src="../../../img/case_2.png" style="display: none; max-width: 100%" width="460">

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


<button onmousedown="mostrarImagen5()" onmouseup="ocultarImagen5()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada5" src="../../../img/case_3.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen5() {
        var imagenMostrada4 = document.getElementById('imagenMostrada5');

        // Mostrar la imagen
        imagenMostrada5.style.display = 'block';
        }

        function ocultarImagen5() {
        var imagenMostrada5 = document.getElementById('imagenMostrada5');

        // Ocultar la imagen al soltar el botón
        imagenMostrada5.style.display = 'none';
        }
    </script>
    <hr>



    <p style="text-align: center;">
    \(  \int \frac{x-3}{x+4} dx \) = 
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
    \(  \int 2x(x^2-5)^4 dx \) = 
    <span id="formula6">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_6"   id="respuesta_6" oninput="actualizarFormula6()" 
    value="<?php echo $respuesta_6?>" size="25" >


    </p>
    <button type="submit">Enviar</button> 
    <?php echo $verificar_6 ?>


    <button onmousedown="mostrarImagen6()" onmouseup="ocultarImagen6()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada6" src="../../../img/integral_producto.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen6() {
        var imagenMostrada6 = document.getElementById('imagenMostrada6');

        // Mostrar la imagen
        imagenMostrada6.style.display = 'block';
        }

        function ocultarImagen6() {
        var imagenMostrada6 = document.getElementById('imagenMostrada6');

        // Ocultar la imagen al soltar el botón
        imagenMostrada6.style.display = 'none';
        }
    </script>

    <hr>
    
    <p style="text-align: center;">
    \(  \int (x+4)^3 dx \) = 
    <span id="formula7">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_7"   id="respuesta_7" oninput="actualizarFormula7()" 
    value="<?php echo $respuesta_7?>" size="25" >
    </p>
        
    <button type="submit">Enviar</button> 
    <?php echo $verificar_7 ?>
    <hr>

    <p style="text-align: center;">
    \(  \int 6x(3x^2-2)^4 dx \) = 
    <span id="formula8">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_8"   id="respuesta_8" oninput="actualizarFormula8()" 
    value="<?php echo $respuesta_8?>" size="25" >
    </p>


    <button type="submit">Enviar</button> 
    <?php echo $verificar_8 ?>

     <hr> 
</div>




<div class="seccion derecha">
 

    <p style="text-align: center;">
    \(  \int x^2(2x^3-5)^4 dx \) = 
    <span id="formula9">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_9"   id="respuesta_9" oninput="actualizarFormula9()" 
    value="<?php echo $respuesta_9?>" size="25" >
 
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_9 ?>

     <button onmousedown="mostrarImagen7()" onmouseup="ocultarImagen7()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada7" src="../../../img/producto_.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen7() {
        var imagenMostrada7 = document.getElementById('imagenMostrada7');

        // Mostrar la imagen
        imagenMostrada7.style.display = 'block';
        }

        function ocultarImagen7() {
        var imagenMostrada7 = document.getElementById('imagenMostrada7');

        // Ocultar la imagen al soltar el botón
        imagenMostrada7.style.display = 'none';
        }
    </script>


 <button onmousedown="mostrarImagen8()" onmouseup="ocultarImagen8()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada8" src="../../../img/parte_3.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen8() {
        var imagenMostrada8 = document.getElementById('imagenMostrada8');

        // Mostrar la imagen
        imagenMostrada8.style.display = 'block';
        }

        function ocultarImagen8() {
        var imagenMostrada8 = document.getElementById('imagenMostrada8');

        // Ocultar la imagen al soltar el botón
        imagenMostrada8.style.display = 'none';
        }
    </script>


    <button onmousedown="mostrarImagen9()" onmouseup="ocultarImagen9()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada9" src="../../../img/parte_4.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen9() {
        var imagenMostrada9 = document.getElementById('imagenMostrada9');

        // Mostrar la imagen
        imagenMostrada9.style.display = 'block';
        }

        function ocultarImagen9() {
        var imagenMostrada9 = document.getElementById('imagenMostrada9');

        // Ocultar la imagen al soltar el botón
        imagenMostrada9.style.display = 'none';
        }
    </script>

    <hr>
    

    <p style="text-align: center;">
    \(  \int 2t^3(t^4-3)^5 dt \) = 
    <span id="formula10">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_10"   id="respuesta_10" oninput="actualizarFormula10()" 
    value="<?php echo $respuesta_10?>" size="25" >

    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_10 ?>

    <hr>

    <p style="text-align: center;">
    \(  \int (3x+1) (3x^2+2x)^6 dx \) = 
    <span id="formula11">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_11"   id="respuesta_11" oninput="actualizarFormula11()" 
    value="<?php echo $respuesta_11?>" size="25" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_11 ?>
    <hr>

    

    <p style="text-align: center;">
    \(  \int 3x^2 \sqrt{x^3+5} \,\,dx \) = 
    <span id="formula12">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_12"   id="respuesta_12" oninput="actualizarFormula12()" 
    value="<?php echo $respuesta_12?>" size="25" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_12 ?>
    <hr>


    <p style="text-align: center;">
    \(  \int 8x^3 \sqrt{2x^4+6} \,\,dx \) = 
    <span id="formula13">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_13"   id="respuesta_13" oninput="actualizarFormula13()" 
    value="<?php echo $respuesta_13?>" size="25" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_13 ?>
    <hr>


    <p style="text-align: center;">
    \(  \int 2x \, \sqrt[3]{x^2-5} \,\,dx \) = 
    <span id="formula14">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_14"   id="respuesta_14" oninput="actualizarFormula14()" 
    value="<?php echo $respuesta_14?>" size="25" >
    </p>


    <button type="submit">Enviar</button> 
    <?php echo $verificar_14 ?>
    <hr>


    <p style="text-align: center;">
    \(  \int x \, \sqrt{3x^2-6}  \,\,dx \) = 
    <span id="formula15">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_15"   id="respuesta_15" oninput="actualizarFormula15()" 
    value="<?php echo $respuesta_15?>" size="25" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_15 ?>
    <hr>


    <p style="text-align: center;">
    \(  \int 2x^3 \, \sqrt{x^4+2}  \,\,dx \) = 
    <span id="formula16">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_16"   id="respuesta_16" oninput="actualizarFormula16()" 
    value="<?php echo $respuesta_16?>" size="25" >
    </p>


    <button type="submit">Enviar</button> 
    <?php echo $verificar_16 ?>
    <hr>
 


    <p style="text-align: center;">
    \(  \int 4x^2 \, \sqrt{(5x^3-3)^5}   \,\,dx \) = 
    <span id="formula17">
        \(   \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_17"   id="respuesta_17" oninput="actualizarFormula17()" 
    value="<?php echo $respuesta_17?>" size="25" >
    </p>

     
    <button type="submit">Enviar</button> 
    <?php echo $verificar_17 ?>
      
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
        href="quinto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
