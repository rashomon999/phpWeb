  
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
    height: 315vh;
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
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
  
  <p>
    Clements et al. han introducido el concepto de <strong>viewtypes</strong>, que establecen una categorización triple de los <strong>viewpoints</strong>. Estas categorías son:
  </p>

  <ul>
    <li><strong>Module viewtype</strong></li>
    <li><strong>Component and connector viewtype</strong></li>
    <li><strong>Allocation viewtype</strong> [9]</li>
  </ul>



  <hr>
    <strong>parentesis</strong>
     <h4> ¿Qué significa que “captura las formas de trabajo”?</h4>

  <p>
    Cuando se dice que un <em>viewpoint</em> puede capturar las formas de trabajo de una comunidad, se refiere a que ese <em>viewpoint</em> incluye o refleja:
  </p>

  <ul>
    <li> Cómo esa comunidad <strong>piensa los problemas</strong></li>
    <li> Cómo los <strong>aborda o los modela</strong></li>
    <li> Qué <strong>estrategias repite</strong> al enfrentar esos problemas</li>
    <li> Qué <strong>convenciones, patrones y criterios</strong> suele seguir</li>
  </ul>
  <hr>

  <p>
    Las <strong>architecture descriptions</strong> suelen utilizar múltiples <strong>architecture views</strong> para representar las diversas estructuras necesarias que abordan las diferentes preocupaciones de los distintos interesados.
  </p>

  <p>
    Existen dos enfoques comunes para la construcción de <strong>views</strong>: el 
    <strong>synthetic approach (enfoque sintético)</strong> y el <strong>projective approach (enfoque proyectivo)</strong>.
  </p>

  <p>
    En el <strong>synthetic approach</strong>, los arquitectos construyen <strong>views</strong> del sistema de interés e integran estas <strong>views</strong> dentro de una <strong>architecture description (AD)</strong> utilizando reglas de correspondencia.
  </p>

  <p>
    En el <strong>projective approach</strong>, un arquitecto deriva cada <strong>view</strong> a través de algún procedimiento rutinario —posiblemente mecánico— de extracción desde un único modelo unificado (o “<em>uber model</em>”) [23].
  </p>

  <p>
    Una consecuencia de introducir múltiples <strong>views</strong> en una <strong>AD</strong> es el posible desajuste entre dichas <strong>views</strong>. ¿Son consistentes? ¿Están describiendo el mismo sistema? A esto se le ha llamado el <em>multiple views problem</em> [39].
  </p>

  <p>
    El <strong>projective approach</strong> limita las posibles inconsistencias, ya que las <strong>views</strong> se derivan desde un único modelo (presumiblemente consistente), pero a costa de expresividad: el modelo subyacente puede no ser capaz de capturar preocupaciones arbitrarias.
  </p>

  <p>
    Bajo el <strong>synthetic approach</strong>, los arquitectos integran las <strong>views</strong> en un todo, utilizando enlaces u otras formas de trazabilidad para hacer referencia cruzada entre elementos de <strong>views</strong> y lograr consistencia [23, 25].
  </p>

  <p>
    Los <strong>viewpoints</strong> a menudo incluyen reglas para establecer consistencia u otras relaciones entre <strong>views</strong>.
  </p>


  <hr>
 <h3>Conceptos Clave</h3>

  <div class="concepto">
    <span class="clave">AD (Architecture Description)</span><br>
    Documento o conjunto de productos de trabajo que describen la arquitectura de un sistema de software.<br>
    <span class="icono"></span> Es el nivel superior.
  </div>

  <div class="concepto">
    <span class="clave">view (vista)</span><br>
    Representa uno o más aspectos de la arquitectura para abordar ciertas preocupaciones.<br>
    <span class="icono"></span> Se pueden tener múltiples <em>views</em> en una misma <em>AD</em>.
  </div>

  <div class="concepto">
    <span class="clave">viewpoint (punto de vista)</span><br>
    Define las convenciones, notaciones, reglas y perspectivas para construir una <em>view</em>.<br>
    <span class="icono"></span> Un <em>viewpoint</em> guía cómo se crea e interpreta una <em>view</em>.
  </div>

  <h3> Enfoques para construir <em>views</em></h3>

  <div class="concepto">
    <span class="clave">synthetic approach (enfoque sintético)</span><br>
    Las <em>views</em> se construyen manualmente y luego se integran entre sí, gestionando la consistencia mediante reglas y trazabilidad.
  </div>

  <div class="concepto">
    <span class="clave">projective approach (enfoque proyectivo)</span><br>
    Las <em>views</em> se derivan automáticamente desde un modelo unificado (como UML), lo cual reduce inconsistencias pero puede limitar la expresividad.
  </div>


  <hr>




    <h3>2.2. Architecture Patterns, Styles and Reference Architectures</h3>
  <p><strong>[6*c6, 38*c11, 40*c6.3, 41*c11, 7, 9, 10c2, 13, 17, 18, 19, 37]</strong></p>

  <p>
    Inspirado por su uso en la larga historia de la arquitectura de edificios, un <strong>architectural style</strong> es una forma particular de construcción que da lugar a las características distintivas de un sistema de software. Un <strong>architectural style</strong> a menudo expresa la organización a gran escala de un sistema de software.
  </p>

  <p>
    En contraste, un <strong>architectural pattern</strong> expresa una solución común a un problema recurrente dentro del contexto de un sistema de software — no necesariamente se aplica a todo el sistema. Los <em>design patterns</em> se discuten en la sección 4.4 del área de conocimiento de Diseño de Software.
  </p>

  <p>
    Se han documentado diversos <strong>architectural styles</strong> y <strong>patterns</strong> [7, 39]:
  </p>

  <ul>
    <li><strong>Estructuras generales</strong>: por capas (<em>layered</em>), llamada y retorno (<em>call-and-return</em>), filtros y tuberías (<em>pipes and filters</em>), pizarra (<em>blackboard</em>), servicios y microservicios.</li>
    <li><strong>Sistemas distribuidos</strong>: cliente-servidor, n-capas (<em>n-tier</em>), intermediario (<em>broker</em>), publicación-suscripción, punto a punto, REST (<em>representational state transfer</em>).</li>
    <li><strong>Impulsados por métodos</strong>: orientado a objetos, orientado a eventos, flujo de datos (<em>data flow</em>).</li>
    <li><strong>Interacción usuario-computador</strong>: modelo-vista-controlador (MVC), presentación-abstracción-control.</li>
    <li><strong>Sistemas adaptativos</strong>: microkernel, reflexión y arquitecturas meta-nivel.</li>
    <li><strong>Máquinas virtuales</strong>: intérpretes, basadas en reglas, control de procesos.</li>
  </ul>

  <p>
    Los <strong>pattern catalogs</strong> (o sistemas de patrones) se utilizan para expresar <strong>architectural styles</strong> y soluciones mediante conjuntos coordinados de patrones. Ejemplos de <strong>pattern catalogs</strong> incluyen [7], [19] para arquitecturas n-tier, [13] para arquitecturas orientadas a servicios, y [37] para arquitecturas de microservicios. Los <strong>pattern catalogs</strong> no se limitan a estilos arquitectónicos y pueden estar enfocados en abordar preocupaciones específicas, como la seguridad [17].
  </p>
 
 

 

    </form>
</div>




<div class="seccion derecha">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">


  <p>
    No existe una línea divisoria estricta entre <strong>architectural styles</strong> y
    <strong>architectural patterns</strong>. Ambos ofrecen soluciones a problemas específicos 
    en contextos determinados. Un <strong>architectural style</strong> expresa los aspectos 
    globales de un sistema o subsistema definiendo sus partes principales y cómo interactúan [7, 38*].
    Un
    Architecture style (Estilo arquitectónico)
    puede ser expresado como un <strong>architectural pattern</strong> [7].
  </p>


      <p>
    Los <strong>architectural patterns</strong> existen en distintas escalas y pueden aplicarse una sola vez a un elemento del sistema o repetirse en todo el sistema.
  </p>

  <p>
    En relación con los <strong>architecture viewpoints</strong>, que proporcionan los lenguajes para hablar sobre varios aspectos de sistemas de software, una noción unificadora es que tanto los <strong>patterns</strong> como los <strong>styles</strong> son expresiones idiomáticas en esos lenguajes para expresar aspectos particulares de arquitecturas (y diseños; véase sección 4.4 <em>Design Patterns</em> en el área de conocimiento de Diseño de Software).
  </p>

          <p>
    Un <strong>architectural pattern</strong> o <strong>style</strong> usa un vocabulario, tomado del lenguaje del <strong>viewpoint</strong>, de una forma específica, para hablar sobre los elementos de la <strong>view</strong>, incluyendo tipos de elementos y relaciones, sus instancias y las restricciones sobre cómo combinarlos [23, 39].
  </p>

  <p>
    De esta manera, los <strong>viewpoints</strong>, <strong>patterns</strong> y <strong>styles</strong> son mecanismos para codificar prácticas recomendadas que faciliten la reutilización.
  </p>

  <p>
    Una <strong>reference architecture (RA)</strong> es una arquitectura que restringe o guía otras arquitecturas. Documentada como una <em>reference architecture description</em>, una RA proporciona una base común para el desarrollo de arquitecturas de sistemas individuales, líneas de productos o familias de sistemas y dominios de aplicación.
  </p>

  <p>
    Las <strong>reference architectures</strong> capturan elementos comunes para promover la facilidad de desarrollo, integración e interoperabilidad, así como otros tipos de estandarización.
  </p>

  <p>
    Las <strong>reference architectures</strong> han sido desarrolladas y utilizadas en muchos dominios, incluyendo sistemas automotrices, salud, Internet de las Cosas, computación en la nube, aviónica, manufactura y telecomunicaciones.
  </p>

  <hr>
  <h3> ¿Qué es un <em>architectural style</em>?</h3>
  <p>
    Es una forma general de estructurar un sistema de software, inspirada en cómo se hace en arquitectura de edificios. Define los componentes principales y sus relaciones.
  </p>
  <p>Algunos ejemplos comunes:</p>
  <ul>
    <li><strong>Layered</strong> (por capas): como en una app web con capa de presentación, lógica y datos.</li>
    <li><strong>Pipes and filters</strong>: donde datos fluyen por etapas, como en editores de imágenes o compiladores.</li>
    <li><strong>Microservices</strong>: muchas partes pequeñas independientes que se comunican por red.</li>
  </ul>

  <h3>¿Qué es un <em>architectural pattern</em>?</h3>
  <p>
    Es una solución recurrente a un problema específico de arquitectura. A diferencia de los <em>styles</em>, no necesariamente aplica a todo el sistema, sino a partes específicas.
  </p>
  <p>Ejemplos:</p>
  <ul>
    <li><strong>Client-server</strong> (cliente-servidor)</li>
    <li><strong>MVC</strong> (Modelo-Vista-Controlador)</li>
    <li><strong>Broker</strong> (intermediario entre componentes)</li>
  </ul>

  <h3> ¿Cuál es la diferencia entre <em>style</em> y <em>pattern</em>?</h3>
  <p>No hay una línea clara entre ambos. Pero en general:</p>
  <ul>
    <li>Un <em>style</em> define cómo se organiza un sistema completo o subsistema.</li>
    <li>Un <em>pattern</em> se usa para resolver problemas específicos en ciertas partes del sistema.</li>
    <li>Un <em>style</em> puede expresarse como un <em>pattern</em>.</li>
  </ul>

  <h3> ¿Qué es un <em>pattern catalog</em>?</h3>
  <p>
    Es una colección organizada de patrones, como un "manual de soluciones".
  </p>
  <p>Ejemplos:</p>
  <ul>
    <li>Catálogos de patrones para arquitecturas <strong>n-capas</strong>.</li>
    <li>Para arquitecturas orientadas a servicios (<strong>SOA</strong>).</li>
    <li>Para <strong>microservicios</strong>.</li>
  </ul>

  <h3>¿Qué es un <em>reference architecture (RA)</em>?</h3>
  <p>
    Es una arquitectura base que sirve como guía o plantilla para construir arquitecturas específicas. Ayuda a mantener consistencia, interoperabilidad y estándares.
  </p>
  <p>Por ejemplo:</p>
  <ul>
    <li>Una RA para sistemas de <strong>salud</strong> o para <strong>Internet de las Cosas (IoT)</strong>.</li>
    <li>Una RA define partes comunes y buenas prácticas reutilizables.</li>
  </ul>
  <hr>

  <h3>2.3. Architecture Description Languages and Architecture Frameworks</h3>
  <p><strong>[2*c22, 41*c6-7, 23, 30]</strong></p>

  <p>
    Un <strong>architecture description language (ADL)</strong> es un lenguaje específico de dominio utilizado para expresar arquitecturas de software. Los ADLs surgieron de los <em>module interconnection languages</em> [36] para la programación a gran escala.
  </p>

  <p>
    Algunos ADLs están dirigidos a un único dominio de aplicación o estilo arquitectónico (por ejemplo, MetaH para sistemas de aviónica con estilo orientado a eventos); otros son de amplio espectro y permiten enmarcar preocupaciones a nivel empresarial (como ArchiMate™).
  </p>

  <p>
    UML se ha utilizado con frecuencia como un ADL debido a su uso generalizado en actividades de diseño de software [41*].
  </p>

  <p>
    Los ADLs a menudo proporcionan capacidades que van más allá de la descripción, permitiendo el análisis de arquitecturas o la generación de código.
  </p>

    
    </form>
</div>

<div class="centered-container">
    <a
        name="siguiente" 
        id="siguiente"
        class="btn btn-primary"
        href="cuarto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
