 
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
    height: 375vh;
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
    <h2>4.6. Especificación de Requisitos Incremental y Exhaustiva</h2>
<p>Los proyectos que documentan explícitamente los requisitos adoptan uno de dos enfoques. Uno puede llamarse especificación incremental. En este enfoque, una versión de la especificación de requisitos contiene solo las diferencias — adiciones, modificaciones y eliminaciones — respecto a la versión anterior. Una ventaja de este enfoque es que puede producir un volumen menor de especificaciones escritas.</p>
<p>El otro enfoque puede llamarse especificación exhaustiva. En este enfoque, la especificación de requisitos de cada versión contiene todos los requisitos, no solo los cambios respecto a la versión anterior. Una ventaja de este enfoque es que un lector puede entender todos los requisitos en un solo documento en lugar de tener que hacer seguimiento de adiciones, modificaciones y eliminaciones acumuladas a través de una serie de especificaciones.</p>
<p>Algunas organizaciones combinan estos dos enfoques, produciendo versiones intermedias (por ejemplo, x.1, x.2 y x.3) que se especifican de forma incremental y versiones mayores (por ejemplo, 1.0, 2.0 y 3.0) que se especifican de forma exhaustiva. El lector nunca necesita ir más atrás que las especificaciones de requisitos de la última versión mayor para obtener el conjunto completo de especificaciones.</p>

<h2>5. Validación de Requisitos</h2>
<p>[1*, c17] [2*, s4.5]</p>
<p>La validación de requisitos se refiere a obtener confianza de que los requisitos representan las verdaderas necesidades de las partes interesadas tal como se entienden actualmente (y posiblemente se han documentado). Las preguntas clave incluyen las siguientes:</p>
<ul>
  <li>¿estos representan todos los requisitos relevantes en este momento?</li>
  <li>¿hay requisitos indicados que no representen las necesidades de las partes interesadas?</li>
  <li>¿están estos requisitos adecuadamente expresados?</li>
  <li>¿los requisitos son comprensibles, consistentes y completos?</li>
  <li>¿la documentación de requisitos cumple con los estándares relevantes?</li>
</ul>
<p>Se tienden a usar tres métodos para la validación de requisitos: revisiones de requisitos, simulación y ejecución, y creación de prototipos. (Ver también [5, c5] [6, c17] [9, c12].)</p>

<h3>5.1. Revisiones de Requisitos</h3>
<p>[1*, c17pp332-342] [2*, c4p130]</p>
<p>La forma más común de validar es revisando o inspeccionando un documento de requisitos. Se le pide a uno o más revisores que busquen errores, omisiones, suposiciones inválidas, falta de claridad y desviaciones de prácticas aceptadas. Se prefiere la revisión desde múltiples perspectivas:</p>
<ul>
  <li>clientes, compradores y usuarios verifican que sus deseos y necesidades estén representados completa y correctamente;</li>
  <li>otros ingenieros de software con experiencia en especificación de requisitos verifican que el documento sea claro y cumpla con los estándares aplicables;</li>
  <li>ingenieros de software que realizarán la arquitectura, diseño o construcción del software que satisfaga estos requisitos verifican que el documento sea suficiente para respaldar su trabajo.</li>
</ul>
<p>Proporcionar listas de verificación, criterios de calidad o una “definición de hecho” a los revisores puede guiarlos a enfocarse en aspectos específicos de la especificación de requisitos. (Ver Revisiones y Auditorías en el área de calidad del software.)</p>

 <h3>5.2. Simulación y Ejecución</h3>
<p>Las partes interesadas no técnicas podrían no querer dedicar tiempo a revisar una especificación en detalle. Algunas especificaciones pueden ser sometidas a simulación o ejecución real en lugar de, o además de, la revisión humana. En la medida en que los requisitos estén especificados formalmente (por ejemplo, en una especificación basada en modelos), los ingenieros de software pueden interpretar manualmente esa especificación y “ejecutar” la especificación. Dado un conjunto suficiente de escenarios de demostración, las partes interesadas pueden convencerse de que la especificación define completamente y con precisión sus políticas y procesos. (Ver [9, c12].)</p>

<h3>5.3. Creación de Prototipos</h3>
<p>[1*, c17p342] [2*, c4p130]</p>
<p>Si la especificación de requisitos no está en una forma que permita la simulación o ejecución directa, una alternativa es que un ingeniero de software construya un prototipo que demuestre concretamente alguna dimensión importante de una implementación. Esto demuestra la interpretación de esos requisitos por parte del ingeniero de software. Los prototipos pueden ayudar a exponer las suposiciones de los ingenieros de software y, cuando sea necesario, dar retroalimentación útil sobre por qué están equivocadas. Por ejemplo, el comportamiento dinámico de una interfaz de usuario podría entenderse mejor mediante un prototipo animado que a través de una descripción textual o modelos gráficos. Sin embargo, un peligro de la creación de prototipos es que los problemas cosméticos o de calidad del prototipo pueden distraer la atención de los revisores de la funcionalidad subyacente central. Los prototipos también pueden ser costosos de desarrollar. Sin embargo, si un prototipo ayuda a los ingenieros a evitar el desperdicio causado por tratar de satisfacer requisitos erróneos, su costo puede justificarse más fácilmente.</p>

<h2>6. Actividades de Gestión de Requisitos</h2>
<p>[1*, c27-28] [2*, s4.6]</p>
<p>El desarrollo de requisitos, en su conjunto, puede pensarse como “llegar a un acuerdo sobre qué software se va a construir.” (Ver Figura 1.3.) En contraste, la gestión de requisitos puede pensarse como “mantener ese acuerdo a lo largo del tiempo.” Este tema examina la gestión de requisitos. (Ver también [5, c9].)</p>

<h3>6.1. Depuración de Requisitos</h3>
<p>El objetivo de la depuración de requisitos [22, c14, c32] es encontrar el conjunto más pequeño de requisitos simplemente expresados que satisfagan las necesidades de las partes interesadas. Hacerlo reducirá el tamaño y la complejidad de la solución, minimizando así el esfuerzo, el costo y el cronograma para entregarla. La depuración de requisitos implica eliminar requisitos que:</p>
<ul>
  <li>están fuera del alcance;</li>
  <li>no producirían un retorno adecuado sobre la inversión;</li>
  <li>no son tan importantes.</li>
</ul>
<p>Otra parte importante del proceso es simplificar los requisitos innecesariamente complicados.</p>
<p>En ciclos de vida en cascada y otros basados en planes, la depuración de requisitos puede coordinarse con las revisiones de requisitos para validación; la depuración debe ocurrir justo antes de la revisión de validación. En ciclos de vida ágiles, la depuración ocurre implícitamente en la planificación de iteraciones; solo los requisitos de mayor prioridad se incluyen en una iteración (sprint).</p>

    </form> 
</div>




<div class="seccion derecha">
    <form action="./sexto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>6.2. Control de Cambios de Requisitos</h2>
<p>[1*, c28] [2*, s4.6]<br>
El control de cambios es fundamental para la gestión de requisitos. Este tema está estrechamente vinculado al Área de Conocimiento de Gestión de la Configuración del Software. (Consulta ese capítulo para más información.)<br>
Los proyectos que utilizan ciclos de vida en cascada u otros basados en planes deben tener un proceso explícito de control de cambios de requisitos que incluya:</p>
<ul>
  <li>un medio para solicitar cambios a requisitos previamente acordados;</li>
  <li>una etapa opcional de análisis de impacto para examinar más a fondo los beneficios y costos de un cambio solicitado;</li>
  <li>una persona o grupo responsable que decida aceptar, rechazar o posponer cada cambio solicitado;</li>
  <li>un medio para notificar a todas las partes interesadas afectadas sobre esa decisión;</li>
  <li>un medio para hacer seguimiento de los cambios aceptados hasta su cierre.</li>
</ul>
<p>Todos los interesados deben entender y estar de acuerdo en que aceptar un cambio significa aceptar su impacto en el cronograma, los recursos y/o un cambio proporcional en el alcance en otra parte del proyecto. Idealmente, el cambio en el alcance debería ser cuantificable objetivamente, es decir, en términos de unidades de tamaño funcional.</p>
<p>En contraste, la gestión de cambios de requisitos ocurre de forma implícita en los ciclos de vida ágiles. En estos ciclos de vida, cualquier solicitud de cambio a requisitos previamente acordados se convierte simplemente en otro elemento del backlog del producto. Una solicitud solo se volverá "aceptada" cuando tenga suficiente prioridad como para entrar en una iteración (un sprint). (Ver también [5, c9] [22, c17].)</p>

<h2>6.3. Coincidencia del Alcance</h2>
<p>La coincidencia del alcance [22, c14] implica garantizar que el alcance de los requisitos para arquitectar, diseñar y construir no exceda ninguna restricción de costo, cronograma o personal en el proyecto. Cuando el alcance de los requisitos excede las restricciones de costo, cronograma o personal, entonces ese alcance debe reducirse (presumiblemente eliminando un número suficiente de los requisitos de menor prioridad), debe aumentarse la capacidad (extendiendo el cronograma o aumentando el presupuesto y/o el personal), o debe negociarse alguna combinación adecuada de estos.</p>
<p>Cuando sea posible, la coincidencia del alcance debe ser cuantitativa en lugar de cualitativa, es decir, en términos de unidades de tamaño funcional.</p>
<p>En los ciclos de vida en cascada y otros basados en planes, la coincidencia del alcance puede coordinarse con la validación de requisitos; la coincidencia del alcance debe ocurrir justo antes de la revisión de validación. En los ciclos de vida ágiles, siempre que se realice alguna variante de planificación de sprint basada en velocidad, el único trabajo permitido en un sprint/iteración será el que razonablemente se espera completar durante ese sprint/iteración.</p>

<h2>7. Consideraciones Prácticas</h2>
<h3>7.1. Naturaleza Iterativa del Proceso de Requisitos</h3>
<p>[2*, s4.2]<br>
Los requisitos para software típico no solo tienen gran amplitud; también deben tener profundidad significativa. La tensión creada por requisitos simultáneamente amplios y profundos en proyectos del mundo real a menudo lleva a los equipos a realizar actividades de requisitos de forma iterativa. En algunos momentos, la obtención y análisis favorecen expandir la amplitud del conocimiento de requisitos, mientras que en otros, se requiere expandir la profundidad. En la práctica, es muy poco probable que todo el trabajo de requisitos pueda realizarse en un solo paso a través del tema. (Ver también [6, c2, c9].)</p>

<h3>7.2. Priorización de Requisitos</h3>
<p>[1*, c16]<br>
La priorización de requisitos es útil a lo largo de un proyecto de software porque ayuda a enfocar a los ingenieros de software en entregar la funcionalidad más valiosa lo más pronto posible. También ayuda a respaldar decisiones inteligentes de compensación que implican resolución de conflictos y coincidencia del alcance.</p>
<p>Los requisitos priorizados también ayudan en el mantenimiento más allá del proyecto de desarrollo inicial. Los defectos reportados sobre requisitos de mayor prioridad probablemente deberían ser reparados antes que los reportados sobre requisitos de menor prioridad.</p>
<p>Hay una variedad de esquemas de priorización disponibles. Responder unas pocas preguntas clave puede ayudar a los ingenieros a elegir el mejor enfoque. La primera pregunta es: “¿Qué factores son relevantes para determinar la prioridad de un requisito sobre otro?” Los siguientes factores podrían ser relevantes para un proyecto:</p>
<ul>
  <li>valor; deseabilidad; satisfacción del cliente, usuario y cliente;</li>
  <li>indeseabilidad; insatisfacción del cliente, usuario y cliente (modelo de Kano, a continuación);</li>
  <li>costo de entrega;</li>
  <li>costo de mantenimiento durante la vida útil del software;</li>
  <li>riesgo técnico de implementación;</li>
  <li>riesgo de que los usuarios no lo utilicen incluso si se implementa.</li>
</ul>
<p>El modelo de Kano, que sustenta [6, c17], muestra que considerar solo el valor, deseabilidad o satisfacción puede llevar a prioridades erróneas. Una mejor comprensión de las prioridades proviene de considerar cuán infelices estarían los interesados si ese requisito no se satisface.</p>
<p>Por ejemplo, considera un proyecto para desarrollar un cliente de correo electrónico. Dos requisitos candidatos podrían estar relacionados con:</p>
<ol>
  <li>Tener un filtro de spam efectivo</li>
  <li>Manejar archivos adjuntos en correos electrónicos</li>
</ol>
<p>La priorización debe sopesar tanto la satisfacción que los usuarios experimentarán al tener ciertas funcionalidades como la insatisfacción que experimentarán si carecen de ciertas funcionalidades. Por ejemplo, los usuarios probablemente estarán más felices con un filtro de spam efectivo que con la capacidad de manejar archivos adjuntos, por lo que el filtro de spam recibiría una prioridad más alta según el criterio de satisfacción. Por otro lado, la incapacidad de manejar archivos adjuntos haría que muchos usuarios estén extremadamente infelices, mucho más que no tener un filtro de spam efectivo. Al considerar la felicidad, o satisfacción, por implementar funcionalidades combinada con la infelicidad (o insatisfacción) por no implementar ciertas funcionalidades, los desarrolladores generalmente darían una prioridad más alta al manejo de archivos adjuntos que al filtro de spam efectivo.</p>
<p>La segunda pregunta clave es: “¿Cómo podemos convertir el conjunto de factores relevantes en una expresión de prioridad?” La fórmula
 </p>   

\[ Priority = \frac{(Value * (1-Risk))}{Cost}\]

<p>
es solo un ejemplo de una función objetiva para hacerlo. La elección de esquemas de medición para los factores relevantes 
puede imponer restricciones a la función objetiva. (Ver Teoría de la Medición en Fundamentos de Computación).</p>


<p>Una vez que se ha determinado la prioridad de los requisitos, esas prioridades deben especificarse de una forma que pueda comunicarse a todas las partes interesadas. Existen varias maneras de hacer esto, entre ellas:</p>
<ul>
  <li>escala enumerada (por ejemplo, debe tenerse, debería tenerse, sería bueno tener);</li>
  <li>escala numérica (por ejemplo, 1 . . . 10);</li>
  <li>listas que ordenan los requisitos en orden descendente de prioridad.</li>
</ul>
<p>Una priorización efectiva de requisitos se enfoca en encontrar grupos de requisitos con prioridades similares en lugar de crear escalas de medición excesivamente rigurosas o debatir pequeñas diferencias.</p>

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
