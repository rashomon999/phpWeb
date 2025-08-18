 
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
    height: 335vh;
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

    <h4>4.1. Especificación de Requisitos en Lenguaje Natural No Estructurado [1*, c11] [2*, s4.4.1]</h4>

<p>Las especificaciones de requisitos en lenguaje natural expresan los requisitos usando un lenguaje común y ordinario. Estas pueden ser <strong>estructuradas</strong> o <strong>no estructuradas</strong>.</p>

<p>Una especificación típica en <em>lenguaje natural no estructurado</em> es simplemente una colección de declaraciones, como por ejemplo: “El sistema deberá...”.</p>

<p>Un ejemplo concreto serían las <strong>reglas de negocio</strong>, que son afirmaciones que definen o restringen algún aspecto de la estructura o el comportamiento del negocio a automatizar. Por ejemplo:</p>
<blockquote>
  “Un estudiante no puede inscribirse en los cursos del siguiente semestre si tiene cuotas de matrícula pendientes por pagar.”
</blockquote>
<p>Esta regla de negocio puede servir como un requisito para un sistema de inscripción universitaria.</p>

<p>En algunos proyectos, se puede publicar un <strong>manual de usuario</strong> como una especificación de requisitos aceptable, aunque esto tiene limitaciones respecto a su efectividad. (Ver también [5, c4] y [26].)</p>

      <img src="../../../../img/guia_53.png" alt="" width="600" >


    <h3>4.2. Especificación de Requisitos en Lenguaje Natural Estructurado</h3>
<p>[1*, c8] [2*, s4.4.2]</p>
<p>Las especificaciones de requisitos en lenguaje natural estructurado imponen restricciones sobre cómo se expresan los requisitos; el objetivo es aumentar la precisión y la concisión.</p>
<p>El ejemplo más simple podría ser el formato actor-acción. El actor es la entidad responsable de llevar a cabo la acción, y la acción es lo que debe suceder. Un evento desencadenante podría preceder al actor, y la acción podría estar seguida por una condición o calificación opcional. La declaración “Cuando se envía una orden, el sistema deberá crear una factura a menos que los términos de la orden sean ‘Prepagado’” usa el formato actor-acción. El evento desencadenante es “Cuando se envía una orden.” El actor es “el sistema.” La acción es “crear una factura.” La condición/calificación es “excepto que los términos de la orden sean ‘Prepagado’.”</p>
<p>Otro ejemplo es una plantilla de especificación de caso de uso, como se muestra en la Figura 1.6. (Ver [11] para pautas sobre cómo escribir buenas especificaciones de casos de uso.)</p>
<p>El formato de historia de usuario, “Como un &lt;usuario&gt; quiero &lt;capacidad&gt; para que &lt;beneficio&gt;” así como las tablas de decisión son otros ejemplos. (Ver también [5, c4] [6, c12, c16] [7, c2-5].)</p>



    <h3>4.3. Especificación de requisitos basada en criterios de aceptación</h3>
<p>Este enfoque general incluye dos variantes específicas: desarrollo guiado por pruebas de aceptación (ATDD) y desarrollo guiado por comportamiento (BDD).</p>
<p>ATDD [2*, s3.2.3, s8.2] es una parte del enfoque más amplio de desarrollo guiado por pruebas (TDD). (Ver el KA de Pruebas de Software).</p>
<p>La idea principal de TDD es que los casos de prueba preceden a la construcción. Por lo tanto, no se escribe nuevo código de producción ni se modifica código existente a menos que falle al menos un caso de prueba, ya sea a nivel de prueba unitaria o a nivel de prueba de aceptación.</p>
<p>El proceso ATDD tiene tres pasos:</p>
<ol>
  <li>Se selecciona una unidad de funcionalidad (por ejemplo, una historia de usuario) para su implementación.</li>
  <li>Uno o más ingenieros de software, uno o más expertos en el dominio del negocio, y posiblemente uno o más profesionales de QA/pruebas se reúnen — antes de que se realice cualquier trabajo de diseño o construcción de producción — para acordar un conjunto de casos de prueba que deben pasar para demostrar que la unidad de funcionalidad ha sido implementada correctamente.</li>
  <li>Al menos uno de esos casos de prueba de aceptación debe fallar en el software existente. La existencia de al menos un caso de prueba que falla da a los ingenieros de software permiso para crear o modificar código de producción para pasar todos los casos de prueba acordados. Este paso puede requerir varias iteraciones. El código también puede ser refactorizado durante este paso.</li>
</ol>
  <p>Cuando todos los casos de prueba de aceptación han pasado, y presumiblemente también todos los casos de prueba de unidad e integración, entonces se considera que la unidad de funcionalidad ha sido completamente y correctamente implementada. El proceso ATDD regresa al paso 1, donde se selecciona una nueva unidad de funcionalidad, y el ciclo se repite.</p>


  
 <p>ATDD podría parecer una técnica de pruebas en lugar de una técnica de especificación de requisitos. Por otro lado, un caso de prueba tiene la forma general de “Cuando se da una entrada que luce como X, esperamos que el software produzca resultados que luzcan como Y.” La clave es la frase subrayada, “esperamos que el software produzca.” Si simplemente modificamos esa frase para decir, “el software deberá producir,” como en “Cuando se da una entrada que luce como X, el software deberá producir resultados que luzcan como Y,” lo que primero parecía un caso de prueba ahora parece un requisito. Técnicamente, un caso de prueba de aceptación puede abarcar más de un solo requisito, pero la idea general se mantiene en que los casos de prueba ATDD son esencialmente declaraciones precisas y no ambiguas de requisitos.</p>
<p>El enfoque BDD [19] es ligeramente más estructurado, y los expertos en el dominio del negocio típicamente lo prefieren sobre ATDD porque es menos técnico en apariencia. En BDD, la unidad de funcionalidad se describe como una historia de usuario, en una forma como esta: “Como un &lt;usuario&gt; quiero &lt;capacidad&gt; para que &lt;beneficio&gt;.” Esto conduce a la identificación y especificación de un conjunto de “escenarios” en esta forma: “Dado &lt;algún contexto&gt; [y &lt;posiblemente más contexto&gt;], cuando &lt;estímulo&gt; entonces &lt;resultado&gt; [y &lt;posiblemente más resultados&gt;].”</p>
 
    </form> 
</div>




<div class="seccion derecha">
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 <p>Si la historia es “Como cliente bancario, quiero retirar efectivo del cajero automático (ATM) para poder obtener dinero sin ir al banco,” un escenario podría ser que “la cuenta tiene un saldo suficiente.”</p>
<p>Este escenario podría detallarse como “Dado que el saldo de la cuenta es $500, y la tarjeta bancaria del cliente es válida, y el cajero automático contiene suficiente dinero en su caja de efectivo, cuando el Titular de la Cuenta solicita $100, entonces el ATM debe dispensar $100 y el saldo de la cuenta debe ser $400, y la tarjeta bancaria del cliente debe ser devuelta.”</p>
<p>Otro escenario podría ser que “la cuenta tiene un saldo insuficiente” y podría detallarse como “Dado que el saldo de la cuenta es $50, y la tarjeta bancaria del cliente es válida, y el cajero automático contiene suficiente dinero en su caja de efectivo, cuando el Titular de la Cuenta solicita $100, entonces el ATM no debe dispensar dinero, y el ATM debe decir que hay un saldo insuficiente, el saldo debe permanecer en $50, y la tarjeta bancaria del cliente debe ser devuelta.”</p>
<p>El objetivo de BDD es tener un conjunto completo de escenarios para cada unidad de funcionalidad. En la situación de retirar efectivo, serían necesarios escenarios adicionales como “La tarjeta bancaria del Cliente ha sido deshabilitada” y “El ATM no contiene suficiente dinero en su caja de efectivo.”</p>
<p>Los casos de prueba de aceptación son obvios a partir de los escenarios de BDD.</p>
<p>La especificación de requisitos basada en criterios de aceptación aborda directamente el problema de ambigüedad en los requisitos. Los lenguajes naturales son inherentemente ambiguos, pero el lenguaje de casos de prueba no lo es. En la especificación de requisitos basada en criterios de aceptación, los requisitos se escriben usando lenguaje de casos de prueba, que es muy preciso. Por otro lado, esto no resuelve inherentemente el problema de incompletitud. Sin embargo, combinar ATDD o BDD con criterios apropiados de cobertura de pruebas funcionales, tales como Pruebas de Dominio, Análisis de Valor Límite y Pruebas por Pares (ver el KA de Pruebas de Software), puede reducir la probabilidad de incompletitud en los requisitos. (Ver también [9, c1, c12].)</p>


    <h3>4.4. Especificación de Requisitos Basada en Modelos</h3>
<p>[1*, c12] [2*, c5] [4*]</p>
<p>Otro enfoque para evitar la ambigüedad inherente de los lenguajes naturales es usar lenguajes de modelado como elementos seleccionados del lenguaje de modelado unificado™ (UML) o el lenguaje de modelado de sistemas™ (SysML). Al igual que los planos utilizados en la construcción de edificios, estos lenguajes de modelado pueden ser utilizados de una manera libre de tecnología informática para especificar requisitos funcionales de forma precisa y concisa [9, c1-2]. Este tema está estrechamente relacionado con la KA de Modelos y Métodos de Ingeniería de Software. Los modelos de requisitos se dividen en dos categorías generales:</p>
<ol>
  <li>Modelos estructurales para especificar políticas a ser aplicadas: Estos son modelos de clases lógicas como los descritos, por ejemplo, en [9, c8]. También se llaman modelos de datos conceptuales, modelos de datos lógicos y diagramas entidad-relación.</li>
  <li>Modelos de comportamiento para especificar procesos a ser realizados: Estos modelos incluyen modelado de casos de uso como se describe en [9, c7], diagramas de interacción como se describe en [9, c9] y modelado de estados como se describe en [9, c10]. Otros ejemplos son los diagramas de actividad de UML y modelado de flujo de datos, como se describe en [1*, c12-13], [8], [10] y [18].</li>
</ol>
<p>Las especificaciones de requisitos basadas en modelos varían en el grado de formalidad del modelo. Considere lo siguiente:</p>
<ol>
  <li>El modelado ágil (ver, por ejemplo, [10]) es el menos formal. Los modelos ágiles pueden ser poco más que bocetos cuya meta es comunicar información importante en lugar de demostrar el uso adecuado de notaciones de modelado. En este tipo de modelado, el efecto de la comunicación se considera más importante que la forma de la comunicación.</li>
  <li>El modelado semiformal, por ejemplo [9, c6-12], proporciona una definición de la semántica del lenguaje de modelado ([9, Apéndice L]), pero esa definición no ha sido formalmente probada como completa y consistente.</li>
  <li>El modelado formal, por ejemplo, Z, el método de desarrollo de Viena (VDM), lenguaje de especificación y descripción (SDL) y [5, c7] tienen semánticas definidas con gran precisión que permiten analizar mecánicamente las especificaciones para detectar la presencia o ausencia de propiedades específicas para ayudar a evitar errores críticos de razonamiento. El término corrección por construcción ha sido utilizado para el desarrollo en este contexto. (Ver la sección de Métodos Formales en la KA de Modelos y Métodos de Ingeniería de Software.)</li>
</ol>
<p>En general, mientras más formal es un modelo de requisitos, menos ambiguo es, por lo que los ingenieros de software tienen menos probabilidades de malinterpretar los requisitos. Los modelos de requisitos más formales también pueden ser:</p>
<ul>
  <li>más concisos y compactos;</li>
  <li>más fáciles de traducir a código, posiblemente de forma mecánica;</li>
  <li>utilizados como base para derivar casos de prueba de aceptación.</li>
</ul>
<p>Un mensaje importante en [4*] es que, si bien los lenguajes de modelado formales son más fuertes que los modelos semiformal y ágiles, las notaciones formales pueden ser una carga tanto para el creador del modelo como para los lectores humanos. El compromiso de Wing es usar fundamentos definidos formalmente (por ejemplo, en Z) para sintaxis superficiales que sean más fáciles de leer y escribir (por ejemplo, diagramas de estados UML).</p>

<h3>4.5. Atributos Adicionales de los Requisitos</h3>
<p>[1*, c27pp462-463]</p>
<p>Además de las declaraciones básicas de requisitos ya descritas, documentar atributos adicionales para algunos o todos los requisitos puede ser útil. Este detalle complementario puede ayudar a los ingenieros de software a interpretar y gestionar mejor los requisitos [6, c16]. Los posibles atributos adicionales incluyen los siguientes:</p>
<ul>
  <li>etiqueta para apoyar el rastreo de requisitos;</li>
  <li>descripción (detalles adicionales sobre el requisito);</li>
  <li>fundamento (por qué el requisito es importante);</li>
  <li>fuente (rol o nombre del interesado que impuso este requisito);</li>
  <li>caso de uso o evento desencadenante relevante;</li>
  <li>tipo (clasificación o categoría del requisito — por ejemplo, funcional, calidad de servicio);</li>
  <li>dependencias;</li>
  <li>conflictos;</li>
  <li>criterios de aceptación;</li>
  <li>prioridad (ver Priorización de Requisitos más adelante en esta KA);</li>
  <li>estabilidad (ver Estabilidad y Volatilidad de Requisitos más adelante en esta KA);</li>
  <li>si el requisito es común o una variante para desarrollo de familias de productos (por ejemplo, [20]);</li>
  <li>materiales de apoyo;</li>
  <li>historial de cambios del requisito.</li>
</ul>
<p>El Planguage de Gilb (abreviatura de Lenguaje de Planificación) [7] recomienda atributos como escala, medida, mínimo, objetivo, pendiente, pasado, tendencia y registro.</p>

   
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
