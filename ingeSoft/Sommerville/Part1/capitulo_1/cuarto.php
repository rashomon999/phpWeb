 
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
    height: 320vh;
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
     
}

 
</script>
    
</head>
<body> 
<div class="seccion izquierda">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>Sociedades e instituciones profesionales</h2>

<p>
Las sociedades e instituciones profesionales tienen un papel importante en el establecimiento de
normas éticas. Organizaciones como la <strong>ACM (Association for Computing Machinery.)</strong>, el <strong>IEEE</strong> (Institute of Electrical
and Electronic Engineers) y la <strong>British Computer Society</strong> publican códigos de conducta profesional o códigos de ética. Los miembros de estas organizaciones se comprometen a seguir dichos códigos cuando se afilian. Estos códigos de conducta suelen abordar el comportamiento ético fundamental.
</p>

<p>
Asociaciones profesionales, en particular la ACM y el IEEE, han cooperado para producir un <strong>código conjunto de ética y práctica profesional</strong>. Este código existe en una forma corta, mostrada en la Figura 1.3, y en una versión más extensa (Gotterbarn et al., 1999) que añade detalles y contenido a la versión resumida. La justificación detrás de este código se resume en los dos primeros párrafos de la versión extendida:
</p>

<blockquote>
<p>
Las computadoras tienen un papel central y creciente en el comercio, la industria, el gobierno, la medicina, la educación, el entretenimiento y la sociedad en general. Los ingenieros de software son aquellos que contribuyen, ya sea participando directamente o enseñando, al análisis, especificación, diseño, desarrollo, certificación, mantenimiento y prueba de sistemas de software.
</p>
<p>
Debido a sus funciones en el desarrollo de sistemas de software, los ingenieros de software tienen oportunidades significativas para hacer el bien o causar daño, para permitir que otros hagan el bien o causen daño, o para influir en otros para hacer el bien o causar daño. Para garantizar, en la medida de lo posible, que sus esfuerzos se utilicen para el bien, los ingenieros de software deben comprometerse a hacer de la ingeniería de software una profesión beneficiosa y respetada. De acuerdo con ese compromiso, los ingenieros de software deberán adherirse al siguiente Código de Ética y Práctica Profesional.
</p>
</blockquote>

<p>
El código contiene <strong>ocho principios</strong> relacionados con el comportamiento y las decisiones que toman los ingenieros de software profesionales, incluidos practicantes, educadores, gerentes, supervisores y responsables de políticas, así como aprendices y estudiantes de la profesión. Los principios identifican las relaciones éticamente responsables en las que participan individuos, grupos y organizaciones, y las obligaciones principales dentro de estas relaciones.
</p>

<p>
Las cláusulas de cada principio son ilustraciones de algunas de las obligaciones incluidas en estas relaciones. Estas obligaciones se fundamentan en la humanidad del ingeniero de software, en el cuidado especial debido a las personas afectadas por el trabajo de los ingenieros de software, y en los elementos únicos de la práctica de la ingeniería de software. El código prescribe estas obligaciones para cualquier persona que afirme ser o aspire a ser ingeniero de software.
</p>

<h3>Dilemas éticos</h3>

<p>
En cualquier situación donde diferentes personas tienen diferentes opiniones y objetivos, es probable que te enfrentes a dilemas éticos. Por ejemplo, si no estás de acuerdo, en principio, con las políticas de la alta gerencia de tu empresa, ¿cómo deberías reaccionar? Claramente, esto depende de las personas involucradas y de la naturaleza del desacuerdo. ¿Es mejor defender tu posición desde dentro de la organización o renunciar por principios? Si sientes que hay problemas con un proyecto de software, ¿cuándo deberías informar a la gerencia? Si lo haces cuando apenas son sospechas, podrías estar sobreactuando; si esperas demasiado, puede que ya no sea posible resolver las dificultades.
</p>

<p>
Tales dilemas éticos nos enfrentan a todos en nuestra vida profesional y, afortunadamente, en la mayoría de los casos son relativamente menores o pueden resolverse sin demasiada dificultad. Donde no se puedan resolver, el ingeniero enfrenta, quizás, otro problema. La acción basada en principios podría ser renunciar a su trabajo, pero esto podría afectar a otras personas, como su pareja o sus hijos.
</p>

<p>
Una situación particularmente difícil para los ingenieros profesionales surge cuando su empleador actúa de manera poco ética. Supongamos que una empresa es responsable de desarrollar un sistema crítico para la seguridad y, debido a la presión del tiempo, falsifica los registros de validación de seguridad. ¿Es responsabilidad del ingeniero mantener la confidencialidad o alertar al cliente o hacer público, de alguna manera, que el sistema entregado puede ser inseguro?
</p>

<p>
El problema aquí es que no hay absolutos cuando se trata de seguridad. Aunque el sistema no haya sido validado según los criterios predefinidos, estos criterios podrían ser demasiado estrictos. El sistema podría operar de manera segura durante toda su vida útil. También puede suceder que, incluso si el sistema ha sido validado adecuadamente, falle y cause un accidente. Revelar los problemas demasiado pronto puede causar daño al empleador y a otros empleados; no revelar los problemas puede causar daño a otros.
</p>


    <p>
Debes tomar tus propias decisiones en estos asuntos. La postura ética apropiada depende completamente de las opiniones de las personas involucradas. En este caso, el potencial de daño, la magnitud del daño y las personas afectadas por el mismo deben influir en la decisión. Si la situación es muy peligrosa, puede estar justificado hacerla pública a través de la prensa nacional, por ejemplo. Sin embargo, siempre debes intentar resolver la situación respetando los derechos de tu empleador.
</p>

<p>
Otro tema ético es la participación en el desarrollo de sistemas militares y nucleares. Algunas personas tienen fuertes convicciones sobre estos temas y no desean participar en ningún tipo de desarrollo relacionado con sistemas militares. Otros están dispuestos a trabajar en sistemas militares pero no en sistemas de armamento. Otros más consideran que la seguridad nacional es un principio superior y no tienen objeciones éticas a trabajar en sistemas de armas.
</p>

<p>
En este tipo de situaciones, es importante que tanto empleadores como empleados comuniquen sus puntos de vista por adelantado. Cuando una organización está involucrada en trabajos militares o nucleares, debería poder especificar que los empleados deben estar dispuestos a aceptar cualquier asignación de trabajo. De igual manera, si un empleado es contratado y deja en claro que no desea trabajar en tales sistemas, los empleadores no deberían presionarlo para que lo haga en el futuro.
</p>

<p>
El área general de la ética y la responsabilidad profesional está cobrando cada vez más importancia a medida que los sistemas intensivos en software penetran en todos los aspectos del trabajo y la vida cotidiana. Puede considerarse desde un punto de vista filosófico, donde se examinan los principios básicos de la ética y se discute la ética de la ingeniería de software con referencia a estos principios. Este es el enfoque adoptado por Laudon (1995) y, en menor medida, por Huff y Martin (1995). El texto de Johnson sobre ética informática (2001) también aborda el tema desde una perspectiva filosófica.
</p>

<p>
Sin embargo, considero que este enfoque filosófico es demasiado abstracto y difícil de relacionar con la experiencia cotidiana. Prefiero un enfoque más concreto, representado en los códigos de conducta y práctica. Creo que la ética debe discutirse en el contexto de la ingeniería de software y no como una materia independiente. Por lo tanto, en este libro no incluyo discusiones éticas abstractas, sino que, cuando es apropiado, presento ejemplos en los ejercicios que pueden servir como punto de partida para una discusión grupal sobre cuestiones éticas.
</p>



    </form>
</div>




<div class="seccion derecha">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h3>1.3 Estudios de caso</h3>

<p>
Para ilustrar los conceptos de la ingeniería de software, utilizo ejemplos de tres tipos diferentes de sistemas a lo largo del libro. La razón por la cual no he usado un solo estudio de caso es que uno de los mensajes clave en este libro es que la práctica de la ingeniería de software depende del tipo de sistema que se está desarrollando. Por ello, elijo un ejemplo apropiado al discutir conceptos como seguridad y confiabilidad, modelado de sistemas, reutilización, etc.
</p>

<p>
Los tres tipos de sistemas que utilizo como estudios de caso son:
</p>

<ol>
  <li>
    <strong>Un sistema embebido:</strong> es un sistema donde el software controla un dispositivo de hardware y está embebido en dicho dispositivo. Los problemas en los sistemas embebidos normalmente incluyen tamaño físico, capacidad de respuesta, gestión de energía, etc. El ejemplo de sistema embebido que utilizo es un sistema de software para controlar un dispositivo médico.
  </li>
  <li>
    <strong>Un sistema de información:</strong> es un sistema cuyo propósito principal es gestionar y proporcionar acceso a una base de datos de información. Los problemas en sistemas de información incluyen seguridad, usabilidad, privacidad y mantenimiento de la integridad de los datos. El ejemplo que uso es un sistema de registros médicos.
  </li>
  <li>
    <strong>Un sistema de recolección de datos basado en sensores:</strong> es un sistema cuyo propósito principal es recolectar datos de un conjunto de sensores y procesarlos de alguna manera. Los requisitos clave de estos sistemas son confiabilidad, incluso en condiciones ambientales hostiles, y mantenibilidad. El ejemplo que utilizo es una estación meteorológica en áreas remotas.
  </li>
</ol>

<p>
Presento cada uno de estos sistemas en este capítulo, con más información disponible sobre cada uno en la Web.
</p>

<h4>1.3.1 Un sistema de control de bomba de insulina</h4>

<p>
Una bomba de insulina es un sistema médico que simula la operación del páncreas (un órgano interno). El software que controla este sistema es un sistema embebido que recolecta información de un sensor y controla una bomba que entrega una dosis controlada de insulina al usuario.
</p>

<p>
Personas que padecen de diabetes utilizan el sistema. La diabetes es una condición relativamente común donde el páncreas humano no puede producir cantidades suficientes de una hormona llamada insulina. La insulina metaboliza la glucosa (azúcar) en la sangre. El tratamiento convencional de la diabetes implica inyecciones regulares de insulina genéticamente modificada. Los diabéticos miden sus niveles de azúcar en sangre usando un medidor externo y luego calculan la dosis de insulina que deben inyectarse.
</p>

<p>
El problema con este tratamiento es que el nivel de insulina requerido no solo depende del nivel de glucosa en sangre, sino también del tiempo transcurrido desde la última inyección. Esto puede llevar a niveles muy bajos de glucosa (si hay demasiada insulina) o niveles muy altos de azúcar (si hay muy poca insulina). La glucosa baja en sangre es, a corto plazo, una condición más seria, ya que puede causar mal funcionamiento cerebral temporal y, en última instancia, pérdida del conocimiento y muerte. A largo plazo, sin embargo, niveles altos continuos de glucosa pueden causar daños oculares, renales y cardíacos.
</p>

<p>
Los avances actuales en sensores miniaturizados han hecho posible desarrollar sistemas automatizados de administración de insulina. Estos sistemas monitorean los niveles de azúcar en sangre y entregan una dosis adecuada de insulina cuando es necesario. Ya existen sistemas de este tipo para el tratamiento de pacientes hospitalizados. En el futuro, podría ser posible que muchos diabéticos tengan tales sistemas permanentemente conectados a sus cuerpos.
</p>

<p>
Un sistema de administración de insulina controlado por software podría funcionar utilizando un microsensor embebido en el paciente para medir algún parámetro sanguíneo proporcional al nivel de azúcar. Este parámetro es enviado al controlador de la bomba. El controlador calcula el nivel de azúcar y la cantidad de insulina necesaria. Luego envía señales a una bomba miniaturizada para entregar la insulina mediante una aguja permanentemente conectada.
</p>

    <img src="../../../../img/pump.png" alt="" width="490">

    <h6>Figura 1.5 Modelo de actividad de la bomba de insulina</h6>

<p>
La <strong>Figura 1.4</strong> muestra los componentes de hardware y la organización de la bomba de insulina. Para entender los ejemplos de este libro, solo necesitas saber que el sensor de sangre mide la conductividad eléctrica de la sangre bajo diferentes condiciones y que estos valores pueden relacionarse con el nivel de azúcar en la sangre. 
</p>

<p>
La bomba de insulina administra una unidad de insulina en respuesta a un solo pulso enviado desde el controlador. Por lo tanto, para administrar 10 unidades de insulina, el controlador envía 10 pulsos a la bomba.
</p>

<p>
La <strong>Figura 1.5</strong> es un modelo de actividad en UML que ilustra cómo el software transforma un nivel de azúcar en sangre como entrada en una secuencia de comandos que controlan la bomba de insulina.
</p>

<p>
Claramente, este es un sistema crítico para la seguridad. Si la bomba falla o no opera correctamente, la salud del usuario puede verse afectada o este podría caer en coma debido a niveles muy altos o muy bajos de azúcar en sangre. Por lo tanto, existen dos requisitos esenciales de alto nivel que este sistema debe cumplir:
</p>

<ol>
  <li>El sistema debe estar disponible para administrar insulina cuando sea necesario.</li>
  <li>El sistema debe funcionar de manera confiable y administrar la cantidad correcta de insulina para contrarrestar el nivel actual de azúcar en sangre.</li>
</ol>

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
