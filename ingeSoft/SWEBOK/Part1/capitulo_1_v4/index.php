 
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
    height: 250vh;
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
   
    <h1>INTRODUCCIÓN</h1> 
    
   <p>Los requerimientos del software deben considerarse desde dos perspectivas. La primera es como una expresión de las 
    necesidades y restricciones de un producto o proyecto de software que contribuyen a la solución de un problema 
    del mundo real. La segunda es la de las actividades necesarias para desarrollar y mantener los requerimientos de un 
    producto de software y del proyecto que lo construye. Ambas perspectivas se presentan en esta área de 
    conocimiento (KA).</p>

    <p>Si un equipo hace un mal trabajo al determinar los requerimientos, el proyecto, el producto o ambos probablemente 
    sufrirán costos adicionales, retrasos, cancelaciones y defectos. Una razón es que cada requisito de producto de 
    software generalmente conduce a muchas decisiones de diseño. Cada decisión de diseño generalmente conduce a muchas 
    decisiones a nivel de código. Cada decisión también puede involucrar varias decisiones de prueba. En otras palabras,
    determinar correctamente los requerimientos es un trabajo de alto riesgo. Si no se detectan y corrigen a tiempo, los 
    requerimientos faltantes, mal interpretados o incorrectos pueden inducir una reelaboración en cascada exponencial para 
    corregirlos.</p>

    <p>Los proyectos de software del mundo real tienden a sufrir dos problemas principales relacionados con los requerimientos:</p>
    <ol>
    <li>incompletitud: existen requerimientos de las partes interesadas y detalles necesarios que no se revelan ni 
        comunican a los ingenieros de software;</li>
    <li>ambigüedad: los requerimientos se comunican de una manera que permite múltiples interpretaciones, siendo solo 
        una de ellas correcta.</li>
    </ol>

<p>Más allá del papel evidente a corto plazo que juegan los requerimientos en la construcción inicial del software, también 
    juegan un papel menos reconocido pero igualmente importante en el mantenimiento a largo plazo. Al recibir software 
    sin documentación de respaldo, un ingeniero de software tiene varios medios para determinar qué hace ese código, 
    como ejecutarlo, recorrerlo con un depurador, ejecutarlo manualmente, analizarlo estáticamente, etc. El desafío es 
    determinar qué se supone que debe hacer ese código. Lo que generalmente se conoce como un bug —pero que es mejor 
    llamar un defecto— es simplemente una diferencia observable entre lo que se supone que el software debe hacer y lo 
    que realmente hace. El papel de la documentación de requerimientos a lo largo de la vida útil del software es capturar 
    y comunicar la intención a los ingenieros de software que mantienen el código pero que podrían no haber sido sus 
    autores originales.</p>

    <p>El área de conocimiento de Requisitos de Software se ocupa de desarrollar requerimientos de software y gestionar esos 
    requerimientos durante la vida útil del software. Esta área proporciona una comprensión de que los requerimientos 
    de software:</p>

    <ul>
    <li>no son necesariamente una actividad discreta del inicio del ciclo de vida del desarrollo de software, sino 
        más bien un proceso iniciado al comienzo de un proyecto que a menudo continúa refinándose durante toda la 
        vida útil del software;</li>
    <li>necesitan adaptarse al contexto de la organización y del proyecto.</li>
    </ul>

    <p>El término ingeniería de requerimientos se utiliza a menudo para denotar el manejo sistemático de los requerimientos. 
        Para mantener la consistencia, el término ingeniería no se usará en esta área excepto para referirse a la 
        ingeniería de software como tal.</p>

    <p>El área de conocimiento de Requisitos de Software está más estrechamente relacionada con las áreas de 
        Arquitectura de Software, Diseño de Software, Construcción de Software, Pruebas de Software y Mantenimiento 
        de Software, así como con el tema de modelos en el área de Modelos y Métodos de Ingeniería de Software, ya 
        que puede tener gran valor especificar los requerimientos en forma de modelos.</p>

    <p>Esta área también está relacionada con el tema de Ciclos de Vida del Software en el área de Procesos de 
    Ingeniería de Software, en el sentido de que el enfoque de esta área está en qué y cómo se puede y debe 
    realizar el trabajo de requerimientos, mientras que el ciclo de vida del proyecto determina cuándo se realiza 
    ese trabajo. Por ejemplo, en un ciclo de vida en cascada, todo el trabajo de requerimientos se realiza esencialmente 
    en una fase de Requisitos discreta y se espera que esté sustancialmente completo antes de que cualquier trabajo 
    de arquitectura, diseño y construcción ocurra en fases posteriores. Bajo algunos ciclos de vida iterativos, 
    el trabajo inicial de requerimientos de alto nivel se realiza durante una fase de Inicio, y se detalla más durante
     una o más fases de Elaboración. En un ciclo de vida Ágil, el trabajo de requerimientos se realiza de forma incremental, 
     justo a tiempo, a medida que se construye cada elemento adicional de funcionalidad.</p>

    <p>Los qué y los cómo del trabajo de requerimientos de software en un proyecto deben estar determinados por la 
    naturaleza del software que se construye, no por el ciclo de vida bajo el cual se construye. En la medida 
    en que la documentación de requerimientos captura y comunica la intención del software, los mantenedores 
    posteriores no deberían poder discernir el ciclo de vida utilizado en el desarrollo anterior solo a partir de 
    la forma de esos requerimientos.</p>

    <p>Esta área también está relacionada, aunque en menor medida, con las áreas de Gestión de la 
    Configuración de Software, Gestión de la Ingeniería de Software y Calidad de Software. Los enfoques de CM de software 
    se pueden aplicar para rastrear y gestionar los requerimientos; la calidad del software examina qué tan bien formados 
    están los requerimientos, y la gestión de la ingeniería puede usar el estado de los requerimientos para evaluar la 
    finalización del proyecto.</p>


 


    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
   
    <h1>DESGLOSE DE TEMAS DE LOS REQUERIMIENTOS DE SOFTWARE</h1>
<p>El desglose de temas para el área de conocimiento (KA) de Requisitos de Software se muestra en la Figura 1.1.</p>

<h2>1. Fundamentos de los Requisitos de Software</h2>

<h3>1.1. Definición de un Requisito de Software [1*, c1pp5-6] [2*, c4p102]</h3>
<p>Formalmente, un requisito de software ha sido definido como [28]:</p>
<ul>
  <li>una condición o capacidad necesaria para que un usuario resuelva un problema o logre un objetivo;</li>
  <li>una condición o capacidad que debe ser cumplida o poseída por un sistema o componente del sistema para
     satisfacer un contrato, norma, especificación u otro documento impuesto formalmente;</li>
  <li>una representación documentada de una capacidad como en (1) o (2) anteriores.</li>
</ul>
   
    <p>Esta definición formal se amplía en esta área de conocimiento para incluir expresiones de las necesidades 
        y restricciones de un proyecto de software.</p>
<p>En su forma más básica, un requisito de software es una propiedad que debe exhibirse para resolver un problema 
    del mundo real. Puede tener como objetivo automatizar total o parcialmente una tarea que respalde las políticas
     y procesos empresariales de una organización, corregir deficiencias del software existente o controlar un 
     dispositivo, entre otros muchos problemas para los cuales las soluciones de software son posibles.</p>

<p>Las políticas y procesos empresariales, así como las funciones de los dispositivos, suelen ser muy complejos. 
    Por extensión, los requerimientos de software suelen ser una combinación compleja de requerimientos provenientes de 
    varias partes interesadas en distintos niveles organizacionales que están involucradas o conectadas con algún 
    aspecto del entorno en el que operará el software.</p>

<p>Normalmente, los clientes y usuarios imponen requerimientos. Sin embargo, otras terceras partes, como autoridades 
    regulatorias y, en algunos casos, la propia organización de software o el proyecto, también pueden imponer 
    requerimientos. (Ver también [5, c1] [6, c1] [9, c4].)</p>

<h3>1.2. Categorías de Requisitos de Software [1*, c1pp7-12] [2*, s4.1]</h3>
<p>La Figura 1.2 muestra las categorías de requerimientos de software definidas en esta área de conocimiento y las 
    relaciones entre esas categorías. (Ver también [5, c1] [6, c1] [9, c4].) Cada categoría se describe con mayor 
    detalle a continuación.</p>

<h3>1.3. Requisitos del Producto de Software y Requisitos del Proyecto de Software [1*, c1pp14-15]</h3>
<p>Los requerimientos del producto de software especifican la forma, el ajuste o la función esperados del software.</p>
<p>Los requerimientos del proyecto de software —también llamados requerimientos del proceso o, a veces, requerimientos del 
    negocio— restringen el proyecto que construye el software. Los requerimientos del proyecto suelen restringir el 
    costo, el cronograma y/o el personal, pero también pueden restringir otros aspectos de un proyecto de software, 
    como entornos de prueba, migración de datos, capacitación de usuarios y mantenimiento.</p>

<p>Los requerimientos del proyecto de software pueden capturarse en un acta de constitución del proyecto u otro 
    documento de iniciación de proyecto de alto nivel. Son más relevantes para cómo se gestiona el proyecto
     (ver el área de conocimiento de Gestión de la Ingeniería de Software) o qué proceso de ciclo de vida debe 
     usarse (ver el área de conocimiento de Proceso de Ingeniería de Software). Esta área de conocimiento no 
     discute más los requerimientos del proyecto de software.</p>

    <img src="../../../../img/guia_49.png" alt="" width="600">
     
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
