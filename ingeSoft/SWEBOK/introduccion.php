 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre simplificación de expresiones matemáticas</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style.css">
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
    height: 325vh;
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
    <h2>INTRODUCCIÓN A LA GUÍA</h2>
<h3>Área de Conocimiento (KA)</h3>
<p><strong>SWEBOK</strong> Cuerpo de Conocimiento en Ingeniería de Software</p>

<p>
La publicación de la versión 2004 de esta Guía del Cuerpo de Conocimiento en Ingeniería de Software (SWEBOK 2004) fue un hito importante en el establecimiento de la ingeniería de software como una disciplina de ingeniería reconocida. El objetivo al desarrollar esta actualización de SWEBOK es mejorar la actualidad, legibilidad, consistencia y usabilidad de la Guía.
</p>

<p>
Todas las áreas de conocimiento (KAs) han sido actualizadas para reflejar los cambios en la ingeniería de software desde la publicación del SWEBOK 2004. Se han agregado cuatro nuevas áreas de conocimiento fundamentales y una KA de Prácticas Profesionales en Ingeniería de Software. La KA de Herramientas y Métodos de Ingeniería de Software ha sido revisada como Modelos y Métodos de Ingeniería de Software. Las herramientas de ingeniería de software ahora son un tema en cada una de las KAs. Tres apéndices proporcionan las especificaciones para la descripción de la KA, un conjunto anotado de normas relevantes para cada KA, y una lista de las referencias citadas en la Guía.
</p>

<p>
Esta Guía, escrita bajo los auspicios de la Junta de Actividades Profesionales de la IEEE Computer Society, representa un siguiente paso en la evolución de la profesión de la ingeniería de software.
</p>

<h3>¿QUÉ ES LA INGENIERÍA DE SOFTWARE?</h3>
<p>
El Vocabulario de Ingeniería de Sistemas y Software de ISO/IEC/IEEE (SEVOCAB) define la ingeniería de software como “la aplicación de un enfoque sistemático, disciplinado y cuantificable al desarrollo, operación y mantenimiento del software; es decir, la aplicación de la ingeniería al software”.<sup>1</sup>
</p>

<h3>¿CUÁLES SON LOS OBJETIVOS DE LA GUÍA SWEBOK?</h3>
<p>
La Guía no debe confundirse con el propio Cuerpo de Conocimiento, que existe en la literatura publicada. El propósito de la Guía es describir la porción del Cuerpo de Conocimiento que es generalmente aceptada, organizar esa porción y proporcionar acceso temático a la misma.
</p>

<p>
La Guía del Cuerpo de Conocimiento en Ingeniería de Software (Guía SWEBOK) se estableció con los siguientes cinco objetivos:
</p>

<ol>
  <li>Promover una visión coherente de la ingeniería de software en todo el mundo</li>
  <li>Especificar el alcance y clarificar el lugar de la ingeniería de software con respecto a otras disciplinas como la ciencia de la computación, la gestión de proyectos, la ingeniería informática y las matemáticas</li>
  <li>Caracterizar los contenidos de la disciplina de la ingeniería de software</li>
  <li>Proporcionar un acceso temático al Cuerpo de Conocimiento en Ingeniería de Software</li>
  <li>Proporcionar una base para el desarrollo de planes de estudio y para material de certificación y licenciamiento individual</li>
</ol>

<p>
El primero de estos objetivos, una visión coherente mundial de la ingeniería de software, fue respaldado por un proceso de desarrollo que involucró aproximadamente a 150 revisores de 33 países. Puede encontrarse más información sobre el proceso de desarrollo en el sitio web (<a href="http://www.swebok.org">www.swebok.org</a>). Se contactó a sociedades profesionales y académicas, así como a agencias públicas involucradas en la ingeniería de software, se les informó sobre este proyecto de actualización del SWEBOK y se les invitó a participar en el proceso de revisión. Se reclutaron editores de KAs de América del Norte, la Cuenca del Pacífico y Europa. Se hicieron presentaciones sobre el proyecto en diversos eventos internacionales.
</p>

<p>
El segundo de los objetivos, el deseo de especificar el alcance de la ingeniería de software, motiva la organización fundamental de la Guía. El material que se reconoce como perteneciente a esta disciplina está organizado en las quince KAs listadas en la Tabla I.1. Cada una de estas KAs se trata en un capítulo de esta Guía.
</p>


    <h3>Tabla I.1. Las 15 Áreas de Conocimiento (KA) del SWEBOK</h3>
<ul>
  <li>Requisitos del Software</li>
  <li>Diseño de Software</li>
  <li>Construcción de Software</li>
  <li>Pruebas de Software</li>
  <li>Mantenimiento de Software</li>
  <li>Gestión de la Configuración del Software</li>
  <li>Gestión de la Ingeniería de Software</li>
  <li>Proceso de Ingeniería de Software</li>
  <li>Modelos y Métodos de Ingeniería de Software</li>
  <li>Calidad de Software</li>
  <li>Práctica Profesional de la Ingeniería de Software</li>
  <li>Economía de la Ingeniería de Software</li>
  <li>Fundamentos de la Computación</li>
  <li>Fundamentos Matemáticos</li>
  <li>Fundamentos de la Ingeniería</li>
</ul>

<p>
Al especificar el alcance, también es importante identificar las disciplinas que se cruzan con la ingeniería de software. Con este fin, SWEBOK V3 también reconoce siete disciplinas relacionadas, enumeradas en la Tabla I.2. Los ingenieros de software deben, por supuesto, tener conocimientos del material de estas disciplinas (y las descripciones de las KAs en esta Guía pueden hacer referencia a ellas). Sin embargo, no es un objetivo de la Guía SWEBOK caracterizar el conocimiento de las disciplinas relacionadas.
</p>

<h3>Tabla I.2. Disciplinas Relacionadas</h3>
<ul>
  <li>Ingeniería Informática</li>
  <li>Ciencia de la Computación</li>
  <li>Gestión General</li>
  <li>Matemáticas</li>
  <li>Gestión de Proyectos</li>
  <li>Gestión de la Calidad</li>
  <li>Ingeniería de Sistemas</li>
</ul>

<p>
Los elementos relevantes de la ciencia de la computación y las matemáticas se presentan en las KAs de Fundamentos de la Computación y Fundamentos Matemáticos de la Guía (Capítulos 13 y 14).
</p>

 

    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h3>ORGANIZACIÓN JERÁRQUICA</h3>
<p>
La organización de los capítulos de las KAs respalda el tercero de los objetivos del proyecto: una caracterización del contenido de la ingeniería de software. Las especificaciones detalladas proporcionadas por el equipo editorial del proyecto a los editores asociados respecto al contenido de las descripciones de las KAs se pueden encontrar en el Apéndice A.
</p>

<p>
La Guía utiliza una organización jerárquica para descomponer cada KA en un conjunto de temas con etiquetas reconocibles. Una descomposición en dos niveles (a veces tres) proporciona una forma razonable de encontrar temas de interés. La Guía trata los temas seleccionados de una manera compatible con las principales escuelas de pensamiento y con desgloses comúnmente encontrados en la industria y en la literatura y normas de la ingeniería de software. 
</p>

<p>
Los desgloses de temas no presuponen dominios de aplicación particulares, usos empresariales, filosofías de gestión, métodos de desarrollo, y demás. La extensión de la descripción de cada tema es solo la necesaria para comprender la naturaleza generalmente aceptada de los temas y para que el lector pueda encontrar con éxito el material de referencia; el Cuerpo de Conocimiento se encuentra en los materiales de referencia en sí, no en la Guía.
</p>

<h3>MATERIAL DE REFERENCIA Y MATRIZ</h3>
<p>
Para proporcionar acceso temático al conocimiento—el cuarto de los objetivos del proyecto—la Guía identifica material de referencia autorizado para cada KA. El Apéndice C proporciona una Lista Consolidada de Referencias para la Guía. Cada KA incluye referencias relevantes de la Lista Consolidada de Referencias y también incluye una matriz que relaciona el material de referencia con los temas incluidos.
</p>

<p>
Debe señalarse que la Guía no intenta ser exhaustiva en sus citas. Mucho material que es adecuado y excelente no está referenciado. El material incluido en la Lista Consolidada de Referencias proporciona cobertura de los temas descritos.
</p>

<h3>PROFUNDIDAD DEL TRATAMIENTO</h3>
<p>
Para lograr el quinto objetivo del SWEBOK —proporcionar una base para el desarrollo de planes de estudio,
 certificación y licenciamiento— se ha aplicado el criterio de conocimiento generalmente aceptado, el cual 
 debe distinguirse del conocimiento avanzado y de investigación (por su grado de madurez) y del conocimiento 
 especializado (por su generalidad de aplicación).
</p>


<p>
El término equivalente “generalmente reconocido” proviene del Project Management Institute: “Generalmente reconocido significa que el conocimiento y las prácticas descritas son aplicables a la mayoría de los proyectos la mayor parte del tiempo, y existe consenso sobre su valor y utilidad”.<sup>2</sup>
</p>

<p>
Sin embargo, los términos “generalmente aceptado” o “generalmente reconocido” no implican que el conocimiento designado deba aplicarse de manera uniforme a todos los proyectos de ingeniería de software —las necesidades de cada proyecto lo determinan— pero sí implica que los ingenieros de software competentes y capacitados deben estar equipados con este conocimiento para su aplicación potencial. Más precisamente, el conocimiento generalmente aceptado debería estar incluido en el material de estudio para el examen de licenciamiento en ingeniería de software que los graduados presentarían después de haber adquirido cuatro años de experiencia laboral. Aunque este criterio es específico del estilo educativo de los Estados Unidos y no necesariamente se aplica a otros países, lo consideramos útil.
</p>

<h3>ESTRUCTURA DE LAS DESCRIPCIONES DE LAS KAs</h3>
<p>
Las descripciones de las KAs están estructuradas de la siguiente manera. En la introducción se presenta una breve definición del área de conocimiento y una visión general de su alcance y su relación con otras KAs.
</p>

<p>
La descomposición de temas en cada KA constituye el núcleo de la descripción de la KA, describiendo la descomposición del área en subáreas, temas y subtemas. Para cada tema o subtema, se ofrece una breve descripción, junto con una o más referencias.
</p>

<p>
El material de referencia fue seleccionado porque se considera que constituye la mejor presentación del conocimiento relativo al tema. Una matriz vincula los temas con el material de referencia.
</p>

<p>
La última parte de cada descripción de KA es la lista de referencias recomendadas y (opcionalmente) lecturas complementarias. Las normas relevantes para cada KA se presentan en el Apéndice B de la Guía.
</p>

<h3>APÉNDICE A. ESPECIFICACIONES PARA LA DESCRIPCIÓN DE LAS KAs</h3>
<p>
El Apéndice A describe las especificaciones proporcionadas por el equipo editorial a los editores asociados respecto al contenido, referencias recomendadas, formato y estilo de las descripciones de las KAs.
</p>

<h3>APÉNDICE B. ASIGNACIÓN DE NORMAS A LAS KAs</h3>
<p>
El Apéndice B es una lista anotada de las normas relevantes, en su mayoría de IEEE e ISO, para cada una de las KAs de la Guía SWEBOK.
</p>

<h3>APÉNDICE C. LISTA CONSOLIDADA DE REFERENCIAS</h3>
<p>
El Apéndice C contiene la lista consolidada de referencias recomendadas citadas en las KAs (estas referencias están marcadas con un asterisco (*) en el texto).
</p>

<hr>
 <h3>Resumen</h3>
<p>
La Guía SWEBOK (Software Engineering Body of Knowledge) no es en sí el cuerpo completo del conocimiento, sino una guía estructurada que:
</p>
<ul>
  <li>Identifica</li>
  <li>Organiza</li>
  <li>Resume</li>
  <li>Da acceso temático al conocimiento generalmente aceptado en la ingeniería de software</li>
</ul>

<p>
Ese conocimiento está estructurado en 15 KAs principales (como Requisitos del Software, Diseño, Pruebas, Mantenimiento, etc.).
</p>

<p>
Entonces, el núcleo de la Guía —su "cuerpo central"— son las descripciones detalladas de cada KA, las cuales explican:
</p>
<ul>
  <li>Subáreas</li>
  <li>Tópicos y sub-tópicos</li>
  <li>Referencias clave</li>
  <li>Estándares relevantes</li>
</ul>

<p>
Por tanto, podríamos decir que los KAs constituyen el cuerpo estructurado y organizado de la Guía.
</p>
 

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
