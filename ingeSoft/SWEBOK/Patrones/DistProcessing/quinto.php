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
   if ($respuesta_1 === 'generaliza') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'necesidad') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'sincronizacion') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'sistemas') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'procesos concurrentes comparten') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'recurso') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'buffer fijo') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'una cola') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'coordinar') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'produccion') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'consumo') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'informacion generada') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'procesada') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'manera asincrona') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'procesamiento') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'solicitudes') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'realizarse') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'concurrente y asincrona') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'punto de llegada') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'evitar') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'perdida de solicitudes') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'produccion') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'consumo') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'solicitudes') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'coordinarse de alguna manera') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'Generacion') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'solicitudes') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'concurrente') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'asincrona') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'Procesamiento o atencion de solicitudes') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'existir mas de uno') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'Una cola responsable') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'coordinar las dos primeras partes') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'Los objetos/datos son producidos y consumidos de manera asincrona') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'Los objetos/datos pueden producirse') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'cuando no existen consumidores disponibles para procesarlos') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'Los objetos son producidos en cualquier momento') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'almacenan') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'estructura de datos compartida comun') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'esperan') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'procesados') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'consumidor disponible') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'Producer') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'entidades') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'producen objetos/datos') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'asincrona') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'hilos') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'procesados') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'Producer') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'creados') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'todos los consumidores') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'ocupados procesando') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'objetos') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'almacenan') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'una cola') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'el cliente') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'genera continua') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'ejecucion normal') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'Queue') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'Almacena') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'objetos/datos producidos') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'Producers hasta') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'objeto Consumer') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'retire de la cola') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'dequeue') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'procesarlos') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'tamaño maximo') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'Guarded Suspension') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'obliga') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'hilo productor') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'esperar hasta') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'hilo consumidor retire') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'objeto de la cola') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'Retira objetos de la cola para procesarlos') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'está vacia') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'objetos Consumer disponibles') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'esperar hasta') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'Producer inserte') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'objeto en la cola') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === '80') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === '100') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === '120') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === '140') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === '160') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === '180') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === '200') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === '220') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === '240') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === '42') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === '63') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === '84') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === '105') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === '126') { 
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
    <link rel="stylesheet" href="../../../../style_2_0.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
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

<form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
 
   <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Dato</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    <h4>Aplicable en dos situaciones:</h4>

    <h3>Interpretación de la frase</h3>

<p>
La frase 
<em>
“The pattern allows to coordinate the production and consumption of information generated and processed asynchronously”
</em>
indica un caso más general que el ejemplo inicial del buffer compartido.
</p>

<h3>Situación inicial</h3>

<p>La situación inicial corresponde al problema clásico productor-consumidor:</p>

<ul>
  <li>Varios procesos concurrentes.</li>
  <li>Compartiendo un recurso común.</li>
  <li>Uso de una cola o buffer fijo.</li>
</ul>

<h3>Ampliación del uso del patrón</h3>

<p>
El texto amplía el uso del patrón a cualquier sistema donde la información se produce y consume de manera asíncrona.
</p>

<h3>Ejemplo diferente</h3>

<p>Un ejemplo distinto sería un sistema de notificaciones:</p>

<ul>
  <li>Un servicio produce eventos como “nuevo pedido” o “mensaje recibido”.</li>
  <li>Otro servicio consume esos eventos para enviar correos o notificaciones push.</li>
  <li>La producción y el consumo no ocurren al mismo tiempo, por lo que se necesita coordinación.</li>
</ul>

<h3>Otros ejemplos</h3>

<ul>
  <li>Procesamiento de tareas en una cola de trabajos.</li>
  <li>Streaming de datos.</li>
  <li>Sistemas de logs.</li>
  <li>Pipelines de procesamiento de imágenes o videos.</li>
</ul>

<h3>Conclusión</h3>

<p>
La parte 
<em>“The pattern allows to...”</em>
describe una aplicación más amplia del patrón, no solo el caso clásico del buffer compartido en el problema productor-consumidor.
</p>

    </div>  


<h3>3.2.10 Patrón de Diseño Producer-Consumer</h3>

<h4>Intención</h4>
<p>
Este patrón 
<input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="11">
  una solución para el problema productor-consumidor.
Este problema expone la 
<input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="11">
  de garantizar 
<input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="11">
  en 
<input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="11">
  donde muchos 
<input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="21">
  un 
<input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="11">
  común
(por ejemplo, un 
<input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="11">
  o 
<input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="11">
 ).
</p>

<p>
El patrón permite 
<input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="11">
  la 
<input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="11">
  y el 
<input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="11">
  de 
<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="16">
  y 
<input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="11">
  de 
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="14">
 .
</p>

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
<hr>
<h4>Problema</h4>
<p>
En una amplia variedad de situaciones, el 
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="9">
  de 
<input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="9">
  puede 
<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="14">
  de manera 
<input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="14">
 , lo cual implica varias cuestiones.
</p>

<p>
Primero, el 
<input type="text" name="respuesta_19" value="<?php echo $respuesta_19 ?>" size="14">
  debe 
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="8">
  la 
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="17">
 .
</p>

<p>
Segundo, la 
<input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="14">
  y el 
<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="14">
  de 
<input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="14">
  deben 
<input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="25">
 .
</p>

<p>
Por ejemplo, suponga un restaurante donde usted ordena su comida según el orden
de llegada y existe más de un cocinero para atenderlo.
</p>

<p>
Cualquier número de clientes puede llegar y ordenar en cualquier momento.
Si usted llega y existe al menos un cocinero disponible, será atendido inmediatamente.
</p>

<p>
Sin embargo, si no hay cocineros disponibles, será colocado en una cola,
donde esperará a ser atendido por el cocinero que quede disponible primero.
</p>

<p>
De esta manera, las solicitudes no se pierden y son atendidas tan pronto como sea posible.
</p>

<button type="submit">Enviar</button>
 <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?> 
    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>
    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>
<hr>
<h4>Contexto</h4>
<p>
Este patrón debe utilizarse cuando el problema puede separarse en tres partes:
</p>

<ul>
  <li>
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="11">
      de 
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="11">
     , la cual puede ser 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="11">
      y 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8">
     .
  </li>

  <li>
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="25">
     , del cual puede 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="15">
     .
  </li>

  <li>
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="16">
      de 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="21">
     .
  </li>
</ul>

<h4>Fuerzas</h4>

<h5>
<input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="61">    
 </h5>

<h5>
<input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="31">    
  incluso 
<input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="56">
 </h5>

<p>
<input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="45">
 .
</p>

<p>
Estos objetos se 
<input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="8">
  en una 
<input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="21">
,
donde 
<input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="8">
  ser 
<input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8">
  por cualquier 
<input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="21">
 .
</p>

<button type="submit">Enviar</button>
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
<hr>
<h4>Diagrama de Estructura - Figura 3.16</h4>

<h4>Participantes</h4>

<h5>
<input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="8">    
 </h5>
<p>
Las 
<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8">
  que 
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="15">
  de manera 
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="8">
  (es decir, 
<input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="8">
 ) para ser 
<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="8">
 .
</p>

<p>
En ocasiones, los objetos 
<input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="8">
  son 
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="8">
  cuando 
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="16">
están 
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="14">
  otros 
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="8">
 .
</p>

<p>
En esos casos, los objetos Producer se 
<input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="8">
  en 
<input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="8">
  mientras
<input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="8">
  que los 
<input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="8">
  con su 
<input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="16">
 .
</p>



<h5>
<input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">    
 </h5>
<p>
<input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="8">
  los 
<input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="16">
  por los 
<input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="16">
  que un 
<input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="16">
  los 
<input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="16">
  (
<input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="16">    
 ) para 
<input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="16">
 .
</p>

<p>
Si la cola alcanza su 
<input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="16">
 , puede utilizar el patrón 
<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="16">
 ,
el cual 
<input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="16">
  al 
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="16">
  a 
<input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="16">
  que un 
<input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="16">
  un 
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="16">
 .
</p>

<h5>Consumer</h5>
<p>
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="25">
 .
</p>

<p>
Si la cola 
<input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="11">
 , los 
<input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="25">
  deben 
<input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="11">
  que un 
<input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="11">
  un 
<input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="11">
 .
</p>

 <button type="submit">Enviar</button>
  <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>  
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
    <br>
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
<?php echo $verificar_79 ?>
<hr>

 <svg width="100%" viewBox="15 0 680 600" role="img" xmlns="http://www.w3.org/2000/svg">
  <title>Producer-Consumer Design Pattern - Structure Diagram</title>
  <desc>Sequence diagram showing Producer, Queue, and Consumer interactions.</desc>

  <defs>
    <marker id="arr" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
      <path d="M2 1L8 5L2 9" fill="none" stroke="context-stroke" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </marker>
    <marker id="arrl" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="6" markerHeight="6" orient="auto">
      <path d="M8 1L2 5L8 9" fill="none" stroke="context-stroke" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </marker>
  </defs>

  <!-- ── Actor boxes ── -->
  <!-- Producer (double border) -->
  <rect x="60" y="12" width="90" height="28" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <rect x="64" y="16" width="82" height="20" rx="0" fill="none" stroke="#444" stroke-width="0.7"/>
  <text font-family="sans-serif" font-size="12" font-weight="500" fill="#222" x="105" y="30" text-anchor="middle">Producer</text>

  <!-- Queue (double border) -->
  <rect x="295" y="12" width="74" height="28" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <rect x="299" y="16" width="66" height="20" rx="0" fill="none" stroke="#444" stroke-width="0.7"/>
  <text font-family="sans-serif" font-size="12" font-weight="500" fill="#222" x="332" y="30" text-anchor="middle">Queue</text>

  <!-- Consumer (triple stacked) -->
  <rect x="537" y="6"  width="86" height="28" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <rect x="533" y="10" width="86" height="28" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <rect x="529" y="14" width="86" height="28" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <text font-family="sans-serif" font-size="12" font-weight="500" fill="#222" x="572" y="32" text-anchor="middle">Consumer</text>

  <!-- ── Lifelines (dashed, full length) ── -->
  <line x1="105" y1="40" x2="105" y2="548" stroke="#777" stroke-width="1" stroke-dasharray="5 4"/>
  <line x1="332" y1="40" x2="332" y2="548" stroke="#777" stroke-width="1" stroke-dasharray="5 4"/>
  <line x1="572" y1="42" x2="572" y2="548" stroke="#777" stroke-width="1" stroke-dasharray="5 4"/>

  <!-- ── Activation bars (white filled rectangles over lifelines) ── -->
  <!-- Producer: tall white bar -->
  <rect x="98" y="65" width="14" height="472" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <!-- Queue: tall white bar -->
  <rect x="325" y="65" width="14" height="472" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <!-- Consumer: tall white bar -->
  <rect x="565" y="65" width="14" height="472" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>

  <!-- ── Outer LOOP frame ── -->
  <rect x="22" y="55" width="666" height="484" rx="0" fill="none" stroke="#333" stroke-width="1.5"/>
  <rect x="22" y="55" width="36" height="16" rx="0" fill="#fff" stroke="#333" stroke-width="1"/>
  <text font-family="sans-serif" font-size="11" font-weight="bold" fill="#111" x="40" y="66" text-anchor="middle">Loop</text>

  <!-- ── ALT outer frame ── -->
  <rect x="288" y="62" width="375" height="470" rx="0" fill="none" stroke="#333" stroke-width="1.2"/>
  <rect x="288" y="62" width="26" height="15" rx="0" fill="#fff" stroke="#333" stroke-width="0.8"/>
  <text font-family="sans-serif" font-size="10" font-weight="bold" fill="#111" x="301" y="72" text-anchor="middle">alt</text>
  <text font-family="sans-serif" font-size="10" fill="#333" x="656" y="76" text-anchor="end">[available</text>
  <text font-family="sans-serif" font-size="10" fill="#333" x="656" y="87" text-anchor="end">consumers]</text>

  <!-- enqueue(): Producer → Queue -->
  <line x1="112" y1="94" x2="324" y2="94" stroke="#222" stroke-width="1.2" marker-end="url(#arr)"/>
  <text font-family="sans-serif" font-size="11" fill="#111" x="165" y="89">enqueue()</text>

  <!-- ── Inner ALT frame ── -->
  <rect x="293" y="108" width="365" height="196" rx="0" fill="none" stroke="#333" stroke-width="1.2"/>
  <rect x="293" y="108" width="26" height="15" rx="0" fill="#fff" stroke="#333" stroke-width="0.8"/>
  <text font-family="sans-serif" font-size="10" font-weight="bold" fill="#111" x="306" y="118" text-anchor="middle">alt</text>
  <text font-family="sans-serif" font-size="10" fill="#333" x="652" y="118" text-anchor="end">[queue size=0]</text>

  <!-- Inner LOOP frame -->
  <rect x="298" y="122" width="110" height="52" rx="0" fill="none" stroke="#333" stroke-width="1"/>
  <rect x="298" y="122" width="34" height="14" rx="0" fill="#fff" stroke="#333" stroke-width="0.7"/>
  <text font-family="sans-serif" font-size="10" font-weight="bold" fill="#111" x="315" y="132" text-anchor="middle">Loop</text>

  <!-- size(): Consumer → Queue (arrow left) -->
  <line x1="564" y1="152" x2="340" y2="152" stroke="#222" stroke-width="1.2" marker-end="url(#arrl)"/>
  <text font-family="sans-serif" font-size="11" fill="#111" x="420" y="147">size()</text>

  <!-- [while size=0] box to the right of Consumer bar -->
  <rect x="584" y="132" width="72" height="34" rx="0" fill="#fff" stroke="#555" stroke-width="0.8"/>
  <text font-family="sans-serif" font-size="10" fill="#333" x="620" y="147" text-anchor="middle">[while</text>
  <text font-family="sans-serif" font-size="10" fill="#333" x="620" y="159" text-anchor="middle">size=0]</text>

  <!-- Dashed divider: inner alt -->
  <line x1="293" y1="178" x2="658" y2="178" stroke="#555" stroke-width="1" stroke-dasharray="7 4"/>
  <text font-family="sans-serif" font-size="10" fill="#333" x="652" y="190" text-anchor="end">[queue size&gt;0]</text>

  <!-- dequeue(): Consumer → Queue (arrow left) -->
  <line x1="564" y1="218" x2="340" y2="218" stroke="#222" stroke-width="1.2" marker-end="url(#arrl)"/>
  <text font-family="sans-serif" font-size="11" fill="#111" x="415" y="213">dequeue()</text>

  <!-- process() self-call on Consumer: small box right + arrow left -->
  <rect x="584" y="232" width="64" height="26" rx="0" fill="#fff" stroke="#555" stroke-width="0.8"/>
  <text font-family="sans-serif" font-size="11" fill="#111" x="616" y="249" text-anchor="middle">process()</text>
  <!-- L-shaped self arrow: right side of bar → box → back -->
  <line x1="579" y1="238" x2="584" y2="238" stroke="#222" stroke-width="1.2"/>
  <line x1="579" y1="252" x2="584" y2="252" stroke="#222" stroke-width="1.2" marker-end="url(#arrl)"/>

  <!-- Dashed divider: outer alt -->
  <line x1="288" y1="314" x2="663" y2="314" stroke="#444" stroke-width="1.2" stroke-dasharray="8 5"/>
  <text font-family="sans-serif" font-size="10" fill="#333" x="656" y="327" text-anchor="end">[no available</text>
  <text font-family="sans-serif" font-size="10" fill="#333" x="656" y="338" text-anchor="end">consumers]</text>

  <!-- store() self-call on Queue: small box right + arrow left -->
  <rect x="344" y="368" width="52" height="26" rx="0" fill="#fff" stroke="#555" stroke-width="0.8"/>
  <text font-family="sans-serif" font-size="11" fill="#111" x="370" y="385" text-anchor="middle">store()</text>
  <!-- L-shaped self arrow -->
  <line x1="339" y1="374" x2="344" y2="374" stroke="#222" stroke-width="1.2"/>
  <line x1="339" y1="388" x2="344" y2="388" stroke="#222" stroke-width="1.2" marker-end="url(#arrl)"/>

  <!-- ── Caption ── -->
  <text font-family="sans-serif" font-size="11" fill="#555" x="345" y="582" text-anchor="middle">Figure 3.16: Structure Diagram - Producer-Consumer Design Pattern</text>
</svg>
 
 
</div>




<div class="seccion derecha">
    
   
<h4>Comportamiento</h4>

<h5>Escenario de Procesamiento - Figura 3.17</h5>

<p>
Los producers y consumers pueden trabajar de manera concurrente y síncrona.
</p>

<p>
El Producer inserta tareas en la cola con la única restricción del tamaño máximo
de la cola, el cual limita el almacenamiento de tareas.
</p>

<p>
Un producer puede esperar hasta que exista espacio libre en la cola
para insertar nuevas tareas.
</p>

<p>
Por otro lado, el Consumer retira tareas de la cola y las procesa.
</p>

<p>
Si no existen tareas en la cola, los consumers esperan por tareas.
</p>

<svg width="100%" viewBox="15 0 680 420" role="img" xmlns="http://www.w3.org/2000/svg">
  <title>Processing Sequence Diagram - Producer-Consumer Design Pattern</title>
  <desc>Sequence diagram showing Producer, Queue, and Consumer with enqueue, dequeue, work, and temporary storage messages.</desc>

  <defs>
    <marker id="arr" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
      <path d="M2 1L8 5L2 9" fill="none" stroke="context-stroke" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </marker>
    <marker id="arrl" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="6" markerHeight="6" orient="auto">
      <path d="M8 1L2 5L8 9" fill="none" stroke="context-stroke" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </marker>
  </defs>

  <!-- ── Actor boxes ── -->
  <rect x="60" y="12" width="90" height="28" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <rect x="64" y="16" width="82" height="20" rx="0" fill="none" stroke="#444" stroke-width="0.7"/>
  <text font-family="sans-serif" font-size="12" font-weight="500" fill="#222" x="105" y="30" text-anchor="middle">Producer</text>

  <rect x="295" y="12" width="74" height="28" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <rect x="299" y="16" width="66" height="20" rx="0" fill="none" stroke="#444" stroke-width="0.7"/>
  <text font-family="sans-serif" font-size="12" font-weight="500" fill="#222" x="332" y="30" text-anchor="middle">Queue</text>

  <rect x="533" y="10" width="90" height="28" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <rect x="537" y="14" width="82" height="20" rx="0" fill="none" stroke="#444" stroke-width="0.7"/>
  <text font-family="sans-serif" font-size="12" font-weight="500" fill="#222" x="578" y="30" text-anchor="middle">Consumer</text>

  <!-- ── Lifelines ── -->
  <line x1="105" y1="40" x2="105" y2="368" stroke="#777" stroke-width="1" stroke-dasharray="5 4"/>
  <line x1="332" y1="40" x2="332" y2="368" stroke="#777" stroke-width="1" stroke-dasharray="5 4"/>
  <line x1="578" y1="38" x2="578" y2="368" stroke="#777" stroke-width="1" stroke-dasharray="5 4"/>

  <!-- ── Activation bars ── -->
  <rect x="98"  y="62" width="14" height="296" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <rect x="325" y="62" width="14" height="296" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>
  <rect x="571" y="62" width="14" height="296" rx="0" fill="#fff" stroke="#444" stroke-width="1.2"/>

  <!-- ── Outer LOOP frame ── -->
  <rect x="22" y="55" width="648" height="308" rx="0" fill="none" stroke="#333" stroke-width="1.5"/>
  <rect x="22" y="55" width="36" height="16" rx="0" fill="#fff" stroke="#333" stroke-width="1"/>
  <text font-family="sans-serif" font-size="11" font-weight="bold" fill="#111" x="40" y="66" text-anchor="middle">Loop</text>

  <!-- ── ALT frame ── -->
  <rect x="290" y="62" width="374" height="294" rx="0" fill="none" stroke="#333" stroke-width="1.2"/>
  <rect x="290" y="62" width="26" height="15" rx="0" fill="#fff" stroke="#333" stroke-width="0.8"/>
  <text font-family="sans-serif" font-size="10" font-weight="bold" fill="#111" x="303" y="72" text-anchor="middle">alt</text>
  <text font-family="sans-serif" font-size="10" fill="#333" x="658" y="78" text-anchor="end">[available</text>
  <text font-family="sans-serif" font-size="10" fill="#333" x="658" y="89" text-anchor="end">consumers]</text>

  <!-- enqueue(): Producer → Queue -->
  <line x1="112" y1="96" x2="324" y2="96" stroke="#222" stroke-width="1.2" marker-end="url(#arr)"/>
  <text font-family="sans-serif" font-size="11" fill="#111" x="168" y="91">enqueue()</text>

  <!-- dequeue(): Consumer → Queue -->
  <line x1="570" y1="96" x2="340" y2="96" stroke="#222" stroke-width="1.2" marker-end="url(#arrl)"/>
  <text font-family="sans-serif" font-size="11" fill="#111" x="415" y="91">dequeue()</text>

  <!-- work(): L-shaped self-arrow on Consumer bar, label floating to the right -->
  <line x1="585" y1="118" x2="620" y2="118" stroke="#222" stroke-width="1.2"/>
  <line x1="620" y1="118" x2="620" y2="138" stroke="#222" stroke-width="1.2"/>
  <line x1="620" y1="138" x2="586" y2="138" stroke="#222" stroke-width="1.2" marker-end="url(#arrl)"/>
  <text font-family="sans-serif" font-size="11" fill="#111" x="624" y="131">work()</text>

  <!-- Dashed divider -->
  <line x1="290" y1="200" x2="664" y2="200" stroke="#444" stroke-width="1.2" stroke-dasharray="8 5"/>
  <text font-family="sans-serif" font-size="10" fill="#333" x="658" y="214" text-anchor="end">[no available</text>
  <text font-family="sans-serif" font-size="10" fill="#333" x="658" y="225" text-anchor="end">consumers]</text>

  <!-- temporary storage: L-shaped self-arrow on Queue bar, label floating to the right -->
  <line x1="339" y1="258" x2="374" y2="258" stroke="#222" stroke-width="1.2"/>
  <line x1="374" y1="258" x2="374" y2="278" stroke="#222" stroke-width="1.2"/>
  <line x1="374" y1="278" x2="340" y2="278" stroke="#222" stroke-width="1.2" marker-end="url(#arrl)"/>
  <text font-family="sans-serif" font-size="11" fill="#111" x="378" y="271">temporary storage</text>

  <!-- ── Caption ── -->
  <text font-family="sans-serif" font-size="11" fill="#555" x="346" y="400" text-anchor="middle">Figure 3.17: Processing Sequence Diagram - Producer-Consumer Design Pattern</text>
</svg>
 
    <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
         
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
