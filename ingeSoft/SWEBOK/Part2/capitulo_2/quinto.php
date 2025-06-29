  
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
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

    <h4>3.2.2. Síntesis de Arquitectura</h4>
  <p>
    La <strong>síntesis de arquitectura</strong> desarrolla soluciones candidatas en respuesta a los resultados del análisis de arquitectura. La síntesis avanza elaborando soluciones detalladas a los problemas de diseño identificados por los <em>ASRs</em>, y realiza compromisos para acomodar las interacciones entre dichas soluciones.
  </p>
  <p>
    Estos resultados retroalimentan el análisis de arquitectura, generando ASRs, principios y decisiones más elaborados, que a su vez conducen a más elementos detallados de solución.
  </p>

  <h4>3.2.3. Evaluación de Arquitectura</h4>
  <p>
    La <strong>evaluación de arquitectura</strong> valida si las soluciones elegidas satisfacen los ASRs y cuándo y dónde se requiere retrabajo. Los métodos de evaluación de arquitectura se discuten en el tema 4, <em>Software Architecture Evaluation</em>.
  </p>

  <h3>3.3. Prácticas, Métodos y Tácticas de Arquitectura</h3>
  <p><strong>[2*c19-23, 38*c9-14, 5, 8, 14, 15, 16, 21, 25, 35]</strong></p>
  <p>
    Existen varios métodos de arquitectura documentados (consulta las <em>Further Readings</em> para una lista). Estos métodos ofrecen enfoques diversos para aplicar prácticas y tácticas arquitectónicas en distintos contextos de desarrollo de software.
  </p>

  <h3>3.4. Arquitectura en Gran Escala</h3>
  <p><strong>[29*]</strong></p>
  <p>
    El diseño arquitectónico denota una etapa específica del ciclo de vida, pero es solo una parte del trabajo de arquitecturación de software (<em>software architecting</em>). Como se señaló en la sección 3.1 <em>Architecture in Context</em>, la arquitecturación no ocurre en el vacío, sino en un entorno que a menudo incluye otras arquitecturas.
  </p>
  <p>
    Por ejemplo, una arquitectura de aplicación debe ajustarse a una arquitectura empresarial; para "integrarse bien" en un sistema de sistemas, la arquitectura de cada sistema componente debe ajustarse a la arquitectura del sistema de sistemas. En tales casos, estas relaciones deben reflejarse como ASRs sobre el software que se está arquitectando.
  </p>
  <p>
    Muchas actividades y principios de arquitecturación de software no se limitan únicamente al software, sino que se aplican por igual a la arquitecturación de sistemas y empresarial [29].
  </p>

  <p>
    Weinreich y Buchgeher han extendido el modelo de Hofmeister et al., utilizado en la sección 3.2 <em>Architectural Design</em>, para incluir las siguientes actividades [42]:
  </p>

  <ul>
    <li><strong>Implementación de la arquitectura</strong>: supervisar la implementación y certificar que las implementaciones se ajusten a la arquitectura.</li>
    <li><strong>Mantenimiento de la arquitectura</strong>: gestionar y extender la arquitectura después de su implementación.</li>
    <li><strong>Gestión de arquitectura</strong>: gestionar el portafolio de arquitecturas interrelacionadas de una organización.</li>
    <li><strong>Gestión del conocimiento arquitectónico</strong>: extraer, mantener, compartir y explotar activos de arquitectura reutilizables, incluyendo decisiones, lecciones aprendidas, especificaciones y documentación en toda la organización.</li>
  </ul>

  


   <h2>4. Evaluación de Arquitectura de Software</h2>
  <p><strong>[2*c21, 38*c14, 41*c8, 10, 31, 33]</strong></p>

  <h3>4.1. “Bondad” en la Arquitectura</h3>
  <p><strong>[2*c2, 3, 10, 31]</strong></p>

  <p>
    El análisis de arquitectura ocurre a lo largo de todo el proceso de creación y mantenimiento de una arquitectura. La evaluación de arquitectura suele ser realizada por terceros en hitos determinados como una forma de evaluación formal.
  </p>

  <p>
    Dada la naturaleza multi-preocupación y multidisciplinaria de la arquitectura de software, existen muchos aspectos que determinan qué hace que una arquitectura sea “buena”. El arquitecto romano Vitruvio propuso que todos los edificios deberían tener los atributos de <em>firmitas</em>, <em>utilitas</em> y <em>venustas</em> (traducido del latín como solidez, utilidad y belleza).
  </p>

  <p>
    De un sistema de software y su arquitectura, uno puede preguntarse:
  </p>

  <ul>
    <li>¿Es robusto a lo largo de su vida útil y su posible evolución?</li>
    <li>¿Es adecuado para su propósito previsto?</li>
    <li>¿Es factible y rentable construir sistemas de software utilizando esta arquitectura?</li>
    <li>¿Es, si no hermosa, al menos clara y comprensible para quienes deben construir, utilizar y mantener el software?</li>
  </ul>

  <p>
    Cada preocupación arquitectónica puede ser una base para la evaluación. La evaluación se realiza en función de los requerimientos (cuando están disponibles) o en función de necesidades, expectativas y normas (en otras situaciones).
  </p>

  <p>
    Una arquitectura “buena” debe abordar no solo las preocupaciones individuales de sus stakeholders, sino también las consecuencias de la interacción entre ellas. Por ejemplo, una arquitectura segura puede resultar excesivamente costosa de construir y verificar; una arquitectura fácil de construir puede no ser mantenible a lo largo de la vida del sistema si no puede incorporar nuevas tecnologías.
  </p>

  <p>
    El <strong>Método de Análisis de Compromisos Arquitectónicos (ATAM, por sus siglas en inglés)</strong> [10] proporciona un enfoque metódico para evaluar arquitecturas de software basadas en atributos de calidad mediante un <em>árbol de utilidad</em> (utility tree) y escenarios que ilustran dichas cualidades. El análisis de compromisos entre requisitos de calidad en conflicto y los enfoques arquitectónicos relacionados es clave para la evaluación de la arquitectura.
  </p>

  <p>
    Clements et al. describen varios métodos de evaluación, incluyendo ATAM, el <em>Método de Análisis de Arquitectura de Software</em> (SAAM), y los <em>Talleres de Atributos de Calidad</em> (QAW) [10]. El <em>Informe SARA</em> define un marco general para la evaluación de arquitectura de software [31].
  </p>

 
    </form>
</div>




<div class="seccion derecha">
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
   <h3>4.2. Razonamiento sobre Arquitecturas</h3>
  <p><strong>[38*c10, 3, 10, 31]</strong></p>

  <p>
    Cada preocupación arquitectónica tiene una base distinta para su evaluación. La evaluación es más efectiva cuando se basa en descripciones arquitectónicas existentes y robustas. Las <em>ADs</em> (descripciones arquitectónicas) pueden ser consultadas, examinadas y analizadas.
  </p>

  <p>
    Por ejemplo, la evaluación de funcionalidad o comportamiento se beneficia al tener una vista arquitectónica explícita u otra representación de ese aspecto del sistema a estudiar. Preocupaciones especializadas como confiabilidad, seguridad y protección suelen depender de representaciones especializadas de sus respectivas disciplinas.
  </p>

  <p>
    A menudo, la documentación arquitectónica está incompleta, desactualizada o no existe. En tales casos, el esfuerzo de evaluación debe basarse en el conocimiento de los participantes como fuente principal de información.
  </p>

  <p>
    Los <em>casos de uso</em> se utilizan con frecuencia para verificar la completitud y consistencia de una arquitectura (ver <em>Software Engineering Models and Methods KA</em>), comparando los pasos en el caso de uso con los elementos arquitectónicos que estarían involucrados en la ejecución de esos pasos [23].
  </p>

  <p>
    Para un marco general sobre cómo razonar sobre varias preocupaciones, véase Bass et al. [3].
  </p>


  <h3>4.3. Revisiones de Arquitectura</h3>
  <p><strong>[2*c21, 1, 31]</strong></p>

  <p>
    Las revisiones de arquitectura son un enfoque eficaz para evaluar el estado y la calidad de una arquitectura y para identificar riesgos al evaluar una o más preocupaciones arquitectónicas [1]. Muchas revisiones son informales o se basan en la experiencia, y algunas están más estructuradas, organizadas en torno a una lista de verificación de temas a cubrir.
  </p>

  <p>
    Parnas y Weiss propusieron un enfoque eficaz para realizar revisiones, llamado <em>revisiones activas</em> [33], en las cuales, en lugar de listas de verificación, cada ítem de evaluación implica una actividad específica por parte de un revisor para obtener la información necesaria.
  </p>

  <p>
    Muchas organizaciones han institucionalizado prácticas de revisión arquitectónica. Por ejemplo, un grupo de la industria desarrolló un marco para definir, llevar a cabo y documentar revisiones de arquitectura y sus resultados [31].
  </p>

  <h3>4.4. Métricas de Arquitectura</h3>
  <p><strong>[2*c23]</strong></p>

  <p>
    Una <strong>métrica de arquitectura</strong> es una medida cuantitativa de una característica de una arquitectura. Se han definido diversas métricas arquitectónicas. Muchas de estas se originaron como métricas de diseño o de código que han sido "elevadas" para aplicarse a la arquitectura.
  </p>

  <p>
    Las métricas incluyen:
  </p>

  <ul>
    <li>Dependencia entre componentes</li>
    <li>Ciclicidad y complejidad ciclomática</li>
    <li>Complejidad interna del módulo</li>
    <li>Acoplamiento y cohesión de módulos</li>
    <li>Niveles de anidamiento</li>
    <li>Cumplimiento del uso de patrones, estilos y APIs requeridas</li>
  </ul>

  <p>
    En paradigmas de desarrollo continuo (como DevOps), han surgido otras métricas que no se enfocan directamente en la arquitectura, sino en la capacidad de respuesta del proceso. Estas métricas incluyen:
  </p>

  <ul>
    <li>Tiempo de entrega de cambios (<em>lead time</em>)</li>
    <li>Frecuencia de despliegue</li>
    <li>Tiempo promedio para restaurar el servicio</li>
    <li>Tasa de fallos en los cambios</li>
  </ul>

  <p>
    Estas métricas son indicativas del estado de la arquitectura y su impacto en la capacidad de evolución del sistema.
  </p>
<hr>
<strong>resumen</strong>
 <h2>🔷 Capítulo 2: <em>Software Architecture</em></h2>
  <p>Este capítulo explora la arquitectura de software desde distintas perspectivas: conceptos fundamentales, descripción y representación, el proceso arquitectónico y su evaluación.</p>

  <h3>🔹 1. Fundamentos de la Arquitectura de Software</h3>
  <p><strong>"Arquitectura"</strong> tiene varios significados:</p>
  <ul>
    <li><strong>Como disciplina:</strong> arte y ciencia de construir sistemas software.</li>
    <li><strong>Como proceso:</strong> diseño arquitectónico, diseño de alto nivel y diseño detallado.</li>
    <li><strong>Como resultado:</strong> la arquitectura resultante, representada mediante descripciones formales.</li>
  </ul>

  <p>Las definiciones han evolucionado. Ejemplo moderno:</p>
  <blockquote>
    "Conjunto de estructuras necesarias para razonar sobre el sistema, que incluye elementos software, relaciones y propiedades."
  </blockquote>

  <p>La arquitectura debe considerar el <strong>entorno del sistema</strong> (usuarios, hardware, organizaciones).</p>

 
    </form>
</div> 

<div class="centered-container">
    <a
        name="siguiente" 
        id="siguiente"
        class="btn btn-primary"
        href="sexto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
