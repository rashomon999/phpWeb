<?php
 
 
$respuesta_1 = ''; $respuesta_2 = ''; $respuesta_3 = ''; $respuesta_4 = ''; $respuesta_5 = ''; 
$respuesta_6 = ''; $respuesta_7 = ''; $respuesta_8 = ''; $respuesta_9 = '';  $respuesta_10 = '';


$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = ''; $verificar_4 = ''; $verificar_5 = ''; 
$verificar_6 = ''; $verificar_7 = '';  $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = ''; 
 
 
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
   if ($respuesta_2 === '12.22375') {
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

      // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '20.79625') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === '420') {
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Unidades</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <style>
        .input-table td {
            padding: 10px;
            text-align: center;
        }
        .input-cell input {
            width: 100%;
        }
        .error-message {
            color: red;
            font-size: 0.9em;
        }
        .success-message {
            color: green;
            font-size: 0.9em;
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
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)">
     <table class="table table-bordered input-table">
            <thead>
                <tr>
                    <th>Sistema Inglés</th>
                    <th>SI</th>
                    <th>Equivalencia</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Respuestas correctas
                $equivalencias_correctas = [
                    'equivalencia_1' => '1 in = 0.0254m',
                    'equivalencia_2' => '1 ft = 0.3048m',
                    'equivalencia_3' => '1 yd = 0.9144m',
                    'equivalencia_4' => '1 mi = 1609.344m',
                    'equivalencia_5' => '1 lb = 453.6g',
                    'equivalencia_6' => '1 oz = 28.35g',
                    'equivalencia_7' => '1 t = 907.2kg',
                    'equivalencia_8' => '1 gal = 3.785L',
                    'equivalencia_9' => '1 qt = 946.4ml',
                    'equivalencia_10' => '1 pie^3 = 28.32L',
                ];

                // Inicialización de variables
                $respuestas = [];
                $verificaciones = [];

                for ($i = 1; $i <= 10; $i++) {
                    $input_name = "equivalencia_{$i}";
                    $respuestas[$i] = isset($_POST[$input_name]) ? $_POST[$input_name] : '';
                    
                    // Validación
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (strtolower($respuestas[$i]) === strtolower($equivalencias_correctas[$input_name])) {
                            $verificaciones[$i] = '<span class="success-message">Correcto</span>';
                        } elseif ($respuestas[$i] === '') {
                            $verificaciones[$i] = '';
                        } else {
                            $verificaciones[$i] = '<span class="error-message">Incorrecto</span>';
                        }
                    }
                }

                // Generar las filas de la tabla dinámicamente
                $labels = [
                    ['Pulgada (in)', 'Centímetro (cm)'],
                    ['Pie (ft)', 'Metro (m)'],
                    ['Yarda (yd)', 'Metro (m)'],
                    ['Milla (mi)', 'Kilómetro (km)'],
                    ['Libra (lb)', 'Gramo (g)'],
                    ['Onza (oz)', 'Gramo (g)'],
                    ['Tonelada (t)', 'Kilogramo (kg)'],
                    ['Galón (gal)', 'Litro (L)'],
                    ['Cuarto (qt)', 'Mililitro (mL)'],
                    ['Pie cúbico (pie^3)', 'Litro (L)'],
                ];

                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    echo "<td>{$labels[$i - 1][0]}</td>";
                    echo "<td>{$labels[$i - 1][1]}</td>";
                    echo "<td>";
                    echo "<input type='text' name='equivalencia_{$i}' value='" . htmlspecialchars($respuestas[$i]) . "'>";
                    echo $verificaciones[$i] ?? '';
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        <br><br>
        <hr>
        <p>
        Una libra era una medida entre 400 y 500 gramos. No muy precisa. La norma inglesa (imperial)
         dejó a la libra en cerca de 453,6 gramos. Sin embargo parecía inconveniente usar esta medida,
          así que la libra colombiana se definió en exactamente 500 gramos. Si vamos a comprar comida 
          en la tienda, una libra son 500 gramos. Pero si vamos a comprar harina de trigo a los 
          estadounidenses, una libra son 453,6 gramos. Pero esto último no lo hacemos directamente.
        </p>
        <hr><br>
        cual es el resultado de convertir 5.7 pies a metros: <br>
        redondea a 3 cifras significativas.
        <br>
        <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>">
        <span><?php echo $verificar_1; ?></span>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button> 

        <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Pista</button>
    
    <p id="mensaje" style="display:none;"> simplemente es multiplicar 5.7 * 30.48 
        yluego dividir entre 100, es una regla de 3. (si no se sabe la equivalencia exacta se usa 
        regla de 3 si se conoce una anterior, como en este caso, que se conocia su equivalencia en cm 
        y se necesita en metros). </p>
        <hr> <br><br>

     </form>
</div>
<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)">

        <p>Queremos saber la altura del cilindro en centimetros (todos los decimales):</p>
        <p>
            \( h = 4 \frac{13}{16} \text{in} = 4.8125 \, \text{in} \)
        </p>
        <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>">cm <br>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button> 
        <span><?php echo $verificar_2; ?></span>
        <hr> <br><br>

        <!-- Tercera pregunta -->
        <p>Queremos saber la circunferencia del cilindro en centimetros (todos los decimales):</p>
        <p>
        \( c = 8 \frac{3}{16} \text{in} = 8.1875  \, \text{in} \)
        </p>
        <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>">cm <br>        
        <button type="submit" class="btn btn-primary mt-3">Enviar</button> 
        <span><?php echo $verificar_3; ?></span>
        <hr> <br> 
        redondee los 2 resultados anteriores a 2 cifras significativas y calcule el volumen 
        del cilindro anterior (con respuesta de 3 cifras significativas): <br><br>
        <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>"> <br>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button> <br>

        <span><?php echo $verificar_4; ?></span>
        <hr>
        entonces queda claro como si quiero saber cuanto mido en pulgadas y mi estatura es 1.68, entonces 
        simplemente 1.68*0.3048 (equivalencia de pulgadas a metros). <br><br>
        Lo que se convierte es la unidad de medida en la que expresas un dato, no el valor real del dato en sí. 
        es decir, si conozco el valor de pulgadas en cm:30.48, entonces lo divido entre 100. <br><br>
         <img src="../img/Captura de pantalla 2024-12-18 154902.png" alt="" height="300" width="500">
        <br>
       

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
