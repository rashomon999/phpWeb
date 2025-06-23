<?php
// Inicialización de variables para verificaciones
$verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = $verificar_5 = $verificar_6 = $verificar_7 = 
$verificar_8 = $verificar_9 = $verificar_10 = $verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = 
$verificar_15 = $verificar_16 = $verificar_17 = $verificar_18 = $verificar_19 = $verificar_20 = $verificar_21 = 
$verificar_22 = $verificar_23 = $verificar_24 = $verificar_25 = $verificar_26 = $verificar_27 = $verificar_28 = 
$verificar_29 = $verificar_30 = $verificar_31 = $verificar_32 = $verificar_33 = $verificar_34 = $verificar_35 = 
$verificar_36 = $verificar_37 = $verificar_38 = $verificar_39 = $verificar_40 = $verificar_41 = $verificar_42 = 
$verificar_43 = $verificar_44 = $verificar_45 = $verificar_46 = $verificar_47 = $verificar_48 = $verificar_49 = 
$verificar_50 = $verificar_51 = $verificar_52 = $verificar_53 = $verificar_54 = $verificar_55 = $verificar_56 = 
$verificar_57 = $verificar_58 = $verificar_59 = '';

// Inicialización de variables para respuestas
$primero = $segundo = $tercero = $cuarto = $quinto = $sexto = $septimo = $octavo = $noveno = $decimo = 
$undecimo = $duodecimo = $decimotercero = $decimocuarto = $decimoquinto = $decimosexto = $decimoseptimo = 
$decimooctavo = $decimonoveno = $vigesimo = $vigesp = $vigesimo_segundo = $vigesimo_tercero = $vigesimo_cuarto = 
$vigesimo_quinto = $vigesimo_sexto = $vigesimo_septimo = $vigesimo_octavo = $vigesimo_noveno = $trigesimo = 
$trigesimo_primero = $trigesimo_segundo = $trigesimo_tercero = $trigesimo_cuarto = $trigesimo_quinto = 
$trigesimo_sexto = $trigesimo_septimo = $trigesimo_octavo = $trigesimo_noveno = $cuadragesimo = 
$cuadragesimo_primero = $cuadragesimo_segundo = $cuadragesimo_tercero = $cuadragesimo_cuarto = 
$cuadragesimo_quinto = $cuadragesimo_sexto = $cuadragesimo_septimo = $cuadragesimo_octavo = 
$cuadragesimo_noveno = $quincuagesimo = $quincuagesimo_primero = $quincuagesimo_segundo = 
$quincuagesimo_tercero = $quincuagesimo_cuarto = $quincuagesimo_quinto = $quincuagesimo_sexto = 
$quincuagesimo_septimo = $quincuagesimo_octavo = $quincuagesimo_noveno = '';

// Variable para controlar mostrar soluciones
$mostrar_solucion = '';

if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas
        $primero = 'cx+C';
        $segundo = 'x';
        $tercero = 'xu+c';
        $cuarto = '\frac{8}{105}';
        $quinto = '\sqrt{(5x^3-3)^7}';
        $sexto = '+C';
        $septimo = '+C';
        $octavo = '\frac{1}{4}';
        $noveno = '(x^3-3)^8';
        $decimo = '+\frac{6}{7}';
        $undecimo = '(x^3-3)^6';
        $duodecimo = '\frac{3}{2}';
        $decimotercero = '\sqrt[3]{(3x^2+5x)^2}';
        $decimocuarto = '+C';
        $decimoquinto = '+C';
        $decimosexto = '6^{3x^2+1}';
        $decimoseptimo = 'ln6';
        $decimooctavo = '3';
        $decimonoveno = '+C';
        $vigesimo = '2e^{3x}';
        $vigesp = '+C';
        $vigesimo_segundo = '3';
        $vigesimo_tercero = '+C';
        $vigesimo_cuarto = '\frac{1}{10}';
        $vigesimo_quinto = 'e^{5x}';
        $vigesimo_sexto = '+C';
        $vigesimo_septimo = '+C';
        $vigesimo_octavo = '\frac{1}{2}';
        $vigesimo_noveno = 'e^{x^2}';
        $trigesimo = '3';
        $trigesimo_primero = '+C';
        $trigesimo_segundo = '\frac{1}{3}';
        $trigesimo_tercero = 'ln^2x';
        $trigesimo_cuarto = '+C';
        $trigesimo_quinto = '+C';
        $trigesimo_sexto = 'Ln';
        $trigesimo_septimo = '|lnx|';
        $trigesimo_octavo = '+C';
        $trigesimo_noveno = '+C';
        $cuadragesimo = '5';
        $cuadragesimo_primero = '4';
        $cuadragesimo_segundo = 'Ln|x|';
        $cuadragesimo_tercero = '+C';
        $cuadragesimo_cuarto = '3';
        $cuadragesimo_quinto = '5';
        $cuadragesimo_sexto = '3';
        $cuadragesimo_septimo = 'x^5';
        $cuadragesimo_octavo = '2';
        $cuadragesimo_noveno = '3x^3';
        $quincuagesimo = '3';
        $quincuagesimo_primero = '+C';
        $quincuagesimo_segundo = '8';
        $quincuagesimo_tercero = '3';
        $quincuagesimo_cuarto = '2';
        $quincuagesimo_quinto = 'x^3';
        $quincuagesimo_sexto = '-4';
        $quincuagesimo_septimo = '2';
        $quincuagesimo_octavo = 'x';
        $quincuagesimo_noveno = '+C';
        
        // Marcar todas como correctas
        $verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = $verificar_5 = $verificar_6 = $verificar_7 = 
        $verificar_8 = $verificar_9 = $verificar_10 = $verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = 
        $verificar_15 = $verificar_16 = $verificar_17 = $verificar_18 = $verificar_19 = $verificar_20 = $verificar_21 = 
        $verificar_22 = $verificar_23 = $verificar_24 = $verificar_25 = $verificar_26 = $verificar_27 = $verificar_28 = 
        $verificar_29 = $verificar_30 = $verificar_31 = $verificar_32 = $verificar_33 = $verificar_34 = $verificar_35 = 
        $verificar_36 = $verificar_37 = $verificar_38 = $verificar_39 = $verificar_40 = $verificar_41 = $verificar_42 = 
        $verificar_43 = $verificar_44 = $verificar_45 = $verificar_46 = $verificar_47 = $verificar_48 = $verificar_49 = 
        $verificar_50 = $verificar_51 = $verificar_52 = $verificar_53 = $verificar_54 = $verificar_55 = $verificar_56 = 
        $verificar_57 = $verificar_58 = $verificar_59 = "correcto";
    } else {
    // Verificar la respuesta de la primera pregunta
    $primero = isset($_POST['primero']) ? $_POST['primero'] : '';

    if ($primero === 'cx+C' || $primero === 'xc+C') {
        $verificar_1 = "correcto";
    } elseif ($primero === '') {
        $verificar_1 = '';
    } else {
        $verificar_1 = "incorrecto";
    }

    // Verificar la respuesta de la segunda pregunta
    $segundo = isset($_POST['segundo']) ? $_POST['segundo'] : '';

    if ($segundo === 'x') {
        $verificar_2 = "correcto";
    } elseif ($segundo === '') {
        $verificar_2 = '';
    } else {
        $verificar_2 = "incorrecto";
    }

    // Verificar la respuesta de la segunda pregunta
    $tercero = isset($_POST['tercero']) ? $_POST['tercero'] : '';

    if ($tercero === 'xu+c') {
        $verificar_3 = "correcto";
    } elseif ($tercero === '') {
        $verificar_3 = '';
    } else {
        $verificar_3 = "incorrecto";
    }

    // Verificar la respuesta de la segunda pregunta
    $cuarto = isset($_POST['cuarto']) ? $_POST['cuarto'] : '';

    if ($cuarto === '\frac{8}{105}') {
        $verificar_4 = "correcto";
    } elseif ($cuarto === '') {
        $verificar_4 = '';
    } else {
        $verificar_4 = "incorrecto";
    }

    
    // Verificar la respuesta de la segunda pregunta
    $quinto = isset($_POST['quinto']) ? $_POST['quinto'] : '';

    if ($quinto === '\sqrt{(5x^3-3)^7}') {
        $verificar_5 = "correcto";
    } elseif ($quinto === '') {
        $verificar_5 = '';
    } else {
        $verificar_5 = "incorrecto";
    }

    
    // Verificar la respuesta de la segunda pregunta
    $sexto = isset($_POST['sexto']) ? $_POST['sexto'] : '';

    if ($sexto === '+C') {
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
$octavo = isset($_POST['octavo']) ? $_POST['octavo'] : '';

if ($octavo === '\frac{1}{4}') {
    $verificar_8 = "correcto";
} elseif ($octavo === '') {
    $verificar_8 = '';
} else {
    $verificar_8 = "incorrecto";
}

// Verificar la respuesta de la novena pregunta
$noveno = isset($_POST['noveno']) ? $_POST['noveno'] : '';

if ($noveno === '(x^3-3)^8') {
    $verificar_9 = "correcto";
} elseif ($noveno === '') {
    $verificar_9 = '';
} else {
    $verificar_9 = "incorrecto";
}

// Verificar la respuesta de la décima pregunta
$decimo = isset($_POST['decimo']) ? $_POST['decimo'] : '';

if ($decimo === '+\frac{6}{7}') {
    $verificar_10 = "correcto";
} elseif ($decimo === '') {
    $verificar_10 = '';
} else {
    $verificar_10 = "incorrecto";
}

// Verificar la respuesta de la undécima pregunta
$undecimo = isset($_POST['undecimo']) ? $_POST['undecimo'] : '';

if ($undecimo === '(x^3-3)^6') {
    $verificar_11 = "correcto";
} elseif ($undecimo === '') {
    $verificar_11 = '';
} else {
    $verificar_11 = "incorrecto";
}


// Verificar la respuesta de la duodécima pregunta
$duodecimo = isset($_POST['duodecimo']) ? $_POST['duodecimo'] : '';
if ($duodecimo === '\frac{3}{2}') {
    $verificar_12 = "correcto";
} elseif ($duodecimo === '') {
    $verificar_12 = '';
} else {
    $verificar_12 = "incorrecto";
}

// Verificar la respuesta de la decimotercera pregunta
$decimotercero = isset($_POST['decimotercero']) ? $_POST['decimotercero'] : '';
if ($decimotercero === '\sqrt[3]{(3x^2+5x)^2}') {
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
if ($decimosexto === '6^{3x^2+1}') {
    $verificar_16 = "correcto";
} elseif ($decimosexto === '') {
    $verificar_16 = '';
} else {
    $verificar_16 = "incorrecto";
}

$decimoseptimo = isset($_POST['decimoseptimo']) ? $_POST['decimoseptimo'] : '';
if ($decimoseptimo === 'ln6') {
    $verificar_17 = "correcto";
} elseif ($decimoseptimo === '') {
    $verificar_17 = '';
} else {
    $verificar_17 = "incorrecto";
}

$decimooctavo = isset($_POST['decimooctavo']) ? $_POST['decimooctavo'] : '';
if ($decimooctavo === '3') {
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
if ($vigesimo === '2e^{3x}') {
    $verificar_20 = "correcto";
} elseif ($vigesimo === '') {
    $verificar_20 = '';
} else {
    $verificar_20 = "incorrecto";
}

$vigesp = isset($_POST['vigesp']) ? $_POST['vigesp'] : '';
if ($vigesp === '+C') {
    $verificar_21 = "correcto";
} elseif ($vigesp === '') {
    $verificar_21 = '';
} else {
    $verificar_21 = "incorrecto";
}

$vigesimo_segundo = isset($_POST['vigesimo_segundo']) ? $_POST['vigesimo_segundo'] : '';
if ($vigesimo_segundo === '3') {
    $verificar_22 = "correcto";
} elseif ($vigesimo_segundo === '') {
    $verificar_22 = '';
} else {
    $verificar_22 = "incorrecto";
}

$vigesimo_tercero = isset($_POST['vigesimo_tercero']) ? $_POST['vigesimo_tercero'] : '';
if ($vigesimo_tercero === '+C') {
    $verificar_23 = "correcto";
} elseif ($vigesimo_tercero === '') {
    $verificar_23 = '';
} else {
    $verificar_23 = "incorrecto";
}



$vigesimo_cuarto = isset($_POST['vigesimo_cuarto']) ? $_POST['vigesimo_cuarto'] : '';
if ($vigesimo_cuarto === '\frac{1}{10}') {
    $verificar_24 = "correcto";
} elseif ($vigesimo_cuarto === '') {
    $verificar_24 = '';
} else {
    $verificar_24 = "incorrecto";
}

$vigesimo_quinto = isset($_POST['vigesimo_quinto']) ? $_POST['vigesimo_quinto'] : '';
if ($vigesimo_quinto === 'e^{5x}') {
    $verificar_25 = "correcto";
} elseif ($vigesimo_quinto === '') {
    $verificar_25 = '';
} else {
    $verificar_25 = "incorrecto";
}

$vigesimo_sexto = isset($_POST['vigesimo_sexto']) ? $_POST['vigesimo_sexto'] : '';
if ($vigesimo_sexto === '+C') {
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
if ($vigesimo_octavo === '\frac{1}{2}') {
    $verificar_28 = "correcto";
} elseif ($vigesimo_octavo === '') {
    $verificar_28 = '';
} else {
    $verificar_28 = "incorrecto";
}

$vigesimo_noveno = isset($_POST['vigesimo_noveno']) ? $_POST['vigesimo_noveno'] : '';
if ($vigesimo_noveno === 'e^{x^2}' || $vigesimo_noveno === 'e^{x^{2}}') {
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
if ($trigesimo_segundo === '\frac{1}{3}') {
    $verificar_32 = "correcto";
} elseif ($trigesimo_segundo === '') {
    $verificar_32 = '';
} else {
    $verificar_32 = "incorrecto";
}

$trigesimo_tercero = isset($_POST['trigesimo_tercero']) ? $_POST['trigesimo_tercero'] : '';
if ($trigesimo_tercero === 'ln^2x' || $trigesimo_tercero === 'ln^{2}x') {
    $verificar_33 = "correcto";
} elseif ($trigesimo_tercero === '') {
    $verificar_33 = '';
} else {
    $verificar_33 = "incorrecto";
}

$trigesimo_cuarto = isset($_POST['trigesimo_cuarto']) ? $_POST['trigesimo_cuarto'] : '';
if ($trigesimo_cuarto === '+C') {
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
if ($trigesimo_sexto === 'Ln' || $trigesimo_sexto === 'ln') {
    $verificar_36 = "correcto";
} elseif ($trigesimo_sexto === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

$trigesimo_septimo = isset($_POST['trigesimo_septimo']) ? $_POST['trigesimo_septimo'] : '';
if ($trigesimo_septimo === '|lnx|' || $trigesimo_septimo === '[lnx]' || $trigesimo_septimo === '|Lnx|' || $trigesimo_septimo === '[Lnx]') {
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

$trigesimo_noveno = isset($_POST['trigesimo_noveno']) ? $_POST['trigesimo_noveno'] : '';
if ($trigesimo_noveno === '+C') {
    $verificar_39 = "correcto";
} elseif ($trigesimo_noveno === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}



$cuadragesimo = isset($_POST['cuadragesimo']) ? $_POST['cuadragesimo'] : '';
if ($cuadragesimo === '5') {
    $verificar_40 = "correcto";
} elseif ($cuadragesimo === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

$cuadragesimo_primero = isset($_POST['cuadragesimo_primero']) ? $_POST['cuadragesimo_primero'] : '';
if ($cuadragesimo_primero === '4') {
    $verificar_41 = "correcto";
} elseif ($cuadragesimo_primero === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

$cuadragesimo_segundo = isset($_POST['cuadragesimo_segundo']) ? $_POST['cuadragesimo_segundo'] : '';
if ($cuadragesimo_segundo === 'Ln|x|') {
    $verificar_42 = "correcto";
} elseif ($cuadragesimo_segundo === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

$cuadragesimo_tercero = isset($_POST['cuadragesimo_tercero']) ? $_POST['cuadragesimo_tercero'] : '';
if ($cuadragesimo_tercero === '+C') {
    $verificar_43 = "correcto";
} elseif ($cuadragesimo_tercero === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}



$cuadragesimo_cuarto = isset($_POST['cuadragesimo_cuarto']) ? $_POST['cuadragesimo_cuarto'] : '';
if ($cuadragesimo_cuarto === '3') {
    $verificar_44 = "correcto";
} elseif ($cuadragesimo_cuarto === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

$cuadragesimo_quinto = isset($_POST['cuadragesimo_quinto']) ? $_POST['cuadragesimo_quinto'] : '';
if ($cuadragesimo_quinto === '5') {
    $verificar_45 = "correcto";
} elseif ($cuadragesimo_quinto === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

$cuadragesimo_sexto = isset($_POST['cuadragesimo_sexto']) ? $_POST['cuadragesimo_sexto'] : '';
if ($cuadragesimo_sexto === '3') {
    $verificar_46 = "correcto";
} elseif ($cuadragesimo_sexto === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

$cuadragesimo_septimo = isset($_POST['cuadragesimo_septimo']) ? $_POST['cuadragesimo_septimo'] : '';
if ($cuadragesimo_septimo === 'x^5') {
    $verificar_47 = "correcto";
} elseif ($cuadragesimo_septimo === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}




$cuadragesimo_octavo = isset($_POST['cuadragesimo_octavo']) ? $_POST['cuadragesimo_octavo'] : '';
if ($cuadragesimo_octavo === '2') {
    $verificar_48 = "correcto";
} elseif ($cuadragesimo_octavo === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

$cuadragesimo_noveno = isset($_POST['cuadragesimo_noveno']) ? $_POST['cuadragesimo_noveno'] : '';
if ($cuadragesimo_noveno === '3x^3') {
    $verificar_49 = "correcto";
} elseif ($cuadragesimo_noveno === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

$quincuagesimo = isset($_POST['quincuagesimo']) ? $_POST['quincuagesimo'] : '';
if ($quincuagesimo === '3') {
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





$quincuagesimo_segundo = isset($_POST['quincuagesimo_segundo']) ? $_POST['quincuagesimo_segundo'] : '';
if ($quincuagesimo_segundo === '8') {
    $verificar_52 = "correcto";
} elseif ($quincuagesimo_segundo === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

$quincuagesimo_tercero = isset($_POST['quincuagesimo_tercero']) ? $_POST['quincuagesimo_tercero'] : '';
if ($quincuagesimo_tercero === '3') {
    $verificar_53 = "correcto";
} elseif ($quincuagesimo_tercero === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

$quincuagesimo_cuarto = isset($_POST['quincuagesimo_cuarto']) ? $_POST['quincuagesimo_cuarto'] : '';
if ($quincuagesimo_cuarto === '2') {
    $verificar_54 = "correcto";
} elseif ($quincuagesimo_cuarto === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

$quincuagesimo_quinto = isset($_POST['quincuagesimo_quinto']) ? $_POST['quincuagesimo_quinto'] : '';
if ($quincuagesimo_quinto === 'x^3') {
    $verificar_55 = "correcto";
} elseif ($quincuagesimo_quinto === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


$quincuagesimo_sexto = isset($_POST['quincuagesimo_sexto']) ? $_POST['quincuagesimo_sexto'] : '';
if ($quincuagesimo_sexto === '-4') {
    $verificar_56 = "correcto";
} elseif ($quincuagesimo_sexto === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

$quincuagesimo_septimo = isset($_POST['quincuagesimo_septimo']) ? $_POST['quincuagesimo_septimo'] : '';
if ($quincuagesimo_septimo === '2') {
    $verificar_57 = "correcto";
} elseif ($quincuagesimo_septimo === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

$quincuagesimo_octavo = isset($_POST['quincuagesimo_octavo']) ? $_POST['quincuagesimo_octavo'] : '';
if ($quincuagesimo_octavo === 'x') {
    $verificar_58 = "correcto";
} elseif ($quincuagesimo_octavo === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

$quincuagesimo_noveno = isset($_POST['quincuagesimo_noveno']) ? $_POST['quincuagesimo_noveno'] : '';
if ($quincuagesimo_noveno === '+C') {
    $verificar_59 = "correcto";
} elseif ($quincuagesimo_noveno === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}
}
}
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
        actualizarFormula7();
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
 

    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d}  \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('octavo').value || "";
    var g = document.getElementById('noveno').value || "";
    var d = document.getElementById('decimo').value || "";
    var e = document.getElementById('undecimo').value || "";


    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d} ${e} +C \\, `;

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
    var formula = ` \\ ${f} ${g} ${d}  \\, `;

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
 

    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}}{${g}} +C\\, `;
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
    

    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} \\, `;
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
 
    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula24').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula7() {
    // Obtener los valores de los inputs
    var f = document.getElementById('vigesimo_octavo').value || "";
    var g = document.getElementById('vigesimo_noveno').value || "";
    var d = document.getElementById('trigesimo').value || "";
 
    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d}   \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula7').innerHTML = `$$ ${formula} $$`;

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
 
    // Construir la fórmula dinámica
    var formula = ` \\ ${f} ${g} ${d}  \\, `;
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
    var formula = ` \\ ${f}${g} ${d}  \\\, `;
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
    var e = document.getElementById('cuadragesimo_tercero').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}}{ ${g} } ${d} ${e} \\, `;
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
    var formula = ` \\frac{${f}}{${g}} \\sqrt[${d}]{${e}}  +C \\\, `;
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
    var formula = ` \\frac{${f} \\sqrt{${g}} } { ${d} }  ${e} \\\, `;
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
    var formula = ` \\frac{${f}}{${g}} \\sqrt[${d}]{${e}}  +C \\\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula13').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula14() {
    // Obtener los valores de los inputs
    var f = document.getElementById('quincuagesimo_sexto').value || "";
    var g = document.getElementById('quincuagesimo_septimo').value || "";
    var d = document.getElementById('quincuagesimo_octavo').value || "";
    var e = document.getElementById('quincuagesimo_noveno').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}}{ \\sqrt[${g}]{${d}} } ${e} \\\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula14').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}
</script>
    
</head>
<body>
<div class="seccion izquierda">
    <form action="./diez.php" method="POST" onsubmit="handleSubmit(event)">
        cuando es diferente: como no es posible cambiar el 15x^2 dx para 4x^2 dx, entonces pasa 
        a dividir y solo quedaria sustituir x^2 dx. <br>


        <br><br>
        <p>
        La integral indefinida de \( 4x^2 \sqrt{(5x^3-3)^5} \) es: <br>
        \( \frac{$}{$} \sqrt{($$$$)^{$}}   \) <br><br>
        \(
        \int  4x^2 \sqrt{(5x^3-3)^5}  \, dx = \)
        <span id="formula">
            \( \frac{0}{0} \)
        </span> 
         <br><br>
        <input type="text" name="cuarto" size="8" id="cuarto" oninput="actualizarFormula()" value=<?php echo $cuarto?>>
        <input type="text" name="quinto" size="10" id="quinto" oninput="actualizarFormula()" value=<?php echo $quinto?>>
        <input type="text" name="sexto" size="5" id="sexto" oninput="actualizarFormula()" value=<?php echo $sexto?>>
 
        <br>
        <button type="submit">enviar</button>
        <?php echo $verificar_4 ?>
        <?php echo $verificar_5 ?>
        <?php echo $verificar_6 ?>
        <hr>
        



        La integral indefinida de \( 6x^5 (x^5-3)^6 dx \) es: <br>
        \( \frac{$}{$} ($$$$) + \frac{$}{$} ($$$$)   \) <br>
        \(
        \int  6x^5 (x^5-3)^6   \, dx = \)
        <span id="formula2">
        \( \frac{0}{0} \)
        </span>
        <br><br>
        <input type="text" name="octavo" size="8" id="octavo" oninput="actualizarFormula2()" value="<?php echo $octavo?>">
        <input type="text" name="noveno" size="8" id="noveno" oninput="actualizarFormula2()" value="<?php echo $noveno?>">
        <input type="text" name="decimo" size="8" id="decimo" oninput="actualizarFormula2()" value="<?php echo $decimo?>">
        <input type="text" name="undecimo" size="8" id="undecimo" oninput="actualizarFormula2()" value="<?php echo $undecimo?>">
    
        <br>
        <button type="submit">enviar</button>
        <?php echo $verificar_8 ?>
        <?php echo $verificar_9 ?>
        <?php echo $verificar_10 ?>
        <?php echo $verificar_11 ?>
        <br>
        Seria un error sacar las contantes \( \int 2u^7 + 6u^6 \) , es decir, \( 12 \int u^7 + u^6 \).
        <br> mas bien \( 2 \int u^7  + 6 \int u^6 \)
        <hr>


        <br>
        La integral indefinida de \( \frac{6x+5}{\sqrt[3]{3x^2+5x}} dx \) es: <br>
        \(
        \int \frac{6x+5}{\sqrt[3]{3x^2+5x}}  \, dx = 
        \)
        <span id="formula3">
            \( \frac{0}{0} \)
        </span> 
        <br><br>

        <input type="text" name="duodecimo" size="5" id="duodecimo" oninput="actualizarFormula3()" value="<?php echo $duodecimo ?>">
        <input type="text" name="decimotercero" size="9" id="decimotercero" oninput="actualizarFormula3()" value="<?php echo $decimotercero ?>">
        <input type="text" name="decimocuarto" size="5" id="decimocuarto" oninput="actualizarFormula3()" value="<?php echo $decimocuarto ?>">
 
        <br>
        <button type="submit">enviar</button>

        <?php echo $verificar_12 ?>
        <?php echo $verificar_13 ?>
        <?php echo $verificar_14 ?>
        </p>
        <hr>
        <Strong>integral de exponencial:</Strong> <br>
        \( \int a^x dx = \, \frac{a^x}{Lna} \,+ \, C \) <br><br>
        \( \int 3^x dx = \frac{3^x}{Ln3} +C \), pero si el exponente va acompañado: <br><br>

        \( \int 2^{3x} dx =  \) <br>
        en este caso \( u = 3x, du = 3 dx.  ->   \frac{du}{3} = dx \) <br>
        sustituimos: <br><br>
        \( \int 2^u \,\,\, \frac{du}{3} \) =  \( \frac{1}{3} \int 2^u \,\,\, du \) <br><br>
        aplicamos la formula y: <br><br>
        \( \frac{1}{3} \,\,\, \frac{2^u}{Ln[2]}  +C  =   \frac{1}{3} \,\,\, \frac{2^{3x}}{Ln2} \) <br><br>
        simplificamos: <br><br>
        \(  \frac{2^{3x}}{3Ln2} +C \) =  \(  \frac{2^{3x}}{Ln2^3} +C \) <br><br>

        = \(  \frac{2^{3x}}{Ln8} +C \) 
        <hr>
        <p>
        La integral indefinida de \( 6x \,\,\, 6^{3x^2+1} \) es: <br>
        \(
        \int 6x \,\,\, 6^{3x^2+1}  \, dx = 
        \)
        <span id="formula4">
            \( \frac{0}{0} \)
        </span> 
        </p>
        <br><br>

        <input type="text" name="decimosexto" size="5" id="decimosexto" oninput="actualizarFormula4()" value="<?php echo $decimosexto ?>">
        <input type="text" name="decimoseptimo" size="5" id="decimoseptimo" oninput="actualizarFormula4()" value="<?php echo $decimoseptimo ?>">
         
        <br>
        <button type="submit">enviar</button>

        <?php echo $verificar_16 ?>
        <?php echo $verificar_17 ?>
        <hr>
        <strong>Integral de la exponencial: </strong>
        \( \int e^x \,  \, dx = e^x  \, +  \, C \) cuando la x esta acompañada: <br><br>
        \( \int e^{2x} dx \) 
        <br>
        \( u = 2x, \,\,du=2 \,\, dx \,\, -> \,\, \frac{du}{2} = dx  \)
        <br>
        \(  \frac{1}{2} \int  e^u du\) =   \(  \frac{1}{2}  e^{2x} + C\) <br>

        El patron podria ser visto como que se divide entre 1 el exponente y eso se multiplica por e 
        o en su defecto por su acompañante.
        <hr> <br><br>
 
<br>
    </form>
</div>
<div class="seccion derecha">
    <form action="./diez.php" method="POST" onsubmit="handleSubmit(event)">
    <p>
    La integral indefinida de \( 6e^{3x} \,\, dx  \) es: <br>
    \(
    \int 6e^{3x} \,\, dx \, = 
    \)
    <span id="formula5">
        \( \frac{0}{0} \)
    </span> 
    </p>
    <br><br>

    <input type="text" name="vigesimo" size="5" id="vigesimo" oninput="actualizarFormula5()" value="<?php echo $vigesimo ?>">
    <input type="text" name="vigesp" size="5" id="vigesp" oninput="actualizarFormula5()" value="<?php echo $vigesp ?>">
    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <hr>
    
    La integral indefinida de \( \frac{e^{5x}}{2} \) es: <br>
    \(
    \int \frac{e^{5x}}{2} \, dx = 
    \)
    <span id="formula24">
        \( \frac{0}{0} \)
    </span> 
    <br><br>
    

    <input type="text" name="vigesimo_cuarto" size="5" id="vigesimo_cuarto" oninput="actualizarFormula6()" value="<?php echo $vigesimo_cuarto ?>">
    <input type="text" name="vigesimo_quinto" size="5" id="vigesimo_quinto" oninput="actualizarFormula6()" value="<?php echo $vigesimo_quinto ?>">
    <input type="text" name="vigesimo_sexto" size="5" id="vigesimo_sexto" oninput="actualizarFormula6()" value="<?php echo $vigesimo_sexto ?>">
 
    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>
    <?php echo $verificar_26 ?>

    <hr>
    <p>
    La integral indefinida de \( x^{\frac{1}{2}} \) es: <br>
    \(
    \int x^{\frac{1}{2}} \, dx = 
    \)
    <span id="formula7">
        \( \frac{0}{0} \)
    </span> 
    </p>
    <br><br>

    <input type="text" name="vigesimo_octavo" size="5" id="vigesimo_octavo" oninput="actualizarFormula7()" value="<?php echo $vigesimo_octavo ?>">
    <input type="text" name="vigesimo_noveno" size="5" id="vigesimo_noveno" oninput="actualizarFormula7()" value="<?php echo $vigesimo_noveno ?>">
    <input type="text" name="trigesimo" size="5" id="trigesimo" oninput="actualizarFormula7()" value="<?php echo $trigesimo ?>">
 
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_28 ?>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
    <hr>
    Integral de logaritmo: cuando hay logaritmo, debemos empezar a ver si mas bien lo que se 
    sustituye es el logaritmo. <br>
    Recordemos que la derivada de logaritmo es \( \frac{1}{x} \). <br>
    entonces, para \( \int \frac{lnx}{x} \,\, dx\) (si la x estuviera en el numerador se hace entonces 
    por partes). <br><br>
    en este caso se sustituye logaritmo natural. \( u = Lnx \,\,\,\,\)  \( du = \frac{1}{x} dx\) <br><br>
    notemos que:  \( \int Lnx \frac{1}{x} \) =  \( \,\,\,\, \int u \, * \, du \) <br><br>
    \( = \,\, \frac{u^2}{2} + C \) = \(  \frac{(lnx)^2}{2} \,\, +C \) = \(  \frac{ln^2x}{2} \,\, +C \) <br><br>
    recordar: \( f(x) \,\,  = \,\, ln(u) \) ->   \( f'(x) \,\,  = \,\, \frac{u'}{u} \) <br><br>
    \( (2 lnx)^2 \) =  \( \,\, 4 ln^2x \) <br>
    <hr>
    <p>
        simplificar lo maximo posible. notese por propiedades de logaritmo que el 2 se puede
        bajar de x, si no se hace esto, tocaria derivar lnx^2 en lugar de lnx....<br><br>
    La integral indefinida de \(  \frac{lnx^2}{3x} dx \) es: <br>
    \(
    \int \frac{lnx^2}{3x} \, dx = 
    \)
    <span id="formula8">
        \( \frac{0}{0} \)
    </span> 
    </p>
    <br><br>

    <input type="text" name="trigesimo_segundo" size="5" id="trigesimo_segundo" oninput="actualizarFormula8()" value="<?php echo $trigesimo_segundo ?>">
    <input type="text" name="trigesimo_tercero" size="5" id="trigesimo_tercero" oninput="actualizarFormula8()" value="<?php echo $trigesimo_tercero ?>">
    <input type="text" name="trigesimo_cuarto" size="5" id="trigesimo_cuarto" oninput="actualizarFormula8()" value="<?php echo $trigesimo_cuarto ?>">
 
    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <?php echo $verificar_34 ?>
    



    <hr>
    Se cumple, la x esta en el denominador. (1/x). no importa si ln esta arriba o abajo con tal 
    que esto se cumpla<br><br>



    <p>
    La integral indefinida de \( \frac{dx}{xLnx} \) es: <br>
    \(
    \int \frac{dx}{xLnx} \, dx = 
    \)
    <span id="formula9">
        \( \frac{0}{0} \)
    </span> 
    </p>
    <br><br>

    <input type="text" name="trigesimo_sexto" size="5" id="trigesimo_sexto" oninput="actualizarFormula9()" value="<?php echo $trigesimo_sexto ?>">
    <input type="text" name="trigesimo_septimo" size="5" id="trigesimo_septimo" oninput="actualizarFormula9()" value="<?php echo $trigesimo_septimo ?>">
    <input type="text" name="trigesimo_octavo" size="5" id="trigesimo_octavo" oninput="actualizarFormula9()" value="<?php echo $trigesimo_octavo ?>">
 
    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <hr>
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
        href="once.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
