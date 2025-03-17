<?php
// Variable para la primera pregunta
$verificar_1 = '';
$verificar_2 = '';
// Procesar el formulario cuando se envía
if ($_POST) {
    // Verificar la respuesta de la primera pregunta
    $primero = isset($_POST['primero']) ? $_POST['primero'] : '';

    if ($primero === '15') {
        $verificar_1 = "correcto";
    } elseif ($primero === '') {
        $verificar_1 = '';
    } else {
        $verificar_1 = "incorrecto";
    }

    // Verificar la respuesta de la segunda pregunta
    $segundo = isset($_POST['segundo']) ? $_POST['segundo'] : '';

    if ($segundo === 'verdad') {
        $verificar_2 = "correcto";
    } elseif ($segundo === '') {
        $verificar_2 = '';
    } else {
        $verificar_2 = "incorrecto";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre simplificación de expresiones matemáticas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
    .imagen {
        max-width: 100%;
        height: auto;
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
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}
</script>
</head>
<body>
<div class="seccion izquierda">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)">
        <img src="../img/Captura de pantalla 2024-12-04 192115.png" alt=""> <br><br>
        <img src="../img/Captura de pantalla 2024-12-05 154301.png" alt=""> <br>
        La particion, por ejemplo, de p6, queda con una longitud de n+1, {7 puntos}.

        Ahora tomemos por ejemplo a (4 - x^2), en esta grafica por ejemplo, los intervalos [2/3 ,0] y [0 ,2.3]
        siempre el 0 va a ser mayor buscando Mi, porque Mí es el valor de xi, es decir, la altura y esta grafica
        es concava hacia abajo. La conslucion de esto es que no es numero x mas grande, sino f(x) (altura).

        <br> <br>
        Un rectángulo circunscrito, que utiliza el valor máximo de 
        f(x) en el subintervalo.
        
        Un rectángulo inscrito, que utiliza el valor mínimo de 
        f(x) en el subintervalo.
        <br><br>
        <img src="../img/Captura de pantalla 2024-12-05 210257.png" alt=""> <br>
        Segun lo anterior, cual es el resultado de esta integral: <br> 
        <p>\[\int_0^5 3 \, dx =\]</p> <br>
        <input type="radio" name="primero" value="n" <?php echo ($verificar_1 === 'incorrecto') ? 'checked' : ''; ?>> 10<br>
        <input type="radio" name="primero" value="0" <?php echo ($verificar_1 === 'incorrecto') ? 'checked' : ''; ?>> 30<br>
        <input type="radio" name="primero" value="15" <?php echo ($verificar_1 === 'correcto') ? 'checked' : ''; ?>> 15<br>
        
        <button type="submit" class="btn btn-primary">Enviar respuestas</button>
        <p>Resultado: <?php echo $verificar_1; ?></p>
        la integral de una constante es la constante multipicada por el ancho del intervalo.
        <br>
       
        <br><br>
        Asi sacamos la integral en geogebra: Integral(f,x(A),x(B)). con A=(-π,cos(-π)) y B=(π,cos(π)).
        <br>
        <img src="../img/Captura de pantalla 2024-12-06 082056.png" alt="" width="600"> <br>
        Notese como la suma de las areas negativas se resta con la suma de las positivas, por lo que da 0.
        <br>
        Sí, se podría decir que, en las partes donde la función cos(x) es cóncava hacia arriba, los valores 
        más grandes se encuentran hacia la derecha del intervalo.
      
    </form>
</div>
<div class="seccion derecha">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)">
    Calcular una integral definida de una función 𝑓 en un intervalo [𝑎, 𝑏] usando sumas superiores e 
        inferiores, o incluso como el límite de las sumas de Riemann, es, salvo en los casos más simples,
        una tarea difícil. Como resultado, las integrales definidas casi nunca se calculan de esa manera.
        En la mayoría de los casos, las integrales definidas se evalúan utilizando el Teorema Fundamental
        del Cálculo o mediante técnicas de aproximación numérica. Abordaremos el enfoque del Teorema 
        Fundamental del Cálculo en la próxima sección; en esta sección consideraremos varios métodos para
        la aproximación numérica. <br>
        Aqui nos hablan de la similitud que pensabamos sobre upper y lower con left and right sums:
        <br>
        <img src="../img/Captura de pantalla 2024-12-07 081432.png" alt=""> <br>
        pensar en el ejemplo de una decreciente como 2 - x. para cada intervalo el de la izquierda es mayor.
        <br>
        <p>Lamamos a:</p>
    <p>
        $$ A_T = \frac{A_L + A_R}{2} $$
    </p>

    <p>la regla trapezoidal para aproximar la integral definida:</p>
    <p>
        $$ \int_a^b f(x) \, dx $$
    </p>
    <br>
    <img src="../img/Captura de pantalla 2024-12-07 165713.png" alt="">

    <br>
    <br>
    <img src="../img/Captura de pantalla 2024-12-07 170200.png" alt="">
    <br><br>
    4.3 El Teorema Fundamental del Cálculo
    Estamos listos para establecer la conexión largamente prometida entre la diferenciación
     y la integración, entre áreas y líneas tangentes. Veremos dos teoremas estrechamente relacionados, 
     ambos conocidos como el Teorema Fundamental del Cálculo. Llamaremos al primero de estos el 
     Teorema Fundamental del Cálculo Integral.
     <br>
     <img src="../img/Captura de pantalla 2024-12-08 161854.png" alt="">
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
