<?php
// Variables para las preguntas
$pregunta_1 = $pregunta_2 = $pregunta_3 = $pregunta_4 = $pregunta_5 = 
$pregunta_6 = $pregunta_7 = $pregunta_8 = $text1 = $text2 = 
$grado_num = $grado_den = $respuesta_limite = '';

// Variables para verificar las respuestas
$verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = $verificar_5 = 
$verificar_6 = $verificar_7 = $verificar_8 = $verificar_t1 = $verificar_t2 = 
$verificar_grados = $verificar_limite = '';

$mostrar_solucion = '';

// Procesar el formulario cuando se envía
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {  
        // Establecer todas las verificaciones como correctas
        $verificar_1 = "Correcto: Línea recta inclinada con pendiente positiva.";
        $verificar_2 = "Correcto: Línea recta desplazada hacia arriba.";
        $verificar_3 = "Correcto..";
        $verificar_4 = "Correcto..";
        $verificar_5 = "Correcto..";
        $verificar_6 = "Correcto..";
        $verificar_7 = "Correcto..";
        $verificar_8 = "Correcto..";
        $verificar_t1 = "correcto";
        $verificar_t2 = "correcto";
        $verificar_grados = "Correcto: Existe una asíntota horizontal.";
        $verificar_limite = "Correcto: Usamos el límite cuando \( x \\to \infty \).";
        
        // Establecer los valores correctos en las respuestas
        $pregunta_1 = 'opcion_1';
        $pregunta_2 = 'opcion_3';
        $pregunta_3 = 'opcion_3';
        $pregunta_4 = 'opcion_2';
        $pregunta_5 = 'opcion_1';
        $pregunta_6 = 'cocientes';
        $pregunta_7 = '\frac{3}{2}';
        $pregunta_8 = '0';
        $text1 = 'denominador';
        $text2 = 'cero';
        $grado_num = "igual";
        $grado_den = "igual";
        $respuesta_limite = "límite";
    } else {
        // Procesamiento normal cuando no se solicita mostrar soluciones
        
        // Validar pregunta 1
        $pregunta_1 = isset($_POST['pregunta_1']) ? $_POST['pregunta_1'] : '';
        if ($pregunta_1 === 'opcion_1') {
            $verificar_1 = "Correcto: Línea recta inclinada con pendiente positiva.";
        } elseif ($pregunta_1 === 'opcion_2' || $pregunta_1 === 'opcion_3' ) {
            $verificar_1 = "Incorrecto.";
        } else {
            $verificar_1 = "";
        }

        // Validar pregunta 2
        $pregunta_2 = isset($_POST['pregunta_2']) ? $_POST['pregunta_2'] : '';
        if ($pregunta_2 === 'opcion_3') {
            $verificar_2 = "Correcto: Línea recta desplazada hacia arriba.";
        } elseif ($pregunta_2 === 'opcion_2' || $pregunta_2 === 'opcion_1') {
            $verificar_2 = "Incorrecto.";
        } else {
            $verificar_2 = "";
        }

        // Validar pregunta 3
        $pregunta_3 = isset($_POST['pregunta_3']) ? $_POST['pregunta_3'] : '';
        if ($pregunta_3 === 'opcion_3') {
            $verificar_3 = "Correcto..";
        } elseif ($pregunta_3 === 'opcion_2' || $pregunta_3 === 'opcion_1') {
            $verificar_3 = "Incorrecto.";
        } else {
            $verificar_3 = " ";
        }

        // Validar pregunta 4
        $pregunta_4 = isset($_POST['pregunta_4']) ? $_POST['pregunta_4'] : '';
        if ($pregunta_4 === 'opcion_2') {
            $verificar_4 = "Correcto..";
        } elseif ($pregunta_4 === 'opcion_3' || $pregunta_4 === 'opcion_1') {
            $verificar_4 = "Incorrecto.";
        } else {
            $verificar_4 = " ";
        }

        $pregunta_5 = isset($_POST['pregunta_5']) ? $_POST['pregunta_5'] : '';
        if ($pregunta_5 === 'opcion_1') {
            $verificar_5 = "Correcto..";
        } elseif ($pregunta_5 === 'opcion_3' || $pregunta_5 === 'opcion_2') {
            $verificar_5 = "Incorrecto.";
        } else {
            $verificar_5 = " ";
        }

        $pregunta_6 = isset($_POST['pregunta_6']) ? $_POST['pregunta_6'] : '';
        if ($pregunta_6 === 'cocientes') {
            $verificar_6 = "Correcto..";
        } elseif ($pregunta_6 === '' ) {
            $verificar_6 = "";
        } else {
            $verificar_6 = "incorrecto";
        }

        $pregunta_7 = isset($_POST['pregunta_7']) ? $_POST['pregunta_7'] : '';
        if ($pregunta_7 === '\frac{3}{2}') {
            $verificar_7 = "Correcto..";
        } elseif ($pregunta_7 === '' ) {
            $verificar_7 = "";
        } else {
            $verificar_7 = "incorrecto";
        }

        $pregunta_8 = isset($_POST['pregunta_8']) ? $_POST['pregunta_8'] : '';
        if ($pregunta_8 === '0' || $pregunta_8 === 'cero') {
            $verificar_8 = "Correcto..";
        } elseif ($pregunta_8 === '' ) {
            $verificar_8 = "";
        } else {
            $verificar_8 = "incorrecto";
        }

        $text1 = isset($_POST['text1']) ? $_POST['text1'] : '';
        if ($text1 === 'denominador') {
            $verificar_t1 = "correcto";
        } elseif ($text1 === '') {
            $verificar_t1 = '';
        } else {
            $verificar_t1 = "incorrecto";
        }

        $text2 = isset($_POST['text2']) ? $_POST['text2'] : '';
        if ($text2 === 'cero') {
            $verificar_t2 = "correcto";
        } elseif ($text2 === '') {
            $verificar_t2 = '';
        } else {
            $verificar_t2 = "incorrecto";
        }

        $grado_num = isset($_POST['grado_num']) ? $_POST['grado_num'] : '';
        $grado_den = isset($_POST['grado_den']) ? $_POST['grado_den'] : '';
        if ($grado_num === "igual" && $grado_den === "igual") {
            $verificar_grados = "Correcto: Existe una asíntota horizontal.";
        } elseif ($grado_num === "menor" && $grado_den === "mayor") {
            $verificar_grados = "Correcto: Existe una asíntota horizontal.";
        } else {
            $verificar_grados = "Incorrecto: Revisa las condiciones.";
        }

        $respuesta_limite = isset($_POST['respuesta_limite']) ? strtolower(trim($_POST['respuesta_limite'])) : '';
        if ($respuesta_limite === "límite" || $respuesta_limite === "limite") {
            $verificar_limite = "Correcto: Usamos el límite cuando \( x \\to \infty \).";
        } else {
            $verificar_limite = "Incorrecto: La respuesta correcta es 'límite'.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Matemáticas - Gráficos</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
    height: 270vh;
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
    <h1 class="text-center">Formulario de Gráficos</h1>
        <form action="./index.php" method="POST" onsubmit="handleSubmit(event)">
            <!-- Pregunta 1 -->
            <div class="question-container">
                <h3>¿Cuál es el gráfico correcto para \( f(x) = x \) ?</h3>
                <img src="../../img/Captura de pantalla 2024-12-06 124413.png"  class="imagen" height="300">
                <div>
                    <input type="radio" name="pregunta_1" value="opcion_1"> Opción 1: Línea recta inclinada con pendiente positiva.
                    <br>
                    <input type="radio" name="pregunta_1" value="opcion_2"> Opción 2: Curva parabólica.
                    <br>
                    <input type="radio" name="pregunta_1" value="opcion_3"> Opción 3: Línea horizontal.
                    <br>
                    <button type="submit" class="btn btn-success">Enviar Respuestas</button>
                    <p>Resultado: <?php echo $verificar_1; ?></p>

                </div>
            </div>

            <!-- Pregunta 2 -->
            <div class="question-container">
                <h3>¿Cuál es el gráfico mostrado ?</h3>
                <img src="../../img/Captura de pantalla 2024-12-06 131048.png"  class="imagen">
                <div>
                    <input type="radio" name="pregunta_2" value="opcion_1">  f(x) = x - 2 
                    <br>
                    <input type="radio" name="pregunta_2" value="opcion_2"> f(x) = x + 1 
                    <br>
                    <input type="radio" name="pregunta_2" value="opcion_3">  f(x) = x + 2 
                    <br>
                    <button type="submit" class="btn btn-success">Enviar Respuestas</button>
                    <p>Resultado: <?php echo $verificar_2; ?></p>
                </div>
            </div>

            <!-- Pregunta 3 -->
            <div class="question-container">
                <h3>Cual es el grafico mostrado? </h3>
                <img src="../../img/Captura de pantalla 2024-12-06 133555.png"  class="imagen">
                <div>
                    <input type="radio" name="pregunta_3" value="opcion_1"> f(x) = 3 + 2x
                    <br>
                    <input type="radio" name="pregunta_3" value="opcion_2"> f(x) = x + 3
                    <br>
                    <input type="radio" name="pregunta_3" value="opcion_3"> f(x) = x - 3
                    <br>
                    <button type="submit" class="btn btn-success">Enviar Respuestas</button>
                    <p>Resultado: <?php echo $verificar_3; ?></p>
                </div>
            </div>

             
        <hr>
        </form>
    </div>

    <div class="seccion derecha"  method="POST" onsubmit="handleSubmit(event)">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)">
        Que tipo de funcion es \( f(x) = \frac{x}{2} \):
        <div>
                    <input type="radio" name="pregunta_4" value="opcion_1"> cuadratica
                    <br>
                    <input type="radio" name="pregunta_4" value="opcion_2"> lineal
                    <br>
                    <input type="radio" name="pregunta_4" value="opcion_3"> racional
                    <br>
                    <button type="submit" class="btn btn-success">Enviar Respuestas</button>
                    <p>Resultado: <?php echo $verificar_4; ?></p>
                    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Pista</button>
    
                    <p id="mensaje" style="display:none;">es como si \( f(x) = \frac{1}{2}x \)</p>
        </div>

        <br><br>
        Que funcion es esta: 
        <img src="../../img/Captura de pantalla 2024-12-16 192504.png" alt="" width="500"> <br>
        <input type="radio" name="pregunta_5" value="opcion_1"> racional
                    <br>
        <input type="radio" name="pregunta_5" value="opcion_2"> cuadratica
                    <br>
        <input type="radio" name="pregunta_5" value="opcion_3"> lineal
                    <br>
        <button type="submit" class="btn btn-success">Enviar Respuestas</button>
                    <p>Resultado: <?php echo $verificar_5; ?></p>
        
        <hr>
        <br>
        Asintotas verticales de funciona racional: cuando el 
        <input type="text" name="text1" id="" value=<?php echo  $text1  ?>>
        es
        <input type="text" name="text2" id="" value=<?php echo  $text2  ?>>
        <br><br>
        <button type="submit">enviar</button>
        <?php echo $verificar_t1 ?>
        <?php echo $verificar_t2 ?>
        <hr>


        <br>
        Dos soluciones
        <br>
        Asíntotas horizontales de una función racional:  
        El comportamiento depende de la relación entre el grado del numerador y el grado del denominador:  
        - Escribe el caso en el que **sí existe una asíntota horizontal**.  
        <br>
        Grado del numerador:  
        <input type="text" name="grado_num" id="" value="<?php echo $grado_num; ?>">  
        <br>
        Grado del denominador:  
        <input type="text" name="grado_den" id="" value="<?php echo $grado_den; ?>">  
        <br><br>
        <button type="submit">Enviar</button>  
        <?php echo $verificar_grados; ?>  





        <hr>
        <br>
        Otra manera de determinar la asíntota horizontal de una función racional es calcular el __________ de la función cuando \( x \to \infty \).  
        <br>
        <input type="text" name="respuesta_limite" value="<?php echo $respuesta_limite; ?>">  
        <br><br>
        <button type="submit">Enviar</button>  
        <?php echo $verificar_limite; ?>  
        <hr>
        en una función racional, la asíntota horizontal se encuentra comparando los 
        <input type="text" name="pregunta_6" id="" value=<?php echo $pregunta_6 ?>>
        de los términos de mayor exponente de cada polinomio. <br>
        <button type="submit">enviar</button> 
        <?php echo $verificar_6 ?>
        <br>
        <hr>
        Ingrese el resultado de: <br><br>
        \( f(x) = \frac{3x^2 + 5x + 1}{2x^2 - 4x + 7} \) <br>
        <input type="text" name="pregunta_7" id="" value=<?php echo $pregunta_7  ?>>
        <button type="submit">enviar</button> 
        <?php echo $verificar_7 ?>
        <br>
        <hr>
        cuando el numerador es menor al denominador, cual es el valor de la asintota horizontal de la 
        funcion racional: <br>
        <input type="text" name="pregunta_8" id="" value=<?php echo $pregunta_8  ?>>
        <button type="submit">enviar</button> 
        <?php echo $verificar_8 ?>
        <hr>
      <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
        
    </form>
    </div>

    <div class="centered-container">
       
        <a
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
