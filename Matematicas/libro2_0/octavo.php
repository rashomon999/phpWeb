<?php
// Inicialización de variables para verificaciones
$verificar_4 = $verificar_5 = $verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
$verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = $verificar_16 = $verificar_17 = 
$verificar_18 = $verificar_19 = $verificar_20 = $verificar_21 = $verificar_22 = $verificar_23 = $verificar_24 = 
$verificar_25 = $verificar_26 = $verificar_27 = $verificar_28 = $verificar_29 = $verificar_30 = $verificar_31 = 
$verificar_32 = $verificar_33 = $verificar_34 = $verificar_35 = $verificar_36 = $verificar_37 = $verificar_38 = 
$verificar_39 = $verificar_40 = $verificar_41 = $verificar_42 = $verificar_43 = $verificar_44 = $verificar_45 = 
$verificar_46 = $verificar_47 = $verificar_48 = $verificar_49 = $verificar_50 = $verificar_51 = $verificar_52 = 
$verificar_53 = $verificar_54 = $verificar_55 = $verificar_56 = $verificar_57 = $verificar_58 = $verificar_59 = '';

// Inicialización de variables para respuestas
$cuarto = $quinto = $sexto = $septimo = $octavo = $noveno = $decimo = $undecimo = $duodecimo = $decimotercero = 
$decimocuarto = $decimoquinto = $decimosexto = $decimoseptimo = $decimooctavo = $decimonoveno = $vigesimo = 
$vigesp = $vigesimo_segundo = $vigesimo_tercero = $vigesimo_cuarto = $vigesimo_quinto = $vigesimo_sexto = 
$vigesimo_septimo = $vigesimo_octavo = $vigesimo_noveno = $trigesimo = $trigesimo_primero = $trigesimo_segundo = 
$trigesimo_tercero = $trigesimo_cuarto = $trigesimo_quinto = $trigesimo_sexto = $trigesimo_septimo = 
$trigesimo_octavo = $trigesimo_noveno = $cuadragesimo = $cuadragesimo_primero = $cuadragesimo_segundo = 
$cuadragesimo_tercero = $cuadragesimo_cuarto = $cuadragesimo_quinto = $cuadragesimo_sexto = $cuadragesimo_septimo = 
$cuadragesimo_octavo = $cuadragesimo_noveno = $quincuagesimo = $quincuagesimo_primero = $quincuagesimo_segundo = 
$quincuagesimo_tercero = $quincuagesimo_cuarto = $quincuagesimo_quinto = $quincuagesimo_sexto = 
$quincuagesimo_septimo = $quincuagesimo_octavo = $quincuagesimo_noveno = '';

// Variable para controlar mostrar soluciones
$mostrar_solucion = '';

if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas
        $cuarto = '\frac{1}{2}x^4';
        $quinto = '+\frac{5}{3}x^3';
        $sexto = '-x^2';
        $septimo = '+C';
        $octavo = '\frac{x^4}{2}';
        $noveno = '-\frac{4x^3}{3}';
        $decimo = '+\frac{x^2}{2}';
        $undecimo = '+C';
        $duodecimo = '\frac{4x^4}{9}';
        $decimotercero = '-\frac{2x}{3}';
        $decimocuarto = '+C';
        $decimoquinto = '+C';
        $decimosexto = '\frac{5x}{4}';
        $decimoseptimo = '+\frac{1}{2x}';
        $decimooctavo = '-\frac{1}{4x^2}';
        $decimonoveno = '+C';
        $vigesimo = '\frac{2x^7}{7}';
        $vigesp = '-\frac{2x^6}{3}';
        $vigesimo_segundo = '+\frac{2x^5}{5}';
        $vigesimo_tercero = '+\frac{3x^4}{2}';
        $vigesimo_cuarto = '\frac{3x^4}{4}';
        $vigesimo_quinto = '-\frac{7x^3}{3}';
        $vigesimo_sexto = '-10x^2';
        $vigesimo_septimo = '+C';
        $vigesimo_octavo = '2x';
        $vigesimo_noveno = '3/2';
        $trigesimo = '3';
        $trigesimo_primero = '+C';
        $trigesimo_segundo = '3x^3';
        $trigesimo_tercero = '-15x^2';
        $trigesimo_cuarto = '+25x';
        $trigesimo_quinto = '+C';
        $trigesimo_sexto = 'Ln';
        $trigesimo_septimo = '|u|';
        $trigesimo_octavo = '+C';
        $cuadragesimo = 'Ln';
        $cuadragesimo_primero = '|x^2-x+4|';
        $cuadragesimo_segundo = '+C';
        $cuadragesimo_cuarto = '1';
        $cuadragesimo_quinto = '4';
        $cuadragesimo_sexto = 'ln[2x^2-5]';
        $cuadragesimo_septimo = '+C';
        $cuadragesimo_octavo = '1';
        $cuadragesimo_noveno = '4';
        $quincuagesimo = 'Ln[6x^2+9]';
        $quincuagesimo_primero = '+C';
        $quincuagesimo_segundo = '2';
        $quincuagesimo_tercero = '5';
        $quincuagesimo_cuarto = 'Ln[5x^2-3]';
        $quincuagesimo_quinto = '+C';
        
        // Marcar todas como correctas
        $verificar_4 = $verificar_5 = $verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
        $verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = $verificar_16 = $verificar_17 = 
        $verificar_18 = $verificar_19 = $verificar_20 = $verificar_21 = $verificar_22 = $verificar_23 = $verificar_24 = 
        $verificar_25 = $verificar_26 = $verificar_27 = $verificar_28 = $verificar_29 = $verificar_30 = $verificar_31 = 
        $verificar_32 = $verificar_33 = $verificar_34 = $verificar_35 = $verificar_36 = $verificar_37 = $verificar_38 = 
        $verificar_39 = $verificar_40 = $verificar_41 = $verificar_42 = $verificar_43 = $verificar_44 = $verificar_45 = 
        $verificar_46 = $verificar_47 = $verificar_48 = $verificar_49 = $verificar_50 = $verificar_51 = $verificar_52 = 
        $verificar_53 = $verificar_54 = $verificar_55 = "correcto";
    } else {
    
    // Verificar la respuesta de la segunda pregunta
    $cuarto = isset($_POST['cuarto']) ? $_POST['cuarto'] : '';

    if ($cuarto === '\frac{1}{2}x^4' || $cuarto === '\frac{x^4}{2}' ) {
        $verificar_4 = "correcto";
    } elseif ($cuarto === '') {
        $verificar_4 = '';
    } else {
        $verificar_4 = "incorrecto";
    }

    
    // Verificar la respuesta de la segunda pregunta
    $quinto = isset($_POST['quinto']) ? $_POST['quinto'] : '';

    if ($quinto === '+\frac{5}{3}x^3' || $quinto === '+\frac{5x^3}{3}') {
        $verificar_5 = "correcto";
    } elseif ($quinto === '') {
        $verificar_5 = '';
    } else {
        $verificar_5 = "incorrecto";
    }

    
    // Verificar la respuesta de la segunda pregunta
    $sexto = isset($_POST['sexto']) ? $_POST['sexto'] : '';

    if ($sexto === '-x^2') {
        $verificar_6 = "correcto";
    } elseif ($sexto === '') {
        $verificar_6 = '';
    } else {
        $verificar_6 = "incorrecto";
    }

    
    // Verificar la respuesta de la segunda pregunta
    $septimo = isset($_POST['septimo']) ? $_POST['septimo'] : '';

    if ($septimo === '+C') {
        $verificar_7 = "correcto";
    } elseif ($septimo === '') {
        $verificar_7 = '';
    } else {
        $verificar_7 = "incorrecto";
    }

    // Verificar la respuesta de la octava pregunta
$octavo = isset($_POST['octavo2']) ? $_POST['octavo2'] : '';

if ($octavo === '\frac{x^4}{2}' || $octavo === '\frac{1}{2}x^4' || $octavo === '\frac{1x^4}{2}') {
    $verificar_8 = "correcto";
} elseif ($octavo === '') {
    $verificar_8 = '';
} else {
    $verificar_8 = "incorrecto";
}

// Verificar la respuesta de la novena pregunta
$noveno = isset($_POST['noveno']) ? $_POST['noveno'] : '';

if ($noveno === '-\frac{4x^3}{3}' || $noveno === '-\frac{4}{3}x^3') {
    $verificar_9 = "correcto";
} elseif ($noveno === '') {
    $verificar_9 = '';
} else {
    $verificar_9 = "incorrecto";
}

// Verificar la respuesta de la décima pregunta
$decimo = isset($_POST['decimo']) ? $_POST['decimo'] : '';

if ($decimo === '+\frac{x^2}{2}') {
    $verificar_10 = "correcto";
} elseif ($decimo === '') {
    $verificar_10 = '';
} else {
    $verificar_10 = "incorrecto";
}

// Verificar la respuesta de la undécima pregunta
$undecimo = isset($_POST['undecimo']) ? $_POST['undecimo'] : '';

if ($undecimo === '+C') {
    $verificar_11 = "correcto";
} elseif ($undecimo === '') {
    $verificar_11 = '';
} else {
    $verificar_11 = "incorrecto";
}


// Verificar la respuesta de la duodécima pregunta
$duodecimo = isset($_POST['duodecimo']) ? $_POST['duodecimo'] : '';
if ($duodecimo === '\frac{4x^4}{9}' || $duodecimo === '\frac{4}{9}x^4') {
    $verificar_12 = "correcto";
} elseif ($duodecimo === '') {
    $verificar_12 = '';
} else {
    $verificar_12 = "incorrecto";
}

// Verificar la respuesta de la decimotercera pregunta
$decimotercero = isset($_POST['decimotercero']) ? $_POST['decimotercero'] : '';
if ($decimotercero === '-\frac{2x}{3}' || $decimotercero === '-\frac{2}{3}x') {
    $verificar_13 = "correcto";
} elseif ($decimotercero === '') {
    $verificar_13 = '';
} else {
    $verificar_13 = "incorrecto";
}

// Verificar la respuesta de la decimocuarta pregunta
$decimocuarto = isset($_POST['decimocuarto']) ? $_POST['decimocuarto'] : '';
if ($decimocuarto === '+C') {
    $verificar_14 = "correcto";
} elseif ($decimocuarto === '') {
    $verificar_14 = '';
} else {
    $verificar_14 = "incorrecto";
}

// Verificar la respuesta de la decimoquinta pregunta
$decimoquinto = isset($_POST['decimoquinto']) ? $_POST['decimoquinto'] : '';
if ($decimoquinto === '+C') {
    $verificar_15 = "correcto";
} elseif ($decimoquinto === '') {
    $verificar_15 = '';
} else {
    $verificar_15 = "incorrecto";
}


$decimosexto = isset($_POST['decimosexto']) ? $_POST['decimosexto'] : '';
if ($decimosexto === '\frac{5x}{4}' || $decimosexto === '\frac{5}{4}x') {
    $verificar_16 = "correcto";
} elseif ($decimosexto === '') {
    $verificar_16 = '';
} else {
    $verificar_16 = "incorrecto";
}

$decimoseptimo = isset($_POST['decimoseptimo']) ? $_POST['decimoseptimo'] : '';
if ($decimoseptimo === '+\frac{1}{2x}') {
    $verificar_17 = "correcto";
} elseif ($decimoseptimo === '') {
    $verificar_17 = '';
} else {
    $verificar_17 = "incorrecto";
}

$decimooctavo = isset($_POST['decimooctavo']) ? $_POST['decimooctavo'] : '';
if ($decimooctavo === '-\frac{1}{4x^2}') {
    $verificar_18 = "correcto";
} elseif ($decimooctavo === '') {
    $verificar_18 = '';
} else {
    $verificar_18 = "incorrecto";
}

$decimonoveno = isset($_POST['decimonoveno']) ? $_POST['decimonoveno'] : '';
if ($decimonoveno === '+C') {
    $verificar_19 = "correcto";
} elseif ($decimonoveno === '') {
    $verificar_19 = '';
} else {
    $verificar_19 = "incorrecto";
}

$vigesimo = isset($_POST['vigesimo']) ? $_POST['vigesimo'] : '';
if ($vigesimo === '\frac{2x^7}{7}') {
    $verificar_20 = "correcto";
} elseif ($vigesimo === '') {
    $verificar_20 = '';
} else {
    $verificar_20 = "incorrecto";
}

$vigesp = isset($_POST['vigesp']) ? $_POST['vigesp'] : '';
if ($vigesp === '-\frac{2x^6}{3}') {
    $verificar_21 = "correcto";
} elseif ($vigesp === '') {
    $verificar_21 = '';
} else {
    $verificar_21 = "incorrecto";
}

$vigesimo_segundo = isset($_POST['vigesimo_segundo']) ? $_POST['vigesimo_segundo'] : '';
if ($vigesimo_segundo === '+\frac{2x^5}{5}') {
    $verificar_22 = "correcto";
} elseif ($vigesimo_segundo === '') {
    $verificar_22 = '';
} else {
    $verificar_22 = "incorrecto";
}

$vigesimo_tercero = isset($_POST['vigesimo_tercero']) ? $_POST['vigesimo_tercero'] : '';
if ($vigesimo_tercero === '+\frac{3x^4}{2}') {
    $verificar_23 = "correcto";
} elseif ($vigesimo_tercero === '') {
    $verificar_23 = '';
} else {
    $verificar_23 = "incorrecto";
}



$vigesimo_cuarto = isset($_POST['vigesimo_cuarto']) ? $_POST['vigesimo_cuarto'] : '';
if ($vigesimo_cuarto === '\frac{3x^4}{4}') {
    $verificar_24 = "correcto";
} elseif ($vigesimo_cuarto === '') {
    $verificar_24 = '';
} else {
    $verificar_24 = "incorrecto";
}

$vigesimo_quinto = isset($_POST['vigesimo_quinto']) ? $_POST['vigesimo_quinto'] : '';
if ($vigesimo_quinto === '-\frac{7x^3}{3}') {
    $verificar_25 = "correcto";
} elseif ($vigesimo_quinto === '') {
    $verificar_25 = '';
} else {
    $verificar_25 = "incorrecto";
}

$vigesimo_sexto = isset($_POST['vigesimo_sexto']) ? $_POST['vigesimo_sexto'] : '';
if ($vigesimo_sexto === '-10x^2') {
    $verificar_26 = "correcto";
} elseif ($vigesimo_sexto === '') {
    $verificar_26 = '';
} else {
    $verificar_26 = "incorrecto";
}

$vigesimo_septimo = isset($_POST['vigesimo_septimo']) ? $_POST['vigesimo_septimo'] : '';
if ($vigesimo_septimo === '+C') {
    $verificar_27 = "correcto";
} elseif ($vigesimo_septimo === '') {
    $verificar_27 = '';
} else {
    $verificar_27 = "incorrecto";
}



$vigesimo_octavo = isset($_POST['vigesimo_octavo']) ? $_POST['vigesimo_octavo'] : '';
if ($vigesimo_octavo === '2x') {
    $verificar_28 = "correcto";
} elseif ($vigesimo_octavo === '') {
    $verificar_28 = '';
} else {
    $verificar_28 = "incorrecto";
}

$vigesimo_noveno = isset($_POST['vigesimo_noveno']) ? $_POST['vigesimo_noveno'] : '';
if ($vigesimo_noveno === '3/2') {
    $verificar_29 = "correcto";
} elseif ($vigesimo_noveno === '') {
    $verificar_29 = '';
} else {
    $verificar_29 = "incorrecto";
}

$trigesimo = isset($_POST['trigesimo']) ? $_POST['trigesimo'] : '';
if ($trigesimo === '3') {
    $verificar_30 = "correcto";
} elseif ($trigesimo === '') {
    $verificar_30 = '';
} else {
    $verificar_30 = "incorrecto";
}

$trigesimo_primero = isset($_POST['trigesimo_primero']) ? $_POST['trigesimo_primero'] : '';
if ($trigesimo_primero === '+C') {
    $verificar_31 = "correcto";
} elseif ($trigesimo_primero === '') {
    $verificar_31 = '';
} else {
    $verificar_31 = "incorrecto";
}


$trigesimo_segundo = isset($_POST['trigesimo_segundo']) ? $_POST['trigesimo_segundo'] : '';
if ($trigesimo_segundo === '3x^3') {
    $verificar_32 = "correcto";
} elseif ($trigesimo_segundo === '') {
    $verificar_32 = '';
} else {
    $verificar_32 = "incorrecto";
}

$trigesimo_tercero = isset($_POST['trigesimo_tercero']) ? $_POST['trigesimo_tercero'] : '';
if ($trigesimo_tercero === '-15x^2') {
    $verificar_33 = "correcto";
} elseif ($trigesimo_tercero === '') {
    $verificar_33 = '';
} else {
    $verificar_33 = "incorrecto";
}

$trigesimo_cuarto = isset($_POST['trigesimo_cuarto']) ? $_POST['trigesimo_cuarto'] : '';
if ($trigesimo_cuarto === '+25x') {
    $verificar_34 = "correcto";
} elseif ($trigesimo_cuarto === '') {
    $verificar_34 = '';
} else {
    $verificar_34 = "incorrecto";
}

$trigesimo_quinto = isset($_POST['trigesimo_quinto']) ? $_POST['trigesimo_quinto'] : '';
if ($trigesimo_quinto === '+C') {
    $verificar_35 = "correcto";
} elseif ($trigesimo_quinto === '') {
    $verificar_35 = '';
} else {
    $verificar_35 = "incorrecto";
}


$trigesimo_sexto = isset($_POST['trigesimo_sexto']) ? $_POST['trigesimo_sexto'] : '';
if ($trigesimo_sexto === 'Ln') {
    $verificar_36 = "correcto";
} elseif ($trigesimo_sexto === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

$trigesimo_septimo = isset($_POST['trigesimo_septimo']) ? $_POST['trigesimo_septimo'] : '';
if ($trigesimo_septimo === '|u|') {
    $verificar_37 = "correcto";
} elseif ($trigesimo_septimo === '') {
    $verificar_37 = '';
} else {
    $verificar_37 = "incorrecto";
}

$trigesimo_octavo = isset($_POST['trigesimo_octavo']) ? $_POST['trigesimo_octavo'] : '';
if ($trigesimo_octavo === '+C') {
    $verificar_38 = "correcto";
} elseif ($trigesimo_octavo === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

///
$cuadragesimo = isset($_POST['cuadragesimo']) ? $_POST['cuadragesimo'] : '';
if ($cuadragesimo === 'Ln') {
    $verificar_40 = "correcto";
} elseif ($cuadragesimo === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

$cuadragesimo_primero = isset($_POST['cuadragesimo_primero']) ? $_POST['cuadragesimo_primero'] : '';
if ($cuadragesimo_primero === '|x^2-x+4|') {
    $verificar_41 = "correcto";
} elseif ($cuadragesimo_primero === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

$cuadragesimo_segundo = isset($_POST['cuadragesimo_segundo']) ? $_POST['cuadragesimo_segundo'] : '';
if ($cuadragesimo_segundo === '+C') {
    $verificar_42 = "correcto";
} elseif ($cuadragesimo_segundo === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

$cuadragesimo_cuarto = isset($_POST['cuadragesimo_cuarto']) ? $_POST['cuadragesimo_cuarto'] : '';
if ($cuadragesimo_cuarto === '1') {
    $verificar_44 = "correcto";
} elseif ($cuadragesimo_cuarto === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

$cuadragesimo_quinto = isset($_POST['cuadragesimo_quinto']) ? $_POST['cuadragesimo_quinto'] : '';
if ($cuadragesimo_quinto === '4') {
    $verificar_45 = "correcto";
} elseif ($cuadragesimo_quinto === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

$cuadragesimo_sexto = isset($_POST['cuadragesimo_sexto']) ? $_POST['cuadragesimo_sexto'] : '';
if ($cuadragesimo_sexto === 'ln[2x^2-5]') {
    $verificar_46 = "correcto";
} elseif ($cuadragesimo_sexto === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

$cuadragesimo_septimo = isset($_POST['cuadragesimo_septimo']) ? $_POST['cuadragesimo_septimo'] : '';
if ($cuadragesimo_septimo === '+C') {
    $verificar_47 = "correcto";
} elseif ($cuadragesimo_septimo === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}


/////


$cuadragesimo_octavo = isset($_POST['cuadragesimo_octavo']) ? $_POST['cuadragesimo_octavo'] : '';
if ($cuadragesimo_octavo === '1') {
    $verificar_48 = "correcto";
} elseif ($cuadragesimo_octavo === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

$cuadragesimo_noveno = isset($_POST['cuadragesimo_noveno']) ? $_POST['cuadragesimo_noveno'] : '';
if ($cuadragesimo_noveno === '4') {
    $verificar_49 = "correcto";
} elseif ($cuadragesimo_noveno === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

$quincuagesimo = isset($_POST['quincuagesimo']) ? $_POST['quincuagesimo'] : '';
if ($quincuagesimo === 'Ln[6x^2+9]' || $quincuagesimo === 'ln[6x^2+9]') {
    $verificar_50 = "correcto";
} elseif ($quincuagesimo === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

$quincuagesimo_primero = isset($_POST['quincuagesimo_primero']) ? $_POST['quincuagesimo_primero'] : '';
if ($quincuagesimo_primero === '+C') {
    $verificar_51 = "correcto";
} elseif ($quincuagesimo_primero === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}


////





$quincuagesimo_segundo = isset($_POST['quincuagesimo_segundo']) ? $_POST['quincuagesimo_segundo'] : '';
if ($quincuagesimo_segundo === '2') {
    $verificar_52 = "correcto";
} elseif ($quincuagesimo_segundo === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

$quincuagesimo_tercero = isset($_POST['quincuagesimo_tercero']) ? $_POST['quincuagesimo_tercero'] : '';
if ($quincuagesimo_tercero === '5') {
    $verificar_53 = "correcto";
} elseif ($quincuagesimo_tercero === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

$quincuagesimo_cuarto = isset($_POST['quincuagesimo_cuarto']) ? $_POST['quincuagesimo_cuarto'] : '';
if ($quincuagesimo_cuarto === 'Ln[5x^2-3]') {
    $verificar_54 = "correcto";
} elseif ($quincuagesimo_cuarto === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

$quincuagesimo_quinto = isset($_POST['quincuagesimo_quinto']) ? $_POST['quincuagesimo_quinto'] : '';
if ($quincuagesimo_quinto === '+C') {
    $verificar_55 = "correcto";
} elseif ($quincuagesimo_quinto === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}
}}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre simplificación de expresiones matemáticas</title>
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
         
        actualizarFormula();
        actualizarFormula2();
        actualizarFormula3();
        actualizarFormula4();
        actualizarFormula5();
        actualizarFormula6();
         actualizarFormula8();
        actualizarFormula9();
        actualizarFormula10();
        actualizarFormula11();
        actualizarFormula12();
        actualizarFormula13();
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('cuarto').value || "";
    var g = document.getElementById('quinto').value || "";
    var d = document.getElementById('sexto').value || "";
    var e = document.getElementById('septimo').value || "";


    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d} ${e} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('octavo2').value || "";
    var g = document.getElementById('noveno').value || "";
    var d = document.getElementById('decimo').value || "";
    var e = document.getElementById('undecimo').value || "";


    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d} ${e} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('duodecimo').value || "";
    var g = document.getElementById('decimotercero').value || "";
    var d = document.getElementById('decimocuarto').value || "";
 

    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d}   \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    // Obtener los valores de los inputs
    var f = document.getElementById('decimosexto').value || "";
    var g = document.getElementById('decimoseptimo').value || "";
    var d = document.getElementById('decimooctavo').value || "";
    var e = document.getElementById('decimonoveno').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d}   ${e} \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula4').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula5() {
    // Obtener los valores de los inputs
    var f = document.getElementById('vigesimo').value || "";
    var g = document.getElementById('vigesp').value || "";
    var d = document.getElementById('vigesimo_segundo').value || "";
    var e = document.getElementById('vigesimo_tercero').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d} ${e} \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula6() {
    // Obtener los valores de los inputs
    var f = document.getElementById('vigesimo_cuarto').value || "";
    var g = document.getElementById('vigesimo_quinto').value || "";
    var d = document.getElementById('vigesimo_sexto').value || "";
    var e = document.getElementById('vigesimo_septimo').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d} ${e} \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula24').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}




function actualizarFormula8() {
    // Obtener los valores de los inputs
    var f = document.getElementById('trigesimo_segundo').value || "";
    var g = document.getElementById('trigesimo_tercero').value || "";
    var d = document.getElementById('trigesimo_cuarto').value || "";
    var e = document.getElementById('trigesimo_quinto').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d}  ${e} \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula8').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula9() {
    // Obtener los valores de los inputs
    var f = document.getElementById('trigesimo_sexto').value || "";
    var g = document.getElementById('trigesimo_septimo').value || "";
    var d = document.getElementById('trigesimo_octavo').value || "";
 
    // Construir la fórmula dinámica
    var formula = ` \\ ${f}${g} ${d}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula10() {
    // Obtener los valores de los inputs
    var f = document.getElementById('cuadragesimo').value || "";
    var g = document.getElementById('cuadragesimo_primero').value || "";
    var d = document.getElementById('cuadragesimo_segundo').value || "";
 
    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  ${g} ${d}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula10').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula11() {
    // Obtener los valores de los inputs
    var f = document.getElementById('cuadragesimo_cuarto').value || "";
    var g = document.getElementById('cuadragesimo_quinto').value || "";
    var d = document.getElementById('cuadragesimo_sexto').value || "";
    var e = document.getElementById('cuadragesimo_septimo').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}}{${g}} ${d} ${e}   \\\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula12() {
    // Obtener los valores de los inputs
    var f = document.getElementById('cuadragesimo_octavo').value || "";
    var g = document.getElementById('cuadragesimo_noveno').value || "";
    var d = document.getElementById('quincuagesimo').value || "";
    var e = document.getElementById('quincuagesimo_primero').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}}{${g}} ${d} ${e}   \\\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula12').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula13() {
    // Obtener los valores de los inputs
    var f = document.getElementById('quincuagesimo_segundo').value || "";
    var g = document.getElementById('quincuagesimo_tercero').value || "";
    var d = document.getElementById('quincuagesimo_cuarto').value || "";
    var e = document.getElementById('quincuagesimo_quinto').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}}{${g}} ${d} ${e}   \\\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula13').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


 

</script>
    
</head>
<body>
<div class="seccion izquierda">
    Nota: Ingresar \frac{}{} para fracciones. otra: cuando se integra una fraccion con x en el denominador 
    al final va a quedr un numero acompañando la x porque cuando se deriva sube la x sola , se deriva (resta 
    y multiplica por el denominador), lo que hace que se elimine el de abajo. <br>
    Siempre que se deriva una potencia se baja, entonces, siempre que se integre una potencia 2 o mayor 
    se deberia dividir, si la potencia es negativa, claro se divide entre un numero negativo. <br>
    <form action="./octavo.php" method="POST" onsubmit="handleSubmit(event)">
    <br>

        La integral indefinida de \( 2x^3+5x^2-2x+1 \) es: <br>
        \(
        \int  (2x^3+5x^2-2x+1)  \, dx = \)
        <span id="formula">
            \( \frac{0}{0} \)
        </span> 
         <br><br>
        <input type="text" name="cuarto" size="11" id="cuarto" oninput="actualizarFormula()" value=<?php echo $cuarto?>>
        <input type="text" name="quinto" size="11" id="quinto" oninput="actualizarFormula()" value=<?php echo $quinto?>>
        <input type="text" name="sexto" size="11" id="sexto" oninput="actualizarFormula()" value=<?php echo $sexto?>>
        <input type="text" name="septimo" size="11" id="septimo" oninput="actualizarFormula()" value=<?php echo $septimo?>>

    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?> <br>
      <br>
     <hr>
     
     La integral indefinida de \( \frac{6x^5-12x^4+3x^3}{3x^2} dx \) es: <br>
        \(
        \int  \frac{6x^5-12x^4+3x^3}{3x^2}  \, dx = \)
        <span id="formula2">
        \( \frac{0}{0} \)
    </span>
    <br><br>
    <input type="text" name="octavo2" size="5" id="octavo2" oninput="actualizarFormula2()" value="<?php echo $octavo?>">
    <input type="text" name="noveno" size="5" id="noveno" oninput="actualizarFormula2()" value="<?php echo $noveno?>">
    <input type="text" name="decimo" size="5" id="decimo" oninput="actualizarFormula2()" value="<?php echo $decimo?>">
    <input type="text" name="undecimo" size="5" id="undecimo" oninput="actualizarFormula2()" value="<?php echo $undecimo?>">
    
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?> <br>
 
    <br><br>
   



    <hr>
    La integral indefinida de \( \frac{8x^3 - 4x}{6x} \) es: <br>
\(
\int \frac{8x^3 - 4x}{6x}  \, dx = 
\)
<span id="formula3">
    \( \frac{0}{0} \)
</span> 
<br><br>

<input type="text" name="duodecimo" size="5" id="duodecimo" oninput="actualizarFormula3()" value="<?php echo $duodecimo ?>">
<input type="text" name="decimotercero" size="5" id="decimotercero" oninput="actualizarFormula3()" value="<?php echo $decimotercero ?>">
<input type="text" name="decimocuarto" size="5" id="decimocuarto" oninput="actualizarFormula3()" value="<?php echo $decimocuarto ?>">
 
<br>
<button type="submit">enviar</button>

<?php echo $verificar_12 ?>
<?php echo $verificar_13 ?>
<?php echo $verificar_14 ?>
 <br>
Pista: En integrales las constantes si son importantes (no se eliminan como las derivadas), al tener solo una 
constante, se integra dx (=x).

<br><br>
<hr>
<p>
    La integral indefinida de \( \frac{5x^3 - 2x + 2}{4x^3}  \) es: <br>
    \(
    \int \frac{5x^3 - 2x + 2}{4x^3} \, dx = 
    \)
    <span id="formula4">
        \( \frac{0}{0} \)
    </span> 
</p>
<br><br>

<input type="text" name="decimosexto" size="5" id="decimosexto" oninput="actualizarFormula4()" value="<?php echo $decimosexto ?>">
<input type="text" name="decimoseptimo" size="5" id="decimoseptimo" oninput="actualizarFormula4()" value="<?php echo $decimoseptimo ?>">
<input type="text" name="decimooctavo" size="5" id="decimooctavo" oninput="actualizarFormula4()" value="<?php echo $decimooctavo ?>">
<input type="text" name="decimonoveno" size="5" id="decimonoveno" oninput="actualizarFormula4()" value="<?php echo $decimonoveno ?>">

<br>
<button type="submit">enviar</button>

<?php echo $verificar_16 ?>
<?php echo $verificar_17 ?>
<?php echo $verificar_18 ?>
<?php echo $verificar_19 ?>
<br>



<hr>
<p>
    La integral indefinida de \( 2x^3(x^3-2x^2+x+3) \) es: <br>
    \(
    \int (2x^3(x^3-2x^2+x+3)) \, dx = 
    \)
    <span id="formula5">
        \( \frac{0}{0} \)
    </span> 
</p>
<br><br>

<input type="text" name="vigesimo" size="5" id="vigesimo" oninput="actualizarFormula5()" value="<?php echo $vigesimo ?>">
<input type="text" name="vigesp" size="5" id="vigesp" oninput="actualizarFormula5()" value="<?php echo $vigesp ?>">
<input type="text" name="vigesimo_segundo" size="5" id="vigesimo_segundo" oninput="actualizarFormula5()" value="<?php echo $vigesimo_segundo ?>">
<input type="text" name="vigesimo_tercero" size="5" id="vigesimo_tercero" oninput="actualizarFormula5()" value="<?php echo $vigesimo_tercero ?>">

<br>
<button type="submit">enviar</button>

<?php echo $verificar_20 ?>
<?php echo $verificar_21 ?>
<?php echo $verificar_22 ?>
<?php echo $verificar_23 ?>
<br>

<hr>
<p>
    La integral indefinida de \( (2x-5) (3x^2+4x) \) es: <br>
    \(
    \int (2x-5) (3x^2+4x) \, dx = 
    \)
    <span id="formula24">
        \( \frac{0}{0} \)
    </span> 
</p>
<br><br>

<input type="text" name="vigesimo_cuarto" size="5" id="vigesimo_cuarto" oninput="actualizarFormula6()" value="<?php echo $vigesimo_cuarto ?>">
<input type="text" name="vigesimo_quinto" size="5" id="vigesimo_quinto" oninput="actualizarFormula6()" value="<?php echo $vigesimo_quinto ?>">
<input type="text" name="vigesimo_sexto" size="5" id="vigesimo_sexto" oninput="actualizarFormula6()" value="<?php echo $vigesimo_sexto ?>">
<input type="text" name="vigesimo_septimo" size="5" id="vigesimo_septimo" oninput="actualizarFormula6()" value="<?php echo $vigesimo_septimo ?>">

<br>
<button type="submit">enviar</button>

<?php echo $verificar_24 ?>
<?php echo $verificar_25 ?>
<?php echo $verificar_26 ?>
<?php echo $verificar_27 ?>
<br>
<hr>
<p>
   

    </form>
</div>

<div class="seccion derecha">
    <form action="./octavo.php" method="POST" onsubmit="handleSubmit(event)">
         
        La integral indefinida de \(  (3x-5)^2 \) es: <br>
        \(
        \int (3x-5)^2 \, dx = 
        \)
        <span id="formula8">
            \( \frac{0}{0} \)
        </span> 
         
        <br><br>

    <input type="text" name="trigesimo_segundo" size="5" id="trigesimo_segundo" oninput="actualizarFormula8()" value="<?php echo $trigesimo_segundo ?>">
    <input type="text" name="trigesimo_tercero" size="5" id="trigesimo_tercero" oninput="actualizarFormula8()" value="<?php echo $trigesimo_tercero ?>">
    <input type="text" name="trigesimo_cuarto" size="5" id="trigesimo_cuarto" oninput="actualizarFormula8()" value="<?php echo $trigesimo_cuarto ?>">
    <input type="text" name="trigesimo_quinto" size="5" id="trigesimo_quinto" oninput="actualizarFormula8()" value="<?php echo $trigesimo_quinto ?>">

    <br>
    

    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>
    <button type="submit">enviar</button>



    <br>




    <hr>

    En una division generalmente lo que se sustituye es lo que esta en el 
    denominador. (la derivada es el numerador). <br>
    entonces el denominaror seria u. <br>
    recordemos du = g'(x) dx. (el numerador y dx serian du) <br><br>
    La integral indefinida de \( \frac{2x-1}{x^2-x+4} \) es: <br>
    \(
    \int \frac{du}{u} \,  = 
    \)
    <span id="formula9">
        \( \frac{0}{0} \)
    </span> 

    <br><br>

    <input type="text" name="trigesimo_sexto" size="5" id="trigesimo_sexto" oninput="actualizarFormula9()" value="<?php echo $trigesimo_sexto ?>">
    <input type="text" name="trigesimo_septimo" size="5" id="trigesimo_septimo" oninput="actualizarFormula9()" value="<?php echo $trigesimo_septimo ?>">
    <input type="text" name="trigesimo_octavo" size="5" id="trigesimo_octavo" oninput="actualizarFormula9()" value="<?php echo $trigesimo_octavo ?>">
 
    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <br>
    El resultado final es: <br><br>
    <span id="formula10">
        \( \frac{0}{0} \)
    </span> 
    <br>
    <input type="text" name="cuadragesimo" size="5" id="cuadragesimo" oninput="actualizarFormula10()" value="<?php echo $cuadragesimo ?>">
    <input type="text" name="cuadragesimo_primero" size="8" id="cuadragesimo_primero" oninput="actualizarFormula10()" value="<?php echo $cuadragesimo_primero ?>">
    <input type="text" name="cuadragesimo_segundo" size="5" id="cuadragesimo_segundo" oninput="actualizarFormula10()" value="<?php echo $cuadragesimo_segundo ?>">
 
    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_40 ?>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
    <hr>


    <p>
    La integral indefinida de \( \frac{x}{2x^2-5} \) es: <br>
    \(
    \int \frac{x}{2x^2-5}  \, dx = 
    \)
    <span id="formula11">
        \( \frac{0}{0} \)
    </span> 
</p>
<br><br>

<input type="text" name="cuadragesimo_cuarto" size="5" id="cuadragesimo_cuarto" oninput="actualizarFormula11()" value="<?php echo $cuadragesimo_cuarto ?>">
<input type="text" name="cuadragesimo_quinto" size="5" id="cuadragesimo_quinto" oninput="actualizarFormula11()" value="<?php echo $cuadragesimo_quinto ?>">
<input type="text" name="cuadragesimo_sexto" size="8" id="cuadragesimo_sexto" oninput="actualizarFormula11()" value="<?php echo $cuadragesimo_sexto ?>">
<input type="text" name="cuadragesimo_septimo" size="5" id="cuadragesimo_septimo" oninput="actualizarFormula11()" value="<?php echo $cuadragesimo_septimo ?>">

<br>
<button type="submit">enviar</button>

<?php echo $verificar_44 ?>
<?php echo $verificar_45 ?>
<?php echo $verificar_46 ?>
<?php echo $verificar_47 ?>
<br>
<hr>



<p>
    <br><br>
    La integral indefinida de \( \frac{3x}{6x^2+9} \) es: <br>
    \(
    \int \frac{3x}{6x^2+9}  \, dx = 
    \)
    <span id="formula12">
        \( \frac{0}{0} \)
    </span> 
    </p>
    <br><br>

    <input type="text" name="cuadragesimo_octavo" size="5" id="cuadragesimo_octavo" oninput="actualizarFormula12()" value="<?php echo $cuadragesimo_octavo ?>">
    <input type="text" name="cuadragesimo_noveno" size="5" id="cuadragesimo_noveno" oninput="actualizarFormula12()" value="<?php echo $cuadragesimo_noveno ?>">
    <input type="text" name="quincuagesimo" size="8" id="quincuagesimo" oninput="actualizarFormula12()" value="<?php echo $quincuagesimo ?>">
    <input type="text" name="quincuagesimo_primero" size="5" id="quincuagesimo_primero" oninput="actualizarFormula12()" value="<?php echo $quincuagesimo_primero ?>">

    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <?php echo $verificar_51 ?>
    <br>

    <hr>
    <p>
    <br><br>
    La integral indefinida de \( \frac{4x dx}{5x^2 - 3} \) es: <br>
    \(
    \int \frac{4x dx}{5x^2 - 3} \, dx = 
    \)
    <span id="formula13">
        \( \frac{0}{0} \)
    </span> 
    </p>
    <br><br>

<input type="text" name="quincuagesimo_segundo" size="5" id="quincuagesimo_segundo" oninput="actualizarFormula13()" value="<?php echo $quincuagesimo_segundo ?>">
<input type="text" name="quincuagesimo_tercero" size="5" id="quincuagesimo_tercero" oninput="actualizarFormula13()" value="<?php echo $quincuagesimo_tercero ?>">
<input type="text" name="quincuagesimo_cuarto" size="8" id="quincuagesimo_cuarto" oninput="actualizarFormula13()" value="<?php echo $quincuagesimo_cuarto ?>">
<input type="text" name="quincuagesimo_quinto" size="5" id="quincuagesimo_quinto" oninput="actualizarFormula13()" value="<?php echo $quincuagesimo_quinto ?>">

<br>
<button type="submit">enviar</button>

<?php echo $verificar_52 ?>
<?php echo $verificar_53 ?>
<?php echo $verificar_54 ?>
<?php echo $verificar_55 ?>
<br>
<br><br>
simplemente se reemplaza lo disponible, \( \frac{1}{10} du = x dx \), ahi, pasa a ser denominador del 4:
\(  \frac{4}{10} \int \frac{du}{u} \)




    <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
    </form>
</div>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="noveno.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
