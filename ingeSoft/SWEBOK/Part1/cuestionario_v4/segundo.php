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
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {

    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
if ($respuesta_1 === 'requerimientos') { $verificar_1 = "correcto"; } elseif ($respuesta_1 === '') { $verificar_1 = ''; } else { $verificar_1 = "incorrecto"; }

$respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
if ($respuesta_2 === 'considerarse') { $verificar_2 = "correcto"; } elseif ($respuesta_2 === '') { $verificar_2 = ''; } else { $verificar_2 = "incorrecto"; }

$respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
if ($respuesta_3 === 'dos') { $verificar_3 = "correcto"; } elseif ($respuesta_3 === '') { $verificar_3 = ''; } else { $verificar_3 = "incorrecto"; }

$respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
if ($respuesta_4 === 'expresion') { $verificar_4 = "correcto"; } elseif ($respuesta_4 === '') { $verificar_4 = ''; } else { $verificar_4 = "incorrecto"; }

$respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
if ($respuesta_5 === 'necesidades') { $verificar_5 = "correcto"; } elseif ($respuesta_5 === '') { $verificar_5 = ''; } else { $verificar_5 = "incorrecto"; }

$respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
if ($respuesta_6 === 'restricciones') { $verificar_6 = "correcto"; } elseif ($respuesta_6 === '') { $verificar_6 = ''; } else { $verificar_6 = "incorrecto"; }

$respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
if ($respuesta_7 === 'producto') { $verificar_7 = "correcto"; } elseif ($respuesta_7 === '') { $verificar_7 = ''; } else { $verificar_7 = "incorrecto"; }

$respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
if ($respuesta_8 === 'proyecto') { $verificar_8 = "correcto"; } elseif ($respuesta_8 === '') { $verificar_8 = ''; } else { $verificar_8 = "incorrecto"; }

$respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
if ($respuesta_9 === 'contribuyen') { $verificar_9 = "correcto"; } elseif ($respuesta_9 === '') { $verificar_9 = ''; } else { $verificar_9 = "incorrecto"; }

$respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
if ($respuesta_10 === 'solucion') { $verificar_10 = "correcto"; } elseif ($respuesta_10 === '') { $verificar_10 = ''; } else { $verificar_10 = "incorrecto"; }

$respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
if ($respuesta_11 === 'problema') { $verificar_11 = "correcto"; } elseif ($respuesta_11 === '') { $verificar_11 = ''; } else { $verificar_11 = "incorrecto"; }

$respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
if ($respuesta_12 === 'actividades') { $verificar_12 = "correcto"; } elseif ($respuesta_12 === '') { $verificar_12 = ''; } else { $verificar_12 = "incorrecto"; }

$respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
if ($respuesta_13 === 'desarrollar') { $verificar_13 = "correcto"; } elseif ($respuesta_13 === '') { $verificar_13 = ''; } else { $verificar_13 = "incorrecto"; }

$respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
if ($respuesta_14 === 'mantener') { $verificar_14 = "correcto"; } elseif ($respuesta_14 === '') { $verificar_14 = ''; } else { $verificar_14 = "incorrecto"; }

$respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
if ($respuesta_15 === 'construye') { $verificar_15 = "correcto"; } elseif ($respuesta_15 === '') { $verificar_15 = ''; } else { $verificar_15 = "incorrecto"; }

$respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
if ($respuesta_16 === 'perspectivas') { $verificar_16 = "correcto"; } elseif ($respuesta_16 === '') { $verificar_16 = ''; } else { $verificar_16 = "incorrecto"; }

$respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
if ($respuesta_17 === 'area') { $verificar_17 = "correcto"; } elseif ($respuesta_17 === '') { $verificar_17 = ''; } else { $verificar_17 = "incorrecto"; }

$respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
if ($respuesta_18 === 'conocimiento') { $verificar_18 = "correcto"; } elseif ($respuesta_18 === '') { $verificar_18 = ''; } else { $verificar_18 = "incorrecto"; }

$respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
if ($respuesta_19 === 'equipo') { $verificar_19 = "correcto"; } elseif ($respuesta_19 === '') { $verificar_19 = ''; } else { $verificar_19 = "incorrecto"; }

$respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
if ($respuesta_20 === 'mal') { $verificar_20 = "correcto"; } elseif ($respuesta_20 === '') { $verificar_20 = ''; } else { $verificar_20 = "incorrecto"; }

$respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
if ($respuesta_21 === 'determinar') { $verificar_21 = "correcto"; } elseif ($respuesta_21 === '') { $verificar_21 = ''; } else { $verificar_21 = "incorrecto"; }

$respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
if ($respuesta_22 === 'requerimientos') { $verificar_22 = "correcto"; } elseif ($respuesta_22 === '') { $verificar_22 = ''; } else { $verificar_22 = "incorrecto"; }

$respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
if ($respuesta_23 === 'sufriran') { $verificar_23 = "correcto"; } elseif ($respuesta_23 === '') { $verificar_23 = ''; } else { $verificar_23 = "incorrecto"; }

$respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
if ($respuesta_24 === 'costos') { $verificar_24 = "correcto"; } elseif ($respuesta_24 === '') { $verificar_24 = ''; } else { $verificar_24 = "incorrecto"; }

$respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
if ($respuesta_25 === 'retrasos') { $verificar_25 = "correcto"; } elseif ($respuesta_25 === '') { $verificar_25 = ''; } else { $verificar_25 = "incorrecto"; }

$respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
if ($respuesta_26 === 'cancelaciones') { $verificar_26 = "correcto"; } elseif ($respuesta_26 === '') { $verificar_26 = ''; } else { $verificar_26 = "incorrecto"; }

$respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
if ($respuesta_27 === 'razon') { $verificar_27 = "correcto"; } elseif ($respuesta_27 === '') { $verificar_27 = ''; } else { $verificar_27 = "incorrecto"; }

$respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
if ($respuesta_28 === 'conduce') { $verificar_28 = "correcto"; } elseif ($respuesta_28 === '') { $verificar_28 = ''; } else { $verificar_28 = "incorrecto"; }

$respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
if ($respuesta_29 === 'diseño') { $verificar_29 = "correcto"; } elseif ($respuesta_29 === '') { $verificar_29 = ''; } else { $verificar_29 = "incorrecto"; }

$respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
if ($respuesta_30 === 'decision') { $verificar_30 = "correcto"; } elseif ($respuesta_30 === '') { $verificar_30 = ''; } else { $verificar_30 = "incorrecto"; }

$respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
if ($respuesta_31 === 'conduce') { $verificar_31 = "correcto"; } elseif ($respuesta_31 === '') { $verificar_31 = ''; } else { $verificar_31 = "incorrecto"; }

$respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
if ($respuesta_32 === 'nivel') { $verificar_32 = "correcto"; } elseif ($respuesta_32 === '') { $verificar_32 = ''; } else { $verificar_32 = "incorrecto"; }

$respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
if ($respuesta_33 === 'codigo') { $verificar_33 = "correcto"; } elseif ($respuesta_33 === '') { $verificar_33 = ''; } else { $verificar_33 = "incorrecto"; }

$respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
if ($respuesta_34 === 'involucrar') { $verificar_34 = "correcto"; } elseif ($respuesta_34 === '') { $verificar_34 = ''; } else { $verificar_34 = "incorrecto"; }

$respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
if ($respuesta_35 === 'determinar') { $verificar_35 = "correcto"; } elseif ($respuesta_35 === '') { $verificar_35 = ''; } else { $verificar_35 = "incorrecto"; }

$respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
if ($respuesta_36 === 'alto') { $verificar_36 = "correcto"; } elseif ($respuesta_36 === '') { $verificar_36 = ''; } else { $verificar_36 = "incorrecto"; }

$respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
if ($respuesta_37 === 'riesgo') { $verificar_37 = "correcto"; } elseif ($respuesta_37 === '') { $verificar_37 = ''; } else { $verificar_37 = "incorrecto"; }

$respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'detectan') { $verificar_38 = "correcto"; } elseif ($respuesta_38 === '') { $verificar_38 = ''; } else { $verificar_38 = "incorrecto"; }

$respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === 'corrigen') { $verificar_39 = "correcto"; } elseif ($respuesta_39 === '') { $verificar_39 = ''; } else { $verificar_39 = "incorrecto"; }

$respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === 'faltantes') { $verificar_40 = "correcto"; } elseif ($respuesta_40 === '') { $verificar_40 = ''; } else { $verificar_40 = "incorrecto"; }

$respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
if ($respuesta_41 === 'interpretados') { $verificar_41 = "correcto"; } elseif ($respuesta_41 === '') { $verificar_41 = ''; } else { $verificar_41 = "incorrecto"; }

$respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
if ($respuesta_42 === 'incorrectos') { $verificar_42 = "correcto"; } elseif ($respuesta_42 === '') { $verificar_42 = ''; } else { $verificar_42 = "incorrecto"; }

$respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
if ($respuesta_43 === 'reelaboracion') { $verificar_43 = "correcto"; } elseif ($respuesta_43 === '') { $verificar_43 = ''; } else { $verificar_43 = "incorrecto"; }

$respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
if ($respuesta_44 === 'exponencial') { $verificar_44 = "correcto"; } elseif ($respuesta_44 === '') { $verificar_44 = ''; } else { $verificar_44 = "incorrecto"; }

$respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
if ($respuesta_45 === 'proyectos') { $verificar_45 = "correcto"; } elseif ($respuesta_45 === '') { $verificar_45 = ''; } else { $verificar_45 = "incorrecto"; }

$respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === 'dos') { $verificar_46 = "correcto"; } elseif ($respuesta_46 === '') { $verificar_46 = ''; } else { $verificar_46 = "incorrecto"; }

$respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === 'principales') { $verificar_47 = "correcto"; } elseif ($respuesta_47 === '') { $verificar_47 = ''; } else { $verificar_47 = "incorrecto"; }

$respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
if ($respuesta_48 === 'requerimientos') { $verificar_48 = "correcto"; } elseif ($respuesta_48 === '') { $verificar_48 = ''; } else { $verificar_48 = "incorrecto"; }

$respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === 'incompletitud') { $verificar_49 = "correcto"; } elseif ($respuesta_49 === '') { $verificar_49 = ''; } else { $verificar_49 = "incorrecto"; }

$respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === 'partes interesadas') { $verificar_50 = "correcto"; } elseif ($respuesta_50 === '') { $verificar_50 = ''; } else { $verificar_50 = "incorrecto"; }

$respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'detalles') { $verificar_51 = "correcto"; } elseif ($respuesta_51 === '') { $verificar_51 = ''; } else { $verificar_51 = "incorrecto"; }

$respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'revelan') { $verificar_52 = "correcto"; } elseif ($respuesta_52 === '') { $verificar_52 = ''; } else { $verificar_52 = "incorrecto"; }

$respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'comunican') { $verificar_53 = "correcto"; } elseif ($respuesta_53 === '') { $verificar_53 = ''; } else { $verificar_53 = "incorrecto"; }

$respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'ingenieros') { $verificar_54 = "correcto"; } elseif ($respuesta_54 === '') { $verificar_54 = ''; } else { $verificar_54 = "incorrecto"; }

$respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'ambiguedad') { $verificar_55 = "correcto"; } elseif ($respuesta_55 === '') { $verificar_55 = ''; } else { $verificar_55 = "incorrecto"; }

$respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'comunican') { $verificar_56 = "correcto"; } elseif ($respuesta_56 === '') { $verificar_56 = ''; } else { $verificar_56 = "incorrecto"; }

$respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'manera') { $verificar_57 = "correcto"; } elseif ($respuesta_57 === '') { $verificar_57 = ''; } else { $verificar_57 = "incorrecto"; }

$respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'interpretaciones') { $verificar_58 = "correcto"; } elseif ($respuesta_58 === '') { $verificar_58 = ''; } else { $verificar_58 = "incorrecto"; }

$respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'solo') { $verificar_59 = "correcto"; } elseif ($respuesta_59 === '') { $verificar_59 = ''; } else { $verificar_59 = "incorrecto"; }

$respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'correcta') { $verificar_60 = "correcto"; } elseif ($respuesta_60 === '') { $verificar_60 = ''; } else { $verificar_60 = "incorrecto"; }

$respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'papel') { $verificar_61 = "correcto"; } elseif ($respuesta_61 === '') { $verificar_61 = ''; } else { $verificar_61 = "incorrecto"; }

$respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'plazo') { $verificar_62 = "correcto"; } elseif ($respuesta_62 === '') { $verificar_62 = ''; } else { $verificar_62 = "incorrecto"; }

$respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'juegan') { $verificar_63 = "correcto"; } elseif ($respuesta_63 === '') { $verificar_63 = ''; } else { $verificar_63 = "incorrecto"; }

$respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'construccion') { $verificar_64 = "correcto"; } elseif ($respuesta_64 === '') { $verificar_64 = ''; } else { $verificar_64 = "incorrecto"; }

$respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'juegan') { $verificar_65 = "correcto"; } elseif ($respuesta_65 === '') { $verificar_65 = ''; } else { $verificar_65 = "incorrecto"; }

$respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'reconocido') { $verificar_66 = "correcto"; } elseif ($respuesta_66 === '') { $verificar_66 = ''; } else { $verificar_66 = "incorrecto"; }

$respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'importante') { $verificar_67 = "correcto"; } elseif ($respuesta_67 === '') { $verificar_67 = ''; } else { $verificar_67 = "incorrecto"; }

$respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'mantenimiento') { $verificar_68 = "correcto"; } elseif ($respuesta_68 === '') { $verificar_68 = ''; } else { $verificar_68 = "incorrecto"; }

$respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'recibir') { $verificar_69 = "correcto"; } elseif ($respuesta_69 === '') { $verificar_69 = ''; } else { $verificar_69 = "incorrecto"; }

$respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'documentacion') { $verificar_70 = "correcto"; } elseif ($respuesta_70 === '') { $verificar_70 = ''; } else { $verificar_70 = "incorrecto"; }

$respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'ingeniero') { $verificar_71 = "correcto"; } elseif ($respuesta_71 === '') { $verificar_71 = ''; } else { $verificar_71 = "incorrecto"; }

$respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'metodos') { $verificar_72 = "correcto"; } elseif ($respuesta_72 === '') { $verificar_72 = ''; } else { $verificar_72 = "incorrecto"; }

$respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'hace') { $verificar_73 = "correcto"; } elseif ($respuesta_73 === '') { $verificar_73 = ''; } else { $verificar_73 = "incorrecto"; }

$respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'codigo') { $verificar_74 = "correcto"; } elseif ($respuesta_74 === '') { $verificar_74 = ''; } else { $verificar_74 = "incorrecto"; }

$respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'ejecutarlo') { $verificar_75 = "correcto"; } elseif ($respuesta_75 === '') { $verificar_75 = ''; } else { $verificar_75 = "incorrecto"; }

$respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'depurador') { $verificar_76 = "correcto"; } elseif ($respuesta_76 === '') { $verificar_76 = ''; } else { $verificar_76 = "incorrecto"; }

$respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'manualmente') { $verificar_77 = "correcto"; } elseif ($respuesta_77 === '') { $verificar_77 = ''; } else { $verificar_77 = "incorrecto"; }

$respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'analizarlo') { $verificar_78 = "correcto"; } elseif ($respuesta_78 === '') { $verificar_78 = ''; } else { $verificar_78 = "incorrecto"; }

$respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'desafio') { $verificar_79 = "correcto"; } elseif ($respuesta_79 === '') { $verificar_79 = ''; } else { $verificar_79 = "incorrecto"; }

$respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'supone') { $verificar_80 = "correcto"; } elseif ($respuesta_80 === '') { $verificar_80 = ''; } else { $verificar_80 = "incorrecto"; }

$respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'conoce') { $verificar_81 = "correcto"; } elseif ($respuesta_81 === '') { $verificar_81 = ''; } else { $verificar_81 = "incorrecto"; }

$respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
if ($respuesta_82 === 'bug') { $verificar_82 = "correcto"; } elseif ($respuesta_82 === '') { $verificar_82 = ''; } else { $verificar_82 = "incorrecto"; }

$respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
if ($respuesta_83 === 'llamar') { $verificar_83 = "correcto"; } elseif ($respuesta_83 === '') { $verificar_83 = ''; } else { $verificar_83 = "incorrecto"; }

$respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
if ($respuesta_84 === 'diferencia') { $verificar_84 = "correcto"; } elseif ($respuesta_84 === '') { $verificar_84 = ''; } else { $verificar_84 = "incorrecto"; }

$respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
if ($respuesta_85 === 'hace') { $verificar_85 = "correcto"; } elseif ($respuesta_85 === '') { $verificar_85 = ''; } else { $verificar_85 = "incorrecto"; }

$respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
if ($respuesta_86 === 'documentacion') { $verificar_86 = "correcto"; } elseif ($respuesta_86 === '') { $verificar_86 = ''; } else { $verificar_86 = "incorrecto"; }

$respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
if ($respuesta_87 === 'vida util') { $verificar_87 = "correcto"; } elseif ($respuesta_87 === '') { $verificar_87 = ''; } else { $verificar_87 = "incorrecto"; }

$respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
if ($respuesta_88 === 'capturar') { $verificar_88 = "correcto"; } elseif ($respuesta_88 === '') { $verificar_88 = ''; } else { $verificar_88 = "incorrecto"; }

$respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'comunicar') { $verificar_89 = "correcto"; } elseif ($respuesta_89 === '') { $verificar_89 = ''; } else { $verificar_89 = "incorrecto"; }

$respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'intencion') { $verificar_90 = "correcto"; } elseif ($respuesta_90 === '') { $verificar_90 = ''; } else { $verificar_90 = "incorrecto"; }

$respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'mantienen') { $verificar_91 = "correcto"; } elseif ($respuesta_91 === '') { $verificar_91 = ''; } else { $verificar_91 = "incorrecto"; }

$respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'autores') { $verificar_92 = "correcto"; } elseif ($respuesta_92 === '') { $verificar_92 = ''; } else { $verificar_92 = "incorrecto"; }

$respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'Requerimientos') { $verificar_93 = "correcto"; } elseif ($respuesta_93 === '') { $verificar_93 = ''; } else { $verificar_93 = "incorrecto"; }

$respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'desarrollar') { $verificar_94 = "correcto"; } elseif ($respuesta_94 === '') { $verificar_94 = ''; } else { $verificar_94 = "incorrecto"; }

$respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'gestionar') { $verificar_95 = "correcto"; } elseif ($respuesta_95 === '') { $verificar_95 = ''; } else { $verificar_95 = "incorrecto"; }

$respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'vida util') { $verificar_96 = "correcto"; } elseif ($respuesta_96 === '') { $verificar_96 = ''; } else { $verificar_96 = "incorrecto"; }

$respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'comprension') { $verificar_97 = "correcto"; } elseif ($respuesta_97 === '') { $verificar_97 = ''; } else { $verificar_97 = "incorrecto"; }

$respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'actividad') { $verificar_98 = "correcto"; } elseif ($respuesta_98 === '') { $verificar_98 = ''; } else { $verificar_98 = "incorrecto"; }

$respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'discreta') { $verificar_99 = "correcto"; } elseif ($respuesta_99 === '') { $verificar_99 = ''; } else { $verificar_99 = "incorrecto"; }

$respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'ciclo') { $verificar_100 = "correcto"; } elseif ($respuesta_100 === '') { $verificar_100 = ''; } else { $verificar_100 = "incorrecto"; }

$respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'proyecto') { $verificar_101 = "correcto"; } elseif ($respuesta_101 === '') { $verificar_101 = ''; } else { $verificar_101 = "incorrecto"; }

$respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'evolucionando') { $verificar_102 = "correcto"; } elseif ($respuesta_102 === '') { $verificar_102 = ''; } else { $verificar_102 = "incorrecto"; }

$respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === 'adaptarse') { $verificar_103 = "correcto"; } elseif ($respuesta_103 === '') { $verificar_103 = ''; } else { $verificar_103 = "incorrecto"; }

$respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'organizacion') { $verificar_104 = "correcto"; } elseif ($respuesta_104 === '') { $verificar_104 = ''; } else { $verificar_104 = "incorrecto"; }

$respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'ingenieria') { $verificar_105 = "correcto"; } elseif ($respuesta_105 === '') { $verificar_105 = ''; } else { $verificar_105 = "incorrecto"; }

$respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'describir') { $verificar_106 = "correcto"; } elseif ($respuesta_106 === '') { $verificar_106 = ''; } else { $verificar_106 = "incorrecto"; }

$respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'sistematico') { $verificar_107 = "correcto"; } elseif ($respuesta_107 === '') { $verificar_107 = ''; } else { $verificar_107 = "incorrecto"; }

$respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'mantener') { $verificar_108 = "correcto"; } elseif ($respuesta_108 === '') { $verificar_108 = ''; } else { $verificar_108 = "incorrecto"; }

$respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'utiliza') { $verificar_109 = "correcto"; } elseif ($respuesta_109 === '') { $verificar_109 = ''; } else { $verificar_109 = "incorrecto"; }

$respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'conocimiento') { $verificar_110 = "correcto"; } elseif ($respuesta_110 === '') { $verificar_110 = ''; } else { $verificar_110 = "incorrecto"; }

$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'ingenieria') { $verificar_111 = "correcto"; } elseif ($respuesta_111 === '') { $verificar_111 = ''; } else { $verificar_111 = "incorrecto"; }

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'estrechamente') { $verificar_112 = "correcto"; } elseif ($respuesta_112 === '') { $verificar_112 = ''; } else { $verificar_112 = "incorrecto"; }

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'diseno') { $verificar_113 = "correcto"; } elseif ($respuesta_113 === '') { $verificar_113 = ''; } else { $verificar_113 = "incorrecto"; }

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'construccion') { $verificar_114 = "correcto"; } elseif ($respuesta_114 === '') { $verificar_114 = ''; } else { $verificar_114 = "incorrecto"; }

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'pruebas') { $verificar_115 = "correcto"; } elseif ($respuesta_115 === '') { $verificar_115 = ''; } else { $verificar_115 = "incorrecto"; }

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'mantenimiento') { $verificar_116 = "correcto"; } elseif ($respuesta_116 === '') { $verificar_116 = ''; } else { $verificar_116 = "incorrecto"; }

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === 'gestion') { $verificar_117 = "correcto"; } elseif ($respuesta_117 === '') { $verificar_117 = ''; } else { $verificar_117 = "incorrecto"; }

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'modelado') { $verificar_118 = "correcto"; } elseif ($respuesta_118 === '') { $verificar_118 = ''; } else { $verificar_118 = "incorrecto"; }

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'procesos') { $verificar_119 = "correcto"; } elseif ($respuesta_119 === '') { $verificar_119 = ''; } else { $verificar_119 = "incorrecto"; }

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'impacto') { $verificar_120 = "correcto"; } elseif ($respuesta_120 === '') { $verificar_120 = ''; } else { $verificar_120 = "incorrecto"; }

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'representando') { $verificar_121 = "correcto"; } elseif ($respuesta_121 === '') { $verificar_121 = ''; } else { $verificar_121 = "incorrecto"; }

$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'ciclo') { $verificar_122 = "correcto"; } elseif ($respuesta_122 === '') { $verificar_122 = ''; } else { $verificar_122 = "incorrecto"; }

$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === 'procesos') { $verificar_123 = "correcto"; } elseif ($respuesta_123 === '') { $verificar_123 = ''; } else { $verificar_123 = "incorrecto"; }

$respuesta_124 = isset($_POST['respuesta_124']) ? $_POST['respuesta_124'] : '';
if ($respuesta_124 === 'enfoque') { $verificar_124 = "correcto"; } elseif ($respuesta_124 === '') { $verificar_124 = ''; } else { $verificar_124 = "incorrecto"; }

$respuesta_125 = isset($_POST['respuesta_125']) ? $_POST['respuesta_125'] : '';
if ($respuesta_125 === 'como') { $verificar_125 = "correcto"; } elseif ($respuesta_125 === '') { $verificar_125 = ''; } else { $verificar_125 = "incorrecto"; }

$respuesta_126 = isset($_POST['respuesta_126']) ? $_POST['respuesta_126'] : '';
if ($respuesta_126 === 'organizar') { $verificar_126 = "correcto"; } elseif ($respuesta_126 === '') { $verificar_126 = ''; } else { $verificar_126 = "incorrecto"; }

$respuesta_127 = isset($_POST['respuesta_127']) ? $_POST['respuesta_127'] : '';
if ($respuesta_127 === 'requerimientos') { $verificar_127 = "correcto"; } elseif ($respuesta_127 === '') { $verificar_127 = ''; } else { $verificar_127 = "incorrecto"; }

$respuesta_128 = isset($_POST['respuesta_128']) ? $_POST['respuesta_128'] : '';
if ($respuesta_128 === 'determina') { $verificar_128 = "correcto"; } elseif ($respuesta_128 === '') { $verificar_128 = ''; } else { $verificar_128 = "incorrecto"; }

$respuesta_129 = isset($_POST['respuesta_129']) ? $_POST['respuesta_129'] : '';
if ($respuesta_129 === 'como') { $verificar_129 = "correcto"; } elseif ($respuesta_129 === '') { $verificar_129 = ''; } else { $verificar_129 = "incorrecto"; }

$respuesta_130 = isset($_POST['respuesta_130']) ? $_POST['respuesta_130'] : '';
if ($respuesta_130 === 'ciclo') { $verificar_130 = "correcto"; } elseif ($respuesta_130 === '') { $verificar_130 = ''; } else { $verificar_130 = "incorrecto"; }

$respuesta_131 = isset($_POST['respuesta_131']) ? $_POST['respuesta_131'] : '';
if ($respuesta_131 === 'cascada') { $verificar_131 = "correcto"; } elseif ($respuesta_131 === '') { $verificar_131 = ''; } else { $verificar_131 = "incorrecto"; }

$respuesta_132 = isset($_POST['respuesta_132']) ? $_POST['respuesta_132'] : '';
if ($respuesta_132 === 'temprano') { $verificar_132 = "correcto"; } elseif ($respuesta_132 === '') { $verificar_132 = ''; } else { $verificar_132 = "incorrecto"; }

$respuesta_133 = isset($_POST['respuesta_133']) ? $_POST['respuesta_133'] : '';
if ($respuesta_133 === 'temprana') { $verificar_133 = "correcto"; } elseif ($respuesta_133 === '') { $verificar_133 = ''; } else { $verificar_133 = "incorrecto"; }

$respuesta_134 = isset($_POST['respuesta_134']) ? $_POST['respuesta_134'] : '';
if ($respuesta_134 === 'completamente') { $verificar_134 = "correcto"; } elseif ($respuesta_134 === '') { $verificar_134 = ''; } else { $verificar_134 = "incorrecto"; }

$respuesta_135 = isset($_POST['respuesta_135']) ? $_POST['respuesta_135'] : '';
if ($respuesta_135 === 'definido') { $verificar_135 = "correcto"; } elseif ($respuesta_135 === '') { $verificar_135 = ''; } else { $verificar_135 = "incorrecto"; }

$respuesta_136 = isset($_POST['respuesta_136']) ? $_POST['respuesta_136'] : '';
if ($respuesta_136 === 'analisis') { $verificar_136 = "correcto"; } elseif ($respuesta_136 === '') { $verificar_136 = ''; } else { $verificar_136 = "incorrecto"; }

$respuesta_137 = isset($_POST['respuesta_137']) ? $_POST['respuesta_137'] : '';
if ($respuesta_137 === 'comience') { $verificar_137 = "correcto"; } elseif ($respuesta_137 === '') { $verificar_137 = ''; } else { $verificar_137 = "incorrecto"; }

$respuesta_138 = isset($_POST['respuesta_138']) ? $_POST['respuesta_138'] : '';
if ($respuesta_138 === 'posteriores') { $verificar_138 = "correcto"; } elseif ($respuesta_138 === '') { $verificar_138 = ''; } else { $verificar_138 = "incorrecto"; }

$respuesta_139 = isset($_POST['respuesta_139']) ? $_POST['respuesta_139'] : '';
if ($respuesta_139 === 'iterativos') { $verificar_139 = "correcto"; } elseif ($respuesta_139 === '') { $verificar_139 = ''; } else { $verificar_139 = "incorrecto"; }

$respuesta_140 = isset($_POST['respuesta_140']) ? $_POST['respuesta_140'] : '';
if ($respuesta_140 === 'alto') { $verificar_140 = "correcto"; } elseif ($respuesta_140 === '') { $verificar_140 = ''; } else { $verificar_140 = "incorrecto"; }

$respuesta_141 = isset($_POST['respuesta_141']) ? $_POST['respuesta_141'] : '';
if ($respuesta_141 === 'fase') { $verificar_141 = "correcto"; } elseif ($respuesta_141 === '') { $verificar_141 = ''; } else { $verificar_141 = "incorrecto"; }

$respuesta_142 = isset($_POST['respuesta_142']) ? $_POST['respuesta_142'] : '';
if ($respuesta_142 === 'concepto') { $verificar_142 = "correcto"; } elseif ($respuesta_142 === '') { $verificar_142 = ''; } else { $verificar_142 = "incorrecto"; }

$respuesta_143 = isset($_POST['respuesta_143']) ? $_POST['respuesta_143'] : '';
if ($respuesta_143 === 'refina') { $verificar_143 = "correcto"; } elseif ($respuesta_143 === '') { $verificar_143 = ''; } else { $verificar_143 = "incorrecto"; }

$respuesta_144 = isset($_POST['respuesta_144']) ? $_POST['respuesta_144'] : '';
if ($respuesta_144 === 'iteracion') { $verificar_144 = "correcto"; } elseif ($respuesta_144 === '') { $verificar_144 = ''; } else { $verificar_144 = "incorrecto"; }

$respuesta_145 = isset($_POST['respuesta_145']) ? $_POST['respuesta_145'] : '';
if ($respuesta_145 === 'agil') { $verificar_145 = "correcto"; } elseif ($respuesta_145 === '') { $verificar_145 = ''; } else { $verificar_145 = "incorrecto"; }

$respuesta_146 = isset($_POST['respuesta_146']) ? $_POST['respuesta_146'] : '';
if ($respuesta_146 === 'incremental') { $verificar_146 = "correcto"; } elseif ($respuesta_146 === '') { $verificar_146 = ''; } else { $verificar_146 = "incorrecto"; }

$respuesta_147 = isset($_POST['respuesta_147']) ? $_POST['respuesta_147'] : '';
if ($respuesta_147 === 'tiempo') { $verificar_147 = "correcto"; } elseif ($respuesta_147 === '') { $verificar_147 = ''; } else { $verificar_147 = "incorrecto"; }

$respuesta_148 = isset($_POST['respuesta_148']) ? $_POST['respuesta_148'] : '';
if ($respuesta_148 === 'construye') { $verificar_148 = "correcto"; } elseif ($respuesta_148 === '') { $verificar_148 = ''; } else { $verificar_148 = "incorrecto"; }

$respuesta_149 = isset($_POST['respuesta_149']) ? $_POST['respuesta_149'] : '';
if ($respuesta_149 === 'funcionalidad') { $verificar_149 = "correcto"; } elseif ($respuesta_149 === '') { $verificar_149 = ''; } else { $verificar_149 = "incorrecto"; }

$respuesta_150 = isset($_POST['respuesta_150']) ? $_POST['respuesta_150'] : '';
if ($respuesta_150 === 'alcance') { $verificar_150 = "correcto"; } elseif ($respuesta_150 === '') { $verificar_150 = ''; } else { $verificar_150 = "incorrecto"; }

$respuesta_151 = isset($_POST['respuesta_151']) ? $_POST['respuesta_151'] : '';
if ($respuesta_151 === 'detalles') { $verificar_151 = "correcto"; } elseif ($respuesta_151 === '') { $verificar_151 = ''; } else { $verificar_151 = "incorrecto"; }

$respuesta_152 = isset($_POST['respuesta_152']) ? $_POST['respuesta_152'] : '';
if ($respuesta_152 === 'determinados') { $verificar_152 = "correcto"; } elseif ($respuesta_152 === '') { $verificar_152 = ''; } else { $verificar_152 = "incorrecto"; }

$respuesta_153 = isset($_POST['respuesta_153']) ? $_POST['respuesta_153'] : '';
if ($respuesta_153 === 'naturaleza') { $verificar_153 = "correcto"; } elseif ($respuesta_153 === '') { $verificar_153 = ''; } else { $verificar_153 = "incorrecto"; }

$respuesta_154 = isset($_POST['respuesta_154']) ? $_POST['respuesta_154'] : '';
if ($respuesta_154 === 'ciclo') { $verificar_154 = "correcto"; } elseif ($respuesta_154 === '') { $verificar_154 = ''; } else { $verificar_154 = "incorrecto"; }

$respuesta_155 = isset($_POST['respuesta_155']) ? $_POST['respuesta_155'] : '';
if ($respuesta_155 === 'medida') { $verificar_155 = "correcto"; } elseif ($respuesta_155 === '') { $verificar_155 = ''; } else { $verificar_155 = "incorrecto"; }

$respuesta_156 = isset($_POST['respuesta_156']) ? $_POST['respuesta_156'] : '';
if ($respuesta_156 === 'ingenieria') { $verificar_156 = "correcto"; } elseif ($respuesta_156 === '') { $verificar_156 = ''; } else { $verificar_156 = "incorrecto"; }

$respuesta_157 = isset($_POST['respuesta_157']) ? $_POST['respuesta_157'] : '';
if ($respuesta_157 === 'intencion') { $verificar_157 = "correcto"; } elseif ($respuesta_157 === '') { $verificar_157 = ''; } else { $verificar_157 = "incorrecto"; }

$respuesta_158 = isset($_POST['respuesta_158']) ? $_POST['respuesta_158'] : '';
if ($respuesta_158 === 'procesos') { $verificar_158 = "correcto"; } elseif ($respuesta_158 === '') { $verificar_158 = ''; } else { $verificar_158 = "incorrecto"; }

$respuesta_159 = isset($_POST['respuesta_159']) ? $_POST['respuesta_159'] : '';
if ($respuesta_159 === 'depender') { $verificar_159 = "correcto"; } elseif ($respuesta_159 === '') { $verificar_159 = ''; } else { $verificar_159 = "incorrecto"; }

$respuesta_160 = isset($_POST['respuesta_160']) ? $_POST['respuesta_160'] : '';
if ($respuesta_160 === 'exclusivamente') { $verificar_160 = "correcto"; } elseif ($respuesta_160 === '') { $verificar_160 = ''; } else { $verificar_160 = "incorrecto"; }

$respuesta_161 = isset($_POST['respuesta_161']) ? $_POST['respuesta_161'] : '';
if ($respuesta_161 === 'proyecto') { $verificar_161 = "correcto"; } elseif ($respuesta_161 === '') { $verificar_161 = ''; } else { $verificar_161 = "incorrecto"; }

$respuesta_162 = isset($_POST['respuesta_162']) ? $_POST['respuesta_162'] : '';
if ($respuesta_162 === 'interpretacion') { $verificar_162 = "correcto"; } elseif ($respuesta_162 === '') { $verificar_162 = ''; } else { $verificar_162 = "incorrecto"; }

$respuesta_163 = isset($_POST['respuesta_163']) ? $_POST['respuesta_163'] : '';
if ($respuesta_163 === 'relacionada') { $verificar_163 = "correcto"; } elseif ($respuesta_163 === '') { $verificar_163 = ''; } else { $verificar_163 = "incorrecto"; }

$respuesta_164 = isset($_POST['respuesta_164']) ? $_POST['respuesta_164'] : '';
if ($respuesta_164 === 'grado') { $verificar_164 = "correcto"; } elseif ($respuesta_164 === '') { $verificar_164 = ''; } else { $verificar_164 = "incorrecto"; }

$respuesta_165 = isset($_POST['respuesta_165']) ? $_POST['respuesta_165'] : '';
if ($respuesta_165 === 'gestion') { $verificar_165 = "correcto"; } elseif ($respuesta_165 === '') { $verificar_165 = ''; } else { $verificar_165 = "incorrecto"; }

$respuesta_166 = isset($_POST['respuesta_166']) ? $_POST['respuesta_166'] : '';
if ($respuesta_166 === 'gestion') { $verificar_166 = "correcto"; } elseif ($respuesta_166 === '') { $verificar_166 = ''; } else { $verificar_166 = "incorrecto"; }

$respuesta_167 = isset($_POST['respuesta_167']) ? $_POST['respuesta_167'] : '';
if ($respuesta_167 === 'calidad') { $verificar_167 = "correcto"; } elseif ($respuesta_167 === '') { $verificar_167 = ''; } else { $verificar_167 = "incorrecto"; }

$respuesta_168 = isset($_POST['respuesta_168']) ? $_POST['respuesta_168'] : '';
if ($respuesta_168 === 'enfoques') { $verificar_168 = "correcto"; } elseif ($respuesta_168 === '') { $verificar_168 = ''; } else { $verificar_168 = "incorrecto"; }

$respuesta_169 = isset($_POST['respuesta_169']) ? $_POST['respuesta_169'] : '';
if ($respuesta_169 === 'utilizar') { $verificar_169 = "correcto"; } elseif ($respuesta_169 === '') { $verificar_169 = ''; } else { $verificar_169 = "incorrecto"; }

$respuesta_170 = isset($_POST['respuesta_170']) ? $_POST['respuesta_170'] : '';
if ($respuesta_170 === 'gestionar') { $verificar_170 = "correcto"; } elseif ($respuesta_170 === '') { $verificar_170 = ''; } else { $verificar_170 = "incorrecto"; }

$respuesta_171 = isset($_POST['respuesta_171']) ? $_POST['respuesta_171'] : '';
if ($respuesta_171 === 'controlar') { $verificar_171 = "correcto"; } elseif ($respuesta_171 === '') { $verificar_171 = ''; } else { $verificar_171 = "incorrecto"; }

$respuesta_172 = isset($_POST['respuesta_172']) ? $_POST['respuesta_172'] : '';
if ($respuesta_172 === 'calidad') { $verificar_172 = "correcto"; } elseif ($respuesta_172 === '') { $verificar_172 = ''; } else { $verificar_172 = "incorrecto"; }

$respuesta_173 = isset($_POST['respuesta_173']) ? $_POST['respuesta_173'] : '';
if ($respuesta_173 === 'examina') { $verificar_173 = "correcto"; } elseif ($respuesta_173 === '') { $verificar_173 = ''; } else { $verificar_173 = "incorrecto"; }

$respuesta_174 = isset($_POST['respuesta_174']) ? $_POST['respuesta_174'] : '';
if ($respuesta_174 === 'bien') { $verificar_174 = "correcto"; } elseif ($respuesta_174 === '') { $verificar_174 = ''; } else { $verificar_174 = "incorrecto"; }

$respuesta_175 = isset($_POST['respuesta_175']) ? $_POST['respuesta_175'] : '';
if ($respuesta_175 === 'definidos') { $verificar_175 = "correcto"; } elseif ($respuesta_175 === '') { $verificar_175 = ''; } else { $verificar_175 = "incorrecto"; }

$respuesta_176 = isset($_POST['respuesta_176']) ? $_POST['respuesta_176'] : '';
if ($respuesta_176 === 'gestion') { $verificar_176 = "correcto"; } elseif ($respuesta_176 === '') { $verificar_176 = ''; } else { $verificar_176 = "incorrecto"; }

$respuesta_177 = isset($_POST['respuesta_177']) ? $_POST['respuesta_177'] : '';
if ($respuesta_177 === 'usar') { $verificar_177 = "correcto"; } elseif ($respuesta_177 === '') { $verificar_177 = ''; } else { $verificar_177 = "incorrecto"; }

$respuesta_178 = isset($_POST['respuesta_178']) ? $_POST['respuesta_178'] : '';
if ($respuesta_178 === 'estado') { $verificar_178 = "correcto"; } elseif ($respuesta_178 === '') { $verificar_178 = ''; } else { $verificar_178 = "incorrecto"; }

$respuesta_179 = isset($_POST['respuesta_179']) ? $_POST['respuesta_179'] : '';
if ($respuesta_179 === 'evaluar') { $verificar_179 = "correcto"; } elseif ($respuesta_179 === '') { $verificar_179 = ''; } else { $verificar_179 = "incorrecto"; }

$respuesta_180 = isset($_POST['respuesta_180']) ? $_POST['respuesta_180'] : '';
if ($respuesta_180 === 'finalizacion') { $verificar_180 = "correcto"; } elseif ($respuesta_180 === '') { $verificar_180 = ''; } else { $verificar_180 = "incorrecto"; }


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
    <link rel="stylesheet" href="../../../../style_2_0.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 250vh;
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
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_2').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_3').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    var f = document.getElementById('respuesta_4').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula4').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_5').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula6() {
    var f = document.getElementById('respuesta_6').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula6').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula7() {
    var f = document.getElementById('respuesta_7').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula7').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_8').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula8').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula9() {
    var f = document.getElementById('respuesta_9').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula10() {
    var f = document.getElementById('respuesta_10').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula10').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula11() {
    var f = document.getElementById('respuesta_11').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;
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

<form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
<h1>INTRODUCCIÓN</h1> 
    
<p>Los <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="9"> del software deben 
<input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="9"> desde 
<input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="9"> perspectivas. La primera
 es como una <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="9"> de las 
 <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="9"> y 
 <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="9"> de un
  <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="9"> o 
  <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="9"> de software que 
  <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="9"> a la 
  <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="9"> de un
   <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="9"> del mundo real.
    La segunda es la de las <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="9"> 
    necesarias para <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="9"> y 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="9"> los requerimientos de un
producto de software y del proyecto que lo <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="9">.
 Ambas <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="9"> se presentan en 
 esta <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="9"> de 
 <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="9"> (KA).</p>

     <button type="submit">Enviar</button> 
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?>  
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?> 
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <hr>




<p>Si un <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="9"> hace un 
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="9"> trabajo al
 <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="9"> los
  <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="9">, el proyecto, el producto o
   ambos probablemente <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="9"> 
   <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="9"> adicionales,
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="9">, 
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="9"> y defectos. Una 
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="9"> es que cada 
    requerimiento de producto de software generalmente 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="9"> a muchas decisiones de 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="9">. Cada 
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="9"> de diseño generalmente 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="9"> a muchas decisiones a 
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="9"> de
     <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="9">. Cada decisión también puede 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="9"> varias decisiones de prueba. 
    En otras palabras, <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="9"> correctamente 
    los requerimientos es un trabajo de <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="9"> 
<input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="9">. Si no se 
<input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="9"> y 
<input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="9"> a tiempo, los requerimientos
 <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="9">, mal 
 <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="9"> o 
 <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="9"> pueden inducir una 
 <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="9"> en cascada 
 <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="9"> para corregirlos.</p>



    <button type="submit">Enviar</button> 
 
    <?php echo $verificar_19 ?>
    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>
    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>
    <?php echo $verificar_26 ?>
    <?php echo $verificar_27 ?>
    <?php echo $verificar_28 ?>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
    <?php echo $verificar_31 ?>
    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>
    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <?php echo $verificar_39 ?>
    <?php echo $verificar_40 ?>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
    <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>
    <hr>

<p>Los <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="9"> de software del mundo 
real tienden a sufrir <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="9"> 
problemas <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="9"> relacionados 
con los <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="11">:</p>
<ol>
<li><input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="9">: existen 
requerimientos de las <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="14"> y 
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="9"> necesarios que no 
se <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="9"> ni 
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="9"> a los 
<input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="9"> de software;</li>
<li><input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="9">: los requerimientos 
se <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="9"> de una
 <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="9"> que permite múltiples
  <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="11">, siendo 
  <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="9"> una de ellas 
  <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="9">.</li>
</ol>

    <button type="submit">Enviar</button>
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <?php echo $verificar_51 ?>
    <?php echo $verificar_52 ?>
    <?php echo $verificar_53 ?>
    <?php echo $verificar_54 ?>
    <?php echo $verificar_55 ?>
    <?php echo $verificar_56 ?>
    <?php echo $verificar_57 ?>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <?php echo $verificar_60 ?>
    <hr>

<p>Más allá del <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="9"> 
evidente a corto <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="9"> que 
<input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="9"> los requerimientos en la
 <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="9"> inicial del software,
  también <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="9"> un papel menos
   <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="9"> pero igualmente 
   <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="9"> en el 
   <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="11"> a largo plazo.
    Al <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="9"> software
     sin <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="11"> de 
     respaldo, un <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="9"> de 
     software tiene varios <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="9"> para
      determinar qué <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="9"> ese 
      <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="9">, como 
      <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="9">, recorrerlo 
      con un <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="9">,
       ejecutarlo <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="9">, 
       <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="9"> estáticamente, etc. 
       El <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="9"> es determinar 
       qué se <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="9"> que debe
        hacer ese código. Lo que generalmente se 
<input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="9"> como un 
<input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="9"> —pero que es mejor
 <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="9"> un defecto— es simplemente una 
 <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="9"> observable entre lo que se supone
  que el software debe hacer y lo que realmente 
  <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="9">. El papel de la 
  <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="9"> de requerimientos a lo largo 
  de la <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="9"> del software es 
  <input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="9"> y 
  <input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="9"> la 
  <input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="9"> a los ingenieros de software que
   <input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="9"> el código pero que podrían no haber 
   sido sus <input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="9"> originales.</p>



    <button type="submit">Enviar</button>
    
    <?php echo $verificar_61 ?>
    <?php echo $verificar_62 ?>
    <?php echo $verificar_63 ?>
    <?php echo $verificar_64 ?>
    <?php echo $verificar_65 ?>
    <?php echo $verificar_66 ?>
    <?php echo $verificar_67 ?>
    <?php echo $verificar_68 ?>
    <?php echo $verificar_69 ?>
    <?php echo $verificar_70 ?>
    <?php echo $verificar_71 ?>
    <?php echo $verificar_72 ?>
    <?php echo $verificar_73 ?>
    <?php echo $verificar_74 ?>
    <?php echo $verificar_75 ?>
    <?php echo $verificar_76 ?>
    <?php echo $verificar_77 ?>
    <?php echo $verificar_78 ?>
    <?php echo $verificar_79 ?>
    <?php echo $verificar_80 ?> 
    <?php echo $verificar_81 ?>
    <?php echo $verificar_82 ?>
    <?php echo $verificar_83 ?>
    <?php echo $verificar_84 ?>
    <?php echo $verificar_85 ?>
    <?php echo $verificar_86 ?>
    <?php echo $verificar_87 ?>
    <?php echo $verificar_88 ?>
    <?php echo $verificar_89 ?>
    <?php echo $verificar_90 ?>
    <?php echo $verificar_91 ?>
    <?php echo $verificar_92 ?>
    <hr>

 



    
</div>




<div class="seccion derecha">
   
<p>El área de conocimiento de <input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="9"> de 
Software se ocupa de <input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="9"> requerimientos 
de software y <input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="9"> esos requerimientos 
durante la <input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="9"> del software. Esta área 
proporciona una <input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="9"> de que los 
requerimientos de software:</p>

<ul>
<li>no son necesariamente una <input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="9"> 
<input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="9"> del inicio del 
<input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="9"> de vida del desarrollo de 
software, sino más bien un proceso iniciado al comienzo de un 
<input type="text" name="respuesta_101" value="<?php echo $respuesta_101; ?>" size="9"> que a menudo continúa
 <input type="text" name="respuesta_102" value="<?php echo $respuesta_102; ?>" size="9"> durante toda la vida 
 útil del software;</li>
<li>necesitan <input type="text" name="respuesta_103" value="<?php echo $respuesta_103; ?>" size="9"> al contexto 
de la <input type="text" name="respuesta_104" value="<?php echo $respuesta_104; ?>" size="9"> y del proyecto.</li>
</ul>

 

<p>El término <input type="text" name="respuesta_105" value="<?php echo $respuesta_105; ?>" size="9"> de requerimientos 
se utiliza a menudo para <input type="text" name="respuesta_106" value="<?php echo $respuesta_106; ?>" size="9"> el 
manejo <input type="text" name="respuesta_107" value="<?php echo $respuesta_107; ?>" size="9"> de los requerimientos. 
Para <input type="text" name="respuesta_108" value="<?php echo $respuesta_108; ?>" size="9"> la consistencia, el 
término ingeniería no se <input type="text" name="respuesta_109" value="<?php echo $respuesta_109; ?>" size="9"> 
en esta área <input type="text" name="respuesta_110" value="<?php echo $respuesta_110; ?>" size="9"> para referirse 
a la <input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="9"> de software como tal.</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_93 ?>
    <?php echo $verificar_94 ?>
    <?php echo $verificar_95 ?>
    <?php echo $verificar_96 ?>
    <?php echo $verificar_97 ?>
    <?php echo $verificar_98 ?> 
    <?php echo $verificar_99 ?>
    <?php echo $verificar_100 ?>
    <?php echo $verificar_101 ?>
    <?php echo $verificar_102 ?>
    <?php echo $verificar_103 ?>
    <?php echo $verificar_104 ?>
    <?php echo $verificar_105 ?>
    <?php echo $verificar_106 ?>
    <?php echo $verificar_107 ?>
    <?php echo $verificar_108 ?>
    <?php echo $verificar_109 ?>
    <?php echo $verificar_110 ?>
    <?php echo $verificar_111 ?>

    <hr>

    <p>El área de conocimiento de Requerimientos de Software está más 
    <input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="9"> relacionada con las áreas de 
    <input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="9"> de Software, 
    <input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="9"> de Software, 
    <input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="9"> de Software, 
    <input type="text" name="respuesta_116" value="<?php echo $respuesta_116; ?>" size="9"> de Software y
     <input type="text" name="respuesta_117" value="<?php echo $respuesta_117; ?>" size="9"> de Software, 
     así como con el tema de <input type="text" name="respuesta_118" value="<?php echo $respuesta_118; ?>" size="9"> 
     en el área de <input type="text" name="respuesta_119" value="<?php echo $respuesta_119; ?>" size="9"> y 
     Métodos de Ingeniería de Software, ya que puede tener gran 
    <input type="text" name="respuesta_120" value="<?php echo $respuesta_120; ?>" size="9"> 
    <input type="text" name="respuesta_121" value="<?php echo $respuesta_121; ?>" size="9"> los requerimientos en 
    forma de modelos.</p>


    <button type="submit">Enviar</button>
    <?php echo $verificar_112 ?>
    <?php echo $verificar_113 ?>
    <?php echo $verificar_114 ?>
    <?php echo $verificar_115 ?>
    <?php echo $verificar_116 ?>
    <?php echo $verificar_117 ?>
    <?php echo $verificar_118 ?>
    <?php echo $verificar_119 ?>
    <?php echo $verificar_120 ?>
    <?php echo $verificar_121 ?>
    <hr>

  <p>Esta área también está relacionada con el tema de 
    <input type="text" name="respuesta_122" value="<?php echo $respuesta_122; ?>" size="9"> de Vida del Software en el 
    área de <input type="text" name="respuesta_123" value="<?php echo $respuesta_123; ?>" size="9"> de
    Ingeniería de Software, en el sentido de que el 
    <input type="text" name="respuesta_124" value="<?php echo $respuesta_124; ?>" size="9"> de esta área 
    está en qué y <input type="text" name="respuesta_125" value="<?php echo $respuesta_125; ?>" size="9"> se 
    puede y debe <input type="text" name="respuesta_126" value="<?php echo $respuesta_126; ?>" size="9">
    el trabajo de <input type="text" name="respuesta_127" value="<?php echo $respuesta_127; ?>" size="9">, mientras 
    que el ciclo de vida del proyecto <input type="text" name="respuesta_128" value="<?php echo $respuesta_128; ?>" size="9"> 
    <input type="text" name="respuesta_129" value="<?php echo $respuesta_129; ?>" size="9"> se realiza ese trabajo. 
    Por ejemplo, en un <input type="text" name="respuesta_130" value="<?php echo $respuesta_130; ?>" size="9"> de 
    vida en <input type="text" name="respuesta_131" value="<?php echo $respuesta_131; ?>" size="9">, todo el trabajo 
    de requerimientos se realiza <input type="text" name="respuesta_132" value="<?php echo $respuesta_132; ?>" size="9"> 
    en una fase de Requerimientos <input type="text" name="respuesta_133" value="<?php echo $respuesta_133; ?>" size="9"> 
    y se espera que esté <input type="text" name="respuesta_134" value="<?php echo $respuesta_134; ?>" size="9"> 
    <input type="text" name="respuesta_135" value="<?php echo $respuesta_135; ?>" size="9"> antes de que cualquier 
    trabajo de <input type="text" name="respuesta_136" value="<?php echo $respuesta_136; ?>" size="9">, diseño y 
    construcción <input type="text" name="respuesta_137" value="<?php echo $respuesta_137; ?>" size="9"> en fases 
    <input type="text" name="respuesta_138" value="<?php echo $respuesta_138; ?>" size="9">. Bajo algunos ciclos de 
    vida <input type="text" name="respuesta_139" value="<?php echo $respuesta_139; ?>" size="9">, el trabajo inicial 
    de requerimientos de <input type="text" name="respuesta_140" value="<?php echo $respuesta_140; ?>" size="9"> 
    nivel se realiza durante una <input type="text" name="respuesta_141" value="<?php echo $respuesta_141; ?>" size="9"> 
    de <input type="text" name="respuesta_142" value="<?php echo $respuesta_142; ?>" size="9">, y se 
    <input type="text" name="respuesta_143" value="<?php echo $respuesta_143; ?>" size="9"> más durante una o 
    más fases de <input type="text" name="respuesta_144" value="<?php echo $respuesta_144; ?>" size="9">. En un 
    ciclo de vida <input type="text" name="respuesta_145" value="<?php echo $respuesta_145; ?>" size="9">, el trabajo 
    de requerimientos se realiza de forma 
    <input type="text" name="respuesta_146" value="<?php echo $respuesta_146; ?>" size="9">, justo a 
    <input type="text" name="respuesta_147" value="<?php echo $respuesta_147; ?>" size="9">, a medida 
    que se <input type="text" name="respuesta_148" value="<?php echo $respuesta_148; ?>" size="9"> cada elemento 
    adicional de <input type="text" name="respuesta_149" value="<?php echo $respuesta_149; ?>" size="9">.</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_122 ?>
<?php echo $verificar_123 ?>
<?php echo $verificar_124 ?>
<?php echo $verificar_125 ?>
<?php echo $verificar_126 ?>
<?php echo $verificar_127 ?>
<?php echo $verificar_128 ?>
<?php echo $verificar_129 ?>
<?php echo $verificar_130 ?>
<?php echo $verificar_131 ?>
<?php echo $verificar_132 ?>
<?php echo $verificar_133 ?>
<?php echo $verificar_134 ?>
<?php echo $verificar_135 ?>
<?php echo $verificar_136 ?>
<?php echo $verificar_137 ?>
<?php echo $verificar_138 ?>
<?php echo $verificar_139 ?>
<?php echo $verificar_140 ?>
<?php echo $verificar_141 ?>
<?php echo $verificar_142 ?>
<?php echo $verificar_143 ?>
<?php echo $verificar_144 ?>
<?php echo $verificar_145 ?>
<?php echo $verificar_146 ?>
<?php echo $verificar_147 ?>
<?php echo $verificar_148 ?>
<?php echo $verificar_149 ?>
    <hr>

<p>Los <input type="text" name="respuesta_150" value="<?php echo $respuesta_150; ?>" size="9"> y los 
<input type="text" name="respuesta_151" value="<?php echo $respuesta_151; ?>" size="9"> del trabajo de 
requerimientos de software en un proyecto deben estar 
<input type="text" name="respuesta_152" value="<?php echo $respuesta_152; ?>" size="9"> por la 
<input type="text" name="respuesta_153" value="<?php echo $respuesta_153; ?>" size="9"> del software que se construye, 
no por el <input type="text" name="respuesta_154" value="<?php echo $respuesta_154; ?>" size="9"> de vida bajo el cual 
se construye. En la <input type="text" name="respuesta_155" value="<?php echo $respuesta_155; ?>" size="9"> en 
que la <input type="text" name="respuesta_156" value="<?php echo $respuesta_156; ?>" size="9"> de requerimientos 
captura y comunica la <input type="text" name="respuesta_157" value="<?php echo $respuesta_157; ?>" size="9"> del 
software, los <input type="text" name="respuesta_158" value="<?php echo $respuesta_158; ?>" size="9"> posteriores 
no deberían <input type="text" name="respuesta_159" value="<?php echo $respuesta_159; ?>" size="9"> 
<input type="text" name="respuesta_160" value="<?php echo $respuesta_160; ?>" size="9"> el ciclo de vida utilizado 
en el <input type="text" name="respuesta_161" value="<?php echo $respuesta_161; ?>" size="9"> anterior solo a partir 
de la <input type="text" name="respuesta_162" value="<?php echo $respuesta_162; ?>" size="9"> de esos requerimientos.</p>

    <p>Esta área también está <input type="text" name="respuesta_163" value="<?php echo $respuesta_163; ?>" size="9">, aunque 
    en menor <input type="text" name="respuesta_164" value="<?php echo $respuesta_164; ?>" size="9">, con las áreas
    de <input type="text" name="respuesta_165" value="<?php echo $respuesta_165; ?>" size="9"> de la Configuración 
    de Software, <input type="text" name="respuesta_166" value="<?php echo $respuesta_166; ?>" size="9"> de la Ingeniería
    de Software y <input type="text" name="respuesta_167" value="<?php echo $respuesta_167; ?>" size="9"> de Software.
   Los <input type="text" name="respuesta_168" value="<?php echo $respuesta_168; ?>" size="9"> de CM de software se 
   pueden <input type="text" name="respuesta_169" value="<?php echo $respuesta_169; ?>" size="9"> para 
   <input type="text" name="respuesta_170" value="<?php echo $respuesta_170; ?>" size="9"> y 
   <input type="text" name="respuesta_171" value="<?php echo $respuesta_171; ?>" size="9"> los requerimientos; la
    <input type="text" name="respuesta_172" value="<?php echo $respuesta_172; ?>" size="9"> del software
    <input type="text" name="respuesta_173" value="<?php echo $respuesta_173; ?>" size="9"> qué tan 
    <input type="text" name="respuesta_174" value="<?php echo $respuesta_174; ?>" size="9">
    <input type="text" name="respuesta_175" value="<?php echo $respuesta_175; ?>" size="9"> los requerimientos, y la 
    <input type="text" name="respuesta_176" value="<?php echo $respuesta_176; ?>" size="9"> de la ingeniería puede 
    <input type="text" name="respuesta_177" value="<?php echo $respuesta_177; ?>" size="9"> el 
    <input type="text" name="respuesta_178" value="<?php echo $respuesta_178; ?>" size="9"> de los requerimientos para 
    <input type="text" name="respuesta_179" value="<?php echo $respuesta_179; ?>" size="9"> la 
    <input type="text" name="respuesta_180" value="<?php echo $respuesta_180; ?>" size="9"> del proyecto.</p>

<button type="submit">Enviar</button>
        <?php echo $verificar_150 ?>
<?php echo $verificar_151 ?>
<?php echo $verificar_152 ?>
<?php echo $verificar_153 ?>
<?php echo $verificar_154 ?>
<?php echo $verificar_155 ?>
<?php echo $verificar_156 ?>
<?php echo $verificar_157 ?>
<?php echo $verificar_158 ?>
<?php echo $verificar_159 ?>
<?php echo $verificar_160 ?>
<?php echo $verificar_161 ?>
<?php echo $verificar_162 ?>
<?php echo $verificar_163 ?>
<?php echo $verificar_164 ?>
<?php echo $verificar_165 ?>
<?php echo $verificar_166 ?>
<?php echo $verificar_167 ?>
<?php echo $verificar_168 ?>
<?php echo $verificar_169 ?>
<?php echo $verificar_170 ?>
<?php echo $verificar_171 ?>
<?php echo $verificar_172 ?>
<?php echo $verificar_173 ?>
<?php echo $verificar_174 ?>
<?php echo $verificar_175 ?>
<?php echo $verificar_176 ?>
<?php echo $verificar_177 ?>
<?php echo $verificar_178 ?>
<?php echo $verificar_179 ?>
<?php echo $verificar_180 ?>
    <hr>
    
</div>
</div>
 </form>
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
