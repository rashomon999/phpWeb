 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre simplificación de expresiones matemáticas</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../style.css">
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
    height: 450vh;
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

function actualizarFormula() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_11').value || "";
 


    // Construir la fórmula dinámica
    var formula = ` \\  ${f} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}
 

function actualizarFormula2() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_13').value || "";
  
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
   
    var f = document.getElementById('respuesta_27').value || "";
 


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
    var f = document.getElementById('respuesta_29').value || "";
   

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
    var f = document.getElementById('respuesta_30').value || "";
  

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
    var f = document.getElementById('respuesta_6').value || "";
  

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
    var f = document.getElementById('respuesta_7').value || "";
  

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
    var f = document.getElementById('respuesta_8').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula8').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula9() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_9').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula10() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_10').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula10').innerHTML = `$$ ${formula} $$`;

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
<div class="seccion izquierda">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

<h1>1. Qué es el modelo MISD</h1>

<p>MISD significa:</p>

<p><strong>Multiple Instruction, Single Data</strong></p>

<table>
<tr>
<th>Concepto</th>
<th>Significado</th>
</tr>
<tr>
<td>Multiple Instruction</td>
<td>varios procesadores ejecutan <strong>instrucciones diferentes</strong></td>
</tr>
<tr>
<td>Single Data</td>
<td>los <strong>mismos datos pasan por todos</strong></td>
</tr>
</table>

<p>La idea es:</p>

<pre>
dato → procesador1 → procesador2 → procesador3 → ...
</pre>

<p>Cada procesador hace <strong>una operación diferente sobre ese dato</strong>.</p>

<p>Esto es exactamente lo que ocurre en una <strong>tubería (pipeline)</strong>.</p>

<hr>

<h1>2. Qué es una tubería (pipeline)</h1>

<p>Una <strong>tubería</strong> divide un proceso en <strong>etapas</strong>.</p>

<p>Cada etapa es ejecutada por <strong>un procesador diferente</strong>.</p>

<p>Ejemplo visual:</p>

<pre>
Dato → P1 → P2 → P3 → P4
        │    │    │
     etapa1 etapa2 etapa3
</pre>

<p>Cada procesador:</p>

<ul>
<li>recibe datos</li>
<li>los procesa</li>
<li>los pasa al siguiente</li>
</ul>

<p>Es como una <strong>línea de ensamblaje de una fábrica</strong>.</p>

<p>Ejemplo real:</p>

<pre>
auto → chasis → motor → pintura → inspección
</pre>

<p>Cada estación hace <strong>algo diferente</strong>.</p>

<hr>

<h1>3. Por qué se dice que es MISD</h1>

<table>
<tr>
<th>Procesador</th>
<th>Instrucción</th>
</tr>
<tr>
<td>P1</td>
<td>operación 1</td>
</tr>
<tr>
<td>P2</td>
<td>operación 2</td>
</tr>
<tr>
<td>P3</td>
<td>operación 3</td>
</tr>
</table>

<p>Pero <strong>los datos van pasando entre ellos</strong>.</p>

<pre>
dato1 → P1 → P2 → P3
dato2 → P1 → P2 → P3
dato3 → P1 → P2 → P3
</pre>

<hr>

<h1>4. Algo importante que dice el texto</h1>

<p>El texto aclara algo interesante:</p>

<blockquote>
En las tuberías de instrucciones, las <strong>instrucciones son los datos</strong>.
</blockquote>

<p>En un <strong>pipeline de CPU</strong>, lo que circula son <strong>instrucciones del programa</strong>.</p>

<p>Ejemplo de pipeline de CPU:</p>

<pre>
Fetch → Decode → Execute → Write
</pre>

<p>La instrucción pasa por esas etapas.</p>

<ul>
<li>la <strong>instrucción es el dato</strong></li>
<li>cada etapa ejecuta una operación distinta</li>
</ul>

<p>Por eso conceptualmente parece <strong>MISD</strong>.</p>

<p>Pero el procesador sigue siendo <strong>SISD</strong>, porque el programa es secuencial.</p>

<hr>

<h1>5. Programas con tuberías</h1>

<p>Cuando se diseña un algoritmo con tubería:</p>

<p>Hay que definir:</p>

<ul>
<li><strong>qué hace cada etapa</strong></li>
<li><strong>cómo pasan los datos entre etapas</strong></li>
</ul>

<p>Ejemplo:</p>

<pre>
Entrada → P1 → P2 → P3 → salida
</pre>

<p>Cada procesador tiene un pequeño programa.</p>

<hr>

<h1>6. Ejemplo 13.5 — ordenar números</h1>

<p>El problema:</p>

<p>Ordenar un flujo de números usando una <strong>tubería de procesadores</strong>.</p>

<p>Supongamos que llegan números así:</p>

<pre>
7 3 9 2 5
</pre>

<p>Y hay <strong>5 procesadores</strong>.</p>

<p>Al final debe quedar:</p>

<pre>
P1 = 2
P2 = 3
P3 = 5
P4 = 7
P5 = 9
</pre>

<hr>

<h1>7. Programa que ejecuta cada procesador</h1>

<pre>
int menor = INT_MAX, actual, mayor;

input actual;

mayor = max(menor, actual);
menor = min(menor, actual);

output mayor;
</pre>

<hr>

<h1>8. Qué hace ese código</h1>

<p>Cada procesador <strong>guarda el menor número que ha visto</strong>.</p>

<p>Funcionamiento:</p>

<ol>
<li>recibe un número (<code>actual</code>)</li>
<li>compara con su número guardado (<code>menor</code>)</li>
</ol>

<pre>
menor = el menor
mayor = el mayor
</pre>

<ol start="3">
<li>guarda el menor</li>
<li>envía el mayor al siguiente procesador</li>
</ol>

<hr>

<h1>9. Cómo se ordena con la tubería</h1>

<p>Ejemplo con números:</p>

<pre>
8 3 6
</pre>

<h3>Paso 1</h3>

<p>P1 recibe <strong>8</strong></p>

<pre>
P1 guarda 8
</pre>

<h3>Paso 2</h3>

<p>P1 recibe <strong>3</strong></p>

<pre>
menor = 3
mayor = 8
</pre>

<p>Entonces:</p>

<pre>
P1 guarda 3
P2 recibe 8
</pre>

<h3>Paso 3</h3>

<p>P1 recibe <strong>6</strong></p>

<pre>
menor = 3
mayor = 6
</pre>

<p>Entonces:</p>

<pre>
P1 = 3
P2 recibe 6
</pre>

<p>Los números <strong>grandes avanzan por la tubería</strong> hasta quedar ordenados.</p>

<hr>

<h1>10. Por qué el algoritmo tarda 2n pasos</h1>

<blockquote>
requiere como máximo <strong>2n pasos</strong>
</blockquote>

<p>Porque:</p>

<ol>
<li>los datos deben <strong>llenar la tubería</strong></li>
<li>luego deben <strong>propagarse hasta el final</strong></li>
</ol>

<pre>
llenar tubería → procesar → vaciar tubería
</pre>

<p>Eso tarda aproximadamente:</p>

<pre>
2n pasos
</pre>

<hr>

<h1>11. Idea clave del modelo de tuberías</h1>

<table>
<tr>
<th>Característica</th>
<th>Tubería</th>
</tr>
<tr>
<td>Tipo</td>
<td>MISD</td>
</tr>
<tr>
<td>Procesadores</td>
<td>varios</td>
</tr>
<tr>
<td>Instrucciones</td>
<td>diferentes</td>
</tr>
<tr>
<td>Datos</td>
<td>fluyen entre procesadores</td>
</tr>
</table>

<p>Flujo típico:</p>

<pre>
dato → P1 → P2 → P3 → P4
</pre>

<p>Cada etapa hace <strong>algo distinto</strong>.</p>

<hr>

<h2>Resumen</h2>

<p>
Una <strong>tubería MISD</strong> divide un proceso en etapas donde
<strong>cada procesador ejecuta una instrucción diferente sobre los datos
que van pasando de uno a otro</strong>.
</p>

 

 
    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
          <hr>
    <h1>1. Cómo está organizada una máquina SIMD</h1>

<p>Una arquitectura SIMD típica tiene:</p>

<ul>
<li><b>1 unidad de control (control unit)</b></li>
<li><b>muchos procesadores de datos (processing elements)</b></li>
</ul>

<p><b>La unidad de control:</b></p>

<ul>
<li>lee las instrucciones del programa</li>
<li>mantiene el <b>contador de programa</b></li>
<li>envía la misma instrucción a todos los procesadores</li>
</ul>

<p><b>Los procesadores de datos:</b></p>

<ul>
<li>ejecutan esa instrucción</li>
<li>pero con <b>datos diferentes</b></li>
</ul>

<hr>

<h1>2. Estructura conceptual</h1>

<p>Se ve así:</p>

<pre>
          Unidad de Control
                │
        ────────┼────────
        │       │       │
       P0      P1      P2
        │       │       │
       P3      P4      P5
</pre>

<ul>
<li>La <b>unidad de control</b> envía la instrucción.</li>
<li>Todos los procesadores la ejecutan al mismo tiempo.</li>
</ul>

<hr>
<h1>3. Aplicándolo al ejemplo de las matrices</h1>

<p>En el ejemplo había <b>6 procesadores de datos</b>:</p>

<table>
<tr>
<th>Procesador</th>
<th>Calcula</th>
</tr>
<tr>
<td>P0</td>
<td>C[0,0]</td>
</tr>
<tr>
<td>P1</td>
<td>C[0,1]</td>
</tr>
<tr>
<td>P2</td>
<td>C[1,0]</td>
</tr>
<tr>
<td>P3</td>
<td>C[1,1]</td>
</tr>
<tr>
<td>P4</td>
<td>C[2,0]</td>
</tr>
<tr>
<td>P5</td>
<td>C[2,1]</td>
</tr>
</table>

<p>Pero <b>solo hay un flujo de instrucciones</b>, controlado por una <b>unidad de control</b>.</p>

<h3>Unidad de control envía</h3>

<p><b>Instrucción 1</b></p>

<pre>
temp1 = A[fila,0] * B[0,col]
</pre>

<p>Todos los procesadores la ejecutan.</p>

<hr>

<p><b>Instrucción 2</b></p>

<pre>
temp2 = A[fila,1] * B[1,col]
</pre>

<p>Todos la ejecutan.</p>

<hr>

<p><b>Instrucción 3</b></p>

<pre>
C[fila,col] = temp1 + temp2
</pre>

<p>Todos la ejecutan.</p>

<hr>

<h1>4. Diferencia con MIMD</h1>

<table>
<tr>
<th>Arquitectura</th>
<th>Control</th>
</tr>
<tr>
<td>SIMD</td>
<td><b>1 unidad de control</b></td>
</tr>
<tr>
<td>MIMD</td>
<td><b>muchas unidades de control</b></td>
</tr>
</table>

<p>En <b>MIMD</b> cada procesador ejecuta su propio programa.</p>

<p>En <b>SIMD</b> todos siguen <b>el mismo programa</b>.</p>  
   <hr>
   
     <h1>1. Matrices del ejemplo</h1>

<p>Tenemos:</p>

<pre>
A (3x2)        B (2x2)

[ a00 a01 ]    [ b00 b01 ]
[ a10 a11 ]    [ b10 b11 ]
[ a20 a21 ]
</pre>

<p>Resultado:</p>

<pre>
C (3x2)

[ c00 c01 ]
[ c10 c11 ]
[ c20 c21 ]
</pre>

<p>Cada elemento de <b>C</b> se calcula así:</p>

<pre>
C[fila,col] =
A[fila,0] * B[0,col] +
A[fila,1] * B[1,col]
</pre>

<hr>

<h1>2. Procesadores SIMD</h1>

<p>Se usan <b>6 procesadores</b>:</p>

<table>
<tr>
<th>Procesador</th>
<th>Calcula</th>
</tr>
<tr><td>P0</td><td>C[0,0]</td></tr>
<tr><td>P1</td><td>C[0,1]</td></tr>
<tr><td>P2</td><td>C[1,0]</td></tr>
<tr><td>P3</td><td>C[1,1]</td></tr>
<tr><td>P4</td><td>C[2,0]</td></tr>
<tr><td>P5</td><td>C[2,1]</td></tr>
</table>

<hr>

<h1>3. Instrucciones que ejecutan (SIMD)</h1>

<p>Todos los procesadores ejecutan <b>la misma secuencia de instrucciones</b>.</p>

<h3>Instrucción 1 (multiplicación)</h3>

<pre>
temp1 = A[fila,0] * B[0,col]
</pre>

<p>Se ejecuta en paralelo:</p>

<pre>
P0 → a00 * b00
P1 → a00 * b01
P2 → a10 * b00
P3 → a10 * b01
P4 → a20 * b00
P5 → a20 * b01
</pre>

<h3>Instrucción 2 (multiplicación)</h3>

<pre>
temp2 = A[fila,1] * B[1,col]
</pre>

<p>En paralelo:</p>

<pre>
P0 → a01 * b10
P1 → a01 * b11
P2 → a11 * b10
P3 → a11 * b11
P4 → a21 * b10
P5 → a21 * b11
</pre>

<h3>Instrucción 3 (suma)</h3>

<pre>
C[fila,col] = temp1 + temp2
</pre>

<p>En paralelo:</p>

<pre>
P0 → c00
P1 → c01
P2 → c10
P3 → c11
P4 → c20
P5 → c21
</pre>

<hr>

<h1>4. Entonces tu pregunta</h1>

<p><b>P0 → A[0,0] * B[0,0], ¿hace 3 instrucciones?</b></p>

<p>Sí, cada procesador ejecuta:</p>

<ul>
<li>Multiplicación</li>
<li>Multiplicación</li>
<li>Suma</li>
</ul>

<p>Pero <b>todas esas instrucciones se ejecutan simultáneamente en todos los procesadores</b>.</p>

<hr>

<h1>5. Lo importante de SIMD</h1>

<p>No significa:</p>

<pre>
1 sola instrucción total
</pre>

<p>Significa:</p>

<pre>
1 flujo de instrucciones
+
muchos datos
</pre>

<p>Visualmente:</p>

<pre>
Control Unit
    |
    |-- P0
    |-- P1
    |-- P2
    |-- P3
    |-- P4
    |-- P5
</pre>

<p>La <b>unidad de control envía la misma instrucción a todos</b>.</p>

<hr>

<h2>Resumen</h2>

<ul>
<li>Cada procesador calcula <b>un elemento de C</b>.</li>
<li>Cada procesador ejecuta <b>3 instrucciones</b>.</li>
<li>Las mismas instrucciones se ejecutan <b>al mismo tiempo</b> en todos.</li>
</ul>

<p><b>Esto es SIMD (Single Instruction, Multiple Data).</b></p>

<hr>



    </form>
</div>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="segundo.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
