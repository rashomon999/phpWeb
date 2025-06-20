<?php
// Variables para verificar las respuestas
$verificar_1 = '';
$verificar_2 = '';
$verificar_3 = '';
$verificar_4 = ''; 
$verificar_5 = ''; 
$verificar_6 = ''; 
$verificar_7 = ''; 
//
$verificar_8 = '';
$verificar_9 = '';
$verificar_10 = ''; 
$verificar_11 = ''; 
$verificar_12 = ''; 
$verificar_13 = ''; 
$verificar_14 = ''; 
///
$pregunta_8 = "";
$pregunta_9 = "";
$pregunta_10 = "";
$pregunta_11 = "";
$pregunta_12 = "";
$pregunta_13 = "";
$pregunta_14 = "";
///
$verificar_15 = '';
$verificar_16 = '';
$pregunta_15 = "";
$pregunta_16 = "";

//
$pregunta_18 = "";

$pregunta_a = "";
$pregunta_b = "";
$verificar_a = "";
$verificar_b = "";
//
//
$pregunta_t1 = "";
$pregunta_t2 = "";
$pregunta_t3 = "";
$pregunta_t4 = "";
$pregunta_t5 = "";

$verificar_t1 = "";
$verificar_t2 = "";
$verificar_t3 = "";
$verificar_t4 = "";
$verificar_t5 = "";
//
$pregunta_s1 = "";

$pregunta_v1 = "";
$pregunta_v2 = "";
$pregunta_v3 = "";
$pregunta_v4 = "";

//
$verificar_s1 = "";
$verificar_v1 = "";
$verificar_v2 = "";
$verificar_v3 = "";
$verificar_v4 = "";

$pregunta_a4  = "";
$pregunta_a5  = "";
$pregunta_a6  = "";
$pregunta_a7  = "";
$pregunta_a8  = "";


$verificar_a4 = "";
$verificar_a5 = "";
$verificar_a6 = "";
$verificar_a7 = "";
$verificar_a8 = "";

// Procesar el formulario cuando se envía
if ($_POST) {
  
        $pregunta_1 = isset($_POST['pregunta_1']) ? $_POST['pregunta_1'] : '';
        if ($pregunta_1 === '') {
            $verificar_1 = "Respuesta vacía";
        } elseif ($pregunta_1 === 'correcto') {
            $verificar_1 = "correcto";
        } else {
            $verificar_1 = "incorrecto";
        }
    
        $pregunta_2 = isset($_POST['pregunta_2']) ? $_POST['pregunta_2'] : '';
        if ($pregunta_2 === '') {
            $verificar_2 = "Respuesta vacía";
        } elseif ($pregunta_2 === 'correcto') {
            $verificar_2 = "correcto";
        } else {
            $verificar_2 = "incorrecto";
        }

        $pregunta_3 = isset($_POST['pregunta_3']) ? $_POST['pregunta_3'] : '';
        if ($pregunta_3 === '') {
            $verificar_3 = "Respuesta vacía";
        } elseif ($pregunta_3 === 'correcto') {
            $verificar_3 = "correcto";
        } else {
            $verificar_3 = "incorrecto";
        }

        $pregunta_4 = isset($_POST['pregunta_4']) ? $_POST['pregunta_4'] : '';
        if ($pregunta_4 === '') {
            $verificar_4 = "Respuesta vacía";
        } elseif ($pregunta_4 === 'correcto') {
            $verificar_4 = "correcto";
        } else {
            $verificar_4 = "incorrecto";
        }

         $pregunta_5 = isset($_POST['pregunta_5']) ? $_POST['pregunta_5'] : '';
        if ($pregunta_5 === '') {
            $verificar_5 = "Respuesta vacía";
        } elseif ($pregunta_5 === 'correcto') {
            $verificar_5 = "correcto";
        } else {
            $verificar_5 = "incorrecto";
        }

        $pregunta_6 = isset($_POST['pregunta_6']) ? $_POST['pregunta_6'] : '';
        if ($pregunta_6 === '') {
            $verificar_6 = "Respuesta vacía";
        } elseif ($pregunta_6 === 'correcto') {
            $verificar_6 = "correcto";
        } else {
            $verificar_6 = "incorrecto";
        }
    
         $pregunta_7 = isset($_POST['pregunta_7']) ? $_POST['pregunta_7'] : '';
        if ($pregunta_7 === '') {
            $verificar_7 = "Respuesta vacía";
        } elseif ($pregunta_7 === 'correcto') {
            $verificar_7 = "correcto";
        } else {
            $verificar_7 = "incorrecto";
        }
        ////
        ////

        $pregunta_8 = isset($_POST['pregunta_8']) ? $_POST['pregunta_8'] : '';
        if ($pregunta_8 === '') {
            $verificar_8 = "Respuesta vacía";
        } elseif ($pregunta_8 === 'epsilon') {
            $verificar_8 = "correcto";
        } else {
            $verificar_8 = "incorrecto";
        }
    
        $pregunta_9 = isset($_POST['pregunta_9']) ? $_POST['pregunta_9'] : '';
        if ($pregunta_9 === '') {
            $verificar_9 = "Respuesta vacía";
        } elseif ($pregunta_9 === 'cero') {
            $verificar_9 = "correcto";
        } else {
            $verificar_9 = "incorrecto";
        }

        $pregunta_10 = isset($_POST['pregunta_10']) ? $_POST['pregunta_10'] : '';
        if ($pregunta_10 === '') {
            $verificar_10 = "Respuesta vacía";
        } elseif ($pregunta_10 === 'delta') {
            $verificar_10 = "correcto";
        } else {
            $verificar_10 = "incorrecto";
        }

        $pregunta_11 = isset($_POST['pregunta_11']) ? $_POST['pregunta_11'] : '';
        if ($pregunta_11 === '') {
            $verificar_11 = "Respuesta vacía";
        } elseif ($pregunta_11 === 'cero' || $pregunta_11 === '0') {
            $verificar_11 = "correcto";
        } else {
            $verificar_11 = "incorrecto";
        }

        $pregunta_12 = isset($_POST['pregunta_12']) ? $_POST['pregunta_12'] : '';
        if ($pregunta_12 === '') {
            $verificar_12 = "Respuesta vacía";
        } elseif ($pregunta_12 === 'cero' || $pregunta_12 === '0' ) {
            $verificar_12 = "correcto";
        } else {
            $verificar_12 = "incorrecto";
        }

        $pregunta_13 = isset($_POST['pregunta_13']) ? $_POST['pregunta_13'] : '';
        if ($pregunta_13 === '') {
            $verificar_13 = "Respuesta vacía";
        } elseif ($pregunta_13 === 'delta') {
            $verificar_13 = "correcto";
        } else {
            $verificar_13 = "incorrecto";
        }

        $pregunta_14 = isset($_POST['pregunta_14']) ? $_POST['pregunta_14'] : '';
        if ($pregunta_14 === '') {
            $verificar_14 = "Respuesta vacía";
        } elseif ($pregunta_14 === 'epsilon') {
            $verificar_14 = "correcto";
        } else {
            $verificar_14 = "incorrecto";
        }

        $pregunta_15 = isset($_POST['pregunta_15']) ? $_POST['pregunta_15'] : '';
        if ($pregunta_15 === '') {
            $verificar_15 = "Respuesta vacía";
        } elseif ($pregunta_15 === 'correcto') {
            $verificar_15 = "correcto";
        } else {
            $verificar_15 = "incorrecto";
        }

        $pregunta_16 = isset($_POST['pregunta_16']) ? $_POST['pregunta_16'] : '';
        if ($pregunta_16 === '') {
            $verificar_16 = "Respuesta vacía";
        } elseif ($pregunta_16 === 'correcto') {
            $verificar_16 = "correcto";
        } else{
                $verificar_16 = "incorrecto";
        }


        $pregunta_a = isset($_POST['a']) ? $_POST['a'] : '';
        if ($pregunta_a === '0') {
            $verificar_a = "correcto";
        } else {
            $verificar_a = "incorrecto";
        }

        $pregunta_b = isset($_POST['b']) ? $_POST['b'] : '';
        if ($pregunta_b === '1') {
            $verificar_b = "correcto";
        }    else {
            $verificar_b = "incorrecto";
        }

        $pregunta_18 = isset($_POST['pregunta_18']) ? $_POST['pregunta_18'] : '';
        if ($pregunta_18 === '') {
            $verificar_18 = "Respuesta vacía";
        } elseif ($pregunta_1 === 'correcto') {
            $verificar_18 = "correcto";
        } else{
                $verificar_18 = "incorrecto";
        }

        ///
        $pregunta_t1 = isset($_POST['t1']) ? $_POST['t1'] : '';
        if ($pregunta_t1 === 'continua') {
            $verificar_t1 = "correcto";
        } elseif ($pregunta_t1 === '') {
            $verificar_t1 = "";
        } else {
            $verificar_t1 = "incorrecto";
        }

        $pregunta_t2 = isset($_POST['t2']) ? $_POST['t2'] : '';
        if ($pregunta_t2 === 'intervalo') {
            $verificar_t2 = "correcto";
        } elseif ($pregunta_t2 === '') {
            $verificar_t2 = "";
        } else {
            $verificar_t2 = "incorrecto";
        }

        // Verificación para t3
        $pregunta_t3 = isset($_POST['t3']) ? $_POST['t3'] : '';
        if ($pregunta_t3 === 'cerrado') {
            $verificar_t3 = "correcto";
        } elseif ($pregunta_t3 === '') {
            $verificar_t3 = "";
        } else {
            $verificar_t3 = "incorrecto";
        }

        // Verificación para t4
        $pregunta_t4 = isset($_POST['t4']) ? $_POST['t4'] : '';
        if ($pregunta_t4 === 'm') {
            $verificar_t4 = "correcto";
        } elseif ($pregunta_t4 === '') {
            $verificar_t4 = "";
        } else {
            $verificar_t4 = "incorrecto";
        }

        // Verificación para t5
        $pregunta_t5 = isset($_POST['t5']) ? $_POST['t5'] : '';
        if ($pregunta_t5 === 'c') {
            $verificar_t5 = "correcto";
        } elseif ($pregunta_t5 === '') {
            $verificar_t5 = "";
        } else {
            $verificar_t5 = "incorrecto";
        }

         $pregunta_s1 = isset($_POST['s1']) ? $_POST['s1'] : '';
        if ($pregunta_s1 === 'distintos') {
            $verificar_s1 = "correcto";
        } elseif ($pregunta_s1 === '') {
            $verificar_s1 = "";
        } else {
            $verificar_s1 = "incorrecto";
        }

        $pregunta_v1 = isset($_POST['v1']) ? $_POST['v1'] : '';
        if ($pregunta_v1 === 'a1') {
            $verificar_v1 = "correcto";
        } elseif ($pregunta_v1 === '') {
            $verificar_v1 = "";
        } else {
            $verificar_v1 = "incorrecto";
        }

        $pregunta_v2 = isset($_POST['v2']) ? $_POST['v2'] : '';
        if ($pregunta_v2 === 'b1') {
            $verificar_v2 = "correcto";
        } elseif ($pregunta_v2 === '') {
            $verificar_v2 = "";
        } else {
            $verificar_v2 = "incorrecto";
        }

        
        $pregunta_v3 = isset($_POST['v3']) ? $_POST['v3'] : '';
        if ($pregunta_v3 === 'a1') {
            $verificar_v3 = "correcto";
        } elseif ($pregunta_v3 === '') {
            $verificar_v3 = "";
        } else {
            $verificar_v3 = "incorrecto";
        }

        $pregunta_v4 = isset($_POST['v4']) ? $_POST['v4'] : '';
        if ($pregunta_v4 === 'c1') {
            $verificar_v4 = "correcto";
        } elseif ($pregunta_v4 === '') {
            $verificar_v4 = "";
        } else {
            $verificar_v4 = "incorrecto";
        }


        $pregunta_a4 = isset($_POST['a4']) ? $_POST['a4'] : '';
        if ($pregunta_a4 === 'mx+b') {
            $verificar_a4 = "correcto";
        } elseif ($pregunta_a4 === '') {
            $verificar_a4 = "";
        } else {
            $verificar_a4 = "incorrecto";
        }

        //
        $pregunta_a5 = isset($_POST['a5']) ? $_POST['a5'] : '';
        if ($pregunta_a5 === 'y') {
            $verificar_a5 = "correcto";
        } elseif ($pregunta_a5 === '') {
            $verificar_a5 = "";
        } else {
            $verificar_a5 = "incorrecto";
        }

        $pregunta_a6 = isset($_POST['a6']) ? $_POST['a6'] : '';
        if ($pregunta_a6 === 'y1') {
            $verificar_a6 = "correcto";
        } elseif ($pregunta_a6 === '') {
            $verificar_a6 = "";
        } else {
            $verificar_a6 = "incorrecto";
        }

        $pregunta_a7 = isset($_POST['a7']) ? $_POST['a7'] : '';
        if ($pregunta_a7 === 'm') {
            $verificar_a7 = "correcto";
        } elseif ($pregunta_a7 === '') {
            $verificar_a7 = "";
        } else {
            $verificar_a7 = "incorrecto";
        }

        $pregunta_a8 = isset($_POST['a8']) ? $_POST['a8'] : '';
        if ($pregunta_a8 === '(x-x1)') {
            $verificar_a8 = "correcto";
        } elseif ($pregunta_a8 === '') {
            $verificar_a8 = "";
        } else {
            $verificar_a8 = "incorrecto";
        }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre la Circunferencia</title>
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

function actualizarFormula() {
    // Obtener los valores de los inputs
    var a = document.getElementById('a').value || "a";
    var b = document.getElementById('b').value || "b";
    var f = document.getElementById('f').value || "";
    var c = document.getElementById('c').value || "";
    var h = document.getElementById('h').value || "";


    // Construir la fórmula dinámica
    var formula = `h \\sum_{${a}}^{${b}} f(${f} +( ${c}) ${h} ) \\, dx`;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

</script>
</head>
<body>
    <div class="seccion izquierda">
        <form action="./index.php" method="POST" onsubmit="handleSubmit(event)"   autocomplete="off">
        <h1>Circunferencia</h1>  
        <!-- Pregunta 1 -->
        <h3>¿Cuál es la fórmula para el perímetro de una circunferencia?</h3>
        <input type="radio" name="pregunta_1" value="correcto" <?php echo ($verificar_1 === "correcto") ? "checked" : ""; ?>> 2πr
        <br>
        <input type="radio" name="pregunta_1" value="incorrecto" <?php echo ($verificar_1 === "incorrecto") ? "checked" : ""; ?>> πr²
        <br>
        <button type="submit" class="btn btn-primary">Enviar respuesta</button>
        <p>Resultado: <?php echo $verificar_1; ?></p>

        <!-- Pregunta 2 -->
        <h3>¿Cuál es la fórmula para el área de una circunferencia?</h3>
        <input type="radio" name="pregunta_2" value="correcto" <?php echo ($verificar_2 === "correcto") ? "checked" : ""; ?>> πr²
        <br>
        <input type="radio" name="pregunta_2" value="incorrecto" <?php echo ($verificar_2 === "incorrecto") ? "checked" : ""; ?>> 2πr
        <br>
        <button type="submit"  class="btn btn-primary">Enviar respuesta</button>
        <p>Resultado: <?php echo $verificar_2; ?></p>

        <!-- Pregunta 3 -->
        <h3>¿Cuál es la fórmula para el diámetro de una circunferencia?</h3>
        <input type="radio" name="pregunta_3" value="correcto" <?php echo ($verificar_3 === "correcto") ? "checked" : ""; ?>> 2r
        <br>
        <input type="radio" name="pregunta_3" value="incorrecto" <?php echo ($verificar_3 === "incorrecto") ? "checked" : ""; ?>> r²
        <br>
        <button type="submit"  class="btn btn-primary">Enviar respuesta</button>
        <p>Resultado: <?php echo $verificar_3; ?></p>

        <!-- Pregunta 4 -->
        <h3>¿Cuál es el área de una circunferencia con radio 1?</h3>
        <input type="radio" name="pregunta_4" value="correcto" <?php echo ($verificar_4 === "correcto") ? "checked" : ""; ?>> π
        <br>
        <input type="radio" name="pregunta_4" value="incorrecto" <?php echo ($verificar_4 === "incorrecto") ? "checked" : ""; ?>> 2π
        <br>
        <button type="submit" class="btn btn-primary">Enviar respuesta</button>
        <p>Resultado: <?php echo $verificar_4; ?></p>

         <!-- Pregunta 5 -->

         <h3>Si dibujamos un polígono circunscrito dentro de un círculo y calculamos su área en base a los triángulos formados por los lados del polígono ,
        (numero de triangulos = numero de lados) usando la fórmula de área:</h3>
        
        <p>A_n: \( \frac{n}{2} \sin\left(\frac{2\pi}{n}\right) \)</p>
            
        <h4>¿qué valor toma el área cuando el número de lados \(n \to \infty\)?</h4>
        <input type="radio" name="pregunta_5" value="correcto" <?php echo ($verificar_5 === "correcto") ? "checked" : ""; ?>> π
        <br>
        <input type="radio" name="pregunta_5" value="incorrecto" <?php echo ($verificar_5 === "incorrecto") ? "checked" : ""; ?>> 2π
        <br>
        <input type="radio" name="pregunta_5" value="incorrecto" <?php echo ($verificar_5 === "incorrecto") ? "checked" : ""; ?>> ∞
        <br>
        <input type="radio" name="pregunta_5" value="incorrecto" <?php echo ($verificar_5 === "incorrecto") ? "checked" : ""; ?>> 1
        <br>
        <button type="submit" class="btn btn-primary">Enviar respuesta</button>
        <p>Resultado: <?php echo $verificar_5; ?></p>

        <!-- Pregunta 6 -->
        <h3>Forma correcta de expresar el área de un círculo utilizando factorización:</h3>
        <input type="radio" name="pregunta_6" value="correcto" <?php echo ($verificar_6 === "correcto") ? "checked" : ""; ?>> \( A = r \cdot (\pi r) \)
        <br>
        <input type="radio" name="pregunta_6" value="incorrecto" <?php echo ($verificar_6 === "incorrecto") ? "checked" : ""; ?>> \( A = r \cdot (\pi r^2) \)
        <br>
        <button type="submit" class="btn btn-primary">Enviar respuesta</button>
        <p>Resultado: <?php echo $verificar_6; ?></p>

        <!-- Pregunta 7 -->
        <h3>Relación entre radio, circunferencia y área:</h3>
        <p>Sabemos que \( C = 2\pi r \).</p>
        <p>¿Cuál de las siguientes ecuaciones es correcta?</p>
        <input type="radio" name="pregunta_7" value="correcto" <?php echo ($verificar_7 === "correcto") ? "checked" : ""; ?>>  <p> \( r \cdot \frac{C}{2} = \pi r^2 \) </p> 
        <br>
        <input type="radio" name="pregunta_7" value="incorrecto" <?php echo ($verificar_7 === "incorrecto") ? "checked" : ""; ?>> <p>  \( r \cdot \frac{C}{2} = 2\pi r^2 \) </p> 
        <br>
        <input type="radio" name="pregunta_7" value="incorrecto" <?php echo ($verificar_7 === "incorrecto") ? "checked" : ""; ?>> <p> \( r \cdot \frac{C}{2} = \pi^2 r^2 \) </p> 
        <br>
        <input type="radio" name="pregunta_7" value="incorrecto" <?php echo ($verificar_7 === "incorrecto") ? "checked" : ""; ?>> <p> \( r \cdot \frac{C}{2} = r^2 \) </p> 
        <br>
        <button type="submit" class="btn btn-primary">Enviar respuesta</button>
        <p>Resultado: <?php echo $verificar_7; ?></p>
        Pista: El radio por la mitad de la circunferencia es el área. 
        <br><br><br>
          <h1>Limite y secuencias: </h1>
        <!-- Pregunta 8 -->
        <h3>Completa la definición formal del límite:</h3>
        <p>Si, para cada <input type="text" name="pregunta_8" value="<?php echo $pregunta_8; ?>"> >
         <input type="text" name="pregunta_9" value="<?php echo $pregunta_9; ?>"> existe un 
         <input type="text" name="pregunta_10" value="<?php echo $pregunta_10; ?>"> >
          <input type="text" name="pregunta_11" value="<?php echo $pregunta_11; ?>"> 
          tal que si <input type="text" name="pregunta_12" value="<?php echo $pregunta_12; ?>"> 
          < |x − a| < <input type="text" name="pregunta_13" value="<?php echo $pregunta_13; ?>"> 
          entonces |f(x) − L| < <input type="text" name="pregunta_14" value="<?php echo $pregunta_14; ?>">
        </p>
        
        <!-- Respuestas -->
        <p>Resultado 1: <?php echo $verificar_8; ?>
        Resultado 2: <?php echo $verificar_9; ?></p>
        <p>Resultado 3: <?php echo $verificar_10; ?>
        Resultado 4: <?php echo $verificar_11; ?></p>
        <p>Resultado 5: <?php echo $verificar_12; ?>
        Resultado 6: <?php echo $verificar_13; ?></p>
        <p>Resultado 7: <?php echo $verificar_14; ?></p>
        
        <!-- Enviar formulario -->
        <input type="submit" value="Verificar Respuestas">
        <br><br>
        <img src="../img/Captura de pantalla 2024-12-04 075049.png" alt=""> <br>
        Estos gráficos muestran los posibles valores de  δ
        , dadas opciones sucesivamente más pequeñas de ε.
        </form>
    </div>
    


    <div class="centered-container">
        <a name="siguiente" id="siguiente" class="btn btn-primary" href="segundo.php" role="button">Siguiente</a>
    </div>  



    <div class="seccion derecha">
        <form action="./index.php" method="POST" onsubmit="handleSubmit(event)">
        <!-- Pregunta 15 -->
        <h3>¿Qué condición cumple una secuencia monótona creciente?:</h3>
        <input type="radio" name="pregunta_15" value="correcto" <?php echo ($verificar_15 === "correcto") ? "checked" : ""; ?>>
        𝑎<sub>n</sub> ≤ 𝑎<sub>n+1</sub> para todo n.
        <br>
        <input type="radio" name="pregunta_15" value="incorrecto" <?php echo ($verificar_15 === "incorrecto") ? "checked" : ""; ?>>
        𝑎<sub>n</sub> ≥ 𝑎<sub>n+1</sub> para todo n.
        <br>
        <input type="radio" name="pregunta_15" value="incorrecto" <?php echo ($verificar_15 === "incorrecto") ? "checked" : ""; ?>>
        No se sabe
        <br>
        <button type="submit" class="btn btn-primary">Enviar respuesta</button>
        <p>Resultado: <?php echo $verificar_15; ?></p>

        <!-- Pregunta 16 -->
        <h3>Según el teorema de la secuencia monótona, una secuencia converge si:</h3>
        <input type="radio"   name="pregunta_16" value="incorrecto1" <?php echo ($verificar_16 === "incorrecto") ? "checked" : ""; ?>>
        Es acotada pero no monótona.
        <br>
        <input type="radio"    name="pregunta_16" value="correcto" <?php echo ($verificar_16 === "correcto") ? "checked" : ""; ?>>
        Es monótona y está acotada.
        <br>
        <input type="radio" name="pregunta_16" value="incorrecto2" <?php echo ($verificar_16 === "incorrecto") ? "checked" : ""; ?>>
        No se sabe
        <br>
        <button type="submit" class="btn btn-primary">Enviar respuesta</button>
        <p>Resultado: <?php echo $verificar_16; ?></p>
        el Teorema de Weierstrass.  <br><br>
        si una sucesión siempre es creciente o decreciente se dice que es monótona.
        <br>
        <hr>
        Para la regla del punto medio: <br>
        desde: <input type="text" id="a" name="a" value="<?php echo ($pregunta_a); ?>" oninput="actualizarFormula()">
        hasta: <input type="text" id="b" name="b" value="<?php echo ($pregunta_b); ?>" oninput="actualizarFormula()">
        <br><br>
        f(x): <input type="text" id="f" name="f" placeholder="escribe f(x)" oninput="actualizarFormula()" width="40">
        <input type="text" id="c" name="c"  oninput="actualizarFormula()" width="20">
        <input type="text" id="h" name="h"  oninput="actualizarFormula()" width="20">


        <p id="formula">
            $$ h\sum_{i}^{n} f(x) \, dx $$
        </p>
        <p>Resultado para \( a \): <?php echo $verificar_a; ?></p>
        <p>Resultado para \( b \): <?php echo $verificar_b; ?></p>

        <button type="submit">enviar final</button> <br>
        Lo que esta dentro de la funcion es el punto medio, que se podria calcular de otras formas equivalentes,
        por ejemplo sumar el intervalo y dividir entre dos: [x<sub>i</sub> + x<sub>i-1</sub>]/2 <br> <br>
        tener clara la notacion, ej: la sumatorias de los f(x) (valores de las funciones).... <br><br>
        <hr>
        La condición para que una integral definida sea igual a 0 cuando la función es impar está relacionada 
        con las propiedades de las funciones impares y la simetría del intervalo de integración. <br><br>
        <p>
        La función \( f(x) \) debe ser <strong>impar</strong>, lo que significa que cumple:
    </p>
    <p>
        \[
        f(-x) = -f(x), \quad \forall x \in \text{dominio de } f.
        \]
    </p>

    <p>
        El intervalo de integración debe ser <strong>simétrico con respecto al origen</strong>, es decir:
    </p>
    <p>
        \[
        \int_{-a}^{a} f(x) \, dx = 0, \quad \text{si \( f(x) \) es impar.}
        \]
    </p>
    <hr>
    Theorem 2.5.1 (Intermediate Value Theorem). I <br><br>
    Si  f es una funcion <input type="text"  id="" size="5"  name="t1" value="<?php echo ($pregunta_t1); ?>"> en un 
    <input type="text"  id="" size="5"  name="t2" value="<?php echo ($pregunta_t2); ?>">
    <input type="text"  id="" size="5"  name="t3" value="<?php echo ($pregunta_t3); ?>"> [a,b] y 
    m es cualquier numero entre f(a) y f(b), entonces existe un numero c en el intervalo [a,b] tal
    que f( <input type="text"   id="" name="t4" value="<?php echo ($pregunta_t4); ?>" size="5"> ) = 
    <input type="text"  id="" name="t5" value="<?php echo ($pregunta_t5); ?>" size="5"> <br><br>
    
    <button type="submit" class="btn btn-primary">Enviar respuesta</button>
    <p>Resultado: <?php echo $verificar_t1; ?></p>
    <p>Resultado: <?php echo $verificar_t2; ?></p>
    <p>Resultado: <?php echo $verificar_t3; ?></p>
    <p>Resultado: <?php echo $verificar_t4; ?></p>
    <p>Resultado: <?php echo $verificar_t5; ?></p>




    <div style="border: 1px solid #ccc; padding: 20px; background-color: #f9f9f9; border-radius: 5px;">
    <p>
        La clave es que los f(x) evaluados tengan signos  <input type="text"  id="" size="5"  name="s1" value="<?php echo ($pregunta_s1); ?>">
        , aqui la continuidad nos asegura que hay un cero entre estos valores.
        <br><br>
        the bisection algorithm: <br><br>
        Suponga que <em>f</em> es continua en <strong>[a<sub>1</sub>, b<sub>1</sub>]</strong> y 
        <input type="text"  id="" size="5"  name="v1" value="<?php echo ($pregunta_v1); ?>">*
        <input type="text"  id="" size="5"  name="v2" value="<?php echo ($pregunta_v2); ?>">
        <  0 
        (an easy way to check that <em>f(a<sub>1</sub>)</em> and <em>f(b<sub>1</sub>)</em> have opposite signs). 
    </p>
    <p>
        Entonces la ecuacion: <br>
        <math>
            <mrow>
                <mi>f</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><mn>0</mn>
            </mrow>
        </math>
    </p>
    <p>
        tiene al menos una solucion en <strong>[a<sub>1</sub>, b<sub>1</sub>]</strong>. hacemos: <br>
        <math>
            <mrow>
                <p>
                    \( m_1 = \frac{a_1 + b_1}{2} \)
                </p>
            </mrow>
        </math>
    </p>
    <p>
        Si <em>f(m<sub>1</sub>)</em> = 0, entonces hallamos una solucion. Si <em>f(m<sub>1</sub>)</em> ≠ 0, entonces (2 posibilidades):
    </p>
    <ul>
        <li>
            <math>
                <mrow>
                    <mi>f</mi><mo>(</mo><mi>a</mi><sub>1</sub><mo>)</mo><mi>f</mi><mo>(</mo><mi>m</mi><sub>1</sub><mo>)</mo><mo>&lt;</mo><mn>0</mn>
                </mrow>
            </math>, in which case the equation has a solution in <strong>[a<sub>1</sub>, m<sub>1</sub>]</strong>.
        </li>
        <li>
            <math>
                <mrow>
                    <mi>f</mi><mo>(</mo><mi>m</mi><sub>1</sub><mo>)</mo><mi>f</mi><mo>(</mo><mi>b</mi><sub>1</sub><mo>)</mo><mo>&lt;</mo><mn>0</mn>
                </mrow>
            </math>, in which case the equation has a solution in <strong>[m<sub>1</sub>, b<sub>1</sub>]</strong>.
        </li>
    </ul>
    <p>
        En otras palabra, se mira donde esta el cero, entre a y m o b y m. <br><br>
        En el primer caso, hacemos <strong>a<sub>2</sub> = <input type="text"  id="" size="5"  name="v3" value="<?php echo ($pregunta_v3); ?>"></strong> y <strong>b<sub>2</sub> = m<sub>1</sub></strong>. <br>
        En el segundo caso, hacemos  <strong>a<sub>2</sub> = <input type="text"  id="" size="5"  name="v4" value="<?php echo ($pregunta_v4); ?>"> y <strong>b<sub>2</sub> = b<sub>1</sub></strong>. 
        Then:
    </p>
    <p>
        <math>
            <mrow>
                <mi>m</mi><sub>2</sub><mo>=</mo>
                <mfrac>
                    <mrow><mi>a</mi><sub>2</sub> <mo>+</mo> <mi>b</mi><sub>2</sub></mrow>
                    <mn>2</mn>
                </mfrac>
            </mrow>
        </math>
    </p>
</div>
<button type="submit">enviar</button>
<p>Resultado1: <?php echo $verificar_s1; ?></p>
<p>Resultado2: <?php echo $verificar_v2; ?></p>
<p>Resultado3: <?php echo $verificar_v3; ?></p>
<p>Resultado4: <?php echo $verificar_v4; ?></p>
 <br><br>

        

        Indique la ecuacion estandar de la recta (o explicita): <br>
        T(x) = <input type="text"  id="" size="10"  name="a4" value="<?php echo ($pregunta_a4); ?>"> <br><br>
        <button type="submit">enviar</button>
        pista: ordenada en el origen.
        <p>Resultado3: <?php echo $verificar_a4; ?></p> <br>

        Indique la ecuacion punto-pendiente: <br>
        T(x) = <input type="text"  id="" size="10"  name="a5" value="<?php echo ($pregunta_a5); ?>"> -
        <input type="text"  id="" size="10"  name="a6" value="<?php echo ($pregunta_a6); ?>"> =
        <input type="text"  id="" size="10"  name="a7" value="<?php echo ($pregunta_a7); ?>"> 
        <input type="text"  id="" size="10"  name="a8" value="<?php echo ($pregunta_a8); ?>"> 
        <br><br>
        <button type="submit">enviar</button>
        <p>Resultado5: <?php echo $verificar_a5; ?></p> 
        <p>Resultado6: <?php echo $verificar_a6; ?></p> 
        <p>Resultado7: <?php echo $verificar_a7; ?> Resultado8: <?php echo $verificar_a8; ?></p> <br>
    </form>
    
</div>
 


</body>
</html>
