<?php
// Inicialización de variables (igual que antes)
$respuesta_1 = ''; $respuesta_2 = ''; $respuesta_3 = ''; $respuesta_4 = ''; $respuesta_5 = ''; 
$respuesta_6 = ''; $respuesta_7 = ''; $respuesta_8 = ''; $respuesta_9 = ''; $respuesta_10 = '';
// ... (todas las otras variables de respuesta)

$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = ''; $verificar_4 = ''; $verificar_5 = ''; 
$verificar_6 = ''; $verificar_7 = ''; $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = '';
// ... (todas las otras variables de verificación)

if ($_POST) {
    // Caso 1 (igual que antes)
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
    if ($respuesta_1 === 'f(n) = O(n^{\log_b a - \epsilon})') {  
        $verificar_1 = "correcto";
    } elseif ($respuesta_1 === '') {
        $verificar_1 = '';
    } else {
        $verificar_1 = "incorrecto";
    }

    $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
    if ($respuesta_2 === '\epsilon > 0') {  
        $verificar_2 = "correcto";
    } elseif ($respuesta_2 === '') {
        $verificar_2 = '';
    } else {
        $verificar_2 = "incorrecto";
    }

    $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
    if ($respuesta_3 === 'T(n) = \Theta(n^{\log_b a})') {  
        $verificar_3 = "correcto";
    } elseif ($respuesta_3 === '') {
        $verificar_3 = '';
    } else {
        $verificar_3 = "incorrecto";
    }

    // Caso 2 (nuevo - usando respuestas 4-6)
    $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
    if ($respuesta_4 === 'f(n) = \Theta(n^{\log_b a})') {  
        $verificar_4 = "correcto";
    } elseif ($respuesta_4 === '') {
        $verificar_4 = '';
    } else {
        $verificar_4 = "incorrecto";
    }

    $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
    if ($respuesta_5 === 'k \geq 0') {  
        $verificar_5 = "correcto";
    } elseif ($respuesta_5 === '') {
        $verificar_5 = '';
    } else {
        $verificar_5 = "incorrecto";
    }

    $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
    if ($respuesta_6 === 'T(n) = \Theta(n^{\log_b a} \log^{k+1} n)') {  
        $verificar_6 = "correcto";
    } elseif ($respuesta_6 === '') {
        $verificar_6 = '';
    } else {
        $verificar_6 = "incorrecto";
    }

    // Caso 3 (nuevo - usando respuestas 7-9)
    $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
    if ($respuesta_7 === 'f(n) = \Omega(n^{\log_b a + \epsilon})') {  
        $verificar_7 = "correcto";
    } elseif ($respuesta_7 === '') {
        $verificar_7 = '';
    } else {
        $verificar_7 = "incorrecto";
    }

    $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
    if ($respuesta_8 === 'a f(n/b) \leq c f(n)') {  
        $verificar_8 = "correcto";
    } elseif ($respuesta_8 === '') {
        $verificar_8 = '';
    } else {
        $verificar_8 = "incorrecto";
    }

    $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
    if ($respuesta_9 === 'T(n) = \Theta(f(n))') {  
        $verificar_9 = "correcto";
    } elseif ($respuesta_9 === '') {
        $verificar_9 = '';
    } else {
        $verificar_9 = "incorrecto";
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
    height: 370vh;
    }
</style>
 
<script>
// Todas tus funciones JavaScript originales se mantienen igual
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
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    var f = document.getElementById('respuesta_1').value || "";
    var formula = ` \\  ${f} \\, `;
    document.getElementById('formula').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}
 
function actualizarFormula2() {
    var f = document.getElementById('respuesta_2').value || "";
    var formula = ` \\ ${f}  \\, `;
    document.getElementById('formula2').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_3').value || "";
    var formula = ` \\ ${f}  \\, `;
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

// Nuevas funciones para los casos 2 y 3
function actualizarFormula4() {
    var f = document.getElementById('respuesta_4').value || "";
    var formula = ` \\ ${f}  \\, `;
    document.getElementById('formula4').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_5').value || "";
    var formula = ` \\ ${f}  \\, `;
    document.getElementById('formula5').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula6() {
    var f = document.getElementById('respuesta_6').value || "";
    var formula = ` \\ ${f}  \\, `;
    document.getElementById('formula6').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula7() {
    var f = document.getElementById('respuesta_7').value || "";
    var formula = ` \\ ${f}  \\, `;
    document.getElementById('formula7').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_8').value || "";
    var formula = ` \\ ${f}  \\, `;
    document.getElementById('formula8').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula9() {
    var f = document.getElementById('respuesta_9').value || "";
    var formula = ` \\ ${f}  \\, `;
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

// ... (las otras funciones de mostrar/ocultar mensajes se mantienen igual)
</script>
</head>
<body> 
<div class="seccion izquierda">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>Teorema Maestro</h2>

    <!-- Caso 1 (se mantiene igual) -->
    <p><strong>1.</strong> Si 
    <span id="formula" style="display: inline;">\( \)</span>
    para alguna constante 
    <span id="formula2" style="display: inline;">\( \)</span>
    , entonces</p>
    <span id="formula3">\( \)</span>
 
    <input type="text" name="respuesta_1" size="22" id="respuesta_1" oninput="actualizarFormula()" value="<?php echo $respuesta_1?>">
    <input type="text" name="respuesta_2" size="22" id="respuesta_2" oninput="actualizarFormula2()" value="<?php echo $respuesta_2?>">
    <input type="text" name="respuesta_3" size="22" id="respuesta_3" oninput="actualizarFormula3()" value="<?php echo $respuesta_3?>">
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <hr>

    <!-- Caso 2 (nuevo) -->
    <p><strong>2.</strong> Si 
    <span id="formula4" style="display: inline;">\( \)</span>
    para algún 
    <span id="formula5" style="display: inline;">\( \)</span>
    , entonces</p>
    <span id="formula6">\( \)</span>
 
    <input type="text" name="respuesta_4" size="22" id="respuesta_4" oninput="actualizarFormula4()" value="<?php echo $respuesta_4?>">
    <input type="text" name="respuesta_5" size="22" id="respuesta_5" oninput="actualizarFormula5()" value="<?php echo $respuesta_5?>">
    <input type="text" name="respuesta_6" size="22" id="respuesta_6" oninput="actualizarFormula6()" value="<?php echo $respuesta_6?>">
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <hr>

    <!-- Caso 3 (nuevo) -->
    <p><strong>3.</strong> Si 
    <span id="formula7" style="display: inline;">\( \)</span> 
    para algun \( \epsilon > 0 \)
    y si
    <span id="formula8" style="display: inline;">\( \)</span>
    , para alguna constante \( c < 1 \) y una \( n \) suficientemente grande,  entonces</p>
    <span id="formula9">\( \)</span>
 
    <input type="text" name="respuesta_7" size="22" id="respuesta_7" oninput="actualizarFormula7()" value="<?php echo $respuesta_7?>">
    <input type="text" name="respuesta_8" size="22" id="respuesta_8" oninput="actualizarFormula8()" value="<?php echo $respuesta_8?>">
    <input type="text" name="respuesta_9" size="22" id="respuesta_9" oninput="actualizarFormula9()" value="<?php echo $respuesta_9?>">
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_7 ?>
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <hr>


    <h2>Notacion Big O</h2>
<p>
  Sean \( f \) y \( g \) funciones del conjunto de los enteros o del conjunto de los números reales al conjunto de los números reales. Decimos que \( f(x) \) es \( O(g(x)) \) si existen constantes \( C \) y \( k \) tales que
</p>

<p style="text-align: center;">
  \( |f(x)| \leq C |g(x)| \)
  <br>
  siempre que \( x > k \).
</p>

<p>
  [Esto se lee como “\( f(x) \) es big-oh de \( g(x) \)”.]
</p>




    <hr>
    <h2>Notación Big-Omega \(\Omega\)</h2>
  <p>
    Decimos que \( f(x) = \Omega(g(x)) \) si existen constantes positivas \( C \) y \( k \) tal que:
  </p>
  <p style="text-align: center;">
    \( |f(x)| \geq C|g(x)| \quad \text{para todo } x > k \)
  </p>
  <p>
    Esto significa que \( f(x) \) <strong>crece al menos tan rápido</strong> como \( g(x) \). También se cumple que 
    \( f(x) = \Omega(g(x)) \) si y solo si \( g(x) = O(f(x)) \).
  </p>
    <hr>
    <h2>Notación Big-Theta \(\Theta\)</h2>
  <p>
    Cuando queremos establecer tanto una cota superior como una inferior, usamos \( \Theta \). Decimos que:
    <br>
    \( f(x) = \Theta(g(x)) \)
  </p>
  <p>
    si existen constantes positivas \( C_1 \), \( C_2 \) y \( k \) tales que:
  </p>
  <p style="text-align: center;">
    \( C_1|g(x)| \leq |f(x)| \leq C_2|g(x)| \quad \text{para todo } x > k \)
    </p>
    </form>
</div>

<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <!-- Contenido del segundo formulario si es necesario -->
    </form>
</div>

<div class="centered-container">
    <a name="siguiente" id="siguiente" class="btn btn-primary" href="segundo.php" role="button">Siguiente</a>
</div>
</body>
</html>