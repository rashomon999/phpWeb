 
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
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    
<p>
Es particularmente importante entender que la elicitación no es una actividad pasiva y que, incluso si se dispone de interesados cooperativos y elocuentes, el ingeniero de software debe trabajar arduamente para obtener la información adecuada. 
Muchos requisitos comerciales o técnicos son tácitos o están en retroalimentaciones que aún no se han obtenido de los usuarios finales. 
La importancia de la planificación, verificación y validación en la elicitación de requisitos no puede subestimarse.
Existe una variedad de técnicas para la elicitación de requisitos; las principales son:
</p>

<ul>
  <li>
    <strong>Entrevistas:</strong> Entrevistar a los interesados es un medio “tradicional” de elicitar requisitos. 
    Es importante comprender las ventajas y limitaciones de las entrevistas y cómo deben ser conducidas.
  </li>

  <li>
    <strong>Escenarios:</strong> Los escenarios ofrecen un medio valioso para proporcionar contexto a la elicitación de requisitos de usuario. 
    Permiten al ingeniero de software establecer un marco para preguntas sobre tareas del usuario mediante preguntas del tipo “¿qué pasaría si...?” o “¿cómo se hace esto?”. 
    El tipo más común de escenario es la descripción de casos de uso. 
    Aquí hay un vínculo con el tema 4.2 (Modelado Conceptual), ya que notaciones como los diagramas de casos de uso son comunes en el modelado de software.
  </li>

  <li>
    <strong>Prototipos:</strong> Esta técnica es una herramienta valiosa para aclarar requisitos ambiguos. 
    Pueden funcionar de manera similar a los escenarios al proporcionar a los usuarios un contexto dentro del cual pueden comprender mejor qué información necesitan proporcionar. 
    Hay una amplia gama de técnicas de prototipado, desde maquetas en papel de diseños de pantalla hasta versiones beta de productos de software, y un fuerte solapamiento entre sus usos tanto para la elicitación como para la validación de requisitos (ver sección 6.2, Prototipado). 
    Los prototipos de baja fidelidad suelen ser preferidos para evitar que los interesados se “anclen” en características menores o accidentales de un prototipo de alta calidad que pueden limitar la flexibilidad del diseño de manera no intencionada.
  </li>

  <li>
    <strong>Reuniones facilitadas:</strong> El propósito de estas reuniones es tratar de lograr un efecto sumatorio, mediante el cual un grupo de personas puede aportar más información sobre sus requisitos de software que trabajando individualmente. 
    Pueden hacer lluvia de ideas y refinar conceptos que podrían ser difíciles de sacar a la luz mediante entrevistas. 
    Otra ventaja es que los requisitos en conflicto salen a la superficie tempranamente, de manera que los interesados pueden reconocer dónde ocurren. 
    Cuando funciona bien, esta técnica puede dar como resultado un conjunto de requisitos más rico y consistente de lo que sería posible de otro modo. 
    Sin embargo, las reuniones deben ser manejadas cuidadosamente (de ahí la necesidad de un facilitador) para evitar una situación en la que las capacidades críticas del equipo se vean erosionadas por la lealtad grupal, o en la que se favorezcan los requisitos de unas pocas personas expresivas (y quizás con autoridad) en detrimento de otros.
  </li>

  <li>
    <strong>Observación:</strong> La importancia del contexto del software dentro del entorno organizacional ha llevado a la adaptación de técnicas de observación como la etnografía para la elicitación de requisitos. 
    Los ingenieros de software aprenden sobre las tareas de los usuarios al integrarse en el entorno y observar cómo los usuarios realizan sus tareas interactuando entre ellos y con herramientas de software y otros recursos. 
    Estas técnicas son relativamente costosas pero también muy instructivas, ya que demuestran que muchas tareas de los usuarios y procesos empresariales son demasiado sutiles y complejos para que sus actores los describan fácilmente.
  </li>

  <li>
    <strong>Historias de usuario:</strong> Esta técnica se utiliza comúnmente en métodos adaptativos (ver Métodos Ágiles en el KA de Modelos y Métodos de Ingeniería de Software) y se refiere a descripciones breves y de alto nivel de funcionalidad requerida expresadas en términos del cliente. 
    Una historia de usuario típica tiene la forma: “Como (rol), quiero (meta/deseo) para que (beneficio).” 
    Una historia de usuario está pensada para contener solo la información suficiente para que los desarrolladores puedan hacer una estimación razonable del esfuerzo para implementarla. 
    El objetivo es evitar parte del desperdicio que a menudo ocurre en proyectos donde se recopilan requisitos detallados desde el principio pero que se vuelven inválidos antes de comenzar el trabajo. 
    Antes de que se implemente una historia de usuario, el cliente debe escribir un procedimiento de aceptación adecuado para determinar si se han cumplido los objetivos de la historia.
  </li>

  <li>
    <strong>Otras técnicas:</strong> Existe una variedad de otras técnicas que apoyan la elicitación de información sobre requisitos y que van desde el análisis de productos de la competencia hasta la aplicación de técnicas de minería de datos o el uso de fuentes de conocimiento del dominio o bases de datos de solicitudes de clientes.
  </li>
</ul>

 <img src="../../../../img/imagen_historias.png" alt="" width="720">  
 
    </form>
</div>




<div class="seccion derecha">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 <h2>4. Análisis de Requisitos</h2>
<p>
[1*, c4s1, c4s5, c10s4, c12s5]<br>
[2*, c7, c11, c12, c17]
</p>

<p>
Este tema se ocupa del proceso de análisis de los requisitos con los siguientes propósitos:
</p>
<ul>
  <li>Detectar y resolver conflictos entre requisitos.</li>
  <li>Descubrir los límites del software y cómo debe interactuar con su entorno organizacional y operativo.</li>
  <li>Elaborar los requisitos del sistema para derivar los requisitos del software.</li>
</ul>

<p>
La visión tradicional del análisis de requisitos ha sido que se reduce a un modelado conceptual utilizando uno de varios métodos de análisis, como el método de análisis estructurado. 
Aunque el modelado conceptual es importante, aquí se incluye también la <strong>clasificación de requisitos</strong> como apoyo para informar los compromisos entre requisitos 
(clasificación de requisitos) y el proceso para establecer estos compromisos (negociación de requisitos).
</p>

<p>
Debe tenerse cuidado al describir los requisitos con la suficiente precisión para permitir que sean validados, que su implementación sea verificada y que sus costos sean estimados.
</p>

<h3>4.1. Clasificación de Requisitos</h3>
<p>
Los requisitos pueden clasificarse en una serie de dimensiones. Algunos ejemplos incluyen:
</p>

<ul>
  <li>
    <strong>Funcionales o no funcionales:</strong> (ver sección 1.3, Requisitos Funcionales y No Funcionales).
  </li>
  
  <li>
    <strong>Derivados o impuestos:</strong> Si el requisito proviene de uno o más requisitos de alto nivel o de una propiedad emergente 
    (ver sección 1.4, Propiedades Emergentes), o si ha sido impuesto directamente sobre el software por un interesado u otra fuente.
  </li>
  
  <li>
    <strong>Del producto o del proceso:</strong> (ver sección 1.2, Requisitos del Producto y del Proceso). 
    Los requisitos del proceso pueden restringir la elección del contratista, el proceso de ingeniería de software a adoptar o los estándares a seguir.
  </li>
  
  <li>
    <strong>Prioridad del requisito:</strong> Cuanto mayor sea la prioridad, más esencial será el requisito para cumplir los objetivos generales del software. 
    A menudo se clasifican en una escala fija como obligatorio, altamente deseable, deseable u opcional. 
    La prioridad generalmente debe equilibrarse con el costo de desarrollo e implementación.
  </li>
  
  <li>
    <strong>Alcance del requisito:</strong> El alcance se refiere a qué tanto afecta un requisito al software y a sus componentes. 
    Algunos requisitos, especialmente ciertos no funcionales, tienen un <em>alcance global</em>, lo que significa que su satisfacción no puede asignarse a un solo componente. 
    Por tanto, un requisito con alcance global puede influir significativamente en la arquitectura del software y el diseño de muchos componentes, 
    mientras que uno con alcance reducido puede ofrecer varias opciones de diseño y tener poco impacto sobre otros requisitos.
  </li>
  
  <li>
    <strong>Volatilidad/Estabilidad:</strong> Algunos requisitos cambiarán durante el ciclo de vida del software — e incluso durante el proceso de desarrollo. 
    Es útil estimar la probabilidad de que un requisito cambie. Por ejemplo, en una aplicación bancaria, los requisitos para funciones 
    que calculen y acrediten intereses a las cuentas de los clientes probablemente sean más estables que un requisito para soportar 
    un tipo particular de cuenta libre de impuestos. El primero refleja una característica fundamental del dominio bancario, 
    mientras que el segundo puede volverse obsoleto si cambia la legislación. 
    <em>Marcar los requisitos potencialmente volátiles</em> puede ayudar al ingeniero de software a establecer un diseño más tolerante al cambio.
  </li>
</ul>

<p>
Otras clasificaciones pueden ser apropiadas, dependiendo de las prácticas habituales de la organización y de la propia aplicación.
</p>

<p>
Existe una fuerte superposición entre la clasificación de requisitos y los atributos de los requisitos (ver sección 7.3, Atributos de Requisitos).
</p>



    <h3>4.2. Modelado Conceptual</h3>

<p>
El desarrollo de modelos de un problema del mundo real es fundamental para el análisis de requisitos del software. 
Su propósito es ayudar a comprender la situación en la que ocurre el problema, así como representar una posible solución. 
Por ello, los modelos conceptuales están compuestos por representaciones de entidades del dominio del problema, 
configuradas para reflejar sus relaciones y dependencias reales. Este tema está estrechamente relacionado con el área de conocimiento 
Modelos y Métodos de Ingeniería de Software.
</p>

<p>
Se pueden desarrollar diversos tipos de modelos, incluyendo diagramas de casos de uso, modelos de flujo de datos, modelos de estados, 
modelos basados en objetivos, interacciones con el usuario, modelos de objetos, modelos de datos, entre otros. 
Muchas de estas notaciones de modelado forman parte del Lenguaje Unificado de Modelado (UML). 
Por ejemplo, los diagramas de casos de uso se utilizan habitualmente para representar escenarios donde se establece un límite 
entre los actores (usuarios o sistemas del entorno externo) y el comportamiento interno del sistema, 
donde cada caso de uso representa una funcionalidad.
</p>

<p>
Los factores que influyen en la elección de una notación de modelado incluyen los siguientes:
</p>

<ul>
  <li>
    <strong>La naturaleza del problema:</strong> Algunos tipos de software requieren que ciertos aspectos sean analizados con mayor rigor. 
    Por ejemplo, los modelos de estado y los modelos paramétricos, que forman parte de SysML [4], son especialmente importantes 
    en el software en tiempo real, mientras que los modelos de objetos y de actividades suelen ser más apropiados para sistemas de información.
  </li>
  
  <li>
    <strong>La experiencia del ingeniero de software:</strong> A menudo resulta más productivo adoptar una notación o método de modelado 
    con el que el ingeniero de software ya tenga experiencia.
  </li>
  
  <li>
    <strong>Los requisitos del proceso establecidos por el cliente:</strong> (ver sección 1.2, Requisitos del Producto y del Proceso). 
    El cliente puede imponer el uso de cierta notación o método preferido, o incluso prohibir el uso de aquellos con los que no esté familiarizado. 
    Este factor puede entrar en conflicto con el anterior.
  </li>
</ul>

<p>
Cabe señalar que, en casi todos los casos, es útil comenzar construyendo un modelo del <strong>contexto del software</strong>. 
Este modelo establece la conexión entre el software previsto y su entorno externo.
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
