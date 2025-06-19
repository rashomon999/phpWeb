 
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
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h3>2. Proceso de Requisitos</h3>
<p>[1*, c4s4] [2*, c1–4, c6, c22, c23]</p>

<p>
Esta sección introduce el proceso de requisitos de software, orientando los cinco temas restantes y mostrando cómo el proceso de requisitos se acopla con el proceso general de ingeniería de software.
</p>

<h4>2.1. Modelos de Proceso</h4>

<p>
El objetivo de este tema es proporcionar una comprensión de que el proceso de requisitos:
</p>
<ul>
  <li>
    no es una actividad discreta al inicio del ciclo de vida del software, sino más bien un proceso que se inicia al comienzo de un proyecto y que continúa refinándose a lo largo del ciclo de vida;
  </li>
  <li>
    identifica los requisitos del software como elementos de configuración y los gestiona utilizando las mismas prácticas de gestión de configuración de software que los demás productos de los procesos del ciclo de vida del software;
  </li>
  <li>
    necesita adaptarse al contexto de la organización y del proyecto.
  </li>
</ul>

<p>
En particular, el tema se ocupa de cómo se configuran las actividades de obtención, análisis, especificación y validación para diferentes tipos de proyectos y restricciones. 
El tema también incluye actividades que aportan información al proceso de requisitos, tales como estudios de mercado y estudios de viabilidad.
</p>

<h4>2.2. Actores del Proceso</h4>

<p>
Este tema presenta los roles de las personas que participan en el proceso de requisitos. 
Este proceso es fundamentalmente interdisciplinario, y el especialista en requisitos necesita mediar entre el dominio del interesado y el de la ingeniería de software. 
A menudo hay muchas personas involucradas además del especialista en requisitos, cada una de las cuales tiene un interés en el software. 
Los interesados variarán de un proyecto a otro, pero siempre incluirán a usuarios/operadores y clientes (que no necesariamente son los mismos).
</p>

<p>
Ejemplos típicos de interesados en el software incluyen (pero no se limitan a) los siguientes:
</p>
<ul>
  <li>
    <strong>Usuarios:</strong> Este grupo está compuesto por quienes operarán el software. 
    A menudo es un grupo heterogéneo que incluye personas con diferentes roles y requisitos.
  </li>
  <li>
    <strong>Clientes:</strong> Este grupo está compuesto por quienes han encargado el software o quienes representan el mercado objetivo del software.
  </li>
  <li>
    <strong>Analistas de mercado:</strong> Un producto dirigido al mercado masivo no tendrá un cliente específico que lo encargue, por lo que frecuentemente se necesita al personal de mercadeo para establecer lo que el mercado necesita y actuar como clientes sustitutos.
  </li>
  <li>
    <strong>Reguladores:</strong> Muchos dominios de aplicación, como la banca y el transporte público, están regulados. El software en estos dominios debe cumplir con los requisitos de las autoridades regulatorias.
  </li>
  <li>
    <strong>Ingenieros de software:</strong> Estos individuos tienen un interés legítimo en beneficiarse del desarrollo del software, por ejemplo, reutilizando componentes en otros productos o desde ellos. 
    Si, en este escenario, un cliente de un producto particular tiene requisitos específicos que comprometen el potencial de reutilización de componentes, los ingenieros de software deben sopesar cuidadosamente su propio interés frente a los del cliente. 
    Requisitos específicos, en particular restricciones, pueden tener un impacto importante en el costo del proyecto o en su entrega, debido a que se ajusten bien o mal al conjunto de habilidades de los ingenieros. 
    Deberían identificarse compromisos importantes entre tales requisitos.
  </li>
</ul>

<p>
No será posible satisfacer perfectamente los requisitos de todos los interesados, y es tarea del ingeniero de software negociar compromisos que sean aceptables para los principales interesados y que estén dentro de las restricciones presupuestarias, técnicas, regulatorias y de otro tipo. 
Un requisito previo para esto es que todos los interesados sean identificados, que se analice la naturaleza de su “interés” y que se obtengan sus requisitos.
</p>
    <hr>
    <strong>parentesis</strong>
    <p>El “interés” del ingeniero de software en este contexto se refiere a:</p>

<ul>
  <li>Crear soluciones eficientes.</li>
  <li>Reutilizar componentes ya probados (ahorra tiempo, reduce errores).</li>
  <li>Mantener una arquitectura limpia, sostenible y escalable.</li>
</ul>

    <hr>

    <h4>2.3. Apoyo y Gestión del Proceso</h4>

<p>
Esta sección introduce los recursos de gestión de proyectos que son requeridos y consumidos por el proceso de requisitos. 
Establece el contexto para el primer tema (Iniciación y Definición del Alcance) del área de conocimiento de Gestión de la Ingeniería de Software. 
Su propósito principal es establecer el vínculo entre las actividades del proceso identificadas en la sección 2.1 y los aspectos de costo, recursos humanos, capacitación y herramientas.
</p>

<h4>2.4. Calidad del Proceso y Mejora</h4>

<p>
Este tema se ocupa de la evaluación de la calidad y la mejora del proceso de requisitos. 
Su objetivo es enfatizar el papel clave que desempeña el proceso de requisitos en términos de costo y puntualidad de un producto de software, y en la satisfacción del cliente con dicho producto. 
También ayudará a orientar el proceso de requisitos conforme a normas de calidad y modelos de mejora de procesos para software y sistemas.
</p>

<p>
La calidad del proceso y su mejora están estrechamente relacionadas tanto con el área de conocimiento de Calidad del Software como con la de Proceso de Ingeniería de Software, e incluyen:
</p>
<ul>
  <li>Cobertura del proceso de requisitos por normas y modelos de mejora de procesos;</li>
  <li>Medidas del proceso de requisitos y evaluación comparativa (benchmarking);</li>
  <li>Planificación e implementación de mejoras;</li>
  <li>Mejora/planificación e implementación de seguridad / CIA (Confidencialidad, Integridad y Disponibilidad).</li>
</ul>


  
 

    </form>
</div>




<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

       <h3>3. Elicitación de Requisitos</h3>
<p>[1*, c4s5] [2*, c5, c6, c9]</p>

<p>
La elicitación de requisitos se ocupa del origen de los requisitos del software y de cómo el ingeniero de software puede recopilarlos. 
Es la primera etapa para construir una comprensión del problema que el software debe resolver. 
Es, fundamentalmente, una actividad humana y es donde se identifican los interesados y se establecen las relaciones entre el equipo de desarrollo y el cliente.
</p>

<p>
Se le denomina de diversas maneras, tales como “captura de requisitos”, “descubrimiento de requisitos” y “adquisición de requisitos”.
</p>


   <p>
Uno de los principios fundamentales de un buen proceso de elicitación de requisitos es la comunicación efectiva entre los distintos interesados. 
Esta comunicación continúa a lo largo de todo el proceso del Ciclo de Vida del Desarrollo de Software (SDLC) con diferentes interesados en distintos momentos del tiempo. 
Antes de que comience el desarrollo, los especialistas en requisitos pueden servir como canal para esta comunicación. 
Deben mediar entre el dominio de los usuarios del software (y otros interesados) y el mundo técnico del ingeniero de software. 
Un conjunto de modelos internamente consistentes en diferentes niveles de abstracción facilita la comunicación entre los usuarios/interesados del software y los ingenieros de software.
</p>

<p>
Un elemento crítico en la elicitación de requisitos es informar sobre el alcance del proyecto. 
Esto implica proporcionar una descripción del software que se va a especificar y su propósito, así como priorizar los entregables para asegurar que se satisfagan primero las necesidades comerciales más importantes del cliente. 
Esto minimiza el riesgo de que los especialistas en requisitos dediquen tiempo a elicitar requisitos de baja importancia o que resulten irrelevantes cuando se entregue el software. 
Por otro lado, la descripción debe ser escalable y extensible para aceptar futuros requisitos no expresados en las primeras listas formales, y ser compatible con los anteriores como lo contemplan los métodos recursivos.
</p>

<h4>3.1. Fuentes de Requisitos</h4>

<p>
Los requisitos en un software típico tienen muchas fuentes, y es esencial que todas las fuentes potenciales sean identificadas y evaluadas. 
Este tema está diseñado para fomentar la conciencia sobre las diversas fuentes de requisitos de software y sobre los marcos para gestionarlas. 
Los puntos principales que se abordan son los siguientes:
</p>

<ul>
  <li>
    <strong>Objetivos:</strong> El término “objetivo” (a veces llamado “interés comercial” o “factor crítico de éxito”) se refiere a los objetivos generales y de alto nivel del software. 
    Los objetivos proporcionan la motivación para el software, pero a menudo están formulados de forma vaga. 
    Los ingenieros de software deben prestar especial atención a evaluar el valor (en relación con la prioridad) y el costo de los objetivos. 
    Un estudio de viabilidad es una forma relativamente económica de hacerlo.
  </li>

  <li>
    <strong>Conocimiento del dominio:</strong> El ingeniero de software necesita adquirir o tener disponible conocimiento sobre el dominio de la aplicación. 
    El conocimiento del dominio proporciona el contexto contra el cual debe interpretarse todo el conocimiento de requisitos elicitado para poder comprenderlo. 
    Es una buena práctica emular un enfoque ontológico en el dominio del conocimiento. 
    Se deben identificar las relaciones entre los conceptos relevantes dentro del dominio de aplicación.
  </li>

  <li>
    <strong>Interesados (véase la sección 2.2, Actores del Proceso):</strong> 
    Muchos desarrollos de software han resultado insatisfactorios porque se enfocaron excesivamente en los requisitos de un grupo de interesados en detrimento de otros. 
    Por lo tanto, el software entregado resulta difícil de usar o socava las estructuras culturales o políticas de la organización cliente. 
    El ingeniero de software debe identificar, representar y gestionar los “puntos de vista” de muchos tipos diferentes de interesados.
  </li>

  <li>
    <strong>Reglas de negocio:</strong> Son declaraciones que definen o restringen algún aspecto de la estructura o del comportamiento del negocio en sí. 
    “Un estudiante no puede registrarse en los cursos del próximo semestre si tiene cuotas de matrícula pendientes de pago” sería un ejemplo de una regla de negocio que funcionaría como fuente de requisitos para un sistema de registro de cursos universitario.
  </li>

  <li>
    <strong>El entorno operativo:</strong> Los requisitos se derivarán del entorno en el cual se ejecutará el software. 
    Estos pueden ser, por ejemplo, restricciones de tiempo en software en tiempo real o restricciones de rendimiento en un entorno empresarial. 
    Deben identificarse de forma activa, ya que pueden afectar en gran medida la viabilidad y el costo del software, así como limitar las decisiones de diseño.
  </li>

  <li>
    <strong>El entorno organizacional:</strong> El software a menudo debe apoyar un proceso empresarial, cuya selección puede estar condicionada por la estructura, la cultura y la política interna de la organización. 
    El ingeniero de software debe ser sensible a estos factores, ya que, en general, el nuevo software no debería imponer un cambio no planificado al proceso empresarial.
  </li>

</ul>
    <hr>
    <strong>parentesis:</strong>
    <p>En este contexto, el término <strong>“fuente”</strong> se refiere al origen desde el cual se pueden obtener (elicitar) los requisitos del software.</p>

<p>Es decir, una fuente de requisitos es cualquier persona, documento, conocimiento, sistema o necesidad que pueda proporcionar información relevante sobre lo que el software debe hacer, cómo debe comportarse, o cuáles son sus restricciones.</p>

    <hr>
<h4>3.2. Técnicas de Elicitación</h4>

<p>
Una vez identificadas las fuentes de requisitos, el ingeniero de software puede comenzar a elicitar información de
 requisitos a partir de ellas. 
Tenga en cuenta que los requisitos rara vez se presentan ya preparados. 
Más bien, el ingeniero de software elicita información a partir de la cual formula los requisitos.
Este tema se centra en técnicas para lograr que los interesados humanos expresen información relevante para los requisitos.
Es una tarea muy difícil y el ingeniero de software debe ser consciente de que (por ejemplo) los usuarios pueden tener dificultades para describir sus tareas, pueden omitir información importante o pueden no estar dispuestos o no ser capaces de cooperar.
</p>
    </form>
</div>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="tercero.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
