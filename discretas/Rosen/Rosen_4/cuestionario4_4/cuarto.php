<?php
 
for ($i = 1; $i <= 230; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 230; $i++) {
    ${"verificar_" . $i} = '';
}

     

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas para las tablas de multiplicar
        
        // Tabla del 12
        $respuesta_111 = '24'; 
        $respuesta_112 = '36';
        $respuesta_113 = '48';
        $respuesta_114 = '60';
        $respuesta_115 = '72';
        $respuesta_116 = '84';
        $respuesta_117 = '96';
        $respuesta_118 = '108';
        $respuesta_119 = '120';
        $respuesta_120 = '132';
        $respuesta_121 = '144';
        
        // Tabla del 13
        $respuesta_1 = '26';
        $respuesta_2 = '39';
        $respuesta_3 = '52';
        $respuesta_4 = '65';
        $respuesta_5 = '78';
        $respuesta_6 = '91';
        $respuesta_7 = '104';
        $respuesta_8 = '117';
        $respuesta_9 = '130';
        $respuesta_10 = '143';
        $respuesta_11 = '156';
        
        // Tabla del 14
        $respuesta_12 = '28';
        $respuesta_13 = '42';
        $respuesta_14 = '56';
        $respuesta_15 = '70';
        $respuesta_16 = '84';
        $respuesta_17 = '98';
        $respuesta_18 = '112';
        $respuesta_19 = '126';
        $respuesta_20 = '140';
        $respuesta_21 = '154';
        $respuesta_22 = '168';
        
        // Tabla del 15
        $respuesta_23 = '30';
        $respuesta_24 = '45';
        $respuesta_25 = '60';
        $respuesta_26 = '75';
        $respuesta_27 = '90';
        $respuesta_28 = '105';
        $respuesta_29 = '120';
        $respuesta_30 = '135';
        $respuesta_31 = '150';
        $respuesta_32 = '165';
        $respuesta_33 = '180';
        
        // Tabla del 16
        $respuesta_34 = '32';
        $respuesta_35 = '48';
        $respuesta_36 = '64';
        $respuesta_37 = '80';
        $respuesta_38 = '96';
        $respuesta_39 = '112';
        $respuesta_40 = '128';
        $respuesta_41 = '144';
        $respuesta_42 = '160';
        $respuesta_43 = '176';
        $respuesta_44 = '192';
        
        // Tabla del 17
        $respuesta_45 = '34';
        $respuesta_46 = '51';
        $respuesta_47 = '68';
        $respuesta_48 = '85';
        $respuesta_49 = '102';
        $respuesta_50 = '119';
        $respuesta_51 = '136';
        $respuesta_52 = '153';
        $respuesta_53 = '170';
        $respuesta_54 = '187';
        $respuesta_55 = '204';
        
        // Tabla del 18
        $respuesta_56 = '36';
        $respuesta_57 = '54';
        $respuesta_58 = '72';
        $respuesta_59 = '90';
        $respuesta_60 = '108';
        $respuesta_61 = '126';
        $respuesta_62 = '144';
        $respuesta_63 = '162';
        $respuesta_64 = '180';
        $respuesta_65 = '198';
        $respuesta_66 = '216';
        
        // Tabla del 19
        $respuesta_67 = '38';
        $respuesta_68 = '57';
        $respuesta_69 = '76';
        $respuesta_70 = '95';
        $respuesta_71 = '114';
        $respuesta_72 = '133';
        $respuesta_73 = '152';
        $respuesta_74 = '171';
        $respuesta_75 = '190';
        $respuesta_76 = '209';
        $respuesta_77 = '228';
        
        // Tabla del 20
        $respuesta_78 = '40';
        $respuesta_79 = '60';
        $respuesta_80 = '80';
        $respuesta_81 = '100';
        $respuesta_82 = '120';
        $respuesta_83 = '140';
        $respuesta_84 = '160';
        $respuesta_85 = '180';
        $respuesta_86 = '200';
        $respuesta_87 = '220';
        $respuesta_88 = '240';
        
        // Tabla del 21
        $respuesta_89 = '42';
        $respuesta_90 = '63';
        $respuesta_91 = '84';
        $respuesta_92 = '105';
        $respuesta_93 = '126';
        $respuesta_94 = '147';
        $respuesta_95 = '168';
        $respuesta_96 = '189';
        $respuesta_97 = '210';
        $respuesta_98 = '231';
        $respuesta_99 = '252';
        
        // Tabla del 22
        $respuesta_100 = '44';
        $respuesta_101 = '66';
        $respuesta_102 = '88';
        $respuesta_103 = '110';
        $respuesta_104 = '132'; 
        $respuesta_105 = '154';
        $respuesta_106 = '176';
        $respuesta_107 = '198';
        $respuesta_108 = '220';
        $respuesta_109 = '242';
        $respuesta_110 = '264';
        
        // Marcar todas como correctas
    $verificar_1 = $verificar_2 = $verificar_3 = /* ... todas las variables de verificación ... */ $verificar_122 = "correcto";
    } else {

// Respuestas 1-10
$respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
$respuesta_1_dos = str_replace(' ','',$respuesta_1);
if ($respuesta_1_dos === 'b^{n-1}\equiv1\pmod{n}' || $respuesta_1_dos === 'b^{n-1}\equiv1(modn)') { 
    $verificar_1 = "correcto";
} elseif ($respuesta_1_dos === '') {
    $verificar_1 = '';
} else {
    $verificar_1 = "incorrecto";
}

$respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
if ($respuesta_2 === 'n') { 
    $verificar_2 = "correcto";
} elseif ($respuesta_2 === '') {
    $verificar_2 = '';
} else {
    $verificar_2 = "incorrecto";
}

$respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
$respuesta_3_dos = str_replace(' ','',$respuesta_3);
if ($respuesta_3_dos === '2^{n-1}\equiv1\pmod{n}' || $respuesta_3_dos === '2^{n-1}\equiv1(modn)') { 
    $verificar_3 = "correcto";
} elseif ($respuesta_3_dos === '') {
    $verificar_3 = '';
} else {
    $verificar_3 = "incorrecto";
}

$respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
if ($respuesta_4 === 'n') { 
    $verificar_4 = "correcto";
} elseif ($respuesta_4 === '') {
    $verificar_4 = '';
} else {
    $verificar_4 = "incorrecto";
}

$respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
if ($respuesta_5 === 'primo') { 
    $verificar_5 = "correcto";
} elseif ($respuesta_5 === '') {
    $verificar_5 = '';
} else {
    $verificar_5 = "incorrecto";
}

$respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
if ($respuesta_6 === 'primo') { 
    $verificar_6 = "correcto";
} elseif ($respuesta_6 === '') {
    $verificar_6 = '';
} else {
    $verificar_6 = "incorrecto";
}

$respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
if ($respuesta_7 === 'pseudoprimo') { 
    $verificar_7 = "correcto";
} elseif ($respuesta_7 === '') {
    $verificar_7 = '';
} else {
    $verificar_7 = "incorrecto";
}

$respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
if ($respuesta_8 === '2') { 
    $verificar_8 = "correcto";
} elseif ($respuesta_8 === '') {
    $verificar_8 = '';
} else {
    $verificar_8 = "incorrecto";
}

$respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
if ($respuesta_9 === 'compuesto') { 
    $verificar_9 = "correcto";
} elseif ($respuesta_9 === '') {
    $verificar_9 = '';
} else {
    $verificar_9 = "incorrecto";
}

$respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
if ($respuesta_10 === 'bases') { 
    $verificar_10 = "correcto";
} elseif ($respuesta_10 === '') {
    $verificar_10 = '';
} else {
    $verificar_10 = "incorrecto";
}

// Respuestas 11-20
$respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
if ($respuesta_11 === '2') { 
    $verificar_11 = "correcto";
} elseif ($respuesta_11 === '') {
    $verificar_11 = '';
} else {
    $verificar_11 = "incorrecto";
}

$respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
if ($respuesta_12 === 'primo') { 
    $verificar_12 = "correcto";
} elseif ($respuesta_12 === '') {
    $verificar_12 = '';
} else {
    $verificar_12 = "incorrecto";
}

$respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
if ($respuesta_13 === 'primo') { 
    $verificar_13 = "correcto";
} elseif ($respuesta_13 === '') {
    $verificar_13 = '';
} else {
    $verificar_13 = "incorrecto";
}

$respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
if ($respuesta_14 === 'pseudoprimo') { 
    $verificar_14 = "correcto";
} elseif ($respuesta_14 === '') {
    $verificar_14 = '';
} else {
    $verificar_14 = "incorrecto";
}

$respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
if ($respuesta_15 === '2') { 
    $verificar_15 = "correcto";
} elseif ($respuesta_15 === '') {
    $verificar_15 = '';
} else {
    $verificar_15 = "incorrecto";
}

$respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
if ($respuesta_16 === 'compuesto') { 
    $verificar_16 = "correcto";
} elseif ($respuesta_16 === '') {
    $verificar_16 = '';
} else {
    $verificar_16 = "incorrecto";
}

$respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
if ($respuesta_17 === 'bases') { 
    $verificar_17 = "correcto";
} elseif ($respuesta_17 === '') {
    $verificar_17 = '';
} else {
    $verificar_17 = "incorrecto";
}

$respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
if ($respuesta_18 === '2') { 
    $verificar_18 = "correcto";
} elseif ($respuesta_18 === '') {
    $verificar_18 = '';
} else {
    $verificar_18 = "incorrecto";
}

$respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
if ($respuesta_19 === 'primo') { 
    $verificar_19 = "correcto";
} elseif ($respuesta_19 === '') {
    $verificar_19 = '';
} else {
    $verificar_19 = "incorrecto";
}

$respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
if ($respuesta_20 === 'primo') { 
    $verificar_20 = "correcto";
} elseif ($respuesta_20 === '') {
    $verificar_20 = '';
} else {
    $verificar_20 = "incorrecto";
}

// Respuestas 21-30
$respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
if ($respuesta_21 === 'pseudoprimo') { 
    $verificar_21 = "correcto";
} elseif ($respuesta_21 === '') {
    $verificar_21 = '';
} else {
    $verificar_21 = "incorrecto";
}

$respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
if ($respuesta_22 === 'bases b') { 
    $verificar_22 = "correcto";
} elseif ($respuesta_22 === '') {
    $verificar_22 = '';
} else {
    $verificar_22 = "incorrecto";
}

$respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
if ($respuesta_23 === 'menores') { 
    $verificar_23 = "correcto";
} elseif ($respuesta_23 === '') {
    $verificar_23 = '';
} else {
    $verificar_23 = "incorrecto";
}

$respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
if ($respuesta_24 === 'escasos') { 
    $verificar_24 = "correcto";
} elseif ($respuesta_24 === '') {
    $verificar_24 = '';
} else {
    $verificar_24 = "incorrecto";
}

$respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
if ($respuesta_25 === 'primos') { 
    $verificar_25 = "correcto";
} elseif ($respuesta_25 === '') {
    $verificar_25 = '';
} else {
    $verificar_25 = "incorrecto";
}

$respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
if ($respuesta_26 === 'compuestos') { 
    $verificar_26 = "correcto";
} elseif ($respuesta_26 === '') {
    $verificar_26 = '';
} else {
    $verificar_26 = "incorrecto";
}

$respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
if ($respuesta_27 === 'pasan') { 
    $verificar_27 = "correcto";
} elseif ($respuesta_27 === '') {
    $verificar_27 = '';
} else {
    $verificar_27 = "incorrecto";
}

$respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
if ($respuesta_28 === 'bases b') { 
    $verificar_28 = "correcto";
} elseif ($respuesta_28 === '') {
    $verificar_28 = '';
} else {
    $verificar_28 = "incorrecto";
}

$respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
$respuesta_29_dos = str_replace(' ','',$respuesta_29);
if ($respuesta_29_dos === 'gcd(b,n)=1') { 
    $verificar_29 = "correcto";
} elseif ($respuesta_29_dos === '') {
    $verificar_29 = '';
} else {
    $verificar_29 = "incorrecto";
}

$respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
if ($respuesta_30 === 'compuesto') { 
    $verificar_30 = "correcto";
} elseif ($respuesta_30 === '') {
    $verificar_30 = '';
} else {
    $verificar_30 = "incorrecto";
}

// Respuestas 31-40
$respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
if ($respuesta_31 === 'satisface') { 
    $verificar_31 = "correcto";
} elseif ($respuesta_31 === '') {
    $verificar_31 = '';
} else {
    $verificar_31 = "incorrecto";
}

$respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
if ($respuesta_32 === '114') { 
    $verificar_32 = "correcto";
} elseif ($respuesta_32 === '') {
    $verificar_32 = '';
} else {
    $verificar_32 = "incorrecto";
}

$respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
if ($respuesta_33 === 'todo') { 
    $verificar_33 = "correcto";
} elseif ($respuesta_33 === '') {
    $verificar_33 = '';
} else {
    $verificar_33 = "incorrecto";
}

$respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
if ($respuesta_34 === 'b') { 
    $verificar_34 = "correcto";
} elseif ($respuesta_34 === '') {
    $verificar_34 = '';
} else {
    $verificar_34 = "incorrecto";
}

$respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
$respuesta_35_dos = str_replace(' ','',$respuesta_35);
if ($respuesta_35_dos === 'gcd(b,n)=1') { 
    $verificar_35 = "correcto";
} elseif ($respuesta_35_dos === '') {
    $verificar_35 = '';
} else {
    $verificar_35 = "incorrecto";
}

$respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
if ($respuesta_36 === 'Carmichael') { 
    $verificar_36 = "correcto";
} elseif ($respuesta_36 === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

$respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
if ($respuesta_37 === '17') { 
    $verificar_37 = "correcto";
} elseif ($respuesta_37 === '') {
    $verificar_37 = '';
} else {
    $verificar_37 = "incorrecto";
}

$respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'gcd(b,561)=1') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

$respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === 'b,3') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39 === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

$respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === 'b,11') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40 === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

// Respuestas 41-50
$respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
if ($respuesta_41 === 'b,17') { 
    $verificar_41 = "correcto";
} elseif ($respuesta_41 === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

$respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
if ($respuesta_42 === '1') { 
    $verificar_42 = "correcto";
} elseif ($respuesta_42 === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

$respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
$respuesta_43_dos = str_replace(' ','',$respuesta_43);
if ($respuesta_43_dos === 'b^2\equiv1\pmod{3}' || $respuesta_43_dos === 'b^2\equiv1(mod3)') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43_dos === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}

$respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
$respuesta_44_dos = str_replace(' ','',$respuesta_44);
if ($respuesta_44_dos === 'b^{10}\equiv1(mod11)' || $respuesta_44_dos === 'b^{10}\equiv1\pmod{11}') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44_dos === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

$respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
$respuesta_45_dos = str_replace(' ','',$respuesta_45);
if ($respuesta_45_dos === 'b^{16}\equiv1\pmod{17}' || $respuesta_45_dos === 'b^{16}\equiv1(mod17)') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45_dos === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

$respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
$respuesta_46_dos = str_replace(' ','',$respuesta_46);
if ($respuesta_46_dos === '(b^2)^{280}\equiv1\pmod{3}' || $respuesta_46_dos === '(b^2)^{280}\equiv1(mod3)') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46_dos === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

$respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
$respuesta_47_dos = str_replace(' ','',$respuesta_47);
if ($respuesta_47_dos === '(b^{10})^{56}\equiv1\pmod{11}' || $respuesta_47_dos === '(b^{10})^{56}\equiv1(mod11)') { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47_dos === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}

$respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
$respuesta_48_dos = str_replace(' ','',$respuesta_48);
if ($respuesta_48_dos === '(b^{16})^{35}\equiv1\pmod{17}' || $respuesta_48_dos === '(b^{16})^{35}\equiv1(mod17)') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48 === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

$respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
$respuesta_49_dos = str_replace(' ','',$respuesta_49);
if ($respuesta_49_dos === 'b^{560}\equiv1\pmod{561}' || $respuesta_49_dos === 'b^{560}\equiv1(mod561)') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49_dos === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

$respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
$respuesta_50_dos = str_replace(' ','',$respuesta_50);
if ($respuesta_50_dos === 'gcd(b,561)=1') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50_dos === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

// Respuestas 51-60
$respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'Carmichael') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

$respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'infinitos') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

$respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'probabilisticas') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

$respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'pase') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

$respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'probabilisticas') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}

$respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === '1') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

$respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'y') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

$respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'logaritmo') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

$respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'x') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

$respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'base b') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

// Respuestas 61-70
$respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'logaritmos') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

$respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'primo') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

$respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'primo') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

$respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'r') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

$respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'todo') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

$respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'no nulo') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

$respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'potencia') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

$respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'r') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

$respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'no nulo') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

$respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'potencia') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

// Respuestas 71-80
$respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === '2') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

$respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === '2') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

$respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === '11') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

$respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'no todos') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

$respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'no nulo') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

$respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'potencias') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

$respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === '3') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

$respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === '3') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

$respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === '11') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

$respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'raíz primitiva') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}
 

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'primo') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'raiz primitiva modulo p') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === '1') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'p-1') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    $respuesta_85_dos = str_replace(' ','',$respuesta_85);

    if ($respuesta_85_dos === 'r^e\equiva\modp'
    || $respuesta_85_dos === 'r^e\equiva(modp)'
    || $respuesta_85_dos === 'r^e\equiva\pmod{p}'
    ) { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85_dos === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'e') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'e') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'logaritmo discreto') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'a modulo p') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

    $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
    if ($respuesta_90 === 'r') { 
        $verificar_90 = "correcto";
    } elseif ($respuesta_90 === '') {
        $verificar_90 = '';
    } else {
        $verificar_90 = "incorrecto";
    }

    $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
    $respuesta_91_dos = str_replace(' ','',$respuesta_91);

    if ($respuesta_91_dos === '\log_ra=e'
    || $respuesta_91_dos === 'log_ra=e'
    ) { 
        $verificar_91 = "correcto";
    } elseif ($respuesta_91_dos === '') {
        $verificar_91 = '';
    } else {
        $verificar_91 = "incorrecto";
    }

    $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
    $respuesta_92_dos = str_replace(' ','',$respuesta_92);

    if ($respuesta_92 === '\log_2 3=8'
    || $respuesta_92 === 'log_2 3=8'
    ) { 
        $verificar_92 = "correcto";
    } elseif ($respuesta_92 === '') {
        $verificar_92 = '';
    } else {
        $verificar_92 = "incorrecto";
    }

    $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
    $respuesta_93_dos = str_replace(' ','',$respuesta_93);

    if ($respuesta_93_dos === '\log_2 5=4'
    || $respuesta_93_dos === 'log_2 5=4'
    ) { 
        $verificar_93 = "correcto";
    } elseif ($respuesta_93 === '') {
        $verificar_93 = '';
    } else {
        $verificar_93 = "incorrecto";
    }

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === '147') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === '168') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === '189') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === '210') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === '231') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === '252') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === '44') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === '66') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === '88') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === '110') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === '132') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === '154') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === '176') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === '198') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === '220') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === '242') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === '264') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === '24') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === '36') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === '48') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === '60') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === '72') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === '84') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === '96') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === '108') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === '120') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === '132') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === '144') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
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
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
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
    height: 370vh;
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
        actualizarFormula14();
        actualizarFormula15();
        actualizarFormula16();
        actualizarFormula17();
        actualizarFormula18();
        actualizarFormula19();
        actualizarFormula20();
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    var f = document.getElementById('respuesta_1').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_3').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula2').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_25').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula3').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    var f = document.getElementById('respuesta_36').value || "";
    var g = document.getElementById('respuesta_37').value || "";
    var h = document.getElementById('respuesta_38').value || "";
    var formula = ` \\ ${f},${g},${h} \\, `;
    document.getElementById('formula4').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_39').value || "";
    var g = document.getElementById('respuesta_40').value || "";
    var h = document.getElementById('respuesta_41').value || "";
    var formula = ` \\ b^{560} = ${f}, b^{560} = ${g}, b^{560} = ${h} \\, `;
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula6() {
    var f = document.getElementById('respuesta_42').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula6').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula7() {
    var f = document.getElementById('respuesta_80').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula7').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_85').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula8').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula9() {
    var f = document.getElementById('respuesta_91').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula9').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula10() {
    var f = document.getElementById('respuesta_92').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula10').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula11() {
    var f = document.getElementById('respuesta_93').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula11').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula12() {
    var f = document.getElementById('respuesta_12').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula12').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula13() {
    var f = document.getElementById('respuesta_13').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula13').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula14() {
    var f = document.getElementById('respuesta_14').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula14').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula15() {
    var f = document.getElementById('respuesta_15').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula15').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula16() {
    var f = document.getElementById('respuesta_16').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula16').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula17() {
    var f = document.getElementById('respuesta_17').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula17').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula18() {
    var f = document.getElementById('respuesta_18').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula18').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula19() {
    var f = document.getElementById('respuesta_19').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula19').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula20() {
    var f = document.getElementById('respuesta_20').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula20').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

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



function mostrarMensaje3() {
    document.getElementById("mensaje3").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje3")]);
}

function ocultarMensaje3() {
    document.getElementById("mensaje3").style.display = 'none';
}

function mostrarMensaje4() {
    document.getElementById("mensaje4").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje4")]);
}

function ocultarMensaje4() {
    document.getElementById("mensaje4").style.display = 'none';
}




</script>
    
</head>
<body> 
<div class="seccion izquierda">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
     <h3>Definición 1</h3>

    <p>Sea \( b \) un entero positivo. Si \( n \) es un número entero positivo compuesto y 
    <span id="formula">
    \(   \)
    </span> 
    <input type="text" name="respuesta_1" id="respuesta_1" oninput="actualizarFormula()" 
    value="<?php echo $respuesta_1?>" size="22">     
    , 
entonces 
<input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="2">
se llama un pseudoprimo en base \( b \).</p>

<p>Dado un entero positivo \( n \), determinar si 
<span id="formula2">
\(   \)
</span> 
<input type="text" name="respuesta_3" id="respuesta_3" oninput="actualizarFormula2()" 
value="<?php echo $respuesta_3?>" size="22">      
es una prueba útil que ofrece 
cierta evidencia sobre si 
<input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="2">
es 
<input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="6">. En particular:</p>

<ul>
<li>Si \( n \) satisface esta congruencia, entonces es 
<input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="6">    
o un 
<input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="6">
en base 
<input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="6">.</li>
<li>Si \( n \) no la satisface, entonces es 
<input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="6">.</li>
</ul>

<p>Podemos realizar pruebas similares usando 
<input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="6">     
distintas de 
<input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="6"> 
para obtener más evidencia sobre si \( n \) es
<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="6">.
Si \( n \) pasa todas estas pruebas, es 
<input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="6"> 
o un 
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="6"> 
en todas las 
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="6"> 
elegidas.</p>

<p>Además, entre los enteros positivos 
<input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="6">     
o iguales que un número real positivo \( x \), los pseudoprimos en
base \( b \) (donde \( b \) es un entero positivo) son relativamente 
<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="6"> 
en comparación con los 
<input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="6">. 
Por ejemplo, entre los enteros menores que \( 10^{10} \), hay 455,052,512 primos, pero solo 14,884 pseudoprimos 
en base 2.</p>

<p>Desafortunadamente, no podemos distinguir entre primos y pseudoprimos simplemente eligiendo muchas bases, 
porque existen números 
<input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="6"> 
\( n \) que 
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="6"> 
todas las pruebas con 
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="6">
tales que 
<input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="6">.
Esto nos lleva a la siguiente definición:</p>

<h3>Definición 2</h3>

<p>Un número entero 
<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="6">    
\( n \) que 
<input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="6">
la congruencia 
<span id="formula3">
\(   \)
</span> 
<input type="text" name="respuesta_25" id="respuesta_25" oninput="actualizarFormula3()" 
value="<?php echo $respuesta_25?>" size="22">
para 
<input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="6">
entero positivo 
<input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="6">
tal que 
<input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="6">
se llama un <strong>número de 
<input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="6">    
</strong>. 
(Estos números reciben su nombre de Robert 
<input type="text" value="<?php echo $respuesta_29; ?>" size="8" readonly>
, quien los estudió a principios del siglo XX.)</p>

<h3>Ejemplo 11</h3>

<p>El número entero 561 es un número de Carmichael. Primero, notamos que 561 es compuesto porque:</p>

<p style="text-align:center">\( 561 = 3 \cdot 11 \cdot  \)
<input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="6">
</p>

<p>Luego, si 
<input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="11">    
, entonces también se cumple que:</p>

<p style="text-align:center">\( \gcd( \)
<input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="2">    
\( ) = \gcd( \)
<input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="2"> 
\( ) = \gcd( \)
<input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="2"> 
\(  ) = \)
<input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="2">
</p>

<p>Aplicando el pequeño teorema de Fermat, tenemos:</p>

<span id="formula4">
\[   \]
</span> 
<input type="text" name="respuesta_36" id="respuesta_36" oninput="actualizarFormula4()" 
value="<?php echo $respuesta_36?>" size="22">
<input type="text" name="respuesta_37" id="respuesta_37" oninput="actualizarFormula4()" 
value="<?php echo $respuesta_37?>" size="22">
<input type="text" name="respuesta_38" id="respuesta_38" oninput="actualizarFormula4()" 
value="<?php echo $respuesta_38?>" size="22">

<p>Entonces:</p>

<span id="formula5">
\[ b^{560} = ?, b^{560} = ?, b^{560} = ?  \]
</span> 
<input type="text" name="respuesta_39" id="respuesta_39" oninput="actualizarFormula5()" 
value="<?php echo $respuesta_39 ?>" size="22">
<input type="text" name="respuesta_40" id="respuesta_40" oninput="actualizarFormula5()" 
value="<?php echo $respuesta_40?>" size="22">
<input type="text" name="respuesta_41" id="respuesta_41" oninput="actualizarFormula5()" 
value="<?php echo $respuesta_41?>" size="22">

<p>Por el Ejercicio 29, se sigue que:</p>

<span id="formula6">
\[  \]
</span> 
<input type="text" name="respuesta_42" id="respuesta_42" oninput="actualizarFormula6()" 
value="<?php echo $respuesta_42 ?>" size="22">

<p>para todo entero positivo \( b \) con 
<input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="6">    
. Por lo tanto, 561 es un número de 
<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="6">.</p>

<p>Aunque existen 
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="11">    
números de Carmichael, pueden diseñarse pruebas más refinadas (descritas en el 
conjunto de ejercicios) que sirven de base para pruebas 
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="11">
de primalidad eficientes. Estas pruebas permiten mostrar rápidamente que un número dado es casi con 
certeza primo. Más precisamente, si un número no es
primo, la probabilidad de que 
<input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="11">
una serie de estas pruebas es muy cercana a 0.</p>

<p>Estas pruebas de primalidad 
<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="11">    
se describirán en el Capítulo 7, junto con los conceptos de 
teoría de la probabilidad en los que se basan. Estas pruebas pueden (y de hecho se utilizan) para encontrar 
primos grandes de manera extremadamente rápida con computadoras.</p>
  


      <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../../../img/gcd_compuesto.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen2() {
        var imagenMostrada2 = document.getElementById('imagenMostrada2');

        // Mostrar la imagen
        imagenMostrada2.style.display = 'block';
        }

        function ocultarImagen2() {
        var imagenMostrada2 = document.getElementById('imagenMostrada2');

        // Ocultar la imagen al soltar el botón
        imagenMostrada2.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen3()" onmouseup="ocultarImagen3()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada3" src="../../../../img/compuesto_primo.png" style="display: none; max-width: 100%" width="460" >

    <script>
        function mostrarImagen3() {
        var imagenMostrada3 = document.getElementById('imagenMostrada3');

        // Mostrar la imagen
        imagenMostrada3.style.display = 'block';
        }

        function ocultarImagen3() {
        var imagenMostrada3 = document.getElementById('imagenMostrada3');

        // Ocultar la imagen al soltar el botón
        imagenMostrada3.style.display = 'none';
        }
    </script>    
    </form>
</div>




<div class="seccion derecha">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>4.4.7 Raíces Primitivas y Logaritmos Discretos</h2>
<p>En el conjunto de los números reales positivos, si \( b >  \)
<input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="1">    
y \( x = b^y \), decimos que 
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="1"> 
es el 
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8"> 
de
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="2"> 
en 
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="5"> 
. Aquí mostraremos que también podemos definir el concepto de 
<input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="8"> 
módulo \( p \) de enteros positivos, donde \( p \) es un número 
<input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="8"> 
. Antes de hacerlo, necesitamos una definición.</p>

<h3>Definición 3</h3>
<p>Una raíz primitiva módulo un 
<input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="8">    
\( p \) es un entero
<input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="8">
en \( \mathbb{Z}_p \) tal que 
<input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="8"> 
elemento 
<input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">
de \( \mathbb{Z}_p \) es una 
<input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="8">
de
<input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="8">.</p>

<h3>Ejemplo 12</h3>
<p>Determina si 2 y 3 son raíces primitivas módulo 11.</p>

<h4>Solución:</h4>
<p>Cuando calculamos las potencias de 2 en \( \mathbb{Z}_{11} \), obtenemos:</p>
<p>
    \( 2^1 = 2, \, 2^2 = 4, \, 2^3 = 8, \, 2^4 = 5, \, 2^5 = 10, \, 2^6 = 9, \, 2^7 = 7, \, 2^8 = 3, 
    \, 2^9 = 6, \, 2^{10} = 1 \)
</p>
<p>Como todo elemento 
<input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="8">    
de \( \mathbb{Z}_{11} \) es una 
<input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="8">
de 
<input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="8">, 
<input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8">
es una raíz primitiva de 
<input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="8">.</p>

<p>Al calcular las potencias de 3 módulo 11:</p>
<p>
    \( 3^1 = 3, \, 3^2 = 9, \, 3^3 = 5, \, 3^4 = 4, \, 3^5 = 1 \)
</p>
<p>Este patrón se repite al calcular potencias más altas de 3. Como 
<input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="8">    
los elementos 
<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="8">
de \( \mathbb{Z}_{11} \) son 
<input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="8">
de 
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="8">, 
concluimos que 
<input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="1">
no es una raíz primitiva de 
<input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="1">.</p>

<p>Un hecho importante en teoría de números es que existe una 
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="9">    
módulo \( p \) para todo número 
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="9">. Remitimos al lector a 
[Ro10] para una demostración de este hecho.</p>

<p>Supongamos que \( p \) es 
<input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="9">    
y que \( r \) es una 
<input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="13">
módulo \( p \). Si \( a \) es un entero entre 
<input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="1">
y 
<input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="1">,
es decir, un elemento 
<input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="7">
de \( \mathbb{Z}_p \), sabemos que existe un único exponente \( e \) tal que 
<span id="formula7">
\(  \)
</span> 
<input type="text" name="respuesta_80" id="respuesta_80" oninput="actualizarFormula7()" 
value="<?php echo $respuesta_80 ?>" size="22">.
</p>

<!-- Botón de explicación -->
<button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">parentesis</button>
<div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
<p>a es un caso concreto, un resultado específico.</p>
<p>
Si tienes un número primo \( p \) y una raíz primitiva \( r \mod p \),
entonces cualquier número no nulo \( a \in \mathbb{Z}_p \) se puede escribir como \( r^e \mod p \), 
y ese exponente \( e \) es único módulo \( p - 1 \), lo cual es justo la definición del logaritmo discreto base \( r \).
</p>
</div>

<!-- Botones de ayuda visual -->
<button onmousedown="mostrarImagen4()" onmouseup="ocultarImagen4()">Ayuda</button>
<img id="imagenMostrada4" src="../../../../img/inverso_modular.png" style="display: none; max-width: 100%" width="460" >

<script>
    function mostrarImagen4() {
        document.getElementById('imagenMostrada4').style.display = 'block';
    }
    function ocultarImagen4() {
        document.getElementById('imagenMostrada4').style.display = 'none';
    }
</script>

<button onmousedown="mostrarImagen5()" onmouseup="ocultarImagen5()">Ayuda</button>
<img id="imagenMostrada5" src="../../../../img/inverso_ejemplo.png" style="display: none; max-width: 100%" width="460">

<script>
    function mostrarImagen5() {
        document.getElementById('imagenMostrada5').style.display = 'block';
    }
    function ocultarImagen5() {
        document.getElementById('imagenMostrada5').style.display = 'none';
    }
</script>

<button onmousedown="mostrarImagen6()" onmouseup="ocultarImagen6()">Ayuda</button>
<img id="imagenMostrada6" src="../../../../img/interpretacion_ambiguedad.png" style="display: none; max-width: 100%">

<script>
    function mostrarImagen6() {
        document.getElementById('imagenMostrada6').style.display = 'block';
    }
    function ocultarImagen6() {
        document.getElementById('imagenMostrada6').style.display = 'none';
    }
</script>


    <h3>Definición 4</h3>
    <p>Supón que p es un 
    <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="7">       
    , \( r \) es una 
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="19">   
    , y \( a \) es un entero 
    entre 
    <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="5">
    y 
    <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="5">
    inclusive. Si 
    <span id="formula8">
    \(  \)
    </span> 
    <input type="text" name="respuesta_85" id="respuesta_85" oninput="actualizarFormula8()" 
    value="<?php echo $respuesta_85 ?>" size="22">.
    y \( 0 \leq \)
    <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="5">
    \( \leq p - 1 \), decimos que 
    <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="5">
    es el 
    <input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="14">
    de 
    <input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="12">
    en base 
    <input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="5">
    y escribimos:</p>
    <p> 
    <span id="formula9">
    \(  \)
    </span> 
    <input type="text" name="respuesta_91" id="respuesta_91" oninput="actualizarFormula9()" 
    value="<?php echo $respuesta_91 ?>" size="22">

    (donde el módulo \( p \) se sobreentiende).</p>

    <button onmousedown="mostrarImagen7()" onmouseup="ocultarImagen7()">sobreentiende</button>
    <img id="imagenMostrada7" src="../../../../img/sobreentiende.png" style="display: none; max-width: 100%">

    <script>
    function mostrarImagen7() {
        document.getElementById('imagenMostrada7').style.display = 'block';
    }
    function ocultarImagen7() {
        document.getElementById('imagenMostrada7').style.display = 'none';
    }
    </script>


     

    <h3>Ejemplo 13</h3>
    <p>Encuentra los logaritmos discretos de 3 y 5 módulo 11 en base 2.</p>

    <h4>Solución:</h4>
    <p>Cuando calculamos las potencias de 2 módulo 11 en el Ejemplo 12, encontramos que:</p>
    <p>
        \( 2^8 \equiv 3 \mod 11 \) y \( 2^4 \equiv 5 \mod 11 \)
    </p>
    <p>Por lo tanto, los logaritmos discretos de 3 y 5 módulo 11 en base 2 son 8 y 4, respectivamente. Escribimos:</p>
    <p> 
    <span id="formula10">
    \(  \)
    </span> 
    <input type="text" name="respuesta_92" id="respuesta_92" oninput="actualizarFormula10()" 
    value="<?php echo $respuesta_92 ?>" size="7">    
    y 
    <span id="formula11">
    \(  \)
    </span> 
    <input type="text" name="respuesta_93" id="respuesta_93" oninput="actualizarFormula11()" 
    value="<?php echo $respuesta_93 ?>" size="7">
    (donde el módulo 11 se entiende aunque no se indique explícitamente 
    en la notación).</p>

     <button onmousedown="mostrarImagen8()" onmouseup="ocultarImagen8()">el problema</button>
    <img id="imagenMostrada8" src="../../../../img/elproblema.png" style="display: none; max-width: 100%"  width="460">

    <script>
    function mostrarImagen8() {
        document.getElementById('imagenMostrada8').style.display = 'block';
    }
    function ocultarImagen8() {
        document.getElementById('imagenMostrada8').style.display = 'none';
    }
    </script>

    <p><strong>El problema del logaritmo discreto</strong></p>



    <p>El problema del logaritmo discreto toma como entrada un primo \( p \), una raíz primitiva \( r \) módulo 
    \( p \), y un entero positivo \( a \in \mathbb{Z}_p \); su salida es el logaritmo discreto de \( a \) módulo \( p \) 
    en base \( r \).</p>

    <p>Aunque este problema pueda no parecer tan difícil, resulta que no se conoce ningún algoritmo de tiempo 
    polinomial para resolverlo. La dificultad de este problema desempeña un papel importante en la criptografía,
    como veremos en la Sección 4.6.</p>
    <hr>
    </form>
</div>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="preguntas_1.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
