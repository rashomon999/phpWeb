 
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
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>6. Validación de Requisitos</h2>
<p>[1*, c4s6] [2*, c13, c15]</p>

<p>Los documentos de requisitos pueden estar sujetos a procedimientos de validación y verificación. Los requisitos pueden validarse para asegurar que el ingeniero de software ha comprendido correctamente lo que se necesita; también es importante verificar que el documento de requisitos cumpla con los estándares de la empresa y que sea comprensible, consistente y completo. En los casos en que los estándares o la terminología documentada de la empresa sean inconsistentes con estándares ampliamente aceptados, debe acordarse un mapeo entre ambos y anexarse al documento.</p>

<p>Las notaciones formales ofrecen la ventaja importante de permitir demostrar, al menos en un sentido restringido, que el documento es consistente y completo. Diferentes partes interesadas, incluyendo representantes del cliente y del desarrollador, deben revisar el o los documentos. Los documentos de requisitos están sujetos a las mismas prácticas de gestión de configuración que los demás entregables del ciclo de vida del software. Cuando es posible, también se aplican prácticas de gestión de configuración a los requisitos individuales, generalmente utilizando una herramienta de gestión de requisitos (ver tema 8, Herramientas para Requisitos de Software).</p>

<p>Es habitual programar explícitamente uno o más puntos en el proceso de requisitos donde estos se validan. El objetivo es detectar cualquier problema antes de comprometer recursos para abordarlos. La validación de requisitos se refiere al proceso de examinar el documento de requisitos para asegurar que define el software correcto (es decir, el que los usuarios esperan).</p>

<h3>6.1. Revisión de Requisitos</h3>
<p>Quizá el medio más común de validación sea la inspección o revisión de los documentos de requisitos. Un grupo de revisores recibe el encargo de buscar errores, supuestos erróneos, falta de claridad y desviaciones respecto a las prácticas estándar. La composición del grupo revisor es importante (por ejemplo, se debe incluir al menos un representante del cliente en un proyecto orientado al cliente), y puede ser útil proporcionar guías o listas de verificación sobre qué revisar.</p>

<p>Las revisiones pueden realizarse al finalizar el documento de definición del sistema, el documento de especificación del sistema, el documento de especificación de requisitos de software, la especificación base de una nueva versión o en cualquier otro paso del proceso.</p>

<h3>6.2. Prototipado</h3>
<p>El prototipado se utiliza comúnmente como medio para validar la interpretación que hace el ingeniero de software de los requisitos, así como para obtener nuevos requisitos. Al igual que en la elicitación, existe una variedad de técnicas de prototipado y varios puntos del proceso en los que puede resultar adecuado validar mediante prototipos.</p>

<p>La ventaja de los prototipos es que pueden facilitar la interpretación de los supuestos del ingeniero de software y, cuando sea necesario, brindar retroalimentación útil sobre por qué están equivocados. Por ejemplo, el comportamiento dinámico de una interfaz de usuario puede entenderse mejor mediante un prototipo animado que con una descripción textual o modelos gráficos. La volatilidad de un requisito que ha sido definido después del prototipado es extremadamente baja, porque existe un acuerdo entre el usuario y el ingeniero de software. Por lo tanto, en requisitos críticos para la seguridad o de alta prioridad, el prototipado puede ser muy útil.</p>

<p>Sin embargo, también existen desventajas. Estas incluyen el riesgo de que los usuarios se distraigan con problemas cosméticos o de calidad del prototipo, dejando de lado aspectos fundamentales. Por esta razón, algunos recomiendan prototipos que no involucren software, como maquetas en papel o en pizarras. Los prototipos pueden ser costosos de desarrollar; sin embargo, si evitan el desperdicio de recursos causado por tratar de satisfacer requisitos erróneos, su costo puede estar justificado.</p>

<p>Los primeros prototipos pueden contener elementos de la solución final. Los prototipos pueden ser evolutivos en lugar de desechables.</p>

    <h3>6.3. Validación de Modelos</h3>
<p>Normalmente es necesario validar la calidad de los modelos desarrollados durante el análisis. Por ejemplo, en los modelos orientados a objetos, resulta útil realizar un análisis estático para verificar que existan rutas de comunicación entre los objetos que, en el dominio de los interesados, intercambian datos. Si se utilizan notaciones formales de análisis, es posible aplicar razonamiento formal para demostrar propiedades de la especificación. Este tema está estrechamente relacionado con el Área de Conocimiento de Modelos y Métodos de la Ingeniería de Software.</p>

<hr>
<strong>parentesis</strong>
<p>Se verifica que los objetos que deben comunicarse entre sí realmente estén conectados, como por ejemplo: si un objeto “Pedido” necesita hablar con “Cliente”, debe haber una conexión entre ellos en el modelo.</p>
<hr>

<h3>6.4. Pruebas de Aceptación</h3>
<p>Una propiedad esencial de un requisito de software es que debe ser posible validar que el producto final lo cumple. Los requisitos que no pueden validarse son en realidad solo “deseos”. Por ello, una tarea importante es planificar cómo verificar cada requisito. En la mayoría de los casos, esto se hace diseñando pruebas de aceptación que se alinean con la forma en que los usuarios finales normalmente utilizan el sistema en su entorno de negocio.</p>

<p>La identificación y el diseño de pruebas de aceptación puede resultar difícil para los requisitos no funcionales (ver sección 1.3, Requisitos Funcionales y No Funcionales). Para ser validados, estos deben ser primero analizados y descompuestos hasta el punto en que puedan expresarse cuantitativamente.</p>

<p>Se puede encontrar información adicional en la sección de Pruebas de Aceptación/Calificación/Conformidad en el Área de Conocimiento de Pruebas de Software.</p>

    </form>
</div>




<div class="seccion derecha">
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>7. Consideraciones Prácticas</h2>
<p>[1*, c4s1, c4s4, c4s6, c4s7]<br>
[2*, c3, c12, c14, c16, c18–21]</p>

<p>El primer nivel de descomposición temática presentado en esta Área de Conocimiento (KA) puede parecer describir una secuencia lineal de actividades. Esta es una visión simplificada del proceso.</p>

<p>El proceso de requisitos abarca todo el ciclo de vida del software. La gestión del cambio y el mantenimiento de los requisitos en un estado que refleje con precisión el software que se va a construir, o que ya se ha construido, son claves para el éxito del proceso de ingeniería de software.</p>

<p>No todas las organizaciones tienen una cultura de documentación y gestión de requisitos. Es común que en empresas emergentes dinámicas, impulsadas por una fuerte "visión de producto" y recursos limitados, se vea la documentación de requisitos como una sobrecarga innecesaria. Sin embargo, a medida que estas empresas crecen, su base de clientes se expande y su producto comienza a evolucionar, descubren que necesitan recuperar los requisitos que motivaron las funcionalidades del producto para poder evaluar el impacto de los cambios propuestos. Por lo tanto, la documentación de requisitos y la gestión de cambios son fundamentales para el éxito de cualquier proceso de requisitos.</p>

<hr>
<strong>parentesis</strong>
<h6>Explicación:</h6>
<p>
  En el documento del <strong>SWEBOK (Software Engineering Body of Knowledge)</strong>, las actividades relacionadas con los requisitos del software se presentan divididas en secciones o temas (por ejemplo: elicitación, análisis, especificación, validación, etc.), y a primera vista, parecen seguir un orden paso a paso, como si fueran fases lineales del proceso de desarrollo de software.
</p>
<p>
  Sin embargo, esa forma de organizar los temas no implica que el proceso real funcione de manera estrictamente secuencial. En la práctica:
</p>
<ul>
  <li>Las actividades se <strong>solapan</strong> (por ejemplo, se puede seguir validando requisitos mientras se analizan nuevos).</li>
  <li>Muchas tareas se realizan de forma <strong>iterativa y cíclica</strong>, no una sola vez al principio.</li>
  <li>El proceso es <strong>dinámico</strong>: los requisitos pueden cambiar o evolucionar incluso durante las etapas de diseño o implementación.</li>
</ul>

<hr>

<h3>7.1. Naturaleza Iterativa del Proceso de Requisitos</h3>
<p>Existe una presión generalizada en la industria del software por ciclos de desarrollo cada vez más cortos, especialmente en sectores altamente competitivos y orientados al mercado. Además, la mayoría de los proyectos están condicionados de alguna manera por su entorno, y muchos son actualizaciones o revisiones de software existente donde la arquitectura ya está definida. En la práctica, por lo tanto, casi siempre es inviable implementar el proceso de requisitos como un proceso lineal y determinista en el que los requisitos se obtienen de los interesados, se consolidan (baselined), se asignan y se entregan al equipo de desarrollo.</p>

<p>Es ciertamente un mito pensar que los requisitos para proyectos de software grandes se entienden o especifican perfectamente desde el principio.</p>

<p>En su lugar, los requisitos tienden a evolucionar hacia un nivel de calidad y detalle suficiente que permita tomar decisiones de diseño y adquisición. En algunos proyectos, esto puede implicar que los requisitos se consoliden antes de que todas sus propiedades se comprendan completamente, lo que representa un riesgo de retrabajo costoso si los problemas se descubren tarde en el proceso de ingeniería de software. No obstante, los ingenieros de software están necesariamente limitados por los planes de gestión del proyecto y deben tomar medidas para asegurar que la “calidad” de los requisitos sea lo más alta posible dentro de los recursos disponibles. Por ejemplo, deberían hacer explícitas todas las suposiciones que sustentan los requisitos, así como cualquier problema conocido.</p>

<p>Para productos de software desarrollados de forma iterativa, un equipo de proyecto puede consolidar solo aquellos requisitos necesarios para la iteración actual. El especialista en requisitos puede continuar desarrollando los requisitos para futuras iteraciones, mientras los desarrolladores avanzan con el diseño y construcción de la iteración actual. Este enfoque ofrece valor de negocio rápidamente al cliente, mientras se minimiza el costo del retrabajo.</p>

<p>En casi todos los casos, la comprensión de los requisitos continúa evolucionando a medida que avanza el diseño y desarrollo. Esto a menudo conduce a la revisión de los requisitos en etapas tardías del ciclo de vida. Tal vez el punto más crucial para entender los requisitos de software es que una proporción significativa de ellos cambiará. A veces esto se debe a errores en el análisis, pero frecuentemente es consecuencia inevitable de cambios en el “entorno”: por ejemplo, el entorno operativo o empresarial del cliente, regulaciones impuestas por autoridades, o el mercado en el que se debe vender el software.</p>

<p>Cualquiera que sea la causa, es importante reconocer la inevitabilidad del cambio y tomar medidas para mitigar sus efectos. El cambio debe gestionarse asegurando que las modificaciones propuestas pasen por un proceso definido de revisión y aprobación, y aplicando un seguimiento cuidadoso de los requisitos, análisis de impacto y gestión de configuración del software (ver el Área de Conocimiento de Gestión de Configuración de Software).</p>

<p>Por lo tanto, el proceso de requisitos no es solo una tarea inicial en el desarrollo de software, sino que abarca todo el ciclo de vida. En un proyecto típico, las actividades de requisitos evolucionan con el tiempo desde la obtención hasta la gestión del cambio. Una combinación de métodos de análisis y diseño de arriba hacia abajo con métodos de implementación y refactorización de abajo hacia arriba que se encuentren en el medio puede ofrecer lo mejor de ambos mundos. Sin embargo, esto es difícil de lograr en la práctica, ya que depende en gran medida de la madurez y experiencia de los ingenieros de software.</p>
<h3>7.2. Gestión del Cambio</h3>
<p>
La gestión del cambio es fundamental para la gestión de los requisitos. Este tema describe el papel de la gestión del cambio, los procedimientos que deben estar establecidos y el análisis que debe aplicarse a los cambios propuestos. Tiene vínculos estrechos con el Área de Conocimiento de Gestión de Configuración de Software (Software Configuration Management KA).
</p>

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
