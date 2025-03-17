<?php

$pregunta_a1 = "";
$pregunta_a2 = "";
$pregunta_a3 = "";
$pregunta_a4 = "";
$pregunta_a5 = "";
$pregunta_a6 = "";
$pregunta_a7 = "";
$pregunta_a8 = "";
$pregunta_a9 = "";
$pregunta_a10 = "";
$pregunta_a11 = "";
$pregunta_a12 = "";
 

$verificar_a1 = '';
$verificar_a2 = '';
$verificar_a3 = '';
$verificar_a4 = '';
$verificar_a5 = '';
$verificar_a6 = '';
$verificar_a7 = '';
$verificar_a8 = '';
$verificar_a9 = '';
$verificar_a10 = '';
$verificar_a12 = '';
 
 
// Procesar el formulario cuando se envía
if ($_POST) {
    
    ///
    $pregunta_a1 = isset($_POST['a1']) ? $_POST['a1'] : '';
    if ($pregunta_a1 === 'afin') {
        $verificar_a1 = "correcto";
    } elseif ($pregunta_a1 === '') {
        $verificar_a1 = "";
    } else {
        $verificar_a1 = "incorrecto";
    }

    $pregunta_a2 = isset($_POST['a2']) ? $_POST['a2'] : '';
    if ($pregunta_a2 === 'aproxima') {
        $verificar_a2 = "correcto";
    } elseif ($pregunta_a2 === '') {
        $verificar_a2 = "";
    } else {
        $verificar_a2 = "incorrecto";
    }

    $pregunta_a3 = isset($_POST['a3']) ? $_POST['a3'] : '';
    if ($pregunta_a3 === '1') {
        $verificar_a3 = "correcto";
    } elseif ($pregunta_a3 === '') {
        $verificar_a3 = "";
    } else {
        $verificar_a3 = "incorrecto";
    }

    $pregunta_a4 = isset($_POST['a4']) ? $_POST['a4'] : '';
    if ($pregunta_a4 === 'm(x-1)+1') {
        $verificar_a4 = "correcto";
    } elseif ($pregunta_a4 === '') {
        $verificar_a4 = "";
    } else {
        $verificar_a4 = "incorrecto";
    }

    // Pregunta 5
$pregunta_a5 = isset($_POST['a5']) ? $_POST['a5'] : '';
if ($pregunta_a5 === 'f(x)') {
    $verificar_a5 = "correcto";
} elseif ($pregunta_a5 === '') {
    $verificar_a5 = "";
} else {
    $verificar_a5 = "incorrecto";
}

// Pregunta 6
$pregunta_a6 = isset($_POST['a6']) ? $_POST['a6'] : '';
if ($pregunta_a6 === '-') {
    $verificar_a6 = "correcto";
} elseif ($pregunta_a6 === '') {
    $verificar_a6 = "";
} else {
    $verificar_a6 = "incorrecto";
}

// Pregunta 7
$pregunta_a7 = isset($_POST['a7']) ? $_POST['a7'] : '';
if ($pregunta_a7 === 'T(x)') {
    $verificar_a7 = "correcto";
} elseif ($pregunta_a7 === '') {
    $verificar_a7 = "";
} else {
    $verificar_a7 = "incorrecto";
}

 $pregunta_a8 = isset($_POST['a8']) ? $_POST['a8'] : '';
if ($pregunta_a8 === 'm') {
    $verificar_a8 = "correcto";
} elseif ($pregunta_a8 === '') {
    $verificar_a8 = "";
} else {
    $verificar_a8 = "incorrecto";
}
  
 $pregunta_a9 = isset($_POST['a9']) ? $_POST['a9'] : '';
if ($pregunta_a9 === 'h+1') {
    $verificar_a9 = "correcto";
} elseif ($pregunta_a9 === '') {
    $verificar_a9 = "";
} else {
    $verificar_a9 = "incorrecto";
}

$pregunta_a10 = isset($_POST['a10']) ? $_POST['a10'] : '';
if ($pregunta_a10 === '1-2m') {
    $verificar_a10 = "correcto";
} elseif ($pregunta_a10 === '') {
    $verificar_a10 = "";
} else {
    $verificar_a10 = "incorrecto";
}


$pregunta_a11 = isset($_POST['a11']) ? $_POST['a11'] : '';
if ($pregunta_a11 === 'm^2h^2') {
    $verificar_a11 = "correcto";
} elseif ($pregunta_a11 === '') {
    $verificar_a11 = "";
} else {
    $verificar_a11 = "incorrecto";
}
 

$pregunta_a12 = isset($_POST['a12']) ? $_POST['a12'] : '';
if ($pregunta_a12 === 'dividimos') {
    $verificar_a12 = "correcto";
} elseif ($pregunta_a12 === '') {
    $verificar_a12 = "";
} else {
    $verificar_a12 = "incorrecto";
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
    <p>El problema de
         encontrar la línea tangente de una funcion f en el punto (x<sub>0</sub>, y<sub>0</sub> )
         es en esencia, el mismo que encontrar la función   
         <input type="text"  id="" size="5"  name="a1" value="<?php echo ($pregunta_a1); ?>"> \( T \) 
         que mejor <input type="text"  id="" size="5"  name="a2" value="<?php echo ($pregunta_a2); ?>"> a 
         \( f \) cerca de un punto específico \( x_0 \). Aunque el objetivo final 
         es encontrar una línea tangente, lo que se busca es una aproximación lineal que represente 
         a la función en las cercanías de ese punto. Es decir, ambos problemas son muy similares o,
          en algunos casos, equivalentes, ya que la línea tangente es precisamente una aproximación afín
           (una recta) que toca la curva de la función en ese punto.</p>
           <button type="submit">enviar</button>
        <p>Resultado1: <?php echo $verificar_a1; ?></p>
        <p>Resultado2: <?php echo $verificar_a2; ?></p>

        <p><strong>Pregunta:</strong> ¿Cuál es la mejor aproximación afín para \( f(x) = \sqrt{x} \) 
        para valores cercanos a \( x = 1 \): </p>

        Si T(x) es la aproximacion como funcion constante, cual seria: <br><br>
        T(x) = <input type="text"  id="" size="5"  name="a3" value="<?php echo ($pregunta_a3); ?>"> <br><br>
        <button type="submit">enviar</button>
        <p>Resultado3: <?php echo $verificar_a3; ?></p> <br>

        Si necesitamos que T(x) sea una ecuacion que represente rectas afines: <br><br>
        T(x) = <input type="text"  id="" size="5"  name="a4" value="<?php echo ($pregunta_a4); ?>"> <br><br>
        <button type="submit">enviar</button>
        <p>Resultado4: <?php echo $verificar_a4; ?></p> <br>

        Ahora se necesita el error de aproximación al usar una función afín  \( T(x) \) para aproximar 
        <p>  \( f(x) = \sqrt{x} \)  en un punto x</p>
        r(x) = <input type="text"  id="" size="5"  name="a5" value="<?php echo ($pregunta_a5); ?>">
        <input type="text"  id="" size="5"  name="a6" value="<?php echo ($pregunta_a6); ?>">
        <input type="text"  id="" size="5"  name="a7" value="<?php echo ($pregunta_a7); ?>">
        <br><br>
        <button type="submit">enviar</button><br>
        Resultado5: <?php echo $verificar_a5; ?><br>
        Resultado6: <?php echo $verificar_a6; ?><br>
        Resultado7: <?php echo $verificar_a7; ?> <br>

        Con la formula de funciones afines, nos damos cuenta que algunos 
        <input type="text"  id="" size="5"  name="a8" value="<?php echo ($pregunta_a8); ?>">
        hacen mejor a la aproximacion. <br><br>
        <button type="submit">enviar</button><br>
        Resultado8: <?php echo $verificar_a8; ?> <br><br>

        y con la formula nos damos cuenta que en m(x - 1) lo que quiere decir es que para un valor de
        la pendiente (benefioso o no), hay un despazamiento de acuerdo al punto x. entonces lo que hay 
        que ver es que pendiente beneficia los desplazamientos y su reultado (especialmente para 
        valores cercanos a x = 1). Para que la aproximacion \( T(x) = m(x - 1) + 1\) se beneficie. <br><br>

        teniendo lo anteior en cuenta, como deberiamos sustituir a x para ver el como cambia (decremento/incremento)
        con x=1 como punto de referencia: <br><br>
        <input type="text"  id="" size="5"  name="a9" value="<?php echo ($pregunta_a9); ?>"> <br><br>
        <button type="submit">enviar</button><br>
        Resultado9: <?php echo $verificar_a9; ?> <br><br>
        <hr>
        Ahora recalculamos:
        <p>
        \( R(h) = r(1 + h) = f(1 + h) - T(1 + h) \), 
        la cantidad de error cometida al aproximar \( f \) con \( T \) en un punto a una distancia \( h \) de 1. 
         </p>

        <p>
        En este caso, tenemos:
        \[
        R(h) = \sqrt{1 + h} - \left( m((1 + h) - 1) + 1 \right) = \sqrt{1 + h} - (mh + 1).
        \]
        </p>
         Si descomponemos \( f(1 + h) - T(1 + h) \): 
         <p>
\[
\frac{h(1 - 2m) - m^2h^2}{\sqrt{1 + h} + mh + 1}
\]
</p>
    luego dividimos entre h: <br>
    <h2>Propósito de \( \frac{R(h)}{h} \)</h2>
    <p>
        Dividir \( R(h) \) por \( h \) ayuda a:
    </p>
    <ul>
        <li>Identificar si \( R(h) \) decrece linealmente (\( \sim h \)) o cuadráticamente (\( \sim h^2 \)) conforme \( h \to 0 \).</li>
        <li>Comparar la calidad de la aproximación para diferentes valores de \( m \).</li>
    </ul>
    reescriba la fraccion con el cambio hecho: <br>
    <input type="text"  id="" size="5"  name="a10" value="<?php echo ($pregunta_a10); ?>">
    -     <input type="text"  id="" size="5"  name="a11" value="<?php echo ($pregunta_a11); ?>">
    <hr>
    \( \sqrt{1 + h} + mh + 1 \)
    <br><br>
        <button type="submit">enviar</button><br>
        Resultado10: <?php echo $verificar_a10; ?> 
        Resultado11: <?php echo $verificar_a11; ?> 


        <p>Notice that</p>
    <p>
    \[
    \lim_{h \to 0} \frac{R(h)}{h} = \frac{1 - 2m}{2},
    \]
    which is 0 only when \( m = 0.5 \).
    </p>




    <h3>2. ¿Por qué dividir por h?</h3>

    <p>Dividir el error <i>R(h)</i> entre <i>h</i> nos permite observar la <strong>tasa de cambio</strong> del error con respecto a la distancia <i>h</i>. Este cociente nos indica qué tan rápido disminuye el error cuando <i>h</i> se hace pequeño (es decir, cuando nos acercamos al punto de referencia <i>x = 1</i>).</p>

    <ul>
    <li>Si <strong>no dividimos</strong> por <i>h</i>, simplemente veríamos el error absoluto <i>R(h)</i>, pero no sabríamos cómo este error se comporta en función de la distancia <i>h</i>.</li>
    <li>Al <strong>dividir por h</strong>, estamos transformando el error en un <strong>cociente relativo</strong>. Esto ayuda a identificar cómo el error se comporta en relación con el valor de <i>h</i>.</li>
    </ul>

    pero los valores son los mismos valores, solo que menos pequeños, es decir que mas que todo lo que nos permite es que cuando calculemos el limite a 0 de R(h) no nos de indeterminado (0/0),
    Por eso divimos a h, para evitarlo. <br><br><br>

    Para derivar, para eliminar x (la variable limite) en el numerador y denominador, que hacemos?: <br><br>
    <input type="text"  id="" size="5"  name="a12" value="<?php echo ($pregunta_a12); ?>"> <br><br>
    <button type="submit">enviar</button><br>
    Resultado12: <?php echo $verificar_a12; ?> 
    <hr>
    <br><br><br>

    
      </form>
</div>
<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)">
        
    </form>
</div>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="Limites.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
