<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre simplificación de expresiones matemáticas</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../style.css">
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
 
 
    
</head>
<body> 
<div class="seccion izquierda">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h4>Relaciones:</h4>
    <p>Las relaciones entre elementos de conjuntos ocurren en muchos contextos. Todos los días tratamos 
    con relaciones como las que existen entre una empresa y su número telefónico, un empleado y su salario,
    una persona y un pariente, y así sucesivamente. En matemáticas estudiamos relaciones como las que existen
    entre un entero positivo y otro que lo divide, un entero y otro con el que es congruente módulo 5, un número
    real y otro que es mayor que él, un número real <i>x</i> y el valor <i>f(x)</i>, donde <i>f</i> es una
    función, y así sucesivamente. En ciencias de la computación surgen con frecuencia relaciones como la que 
    existe entre un programa y una variable que utiliza, o la que existe entre un lenguaje de programación y 
    una sentencia válida en ese lenguaje. Las relaciones entre elementos de dos conjuntos se representan usando
    una estructura llamada <b>relación binaria</b>, que no es más que un subconjunto del producto cartesiano de
    los conjuntos. Las relaciones pueden usarse para resolver problemas como determinar qué pares de ciudades 
    están conectadas por vuelos en una red aérea, o encontrar un orden viable para las diferentes fases de un 
    proyecto complicado. Presentaremos diversas propiedades que pueden tener las relaciones binarias.</p>

    <p>Las relaciones entre elementos de más de dos conjuntos surgen en muchos contextos. Estas relaciones
    pueden representarse mediante <b>relaciones n-arias</b>, que son colecciones de n-tuplas. Tales relaciones
    son la base del <b>modelo de datos relacional</b>, la forma más común de almacenar información en bases de
    datos computacionales. Presentaremos la terminología utilizada para estudiar bases de datos relacionales,
    definiremos algunas operaciones importantes sobre ellas, y presentaremos el lenguaje de consultas SQL. 
    Concluiremos nuestro breve estudio de relaciones n-arias y bases de datos con una aplicación importante 
    del <b>minado de datos</b>. En particular, mostraremos cómo las bases de datos de transacciones, representadas
    por relaciones n-arias, se usan para medir la probabilidad de que alguien compre un producto particular en una
    tienda cuando compra uno o más productos adicionales.</p>

    <p>Se introducirán dos métodos para representar relaciones: mediante matrices cuadradas y mediante 
    <b>gráficas dirigidas</b>, que consisten en vértices y aristas dirigidas, y se utilizarán en secciones
    posteriores del capítulo. También estudiaremos relaciones que cumplen ciertas propiedades que pueden
    tener las relaciones. Por ejemplo, en algunos lenguajes de programación, solo los primeros 31 caracteres
    del nombre de una variable son relevantes. La relación que consiste en pares ordenados de cadenas en los 
    cuales la primera tiene los mismos 31 caracteres iniciales que la segunda es un ejemplo de un tipo especial 
    de relación, conocida como <b>relación de equivalencia</b>. Las relaciones de equivalencia aparecen en 
    toda la matemática y la informática. Finalmente, estudiaremos relaciones llamadas <b>ordenamientos parciales</b>,
    que generalizan la noción de la relación "menor o igual que". Por ejemplo, el conjunto de todos los pares de
    cadenas de letras del alfabeto inglés en el que la segunda cadena es igual a la primera o aparece después de 
    la primera en orden de diccionario es un ordenamiento parcial.</p>

    <h2>9.1 Relaciones y sus propiedades</h2>
    <h3>9.1.1 Introducción</h3>
    <p>La manera más directa de expresar una relación entre elementos de dos conjuntos es usar pares ordenados 
    formados por dos elementos relacionados. Por esta razón, los conjuntos de pares ordenados se llaman 
    <b>relaciones binarias</b>. En esta sección introducimos la terminología básica usada para describir
    relaciones binarias. Más adelante en este capítulo usaremos relaciones para resolver problemas relacionados
    con redes de comunicación, programación de proyectos e identificación de elementos en conjuntos con propiedades comunes.</>

    <h4>Enlaces</h4>
    <p><b>Definición 1</b> Sea <i>A</i> y <i>B</i> conjuntos. Una <b>relación binaria</b> de <i>A</i> a <i>B</i>
    es un subconjunto de <i>A × B</i>. En otras palabras, una relación binaria de <i>A</i> a <i>B</i> es un 
    conjunto <i>R</i> de pares ordenados, donde el primer elemento de cada par ordenado proviene de <i>A</i> y 
    el segundo elemento proviene de <i>B</i>. Usamos la notación <i>aRb</i> para denotar que <i>(a, b) ∈ R</i> y 
    <i>a ̸Rb</i> para denotar que <i>(a, b) ∉ R</i>. Además, cuando <i>(a, b)</i> pertenece a <i>R</i>, se dice que
    <i>a</i> está relacionado con <i>b</i> por <i>R</i>.</p>

    <p>Las relaciones binarias representan relaciones entre los elementos de dos conjuntos. Más adelante en este 
    capítulo introduciremos las <b>relaciones n-arias</b>, que expresan relaciones entre elementos de más de dos 
    conjuntos. Omitiremos la palabra “binaria” cuando no haya peligro de confusión.</p>

    <h4>Ejemplo 1</h4>

    <p>Sea <i>A</i> el conjunto de estudiantes de tu escuela, y sea <i>B</i> el conjunto de cursos. Sea <i>R</i>
    la relación que consiste en aquellos pares <i>(a, b)</i>, donde <i>a</i> es un estudiante inscrito en el 
    curso <i>b</i>.</p>

    <p>Por ejemplo, si Jason Goodfriend y Deborah Sherman están inscritos en CS518, los pares <i>(Jason Goodfriend,
    CS518)</i> y <i>(Deborah Sherman, CS518)</i> pertenecen a <i>R</i>. Si Jason Goodfriend también está inscrito en
    CS510, entonces el par <i>(Jason Goodfriend, CS510)</i> también está en <i>R</i>. Sin embargo, si Deborah Sherman
    no está inscrita en CS510, entonces el par <i>(Deborah Sherman, CS510)</i> no está en <i>R</i>.</p>

    <p>Observa que si un estudiante no está inscrito actualmente en ningún curso, no habrá pares en <i>R</i> que
    tengan a este estudiante como primer elemento. De manera similar, si un curso no se está ofreciendo actualmente,
    no habrá pares en <i>R</i> que tengan este curso como segundo elemento.</p>

    <h4>Ejemplo 2</h4>
    <p>Sea <i>A</i> el conjunto de ciudades en los EE.UU., y sea <i>B</i> el conjunto de los 50 estados de los
    EE.UU. Definimos la relación <i>R</i> especificando que <i>(a, b)</i> pertenece a <i>R</i> si una ciudad con 
    nombre <i>a</i> está en el estado <i>b</i>. Por ejemplo, <i>(Boulder, Colorado)</i>, <i>(Bangor, Maine)</i>, 
    <i>(Ann Arbor, Michigan)</i>, <i>(Middletown, New Jersey)</i>, <i>(Middletown, New York)</i>, <i>(Cupertino, 
    California)</i> y <i>(Red Bank, New Jersey)</i> están en <i>R</i>. ◂</p>

    <h4>Ejemplo 3</h4>
    <p>Sea <i>A = {0, 1, 2}</i> y <i>B = {a, b}</i>. Entonces <i>{(0, a), (0, b), (1, a), (2, b)}</i> es una
    relación de <i>A</i> a <i>B</i>. Esto significa, por ejemplo, que <i>0 R a</i>, pero que <i>1 ̸R b</i>. Las 
    relaciones pueden representarse gráficamente, como se muestra en la Figura 1, usando flechas para representar
    los pares ordenados. Otra forma de representar esta relación es usar una tabla, lo cual también se muestra en
    la Figura 1. Discutiremos con más detalle las representaciones de relaciones en la Sección 9.3.</p>


    <img src="../../../../img/relaciones.png" alt="">
    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
        <h3>9.1.2 Funciones como relaciones</h3>
<p>Recordemos que una función <i>f</i> de un conjunto <i>A</i> a un conjunto <i>B</i> (como se definió en la Sección 2.3) asigna exactamente un elemento de <i>B</i> a cada elemento de <i>A</i>. El <b>gráfico</b> de <i>f</i> es el conjunto de pares ordenados <i>(a, b)</i> tal que <i>b = f(a)</i>. Como el gráfico de <i>f</i> es un subconjunto de <i>A × B</i>, es una relación de <i>A</i> a <i>B</i>. Además, el gráfico de una función tiene la propiedad de que cada elemento de <i>A</i> es el primer elemento de exactamente un par ordenado del gráfico.</p>

<p>Recíprocamente, si <i>R</i> es una relación de <i>A</i> a <i>B</i> tal que cada elemento en <i>A</i> es el primer elemento de exactamente un par ordenado de <i>R</i>, entonces se puede definir una función con <i>R</i> como su gráfico. Esto se puede hacer asignando a un elemento <i>a</i> de <i>A</i> el único elemento <i>b ∈ B</i> tal que <i>(a, b) ∈ R</i>. (Obsérvese que la relación <i>R</i> en el Ejemplo 2 no es el gráfico de una función porque <i>Middletown</i> aparece más de una vez como primer elemento de un par ordenado en <i>R</i>.)</p>

<p>Una relación puede usarse para expresar una relación de uno a muchos entre los elementos de los conjuntos <i>A</i> y <i>B</i> (como en el Ejemplo 2), donde un elemento de <i>A</i> puede estar relacionado con más de un elemento de <i>B</i>. Una función representa una relación donde exactamente un elemento de <i>B</i> está relacionado con cada elemento de <i>A</i>.</p>

<p>Las relaciones son una generalización de los gráficos de funciones; pueden usarse para expresar una clase mucho más amplia de relaciones entre conjuntos. (Recordemos que el gráfico de la función <i>f</i> de <i>A</i> a <i>B</i> es el conjunto de pares ordenados <i>(a, f(a))</i> para <i>a ∈ A</i>.)</p>

<h3>9.1.3 Relaciones sobre un conjunto</h3>
<p>Las relaciones de un conjunto <i>A</i> consigo mismo son de especial interés.</p>

<p><b>Definición 2</b> Una <b>relación sobre un conjunto A</b> es una relación de <i>A</i> a <i>A</i>.</p>
<p>En otras palabras, una relación sobre un conjunto <i>A</i> es un subconjunto de <i>A × A</i>.</p>

<h4>Ejemplo 4</h4>
<p>Sea <i>A</i> el conjunto <i>{1, 2, 3, 4}</i>. ¿Qué pares ordenados están en la relación <i>R = {(a, b) ∣ a divide a b}</i>?</p>

<p><b>Solución:</b> Como <i>(a, b)</i> está en <i>R</i> si y solo si <i>a</i> y <i>b</i> son enteros positivos no mayores que 4 tales que <i>a</i> divide a <i>b</i>, tenemos que:</p>

<p><i>R = {(1, 1), (1, 2), (1, 3), (1, 4), (2, 2), (2, 4), (3, 3), (4, 4)}</i>.</p>

<p>Los pares en esta relación se muestran tanto gráficamente como en forma tabular en la Figura 2.</p>

    <img src="../../../../img/relacion_dos.png" alt="">


    <h4>Ejemplo 5</h4>
<p>Consideremos estas relaciones sobre el conjunto de los enteros:</p>
<ul>
  <li>\( R_1 = \{ (a, b) \mid a \leq b \} \),</li>
  <li>\( R_2 = \{ (a, b) \mid a > b \} \),</li>
  <li>\( R_3 = \{ (a, b) \mid a = b \text{ o } a = -b \} \),</li>
  <li>\( R_4 = \{ (a, b) \mid a = b \} \),</li>
  <li>\( R_5 = \{ (a, b) \mid a = b + 1 \} \),</li>
  <li>\( R_6 = \{ (a, b) \mid a + b \leq 3 \} \).</li>
</ul>

<p>¿Cuál de estas relaciones contiene cada uno de los pares \( (1, 1) \), \( (1, 2) \), \( (2, 1) \), \( (1, -1) \) y \( (2, 2) \)?</p>

<p><b>Observación:</b> A diferencia de las relaciones en los Ejemplos 1–4, estas son relaciones sobre un conjunto infinito.</p>

<p><b>Solución:</b> El par \( (1, 1) \) está en \( R_1, R_3, R_4 \) y \( R_6 \); \( (1, 2) \) está en \( R_1 \) y \( R_6 \); \( (2, 1) \) está en \( R_2, R_5 \) y \( R_6 \); \( (1, -1) \) está en \( R_2, R_3 \) y \( R_6 \); y finalmente, \( (2, 2) \) está en \( R_1, R_3 \) y \( R_4 \). ◂</p>

<h4>Ejemplo 6</h4>
<p>¿Cuántas relaciones hay sobre un conjunto con \( n \) elementos?</p>

<p><b>Solución:</b> Una relación sobre un conjunto \( A \) es un subconjunto de \( A \times A \). Como \( A \times A \) tiene \( n^2 \) elementos cuando \( A \) tiene \( n \) elementos, y un conjunto con \( m \) elementos tiene \( 2^m \) subconjuntos, hay \( 2^{n^2} \) subconjuntos de \( A \times A \). Por lo tanto, hay \( 2^{n^2} \) relaciones sobre un conjunto con \( n \) elementos. Por ejemplo, hay \( 2^{3^2} = 2^9 = 512 \) relaciones sobre el conjunto \( \{a, b, c\} \). ◂</p>

<h3>9.1.4 Propiedades de las relaciones</h3>
<p>Existen varias propiedades que se utilizan para clasificar relaciones sobre un conjunto. Aquí introduciremos las más importantes. (Puede resultarte útil estudiar este material junto con el contenido de la Sección 9.3. En esa sección se presentarán varios métodos para representar relaciones que pueden ayudarte a comprender cada una de las propiedades que presentamos aquí.)</p>

<p>En algunas relaciones, un elemento siempre está relacionado consigo mismo. Por ejemplo, sea \( R \) la relación sobre el conjunto de todas las personas que consiste en los pares \( (x, y) \) donde \( x \) e \( y \) tienen la misma madre y el mismo padre. Entonces, \( x R x \) para toda persona \( x \).</p>

    <h4>Definición 3</h4>
<p>Una relación \( R \) sobre un conjunto \( A \) se llama <b>reflexiva</b> si \( (a, a) \in R \) para todo elemento \( a \in A \).</p>

<p><b>Observación:</b> Usando cuantificadores, vemos que la relación \( R \) sobre el conjunto \( A \) es reflexiva si 
\( \forall a \, ((a, a) \in R) \), donde el universo del discurso es el conjunto de todos los elementos en \( A \).</p>

<p>Vemos que una relación sobre \( A \) es reflexiva si cada elemento de \( A \) está relacionado consigo mismo.</p>

<p>Los Ejemplos 7–9 ilustran el concepto de una relación reflexiva.</p>


    </form>
</div>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="segundo.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
