 
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
    height: 305vh;
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
     <p>
    Las preocupaciones se manifiestan en varias formas familiares, incluyendo requerimientos, atributos de calidad o "ilities", 
    propiedades emergentes (que pueden ser deseadas o prohibidas) y varios tipos de restricciones (como las mencionadas 
    anteriormente). Véase el área de conocimiento de Calidad de Software.
  </p>

  <p>
    El tema 2, <em>Descripción de la Arquitectura de Software</em>, muestra cómo las preocupaciones dan forma a la arquitectura y a los productos de trabajo que describen esas arquitecturas.
  </p>

  <p>
    Ejemplos de preocupaciones se ilustran en la Figura 2.2.
  </p>

  <p>
    Las preocupaciones no son estáticas; evolucionan a lo largo del ciclo de vida de un sistema y a medida que evolucionan las tecnologías, políticas y otras influencias.
  </p>

  <p>
    Por ejemplo, debido al aumento de la conciencia sobre el cambio climático, hay un creciente interés en preocupaciones como la eficiencia energética y la sostenibilidad [24].
  </p>

  <h4>Ejemplos de preocupaciones arquitectónicas (Figura 2.2):</h4>
  <ul>
    <li>Modos de operación</li>
    <li>Estructura del software</li>
    <li>Integración de subsistemas</li>
    <li>Sostenibilidad</li>
    <li>Características del sistema</li>
    <li>Capacidad de prueba (<em>testability</em>)</li>
    <li>Usabilidad</li>
    <li>Uso</li>
    <li>Experiencia del usuario</li>
  </ul>

   
  <h3>1.3. Usos de la Arquitectura</h3>
  <p><strong>[2*c24, 38*c30, 23, 11, 28]</strong></p>

  <p>
    Uno de los usos principales de la arquitectura de un sistema de software es proporcionar a quienes trabajan con él una comprensión compartida del sistema que guíe su diseño y construcción.
  </p>

  <p>
    Una arquitectura también sirve como una concepción preliminar del sistema de software que proporciona una base para analizar y evaluar alternativas.
  </p>

  <p>
    Un tercer uso común es permitir la ingeniería inversa (o arquitectura inversa) al ayudar a quienes trabajan con el sistema a entender un sistema de software existente antes de emprender tareas de mantenimiento, mejora o modificación.
  </p>

  <p>
    Para respaldar estos usos, la arquitectura debe estar documentada (véase el tema <em>Descripción de la Arquitectura de Software</em>).
  </p>

  <p>
    La Ley de Conway postula que “las organizaciones que diseñan sistemas... están forzadas a producir diseños que son copias de las estructuras de comunicación de estas organizaciones” [11]. 
  </p>

  <p>
    Estudios empíricos han observado que las arquitecturas de estos sistemas a menudo reflejan las estructuras de comunicación de esas organizaciones [28]. Dependiendo del sistema de software y de la organización, esto puede ser una fortaleza o una debilidad.
  </p>

  <p>
    La arquitectura puede mejorar la comunicación dentro de un equipo grande o comprometerla. Cada parte de la organización puede basar sus actividades de planificación, costos y cronogramas en su conocimiento de la arquitectura.
  </p>

  <p>
    Crear una arquitectura bien planificada y documentada es un enfoque para aumentar la aplicabilidad y reutilización de diseños y componentes de software.
  </p>

  <p>
    La arquitectura forma la base para diseñar familias de programas o líneas de productos de software. Esto puede lograrse identificando las características comunes entre los miembros de dichas familias y diseñando componentes reutilizables y personalizables para abordar la variabilidad entre los miembros de la familia.
  </p>

  <h3>2. Descripción de la Arquitectura de Software</h3>
  <p><strong>[2*c22, 38*, 40*c6, 41*c6-7, 9, 23, 25]</strong></p>

  <p>
    En el tema 1, <em>Fundamentos de la Arquitectura de Software</em>, se definió la arquitectura de software como los conceptos o propiedades fundamentales de un sistema de software en su entorno.
  </p>

  <p>
    Pero cada interesado puede tener una noción diferente de lo que es fundamental para ese sistema de software, dada su perspectiva.
  </p>

  <p>
    Tener un modelo mental de la arquitectura de un sistema puede estar bien para sistemas pequeños y para personas que trabajan solas. Sin embargo, para sistemas grandes y complejos desarrollados y operados por equipos, una representación tangible es invaluable, especialmente a medida que la concepción del sistema evoluciona y que personas se integran o abandonan el equipo.
  </p>

  <p>
    Tener una representación concreta como producto de trabajo también puede servir como base para analizar la arquitectura, organizar su diseño y guiar su implementación. Estos productos de trabajo se llaman <strong>descripciones de arquitectura</strong> (<em>architecture descriptions, ADs</em>).
  </p>


  
  <p>
    Las <strong>descripciones de arquitectura</strong> (ADs) documentan la arquitectura de un sistema de software. Están dirigidas a aquellos interesados del sistema que tienen preocupaciones sobre el sistema de software que son respondidas por la arquitectura.
  </p>

  <p>
    Como se indicó en el tema 1, <em>Fundamentos de la Arquitectura de Software</em>, una audiencia principal está compuesta por los diseñadores, ingenieros y programadores cuyas preocupaciones están relacionadas con la construcción del sistema. Para estos interesados, las ADs sirven como un plano para guiar la construcción del sistema de software.
  </p>

  <p>
    Para otros, la AD es una base para su trabajo — por ejemplo, pruebas y aseguramiento de calidad, certificación, despliegue, operación, mantenimiento y evolución futura.
  </p>


    <p>
    Históricamente, las descripciones de arquitectura (ADs) usaban texto y diagramas informales para transmitir la arquitectura.
  </p>

  <p>
    Sin embargo, la diversidad de públicos interesados y sus diferentes preocupaciones ha llevado a una diversidad de representaciones de la arquitectura. Las notaciones deben elegirse en función de la necesidad, el propósito y la utilidad de dichas elecciones (como la comprensibilidad, familiaridad) para los interesados que necesitan esa información.
  </p>
    </form>
</div>




<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
      <p>
    Frecuentemente, estas representaciones están especializadas en función de las prácticas existentes de las comunidades o disciplinas involucradas, con el fin de abordar eficazmente esta variedad de interesados y preocupaciones (véase el área de conocimiento de Diseño de Software y el área de conocimiento de Modelos y Métodos de Ingeniería de Software).
  </p>

  <p>
    Estas diversas representaciones se denominan <strong>vistas de arquitectura</strong>.
  </p>

 
  <h3>2.1. Architecture Views and Viewpoints</h3>
  <p><strong>[6*c7, 38*c3,c15-23, 40*c6.2, 23]</strong></p>

  <p>
    Una <strong>architecture view</strong> representa uno o más aspectos de una arquitectura para abordar una o más preocupaciones (<em>concerns</em>) [38*]. Las <strong>views</strong> abordan preocupaciones distintas — por ejemplo:
  </p>
  <ul>
    <li>Una <em>logical view</em> (representa cómo el sistema satisfará los requerimientos funcionales);</li>
    <li>Una <em>process view</em> (representa cómo el sistema utilizará concurrencia);</li>
    <li>Una <em>physical view</em> (representa cómo será desplegado y distribuido el sistema);</li>
    <li>Una <em>development view</em> (representa cómo se descompone el diseño de alto nivel en unidades de implementación, las dependencias entre ellas y cómo se construirá la implementación).</li>
  </ul>

  <p>
    Separar preocupaciones por <strong>view</strong> permite que los interesados se concentren en unos pocos aspectos a la vez y proporciona un medio para gestionar la comprensibilidad y complejidad general de la arquitectura.
  </p>

  <p>
    La práctica de la arquitectura ha evolucionado del uso de texto y diagramas informales al uso de representaciones más rigurosas. Cada <strong>architecture view</strong> representa elementos arquitectónicos del sistema utilizando convenciones, notaciones y modelos bien definidos [38*].
  </p>

  <p>
    Las convenciones de cada <strong>view</strong> se documentan como un <strong>architecture viewpoint</strong> [23]. Los <strong>viewpoints</strong> guían la creación, interpretación y uso de las <strong>architecture views</strong>. Cada <strong>viewpoint</strong> vincula las preocupaciones de la audiencia interesada con un conjunto de convenciones. En la arquitectura basada en modelos, cada <strong>view</strong> puede ser verificada automáticamente contra su <strong>viewpoint</strong>.
  </p>

  <p>
    Los <strong>viewpoints</strong> comunes incluyen:
  </p>
  <ul>
    <li><strong>Module viewpoint</strong>: usado para expresar la implementación de un sistema de software en términos de sus módulos y su organización [2*];</li>
    <li><strong>Component and connector viewpoint</strong>: usado para expresar la organización en tiempo de ejecución a gran escala del software y sus interacciones [2*];</li>
    <li><strong>Logical viewpoint</strong>: usado para expresar conceptos fundamentales del dominio del software y sus capacidades [25];</li>
    <li><strong>Scenarios/use cases viewpoint</strong>: usado para expresar cómo interactúan los usuarios con el sistema [25];</li>
    <li><strong>Information viewpoint</strong>: usado para expresar los elementos clave de información de un sistema y cómo se accede a ellos y se almacenan [38*];</li>
    <li><strong>Deployment viewpoint</strong>: usado para expresar cómo se configura y despliega un sistema para su operación [38*].</li>
  </ul>

  <p>
    Otros <strong>viewpoints</strong> documentados incluyen aquellos para disponibilidad, comportamiento, comunicaciones, manejo de excepciones, rendimiento, confiabilidad, seguridad y protección.
  </p>

  <p>
    Cada <strong>viewpoint</strong> proporciona un vocabulario o lenguaje para hablar sobre un conjunto de preocupaciones y los mecanismos para abordarlas. El lenguaje del <strong>viewpoint</strong> brinda a los interesados un medio de expresión compartido.
  </p>

  <p>
    Los <strong>viewpoints</strong> no tienen por qué limitarse a un único sistema de software, sino que pueden ser reutilizados por una organización o comunidad de aplicaciones para muchos sistemas similares.
  </p>

  <p>
    Cuando se usan representaciones genéricas como el Lenguaje Unificado de Modelado (UML), estas pueden especializarse para el sistema, su dominio o las organizaciones involucradas. (Véase la sección 2.3 <em>Architecture Description Languages and Architecture Frameworks</em>.)
  </p>





  <hr>
  <strong>parentesis</strong>
    <div class="section">
    <span> ADs (Architecture Descriptions)</span>
    <p>
      Son documentos o productos de trabajo que representan la arquitectura de un sistema de software. Sirven como una representación tangible y compartida para distintos interesados.
    </p>
  </div>

  <div class="section">
    <span> Views (Vistas)</span>
    <p>
      Son formas específicas de representar ciertos aspectos de la arquitectura dentro de un AD. Cada vista se enfoca en una preocupación o conjunto de preocupaciones particular. Por ejemplo:
    </p>
    <ul>
      <li><strong>Vista lógica</strong> → requisitos funcionales</li>
      <li><strong>Vista de procesos</strong> → concurrencia</li>
      <li><strong>Vista física</strong> → despliegue</li>
      <li><strong>Vista de desarrollo</strong> → implementación</li>
    </ul>
  </div>

  <div class="section">
    <span> Viewpoints (Puntos de vista)</span>
    <p>
      Son conjuntos de reglas o convenciones que definen cómo construir una vista. Es decir, guían cómo se debe crear e interpretar cada tipo de vista.
    </p>
  </div>

  <div class="section summary">
    <p><strong> En resumen:</strong><br>
    <strong>AD</strong> = conjunto estructurado de vistas, y<br>
    cada <strong>vista</strong> = una representación parcial del sistema, orientada a ciertos interesados o preocupaciones.<br>
    Cada vista se basa en un <strong>viewpoint</strong>.
    </p>
  </div>
  <hr>





   <h3>2.3. Architecture Description Languages and Architecture Frameworks</h3>

  <p>
    Más allá de especificar formas de representación, un <strong>architecture viewpoint</strong> puede capturar las formas de trabajo dentro de una disciplina o comunidad de práctica.
  </p>

  <p>
    Por ejemplo, un <em>software reliability viewpoint</em> captura prácticas existentes de la comunidad de confiabilidad de software para identificar y analizar problemas de confiabilidad, formular alternativas y sintetizar y representar soluciones.
  </p>

  <p>
    Al igual que los manuales de ingeniería, los <strong>viewpoints</strong> de propósito general y especializados proporcionan un medio para documentar enfoques repetibles o reutilizables a problemas recurrentes del software.
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
