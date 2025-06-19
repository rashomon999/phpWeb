 
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
    height: 270vh;
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
    <hr>
    <strong>parentesis</strong>

    <div>
  <p>Esa frase se refiere a dos enfoques complementarios que se pueden aplicar al desarrollo de software, especialmente durante el proceso de requisitos, análisis, diseño e implementación:</p>

  <h5> “De arriba hacia abajo” (top-down)</h5>
  <p>Significa que se empieza desde lo más general o abstracto y se va bajando a lo más específico o detallado. En el contexto del desarrollo de software:</p>
  <ul>
    <li>Se parte de los <strong>requisitos generales</strong> del sistema o negocio.</li>
    <li>Luego se <strong>analiza y diseña la arquitectura</strong>, dividiendo el sistema en componentes.</li>
    <li>Finalmente, se <strong>detalla el diseño e implementación</strong> de cada parte.</li>
  </ul>
  <p>Este enfoque ayuda a mantener una visión global y a asegurarse de que el sistema completo responde a los objetivos del negocio.</p>

  <h5> “De abajo hacia arriba” (bottom-up)</h5>
  <p>Significa que se empieza desde lo más específico o concreto y se va construyendo hacia arriba. En el contexto de software:</p>
  <ul>
    <li>Se comienzan a desarrollar <strong>componentes o funciones pequeñas</strong> (por ejemplo, clases, módulos).</li>
    <li>Luego se integran esas piezas para construir componentes más grandes y eventualmente el sistema completo.</li>
    <li>Se va <strong>refactorizando y mejorando</strong> conforme se avanza.</li>
  </ul>
  <p>Este enfoque es útil cuando ya se tienen componentes reutilizables o cuando se necesita ir adaptándose progresivamente a cambios en requisitos.</p>

  <h5> ¿Qué significa “que se encuentren en el medio”?</h5>
  <p>Se refiere a combinar ambos enfoques:</p>
  <ul>
    <li>Usar el <strong>top-down</strong> para mantener una visión clara del sistema y sus objetivos.</li>
    <li>Usar el <strong>bottom-up</strong> para iterar rápidamente, adaptarse a cambios, y construir soluciones robustas desde componentes reutilizables.</li>
  </ul>
  <p> El “encuentro en el medio” significa que los dos enfoques convergen durante el desarrollo, alineando el diseño conceptual con lo que se implementa realmente.</p>

  <h5> ¿Por qué es difícil lograrlo?</h5>
  <p>Porque lograr ese equilibrio requiere:</p>
  <ul>
    <li><strong>Buena comunicación</strong> entre analistas y desarrolladores.</li>
    <li><strong>Experiencia</strong> para saber cuándo y cómo aplicar cada enfoque.</li>
    <li><strong>Herramientas y procesos maduros</strong> que permitan iterar sin perder la visión global del sistema.</li>
  </ul>
</div>

    <hr>


 <h3>7.3. Atributos de Requerimientos</h3>
<p>
  Los requerimientos deben consistir no solo en una especificación de lo que se necesita, sino también en información complementaria que ayude a gestionarlos e interpretarlos. Los atributos de los requerimientos deben definirse, registrarse y actualizarse a medida que el software en desarrollo o mantenimiento evoluciona.
</p>
<p>
  Esto debe incluir las distintas dimensiones de clasificación del requerimiento (ver sección 4.1, <em>Requirements Classification</em>) y el método de verificación o la sección correspondiente del plan de pruebas de aceptación.
</p>
<p>
  También puede incluir información adicional, como una justificación resumida para cada requerimiento, la fuente de origen y un historial de cambios.
</p>
<p>
  Sin embargo, el atributo más importante de un requerimiento es un identificador que permita reconocerlo de manera única y sin ambigüedad.
</p>

<h3>7.4. Trazabilidad de Requerimientos</h3>
<p>
  La trazabilidad de requerimientos (<em>requirements tracing</em>) se refiere a recuperar el origen de los requerimientos y predecir sus efectos. Esta trazabilidad es fundamental para realizar análisis de impacto cuando los requerimientos cambian.
</p>
<p>
  Un requerimiento debe poder trazarse hacia atrás hasta los requerimientos y actores que lo motivaron (por ejemplo, desde un requerimiento de software hasta el/los requerimiento(s) del sistema que ayuda a satisfacer). De forma opuesta, un requerimiento debe poder trazarse hacia adelante hasta los requerimientos y entidades de diseño que lo satisfacen (por ejemplo, desde un requerimiento de sistema hasta los requerimientos de software derivados de él, y luego hasta los módulos de código que lo implementan, los casos de prueba relacionados con ese código e incluso la sección del manual de usuario que describe la funcionalidad).
</p>
<p>
  La trazabilidad de requerimientos en un proyecto típico forma un grafo dirigido acíclico (<em>DAG</em>) complejo de requerimientos (ver <em>Graphs</em> en el Área de Fundamentos de la Computación). Mantener actualizado ese grafo o la matriz de trazabilidad es una actividad que debe considerarse a lo largo de todo el ciclo de vida del producto.
</p>
<p>
  Si la información de trazabilidad no se mantiene actualizada a medida que los requerimientos cambian, dicha información se vuelve poco confiable para los análisis de impacto.
</p>


    
    </form>
</div>




<div class="seccion derecha">
    <form action="./sexto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 <h3>7.5. Medición de Requerimientos</h3>
<p>
  En la práctica, suele ser útil tener una idea del “volumen” de los requerimientos para un determinado producto de software. Esta cifra es útil para evaluar el “tamaño” de un cambio en los requerimientos, estimar el costo de una tarea de desarrollo o mantenimiento, o simplemente para usarla como denominador en otras mediciones.
</p>
<p>
  La medición del tamaño funcional (<em>Functional Size Measurement, FSM</em>) es una técnica utilizada para evaluar el tamaño de un conjunto de requerimientos funcionales.
</p>
<p>
  Información adicional sobre la medición del tamaño y los estándares correspondientes puede encontrarse en el Área de Conocimiento de Procesos de Ingeniería de Software.
</p>

<h3>8. Herramientas para Requerimientos de Software</h3>
<p>
  Las herramientas para trabajar con requerimientos de software se dividen, en general, en dos categorías: herramientas para modelado y herramientas para gestión de requerimientos.
</p>
<p>
  Las herramientas de gestión de requerimientos suelen dar soporte a una variedad de actividades —incluyendo documentación, trazabilidad y gestión de cambios— y han tenido un impacto significativo en la práctica. De hecho, la trazabilidad y la gestión de cambios solo son realmente viables si se cuenta con el apoyo de una herramienta.
</p>
<p>
  Dado que la gestión de requerimientos es fundamental para una buena práctica en ingeniería de requerimientos, muchas organizaciones han invertido en herramientas de gestión. Sin embargo, muchas otras aún gestionan sus requerimientos de forma más ad hoc y, por lo general, menos satisfactoria (por ejemplo, utilizando hojas de cálculo).
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
