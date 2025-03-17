<?php
// Variable para la primera pregunta
$verificar_1 = '';
$verificar_2 = '';
//
$verificar_3 = '';
$verificar_4 = '';
$verificar_5 = '';
//
$verificar_6 = '';
$verificar_7 = '';
$verificar_8 = '';
///dos tandas para input text
$pregunta_8 = "";
$pregunta_9 = "";
$pregunta_10 = "";
$pregunta_11 = "";
$pregunta_12 = "";
$pregunta_13 = "";
$pregunta_14 = "";
//
$verificar_8 = '';
$verificar_9 = '';
$verificar_10 = ''; 
$verificar_11 = ''; 
$verificar_12 = ''; 
$verificar_13 = ''; 
$verificar_14 = ''; 
//
$pregunta_20 = "";
$pregunta_21 = "";
$pregunta_22 = "";
$verificar_20 = ''; 
$verificar_21 = ''; 
$verificar_22 = ''; 
//
//
$verificar_23 = '';
$verificar_24 = '';
$verificar_25 = '';
$verificar_26 = '';
$verificar_27 = '';
$verificar_28 = '';
$verificar_29 = '';
$verificar_30 = '';
$verificar_31 = '';

$pregunta_23 = "";
$pregunta_24 = "";
$pregunta_25 = "";
$pregunta_26 = "";
$pregunta_27 = "";
$pregunta_28 = "";
$pregunta_29 = "";
$pregunta_30 = "";
$pregunta_31 = "";


// Procesar el formulario cuando se envía
if ($_POST) {
    // Verificar la respuesta de la primera pregunta
    $primero = isset($_POST['primero']) ? $_POST['primero'] : '';

    if ($primero === '') {
        $verificar_1 = "";
    } elseif ($primero === 'diverge') {
        $verificar_1 = 'correcto';
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

    $tercero = isset($_POST['tercero']) ? $_POST['tercero'] : '';

    if ($tercero === '1') {
        $verificar_3 = "correcto";
    } elseif ($tercero === '') {
        $verificar_3 = '';
    } else {
        $verificar_3 = "incorrecto";
    }

    // Verificar la respuesta de la cuarta pregunta
    $cuarto = isset($_POST['cuarto']) ? $_POST['cuarto'] : '';

    if ($cuarto === '') {
        $verificar_4 = "";
    } elseif ($cuarto === 'n') {
        $verificar_4 = 'correcto';
    } else {
        $verificar_4 = "incorrecto";
    }

    // Verificar la respuesta de la quinta pregunta
    $quinto = isset($_POST['quinto']) ? $_POST['quinto'] : '';

    if ($quinto === 'b-a/n') {
        $verificar_5 = "correcto";
    } elseif ($quinto === '') {
        $verificar_5 = '';
    } else {
        $verificar_5 = "incorrecto";
    }



    $sexto = isset($_POST['sexto']) ? $_POST['sexto'] : '';
    if ($sexto === '0') {
        $verificar_6 = 'correcto';
    } elseif ($sexto === '') {
        $verificar_6 = '';
    } else {
        $verificar_6 = "incorrecto";
    }
    
    $pregunta_8 = isset($_POST['pregunta_8']) ? $_POST['pregunta_8'] : '';
        if ($pregunta_8 === '') {
            $verificar_8 = "Respuesta vacía";
        } elseif ($pregunta_8 === 'x0') {
            $verificar_8 = "correcto";
        } else {
            $verificar_8 = "incorrecto";
        }
    
        $pregunta_9 = isset($_POST['pregunta_9']) ? $_POST['pregunta_9'] : '';
        if ($pregunta_9 === '') {
            $verificar_9 = "Respuesta vacía";
        } elseif ($pregunta_9 === 'Δx') {
            $verificar_9 = "correcto";
        } else {
            $verificar_9 = "incorrecto";
        }

        $pregunta_10 = isset($_POST['pregunta_10']) ? $_POST['pregunta_10'] : '';
        if ($pregunta_10 === '') {
            $verificar_10 = "Respuesta vacía";
        } elseif ($pregunta_10 === '𝑎 + Δx') {
            $verificar_10 = "correcto";
        } else {
            $verificar_10 = "incorrecto";
        }

        $pregunta_11 = isset($_POST['pregunta_11']) ? $_POST['pregunta_11'] : '';
        if ($pregunta_11 === '') {
            $verificar_11 = "Respuesta vacía";
        } elseif ($pregunta_11 === 'x_{i-2}') {
            $verificar_11 = "correcto";
        } else {
            $verificar_11 = "incorrecto";
        }

        $pregunta_12 = isset($_POST['pregunta_12']) ? $_POST['pregunta_12'] : '';
        if ($pregunta_12 === '') {
            $verificar_12 = "Respuesta vacía";
        } elseif ($pregunta_12 === 'Δx') {
            $verificar_12 = "correcto";
        } else {
            $verificar_12 = "incorrecto";
        }

        $pregunta_13 = isset($_POST['pregunta_13']) ? $_POST['pregunta_13'] : '';
        if ($pregunta_13 === '') {
            $verificar_13 = "Respuesta vacía";
        } elseif ($pregunta_13 === '𝑎 + (𝑖 − 1)Δx') {
            $verificar_13 = "correcto";
        } else {
            $verificar_13 = "incorrecto";
        }

        $pregunta_14 = isset($_POST['pregunta_14']) ? $_POST['pregunta_14'] : '';
        if ($pregunta_14 === '') {
            $verificar_14 = "Respuesta vacía";
        } elseif ($pregunta_14 === 'epsilon') {
            $verificar_14 = "correcto";
        } else {
            $verificar_14 = "incorrecto";
        }


        $pregunta_20 = isset($_POST['pregunta_20']) ? $_POST['pregunta_20'] : '';
if ($pregunta_20 === '') {
    $verificar_20 = "Respuesta vacía";
} elseif ($pregunta_20 === 'x0') {
    $verificar_20 = "correcto";
} else {
    $verificar_20 = "incorrecto";
}

$pregunta_21 = isset($_POST['pregunta_21']) ? $_POST['pregunta_21'] : '';
if ($pregunta_21 === '') {
    $verificar_21 = "Respuesta vacía";
} elseif ($pregunta_21 === 'x0') {
    $verificar_21 = "correcto";
} else {
    $verificar_21 = "incorrecto";
}

$pregunta_22 = isset($_POST['pregunta_22']) ? $_POST['pregunta_22'] : '';
if ($pregunta_22 === '') {
    $verificar_22 = "Respuesta vacía";
} elseif ($pregunta_22 === 'a') {
    $verificar_22 = "correcto";
} else {
    $verificar_22 = "incorrecto";
}


 $pregunta_23 = isset($_POST['pregunta_23']) ? $_POST['pregunta_23'] : '';
if ($pregunta_23 === '') {
    $verificar_23 = "Respuesta vacía";
} elseif ($pregunta_23 === 'x0') {
    $verificar_23 = "correcto";
} else {
    $verificar_23 = "incorrecto";
}

$pregunta_24 = isset($_POST['pregunta_24']) ? $_POST['pregunta_24'] : '';
if ($pregunta_24 === '') {
    $verificar_24 = "Respuesta vacía";
} elseif ($pregunta_24 === 'Δx') {
    $verificar_24 = "correcto";
} else {
    $verificar_24 = "incorrecto";
}

$pregunta_25 = isset($_POST['pregunta_25']) ? $_POST['pregunta_25'] : '';
if ($pregunta_25 === '') {
    $verificar_25 = "Respuesta vacía";
} elseif ($pregunta_25 === 'a + Δx') {
    $verificar_25 = "correcto";
} else {
    $verificar_25 = "incorrecto";
}

$pregunta_26 = isset($_POST['pregunta_26']) ? $_POST['pregunta_26'] : '';
if ($pregunta_26 === '') {
    $verificar_26 = "Respuesta vacía";
} elseif ($pregunta_26 === 'x1') {
    $verificar_26 = "correcto";
} else {
    $verificar_26 = "incorrecto";
}

$pregunta_27 = isset($_POST['pregunta_27']) ? $_POST['pregunta_27'] : '';
if ($pregunta_27 === '') {
    $verificar_27 = "Respuesta vacía";
} elseif ($pregunta_27 === 'Δx') {
    $verificar_27 = "correcto";
} else {
    $verificar_27 = "incorrecto";
}

$pregunta_28 = isset($_POST['pregunta_28']) ? $_POST['pregunta_28'] : '';
if ($pregunta_28 === '') {
    $verificar_28 = "Respuesta vacía";
} elseif ($pregunta_28 === 'a + 2Δx') {
    $verificar_28 = "correcto";
} else {
    $verificar_28 = "incorrecto";
}

$pregunta_29 = isset($_POST['pregunta_29']) ? $_POST['pregunta_29'] : '';
if ($pregunta_29 === '') {
    $verificar_29 = "Respuesta vacía";
} elseif ($pregunta_29 === 'x_{i-1}') {
    $verificar_29 = "correcto";
} else {
    $verificar_29 = "incorrecto";
}

$pregunta_30 = isset($_POST['pregunta_30']) ? $_POST['pregunta_30'] : '';
if ($pregunta_30 === '') {
    $verificar_30 = "Respuesta vacía";
} elseif ($pregunta_30 === 'Δx') {
    $verificar_30 = "correcto";
} else {
    $verificar_30 = "incorrecto";
}

$pregunta_31 = isset($_POST['pregunta_31']) ? $_POST['pregunta_31'] : '';
if ($pregunta_31 === '') {
    $verificar_31 = "Respuesta vacía";
} elseif ($pregunta_31 === 'a + iΔx') {
    $verificar_31 = "correcto";
} else {
    $verificar_31 = "incorrecto";
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
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)">
        Si la funcion es continua o si la funcion tiene una cantidad finita de saltos discontinuos, entonces
        es integrable y el limite existe.
        <br><br>
        <img src="../img/Captura de pantalla 2024-12-03 111107.png" alt=""> <br><br>
        <img src="../img/Captura de pantalla 2024-12-03 111116.png" alt=""> <br><br>
        <img src="../img/Captura de pantalla 2024-12-03 111148.png" alt=""> <br><br>
        <img src="../img/Captura de pantalla 2024-12-03 111218.png" alt=""> <br><br>
        <img src="../img/Captura de pantalla 2024-12-03 111307.png" alt=""> <br><br>
        La integral definida se puede entender como el límite de la suma de Riemann cuando
        n tiende a infinito.
        <br>
        Es el limite de la sumatoria de las areas f(x) * deltaX. 
    </form>
</div>
<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)">
    h3>Preguntas sobre la integral definida</h3>

    <p><strong>1. En la regla del extremo derecho, el índice de la sumatoria (\(i\)) comienza desde:</strong></p>
    <input type="radio" name="tercero" value="0" <?php echo ($verificar_3 === 'incorrecto') ? 'checked' : ''; ?>> 0<br>
    <input type="radio" name="tercero" value="1" <?php echo ($verificar_3 === 'correcto') ? 'checked' : ''; ?>> 1<br>
    <input type="radio" name="tercero" value="n" <?php echo ($verificar_3 === 'incorrecto') ? 'checked' : ''; ?>> \(n\)<br>
    <button type="submit" class="btn btn-primary">Enviar respuestas</button>
    <p>Resultado: <?php echo $verificar_3; ?></p>

    <p><strong>2. En la regla del extremo derecho, el índice de la sumatoria (\(i\)) termina en:</strong></p>
    <input type="radio" name="cuarto" value="n" <?php echo ($verificar_4 === 'n') ? 'checked' : ''; ?>> \(n\)<br>
    <input type="radio" name="cuarto" value="0" <?php echo ($verificar_4 === 'incorrecto') ? 'checked' : ''; ?>> 0<br>
    <input type="radio" name="cuarto" value="n-1" <?php echo ($verificar_4 === 'incorrecto') ? 'checked' : ''; ?>> \(n-1\)<br>
    <button type="submit" class="btn btn-primary">Enviar respuestas</button>
    <p>Resultado: <?php echo $verificar_4; ?></p>

    <p><strong>3. ¿Cuál es la expresión para \(\Delta x\) en términos de \(a\), \(b\), y \(n\)?</strong></p>
    <input type="radio" name="quinto" value="b-a/n" <?php echo ($verificar_5 === 'b-a/n') ? 'checked' : ''; ?>> \((b-a)/n\)<br>
    <input type="radio" name="quinto" value="a-b/n" <?php echo ($verificar_5 === 'a-b/n') ? 'checked' : ''; ?>> \((a-b)/n\)<br>
    <input type="radio" name="quinto" value="(b+a)/n" <?php echo ($verificar_5 === '(b+a)/n') ? 'checked' : ''; ?>> \((b+a)/n\)<br>
    <button type="submit" class="btn btn-primary">Enviar respuestas</button>
    <p>Resultado: <?php echo $verificar_5; ?></p>

    
    <p><strong>4. En la regla del extremo izquierdo, el índice de la sumatoria (\(i\)) comienza desde:</strong></p>
    <input type="radio" name="sexto" value="n" <?php echo ($verificar_6 === 'incorrecto') ? 'checked' : ''; ?>> \(n\)<br>
    <input type="radio" name="sexto" value="1" <?php echo ($verificar_6 === 'incorrecto') ? 'checked' : ''; ?>> 1<br>
    <input type="radio" name="sexto" value="0" <?php echo ($verificar_6 === 'correcto') ? 'checked' : ''; ?>> 0<br>
    <button type="submit" class="btn btn-primary">Enviar respuestas</button>
    <p>Resultado: <?php echo $verificar_6; ?></p>

    

      <!-- Pregunta 8 -->
      <h3>Completa los puntos finales izquierdos de los intervalos:</h3>
        <p>
        C<sub>1</sub>  = 
        <input type="text" name="pregunta_20" value="<?php echo $pregunta_20; ?>" style="width: 100px;"> =
        <input type="text" name="pregunta_21" value="<?php echo $pregunta_21; ?>" style="width: 100px;"> =
        <input type="text" name="pregunta_22" value="<?php echo $pregunta_22; ?>" style="width: 100px;"> 
        <br>
        C<sub>2</sub>  = x<sub>1</sub> = 
        <input type="text" name="pregunta_8" value="<?php echo $pregunta_8; ?>" style="width: 100px;"> +
        <input type="text" name="pregunta_9" value="<?php echo $pregunta_9; ?>" style="width: 100px;"> =
        <input type="text" name="pregunta_10" value="<?php echo $pregunta_10; ?>" style="width: 100px;"> 
        <br>
        .... <br>
        C<sub>i</sub> = x<sub>1</sub> = 
         
        <input type="text" name="pregunta_11" value="<?php echo $pregunta_11; ?>" style="width: 100px;"> +
        <input type="text" name="pregunta_12" value="<?php echo $pregunta_12; ?>" style="width: 100px;"> = 
        <input type="text" name="pregunta_13" value="<?php echo $pregunta_13; ?>" style="width: 100px;">
         <br>
        
        </p>
        
        <!-- Respuestas -->
        <p> Resultado 1: <?php echo $verificar_20; ?>
        Resultado 2: <?php echo $verificar_21; ?></p>

        <p>Resultado 3: <?php echo $verificar_22; ?>
        Resultado 4: <?php echo $verificar_8; ?></p>
        
        <p>Resultado 5: <?php echo $verificar_9; ?>
        Resultado 6: <?php echo $verificar_10; ?> </p>

        <p> Resultado 7: <?php echo $verificar_11; ?>
        Resultado 8: <?php echo $verificar_12; ?></p>
        Resultado 9: <?php echo $verificar_13; ?></p>

        <button type="submit">Enviar</button>
        <br>
        Son igualdades, todos significan lo mismo. La partición 𝑐<sub>i</sub> es el punto x <sub>i-1</sub>
        (porque tomamos los extremos izquierdos de los subintervalos). Esto es equivalente al punto anterior 
        al actual ( x<sub>i-2</sub>) más el intervalo (Δ𝑥). A su vez, esto equivale al punto inicial (a) más
         el número de veces que se repite el intervalo (i-1) multiplicado por el tamaño del intervalo (Δx)
        <br> <br>
        es el proceso de una generalizacion.

        <br><br><br>
        <!-- Preguntas para suma por derecha -->
<h3>Completa los puntos finales derechos de los intervalos:</h3>
<p>
C<sub>1</sub> = x<sub>1</sub> =
<input type="text" name="pregunta_23" value="<?php echo $pregunta_23; ?>" style="width: 100px;"> +
<input type="text" name="pregunta_24" value="<?php echo $pregunta_24; ?>" style="width: 100px;"> =
<input type="text" name="pregunta_25" value="<?php echo $pregunta_25; ?>" style="width: 100px;"> 
<br>
C<sub>2</sub> = x<sub>2</sub> = 
<input type="text" name="pregunta_26" value="<?php echo $pregunta_26; ?>" style="width: 100px;"> +
<input type="text" name="pregunta_27" value="<?php echo $pregunta_27; ?>" style="width: 100px;"> =
<input type="text" name="pregunta_28" value="<?php echo $pregunta_28; ?>" style="width: 100px;"> 
<br>
....
<br>
C<sub>i</sub> = x<sub>i</sub> = 
<input type="text" name="pregunta_29" value="<?php echo $pregunta_29; ?>" style="width: 100px;"> +
<input type="text" name="pregunta_30" value="<?php echo $pregunta_30; ?>" style="width: 100px;"> =
<input type="text" name="pregunta_31" value="<?php echo $pregunta_31; ?>" style="width: 100px;">
<br>
</p>

<!-- Respuestas -->
<p>Resultado 1: <?php echo $verificar_23; ?> Resultado 2: <?php echo $verificar_24; ?></p>
<p>Resultado 3: <?php echo $verificar_25; ?> Resultado 4: <?php echo $verificar_26; ?></p>
<p>Resultado 5: <?php echo $verificar_27; ?> Resultado 6: <?php echo $verificar_28; ?></p>
<p>Resultado 7: <?php echo $verificar_29; ?>
Resultado 8: <?php echo $verificar_30; ?>
Resultado 9: <?php echo $verificar_31; ?></p>

<button type="submit">Enviar</button>
<br>


     </form>
     los puntos usados son los extremos izquierdos \( x_0, x_1, \dots, x_{n-1} \).
     los puntos usados son los extremos derechos \( x_1, x_2, \dots, x_n \).
     \( n \) indica el número de subintervalos en la partición del intervalo \([a, b]\) <br>
    <br>
    En ambos a = x0. la diferencia es donde comienzan (los puntos utilizados). <br> <br>

     El ultimo punto es: 
    Para la regla del extremo izquierdo: \( c_n = x_{n-1} \).
    Para la regla del extremo derecho: \( x_n = b \) (el extremo derecho del intervalo).
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
