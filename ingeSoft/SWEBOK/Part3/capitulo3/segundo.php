 
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
    height: 230vh;
    }



    
/* CONTENEDOR PRINCIPAL */
.tree{
    display:flex;
    flex-direction:column;
    align-items:center;
}

/* FILAS */
.row{
    display:flex;
    gap:25px;
    margin-top:40px;
}

/* CAJAS */
.box{
    background:white;
    border:2px solid #333;
    border-radius:8px;
    padding:12px 16px;
    width:240px;
    box-shadow:0 4px 8px rgba(0,0,0,0.1);
}

.box h3{
    text-align:center;
    margin:0 0 10px 0;
    font-size:15px;
}

.box ul{
    padding-left:18px;
    margin:0;
    font-size:13px;
}

/* LINEAS CONECTORAS */
.connector{
    width:2px;
    height:30px;
    background:#333;
}

.horizontal{
    height:2px;
    width:85%;
    background:#333;
    margin-top:30px;
}

/* TITULO */
.caption{
    margin-top:40px;
    font-weight:bold;
    font-size:16px;
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
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 
<h2>2. Software Design Processes</h2>
<p>[4* c3] [21* c2, c7] [10]</p>

<p>
El <strong>software design</strong> se considera generalmente un proceso o actividad de múltiples etapas. El <strong>software design</strong> puede dividirse en las siguientes etapas o fases. Cuando es necesario, distinguimos la fase de la actividad general:
</p>

<ul>
  <li><strong>Diseño arquitectónico</strong></li>
  <li><strong>Diseño de alto nivel</strong></li>
  <li><strong>Diseño detallado</strong></li>
</ul>

<p>
La <strong>fase de diseño arquitectónico</strong>  aborda los fundamentos del sistema como un todo y en relación con su entorno (véase <strong>Software Architecture KA</strong>).
</p>

<p>
La <strong>fase diseño de alto nivel</strong> está orientada hacia el exterior (<strong>outward-facing</strong>)—desarrollando la estructura y organización de nivel superior del software, identificando sus diversos componentes y cómo ese sistema de software y sus componentes interactúan con el entorno y sus elementos.
</p>

<p>
La <strong>fase de diseño detallado</strong> está orientada hacia el interior (<strong>inward-facing</strong>)—especificando cada componente con suficiente detalle para facilitar su construcción y cumplir con sus obligaciones externas, incluyendo cómo los componentes de software se refinan aún más en módulos y unidades.
</p>

<p>
Cada etapa refleja el patrón básico descrito en la sección <strong>1.1 Design Thinking</strong>.
</p>

<p>
No todas las etapas se encuentran en todos los procesos de software. Sin embargo, cuando están presentes, cada etapa crea una obligación sobre la siguiente etapa con respecto al software que está <strong>under development</strong>.
</p>

<p>
Aunque los desarrolladores de software generalmente siguen directrices similares sobre lo que ocurre en cada etapa, no existen límites estrictos entre las etapas en cuanto a qué debe hacerse y cuándo. Por ejemplo, para muchos sistemas de software, la elección de un algoritmo para ordenar datos se diferirá a los programadores, dentro de las restricciones y la guía proporcionadas por los <strong>system’s requirements</strong>, su <strong>architecture description</strong> o las <strong>design specifications</strong>. Sin embargo, para otro sistema de software, la existencia de un algoritmo adecuado podría ser arquitectónicamente significativa y debe determinarse temprano en el <strong>life cycle</strong>. Sin ese algoritmo, no existe posibilidad de construir el software para cumplir con sus requisitos.
</p>

<p>
Algunas reglas empíricas (<strong>rules of thumb</strong>) para cada etapa incluyen las siguientes:
</p>

<ul>
  <li>
    La <strong>architectural design stage</strong> define un <strong>computational model</strong>, los principales <strong>computational elements</strong> y los protocolos y relaciones importantes entre ellos. Esta etapa desarrolla estrategias para abordar <strong>crosscutting concerns</strong>, tales como <strong>performance</strong>, <strong>reliability</strong>, <strong>security</strong> y <strong>safety</strong>, y la articulación de decisiones transversales, incluyendo <strong>system-wide styles</strong> (por ejemplo, un estilo <strong>transactional n-tier</strong> frente a un estilo <strong>pipes and filters</strong>, junto con la justificación de dichas decisiones).
  </li>

  <li>
    La <strong>high-level design stage</strong> incluye la identificación de los principales <strong>computational elements</strong> y las relaciones significativas entre ellos, con un enfoque en la existencia, el rol y las interfaces de cada componente principal. Dicha definición debe ser lo suficientemente detallada como para permitir que los diseñadores o programadores de componentes clientes accedan correcta y eficientemente a las capacidades de cada servicio—sin tener que leer su código.
  </li>

  <li>
    La <strong>detailed design stage</strong> define la estructura interna de cada módulo, enfocándose en detallar y justificar las elecciones de algoritmos, el acceso a datos y la representación de datos. Las <strong>detailed design specifications</strong> deben ser suficientes para permitir que los programadores codifiquen cada módulo durante la construcción (véase <strong>Software Construction KA</strong>). El código es una representación de la solución que es lo suficientemente detallada y completa como para que un compilador (o intérprete) pueda ejecutarla.
  </li>
</ul>

<h3>2.1. High-Level Design</h3>
<p>[3* c5] [4* c6] [10]</p>

<p>
El <strong>high-level design</strong> especifica la interacción de los componentes principales de un sistema entre sí y con el entorno, incluidos usuarios, dispositivos y otros sistemas. El <strong>high-level design</strong> aborda lo siguiente:
</p>

<ul>
  <li>
    <strong>External events</strong> y mensajes a los cuales el sistema debe responder
  </li>
  <li>
    Eventos y mensajes que el sistema debe producir
  </li>
  <li>
    Especificación de los formatos de datos y protocolos para eventos y mensajes
  </li>
  <li>
    Especificación del orden y las relaciones temporales (<strong>ordering and timing relationships</strong>) entre eventos y mensajes de entrada, y eventos y mensajes de salida
  </li>
  <li>
    Trazado y análisis de <strong>end-to-end transactions</strong> y <strong>event threads</strong>
  </li>
  <li>
    <strong>Data persistence</strong> (cómo se almacenan y gestionan los datos)
  </li>
</ul>

<p>
El <strong>high-level design</strong> se lleva a cabo dentro del marco establecido por la <strong>software architecture</strong> del sistema (si existe). Cada uno de los elementos anteriores puede estar guiado o restringido por directrices arquitectónicas. Por ejemplo, la señalización de eventos y la mensajería utilizarán los protocolos y modos de interacción establecidos por la arquitectura. Los formatos de datos y los protocolos utilizarán estándares de datos y comunicación especificados por la arquitectura. En ausencia de una <strong>explicit architecture design stage</strong>, algunas de estas directrices serán establecidas por los <strong>software requirements</strong> o decididas durante el <strong>high-level design</strong>.
</p>

<h3>2.2. Detailed Design</h3>
<p>[10]</p>

<p>
La <strong>detailed design stage</strong> procede dentro de las restricciones establecidas por el <strong>high-level design</strong>. Especifica las características internas de los principales componentes del sistema, los módulos internos y sus interconexiones con otros módulos, los servicios y procesos que proporcionan, las propiedades de cómputo, los algoritmos y las reglas de acceso a datos y las estructuras de datos. Esto incluye lo siguiente:
</p>

<ul>
  <li>
    Refinamiento de los principales componentes del sistema en módulos o <strong>program units</strong>, incluyendo oportunidades para el uso de <strong>off-the-shelf components</strong> y <strong>application frameworks</strong>
  </li>
  <li>
    Asignación de responsabilidades de diseño a módulos y <strong>program units</strong>
  </li>
  <li>
    Interacciones entre módulos
  </li>
  <li>
    Alcance y visibilidad (<strong>scope and visibility</strong>) entre componentes, módulos y <strong>program units</strong>
  </li>
  <li>
    <strong>Component modes</strong>, <strong>component states</strong> y transiciones entre ellos
  </li>
  <li>
    Interdependencias de datos y control
  </li>
  <li>
    Organización, empaquetado e implementación de datos
  </li>
  <li>
    <strong>User interfaces</strong>
  </li>
  <li>
    Algoritmos y estructuras de datos requeridos
  </li>
</ul>
 
    </form>
</div>




<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

  <h2>3. Software Design Qualities</h2>
<p>[4* c4] [20]</p>

<p>
Los <strong>software requirements</strong> y las directrices de <strong>architecture</strong> están destinadas a guiar el software hacia ciertas características o <strong>design qualities</strong>.
</p>

<p>
Las <strong>design qualities</strong> son una subclase importante de las <strong>concerns</strong> (véase el tema <strong>Stakeholders and Concerns</strong> en <strong>Software Architecture KA</strong>). Uno de los roles de los <strong>design principles</strong> (véase la sección <strong>1.4 Software Design Principles</strong>) es ayudar al software a alcanzar estas cualidades. Entre las características de interés para los diseñadores se encuentran las siguientes:
</p>

<h3>3.1. Concurrency</h3>
<p>[21* c17]</p>

<p>
El diseño para <strong>concurrency</strong> se ocupa de cómo el software se refina en unidades concurrentes tales como <strong>processes</strong>, <strong>tasks</strong> y <strong>threads</strong>, y de las consecuencias de esas decisiones con respecto a <strong>efficiency</strong>, <strong>atomicity</strong>, <strong>synchronization</strong> y <strong>scheduling</strong>.
</p>

<h3>3.2. Control and Event Handling</h3>
<p>[21* c21]</p>

<p>
El <strong>event handling</strong> se ocupa de cómo organizar el <strong>control flow</strong>, así como de cómo manejar eventos reactivos y temporales mediante diversos mecanismos, incluyendo <strong>synchronization</strong>, <strong>implicit invocation</strong> y <strong>callbacks</strong>.
</p>

<h3>3.3. Data Persistence</h3>
<p>[21* c6, c16]</p>

<p>
La <strong>data persistence</strong> se ocupa del almacenamiento y la gestión de los datos a lo largo de todo el sistema.
</p>

<h3>3.4. Distribution of Components</h3>
<p>[21* c17]</p>

<p>
La <strong>distribution</strong> se ocupa de cómo los componentes de software se distribuyen a través del hardware (incluidos computadores, redes y otros dispositivos) y de cómo esos componentes se comunican cumpliendo expectativas de <strong>performance</strong>, <strong>reliability</strong>, <strong>scalability</strong>, <strong>availability</strong>, <strong>monitorability</strong>, <strong>business continuity</strong> y otras.
</p>

<h3>3.5. Errors and Exception Handling, Fault Tolerance</h3>
<p>[21* c11]</p>

<p>
Esta <strong>concern</strong> se refiere a cómo prevenir, evitar, mitigar, tolerar y procesar errores y condiciones excepcionales.
</p>

<h3>3.6. Integration and Interoperability</h3>
<p>[4* c11, c14, c16]</p>

<p>
Este problema surge a nivel de empresa o de <strong>system-of-systems</strong>, o en cualquier software complejo cuando sistemas o aplicaciones heterogéneos necesitan interoperar mediante el intercambio de datos o el acceso a los servicios de otros. Dentro de un sistema de software, el problema surge cuando los componentes se diseñan utilizando diferentes <strong>frameworks</strong>, <strong>libraries</strong> o <strong>protocols</strong>.
</p>

<h3>3.7. Assurance, Security, and Safety</h3>
<p>[21* c10–c14]</p>

<p>
El <strong>high assurance</strong> abarca una serie de cualidades del software, incluidas las preocupaciones de <strong>security</strong> y <strong>safety</strong>, relacionadas con si el software se comporta como se espera en situaciones críticas, tales como frente a <strong>hazards</strong>. La <strong>security</strong> se convierte en una preocupación clave para aplicaciones distribuidas donde los componentes se comunican utilizando diferentes <strong>protocols</strong> y <strong>media</strong>.
</p>

<p>
El diseño para <strong>security</strong> se ocupa de cómo prevenir la divulgación, creación, modificación, eliminación o denegación de acceso no autorizadas a la información y otros recursos frente a ataques al sistema o violaciones de las políticas del sistema, con el fin de limitar el daño; proporcionar <strong>continuity of service</strong>; y asistir en la reparación y recuperación. El diseño para <strong>safety</strong> se refiere a gestionar el comportamiento del software en circunstancias que podrían conducir a daño o pérdida de vidas humanas o a daños a la propiedad o al medio ambiente.
</p>

<h3>3.8. Variability</h3>
<p>[6]</p>

<p>
La <strong>variability</strong> se ocupa de las variaciones permisibles en un sistema de software. Es un aspecto fundamental de la mayoría del software [6]. Es la capacidad de crear variantes de sistemas de software para diferentes segmentos de mercado o contextos de uso.
</p>

<p>
El interés en la <strong>variability</strong> surgió inicialmente en <strong>software product lines</strong> y <strong>system families</strong>, para acomodar y gestionar el despliegue de múltiples variantes, tales como para diferentes organizaciones o mercados. (Véase el apéndice B 6, <strong>Standards for product line, methods and tools</strong>). También es relevante para <strong>software ecosystems</strong> y <strong>context-aware software</strong>. (Véase también <strong>3.5 Reuse in Construction</strong>, <strong>Software Construction KA</strong>.)
</p>

<p>
Los <strong>feature models</strong> se utilizan para recopilar <strong>requirements</strong> y dependencias en paquetes. (Véase <strong>Feature-Driven Development</strong>, bajo el tema <strong>4.1 Agile Methods</strong> en <strong>Software Engineering Models and Methods KA</strong>.)
</p>


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
