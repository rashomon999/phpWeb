 
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
    <ol start="3">
  <li>
    <strong>Sistemas de control embebidos (embedded control systems)</strong>: Son sistemas de software que controlan y gestionan dispositivos de hardware. Numéricamente, probablemente existen más sistemas embebidos que cualquier otro tipo de sistema. Ejemplos incluyen el software en un teléfono móvil, el software que controla el sistema de frenos ABS en un automóvil y el software en un horno microondas para controlar el proceso de cocción.
  </li>
  <li>
    <strong>Sistemas de procesamiento por lotes (batch processing systems)</strong>: Son sistemas empresariales diseñados para procesar datos en grandes lotes. Procesan grandes cantidades de entradas individuales para generar salidas correspondientes. Ejemplos incluyen sistemas de facturación periódica, como los sistemas de facturación telefónica, y sistemas de pago de salarios.
  </li>
  <li>
    <strong>Sistemas de entretenimiento (entertainment systems)</strong>: Son sistemas destinados principalmente al uso personal y cuyo objetivo es entretener al usuario. La mayoría de estos sistemas son algún tipo de juego. La calidad de la interacción del usuario es la característica distintiva más importante en estos sistemas.
  </li>
  <li>
    <strong>Sistemas de modelado y simulación (systems for modeling and simulation)</strong>: Son sistemas desarrollados por científicos e ingenieros para modelar procesos físicos o situaciones que incluyen muchos objetos separados e interrelacionados. Suelen requerir gran capacidad de cálculo y necesitan sistemas paralelos de alto rendimiento para su ejecución.
  </li>
  <li>
    <strong>Sistemas de recolección de datos (data collection systems)</strong>: Son sistemas que recopilan datos del entorno utilizando un conjunto de sensores y envían esos datos a otros sistemas para su procesamiento. El software debe interactuar con los sensores y, a menudo, se instala en ambientes hostiles, como dentro de un motor o en una ubicación remota.
  </li>
  <li>
    <strong>Sistemas de sistemas (systems of systems)</strong>: Son sistemas compuestos por varios otros sistemas de software. Algunos pueden ser productos de software genéricos, como un programa de hoja de cálculo. Otros sistemas en la ensambladura pueden estar especialmente escritos para ese entorno.
  </li>
</ol>



    <p>
Por supuesto, los límites entre estos tipos de sistemas son difusos. Si desarrollas un juego para un teléfono móvil, debes tener en cuenta las mismas restricciones (energía, interacción con el hardware) que los desarrolladores del software del teléfono. Los sistemas de procesamiento por lotes a menudo se utilizan junto con sistemas basados en la web. Por ejemplo, en una empresa, los reclamos de gastos de viaje pueden enviarse a través de una aplicación web pero procesarse en una aplicación por lotes para el pago mensual.
</p>

<p>
Se utilizan diferentes técnicas de ingeniería de software para cada tipo de sistema, ya que el software tiene características bastante diferentes. Por ejemplo, un sistema de control embebido en un automóvil es crítico para la seguridad y se graba en la ROM cuando se instala en el vehículo. Por lo tanto, es muy costoso de cambiar. Dicho sistema necesita una verificación y validación muy extensas para minimizar las posibilidades de tener que retirar vehículos del mercado después de la venta para corregir problemas de software. La interacción con el usuario es mínima (o tal vez inexistente), por lo que no es necesario utilizar un proceso de desarrollo que dependa de la creación de prototipos de interfaz de usuario.
</p>

<p>
Para un sistema basado en la web, puede ser apropiado un enfoque basado en desarrollo iterativo y entrega continua, con el sistema compuesto por componentes reutilizables. Sin embargo, tal enfoque puede ser impracticable para un sistema de sistemas, donde se deben especificar de antemano especificaciones detalladas de las interacciones del sistema para que cada sistema pueda desarrollarse por separado.
</p>

<p>
Sin embargo, existen fundamentos de ingeniería de software que se aplican a todos los tipos de sistemas de software:
</p>

<ol>
  <li>
    Deben desarrollarse utilizando un proceso de desarrollo gestionado y comprendido. La organización que desarrolla el software debe planificar el proceso de desarrollo y tener ideas claras sobre qué se producirá y cuándo se completará. Por supuesto, se utilizan procesos diferentes para distintos tipos de software.
  </li>
  <li>
    La confiabilidad y el rendimiento son importantes para todos los tipos de sistemas. El software debe comportarse como se espera, sin fallos, y debe estar disponible para su uso cuando se requiera. Debe ser seguro en su operación y, en la medida de lo posible, debe estar protegido contra ataques externos. El sistema debe tener un buen rendimiento y no debe desperdiciar recursos.
  </li>
  <li>
    Comprender y gestionar la especificación y los requisitos del software (lo que el software debe hacer) es fundamental. Hay que saber qué esperan los distintos clientes y usuarios del sistema y se deben gestionar esas expectativas para que se pueda entregar un sistema útil dentro del presupuesto y del plazo establecido.
  </li>
  <li>
    Se debe hacer un uso lo más efectivo posible de los recursos existentes. Esto significa que, cuando sea apropiado, se debe reutilizar software que ya ha sido desarrollado en lugar de escribir software nuevo.
  </li>
</ol>

<p>
Estas nociones fundamentales de proceso, confiabilidad, requisitos, gestión y reutilización son temas importantes de este libro. Diferentes métodos las reflejan de diferentes formas, pero subyacen en todo desarrollo profesional de software.
</p>

<p>
Debes notar que estos fundamentos no cubren la implementación y la programación. No cubro técnicas de programación específicas en este libro porque varían drásticamente de un tipo de sistema a otro. Por ejemplo, un lenguaje de scripts como Ruby se usa para la programación de sistemas basados en la web, pero sería completamente inapropiado para la ingeniería de sistemas embebidos.
</p>



    <h3>1.1.3 Ingeniería de software y la Web</h3>

<p>
El desarrollo de la World Wide Web ha tenido un efecto profundo en todas nuestras vidas. Inicialmente, la Web era principalmente un almacén de información accesible universalmente y tenía poco efecto sobre los sistemas de software. Estos sistemas se ejecutaban en computadoras locales y solo eran accesibles dentro de una organización.
</p>

<p>
Alrededor del año 2000, la Web comenzó a evolucionar y se añadió cada vez más funcionalidad a los navegadores. Esto significó que podían desarrollarse sistemas basados en la web donde, en lugar de una interfaz de usuario especializada, estos sistemas podían ser accedidos utilizando un navegador web. Esto llevó al desarrollo de una amplia gama de nuevos productos de sistema que ofrecían servicios innovadores, accesibles a través de la Web. Estos a menudo se financian mediante anuncios que se muestran en la pantalla del usuario y no implican pagos directos por parte de los usuarios.
</p>

<p>
Además de estos productos de sistema, el desarrollo de navegadores web que podían ejecutar pequeños programas y realizar algo de procesamiento local condujo a una evolución en el software empresarial y organizacional. En lugar de escribir software e instalarlo en las PC de los usuarios, el software se desplegaba en un servidor web. Esto hacía mucho más barato cambiar y actualizar el software, ya que no era necesario instalar el software en cada PC.
</p>

<p>
También redujo costos, ya que el desarrollo de interfaces de usuario es particularmente costoso. En consecuencia, siempre que ha sido posible hacerlo, muchas empresas se han trasladado a la interacción basada en la web con los sistemas de software de la compañía.
</p>


    </form>
</div>




<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <p>
La siguiente etapa en el desarrollo de sistemas basados en la web fue la noción de servicios web. Los servicios web son componentes de software que ofrecen funcionalidades específicas y útiles, y que se acceden a través de la Web. Las aplicaciones se construyen integrando estos servicios web, que pueden ser proporcionados por diferentes compañías. En principio, esta vinculación puede ser dinámica, de modo que una aplicación puede utilizar diferentes servicios web cada vez que se ejecuta. Explico este enfoque de desarrollo de software en el Capítulo 19.
</p>

<p>
En los últimos años, se ha desarrollado la noción de "software como servicio". Se ha propuesto que el software no se ejecutará normalmente en computadoras locales, sino en "nubes de cómputo" a las que se accede a través de Internet. Si utilizas un servicio como correo web, estás usando un sistema basado en la nube. Una nube de cómputo es un gran número de sistemas informáticos conectados entre sí que son compartidos por muchos usuarios. Los usuarios no compran el software, sino que pagan según cuánto lo utilizan o se les da acceso gratuito a cambio de ver anuncios que se muestran en su pantalla.
</p>

<p>
La llegada de la web, por lo tanto, ha conducido a un cambio significativo en la forma en que se organiza el software empresarial. Antes de la web, las aplicaciones empresariales eran en su mayoría programas monolíticos que se ejecutaban en computadoras individuales o clústeres de computadoras. Las comunicaciones eran locales, dentro de una organización. Ahora, el software está altamente distribuido, a veces en todo el mundo. Las aplicaciones empresariales no se programan desde cero, sino que implican una amplia reutilización de componentes y programas.
</p>

<p>
Este cambio radical en la organización del software ha llevado, obviamente, a cambios en las formas en que se desarrollan los sistemas basados en la web. Por ejemplo:
</p>

<ol>
  <li>
    La reutilización de software se ha convertido en el enfoque dominante para construir sistemas basados en la web. Al construir estos sistemas, se piensa en cómo se pueden ensamblar a partir de componentes y sistemas de software preexistentes.
  </li>
  <li>
    Ahora se reconoce en general que es poco práctico especificar todos los requisitos de tales sistemas por adelantado. Los sistemas basados en la web deben desarrollarse y entregarse de manera incremental.
  </li>
  <li>
    Las interfaces de usuario están limitadas por las capacidades de los navegadores web. Aunque tecnologías como AJAX (Holdener, 2008) permiten crear interfaces ricas dentro de un navegador, estas tecnologías todavía son difíciles de usar. Se utilizan más comúnmente formularios web con scripts locales. Las interfaces de las aplicaciones en sistemas basados en la web a menudo son de menor calidad que las interfaces de usuario especialmente diseñadas en productos de sistemas para PC.
  </li>
</ol>

<p>
Las ideas fundamentales de la ingeniería de software, discutidas en la sección anterior, se aplican al software basado en la web de la misma manera que se aplican a otros tipos de sistemas de software. La experiencia adquirida con el desarrollo de sistemas grandes en el siglo XX sigue siendo relevante para el software basado en la web.
</p>



    <h2>1.2 Ética en la ingeniería de software</h2>

<p>
Al igual que otras disciplinas de la ingeniería, la ingeniería de software se lleva a cabo dentro de un marco social y legal que limita la libertad de las personas que trabajan en esta área. Como ingeniero de software, debes aceptar que tu trabajo implica responsabilidades más amplias que simplemente aplicar habilidades técnicas. También debes comportarte de una manera ética y moralmente responsable si deseas ser respetado como un ingeniero profesional.
</p>

<p>
Está implícito que debes mantener estándares normales de honestidad e integridad. No debes utilizar tus habilidades y capacidades para actuar de manera deshonesta o de una forma que desprestigie a la profesión de la ingeniería de software. Sin embargo, hay áreas donde los estándares de comportamiento aceptable no están regulados por leyes, sino por la noción más tenue de responsabilidad profesional. Algunas de estas áreas son:
</p>

<ol>
  <li><strong>Confidencialidad:</strong> Normalmente deberías respetar la confidencialidad de tus empleadores o clientes, independientemente de si se ha firmado un acuerdo de confidencialidad formal.</li>
  <li><strong>Competencia:</strong> No debes tergiversar tu nivel de competencia. No deberías aceptar conscientemente trabajos que estén fuera de tu capacidad.</li>
  <li><strong>Derechos de propiedad intelectual:</strong> Debes estar al tanto de las leyes locales que rigen el uso de la propiedad intelectual, como patentes y derechos de autor. Debes asegurarte de proteger la propiedad intelectual de tus empleadores y clientes.</li>
  <li><strong>Uso indebido de computadoras:</strong> No debes usar tus habilidades técnicas para hacer un mal uso de las computadoras de otras personas. El uso indebido puede ir desde lo relativamente trivial (como jugar en la computadora del empleador) hasta lo extremadamente grave (como la difusión de virus u otros programas maliciosos).</li>
</ol>

<h3>Código de Ética y Práctica Profesional de la Ingeniería de Software</h3>
<p><em>Grupo de trabajo conjunto ACM/IEEE-CS sobre Ética y Práctica Profesional en la Ingeniería de Software</em></p>

<h4>Preámbulo</h4>
<p>
La versión breve del código resume aspiraciones a un alto nivel de abstracción; las cláusulas incluidas en la versión completa dan ejemplos y detalles de cómo estas aspiraciones cambian la forma en que actuamos como profesionales de la ingeniería de software. Sin las aspiraciones, los detalles pueden volverse legalistas y tediosos; sin los detalles, las aspiraciones pueden sonar elevadas pero vacías. Juntas, las aspiraciones y los detalles forman un código cohesivo.
</p>

<p>
Los ingenieros de software se comprometerán a hacer del análisis, la especificación, el diseño, el desarrollo, la prueba y el mantenimiento de software una profesión beneficiosa y respetada. De acuerdo con su compromiso con la salud, la seguridad y el bienestar del público, los ingenieros de software deben adherirse a los siguientes ocho principios:
</p>

<ol>
  <li><strong>PÚBLICO:</strong> Los ingenieros de software deben actuar de manera coherente con el interés público.</li>
  <li><strong>CLIENTE Y EMPLEADOR:</strong> Los ingenieros de software deben actuar de manera que esté en el mejor interés de su cliente y empleador, en consonancia con el interés público.</li>
  <li><strong>PRODUCTO:</strong> Los ingenieros de software deben asegurarse de que sus productos y las modificaciones relacionadas cumplan con los más altos estándares profesionales posibles.</li>
  <li><strong>JUICIO:</strong> Los ingenieros de software deben mantener la integridad y la independencia en su juicio profesional.</li>
  <li><strong>GESTIÓN:</strong> Los gerentes y líderes de ingeniería de software deben suscribirse y promover un enfoque ético en la gestión del desarrollo y mantenimiento de software.</li>
  <li><strong>PROFESIÓN:</strong> Los ingenieros de software deben promover la integridad y la reputación de la profesión en consonancia con el interés público.</li>
  <li><strong>COLEGAS:</strong> Los ingenieros de software deben ser justos y solidarios con sus colegas.</li>
  <li><strong>UNO MISMO (SELF):</strong> Los ingenieros de software deben participar en el aprendizaje continuo sobre la práctica de su profesión y promover un enfoque ético en la práctica profesional.</li>
</ol>

<p><em>Figura 1.3 El Código de Ética de ACM/IEEE (© IEEE/ACM 1999)</em></p>


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
