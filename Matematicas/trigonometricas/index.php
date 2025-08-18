<?php
// Inicialización de variables para respuestas
$respuesta_1 = $respuesta_2 = $respuesta_3 = $respuesta_4 = $respuesta_5 = 
$respuesta_6 = $respuesta_7 = $respuesta_8 = $respuesta_9 = $respuesta_10 = 
$respuesta_11 = $respuesta_12 = $respuesta_13 = $respuesta_14 = $respuesta_15 = 
$respuesta_16 = $respuesta_17 = $respuesta_18 = $respuesta_19 = $respuesta_20 = '';
$respuesta_21 = ''; $respuesta_22 = '';  $respuesta_23 = '';  $respuesta_24 = '';
$respuesta_25 = ''; $respuesta_26 = ''; $respuesta_27 = ''; $respuesta_28 = ''; $respuesta_29 = '';
$respuesta_30 = ''; $respuesta_31 = ''; $respuesta_32 = ''; $respuesta_33 = ''; $respuesta_34 = ''; $respuesta_35 = ''; $respuesta_36 = ''; $respuesta_37 = ''; $respuesta_38 = '';
$respuesta_39 = ''; $respuesta_40 = ''; $respuesta_41 = ''; $respuesta_42 = ''; $respuesta_43 = '';
$respuesta_44 = ''; $respuesta_45 = ''; $respuesta_46 = ''; $respuesta_47 = ''; $respuesta_48 = '';
$respuesta_49 = ''; $respuesta_50 = ''; $respuesta_51 = ''; $respuesta_52 = ''; $respuesta_53 = '';
$respuesta_54 = ''; $respuesta_55 = ''; $respuesta_56 = '';
$respuesta_57 = ''; $respuesta_58 = ''; $respuesta_59 = ''; $respuesta_60 = '';
$respuesta_61 = '';$respuesta_62 = '';$respuesta_63 = '';$respuesta_64 = '';
$respuesta_65 = '';$respuesta_66 = '';$respuesta_67 = '';$respuesta_68 = '';
$respuesta_69 = '';$respuesta_70 = '';$respuesta_71 = '';$respuesta_72 = '';
$respuesta_73 = '';$respuesta_74 = '';$respuesta_75 = '';$respuesta_76 = '';
$respuesta_77 = '';$respuesta_78 = '';$respuesta_79 = '';$respuesta_80 = '';
$respuesta_81 = '';$respuesta_82 = '';$respuesta_83 = '';$respuesta_84 = '';
$respuesta_85 = '';$respuesta_86 = '';$respuesta_87 = '';$respuesta_88 = ''; $respuesta_89 = '';
$respuesta_90 = '';
$respuesta_91 = '';
$respuesta_92 = '';
$respuesta_93 = '';
$respuesta_94 = '';
$respuesta_95 = '';
$respuesta_96 = '';
$respuesta_97 = '';
$respuesta_98 = '';
$respuesta_99 = '';
$respuesta_100 = '';
$respuesta_101 = '';
$respuesta_102 = '';
$respuesta_103 = '';
$respuesta_104 = '';
$respuesta_105 = '';
$respuesta_106 = '';
$respuesta_107 = '';
$respuesta_108 = '';
$respuesta_109 = '';
$respuesta_110 = '';

// Inicialización de variables para verificaciones
$verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = $verificar_5 = 
$verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
$verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = 
$verificar_16 = $verificar_17 = $verificar_18 = $verificar_19 = $verificar_20 = '';
$verificar_21 = '';  $verificar_22 = '';  $verificar_23 = '';   $verificar_24 = '';   $verificar_25 = '';  
$verificar_26 = '';  $verificar_27= ''; $verificar_28= '';  $verificar_29= '';  $verificar_30 = ''; 
$verificar_31 = ''; $verificar_32 = ''; $verificar_33 = ''; 
$verificar_34 = ''; $verificar_35 = ''; $verificar_36 = ''; $verificar_37 = ''; $verificar_38 = '';
$verificar_39 = ''; $verificar_40 = ''; $verificar_41 = ''; $verificar_42 = ''; $verificar_43 = '';
$verificar_44 = ''; $verificar_45 = ''; $verificar_46 = ''; $verificar_47 = ''; $verificar_48 = '';
$verificar_49 = ''; $verificar_50 = ''; $verificar_51 = ''; $verificar_52 = ''; $verificar_53 = '';
$verificar_54 = ''; $verificar_55 = '';
$verificar_56 = ''; $verificar_57 = ''; $verificar_58 = ''; $verificar_59 = ''; $verificar_60 = ''; 
$verificar_61 = ''; $verificar_62 = ''; $verificar_63 = ''; $verificar_64 = ''; $verificar_65 = '';
$verificar_66 = ''; $verificar_67 = ''; $verificar_68 = ''; $verificar_69 = ''; $verificar_70 = '';
$verificar_71 = ''; $verificar_72 = ''; $verificar_73 = ''; $verificar_74 = ''; $verificar_75 = '';
$verificar_76 = ''; $verificar_77 = ''; $verificar_78 = ''; $verificar_79 = ''; $verificar_80 = '';
$verificar_81 = ''; $verificar_82 = ''; $verificar_83 = ''; $verificar_84 = ''; $verificar_85 = '';
$verificar_86 = ''; $verificar_87 = ''; $verificar_88 = '';
$verificar_89 = '';
$verificar_90 = '';
$verificar_91 = '';
$verificar_92 = '';
$verificar_93 = '';
$verificar_94 = '';
$verificar_95 = '';
$verificar_96 = '';
$verificar_97 = '';
$verificar_98 = '';
$verificar_99 = '';
$verificar_100 = '';
$verificar_101 = '';
$verificar_102 = '';
$verificar_103 = '';
$verificar_104 = '';
$verificar_105 = '';
$verificar_106 = '';
$verificar_107 = '';
$verificar_108 = '';
$verificar_109 = '';
$verificar_110 = '';

$mostrar_solucion = '';

if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas
        $respuesta_1 = 'Sin(a)';
        $respuesta_2 = 'Csc(a)';
        $respuesta_3 = '1';
        $respuesta_4 = 'Cos(a)';
        $respuesta_5 = 'Sec(a)';
        $respuesta_6 = '1';
        $respuesta_7 = 'Tan(a)';
        $respuesta_8 = 'Cot(a)';
        $respuesta_9 = '1';
        $respuesta_10 = 'Tan(a)=\frac{Sen(a)}{Cos(a)}';
        $respuesta_11 = 'Cot(a)=\frac{Cos(a)}{Sen(a)}';
        $respuesta_12 = 'Sen^2(a)+Cos^2(a)=1';
        $respuesta_13 = '1-Cos^2(a)';
        $respuesta_14 = '1-Sen^2(a)';
        $respuesta_15 = 'Tan^2(a)+1=Sec^2(a)';
        $respuesta_16 = 'Tan^2(a)=Sec^2(a)-1';
        $respuesta_17 = '1=Sec^2(a)-Tan^2(a)';
        $respuesta_18 = 'Csc^2(a)=1+Cot^2(a)';
        $respuesta_19 = 'Cot^2(a)=Csc^2(a)-1';
        $respuesta_20 = '1=Csc^2(a)-Cot^2(a)';
        $respuesta_21 = 'cuadrado';
        $respuesta_22 = 'hipotenusa';
        $respuesta_23 = 'suma';
        $respuesta_24 = 'cuadrados';
        $respuesta_25 = 'catetos';
        $respuesta_26 = 'hipotenusa';
        $respuesta_27 = 'cuadrado';
        $respuesta_28 = 'cateto';
        $respuesta_29 = 'opuesto';
        $respuesta_30 = 'adyacente';
        $respuesta_31 = 'hipotenusa';
        $respuesta_32 = 'seno';
        $respuesta_33 = 'coseno';
        $respuesta_34 = 'tangente';
        $respuesta_35 = 'cosecante';
        $respuesta_36 = 'secante';
        $respuesta_37 = 'cotangente';
        $respuesta_38 = 'opuesto';
        $respuesta_39 = 'adyacente';
        $respuesta_40 = 'hipotenusa';
        $respuesta_41 = 'seno';
        $respuesta_42 = 'coseno';
        $respuesta_43 = 'tangente';
        $respuesta_44 = 'cosecante';
        $respuesta_45 = 'secante';
        $respuesta_46 = 'cotangente';
        $respuesta_47 = 'opuesto';
        $respuesta_48 = 'adyacente';
        $respuesta_49 = 'hipotenusa';
        $respuesta_50 = 'seno';
        $respuesta_51 = 'coseno';
        $respuesta_52 = 'tangente';
        $respuesta_53 = 'cosecante';
        $respuesta_54 = 'secante';
        $respuesta_55 = 'cotangente';
        $respuesta_56 = 'opuesto';
        $respuesta_57 = 'adyacente';
        $respuesta_58 = 'hipotenusa';
        $respuesta_59 = 'seno';
        $respuesta_60 = 'coseno';
        $respuesta_61 = 'tangente';
        $respuesta_62 = 'cosecante';
        $respuesta_63 = 'secante';
        $respuesta_64 = 'cotangente';
        $respuesta_65 = 'opuesto';
        $respuesta_66 = 'adyacente';
        $respuesta_67 = 'hipotenusa';
        $respuesta_68 = 'seno';
        $respuesta_69 = 'coseno';
        $respuesta_70 = 'tangente';
        $respuesta_71 = 'cosecante';
        $respuesta_72 = 'secante';
        $respuesta_73 = 'cotangente';
        $respuesta_74 = 'opuesto';
        $respuesta_75 = 'adyacente';
        $respuesta_76 = 'hipotenusa';
        $respuesta_77 = 'seno';
        $respuesta_78 = 'coseno';
        $respuesta_79 = 'tangente';
        $respuesta_80 = 'cosecante';
        $respuesta_81 = 'secante';
        $respuesta_82 = 'cotangente';
        $respuesta_83 = 'opuesto';
        $respuesta_84 = 'adyacente';
        $respuesta_85 = 'hipotenusa';
        $respuesta_86 = 'seno';
        $respuesta_87 = 'coseno';
        $respuesta_88 = 'tangente';
        $respuesta_89 = 'cosecante';
        $respuesta_90 = 'secante';
        $respuesta_91 = 'cotangente';
        $respuesta_92 = 'opuesto';
        $respuesta_93 = 'adyacente';
        $respuesta_94 = 'hipotenusa';
        $respuesta_95 = 'seno';
        $respuesta_96 = 'coseno';
        $respuesta_97 = 'tangente';
        $respuesta_98 = 'cosecante';
        $respuesta_99 = 'secante';
        $respuesta_100 = 'cotangente';
        $respuesta_101 = 'opuesto';
        $respuesta_102 = 'adyacente';
        $respuesta_103 = 'hipotenusa';
        $respuesta_104 = 'seno';
        $respuesta_105 = 'coseno';
        $respuesta_106 = 'tangente';
        $respuesta_107 = 'cosecante';
        $respuesta_108 = 'secante';
        $respuesta_109 = 'cotangente';
        $respuesta_110 = 'identidades';
        
        // Marcar todas como correctas
        for ($i = 1; $i <= 110; $i++) {
            ${'verificar_'.$i} = "correcto";
        }
    } else {
   // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'Sin(a)') {
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'Csc(a)') {
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '1') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }
 

   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'Cos(a)') {
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'Sec(a)') {
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }


   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '1') {
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }


   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'Tan(a)') {
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'Cot(a)') {
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === '1') {
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }
    

   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'Tan(a)=\frac{Sen(a)}{Cos(a)}') {
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }
   
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'Cot(a)=\frac{Cos(a)}{Sen(a)}') {
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


   $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
   $respuesta_12 = str_replace(' ', '', $respuesta_12); // Eliminar espacios en blanco
    $respuesta_12 = str_replace('Sin', 'Sen', $respuesta_12); // Reemplazar Sen por Sin
   $respuesta_12 = strtolower($respuesta_12); // Convertir a minúsculas

   if ($respuesta_12 === 'sen^2(a)+cos^2(a)=1'|| $respuesta_12 === 'sin^2(a)+cos^2(a)=1') {
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
    $respuesta_14 = str_replace(' ', '', $respuesta_14); // Eliminar espacios en blanco
     $respuesta_14 = str_replace('Sin', 'Sen', $respuesta_14); // Reemplazar Sen por Sin
   if ($respuesta_14 === '1-Sen^2(a)') {
       $verificar_14 = "correcto";
   } elseif ($respuesta_14 === '') {
       $verificar_14 = '';
   } else {
       $verificar_14 = "incorrecto";
   }

   $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    $respuesta_15 = str_replace(' ', '', $respuesta_15); // Eliminar espacios en blanco
 
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
   if ($respuesta_18 === 'Csc^2(a)=1+Cot^2(a)' || $respuesta_18 === '1+Cot^2(a)=Csc^2(a)') {
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
   if ($respuesta_20 === '1=Csc^2(a)-Cot^2(a)' || $respuesta_20 === 'Csc^2(a)-Cot^2(a)=1') {
       $verificar_20 = "correcto";
   } elseif ($respuesta_20 === '') {
       $verificar_20 = '';
   } else {
       $verificar_20 = "incorrecto";
   }


    // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === 'cuadrado') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21 === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'hipotenusa') {  
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'suma') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'cuadrados') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'catetos') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'hipotenusa') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'cuadrado') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'cateto') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'opuesto') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
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
    height: 270vh;
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
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_10').value || "";
 


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
   
    var f = document.getElementById('respuesta_11').value || "";
  
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
   
    var f = document.getElementById('respuesta_12').value || "";
 


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
    var f = document.getElementById('respuesta_13').value || "";
   

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
    var f = document.getElementById('respuesta_14').value || "";
  

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
    var f = document.getElementById('respuesta_15').value || "";
  

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
    var f = document.getElementById('respuesta_16').value || "";
  

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
    var f = document.getElementById('respuesta_17').value || "";
  

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
    var f = document.getElementById('respuesta_18').value || "";
  

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
    var f = document.getElementById('respuesta_19').value || "";
  

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
    var f = document.getElementById('respuesta_20').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;

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
<form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
<div class="form-container">
<div class="seccion izquierda">
     
    <p>
    Se llaman identidades recíprocas porque cada una de esas funciones es el recíproco multiplicativo
     (la inversa respecto a la multiplicación) de otra función trigonométrica.
    </p>
    <strong>identidades reciprocas: </strong> <br><br>
    denotar el angulo como a, ej: Cos(a).
    <br><br>
    <input type="text" size="8" name="respuesta_1" id="" value="Sin(a)" readonly>*
    <input type="text"  size="8"  name="respuesta_2" id="" value="<?php echo $respuesta_2 ?>" >=
    <input type="text"  size="8"  name="respuesta_3" id="" value="<?php echo $respuesta_3 ?>" >
    <br><br>
         
    <button type="submit">enviar</button>
     <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>

    <br><br><br>
    <br><br>
    <input type="text" size="8" name="respuesta_4" id="" value="Cos(a)" readonly>*
    <input type="text"  size="8"  name="respuesta_5" id="" value="<?php echo $respuesta_5 ?>" >=
    <input type="text"  size="8"  name="respuesta_6" id="" value="<?php echo $respuesta_6 ?>" >
    <br><br>
         
    <button type="submit">enviar</button>
     <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>


    <br><br><br>
    <br><br>
    <input type="text" size="8" name="respuesta_7" id="" value="Tan(a)" readonly>*
    <input type="text"  size="8"  name="respuesta_8" id="" value="<?php echo $respuesta_8 ?>" >=
    <input type="text"  size="8"  name="respuesta_9" id="" value="<?php echo $respuesta_9 ?>" >
    <br><br>
         
    <button type="submit">enviar</button>
     <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>

    <hr>
    <br><br>
    <Strong>Identidades por cociente: </Strong>
    <br><br>


    <span id="formula">
            \( \frac{0}{0} \)
    </span> 

    <br><br>
    <input type="text" name="respuesta_10" size="25" id="respuesta_10" oninput="actualizarFormula()" 
    value="<?php echo $respuesta_10?>">
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_10 ?>
    <br><br><br>

    <span id="formula2">
            \( \frac{0}{0} \)
    </span> 

    <br><br>
    <input type="text" name="respuesta_11" size="25" id="respuesta_11" oninput="actualizarFormula2()" value="<?php echo $respuesta_11?>">
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_11 ?>



 
    <br><br>
    <hr>
    <Strong>identidades pitagoricas: </Strong>(suma de cuadrados), x=a <br><br>
    Nota: Esta identidad se utiliza para resolver Sin^3(x) por ejemplo

    <span id="formula3">
            \( \frac{0}{0} \)
    </span> 

    <br><br>
    <input type="text" name="respuesta_12" size="25" id="respuesta_12" oninput="actualizarFormula3()" value="<?php echo $respuesta_12?>">
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_12 ?>
    <br>
    de esta se deriva: <br><br>
    \( Sen^2(a) \) = <input type="text" oninput="actualizarFormula4()" 
    id="respuesta_13"
    name="respuesta_13" id="" value="<?php echo $respuesta_13?>">
    <span id="formula4">
           
    </span> 
    <br>
    \( Cos^2(a) \) = <input type="text"  oninput="actualizarFormula5()"
    id="respuesta_14"
    name="respuesta_14" id="" value="<?php echo $respuesta_14?>"> 
    <span id="formula5">
            
    </span> 
    <br>

    <button type="submit">enviar</button>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    <hr>
 
</div>




<div class="seccion derecha">
 
    

    siguiente identidad pitagorica: <br><br>





    <br>
    <input type="text"  oninput="actualizarFormula6()"
    id="respuesta_15"
    name="respuesta_15" id="" value="<?php echo $respuesta_15?>"> 
    <span id="formula6">
            
    </span> 
    <br>

    <button type="submit">enviar</button>
    <?php echo $verificar_15 ?> <br><br>

 <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../img/tangente.png" style="display: none; max-width: 100%" width="460">

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

        <br><br>

    De esta se deriva: <br><br>


    <input type="text"  oninput="actualizarFormula7()"
    id="respuesta_16"
    name="respuesta_16" id="" value="<?php echo $respuesta_16?>"> 
    <span id="formula7">
            
    </span> 
    <br>

    <button type="submit">enviar</button>
    <?php echo $verificar_16 ?>


    <br><br>



    <input type="text"  oninput="actualizarFormula8()"
    id="respuesta_17"
    name="respuesta_17" id="" value="<?php echo $respuesta_17?>"> 
    <span id="formula8">
            
    </span> 
    <br>

    <button type="submit">enviar</button>
    <?php echo $verificar_17 ?>
    <br><br><br>





    siguiente Identidad pitagoric:<br>

    <input type="text"  oninput="actualizarFormula9()"
    id="respuesta_18"
    name="respuesta_18" id="" value="<?php echo $respuesta_18?>"> 
    <span id="formula9">
            
    </span> 
    <br>

    <button type="submit">enviar</button>
    <?php echo $verificar_18 ?> 
    <br><br>
    despejar : <br><br>



    <input type="text"  oninput="actualizarFormula10()"
    id="respuesta_19"
    name="respuesta_19" id="" value="<?php echo $respuesta_19?>"> 
    <span id="formula10">
            
    </span> 
    <br>

    <button type="submit">enviar</button>
    <?php echo $verificar_19 ?>
    <br><br>
    despejar : <br><br>

    <input type="text"  oninput="actualizarFormula11()"
    id="respuesta_20"
    name="respuesta_20" id="" value="<?php echo $respuesta_20?>"> 
    <span id="formula11">
            
    </span> 
    <br>

    <button type="submit">enviar</button>
    <?php echo $verificar_20 ?>

    <hr>
    Se puede notar como partiendo de la primera se puede llegar a las, otras, 
    observa en:
    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Pista</button>
    <br><br>
    <p id="mensaje" style="display:none;">
    <img src="../../img/Captura de pantalla 2024-12-31 082158.png" alt="" width="250">    
    </p>
    <hr>
    <p><strong> Enunciado del Teorema de Pitágoras:</strong></p>
    <p>
En todo triángulo rectángulo, el 
<input type="text" name="respuesta_21" id="" value="<?php echo $respuesta_21?>" size="9"> 
de la 
<input type="text" name="respuesta_22" id="" value="<?php echo $respuesta_22?>" size="9"> 
es igual a la 
<input type="text" name="respuesta_23" id="" value="<?php echo $respuesta_23?>" size="9"> 
de los 
<input type="text" name="respuesta_24" id="" value="<?php echo $respuesta_24?>" size="9"> 
de los 
<input type="text" name="respuesta_25" id="" value="<?php echo $respuesta_25?>" size="9"> 
.
<hr>
<p>
🔹 En la identidad fundamental 
   
      <input type="text"  size="25"   oninput="actualizarFormula3()" value="<?php echo $respuesta_12?>">

el <strong>1</strong> es la 
<input type="text" name="respuesta_26" id="" value="<?php echo $respuesta_26?>" size="9"> 
 (al 
 <input type="text" name="respuesta_27" id="" value="<?php echo $respuesta_27?>" size="9"> 
 ).
</p>

<p>
🔹 En la identidad con 
<input type="text"  oninput="actualizarFormula9()"  value="<?php echo $respuesta_18?>"> 
el <strong>1</strong> es un 
 <input type="text" name="respuesta_28" id="" value="<?php echo $respuesta_28?>" size="9"> 
(
<input type="text" name="respuesta_29" id="" value="<?php echo $respuesta_29?>" size="9"> 
).
</p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_21 ?>
<?php echo $verificar_22 ?>
            <?php echo $verificar_23 ?>
<?php echo $verificar_24 ?>
<?php echo $verificar_25 ?>
<?php echo $verificar_26 ?>
<?php echo $verificar_27 ?>
<?php echo $verificar_28 ?>
<?php echo $verificar_29 ?>

    </p>
 
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
        href="segundo.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
