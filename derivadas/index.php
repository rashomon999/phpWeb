<?php
// Variables para las preguntas y valores del formulario
$verificar_1 = '';
$verificar_2 = '';
$verificar_3 = '';
$verificar_4 = '';
$verificar_5 = '';
$verificar_6 = '';
$verificar_7 = '';
$verificar_8 = '';
$verificar_9 = '';




$div1 = $div2 = $div3 = $div4 = $div5 = $div6 = '';

// Procesar el formulario cuando se envía
if ($_POST) {
    // Capturar las respuestas enviadas
    $div1 = isset($_POST['div1']) ? $_POST['div1'] : '';
    $div2 = isset($_POST['div2']) ? $_POST['div2'] : '';
    $div3 = isset($_POST['div3']) ? $_POST['div3'] : '';
    $div4 = isset($_POST['div4']) ? $_POST['div4'] : '';
    $div5 = isset($_POST['div5']) ? $_POST['div5'] : '';
    $div6 = isset($_POST['div6']) ? $_POST['div6'] : '';

    $div7 = isset($_POST['div7']) ? $_POST['div7'] : '';
    $div8 = isset($_POST['div8']) ? $_POST['div8'] : '';
    $div9 = isset($_POST['div9']) ? $_POST['div9'] : '';

    // Verificar la respuesta de la primera pregunta
    if ($div1 === 'x2') {
        $verificar_1 = "correcto";
    } elseif ($div1 === '') {
        $verificar_1 = '';
    } else {
        $verificar_1 = "incorrecto";
    }

    // Verificar la respuesta de la segunda pregunta
    if ($div2 === '-') {
        $verificar_2 = "correcto";
    } elseif ($div2 === '') {
        $verificar_2 = '';
    } else {
        $verificar_2 = "incorrecto";
    }

    if ($div3 === 'x1') {
        $verificar_3 = "correcto";
    } elseif ($div3 === '') {
        $verificar_3 = '';
    } else {
        $verificar_3 = "incorrecto";
    }

    if ($div4 === 'y2') {
        $verificar_4 = "correcto";
    } elseif ($div4 === '') {
        $verificar_4 = '';
    } else {
        $verificar_4 = "incorrecto";
    }

    if ($div5 === '-') {
        $verificar_5 = "correcto";
    } elseif ($div5 === '') {
        $verificar_5 = '';
    } else {
        $verificar_5 = "incorrecto";
    }

    if ($div6 === 'y1') {
        $verificar_6 = "correcto";
    } elseif ($div6 === '') {
        $verificar_6 = '';
    } else {
        $verificar_6 = "incorrecto";
    }

    if ($div7 === 'si') {
        $verificar_7 = "correcto";
    } elseif ($div7 === '') {
        $verificar_7 = '';
    } else {
        $verificar_7 = "incorrecto";
    }

    if ($div8 === 'correcto') {
        $verificar_8 = "correcto";
    } elseif ($div8 === 'incorrecto') {
        $verificar_8 = 'incorrecto';
    } else {
        $verificar_8 = "";
    }

    if ($div9 === 'correcto') {
        $verificar_9 = "correcto";
    } elseif ($div9 === 'incorrecto') {
        $verificar_9 = 'incorrecto';
    } else {
        $verificar_9 = "";
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
                })
                .catch(error => {
                    console.error('Error al enviar el formulario:', error);
                });
        }
    </script>
</head>
<body>
<div class="seccion izquierda">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)">
        Siempre que se realice o hable de derivada, debe tenerse en cuenta la fórmula por definición (lo esencial).
        <br>
        la derivada de una función en un punto se interpreta como la pendiente de la recta tangente a la curva en ese punto.
        La derivada en general nos dice como cambia la funcion en cualquier punto x.
        ej: f'(1)= pendiente de la recta tangente  en ese punto. 
        <br>
        f'(x) = (pendiente de recta tangente de x).
        lo que hace la derivada es tender la difernecia entre xi-1 y x a cero?
        <br>
        <br><br>
        indique la formula de razon de cambio entre 2 puntos de una recta. <br>
        <br>
        <input type="text" size="4" name="div1" value="<?php echo htmlspecialchars($div1); ?>"> 
        <input type="text" size="4" name="div2" value="<?php echo htmlspecialchars($div2); ?>">
        <input type="text" size="4" name="div3" value="<?php echo htmlspecialchars($div3); ?>">
                
        <hr style="width=40">

        <div class="input-container" style="margin=6px">
        <input type="text" size="4" name="div4" value="<?php echo htmlspecialchars($div4); ?>">
        <input type="text" size="4" name="div5" value="<?php echo htmlspecialchars($div5); ?>"> 
        <input type="text" size="4" name="div6" value="<?php echo htmlspecialchars($div6); ?>"> 
        <br> <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
        
        <?php echo !empty($verificar_1) ? $verificar_1 : ''; ?>
        <p>Resultado 1: <?php echo $verificar_1; ?>
        Resultado 2: <?php echo $verificar_2; ?></p>
        <p>Resultado 3: <?php echo $verificar_3; ?>
        Resultado 4: <?php echo $verificar_4; ?></p>
        <p>Resultado 5: <?php echo $verificar_5; ?>
        Resultado 6: <?php echo $verificar_6; ?></p>
        <br>
        <img src="../img/Captura de pantalla 2024-12-07 092158.png" alt=""> <br>
        Esta imagen trata de mostrar de una forma general, por eso no resta y2, ni x2. 
        <br><br>
        <img src="../img/Captura de pantalla 2024-12-07 092234.png" alt=""> <br><br>
        y: Representa cualquier punto en la recta, es una variable dependiente. Cambia a medida que 𝑥
        cambia y pertenece a la ecuación general de la recta.
        <br> <br>
        recordemos que hay muchas formas de expresar lo mismo, ej: <br>
        x − x<sub>i-1</sub> y 𝑥<sub>2</sub> - x<sub>1</sub> <br><br>
        <img src="../img/Captura de pantalla 2024-12-07 093540.png" alt="">
        <br>
        Un punto intermedio es lo mismo que punto medio?: <br> <br>
        <input type="radio" name="div7" value="si"  <?php  isset($verificar_7) && ($verificar_7 === 'si') ? 'checked' : ''; ?>>Si 
        <input type="radio" name="div7" value="no"  <?php  isset($verificar_7) && ($verificar_7 === 'no') ? 'checked' : ''; ?>>No <br>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <p><?php echo $verificar_7; ?> <br>
        Es decir, de esa formula deseamos conocer ese punto, que no es posible calcular con dos puntos o 
        a simple vista. La existencia de ese punto esta garantizada por el teorema del valor intermedio.
        <br><br>
        Esta pendiente es: <br>
        <img src="../img/Captura de pantalla 2024-12-07 111028.png" alt=""> <br>
        <input type="radio" name="div8" value="correcto"  <?php  isset($verificar_8) && ($verificar_8 === 'si') ? 'checked' : ''; ?>>recta tangente 
        <input type="radio" name="div8" value="incorrecto"  <?php  isset($verificar_8) && ($verificar_8 === 'no') ? 'checked' : ''; ?>>recta secante <br>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <p><?php echo $verificar_8; ?> <br>
        <br><br>
        <img src="../img/Captura de pantalla 2024-12-07 112101.png" alt="">
        <br>
        Es decir, en algún punto del intervalo (a,b), la pendiente de la recta tangente es igual a la 
        pendiente de la recta secante. 
         <br><br>
         se puede f '(c)=0. pero no tener maximo ni minimo? <br>
        <input type="radio" name="div9" value="incorrecto"  <?php  isset($verificar_9) && ($verificar_9 === 'no') ? 'checked' : ''; ?>>no 
        <input type="radio" name="div9" value="correcto"  <?php  isset($verificar_9) && ($verificar_9 === 'si') ? 'checked' : ''; ?>>si <br>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <?php echo $verificar_9; ?> 

        <input type="button" value="ayuda" 
           onmousedown="mostrarMensaje()" 
           onmouseup="ocultarMensaje()">

    <div id="mensaje"></div>

    <script>
        function mostrarMensaje() {
            const mensajeDiv = document.getElementById("mensaje");
            mensajeDiv.style.display = "block";
            mensajeDiv.textContent = "Este tipo de puntos se llaman puntos de inflexión horizontales.";
        }

        function ocultarMensaje() {
            const mensajeDiv = document.getElementById("mensaje");
            mensajeDiv.style.display = "none";
        }
    </script>

        <br><br>
        <img src="../img/Captura de pantalla 2024-12-07 142318.png" alt="" width="600">
        </div>
    </form>
</div>
<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)">
        <img src="../img/Captura de pantalla 2024-12-07 142534.png" alt="">
        En otras palabras, existe un punto donde la tasa de cambio instantánea 
        (pendiente de la tangente) es igual a la tasa de cambio promedio entre los dos 
        puntos finales del intervalo. <br>
        <img src="../img/Captura de pantalla 2024-12-07 143750.png" alt=""> <br>
        la aproximacion lineal (el nombre nos dice un poco)es una aproximacion a un x partiendo de la 
        pendiente y el valor de la funcion en ese punto, es decir, es una aproximacion del valor de una 
        funcion en base a una recta tangente.
        <img src="../img/Captura de pantalla 2024-12-07 144136.png" alt=""> <br>
        no tendria sentido aproximar 5 con la recta tangente en el punto 2 cierto, sino mas bien 2.1 <br>
        <img src="../img/Captura de pantalla 2024-12-07 145121.png" alt=""> <br>
        Esta imagen ilustra que para el teorema del valor medio, no tienen que ser rectas horizontales (pendiente 0).
        <br>
        <img src="../img/Captura de pantalla 2024-12-07 145407.png" alt="">
        <br><br>
        Explicacion puntos criticos: para que pase la pendiente de -2 a 2, entonces tiene que pasar por 0, es decir 
        para que la funcion cambie de creciente a decreciente o viceversa, debe pasar por un punto critico
    
        <br><br>
        <h1>Derivada y Puntos Críticos</h1>
        <p>
        Ya hemos calculado la derivada de la función <code>f(x) = x<sup>5</sup> - x<sup>3</sup></code>:<br>
        <code>f'(x) = 5x<sup>4</sup> - 3x<sup>2</sup> = x<sup>2</sup>(5x<sup>2</sup> - 3)</code>
    </p>
    <p>
        Y hemos encontrado que los puntos críticos (donde la derivada es cero) ocurren en:<br>
        <code>x = 0, ±√3/5</code>
    </p>
    <p>
        Estos puntos críticos son los puntos donde la pendiente de la tangente es cero, lo cual es necesario para un máximo o mínimo local (es decir, donde la función podría cambiar su dirección de crecimiento o decrecimiento).
    </p>
    <p>Los puntos críticos se encuentran en <code>x = -√3/5</code>, <code>x = 0</code>, y <code>x = √3/5</code>. Por lo tanto, dividimos la recta real en los siguientes intervalos:</p>
    <ul>
        <li><code>(-∞, -√3/5)</code></li>
        <li><code>(-√3/5, 0)</code></li>
        <li><code>(0, √3/5)</code></li>
        <li><code>(√3/5, ∞)</code></li>
    </ul>

    <h2>2. Evaluación de la Derivada en Cada Intervalo</h2>

    <div class="intervalo">
        <h3>Intervalo 1: <code>(-∞, -√3/5)</code></h3>
        <p>Evaluamos la derivada en un punto dentro del intervalo, por ejemplo, en <code>x = -1</code>.</p>
        <p><code>f'(-1) = 5(-1)<sup>4</sup> - 3(-1)<sup>2</sup> = 5(1) - 3(1) = 5 - 3 = 2</code></p>
        <p><strong>Conclusión:</strong> Como <code>f'(-1) > 0</code>, la función es creciente en el intervalo <code>(-∞, -√3/5)</code>.</p>
    </div>

    <div class="intervalo">
        <h3>Intervalo 2: <code>(-√3/5, 0)</code></h3>
        <p>Evaluamos la derivada en un punto dentro del intervalo, por ejemplo, en <code>x = -0.2</code>.</p>
        <p><code>f'(-0.2) = 5(-0.2)<sup>4</sup> - 3(-0.2)<sup>2</sup> = 5(0.0016) - 3(0.04) = 0.008 - 0.12 = -0.112</code></p>
        <p><strong>Conclusión:</strong> Como <code>f'(-0.2) < 0</code>, la función es decreciente en el intervalo <code>(-√3/5, 0)</code>.</p>
    </div>

    <div class="intervalo">
        <h3>Intervalo 3: <code>(0, √3/5)</code></h3>
        <p>Evaluamos la derivada en un punto dentro del intervalo, por ejemplo, en <code>x = 0.2</code>.</p>
        <p><code>f'(0.2) = 5(0.2)<sup>4</sup> - 3(0.2)<sup>2</sup> = 5(0.0016) - 3(0.04) = 0.008 - 0.12 = -0.112</code></p>
        <p><strong>Conclusión:</strong> Como <code>f'(0.2) < 0</code>, la función es decreciente en el intervalo <code>(0, √3/5)</code>.</p>
    </div>

    <div class="intervalo">
        <h3>Intervalo 4: <code>(√3/5, ∞)</code></h3>
        <p>Evaluamos la derivada en un punto dentro del intervalo, por ejemplo, en <code>x = 1</code>.</p>
        <p><code>f'(1) = 5(1)<sup>4</sup> - 3(1)<sup>2</sup> = 5(1) - 3(1) = 5 - 3 = 2</code></p>
        <p><strong>Conclusión:</strong> Como <code>f'(1) > 0</code>, la función es creciente en el intervalo <code>(√3/5, ∞)</code>.</p>
    </div>

    <h2>3. Conclusión Final</h2>

    En los intervalos <code>(-√3/5, 0)</code> y <code>(0, √3/5)</code>, la función es decreciente, sin un cambio alternante hacia creciente.
En los intervalos <code>(-∞, -√3/5)</code> y <code>(√3/5, ∞)</code>, la función es creciente, pero sin un cambio alternante hacia decreciente.
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
