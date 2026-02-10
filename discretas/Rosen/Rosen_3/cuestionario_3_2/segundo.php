<?php
 
 
  
for ($i = 1; $i <= 230; $i++) {
    ${"respuesta_" . $i} = '';
}

$verificar_30_1 = '';
$respuesta_30_1 = '';
     
for ($i = 1; $i <= 230; $i++) {
    ${"verificar_" . $i} = '';
}

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
 

        $respuesta_56 = 'f(x)=a_nx^n+a_{n-1}x^{n-1}+\cdots+a_1x+a_0';
        $respuesta_57 = 'a_0,a_1,\cdots,a_{n-1},a_n';
        $respuesta_58 = 'numeros';
        $respuesta_59 = 'reales';
        $respuesta_60 = 'n';
        $respuesta_61 = '1+2+\cdots+n\leq n+n+\cdots+n=n^2';
        $respuesta_62 = 'n^2';
        $respuesta_63 = 'n';
        $respuesta_64 = 'n';
        $respuesta_65 = 'n';
        $respuesta_66 = 'n*n';

        $respuesta_67 = 'O(n^2)';
        $respuesta_68 = '1';
        $respuesta_69 = '1';
        $respuesta_70 = 'desigualdad';
        $respuesta_71 = '1\cdot 2\cdots n\leq n\cdot n\cdots n';
        $respuesta_72 = 'O(n^n)';
        $respuesta_73 = '1';
        $respuesta_74 = '1';
        $respuesta_75 = 'n^n';
        $respuesta_76 = '\log(n!)\leq\log(n^n)';
        $respuesta_77 = 'nlogn';
        $respuesta_78 = 'O(nlogn)';
        $respuesta_79 = 'O(2^n)';
        $respuesta_80 = '1';
        $respuesta_81 = '1';
        $respuesta_82 = '1';
        $respuesta_83 = '1';
        $respuesta_84 = 'logaritmos';
        $respuesta_85 = '2';
        $respuesta_86 = 'logn<n';
        $respuesta_87 = 'O(n)';
        $respuesta_88 = '\log_bn=O(n)';
        $respuesta_89 = '\frac{\log n}{\log b}<\frac{n}{\log b}';
        $respuesta_90 = '\frac{1}{\log b}';
    
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {

     


$respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
$respuesta_56_dos = str_replace(' ','',strtolower($respuesta_56));

if ($respuesta_56_dos === 'f(x)=a_nx^n+a_{n-1}x^{n-1}+\cdots+a_1x+a_0') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56_dos === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
 $respuesta_57_dos = str_replace(" ","",strtolower($respuesta_57));

if ($respuesta_57_dos === 'a_0,a_1,\cdots,a_{n-1},a_n') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57_dos === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'numeros') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'reales') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'n') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

$respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
$respuesta_61_dos = str_replace(" ","",strtolower($respuesta_61));


if ($respuesta_61_dos === '1+2+\cdots+n\leqn+n+\cdots+n=n^2') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61_dos === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'n^2') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'n') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'n') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'n') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'n*n') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'O(n^2)') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === '1') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === '1') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'desigualdad') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
 $respuesta_71_dos = str_replace(" ","",strtolower($respuesta_71));

if ($respuesta_71_dos === '1\cdot2\cdotsn\leqn\cdotn\cdotsn') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71_dos === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'O(n^n)') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === '1') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === '1') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'n^n') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

$respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
$respuesta_76_dos = str_replace(" ","",strtolower($respuesta_76));

if ($respuesta_76_dos === '\log(n!)\leq\log(n^n)') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76_dos === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'nlogn') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'O(nlogn)') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'O(2^n)') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === '1') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === '1') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

 $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
if ($respuesta_82 === '1') { 
    $verificar_82 = "correcto";
} elseif ($respuesta_82 === '') {
    $verificar_82 = '';
} else {
    $verificar_82 = "incorrecto";
}

 $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
if ($respuesta_83 === '1') { 
    $verificar_83 = "correcto";
} elseif ($respuesta_83 === '') {
    $verificar_83 = '';
} else {
    $verificar_83 = "incorrecto";
}

 $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
if ($respuesta_84 === 'logaritmos') { 
    $verificar_84 = "correcto";
} elseif ($respuesta_84 === '') {
    $verificar_84 = '';
} else {
    $verificar_84 = "incorrecto";
}

 $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
if ($respuesta_85 === '2') { 
    $verificar_85 = "correcto";
} elseif ($respuesta_85 === '') {
    $verificar_85 = '';
} else {
    $verificar_85 = "incorrecto";
}

$respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
$respuesta_86_dos = str_replace(" ","",strtolower($respuesta_86));

if ($respuesta_86_dos === 'logn<n') { 
    $verificar_86 = "correcto";
} elseif ($respuesta_86_dos === '') {
    $verificar_86 = '';
} else {
    $verificar_86 = "incorrecto";
}

 $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
if ($respuesta_87 === 'O(n)') { 
    $verificar_87 = "correcto";
} elseif ($respuesta_87 === '') {
    $verificar_87 = '';
} else {
    $verificar_87 = "incorrecto";
}

 $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
 $respuesta_88_dos = str_replace(' ','',$respuesta_88);

if ($respuesta_88_dos === '\log_bn=O(n)') { 
    $verificar_88 = "correcto";
} elseif ($respuesta_88_dos === '') {
    $verificar_88 = '';
} else {
    $verificar_88 = "incorrecto";
}

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
 $respuesta_89_dos = str_replace(" ","",strtolower($respuesta_89));
if ($respuesta_89_dos === '\frac{\logn}{\logb}<\frac{n}{\logb}') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89_dos === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
  $respuesta_90_dos = str_replace(" ","",strtolower($respuesta_90));

if ($respuesta_90_dos === '\frac{1}{\logb}' || $respuesta_90_dos === '\frac{1}{logb}') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90_dos === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}
 

}}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre simplificación de expresiones matemáticas</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../style_2_0.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
    .imagen {
        max-width: 100%;
        height: auto;
    }
 

       .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 225vh;
    min-height: 225vh;
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
 
        actualizarFormula3();
        actualizarFormula4();
        actualizarFormula5();
        actualizarFormula6();
        actualizarFormula7();
        actualizarFormula8();
        actualizarFormula9();
        actualizarFormula10();
        actualizarFormula11();
        actualizarFormula12();
      
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

 
function mostrarImagen() {
  document.getElementById("contenedor").innerHTML = 
    "<img src='../../../../img/respuesta.png' alt='Imagen'>";
}
 

 



function actualizarFormula3() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_56').value || "";
 


    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula3').innerHTML = `\\(${formula}\\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_57').value || "";
   

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula4').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula5() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_61').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula6() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_71').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula6').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula7() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_76').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula7').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_88').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula8').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula9() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_89').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula9').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula10() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_90').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula10').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula11() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_11').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula12() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_12').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula12').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

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



function mostrarMensaje3() {
    document.getElementById("mensaje3").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje3")]);
}

function ocultarMensaje3() {
    document.getElementById("mensaje3").style.display = 'none';
}

function mostrarMensaje4() {
    document.getElementById("mensaje4").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje4")]);
}

function ocultarMensaje4() {
    document.getElementById("mensaje4").style.display = 'none';
}




</script>
 
 
</head>
<body> 
<form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda">  
  <strong>utiliza: \cdots</strong>
    <br><br>
   <h2>Teorema 1</h2>
<p>
  Sea 
    <span id="formula3">
      \(    \)
    </span> 
  
  , donde
   <span id="formula4">
      \(    \)
    </span> 
    son 
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="12">  
    
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="12">  
       .<br>
  Entonces \( f(x) \) es \( O(x^n) \).
</p>

<h3>Demostración:</h3>
<p>
  Usando la desigualdad triangular (ver Ejercicio 9 en la Sección 1.8), si \( x > 1 \) tenemos que:
</p>

<p>
\[
\begin{align*}
|f(x)| &= |a_n x^n + a_{n-1} x^{n-1} + \cdots + a_1 x + a_0| \quad \text{(escribimos la definición de } f(x) \\
&\leq |a_n| x^n + |a_{n-1}| x^{n-1} + \cdots + |a_1| x + |a_0| \quad \text{(usamos la desigualdad triangular)} \\
&= x^n \left( |a_n| + \frac{|a_{n-1}|}{x} + \cdots + \frac{|a_1|}{x^{n-1}} + \frac{|a_0|}{x^n} \right) \quad \text{(factorizamos } x^n \text{)} \\
&\leq x^n (|a_n| + |a_{n-1}| + \cdots + |a_1| + |a_0|) \quad \text{(como } x > 1, \text{ todas las fracciones son } < 1) \\
\end{align*}
\]
</p>


<p>
Por lo tanto, \( |f(x)| \leq Cx^n \), donde \( C = |a_n| + |a_{n-1}| + \cdots + |a_0| \), siempre que \( x > 1 \).<br>
Así, los testigos \( C \) y \( k = 1 \) muestran que \( f(x) \) es \( O(x^n) \).
</p>
<p>
sustituimos cada término con una cota más grande:<br>
\[
\frac{|a_{n-1}|}{x} \leq |a_{n-1}|,\quad \frac{|a_{n-2}|}{x^2} \leq |a_{n-2}|,\quad \ldots
\]
</p>
    
   
    <input type="text" name="respuesta_56" size="42" id="respuesta_56" oninput="actualizarFormula3()"
    value="<?php echo $respuesta_56?>">
    <br>
    <input type="text" name="respuesta_57" size="42" id="respuesta_57" oninput="actualizarFormula4()"
    value="<?php echo $respuesta_57?>">



    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_56 ?>
    <?php echo $verificar_57 ?>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <br><br>

     <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Ayuda</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    <h4>¿Por qué a<sub>0</sub> no tiene x?</h4>

<p>
La expresión general de un polinomio es:
</p>

<p>
\( f(x) = a_n x^n + a_{n-1} x^{n-1} + \cdots + a_1 x + a_0 \)
</p>

<h5>Interpretación clave</h5>

<ul>
  <li>
    \( a_0 \) es el <strong>término constante</strong>.
  </li>
  <li>
    Es el coeficiente de \( x^0 \).
  </li>
</ul>

<p>
Recordemos que:
</p>

<p>
\( x^0 = 1 \quad \text{(para cualquier } x \neq 0\text{)} \)
</p>

<p>
Entonces:
</p>

<p>
\( a_0 x^0 = a_0 \cdot 1 = a_0 \)
</p>

<p>
Por esta razón <strong>no se escribe la x</strong> en el término \( a_0 \):
</p>

<ul>
  <li>No aporta información adicional.</li>
  <li>Solo haría la expresión más larga.</li>
</ul>

    </div>

    <hr>
    
<h3>Ejemplo 5</h3>
<strong>estructura: numero+numero+...+ultimo</strong>
<p><strong>¿Cómo puede usarse la notación Big-O para estimar la suma de los primeros <em>n</em> enteros positivos?</strong></p>
<p>
  Dado que cada uno de los enteros en la suma de los primeros <em>n</em> enteros positivos no excede a 
      <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="12">  
    , se tiene que:
</p>
<p>
       <span id="formula5">
      \(    \)
    </span> 
 
</p>
<p>
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="8">  
    sale de que la suma de 
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="8">  
    términos es 
     <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="8"> 
    veces 
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8"> 
    : 
    <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="8"> 
    .
</p>
<p>
  A partir de esta desigualdad se deduce que \( 1 + 2 + 3 + \cdots + n \) es 
   <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="8">
  , tomando 
  \( C = \)
  <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="8">
  y \( k =  \) 
  <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="8">
  como testigos.
  (En este ejemplo, los dominios de las funciones en la relación Big-O son el conjunto de los enteros positivos).
</p>
 
    <input type="text" name="respuesta_61" size="42" id="respuesta_61" oninput="actualizarFormula5()"
    value="<?php echo $respuesta_61?>">

    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_60 ?>
    <?php echo $verificar_61 ?>
    <?php echo $verificar_62 ?>
    <?php echo $verificar_63 ?>
    <?php echo $verificar_64 ?>
    <?php echo $verificar_65 ?>
    <?php echo $verificar_66 ?>
    <?php echo $verificar_67 ?>
    <?php echo $verificar_68 ?>
    <?php echo $verificar_69 ?>
    <br><br>

    
    <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../../../img/respuesta.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen2() {
        var imagenMostrada2 = document.getElementById('imagenMostrada2');

        // Mostrar la imagen
        imagenMostrada2.style.display = 'block';
        }

        function ocultarImagen2() {
        var imagenMostrada2 = document.getElementById('imagenMostrada2');

        // Ocultar la imagen al soltar el botón
        imagenMostrada2.style.display = 'none';
        }
    </script>
    <hr>
 
</div>




<div class="seccion derecha">
     
    para una estimacion Big O hay que establecer/resolver una 
    <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="8">
    <br><br>
    <strong>escribir desigualdad : num*num ... numfinal < , > num*num*...*numfinal</strong>
    <br>
    <strong>utilizar: \cdots, \cdot</strong>
     <h3>Ejemplo 6: Estimaciones Big-O para la función factorial y su logaritmo</h3>

     <h6>¿Qué es la función factorial?</h6>
  <p>Se define así:</p>
  <p>\( n! = 1 \cdot 2 \cdot 3 \cdots n \quad \text{(para todo } n \geq 1 \text{)}, \quad \text{y por definición } 0! = 1 \)</p>

  <h6>¿Qué se quiere hacer?</h6>
  <p>Queremos encontrar estimaciones Big-O (cotas superiores de crecimiento) para:</p>
  <ul>
    <li>\( n! \)</li>
    <li>\( \log(n!) \)</li>
  </ul>


    <h6> Estimar una cota superior para \( n! \)</h6>

    Estimacion Big O:

    </p>
    <span id="formula6">
      \(    \)
    </span> 
    <p> = <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="4"></p>

    <input type="text" name="respuesta_71" size="42" id="respuesta_71" oninput="actualizarFormula6()"
    value="<?php echo $respuesta_71?>">

     <p>Es una cota general pero suficiente para Big-O. Se toman testigos \( C = \)
    <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="4">    
    y \( k =  \)
    <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="4">
    .
    
    <p>Entonces: \( n! = \)
    <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="8">
    </p>

    <h6>Estimar una cota superior para \( \log(n!) \)?</h6>
    <p>Estimacion Big O:</p>
    <span id="formula7">
      \(    \)
    </span> 
    
    <br><input type="text" name="respuesta_76" size="42" id="respuesta_76" oninput="actualizarFormula7()"
    value="<?php echo $respuesta_76?>">


    <p>    
    =
    <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="8">
    </p>
    <p>Entonces: \( \log(n!) =   \) 
    <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="8">
    </p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_70 ?>
    <?php echo $verificar_71 ?>
    <?php echo $verificar_72 ?>
    <?php echo $verificar_73 ?>
    <?php echo $verificar_74 ?>
    <?php echo $verificar_75 ?>
    <?php echo $verificar_76 ?>
    <?php echo $verificar_77 ?>
    <?php echo $verificar_78 ?>
    <hr>


       <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Ayuda</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
 


    <p>
En este caso, el crecimiento de referencia (la función dominante) es
\( n \). Es decir, lo que se quiere demostrar es que
</p>

<p style="text-align:center;">
\[
\log_b n = O(n)
\]
</p>

<p>
Esto significa que el crecimiento del logaritmo es mucho más lento que el
crecimiento lineal.
</p>

<h5>Desigualdad clave</h5>
<p>
La afirmación anterior se garantiza mostrando que existe una constante
\( C &gt; 0 \) tal que
</p>

<p style="text-align:center;">
\[
\log_b n &lt; C\,n
\]
</p>

<h5>Partimos de la desigualdad básica</h5>

<p>
Partimos exactamente de la desigualdad:
</p>

<p>
\( n < a^n \), con \( a \) un entero mayor que 1.
</p>

<p>
A partir de esta desigualdad veremos qué se puede concluir y por qué el razonamiento funciona en general.
</p>

<h5>1. La desigualdad base</h5>

<p>
Para todo entero \( a > 1 \), se cumple que:
</p>

<p>
\( n < a^n \quad \text{para todo } n \text{ suficientemente grande (de hecho, para } n \ge 1 \text{)} \)
</p>

<p>
Esto expresa una idea fundamental:
<strong>cualquier función exponencial con base mayor que 1 crece más rápido que una función lineal</strong>.
</p>

<h5>2. Conclusión inmediata en notación Big-O</h5>

<p>
De la desigualdad \( n < a^n \) se deduce directamente que:
</p>

<p>
\( n \le 1 \cdot a^n \quad \text{para todo } n \ge 1 \)
</p>

<p>
Por definición de la notación Big-O, esto implica que:
</p>

<p>
\( n \) es \( O(a^n) \)
</p>

<p>
En este caso, los testigos son:
</p>

<ul>
  <li>\( C = 1 \)</li>
  <li>\( k = 1 \)</li>
</ul>

<p>
Hasta este punto no se han utilizado logaritmos.
</p>

<h5>3. Aplicar logaritmos (paso conceptual importante)</h5>

<p>
Como la función logaritmo es creciente, podemos aplicar logaritmos a ambos lados de la desigualdad
sin cambiar el sentido de la misma:
</p>

<p>
\( \log n < \log(a^n) \)
</p>

<p>
Usando las propiedades de los logaritmos, se tiene:
</p>

<p>
\( \log(a^n) = n \log a \)
</p>

<p>
Por lo tanto:
</p>

<p>
\( \log n < n \log a \)
</p>

<h5>4. Aislar el crecimiento principal</h5>

<p>
Dividimos ambos lados entre \( \log a \), que es positivo porque \( a > 1 \):
</p>

<p>
\( \dfrac{\log n}{\log a} < n \)
</p>

<p>
Recordando la fórmula de cambio de base:
</p>

<p>
\( \dfrac{\log n}{\log a} = \log_a n \)
</p>

<p>
La desigualdad queda entonces:
</p>

<p>
\( \log_a n < n \)
</p>

<h5>5. Conclusión en notación Big-O</h5>

<p>
La desigualdad anterior implica que:
</p>

<p>
\( \log_a n \le 1 \cdot n \quad \text{para todo } n \ge 1 \)
</p>

<p>
Por definición, se concluye que:
</p>

<p>
\( \log_a n \) es \( O(n) \)
</p>

<p>
En este caso, los testigos son nuevamente:
</p>

<ul>
  <li>\( C = 1 \)</li>
  <li>\( k = 1 \)</li>
</ul>

    </div>

    <h3>Ejemplo 7</h3>
    <p>
    En la Sección 5.1 mostraremos que \( n &lt; 2^n \) siempre que \( n \) sea un número entero positivo.
    Muestra que esta desigualdad implica que \( n = O(2^n) \), y usa esta desigualdad para demostrar que
    \( \log n = O(n) \).
    </p>

    <h4> Solución:</h4>
    <p>
    Usando la desigualdad \( n &lt; 2^n \), podemos concluir rápidamente que \( n = \)
    <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="8">
    tomando
    \( C =  \)
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="8">
    y \( k =  \) 
    <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="8">
    como testigos.
    </p>

    <p>
    Dado que la función logaritmo es creciente, al aplicar 
    <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="8">
    (en base 
    <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="8">
    ) a ambos lados de la desigualdad
    obtenemos:
    </p>
 
    <br><input type="text" name="respuesta_86" size="8"    value="<?php echo $respuesta_86?>">

    <p>
    Por lo tanto:<br>
    \( \log n =  \) <input type="text" name="respuesta_87" size="8"    value="<?php echo $respuesta_87?>">
    </p>
 
    <p>(Nuevamente tomamos \( C =  \) 
    <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="8">    
    y \( k =  \)
    <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="8">
    como testigos.)</p>
    <p>
    Si tenemos logaritmos en base \( b \), donde \( b \ne 2 \), aún se cumple que 
    <span id="formula8">
      \(    \)
    </span> ,
    
    <br><input type="text" name="respuesta_88" size="30" id="respuesta_88" oninput="actualizarFormula8()"
    value="<?php echo $respuesta_88?>">

    porque ( <strong>utilizar \log:</strong> ):
    </p>
    <p>\( \log_b n =   \)
    <span id="formula9">
      \(    \)
    </span> ,
    
    <br><input type="text" name="respuesta_89" size="42" id="respuesta_89" oninput="actualizarFormula9()"
    value="<?php echo $respuesta_89?>">
    </p>

    <p>
    Siempre que \( n \) sea un entero positivo. En este caso, tomamos \( C =  \)
     <span id="formula10">
      \(    \)
    </span> , <input type="text" name="respuesta_90" size="15" id="respuesta_90" oninput="actualizarFormula10()"
    value="<?php echo $respuesta_90?>">
    y
    \( k = 1 \) como testigos.
    </p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_79 ?>
<?php echo $verificar_80 ?>
<?php echo $verificar_81 ?>
<?php echo $verificar_82 ?>
<?php echo $verificar_83 ?>
<?php echo $verificar_84 ?>
<?php echo $verificar_85 ?>
<?php echo $verificar_86 ?>
<?php echo $verificar_87 ?>
<?php echo $verificar_88 ?>
<?php echo $verificar_89 ?>
<?php echo $verificar_90 ?>
    <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
   </div>
</div>
  </form>
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
