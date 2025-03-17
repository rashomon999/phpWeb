<?php
 
 
$respuesta_1 = ''; $respuesta_2 = ''; $respuesta_3 = ''; $respuesta_4 = ''; $respuesta_5 = ''; 
$respuesta_6 = ''; $respuesta_7 = ''; $respuesta_8 = ''; $respuesta_9 = '';  $respuesta_10 = '';


$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = ''; $verificar_4 = ''; $verificar_5 = ''; 
$verificar_6 = ''; $verificar_7 = '';  $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = ''; 
 
 
if ($_POST) {
   // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'tangente') {
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'r') {
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

      // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '6.37 x 10^6') {
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === '420') {
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Unidades</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <style>
        .input-table td {
            padding: 10px;
            text-align: center;
        }
        .input-cell input {
            width: 100%;
        }
        .error-message {
            color: red;
            font-size: 0.9em;
        }
        .success-message {
            color: green;
            font-size: 0.9em;
        }
    </style>

<script>


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
    En geometría, una 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>">
    es una línea que toca un círculo (o esfera) en un único punto, sin cortarlo.
    <br><br>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button> <br>
    <span><?php echo $verificar_1; ?></span>
    <br>
    En el punto donde la 
    <input type="text" name="" id="" value="<?php echo $respuesta_1; ?>" readonly>
    toca la superficie del círculo, siempre forma un ángulo recto (90)
    con el radio que pasa por ese punto.
    <hr>
    <br>
    <img src="..\img\Captura de pantalla 2024-12-19 085921.png" alt=""> <br>
    cual es la letra que representa la linea tangente: <br><br>
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>">
    <br><br>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button> <br>
    <span><?php echo $verificar_2; ?></span>
    <hr> <br><br>
    <p>
    usar la trigonometría y el teorema de Pitágoras para de estos casos. 
    Examinando el diagrama en la figura, encontramos que: <br>
    \( r^2 + R^2   = ( R + h)^2. \) <br>
    despejando ry resolviendo: <br><br>
    \( r = \sqrt{2hR+h^2} \)
    </p>
    </form>
</div>
<div class="seccion derecha">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)">
    observe el problema: <br><br>
    <p>
    ¿Cuál es la distancia máxima
desde la que un marinero en la
punta de un mástil del barco
1, quien está a 34 m arriba de
la superficie del mar puede ver
a otro marinero que está en la
punta de un mástil del barco
2, a 26 m sobre la superficie
del mar? 
    </p>
    <br><br>
    solo habria que reemplzar h=34 en  \( r = \sqrt{2hR+h^2} \). <br>
    entonces, se desprecia la altura del otro marinero, parece que si, imagenese  usted mirando 
    a dos metros  del balcon del apartamento, solo ve el horizonte, entonces, no seria posible ver 
    un palo saliendo horizontalmente del apartamente de abajo. la idea de lo anterior es ilustrar como 
    la curvatura desprecia la altura del otro marinero. <br><br>
    <hr>
    <br>
    <p>
    Como el problema pregunta “¿qué tan lejos?”, la respuesta tiene que ser una distancia, que tiene la dimensión de longitud y, por lo tanto, la unidad
    básica es el metro
    </p>
    por esta razon para utilizar en la formula de r a R, debemos hallar su valor en metros, 
    El valor aceptado para el radio de la Tierr es 6370 km, entonces: 
    (recuerde que se realiza la operacion con potencia de 10, factor entre 0 y 10 ) <br><br>
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>"> <br>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button> <br>
    <span><?php echo $verificar_3; ?></span>
    <hr> <br>
     



    <h3>PROBLEMA</h3>
<p>Si el radio de un cilindro aumenta por un factor de 2.73, ¿por qué factor cambia el volumen? Suponga que la altura del cilindro permanece constante.</p>

<h3>SOLUCIÓN</h3>
<p>La fórmula que conecta el volumen de un cilindro, <code>V</code>, y el radio, <code>r</code>, es:</p>
<div class="formula">
    V = π r² h
</div>
<p>Por la manera en que se expresa el problema, <code>V</code> es la cantidad dependiente y <code>r</code> es el parámetro del que depende. La altura del cilindro, <code>h</code>, también aparece en la ecuación, pero permanece constante, de acuerdo con el enunciado del problema.</p>

<p>Siguiendo el lineamiento general de resolución de problemas, escribimos la ecuación dos veces, una vez con los subíndices 1 y otra con los subíndices 2:</p>
<div class="formula">
    V₁ = π r₁² h <br>
    V₂ = π r₂² h
</div>

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
