<?php
 
$verificar_4 = ''; $verificar_8 = ''; $verificar_12 = ''; $verificar_16 = ''; $verificar_20 = '';

$verificar_24 = ''; $verificar_28 = ''; $cuarto = ""; $octavo = ""; $duodecimo =""; $decimosexto = "";

$vigesimo = ""; $vigesimo_cuarto = ""; $vigesimo_octavo = "";

 if ($_POST) {
    
    $cuarto = isset($_POST['cuarto']) ? $_POST['cuarto'] : '';

    if ($cuarto === '-\frac{1}{4}Cos^4x+C') {
        $verificar_4 = "correcto";
    } elseif ($cuarto === '') {
        $verificar_4 = '';
    } else {
        $verificar_4 = "incorrecto";
    }

    
   
    $octavo = isset($_POST['octavo']) ? $_POST['octavo'] : '';

    if ($octavo === '-\frac{1}{Senx}+C') {
        $verificar_8 = "correcto";
    } elseif ($octavo === '') {
        $verificar_8 = '';
    } else {
        $verificar_8 = "incorrecto";
    }

  
    // Verificar la respuesta de la duodécima pregunta
    $duodecimo = isset($_POST['duodecimo']) ? $_POST['duodecimo'] : '';
    if ($duodecimo === '-\frac{1}{2Sen^2x}+C') {
        $verificar_12 = "correcto";
    } elseif ($duodecimo === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }


$decimosexto = isset($_POST['decimosexto']) ? $_POST['decimosexto'] : '';
if ($decimosexto === '\frac{1}{2Cos^2x}+C') {
    $verificar_16 = "correcto";
} elseif ($decimosexto === '') {
    $verificar_16 = '';
} else {
    $verificar_16 = "incorrecto";
}


$vigesimo = isset($_POST['vigesimo']) ? $_POST['vigesimo'] : '';
if ($vigesimo === '-2ln(cosx)+C' || $vigesimo === '-2ln[cosx]+C' || $vigesimo === '-2Ln(Cosx)+C' || $vigesimo === '-2Ln[Cosx]+C') {
    $verificar_20 = "correcto";
} elseif ($vigesimo === '') {
    $verificar_20 = '';
} else {
    $verificar_20 = "incorrecto";
}


$vigesimo_cuarto = isset($_POST['vigesimo_cuarto']) ? $_POST['vigesimo_cuarto'] : '';
if ($vigesimo_cuarto === '3xe^x-3e^x+C') {
    $verificar_24 = "correcto";
} elseif ($vigesimo_cuarto === '') {
    $verificar_24 = '';
} else {
    $verificar_24 = "incorrecto";
}

$vigesimo_octavo = isset($_POST['vigesimo_octavo']) ? $_POST['vigesimo_octavo'] : '';
if ($vigesimo_octavo === '-2xCosx+2Senx+C') {
    $verificar_28 = "correcto";
} elseif ($vigesimo_octavo === '') {
    $verificar_28 = '';
} else {
    $verificar_28 = "incorrecto";
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
    <link rel="stylesheet" href="doce.css">
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
        actualizarFormula3();
        actualizarFormula4();
        actualizarFormula5();
        actualizarFormula6();
        actualizarFormula7();
       
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('cuarto').value || "";
    


    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;

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
   
    var f = document.getElementById('duodecimo').value || "";
 


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
    var f = document.getElementById('decimosexto').value || "";
 

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
    var f = document.getElementById('vigesimo').value || "";
 

    // Construir la fórmula dinámica
    var formula = ` \\ ${f} \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula6() {
    // Obtener los valores de los inputs
    var f = document.getElementById('vigesimo_cuarto').value || "";
   

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula24').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula7() {
    // Obtener los valores de los inputs
    var f = document.getElementById('vigesimo_octavo').value || "";
 

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula7').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


</script>
    
</head>
<body>
<div class="seccion izquierda">
    <form action="./doce.php" method="POST" onsubmit="handleSubmit(event)">
    Ejemplo (integral comun y famosa):
    \( \int Sen^2x \, Cosx \, dx  \) <br>

    \( \int (Senx)^2 \, Cosx \, dx  \) <br><br>

    \( u=Senx ,  \,\,\, du = Cosx \, dx\) <br><br>

    \(  \int u^2 * du \) <br><br>

    \( \frac{u^3}{3} + C  \) = \( \frac{Sen^3x}{3} \, +C \)
    <hr>
    La integral indefinida de \( Cos^3x \,\, + \,\, Senx dx \) es: <br>
        \(
        \int Cos^3x \,\, + \,\, Senx \, dx = \)
        <span id="formula">
            \( \frac{0}{0} \)
        </span> 
         <br><br>
        <input type="text" name="cuarto" size="20" id="cuarto" oninput="actualizarFormula()" value=<?php echo $cuarto?>>
         
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_4 ?>
    <hr>
    La integral indefinida de \( \frac{Cosx}{Sen^2x} dx \) es: <br>
        \(
        \int  \frac{Cosx}{Sen^2x}  \, dx = \)
        <span id="formula2">
        \( \frac{0}{0} \)
    </span>
    <br><br>
    <input type="text" name="octavo" size="20" id="octavo" oninput="actualizarFormula2()" value="<?php echo $octavo?>">
     
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_8 ?>
    <hr>


    <p>
    La integral indefinida de \( \frac{Cotx}{Sen^2x} \) es: <br>
    \(
    \int \frac{Cotx}{Sen^2x} \, dx = 
    \)
    </p>
    <span id="formula3">
        \( \frac{0}{0} \)
    </span> 
     
    <br><br>

    <input type="text" name="duodecimo" size="20" id="duodecimo" oninput="actualizarFormula3()" value="<?php echo $duodecimo ?>">
  
    <br>
    <button type="submit">enviar</button>

     <?php echo $verificar_12 ?>
    <hr>


    La integral indefinida de \( \frac{Senx}{Cos^3x} \) es: <br>
    \(
    \int \frac{Senx}{Cos^3x} \, dx = 
    \)
    <span id="formula4">
        \( \frac{0}{0} \)
    </span> 
    <br><br>

    <input type="text" name="decimosexto" size="20" id="decimosexto" oninput="actualizarFormula4()" value="<?php echo $decimosexto ?>">

    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_16 ?>

    <hr>
    <p>
    La integral indefinida de \( \frac{2Senx}{Cosx} \) es: <br>
    \(
    \int \frac{2Senx}{Cosx} \, dx = 
    \)
    </p>

    <span id="formula5">
        \( \frac{0}{0} \)
    </span> 
     
    <br><br>

    <input type="text" name="vigesimo" size="20" id="vigesimo" oninput="actualizarFormula5()" value="<?php echo $vigesimo ?>">
     
    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_20 ?>
    </form>
</div>
<div class="seccion derecha">
    <form action="./doce.php" method="POST" onsubmit="handleSubmit(event)">


        <Strong>Integracion por partes: </Strong>
        <p>Sirve cuando el integrando esta formado por un producto o una division que se podra escribir
            como producto 
        </p>
        <p>
            \( \int u * dv = u*v \, - \, \int v du  \)
        </p>
        Palabra que nos ayuda a distinguir a u y dv (u tiene mas prioridad que dv ). <br>
        <strong>ILATE.</strong>   (inversa, logaritmica, algebraica, trigonometrica, exponencial). <br>
        ej: \( e * ln. \) (ln es u y e es dv). <br>
        
        Nota: dv se selecciona junto con el dx. <br>
        <br>
        <p>
            <Strong>Ejemplo: </Strong>
            \( \int x^2 * Lnx \, dx\) <br><br>
            Si analisamos tenemos A y L , en ILATE va primero la L entonces \( Lnx \) es u y 
            \( x^2 \) es dv. <br><br>
            \( u = Lnx   \,\,  , \,\, dv = x^2 dx\) <br><br>
            derivamos u, integramos dv. <br><br>
            \( du = \frac{1}{x}  \,\, , \,\,  v=\frac{x^3}{3} \) <br><br>
            Reemplazamos: <br><br>
            \( \int x^2 Lnx \, dx = \,\,\,\, Lnx*\frac{x^3}{3} - \int \frac{x^3}{3} * \frac{1}{x}  dx\)
            <br><br>
        </p>
        <hr>
        Caso exponencial: como vimos en integral por sustitucion, la derivada del exponente de e debia ser 
        algo parecido a lo que acompaña a e, pero por ejemplo, en este caso esta x, que no aparece por ningun
        sitio en la derivada (2). <br><br>
        \( \int x e^{2x} \) <br><br>
        \(  u = x \,\,\, , \,\, dv = e^{2x} dx \) <br><br>
        \( du = dx  \,\,\, , \,\, v = \frac{1}{2} e^{2x} \) <br><br>
        reemplazamos: <br><br>
        \( \int x e^{2x} = \, x*\frac{1}{2}e^{2x} \,\,  -  \,\, \int \frac{1}{2} e^{2x} dx \) <br><br>
        \( =\frac{1}{2}x e^{2x} - \frac{1}{2}  * \frac{1}{2} e^{2x} +C \) <br><br>
        \( =\frac{1}{2}x e^{2x} - \frac{1}{4}  e^{2x} +C \) 
        <hr>
        <p>
        La integral indefinida de \( 3x e^x \) es: <br>
        \(
        \int  3x e^x  \, dx = 
        \)
        </p>

        <span id="formula24">
        \( \frac{0}{0} \)
        </span> 
         
        <br><br>

        <input type="text" name="vigesimo_cuarto" size="20" id="vigesimo_cuarto" oninput="actualizarFormula6()" value="<?php echo $vigesimo_cuarto ?>">
   
        <br>
        <button type="submit">enviar</button>

        <?php echo $verificar_24 ?>
        <hr>



        <p>
        La integral indefinida de \( 2x Senx \) es: <br>
        \(
        \int 2x Senx  \, dx = 
        \)
        </p>
        <span id="formula7">
        \( \frac{0}{0} \)
        </span> 
         
        <br><br>

        <input type="text" name="vigesimo_octavo" size="20" id="vigesimo_octavo" oninput="actualizarFormula7()" value="<?php echo $vigesimo_octavo ?>">
         
        <br>
        <button type="submit">enviar</button>
        <?php echo $verificar_28 ?>
    </form>
</div>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="trece.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
