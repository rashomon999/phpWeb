<?php
// Variables para verificaciones
$verificar_u = '';
$verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = $verificar_5 = 
$verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
$verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = '';

// Variables para respuestas
$ultimo = $primero = $segundo = $tercero = $cuarto = $quinto = 
$sexto = $septimo = $octavo = $noveno = $decimo = 
$undecimo = $duodecimo = $decimotercero = $decimocuarto = $decimoquinto = '';

// Variable para controlar mostrar soluciones
$mostrar_solucion = '';

// Procesar el formulario cuando se envía
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas
        $ultimo = '-x^-1+C';
        $primero = 'cx+C';
        $segundo = 'x';
        $tercero = 'xu+C';
        $cuarto = 'x';
        $quinto = 'n+1';
        $sexto = 'n+1';
        $septimo = '+C';
        $octavo = 'x';
        $noveno = '2';
        $decimo = '2';
        $undecimo = '+C';
        $duodecimo = 'x';
        $decimotercero = '3';
        $decimocuarto = '3';
        $decimoquinto = '+C';
        
        // Marcar todas como correctas
        $verificar_u = $verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = 
        $verificar_5 = $verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = 
        $verificar_10 = $verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = 
        $verificar_15 = "correcto";
    } else {
        // Verificar respuestas individualmente
        $ultimo = isset($_POST['ultimo']) ? $_POST['ultimo'] : '';
        if ($ultimo === '-x^-1+C') {
            $verificar_u = "correcto";
        } elseif ($ultimo === '') {
            $verificar_u = '';
        } else {
            $verificar_u = "incorrecto";
        }

        $primero = isset($_POST['primero']) ? $_POST['primero'] : '';
        if ($primero === 'cx+C' || $primero === 'xc+C') {
            $verificar_1 = "correcto";
        } elseif ($primero === '') {
            $verificar_1 = '';
        } else {
            $verificar_1 = "incorrecto";
        }

        $segundo = isset($_POST['segundo']) ? $_POST['segundo'] : '';
        if ($segundo === 'x') {
            $verificar_2 = "correcto";
        } elseif ($segundo === '') {
            $verificar_2 = '';
        } else {
            $verificar_2 = "incorrecto";
        }

        $tercero = isset($_POST['tercero']) ? $_POST['tercero'] : '';
        if ($tercero === 'xu+c' || $tercero === 'xu+C') {
            $verificar_3 = "correcto";
        } elseif ($tercero === '') {
            $verificar_3 = '';
        } else {
            $verificar_3 = "incorrecto";
        }

        $cuarto = isset($_POST['cuarto']) ? $_POST['cuarto'] : '';
        if ($cuarto === 'x') {
            $verificar_4 = "correcto";
        } elseif ($cuarto === '') {
            $verificar_4 = '';
        } else {
            $verificar_4 = "incorrecto";
        }

        $quinto = isset($_POST['quinto']) ? $_POST['quinto'] : '';
        if ($quinto === 'n+1') {
            $verificar_5 = "correcto";
        } elseif ($quinto === '') {
            $verificar_5 = '';
        } else {
            $verificar_5 = "incorrecto";
        }

        $sexto = isset($_POST['sexto']) ? $_POST['sexto'] : '';
        if ($sexto === 'n+1') {
            $verificar_6 = "correcto";
        } elseif ($sexto === '') {
            $verificar_6 = '';
        } else {
            $verificar_6 = "incorrecto";
        }

        $septimo = isset($_POST['septimo']) ? $_POST['septimo'] : '';
        if ($septimo === '+C') {
            $verificar_7 = "correcto";
        } elseif ($septimo === '') {
            $verificar_7 = '';
        } else {
            $verificar_7 = "incorrecto";
        }

        $octavo = isset($_POST['octavo']) ? $_POST['octavo'] : '';
        if ($octavo === 'x') {
            $verificar_8 = "correcto";
        } elseif ($octavo === '') {
            $verificar_8 = '';
        } else {
            $verificar_8 = "incorrecto";
        }

        $noveno = isset($_POST['noveno']) ? $_POST['noveno'] : '';
        if ($noveno === '2') {
            $verificar_9 = "correcto";
        } elseif ($noveno === '') {
            $verificar_9 = '';
        } else {
            $verificar_9 = "incorrecto";
        }

        $decimo = isset($_POST['decimo']) ? $_POST['decimo'] : '';
        if ($decimo === '2') {
            $verificar_10 = "correcto";
        } elseif ($decimo === '') {
            $verificar_10 = '';
        } else {
            $verificar_10 = "incorrecto";
        }

        $undecimo = isset($_POST['undecimo']) ? $_POST['undecimo'] : '';
        if ($undecimo === '+C') {
            $verificar_11 = "correcto";
        } elseif ($undecimo === '') {
            $verificar_11 = '';
        } else {
            $verificar_11 = "incorrecto";
        }

        $duodecimo = isset($_POST['duodecimo']) ? $_POST['duodecimo'] : '';
        if ($duodecimo === 'x') {
            $verificar_12 = "correcto";
        } elseif ($duodecimo === '') {
            $verificar_12 = '';
        } else {
            $verificar_12 = "incorrecto";
        }

        $decimotercero = isset($_POST['decimotercero']) ? $_POST['decimotercero'] : '';
        if ($decimotercero === '3') {
            $verificar_13 = "correcto";
        } elseif ($decimotercero === '') {
            $verificar_13 = '';
        } else {
            $verificar_13 = "incorrecto";
        }

        $decimocuarto = isset($_POST['decimocuarto']) ? $_POST['decimocuarto'] : '';
        if ($decimocuarto === '3') {
            $verificar_14 = "correcto";
        } elseif ($decimocuarto === '') {
            $verificar_14 = '';
        } else {
            $verificar_14 = "incorrecto";
        }

        $decimoquinto = isset($_POST['decimoquinto']) ? $_POST['decimoquinto'] : '';
        if ($decimoquinto === '+C') {
            $verificar_15 = "correcto";
        } elseif ($decimoquinto === '') {
            $verificar_15 = '';
        } else {
            $verificar_15 = "incorrecto";
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
    height: 290vh;
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
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('cuarto').value || "";
    var g = document.getElementById('quinto').value || "";
    var d = document.getElementById('sexto').value || "";
    var e = document.getElementById('septimo').value || "";


    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}^{${g}}}{${d}}  ${e} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('octavo').value || "";
    var g = document.getElementById('noveno').value || "";
    var d = document.getElementById('decimo').value || "";
    var e = document.getElementById('undecimo').value || "";


    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}^{${g}}}{${d}}  ${e} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('duodecimo').value || "";
    var g = document.getElementById('decimotercero').value || "";
    var d = document.getElementById('decimocuarto').value || "";
    var e = document.getElementById('decimoquinto').value || "";


    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}^{${g}}}{${d}}  ${e} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

    </script>
</head>
<body>
<div class="seccion izquierda">
    <form action="./sexto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

    <p>La integral a resolver es:</p>
<p> \( \int 5x \cos(x^2) \, dx \) </p>


    <p>Realizamos la sustitución \( u = x^2 \), por lo que tenemos:</p>
<p> \( du = 2x \, dx \)</p>

<p>Ahora, para que esta sustitución sea consistente, despejamos \( x \, dx \) de la ecuación de \( du \):</p>
<p> \( x \, dx = \frac{1}{2} \, du \)</p>

<p>Luego, la integral original se transforma en:</p>
<p> \( \int 5x \cos(x^2) \, dx = \frac{5}{2} \int \cos(u) \, du \)</p>
(si nos fijamos, los multiplos forman xdx, solo que estan organizados diferente).

<p>La integral de \( \cos(u) \) es \( \sin(u) \), por lo que obtenemos:</p>
<p> \( \frac{5}{2} \sin(u) + C \)</p>

<p>Finalmente, sustituyendo \( u = x^2 \), obtenemos:</p>
<p> \( \frac{5}{2} \sin(x^2) + C \)</p>

    <br><br>
    Se divide porque la igualdad de du tiene que ser igual a lo que vamos a reemplazar.
    se podria decir que du es lo que estorba en el sentido de que, al realizar la sustitución, 
    necesitamos ajustar la integral para que todo quede en términos del nuevo diferencial 
    du y no en dx. <br>
    se tiene que averiguar que se desajusto, es decir, la derivada de g(x), pudo haber sido un multiplo
    2 que cambio el 1/2 en la expresion original.
    <br>
    se integra la funcion "original"
    <br>
    <hr>
    <h2>Integral Original:</h2>
    <p>
        \[
        \int_{0}^{1} \frac{x^2}{(1 + x^3)^2} dx
        \]
    </p>

    <h2>Paso 1: Identificar una sustitución adecuada</h2>
    <ol>
        <li>Observamos que \( (1 + x^3) \) es una expresión compuesta dentro del integrando y su derivada es fácil de manejar:
            \[
            \frac{d}{dx}(1 + x^3) = 3x^2.
            \]
        </li>
        <li>Por lo tanto, hacemos la sustitución:
            \[
            u = 1 + x^3.
            \]
        </li>
    </ol>
                <br> <br>
    <h2>Paso 2: Derivar \( u \) para obtener \( du \)</h2>
    <p>
        Diferenciamos \( u \) con respecto a \( x \):
        \[
        du = 3x^2 dx \quad \implies \quad x^2 dx = \frac{du}{3}.
        \]
        Esta relación nos permite reemplazar \( x^2 dx \) en términos de \( du \).
    </p>

    <h2>Paso 3: Ajustar los límites de integración</h2>
    <p>Cuando \( x \) varía de \( 0 \) a \( 1 \), los valores de \( u = 1 + x^3 \) son:</p>
    <ul>
        <li>Cuando \( x = 0 \), \( u = 1 + 0^3 = 1 \).</li>
        <li>Cuando \( x = 1 \), \( u = 1 + 1^3 = 2 \).</li>
    </ul>
    <p>Por lo tanto, los nuevos límites de integración son de \( u = 1 \) a \( u = 2 \).</p>
            <br><br>
    <h2>Paso 4: Reescribir la integral en términos de \( u \)</h2>
    <p>
        Reemplazamos todo en la integral original:
        \[
        x^2 dx = \frac{du}{3}, \quad (1 + x^3)^2 = u^2.
        \]
        Esto da:
        \[
        \int_{0}^{1} \frac{x^2}{(1 + x^3)^2} dx = \frac{1}{3} \int_{1}^{2} \frac{1}{u^2} du.
        \]
    </p>

     

   
    </form>
</div>
<div class="seccion derecha">
    <form action="./sexto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

    <h2>Paso 5: Integrar</h2>
    <p>
        La integral de \( \frac{1}{u^2} \) es:
        \[
        \int \frac{1}{u^2} du = \int u^{-2} du = \frac{u^{-1}}{-1} = -\frac{1}{u}.
        \]
        Entonces:
        \[
        \frac{1}{3} \int_{1}^{2} \frac{1}{u^2} du = \frac{1}{3} \left[ -\frac{1}{u} \right]_{1}^{2}.
        \]
    </p> 


    <h2>Paso 6: Evaluar los límites</h2>
    <p>
        Sustituimos los valores de los límites \( u = 1 \) y \( u = 2 \):
        \[
        \left[ -\frac{1}{u} \right]_{1}^{2} = -\frac{1}{2} - \left(-\frac{1}{1}\right) = -\frac{1}{2} + 1 = \frac{1}{2}.
        \]
        Multiplicamos por el factor \( \frac{1}{3} \):
        \[
        \frac{1}{3} \cdot \frac{1}{2} = \frac{1}{6}.
        \]
    </p>

    <h2>Resultado final:</h2>
    <p>
        \[
        \int_{0}^{1} \frac{x^2}{(1 + x^3)^2} dx = \frac{1}{6}.
        \]
    </p>
    <hr>


    <br>
    <p>
    La integral indefinida de una constante c es: <br>
        \(
        \int c \, dx = \)
        <input type="text" name="primero" id="" value=<?php echo $primero?> >
        
    </p>
    <button type="submit">enviar</button>
    <?php echo $verificar_1 ?><br>
    ayuda: cuando la derivada de una expresion resultaba en una constante, cual era la expresion 
    incial? <br><br>
    
    <p>
    La integral indefinida de dx (o 1 dx) es: <br>
        \(
        \int  \, dx = \)
        <input type="text" name="segundo" id="" value=<?php echo $segundo?> >
    </p>
    <button type="submit">enviar</button>
    <?php echo $verificar_2 ?><br><br>
    
    <p>
    La integral indefinida de x du es: <br>
        \(
        \int  x   \, du = \)
        <input type="text" name="tercero" id="" value=<?php echo $tercero?> >
    </p>
    <button type="submit">enviar</button>
    <?php echo $verificar_3 ?><br><br>
    La variable en este ejercicio es u, todo lo que no sea la letra u es una constante.
    por lo tanto x es una constante. La integral de du la primitiva de du(acuerdese del anterior).
    <br><br>

    
    La integral indefinida de \( x^n \) es: <br>
        \(
        \int  x^n  \, dx = \)
        <span id="formula">
            \( \frac{0}{0} \)
        </span> 
         <br><br>
        <input type="text" name="cuarto" size="5" id="cuarto" oninput="actualizarFormula()" value=<?php echo $cuarto?>>
        <input type="text" name="quinto" size="5" id="quinto" oninput="actualizarFormula()" value=<?php echo $quinto?>>
        <input type="text" name="sexto" size="5" id="sexto" oninput="actualizarFormula()" value=<?php echo $sexto?>>
        <input type="text" name="septimo" size="5" id="septimo" oninput="actualizarFormula()" value=<?php echo $septimo?>>

    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?> <br>
     n diferente -1.

    <br><br>

    La integral indefinida de \( x \) es: <br>
    \(
    \int  x  \, dx =
    \)
    <span id="formula2">
        \( \frac{0}{0} \)
    </span>
    <br><br>
    <input type="text" name="octavo" size="5" id="octavo" oninput="actualizarFormula2()" value="<?php echo $octavo?>">
    <input type="text" name="noveno" size="5" id="noveno" oninput="actualizarFormula2()" value="<?php echo $noveno?>">
    <input type="text" name="decimo" size="5" id="decimo" oninput="actualizarFormula2()" value="<?php echo $decimo?>">
    <input type="text" name="undecimo" size="5" id="undecimo" oninput="actualizarFormula2()" value="<?php echo $undecimo?>">
    
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?>

    <br><br>

    La integral indefinida de \( x^2 \) es: <br>
\(
\int x^2 \, dx = 
\)
<span id="formula3">
    \( \frac{0}{0} \)
</span> 
<br><br>

<input type="text" name="duodecimo" size="5" id="duodecimo" oninput="actualizarFormula3()" value="<?php echo $duodecimo ?>">
<input type="text" name="decimotercero" size="5" id="decimotercero" oninput="actualizarFormul3()" value="<?php echo $decimotercero ?>">
<input type="text" name="decimocuarto" size="5" id="decimocuarto" oninput="actualizarFormula3()" value="<?php echo $decimocuarto ?>">
<input type="text" name="decimoquinto" size="5" id="decimoquinto" oninput="actualizarFormula3()" value="<?php echo $decimoquinto ?>">

<br>
<button type="submit">enviar</button>

<?php echo $verificar_12 ?>
<?php echo $verificar_13 ?>
<?php echo $verificar_14 ?>
<?php echo $verificar_15 ?>

<br><br>
<p>
    La integral indefinida de\( x^{-2} \) es (expresar en exponente negativo): <br>
        \(
        \int x^{-2} \, dx = \)
        <input type="text" name="ultimo" id="" value=<?php echo $ultimo?> >
        
    </p>
    <button type="submit">enviar</button>
    <?php echo $verificar_u ?><br>

    
    <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>

    </form>
</div>
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
