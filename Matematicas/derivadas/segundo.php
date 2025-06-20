<?php
// Variables para las preguntas y valores del formulario
$verificar_1 = '';
$verificar_2 = '';
$verificar_3 = '';
$verificar_4 = '';
$verificar_5 = '';
 
// Variables de las respuestas del formulario
$antiderivada = '';
$antiderivada2_resp = '';
$constante_efecto = '';
$igual_derivada = '';
$derivada_cero = '';

$pregunta_fu = "";
$pregunta_du = "";
$pregunta_du2 = "";
$pregunta_dx = "";
$pregunta_x = "";
$pregunta_fr = "";

$verificar_du = "";
$verificar_du2 = "";
$verificar_dx = "";
$verificar_fu = "";
$verificar_x = "";
$verificar_fr = "";

$pregunta_d1 = "";
$pregunta_d2 = "";
$pregunta_d3 = "";
$pregunta_d4 = "";
$pregunta_d5 = "";
$pregunta_d6 = "";
$pregunta_d7 = "";
$pregunta_d8 = "";
$pregunta_d9 = "";
$pregunta_d10 = "";
$pregunta_d11 = "";
$pregunta_d12 = "";
$pregunta_d13 = "";
$pregunta_d14 = "";
$pregunta_d15 = "";

$verificar_d1 = "";
$verificar_d2 = "";
$verificar_d3 = "";
$verificar_d4 = "";
$verificar_d5 = "";
$verificar_d6 = "";
$verificar_d7 = "";
$verificar_d8 = "";
$verificar_d9 = "";
$verificar_d10 = "";
$verificar_d11 = "";
$verificar_d12 = "";
$verificar_d13 = "";
$verificar_d14 = "";
$verificar_d15 = "";

$mostrar_solucion = '';

// Procesar el formulario cuando se envía
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {  
        // Establecer todas las respuestas correctas
        $verificar_1 = "correcto";
        $verificar_2 = "correcto";
        $verificar_3 = "correcto";
        $verificar_4 = "correcto";
        $verificar_5 = "correcto";
        
        // Establecer los valores correctos
        $antiderivada = 'es_f';
        $antiderivada2_resp = 'x^3 + c';
        $constante_efecto = 'es_aditiva';
        $igual_derivada = 'diferencia_constante';
        $derivada_cero = 'constante';
        
        // Variables de sustitución
        $pregunta_fu = "F'(u(x))";
        $verificar_fu = "correcto";
        
        $pregunta_du = "F";
        $verificar_du = "correcto";
        
        $pregunta_du2 = "u";
        $verificar_du2 = "correcto";
        
        $pregunta_dx = "du/dx";
        $verificar_dx = "correcto";
        
        $pregunta_fr = "u(x)";
        $verificar_fr = "correcto";
        
        $pregunta_x = "x";
        $verificar_x = "correcto";
        
        // Reglas de derivación
        $pregunta_d1 = "f'(x)";
        $verificar_d1 = "correcto";
        
        $pregunta_d2 = "g(x)";
        $verificar_d2 = "correcto";
        
        $pregunta_d3 = "+";
        $verificar_d3 = "correcto";
        
        $pregunta_d4 = "f(x)";
        $verificar_d4 = "correcto";
        
        $pregunta_d5 = "g'(x)";
        $verificar_d5 = "correcto";
        
        $pregunta_d6 = "f'(x)";
        $verificar_d6 = "correcto";
        
        $pregunta_d7 = "g(x)";
        $verificar_d7 = "correcto";
        
        $pregunta_d8 = "-";
        $verificar_d8 = "correcto";
        
        $pregunta_d9 = "f(x)";
        $verificar_d9 = "correcto";
        
        $pregunta_d10 = "g'(x)";
        $verificar_d10 = "correcto";
        
        $pregunta_d11 = "(g(x))^2";
        $verificar_d11 = "correcto";
        
        $pregunta_d12 = "n*u^n-1*u'";
        $verificar_d12 = "correcto";
        
        $pregunta_d13 = "u'";
        $verificar_d13 = "correcto";
        
        $pregunta_d14 = "2";
        $verificar_d14 = "correcto";
        
        $pregunta_d15 = "\sqrt{u}";
        $verificar_d15 = "correcto";
    } else {
        // Capturar las respuestas enviadas
        $antiderivada = isset($_POST['antiderivada']) ? $_POST['antiderivada'] : '';
        $antiderivada2_resp = isset($_POST['antiderivada2_resp']) ? $_POST['antiderivada2_resp'] : '';
        $constante_efecto = isset($_POST['constante_efecto']) ? $_POST['constante_efecto'] : '';
        $igual_derivada = isset($_POST['igual_derivada']) ? $_POST['igual_derivada'] : '';
        $derivada_cero = isset($_POST['derivada_cero']) ? $_POST['derivada_cero'] : '';
        $proceso = isset($_POST['proceso']) ? $_POST['proceso'] : '';

        // Verificar las respuestas
        if ($antiderivada === 'es_f') {
            $verificar_1 = "correcto";
        } else {
            $verificar_1 = "incorrecto";
        }

        if (strtolower(trim($antiderivada2_resp)) === 'x^3 + c') {
            $verificar_2 = "correcto";
        } else {
            $verificar_2 = "incorrecto";
        }

        if ($constante_efecto === 'es_aditiva') {
            $verificar_3 = "correcto";
        } else {
            $verificar_3 = "incorrecto";
        }

        if ($igual_derivada === 'diferencia_constante') {
            $verificar_4 = "correcto";
        } else {
            $verificar_4 = "incorrecto";
        }

        if ($derivada_cero === 'constante') {
            $verificar_5 = "correcto";
        } else {
            $verificar_5 = "incorrecto";
        }

        $pregunta_fu = isset($_POST['fu']) ? $_POST['fu'] : '';
        if ($pregunta_fu === "F'(u(x))") {
            $verificar_fu = "correcto";
        } else {
            $verificar_fu = "incorrecto";
        }

        $pregunta_du = isset($_POST['du']) ? $_POST['du'] : '';
        if ($pregunta_du === "F") {
            $verificar_du = "correcto";
        } else {
            $verificar_du = "incorrecto";
        }

        $pregunta_du2 = isset($_POST['du2']) ? $_POST['du2'] : '';
        if ($pregunta_du2 === "u") {
            $verificar_du2 = "correcto";
        } else {
            $verificar_du2 = "incorrecto";
        }

        $pregunta_dx = isset($_POST['dx']) ? $_POST['dx'] : '';
        if ($pregunta_dx === "du/dx") {
            $verificar_dx = "correcto";
        } else {
            $verificar_dx = "incorrecto";
        }

        $pregunta_fr = isset($_POST['fr']) ? $_POST['fr'] : '';
        if ($pregunta_fr === "u(x)") {
            $verificar_fr = "correcto";
        } else {
            $verificar_fr = "incorrecto";
        }

        $pregunta_x = isset($_POST['x']) ? $_POST['x'] : '';
        if ($pregunta_x === "x") {
            $verificar_x = "correcto";
        } else {
            $verificar_x = "incorrecto";
        }

        $pregunta_d1 = isset($_POST['d1']) ? $_POST['d1'] : '';
        if ($pregunta_d1 === "f'(x)") {
            $verificar_d1 = "correcto";
        } else {
            $verificar_d1 = "incorrecto";
        }

        $pregunta_d2 = isset($_POST['d2']) ? $_POST['d2'] : '';
        if ($pregunta_d2 === "g(x)") {
            $verificar_d2 = "correcto";
        } else {
            $verificar_d2 = "incorrecto";
        }

        $pregunta_d3 = isset($_POST['d3']) ? $_POST['d3'] : '';
        if ($pregunta_d3 === "+") {
            $verificar_d3 = "correcto";
        } else {
            $verificar_d3 = "incorrecto";
        }

        $pregunta_d4 = isset($_POST['d4']) ? $_POST['d4'] : '';
        if ($pregunta_d4 === "f(x)") {
            $verificar_d4 = "correcto";
        } else {
            $verificar_d4 = "incorrecto";
        }

        $pregunta_d5 = isset($_POST['d5']) ? $_POST['d5'] : '';
        if ($pregunta_d5 === "g'(x)") {
            $verificar_d5 = "correcto";
        } else {
            $verificar_d5 = "incorrecto";
        }

        $pregunta_d6 = isset($_POST['d6']) ? $_POST['d6'] : '';
        if ($pregunta_d6 === "f'(x)") {
            $verificar_d6 = "correcto";
        } else {
            $verificar_d6 = "incorrecto";
        }

        $pregunta_d7 = isset($_POST['d7']) ? $_POST['d7'] : '';
        if ($pregunta_d7 === "g(x)") {
            $verificar_d7 = "correcto";
        } else {
            $verificar_d7 = "incorrecto";
        }

        $pregunta_d8 = isset($_POST['d8']) ? $_POST['d8'] : '';
        if ($pregunta_d8 === "-") {
            $verificar_d8 = "correcto";
        } else {
            $verificar_d8 = "incorrecto";
        }

        $pregunta_d9 = isset($_POST['d9']) ? $_POST['d9'] : '';
        if ($pregunta_d9 === "f(x)") {
            $verificar_d9 = "correcto";
        } else {
            $verificar_d9 = "incorrecto";
        }

        $pregunta_d10 = isset($_POST['d10']) ? $_POST['d10'] : '';
        if ($pregunta_d10 === "g'(x)") {
            $verificar_d10 = "correcto";
        } else {
            $verificar_d10 = "incorrecto";
        }

        $pregunta_d11 = isset($_POST['d11']) ? $_POST['d11'] : '';
        if ($pregunta_d11 === "(g(x))^2") {
            $verificar_d11 = "correcto";
        } else {
            $verificar_d11 = "incorrecto";
        }

        $pregunta_d12 = isset($_POST['d12']) ? $_POST['d12'] : '';
        if ($pregunta_d12 === "n*u^n-1*u'") {
            $verificar_d12 = "correcto";
        } else {
            $verificar_d12 = "incorrecto";
        }

        $pregunta_d13 = isset($_POST['d13']) ? $_POST['d13'] : '';
        if ($pregunta_d13 === "u'") {
            $verificar_d13 = "correcto";
        } else {
            $verificar_d13 = "incorrecto";
        }

        $pregunta_d14 = isset($_POST['d14']) ? $_POST['d14'] : '';
        if ($pregunta_d14 === "2") {
            $verificar_d14 = "correcto";
        } else {
            $verificar_d14 = "incorrecto";
        }

        $pregunta_d15 = isset($_POST['d15']) ? $_POST['d15'] : '';
        if ($pregunta_d15 === "\sqrt{u}") {
            $verificar_d15 = "correcto";
        } else {
            $verificar_d15 = "incorrecto";
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
    height: 420vh;
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
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('d13').value || "";
    var g = document.getElementById('d14').value || "";
    var d = document.getElementById('d15').value || "";


    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}}{${g}${d}} \\, `;

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
    <h1>Preguntas sobre Antiderivadas</h1>
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)">
        <p><strong>1. ¿Qué es una antiderivada?</strong></p>
        <input type="radio" name="antiderivada" value="es_f" id="antiderivada1" <?php echo ($antiderivada === 'es_f') ? 'checked' : ''; ?>> 
        <label for="antiderivada1">Una función cuya derivada es igual a la función dada</label><br>
        
        <input type="radio" name="antiderivada" value="no_es_f" id="antiderivada2" <?php echo ($antiderivada === 'no_es_f') ? 'checked' : ''; ?>> 
        <label for="antiderivada2">Una función que no tiene ninguna relación con la función dada</label><br>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <p>Resultado 1: <?php echo $verificar_1; ?></p>

        <hr>

        <p><strong>2. Si la derivada de una función \( f(x) \) es \( f'(x) = 3x^2 \), ¿cuál es una antiderivada de \( f(x) \)?</strong></p>
        <input type="text" name="antiderivada2_resp" size="20" value="<?php echo htmlspecialchars($antiderivada2_resp); ?>" placeholder="Escribe tu respuesta"><br>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <p>Resultado : <?php echo $verificar_2; ?></p>

        <hr>

        <p><strong>3. ¿Cómo afecta la constante \( C \) en las antiderivadas?</strong></p>
        <input type="radio" name="constante_efecto" value="es_contraria" id="constante1" <?php echo ($constante_efecto === 'es_contraria') ? 'checked' : ''; ?>> 
        <label for="constante1">La constante \( C \) cambia la pendiente de la función</label><br>
        
        <input type="radio" name="constante_efecto" value="no_afecta" id="constante2" <?php echo ($constante_efecto === 'no_afecta') ? 'checked' : ''; ?>> 
        <label for="constante2">La constante \( C \) no afecta a la derivada de la función</label><br>
        
        <input type="radio" name="constante_efecto" value="es_aditiva" id="constante3" <?php echo ($constante_efecto === 'es_aditiva') ? 'checked' : ''; ?>> 
        <label for="constante3">La constante \( C \) solo afecta el valor absoluto de la función, pero no su pendiente</label><br>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <p>Resultado 3: <?php echo $verificar_3; ?></p>

        <hr>

        <p><strong>4. Si \( F'(x) = G'(x) \) para dos funciones \( F(x) \) y \( G(x) \), ¿qué se puede decir de ellas?</strong></p>
        <input type="radio" name="igual_derivada" value="son_iguales" id="igual1" <?php echo ($igual_derivada === 'son_iguales') ? 'checked' : ''; ?>> 
        <label for="igual1">Las funciones \( F(x) \) y \( G(x) \) son iguales</label><br>

        <input type="radio" name="igual_derivada" value="diferencia_constante" id="igual2" <?php echo ($igual_derivada === 'diferencia_constante') ? 'checked' : ''; ?>> 
        <label for="igual2">Las funciones \( F(x) \) y \( G(x) \) pueden diferir solo por una constante</label><br>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <p>Resultado 4: <?php echo $verificar_4; ?></p>

        <hr>

        <p><strong>5. ¿Qué ocurre si la derivada de una función es cero en un intervalo abierto?</strong></p>
        <input type="radio" name="derivada_cero" value="constante" id="derivada1" <?php echo ($derivada_cero === 'constante') ? 'checked' : ''; ?>> 
        <label for="derivada1">La función debe ser constante en ese intervalo</label><br>

        <input type="radio" name="derivada_cero" value="variable" id="derivada2" <?php echo ($derivada_cero === 'variable') ? 'checked' : ''; ?>> 
        <label for="derivada2">La función es variable en ese intervalo</label><br>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <p>Resultado 5: <?php echo $verificar_5; ?></p>


        <hr>
        <br><br>
        <p>el problema de encontrar la línea tangente de f en el punto (x<sub>0</sub>, y<sub>0</sub>) es,
         en esencia, el mismo que encontrar la función afín \( T \) que mejor aproxima a \( f \) cerca de un
          punto específico \( x_0 \). Aunque el objetivo final es encontrar una línea tangente, lo que se busca 
          es una aproximación lineal que represente a la función en las cercanías de ese punto. Es decir, ambos 
          problemas son muy similares o, en algunos casos, equivalentes, ya que la línea tangente es precisamente
           una aproximación afín (una recta) que toca la curva de la función en ese punto.</p>


    <p><strong>Ejemplo 3.1.1.</strong> Consideremos el problema de aproximar la función \( f(x) = \sqrt{x} \) para valores de \( x \) cercanos a 1. Como primera aproximación, podríamos decir que \( \sqrt{x} \approx 1 \) para \( x \) cercano a 1. En otras palabras, si definimos \( T(x) = 1 \) para todo \( x \), estamos diciendo que la función afín \( T \) es una buena aproximación para \( f \) cuando \( x \) está cerca de 1. Dos hechos caracterizan esta afirmación. Primero, \( T \) y \( f \) coinciden en 1; es decir, \( T(1) = 1 = f(1) \).</p>

    <p>Segundo, el error cometido al aproximar \( f \) con \( T \) tiende a 0 cuando \( x \) se aproxima a 1. Es decir, si definimos \( r(x) = f(x) - T(x) \), entonces \( r(x) \) es el error cometido al aproximar \( f \) con \( T \) en el punto \( x \), y</p>

    <p>
        \[
        \lim_{x \to 1} r(x) = \lim_{x \to 1} (f(x) - T(x)) = \lim_{x \to 1} (\sqrt{x} - 1) = 1 - 1 = 0.
        \]
    </p>

    <p>Por lo tanto, hemos encontrado una función afín que aproxima nuestra función \( f \) alrededor de \( x = 1 \) según un criterio razonable. Sin embargo, es fácil ver que cualquier función afín \( T \) cuya gráfica pase por el punto \( (1, 1) \) satisfará las condiciones \( T(1) = f(1) \) y que el error tienda a 0 cuando \( x \) tiende a 1.</p>
    <hr>

    Interpretacion:
        <p>\( \frac{d}{dx} F(u(x)) = F'(u(x)) \cdot \frac{du}{dx} \)</p>
        La primera parte: calcular la antiderivada de una funcion compuesta. la segunda es la regla de
        la cadena. <br>
        Aquí,  <input type="text" id="fu" name="fu"   size="5" value="<?php echo ($pregunta_fu); ?>" >
        es la derivada de  <input type="text" id="du" name="du"   size="5" value="<?php echo ($pregunta_du); ?>" >
        con respecto a  <input type="text" id="du2" name="du2"   size="5" value="<?php echo ($pregunta_du2); ?>" >
        y  <input type="text" id="dx" name="dx"  size="5" value="<?php echo ($pregunta_dx); ?>" >
        es la derivada de  <input type="text" id="fr" name="fr"   size="5" value="<?php echo ($pregunta_fr); ?>" >
        con respecto a  <input type="text" id="x" name="x"   size="5" value="<?php echo ($pregunta_x); ?>" >.
        <br><br>

        <p>Resultado 4: <?php echo $verificar_fu; ?></p>
        Resultado 5: <?php echo $verificar_du; ?>
        Resultado 6: <?php echo $verificar_du2; ?>
        Resultado 7: <?php echo $verificar_dx; ?> <br>
        Resultado 8: <?php echo $verificar_fr; ?> <br>
        Resultado 9: <?php echo $verificar_x; ?> <br>

        <button type="submit">enviar final</button> <br> <br><br>

    
    <p>En nuestro ejemplo, observamos que:</p>
    <p>
        \[
        \lim_{h \to 0} \frac{R(h)}{h} = 0
        \]
        cuando \( m = 0.5 \), pero:
        \[
        \lim_{h \to 0} \frac{R(h)}{h} \neq 0
        \]
        para todos los demás valores de \( m \).
    </p>

    <p>
        Distinguimos los dos casos diciendo que, en el primer caso, \( R(h) \) es \( o(h) \), mientras que en el segundo caso, \( R(h) \) es solo \( O(h) \).
    </p>

    <h2>Definición 3.1.1:</h2>
    <p>Se dice que una función \( f \) es \( o(h) \) si:</p>
    <p>
        \[
        \lim_{h \to 0} \frac{f(h)}{h} = 0.
        \]
    </p>
    <br>
    <h1>Definición 3.1.2: Función \( O(h) \)</h1>
    
    <p>Se dice que una función \( f \) es \( O(h) \) si existen constantes \( M \) y \( \epsilon > 0 \) tales que:</p>
    <p>
        \[
        \left| \frac{f(h)}{h} \right| \leq M \tag{3.1.8}
        \]
        siempre que \( -\epsilon < h < \epsilon \).
    </p>

    <p>Note que si:</p>
    <p>
        \[
        \lim_{h \to 0} \frac{f(h)}{h} = L,
        \]
    </p>
    <p>entonces podemos encontrar un \( \epsilon > 0 \) tal que:</p>
    <p>
        \[
        \left| \frac{f(h)}{h} - L \right| \leq 1
        \]
        siempre que \( |h| < \epsilon \).
    </p>

    <p>Por lo tanto:</p>
    <p>
        \[
        L - 1 \leq \frac{f(h)}{h} \leq L + 1
        \]
        siempre que \( |h| < \epsilon \).
    </p>
    <br><br>
    </form>

    <br>
    <div>
      <hr>
    </div>
    </div>

    <div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)">
    <p>Si dejamos que \( M \) sea el mayor valor entre \( |L - 1| \) y \( |L + 1| \), esto muestra que:</p>
    <p>
        \[
        \left| \frac{f(h)}{h} \right| \leq M
        \]
        siempre que \( -\epsilon < h < \epsilon \).
    </p>
    <hr>

    Derivada de un producto: \(f(x) * g(x) \) <br><br>
    
    =<input type="text" name="d1" id="" size="5" value=<?php echo $pregunta_d1?>>*
    <input type="text" name="d2" id="" size="5" value=<?php echo $pregunta_d2?>>
    <input type="text" name="d3" id="" size="5" value=<?php echo $pregunta_d3?>>
    <input type="text" name="d4" id="" size="5" value=<?php echo $pregunta_d4?>>*
    <input type="text" name="d5" id="" size="5" value=<?php echo $pregunta_d5?>>
   <br><br>
    <button type="submit">Enviar</button> <br>
    Resultado : <?php echo $verificar_d1 ?>
    Resultado : <?php echo $verificar_d2 ?>
    Resultado : <?php echo $verificar_d3 ?>
    Resultado : <?php echo $verificar_d4 ?>
    Resultado : <?php echo $verificar_d5 ?>
    <hr>
    <p>
    <div style="text-align: center;">
    <p>Derivada de: \( \frac{f(x)}{g(x)} \)</p>
    =<input type="text" name="d6" id="" size="5" value="<?php echo $pregunta_d6; ?>">*
    <input type="text" name="d7" id="" size="5" value="<?php echo $pregunta_d7; ?>">
    <input type="text" name="d8" id="" size="5" value="<?php echo $pregunta_d8; ?>">
    <input type="text" name="d9" id="" size="5" value="<?php echo $pregunta_d9; ?>">*
    <input type="text" name="d10" id="" size="5" value="<?php echo $pregunta_d10; ?>">
    <hr>
    <input type="text" name="d11" id="" size="5" value="<?php echo $pregunta_d11; ?>" style="display: block; margin: auto;">
    
    <br><br>
</div>
<button type="submit">Enviar</button> <br>
    Resultado : <?php echo $verificar_d6 ?>
    Resultado : <?php echo $verificar_d7 ?>
    Resultado : <?php echo $verificar_d8 ?>
    Resultado : <?php echo $verificar_d9 ?>
    Resultado : <?php echo $verificar_d10 ?>
    Resultado : <?php echo $verificar_d11 ?>
    <br><br>
    <strong>Ahora la derivada compuesta de u<sup>n</sup>:</strong><br>
    <input type="text" name="d12" id="" size="8" value="<?php echo $pregunta_d12; ?>"  ><br>
    <button type="submit">Enviar</button>
    Resultado : <?php echo $verificar_d12 ?>
    <br><br>
    Cual es la derivada de la funcion compuesta: \( \sqrt{u} \) <br><br>
    <span id="formula">
            \( \frac{0}{0} \)
    </span> <br><br>
    <input type="text" id="d13" name="d13" oninput="actualizarFormula()" size="5" value="<?php echo ($pregunta_d13); ?>" >
    <input type="text" id="d14" name="d14"  oninput="actualizarFormula()" size="5" value="<?php echo ($pregunta_d14); ?>" >
    <input type="text" id="d15" name="d15"  oninput="actualizarFormula()" size="5" value="<?php echo ($pregunta_d15); ?>" >
    <br><br>
    <button type="submit">enviar</button><br>
    Resultado: <?php echo $verificar_d13 ?>
    Resultado: <?php echo $verificar_d14 ?>
    Resultado: <?php echo $verificar_d15 ?>
    <hr>
    <strong>Si desea ver las soluciones escribir: mostrar_solucion</strong>
<br>
<input type="text" id="mostrar_solucion" name="mostrar_solucion" value="<?php echo htmlspecialchars($mostrar_solucion); ?>">
<button type="submit">Mostrar Solución</button>

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
