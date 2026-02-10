<?php
 
 
$mostrar_solucion = '';

for ($i = 0; $i <= 230; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 0; $i <= 230; $i++) {
    ${"verificar_" . $i} = '';
}

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {        
        
 
        $respuesta_1 = 'semantico';
        $respuesta_2 = 'orientado a objetos';
        $respuesta_3 = 'objeto-relacional';
        $respuesta_4 = 'tercera';
        $respuesta_5 = 'modelado';
        $respuesta_6 = 'paginas web';
        $respuesta_7 = 'almacenes';
        $respuesta_8 = 'planificacion de recursos empresariales';
        $respuesta_9 = '1976';
        $respuesta_10 = 'Chen';
        $respuesta_11 = 'intentos';
        
 
        $respuesta_12 = 'represente';
        $respuesta_13 = 'fielmente';
        $respuesta_14 = 'XML';
        $respuesta_15 = 'impacto';
        $respuesta_16 = 'limitaciones';
        $respuesta_17 = '98';
        $respuesta_18 = '112';
        $respuesta_19 = '126';
        $respuesta_20 = '140';
        $respuesta_21 = '154';
        $respuesta_22 = '168';
        
 
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
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'semantico') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'orientado a objetos') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'objeto-relacional') { 
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'tercera') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'modelado') { 
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'paginas web') { 
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'almacenes') { 
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'planificacion de recursos empresariales') {
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

    // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === '1976') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'Chen') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'intentos') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'represente') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'fielmente') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'XML') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'impacto') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'limitaciones') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === '98') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === '112') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === '126') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === '140') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === '154') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === '168') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === '30') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === '45') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === '60') { 
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
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../style_2_0.css">
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

<form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

<div class="seccion izquierda"> 

    El modelo relacional no está exento de 
    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="8">
     , en particular sus capacidades de 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
    restringidas. Desde entonces, ha habido muchas investigaciones para abordar este problema. 
    
    En 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="3"> 
     , 
     <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="3"> 
       presentó el modelo Entidad-Relación, que ahora es una técnica ampliamente aceptada
    para el diseño de bases de datos y la base de la metodología presentada en los Capítulos 
    16 y 17 de este libro.

    En 1979, Codd intentó abordar algunas deficiencias de su trabajo original con una versión 
    extendida del modelo relacional llamada RM/T (1979) y posteriormente RM/V2 (1990). Los 
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">
      de proporcionar un modelo de datos que 
      <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">
        más 
      <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">
        el “mundo real” han 
    sido agrupados bajo el concepto de modelado 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8"> 
    de datos.

    En respuesta a la creciente complejidad de las aplicaciones de bases de datos, han surgido
    dos sistemas “nuevos”:

    DBMS 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="15"> 
    (OODBMS)

    DBMS 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="15"> 
    (ORDBMS)
    <br><br>
    Sin embargo, a diferencia de los modelos anteriores, la composición exacta de estos modelos
    no está completamente definida. Esta evolución representa los DBMS de 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8"> 
    generación,
     que discutimos en los Capítulos 9 y 27-28.
     <br><br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?>
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
     
    <hr>
    <br><br>
    La década de 1990 también vio el auge de Internet, la arquitectura cliente-servidor de tres
    niveles y la demanda de integrar bases de datos corporativas con aplicaciones web. 
    A finales de los 90, se desarrolló 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="3">
      (eXtensible Markup Language), lo que tuvo un
      <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">
      significativo en muchos aspectos de la informática, incluyendo
    la integración de bases de datos, las interfaces gráficas, los sistemas embebidos,
    los sistemas distribuidos y los sistemas de bases de datos. Discutiremos la integración 
    de bases de datos con la Web y 
    <input type="text" value="<?php echo $respuesta_14; ?>" size="3" readonly>
      en los Capítulos 29 y 30.
    <br><br>
    En resumen, sí, el avance de la tecnología en los años 90 impulsó la integración de bases de datos
    con 
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="12"> 
    para mejorar la gestión y el acceso a la información en línea.

    <br><br><br>
    También se han creado DBMS especializados, como los 
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="12"> 
    de datos (data warehouses), 
    que pueden almacenar información procedente de múltiples fuentes de datos, posiblemente
     mantenidas por distintas unidades operativas dentro de una organización. Estos sistemas 
     proporcionan herramientas avanzadas de análisis de datos para facilitar la toma de 
     decisiones estratégicas, basadas, por ejemplo, en tendencias históricas. Todos los 
     principales proveedores de DBMS ofrecen soluciones de almacenamiento de datos. 
     Discutiremos los almacenes de datos en los Capítulos 31 y 32.
    rad2degbr
    <br><br>
    Otro ejemplo es el sistema de 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="34"> 
    (ERP, Enterprise Resource Planning), una capa de aplicación construida sobre un DBMS que integra
    todas las funciones comerciales de una organización, como manufactura, ventas, finanzas, 
    marketing, envíos, facturación y recursos humanos. Entre los ERP más populares se
    encuentran SAP R/3 de SAP y PeopleSoft de Oracle.
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?>
    <?php echo $verificar_8 ?>
    <hr>
 
</div>




<div class="seccion derecha">
     

     <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Ayuda/Resumen</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
       <h3>Década de 1960 (en adelante) – Sistemas basados en archivos</h3>
    <ul>
        <li>Precursor del sistema de bases de datos.</li>
        <li>Enfoque descentralizado: cada departamento almacenaba y controlaba sus propios datos.</li>
    </ul>
    
    <h3>Mediados de la década de 1960 – Modelos de datos jerárquico y en red</h3>
    <ul>
        <li>Representan la <strong>primera generación de DBMS</strong>.</li>
        <li>El principal sistema jerárquico es <strong>IMS de IBM</strong> y el principal sistema en red es <strong>IDMS/R de Computer Associates</strong>.</li>
        <li>Carecían de independencia de datos y requerían el desarrollo de programas complejos para procesar la información.</li>
    </ul>
    
    <h3>1970 – Propuesta del modelo relacional</h3>
    <ul>
        <li>Publicación del influyente artículo de <strong>E. F. Codd</strong>, <em>“A relational model of data for large shared data banks”</em>.</li>
        <li>Aborda las debilidades de los sistemas de <strong>primera generación</strong>.</li>
    </ul>
    
    <h3>Década de 1970 – Desarrollo de prototipos de RDBMS</h3>
    <ul>
        <li>Surgen dos prototipos principales:
            <ul>
                <li><strong>Proyecto Ingres</strong> en la Universidad de California, Berkeley (iniciado en 1970).</li>
                <li><strong>Proyecto System R</strong> en el Laboratorio de Investigación de IBM en San José, California (iniciado en 1974), que condujo al desarrollo de <strong>SQL</strong>.</li>
            </ul>
        </li>
    </ul>
    
    <h3>1976 – Propuesta del modelo ER</h3>
    <ul>
        <li>Publicación del artículo de <strong>Chen</strong>, <em>“The Entity-Relationship Model—Toward a Unified View of Data”</em>.</li>
        <li>El <strong>modelado ER</strong> se convierte en un componente clave en las metodologías de diseño de bases de datos.</li>
    </ul>
    
    <h3>1979 – Aparición de los RDBMS comerciales</h3>
    <ul>
        <li>Aparecen <strong>RDBMS comerciales</strong> como <strong>Oracle, Ingres y DB2</strong>.</li>
        <li>Representan la <strong>segunda generación de DBMS</strong>.</li>
    </ul>
    
    <h3>1987 – Estándar SQL de la ISO</h3>
    <ul>
        <li>SQL es estandarizado por la <strong>ISO (International Standards Organization)</strong>.</li>
        <li>Se publican versiones posteriores en <strong>1989, 1992 (SQL2), 1999 (SQL:1999), 2003 (SQL:2003), 2008 (SQL:2008) y 2011 (SQL:2011)</strong>.</li>
    </ul>
    
    <h3>Década de 1990 – Aparición de OODBMS y ORDBMS</h3>
    <ul>
        <li>En esta época surgen los <strong>OODBMS</strong> y posteriormente los <strong>ORDBMS</strong> (<em>Oracle 8, con características de objetos en 1997</em>).</li>
    </ul>
    
    <h3>Década de 1990 – Aparición de sistemas de Data Warehousing</h3>
    <ul>
        <li>Los principales proveedores de DBMS lanzan <strong>sistemas de almacenamiento de datos (data warehouses)</strong> y, posteriormente, <strong>productos de minería de datos</strong>.</li>
    </ul>
    
    <h3>Mediados de la década de 1990 – Integración de bases de datos con la Web</h3>
    <ul>
        <li>Aparecen las primeras <strong>aplicaciones de bases de datos en Internet</strong>.</li>
        <li>Proveedores de DBMS y terceros reconocen la importancia de la web y <strong>desarrollan soporte para la integración de bases de datos con la Web</strong>.</li>
    </ul>
    
    <h3>1998 – XML</h3>
    <ul>
        <li><strong>XML 1.0</strong> es ratificado por el <strong>W3C</strong>.</li>
        <li><strong>XML</strong> se integra en productos de DBMS y se desarrollan bases de datos nativas basadas en <strong>XML</strong>.</li>
    </ul>
    </div>



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
