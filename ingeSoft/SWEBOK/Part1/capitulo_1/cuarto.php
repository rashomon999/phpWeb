 
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
    height: 305vh;
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
    <p>Esto es crucial para comprender el contexto del software en su entorno operativo y para identificar 
    sus interfaces con dicho entorno.</p>
    <p>Este subtema no busca “enseñar” un estilo o notación de modelado en particular, sino más bien proporcionar
    orientación sobre el propósito e intención del modelado.</p>

    <h3>4.3. Diseño Arquitectónico y Asignación de Requisitos</h3>

<p>
En algún punto, debe derivarse la arquitectura de la solución. El diseño arquitectónico es el momento en el que el proceso de requisitos 
se superpone con el diseño de software o de sistemas, lo que ilustra cuán imposible es separar limpiamente ambas tareas. 
Este tema está estrechamente relacionado con la sección Estructura y Arquitectura del Software en el área de conocimiento 
Diseño de Software.
</p>

<p>
En muchos casos, el ingeniero de software actúa también como arquitecto, ya que el proceso de análisis y elaboración de los requisitos 
demanda identificar los componentes arquitectónicos o de diseño responsables de satisfacer dichos requisitos. 
Esto se conoce como <strong>asignación de requisitos</strong>, es decir, la asignación a componentes de la arquitectura que serán 
responsables de satisfacer los requisitos.
</p>

<p>
La asignación es importante para permitir un análisis detallado de los requisitos. Por ejemplo, una vez que un conjunto de requisitos 
ha sido asignado a un componente, dichos requisitos pueden analizarse más a fondo para descubrir otros requisitos sobre cómo 
ese componente debe interactuar con otros para satisfacer lo asignado. En proyectos grandes, la asignación estimula una nueva 
ronda de análisis para cada subsistema.
</p>

<p>
Como ejemplo, los requisitos de desempeño de frenado de un automóvil (distancia de frenado, seguridad en condiciones adversas, 
suavidad de aplicación, presión del pedal, etc.) pueden asignarse tanto al hardware de frenado (componentes mecánicos e hidráulicos) 
como al sistema de frenos antibloqueo (ABS). Solo cuando se identifica un requisito para el ABS, y se le asignan requisitos, 
pueden usarse las capacidades del ABS, el hardware de frenos y propiedades emergentes (como el peso del vehículo) 
para determinar los requisitos detallados del software del ABS.
</p>

<p>
El diseño arquitectónico está estrechamente vinculado al <a href="#4.2.-modelado-conceptual">Modelado Conceptual</a>.
</p>

<h3>4.4. Negociación de Requisitos</h3>

<p>
Otro término común para este subtema es <strong>resolución de conflictos</strong>. Trata de resolver problemas con requisitos cuando existen 
conflictos entre dos partes interesadas que requieren funcionalidades mutuamente incompatibles, entre requisitos y recursos, 
o entre requisitos funcionales y no funcionales, por ejemplo.
</p>

<p>
En la mayoría de los casos, no es prudente que el ingeniero de software tome una decisión unilateral, por lo que se vuelve necesario 
consultar con las partes interesadas para alcanzar un consenso sobre un compromiso adecuado. A menudo es importante, por razones 
contractuales, que tales decisiones sean rastreables hasta el cliente. Esta actividad se clasifica dentro del análisis de requisitos 
porque los problemas surgen como resultado del análisis; sin embargo, también se podría argumentar que pertenece a la validación 
de requisitos (ver sección 6, Validación de Requisitos).
</p>

<p>
La <strong>priorización de requisitos</strong> es necesaria no solo como medio para filtrar los requisitos más importantes, 
sino también para resolver conflictos y planificar entregas por etapas. Esto implica tomar decisiones complejas que requieren 
conocimiento detallado del dominio y buenas habilidades de estimación. Sin embargo, con frecuencia es difícil obtener información 
real que sirva como base para tales decisiones. Además, los requisitos suelen depender entre sí y sus prioridades son relativas. 
En la práctica, los ingenieros de software priorizan requisitos continuamente sin conocer aún todos los requisitos.
</p>

<p>
Una forma común de priorización se basa en un <strong>enfoque de costo-valor</strong>, que implica un análisis por parte de los 
interesados para definir, en una escala, los beneficios o el valor agregado que la implementación de un requisito les representa, 
frente a las consecuencias de no implementarlo. También implica un análisis por parte de los ingenieros de software, quienes 
estiman, también en una escala, el costo de implementar cada requisito en relación con los demás.
</p>

<p>
Otro enfoque de priorización, llamado <strong>proceso de jerarquía analítica</strong> (AHP, por sus siglas en inglés), 
consiste en comparar todos los pares únicos de requisitos para determinar cuál tiene mayor prioridad y en qué medida.
</p>


<h3>4.5. Análisis Formal</h3>
<p>El análisis formal no solo concierne al tema 4, sino también a las secciones 5.3 y 6.3. Este tema también está relacionado con Métodos Formales en el Área de Conocimiento de Modelos y Métodos de Ingeniería de Software.</p>
<p>El análisis formal ha tenido impacto en algunos dominios de aplicación, particularmente en aquellos que requieren alta integridad. La expresión formal de los requisitos exige un lenguaje con una semántica formalmente definida. El uso de un análisis formal para expresar requisitos tiene dos beneficios.</p>
<p>Primero, permite que los requisitos expresados en el lenguaje se especifiquen de forma precisa y sin ambigüedades, evitando así (en principio) el riesgo de malas interpretaciones. Segundo, los requisitos pueden ser razonados formalmente, lo cual permite demostrar propiedades deseadas del software especificado.</p>
<p>El razonamiento formal requiere herramientas de apoyo para ser viable en sistemas que no sean triviales, y estas herramientas generalmente se dividen en dos tipos: demostradores de teoremas o verificadores de modelos. En ningún caso la demostración puede ser completamente automatizada, y el nivel de competencia necesario en razonamiento formal para utilizar estas herramientas restringe la aplicación más amplia del análisis formal.</p>
<p>La mayoría del análisis formal se enfoca en etapas relativamente tardías del análisis de requisitos. Por lo general,
     es contraproducente aplicar formalización hasta que los objetivos del negocio y los requisitos de los usuarios 
     se hayan definido claramente mediante métodos como los descritos en otras partes de la sección 4. Sin embargo, 
     una vez que los requisitos se han estabilizado y detallado para especificar propiedades concretas del software,
      puede ser beneficioso formalizar al menos los requisitos críticos. Esto permite una validación estática para 
      verificar que el software especificado por los requisitos realmente posee las propiedades (por ejemplo, ausencia
       de interbloqueos) que el cliente, los usuarios y el ingeniero de software esperan que tenga.</p>

    </form>
</div>




<div class="seccion derecha">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>5. Especificación de Requisitos</h2>
<p>[1*, c4s2, c4s3, c12s2–5] [2*, c10]</p>
<p>En la mayoría de las profesiones de ingeniería, el término “especificación” se refiere a la asignación de valores numéricos o límites a los objetivos de diseño de un producto. En ingeniería de software, la “especificación de requisitos de software” suele referirse a la elaboración de un documento que pueda ser revisado, evaluado y aprobado de manera sistemática. Para sistemas complejos, especialmente aquellos que incluyen componentes no software de forma considerable, pueden producirse hasta tres tipos distintos de documentos: definición del sistema, requisitos del sistema y requisitos del software. Para productos de software simples, solo se requiere el tercero de estos. A continuación, se describen los tres documentos, con el entendimiento de que pueden combinarse según sea necesario. Una descripción de la ingeniería de sistemas se encuentra en el capítulo de Disciplinas Relacionadas de la Ingeniería de Software de esta Guía.</p>

<h3>5.1. Documento de Definición del Sistema</h3>
<p>Este documento (a veces llamado documento de requisitos del usuario o documento de concepto de operaciones) registra los requisitos del sistema. Define los requisitos de alto nivel desde la perspectiva del dominio. Sus lectores incluyen representantes de los usuarios/clientes del sistema (el área de marketing puede desempeñar estos roles para software orientado al mercado), por lo que su contenido debe estar expresado en términos del dominio. El documento lista los requisitos del sistema junto con información de contexto sobre los objetivos generales del sistema, su entorno objetivo, y una declaración de las restricciones, suposiciones y requisitos no funcionales. Puede incluir modelos conceptuales diseñados para ilustrar el contexto del sistema, escenarios de uso y las principales entidades del dominio, así como flujos de trabajo.</p>

<h3>5.2. Especificación de Requisitos del Sistema</h3>
<p>Los desarrolladores de sistemas con componentes tanto software como no software de forma sustancial—como un avión moderno, por ejemplo—suelen separar la descripción de los requisitos del sistema de la descripción de los requisitos del software. En este enfoque, primero se especifican los requisitos del sistema, luego se derivan los requisitos del software a partir de estos, y posteriormente se especifican los requisitos de los componentes de software. Estrictamente hablando, la especificación de requisitos del sistema es una actividad de ingeniería de sistemas y queda fuera del alcance de esta Guía.</p>

    <h3>5.3. Especificación de Requisitos de Software</h3>
<p>La especificación de requisitos de software establece la base del acuerdo entre los clientes y los contratistas o proveedores (en proyectos orientados al mercado, estos roles pueden ser desempeñados por las divisiones de marketing y desarrollo) sobre lo que el producto de software debe hacer y lo que no se espera que haga.</p>

<p>La especificación de requisitos de software permite una evaluación rigurosa de los requisitos antes de que comience el diseño, y reduce la necesidad de rediseño posterior. También debería proporcionar una base realista para estimar costos, riesgos y cronogramas del producto.</p>

<p>Las organizaciones pueden utilizar el documento de especificación de requisitos de software como base para desarrollar planes efectivos de verificación y validación.</p>

<p>La especificación de requisitos de software proporciona una base informada para transferir un producto de software a nuevos usuarios o a nuevas plataformas. Finalmente, puede servir como base para mejoras al software.</p>

<p>Los requisitos de software suelen redactarse en lenguaje natural, pero, en una especificación de requisitos de software, esto puede complementarse con descripciones formales o semiformalizadas. La selección de notaciones apropiadas permite describir ciertos requisitos y aspectos de la arquitectura del software de manera más precisa y concisa que con lenguaje natural. La regla general es utilizar aquellas notaciones que permitan describir los requisitos de la forma más precisa posible. Esto es particularmente crucial en software crítico para la seguridad, regulado, o de alta confiabilidad.</p>

<p>Sin embargo, la elección de notación suele estar limitada por la formación, habilidades y preferencias de los autores y lectores del documento.</p>

<p>Se han desarrollado diversos indicadores de calidad que pueden usarse para relacionar la calidad de la especificación de requisitos de software con otras variables del proyecto como el costo, la aceptación, el rendimiento, el cronograma y la reproducibilidad. Los indicadores de calidad para declaraciones individuales dentro de una especificación incluyen: imperativos, directivas, frases débiles, opciones y continuaciones. Los indicadores para el documento completo de especificación de requisitos de software incluyen tamaño, legibilidad, especificación, profundidad y estructura del texto.</p>

    <hr>
    <strong>parentesis</strong>
    <h6>✅ 1. Indicadores de calidad para declaraciones individuales</h6>
<p>
  Se refieren a frases específicas dentro del documento de requisitos. Evaluar estas frases ayuda a determinar si los requisitos están bien expresados. Aquí algunos ejemplos:
</p>

<ul>
  <li>
    <strong>Imperativos:</strong> Son declaraciones que indican obligaciones claras y firmes.
    <br>
    <em>Ejemplo:</em> "El sistema deberá permitir que el usuario registre su información."
    <br>
    Estas son buenas cuando se usan correctamente porque indican requerimientos obligatorios.
  </li>

  <li>
    <strong>Directivas:</strong> Son instrucciones específicas sobre cómo debe comportarse el sistema o cómo deben implementarse ciertas funciones.
    <br>
    <em>Ejemplo:</em> "Use el protocolo HTTPS para todas las transmisiones de datos."
  </li>

  <li>
    <strong>Frases débiles:</strong> Son formulaciones vagas o ambiguas que no ayudan a entender con claridad lo que se quiere.
    <br>
    <em>Ejemplo:</em> "El sistema debería ser intuitivo."
    <br>
    Estas son problemáticas porque no se pueden verificar ni medir objetivamente.
  </li>

  <li>
    <strong>Opciones:</strong> Indican alternativas o libertad de elección, lo que puede generar ambigüedad si no se aclara.
    <br>
    <em>Ejemplo:</em> "El sistema puede usar compresión de datos."
    <br>
    ¿Debe usarla o no? ¿Cuándo?
  </li>

  <li>
    <strong>Continuaciones:</strong> Son frases que no terminan una idea o que dependen excesivamente de contexto anterior.
    <br>
    <em>Ejemplo:</em> "...como se mencionó previamente."
    <br>
    Esto puede dificultar la comprensión o el rastreo del requisito.
  </li>
</ul>
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
