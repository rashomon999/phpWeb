
<?php
$pregunta_f ="";
$pregunta_g ="";
$pregunta_d ="";

$verificar_f = "";
$verificar_g = "";
$verificar_d = "";


$pregunta_fu = "";
$pregunta_du = "";
$pregunta_du2 = "";
$pregunta_dx = "";


$verificar_du = "";
$verificar_du2 = "";
$verificar_dx = "";
$verificar_fu = "";

$pregunta_ux = "";
$verificar_ux = "";

$pregunta_gx = "";
$verificar_gx = "";
if ($_POST) {
    $pregunta_f = isset($_POST['f']) ? $_POST['f'] : '';
    if ($pregunta_f === 'f(g(x))') {
        $verificar_f = "correcto";
    } else {
        $verificar_f = "incorrecto";
    }

    $pregunta_g = isset($_POST['g']) ? $_POST['g'] : '';
    if ($pregunta_g === "g'(x)") {
        $verificar_g = "correcto";
    }    else {
        $verificar_g = "incorrecto";
    }

    $pregunta_d = isset($_POST['d']) ? $_POST['d'] : '';
    if ($pregunta_d === "dx") {
        $verificar_d = "correcto";
    }    else {
        $verificar_d = "incorrecto";
    }

    ///
    ///
    $pregunta_fu = isset($_POST['fu']) ? $_POST['fu'] : '';
    if ($pregunta_fu === 'f(u)') {
        $verificar_fu = "correcto";
    } else {
        $verificar_fu = "incorrecto";
    }

    $pregunta_du = isset($_POST['du']) ? $_POST['du'] : '';
    if ($pregunta_du === "du") {
        $verificar_du = "correcto";
    }    else {
        $verificar_du = "incorrecto";
    }

    $pregunta_du2 = isset($_POST['du2']) ? $_POST['du2'] : '';
    if ($pregunta_du2 === "dx") {
        $verificar_du2 = "correcto";
    }    else {
        $verificar_du2 = "incorrecto";
    }

    $pregunta_dx = isset($_POST['dx']) ? $_POST['dx'] : '';
    if ($pregunta_dx === "dx") {
        $verificar_dx = "correcto";
    }    else {
        $verificar_dx = "incorrecto";
    }

    $pregunta_ux = isset($_POST['ux']) ? $_POST['ux'] : '';
    if ($pregunta_ux === "2+x^2") {
        $verificar_ux = "correcto";
    }    else {
        $verificar_ux = "incorrecto";
    }

    $pregunta_gx = isset($_POST['gx']) ? $_POST['gx'] : '';
    if ($pregunta_gx === "2x") {
        $verificar_gx = "correcto";
    }    else {
        $verificar_gx = "incorrecto";
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
    <link rel="stylesheet" href="style3.css">
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
        
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('f').value || "";
    var g = document.getElementById('g').value || "";
    var d = document.getElementById('d').value || "";


    // Construir la fórmula dinámica
    var formula = ` \\int ${f} ${g} ${d} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    // Obtener los valores de los inputs
   
    var fu = document.getElementById('fu').value || "";
    var du = document.getElementById('du').value || "";
    var du2 = document.getElementById('du2').value || "";
    var dx = document.getElementById('dx').value || "";


    // Construir la fórmula dinámica
    var formula2 = ` \\int ${fu} \\frac{${du}}{${du2}} ${dx} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula2').innerHTML = `$$ ${formula2} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}
</script>
</head>
<body>
<div class="seccion izquierda">
    <form action="./Comienzo.php" method="POST" onsubmit="handleSubmit(event)">
    resumen: para establecer el teorema, despejamos F(x) y derivamos si igualdad para comprobar que es igual a f(x).
    <br><br>
    <p>
    Los términos "integral indefinido" y "antiderivada general" son sinónimos, y a partir de ahora preferiremos usar el primero.
    </p>
    <p>
        <ul>
            <li>
                Si hay límites (\(\int_a^b f(x) \, dx\)), es un <strong>integral definido</strong>.
            </li>
            <li>
                Si no hay límites (\(\int f(x) \, dx\)), es un <strong>integral indefinido</strong>, que es otro nombre para la antiderivada general.
            </li>
        </ul>
    </p>
    proceso de antiderivacion: <br><br>
    para terminos con potencia: ahora como sabemos que se resto, entonces aumentamos en 1 al exponente y 
    divimos, dado que sabemos que cuando se deriva se pasa a multiplicar (hacemos lo contrario, sumamos y dividimos).
    <br><br>
    <img src="../img/Captura de pantalla 2024-12-09 093851.png" alt="">

    <h1>Por qué se divide en integración</h1>
    <p>
        La idea central aquí es que, al integrar ciertas funciones que involucran derivadas compuestas, 
        <strong>el factor extra que aparece debido a la regla de la cadena se corrige dividiendo por ese factor</strong>. Veamos esto paso a paso:
    </p>

    <h2>1. Regla de la cadena y su impacto en las derivadas</h2>
    <p>
        Cuando derivamos una función compuesta \(F(u(x))\), usamos la <strong>regla de la cadena</strong>:
    </p>
    <p>
        \[
        \frac{d}{dx}F(u(x)) = F'(u(x)) \cdot u'(x).
        \]
    </p>
    <p>
        Por lo tanto, si \(F(x)\) no tiene en cuenta el factor adicional \(u'(x)\), el resultado de derivar no será el mismo que la función original \(f(x)\) que estamos integrando.
    </p>

    <h2>2. Aplicación al ejemplo \( \int \cos(2x) \, dx \):</h2>
    <p>
        Queremos encontrar la antiderivada de \(f(x) = \cos(2x)\).
    </p>
    <ul>
        <li>Supongamos que \(F(x) = \sin(2x)\).</li>
        <li>Calculamos su derivada:
            \[
            F'(x) = \frac{d}{dx}\sin(2x) = 2\cos(2x). 
            \]
        </li>
    </ul>
    <p>
        Observamos que \(F'(x) = 2\cos(2x)\), que es <strong>2 veces más grande</strong> que \(f(x)\). Para corregir esto, dividimos por 2:
    </p>
    <p>
        \[
        \int \cos(2x) \, dx = \frac{1}{2}\sin(2x) + C.
        \]
    </p>
    <hr>
    <br><br>
    <h1>Explicación de la Integral por Sustitución</h1>

    <p>
        Consideramos la integral:
    </p>
    <p>
        <strong>Ejemplo:</strong> 
        <span id="integral1">\(\int 2x \sqrt{1 + x^2} \, dx\)</span>
    </p>

    <h2>Paso 1: Sustitución</h2>
    <p>
        El primer paso en la técnica de sustitución es identificar una parte de la integral que podamos reemplazar con una nueva variable. En este caso, observamos que la expresión dentro de la raíz cuadrada es \( 1 + x^2 \), por lo que hacemos la sustitución:
    </p>
    <p>
        \( u = 1 + x^2 \)
    </p>
    <p>
        Calculamos la derivada de \( u \) con respecto a \( x \):
    </p>
    <p>
        \( \frac{du}{dx} = 2x \), o equivalentemente \( du = 2x \, dx \).
    </p>
    <p>
        Ahora sustituimos en la integral original. La integral se convierte en:
    </p>
    <p>
        \( \int 2x \sqrt{1 + x^2} \, dx = \int \sqrt{u} \, du . =  \int f(u) \, du \).
    </p>

     

    </form>
</div>
<div class="seccion derecha">
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)">
    <h2>Paso 2: Resolver la Integral</h2>
    <p>
        Ahora que hemos hecho la sustitución, resolvemos la integral en términos de la nueva variable \( u \). La integral de \( \sqrt{u} \) es:
        <p>
        \[
        \int u^{\frac{1}{2}} \, du = \frac{u^{\frac{1}{2} + 1}}{\frac{1}{2} + 1} = \frac{u^{\frac{3}{2}}}{\frac{3}{2}}.
        \]
    </p>
    <p>
        Simplificando:
    </p>

    <p>
        \[
        \int u^{\frac{1}{2}} \, du = \frac{2}{3} u^{\frac{3}{2}} + C.
        \]
    </p>
    </p>
    <p>
        \( \int f(u) \, du = \int u^{1/2} \, du = \frac{2}{3} u^{3/2} + C \).
    </p>

    <h2>Paso 3: Sustitución de vuelta</h2>
    <p>
        Finalmente, sustituimos \( u = 1 + x^2 \) de vuelta en la antiderivada. Esto nos da:
    </p>
    <p>
        \( \frac{2}{3} u^{3/2} + C = \frac{2}{3} (1 + x^2)^{3/2} + C \).
    </p>

    <h2>¿Dónde aparece \( f(u) \)?</h2>
    <p>
        En este caso, después de hacer la sustitución, la integral en términos de \( u \) se convierte en:
    </p>
    <p>
        \( \int \sqrt{u} \, du \).
    </p>
    <p>
        Por lo tanto, la función que estamos integrando, después de la sustitución, es \( f(u) = \sqrt{u} \).
    </p>

    <h2>Conclusión</h2>
    <p>
        En resumen, hemos aplicado la técnica de sustitución para resolver la integral 
        \( \int 2x \sqrt{1 + x^2} \, dx \). Aquí están los pasos detallados:
    </p>
    <ul>
        <li>Hicimos la sustitución \( u = 1 + x^2 \).</li>
        <li>La integral se transformó en \( \int \sqrt{u} \, du \), que es fácil de resolver.</li>
        <li>Resolvimos la integral en términos de \( u \) y luego sustituimos \( u = 1 + x^2 \) de vuelta.</li>
    </ul>
    <p>
        El resultado final es \( \frac{2}{3} (1 + x^2)^{3/2} + C \).
    </p>
    <br>
    resumen:
    <p>\( \text{se integro  }  \sqrt{u}   \text{  respecto a du, para esto se hizo sustitucion.} \)  </p> 
    se podría decir que el 2x "desaparece" o se reemplaza por du en el proceso de sustitución.
    <br><br>


    
    
    
    <hr>
    <Strong>Definition 4.4.1</Strong>
    Llamamos al siguiente procedimiento integración por sustitución: Para evaluar una integral indefinida de la forma
    : <br>
        <br><br>
        : <input type="text" id="f" name="f" oninput="actualizarFormula()" width="40" value="<?php echo ($pregunta_f); ?>" >
        <input type="text" id="g" name="g"  oninput="actualizarFormula()" width="20" value="<?php echo ($pregunta_g); ?>" >
        <input type="text" id="d" name="d"  oninput="actualizarFormula()" width="20" value="<?php echo ($pregunta_d); ?>" >


        <p id="formula">
            $$ \int  \, $$
        </p>
        <p>Resultado 1: <?php echo $verificar_f; ?></p>
        Resultado 2: <?php echo $verificar_g; ?>
        Resultado 3: <?php echo $verificar_d; ?>
            <br><br>
        <button type="submit">enviar final</button> <br>

        Podemos hacer la sustitución u=g(x). Entonces, tenemos: <br></br>
        <p>
       lo anterior es igual= 
        <span id="formula2">
            \( \int \)
        </span>

        <input type="text" id="fu" name="fu" oninput="actualizarFormula2()" size="5" value="<?php echo ($pregunta_fu); ?>" >
        (<input type="text" id="du" name="du"  oninput="actualizarFormula2()" size="5" value="<?php echo ($pregunta_du); ?>" >
        /<input type="text" id="du2" name="du2"  oninput="actualizarFormula2()" size="5" value="<?php echo ($pregunta_du2); ?>" >)
        <input type="text" id="dx" name="dx"  oninput="actualizarFormula2()" size="5" value="<?php echo ($pregunta_dx); ?>" >
        =  \( \int f(u) du  \)
        <br><br>
        <p>Resultado 4: <?php echo $verificar_fu; ?></p>
        Resultado 5: <?php echo $verificar_du; ?>
        Resultado 6: <?php echo $verificar_du2; ?>
        Resultado 7: <?php echo $verificar_dx; ?> <br>
        <button type="submit">enviar final</button> <br>
        Notese como cada multiplo es una equivalencia a la igualdad anterior. <br><br>
        Interpretacion:
        <p>\( \frac{d}{dx} F(u(x)) = F'(u(x)) \cdot \frac{du}{dx} \)</p>
        La primera parte: calcular la antiderivada de una funcion compuesta. la segunda es la regla de
        la cadena.
        <p>Aquí, \( F'(u(x)) \) es la derivada de \( F \) con respecto a \( u \), y \( \frac{du}{dx} \) es la derivada de \( u(x) \) con respecto a \( x \).</p>

        <br>
        <p>\(\int \frac{2x}{\sqrt{2 + x^2}} \, dx\)</p>
        Ingresa quien es u o g(x):
        <input type="text" name="ux" id="" value= <?php echo $pregunta_ux ?> > <br>
        <button type="submit">Enviar</button>
        Resultado = <?php echo $verificar_ux?>  
<br>
        Ingresa quien es g'(x) o du/dx:
        <input type="text" name="gx" id="" value= <?php echo $pregunta_gx ?> > <br>
        <button type="submit">Enviar</button>
        Resultado = <?php echo $verificar_gx?> <br><br>

    </p>

</form>
</div>
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
