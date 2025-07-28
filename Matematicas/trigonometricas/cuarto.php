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
        

        for ($i = 1; $i <= 130; $i++) {
        ${"verificar_$i"} = "correcto";
        }

      } else {
    

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === '\pi') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'radianes') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }
    // Verificar la respuesta de la novena pregunta
    $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
    if ($respuesta_9 === '\frac{\pi}{180}') {  
        $verificar_9 = "correcto";
    } elseif ($respuesta_9 === '') {
        $verificar_9 = '';
    } else {
        $verificar_9 = "incorrecto";
    }

   // Pregunta 10: 30°
$respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
if ($respuesta_10 === '\\frac{\\pi}{6}') {
    $verificar_10 = "correcto";
} elseif ($respuesta_10 === '') {
    $verificar_10 = '';
} else {
    $verificar_10 = "incorrecto";
}

// Pregunta 11: 45°
$respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
if ($respuesta_11 === '\\frac{\\pi}{4}') {
    $verificar_11 = "correcto";
} elseif ($respuesta_11 === '') {
    $verificar_11 = '';
} else {
    $verificar_11 = "incorrecto";
}

// Pregunta 12: 60°
$respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
if ($respuesta_12 === '\\frac{\\pi}{3}') {
    $verificar_12 = "correcto";
} elseif ($respuesta_12 === '') {
    $verificar_12 = '';
} else {
    $verificar_12 = "incorrecto";
}

// Pregunta 13: 90°
$respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
if ($respuesta_13 === '\\frac{\\pi}{2}') {
    $verificar_13 = "correcto";
} elseif ($respuesta_13 === '') {
    $verificar_13 = '';
} else {
    $verificar_13 = "incorrecto";
}

// Pregunta 14: 120°
$respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
if ($respuesta_14 === '\\frac{2\\pi}{3}') {
    $verificar_14 = "correcto";
} elseif ($respuesta_14 === '') {
    $verificar_14 = '';
} else {
    $verificar_14 = "incorrecto";
}

// Pregunta 15: 135°
$respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
if ($respuesta_15 === '\\frac{3\\pi}{4}') {
    $verificar_15 = "correcto";
} elseif ($respuesta_15 === '') {
    $verificar_15 = '';
} else {
    $verificar_15 = "incorrecto";
}

// Pregunta 16: 150°
$respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
if ($respuesta_16 === '\\frac{5\\pi}{6}') {
    $verificar_16 = "correcto";
} elseif ($respuesta_16 === '') {
    $verificar_16 = '';
} else {
    $verificar_16 = "incorrecto";
}

// Pregunta 17: 180°
$respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
if ($respuesta_17 === '\\pi') {
    $verificar_17 = "correcto";
} elseif ($respuesta_17 === '') {
    $verificar_17 = '';
} else {
    $verificar_17 = "incorrecto";
}

// Pregunta 18: 210°
$respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
if ($respuesta_18 === '\\frac{7\\pi}{6}') {
    $verificar_18 = "correcto";
} elseif ($respuesta_18 === '') {
    $verificar_18 = '';
} else {
    $verificar_18 = "incorrecto";
}

// Pregunta 19: 225°
$respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
if ($respuesta_19 === '\\frac{5\\pi}{4}') {
    $verificar_19 = "correcto";
} elseif ($respuesta_19 === '') {
    $verificar_19 = '';
} else {
    $verificar_19 = "incorrecto";
}

// Pregunta 20: 240°
$respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
if ($respuesta_20 === '\\frac{4\\pi}{3}') {
    $verificar_20 = "correcto";
} elseif ($respuesta_20 === '') {
    $verificar_20 = '';
} else {
    $verificar_20 = "incorrecto";
}

// Pregunta 21: 270°
$respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
if ($respuesta_21 === '\\frac{3\\pi}{2}') {
    $verificar_21 = "correcto";
} elseif ($respuesta_21 === '') {
    $verificar_21 = '';
} else {
    $verificar_21 = "incorrecto";
}

// Pregunta 22: 300°
$respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
if ($respuesta_22 === '\\frac{5\\pi}{3}') {
    $verificar_22 = "correcto";
} elseif ($respuesta_22 === '') {
    $verificar_22 = '';
} else {
    $verificar_22 = "incorrecto";
}

// Pregunta 23: 315°
$respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
if ($respuesta_23 === '\\frac{7\\pi}{4}') {
    $verificar_23 = "correcto";
} elseif ($respuesta_23 === '') {
    $verificar_23 = '';
} else {
    $verificar_23 = "incorrecto";
}

// Pregunta 24: 330°
$respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
if ($respuesta_24 === '\\frac{11\\pi}{6}') {
    $verificar_24 = "correcto";
} elseif ($respuesta_24 === '') {
    $verificar_24 = '';
} else {
    $verificar_24 = "incorrecto";
}

// Pregunta 25: 360°
$respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
if ($respuesta_25 === '2\\pi') {
    $verificar_25 = "correcto";
} elseif ($respuesta_25 === '') {
    $verificar_25 = '';
} else {
    $verificar_25 = "incorrecto";
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
    height: 410vh;
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
        actualizarFormula21();
        actualizarFormula22();
        actualizarFormula23();
    actualizarFormula24();
    actualizarFormula25();
    actualizarFormula26();
    actualizarFormula27();
    actualizarFormula28();
    actualizarFormula29();
    actualizarFormula30();
    actualizarFormula31();
    actualizarFormula32();
    actualizarFormula33();
    actualizarFormula34();
    actualizarFormula35();
    actualizarFormula36();
    actualizarFormula37();
    actualizarFormula38();
    actualizarFormula39();
    actualizarFormula40();
    actualizarFormula41();
    actualizarFormula42();
    actualizarFormula43();
    actualizarFormula44();
    actualizarFormula45();
    actualizarFormula46();
    
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}



function actualizarFormula7() {
    var f = document.getElementById('respuesta_7').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula7').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_9').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula8').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula9() {
    var f = document.getElementById('respuesta_9').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula9').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset([document.getElementById('formula9')]);
    }
}


function actualizarFormula10() {
    var f = document.getElementById('respuesta_10').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula10').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula11() {
    var f = document.getElementById('respuesta_11').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula11').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula12() {
    var f = document.getElementById('respuesta_12').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula12').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula13() {
    var f = document.getElementById('respuesta_13').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula13').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula14() {
    var f = document.getElementById('respuesta_14').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula14').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula15() {
    var f = document.getElementById('respuesta_15').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula15').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula16() {
    var f = document.getElementById('respuesta_16').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula16').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula17() {
    var f = document.getElementById('respuesta_17').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula17').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula18() {
    var f = document.getElementById('respuesta_18').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula18').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula19() {
    var f = document.getElementById('respuesta_19').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula19').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula20() {
    var f = document.getElementById('respuesta_20').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula20').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}
function actualizarFormula21() {
    var f = document.getElementById('respuesta_21').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula21').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula22() {
    var f = document.getElementById('respuesta_22').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula22').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula23() {
    var f = document.getElementById('respuesta_23').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula23').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula24() {
    var f = document.getElementById('respuesta_24').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula24').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula25() {
    var f = document.getElementById('respuesta_25').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula25').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula26() {
    var f = document.getElementById('respuesta_26').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula26').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula27() {
    var f = document.getElementById('respuesta_26').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula27').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula28() {
    var f = document.getElementById('respuesta_28').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula28').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula29() {
    var f = document.getElementById('respuesta_29').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula29').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula30() {
    var f = document.getElementById('respuesta_30').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula30').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula31() {
    var f = document.getElementById('respuesta_31').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula31').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula32() {
    var f = document.getElementById('respuesta_32').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula32').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula33() {
    var f = document.getElementById('respuesta_33').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula33').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula34() {
    var f = document.getElementById('respuesta_34').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula34').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula35() {
    var f = document.getElementById('respuesta_35').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula35').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula36() {
    var f = document.getElementById('respuesta_36').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula36').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula37() {
    var f = document.getElementById('respuesta_37').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula37').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula38() {
    var f = document.getElementById('respuesta_38').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula38').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula39() {
    var f = document.getElementById('respuesta_39').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula39').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula40() {
    var f = document.getElementById('respuesta_40').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula40').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula41() {
    var f = document.getElementById('respuesta_41').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula41').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula42() {
    var f = document.getElementById('respuesta_42').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula42').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula43() {
    var f = document.getElementById('respuesta_43').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula43').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula44() {
    var f = document.getElementById('respuesta_44').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula44').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula45() {
    var f = document.getElementById('respuesta_45').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula45').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula46() {
    var f = document.getElementById('respuesta_46').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula46').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula47() {
    var f = document.getElementById('respuesta_47').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula47').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula48() {
    var f = document.getElementById('respuesta_48').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula48').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula49() {
    var f = document.getElementById('respuesta_49').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula49').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula50() {
    var f = document.getElementById('respuesta_50').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula50').innerHTML = `\\( ${formula} \\)`;
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
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    

 


    <h2> Relación fundamental</h2>
    <p>\( 180^\circ \) = 
    <span id="formula7">
            \( ... \)
    </span> 
     <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">
    <br>
    <input type="text" name="respuesta_7" size="8" id="respuesta_7"  oninput="actualizarFormula7()"  
    value="<?php echo $respuesta_7?>">
    <br><br><br>
    <button onmousedown="mostrarImagen3()" onmouseup="ocultarImagen3()">Explicacion</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada3" src="../../img/grados.png" style="display: none; max-width: 100%" width="560">

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
     
    </p>

    <h2> Fórmulas de conversión</h2>

    <h3>➤ De grados a radianes:</h3>
    <p>Multiplica por 
    
    <span id="formula8">
            \(   \)
    </span> 
    <input type="text" name="respuesta_9" id="respuesta_9"
       oninput="actualizarFormula8(); actualizarFormula9();"
       value="<?php echo $respuesta_9 ?>" size="14">

    <br><br>
    \( \theta \text{ (radianes)} = \theta^\circ \cdot \)
    <span id="formula9">\( \)</span>

   
    </p>
   </p> 
    <button type="submit">Enviar</button>
    <?php echo $verificar_7 ?>  
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <hr> 
   <p><strong>conversion</strong></p> 
<ul>
    <li>\( 30^\circ = \)
        <span id="formula10">\( \)</span>
        <input type="text" name="respuesta_10" id="respuesta_10" oninput="actualizarFormula10()" 
        value="<?php echo $respuesta_10?>" size="15">
    </li>

    <li>\( 45^\circ = \)
        <span id="formula11">\( \)</span>
        <input type="text" name="respuesta_11" id="respuesta_11" oninput="actualizarFormula11()" 
        value="<?php echo $respuesta_11?>" size="15">
    </li>

    <li>\( 60^\circ = \)
        <span id="formula12">\( \)</span>
        <input type="text" name="respuesta_12" id="respuesta_12" oninput="actualizarFormula12()" 
        value="<?php echo $respuesta_12?>" size="15">
    </li>

    <li>\( 90^\circ = \)
        <span id="formula13">\( \)</span>
        <input type="text" name="respuesta_13" id="respuesta_13" oninput="actualizarFormula13()" 
        value="<?php echo $respuesta_13?>" size="15">
    </li>

    <li>\( 120^\circ = \)
        <span id="formula14">\( \)</span>
        <input type="text" name="respuesta_14" id="respuesta_14" oninput="actualizarFormula14()" 
        value="<?php echo $respuesta_14?>" size="15">
    </li>

    <li>\( 135^\circ = \)
        <span id="formula15">\( \)</span>
        <input type="text" name="respuesta_15" id="respuesta_15" oninput="actualizarFormula15()" 
        value="<?php echo $respuesta_15?>" size="15">
    </li>

    <li>\( 150^\circ = \)
        <span id="formula16">\( \)</span>
        <input type="text" name="respuesta_16" id="respuesta_16" oninput="actualizarFormula16()" 
        value="<?php echo $respuesta_16?>" size="15">
    </li>

    <li>\( 180^\circ = \)
        <span id="formula17">\( \)</span>
        <input type="text" name="respuesta_17" id="respuesta_17" oninput="actualizarFormula17()" 
        value="<?php echo $respuesta_17?>" size="15">
    </li>

    <li>\( 210^\circ = \)
        <span id="formula18">\( \)</span>
        <input type="text" name="respuesta_18" id="respuesta_18" oninput="actualizarFormula18()" 
        value="<?php echo $respuesta_18?>" size="15">
    </li>

    <li>\( 225^\circ = \)
        <span id="formula19">\( \)</span>
        <input type="text" name="respuesta_19" id="respuesta_19" oninput="actualizarFormula19()" 
        value="<?php echo $respuesta_19?>" size="15">
    </li>

    <li>\( 240^\circ = \)
        <span id="formula20">\( \)</span>
        <input type="text" name="respuesta_20" id="respuesta_20" oninput="actualizarFormula20()" 
        value="<?php echo $respuesta_20?>" size="15">
    </li>

    <li>\( 270^\circ = \)
        <span id="formula21">\( \)</span>
        <input type="text" name="respuesta_21" id="respuesta_21" oninput="actualizarFormula21()" 
        value="<?php echo $respuesta_21?>" size="15">
    </li>

    <li>\( 300^\circ = \)
        <span id="formula22">\( \)</span>
        <input type="text" name="respuesta_22" id="respuesta_22" oninput="actualizarFormula22()" 
        value="<?php echo $respuesta_22?>" size="15">
    </li>

    <li>\( 315^\circ = \)
        <span id="formula23">\( \)</span>
        <input type="text" name="respuesta_23" id="respuesta_23" oninput="actualizarFormula23()" 
        value="<?php echo $respuesta_23?>" size="15">
    </li>

    <li>\( 330^\circ = \)
        <span id="formula24">\( \)</span>
        <input type="text" name="respuesta_24" id="respuesta_24" oninput="actualizarFormula24()" 
        value="<?php echo $respuesta_24?>" size="15">
    </li>

    <li>\( 360^\circ = \)
        <span id="formula25">\( \)</span>
        <input type="text" name="respuesta_25" id="respuesta_25" oninput="actualizarFormula25()" 
        value="<?php echo $respuesta_25?>" size="15">
    </li>
    </ul>

    <button type="submit">Enviar</button>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?> 
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?>
    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>
    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>


    
        <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Explicacion</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../img/simplificacion.png" style="display: none; max-width: 100%" width="560">

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


 <button onmousedown="mostrarImagen()" onmouseup="ocultarImagen()">Explicacion</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada" src="../../img/simplificacion_dos.png" style="display: none; max-width: 100%" width="560">

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
  
    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Solucion</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
        <h4>Ejemplos:</h4>
    <ul>
        <li>\( 90^\circ = 90 \cdot \frac{\pi}{180} = \frac{\pi}{2} \)</li>
        <li>\( 30^\circ = 30 \cdot \frac{\pi}{180} = \frac{\pi}{6} \)</li>
        <li>\( 120^\circ = \frac{2\pi}{3} \)</li>
    </ul>

    </div>
     

    <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Solucion</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    El gcd entre los grados y 180 podria verse como que intercala entre 30 y 45.
    </div>
   
  </form>
</div>




<div class="seccion derecha">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 
 
 
    </form>
</div>

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
