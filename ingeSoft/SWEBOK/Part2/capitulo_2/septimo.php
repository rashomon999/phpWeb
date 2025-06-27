  
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
    height: 255vh;
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
        <h3>🔹 Vista de Procesos (Process View)</h3>
<p>
La Vista de Procesos, también conocida como el <strong>“Diagrama de Actividades”</strong>, profundiza en los aspectos dinámicos del sistema. 
Describe el comportamiento del sistema y el flujo de control entre diversas actividades o procesos. 
Los diagramas de actividades son especialmente útiles para ilustrar cómo colaboran distintos componentes del sistema para cumplir tareas o casos de uso específicos. 
Esta vista es crucial para comprender la secuencia de acciones e interacciones, siendo una herramienta esencial para diseñadores y desarrolladores.
</p>

 

        <h3>🔹 Vista Física (Physical View)</h3>
<p>
La Vista Física, representada mediante el <strong>“Diagrama de Despliegue”</strong>, ofrece una visión de cómo se distribuyen los componentes de software en la infraestructura de hardware. 
Incluye detalles sobre servidores, nodos y sus interconexiones. 
Los diagramas de despliegue ayudan a abordar preguntas relacionadas con la escalabilidad, la tolerancia a fallos y la asignación de recursos. 
Esta vista garantiza que la arquitectura del sistema se alinee con las restricciones y requerimientos del entorno físico de despliegue.
</p>


   <h3>🔹 Vista de Desarrollo (Development View)</h3>
<p>
La Vista de Desarrollo, también llamada <strong>“Diagrama de Componentes”</strong>, se centra en la organización de los componentes de software y sus relaciones dentro del entorno de desarrollo. 
Es fundamental para mapear la arquitectura del software con la implementación real, facilitando que los equipos de desarrollo comprendan cómo se distribuyen los módulos en el código fuente. 
Esta vista ayuda a gestionar el proceso de desarrollo, asegurando que los componentes se desarrollen, prueben e integren de forma eficiente.
</p>

<h3>🔹 Vista de Casos de Uso (Use Case View)</h3>
<p>
La quinta vista del modelo “4 + 1” es la <strong>Vista de Casos de Uso</strong>. 
Mientras que las otras cuatro vistas se centran en los aspectos internos del sistema, esta enfatiza la funcionalidad desde la perspectiva del usuario. 
Los diagramas de casos de uso muestran cómo interactúan los usuarios con el sistema, ilustrando diversos escenarios y las respuestas correspondientes del sistema. 
Esta vista ayuda a definir y validar los requerimientos del sistema, asegurando que la arquitectura esté alineada con las necesidades y expectativas del usuario final.
</p>

<h3> Beneficios del Modelo de Vistas “4 + 1”</h3>
<ul>
  <li><strong>Claridad:</strong> Ofrece una forma clara y estructurada de visualizar y comunicar diferentes aspectos de la arquitectura del sistema.</li>
  <li><strong>Integralidad:</strong> Al dividir la arquitectura en cinco vistas distintas, asegura que se consideren todos los aspectos esenciales del sistema.</li>
  <li><strong>Alineación:</strong> Ayuda a alinear la arquitectura técnica con los requerimientos del usuario, asegurando que el sistema cumpla su propósito.</li>
  <li><strong>Facilidad de Comunicación:</strong> Cada vista está dirigida a una audiencia específica, facilitando la comunicación de detalles técnicos a diferentes tipos de stakeholders.</li>
  <li><strong>Eficiencia:</strong> Contribuye a un desarrollo más eficiente, al proveer una hoja de ruta tanto para el diseño de alto nivel como para la implementación detallada.</li>
</ul>

    <hr>


     <h2> ¿Por qué se llama <i>4 + 1</i>?</h2>

  <p>
    El modelo <strong>4 + 1</strong> fue propuesto por <strong>Philippe Kruchten</strong> en 1995 para describir arquitecturas de software usando diferentes puntos de vista. Su nombre proviene del hecho de que se compone de <strong>cuatro vistas principales</strong> más <strong>una vista adicional</strong> que las integra y valida.
  </p>

  <h3>🔹 Las "4" vistas principales</h3>
  <ul>
    <li><strong>Logical View</strong> : describe la funcionalidad del sistema desde el punto de vista del diseñador. <br> <em>Ejemplo:</em> Diagrama de clases UML.</li>
    <li><strong>Process View</strong> : muestra el comportamiento en tiempo de ejecución, concurrencia e hilos. <br> <em>Ejemplo:</em> Diagramas de actividad o secuencia.</li>
    <li><strong>Development View</strong> : estructura del software desde el punto de vista del programador. <br> <em>Ejemplo:</em> Diagrama de componentes, estructura de paquetes.</li>
    <li><strong>Physical View</strong> : representación del despliegue en la infraestructura física. <br> <em>Ejemplo:</em> Diagrama de nodos UML, topología de red.</li>
  </ul>

  <h3> La vista "+1": Use Case View (Vista de Escenarios)</h3>
  <p>
    La <strong>Use Case View</strong> muestra cómo los usuarios interactúan con el sistema. Se centra en los casos de uso para capturar los <strong>requerimientos funcionales</strong> y verificar que las otras vistas den soporte a las funciones esperadas del sistema.
    <br><em>Ejemplo:</em> Diagrama de casos de uso UML.
  </p>

  <h3> Utilidad del modelo 4 + 1</h3>
  <ul>
    <li> Permite representar diferentes aspectos del sistema de forma organizada.</li>
    <li> Facilita la comunicación entre distintos tipos de stakeholders (usuarios, desarrolladores, arquitectos, etc.).</li>
    <li> Asegura que los requerimientos del usuario se reflejan adecuadamente en el diseño.</li>
    <li> Promueve la validación cruzada de vistas usando escenarios reales.</li>
  </ul>


    </form>
</div>




<div class="seccion derecha">
    <form action="./septimo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h3> Modelo de Vistas 4+1 (4+1 View Model)</h3>

    <p>
    El modelo <strong>4+1</strong> es un modelo de vistas utilizado para <em>"describir la arquitectura 
    de sistemas intensivos en software, basado en el uso de múltiples vistas concurrentes"</em> [1]. 
    Las vistas se emplean para describir el sistema desde el punto de vista de distintos <em>stakeholders</em>,
    como usuarios finales, desarrolladores, ingenieros de sistemas y gestores de proyecto.
    </p>

    <p>
    Las cuatro vistas del modelo son: lógica, de desarrollo, de procesos y física. Además, se utilizan casos de uso o escenarios seleccionados para ilustrar la arquitectura, sirviendo como la vista “más uno” (<strong>+1</strong>). 
    Por tanto, el modelo contiene <strong>4+1 vistas</strong> [1]:
    </p>

    <h3> Vista Lógica (Logical View)</h3>
    <p>
    Se enfoca en la funcionalidad que el sistema ofrece a los usuarios finales. 
    Se representa mediante diagramas UML como los diagramas de clases y de estados [2].
    </p>

    <h3> Vista de Procesos (Process View)</h3>
    <p>
    Trata los aspectos dinámicos del sistema: cómo se ejecutan los procesos, cómo se comunican y cómo se comporta el sistema en tiempo de ejecución. 
    Aborda temas como concurrencia, distribución, rendimiento y escalabilidad. 
    Diagramas UML usados incluyen diagramas de secuencia, de comunicación y de actividades [2][3].
    </p>

    <h3> Vista de Desarrollo (Development View)</h3>
    <p>
    También llamada vista de implementación. Muestra el sistema desde la perspectiva del programador y se centra en la gestión del software. 
    Se representa con diagramas UML como el diagrama de componentes y el diagrama de paquetes [2].
    </p>

    <h3> Vista Física (Physical View)</h3>
    <p>
    También conocida como vista de despliegue. Representa el sistema desde el punto de vista del ingeniero de sistemas, enfocándose en cómo se despliegan los componentes de software en el hardware. 
    Utiliza el diagrama de despliegue UML para representar servidores, nodos y conexiones físicas entre ellos [2].
    </p>

    <h3> Escenarios o Casos de Uso (Scenarios / Use Case View)</h3>
    <p>
    Esta vista adicional utiliza un conjunto de casos de uso o escenarios que ilustran la arquitectura. 
    Muestra secuencias de interacción entre objetos y procesos para validar la arquitectura y detectar elementos clave. 
    También sirve como punto de partida para las pruebas de prototipos de arquitectura.
    </p>

    <h3> Ventajas del Modelo 4+1</h3>
    <ul>
    <li><strong>Claridad:</strong> Ofrece una forma estructurada de visualizar y comunicar la arquitectura del sistema.</li>
    <li><strong>Integralidad:</strong> Abarca todos los aspectos esenciales del sistema al dividirlo en cinco vistas.</li>
    <li><strong>Alineación:</strong> Ayuda a alinear la arquitectura técnica con los requerimientos del usuario.</li>
    <li><strong>Comunicación efectiva:</strong> Cada vista está orientada a un tipo distinto de audiencia.</li>
    <li><strong>Eficiencia:</strong> Sirve como guía tanto para el diseño de alto nivel como para la implementación detallada.</li>
    </ul>

    <p>
    El modelo 4+1 es genérico y no está restringido a ningún lenguaje de notación, herramienta o método de diseño en particular. 
    Como dijo Philippe Kruchten:
    </p>

    <blockquote>
    “El modelo de vistas ‘4+1’ es bastante genérico: se pueden usar otras notaciones y herramientas, así como otros métodos de diseño, especialmente para las descomposiciones lógica y de procesos, aunque aquí hemos indicado las que hemos usado con éxito.”
    </blockquote>

    <p><strong>— Philippe Kruchten, <em>Architectural Blueprints—The “4+1” View Model of Software Architecture</em> [1]</strong></p>











      <h2> El contexto del modelo de vistas “4 + 1” para la arquitectura de sistemas</h2>

  <p>
    En el contexto del modelo de vistas <strong>"4 + 1"</strong> para la arquitectura de sistemas, existen diferentes tipos de diagramas UML asociados a las distintas vistas. 
    A continuación, se presenta una tabla que enumera cada una de las vistas <strong>"4 + 1"</strong> y sus diagramas UML correspondientes:
  </p>

  <table>
    <thead>
      <tr>
        <th>🔹 Ver nombre</th>
        <th>📊 Diagramas UML correspondientes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Vista lógica</td>
        <td>
          Diagrama de clases, diagrama de objetos, diagrama de componentes, 
          diagrama de paquetes, diagrama de estructura compuesta
        </td>
      </tr>
      <tr>
        <td>Vista de proceso</td>
        <td>
          Diagrama de actividad, diagrama de máquina de estados, 
          diagrama de secuencia, diagrama de tiempo, 
          diagrama de descripción general de interacción
        </td>
      </tr>
      <tr>
        <td>Vista física</td>
        <td>Diagrama de implementación</td>
      </tr>
      <tr>
        <td>Vista de desarrollo</td>
        <td>Diagrama de componentes, diagrama de paquete</td>
      </tr>
      <tr>
        <td>Vista de caso de uso</td>
        <td>Diagrama de casos de uso</td>
      </tr>
    </tbody>
  </table>

  <p>
    Cada vista abarca uno o más diagramas UML que se utilizan para representar diferentes aspectos de la arquitectura del sistema, proporcionando una comprensión completa y equilibrada del sistema.
  </p>

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
