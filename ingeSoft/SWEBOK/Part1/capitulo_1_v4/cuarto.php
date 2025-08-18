 
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
    height: 310vh;
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
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h4>3.2. Economía de las Restricciones de Calidad de Servicio [3*]</h4>
<p>Las restricciones de calidad de servicio pueden ser especialmente desafiantes. Esto se debe, en general, a que los ingenieros no las consideran desde una perspectiva económica [9, c4]. La Figura 1.4 ilustra la perspectiva económica de una típica restricción de calidad de servicio, como capacidad, rendimiento (throughput) y confiabilidad, donde el valor aumenta con el nivel de rendimiento. Esta curva se refleja verticalmente para restricciones cuya utilidad disminuye a medida que aumenta el rendimiento (como el tiempo de respuesta o el tiempo medio de reparación).</p>

<p>En el rango relevante de niveles de rendimiento, los interesados asignan un valor correspondiente si el sistema alcanza ese nivel. La curva de valor tiene dos puntos importantes:</p>
<ol>
  <li><strong>Punto de perfección:</strong> Es el nivel más favorable de rendimiento, más allá del cual no hay beneficios adicionales. Incluso si el sistema puede rendir mejor que este punto, el cliente no puede aprovechar esa capacidad. Por ejemplo, un sistema de redes sociales que soporte más usuarios que la población mundial tendría esta capacidad excesiva.</li>
  <li><strong>Punto de fallo:</strong> Es el nivel menos favorable de rendimiento, por debajo del cual no hay más reducción en el beneficio. Por ejemplo, el sistema de redes sociales podría necesitar soportar al menos una cuota mínima de mercado para ser viable como plataforma.</li>
</ol>

<p>Un requisito cuantificado, incluso si se expresa explícitamente, suele ser arbitrario. A menudo se basa en lo que el cliente siente que está justificado solicitar, dado lo que paga por el software. Incluso si los ingenieros de software no pueden construir un sistema que cumpla totalmente con el requisito declarado, el software suele tener valor; simplemente tiene menos valor del que el cliente esperaba. Además, la capacidad de superar el punto de requisito puede incrementar significativamente el valor en algunos casos.</p>

<p>El costo para alcanzar un determinado nivel de rendimiento generalmente tiene forma de función escalonada. Primero, para un cierto nivel de inversión, existe un nivel máximo de rendimiento alcanzable. Luego, se requiere una inversión adicional, y esa inversión permite un rendimiento hasta un nuevo máximo más favorable. La Figura 1.5 ilustra el nivel de rendimiento más rentable: aquel con la diferencia positiva máxima entre el valor alcanzado y el costo para lograrlo.</p>

<p>(Consulta el área de conocimiento de Economía de la Ingeniería de Software o [3*] para obtener más información sobre cómo realizar este tipo de análisis económico).</p>

<p>El ingeniero de software debe prestar especial atención a las relaciones positivas y negativas entre las restricciones de calidad de servicio (por ejemplo, Figura 14-1 en [1*, c14]). Algunas restricciones son mutuamente beneficiosas: mejorar el rendimiento de una mejora automáticamente el de otra. Por ejemplo, cuanto más modificable es el código, más confiable tiende a ser, ya que tanto la modificabilidad como la confiabilidad son, en parte, consecuencia de qué tan limpio está el código. Por otro lado, cuanto mayor es la velocidad del código, menos modificable podría ser, porque la alta velocidad a menudo se logra mediante optimizaciones que hacen el código más complejo.</p>

    <img src="../../../../img/guia_51.png" alt=""  >
    <br><br>
    <img src="../../../../img/guia_52.png" alt=""  >


     <h4>3.3. Análisis Formal [2*, s12.3.2-12.3.3]</h4>
<p>El análisis formal ha demostrado beneficios en algunos dominios de aplicación, particularmente en sistemas de alta integridad (por ejemplo, [5, c6]). La expresión formal de los requisitos depende del uso de un lenguaje de especificación con una semántica formalmente definida. La formalidad tiene dos beneficios:</p>
<ul>
  <li>Primero, los requisitos formales son precisos y concisos, lo que (en principio) reduce la posibilidad de malas interpretaciones.</li>
  <li>Segundo, los requisitos formales pueden ser razonados, permitiendo demostrar que el software especificado tiene las propiedades deseadas.</li>
</ul>
<p>Esto permite una validación estática para verificar que el software, tal como está especificado en los requisitos, posea las propiedades (por ejemplo, ausencia de interbloqueo) que el cliente, los usuarios y el ingeniero de software esperan que tenga.</p>
<p>Este tema se relaciona con los Métodos Formales en el área de conocimiento de Modelos y Métodos de Ingeniería de Software.</p>

    </form> 
</div>




<div class="seccion derecha">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">

<h4>3.4. Resolución de Conflictos en Requisitos</h4>
<p>Cuando un proyecto tiene más —y más diversos— interesados, los conflictos entre los requisitos son más probables. Un aspecto particularmente importante del análisis de requisitos es identificar y gestionar dichos conflictos (por ejemplo, [6, c17]). Una vez identificados los requisitos en conflicto, el ingeniero puede considerar dos enfoques principales (y posiblemente otros) para gestionarlos y determinar el curso de acción más apropiado.</p>

<p><strong>Un primer enfoque</strong> es negociar una resolución entre las partes interesadas en conflicto. En la mayoría de los casos, no es prudente que el ingeniero de software tome una decisión unilateral, por lo que se vuelve necesario consultar con las partes interesadas para alcanzar una resolución por consenso. También suele ser importante, por razones contractuales, que tales decisiones puedan rastrearse hasta el cliente. Un ejemplo específico es la gestión del alcance del proyecto, es decir, equilibrar lo que se desea en los requisitos del producto de software con lo que se puede lograr dado el costo, cronograma, personal y otras restricciones a nivel de proyecto. Existen muchas fuentes útiles de información sobre negociación y resolución de conflictos [25].</p>

<p><strong>Otro enfoque</strong> es aplicar el desarrollo de familias de productos (por ejemplo, [20]). Esto implica separar los requisitos en dos categorías:</p>
<ul>
  <li><strong>Requisitos invariantes:</strong> Aquellos en los que todos los interesados están de acuerdo.</li>
  <li><strong>Requisitos variantes:</strong> Aquellos donde existen conflictos.</li>
</ul>
<p>El ingeniero de software puede centrarse en comprender el rango de variaciones necesarias para satisfacer a todos los interesados. El software puede diseñarse usando <em>diseño hacia invariantes</em> para cumplir con los requisitos invariantes y <em>diseño para el cambio</em> para incorporar puntos de personalización que permitan configurar una instancia del sistema adaptada a cada grupo de usuarios. En un ejemplo simple, algunos usuarios de una aplicación del clima requieren que la temperatura se muestre en grados Celsius, mientras que otros la necesitan en grados Fahrenheit.</p>


    <h4>4. Especificación de Requisitos [1*, c10-14, c20-26] [2*, s4.4, c5]</h4>
<p>La especificación de requisitos se ocupa de registrar los requisitos para que puedan ser recordados y comunicados. Esta puede ser el tema más polémico en esta área de conocimiento (KA). El debate gira en torno a preguntas como:</p>
<ul>
  <li>¿Deberían los requisitos documentarse?</li>
  <li>Si se documentan, ¿en qué forma deberían estar?</li>
  <li>Si se documentan, ¿deberían mantenerse actualizados a lo largo del tiempo?</li>
</ul>

<p>No existen respuestas estándar para estas preguntas; cada una depende de factores como:</p>
<ul>
  <li>El grado de familiaridad del ingeniero de software con el dominio del negocio.</li>
  <li>Precedentes para este tipo de software.</li>
  <li>El grado de riesgo (por ejemplo, probabilidad, severidad) de tener requisitos incorrectos.</li>
  <li>Rotación de personal anticipada durante la vida útil del software.</li>
  <li>Distribución geográfica de los miembros del equipo de desarrollo.</li>
  <li>Participación de los interesados a lo largo del proyecto.</li>
  <li>Si se anticipa el uso de servicios de terceros, soluciones empaquetadas o bibliotecas de código abierto.</li>
  <li>Si alguna parte del diseño o construcción será subcontratada.</li>
  <li>El nivel de pruebas basadas en requisitos que se espera realizar.</li>
  <li>El esfuerzo requerido para aplicar una técnica de especificación candidata.</li>
  <li>La precisión necesaria en las estimaciones basadas en requisitos.</li>
  <li>El grado de trazabilidad de requisitos que se necesita, si es que se necesita alguno.</li>
  <li>Imposiciones contractuales sobre el contenido y formato de la especificación de requisitos.</li>
</ul>

<p>Como se indica en la introducción de esta área de conocimiento, el “qué” y el “cómo” del trabajo con requisitos deben determinarse por la naturaleza del software que se construye, no por el ciclo de vida bajo el cual se desarrolla. Los encargados del mantenimiento no deberían poder deducir el ciclo de vida usado solo a partir del formato de los requisitos. El efecto del ciclo de vida elegido debería limitarse a la <em>completitud</em> de los requisitos en cada punto del proyecto.</p>

<p>Por ejemplo:</p>
<ul>
  <li>Bajo un ciclo de vida en cascada (waterfall), se espera que los requisitos estén completamente especificados al final de la fase de requisitos.</li>
  <li>En un ciclo de vida ágil (Agile), se espera que los requisitos cambien, crezcan o incluso se eliminen continuamente, y que no estén completos hasta el final del proyecto.</li>
</ul>

<p>Algunas organizaciones tienen una cultura de documentación de requisitos; otras no. Proyectos emergentes o startups suelen estar impulsados por una visión fuerte del producto y recursos limitados, por lo que sus equipos pueden considerar la documentación de requisitos como una carga innecesaria. Pero a medida que estos productos evolucionan y maduran, los ingenieros de software suelen reconocer la necesidad de recuperar los requisitos que motivaron las características del producto, para evaluar el impacto de los cambios propuestos. Por lo tanto, la documentación de requisitos y la gestión de cambios se vuelven importantes para el éxito a largo plazo.</p>

<p>El enfoque del proyecto respecto a los requisitos en general —y a la especificación de requisitos en particular— puede evolucionar durante la vida útil del software.</p>

<p><strong>Recomendación básica:</strong> basar las decisiones de documentación de requisitos en un análisis de audiencia. ¿Quiénes serán los distintos consumidores de la especificación de requisitos? ¿Qué información necesitarán? ¿Cómo puede esa información ser presentada de forma que cada consumidor la obtenga con el menor esfuerzo?</p>

<p>Existe cierto solapamiento y dependencia entre el análisis de requisitos y la especificación. El uso de ciertas técnicas de especificación —especialmente las basadas en modelos— permite y fomenta un análisis de requisitos más profundo que lo presentado inicialmente.</p>

<p>Los requisitos documentados deben estar sujetos a las mismas prácticas de gestión de la configuración que los demás entregables del ciclo de vida del software. (Ver el área de conocimiento sobre Gestión de la Configuración para una discusión más detallada.) Además, cuando sea práctico, los requisitos individuales también deben estar sujetos a gestión de configuración y trazabilidad, lo cual suele estar soportado por herramientas de gestión de requisitos. (Ver el Tema 8, Herramientas de Requisitos de Software.)</p>

<p>Existen varias categorías generales de técnicas de especificación de requisitos, que se discuten más adelante. La especificación de requisitos para un proyecto puede utilizar múltiples técnicas. El estándar ISO/IEC/IEEE 29148 [26], así como [1*, c10-14], [5, c4], [6, c16] y muchas otras fuentes, ofrecen plantillas para la documentación de requisitos.</p>


 
    </form>
</div>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="quinto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
