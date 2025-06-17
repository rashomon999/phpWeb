 
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
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
     <img src="../../../../img/patient.png" alt="" width="510">
     <p>
Por lo tanto, el sistema debe ser diseñado e implementado de manera que garantice que siempre cumpla con estos requisitos. Requisitos más detallados y discusiones sobre cómo asegurar que el sistema sea seguro se abordan en capítulos posteriores.
</p>
<h3>1.3.2 Un sistema de información de pacientes para el cuidado de salud mental</h3>

<p>
Un sistema de información de pacientes para apoyar el cuidado de salud mental es un sistema de información médica que mantiene información sobre pacientes que sufren de problemas de salud mental y los tratamientos que han recibido. La mayoría de los pacientes de salud mental no requieren tratamiento hospitalario dedicado, sino que necesitan asistir regularmente a clínicas especializadas donde pueden ver a un médico que tenga conocimiento detallado de sus problemas.
</p>

<p>
Para facilitar la asistencia de los pacientes, estas clínicas no solo operan en hospitales. También pueden llevarse a cabo en consultorios médicos locales o centros comunitarios.
</p>

<p>
El <strong>MHC-PMS (Mental Health Care–Patient Management System)</strong> es un sistema de información diseñado para ser usado en clínicas. Utiliza una base de datos centralizada de información de pacientes, pero también ha sido diseñado para ejecutarse en una computadora personal, de modo que pueda ser accedido desde sitios sin conectividad de red segura. Cuando los sistemas locales tienen acceso a la red, usan la base de datos; sin embargo, pueden descargar y utilizar copias locales de los registros de pacientes cuando están desconectados.
</p>

<p>
El sistema no es un sistema de registros médicos completo, por lo que no mantiene información sobre otras condiciones médicas. Sin embargo, puede interactuar e intercambiar datos con otros sistemas clínicos de información. La <strong>Figura 1.6</strong> ilustra la organización del MHC-PMS.
</p>

<p><strong>El MHC-PMS tiene dos objetivos generales:</strong></p>

<ol>
  <li>Generar información de gestión que permita a los administradores del servicio de salud evaluar el desempeño frente a los objetivos locales y gubernamentales.</li>
  <li>Proporcionar al personal médico información oportuna para apoyar el tratamiento de los pacientes.</li>
</ol>

<p>
La naturaleza de los problemas de salud mental es tal que los pacientes a menudo están desorganizados, por lo que pueden faltar a citas, perder recetas y medicamentos deliberadamente o por accidente, olvidar instrucciones y hacer demandas poco razonables al personal médico. También pueden presentarse en clínicas sin previo aviso. En algunos casos, pueden representar un peligro para ellos mismos o para otras personas. Pueden cambiar de dirección regularmente o estar sin hogar de manera temporal o permanente. Cuando los pacientes son peligrosos, puede ser necesario <em>"internarlos"</em> —confinarlos en un hospital seguro para tratamiento y observación.
</p>

<p>
Los usuarios del sistema incluyen personal clínico como médicos, enfermeros y visitantes sanitarios (enfermeros que visitan a personas en sus hogares para verificar su tratamiento). Los usuarios no médicos incluyen recepcionistas que hacen citas, personal de registros médicos que mantiene el sistema de registros, y personal administrativo que genera informes.
</p>

<p>
El sistema se utiliza para registrar información sobre pacientes (nombre, dirección, edad, persona de contacto, etc.), consultas (fecha, médico que atendió, impresiones subjetivas del paciente, etc.), condiciones y tratamientos. Se generan informes periódicos para el personal médico y los administradores de la autoridad sanitaria. Típicamente, los informes para el personal médico se enfocan en información sobre pacientes individuales, mientras que los informes de gestión están anonimizados y se centran en condiciones, costos de tratamiento, etc.
</p>

<p><strong>Las características clave del sistema son:</strong></p>

<ol>
  <li>
    <strong>Gestión individual del cuidado:</strong> Los médicos pueden crear registros para los pacientes, editar la información del sistema, ver el historial del paciente, etc. El sistema admite resúmenes de datos para que los médicos que no han tratado antes al paciente puedan conocer rápidamente los problemas clave y los tratamientos prescritos.
  </li>
  <li>
    <strong>Monitoreo del paciente:</strong> El sistema revisa periódicamente los registros de los pacientes involucrados en tratamiento y emite alertas si se detectan posibles problemas. Por ejemplo, si un paciente no ha visto a un médico en algún tiempo, se puede emitir una advertencia. Uno de los elementos más importantes del sistema de monitoreo es hacer seguimiento a los pacientes internados y asegurar que se realicen las verificaciones legales requeridas en el momento adecuado.
  </li>
  <li>
    <strong>Informes administrativos:</strong> El sistema genera informes mensuales de gestión que muestran el número de pacientes atendidos en cada clínica, el número de pacientes que han ingresado y salido del sistema de atención, el número de pacientes internados, los medicamentos prescritos y sus costos, etc.
  </li>
</ol>

<p>
Dos leyes diferentes afectan al sistema. Estas son las leyes de protección de datos que regulan la confidencialidad de la información personal y las leyes de salud mental que regulan la detención obligatoria de pacientes considerados peligrosos para ellos mismos o para otros. La salud mental es única en este aspecto, ya que es la única especialidad médica que puede recomendar la detención de pacientes contra su voluntad. Esto está sujeto a estrictas salvaguardas legales. Uno de los objetivos del MHC-PMS es garantizar que el personal actúe siempre conforme a la ley y que sus decisiones queden registradas para revisión judicial si es necesario.
</p>

<p>
Como en todos los sistemas médicos, la <strong>privacidad</strong> es un requisito crítico del sistema. Es esencial que la información del paciente sea confidencial y nunca se divulgue a nadie, excepto al personal médico autorizado y al propio paciente. El MHC-PMS también es un <strong>sistema crítico para la seguridad</strong>. Algunas enfermedades mentales hacen que los pacientes se tornen suicidas o representen un peligro para otras personas. Siempre que sea posible, el sistema debe advertir al personal médico sobre pacientes potencialmente suicidas o peligrosos.
</p>
 <img src="../../../../img/care.png" alt="" width="560">
    </form>
</div>




<div class="seccion derecha">
    <form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 <h3>1.3.3 Una estación meteorológica en zona silvestre</h3>
<p>
Para ayudar a monitorear el cambio climático y mejorar la precisión de los pronósticos meteorológicos en áreas remotas, el gobierno de un país con grandes zonas silvestres decide desplegar varios cientos de estaciones meteorológicas en regiones aisladas. Estas estaciones meteorológicas recopilan datos de un conjunto de instrumentos que miden la temperatura y la presión, la luz solar, las precipitaciones, la velocidad del viento y la dirección del viento.
</p>
<p>
Las estaciones meteorológicas en zonas silvestres forman parte de un sistema más amplio (Figura 1.7), que es un sistema de información meteorológica que recopila datos de estaciones meteorológicas y los pone a disposición de otros sistemas para su procesamiento. Los sistemas en la Figura 1.7 son:
</p>
<ol>
  <li><strong>El sistema de la estación meteorológica:</strong> se encarga de recopilar los datos meteorológicos, realizar cierto procesamiento inicial de los datos y transmitirlos al sistema de gestión de datos.</li>
  <li><strong>El sistema de gestión y archivo de datos:</strong> este sistema recopila los datos de todas las estaciones meteorológicas en zonas silvestres, realiza procesamiento y análisis de datos, y archiva la información en un formato que puede ser recuperado por otros sistemas, como los sistemas de pronóstico del clima.</li>
  <li><strong>El sistema de mantenimiento de estaciones:</strong> este sistema puede comunicarse por satélite con todas las estaciones meteorológicas en zonas silvestres para monitorear la salud de estos sistemas y proporcionar informes sobre problemas. Puede actualizar el software embebido en estos sistemas. En caso de problemas, también puede utilizarse para controlar remotamente una estación meteorológica en zona silvestre.</li>
</ol>
<p>
En la Figura 1.7, he utilizado el símbolo de paquete de UML para indicar que cada sistema es una colección de componentes, e identificado los sistemas por separado utilizando el estereotipo de UML «system». Las asociaciones entre los paquetes indican que hay un intercambio de información pero, en esta etapa, no es necesario definirlos con más detalle.
</p>

<p>
Cada estación meteorológica incluye una serie de instrumentos que miden parámetros meteorológicos como la velocidad y dirección del viento, las temperaturas del suelo y del aire, la presión barométrica y las precipitaciones durante un período de 24 horas. Cada uno de estos instrumentos es controlado por un sistema de software que toma lecturas de los parámetros periódicamente y gestiona los datos recogidos de los instrumentos.
</p>

<p>
El sistema de la estación meteorológica opera recolectando observaciones meteorológicas a intervalos frecuentes—por ejemplo, las temperaturas se miden cada minuto. Sin embargo, debido a que el ancho de banda hacia el satélite es relativamente limitado, la estación meteorológica realiza un procesamiento y agregación local de los datos. Luego transmite estos datos agregados cuando el sistema de recolección de datos lo solicita. Si, por cualquier razón, no es posible establecer una conexión, entonces la estación meteorológica almacena los datos localmente hasta que se pueda reanudar la comunicación.
</p>

<p>
Cada estación meteorológica funciona con baterías y debe ser completamente autónoma—no hay cables de alimentación o red externos disponibles. Todas las comunicaciones se realizan a través de un enlace satelital de velocidad relativamente baja y la estación meteorológica debe incluir algún mecanismo (solar o eólico) para cargar sus baterías. Como están desplegadas en áreas silvestres, están expuestas a condiciones ambientales severas y pueden ser dañadas por animales.
</p>

<p>
Por lo tanto, el software de la estación no solo se encarga de la recolección de datos. También debe:
</p>
<ol>
  <li>Monitorear los instrumentos, la energía y el hardware de comunicaciones, y reportar fallos al sistema de gestión.</li>
  <li>Gestionar la energía del sistema, asegurando que las baterías se carguen siempre que las condiciones ambientales lo permitan, pero también que los generadores se apaguen en condiciones meteorológicas potencialmente dañinas, como vientos fuertes.</li>
  <li>Permitir la reconfiguración dinámica, donde partes del software se reemplazan por nuevas versiones y donde los instrumentos de respaldo se integran al sistema en caso de fallos.</li>
</ol>

<p>
Debido a que las estaciones meteorológicas deben ser autónomas y funcionar sin supervisión, esto implica que el software instalado sea complejo, incluso si la funcionalidad de recolección de datos es relativamente simple.
</p>




    <h3>Puntos Clave</h3>

<ul>
  <li>
    La ingeniería de software es una disciplina de la ingeniería que se ocupa de todos los aspectos de la producción de software.
  </li>
  <li>
    El software no es solo un programa o conjunto de programas, sino que también incluye documentación. Los atributos esenciales de un producto de software son: mantenibilidad, confiabilidad, seguridad, eficiencia y aceptabilidad.
  </li>
  <li>
    El proceso de software incluye todas las actividades involucradas en el desarrollo de software. Las actividades de alto nivel como la especificación, el desarrollo, la validación y la evolución son parte de todos los procesos de software.
  </li>
  <li>
    Las nociones fundamentales de la ingeniería de software son universalmente aplicables a todos los tipos de desarrollo de sistemas. Estos fundamentos incluyen procesos de software, confiabilidad, seguridad, requisitos y reutilización.
  </li>
  <li>
    Existen muchos tipos diferentes de sistemas y cada uno requiere herramientas y técnicas de ingeniería de software apropiadas para su desarrollo. Existen pocas (si es que hay alguna) técnicas de diseño e implementación específicas que sean aplicables a todo tipo de sistemas.
  </li>
  <li>
    Las ideas fundamentales de la ingeniería de software son aplicables a todos los tipos de sistemas de software. Estas ideas fundamentales incluyen procesos de software gestionados, confiabilidad y seguridad del software, ingeniería de requisitos y reutilización de software.
  </li>
  <li>
    Los ingenieros de software tienen responsabilidades con la profesión de ingeniería y con la sociedad. No deben limitarse únicamente a los asuntos técnicos.
  </li>
  <li>
    Las sociedades profesionales publican códigos de conducta que establecen los estándares de comportamiento esperados de sus miembros.
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
