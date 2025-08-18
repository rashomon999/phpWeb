 
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
    height: 250vh;
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

    <img src="../../../../img/guia_48.png" alt=""  >
      
    <h3>1.4. Requisitos Funcionales [1*, c1p9] [2*, s4.1.1]</h3>
    <p>Los requerimientos funcionales especifican comportamientos observables que el software debe proporcionar:
     políticas que deben ser aplicadas y procesos que deben llevarse a cabo. Ejemplos de políticas en un 
     software bancario podrían ser: “una cuenta siempre debe tener al menos un cliente como su propietario”, 
     y “el saldo de una cuenta nunca debe ser negativo”.</p>
    
     <p>Ejemplos de procesos podrían especificar el significado de depositar dinero en una cuenta, retirar dinero 
    de una cuenta y transferir dinero de una cuenta a otra.</p>

    <p>Incluso el software altamente técnico (no orientado a negocios), como el que implementa el protocolo de 
    comunicaciones de red TCP/IP, tiene políticas y procesos: “un Puerto podrá existir con cero, una o muchas 
    Conexiones asociadas, pero una Conexión existirá exactamente en un Puerto asociado”, “los estados aceptables 
    de una Conexión serán ‘escucha’, ‘syn enviado’, ‘establecida’, ‘cerrando’,...”, y “si el tiempo de vida de
    un Segmento llega a cero, ese Segmento debe ser eliminado”. (Ver [5, c1] [6, c10] [9, c4].)</p>

    <h3>1.5. Requisitos No Funcionales [1*, c1pp10-11] [2*, s4.1.2]</h3>
    
    <p>Los requerimientos no funcionales de alguna manera restringen las tecnologías que deben usarse en la 
    implementación: ¿Qué plataforma(s) de computación? ¿Qué motor(es) de base de datos? ¿Qué tan precisos 
    deben ser los resultados? ¿Con qué rapidez deben presentarse los resultados? ¿Cuántos registros de un 
    cierto tipo deben almacenarse?</p>

    <p>Algunos requerimientos no funcionales pueden relacionarse con la operación del software. (Ver el área 
    de conocimiento de Operación y Mantenimiento). (Ver también [5, c1] [6, c11] [9, c4].)</p>
    
    <p>Los requerimientos no funcionales pueden dividirse además en restricciones tecnológicas y restricciones 
    de calidad de servicio. Tienen relaciones esenciales entre sí que los afectan positiva o negativamente,
     y requieren que, siempre que se modifique un requerimientos no funcional, se considere el impacto que puede 
     causar sobre los demás.</p>

    <h3>1.6. Restricciones Tecnológicas</h3>
    <p>Estos requerimientos obligan —o prohíben— el uso de tecnologías de automatización específicas y nombradas o 
    infraestructuras definidas. Ejemplos son los requerimientos para usar plataformas de computación específicas 
    (por ejemplo, Windows™, MacOS™, Android OS™, iOS™), lenguajes de programación (por ejemplo, Java, C++, C#, Python),
    compatibilidad con navegadores web específicos (por ejemplo, Chrome™, Safari™, Edge™), motores de base de datos
    determinados (por ejemplo, Oracle™, SQL Server™, MySQL™), y tecnologías generales (por ejemplo, computadoras de
    conjunto reducido de instrucciones —RISC—, bases de datos relacionales).</p>
    
    <p>Un requerimientos que prohíba el uso de punteros sería otro ejemplo. (Ver también [9, c4].)</p>

    <h3>1.7. Restricciones de Calidad de Servicio</h3>
    <p>Estos requerimientos no restringen el uso de tecnologías específicas o nombradas. En su lugar, especifican los 
    niveles aceptables de desempeño que debe mostrar una solución automatizada. Ejemplos son el tiempo de respuesta, 
    el rendimiento (throughput), la precisión, la confiabilidad y la escalabilidad.</p>
    <p>La norma ISO/IEC 25010: “Ingeniería de sistemas y software – Requisitos de calidad y evaluación de sistemas y 
    software (SQuaRE) – Modelos de calidad de sistemas y software” [27] contiene una gran lista de los tipos de 
    características de calidad que pueden ser relevantes para el software. (Ver también [9, c4].)</p>
    <p>La seguridad y la protección también son un tema particularmente importante donde los requerimientos tienden a 
    ser pasados por alto. (Ver el área de conocimiento de Seguridad para obtener detalles sobre los tipos de 
    requerimientos de seguridad específicos que deben considerarse). (Ver también [2*, c13].)</p>


    </form>
</div>




<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
   
    <h3>1.8. ¿Por Qué Categorizar los Requisitos de Esta Manera?</h3>
    
    <p>Categorizar los requerimientos de esta manera es útil por las siguientes razones:</p><ul>
    <li>los requerimientos en una categoría tienden a provenir de fuentes diferentes a las de otras categorías;</li>
    <li>las técnicas de elicitación a menudo varían según la fuente;</li>
    <li>las técnicas de análisis varían según la categoría;</li>
    <li>las técnicas de especificación varían según la categoría;</li>
    <li>las autoridades de validación varían según la categoría;</li>
    <li>las diferentes categorías afectan al software resultante de distintas maneras.</li>
    </ul>

    <p>Además, organizar los requerimientos en estas categorías es beneficioso por las siguientes razones:</p>
    <ul>
    <li>la complejidad puede gestionarse mejor porque diferentes áreas pueden abordarse por separado; los 
    ingenieros de software pueden tratar con la complejidad de las políticas y procesos sin preocuparse al mismo 
    tiempo por cuestiones de tecnología de automatización (y viceversa). Un gran problema se convierte en dos más 
    pequeños. Esto es una gestión clásica de la complejidad mediante divide y vencerás;</li>
    <li>se pueden aislar áreas de experiencia distintas; las partes interesadas, no los ingenieros de software, son 
    los expertos en las políticas y procesos que se van a automatizar. Los ingenieros de software, no las partes
     interesadas, son los expertos en tecnología. Cuando a un experto del negocio se le presentan requerimientos 
     funcionales y no funcionales mezclados para su revisión o validación, puede rendirse porque no entiende —o 
     incluso no le interesan— los temas tecnológicos. El revisor de requerimientos relevante puede centrarse solo en 
     el subconjunto de requerimientos que le corresponde.</li>
    </ul>

    <p>El Filtro de Tecnología Perfecta, descrito originalmente en [18, c1-4] pero también explicado en [8] y [9, c4], 
    ayuda a separar los requerimientos funcionales de los no funcionales. En pocas palabras, los requerimientos 
    funcionales son aquellos que todavía necesitarían declararse incluso si existiera una computadora con velocidad 
    infinita, memoria ilimitada, costo cero, sin fallos, etc., sobre la cual construir el software. Todos los demás
     requerimientos del producto de software son restricciones sobre tecnologías de automatización y, por lo tanto, 
     son no funcionales.</p>

    <p>Los sistemas grandes a menudo abarcan más de un área temática o dominio. Como se explica en [9, c6], el diseño 
    recursivo muestra cómo los requerimientos no funcionales en un dominio padre pueden convertirse o inducir requerimientos
    funcionales en un dominio hijo. Por ejemplo, un requerimientos no funcional sobre la seguridad del usuario en un 
    dominio bancario padre puede convertirse o inducir requerimientos funcionales en un dominio hijo de seguridad.
    De manera similar, los requerimientos no funcionales transversales sobre auditoría y gestión de transacciones 
    en un dominio bancario padre pueden convertirse o inducir requerimientos funcionales en un dominio hijo de auditoría
    y un dominio hijo de transacciones. Descomponer sistemas grandes en un conjunto de dominios relacionados reduce 
    significativamente la complejidad.</p>

    <h3>1.9. Requisitos del Sistema y Requisitos del Software</h3>
    <p>El Consejo Internacional de Ingeniería de Sistemas (INCOSE) define un sistema como “una combinación interactiva de 
    elementos para lograr un objetivo definido. Estos incluyen hardware, software, firmware, personas, información, 
    técnicas, instalaciones, servicios y otros elementos de soporte” [24].</p>

    <p>En algunos casos, es útil o obligatorio distinguir entre requerimientos del sistema y requerimientos del software. 
    Los requerimientos del sistema se aplican a sistemas más grandes —por ejemplo, un vehículo autónomo. Los requerimientos 
    del software se aplican solo a un elemento de software dentro de ese sistema más grande. Algunos requerimientos del 
    software pueden derivarse de los requerimientos del sistema. (Ver también [5, c1].)</p>

    <p>En otros casos, el software es en sí mismo el sistema de interés, y el hardware y el sistema de 
    soporte se consideran la plataforma o infraestructura, de modo que los requerimientos del sistema son en su 
    mayoría requerimientos del software.</p>

    <img src="../../../../img/guia_50.png" alt=""  > 
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
