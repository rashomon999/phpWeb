 
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
    height: 300vh;
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
    <h2>CAPÍTULO 1<br>REQUISITOS DEL SOFTWARE</h2>

    <h3>ACRÓNIMOS</h3>
    <ul>
    <li><strong>CIA</strong>: Confidencialidad, Integridad y Disponibilidad (Confidentiality, Integrity, and Availability)</li>
    <li><strong>DAG</strong>: Grafo Acíclico Dirigido (Directed Acyclic Graph)</l>
    <li><strong>FSM</strong>: Medición del Tamaño Funcional (Functional Size Measurement)</li>
    <li><strong>INCOSE</strong>: Consejo Internacional sobre Ingeniería de Sistemas (International Council on Systems Engineering)</li>
    <li><strong>UML</strong>: Lenguaje Unificado de Modelado (Unified Modeling Language)</li>
    <li><strong>SysML</strong>: Lenguaje de Modelado de Sistemas (Systems Modeling Language)</li>
    </ul>

    <h3>INTRODUCCIÓN</h3>
    <p>
    El área de conocimiento (KA) de Requisitos del Software se ocupa de la obtención, análisis, especificación y 
    validación de los requisitos de software, así como de la gestión de los requisitos durante todo el ciclo de 
    vida del producto software.
    </p>

    <p>
    Es ampliamente reconocido entre investigadores y profesionales de la industria que los proyectos de software
    son críticamente vulnerables cuando las actividades relacionadas con los requisitos se realizan de manera deficiente.
    </p>

    <p>
    Los requisitos de software expresan las necesidades y restricciones impuestas a un producto software que 
    contribuyen a la solución de algún problema del mundo real.
    </p>

    <p>
    El término “ingeniería de requisitos” se utiliza ampliamente en el campo para denotar el tratamiento sistemático
    de los requisitos. Por razones de consistencia, el término “ingeniería” no se utilizará en esta KA, excepto para
    referirse a la ingeniería de software propiamente dicha.
    </p>

    <p>
    Por la misma razón, “ingeniero de requisitos”, un término que aparece en parte de la literatura, tampoco 
    será utilizado. En su lugar, se usará el término “ingeniero de software” o, en algunos casos específicos,
    “especialista en requisitos”, este último cuando el rol en cuestión suele ser desempeñado por una persona 
    distinta al ingeniero de software. Sin embargo, esto no implica que un ingeniero de software no pueda 
    desempeñar dicha función.
    </p>

    <p>
    Un riesgo inherente a la descomposición propuesta es que se infiera un proceso de tipo cascada. Para
    prevenir esto, el tema 2, Proceso de Requisitos, está diseñado para proporcionar una visión general de 
    alto nivel del proceso de requisitos al establecer los recursos y restricciones bajo los cuales opera el
    proceso y que actúan para configurarlo.
    </p>

    <p>
    Una descomposición alternativa podría usar una estructura basada en el producto (requisitos del sistema, 
    requisitos de software, prototipos, casos de uso, etc.). La descomposición basada en procesos refleja el
    hecho de que el proceso de requisitos, si se desea que tenga éxito, debe considerarse como un proceso que 
    involucra actividades complejas y estrechamente acopladas (tanto secuenciales como concurrentes), más que 
    como una actividad discreta y única realizada al comienzo de un proyecto de desarrollo de software.
    </p>

    <p>
    La KA de Requisitos del Software está estrechamente relacionada con las KAs de Diseño de Software, 
    Pruebas de Software, Mantenimiento de Software, Gestión de la Configuración del Software, Gestión de la 
    Ingeniería de Software, Proceso de Ingeniería de Software, Modelos y Métodos de Ingeniería de Software, 
    y Calidad del Software.
    </p>

    <h3>DESCOMPOSICIÓN DE TEMAS PARA REQUISITOS DEL SOFTWARE</h3>
    <p>
    La descomposición de temas para la KA de Requisitos del Software se muestra en la Figura 1.1.
    </p>

    <h4>1. Fundamentos de los Requisitos del Software</h4>
    <p>[1*, c4, c4s1, c10s1, c10s4] [2*, c1, c6, c12]</p>

    <h5>1.1. Definición de un Requisito de Software</h5>
    <p>
    En su forma más básica, un requisito de software es una propiedad que debe ser exhibida por algo para 
    poder resolver un problema del mundo real. Puede tener como objetivo automatizar parte de una tarea 
    para alguien, apoyar los procesos empresariales de una organización, corregir deficiencias del software 
    existente o controlar un dispositivo, por nombrar solo algunos de los muchos problemas para los que las 
    soluciones software son posibles.
    </p>

    <p>
    Las formas en que los usuarios, los procesos empresariales y los dispositivos funcionan son típicamente
    complejas. Por extensión, por tanto, los requisitos sobre un software particular son típicamente una
    combinación compleja proveniente de diversas personas en distintos niveles de una organización, quienes
    están involucradas o conectadas de algún modo con esta característica del entorno en el que operará el software.
    </p>


    <img src="../../../../img/requirements.png" alt="" width="720">  
    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <p>
Una propiedad esencial de todos los requisitos de software es que puedan ser verificables, ya sea como una característica individual en forma de requisito funcional, o a nivel del sistema como un requisito no funcional. Puede ser difícil o costoso verificar ciertos requisitos de software. Por ejemplo, la verificación del requisito de rendimiento en un centro de llamadas puede requerir el desarrollo de software de simulación. El personal de requisitos de software, pruebas de software y calidad debe asegurarse de que los requisitos puedan verificarse dentro de las limitaciones de recursos disponibles.
</p>

<p>
Los requisitos tienen otros atributos además de las propiedades de comportamiento. Ejemplos comunes incluyen una calificación de prioridad para permitir decisiones de compensación ante recursos limitados, y un valor de estado para permitir el seguimiento del progreso del proyecto. Típicamente, los requisitos de software se identifican de forma única para que puedan estar sujetos a gestión de configuración de software durante todo el ciclo de vida de la característica y del software.
</p>

<h5>1.2. Requisitos de Producto y de Proceso</h5>

<p>
Un requisito de producto es una necesidad o restricción sobre el software a desarrollar (por ejemplo, “El software deberá verificar que un estudiante cumpla con todos los prerrequisitos antes de inscribirse en un curso”).
</p>

<p>
Un requisito de proceso es esencialmente una restricción sobre el desarrollo del software (por ejemplo, “El software deberá ser desarrollado utilizando un proceso RUP”).
</p>

<p>
Algunos requisitos de software generan requisitos de proceso implícitos. La elección de una técnica de verificación es un ejemplo. Otro podría ser el uso de técnicas de análisis particularmente rigurosas (como métodos de especificación formal) para reducir fallas que puedan conducir a una confiabilidad inadecuada. Los requisitos de proceso también pueden ser impuestos directamente por la organización de desarrollo, su cliente o una tercera parte como un organismo regulador de seguridad.
</p>


    <h5>1.3. Requisitos Funcionales y No Funcionales</h5>

<p>
Los requisitos funcionales describen las funciones que el software debe ejecutar; por ejemplo, dar formato a un texto o modular una señal. A veces se les conoce como capacidades o funcionalidades. 
Un requisito funcional también puede describirse como aquel para el cual puede escribirse un conjunto finito de pasos de prueba para validar su comportamiento.
</p>

<p>
Los requisitos no funcionales son aquellos que actúan como restricciones de la solución. A veces se les conoce como restricciones o requisitos de calidad. 
Pueden clasificarse además según si son requisitos de rendimiento, requisitos de mantenibilidad, requisitos de seguridad, requisitos de confiabilidad, requisitos de seguridad informática, requisitos de interoperabilidad, u otro de los muchos tipos de requisitos de software 
(ver Modelos y Características de Calidad en la KA de Calidad de Software).
</p>

<h5>1.4. Propiedades Emergentes</h5>

<p>
Algunos requisitos representan propiedades emergentes del software, es decir, requisitos que no pueden abordarse mediante un único componente, sino que dependen de cómo todos los componentes del software interactúan entre sí. 
Por ejemplo, el requisito de rendimiento (throughput) para un centro de llamadas dependería de cómo el sistema telefónico, el sistema de información y los operadores interactúan todos bajo condiciones reales de operación. 
Las propiedades emergentes dependen de forma crucial de la arquitectura del sistema.
</p>

<h5>1.5. Requisitos Cuantificables</h5>

<p>
Los requisitos de software deben expresarse de la manera más clara y no ambigua posible y, cuando sea apropiado, cuantitativamente. 
Es importante evitar requisitos vagos e imposibles de verificar que dependen para su interpretación del juicio subjetivo 
(“el software deberá ser confiable”; “el software deberá ser fácil de usar”). 
Esto es particularmente importante en el caso de los requisitos no funcionales.
</p>

<p>
Dos ejemplos de requisitos cuantificados son los siguientes: el software de un centro de llamadas debe aumentar el rendimiento del centro en un 20%; y un sistema deberá tener una probabilidad de generar un error fatal durante cualquier hora de operación menor a 1 × 10<sup>−8</sup>. 
El requisito de rendimiento está en un nivel muy alto y deberá utilizarse para derivar varios requisitos detallados. 
El requisito de confiabilidad restringirá fuertemente la arquitectura del sistema.
</p>

<h5>1.6. Requisitos del Sistema y Requisitos del Software</h5>

<p>
En este tema, “sistema” se define como una combinación interactiva de elementos para lograr un objetivo definido. 
Estos elementos incluyen hardware, software, firmware, personas, información, técnicas, instalaciones, servicios y otros elementos de soporte, según lo definido por el Consejo Internacional de Ingeniería de Sistemas y Software (INCOSE) [3].
</p>

<p>
Los requisitos del sistema son los requisitos para el sistema en su conjunto. En un sistema que contiene componentes de software, los requisitos del software se derivan de los requisitos del sistema.
</p>

<p>
Esta KA define los “requisitos del usuario” de forma restringida, como los requisitos de los clientes o usuarios finales del sistema. 
Los requisitos del sistema, en cambio, abarcan los requisitos del usuario, los requisitos de otros interesados (como autoridades regulatorias) y los requisitos sin una fuente humana identificable.
</p>
    <hr>
    <strong>parentesis</strong>: es decir:
    <p>Los requisitos de los clientes o usuarios finales del sistema se clasifican, según el SWEBOK, como:</p>

    <p>✅ <strong>Requisitos del usuario</strong>.</p>

    <p>Y esos requisitos del usuario son una subcategoría dentro de:</p>

    <p>✅ <strong>Requisitos del sistema</strong>.</p>

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
