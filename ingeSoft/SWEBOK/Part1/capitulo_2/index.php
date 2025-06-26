 
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
    height: 290vh;
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
       <h1>Arquitectura de Software</h1>
  <h2>INTRODUCCIÓN</h2>
  <p>
    Este capítulo considera la arquitectura de software desde varias perspectivas: conceptos; representación y productos de trabajo; contexto, proceso y métodos; y análisis y evaluación.
  </p>
  <p>
    En contraste con la edición anterior, esta edición crea un área de conocimiento (KA) de arquitectura de software, separada del área de conocimiento de diseño de software, debido al significativo interés y crecimiento de la disciplina desde los años 90.
  </p>

  <h2>DESGLOSE DE TEMAS DE LA ARQUITECTURA DE SOFTWARE</h2>
  <p>
    El desglose de temas para el área de conocimiento de Arquitectura de Software se muestra en la Figura 2.1.
  </p>

  <h3>1. Fundamentos de la Arquitectura de Software</h3>
  <h4>1.1. Los sentidos de “Arquitectura”</h4>
  <p>
    La ingeniería de software y disciplinas relacionadas usan muchos sentidos del término “arquitectura”. 
  </p>
  <p>
    Primero, “arquitectura” a menudo se refiere a una disciplina: el arte y la ciencia de construir cosas — en este caso, sistemas intensivos en software. La disciplina involucra conceptos, principios, procesos y métodos que la comunidad ha descubierto y adoptado.
  </p>
  <p>
    Segundo, “arquitectura” se refiere a los diversos procesos mediante los cuales se materializa esa disciplina. La arquitectura de software también se considera parte del diseño de software; generalmente se considera un proceso de múltiples etapas, dividido en las siguientes etapas:
  </p>
  <ul>
    <li>Etapa de diseño arquitectónico</li>
    <li>Etapa de diseño de alto nivel</li>
    <li>Etapa de diseño detallado</li>
  </ul>
  <p>
    El diseño de software es el foco del Capítulo 3. Este capítulo se enfoca en la arquitectura y el diseño arquitectónico.
  </p>
  <p>
    Tercero, “arquitectura” se refiere al resultado de aplicar la disciplina y los procesos del diseño arquitectónico para idear arquitecturas para sistemas de software. Las arquitecturas como resultados se expresan en descripciones de arquitectura. Esto se discute en el tema <em>Descripción de la Arquitectura de Software</em>.
  </p>
  <p>
    El concepto de arquitectura ha evolucionado, y hoy en día existen muchas definiciones en uso. Una definición temprana de arquitectura, de 1990, enfatizaba la estructura del software:
  </p>
  <blockquote>
    <strong>Arquitectura.</strong> La estructura organizacional de un sistema o componente. [de: IEEE Std 610.12–1990, IEEE Glossary of Software Engineering Terminology]
  </blockquote>
  <p>
    Esta definición no hacía justicia al pensamiento evolutivo sobre arquitectura; por ejemplo, esta definición no nos permite distinguir el diseño detallado de un módulo de su archivo <code>Makefile</code>. Cualquiera de los ejemplos refleja una estructura organizacional del sistema o componente de software, pero no debería considerarse arquitectura. 
  </p>
  <p>
    Además, el énfasis en la estructura a menudo se limitaba a la estructura del código y no lograba abarcar todas las estructuras del sistema de software:
  </p>
  <blockquote>
    La arquitectura de software de un sistema es el conjunto de estructuras necesarias para razonar sobre el sistema. Estas estructuras comprenden elementos de software, relaciones entre ellos, y propiedades de ambos. [2*]
  </blockquote>


  <img src="../../../../img/mapa.png" alt="">
  <hr>
  <strong>parentesis</strong>

   <p>El texto está criticando definiciones de <strong>"arquitectura de software"</strong> que eran demasiado vagas, al punto que no diferenciaban entre:</p>

  <ul>
    <li>Decisiones de <strong>alto nivel</strong> (arquitectura verdadera), y</li>
    <li>Decisiones de <strong>bajo nivel o de implementación</strong> (como <code>Makefiles</code> o diseño detallado de funciones).</li>
  </ul>

  <p>Ambos (diseño detallado y <code>Makefile</code>) muestran estructuras, <strong>pero no son arquitectura</strong>.</p>

  <hr>


   
    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
      <h2>Evolución de la Disciplina</h2>
  <p>
    Sin embargo, a mediados de los años 1990, la arquitectura de software emergió como una disciplina más amplia que involucra un estudio más genérico de las estructuras y arquitecturas de software.
  </p>
  <p>
    Muchas estructuras de sistemas de software no se reflejan directamente en la estructura del código. Ambos tipos de estructuras tienen implicaciones para el sistema en su totalidad: ¿Qué comportamientos es capaz de realizar el sistema? ¿Qué interacciones tiene con otros sistemas? ¿Cómo se manejan propiedades como la seguridad y la protección?
  </p>
  <p>
    El reconocimiento de que el software contiene muchas estructuras diferentes ha motivado la discusión de varios conceptos interesantes sobre la arquitectura de software (y el diseño de software en general), lo cual ha llevado a definiciones actuales como la siguiente:
  </p>
  <blockquote>
    <strong>Arquitectura (de un sistema).</strong> Conceptos o propiedades fundamentales de un sistema en su entorno, plasmados en sus elementos, relaciones y en los principios de su diseño y evolución. [23]
  </blockquote>
  <p>
    Las ideas clave en esa definición son las siguientes:
  </p>
  <ol>
    <li>
      La arquitectura trata sobre lo que es fundamental para un sistema de software; no todo elemento, interconexión o interfaz se considera fundamental.
    </li>
    <li>
      La arquitectura considera un sistema en su entorno. Al igual que la arquitectura de edificios, la arquitectura de software tiene una mirada hacia el exterior; considera el contexto del sistema más allá de sus límites, incluyendo las personas, organizaciones, software, hardware y otros dispositivos con los que el sistema debe interactuar.
    </li>
  </ol>
  




     <h3>1.2. Interesados y Preocupaciones</h3>
  <p><strong>[2*c3-14, 38*c8-9, 41*c3, 12, 23, 24]</strong></p>

  <p>
    Un sistema de software tiene muchos interesados con roles e intereses diversos respecto a ese sistema. Estos intereses variados se denominan <em>preocupaciones</em>, siguiendo la separación de preocupaciones de Dijkstra:
  </p>

  <blockquote>
    Permítanme tratar de explicarles lo que, a mi gusto, es característico de todo pensamiento inteligente. Es estar dispuesto a estudiar en profundidad un aspecto de un tema de forma aislada por el bien de su propia coherencia, sabiendo todo el tiempo que uno se está ocupando solo de uno de los aspectos. Sabemos que un programa debe ser correcto y podemos estudiarlo solo desde ese punto de vista; también sabemos que debe ser eficiente y podemos estudiar su eficiencia en otro momento, por así decirlo. En otro estado de ánimo podemos preguntarnos si el programa es deseable y, si lo es, por qué. Pero no se gana nada — ¡al contrario! — tratando de abordar estos diversos aspectos simultáneamente. Es lo que a veces he llamado "la separación de preocupaciones", que, aunque no sea perfectamente posible, es sin embargo la única técnica disponible para ordenar efectivamente los pensamientos, que yo conozco. Esto es lo que quiero decir con "[centrar] la atención en algún aspecto": no significa ignorar los otros aspectos, simplemente es hacer justicia al hecho de que, desde el punto de vista de este aspecto, los otros son irrelevantes. Es tener una mentalidad tanto única como múltiple a la vez. [12]
  </blockquote>

  <p>
    Lo que es fundamental acerca de un sistema varía según las preocupaciones y los roles de los interesados. Por lo tanto, las estructuras de software también varían con los roles y preocupaciones de los interesados. (Véase también el tema <em>Métodos de Diseño</em> en el área de conocimiento de Diseño de Software).
  </p>

  <p>
    El cliente de un sistema de software está más interesado en saber cuándo estará listo el sistema y cuánto costará construirlo y operarlo.
  </p>

  <p>
    Los usuarios están más interesados en qué hace el sistema y cómo usarlo. Los diseñadores y programadores que construyen el sistema tienen sus propias preocupaciones, como si un algoritmo cumplirá con los requerimientos del sistema. Aquellos responsables de asegurar que el sistema sea seguro para operar tienen preocupaciones diferentes.
  </p>


    <img src="../../../../img/concerns.png" alt="">

    <br><br>
     <p>
    Las preocupaciones abarcan una amplia gama de aspectos, posiblemente relacionados con cualquier influencia sobre un sistema en su entorno, incluyendo influencias de tipo desarrollador, tecnológico, empresarial, operativo, organizacional, político, económico, legal, regulatorio, ecológico y social.
  </p>

  <p>
    Al igual que los requerimientos de software, las preocupaciones pueden clasificarse como funcionales, no funcionales o restricciones. (Véase el área de conocimiento de Requerimientos de Software).
  </p>

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
