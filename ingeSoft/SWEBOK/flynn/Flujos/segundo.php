 
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

 <h1>1. Qué es la granularidad</h1>

<p>La <strong>granularidad</strong> en computación paralela se refiere a:</p>

<blockquote>
<strong>cuánto trabajo hace cada procesador antes de tener que sincronizarse con otros.</strong>
</blockquote>

<p>Es decir:</p>

<pre>
trabajo que hace un procesador
antes de comunicarse con otros
</pre>

<p>
Si los procesadores tienen que sincronizarse <strong>muy seguido</strong>, el grano es pequeño.
Si trabajan mucho tiempo solos, el grano es grande.
</p>

<hr>

<h1>2. Analogía sencilla</h1>

<p>Imagina varios trabajadores construyendo algo.</p>

<h2>Grano fino</h2>

<p>Cada paso deben coordinarse.</p>

<pre>
trabajador 1 → coloca tornillo
trabajador 2 → ajusta
trabajador 3 → revisa
</pre>

<p>Se comunican <strong>todo el tiempo</strong>.</p>

<hr>

<h2>Grano grueso</h2>

<p>Cada uno hace una parte grande del trabajo.</p>

<pre>
trabajador 1 → construye la puerta
trabajador 2 → construye el techo
trabajador 3 → construye las paredes
</pre>

<p>Se coordinan <strong>solo al final</strong>.</p>

<hr>

<h1>3. Tipos de granularidad</h1>

<h2>1️⃣ Grano fino</h2>

<p>Los procesadores hacen <strong>operaciones muy pequeñas</strong>.</p>

<p>Ejemplo:</p>

<ul>
<li><strong>SIMD</strong></li>
<li><strong>modelo de flujo de datos</strong></li>
</ul>

<p>Aquí cada procesador ejecuta:</p>

<pre>
una sola instrucción
</pre>

<p>Ejemplo:</p>

<pre>
sumar
multiplicar
comparar
</pre>

<p>Y después se sincronizan.</p>

<hr>

<h2>2️⃣ Grano mediano</h2>

<p>Cada procesador ejecuta <strong>un pequeño programa</strong> antes de sincronizarse.</p>

<p>Ejemplo:</p>

<ul>
<li><strong>máquinas sistólicas</strong></li>
</ul>

<p>Un nodo puede ejecutar algo como:</p>

<pre>
leer datos
multiplicar
sumar
enviar resultado
</pre>

<p>Son <strong>varias instrucciones</strong>, no solo una.</p>

<hr>

<h2>3️⃣ Grano grueso (grano grande)</h2>

<p>Cada procesador ejecuta <strong>programas casi independientes</strong>.</p>

<p>Ejemplo:</p>

<pre>
procesador 1 → procesa archivo A
procesador 2 → procesa archivo B
procesador 3 → procesa archivo C
</pre>

<p>Se comunican <strong>muy pocas veces</strong>.</p>

<p>Este tipo aparece en:</p>

<ul>
<li>clusters</li>
<li>servidores distribuidos</li>
<li>sistemas paralelos grandes</li>
</ul>

<hr>

<h1>4. Comparación rápida</h1>

<table>
<tr>
<th>Tipo</th>
<th>Trabajo por procesador</th>
<th>Sincronización</th>
</tr>

<tr>
<td>Grano fino</td>
<td>muy pequeño (1 operación)</td>
<td>muy frecuente</td>
</tr>

<tr>
<td>Grano mediano</td>
<td>pequeño programa</td>
<td>moderada</td>
</tr>

<tr>
<td>Grano grueso</td>
<td>programa grande</td>
<td>poco frecuente</td>
</tr>

</table>

<hr>

<h1>5. Idea clave</h1>

<p>
La granularidad define <strong>cuánto trabajo hace cada procesador antes de comunicarse con los demás</strong>.
</p>

<hr>

<h1>2. Modelo de procesos cooperativos</h1>

<p>El modelo descrito se llama <strong>procesos cooperativos</strong>.</p>

<p>En este modelo:</p>

<ul>
<li>Cada procesador ejecuta un <strong>proceso</strong></li>
<li>Un proceso es un <strong>programa secuencial normal</strong></li>
</ul>

<p>Ejemplo:</p>

<pre>
Procesador 1 → proceso A
Procesador 2 → proceso B
Procesador 3 → proceso C
</pre>

<p>Cada proceso puede ser diferente.</p>

<hr>

<h1>3. Memoria compartida</h1>

<p>Todos los procesadores comparten una <strong>memoria global</strong>.</p>

<pre>
        Memoria compartida
       ┌─────────────────┐
P1 ────┤                 │
P2 ────┤     datos       │
P3 ────┤                 │
       └─────────────────┘
</pre>

<p>Esto significa que todos los procesos pueden:</p>

<ul>
<li>Leer datos</li>
<li>Escribir datos</li>
</ul>

<hr>

<h1>4. No hay sincronización automática</h1>

<p>El sistema <strong>no coordina automáticamente</strong> a los procesos.</p>

<p>Esto puede causar problemas como:</p>

<ul>
<li>Leer datos antes de que otro proceso los escriba</li>
<li>Modificar datos al mismo tiempo</li>
</ul>

<p>Por eso se necesita <strong>sincronización explícita</strong>.</p>

<hr>

<h1>5. Sincronización con semáforos</h1>

<p>La sincronización se realiza usando <strong>semáforos</strong>.</p>

<p>Un semáforo es una variable especial usada para coordinar procesos.</p>

<table>
<tr>
<th>Operación</th>
<th>Significado</th>
</tr>

<tr>
<td>P (wait / espera)</td>
<td>El proceso espera hasta poder continuar</td>
</tr>

<tr>
<td>V (signal / señal)</td>
<td>El proceso avisa que una operación terminó</td>
</tr>

</table>

<hr>

<h1>6. Operación espera (P)</h1>

<p>Cuando un proceso ejecuta:</p>

<pre>wait(sem)</pre>

<p>Pueden ocurrir dos situaciones:</p>

<h3>Caso 1: No hay señal</h3>

<p>El proceso queda <strong>bloqueado</strong> esperando.</p>

<pre>
Proceso detenido
Esperando señal
</pre>

<h3>Caso 2: Ya hubo señal</h3>

<p>El proceso continúa inmediatamente.</p>

<p>Esto ocurre porque <strong>las señales tienen memoria</strong>.</p>

<hr>

<h1>7. Operación señal (V)</h1>

<p>Cuando un proceso ejecuta:</p>

<pre>signal(sem)</pre>

<p>Se desbloquea un proceso que estaba esperando.</p>

<pre>
Proceso A → signal
Proceso B → estaba esperando
</pre>

<p>Entonces el proceso B puede continuar.</p>

<hr>

 
 
    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 <h1>8. Ejemplo sencillo</h1>

<h3>Proceso 1</h3>

<pre>
calcular datos
signal(listo)
</pre>

<h3>Proceso 2</h3>

<pre>
wait(listo)
usar datos
</pre>

<p>El proceso 2 espera hasta que el proceso 1 termine.</p>

<hr>

<h1>9. Idea general del modelo</h1>

<p>En el modelo de <strong>procesos cooperativos</strong>:</p>

<ul>
<li>Cada procesador ejecuta su propio programa</li>
<li>Los procesos comparten memoria</li>
<li>No existe sincronización automática</li>
<li>La coordinación se realiza mediante <strong>semáforos</strong></li>
</ul>

<p><strong>Resumen:</strong>  
El modelo de procesos cooperativos es un sistema MIMD asíncrono donde cada procesador ejecuta su propio programa y la sincronización entre procesos se realiza explícitamente mediante semáforos.</p>
 
    <hr>

    <h1>13.5.1 Memoria compartida físicamente</h1>

<p>En esta arquitectura:</p>
<ul>
<li>Todos los procesadores <b>comparten una misma memoria física</b>.</li>
<li>Cualquier procesador puede <b>leer o escribir datos directamente</b>.</li>
</ul>

<p>Esto hace que <b>programar sea más fácil</b>, pero tiene <b>problemas cuando el sistema crece mucho</b>.</p>

<div class="section">
<h2>1. Ventaja: programación más sencilla</h2>

<p>Este modelo es conveniente para programar porque el programador solo necesita:</p>

<ol>
<li>Dividir el programa en <b>procesos independientes</b>.</li>
<li>Todos los procesos trabajan sobre <b>las mismas estructuras de datos</b>.</li>
</ol>

<p>Las estructuras de datos se almacenan en la <b>memoria compartida</b>.</p>

<pre>
Memoria compartida
     datos

P1 → usa datos
P2 → usa datos
P3 → usa datos
</pre>

<p>No es necesario enviar mensajes entre procesadores.</p>
</div>

<div class="section">
<h2>2. Problema: no escala bien</h2>

<p>Cuando se agregan muchos procesadores todos intentan acceder a la misma memoria.</p>

<ul>
<li>Muchos procesadores intentan acceder al <b>mismo canal de memoria</b>.</li>
<li>Solo uno puede usarlo a la vez.</li>
</ul>

<p>Esto genera <b>contención de memoria</b> o <b>cuello de botella</b>.</p>

<pre>
P1 ─┐
P2 ─┼─→ Memoria compartida
P3 ─┤
P4 ─┘
</pre>

<p>Si hay demasiados procesadores:</p>

<ul>
<li>Algunos deben <b>esperar</b>.</li>
<li>Quedan <b>inactivos</b>.</li>
</ul>

<p>Por eso este modelo funciona bien solo con <b>unas pocas decenas de procesadores</b>.</p>
</div>

<div class="section">
<h2>3. Solución parcial: memoria caché</h2>

<p>Para reducir el problema se usan <b>memorias caché en cada procesador</b>.</p>

<p>La caché es una memoria pequeña y rápida que guarda datos usados frecuentemente.</p>

<p>El procesador:</p>

<ol>
<li>Primero busca el dato en su <b>caché</b>.</li>
<li>Si no está ahí, accede a la <b>memoria compartida</b>.</li>
</ol>

<p>Esto reduce:</p>

<ul>
<li>Accesos a memoria principal.</li>
<li>Congestión del canal de memoria.</li>
</ul>

<p>Sin embargo, no elimina completamente el problema.</p>
</div>

<div class="section">
<h2>4. Problema nuevo: coherencia de caché</h2>

<p>Cuando cada procesador tiene caché aparece el problema de <b>coherencia de caché</b>.</p>

<p>Esto ocurre cuando:</p>

<ol>
<li>Un procesador modifica un dato.</li>
<li>Ese dato también existe en la caché de otro procesador.</li>
</ol>

<p>Ejemplo:</p>

<pre>
Memoria: X = 10

Cache P1 → X = 10
Cache P2 → X = 10
</pre>

<p>Si P1 cambia el valor:</p>

<pre>
X = 20
</pre>

<p>La caché de P2 todavía podría tener:</p>

<pre>
X = 10
</pre>

<p>Esto genera <b>inconsistencias</b>.</p>
</div>

<div class="section">
<h2>5. Cómo se soluciona: protocolos de coherencia</h2>

<p>Se utilizan <b>protocolos de coherencia de caché</b>, por ejemplo:</p>

<ul>
<li>Invalidar cachés.</li>
<li>Actualizar copias.</li>
</ul>

<p>Así todos los procesadores ven <b>el mismo valor correcto</b>.</p>
</div>

<div class="section">
<h2>6. Tipos de escritura en caché</h2>

<h3>Write-through (almacenamiento directo)</h3>

<ul>
<li>Se actualiza la <b>caché</b>.</li>
<li>Se actualiza también <b>la memoria principal inmediatamente</b>.</li>
</ul>

<pre>
Cache → Memoria principal
</pre>

<p><b>Ventaja:</b> memoria siempre actualizada.</p>
<p><b>Desventaja:</b> más tráfico de memoria.</p>

<h3>Write-back (retroalmacenamiento)</h3>

<ul>
<li>El dato se actualiza <b>solo en la caché</b>.</li>
<li>La memoria principal se actualiza <b>más tarde</b>.</li>
</ul>

<p>Solo se escribe en memoria cuando esa posición de caché se necesita para otro dato.</p>

<p><b>Ventaja:</b> menos accesos a memoria.</p>
<p><b>Desventaja:</b> coherencia más compleja.</p>

</div>

<div class="section">
<h2>Idea principal</h2>

<p>
La <b>memoria físicamente compartida</b> facilita la programación porque todos los
procesadores acceden a los mismos datos. Sin embargo, cuando el número de
procesadores aumenta, muchos compiten por la memoria y se produce un
<b>cuello de botella</b>. Las <b>memorias caché</b> ayudan a reducir este problema,
pero introducen el desafío de mantener la <b>coherencia de caché</b>.
</p>

</div>

<h1>Memoria físicamente distribuida y lógicamente compartida</h1>

<p>Este modelo de memoria significa <strong>dos cosas al mismo tiempo</strong>.</p>

<h2>1️⃣ Físicamente distribuida</h2>

<p>La memoria <strong>no está en un solo lugar</strong>. Cada procesador tiene su propia memoria local.</p>

<div class="ejemplo">
<strong>Ejemplo:</strong><br>
Procesador 1 → Memoria 1<br>
Procesador 2 → Memoria 2<br>
Procesador 3 → Memoria 3
</div>

<hr>

<h2>2️⃣ Lógicamente compartida</h2>

<p>Aunque la memoria esté separada físicamente, <strong>todos los procesadores pueden acceder a ella</strong>.</p>

<ul>
<li>Un procesador <strong>sí puede acceder a la memoria de otro</strong>.</li>
<li>El sistema hace que <strong>parezca una memoria compartida</strong>.</li>
</ul>

<div class="ejemplo">
<strong>Ejemplo:</strong><br>
P1 puede acceder a Memoria1, Memoria2 y Memoria3<br>
P2 puede acceder a Memoria1, Memoria2 y Memoria3
</div>

<hr>

<div class="box">
<strong>Conclusión:</strong><br>
En la <strong>memoria físicamente distribuida y lógicamente compartida</strong>, cada procesador tiene su propia memoria local (distribuida físicamente), pero los demás procesadores pueden acceder a ella, por lo que el sistema se comporta como si la memoria fuera compartida.
</div>


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
