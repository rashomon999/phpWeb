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
   if ($respuesta_1 === 'volumen') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'ventas') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'no hay utilidades') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'perdidas') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'dinamicas') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'ecuacion') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'grafico') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'Ventas'
   || $respuesta_8 === 'ventas'
   ) {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'costos variables'
   || $respuesta_9 === 'Costos variables'
   ) {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'costos fijos'
   || $respuesta_10 === 'Costos fijos'
   )  
    {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'utilidad') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'precio') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'venta unitario') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'numero') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'articulos vendidos') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'costo unitario variable') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'numero') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'articulos vendidos') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'CF / (PV - CV)'
    || $respuesta_19 === 'CF/(PV-CV)'
    ) {  
        $verificar_19 = "correcto"; 
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === '40000'
    || $respuesta_20 === '40 000'
    ) {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'articulo vendido') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'porcion') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'precio') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'venta') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'sobra') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'deducir') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'costo variable') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'costos fijos') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'utilidad') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === '$12/unidad') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === '$6/unidad') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === '$6/unidad') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'unidades') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'vender') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'equilibrio') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'multiplican') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'precio') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'venta unitario') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'equilibrio') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'ventas') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === '$480 000'
    || $respuesta_41 === '480000'
    ) { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === '40,000 unidades'
    || $respuesta_42 === '40000 unidades'
    || $respuesta_42 === '40 000 unidades'
    ) { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === '$12/unidad') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === '$480,000'
    || $respuesta_44 === '$480000'
    || $respuesta_44 === '$480 000'
    ) { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'Ventas') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'costos variables') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'costos fijos') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'utilidad') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'CF/(1-CV/PV)') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'razon') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'margen') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'contribucion') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'ventas') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'Precio de venta') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'Costo variable') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'porcion') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'cada unidad monetaria') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'sobra') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'deducir') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'costos variables') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'cantidad') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'vendida') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'cubrir') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'costos fijos') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'cada unidad') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'vendida') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'sobrando') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'cubrir') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'costos fijos') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'CV/PV') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'costos variables') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'las ventas') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'la razon') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'costo variable') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'razon') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'costo variable') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'restar') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === '100%') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'Ventas') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'costos variables') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'costos fijos') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'utilidad') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === '\frac{CF + U}{MC_u}'
    || $respuesta_83 === '\frac{CF+U}{MC_u}'
    || $respuesta_83 === '\frac{CF + U}{PV - CV}'
    || $respuesta_83 === '\frac{CF+U}{PV-CV}'
    ) { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === '90 000'
    || $respuesta_84 === '90000'
    ) { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === '\frac{CF+U}{(1-\frac{CV}{PV})}') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === '1080000') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'multiplicar') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'unidades') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'precio') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'venta unitario') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'XxPV'
|| $respuesta_91 === 'X x PV'
) { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === '(90000)(12)'
|| $respuesta_92 === '(90 000)(12)'
) { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'los costos') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'el volumen') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'las utilidades') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'utilidades') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'pérdidas') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'ventas') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'lectura') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'calculos') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'volumen') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'las ventas') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === 'los costos') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'eje vertical') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'volumen') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'ventas') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'unidades') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'ventas') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'costos totales') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'ingresos') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'ventas') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'costos totales') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'suma') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'costos fijos') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === '$240 000') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'costos variables') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === '$6') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'unidad vendida') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'costos totales') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'costos fijos') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'costos variables') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
}


$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'CF + CVX') {  
    $verificar_122 = "correcto";
} elseif ($respuesta_122 === '') {
    $verificar_122 = '';
} else {
    $verificar_122 = "incorrecto";
}

$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === '$240000+$6X') {  
    $verificar_123 = "correcto";
} elseif ($respuesta_123 === '') {
    $verificar_123 = '';
} else {
    $verificar_123 = "incorrecto";
}


$respuesta_124 = isset($_POST['respuesta_124']) ? $_POST['respuesta_124'] : '';
if ($respuesta_124 === 'sin ventas') {  
    $verificar_124 = "correcto";
} elseif ($respuesta_124 === '') {
    $verificar_124 = '';
} else {
    $verificar_124 = "incorrecto";
}

$respuesta_125 = isset($_POST['respuesta_125']) ? $_POST['respuesta_125'] : '';
if ($respuesta_125 === 'cero unidades') {  
    $verificar_125 = "correcto";
} elseif ($respuesta_125 === '') {
    $verificar_125 = '';
} else {
    $verificar_125 = "incorrecto";
}

$respuesta_126 = isset($_POST['respuesta_126']) ? $_POST['respuesta_126'] : '';
if ($respuesta_126 === 'constante') {  
    $verificar_126 = "correcto";
} elseif ($respuesta_126 === '') {
    $verificar_126 = '';
} else {
    $verificar_126 = "incorrecto";
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
    <link rel="stylesheet" href="../../style_2_0.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 310vh;
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
    var f = document.getElementById('respuesta_83').value || "";
    var formula = ` \\ X_u = ${f} \\, `;
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_85').value || "";
    var formula = ` \\ S_u = ${f} \\, `;
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



function mostrarMensaje5() {
    document.getElementById("mensaje5").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje5")]);
}

function ocultarMensaje5() {
    document.getElementById("mensaje5").style.display = 'none';
}

function mostrarMensaje6() {
    document.getElementById("mensaje6").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje6")]);
}

function ocultarMensaje6() {
    document.getElementById("mensaje6").style.display = 'none';
}

function mostrarMensaje7() {
    document.getElementById("mensaje7").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje7")]);
}

function ocultarMensaje7() {
    document.getElementById("mensaje7").style.display = 'none';
}

function mostrarMensaje8() {
    document.getElementById("mensaje8").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje7")]);
}

function ocultarMensaje8() {
    document.getElementById("mensaje8").style.display = 'none';
}
</script>
    
</head>
<body>  

<form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
  
  <h3>Análisis de equilibrio</h3>

<p>
El punto de equilibrio se conoce como el 
 <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">
  de 
 <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">
  para el cual 
 <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="10">
 , pero tampoco se tienen 
 <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">
 . 
Aunque el análisis de equilibrio es un concepto estático, puede aplicarse a situaciones 
<input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
 y proporcionarle ayuda a la gerencia 
en las operaciones de planeación y control. El concepto es importante no por el punto de equilibrio en sí, en el cual 
con frecuencia  no estaría interesada una organización, sino por los efectos que sobre las decisiones de costos y ventas, 
así como en los cambios que 
sobre el volumen de actividad, deben adoptarse para alcanzar una utilidad deseada.
</p>

<h3>Ecuación de equilibrio expresada en unidades</h3>

<p>
Para determinar el punto de equilibrio puede utilizarse la técnica de la 
<input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">
  o el método 
<input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">
 , y puede expresarse 
en unidades o en ventas en unidades monetarias.
</p>

<p>
El estado de resultados puede expresarse mediante la técnica de ecuación como sigue:
</p>

<p><strong>
<input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">    
  – 
<input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="12">
  – 
<input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">
  = 
<input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">
 </strong></p>

<p>
Las ventas pueden expresarse como el 
<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">
  de 
<input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="10">
  (<strong>PV</strong>) por el 
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">
  de 
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="12">
 ; 
los costos variables, como el 
<input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="15">
  (<strong>CV</strong>) por el 
<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">
  de 
<input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="13">
 ; 
los costos fijos como (<strong>CF</strong>) y las utilidades como (<strong>U</strong>), entonces:
</p>

 

<p><strong>Xₑ = 
<input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">    
 </strong> → Unidades necesarias para lograr el equilibrio</p>

 <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Ayuda</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
 <p><em>PVX – CVX – CF = U</em></p>

<p>Al despejar <em>X</em> se tiene:</p>

<p><em>PVX – CVX = CF + U</em></p>

<p>
Al agrupar e igualar <em>U = 0</em>, pues en el punto de equilibrio no hay utilidades ni pérdidas, se tiene:
</p>

<p><em>Xₑ (PV – CV) = CF</em> (se designa <em>X</em> como factor común). Se despeja <em>X</em>:</p>

<p><strong>Xₑ = CF / (PV – CV)</strong> → Unidades necesarias para lograr el equilibrio</p>
    </div>

    <button type="submit">Enviar</button>
    <?php echo $verificar_1; ?>
    <?php echo $verificar_2; ?>
    <?php echo $verificar_3; ?>
    <?php echo $verificar_4; ?>
    <?php echo $verificar_5; ?>
    <?php echo $verificar_6; ?>
    <?php echo $verificar_7; ?>
    <?php echo $verificar_8; ?>
    <?php echo $verificar_9; ?>
    <?php echo $verificar_10; ?>
    <?php echo $verificar_11; ?>
    <?php echo $verificar_12; ?>
    <?php echo $verificar_13; ?>
    <?php echo $verificar_14; ?>
    <?php echo $verificar_15; ?>
    <?php echo $verificar_16; ?>
    <?php echo $verificar_17; ?>
    <?php echo $verificar_18; ?>
    <?php echo $verificar_19; ?>
    <hr>

    <h4>Ejemplo 10.1</h4>

<p>
Si se supone que los costos fijos son de $240,000 por período, el precio de venta de $12,00 por unidad y los costos variables de $6,00 por unidad, 
el punto de equilibrio (<em>X<sub>e</sub></em>) en unidades es:
</p>
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="13">


<h3>El margen de contribución</h3>

<p>
El margen de contribución es, para cada 
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="13">
 , la 
<input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="13">
  del 
<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="13">
  de 
<input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="13">
  que 
<input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="13">
  después de 
<input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="13">
  el 
<input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="13">
 , para cubrir primero los 
<input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="13">
  y generar después una 
<input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="13">
 . 
<br><br>

Margen de contribución unitario (MCU) = 
<input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="12"> 
-
<input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="12"> 

<br><br>

El margen de contribución puede expresarse como una cifra total, por unidad o como un porcentaje. 
En el ejemplo 10.1, con $12 como precio de venta y $6 como costo variable unitario, 
el margen de contribución por unidad (<em>MCU</em>) es:
</p>

<p><em>MCU = 
<input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="13">    
  -
<input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="13">
 = 
<input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="13">
 </em></p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_20; ?>
    <?php echo $verificar_21; ?>
    <?php echo $verificar_22; ?>
    <?php echo $verificar_23; ?>
    <?php echo $verificar_24; ?>
    <?php echo $verificar_25; ?>
    <?php echo $verificar_26; ?>
    <?php echo $verificar_27; ?>
    <?php echo $verificar_28; ?>
    <?php echo $verificar_29; ?>
    <?php echo $verificar_30; ?>
    <?php echo $verificar_31; ?>
    <?php echo $verificar_32; ?>
    <?php echo $verificar_54; ?>
    <?php echo $verificar_55; ?>
    <hr>

<h3>Ecuación de equilibrio expresada en unidades monetarias</h3>

<p>
Los datos anteriores pueden utilizarse para determinar el punto de equilibrio en unidades monetarias. 
Después de encontrar las 
<input type="text"  value="<?php echo $respuesta_20; ?>" size="13" onlyread>
<input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="13">
   que es necesario 
 <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="13">
   para obtener el 
 <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="13">
  , éstas se
 <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="13">
   por su 
 <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="13">
   de 
 <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="13">

y se obtiene el 
<input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="13">
  en 
<input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="13">
  de 
<input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="13">
 
</p>

 <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Ayuda</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    480 000 =  (40,000 unidades × $12/unidad, precio de ventas).
    </div>


<p>
Se va a tratar de encontrar una expresión más general. Las ventas en unidades monetarias en el equilibrio se denominarán <em>S<sub>e</sub></em>:
</p>

<p>
<em>S<sub>e</sub> = X<sub>e</sub> PV → S<sub>e</sub> = 
<input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="13">
  × 
<input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="13">
  = 
<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="13">
 </em>
</p>

<p>
Si se regresa al modelo general obtenido a partir del estado de resultados, se obtiene:
</p>

<p><strong>
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="13">    
  – 
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="13">
  – 
<input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="13">
  = 
<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="13">
 </strong></p>


  <button onmousedown="mostrarMensaje3()" onmouseup="ocultarMensaje3()">Ayuda</button>
    <div id="mensaje3" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    <p><em>PVX = CVX + CF</em> (al retomar los datos previos e igualar <em>U = $0</em>)</p>
<p><em>X = (CVX / PV) + (CF / PV)</em> (al dividir toda la expresión entre el precio de venta, <em>PV</em>)</p>
<p><em>X – (CVX / PV) = CF / PV</em> (al agrupar términos con <em>X</em>)</p>
<p><em>X (1 – CV / PV) = CF / PV</em> (al factorizar <em>X</em>)</p>

<h3>Despeje paso a paso</h3>

  <p>Partimos de la ecuación:</p>

  \[
  X \left( 1 - \frac{CV}{PV} \right) = \frac{CF}{PV}
  \]

  <p>Despejamos \( X \):</p>

  \[
  X = \frac{\dfrac{CF}{PV}}{\left(1 - \dfrac{CV}{PV}\right)}
  \]

  <p>Simplificamos:</p>

  \[
  X = \frac{CF}{PV\left(1 - \dfrac{CV}{PV}\right)}
  \]

  <p>O, multiplicando ambos lados por \( PV \):</p>

  \[
  X \, PV = \frac{CF}{\left(1 - \dfrac{CV}{PV}\right)}
  \]

  <p>Finalmente, llegamos a la forma más simple:</p>

  \[
  X = \frac{CF}{PV - CV}
  \]
    </div>

 

<p>
<em>
XPV =<input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="13">    
   </em>
</p>

<p>
Si <em>XPV</em>, que son las ventas, se denominan <em>S<sub>e</sub></em>, es decir, ventas en unidades monetarias para el 
equilibrio, se llega a:
</p>
<button type="submit">Enviar</button>
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
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
<hr>

<p><strong>S<sub>e</sub> =
XPV =<input type="text"  value="<?php echo $respuesta_49; ?>" size="13" readonly>    
</strong></p>

<h4>En el ejemplo:</h4>

<p>
<em>S<sub>e</sub> = $240,000 / (1 – $6 / $12)</em><br>
<em>$240,000 / (1 – 0.50) = $240,000 / 0.50 = $480,000</em>
</p>

<p>
Como puede observarse, los costos fijos de $240,000 se dividieron entre 0.50, la llamada 
<strong>
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="13">     
  de 
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="13"> 
  de 
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="13"> 
 </strong>, para llegar a las 
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="8"> 
  necesarias y estar en equilibrio. 
La ecuación anterior indica que con $480,000 de ventas se está en equilibrio. 
Si se venden menos de $480,000, no se cubrirán todos los costos fijos y se obtendrán pérdidas. 
Si las ventas están por encima de $480,000, no sólo se cubrirán todos los costos sino que se generarán utilidades.
</p>

<button type="submit">Enviar</button>
<?php echo $verificar_50 ?>
<?php echo $verificar_51 ?>
<?php echo $verificar_52 ?>
<?php echo $verificar_53 ?>
<hr>

</div>




<div class="seccion derecha">
   
    <h3>La razón del margen de contribución</h3>

<p>
La razón del margen de contribución es la 
<input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="8">
  de 
<input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="15">
  obtenida en ventas 
que 
<input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="8">
  luego de 
<input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">
  los 
<input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="8">
 . Es la 
<input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="8">
  disponible de cada unidad monetaria 
<input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="8">
  para 
<input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="8">
  los 
<input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="8">
  y luego generar las utilidades.
</p>

<p>
En el ejemplo 10.2, <em>la razón del margen de contribución</em> es 0.50 o 50%, 
lo que indica que de 
<input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8">
  monetaria 
<input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="8">
  están 
<input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="8">
  $0.50 para 
<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="8">
  primero los 
<input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="8"> 
y para generar utilidades, una vez alcanzado el punto de equilibrio.
</p>

<p>
El término 
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="8">
 , o 
<input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="8">
  divididos entre 
<input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="8">
 , se conoce como 
<em>
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="8">    
  del 
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="8">    
 </em>. 

<button onmousedown="mostrarMensaje4()" onmouseup="ocultarMensaje4()">Ayuda</button>
    <div id="mensaje4" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    Para el caso analizado, la razón del costo variable es 50%.
</p>

<p>
<em>CV / PV = ($6) / ($12)</em>
</p>

<h3>Razón del margen de contribución vs. Razón del costo variable</h3>

<p>
No son lo mismo, aunque están directamente relacionadas.
A continuación se explica la diferencia:
</p>

<h4>🔹 Razón del margen de contribución (RMC)</h4>

<p>
Indica <strong>qué parte de cada peso vendido</strong> queda disponible
<strong>para cubrir los costos fijos y generar utilidad</strong>.
</p>

<p>Se calcula así:</p>

<p>
\[
\text{RMC} = 1 - \frac{CV}{PV}
\]
o también
\[
\text{RMC} = \frac{PV - CV}{PV}
\]
</p>

<p>
Ejemplo: si el precio de venta (<em>PV</em>) es \$12 y el costo variable (<em>CV</em>) es \$6:
</p>

<p>
\[
\text{RMC} = 1 - \frac{6}{12} = 0.5 = 50\%
\]
Esto significa que el <strong>50% de las ventas</strong> cubre los costos fijos y genera utilidad.
</p>

<h4>🔹 Razón del costo variable (RCV)</h4>

<p>
Indica <strong>qué parte de cada peso vendido</strong> se destina a
<strong>cubrir los costos variables</strong>.
</p>

<p>Se calcula así:</p>

<p>
\[
\text{RCV} = \frac{CV}{PV}
\]
</p>

<p>
En el mismo ejemplo:
\[
\text{RCV} = \frac{6}{12} = 0.5 = 50\%
\]
Es decir, el 50% de las ventas se va en costos variables.
</p>

<h4>💡 Relación entre ambas</h4>

<p>
Son <strong>complementarias</strong>:
</p>

<p>
\[
\text{RMC} + \text{RCV} = 1 \quad \text{(o 100%)}
\]
</p>

<p>
Si conoces una, puedes hallar la otra restando de 1.
No son iguales, pero representan dos caras del mismo análisis financiero.
</p>
    </div>
 
<p>
La 
<input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="8">
  del 
<input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="8">
  también puede obtenerse al 
<input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="8">
  la razón del margen de contribución de 
<input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="8">
 .
</p>
 
    <button type="submit">Enviar</button>
    <?php echo $verificar_56 ?>
    <?php echo $verificar_57 ?>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <?php echo $verificar_60 ?>
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

    <hr>

<h2>Situación general. Expresión en unidades</h2>

<p>
Hasta ahora se ha trabajado un caso particular: la situación del punto de equilibrio en unidades para un solo producto. 
Ahora, se va a buscar la expresión para una situación con una utilidad deseada <em>U</em>, antes de impuestos. 
Se va a tomar de nuevo la ecuación del estado de ganancias y pérdidas, así:
</p>

<p >
    <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="8">-
    <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="8">-
    <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="8">
    =
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="8">
 
</p>


    <button onmousedown="mostrarMensaje5()" onmouseup="ocultarMensaje5()">Ayuda</button>
    <div id="mensaje5" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    <p>
$$ PVX - CVX - CF = U $$
$$ PVX - CVX = CF + U \quad \text{(al agrupar)} $$
$$ X (PV - CV) = CF + U $$
</p>

  <p>
Al designar a <em>X</em> como factor común, se tiene:
</p>

<p >$$ X_u = \frac{CF + U}{PV - CV} \Rightarrow X_u = \frac{CF + U}{MC_u} \quad \text{(al despejar X)} $$
</p>

    </div>


   <p>
Al designar a <em>X</em> como factor común, se tiene:
</p>


    <span id="formula">
        \( X_u=  \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_83"   id="respuesta_83" oninput="actualizarFormula()" 
    value="<?php echo $respuesta_83?>" size="25" >
    </p>
<p>


Con base en los datos del ejemplo 10.2, se busca una utilidad de $300 000 antes de impuestos por período, entonces, se tiene:
</p>


<button onmousedown="mostrarMensaje6()" onmouseup="ocultarMensaje6()">Ayuda</button>
    <div id="mensaje6" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
   <p >$$ X_u = \frac{ \$240{,}000 + \$300{,}000 }{ (\$12 - \$6) } = \frac{ \$540{,}000 }{ \$6 } = 90{,}000 \text{ unidades} $$
</p>


    </div>


 
<p>
Así, deben venderse <strong>
<input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="8">    
  unidades por período</strong> si se desea obtener una utilidad antes de impuestos 
de $300,000 por período.
</p>

<button type="submit">Enviar</button>
<?php echo $verificar_79 ?>
<?php echo $verificar_80 ?>
<?php echo $verificar_81 ?>
<?php echo $verificar_82 ?>
<?php echo $verificar_83 ?>
<?php echo $verificar_84 ?>
<hr>
<h3>Situación general. Expresión en unidades monetarias</h3>

<p>
Hay que considerar el proceso general pero buscar su expresión en términos monetarios:
</p>

<button onmousedown="mostrarMensaje7()" onmouseup="ocultarMensaje7()">Ayuda</button>
    <div id="mensaje7" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
 
<p>
Ventas – costos variables – costos fijos = utilidad
</p>

<p>
$$ PVX - CVX - CF = U $$
</p>

<p>
$$ X - \frac{CVX}{PV} = \frac{CF + U}{PV} \quad \text{(al agrupar y dividir entre las ventas, PV)} $$
</p>

<p>
$$ X \left(1 - \frac{CV}{PV}\right) = \frac{CF + U}{PV} \quad \text{(se designa a X como factor común)} $$
</p>

<p>
$$ XPV = \frac{CF + U}{\left(1 - \frac{CV}{PV}\right)} \quad \text{(y XPV son las ventas } S_u \text{)} $$
</p>

<p>
$$ S_u = \frac{CF + U}{\left(1 - \frac{CV}{PV}\right)} = \frac{CF + U}{\text{razón de margen de contribución}} $$
</p>

 
    </div>
    <span id="formula2">
        \( S_u =  \)
    </span> 
    <br><br>
    <input type="text" name="respuesta_85"   id="respuesta_85" oninput="actualizarFormula2()" 
    value="<?php echo $respuesta_85?>" size="25" >
<p>
Para el caso analizado, se tiene:
</p>


<button onmousedown="mostrarMensaje7()" onmouseup="ocultarMensaje7()">Ayuda</button>
    <div id="mensaje7" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
 
 
<p>
$$ S_u = \frac{\$240\,000 + \$300\,000}{\left(1 - \frac{6}{12}\right)} = \frac{\$540\,000}{0.50} = \$1\,080\,000 $$
</p>
<p>
Es decir, es necesario vender \$1 080 000 para obtener una utilidad de \$300 000 antes de impuestos en el período.
</p>
 
    </div>

    <br><br>
<p>
\( S_u \)=  <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="10">   
</p>
<p>
Es decir, es necesario vender 
<input type="text"   value="<?php echo $respuesta_86; ?>" size="10" readonly> 
  para obtener una utilidad de \$300 000 antes de impuestos en el período.
</p>

<p>
Asimismo, este volumen de ventas en unidades monetarias puede obtenerse al 
<input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="10"> 
  las 
<input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="10"> 
  por su 
<input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="10"> 
de 
<input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="10"> 
:
</p>

<p>
\( S_u = ~~~ \)<input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="10"> 
</p>
Es decir,
<p>
\( S_u =   \)
<input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="10"> 
</p>

<button type="submit">Enviar</button>
<?php echo $verificar_86 ?>
<?php echo $verificar_87 ?>
<?php echo $verificar_88 ?>
<?php echo $verificar_89 ?>
<?php echo $verificar_90 ?>
<?php echo $verificar_91 ?>
<?php echo $verificar_92 ?>
<hr>

<h3>Análisis gráfico</h3>

<p>
Para elaborar un gráfico de equilibrio y de la situación general de una empresa, hay que relacionar 
<input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="10"> 
 , 
<input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="10">
  y 
<input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="10">
 . El gráfico se utiliza para determinar las 
<input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="10">
  o las 
<input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="10">
  en cualquier nivel de 
<input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="10">
 . La gran ventaja del gráfico es su facilidad de 
<input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="10">
  y análisis; puede indicar mejor las relaciones entre 
  <input type="text"   value="<?php echo $respuesta_93; ?>" size="10" readonly> 
  , 
  <input type="text"  value="<?php echo $respuesta_94; ?>" size="10" readonly>
  y 
  <input type="text"  value="<?php echo $respuesta_95; ?>" size="10" readonly>
   a la gerencia, que los 
<input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="10">
  numéricos. Muestra con claridad el impacto del 
<input type="text" name="respuesta_101" value="<?php echo $respuesta_101; ?>" size="10">
sobre los costos y las utilidades.
</p>

<p>
En el gráfico costo-volumen-utilidad, los pesos de 
<input type="text" name="respuesta_102" value="<?php echo $respuesta_102; ?>" size="10">
  y los de 
<input type="text" name="respuesta_103" value="<?php echo $respuesta_103; ?>" size="10">
  se expresan sobre el 
<input type="text" name="respuesta_104" value="<?php echo $respuesta_104; ?>" size="10">
 . El eje 
horizontal se utiliza para señalar el 
<input type="text" name="respuesta_105" value="<?php echo $respuesta_105; ?>" size="10">
  de 
<input type="text" name="respuesta_106" value="<?php echo $respuesta_106; ?>" size="10">
 , el cual puede expresarse en 
<input type="text" name="respuesta_107" value="<?php echo $respuesta_107; ?>" size="10">
  de 
<input type="text" name="respuesta_108" value="<?php echo $respuesta_108; ?>" size="10">
 , horas de mano de 
obra directa, horas máquina, porcentaje de capacidad o cualquier otro índice de volumen.
</p>

    <p>
    En la figura 10.1 se trazaron dos líneas que indican los 
    <input type="text" name="respuesta_109" value="<?php echo $respuesta_109; ?>" size="10">
      y los 
    <input type="text" name="respuesta_110" value="<?php echo $respuesta_110; ?>" size="10">
      por 
    <input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="10">
     . Los 
    <input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="10">
      están representados por la 
    <input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="10">
      de los 
    <input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="10">
      (
    <input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="10">
    ) y por los 
    <input type="text" name="respuesta_116" value="<?php echo $respuesta_116; ?>" size="10">
      (
    <input type="text" name="respuesta_117" value="<?php echo $respuesta_117; ?>" size="10">
    ) por cada 
    <input type="text" name="respuesta_118" value="<?php echo $respuesta_118; ?>" size="10">
     . 
    Luego, la recta de los 
    <input type="text" name="respuesta_119" value="<?php echo $respuesta_119; ?>" size="10">
      expresada como una ecuación tomará la siguiente forma:
    </p>

<p>
<strong>Costos totales = 
<input type="text" name="respuesta_120" value="<?php echo $respuesta_120; ?>" size="10">    
  + 
<input type="text" name="respuesta_121" value="<?php echo $respuesta_121; ?>" size="10">
 </strong>
</p>

<p style="text-align:center;">
\( Y_c = \)
<input type="text" name="respuesta_122" value="<?php echo $respuesta_122; ?>" size="10">
   \( \quad \text{(como ecuación)} \)
</p>

<p style="text-align:center;">
\( Y_c = \) 
<input type="text" name="respuesta_123" value="<?php echo $respuesta_123; ?>" size="10">
   \(  \quad \text{(ecuación del costo total)} \)
</p>

<p>
La ecuación del costo total muestra cómo aun 
<input type="text" name="respuesta_124" value="<?php echo $respuesta_124; ?>" size="10">
 , a un volumen de actividad de 
<input type="text" name="respuesta_125" value="<?php echo $respuesta_125; ?>" size="10">
 , se 
tienen presentes los costos fijos de \$240 000; por esto, la línea de los costos se inicia en \$240 000 para un 
nivel cero de actividad y crece a una tasa 
<input type="text" name="respuesta_126" value="<?php echo $respuesta_126; ?>" size="10">
  de \$6 por unidad.
</p>

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
    <?php echo $verificar_122 ?>
    <?php echo $verificar_123 ?>
    <?php echo $verificar_124 ?>
    <?php echo $verificar_125 ?>
    <?php echo $verificar_126 ?>
    <hr>
</div>
</div>
 </form>
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
