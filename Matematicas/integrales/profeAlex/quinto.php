<?php
 
 
for ($i = 1; $i <= 19; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 19; $i++) {
    ${"verificar_" . $i} = '';
}

     
$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas
        $respuesta_1 = '\frac{2\sqrt{(9x^2-15x)^5}}{15}+C';
        $respuesta_2 = '\frac{\sqrt{(x^2-1)^5}}{5}+\frac{\sqrt{(x^2-1)^3}}{3}+C';
        $respuesta_3 = '\frac{(x^3-3)^8}{4}+\frac{6(x^3-3)^7}{7}+C';
        $respuesta_4 = '2\sqrt{x^2+3}+C';
        $respuesta_5 = '\frac{3\sqrt[3]{(3x^2+5x)^2}}{2}+C';
        $respuesta_6 = '\frac{3^x}{Ln3}+C';
        $respuesta_7 = '\frac{2^{3x}}{Ln8}+C';
        $respuesta_8 = '\frac{3^{2x}}{Ln9}+C';
        $respuesta_9 = '\frac{6^{3x^2+1}}{Ln6}+C';
        $respuesta_10 = '\frac{1}{2}e^{2x}+C';
        $respuesta_11 = '\frac{1}{5}e^{5x+3}+C';
        $respuesta_12 = '2e^{3x}+C';
        $respuesta_13 = '\frac{1}{10}e^{5x}+C';
        $respuesta_14 = '\frac{1}{2}e^{x^2}+C';
        $respuesta_15 = '\frac{1}{2}e^{t^2}+C';
        $respuesta_16 = '\frac{1}{3}e^{2x^3}+C';
        $respuesta_17 = '\frac{(Lnx)^2}{2}+C';
        $respuesta_18 = '\frac{Ln^2x}{3}+C';
        $respuesta_19 = 'Ln|Lnx|+C';
        
        // Marcar todas como correctas
        $verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = $verificar_5 = 
        $verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
        $verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = 
        $verificar_16 = $verificar_17 = $verificar_18 = $verificar_19 = "correcto";
    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === '\frac{2\sqrt{(9x^2-15x)^5}}{15}+C') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === '\frac{\sqrt{(x^2-1)^5}}{5}+\frac{\sqrt{(x^2-1)^3}}{3}+C'
   || $respuesta_2 === '\frac{1}{5}\sqrt{(x^2-1)^5}+\frac{1}{3}\sqrt{(x^2-1)^3}+C'
   || $respuesta_2 === '\frac{1(x^2-1)^\frac{5}{2}}{5}+\frac{1(x^2-1)^\frac{3}{2}}{3}+C'   
   
   ) {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '\frac{(x^3-3)^8}{4}+\frac{6(x^3-3)^7}{7}+C') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === '2\sqrt{x^2+3}+C') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === '\frac{3\sqrt[3]{(3x^2+5x)^2}}{2}+C'
   || $respuesta_5 === '\frac{3}{2}\sqrt[3]{(3x^2+5x)^2}'
   ) {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '\frac{3^x}{Ln3}+C') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === '\frac{2^{3x}}{Ln8}+C' || $respuesta_7 === '\frac{2^{3x}}{3Ln2}+C') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === '\frac{3^{2x}}{Ln9}+C' || $respuesta_8 === '\frac{3^{2x}}{2Ln3}+C') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === '\frac{6^{3x^2+1}}{Ln6}+C') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === '\frac{1}{2}e^{2x}+C' || $respuesta_10 === '\frac{e^{2x}}{2}+C') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === '\frac{1}{5}e^{5x+3}+C') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === '2e^{3x}+C') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === '\frac{1}{10}e^{5x}+C') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === '\frac{1}{2}e^{x^2}+C') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === '\frac{1}{2}e^{t^2}+C') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === '\frac{1}{3}e^{2x^3}+C') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === '\frac{(Lnx)^2}{2}+C' || $respuesta_17 === '\frac{Ln^2x}{2}+C') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === '\frac{Ln^2x}{3}+C' || $respuesta_18 === '\frac{1}{3}Ln^2x+C') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'Ln|Lnx|+C' || $respuesta_19 === 'Ln|Ln(x)|+C') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
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
    height: 340vh;
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
        actualizarFormula18();
        actualizarFormula19();
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

<form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

<div class="form-container"> 
<div class="seccion izquierda">
        

     <p style="text-align: center;">
    \(  \int (6x-5) \sqrt{(9x^2-15x)^3} \, \, dx \) = 
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
    \(  \int x^3 \sqrt{x^2-1} \, \, dx \) = 
    <span id="formula2">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_2"   id="respuesta_2" oninput="actualizarFormula2()" 
    value="<?php echo $respuesta_2?>" size="45" >
    </p>


    <button type="submit">Enviar</button> 
    <?php echo $verificar_2 ?>


    <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../../img/integral_x.png" style="display: none; max-width: 100%" width="460">

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

    <img id="imagenMostrada3" src="../../../img/integral_x_dos.png" style="display: none; max-width: 100%" width="460">

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

    <img id="imagenMostrada4" src="../../../img/integral_x_tres.png" style="display: none; max-width: 100%" width="460">

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

    <img id="imagenMostrada5" src="../../../img/integral_x_cuatro.png" style="display: none; max-width: 100%" width="460">

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

        <button onmousedown="mostrarImagen6()" onmouseup="ocultarImagen6()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada6" src="../../../img/integral_final.png" style="display: none; max-width: 100%" width="460">

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
    \(  \int 6x^5(x^3-3)^6 \, \, dx \) = 
    <span id="formula3">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_3"   id="respuesta_3" oninput="actualizarFormula3()" 
    value="<?php echo $respuesta_3?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_3 ?>

    <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">concejo</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    en este caso solo se busca sustituir la variable sin su acompañante, la constante 6 se saca.
    lo que derivo no me da mayor o agrega constante sino que ya hay, es uno de esos casos.
    </p>
    </div>

    <button onmousedown="mostrarImagen26()" onmouseup="ocultarImagen26()">ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada26" src="../../../img/mejora.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen26() {
        var imagenMostrada26 = document.getElementById('imagenMostrada26');

        // Mostrar la imagen
        imagenMostrada26.style.display = 'block';
        }

        function ocultarImagen26() {
        var imagenMostrada26 = document.getElementById('imagenMostrada26');

        // Ocultar la imagen al soltar el botón
        imagenMostrada26.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen27()" onmouseup="ocultarImagen27()">ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada27" src="../../../img/mejora_2.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen27() {
        var imagenMostrada27 = document.getElementById('imagenMostrada27');

        // Mostrar la imagenMostrada27
        imagenMostrada27.style.display = 'block';
        }

        function ocultarImagen27() {
        var imagenMostrada27 = document.getElementById('imagenMostrada27');

        // Ocultar la imagen al soltar el botón
        imagenMostrada27.style.display = 'none';
        }
    </script>


<button onmousedown="mostrarImagen28()" onmouseup="ocultarImagen28()">ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada28" src="../../../img/mejora_3.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen28() {
        var imagenMostrada28 = document.getElementById('imagenMostrada28');

        // Mostrar la imagenMostrada27
        imagenMostrada28.style.display = 'block';
        }

        function ocultarImagen28() {
        var imagenMostrada28 = document.getElementById('imagenMostrada28');

        // Ocultar la imagen al soltar el botón
        imagenMostrada28.style.display = 'none';
        }
    </script>
  
    <hr>


     <p style="text-align: center;">
    \(  \int \frac{2x}{\sqrt{x^2+3}} \, \, dx \) = 
    <span id="formula4">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_4"   id="respuesta_4" oninput="actualizarFormula4()" 
    value="<?php echo $respuesta_4?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_4 ?>


    <button onmousedown="mostrarImagen7()" onmouseup="ocultarImagen7()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada7" src="../../../img/cambio.png" style="display: none; max-width: 100%" width="460">

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

    <img id="imagenMostrada8" src="../../../img/cambio_dos.png" style="display: none; max-width: 100%" width="460">

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

    <img id="imagenMostrada9" src="../../../img/cambio_tres.png" style="display: none; max-width: 100%" width="460">

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
    \(  \int \frac{6x+5}{\sqrt[3]{3x^2+5x}} \, \, dx \) = 
    <span id="formula5">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_5"   id="respuesta_5" oninput="actualizarFormula5()" 
    value="<?php echo $respuesta_5?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_5 ?>
    <hr>



    <p style="text-align: center;">
    \(  \int 3^x \, \, dx \) = 
    <span id="formula6">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_6"   id="respuesta_6" oninput="actualizarFormula6()" 
    value="<?php echo $respuesta_6?>" size="40" >
    </p>


    <button type="submit">Enviar</button> 
    <?php echo $verificar_6 ?>

    <button onmousedown="mostrarImagen18()" onmouseup="ocultarImagen18()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada18" src="../../../img/explica_exponencial.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen18() {
        var imagenMostrada18 = document.getElementById('imagenMostrada18');

        // Mostrar la imagen
        imagenMostrada18.style.display = 'block';
        }

        function ocultarImagen18() {
        var imagenMostrada18 = document.getElementById('imagenMostrada18');

        // Ocultar la imagen al soltar el botón
        imagenMostrada18.style.display = 'none';
        }
    </script>


  <button onmousedown="mostrarImagen19()" onmouseup="ocultarImagen19()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada19" src="../../../img/compensar.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen19() {
        var imagenMostrada19 = document.getElementById('imagenMostrada19');

        // Mostrar la imagen
        imagenMostrada19.style.display = 'block';
        }

        function ocultarImagen19() {
        var imagenMostrada19 = document.getElementById('imagenMostrada19');

        // Ocultar la imagen al soltar el botón
        imagenMostrada19.style.display = 'none';
        }
    </script>
 
    <button onmousedown="mostrarImagen10()" onmouseup="ocultarImagen10()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada10" src="../../../img/exponencial.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen10() {
        var imagenMostrada10 = document.getElementById('imagenMostrada10');

        // Mostrar la imagen
        imagenMostrada10.style.display = 'block';
        }

        function ocultarImagen10() {
        var imagenMostrada10 = document.getElementById('imagenMostrada10');

        // Ocultar la imagen al soltar el botón
        imagenMostrada10.style.display = 'none';
        }
    </script>
    <hr>


    <p style="text-align: center;">
    \(  \int 2^{3x} \, \, dx \) = 
    <span id="formula7">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_7"   id="respuesta_7" oninput="actualizarFormula7()" 
    value="<?php echo $respuesta_7?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_7 ?>


    <button onmousedown="mostrarImagen11()" onmouseup="ocultarImagen11()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada11" src="../../../img/exponencial_dos.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen11() {
        var imagenMostrada11 = document.getElementById('imagenMostrada11');

        // Mostrar la imagen
        imagenMostrada11.style.display = 'block';
        }

        function ocultarImagen11() {
        var imagenMostrada11 = document.getElementById('imagenMostrada11');

        // Ocultar la imagen al soltar el botón
        imagenMostrada11.style.display = 'none';
        }
    </script>


    <button onmousedown="mostrarImagen12()" onmouseup="ocultarImagen12()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada12" src="../../../img/exponencial_tres.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen12() {
        var imagenMostrada12 = document.getElementById('imagenMostrada12');

        // Mostrar la imagen
        imagenMostrada12.style.display = 'block';
        }

        function ocultarImagen12() {
        var imagenMostrada12 = document.getElementById('imagenMostrada12');

        // Ocultar la imagen al soltar el botón
        imagenMostrada12.style.display = 'none';
        }
    </script>
         
    <hr>

    <p style="text-align: center;">
    \(  \int 3^{2x} \, \, dx \) = 
    <span id="formula8">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_8"   id="respuesta_8" oninput="actualizarFormula8()" 
    value="<?php echo $respuesta_8?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_8 ?>
    <hr>


    <p style="text-align: center;">
    \(  \int 6x 6^{3x^2+1} \, \, dx \) = 
    <span id="formula9">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_9"   id="respuesta_9" oninput="actualizarFormula9()" 
    value="<?php echo $respuesta_9?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_9 ?>
    <hr>
 

 </div>




<div class="seccion derecha">
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
      
    <p style="text-align: center;">
    \(  \int e^{2x} \, \, dx \) = 
    <span id="formula10">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_10"   id="respuesta_10" oninput="actualizarFormula10()" 
    value="<?php echo $respuesta_10?>" size="40" >

    <button type="submit">Enviar</button> 
    <?php echo $verificar_10 ?>
    </p>



    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">concejo</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    siempre en la exponencial vamos a tener que sustituir
    todo el exponente. 
    </p>

    </div>

    <button onmousedown="mostrarImagen13()" onmouseup="ocultarImagen13()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada13" src="../../../img/exponencial_e.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen13() {
        var imagenMostrada13 = document.getElementById('imagenMostrada13');

        // Mostrar la imagen
        imagenMostrada13.style.display = 'block';
        }

        function ocultarImagen13() {
        var imagenMostrada13 = document.getElementById('imagenMostrada13');

        // Ocultar la imagen al soltar el botón
        imagenMostrada13.style.display = 'none';
        }
    </script>
     
    <hr>


    <p style="text-align: center;">
    \(  \int e^{5x+3} \, \, dx \) = 
    <span id="formula11">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_11"   id="respuesta_11" oninput="actualizarFormula11()" 
    value="<?php echo $respuesta_11?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_11 ?>
    <hr>


    <p style="text-align: center;">
    \(  \int 6\,e^{3x} \, \, dx \) = 
    <span id="formula12">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_12"   id="respuesta_12" oninput="actualizarFormula12()" 
    value="<?php echo $respuesta_12?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_12 ?>
    <hr>


    <p style="text-align: center;">
    \(  \int \frac{e^{5x}}{2} \, \, dx \) = 
    <span id="formula13">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_13"   id="respuesta_13" oninput="actualizarFormula13()" 
    value="<?php echo $respuesta_13?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_13 ?>
    <hr>

    
    <p style="text-align: center;">
    \(  \int  x\,e^{x^2} \, \, dx \) = 
    <span id="formula14">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_14"   id="respuesta_14" oninput="actualizarFormula14()" 
    value="<?php echo $respuesta_14?>" size="40" >
    </p>


    <button type="submit">Enviar</button> 
    <?php echo $verificar_14 ?>
    <hr>


    <p style="text-align: center;">
    \(  \int  t\,e^{t^2} \, \, dt \) = 
    <span id="formula15">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_15"   id="respuesta_15" oninput="actualizarFormula15()" 
    value="<?php echo $respuesta_15?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_15 ?>
    <hr>

    <p style="text-align: center;">
    \(  \int  2x^2\,e^{2x^3} \, \, dx \) = 
    <span id="formula16">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_16"   id="respuesta_16" oninput="actualizarFormula16()" 
    value="<?php echo $respuesta_16?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_16 ?>
    <hr>


    <p style="text-align: center;">
    \(  \int  \frac{Lnx}{x} \, \, dx \) = 
    <span id="formula17">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_17"   id="respuesta_17" oninput="actualizarFormula17()" 
    value="<?php echo $respuesta_17?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_17 ?>

    <button onmousedown="mostrarImagen14()" onmouseup="ocultarImagen14()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada14" src="../../../img/logaritmo.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen14() {
        var imagenMostrada14 = document.getElementById('imagenMostrada14');

        // Mostrar la imagen
        imagenMostrada14.style.display = 'block';
        }

        function ocultarImagen14() {
        var imagenMostrada14 = document.getElementById('imagenMostrada14');

        // Ocultar la imagen al soltar el botón
        imagenMostrada14.style.display = 'none';
        }
    </script>
    
     <button onmousedown="mostrarImagen15()" onmouseup="ocultarImagen15()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada15" src="../../../img/logaritmo_dos.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen15() {
        var imagenMostrada15 = document.getElementById('imagenMostrada15');

        // Mostrar la imagen
        imagenMostrada15.style.display = 'block';
        }

        function ocultarImagen15() {
        var imagenMostrada15 = document.getElementById('imagenMostrada15');

        // Ocultar la imagen al soltar el botón
        imagenMostrada15.style.display = 'none';
        }
    </script>
    <hr>


    <p style="text-align: center;">
    \(  \int  \frac{Lnx^2}{3x} \, \, dx \) = 
    <span id="formula18">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_18"   id="respuesta_18" oninput="actualizarFormula18()" 
    value="<?php echo $respuesta_18?>" size="40" >
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_18 ?>




    <button onmousedown="mostrarImagen20()" onmouseup="ocultarImagen20()">opcion_1</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada20" src="../../../img/opcion_1.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen20() {
        var imagenMostrada20 = document.getElementById('imagenMostrada20');

        // Mostrar la imagen
        imagenMostrada20.style.display = 'block';
        }

        function ocultarImagen20() {
        var imagenMostrada20 = document.getElementById('imagenMostrada20');

        // Ocultar la imagen al soltar el botón
        imagenMostrada20.style.display = 'none';
        }
    </script>
    

    <button onmousedown="mostrarImagen21()" onmouseup="ocultarImagen21()">opcion_1</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada21" src="../../../img/opcion_1_1.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen21() {
        var imagenMostrada21 = document.getElementById('imagenMostrada21');

        // Mostrar la imagen
        imagenMostrada21.style.display = 'block';
        }

        function ocultarImagen21() {
        var imagenMostrada21 = document.getElementById('imagenMostrada21');

        // Ocultar la imagen al soltar el botón
        imagenMostrada21.style.display = 'none';
        }
    </script>
     
    <button onmousedown="mostrarImagen22()" onmouseup="ocultarImagen22()">opcion_1</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada22" src="../../../img/opcion_1_2.png" style="display: none; max-width: 100%" width="460" height="400">

    <script>
        function mostrarImagen22() {
        var imagenMostrada22 = document.getElementById('imagenMostrada22');

        // Mostrar la imagen
        imagenMostrada22.style.display = 'block';
        }

        function ocultarImagen22() {
        var imagenMostrada22 = document.getElementById('imagenMostrada22');

        // Ocultar la imagen al soltar el botón
        imagenMostrada22.style.display = 'none';
        }
    </script>
     

    <button onmousedown="mostrarImagen23()" onmouseup="ocultarImagen23()">opcion_2</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada23" src="../../../img/opcion_2.png" style="display: none; max-width: 100%" width="460" height="400">

    <script>
        function mostrarImagen23() {
        var imagenMostrada23 = document.getElementById('imagenMostrada23');

        // Mostrar la imagen
        imagenMostrada23.style.display = 'block';
        }

        function ocultarImagen23() {
        var imagenMostrada23 = document.getElementById('imagenMostrada23');

        // Ocultar la imagen al soltar el botón
        imagenMostrada23.style.display = 'none';
        }
    </script>


    <button onmousedown="mostrarImagen24()" onmouseup="ocultarImagen24()">opcion_2</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada24" src="../../../img/opcion_2_1.png" style="display: none; max-width: 100%" width="460" height="400">

    <script>
        function mostrarImagen24() {
        var imagenMostrada24 = document.getElementById('imagenMostrada24');

        // Mostrar la imagen
        imagenMostrada24.style.display = 'block';
        }

        function ocultarImagen24() {
        var imagenMostrada24 = document.getElementById('imagenMostrada24');

        // Ocultar la imagen al soltar el botón
        imagenMostrada24.style.display = 'none';
        }
    </script>


    <button onmousedown="mostrarImagen25()" onmouseup="ocultarImagen25()">opcion_2</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada25" src="../../../img/opcion_2_3.png" style="display: none; max-width: 100%"  >

    <script>
        function mostrarImagen25() {
        var imagenMostrada25 = document.getElementById('imagenMostrada25');

        // Mostrar la imagen
        imagenMostrada25.style.display = 'block';
        }

        function ocultarImagen25() {
        var imagenMostrada25 = document.getElementById('imagenMostrada25');

        // Ocultar la imagen al soltar el botón
        imagenMostrada25.style.display = 'none';
        }
    </script>
        
    <hr>


    <p style="text-align: center;">
    \(  \int  \frac{dx}{xLnx} \, \, dx \) = 
    <span id="formula19">
        \(   \)
    </span>
    <br><br>
    <input type="text" name="respuesta_19"   id="respuesta_19" oninput="actualizarFormula19()" 
    value="<?php echo $respuesta_19?>" size="40" >
    </p>

    <button onmousedown="mostrarImagen16()" onmouseup="ocultarImagen16()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada16" src="../../../img/logaritmo_tres.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen16() {
        var imagenMostrada16 = document.getElementById('imagenMostrada16');

        // Mostrar la imagen
        imagenMostrada16.style.display = 'block';
        }

        function ocultarImagen16() {
        var imagenMostrada16 = document.getElementById('imagenMostrada16');

        // Ocultar la imagen al soltar el botón
        imagenMostrada16.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen17()" onmouseup="ocultarImagen17()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada17" src="../../../img/logaritmo_cuatro.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen17() {
        var imagenMostrada17 = document.getElementById('imagenMostrada17');

        // Mostrar la imagen
        imagenMostrada17.style.display = 'block';
        }

        function ocultarImagen17() {
        var imagenMostrada17 = document.getElementById('imagenMostrada17');

        // Ocultar la imagen al soltar el botón
        imagenMostrada17.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarMensaje3()" onmouseup="ocultarMensaje3()">concejo</button>
    <div id="mensaje3" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    cuando Lnx esta en el denominador suele terminar en ..Ln|Lnx|+C
    </p>
    </div>
    
    <br><br>
    <button type="submit">Enviar</button> 
    <?php echo $verificar_19 ?>
    <br>

    
 
        <br><br>
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
        href="trigonometricas.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
