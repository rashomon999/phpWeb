 
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
    height: 280vh;
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

    <h3>1.10. Requisitos Derivados</h3>
    <p>En la práctica, los requisitos pueden ser sensibles al contexto y depender de la perspectiva. Un actor externo 
    puede imponer un requisito de alcance, y este sería un requisito para todo el proyecto, incluso si ese 
    proyecto involucra a cientos de ingenieros de software. La decisión de un arquitecto de usar un estilo de 
    arquitectura de tuberías y filtros no sería un requisito desde la perspectiva de los actores generales del 
    proyecto, sino una decisión de diseño. Pero esa misma decisión, vista desde la perspectiva de un subequipo 
    responsable de construir un filtro en particular, se consideraría un requisito.</p>

    <p>La industria aeroespacial ha usado durante mucho tiempo el término requisito derivado para referirse a un 
    requisito que no fue planteado por un actor externo al proyecto general, sino que fue impuesto dentro del 
    equipo de desarrollo más grande. La decisión del arquitecto sobre tuberías y filtros encaja con esta 
    definición. Esa elección sería vista como una decisión de diseño desde el punto de vista de los actores externos, 
    pero como un requisito para los subequipos responsables de desarrollar cada filtro. (Ver también [9, c4].)</p>

    <h3>1.11. Actividades de Requisitos de Software [1*, c1pp15-18] [2*, s4.2]</h3>
    <p>La Figura 1.3 muestra las actividades de desarrollo y gestión de requisitos. El desarrollo de requisitos, en 
    su conjunto, puede entenderse como “llegar a un acuerdo sobre qué software se va a construir”. En cambio, la 
    gestión de requisitos puede considerarse como “mantener ese acuerdo a lo largo del tiempo”. Cada actividad se 
    presenta en esta área de conocimiento. Las actividades de desarrollo de requisitos se presentan como temas separados, 
    mientras que la gestión de requisitos se presenta como un solo tema. (Ver también [5, c1] [6, 2].)</p>

    <h2>2. Elicitación de Requisitos [1*, c6-7] [2*, s4.3]</h2>
    <p>El objetivo de la elicitación de requisitos es hacer emerger los requisitos candidatos. También se la denomina 
    captura de requisitos, descubrimiento de requisitos o adquisición de requisitos. Como se indicó anteriormente, 
    uno de los problemas en el trabajo de requisitos en proyectos de software del mundo real es la incompletitud. 
    Esto puede ser el resultado de una elicitación inadecuada. Aunque no hay garantía de que un conjunto de requisitos 
    sea completo, una elicitación bien ejecutada ayuda a minimizar la incompletitud. (Ver también [5, c2-3] [6, c3-7].)</p>

    <h3>2.1. Fuentes de Requisitos [1*, c6] [2*, s4.3]</h3>
    <p>Los requisitos provienen —pueden ser elicitados— de muchas fuentes diferentes. Todas las fuentes 
    potenciales de requisitos deben ser identificadas y evaluadas. Un actor puede definirse como cualquier 
    persona, grupo u organización que:</p>
    <ul>
    <li>esté activamente involucrado en el proyecto;</li>
    <li>se vea afectado por el resultado del proyecto;</li>
    <li>pueda influir en el resultado del proyecto.</li>
    </ul>

    <p>Los actores típicos en proyectos de software incluyen, pero no se limitan a los siguientes:</p>
    <ul>
    <li>clientes — aquellos que pagan por la construcción del software (por ejemplo, la gerencia de la organización);</li>
    <li>compradores — aquellos que deciden si un producto de software será puesto en servicio;</li>
    <li>usuarios — aquellos que interactúan directa o indirectamente con el software; los usuarios a menudo pueden 
    subdividirse en clases de usuarios distintas que varían en frecuencia de uso, tareas realizadas, nivel de 
    habilidad y conocimiento, nivel de privilegio, etc.;</li>
    <li>expertos en la materia (SMEs);</li>
    <li>personal de operaciones;</li>
    <li>personal de soporte de producto de primer nivel;</li>
    <li>organismos profesionales relevantes;</li>
    <li>organismos reguladores;</li>
    <li>grupos de interés especial;</li>
    <li>personas que podrían verse negativamente afectadas si el proyecto tiene éxito;</li>
    <li>desarrolladores.</li>
    </ul>

    <p>Las clases de actores son grupos de actores que tienen perspectivas y necesidades similares. Trabajar 
    en un proyecto de software en términos de clases de actores en lugar de con actores individuales puede aportar 
    información adicional importante.</p>

    <p>Muchos proyectos se benefician de realizar un análisis de actores para identificar tantas clases importantes 
    de actores como sea posible. Esto reduce la posibilidad de que los requisitos estén sesgados hacia los actores 
    mejor representados y en detrimento de los menos representados. El análisis de actores también puede informar 
    los procesos de negociación y resolución de conflictos cuando los requisitos de una clase de actores entran en 
    conflicto con los de otra. (Ver también [5, c3] [6, c3].)</p>

    <p>Los requisitos no se limitan a provenir solo de personas. Otras fuentes de requisitos no humanas pueden incluir:</p>
    <ul>
    <li>documentación como requisitos de versiones anteriores, declaraciones de misión, conceptos de operación;</li>
    <li>otros sistemas;</li>
    <li>contexto empresarial más amplio, incluyendo políticas y procesos organizacionales;</li>
    <li>entorno computacional.</li>
    </ul>

    </form>
</div>




<div class="seccion derecha">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
   
    <h3>2.2. Técnicas Comunes de Elicitación de Requisitos [1*, c7] [2*, s4.3]</h3>
    <p>Existe una amplia variedad de técnicas que pueden usarse para elicitación de requisitos de los actores. 
    Algunas técnicas funcionan mejor con ciertas clases de actores que con otras. Las técnicas comunes de 
    elicitación con actores incluyen las siguientes:</p>
    
    <ul>
    <li>entrevistas;</li>
    <li>reuniones, posiblemente incluyendo lluvias de ideas (brainstorming);</li>
    <li>desarrollo conjunto de aplicaciones (JAD), planificación conjunta de requisitos (JRP) y otros talleres facilitados;</li>
    <li>análisis de protocolos;</li>
    <li>grupos focales (focus groups);</li>
    <li>cuestionarios y encuestas de mercado;</li>
    <li>prototipado exploratorio, incluyendo prototipos de interfaz de usuario de baja y alta fidelidad;</li>
    <li>mapeo de historias de usuario (user story mapping).</li>
    </ul>

    <p>La elicitación puede ser difícil, y el ingeniero de software debe saber que, por ejemplo, los usuarios 
    pueden tener dificultades para describir sus tareas, omitir información importante o no estar dispuestos o 
    ser incapaces de cooperar. La elicitación no es una actividad pasiva. Incluso si se dispone de actores 
    cooperativos y elocuentes, el ingeniero de software debe trabajar arduamente para obtener la información 
    correcta. Muchos requisitos de producto son tácitos o solo pueden encontrarse en información aún no 
    recopilada.</p>

    <p>Los requisitos también pueden ser elicitados desde fuentes distintas a los actores. Estas fuentes 
    y técnicas incluyen:</p>

    <ul>
    <li>versiones anteriores del sistema;</li>
    <li>base de datos de seguimiento de defectos de versiones anteriores del sistema;</li>
    <li>otros sistemas que se interconectan con el sistema en desarrollo;</li>
    <li>evaluación comparativa con la competencia (benchmarking);</li>
    <li>búsqueda en la literatura;</li>
    <li>House of Quality del despliegue de la función calidad (QFD);</li>
    <li>observación, donde el ingeniero de software estudia el trabajo y el entorno en que se realiza;</li>
    <li>aprendizaje mediante práctica (apprenticing), donde el ingeniero de software aprende realizando el trabajo;</li>
    <li>descripciones de escenarios de uso;</li>
    <li>descomposición (por ejemplo, de capacidades en épicas, en características, en historias);</li>
    <li>análisis de tareas;</li>
    <li>pensamiento de diseño (empatizar, definir, idear, prototipar, probar);</li>
    <li>ISO/IEC 25010: “Ingeniería de sistemas y software – Requisitos de calidad y evaluación (SQuaRE) – Modelos de 
    calidad del sistema y del software”;</li>
    <li>requisitos de seguridad, como se discute en el área de conocimiento de Seguridad;</li>
    <li>normas y regulaciones aplicables.</li>
    </ul>

    <p>(Ver también [5, c3] [6, c4-7].)</p>


    <h3>3. Análisis de Requisitos [1*, c8-9]</h3>
    <p>Es poco probable que los requisitos se obtengan en su forma final. Normalmente se necesita una 
    investigación adicional para revelar los requisitos verdaderos y completos sugeridos por la información 
    originalmente elicitada. El análisis de requisitos ayuda a los desarrolladores de software a comprender 
    el significado y las implicaciones de los requisitos candidatos, tanto individualmente como en el contexto 
    del conjunto completo de requisitos.</p>

    <h4>3.1. Análisis Básico de Requisitos [1*, c8-9]</h4>
    <p>La siguiente lista de propiedades deseables de los requisitos puede guiar el análisis básico. El ingeniero 
    de software busca establecer cualquiera de estas propiedades que aún no se cumplan. Cada requisito debe:</p>
    <ul>
    <li>ser inequívoco (interpretado de una sola manera);</li>
    <li>ser comprobable (cuantificado), es decir, que se pueda demostrar claramente el cumplimiento o 
    incumplimiento;</li>
    <li>ser vinculante, lo que significa que los clientes estén dispuestos a pagar por él y no dispuestos a 
    prescindir de él;</li>
    <li>ser atómico, es decir, representar una sola decisión;</li>
    <li>representar necesidades reales y verdaderas de los interesados (stakeholders);</li>
    <li>usar el vocabulario de los interesados;</li>
    <li>ser aceptable para todos los interesados.</li>
    </ul>

    <p>El conjunto completo de requisitos debe ser:</p>
    <ul>
    <li>completo — Los requisitos abordan adecuadamente las condiciones límite, las condiciones excepcionales y las 
    necesidades de seguridad;</li>
    <li>conciso — No contiene contenido innecesario;</li>
    <li>internamente consistente — Ningún requisito entra en conflicto con otro;</li>
    <li>externamente consistente — Ningún requisito entra en conflicto con el material fuente;</li>
    <li>factible — Es posible crear una solución viable y rentable dentro de las restricciones de costo, cronograma, 
    personal, entre otras.</li>
    </ul>

    <p>En algunos casos, una declaración elicitada representa una solución a implementar en lugar del verdadero 
    problema a resolver. Esto conlleva el riesgo de implementar una solución subóptima. La técnica de 
    los “5 porqués” (por ejemplo, [3*, c4]) consiste en preguntar repetidamente: “¿Por qué este es el requisito?” 
    para converger hacia el verdadero problema. La repetición se detiene cuando la respuesta es: “Si eso no se hace, 
    entonces el problema del interesado no se resuelve”. A menudo se llega al verdadero problema en dos o tres ciclos, 
    pero la técnica se llama “5 porqués” para incentivar a los ingenieros a profundizar lo más posible.</p>

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
