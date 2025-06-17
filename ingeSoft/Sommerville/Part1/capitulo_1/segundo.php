 
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
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>1.1.1 Ingeniería de software</h2>

<p>La ingeniería de software es una disciplina de la ingeniería que se ocupa de todos los aspectos de la producción de software, desde las primeras etapas de la especificación del sistema hasta el mantenimiento del sistema una vez que se ha puesto en uso. En esta definición, hay dos frases clave:</p>

<ol>
  <li><strong>Disciplina de la ingeniería:</strong> Los ingenieros hacen que las cosas funcionen. Aplican teorías, métodos y herramientas cuando son apropiados. Sin embargo, los usan de forma selectiva y siempre tratan de descubrir soluciones a los problemas incluso cuando no existen teorías y métodos aplicables. Los ingenieros también reconocen que deben trabajar bajo restricciones organizacionales y financieras, por lo que buscan soluciones dentro de estos límites.</li>

  <li><strong>Todos los aspectos de la producción de software:</strong> La ingeniería de software no solo se ocupa de los procesos técnicos del desarrollo de software. También incluye actividades como la gestión de proyectos de software y el desarrollo de herramientas, métodos y teorías que apoyen la producción de software.</li>
</ol>

<p>La ingeniería consiste en obtener resultados de la calidad requerida dentro del cronograma y presupuesto establecidos. Esto a menudo implica hacer compromisos: los ingenieros no pueden ser perfeccionistas. Sin embargo, las personas que escriben programas para sí mismas pueden dedicar tanto tiempo como deseen al desarrollo del programa.</p>

<p>En general, los ingenieros de software adoptan un enfoque sistemático y organizado en su trabajo, ya que esta suele ser la forma más eficaz de producir software de alta calidad. Sin embargo, la ingeniería consiste en seleccionar el método más adecuado según las circunstancias, por lo que un enfoque más creativo y menos formal del desarrollo puede ser efectivo en algunas situaciones. El desarrollo menos formal es particularmente apropiado para el desarrollo de sistemas basados en la web, que requieren una combinación de habilidades de diseño gráfico y de software.</p>

<h3>Figura 1.2 Atributos esenciales de un buen software</h3>

<table border="1" cellpadding="8" cellspacing="0">
  <thead>
    <tr>
      <th>Característica del producto</th>
      <th>Descripción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mantenibilidad</td>
      <td>El software debe estar escrito de tal manera que pueda evolucionar para satisfacer las necesidades cambiantes de los clientes. Este es un atributo crítico porque el cambio en el software es un requerimiento inevitable en un entorno empresarial cambiante.</td>
    </tr>
    <tr>
      <td>Confiabilidad y seguridad</td>
      <td>La confiabilidad del software incluye una variedad de características como la fiabilidad, la seguridad y la protección. El software confiable no debe causar daños físicos o económicos en caso de fallos del sistema. Los usuarios malintencionados no deben poder acceder ni dañar el sistema.</td>
    </tr>
    <tr>
      <td>Eficiencia</td>
      <td>El software no debe hacer un uso innecesario de los recursos del sistema como la memoria y los ciclos del procesador. La eficiencia incluye, por lo tanto, la capacidad de respuesta, el tiempo de procesamiento, la utilización de memoria, etc.</td>
    </tr>
    <tr>
      <td>Aceptabilidad</td>
      <td>El software debe ser aceptable para el tipo de usuarios para el cual fue diseñado. Esto significa que debe ser comprensible, fácil de usar y compatible con otros sistemas que utilicen los usuarios.</td>
    </tr>
  </tbody>
</table>



    <h2>Importancia de la ingeniería de software</h2>

<p>La ingeniería de software es importante por dos razones:</p>

<ol>
  <li>Cada vez más, tanto los individuos como la sociedad dependen de sistemas de software avanzados. Necesitamos ser capaces de producir sistemas confiables y seguros de forma económica y rápida.</li>
  <li>Generalmente, es más barato, a largo plazo, utilizar métodos y técnicas de ingeniería de software para sistemas de software en lugar de simplemente escribir los programas como si se tratara de un proyecto personal. Para la mayoría de los tipos de sistemas, la mayor parte de los costos corresponde a los costos de cambiar el software después de que se ha puesto en uso.</li>
</ol>

<p>El enfoque sistemático que se utiliza en la ingeniería de software a veces se denomina <strong>proceso de software</strong>. Un proceso de software es una secuencia de actividades que conduce a la producción de un producto de software. Existen cuatro actividades fundamentales que son comunes a todos los procesos de software. Estas actividades son:</p>

<ol>
  <li><strong>Especificación del software</strong>, donde los clientes e ingenieros definen el software que se va a producir y las restricciones sobre su funcionamiento.</li>
  <li><strong>Desarrollo del software</strong>, donde el software se diseña y se programa.</li>
  <li><strong>Validación del software</strong>, donde se verifica que el software cumpla con lo que el cliente requiere.</li>
  <li><strong>Evolución del software</strong>, donde el software se modifica para reflejar los cambios en los requerimientos del cliente y del mercado.</li>
</ol>

<p>Diferentes tipos de sistemas requieren diferentes procesos de desarrollo. Por ejemplo, el software en tiempo real de una aeronave debe estar completamente especificado antes de que comience el desarrollo. En los sistemas de comercio electrónico, la especificación y el programa usualmente se desarrollan de manera conjunta. En consecuencia, estas actividades genéricas pueden organizarse de distintas formas y describirse con diferentes niveles de detalle, dependiendo del tipo de software que se esté desarrollando. Describo los procesos de software con más detalle en el Capítulo 2.</p>

<h3>Relación de la ingeniería de software con otras disciplinas</h3>

<p>La ingeniería de software está relacionada tanto con la informática como con la ingeniería de sistemas:</p>

<ol>
  <li><strong>La informática</strong> se ocupa de las teorías y métodos que subyacen en los sistemas informáticos 
  y de software, mientras que la ingeniería de software se ocupa de los problemas prácticos de producir software. Algunos conocimientos de informática son esenciales para los ingenieros de software, de la misma manera que algunos conocimientos de física son esenciales para los ingenieros eléctricos. Sin embargo, la teoría informática es, a menudo, más aplicable a programas relativamente pequeños. Las teorías elegantes de la informática no siempre se pueden aplicar a problemas grandes y complejos que requieren una solución de software.</li>

  <li><strong>La ingeniería de sistemas</strong> se ocupa de todos los aspectos del desarrollo y evolución de 
  sistemas complejos en los que el software juega un papel importante. Por tanto, la ingeniería de sistemas 
  abarca el desarrollo de hardware, el diseño de políticas y procesos, y el despliegue del sistema, asi como
    la ingeniería de software. Los ingenieros de sistemas participan en la especificación del sistema, la definición de su arquitectura general y luego en la integración de las diferentes partes para crear el sistema final. Están menos involucrados en la ingeniería de los componentes del sistema (hardware, software, etc.).</li>
</ol>

    </form>
</div>




<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 <h2>Retos generales en la ingeniería de software</h2>

<p>Como se discute en la siguiente sección, existen muchos tipos diferentes de software. No hay un método o técnica universal de ingeniería de software que sea aplicable a todos ellos. Sin embargo, hay tres cuestiones generales que afectan a muchos tipos distintos de software:</p>

<ol>
  <li>
    <strong>Heterogeneidad</strong>: Cada vez más, se requiere que los sistemas operen como sistemas distribuidos a través de redes que incluyen diferentes tipos de computadoras y dispositivos móviles. Además de ejecutarse en computadoras de propósito general, el software también puede tener que ejecutarse en teléfonos móviles. A menudo se debe integrar nuevo software con sistemas antiguos (legacy) escritos en diferentes lenguajes de programación. El reto aquí es desarrollar técnicas para construir software confiable que sea lo suficientemente flexible como para adaptarse a esta heterogeneidad.
  </li>
  
  <li>
    <strong>Cambio empresarial y social</strong>: Los negocios y la sociedad están cambiando increíblemente rápido a medida que las economías emergentes se desarrollan y aparecen nuevas tecnologías. Necesitan poder modificar su software existente y desarrollar rápidamente nuevo software. Muchas técnicas tradicionales de ingeniería de software consumen mucho tiempo y la entrega de nuevos sistemas a menudo tarda más de lo planeado. Estas técnicas deben evolucionar para reducir el tiempo requerido para que el software proporcione valor a sus clientes.
  </li>

  <li>
    <strong>Seguridad y confianza</strong>: Dado que el software está entrelazado con todos los aspectos de nuestras vidas, es esencial que podamos confiar en él. Esto es especialmente cierto para los sistemas de software remotos a los que se accede mediante una página web o una interfaz de servicio web. Debemos asegurarnos de que los usuarios malintencionados no puedan atacar nuestro software y que se mantenga la seguridad de la información.
  </li>
</ol>

<p>Por supuesto, estos no son problemas independientes. Por ejemplo, puede ser necesario realizar cambios rápidos a un sistema heredado para proporcionarle una interfaz de servicio web. Para abordar estos desafíos, necesitaremos nuevas herramientas y técnicas, así como formas innovadoras de combinar y utilizar los métodos existentes de ingeniería de software.</p>

    <table border="1" cellpadding="8" cellspacing="0">
  <thead>
    <tr>
      <th>Aspecto</th>
      <th>Ingeniería de Software</th>
      <th>Ingeniería de Sistemas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>Enfoque principal</strong></td>
      <td>Desarrollo de software: diseño, programación, pruebas, mantenimiento</td>
      <td>Diseño e integración de sistemas completos: hardware, software, redes, procesos</td>
    </tr>
    <tr>
      <td><strong>Alcance</strong></td>
      <td>Ciclo de vida del software, desde requisitos hasta evolución</td>
      <td>Ciclo completo del sistema, desde análisis de requisitos hasta implementación y soporte</td>
    </tr>
    <tr>
      <td><strong>Componentes</strong></td>
      <td>Código fuente, documentación técnica, bases de datos</td>
      <td>Hardware, software, redes, sensores, procesos, usuarios</td>
    </tr>
    <tr>
      <td><strong>Tareas típicas</strong></td>
      <td>Especificación de requisitos, diseño de código, pruebas, integración continua</td>
      <td>Diseño de arquitectura del sistema, análisis de interfaces, gestión de configuración, validación de sistemas</td>
    </tr>
    <tr>
      <td><strong>Enfoque de herramientas</strong></td>
      <td>IDEs, control de versiones, frameworks, testing automático</td>
      <td>Modelado de sistemas, SysML, herramientas de integración, gestión de configuración</td>
    </tr>
    <tr>
      <td><strong>Habilidades requeridas</strong></td>
      <td>Programación (Java, Python, C++), diseño de algoritmos, pruebas, metodologías ágiles</td>
      <td>Pensamiento sistémico, conocimiento de hardware/redes, integración, gestión de proyectos</td>
    </tr>
    <tr>
      <td><strong>Nivel de abstracción</strong></td>
      <td>Centrado en software, bajo nivel (módulos, APIs, bases de datos)</td>
      <td>Alto nivel, visión holística del sistema completo</td>
    </tr>
    <tr>
      <td><strong>Responsabilidades</strong></td>
      <td>Codificación, diseño de funcionalidades, testing, corrección de bugs</td>
      <td>Integración de componentes hardware/software, rendimiento, soporte, seguridad</td>
    </tr>
  </tbody>
</table>

<h3>Interacción entre ambos roles</h3>
<ul>
  <li>El <strong>ingeniero de sistemas</strong> define requisitos y arquitectura del sistema completo.</li>
  <li>El <strong>ingeniero de software</strong> se centra en construir el software dentro de esa arquitectura.</li>
  <li>Trabajan juntos: el primero coordina, el segundo ejecuta el desarrollo de software.</li>
</ul>

<h3> En resumen</h3>
<ul>
  <li><strong>Ingeniería de Software</strong> = desarrollo detallado de software de alta calidad.</li>
  <li><strong>Ingeniería de Sistemas</strong> = diseño e integración de sistemas completos incluyendo hardware, software, redes y procesos.</li>
</ul>


    <h2>1.1.2 Diversidad en la ingeniería de software</h2>

<p>La ingeniería de software es un enfoque sistemático para la producción de software que toma en cuenta aspectos prácticos como el costo, el cronograma y la confiabilidad, así como las necesidades de los clientes y productores de software. La forma en que este enfoque sistemático se implementa en la práctica varía enormemente dependiendo de la organización que desarrolla el software, del tipo de software, y de las personas involucradas en el proceso de desarrollo.</p>

<p>No existen métodos y técnicas universales de ingeniería de software que sean adecuados para todos los sistemas y todas las empresas. Más bien, a lo largo de los últimos 50 años ha evolucionado un conjunto diverso de métodos y herramientas de ingeniería de software.</p>

<p>Quizás el factor más significativo para determinar qué métodos y técnicas de ingeniería de software son más importantes es el tipo de aplicación que se está desarrollando. Existen muchos tipos diferentes de aplicaciones, incluyendo:</p>

<ol>
  <li>
    <strong>Aplicaciones independientes (stand-alone)</strong>: Son sistemas de aplicación que se ejecutan en una computadora local, como un PC. Incluyen toda la funcionalidad necesaria y no necesitan estar conectadas a una red. Ejemplos de este tipo de aplicaciones son programas de oficina en un PC, software de CAD, programas de edición de fotos, etc.
  </li>
  <li>
    <strong>Aplicaciones interactivas basadas en transacciones</strong>: Son aplicaciones que se ejecutan en una computadora remota y a las que los usuarios acceden desde sus propios PCs o terminales. Obviamente, esto incluye aplicaciones web como las de comercio electrónico, donde se puede interactuar con un sistema remoto para comprar bienes y servicios. Esta clase de aplicaciones también incluye sistemas empresariales, donde una empresa proporciona acceso a sus sistemas a través de un navegador web o de un programa cliente de propósito específico, así como servicios en la nube como correo electrónico y compartición de fotos. Las aplicaciones interactivas a menudo incorporan una gran base de datos que se accede y actualiza en cada transacción.
  </li>
</ol>

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
