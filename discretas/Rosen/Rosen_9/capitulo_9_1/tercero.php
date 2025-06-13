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
    <p>También vemos que:</p>

<p>\[
R_1 - R_2 = R_1, \quad R_2 - R_1 = R_2,
\]</p>

<p>y</p>

<p>\[
R_1 \oplus R_2 = R_1 \cup R_2 - R_1 \cap R_2 = \{(x,y) \mid x \neq y\}.
\]</p>

<h3>Otra forma de combinar relaciones: Composición</h3>

<p><strong>Definición 6</strong> Sea \( R \) una relación de un conjunto \( A \) a un conjunto \( B \) y \( S \) una relación de \( B \) a un conjunto \( C \). La <em>composición</em> de \( R \) y \( S \) es la relación que consiste en los pares ordenados \( (a, c) \), donde \( a \in A \), \( c \in C \), y existe un elemento \( b \in B \) tal que \( (a, b) \in R \) y \( (b, c) \in S \). Denotamos la composición de \( R \) y \( S \) por \( S \circ R \).</p>

    <p>Calcular la composición de dos relaciones requiere que encontremos elementos que son el segundo elemento de pares ordenados en la primera relación y el primer elemento de pares ordenados en la segunda relación, como ilustran los Ejemplos 20 y 21.</p>

<p><strong>EJEMPLO 20</strong> ¿Cuál es la composición de las relaciones \( R \) y \( S \), donde \( R \) es la relación de \( \{1, 2, 3\} \) a \( \{1, 2, 3, 4\} \) con:</p>

<p>\[
R = \{(1,1), (1,4), (2,3), (3,1), (3,4)\}
\]</p>

<p>y \( S \) es la relación de \( \{1, 2, 3, 4\} \) a \( \{0, 1, 2\} \) con:</p>

<p>\[
S = \{(1,0), (2,0), (3,1), (3,2), (4,1)\}?
\]</p>

<p><strong>Solución:</strong> \( S \circ R \) se construye usando todos los pares ordenados en \( R \) y los pares ordenados en \( S \), donde el segundo elemento del par ordenado en \( R \) coincide con el primer elemento del par ordenado en \( S \). Por ejemplo, los pares ordenados \( (2, 3) \) en \( R \) y \( (3, 1) \) en \( S \) producen el par ordenado \( (2, 1) \) en \( S \circ R \).</p>

<p>Al calcular todos los pares ordenados en la composición, encontramos que:</p>

<p>\[
S \circ R = \{(1,0), (1,1), (2,1), (2,2), (3,0), (3,1)\}.
\]</p>

<p>La Figura 3 ilustra cómo se encuentra esta composición. En la figura, examinamos todos los caminos que viajan mediante dos aristas dirigidas desde los elementos más a la izquierda hasta los elementos más a la derecha a través de un elemento intermedio.</p>
    <img src="../../../../img/composicion.png" alt="">




    
<p><strong>EJEMPLO 21</strong> Componiendo la Relación de Padres Consigo Misma</p>

<p>Sea \( R \) la relación en el conjunto de todas las personas tal que \( (a, b) \in R \) si la persona \( a \) es padre de la persona \( b \). Entonces, \( (a, c) \in R \circ R \) si y sólo si existe una persona \( b \) tal que \( (a, b) \in R \) y \( (b, c) \in R \), es decir, si y sólo si existe una persona \( b \) tal que \( a \) es padre de \( b \) y \( b \) es padre de \( c \). En otras palabras, \( (a, c) \in R \circ R \) si y sólo si \( a \) es abuelo de \( c \). ◂</p>

<p>Los poderes de una relación \( R \) pueden definirse recursivamente a partir de la definición de la composición de dos relaciones.</p>

<p><strong>Definición 7</strong> Sea \( R \) una relación sobre el conjunto \( A \). Los poderes \( R^n \), con \( n = 1, 2, 3, \dots \), se definen recursivamente por:</p>

<p>\[
R^1 = R \quad \text{y} \quad R^{n+1} = R^n \circ R.
\]</p>

<p>La definición muestra que \( R^2 = R \circ R \), \( R^3 = R^2 \circ R = (R \circ R) \circ R \), y así sucesivamente.</p>

<p><strong>EJEMPLO 22</strong> Sea:</p>

<p>\[
R = \{(1, 1), (2, 1), (3, 2), (4, 3)\}.
\]</p>

<p>Encontrar los poderes \( R^n \), para \( n = 2, 3, 4, \dots \).</p>

<p><strong>Solución:</strong> Como \( R^2 = R \circ R \), encontramos que:</p>

<p>\[
R^2 = \{(1, 1), (2, 1), (3, 1), (4, 2)\}.
\]</p>

<p>Además, como \( R^3 = R^2 \circ R \), se tiene que:</p>

<p>\[
R^3 = \{(1, 1), (2, 1), (3, 1), (4, 1)\}.
\]</p>

<p>Un cálculo adicional muestra que \( R^4 \) es el mismo que \( R^3 \), por lo que:</p>

<p>\[
R^4 = \{(1, 1), (2, 1), (3, 1), (4, 1)\}.
\]</p>

<p>También se sigue que \( R^n = R^3 \) para \( n = 5, 6, 7, \dots \). El lector debe verificar esto. ◂</p>

<p>El siguiente teorema muestra que los poderes de una relación transitiva son subconjuntos de dicha relación. Se utilizará en la Sección 9.4.</p>

<p><strong>TEOREMA 1</strong> La relación \( R \) sobre un conjunto \( A \) es transitiva si y sólo si \( R^n \subseteq R \) para todo \( n = 1, 2, 3, \dots \).</p>

<p><strong>Demostración:</strong></p>

<p>Primero probaremos la parte “si” del teorema. Suponemos que \( R^n \subseteq R \) para \( n = 1, 2, 3, \dots \). En particular, \( R^2 \subseteq R \). Para ver que esto implica que \( R \) es transitiva, notemos que si \( (a, b) \in R \) y \( (b, c) \in R \), entonces por la definición de composición, \( (a, c) \in R^2 \). Como \( R^2 \subseteq R \), esto significa que \( (a, c) \in R \). Por lo tanto, \( R \) es transitiva.</p>

<p>Utilizaremos inducción matemática para probar la parte “sólo si” del teorema.</p>

<p>Observemos que esta parte del teorema es trivialmente cierta para \( n = 1 \).</p>

<p>Supongamos que \( R^n \subseteq R \), donde \( n \) es un entero positivo (hipótesis inductiva). Para completar el paso inductivo debemos mostrar que esto implica que \( R^{n+1} \subseteq R \).</p>

<p>Para demostrarlo, supongamos que \( (a, b) \in R^{n+1} \). Entonces, como \( R^{n+1} = R^n \circ R \), existe un elemento \( x \in A \) tal que \( (a, x) \in R \) y \( (x, b) \in R^n \). La hipótesis inductiva, es decir, que \( R^n \subseteq R \), implica que \( (x, b) \in R \). Además, como \( R \) es transitiva y \( (a, x) \in R \) y \( (x, b) \in R \), se sigue que \( (a, b) \in R \). Esto muestra que \( R^{n+1} \subseteq R \), completando la demostración.</p>

    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    
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
