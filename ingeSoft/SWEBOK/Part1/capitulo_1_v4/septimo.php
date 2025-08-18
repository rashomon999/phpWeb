 
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
    height: 285vh;
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
    <form action="./septimo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h3>7.3. Trazabilidad de Requisitos</h3>
<p>[1*, c29]<br>
La trazabilidad de requisitos puede servir para dos propósitos potencialmente útiles. Uno es servir como un ejercicio contable que documente la consistencia entre pares de productos de trabajo del proyecto relacionados. Una pregunta importante podría ser: “¿Para cada requisito de software identificado, existen elementos de diseño identificados destinados a satisfacerlo?” Si no se encuentran elementos de diseño identificados, entonces ese requisito no está satisfecho en ese diseño o el diseño es correcto y uno o más requisitos declarados pueden eliminarse. De manera similar: “¿Para cada elemento de diseño identificado, existen requisitos identificados que justifiquen su existencia?” Si no se encuentran requisitos identificados, entonces ese elemento de diseño es innecesario o los requisitos declarados están incompletos.</p>

<p>El otro propósito es ayudar en el análisis de impacto de un cambio propuesto de requisitos. Si un requisito del sistema en particular llegara a cambiar, por ejemplo, ese requisito del sistema podría ser rastreado hasta sus requisitos de software vinculados. No todos los requisitos de software vinculados necesitarían cambiar. Pero cada requisito de software que se vería afectado podría rastrearse hasta sus elementos de diseño vinculados. Nuevamente, no todos los elementos de diseño vinculados necesitarían cambiar. Pero cada elemento de diseño afectado podría rastrearse hasta el código vinculado. Los requisitos de software afectados, los elementos de diseño y las unidades de código también podrían rastrearse hasta sus casos de prueba vinculados para un análisis de impacto adicional. Esto ayuda a establecer una “huella” del volumen de trabajo necesario para incorporar ese cambio en el requisito del sistema.</p>

<p>Los requisitos de software pueden rastrearse hacia atrás hasta la documentación fuente, como requisitos del sistema, documentos normativos y otras especificaciones relevantes. Los requisitos de software también pueden rastrearse hacia adelante a elementos de diseño y casos de prueba basados en requisitos. Finalmente, los requisitos de software también pueden rastrearse hacia adelante a secciones en un manual de usuario que describan la funcionalidad implementada. (Ver también [23].)</p>

<h3>7.4. Estabilidad y Volatilidad de Requisitos</h3>
<p>[2*, s4.6]<br>
Algunos requisitos son muy estables; probablemente nunca cambiarán durante la vida útil del software. Algunos requisitos son menos estables; podrían cambiar durante la vida útil, pero podrían no cambiar durante el proyecto de desarrollo. Por ejemplo, en una aplicación bancaria, los requisitos para funciones que calculan y acreditan intereses a las cuentas de los clientes probablemente sean más estables que los requisitos para apoyar diferentes cuentas libres de impuestos. Los primeros reflejan una característica fundamental del dominio bancario (que las cuentas pueden generar intereses). Al mismo tiempo, los segundos pueden quedar obsoletos por un cambio en la legislación gubernamental. Finalmente, algunos requisitos pueden ser muy inestables; pueden cambiar durante el proyecto —posiblemente más de una vez.</p>

<p>Es útil evaluar la probabilidad de que un requisito cambie en un tiempo dado. Identificar requisitos potencialmente volátiles ayuda al ingeniero de software a establecer un diseño más tolerante al cambio (por ejemplo, [20]). (Ver también [9, c4].)</p>

    <h3>7.5. Medición de Requisitos</h3>
<p>[1*, c19]<br>
Como una cuestión práctica, puede ser útil tener algún concepto del volumen de los requisitos para un producto de software en particular. Este número es útil para evaluar el tamaño de un nuevo proyecto de desarrollo o el tamaño de un cambio en los requisitos, así como para estimar el costo de las tareas de desarrollo o mantenimiento (por ejemplo, [9, c23]), o simplemente para usarlo como denominador en otras mediciones.</p>

<p>La medición del tamaño funcional (FSM, por sus siglas en inglés) es una técnica para evaluar el tamaño de un conjunto de requisitos funcionales. Los puntos de historia también pueden considerarse una medida del tamaño de los requisitos.</p>

<p>Información adicional sobre la medición del tamaño y los estándares puede encontrarse en el Área de Conocimiento de Procesos de Ingeniería de Software.</p>

<p>Se han desarrollado muchos indicadores de calidad que pueden utilizarse para relacionar la calidad de la especificación de requisitos de software con otras variables del proyecto, tales como costo, aceptación, rendimiento, cronograma y reproducibilidad. Los indicadores de calidad para requisitos individuales de software y para un documento de especificación de requisitos en su conjunto pueden derivarse de las propiedades deseables discutidas en la Sección 3.1, Análisis Básico de Requisitos, presentada anteriormente en esta Área de Conocimiento.</p>



<h3>7.6. Calidad del Proceso de Requisitos y Mejora</h3>
<p>[1*, c31]<br>
Este tema se refiere a la evaluación de la calidad y mejora del proceso de requisitos. Su propósito es enfatizar el papel clave del proceso de requisitos en el costo y la puntualidad de un producto de software, así como en la satisfacción del cliente. Además, ayuda a alinear el proceso de requisitos con los estándares de calidad y los modelos de mejora de procesos para software y sistemas.</p>

<p>La calidad del proceso y su mejora están estrechamente relacionadas tanto con el Área de Conocimiento de Calidad de Software como con el Área de Conocimiento de Procesos de Ingeniería de Software, y comprenden lo siguiente:</p>
<ul>
  <li>cobertura del proceso de requisitos por parte de estándares y modelos de mejora de procesos;</li>
  <li>mediciones del proceso de requisitos y análisis comparativos (benchmarking);</li>
  <li>planificación e implementación de mejoras;</li>
  <li>implementación y planificación de la mejora de la seguridad/CIA (confidencialidad, integridad y disponibilidad).</li>
</ul>



    </form> 
</div>




<div class="seccion derecha">
    <form action="./septimo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 <h2>8. Herramientas para Requisitos de Software</h2>
<p>[1*, c30]<br>
Las herramientas que ayudan a los ingenieros de software a tratar con los requisitos de software se dividen ampliamente en tres categorías: herramientas de gestión de requisitos, herramientas de modelado de requisitos y herramientas de generación de casos de prueba funcionales, como se discute a continuación.</p>

<h3>8.1. Herramientas de Gestión de Requisitos</h3>
<p>[1*, c30pp506-510]<br>
Las herramientas de gestión de requisitos apoyan diversas actividades, incluyendo el almacenamiento de atributos de requisitos, trazabilidad, generación de documentos y control de cambios. De hecho, la trazabilidad y el control de cambios podrían ser prácticos solo si están respaldados por una herramienta. Dado que la gestión de requisitos es fundamental para una buena práctica de requisitos, muchas organizaciones han invertido en herramientas. Sin embargo, muchas más gestionan sus requisitos de forma más ad hoc y generalmente de manera menos satisfactoria (por ejemplo, con hojas de cálculo). (Ver también [5, c8].)</p>

<h3>8.2. Herramientas de Modelado de Requisitos</h3>
<p>[1*, c30p506] [2*, s12.3.3]<br>
Como mínimo, una herramienta de modelado de requisitos permite crear, modificar y publicar visualmente especificaciones de requisitos basadas en modelos. Algunas herramientas amplían esto proporcionando también análisis estático (por ejemplo, corrección sintáctica, completitud y consistencia). El análisis formal requiere el soporte de herramientas para ser practicable en sistemas que no sean triviales, y las herramientas generalmente se dividen en dos categorías: demostradores de teoremas o verificadores de modelos. En ninguno de los casos la demostración puede ser completamente automatizada, y la competencia en razonamiento formal necesaria para usar las herramientas restringe el análisis formal más amplio. Algunas herramientas también ejecutan dinámicamente una especificación (simulación).</p>

<h3>8.3. Herramientas de Generación de Casos de Prueba Funcionales</h3>
<p>Cuanto más formalmente esté definido un lenguaje de especificación de requisitos, más probable es que los casos de prueba funcionales puedan ser al menos parcialmente derivados de manera mecánica. Por ejemplo, convertir escenarios BDD en casos de prueba no es difícil. Otro ejemplo involucra modelos de estado. Se pueden derivar casos de prueba positivos para cada transición definida en ese tipo de modelo. Los casos de prueba negativos pueden derivarse de combinaciones de estado y evento que no aparecen. (Ver la Sección 8.2, Herramientas de Pruebas en el Área de Conocimiento de Pruebas, para más información.) Un proceso para derivar casos de prueba a partir de modelos de requisitos UML puede encontrarse en [9, c12].</p>

<p>En el caso más general, tales herramientas solo pueden generar entradas para los casos de prueba. Determinar un resultado esperado no siempre es posible; podría ser necesario conocimiento adicional del dominio del negocio.</p>

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
