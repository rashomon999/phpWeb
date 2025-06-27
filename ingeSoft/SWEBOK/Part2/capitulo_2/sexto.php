  
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
    <form action="./sexto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
   <h3>🔹 2. Descripción de la Arquitectura de Software</h3>
  <p>Las <strong>descripciones arquitectónicas</strong> (ADs) documentan la arquitectura para responder a las preocupaciones de los distintos stakeholders.</p>

  <p>Estas descripciones se componen de:</p>
  <ul>
    <li><strong>Views:</strong> representaciones de aspectos del sistema.</li>
    <li><strong>Viewpoints:</strong> convenciones para crear esas <em>views</em>.</li>
  </ul>

  <p>Hay múltiples enfoques:</p>
  <ul>
    <li><strong>Sintético:</strong> las <em>views</em> se crean e integran manualmente.</li>
    <li><strong>Proyectivo:</strong> las <em>views</em> se derivan de un único modelo unificado.</li>
  </ul>

  <p>Se discuten <strong>estilos arquitectónicos</strong> (<em>layered</em>, <em>pipes-and-filters</em>, etc.), <strong>patrones</strong> (MVC, cliente-servidor, etc.), y <strong>arquitecturas de referencia</strong> (como AUTOSAR o SOA).</p>

  <p>Se introducen los <strong>lenguajes de descripción arquitectónica</strong> (ADLs) y los <strong>frameworks de arquitectura</strong>, como UML y ArchiMate, que permiten modelar, analizar e incluso generar código.</p>

  <h3>🔹 3. Proceso de Arquitectura de Software</h3>
  <p>Se presentan diferentes contextos donde ocurre la arquitectura:</p>
  <ul>
    <li>Ciclos de vida tradicionales.</li>
    <li>Familias de productos o líneas de producto.</li>
    <li>Enfoques ágiles (donde la arquitectura puede “emergir” del código).</li>
    <li>Contextos de empresa o sistemas de sistemas.</li>
  </ul>

  <p><strong>Diseño arquitectónico:</strong></p>
  <ul>
    <li>Involucra <strong>análisis</strong> (recolección de requisitos significativos), <strong>síntesis</strong> (desarrollo de soluciones) y <strong>evaluación</strong>.</li>
    <li>Es <strong>iterativo</strong> y orientado por preocupaciones clave como escalabilidad, seguridad, fiabilidad, modularidad, etc.</li>
  </ul>

  <p>Se destacan prácticas adicionales como:</p>
  <ul>
    <li>Mantenimiento de la arquitectura.</li>
    <li>Gestión de decisiones y conocimiento arquitectónico.</li>
    <li>Gestión de portafolios de arquitecturas en organizaciones.</li>
  </ul>

  <h3>🔹 4. Evaluación de la Arquitectura de Software</h3>
  <p>Evalúa la calidad arquitectónica frente a atributos como:</p>
  <ul>
    <li>Robustez, utilidad, costo, claridad, mantenibilidad, etc.</li>
  </ul>

  <p><strong>Métodos conocidos:</strong></p>
  <ul>
    <li>ATAM (<em>Architecture Tradeoff Analysis Method</em>)</li>
    <li>SAAM, QAW, entre otros.</li>
  </ul>

  <p><strong>Técnicas de evaluación:</strong></p>
  <ul>
    <li>Uso de escenarios y atributos de calidad.</li>
    <li>Revisiones de arquitectura (formales o activas).</li>
    <li>Razonamiento con base en descripciones existentes.</li>
  </ul>

  <p>También se introducen las <strong>métricas arquitectónicas</strong>:</p>
  <ul>
    <li>Complejidad, acoplamiento, cohesión, cumplimiento de estilos, etc.</li>
    <li>En DevOps: métricas de desempeño del proceso (frecuencia de despliegue, <em>lead time</em>, etc.).</li>
  </ul>


  <div>
  <h2> ¿Cómo se califica o evalúa una arquitectura si es algo abstracto?</h2>
  <p>La clave está en representarla concretamente, aunque su naturaleza sea conceptual. Aquí te explico cómo:</p>

  <h3> 1. Views (Vistas)</h3>
  <p>Son representaciones de aspectos específicos de la arquitectura, pensadas para responder a preocupaciones concretas de los <em>stakeholders</em>.</p>
  <p><strong>Por ejemplo:</strong></p>
  <ul>
    <li><strong>Logical View:</strong> muestra cómo se organiza el sistema para satisfacer requerimientos funcionales.</li>
    <li><strong>Process View:</strong> muestra la concurrencia y sincronización entre procesos.</li>
    <li><strong>Deployment View:</strong> muestra dónde y cómo se distribuye el sistema en infraestructura física.</li>
  </ul>
  <p> Cada <em>view</em> es como una “ventana” que permite observar una parte del sistema desde un ángulo específico, ayudando a hacer preguntas como:</p>
  <ul>
    <li> ¿Esto será escalable?</li>
    <li> ¿Se puede desplegar fácilmente?</li>
    <li> ¿Es seguro?</li>
  </ul>

  <h3> 2. Viewpoints</h3>
  <p>Son las reglas o convenciones que dictan cómo construir una <em>view</em>.<br>
  Por ejemplo, el <strong>Deployment Viewpoint</strong> puede indicar que debes usar un diagrama de nodos UML, incluir direcciones IP, y mostrar servicios desplegados por servidor.</p>

  <h3> 3. Architecture Descriptions (ADs)</h3>
  <p>Un <strong>AD</strong> es el conjunto de <em>views</em>, documentación y decisiones que materializan la arquitectura abstracta en artefactos concretos.</p>

  
</div>
 
    </form>
</div>




<div class="seccion derecha">
    <form action="./sexto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
     <h3> 4. ¿Y cómo evalúo entonces?</h3>
  <p>Con herramientas como:</p>
  <ul>
    <li><strong>Escenarios:</strong> Usas casos de uso o escenarios de calidad (por ejemplo, ¿qué pasa si el servidor 1 se cae?).</li>
    <li><strong>Métodos formales:</strong> Como <strong>ATAM</strong> (Architecture Tradeoff Analysis Method), donde se analizan <em>tradeoffs</em> (compromisos) entre atributos de calidad como rendimiento vs. seguridad.</li>
    <li><strong>Métricas:</strong> Por ejemplo, puedes medir la cohesión entre módulos, el acoplamiento, o si se sigue un estilo como microservicios correctamente.</li>
  </ul>

  <h3> Resumen Visual</h3>
  <table border="1" cellpadding="5" cellspacing="0">
    <thead>
      <tr>
        <th>Lo abstracto</th>
        <th>Lo concreto</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Arquitectura conceptual</td>
        <td>Architecture Description (AD)</td>
      </tr>
      <tr>
        <td>Preocupación (Concern)</td>
        <td>View</td>
      </tr>
      <tr>
        <td>Reglas para la vista</td>
        <td>Viewpoint</td>
      </tr>
      <tr>
        <td>Evaluación general</td>
        <td>ATAM, SAAM, escenarios, métricas</td>
      </tr>
    </tbody>
  </table>



  <div>
  <h2> Comprendiendo la Arquitectura como Estructura</h2>
  <p>La <strong>arquitectura de software</strong> no es solo una idea abstracta, sino una <strong>estructura organizada del sistema</strong>, construida <em>a propósito</em> para responder a <strong>preocupaciones (concerns)</strong> de los <strong>stakeholders</strong>. Y ahí es donde entran los <em>views</em>.</p>

  <h3> ¿Qué estructura aporta la arquitectura?</h3>
  <ul>
    <li>Organiza el sistema en partes fundamentales (módulos, capas, componentes, servicios…).</li>
    <li>Define relaciones entre esas partes (dependencias, comunicaciones, sincronización…).</li>
    <li>Guía el desarrollo al mostrar qué decisiones ya están tomadas (y cuáles no).</li>
    <li>Conecta los intereses de las partes interesadas con partes visibles del sistema.</li>
  </ul>

  <h3> ¿Cómo logran eso los <em>views</em>?</h3>
  <p>Los <strong>views</strong> son como "mapas" de la arquitectura, cada uno mostrando una <strong>estructura diferente</strong> del sistema, de acuerdo con alguna <strong>preocupación</strong>:</p>
  <table border="1" cellpadding="8">
    <thead>
      <tr>
        <th>View (Vista)</th>
        <th>Responde a...</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Logical View</td>
        <td>¿Cómo se satisfacen los requerimientos funcionales?</td>
      </tr>
      <tr>
        <td>Process View</td>
        <td>¿Cómo se maneja la concurrencia y sincronización?</td>
      </tr>
      <tr>
        <td>Deployment View</td>
        <td>¿Dónde se ejecuta cada componente?</td>
      </tr>
      <tr>
        <td>Development View</td>
        <td>¿Cómo se organizan los archivos y módulos del código fuente?</td>
      </tr>
      <tr>
        <td>Information View</td>
        <td>¿Cómo fluye y se organiza la información?</td>
      </tr>
      <tr>
        <td>Use Case / Scenario View</td>
        <td>¿Cómo se comporta el sistema ante casos de uso?</td>
      </tr>
    </tbody>
  </table>

  <h3> ¿Y las <em>concerns</em>?</h3>
  <p>Las <strong>concerns</strong> (preocupaciones) son preguntas clave como:</p>
  <ul>
    <li>¿Será escalable?</li>
    <li>¿Se puede desplegar fácilmente?</li>
    <li>¿Será seguro, eficiente, mantenible?</li>
    <li>¿Cómo afectará el cambio climático (sostenibilidad)?</li>
  </ul>
  <p>Cada <strong>concern importante</strong> se refleja en una <em>view</em>, o en decisiones dentro del <strong>Architecture Description (AD)</strong>.</p>

  <h3> En resumen, la arquitectura:</h3>
  <ul>
    <li> <strong>Estructura</strong> el sistema a gran escala.</li>
    <li> Usa <strong>views</strong> para mostrar esa estructura desde diferentes perspectivas.</li>
    <li> Responde a <strong>concerns</strong> que importan a las personas que dependen del sistema.</li>
    <li> Se documenta en <strong>Architecture Descriptions (ADs)</strong>.</li>
    <li> Se evalúa con métodos como <strong>ATAM</strong> que analizan cómo la estructura responde a los <em>concerns</em>.</li>
  </ul>
</div>
<hr>
<h3> Introducción (fuente visual paradigm)</h3>
<p>
En el ámbito de la ingeniería de software y el diseño de sistemas, crear una arquitectura integral y bien estructurada es esencial para construir sistemas complejos. 
El <strong>Lenguaje Unificado de Modelado (UML)</strong> es una herramienta potente que facilita la visualización y documentación de arquitecturas de sistemas. 
Un enfoque ampliamente adoptado para modelar arquitecturas de sistemas mediante UML es el <strong>modelo de vista "4 + 1"</strong>. 
Este modelo ofrece una perspectiva holística de la arquitectura de sistemas, desglosándola en cinco vistas distintas que, en conjunto, proporcionan una comprensión integral del sistema. 
En este artículo, exploraremos el concepto de las vistas "4 + 1" en el modelado de arquitecturas de sistemas mediante UML.
</p>


<h3> El Modelo de Vistas “4 + 1”  </h3>

<h3>🔹 Vista Lógica (Logical View)</h3>
<p>
La Vista Lógica, conocida comúnmente como el <strong>“Diagrama de Clases”</strong>, es la primera de las vistas del modelo “4 + 1”. 
Se enfoca principalmente en la estructura estática del sistema. Esta vista aborda los componentes esenciales del sistema, como clases, objetos, relaciones y sus atributos. 
Los diagramas de clases representan visualmente las clases y sus asociaciones, lo que ayuda a entender cómo interactúan los diversos componentes entre sí. 
Esta vista proporciona una visión general del diseño y la organización de la funcionalidad del sistema.
</p>

 
 
    </form>
</div>

<div class="centered-container">
    <a
        name="siguiente" 
        id="siguiente"
        class="btn btn-primary"
        href="septimo.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
