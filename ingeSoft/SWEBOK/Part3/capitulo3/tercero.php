 
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
    height: 220vh;
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
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 
 <h2>4. Recording Software Designs</h2>
<p>[4* c7, c8] [1]</p>

<p>
El resultado de los procesos de diseño es el conocimiento acumulado y los <strong>work products</strong> que registran dicho conocimiento. Los <strong>work products</strong> de la captura del <strong>software design</strong> documentan: (1) aspectos de los problemas que deben resolverse, utilizando el vocabulario del dominio; (2) un vocabulario de solución para resolver los problemas de diseño (véase la sección <strong>1.1 Design Thinking</strong>); (3) las decisiones principales que se han tomado; y (4) explicaciones de la justificación (<strong>rationale</strong>) de cada decisión no trivial.
</p>

<p>
Registrar la <strong>rationale</strong> de las decisiones importantes mejora la <strong>long-term maintainability</strong> del producto de software cuando se consideran modificaciones o mejoras (véase la sección <strong>4.6 Design Rationale</strong>). Estos <strong>work products</strong>, a menudo denominados <strong>design descriptions</strong> o <strong>design specifications</strong>, pueden adoptar la forma de textos, diagramas, modelos y prototipos que constituyen los <strong>blueprints</strong> del software que se va a implementar.
</p>

<p>
Un aspecto fundamental del <strong>software design</strong> es la comunicación sobre el diseño entre los diseñadores, y hacia los clientes, implementadores y otros <strong>stakeholders</strong>. Esto ocurre independientemente de si el software se desarrolla utilizando métodos <strong>agile</strong>, tradicionales o formales. La comunicación variará dependiendo del público objetivo, el nivel de detalle que se comunique y la relevancia para las <strong>concerns</strong> de los <strong>stakeholders</strong>.
</p>

<p>
Por ejemplo, cuando se utilizan métodos tradicionales o formales, el diseño suele evolucionar a través de una progresión de <strong>design descriptions</strong>, mientras que en los enfoques <strong>agile</strong> el diseño en evolución puede ser implícito en la mente de los desarrolladores y explícito únicamente como código. Aunque este último enfoque respalda la agilidad de los desarrolladores, otros <strong>stakeholders</strong>, tales como aquellos preocupados por <strong>requirements</strong>, certificación, pruebas y <strong>quality assurance</strong>, pueden necesitar información de diseño explícita para realizar su trabajo.
</p>

<p>
Por lo tanto, los proyectos deben tomar decisiones conscientes sobre qué <strong>design specifications</strong> son necesarias en función del público de <strong>stakeholders</strong>, el tema y el uso previsto.
</p>

<p>
Los diseñadores pueden analizar y evaluar estos <strong>work products</strong> para determinar si el diseño puede cumplir con los requisitos y restricciones del software. El <strong>software design</strong> también examina y evalúa soluciones alternativas y <strong>trade-offs</strong>. Además de utilizarlos como entradas y como punto de partida para la <strong>construction</strong> y las <strong>testing</strong>, los <strong>stakeholders</strong> pueden utilizar los <strong>design work products</strong> para planificar actividades posteriores, tales como la <strong>system verification</strong> y la <strong>validation</strong>.
</p>

<p>
A medida que los conceptos de diseño evolucionan, también lo hacen sus representaciones (véase la sección <strong>1.1 Design Thinking</strong>); parte del proceso de diseño implica crear vocabularios apropiados para problemas y soluciones. Un boceto informal puede ser lo más apropiado para las etapas tempranas. Es útil distinguir entre <strong>in-process (“working”) specifications</strong> y productos finales de diseño. Las primeras son producidas por el equipo de diseño para el equipo de diseño; los segundos pueden producirse para <strong>stakeholders</strong> conocidos o incluso para una audiencia futura desconocida.
</p>

<p>
Existen muchas notaciones para representar <strong>software design artifacts</strong>. El <strong>software design</strong> a menudo se lleva a cabo utilizando múltiples tipos de notación. Dos grandes áreas de interés son las <strong>software structures</strong> y los <strong>software behaviors</strong>. Algunas notaciones se utilizan para describir la organización estructural de un diseño, otras para representar el comportamiento previsto del software.
</p>

<p>
A continuación, se categorizan como notaciones para <strong>structural concerns</strong> y <strong>behavioral concerns</strong> (véase la sección <strong>4.2 Structural Design Descriptions</strong> y la sección <strong>4.3 Behavioral Design Descriptions</strong>, respectivamente). Ciertas notaciones se utilizan principalmente durante el <strong>architectural design</strong> y otras principalmente durante el <strong>detailed design</strong>; algunas son útiles a lo largo de todas las etapas del <strong>software design</strong>. Algunas notaciones están estrechamente vinculadas al contexto de métodos de diseño específicos (véase <strong>Software Design Strategies and Methods KA</strong>).
</p>

<p>
El <strong>Unified Modeling Language (UML)</strong> es una familia de notaciones ampliamente utilizada que aborda tanto <strong>structural</strong> como <strong>behavioral concerns</strong> y se utiliza en todas las etapas del diseño, desde el <strong>architectural design</strong> hasta el <strong>detailed design</strong> [1].
</p>

<p>
El <strong>tooling</strong> permite la animación o simulación de diversos aspectos del software, el análisis de escenarios <strong>what-if</strong> y <strong>trade-offs</strong>, y el <strong>rapid prototyping</strong>. El <strong>tooling</strong> también facilita enfoques de <strong>continuous testing</strong> e <strong>integration</strong>, una <strong>traceability</strong> mejorada e interactiva, y la captura y gestión del conocimiento, las cuales son ineficientes o incluso inviables con enfoques basados en documentos.
</p>

<p>
El <strong>model-driven development (MDD)</strong> es un paradigma de desarrollo que utiliza modelos como los <strong>primary artifacts</strong> del proceso de desarrollo (véase <strong>Software Engineering Models and Methods KA</strong>).
</p>

<h3>4.2. Structural Design Descriptions</h3>
<p>[4* c7, c10] [7* c4] [21* c5.3]</p>

<p>
Los siguientes tipos de notación, la mayoría de los cuales son gráficos, se utilizan para representar los aspectos estructurales de un <strong>software design</strong>; es decir, se utilizan para describir los componentes principales y cómo están interconectados (<strong>static view</strong>) y la asignación de responsabilidades a componentes y módulos:
</p>

<ul>
  <li>
    Los <strong>class and object diagrams</strong> se utilizan para representar un conjunto de clases y objetos y sus interrelaciones.
  </li>
  <li>
    Los <strong>component diagrams</strong> se utilizan para representar un conjunto de componentes (elementos reemplazables de un sistema que se ajustan y proporcionan la realización de un conjunto de interfaces) y sus interconexiones. Los <strong>component models</strong> evolucionaron a partir de lenguajes tempranos de interconexión de módulos hacia los sistemas de paquetes de lenguajes de programación como Ada y Java, y los sistemas de módulos sofisticados de los lenguajes funcionales actuales como Haskell y Coq.
  </li>
  <li>
    Las <strong>Class Responsibility Collaborator cards (CRCs)</strong> se utilizan para denotar los nombres de los componentes (clases), sus responsabilidades y los componentes con los que interactúan para cumplir dichas responsabilidades.
  </li>
  <li>
    Los <strong>deployment diagrams</strong> se utilizan para representar un conjunto de nodos físicos y sus interconexiones con el fin de modelar los aspectos físicos del software tal como se despliega sobre el hardware.
  </li>
  <li>
    Los <strong>entity relationship diagrams (ERDs)</strong> se utilizan para representar modelos conceptuales, lógicos y físicos de datos tal como se almacenan en repositorios de información o como parte de descripciones de interfaces.
  </li>
  <li>
    Los <strong>interface description languages (IDLs)</strong> son lenguajes similares a los de programación que se utilizan para definir las interfaces (nombres y tipos de operaciones exportadas) de los componentes de software.
  </li>
  <li>
    Los <strong>structure charts</strong> se utilizan para describir la estructura de llamadas de los programas (es decir, muestran qué módulos llaman, y son llamados por, otros módulos).
  </li>
</ul>

 

    </form>
</div>




<div class="seccion derecha">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 
<h3>4.3. Behavioral Design Descriptions</h3>
<p>[4* c9, c10] [7* c5] [21* c5.4]</p>

<p>
Las siguientes notaciones y lenguajes, algunos gráficos y otros textuales, se utilizan para describir el comportamiento dinámico de los sistemas de software y de sus componentes. Muchas de estas notaciones son útiles principalmente, aunque no exclusivamente, durante el <strong>detailed design</strong>. Además, las <strong>behavioral descriptions</strong> pueden incluir la <strong>rationale</strong> de las decisiones de diseño (véase la sección <strong>4.6 Design Rationale</strong>).
</p>

<ul>
  <li>
    Los <strong>activity diagrams</strong> se utilizan para mostrar el flujo de un cómputo de actividad en actividad. También pueden representar actividades concurrentes, sus entradas y salidas, y oportunidades para la <strong>concurrency</strong>.
  </li>

  <li>
    Los <strong>interaction diagrams</strong> caracterizan la interacción entre un grupo de objetos. Existen dos tipos principales de <strong>interaction diagrams</strong>: <strong>communication (or collaboration) diagrams</strong> y <strong>sequence diagrams</strong>. Los <strong>communication diagrams</strong> muestran las interacciones entre objetos con énfasis en sus enlaces y los mensajes que intercambian a través de dichos enlaces. Los <strong>sequence diagrams</strong> muestran las interacciones entre objetos, con énfasis en el ordenamiento temporal de los mensajes intercambiados entre esos objetos.
  </li>

  <li>
    Los <strong>data flow diagrams (DFDs)</strong> se utilizan para mostrar el flujo de datos entre elementos de cómputo. Un <strong>DFD</strong> proporciona “una descripción basada en el modelado del flujo de información alrededor de una red de elementos operacionales
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
