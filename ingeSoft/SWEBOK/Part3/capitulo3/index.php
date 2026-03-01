 
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
    height: 265vh;
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
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h5>INTRODUCTION</h5>

<p>
Este capítulo considera el <strong>software design</strong> desde varias perspectivas—enfocándose en conceptos básicos, contexto y procesos, cualidades y estrategias del <strong>software design</strong>, y en el registro y la evaluación de diseños.
</p>

<p>
El término <strong>design</strong> se utiliza de maneras distintas pero estrechamente relacionadas para referirse a: (1) la disciplina (“uso de principios científicos, información técnica e imaginación en la definición de un sistema de software para realizar funciones [prespecified] con máxima economía y eficiencia”) [11]; (2) los procesos para desempeñarse dentro de esa disciplina; (3) el resultado de aplicar esa disciplina; y (4) la etapa en el <strong>life cycle</strong> de un sistema de software durante la cual esos procesos producen esos resultados.
</p>

<p>
Una <strong>software design description (SDD)</strong> documenta el resultado del <strong>software design</strong>. Es una “representación del software creada para facilitar el análisis, la planificación, la implementación y la toma de decisiones. La <strong>software design description</strong> se utiliza como un medio para comunicar información de <strong>software design</strong> y puede considerarse como un plano o modelo del sistema” [11].
</p>

<p>
La <strong>SDD</strong>, que puede adoptar muchas formas, abarca el refinamiento de ese software en componentes, la organización de esos componentes y la definición de interfaces entre ellos y entre el software y el mundo exterior—hasta un nivel de detalle que permite su construcción.
</p>

<p>
El <strong>software design</strong>, visto como una actividad del <strong>life cycle</strong>, es la aplicación de la disciplina de <strong>software engineering</strong> en la cual los <strong>software requirements</strong> se analizan para definir las características externas y la estructura interna del software como base para la construcción del software.
</p>

<p>
El <strong>software design</strong> tiene lugar en tres etapas:
</p>

<ul>
  <li><strong>architectural design</strong> del sistema de software</li>
  <li>diseño de alto nivel o <strong>external-facing design</strong> del sistema y sus componentes</li>
  <li>diseño detallado o <strong>internal-facing design</strong></li>
</ul>

<p>
El <strong>architectural design</strong> es una parte de <strong>architecting</strong>, tratado en el <strong>Software Architecture KA</strong>.
</p>


<div class="tree">

    <!-- Nodo raíz -->
    <div class="box" style="width:300px; text-align:center;">
        <h3>Software Design</h3>
    </div>

    <div class="connector"></div>
    <div class="horizontal"></div>

    <!-- Subcategorías -->
    <div class="row">

        <div class="box">
            <h3>Software Design Fundamentals</h3>
            <ul>
                <li>Design Thinking</li>
                <li>Context of Software Design</li>
                <li>Key Issues</li>
                <li>Principles</li>
            </ul>
        </div>

        <div class="box">
            <h3>Software Design Process</h3>
            <ul>
                <li>High-Level Design</li>
                <li>Detailed Design</li>
            </ul>
        </div>

        <div class="box">
            <h3>Software Design Qualities</h3>
            <ul>
                <li>Concurrency</li>
                <li>Control and Event Handling</li>
                <li>Data Persistence</li>
                <li>Distribution of Components</li>
                <li>Errors and Exception Handling, Fault Tolerance</li>
                <li>Integration and Interoperability</li>
                <li>Assurance, Security, and Safety</li>
                <li>Variability</li>
            </ul>
        </div>

        <div class="box">
            <h3>Recording Software Design</h3>
            <ul>
                <li>Model-Based Design</li>
                <li>Structural</li>
                <li>Behavioral</li>
                <li>Patterns</li>
            </ul>
        </div>

        <div class="box">
            <h3>Strategies and Methods</h3>
            <ul>
                <li>General Strategies</li>
                <li>Function-Oriented (or Structured) Design</li>
                <li>Data-Centered Design </li>
                <li>Object-Oriented Design </li>
                <li>User-Centered Design </li>
                <li>Component-Based Design (CBD)</li>
                <li>Event-Driven Design</li>
                <li>Aspect-Oriented Design (AOD)</li>
                <li>Constraint-Based Design</li>
                <li>Domain-Driven Design </li>
                <li>Other Methods</li>
            </ul>
        </div>

        <div class="box">
            <h3>Software Design Quality Analysis and Evaluation</h3>
            <ul>
                <li> Design Reviews and Audits</li>
                <li>Quality Attributes</li>
                <li>Quality Analysis and Evaluation Techniques</li>
                <li>Measures and Metrics</li>
                <li>Verification, Validation, and Certification</li>
            </ul>
        </div>

    </div>

    <div class="caption">
        Figure 3.1 — Breakdown of topics for the Software Design KA
    </div>
</div>

<h2>1. Software Design Fundamentals [3*][4*]</h2>

<p>
Los conceptos, nociones y terminología introducidos aquí forman una base para comprender el rol y el alcance del <strong>software design</strong>.
</p>

<h3>1.1. Design Thinking [3* c1, c2, c3]</h3>
<p>[4* c1, c2] [20]</p>

<p>
El <strong>design</strong> está en todas partes, en las cosas y organizaciones que han sido creadas para satisfacer una necesidad o resolver un problema.
</p>

<p>
En un sentido general, el <strong>design</strong> puede verse como una forma de <strong>problem-solving</strong>. Por ejemplo, el concepto de un <strong>wicked problem</strong>—un problema sin una solución definitiva—es interesante en términos de comprender los límites del <strong>design</strong>. Muchas otras nociones y conceptos nos ayudan a entender el <strong>design</strong> en su sentido general: objetivos, restricciones, alternativas, representaciones y soluciones. (Véase también <strong>Design as a Problem-Solving Activity</strong> en <strong>Engineering Foundations KA</strong>.)
</p>

<p>
El <strong>design thinking</strong> comprende dos elementos esenciales: (1) comprender la necesidad o el problema y (2) idear una solución. Ross, Goodenough e Irvine ofrecen una elaboración del <strong>design thinking</strong> apropiada para el software:
</p>

<p>
Este proceso consta de cinco pasos básicos: (1) cristalizar un propósito u objetivo; (2) formular un concepto sobre cómo puede lograrse el propósito; (3) idear un mecanismo que implemente la estructura conceptual; (4) introducir una notación para expresar las capacidades del mecanismo e invocar su uso; (5) describir el uso de la notación en un contexto específico del problema para invocar el mecanismo de modo que se alcance el propósito. [20]
</p>

<p>
Esto es particularmente apropiado porque gran parte del <strong>software design</strong> consiste en crear el vocabulario necesario para expresar un problema, expresar su solución e implementar dicha solución. Los pasos enfatizan la naturaleza lingüística de la resolución de problemas en <strong>software design</strong>. Este es un patrón recurrente que se observa a lo largo del <strong>high-level design</strong>, el <strong>detailed design</strong> y el <strong>architecting</strong> (véase <strong>Architecting in the Large</strong> en <strong>Software Architecture KA</strong>). Por lo tanto, el <strong>Software Design</strong> es un proceso práctico de transformar un enunciado del problema en un enunciado de la solución. El <strong>software design</strong> comparte similitudes con otros tipos de <strong>design</strong>. El <strong>design</strong> puede entenderse más a fondo mediante la <strong>design theory</strong> [8].
</p>

<h3>1.2. Context of Software Design [4* c13, c14]</h3>
<p>[21* c19, c20]</p>

<p>
El <strong>software design</strong> es una parte importante del proceso de <strong>software development</strong>. Comprender el rol del <strong>software design</strong> implica ver cómo encaja dentro del <strong>software development life cycle</strong> (véase <strong>Software Process KA</strong>). Para comprender ese contexto, es importante entender las principales características y roles de <strong>software requirements</strong>, <strong>software construction</strong>, <strong>software testing</strong> y <strong>software maintenance</strong>. El contexto varía según muchos factores, incluido el grado de formalidad y la etapa del <strong>life cycle</strong>.
</p>

<p>
El <strong>software design</strong> es la transformación de los requisitos, necesidades y preocupaciones del cliente y de otros interesados en especificaciones de diseño implementables. Sus contextos incluyen los siguientes:
</p>

<ul>
  <li>
    La relación del <strong>Software Design</strong> con <strong>software requirements</strong>: los requisitos establecen un conjunto de problemas que el <strong>software design</strong> debe resolver.
  </li>
  <li>
    La relación del <strong>Software Design</strong> con <strong>software architecture</strong>: en los casos en que se ha establecido una arquitectura, dicha arquitectura restringe el diseño al capturar aspectos fundamentales del sistema, tales como sus componentes principales y sus interconexiones, <strong>application programming interfaces (APIs)</strong>, estilos y patrones que deben utilizarse, y principios arquitectónicos que deben observarse y aplicarse.
  </li>
  <li>
    La relación del <strong>Software Design</strong> con <strong>software construction</strong>: el <strong>software design</strong> debe proporcionar una guía a los implementadores sobre cómo construir el sistema.
  </li>
  <li>
    La relación del <strong>Software Design</strong> con <strong>software testing</strong>: el <strong>software design</strong> proporciona una base para una estrategia general de pruebas y para los <strong>test cases</strong> que aseguran que el diseño se implemente correctamente y funcione según lo previsto.
  </li>
</ul>

 

 
    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

    <h3>1.3. Key Issues in Software Design [2, 12]</h3>

<p>
Muchos problemas clave deben abordarse al diseñar software. Algunos son preocupaciones de calidad que todo software debe atender (<strong>performance</strong>, <strong>security</strong>, <strong>reliability</strong>, <strong>usability</strong>, <strong>maintainability</strong>, etc.). Otro problema importante es cómo refinar, organizar, interconectar y empaquetar los componentes de software. Estos problemas son tan fundamentales que todos los enfoques de diseño los abordan de una u otra manera. (Véase el tema <strong>Stakeholders and Concerns</strong> en <strong>Software Architecture KA</strong>, la sección <strong>1.4 Software Design Principles</strong> y el tema <strong>5 Software Design Strategies and Methods</strong>.)
</p>

<p>
En contraste, otros problemas “tratan algún aspecto del comportamiento del software que no está en el <strong>application domain</strong>, sino que aborda algunos de los <strong>supporting domains</strong>” [2]. Tales problemas, que a menudo atraviesan transversalmente la funcionalidad del sistema, se denominan <strong>aspects</strong>, los cuales “tienden a no ser unidades de la descomposición funcional del software, sino propiedades que afectan el <strong>performance</strong> o la semántica de los componentes de manera sistémica” [12].
</p>

    <h3>1.4. Software Design Principles [5, 10, 17, 20]</h3>

<p>
Un principio es “una verdad fundamental o proposición que sirve como fundamento para un sistema de creencias o comportamientos o para una cadena de razonamiento” [Oxford English Dictionary].
</p>

<p>
Los <strong>design principles</strong> proporcionan dirección u orientación para la toma de decisiones durante el diseño. Algunos principios se originaron en los primeros días de la <strong>software engineering</strong>, otros incluso preceden a la disciplina, derivando de buenas prácticas en ingeniería no relacionadas con el software. (Véase <strong>Engineering Foundations KA</strong>.) La toma de decisiones también puede ser asistida por métodos cuantitativos, como los discutidos en <strong>Software Engineering Economics KA</strong>. Los <strong>software design principles</strong> son nociones clave que proporcionan la base para muchos conceptos, enfoques y métodos de <strong>software design</strong>. Los principios listados a continuación se aplican a cualquiera de las tres etapas del diseño.
</p>

<p>
Muchos de estos principios están interrelacionados. Ya sea de forma individual o utilizados en combinación con otros principios, se reflejan en otras partes del <strong>software design</strong> para producir muchos de los conceptos y constructos que se encuentran en la captura del diseño, las estrategias y los métodos. Esto es, en sí mismo, una aplicación del proceso de <strong>design thinking</strong> descrito anteriormente. Los <strong>software design principles</strong> incluyen los siguientes:
</p>

<ul>
  <li>
    <strong>Abstraction</strong> es “una vista de un objeto que se enfoca en la información relevante para un propósito particular e ignora el resto de la información” [11]. “El principio de abstracción . . . ayuda a identificar propiedades esenciales comunes a entidades superficialmente diferentes” [20]. (Véase también el tema <strong>Abstraction</strong> en <strong>Computing Foundations KA</strong>.)
  </li>

  <li>
    <strong>Separation of concerns (SoC)</strong>. Una <strong>design concern</strong> es un “área de interés con respecto a un <strong>software design</strong>” [11] que es relevante para uno o más de sus <strong>stakeholders</strong>. Al identificar y separar las preocupaciones, el diseñador puede enfocarse en cada preocupación del sistema de forma aislada, sobre lo cual Dijkstra afirmó que “incluso si no es perfectamente posible, [SoC] es aun así la única técnica disponible para un ordenamiento efectivo de los pensamientos” [5]. (Véase también el tema <strong>Stakeholders and Concerns</strong> en <strong>Software Architecture KA</strong>.)
  </li>

  <li>
    <strong>Modularization</strong> (o <strong>refinement</strong> o <strong>decomposition</strong>) estructura software de gran tamaño como compuesto por componentes o unidades más pequeñas. Cada componente es nombrado y tiene interfaces bien definidas para sus interacciones con otros componentes. Los componentes más pequeños son más fáciles de entender y, por lo tanto, de mantener. Existen numerosas estrategias de <strong>modularization</strong>. (Véase el tema <strong>5 Software Design Strategies and Methods</strong>.)
  </li>
</ul>

<p>
Tradicionalmente, el objetivo es ubicar funcionalidades y responsabilidades distintas en diferentes componentes. David Parnas defendió que cada módulo en un sistema debería tener una única responsabilidad [17]. Una forma de pensar la <strong>modularization</strong> es como un caso especial de estrategias más generales, como <strong>separation of concerns</strong> o <strong>divide and conquer</strong>. (Véase el tema <strong>Problem-Solving Techniques</strong> en <strong>Computing Foundations</strong>.)
</p>

<ul>
  <li>
    <strong>Encapsulation</strong> (o <strong>information hiding</strong>) se basa en los principios de <strong>abstraction</strong> y <strong>modularization</strong> de modo que la información no esencial sea menos accesible, permitiendo a los usuarios del módulo enfocarse en los elementos esenciales de la interfaz.
  </li>

  <li>
    <strong>Separation of interface and implementation</strong> es una aplicación de la <strong>encapsulation</strong> que implica definir un componente especificando sus interfaces públicas, las cuales son conocidas y accesibles para los clientes; aislando el uso de un componente de los detalles de cómo dicho componente está construido. (Véase <strong>Encapsulation (or information hiding)</strong> arriba.)
  </li>

  <li>
    <strong>Coupling</strong> se define como “una medida de la interdependencia entre módulos en un programa de computador” [11]. La mayoría de los métodos de diseño abogan porque los módulos estén débil o laxamente acoplados.
  </li>

  <li>
    <strong>Cohesion</strong> (o <strong>localization</strong>) se define como “una medida de la fuerza de asociación de los elementos dentro de un módulo” [11]. La <strong>cohesion</strong> resalta la organización de los constituyentes de un módulo con base en su relación. La mayoría de los métodos de diseño abogan porque los módulos maximicen su <strong>cohesion</strong>/<strong>locality</strong>.
  </li>

  <li>
    <strong>Uniformity</strong> es un principio de consistencia a través de los componentes de software—se deben producir soluciones comunes para abordar problemas comunes o recurrentes. Esto incluye esquemas de nombrado, notaciones y sintaxis, interfaces que definen el acceso a servicios y mecanismos, y el ordenamiento de elementos y parámetros. Esto puede lograrse mediante convenciones tales como reglas, formatos y estilos.
  </li>

  <li>
    <strong>Completeness</strong> (o <strong>sufficiency</strong>) significa asegurar que un componente de software capture las características importantes de una abstracción y no deje nada fuera. La <strong>completeness</strong> adopta varias formas, quizá la más importante de las cuales es la <strong>design completeness</strong> frente a los requisitos: un diseño debe ser suficiente para que los diseñadores demuestren cómo se cumplirán los requisitos y cómo el trabajo posterior satisfará dichos requisitos. El diseño debe ser completo con respecto a los modos y estados del software.
  </li>

  <li>
    <strong>Verifiability</strong> significa que la información necesaria para verificar el diseño frente a sus requisitos y otras restricciones está disponible. Esto es relevante para cualquier software, pero es de particular importancia para <strong>high-assurance software</strong>, como el software en el que están presentes preocupaciones críticas de <strong>security</strong>, <strong>reliability</strong> o <strong>safety-critical</strong>. Un <strong>SDD</strong> debería ser suficiente como base para verificar un diseño. (Véase <strong>Software Testing KA</strong> y <strong>Software Quality KA</strong>.)
  </li>

  <li>
    <strong>Other design principles</strong>. Recientemente, con la creciente aparición de <strong>autonomous systems</strong>, el uso de <strong>machine learning</strong> y <strong>artificial intelligence</strong>, y, en general, sistemas con impactos sociales cada vez mayores, se han desarrollado enfoques de <strong>Ethically Aligned Design</strong> para abordar preocupaciones que incluyen valores humanos universales, autodeterminación política y <strong>data agency</strong> y <strong>technical dependability</strong> [9]. Los principios generales de <strong>Ethically Aligned Design</strong> son <strong>human rights</strong>, <strong>well-being</strong>, <strong>data agency</strong>, <strong>effectiveness</strong>, <strong>transparency</strong>, <strong>accountability</strong>, <strong>awareness of misuse</strong> y <strong>competence</strong>.
  </li>
</ul>

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
