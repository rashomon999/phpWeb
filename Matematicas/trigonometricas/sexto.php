<?php
 
for ($i = 1; $i <= 12; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 12; $i++) {
    ${"verificar_" . $i} = '';
}

     

$mostrar_solucion = '';

if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas (versión canónica de cada identidad)
        $respuesta_1 = '\sin\left(\frac{\alpha}{2}\right)=\pm\sqrt{\frac{1-\cos(\alpha)}{2}}';
        $respuesta_2 = '\cos\left(\frac{\alpha}{2}\right)=\pm\sqrt{\frac{1+\cos(\alpha)}{2}}';
        $respuesta_3 = '\tan\left(\frac{\alpha}{2}\right)=\pm\sqrt{\frac{1-\cos(\alpha)}{1+\cos(\alpha)}}';
        $respuesta_4 = '\sin^2(\alpha)=\frac{1-\cos(2\alpha)}{2}';
        $respuesta_5 = '\cos^2(\alpha)=\frac{1+\cos(2\alpha)}{2}';
        $respuesta_6 = '\tan^2(\alpha)=\frac{1-\cos(2\alpha)}{1+\cos(2\alpha)}';
        $respuesta_7 = '\sin(\alpha+\beta)=\sin(\alpha)\cos(\beta)+\cos(\alpha)\sin(\beta)';
        $respuesta_8 = '\cos(\alpha+\beta)=\cos(\alpha)\cos(\beta)-\sin(\alpha)\sin(\beta)';
        $respuesta_9 = '\tan(\alpha+\beta)=\frac{\tan(\alpha)+\tan(\beta)}{1-\tan(\alpha)\tan(\beta)}';
        $respuesta_10 = '\sin(2\alpha)=2\sin(\alpha)\cos(\alpha)';
        $respuesta_11 = '\cos(2\alpha)=\cos^2(\alpha)-\sin^2(\alpha)';
        $respuesta_12 = '\tan(2\alpha)=\frac{2\tan(\alpha)}{1-\tan^2(\alpha)}';


        // Marcar todas como correctas
        $verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = $verificar_5 = 
        $verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
        $verificar_11 = $verificar_12 = "correcto";
    } else {
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
if ($respuesta_1 === '\sin\left(\frac{\alpha}{2}\right)=\pm\sqrt{\frac{1-\cos(\alpha)}{2}}'
|| $respuesta_1 === '\sin\left(\frac{a}{2}\right)=\pm\sqrt{\frac{1-\cos(a)}{2}}'
|| $respuesta_1 === '\sin(\frac{a}{2})=\pm\sqrt{\frac{1-\cos(a)}{2}}'
|| $respuesta_1 === '\sin(\frac{a}{2})=\pm\sqrt{\frac{1-cos(a)}{2}}'
|| $respuesta_1 === 'Sin(\frac{a}{2})=\pm\sqrt{\frac{1-Cos(a)}{2}}'
|| $respuesta_1 === 'Sen(\frac{a}{2})=\pm\sqrt{\frac{1-Cos(a)}{2}}'
 
) { 
    $verificar_1 = "correcto";
} elseif ($respuesta_1 === '') {
    $verificar_1 = '';
} else {
    $verificar_1 = "incorrecto";
}

$respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
if ($respuesta_2 === '\cos\left(\frac{\alpha}{2}\right)=\pm\sqrt{\frac{1+\cos(\alpha)}{2}}'
|| $respuesta_2 === '\cos(\frac{a}{2})=\pm\sqrt{\frac{1+\cos(a)}{2}}'
|| $respuesta_2 === '\cos(\frac{a}{2})=\pm\sqrt{\frac{1+cos(a)}{2}}'
|| $respuesta_2 === 'Cos(\frac{a}{2})=\pm\sqrt{\frac{1+Cos(a)}{2}}'

 
) { 
    $verificar_2 = "correcto";
} elseif ($respuesta_2 === '') {
    $verificar_2 = '';
} else {
    $verificar_2 = "incorrecto";
}

$respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
if ($respuesta_3 === '\tan\left(\frac{\alpha}{2}\right)=\pm\sqrt{\frac{1-\cos(\alpha)}{1+\cos(\alpha)}}'
|| $respuesta_3 === '\tan(\frac{a}{2})=\pm\sqrt{\frac{1-\cos(a)}{1+\cos(a)}}'
|| $respuesta_3 === '\tan(\frac{a}{2})=\pm\sqrt{\frac{1-cos(a)}{1+cos(a)}}'
|| $respuesta_3 === 'Tan(\frac{a}{2})=\pm\sqrt{\frac{1-Cos(a)}{1+Cos(a)}}'

) { 
    $verificar_3 = "correcto";
} elseif ($respuesta_3 === '') {
    $verificar_3 = '';
} else {
    $verificar_3 = "incorrecto";
}


$respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
$respuesta_4_dos = str_replace(' ','',$respuesta_4);

if ($respuesta_4_dos === '\sin^2(\alpha)=\frac{1}{2}-\frac{1}{2}\cos(2\alpha)'
|| $respuesta_4_dos === 'sin^2(\alpha)=\frac{1}{2}-\frac{1}{2}\cos(2\alpha)'
|| $respuesta_4_dos === '\sin^2(a)=\frac{1}{2}-\frac{1}{2}\cos(2a)'
|| $respuesta_4_dos === '\sin^2(\alpha)=\frac{1-\cos(2\alpha)}{2}'
|| $respuesta_4_dos === 'sin^2(\alpha)=\frac{1-\cos(2\alpha)}{2}'
|| $respuesta_4_dos === 'Sin^2(a)=\frac{1-Cos(2a)}{2}'
|| $respuesta_4_dos === 'Sin^2(\alpha)=\frac{1-Cos(2\alpha)}{2}'
 
) { 
    $verificar_4 = "correcto";
} elseif ($respuesta_4_dos === '') {
    $verificar_4 = '';
} else {
    $verificar_4 = "incorrecto";
}

$respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
$respuesta_5_dos = str_replace(' ','',$respuesta_5);

if ($respuesta_5_dos === '\cos^2(\alpha)=\frac{1}{2}+\frac{1}{2}\cos(2\alpha)'
|| $respuesta_5_dos === 'cos^2(\alpha)=\frac{1}{2}+\frac{1}{2}\cos(2\alpha)'
|| $respuesta_5_dos === '\cos^2(a)=\frac{1}{2}+\frac{1}{2}\cos(2a)'
|| $respuesta_5_dos === '\cos^2(\alpha)=\frac{1+\cos(2\alpha)}{2}'
|| $respuesta_5_dos === 'cos^2(\alpha)=\frac{1+\cos(2\alpha)}{2}'
|| $respuesta_5_dos === 'cos^2(a)=\frac{1+\cos(2a)}{2}'
|| $respuesta_5_dos === 'Cos^2(a)=\frac{1+Cos(2a)}{2}'
 
 
 
) { 
    $verificar_5 = "correcto";
} elseif ($respuesta_5_dos === '') {
    $verificar_5 = ''; 
} else {
    $verificar_5 = "incorrecto";
}

$respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
$respuesta_6_dos = str_replace(' ','',$respuesta_6);

if ($respuesta_6_dos === '\tan^2(\alpha)=\frac{1-\cos(2\alpha)}{1+\cos(2\alpha)}'
|| $respuesta_6_dos === 'tan^2(\alpha)=\frac{1-\cos(2\alpha)}{1+\cos(2\alpha)}'
|| $respuesta_6_dos === '\tan^2(a)=\frac{1-\cos(2a)}{1+\cos(2a)}'
|| $respuesta_6_dos === 'tan^2(a)=\frac{1-\cos(2a)}{1+\cos(2a)}'
|| $respuesta_6_dos === 'tan^2(a)=\frac{1-cos(2a)}{1+cos(2a)}'
|| $respuesta_6_dos === 'Tan^2(a)=\frac{1-Cos(2a)}{1+Cos(2a)}'
 
) { 
    $verificar_6 = "correcto";
} elseif ($respuesta_6_dos === '') {
    $verificar_6 = '';
} else {
    $verificar_6 = "incorrecto";
}

  // Verificar la respuesta 7
$respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
$respuesta_7_dos = str_replace(' ', '', $respuesta_7);

if ($respuesta_7_dos === '\sin(\alpha+\beta)=\sin(\alpha)\cos(\beta)+\cos(\alpha)\sin(\beta)'
|| $respuesta_7_dos === '\sin(a+b)=\sin(a)\cos(b)+\cos(a)\sin(b)'
|| $respuesta_7_dos === 'sin(a+b)=sin(a)cos(b)+cos(a)sin(b)'
|| $respuesta_7_dos === 'sin(a+b)=sen(a)cos(b)+cos(a)sin(b)'
|| $respuesta_7_dos === 'Sen(a+b)=Sen(a)Cos(b)+Sen(b)Cos(a)'
 
) {
    $verificar_7 = "correcto";
} elseif ($respuesta_7_dos === '') {
    $verificar_7 = '';
} else {
    $verificar_7 = "incorrecto"; 
}

// Verificar la respuesta 8
$respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
$respuesta_8_dos = str_replace(' ', '', $respuesta_8);

if ($respuesta_8_dos === '\cos(\alpha+\beta)=\cos(\alpha)\cos(\beta)-\sin(\alpha)\sin(\beta)'
|| $respuesta_8_dos === '\cos(a+b)=\cos(a)\cos(b)-\sin(a)\sin(b)'
|| $respuesta_8_dos === 'cos(a+b)=cos(a)cos(b)-sin(a)sin(b)'
) {
    $verificar_8 = "correcto";
} elseif ($respuesta_8_dos === '') {
    $verificar_8 = '';
} else {
    $verificar_8 = "incorrecto";
}

// Verificar la respuesta 9
$respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
$respuesta_9_dos = str_replace(' ', '', $respuesta_9);

if ($respuesta_9_dos === '\tan(\alpha+\beta)=\frac{\tan(\alpha)+\tan(\beta)}{1-\tan(\alpha)\tan(\beta)}'
|| $respuesta_9_dos === '\tan(a+b)=\frac{\tan(a)+\tan(b)}{1-\tan(a)\tan(b)}'
|| $respuesta_9_dos === '\tan(a+b)=\frac{tan(a)+tan(b)}{1-tan(a)tan(b)}'
) {
    $verificar_9 = "correcto";
} elseif ($respuesta_9_dos === '') {
    $verificar_9 = '';
} else {
    $verificar_9 = "incorrecto";
}

// Verificar la respuesta 10
$respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
$respuesta_10_dos = str_replace(' ', '', $respuesta_10);

if ($respuesta_10_dos === '\sin(2\alpha)=2\sin(\alpha)\cos(\alpha)'
|| $respuesta_10_dos === '\sin(2a)=2\sin(a)\cos(a)'
|| $respuesta_10_dos === 'sin(2a)=2sin(a)cos(a)'
) {
    $verificar_10 = "correcto";
} elseif ($respuesta_10_dos === '') {
    $verificar_10 = '';
} else {
    $verificar_10 = "incorrecto";
}

// Verificar la respuesta 11
$respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
$respuesta_11_dos = str_replace(' ', '', $respuesta_11);

if ($respuesta_11_dos === '\cos(2\alpha)=\cos^2(\alpha)-\sin^2(\alpha)'
|| $respuesta_11_dos === '\cos(2a)=\cos^2(a)-\sin^2(a)'
|| $respuesta_11_dos === 'cos(2a)=cos^2(a)-sin^2(a)'
) {
    $verificar_11 = "correcto";
} elseif ($respuesta_11_dos === '') {
    $verificar_11 = '';
} else {
    $verificar_11 = "incorrecto";
}

// Verificar la respuesta 12
$respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
$respuesta_12_dos = str_replace(' ', '', $respuesta_12);

if ($respuesta_12_dos === '\tan(2\alpha)=\frac{2\tan(\alpha)}{1-\tan^2(\alpha)}'
|| $respuesta_12_dos === '\tan(2a)=\frac{2\tan(a)}{1-\tan^2(a)}'
|| $respuesta_12_dos === 'tan(2a)=\frac{2tan(a)}{1-tan^2(a)}'
) {
    $verificar_12 = "correcto";
} elseif ($respuesta_12_dos === '') {
    $verificar_12 = '';
} else {
    $verificar_12 = "incorrecto";
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
    <link rel="stylesheet" href="../../style_2_0.css">
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
    height: 370vh;
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
        actualizarFormula20();
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

<form action="./sexto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

<div class="form-container">

<div class="seccion izquierda">
 
    <h4>Identidades del ángulo mitad (toda la definición) (variable a utilizar: a)</h4>

<br><br>
<span id="formula">\[ \]</span>
<input type="text" name="respuesta_1" id="respuesta_1" oninput="actualizarFormula()" 
value="<?php echo $respuesta_1 ?>" size="50">

<br><br>
<span id="formula2">\[ \]</span>
<input type="text" name="respuesta_2" id="respuesta_2" oninput="actualizarFormula2()" 
value="<?php echo $respuesta_2 ?>" size="50">

<br><br>
<span id="formula3">\[ \]</span>
<input type="text" name="respuesta_3" id="respuesta_3" oninput="actualizarFormula3()" 
value="<?php echo $respuesta_3 ?>" size="50">

<br><br>
<button type="submit">Enviar</button>
<?php echo $verificar_1 ?>
<?php echo $verificar_2 ?>
<?php echo $verificar_3 ?>


 
<button onmousedown="mostrarImagen3()" onmouseup="ocultarImagen3()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada3" src="../../img/cuadrante.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen3() {
        var imagenMostrada3 = document.getElementById('imagenMostrada3');

        // Mostrar la imagen
        imagenMostrada3.style.display = 'block';
        }

        function ocultarImagen3() {
        var imagenMostrada3 = document.getElementById('imagenMostrada3');

        // Ocultar la imagen al soltar el botón
        imagenMostrada3.style.display = 'none';
        }
    </script>


<hr>

      <strong>explicacion:</strong> <a href="explicacion_2.php">
    <button type="button">explicacion</button>
    </a>
<hr>
<h4>Identidades de reducción de potencias (sin, cos, tan) (escribir esta vez como una fraccion)</h4>  

<br><br>
<span id="formula4">\( \)</span>
<input type="text" name="respuesta_4" id="respuesta_4" oninput="actualizarFormula4()" 
value="<?php echo $respuesta_4 ?>" size="30">

<br><br>
<span id="formula5">\( \)</span>
<input type="text" name="respuesta_5" id="respuesta_5" oninput="actualizarFormula5()" 
value="<?php echo $respuesta_5 ?>" size="30">

<br><br>
<span id="formula6">\( \)</span>
<input type="text" name="respuesta_6" id="respuesta_6" oninput="actualizarFormula6()" 
value="<?php echo $respuesta_6 ?>" size="30">

<br><br>
<button type="submit">Enviar</button>
<?php echo $verificar_4 ?>
<?php echo $verificar_5 ?>
<?php echo $verificar_6 ?>
<br><br>
<hr>

 
</div>




<div class="seccion derecha">
  <h4>Identidades de la suma y resta de ángulos</h4>
<p>orden: sin, cos, tan:</p>
<p><strong>utilizar \alpha , \beta, \cos, \sin</strong></p>

<span id="formula7">
    \( ... \)
</span>
<br>
<input type="text" name="respuesta_7" size="40" id="respuesta_7" oninput="actualizarFormula7()"  
value="<?php echo $respuesta_7 ?>">
<br>

<span id="formula8">
    \( ... \)
</span>
<br>
<input type="text" name="respuesta_8" size="40" id="respuesta_8" oninput="actualizarFormula8()"  
value="<?php echo $respuesta_8 ?>">
<br>

<span id="formula9">
    \( ... \)
</span>
<br>
<input type="text" name="respuesta_9" size="40" id="respuesta_9" oninput="actualizarFormula9()"  
value="<?php echo $respuesta_9 ?>">
<br>

   <button type="submit">Enviar</button> 
    <?php echo $verificar_7 ?>
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>

<hr>
<h4>Identidades del ángulo doble</h4>

<span id="formula10">
    \( ... \)
</span>
<br>
<input type="text" name="respuesta_10" size="40" id="respuesta_10" oninput="actualizarFormula10()"  
value="<?php echo $respuesta_10 ?>">
<br>

 
<span id="formula11">
    \( ... \)
</span>
<br>
<input type="text" name="respuesta_11" size="40" id="respuesta_11" oninput="actualizarFormula11()"  
value="<?php echo $respuesta_11 ?>">
<br>

<span id="formula12">
    \( ... \)
</span>
<br>
<input type="text" name="respuesta_12" size="40" id="respuesta_12" oninput="actualizarFormula12()"  
value="<?php echo $respuesta_12 ?>">
<br>




            <br><br>
  <button onmousedown="mostrarImagen()" onmouseup="ocultarImagen()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada" src="../../img/angulo.png" style="display: none; max-width: 100%" width="560">

    <script>
        function mostrarImagen() {
        var imagenMostrada = document.getElementById('imagenMostrada');

        // Mostrar la imagen
        imagenMostrada.style.display = 'block';
        }

        function ocultarImagen() {
        var imagenMostrada = document.getElementById('imagenMostrada');

        // Ocultar la imagen al soltar el botón
        imagenMostrada.style.display = 'none';
        }
    </script>

<button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../img/angulo_dos.png" style="display: none; max-width: 100%" width="460">

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

    <button type="submit">Enviar</button> 
 
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?>
    <?php echo $verificar_12 ?>


    <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
    <hr>

</div>
</div>
</form>

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
