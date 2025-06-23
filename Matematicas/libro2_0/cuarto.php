<?php
// Variable para la primera pregunta
$verificar_1 = '';
$verificar_2 = '';
// Procesar el formulario cuando se envía
if ($_POST) {
    // Verificar la respuesta de la primera pregunta
    $primero = isset($_POST['primero']) ? $_POST['primero'] : '';

    if ($primero === 'diverge') {
        $verificar_1 = "correcto";
    } elseif ($primero === '') {
        $verificar_1 = '';
    } else {
        $verificar_1 = "incorrecto";
    }

    // Verificar la respuesta de la segunda pregunta
    $segundo = isset($_POST['segundo']) ? $_POST['segundo'] : '';

    if ($segundo === 'verdad') {
        $verificar_2 = "correcto";
    } elseif ($segundo === '') {
        $verificar_2 = '';
    } else {
        $verificar_2 = "incorrecto";
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
    <link rel="stylesheet" href="./style.css">
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
    height: 280vh;
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
</script>
</head>
<body>
<div class="seccion izquierda">
    <form action="./Comienzo.php" method="POST" onsubmit="handleSubmit(event)">
        <img src="../../img/Captura de pantalla 2024-12-08 161907.png" alt="" width="600"><br> <br>
        <img src="../../img/Captura de pantalla 2024-12-08 161907.png" alt="" width="600"> <br><br>
        <h1>Fundamental Theorem of Integral Calculus</h1>
        <p>
            Si \( f \) es integrable en \([a, b]\) y \( F \) es una antiderivada de \( f \) en \((a, b)\) que es continua en \([a, b]\), entonces:
        </p>

    <p style="text-align: center;">
        \[
        \int_a^b f(x) \, dx = F(b) - F(a).
        \]
    </p>



        <h1>Integral Acumulativa</h1>
    <p>
        La <strong>integral acumulativa</strong> es una forma de interpretar una integral definida en la que el límite superior de integración es una variable en lugar de un valor fijo. Es decir, es una integral en la que el área acumulada bajo la curva de una función \( f(x) \) se mide desde un punto fijo \( a \) hasta un punto variable \( x \).
    </p>
    <h2>Definición matemática</h2>
    <p>
        Si definimos la función \( F(x) \) como:
    </p>
    <p style="text-align: center;">
        \[
        F(x) = \int_a^x f(t) \, dt,
        \]
    </p>
    <p>
        esta función \( F(x) \) mide el área acumulada bajo la curva de \( f(t) \) desde el punto \( t = a \) hasta el punto \( t = x \). A medida que \( x \) varía, el valor de \( F(x) \) también cambia, porque la cantidad de área bajo la curva que estamos "acumulando" depende del límite superior de integración (\( x \)).
    </p>
    
    <p>
        esto se da simplemente por el hecho de continuidad de F(x) en [a,b].
    </p>
    
    <h2>Proceso de encontrar la antiderivada</h2>
    <p>Que hacemos?: Simple, cogemos la formula que nos da el teorema fundamental del calculo y despejamos F(x)</p>
    

    <p>
    \(\int_{a}^{x} f(t) \, dt = F(x) - F(a), \quad \)
  </p>
  <p>
    Es decir, \( F(x) = F(a) + \int_{a}^{x} f(t) \, dt. \quad  \)
  </p>
  <p>
    Por lo tanto, si estamos buscando una antiderivada de \( f \), tiene sentido definir
    \( F(x) = \int_{a}^{x} f(t) \, dt \).
  </p>


    <p>dejamos a F(a) implícito, ya que cualquier constante de integración no afecta la derivada.</p>

    <br>
    <p>
        \( F'(x) = \lim_{h \to 0} \frac{F(x + h) - F(x)}{h} = \lim_{h \to 0} \frac{1}{h} \left( \int_{x+h}^{a} f(t) \, dt - \int_{x}^{a} f(t) \, dt \right) \)
    </p>
    Hay que destacar la igualdad, escribimos lo mismo pero escribimos la division separada (1/h como producto), y F(x+h) y F(x)
    los escribimos como la definicion de justo arriba, donde: F(x) como la integral definida de f(t) desde 
    a hasta x.
</form>
</div>
<div class="seccion derecha">
    <form action="./Comienzo.php" method="POST" onsubmit="handleSubmit(event)">

    <div class="highlight-box">

    Todo esto se puede ver como la demostracion o el paso a paso de: <br><br>
    En términos simples, la afirmación dice que si tienes una función <strong>𝐹(𝑥)</strong> definida como una integral de otra función <strong>𝑓(𝑡)</strong>, entonces la derivada de <strong>𝐹(𝑥)</strong> con respecto a <strong>𝑥</strong> es igual a la función <strong>𝑓(𝑥)</strong> evaluada en ese punto.
</div>
<hr><br>
        ahora que tenemos como proceso de verificacion 𝐹′(𝑥) = 𝑓(𝑥) cuando ya despejamos a F(x) y en entrotrmos que es igual a la integral de f(t): <br>
        <br> <br>
        <p>
            \( F'(x) = \lim_{h \to 0} \frac{1}{h} \left( \int_{x+h}^{a} f(t) \, dt - \int_{x}^{a} f(t) \, dt \right) \)
        </p>


        <p>
        una forma de simplificar la diferencia de estas dos integrales. En lugar de restarlas directamente, se utiliza la propiedad de las integrales:
    </p>
    <p>
        \[
        \int_{a}^{x+h} f(t) \, dt = \int_{a}^{x} f(t) \, dt + \int_{x}^{x+h} f(t) \, dt.
        \]
    </p>
    <p>
        Esto es simplemente una propiedad de las integrales definidas que permite descomponer un intervalo de integración en dos subintervalos. Ahora, usando esto, la diferencia se convierte en:
    </p>
    <p>
        \[
        F(x+h) - F(x) = \left( \int_{a}^{x} f(t) \, dt + \int_{x}^{x+h} f(t) \, dt \right) - \int_{a}^{x} f(t) \, dt.
        \]
    </p>
    <p>
        El término 
        \[
        \int_{a}^{x} f(t) \, dt
        \]
        se cancela, y lo que queda es:
    </p>
    <p>
        \[
        F(x+h) - F(x) = \int_{x}^{x+h} f(t) \, dt.
        \]
    </p>


    <p><strong>Suposición de que h > 0:</strong> Se comienza suponiendo que h > 0. Esto indica que h es un pequeño incremento sobre x, es decir, estamos evaluando el cambio en la integral de x a x + h.</p>

<p><strong>Uso de la continuidad de f:</strong> La clave aquí es que f(t) es continua, lo que garantiza que la función alcanza un valor mínimo m(h) y un valor máximo M(h) en el intervalo [x, x + h]. Esto significa que para cualquier t en ese intervalo, la función f(t) estará siempre entre esos dos valores:</p>

<p><i>m(h) ≤ f(t) ≤ M(h)</i> para todo <i>t ∈ [x, x + h]</i>.</p>

<p><strong>Descomposición de la integral:</strong> Utilizando esa propiedad de los valores mínimo y máximo, podemos estimar la integral:</p>

<p><i>\(\int_{x}^{x+h} m(h) \, dt \leq \int_{x}^{x+h} f(t) \, dt \leq \int_{x}^{x+h} M(h) \, dt\)</i>.</p>

<p>Como m(h) y M(h) son constantes en este intervalo, las integrales se pueden calcular fácilmente:</p>

<p><i>m(h)h ≤ \(\int_{x}^{x+h} f(t) \, dt\) ≤ M(h)h</i>.</p>

<p><strong>Estableciendo límites:</strong> Ahora, si dividimos ambos lados de la desigualdad por h, obtenemos:</p>

<p><i>m(h) ≤ \(\frac{1}{h} \int_{x}^{x+h} f(t) \, dt\) ≤ M(h)</i>.</p>

<p>Este paso ayuda a reducir la integral a una forma más manejable para evaluar el límite cuando h → 0.</p>

<p><strong>Límite cuando h → 0:</strong> Como m(h) y M(h) son valores de la función f(t) en el intervalo [x, x + h], y dado que f es continua, podemos decir que a medida que h se acerca a cero, tanto m(h) como M(h) se acercan a f(x). Entonces, tenemos:</p>

<p><i>\(\lim_{h \to 0^+} m(h) = f(x)\) y \(\lim_{h \to 0^+} M(h) = f(x)\)</i>.</p>

<p>Como resultado, la desigualdad anterior se convierte en:</p>

<p><i>\(\lim_{h \to 0^+} \frac{1}{h} \int_{x}^{x+h} f(t) \, dt = f(x)\)</i>.</p>

<p><strong>Conclusión:</strong> Finalmente, como hemos demostrado que la derivada de F(x) es igual a f(x), concluimos que:</p>

<p><i>\(F'(x) = f(x)\)</i>.</p>

<br>

<img src="../../img/Captura de pantalla 2024-12-08 183131.png" alt="">    

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
