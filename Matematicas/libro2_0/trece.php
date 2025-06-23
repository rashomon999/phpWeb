<?php
// Variables de respuesta
$primero = ""; $segundo = ""; $tercero = ""; $cuarto = ""; $quinto = "";
$sexto = ""; $septimo = ""; $octavo = ""; $noveno = ""; $decimo = "";
$undecimo = ""; $duodecimo = ""; $decimotercero = ""; $decimocuarto = ""; $decimoquinto = "";
$decimosexto = ""; $decimoseptimo = ""; $decimooctavo = ""; $decimonoveno = ""; $vigesimo = "";
$vigesp = ""; $vigesimo_segundo = ""; $vigesimo_tercero = ""; $vigesimo_cuarto = ""; $vigesimo_quinto = "";
$vigesimo_sexto = ""; $vigesimo_septimo = ""; $vigesimo_octavo = ""; $vigesimo_noveno = ""; $trigesimo = "";
$trigesimo_primero = ""; $trigesimo_segundo = ""; $trigesimo_tercero = ""; $trigesimo_cuarto = ""; $trigesimo_quinto = "";
$trigesimo_sexto = ""; $trigesimo_septimo = ""; $trigesimo_octavo = ""; $trigesimo_noveno = ""; $cuadragesimo = "";
$cuadragesimo_primero = ""; $cuadragesimo_segundo = ""; $cuadragesimo_tercero = ""; $cuadragesimo_cuarto = ""; $cuadragesimo_quinto = "";
$cuadragesimo_sexto = ""; $cuadragesimo_septimo = ""; $cuadragesimo_octavo = ""; $cuadragesimo_noveno = ""; $quincuagesimo = "";
$quincuagesimo_primero = ""; $quincuagesimo_segundo = ""; $quincuagesimo_tercero = ""; $quincuagesimo_cuarto = ""; $quincuagesimo_quinto = "";
$quincuagesimo_sexto = ""; $quincuagesimo_septimo = ""; $quincuagesimo_octavo = ""; $quincuagesimo_noveno = "";

// Variables de verificación
$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = ''; $verificar_4 = ''; $verificar_5 = '';
$verificar_6 = ''; $verificar_7 = ''; $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = '';
$verificar_11 = ''; $verificar_12 = ''; $verificar_13 = ''; $verificar_14 = ''; $verificar_15 = '';
$verificar_16 = ''; $verificar_17 = ''; $verificar_18 = ''; $verificar_19 = ''; $verificar_20 = '';
$verificar_21 = ''; $verificar_22 = ''; $verificar_23 = ''; $verificar_24 = ''; $verificar_25 = '';
$verificar_26 = ''; $verificar_27 = ''; $verificar_28 = ''; $verificar_29 = ''; $verificar_30 = '';
$verificar_31 = ''; $verificar_32 = ''; $verificar_33 = ''; $verificar_34 = ''; $verificar_35 = '';
$verificar_36 = ''; $verificar_37 = ''; $verificar_38 = ''; $verificar_39 = ''; $verificar_40 = '';
$verificar_41 = ''; $verificar_42 = ''; $verificar_43 = ''; $verificar_44 = ''; $verificar_45 = '';
$verificar_46 = ''; $verificar_47 = ''; $verificar_48 = ''; $verificar_49 = ''; $verificar_50 = '';
$verificar_51 = ''; $verificar_52 = ''; $verificar_53 = ''; $verificar_54 = ''; $verificar_55 = '';
$verificar_56 = ''; $verificar_57 = ''; $verificar_58 = ''; $verificar_59 = '';

// Variable para mostrar solución
$mostrar_solucion = '';

if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
  
    if ($mostrar_solucion === 'mostrar_solucion') {  
        // Establecer todas las respuestas correctas
        $primero = 'cx+C';
        $verificar_1 = "correcto";
        
        $segundo = 'x';
        $verificar_2 = "correcto";
        
        $tercero = 'xu+c';
        $verificar_3 = "correcto";
        
        $cuarto = 'xLn(2x)-x+C';
        $verificar_4 = "correcto";
        
        $quinto = '2x';
        $verificar_5 = "correcto";
        
        $sexto = '2';
        $verificar_6 = "correcto";
        
        $septimo = '+C';
        $verificar_7 = "correcto";
        
        $octavo = '\frac{x^3Lnx}{3}-\frac{x}{9}+C';
        $verificar_8 = "correcto";
        
        $noveno = '4';
        $verificar_9 = "correcto";
        
        $decimo = 'x';
        $verificar_10 = "correcto";
        
        $undecimo = '+C';
        $verificar_11 = "correcto";
        
        $duodecimo = '2xln(x)-2x+C';
        $verificar_12 = "correcto";
        
        $decimotercero = '3x';
        $verificar_13 = "correcto";
        
        $decimocuarto = '3';
        $verificar_14 = "correcto";
        
        $decimoquinto = '+C';
        $verificar_15 = "correcto";
        
        $decimosexto = '\frac{1}{2}x^3e^{2x}-\frac{3}{4}x^2e^{2x}+\frac{3}{4}xe^{2x}-\frac{3}{8}e^{2x}+C';
        $verificar_16 = "correcto";
        
        $vigesimo = '-\frac{1}{2}x^3Cos(2x)+\frac{3}{4}x^2Sin(2x)+\frac{3}{4}xCos(2x)-\frac{3}{8}Sin(2x)+C';
        $verificar_20 = "correcto";
        
        $vigesp = 'x';
        $verificar_21 = "correcto";
        
        $vigesimo_segundo = '3';
        $verificar_22 = "correcto";
        
        $vigesimo_tercero = '+C';
        $verificar_23 = "correcto";
        
        $vigesimo_cuarto = '3x';
        $verificar_24 = "correcto";
        
        $vigesimo_quinto = '5/3';
        $verificar_25 = "correcto";
        
        $vigesimo_sexto = '3';
        $verificar_26 = "correcto";
        
        $vigesimo_septimo = '+C';
        $verificar_27 = "correcto";
        
        $vigesimo_octavo = '2x';
        $verificar_28 = "correcto";
        
        $vigesimo_noveno = '3/2';
        $verificar_29 = "correcto";
        
        $trigesimo = '3';
        $verificar_30 = "correcto";
        
        $trigesimo_primero = '+C';
        $verificar_31 = "correcto";
        
        $trigesimo_segundo = '3x';
        $verificar_32 = "correcto";
        
        $trigesimo_tercero = '2/3';
        $verificar_33 = "correcto";
        
        $trigesimo_cuarto = '2';
        $verificar_34 = "correcto";
        
        $trigesimo_quinto = '+C';
        $verificar_35 = "correcto";
        
        $trigesimo_sexto = 'Ln';
        $verificar_36 = "correcto";
        
        $trigesimo_septimo = '|x|';
        $verificar_37 = "correcto";
        
        $trigesimo_octavo = '+C';
        $verificar_38 = "correcto";
        
        $trigesimo_noveno = '+C';
        $verificar_39 = "correcto";
        
        $cuadragesimo = '5';
        $verificar_40 = "correcto";
        
        $cuadragesimo_primero = '4';
        $verificar_41 = "correcto";
        
        $cuadragesimo_segundo = 'Ln|x|';
        $verificar_42 = "correcto";
        
        $cuadragesimo_tercero = '+C';
        $verificar_43 = "correcto";
        
        $cuadragesimo_cuarto = '3';
        $verificar_44 = "correcto";
        
        $cuadragesimo_quinto = '5';
        $verificar_45 = "correcto";
        
        $cuadragesimo_sexto = '3';
        $verificar_46 = "correcto";
        
        $cuadragesimo_septimo = 'x^5';
        $verificar_47 = "correcto";
        
        $cuadragesimo_octavo = '2';
        $verificar_48 = "correcto";
        
        $cuadragesimo_noveno = '3x^3';
        $verificar_49 = "correcto";
        
        $quincuagesimo = '3';
        $verificar_50 = "correcto";
        
        $quincuagesimo_primero = '+C';
        $verificar_51 = "correcto";
        
        $quincuagesimo_segundo = '8';
        $verificar_52 = "correcto";
        
        $quincuagesimo_tercero = '3';
        $verificar_53 = "correcto";
        
        $quincuagesimo_cuarto = '2';
        $verificar_54 = "correcto";
        
        $quincuagesimo_quinto = 'x^3';
        $verificar_55 = "correcto";
        
        $quincuagesimo_sexto = '-4';
        $verificar_56 = "correcto";
        
        $quincuagesimo_septimo = '2';
        $verificar_57 = "correcto";
        
        $quincuagesimo_octavo = 'x';
        $verificar_58 = "correcto";
        
        $quincuagesimo_noveno = '+C';
        $verificar_59 = "correcto";
        
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

    if ($cuarto === 'xLn(2x)-x+C') {
        $verificar_4 = "correcto";
    } elseif ($cuarto === '') {
        $verificar_4 = '';
    } else {
        $verificar_4 = "incorrecto";
    }

    
    // Verificar la respuesta de la segunda pregunta
    $quinto = isset($_POST['quinto']) ? $_POST['quinto'] : '';

    if ($quinto === '2x') {
        $verificar_5 = "correcto";
    } elseif ($quinto === '') {
        $verificar_5 = '';
    } else {
        $verificar_5 = "incorrecto";
    }

    
    // Verificar la respuesta de la segunda pregunta
    $sexto = isset($_POST['sexto']) ? $_POST['sexto'] : '';

    if ($sexto === '2') {
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

if ($octavo === '\frac{x^3Lnx}{3}-\frac{x}{9}+C') {
    $verificar_8 = "correcto";
} elseif ($octavo === '') {
    $verificar_8 = '';
} else {
    $verificar_8 = "incorrecto";
}

// Verificar la respuesta de la novena pregunta
$noveno = isset($_POST['noveno']) ? $_POST['noveno'] : '';

if ($noveno === '4') {
    $verificar_9 = "correcto";
} elseif ($noveno === '') {
    $verificar_9 = '';
} else {
    $verificar_9 = "incorrecto";
}

// Verificar la respuesta de la décima pregunta
$decimo = isset($_POST['decimo']) ? $_POST['decimo'] : '';

if ($decimo === 'x') {
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
if ($duodecimo === '2xln(x)-2x+C' || $duodecimo === '2xLn(x)-2x+C') {
    $verificar_12 = "correcto";
} elseif ($duodecimo === '') {
    $verificar_12 = '';
} else {
    $verificar_12 = "incorrecto";
}

// Verificar la respuesta de la decimotercera pregunta
$decimotercero = isset($_POST['decimotercero']) ? $_POST['decimotercero'] : '';
if ($decimotercero === '3x') {
    $verificar_13 = "correcto";
} elseif ($decimotercero === '') {
    $verificar_13 = '';
} else {
    $verificar_13 = "incorrecto";
}

// Verificar la respuesta de la decimocuarta pregunta
$decimocuarto = isset($_POST['decimocuarto']) ? $_POST['decimocuarto'] : '';
if ($decimocuarto === '3') {
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
if ($decimosexto === '\frac{1}{2}x^3e^{2x}-\frac{3}{4}x^2e^{2x}+\frac{3}{4}xe^{2x}-\frac{3}{8}e^{2x}+C') {
    $verificar_16 = "correcto";
} elseif ($decimosexto === '') {
    $verificar_16 = '';
} else {
    $verificar_16 = "incorrecto";
}



$vigesimo = isset($_POST['vigesimo']) ? $_POST['vigesimo'] : '';
if ($vigesimo === '-\frac{1}{2}x^3Cos(2x)+\frac{3}{4}x^2Sin(2x)+\frac{3}{4}xCos(2x)-\frac{3}{8}Sin(2x)+C') {
    $verificar_20 = "correcto";
} elseif ($vigesimo === '') {
    $verificar_20 = '';
} else {
    $verificar_20 = "incorrecto";
}

$vigesp = isset($_POST['vigesp']) ? $_POST['vigesp'] : '';
if ($vigesp === 'x') {
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
if ($vigesimo_cuarto === '3x') {
    $verificar_24 = "correcto";
} elseif ($vigesimo_cuarto === '') {
    $verificar_24 = '';
} else {
    $verificar_24 = "incorrecto";
}

$vigesimo_quinto = isset($_POST['vigesimo_quinto']) ? $_POST['vigesimo_quinto'] : '';
if ($vigesimo_quinto === '5/3') {
    $verificar_25 = "correcto";
} elseif ($vigesimo_quinto === '') {
    $verificar_25 = '';
} else {
    $verificar_25 = "incorrecto";
}

$vigesimo_sexto = isset($_POST['vigesimo_sexto']) ? $_POST['vigesimo_sexto'] : '';
if ($vigesimo_sexto === '3') {
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
if ($trigesimo_segundo === '3x') {
    $verificar_32 = "correcto";
} elseif ($trigesimo_segundo === '') {
    $verificar_32 = '';
} else {
    $verificar_32 = "incorrecto";
}

$trigesimo_tercero = isset($_POST['trigesimo_tercero']) ? $_POST['trigesimo_tercero'] : '';
if ($trigesimo_tercero === '2/3') {
    $verificar_33 = "correcto";
} elseif ($trigesimo_tercero === '') {
    $verificar_33 = '';
} else {
    $verificar_33 = "incorrecto";
}

$trigesimo_cuarto = isset($_POST['trigesimo_cuarto']) ? $_POST['trigesimo_cuarto'] : '';
if ($trigesimo_cuarto === '2') {
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
if ($trigesimo_septimo === '|x|') {
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
 


    // Construir la fórmula dinámica
    var formula = ` \\ ${f} \\, `;

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
 

    // Construir la fórmula dinámica
    var formula = ` \\ ${f} \\, `;

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
    
    var formula = ` \\ ${f}  \\, `;

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
 

    // Construir la fórmula dinámica
    var formula = ` \\ ${f} \\, `;
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
 

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
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
    var formula = ` \\frac{${f}^{${g}}}{ ${d} }  ${e} \\, `;
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
    var e = document.getElementById('trigesimo_primero').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}^{${g}}}{ ${d} }  ${e} \\, `;
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
    var e = document.getElementById('trigesimo_quinto').value || "";

    // Construir la fórmula dinámica
    var formula = ` \\frac{${f}^{${g}}}{ ${d} }  ${e} \\, `;
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
    <form action="./trece.php" method="POST" onsubmit="handleSubmit(event)">
    Recordemos que para que sea sustitucion debe ser una fraccion y la x debe estar en el denominador
     (esto significa: derivada implicita 1/x en la integral). <br><br>

    en este caso no tenemos eso: \( \int Ln(x) dx \,\, \) <br><br>
    
    No parecen haber 2 funciones, entonces utilizamos la estrategia de colocar un 1 (como function 
    algebraica). <br><br>

    \( \int Ln(x) 1 dx \,\, \) <br><br>

    \( u = Ln(x) \,\,\, , \,\,  dv= dx \) <br><br>
    \( du=\frac{1}{x} dx \,\,\,  , \,\, v = x\) <br><br>

    =\( Lnx * x -  \int x * \frac{1}{x} \, dx \) <br><br>

    =\( x Lnx - x + C \) 

    <hr> <br><br>
    La integral indefinida de \( Ln(2x) \) es: <br>
        \(
        \int Ln(2x) dx = \)
        <span id="formula">
            \( \frac{0}{0} \)
        </span> 
         <br><br>
        <input type="text" name="cuarto" size="20" id="cuarto" oninput="actualizarFormula()" value=<?php echo $cuarto?>>
         
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_4 ?>
    <hr>
    Para que no sea largo, escribir la respuesta en forma de 2 fracciones:  <br><br>


    La integral indefinida de \( x^2 Ln(x) dx \) es: <br>
        \(
        \int  x^2 Ln(x) \, dx = \)
        <span id="formula2">
        \( \frac{0}{0} \)
    </span>
    <br><br>
    <input type="text" name="octavo" size="20" id="octavo" oninput="actualizarFormula2()" value="<?php echo $octavo?>">
     
    <br>
    <button type="submit">enviar</button>
    <?php echo $verificar_8 ?>
    <hr>




    <p>
    La integral indefinida de \( ln(x^2) \) es: <br>
    \(
    \int ln(x^2) \, dx = 
    \)
    </p>
    <span id="formula3">
        \( \frac{0}{0} \)
    </span> 
     
    <br><br>

    <input type="text" name="duodecimo" size="20" id="duodecimo" oninput="actualizarFormula3()" value="<?php echo $duodecimo ?>">
  
    <br>
    <button type="submit">enviar</button>

     <?php echo $verificar_12 ?>
    <hr>
    <h5>Caso: integrar varias veces por partes:</h5>
    \(  \int x^2 e^x \)
    <br><br>
    \( u = x^2  \,\,\, , \,\,\, dv= e^x dx  \) <br><br>
    \( du= 2x \,\,\, , \,\,\, v=e^x \) <br><br>
    \(  x^2 * e^x - \int e^x * 2x \) <br><br>
    =  \(  x^2 * e^x - 2 \int e^x * x \) <br><br>
    Notamos como se hizo mas facil pero aun es complicado de resolver,
    entonces volvemos a integrar:  <br><br>
    =  \(  x^2 * e^x - 2(   ) \) <br><br>
    \( u=x  \,\,\, , \,\,\, dv=e^x  \) <br><br>
    volvemos a derivar para este caso <br><br>
    \( du=dx  \,\,\, , \,\,\, v=e^x  \) <br><br>
    =  \(  x^2 * e^x - 2(x*e^x - \int e^x dx  ) \) <br><br>
    =  \(  x^2 * e^x - 2(x*e^x - e^x)+C \) <br><br>
    =  \(  x^2 e^x - 2xe^x + 2e^x + C  \) <br><br>
     <img src="../img/Captura de pantalla 2024-12-16 154911.png" alt="" width="500">
    
    </form>
</div>
<div class="seccion derecha">
    <form action="./trece.php" method="POST" onsubmit="handleSubmit(event)">
    La integral indefinida de \( x^3 e^{2x} \) es: <br>
    \(
    \int  x^3 e^{2x} \, dx = 
    \)
    <span id="formula4">
        \( \frac{0}{0} \)
    </span> 
    <br><br>

    <input type="text" name="decimosexto" size="20" id="decimosexto" oninput="actualizarFormula4()" value="<?php echo $decimosexto ?>">

    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_16 ?>

    <hr>
    <h5>Otro ejemplo calcular 2 veces:  </h5> 
    Al igual que con e, si no hay variable implicita por fuera de Cos significa que no se puede: <br><br>
    \( \int x^2 Cosx\) <br><br>
    \(  u=x^2 \,\,\, , \,\,\, dv=Cosx \) <br><br>
    \(  du=2x \,\,\, , \,\,\, v = Senx \) <br><br>
    \( = x^2 * Senx - \int Senx * 2x \) <br>
    Antes de vovler a integrar sacamos constantes
    <br>
    \(  = x^2 * Senx - 2 \int Senx * x \) <br><br>
    Todavia no se puede integrar, la deriva de x es 1, y de donde sacamos x en du(no se puede). <br><br>
    \(  u=x \,\,\, , \,\,\, dv=Senx \) <br><br>
    \(  du=dx \,\,\, , \,\,\, v = -Cosx \) <br><br>
    \(  = x^2 * Senx - 2(x*(-Cosx) - \int -Cosx dx )\) <br><br>
    \(  = x^2 * Senx - 2(-xCosx + Senx) +C\) <br><br>
    \(  = x^2 Senx + 2xCosx - 2Senx +C\) <br><br>
    <img src="../img/Captura de pantalla 2024-12-16 162918.png" alt="" width="500">

    <hr>



    <p>
    respuesta tipo: -fraccion componenteAlgebraico componente logaritmico(ang). 
      ejemplo = -\frac{1}{1}x^xCos(x)...
    <br><br>
    La integral indefinida de \( x^3 Sen2x \, dx \) es: <br>
    \(
    \int x^3 Sen2x \, dx \, dx = 
    \)
    </p>

    <span id="formula5">
        \( \frac{0}{0} \)
    </span> 
     
    <br><br>

    <input type="text" name="vigesimo" size="20" id="vigesimo" oninput="actualizarFormula5()" value="<?php echo $vigesimo ?>">
     
    <br>
    <button type="submit">enviar</button>

    <?php echo $verificar_20 ?>

    <hr>
    Integral ciclica por partes:
    \( \int Senx e^x\)
    \(
    \int Senx e^x \, dx \, dx = 
    \)
    \( u=Senx  \,\,\, , \,\,\, dv=e^x  \)
    \( du=Cosx  \,\,\, v=e^x  \) <br>
    integramos <br><br>
    \( \int Senx e^x  = Senx*e^x - \int e^x*Cosx \) <br>
    nuevamente esta integral tiene una funcion trigonometrica y una exponencial. <br><br>
    \( \int Senx e^x  = Senx*e^x - \int e^x*Cosx \) <br>
    \( u=Cosx \,\,\, , \,\,\, dv=e^x  \) <br>
    \( du=-Senx \, dx\,\,\, , \,\,\, v=e^x  \) <br>
    \( \int Senx e^x  = Senx*e^x - [Cosx*e^x - \int e^x * -Senx dx]    \) <br>
    \( \int Senx e^x  = Senx*e^x - [Cosx*e^x + \int e^x * Senx dx]    \) <br><br>
    Ahora si nos fijamos volvimos al principio. para solucionar esto despejamos.pero 
    primero quitamos el corchete. <br><br>
    \( \int Senx e^x  = Senx*e^x - [ Cosx*e^x + \int e^x * Senx dx]    \) <br>
    \( \int Senx e^x  = Senx*e^x - Cosx*e^x - \int e^x * Senx dx    \) <br>
    \( \int e^xSenx + \int  e^x Senx  = e^x Senx- e^x Cosx dx   \) <br>
    \( 2 \int e^x  Senx   = e^x Senx- e^x  Cosxdx   \) <br><br>
    factor comun y pasamos el dos a dividir.
    <br>
    \(  \int e^x  Senx   = \frac{e^x}{2} \, (Senx- Cosx) dx   \)

    
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
        href="catorce.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
