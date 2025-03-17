<?php
 
 
$respuesta_1 = ''; $respuesta_2 = ''; $respuesta_3 = ''; $respuesta_4 = ''; $respuesta_5 = ''; 
$respuesta_6 = ''; $respuesta_7 = ''; $respuesta_8 = ''; $respuesta_9 = '';  $respuesta_10 = '';
$respuesta_11 = '';$respuesta_12 = '';$respuesta_13 = ''; $respuesta_14 = '';  $respuesta_15 = '';


$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = ''; $verificar_4 = ''; $verificar_5 = ''; 
$verificar_6 = ''; $verificar_7 = '';  $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = ''; 
$verificar_11 = ''; $verificar_12 = ''; $verificar_13 = '';  $verificar_14 = '';
$verificar_15 = '';

$respuesta_1_1 = 'unidad'; $respuesta_1_2 = 'abreviatura'; $respuesta_1_3 = 'unidad basica para';  
$respuesta_2_1 = ''; $respuesta_2_2 = ''; $respuesta_2_3 = '';
$respuesta_3_1 = ''; $respuesta_3_2 = ''; $respuesta_3_3 = '';
$respuesta_4_1 = ''; $respuesta_4_2 = ''; $respuesta_4_3 = '';
$respuesta_5_1 = ''; $respuesta_5_2 = ''; $respuesta_5_3 = '';
$respuesta_6_1 = ''; $respuesta_6_2 = ''; $respuesta_6_3 = '';
$respuesta_7_1 = ''; $respuesta_7_2 = ''; $respuesta_7_3 = '';
$respuesta_8_1 = ''; $respuesta_8_2 = ''; $respuesta_8_3 = '';

$verificar_1_1 = ''; $verificar_1_2 = ''; $verificar_1_3 = '';  
$verificar_2_1 = ''; $verificar_2_2 = ''; $verificar_2_3 = '';
$verificar_3_1 = ''; $verificar_3_2 = ''; $verificar_3_3 = '';
$verificar_4_1 = ''; $verificar_4_2 = ''; $verificar_4_3 = '';
$verificar_5_1 = ''; $verificar_5_2 = ''; $verificar_5_3 = '';
$verificar_6_1 = ''; $verificar_6_2 = ''; $verificar_6_3 = '';
$verificar_7_1 = ''; $verificar_7_2 = ''; $verificar_7_3 = '';
$verificar_8_1 = ''; $verificar_8_2 = ''; $verificar_8_3 = '';


$unidades_correctas = [
    // Respuestas para la fila 1 (Unidad, Abreviatura, Unidad básica para)
    'respuesta_1_1' => 'unidad',
    'respuesta_1_2' => 'abreviatura',
    'respuesta_1_3' => 'unidad basica para',
    
    // Respuestas para la fila 2
    'respuesta_2_1' => 'metro',
    'respuesta_2_2' => 'm',
    'respuesta_2_3' => 'longitud',
    
    // Respuestas para la fila 3
    'respuesta_3_1' => 'kilogramo',
    'respuesta_3_2' => 'kg',
    'respuesta_3_3' => 'masa',
    
    // Respuestas para la fila 4
    'respuesta_4_1' => 'segundo',
    'respuesta_4_2' => 's',
    'respuesta_4_3' => 'tiempo',
    
    // Respuestas para la fila 5
    'respuesta_5_1' => 'ampere',
    'respuesta_5_2' => 'A',
    'respuesta_5_3' => 'corriente',
    
    // Respuestas para la fila 6
    'respuesta_6_1' => 'kelvin',
    'respuesta_6_2' => 'K',
    'respuesta_6_3' => 'temperatura',
    
    // Respuestas para la fila 7
    'respuesta_7_1' => 'mol',
    'respuesta_7_2' => 'mol',
    'respuesta_7_3' => 'cantidad de sustancia',
    
    // Respuestas para la fila 8
    'respuesta_8_1' => 'candela',
    'respuesta_8_2' => 'cd',
    'respuesta_8_3' => 'intensidad luminosa',
];

// Inicializar las respuestas y verificaciones
$respuesta = [];
$verificar = [];

if ($_POST) {
   // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === '3') {
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === '4') {
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '3') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '3') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'infinita') {
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'izquierda') {
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }


   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'mayor') {
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }


   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'potencias') {
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'distancia') {
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'materia') {
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }
    

   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'duracion') {
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'direccion') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === 'magnitud') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'numerico') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === 'direccion') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'magnitud') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === '84') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === 'rotacion') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === 'vibracion') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'traslacion') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'cuerpo') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === 'representarse') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21 === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'idealizado') {  
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'particula') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'movimiento') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'completo') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'posicion') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'espacio') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'conoce') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'posicion') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'ubicacion') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'respecto') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

// Validación de las respuestas
for ($i = 1; $i <= 8; $i++) { // Ahora incluye hasta 8
    for ($j = 1; $j <= 3; $j++) {
        $input_name = "respuesta_{$i}_{$j}";
        ${'respuesta_'.$i.'_'.$j} = isset($_POST[$input_name]) ? $_POST[$input_name] : ''; // Obtener valor de la respuesta del formulario
        $verify_name = 'verificar_'.$i.'_'.$j;
        
        // Comparar la respuesta con la unidad correcta
        if (strtolower(${'respuesta_'.$i.'_'.$j}) === strtolower($unidades_correctas[$input_name])) {
            ${$verify_name} = "correcto";
        } elseif (${'respuesta_'.$i.'_'.$j} === '') {
            ${$verify_name} = ''; // Sin respuesta
        } else {
            ${$verify_name} = "incorrecto";
        }
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
    .imagen {
        max-width: 100%;
        height: auto;
    }
</style>
 
<script>


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
  
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}


</script>
    
</head>
<body>
<div class="seccion izquierda">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)">
        <!-- Primera pregunta -->
        <p>¿Cuántas cifras significativas tiene el número 1.62?</p>
            <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>">
            <span><?php echo $verificar_1; ?></span>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button> 
            <hr> <br><br>
            <!-- Segunda pregunta -->
            <p>¿Cuántas cifras significativas tiene el número 1.620?</p>
            <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>">
            <span><?php echo $verificar_2; ?></span>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button> 
            <hr> <br><br>

            <!-- Tercera pregunta -->
            <p>¿Cuál es el número equivalente a 0.00162 con las mismas cifras significativas?</p>
            <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>">
            <span><?php echo $verificar_3; ?></span>

            <button type="submit" class="btn btn-primary mt-3">Enviar</button> 
            <hr> <br><br>

            <!-- Cuarta pregunta -->
            <p>Si da un número como un entero, lo especifica con precisión 
            <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>">
            </p>
            <span><?php echo $verificar_4; ?></span>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button> 
            <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Pista</button>
    
            <p id="mensaje" style="display:none;"> Por ejemplo, si
            alguien dice que tiene 3 hijos, significa exactamente 3, ni más ni menos. </p>
            <hr> <br><br>

            <!-- Quinta pregunta -->
            <p>
            Comenzamos a contar cifras significativas desde la 
            <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>">
            con el primer dígito que no sea cero.
            </p>
        
            <span><?php echo $verificar_5; ?></span>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button> 
            <hr> <br><br>

            <p>
            Escribir un cero posterior implica 
            <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>">
            precisión
            </p>
            <span><?php echo $verificar_6; ?></span>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button> 
            <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Pista</button>
    
            <p id="mensaje2" style="display:none;">
            Por otra parte, los ceros posteriores, sí cuentan como cifras significativas. El número 1.620
            tiene cuatro cifras significativas    
            </p>
            <hr> <br><br>
            
    <table class="input-table">
    <?php
            for ($i = 1; $i <= 8; $i++) {
                echo '<tr>';
            for ($j = 1; $j <= 3; $j++) {
            $input_name = "respuesta_{$i}_{$j}";
            $verificar_name = "verificar_{$i}_{$j}";
            echo '<td class="input-cell">';
            echo '<input type="text" name="' . $input_name . '" value="' . ${'respuesta_'.$i.'_'.$j} . '">';
            echo '<span class="error-message">' . ${$verificar_name} . '</span>'; // Mostrar error si existe
            echo '</td>';
            }
            echo '</tr>';
            }
            ?>
            </table>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    <br><br>
    una cantidad vectorial requiere la especificación tanto de 
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">
    como de 
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">
    . En contraste, una cantidad escalar tiene un valor 
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">
    (<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">)
    y no <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">    
    .
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_11 ?>
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    </form>
</div>
<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)">
    <Strong>La longitud se define como la medida de 
    <input type="text" name="respuesta_8" size="8" value="<?php echo $respuesta_8; ?>">
    entre dos puntos en el espacio</Strong> <br>
    <span><?php echo $verificar_8; ?></span>
    <br>
    Las escalas de los sistemas para los cuales la física tiene poder de
    predicción abarcan muchos órdenes de magnitud (potencias de 10)
    <br><br>

    Escala de longitud de un átomo se refiere a su tamaño en términos de unidades de medida, 
    como metros, y está en el orden de 10⁻¹⁰ metros (lo que equivale a 0.0000000001 metros).
    <br><br>
    El orden de magnitud se refiere a la potencia de 10 que describe un número. 
    <br><br>
    100 (10²) tiene un orden de magnitud de 2.
    <br><br>
    el orden de magnitud de 1500 es 3, ya que 1500 puede escribirse como 1,5 × 103.
    <button type="submit" class="btn btn-primary mt-3">Enviar</button> 
    <hr>
    Por lo tanto, hay alrededor de 41 órdenes de magnitud entre el tamaño de un protón
    individual y el del universo visible completo. <br><br>
    lo anteior es igual a decir que hay 41 
    <input type="text" name="respuesta_7" size="8" value="<?php echo $respuesta_7; ?>">
    de 10 que separan esos 2 tamaños. <br><br>
            
        
    <span><?php echo $verificar_7; ?></span>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button> 
    <hr> <br>
    "Del orden de 1 metro" puede interpretarse como valores que están cerca de 1 × 10⁰ metros.
    Si se reduce a un micrómetro, sería 1 × 10⁻⁶ metros, manteniendo la misma relación, pero en una escala diferente.
    <br><br>
    <hr>
    <strong>Masa es la cantidad de 
    <input type="text" name="respuesta_9" size="8" value="<?php echo $respuesta_9; ?>"> 
    en un objeto.</strong> <br>
    <span><?php echo $verificar_9; ?></span> <br>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button> <br>
    Cuando considera la gama de masas de los objetos
    físicos, obtiene un intervalo todavía más imponente de órdenes de magnitud que para
    las longitudes.
    <hr>
    <br>
    <strong>El tiempo es la 
    <input type="text" name="respuesta_10" size="8" value="<?php echo $respuesta_10; ?>"> 
    entre dos eventos</strong> <br>
    <span><?php echo $verificar_10; ?></span> <br>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button> <br>
    . Las escalas humanas de tiempo están en el intervalo
    de un segundo (por lo general la duración de un latido del corazón humano) a un siglo (la esperanza aproximada de vida de una persona que nazca ahora).
    <hr>
    <br><br>
    atencion, en el libro esto se puede malinterpretar como multiplicacion pero es la representacion: <br><br>
    <h1>Conversión de Fracción a Decimal</h1>
    <p>Para convertir la fracción <strong>4  \( \frac{13}{16} \)</strong> a su equivalente decimal, realizamos los siguientes pasos:</p>

    <ol>
        <li><strong>Dividir</strong> la fracción \( \frac{13}{16} \):</li>
        <p>13 ÷ 16 = 0.8125</p>

        <li><strong>Sumar</strong> el número entero (4) al resultado anterior:</li>
        <p>4 + 0.8125 = 4.8125</p>

        <li>Por lo tanto, <strong>4 13/16</strong> en formato decimal es: <strong>4.8125 pulgadas</strong></li>
    </ol>


    
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
