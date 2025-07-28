<?php
 
for ($i = 1; $i <= 230; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 230; $i++) {
    ${"verificar_" . $i} = '';
}

     

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas para las tablas de multiplicar
        
        // Tabla del 12
        $respuesta_111 = '24'; 
        $respuesta_112 = '36';
        $respuesta_113 = '48';
        $respuesta_114 = '60';
        $respuesta_115 = '72';
        $respuesta_116 = '84';
        $respuesta_117 = '96';
        $respuesta_118 = '108';
        $respuesta_119 = '120';
        $respuesta_120 = '132';
        $respuesta_121 = '144';
        
        // Tabla del 13
        $respuesta_1 = '26';
        $respuesta_2 = '39';
        $respuesta_3 = '52';
        $respuesta_4 = '65';
        $respuesta_5 = '78';
        $respuesta_6 = '91';
        $respuesta_7 = '104';
        $respuesta_8 = '117';
        $respuesta_9 = '130';
        $respuesta_10 = '143';
        $respuesta_11 = '156';
        
        // Tabla del 14
        $respuesta_12 = '28';
        $respuesta_13 = '42';
        $respuesta_14 = '56';
        $respuesta_15 = '70';
        $respuesta_16 = '84';
        $respuesta_17 = '98';
        $respuesta_18 = '112';
        $respuesta_19 = '126';
        $respuesta_20 = '140';
        $respuesta_21 = '154';
        $respuesta_22 = '168';
        
        // Tabla del 15
        $respuesta_23 = '30';
        $respuesta_24 = '45';
        $respuesta_25 = '60';
        $respuesta_26 = '75';
        $respuesta_27 = '90';
        $respuesta_28 = '105';
        $respuesta_29 = '120';
        $respuesta_30 = '135';
        $respuesta_31 = '150';
        $respuesta_32 = '165';
        $respuesta_33 = '180';
        
        // Tabla del 16
        $respuesta_34 = '32';
        $respuesta_35 = '48';
        $respuesta_36 = '64';
        $respuesta_37 = '80';
        $respuesta_38 = '96';
        $respuesta_39 = '112';
        $respuesta_40 = '128';
        $respuesta_41 = '144';
        $respuesta_42 = '160';
        $respuesta_43 = '176';
        $respuesta_44 = '192';
        
        // Tabla del 17
        $respuesta_45 = '34';
        $respuesta_46 = '51';
        $respuesta_47 = '68';
        $respuesta_48 = '85';
        $respuesta_49 = '102';
        $respuesta_50 = '119';
        $respuesta_51 = '136';
        $respuesta_52 = '153';
        $respuesta_53 = '170';
        $respuesta_54 = '187';
        $respuesta_55 = '204';
        
        // Tabla del 18
        $respuesta_56 = '36';
        $respuesta_57 = '54';
        $respuesta_58 = '72';
        $respuesta_59 = '90';
        $respuesta_60 = '108';
        $respuesta_61 = '126';
        $respuesta_62 = '144';
        $respuesta_63 = '162';
        $respuesta_64 = '180';
        $respuesta_65 = '198';
        $respuesta_66 = '216';
        
        // Tabla del 19
        $respuesta_67 = '38';
        $respuesta_68 = '57';
        $respuesta_69 = '76';
        $respuesta_70 = '95';
        $respuesta_71 = '114';
        $respuesta_72 = '133';
        $respuesta_73 = '152';
        $respuesta_74 = '171';
        $respuesta_75 = '190';
        $respuesta_76 = '209';
        $respuesta_77 = '228';
        
        // Tabla del 20
        $respuesta_78 = '40';
        $respuesta_79 = '60';
        $respuesta_80 = '80';
        $respuesta_81 = '100';
        $respuesta_82 = '120';
        $respuesta_83 = '140';
        $respuesta_84 = '160';
        $respuesta_85 = '180';
        $respuesta_86 = '200';
        $respuesta_87 = '220';
        $respuesta_88 = '240';
        
        // Tabla del 21
        $respuesta_89 = '42';
        $respuesta_90 = '63';
        $respuesta_91 = '84';
        $respuesta_92 = '105';
        $respuesta_93 = '126';
        $respuesta_94 = '147';
        $respuesta_95 = '168';
        $respuesta_96 = '189';
        $respuesta_97 = '210';
        $respuesta_98 = '231';
        $respuesta_99 = '252';
        
        // Tabla del 22
        $respuesta_100 = '44';
        $respuesta_101 = '66';
        $respuesta_102 = '88';
        $respuesta_103 = '110';
        $respuesta_104 = '132'; 
        $respuesta_105 = '154';
        $respuesta_106 = '176';
        $respuesta_107 = '198';
        $respuesta_108 = '220';
        $respuesta_109 = '242';
        $respuesta_110 = '264';
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
 // Verificar la respuesta 1
$respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
if ($respuesta_1 === '\frac{180}{\pi}') {  
    $verificar_1 = "correcto";
} elseif ($respuesta_1 === '') {
    $verificar_1 = '';
} else {
    $verificar_1 = "incorrecto";
}

// Verificar la respuesta 2
$respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
if ($respuesta_2 === '\frac{180}{\pi}') {  
    $verificar_2 = "correcto";
} elseif ($respuesta_2 === '') {
    $verificar_2 = '';
} else {
    $verificar_2 = "incorrecto";
}

// Respuesta 3: π/6 = 30°
$respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
if ($respuesta_3 === '30^\circ') {  
    $verificar_3 = "correcto";
} elseif ($respuesta_3 === '') {
    $verificar_3 = '';
} else {
    $verificar_3 = "incorrecto";
}

// Respuesta 4: π/4 = 45°
$respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
if ($respuesta_4 === '45^\circ') {  
    $verificar_4 = "correcto";
} elseif ($respuesta_4 === '') {
    $verificar_4 = '';
} else {
    $verificar_4 = "incorrecto";
}

// Respuesta 5: π/3 = 60°
$respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
if ($respuesta_5 === '60^\circ') {  
    $verificar_5 = "correcto";
} elseif ($respuesta_5 === '') {
    $verificar_5 = '';
} else {
    $verificar_5 = "incorrecto";
}

// Respuesta 6: π/2 = 90°
$respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
if ($respuesta_6 === '90^\circ') {  
    $verificar_6 = "correcto";
} elseif ($respuesta_6 === '') {
    $verificar_6 = '';
} else {
    $verificar_6 = "incorrecto";
}

// Respuesta 7: 2π/3 = 120°
$respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
if ($respuesta_7 === '120^\circ') {  
    $verificar_7 = "correcto";
} elseif ($respuesta_7 === '') {
    $verificar_7 = '';
} else {
    $verificar_7 = "incorrecto";
}

// Respuesta 8: 3π/4 = 135°
$respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
if ($respuesta_8 === '135^\circ') {  
    $verificar_8 = "correcto";
} elseif ($respuesta_8 === '') {
    $verificar_8 = '';
} else {
    $verificar_8 = "incorrecto";
}

// Respuesta 9: 5π/6 = 150°
$respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
if ($respuesta_9 === '150^\circ') {  
    $verificar_9 = "correcto";
} elseif ($respuesta_9 === '') {
    $verificar_9 = '';
} else {
    $verificar_9 = "incorrecto";
}

// Respuesta 10: π = 180°
$respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
if ($respuesta_10 === '180^\circ') {  
    $verificar_10 = "correcto";
} elseif ($respuesta_10 === '') {
    $verificar_10 = '';
} else {
    $verificar_10 = "incorrecto";
}

// Respuesta 11: 7π/6 = 210°
$respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
if ($respuesta_11 === '210^\circ') {  
    $verificar_11 = "correcto";
} elseif ($respuesta_11 === '') {
    $verificar_11 = '';
} else {
    $verificar_11 = "incorrecto";
}

// Respuesta 12: 5π/4 = 225°
$respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
if ($respuesta_12 === '225^\circ') {  
    $verificar_12 = "correcto";
} elseif ($respuesta_12 === '') {
    $verificar_12 = '';
} else {
    $verificar_12 = "incorrecto";
}

// Respuesta 13: 4π/3 = 240°
$respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
if ($respuesta_13 === '240^\circ') {  
    $verificar_13 = "correcto";
} elseif ($respuesta_13 === '') {
    $verificar_13 = '';
} else {
    $verificar_13 = "incorrecto";
}

// Respuesta 14: 3π/2 = 270°
$respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
if ($respuesta_14 === '270^\circ') {  
    $verificar_14 = "correcto";
} elseif ($respuesta_14 === '') {
    $verificar_14 = '';
} else {
    $verificar_14 = "incorrecto";
}

// Respuesta 15: 5π/3 = 300°
$respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
if ($respuesta_15 === '300^\circ') {  
    $verificar_15 = "correcto";
} elseif ($respuesta_15 === '') {
    $verificar_15 = '';
} else {
    $verificar_15 = "incorrecto";
}

// Respuesta 16: 7π/4 = 315°
$respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
if ($respuesta_16 === '315^\circ') {  
    $verificar_16 = "correcto";
} elseif ($respuesta_16 === '') {
    $verificar_16 = '';
} else {
    $verificar_16 = "incorrecto";
}

// Respuesta 17: 11π/6 = 330°
$respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
if ($respuesta_17 === '330^\circ') {  
    $verificar_17 = "correcto";
} elseif ($respuesta_17 === '') {
    $verificar_17 = '';
} else {
    $verificar_17 = "incorrecto";
}

// Respuesta 18: 2π = 360°
$respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
if ($respuesta_18 === '360^\circ') {  
    $verificar_18 = "correcto";
} elseif ($respuesta_18 === '') {
    $verificar_18 = '';
} else {
    $verificar_18 = "incorrecto";
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
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
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
    var f = document.getElementById('respuesta_1').value || "";
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
 <h3>➤ De radianes a grados:</h3>
<p>Multiplica por 
  <span id="formula">\( \)</span> 
  <input type="text" name="respuesta_1" id="respuesta_1"
  oninput="actualizarFormula(); actualizarFormula2();"
  value="<?php echo $respuesta_1 ?>" size="14">    
</p>
<p>\( \theta^\circ = \theta \text{ (rad)} \cdot \)
  <span id="formula2">\( \)</span>
</p>

<button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Solucion</button>
<div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
  <h4>Ejemplos:</h4>
  <ul>
    <li>\( \frac{\pi}{3} = \frac{\pi}{3} \cdot \frac{180}{\pi} = 60^\circ \)</li>
    <li>\( \pi = 180^\circ \)</li>
    <li>\( \frac{3\pi}{2} = 270^\circ \)</li>
  </ul>
</div>

<ul>
  <li>\( \frac{\pi}{6} = \)
    <span id="formula3">\( \)</span>
    <input type="text" name="respuesta_3" id="respuesta_3" oninput="actualizarFormula3()" 
    value="<?php echo $respuesta_3 ?>" size="15">

    <?php echo $verificar_3; ?>
 
  </li>
  <li>\( \frac{\pi}{4} = \)
    <span id="formula4">\( \)</span>
    <input type="text" name="respuesta_4" id="respuesta_4" oninput="actualizarFormula4()" 
    value="<?php echo $respuesta_4 ?>" size="15">

    <?php echo $verificar_4; ?>
 
  </li>
  <li>\( \frac{\pi}{3} = \)
    <span id="formula5">\( \)</span>
    <input type="text" name="respuesta_5" id="respuesta_5" oninput="actualizarFormula5()" 
    value="<?php echo $respuesta_5 ?>" size="15">

    <?php echo $verificar_5; ?>
 
  </li>
  <li>\( \frac{\pi}{2} = \)
    <span id="formula6">\( \)</span>
    <input type="text" name="respuesta_6" id="respuesta_6" oninput="actualizarFormula6()" 
    value="<?php echo $respuesta_6 ?>" size="15">

 <?php echo $verificar_6; ?>
 
  </li>
  <li>\( \frac{2\pi}{3} = \)
    <span id="formula7">\( \)</span>
    <input type="text" name="respuesta_7" id="respuesta_7" oninput="actualizarFormula7()" 
    value="<?php echo $respuesta_7 ?>" size="15">
 
<?php echo $verificar_7; ?>
 
  </li>
  <li>\( \frac{3\pi}{4} = \)
    <span id="formula8">\( \)</span>
    <input type="text" name="respuesta_8" id="respuesta_8" oninput="actualizarFormula8()" 
    value="<?php echo $respuesta_8 ?>" size="15">
 
<?php echo $verificar_8; ?>
 
  </li>
  <li>\( \frac{5\pi}{6} = \)
    <span id="formula9">\( \)</span>
    <input type="text" name="respuesta_9" id="respuesta_9" oninput="actualizarFormula9()" 
    value="<?php echo $respuesta_9 ?>" size="15">

 
<?php echo $verificar_9; ?>
 
  </li>
  <li>\( \pi = \)
    <span id="formula10">\( \)</span>
    <input type="text" name="respuesta_10" id="respuesta_10" oninput="actualizarFormula10()" 
    value="<?php echo $respuesta_10 ?>" size="15">

<?php echo $verificar_10; ?>

  </li>
  <li>\( \frac{7\pi}{6} = \)
    <span id="formula11">\( \)</span>
    <input type="text" name="respuesta_11" id="respuesta_11" oninput="actualizarFormula11()" 
    value="<?php echo $respuesta_11 ?>" size="15">


<?php echo $verificar_11; ?>

  </li>
  <li>\( \frac{5\pi}{4} = \)
    <span id="formula12">\( \)</span>
    <input type="text" name="respuesta_12" id="respuesta_12" oninput="actualizarFormula12()" 
    value="<?php echo $respuesta_12 ?>" size="15">


<?php echo $verificar_12; ?>

  </li>
  <li>\( \frac{4\pi}{3} = \)
    <span id="formula13">\( \)</span>
    <input type="text" name="respuesta_13" id="respuesta_13" oninput="actualizarFormula13()" 
    value="<?php echo $respuesta_13 ?>" size="15">


<?php echo $verificar_13; ?>

  </li>
  <li>\( \frac{3\pi}{2} = \)
    <span id="formula14">\( \)</span>
    <input type="text" name="respuesta_14" id="respuesta_14" oninput="actualizarFormula14()" 
    value="<?php echo $respuesta_14 ?>" size="15">


<?php echo $verificar_14; ?>

  </li>
  <li>\( \frac{5\pi}{3} = \)
    <span id="formula15">\( \)</span>
    <input type="text" name="respuesta_15" id="respuesta_15" oninput="actualizarFormula15()" 
    value="<?php echo $respuesta_15 ?>" size="15">


<?php echo $verificar_15; ?>

  </li>
  <li>\( \frac{7\pi}{4} = \)
    <span id="formula16">\( \)</span>
    <input type="text" name="respuesta_16" id="respuesta_16" oninput="actualizarFormula16()" 
    value="<?php echo $respuesta_16 ?>" size="15">

    <?php echo $verificar_16; ?>
 
  </li>
  <li>\( \frac{11\pi}{6} = \)
    <span id="formula17">\( \)</span>
    <input type="text" name="respuesta_17" id="respuesta_17" oninput="actualizarFormula17()" 
    value="<?php echo $respuesta_17 ?>" size="15">

 <?php echo $verificar_17; ?>
   </li>
  <li>\( 2\pi = \)
    <span id="formula18">\( \)</span>
    <input type="text" name="respuesta_18" id="respuesta_18" oninput="actualizarFormula18()" 
    value="<?php echo $respuesta_18 ?>" size="15">

    <?php echo $verificar_18; ?>

  </li>
</ul>

<button type="submit">Enviar</button>
 
 


<hr>

   
</div>




<div class="seccion derecha">
   
 
        
</div>
</div>
 </form>
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
