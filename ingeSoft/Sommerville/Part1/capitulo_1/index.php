 
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
    <p>No podemos operar el mundo moderno sin software. Las infraestructuras nacionales y los servicios 
    públicos están controlados por sistemas basados en computadoras, y la mayoría de los productos eléctricos 
    incluyen una computadora y software de control. La manufactura industrial y la distribución están completamente 
    informatizadas, al igual que el sistema financiero. El entretenimiento, incluida la industria musical, los
    videojuegos, y el cine y la televisión, depende intensamente del software. Por lo tanto, la ingeniería de 
    software es esencial para el funcionamiento de las sociedades nacionales e internacionales.</p>

<p>Los sistemas de software son abstractos e intangibles. No están limitados por las propiedades de los materiales, ni gobernados por leyes físicas o procesos de fabricación. Esto simplifica la ingeniería de software, ya que no hay límites naturales para el potencial del software. Sin embargo, debido a la falta de restricciones físicas, los sistemas de software pueden volverse rápidamente extremadamente complejos, difíciles de entender y costosos de modificar.</p>

<p>Existen muchos tipos diferentes de sistemas de software, desde sistemas embebidos simples hasta sistemas de información complejos a nivel mundial. Es inútil buscar notaciones, métodos o técnicas universales para la ingeniería de software, porque los distintos tipos de software requieren enfoques diferentes. Desarrollar un sistema de información organizacional es completamente diferente a desarrollar un controlador para un instrumento científico. Ninguno de estos sistemas tiene mucho en común con un videojuego intensivo en gráficos. Todas estas aplicaciones necesitan ingeniería de software; pero no todas necesitan las mismas técnicas de ingeniería de software.</p>

<p>Todavía se reportan muchos casos de proyectos de software fallidos y “fallos de software”. La ingeniería de software es criticada por ser inadecuada para el desarrollo de software moderno. Sin embargo, en mi opinión, muchas de estas llamadas fallas de software son consecuencia de dos factores:</p>

<ol>
  <li><strong>Demandas crecientes</strong>: A medida que las nuevas técnicas de ingeniería de software nos ayudan a construir sistemas más grandes y complejos, las exigencias cambian. Los sistemas deben construirse y entregarse más rápidamente; se requieren sistemas aún más grandes y complejos; los sistemas deben tener nuevas capacidades que antes se consideraban imposibles. Los métodos existentes de ingeniería de software no pueden lidiar con esto, y deben desarrollarse nuevas técnicas de ingeniería de software para satisfacer estas nuevas demandas.</li>
  <li><strong>Bajas expectativas</strong>: Es relativamente fácil escribir programas de computadora sin utilizar métodos y técnicas de ingeniería de software. Muchas empresas han incursionado en el desarrollo de software a medida que sus productos y servicios han evolucionado. No utilizan métodos de ingeniería de software en su trabajo cotidiano. Como resultado, su software suele ser más costoso y menos confiable de lo que debería ser. Necesitamos una mejor educación y capacitación en ingeniería de software para abordar este problema.</li>
</ol>

<p>Los ingenieros de software pueden sentirse justamente orgullosos de sus logros. Por supuesto, todavía tenemos problemas al desarrollar software complejo, pero sin la ingeniería de software, no habríamos explorado el espacio, no tendríamos Internet ni telecomunicaciones modernas. Todas las formas de transporte serían más peligrosas y costosas. La ingeniería de software ha contribuido enormemente, y estoy convencido de que sus aportes en el siglo XXI serán aún mayores.</p>


    <p>La noción de "ingeniería de software" fue propuesta por primera vez en 1968 en una conferencia realizada para discutir lo que entonces se llamaba la "crisis del software" (Naur y Randell, 1969). Quedó claro que los enfoques individuales para el desarrollo de programas no se escalaban bien a sistemas de software grandes y complejos. Estos eran poco confiables, costaban más de lo esperado y se entregaban con retraso.</p>

<p>A lo largo de las décadas de 1970 y 1980, se desarrollaron una variedad de nuevas técnicas y métodos de ingeniería de software, como la programación estructurada, el ocultamiento de información y el desarrollo orientado a objetos. Se desarrollaron herramientas y notaciones estándar que ahora se utilizan ampliamente.</p>

    <h2>1.1 Desarrollo profesional de software</h2>

<p>Mucha gente escribe programas. Personas en el ámbito empresarial escriben programas de hojas de cálculo para simplificar sus tareas, científicos e ingenieros escriben programas para procesar sus datos experimentales, y aficionados escriben programas por interés y diversión propios. Sin embargo, la gran mayoría del desarrollo de software es una actividad profesional donde el software se desarrolla con fines empresariales específicos, para su inclusión en otros dispositivos, o como productos de software tales como sistemas de información, sistemas CAD, etc. El software profesional, destinado a ser utilizado por alguien diferente a su desarrollador, suele ser desarrollado por equipos en lugar de individuos. Se mantiene y se modifica a lo largo de su vida útil.</p>

<p>La ingeniería de software está destinada a apoyar el desarrollo profesional de software, en lugar de la programación individual. Incluye técnicas que respaldan la especificación, el diseño y la evolución de programas, ninguna de las cuales es normalmente relevante para el desarrollo de software personal. Para ayudarte a obtener una visión amplia de lo que trata la ingeniería de software, he resumido algunas preguntas frecuentes en la Figura 1.1.</p>

<p>Mucha gente piensa que el software es simplemente otra palabra para programas de computadora. Sin embargo, cuando hablamos de ingeniería de software, el software no se refiere solo a los programas en sí, sino también a toda la documentación asociada y los datos de configuración necesarios para que estos programas funcionen correctamente. Un sistema de software desarrollado profesionalmente suele ser más que un solo programa. El sistema usualmente consiste en varios programas separados y archivos de configuración que se utilizan para configurar dichos programas. Puede incluir documentación del sistema, que describe la estructura del sistema; documentación para el usuario, que explica cómo utilizar el sistema; y sitios web para que los usuarios descarguen información reciente del producto.</p>

<p>Esta es una de las diferencias importantes entre el desarrollo profesional y el desarrollo aficionado de software. Si estás escribiendo un programa para ti mismo, nadie más lo usará y no tienes que preocuparte por escribir guías del programa, documentar el diseño del programa, etc. Sin embargo, si estás escribiendo software que otras personas van a usar y que otros ingenieros van a modificar, entonces usualmente tienes que proporcionar información adicional además del código del programa.</p>

    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <table border="1" cellpadding="8" cellspacing="0">
  <thead>
    <tr>
      <th>Pregunta</th>
      <th>Respuesta</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>¿Qué es el software?</td>
      <td>Programas de computadora y documentación asociada. Los productos de software pueden desarrollarse para un cliente en particular o para un mercado general.</td>
    </tr>
    <tr>
      <td>¿Cuáles son los atributos de un buen software?</td>
      <td>Un buen software debe ofrecer la funcionalidad y el rendimiento requeridos al usuario, y debe ser mantenible, confiable y fácil de usar.</td>
    </tr>
    <tr>
      <td>¿Qué es la ingeniería de software?</td>
      <td>La ingeniería de software es una disciplina de la ingeniería que se ocupa de todos los aspectos de la producción de software.</td>
    </tr>
    <tr>
      <td>¿Cuáles son las actividades fundamentales de la ingeniería de software?</td>
      <td>Especificación del software, desarrollo de software, validación del software y evolución del software.</td>
    </tr>
    <tr>
      <td>¿Cuál es la diferencia entre ingeniería de software y ciencias de la computación?</td>
      <td>La ciencia de la computación se enfoca en la teoría y los fundamentos; la ingeniería de software se ocupa de los aspectos prácticos del desarrollo y entrega de software útil.</td>
    </tr>
    <tr>
      <td>¿Cuál es la diferencia entre ingeniería de software e ingeniería de sistemas?</td>
      <td>La ingeniería de sistemas se ocupa de todos los aspectos del desarrollo de sistemas basados en computadora, incluyendo hardware, software e ingeniería de procesos. La ingeniería de software es parte de este proceso más general.</td>
    </tr>
    <tr>
      <td>¿Cuáles son los desafíos clave que enfrenta la ingeniería de software?</td>
      <td>Enfrentar una diversidad creciente, demandas de tiempos de entrega reducidos y el desarrollo de software confiable.</td>
    </tr>
    <tr>
      <td>¿Cuáles son los costos de la ingeniería de software?</td>
      <td>Aproximadamente el 60% de los costos del software son de desarrollo; el 40% son de pruebas. En el caso del software a medida, los costos de evolución a menudo superan a los costos de desarrollo.</td>
    </tr>
    <tr>
      <td>¿Cuáles son las mejores técnicas y métodos de ingeniería de software?</td>
      <td>Aunque todos los proyectos de software deben ser gestionados y desarrollados profesionalmente, diferentes técnicas son apropiadas para diferentes tipos de sistemas. Por ejemplo, los videojuegos deben desarrollarse siempre mediante una serie de prototipos, mientras que los sistemas de control críticos para la seguridad requieren una especificación completa y analizables. Por lo tanto, no se puede decir que un método sea mejor que otro.</td>
    </tr>
    <tr>
      <td>¿Qué diferencias ha traído la Web a la ingeniería de software?</td>
      <td>La Web ha permitido la disponibilidad de servicios de software y la posibilidad de desarrollar sistemas altamente distribuidos basados en servicios. El desarrollo de sistemas basados en la Web ha conducido a avances importantes en los lenguajes de programación y en la reutilización de software.</td>
    </tr>
  </tbody>
</table>

  <h3>tabla/figura 1.1 Preguntas frecuentes sobre software</h3>

<p>Los ingenieros de software se ocupan del desarrollo de productos de software (es decir, software que puede ser vendido a un cliente). Existen dos tipos de productos de software:</p>

<ol>
  <li><strong>Productos genéricos:</strong> Son sistemas independientes que son producidos por una organización de desarrollo y vendidos en el mercado abierto a cualquier cliente que pueda comprarlos. Ejemplos de este tipo de producto incluyen software para PCs como bases de datos, procesadores de texto, paquetes de dibujo y herramientas de gestión de proyectos. También incluye las llamadas aplicaciones verticales diseñadas para un propósito específico como sistemas de información de bibliotecas, sistemas contables o sistemas para mantener registros dentales.</li>

  <li><strong>Productos personalizados (o a medida):</strong> Son sistemas que son solicitados por un cliente en particular. Un contratista de software desarrolla el software especialmente para ese cliente. Ejemplos de este tipo de software incluyen sistemas de control para dispositivos electrónicos, sistemas escritos para apoyar un proceso empresarial particular y sistemas de control del tráfico aéreo.</li>
</ol>

<p>Una diferencia importante entre estos tipos de software es que, en los productos genéricos, la organización que desarrolla el software controla la especificación del software. Para los productos personalizados, la especificación usualmente es desarrollada y controlada por la organización que compra el software. Los desarrolladores de software deben trabajar con base en esa especificación.</p>

<p>Sin embargo, la distinción entre estos tipos de productos de software se está volviendo cada vez más difusa. Cada vez más sistemas se están construyendo con un producto genérico como base, que luego es adaptado para satisfacer los requerimientos de un cliente. Los sistemas de Planificación de Recursos Empresariales (ERP), como el sistema SAP, son el mejor ejemplo de este enfoque. En estos casos, un sistema grande y complejo se adapta para una empresa incorporando información sobre reglas y procesos de negocio, informes requeridos, etc.</p>

<p>Cuando hablamos de la calidad del software profesional, debemos tener en cuenta que el software es utilizado y modificado por personas distintas a sus desarrolladores. Por lo tanto, la calidad no se refiere solamente a lo que hace el software. Más bien, debe incluir el comportamiento del software mientras se ejecuta, así como la estructura y organización de los programas del sistema y la documentación asociada. Esto se refleja en los llamados atributos de calidad o atributos no funcionales del software. Ejemplos de estos atributos son el tiempo de respuesta del software ante una consulta del usuario y la comprensibilidad del código del programa.</p>

<p>El conjunto específico de atributos que se espera de un sistema de software obviamente depende de su aplicación. Por lo tanto, un sistema bancario debe ser seguro, un juego interactivo debe ser ágil, un sistema de conmutación telefónica debe ser confiable, etc. Estos atributos pueden generalizarse en el conjunto mostrado en la Figura 1.2, que considero son las características esenciales de un sistema de software profesional.</p>

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
