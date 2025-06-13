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
    height: 350vh;
}
</style>
 
 
    
</head>
<body> 
<div class="seccion izquierda">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h4>Ejemplo 7</h4>
<p>Considera las siguientes relaciones sobre el conjunto {1, 2, 3, 4}:</p>

<p>
\( R_1 = \{(1,1), (1,2), (2,1), (2,2), (3,4), (4,1), (4,4)\} \)<br>
\( R_2 = \{(1,1), (1,2), (2,1)\} \)<br>
\( R_3 = \{(1,1), (1,2), (1,4), (2,1), (2,2), (3,3), (4,1), (4,4)\} \)<br>
\( R_4 = \{(2,1), (3,1), (3,2), (4,1), (4,2), (4,3)\} \)<br>
\( R_5 = \{(1,1), (1,2), (1,3), (1,4), (2,2), (2,3), (2,4), (3,3), (3,4), (4,4)\} \)<br>
\( R_6 = \{(3,4)\} \)
</p>

<p><b>¿Cuáles de estas relaciones son reflexivas?</b></p>

<p>
<b>Solución:</b> Las relaciones \( R_3 \) y \( R_5 \) son reflexivas porque contienen todos los pares de la forma \( (a, a) \), a saber: 
\( (1,1), (2,2), (3,3), (4,4) \). Las demás relaciones no son reflexivas porque no contienen todos estos pares ordenados. En particular, 
\( R_1, R_2, R_4 \) y \( R_6 \) no son reflexivas porque \( (3,3) \) no se encuentra en ninguna de ellas. ◂
</p>

<h4>Ejemplo 8</h4>
<p><b>¿Cuáles de las relaciones del Ejemplo 5 son reflexivas?</b></p>
<p>
<strong>recordatorio ejemplo 5</strong>
<ul>
  <li>\( R_1 = \{ (a, b) \mid a \leq b \} \),</li>
  <li>\( R_2 = \{ (a, b) \mid a > b \} \),</li>
  <li>\( R_3 = \{ (a, b) \mid a = b \text{ o } a = -b \} \),</li>
  <li>\( R_4 = \{ (a, b) \mid a = b \} \),</li>
  <li>\( R_5 = \{ (a, b) \mid a = b + 1 \} \),</li>
  <li>\( R_6 = \{ (a, b) \mid a + b \leq 3 \} \).</li>
</ul>

</p>
<p>
<b>Solución:</b> Las relaciones reflexivas del Ejemplo 5 son \( R_1 \) (porque \( a \leq a \) para todo entero \( a \)), \( R_3 \) y \( R_4 \). 
Para cada una de las otras relaciones en este ejemplo, es fácil encontrar un par de la forma \( (a, a) \) que no está en la relación. 
(Esto se deja como ejercicio para el lector.) ◂
</p>

<h4>Ejemplo 9</h4>
<p><b>¿Es reflexiva la relación “divide” sobre el conjunto de enteros positivos?</b></p>

<p>
<b>Solución:</b> Como \( a \mid a \) siempre que \( a \) sea un entero positivo, la relación “divide” es reflexiva. 
(Nótese que si reemplazamos el conjunto de enteros positivos por el conjunto de todos los enteros, la relación no es reflexiva 
porque, por definición, \( 0 \) no divide a \( 0 \).) ◂
</p>

<p>
En algunas relaciones, un elemento está relacionado con un segundo elemento si y solo si el segundo elemento también está relacionado con el primero. 
La relación que consiste en los pares \( (x, y) \), donde \( x \) y \( y \) son estudiantes de tu escuela que tienen al menos una clase en común, tiene esta propiedad. 
Otras relaciones tienen la propiedad de que si un elemento está relacionado con un segundo, entonces este segundo no está relacionado con el primero. 
La relación que consiste en los pares \( (x, y) \), donde \( x \) y \( y \) son estudiantes de tu escuela y \( x \) tiene un promedio de calificaciones mayor que \( y \), 
tiene esta propiedad.
</p>

    
<p><strong>Definición 4</strong> Una relación \( R \) en un conjunto \( A \) se llama <em>simétrica</em> si \( (b, a) \in R \) siempre que \( (a, b) \in R \), para todos \( a, b \in A \).</p>

<p>Una relación \( R \) en un conjunto \( A \) tal que para todos \( a, b \in A \), si \( (a, b) \in R \) y \( (b, a) \in R \), entonces \( a = b \), se llama <em>antisimétrica</em>.</p>

<p><strong>Observación:</strong> Usando cuantificadores, vemos que la relación \( R \) en el conjunto \( A \) es simétrica si</p>

<p>\[
\forall a \forall b \big( (a, b) \in R \rightarrow (b, a) \in R \big).
\]</p>

<p>De manera similar, la relación \( R \) en el conjunto \( A \) es antisimétrica si</p>

<p>\[
\forall a \forall b \big( ((a, b) \in R \land (b, a) \in R) \rightarrow (a = b) \big).
\]</p>

<p>En otras palabras, una relación es simétrica si y solo si el hecho de que \( a \) esté relacionado con \( b \) siempre implica que \( b \) está relacionado con \( a \). Por ejemplo, la relación de igualdad es simétrica porque \( a = b \) si y solo si \( b = a \). Una relación es antisimétrica si y solo si no existen pares de elementos distintos \( a \) y \( b \) con \( a \) relacionado con \( b \) y \( b \) relacionado con \( a \). Es decir, la única forma de que \( a \) esté relacionado con \( b \) y \( b \) esté relacionado con \( a \) es que \( a \) y \( b \) sean el mismo elemento. Por ejemplo, la relación de menor o igual que es antisimétrica. Para ver esto, nótese que \( a \leq b \) y \( b \leq a \) implica que \( a = b \). Los términos simétrica y antisimétrica no son opuestos, porque una relación puede tener ambas propiedades o carecer de ambas (ver Ejercicio 10). Una relación no puede ser simultáneamente simétrica y antisimétrica si contiene algún par de la forma \( (a, b) \) en el que \( a \neq b \).</p>

<p><strong>Observación:</strong> Aunque relativamente pocas de las \( 2^{n^2} \) relaciones en un conjunto con \( n \) elementos son simétricas o antisimétricas, como lo muestran argumentos de conteo, muchas relaciones importantes tienen una de estas propiedades. (Ver Ejercicio 49).</p>

<p><strong>EJEMPLO 10</strong> ¿Cuáles de las relaciones del Ejemplo 7 son simétricas y cuáles son antisimétricas?</p>

<p><strong>Solución:</strong> Las relaciones \( R_2 \) y \( R_3 \) son simétricas, porque en cada caso \( (b, a) \) pertenece a la relación siempre que \( (a, b) \) lo hace. Para \( R_2 \), lo único que hay que verificar es que tanto \( (2, 1) \) como \( (1, 2) \) están en la relación. Para \( R_3 \), es necesario verificar que tanto \( (1, 2) \) como \( (2, 1) \) pertenecen a la relación, y que \( (1, 4) \) y \( (4, 1) \) pertenecen a la relación. El lector debe verificar que ninguna de las otras relaciones es simétrica. Esto se hace encontrando un par \( (a, b) \) tal que está en la relación pero \( (b, a) \) no lo está.</p>

<p>\( R_4 \), \( R_5 \) y \( R_6 \) son todas antisimétricas. Para cada una de estas relaciones no existe un par de elementos \( a \) y \( b \) con \( a \neq b \) tal que tanto \( (a, b) \) como \( (b, a) \) pertenezcan a la relación. El lector debe verificar que ninguna de las otras relaciones es antisimétrica. Esto se hace encontrando un par \( (a, b) \) con \( a \neq b \) tal que \( (a, b) \) y \( (b, a) \) están ambos en la relación.</p>

<p><strong>EJEMPLO 11</strong> ¿Cuáles de las relaciones del Ejemplo 5 son simétricas y cuáles son antisimétricas?</p>

<p><strong>Solución:</strong> Las relaciones \( R_3 \), \( R_4 \) y \( R_6 \) son simétricas. \( R_3 \) es simétrica, pues si \( a = b \) o \( a = -b \), entonces \( b = a \) o \( b = -a \). \( R_4 \) es simétrica porque \( a = b \) implica que \( b = a \). \( R_6 \) es simétrica porque \( a + b \leq 3 \) implica que \( b + a \leq 3 \). El lector debe verificar que ninguna de las otras relaciones es simétrica.</p>

<p>Las relaciones \( R_1 \), \( R_2 \), \( R_4 \) y \( R_5 \) son antisimétricas. \( R_1 \) es antisimétrica porque las desigualdades \( a \leq b \) y \( b \leq a \) implican que \( a = b \). \( R_2 \) es antisimétrica porque es imposible que \( a > b \) y \( b > a \). \( R_4 \) es antisimétrica porque dos elementos están relacionados respecto de \( R_4 \) si y solo si son iguales. \( R_5 \) es antisimétrica porque es imposible que \( a = b + 1 \) y \( b = a + 1 \). El lector debe verificar que ninguna de las otras relaciones es antisimétrica.</p>

<p><strong>EJEMPLO 12</strong> ¿Es la relación "divide" en el conjunto de los enteros positivos simétrica? ¿Es antisimétrica?</p>

<p><strong>Solución:</strong> Esta relación no es simétrica porque \( 1 \mid 2 \), pero \( 2 \nmid 1 \). Sin embargo, es antisimétrica. Para ver esto, nótese que si \( a \) y \( b \) son enteros positivos con \( a \mid b \) y \( b \mid a \), entonces \( a = b \) (la verificación de esto se deja como ejercicio para el lector).</p>

<p>Sea \( R \) la relación que consiste en todos los pares \( (x, y) \) de estudiantes de tu escuela, donde \( x \) ha tomado más créditos que \( y \). Supón que \( x \) está relacionado con \( y \) y \( y \) está relacionado con \( z \). Esto significa que \( x \) ha tomado más créditos que \( y \) y \( y \) ha tomado más créditos que \( z \). Podemos concluir que \( x \) ha tomado más créditos que \( z \), por lo que \( x \) está relacionado con \( z \). Lo que hemos mostrado es que \( R \) tiene la propiedad transitiva, que se define de la siguiente manera.</p>

    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <strong>parentesis</strong>
    <p>✅ La relación \( \{ (a,b) \mid a \leq b \} \) es antisimétrica.</p>

<p><strong>Nota importante:</strong></p>

<p>No es simétrica, porque por ejemplo:</p>

<p>\( (3,5) \in R \) (ya que \( 3 \leq 5 \)).</p>

<p>Pero \( (5,3) \notin R \) (porque \( 5 \leq 3 \) es falso).</p>
    <hr>
    <p><strong>Definición 5</strong> Una relación \( R \) en un conjunto \( A \) se llama <em>transitiva</em> si siempre que \( (a, b) \in R \) y \( (b, c) \in R \), entonces \( (a, c) \in R \), para todos \( a, b, c \in A \).</p>

<p><strong>Observación:</strong> Usando cuantificadores, vemos que la relación \( R \) en un conjunto \( A \) es transitiva si tenemos:</p>

<p>\[
\forall a \forall b \forall c \big( ((a, b) \in R \land (b, c) \in R) \rightarrow (a, c) \in R \big).
\]</p>

<p><strong>EJEMPLO 13</strong> ¿Cuáles de las relaciones en el Ejemplo 7 son transitivas?</p>

<p><strong>Solución:</strong> \( R_4 \), \( R_5 \) y \( R_6 \) son transitivas. Para cada una de estas relaciones, podemos mostrar que es transitiva verificando que si \( (a, b) \) y \( (b, c) \) pertenecen a esta relación, entonces \( (a, c) \) también pertenece. Por ejemplo, \( R_4 \) es transitiva, porque \( (3, 2) \) y \( (2, 1) \), \( (4, 2) \) y \( (2, 1) \), \( (4, 3) \) y \( (3, 1) \), y \( (4, 3) \) y \( (3, 2) \) son los únicos conjuntos de pares de este tipo, y \( (3, 1) \), \( (4, 1) \) y \( (4, 2) \) pertenecen a \( R_4 \). El lector debe verificar que \( R_5 \) y \( R_6 \) son transitivas.</p>

<p>\( R_1 \) no es transitiva porque \( (3, 4) \) y \( (4, 1) \) pertenecen a \( R_1 \), pero \( (3, 1) \) no pertenece. \( R_2 \) no es transitiva porque \( (2, 1) \) y \( (1, 2) \) pertenecen a \( R_2 \), pero \( (2, 2) \) no pertenece. \( R_3 \) no es transitiva porque \( (4, 1) \) y \( (1, 2) \) pertenecen a \( R_3 \), pero \( (4, 2) \) no pertenece.</p>

<p><strong>EJEMPLO 14</strong> ¿Cuáles de las relaciones en el Ejemplo 5 son transitivas?</p>

<p><strong>Solución:</strong> Las relaciones \( R_1 \), \( R_2 \), \( R_3 \) y \( R_4 \) son transitivas. \( R_1 \) es transitiva porque \( a \leq b \) y \( b \leq c \) implican que \( a \leq c \). \( R_2 \) es transitiva porque \( a > b \) y \( b > c \) implican que \( a > c \). \( R_3 \) es transitiva porque \( a = \pm b \) y \( b = \pm c \) implican que \( a = \pm c \). \( R_4 \) es claramente transitiva, como el lector debe verificar. \( R_5 \) no es transitiva porque \( (2, 1) \) y \( (1, 0) \) pertenecen a \( R_5 \), pero \( (2, 0) \) no pertenece. \( R_6 \) no es transitiva porque \( (2, 1) \) y \( (1, 2) \) pertenecen a \( R_6 \), pero \( (2, 2) \) no pertenece.</p>

<p><strong>EJEMPLO 15</strong> ¿Es la relación "divide" en el conjunto de los enteros positivos transitiva?</p>

<p><strong>Solución:</strong> Supongamos que \( a \) divide a \( b \) y \( b \) divide a \( c \). Entonces existen enteros positivos \( k \) y \( l \) tales que \( b = ak \) y \( c = bl \). Por lo tanto, \( c = a(kl) \), así que \( a \) divide a \( c \). Se sigue que esta relación es transitiva.</p>

<p>Podemos usar técnicas de conteo para determinar el número de relaciones con propiedades específicas. Encontrar el número de relaciones con una propiedad particular proporciona información sobre cuán común es esta propiedad en el conjunto de todas las relaciones en un conjunto con \( n \) elementos.</p>

<p><strong>EJEMPLO 16</strong> ¿Cuántas relaciones reflexivas hay en un conjunto con \( n \) elementos?</p>

<p><strong>Solución:</strong> Una relación \( R \) en un conjunto \( A \) es un subconjunto de \( A \times A \). En consecuencia, una relación se determina especificando si cada uno de los \( n^2 \) pares ordenados en \( A \times A \) está en \( R \). Sin embargo, si \( R \) es reflexiva, cada uno de los \( n \) pares ordenados \( (a, a) \) para \( a \in A \) debe estar en \( R \). Cada uno de los otros \( n(n-1) \) pares ordenados de la forma \( (a, b) \), donde \( a \neq b \), puede o no estar en \( R \). Por lo tanto, por la regla del producto para contar, hay \( 2^{n(n-1)} \) relaciones reflexivas (esta es la cantidad de formas de decidir si cada elemento \( (a, b) \) con \( a \neq b \) pertenece a \( R \)).</p>

<p>Las fórmulas para el número de relaciones simétricas y el número de relaciones antisimétricas en un conjunto con \( n \) elementos pueden encontrarse usando razonamientos similares a los del Ejemplo 16 (ver Ejercicio 49). Sin embargo, no se conoce una fórmula general que cuente las relaciones transitivas en un conjunto con \( n \) elementos. Actualmente, \( T(n) \), el número de relaciones transitivas en un conjunto con \( n \) elementos, solo es conocido para \( 0 \leq n \leq 18 \). Por ejemplo, \( T(4) = 3,994 \), \( T(5) = 154,303 \), y \( T(6) = 9,415,189 \). (Los valores de \( T(n) \) para \( n = 0, 1, 2, \dots, 18 \), son los términos de la secuencia A006905 en la OEIS, la cual se discute en la Sección 2.4.)</p>





    <h3>9.1.5 Combinación de Relaciones</h3>

<p>Como las relaciones de \( A \) a \( B \) son subconjuntos de \( A \times B \), dos relaciones de \( A \) a \( B \) pueden combinarse de cualquier forma en que dos conjuntos pueden combinarse. Consideremos los Ejemplos 17–19.</p>

<p><strong>EJEMPLO 17</strong> Sea \( A = \{1, 2, 3\} \) y \( B = \{1, 2, 3, 4\} \). Las relaciones \( R_1 = \{(1,1), (2,2), (3,3)\} \) y \( R_2 = \{(1,1), (1,2), (1,3), (1,4)\} \) pueden combinarse para obtener:</p>

<p>\[
R_1 \cup R_2 = \{(1,1), (1,2), (1,3), (1,4), (2,2), (3,3)\},
\]</p>

<p>\[
R_1 \cap R_2 = \{(1,1)\},
\]</p>

<p>\[
R_1 - R_2 = \{(2,2), (3,3)\},
\]</p>

<p>\[
R_2 - R_1 = \{(1,2), (1,3), (1,4)\}.
\]</p>

<p><strong>EJEMPLO 18</strong> Sean \( A \) y \( B \) el conjunto de todos los estudiantes y el conjunto de todos los cursos en una escuela, respectivamente. Supongamos que \( R_1 \) consiste en todos los pares ordenados \( (a, b) \), donde \( a \) es un estudiante que ha tomado el curso \( b \), y que \( R_2 \) consiste en todos los pares ordenados \( (a, b) \), donde \( a \) es un estudiante que necesita el curso \( b \) para graduarse. ¿Cuáles son las relaciones \( R_1 \cup R_2 \), \( R_1 \cap R_2 \), \( R_1 \oplus R_2 \), \( R_1 - R_2 \) y \( R_2 - R_1 \)?</p>

<p><strong>Solución:</strong> La relación \( R_1 \cup R_2 \) consiste en todos los pares ordenados \( (a, b) \), donde \( a \) es un estudiante que ha tomado el curso \( b \) o necesita el curso \( b \) para graduarse. \( R_1 \cap R_2 \) es el conjunto de todos los pares ordenados \( (a, b) \), donde \( a \) es un estudiante que ha tomado el curso \( b \) y necesita este curso para graduarse.</p>

<p>Además, \( R_1 \oplus R_2 \) consiste en todos los pares ordenados \( (a, b) \), donde el estudiante \( a \) ha tomado el curso \( b \) pero no lo necesita para graduarse o necesita el curso \( b \) para graduarse pero no lo ha tomado. \( R_1 - R_2 \) es el conjunto de pares ordenados \( (a, b) \), donde \( a \) ha tomado el curso \( b \) pero no lo necesita para graduarse; es decir, \( b \) es un curso electivo que \( a \) ha tomado. \( R_2 - R_1 \) es el conjunto de todos los pares ordenados \( (a, b) \), donde \( b \) es un curso que \( a \) necesita para graduarse pero que no ha tomado.</p>

<p><strong>EJEMPLO 19</strong> Sea \( R_1 \) la relación “menor que” en el conjunto de los números reales y sea \( R_2 \) la relación “mayor que” en el conjunto de los números reales, es decir, \( R_1 = \{(x,y) \mid x < y\} \) y \( R_2 = \{(x,y) \mid x > y\} \). ¿Cuáles son \( R_1 \cup R_2 \), \( R_1 \cap R_2 \), \( R_1 - R_2 \), \( R_2 - R_1 \) y \( R_1 \oplus R_2 \)?</p>

<p><strong>Solución:</strong> Observamos que \( (x,y) \in R_1 \cup R_2 \) si y solo si \( (x,y) \in R_1 \) o \( (x,y) \in R_2 \). Por lo tanto, \( (x,y) \in R_1 \cup R_2 \) si y solo si \( x < y \) o \( x > y \). Como la condición \( x < y \) o \( x > y \) es equivalente a \( x \neq y \), se sigue que:</p>

<p>\[
R_1 \cup R_2 = \{(x,y) \mid x \neq y\}.
\]</p>

<p>En otras palabras, la unión de la relación "menor que" y la relación "mayor que" es la relación "distinto de".</p>

<p>A continuación, notamos que es imposible que un par \( (x,y) \) pertenezca a la vez a \( R_1 \) y \( R_2 \), porque es imposible que \( x < y \) y \( x > y \). Por lo tanto:</p>

<p>\[
R_1 \cap R_2 = \emptyset.
\]</p>

    
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
