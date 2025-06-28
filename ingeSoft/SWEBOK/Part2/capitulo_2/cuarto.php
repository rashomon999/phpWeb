  
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
    height: 295vh;
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
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

<p>
    Un <strong>architecture framework</strong> captura las “convenciones, principios y prácticas para la descripción de arquitecturas establecidas dentro de un dominio de aplicación específico y/o comunidad de interesados” [23].
  </p>


   <p>
    Los <strong>frameworks</strong> codifican prácticas recomendadas dentro de un dominio específico y se implementan como un conjunto interrelacionado de <strong>viewpoints</strong> o <strong>ADLs</strong>.
  </p>

  <p>
    Ejemplos de <strong>architecture frameworks</strong> incluyen:
  </p>
 
  <ul>
    <li><strong>AUTOSAR</strong> para la industria automotriz,</li>
    <li>el <strong>Unified Architecture Framework (UAF®)</strong> de OMG,</li>
    <li>y el <strong>ISO Reference Model for Open Distributed Processing</strong>.</li>
  </ul>


   <h3>2.4. Architecture as Significant Decisions</h3>
  <p><strong>[38*c8, 40*c6.1, 1, 23, 26]</strong></p>

  <p>
    El diseño arquitectónico es un proceso creativo. Durante esta actividad, los arquitectos toman muchas decisiones que afectan profundamente a la arquitectura, al proceso de desarrollo posterior y al sistema de software.
  </p>

  <p>
    Muchos factores influyen en la toma de decisiones, incluyendo las preocupaciones destacadas de los stakeholders del sistema, sus requerimientos y los recursos disponibles durante el desarrollo y a lo largo del ciclo de vida.
  </p>

  <p>
    El impacto en los atributos de calidad y los compromisos entre atributos de calidad en conflicto suelen ser la base para las decisiones de diseño.
  </p>

  <p>
    La actividad de diseño arquitectónico genera como resultado una red de decisiones, en la cual algunas decisiones derivan de decisiones previas.
  </p>

  <p>
    El análisis de decisiones proporciona un enfoque para la evaluación de la arquitectura. Las decisiones pueden documentarse explícitamente, junto con una explicación del <strong>rationale</strong> detrás de cada decisión no trivial.
  </p>

  <p>
    El <strong>architecture rationale</strong> captura por qué se tomó una decisión arquitectónica. Esto incluye las suposiciones realizadas antes de la decisión, las alternativas consideradas y los criterios o compromisos utilizados para seleccionar una opción y descartar otras.
  </p>

  <p>
    Registrar las decisiones rechazadas y las razones de su rechazo también puede ser útil. En el futuro, esto podría prevenir que un proyecto de software tome una decisión errónea que fue descartada anteriormente por razones que se han olvidado, o permitir reconocer que las condiciones relevantes han cambiado y que puede reevaluarse la decisión.
  </p>

  <p>
    El concepto de <strong>architectural technical debt

    (deuda técnica arquitectónica)
    </strong> ha sido introducido para reflejar que las decisiones tomadas hoy pueden tener consecuencias significativas más adelante en el ciclo de vida del sistema de software.
  </p>

  <p>
    Las decisiones aplazadas pueden comprometer su mantenibilidad o su capacidad de evolución futura, y esa deuda deberá pagarse —típicamente por otras personas, no necesariamente por quienes la generaron.
  </p>

  <p>
    Dicha deuda tiene un impacto económico sobre el desarrollo y operación futura del sistema. Por ejemplo, cuando un proyecto de software tiene tiempo limitado, puede desarrollar un diseño inicial con poca atención a la modularidad para su primera versión.
  </p>

  <p>
    La falta de modularidad puede afectar negativamente el tiempo de desarrollo de versiones posteriores, impactar a los desarrolladores y posiblemente comprometer la mantenibilidad futura del sistema. Añadir funcionalidad adicional después puede requerir una gran refactorización, lo cual afecta los plazos futuros e introduce defectos adicionales [26].
  </p>

  <p>
    El <strong>architectural technical debt</strong> puede ser analizado y gestionado, como otras preocupaciones, utilizando modelos y <strong>viewpoints</strong> [27].
  </p>

 <img src="../../../../img/general.png" alt="">

  <h3>3. Software Architecture Process</h3>
  <p><strong>[38*c7, 41*c4, 14, 42]</strong></p>

  <p>
    Esta sección describe un modelo general de un proceso de <strong>architectural design</strong>. Se 
    utiliza para demostrar cómo el diseño arquitectónico se integra dentro del contexto general de los
    <strong>software engineering processes</strong> (véase el área de conocimiento Software Engineering Process) y 
    un <strong>framework</strong> para comprender los numerosos <strong>architecture methods</strong> actualmente en uso.
  </p>

  <p>
    También se reconoce que el <strong>architectural design</strong> puede llevarse a cabo en una variedad de contextos.
  </p>

  
    </form>
</div>




<div class="seccion derecha">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

        
  <h3>3.1. Architecture in Context</h3>
  <p><strong>[41*c2, 29*]</strong></p>

<p>
    La arquitectura ocurre en varios contextos. En el ciclo de vida tradicional, hay una etapa de diseño arquitectónico impulsada por los requerimientos del sistema de software (véase el área de conocimiento Software Requirements).
  </p>

  <p>
    Algunos requerimientos actuarán como <em>architectural drivers</em>, influyendo en decisiones importantes sobre la arquitectura, mientras que otros requerimientos se postergan para etapas posteriores del proceso de software, como el diseño o la construcción.
  </p>

  <p>
    En entornos de líneas de productos o familias de productos, se desarrolla una <strong>product line/family architecture</strong> con base en un conjunto fundamental de necesidades, requerimientos y otros factores. Esa arquitectura será el punto de partida para una o más instancias de producto desarrolladas a partir de requerimientos específicos, construidas sobre la línea base del producto.
  </p>

  <p>
    En enfoques ágiles, normalmente no existe una etapa de diseño arquitectónico formal. La única descripción de la arquitectura podría ser el propio código. En algunas prácticas ágiles, se dice que la <strong>software architecture</strong> “emerge” al codificar el sistema basado en <strong>user stories</strong> mediante una serie rápida de ciclos de desarrollo.
  </p>

  <p>
    Aunque este enfoque ha tenido cierto éxito en sistemas de información centrados en el usuario, resulta difícil garantizar que surja una arquitectura adecuada para otras clases de aplicaciones, como los sistemas embebidos o ciberfísicos, cuando propiedades arquitectónicas críticas podrían no estar articuladas en ninguna <strong>user story</strong>.
  </p>

  <p>
    En contextos empresariales y de <em>system-of-systems</em>, como en líneas y familias de productos, la <strong>overarching architecture</strong> (de la empresa, sistema o familia de productos) proporciona requerimientos principales y orientación sobre la forma y restricciones que debe tener la <strong>software architecture</strong>.
  </p>

  <p>
    Esta línea base puede imponerse mediante especificaciones, requerimientos adicionales, interfaces de programación de aplicaciones (<strong>APIs</strong>) o conjuntos de conformidad.
  </p>

 <h4>3.1.1. Relación de la Arquitectura con el Diseño</h4>

  <p>
    El diseño y la arquitectura a menudo se confunden. Se ha dicho que la arquitectura es el conjunto de decisiones que no se pueden dejar en manos de los diseñadores.
  </p>

  <p>
    De hecho, la arquitectura surgió del diseño de software a medida que la disciplina maduró, en gran parte desde la década de 1990.
  </p>

  <p>
    Existen varios contrastes: el diseño a menudo se enfoca en un conjunto establecido de requerimientos, mientras que la arquitectura con frecuencia debe moldear los requerimientos a través de la negociación con los interesados (<em>stakeholders</em>) y el análisis de requerimientos.
  </p>

  <p>
    Además, la arquitectura debe reconocer y abordar una gama más amplia de preocupaciones que pueden o no llegar a convertirse en requerimientos del sistema de software en cuestión.
  </p>


   
  <h3>3.2. Diseño Arquitectónico</h3>
  <p><strong>[2*c20, 20]</strong></p>

    <p>
    El diseño arquitectónico es la aplicación de principios y métodos de diseño dentro de un proceso para crear y documentar una arquitectura de software.
    Existen muchos métodos arquitectónicos para realizar esta actividad.
    Esta sección describe un modelo general de diseño arquitectónico que sirve de base a varios métodos existentes, basado en [20].
  </p>

    <p>
    El diseño arquitectónico implica identificar los componentes principales de un sistema; sus responsabilidades, propiedades e interfaces; así como las relaciones e interacciones entre ellos y con el entorno.
    En esta etapa se deciden los aspectos fundamentales del sistema, mientras que otros aspectos, como los detalles internos de los componentes principales, se dejan para más adelante.
  </p>

  <p>
    Algunas de las preocupaciones típicas en el diseño arquitectónico incluyen:
  </p>

  <ul>
    <li>Estilos arquitectónicos generales y paradigmas de computación</li>
    <li>Refinamiento a gran escala del sistema en <strong>key components</strong></li>
    <li>Comunicación e interacción entre componentes</li>
    <li>Asignación de preocupaciones y responsabilidades de diseño a los componentes</li>
    <li>Interfaces de los componentes</li>
    <li>Comprensión y análisis de escalabilidad y propiedades de rendimiento, consumo de recursos y confiabilidad</li>
    <li>Enfoques generales/sistémicos a preocupaciones dominantes (como seguridad y protección, cuando sea aplicable)</li>
  </ul>

  <p>
    Una visión general del <strong>architectural design</strong> se presenta en la Figura 2.3.
  </p>

  <p>
    El diseño arquitectónico es iterativo, y comprende tres actividades principales: <strong>analysis</strong>, <strong>synthesis</strong> y <strong>evaluation</strong>.
    Frecuentemente, estas tres actividades se realizan de forma concurrente en varios niveles de granularidad.
  </p>

 
  <h4>3.2.1. Análisis de Arquitectura</h4>
  <p>
    El <strong>análisis de arquitectura</strong> recopila y formula los requerimientos arquitectónicamente
     significativos (<em>architecturally significant requirements</em>, ASRs), definidos como “cualquier requerimiento sobre un sistema de software que influya en su arquitectura” [31].
  </p>

  <p>
    El análisis de arquitectura se basa en preocupaciones identificadas y en la comprensión del 
    contexto del software, incluyendo los requerimientos conocidos, las necesidades de los stakeholders
     y las restricciones del entorno.
  </p>

  <p>
    Los ASRs reflejan los problemas de diseño que la arquitectura debe resolver. A menudo, la combinación
     de requerimientos iniciales y restricciones conocidas no puede satisfacerse sin consecuencias en el 
     costo, cronograma, etc. En tales casos, se recurre a la negociación para modificar necesidades, 
     requerimientos y expectativas entrantes para hacer viables las soluciones.
  </p>

  <p>
    El análisis de arquitectura produce los ASRs (Requerimientos Arquitectónicamente Significativos), decisiones iniciales a nivel de sistema y cualquier
     principio general del sistema derivado del contexto (véase <em>Architecture in Context</em>).
  </p>

 
  
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
