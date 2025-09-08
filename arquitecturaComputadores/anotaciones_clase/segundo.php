<?php
 
for ($i = 1; $i <= 300; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 300; $i++) {
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
   if ($respuesta_1 === 'cambios deliberados') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'intencionados') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'variables controlables') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'sistema') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'proceso') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'observa entonces los datos de salida') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'luego') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'inferencia') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'decision') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'variables') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'responsables') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'cambios') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'rendimiento de salida') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'tecnica') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'configuracion') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'sistema de computo') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'Los diseños') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'conduccion') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'fase de validacion') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'servicio') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'modelo') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'desarrollo') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'componente software') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'hardware') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'sistema') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'condiciones') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'escenarios de trabajo') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'Generalmente') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'productos') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'procesos') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'diseñan') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'desarrollan') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'rendimiento') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'confiabilidad') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'menores costos') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'reduccion') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'tiempo de espera') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'diseño de ingenieria') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'actividades de desarrollo') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'En la conduccion de experimentos') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'El diseño de experimentos') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'tecnica formal') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'estructurada') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'estudiar') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'situacion') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'Eso implica') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = ''; 
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'respuesta') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'varia') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'funcion') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'una o mas') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'variables independientes') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'diseñado') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'problemas complejos') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'mas de una variable') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'afectar') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'respuesta') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'dos o mas variables') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'interactuar entre si') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'reemplaza') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'metodos inferiores') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'tradicional') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'metodo de estudio') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'efecto de una variable a la vez') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'OVAT') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'One Variable at a Time'
|| $respuesta_65 === 'one variable at a time'
) { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'OVAT') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'ineficiente') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'recursos') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'incapaz') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'detectar') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'presencia de') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'la cuantificacion') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'interacciones entre variables') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'utiliza') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'recopilan') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'analizan') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'datos experimentales') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'investigacion cientifica') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'poder') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'eficiencia') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'correctamente') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'proporcionar') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'respuestas') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'preguntas especificas') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'comportamiento') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'sistema') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'optimo') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'observaciones experimentales') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'diseñados') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'estructurados') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'especificas') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'estadistico') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'muy pocas observaciones') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'se podra obtener') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'confianza') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'resultados') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'demasiadas observaciones') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'desperdiciarian') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'recursos') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'gasto minimo') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'tiempo') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'recursos') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === 'entradas') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'determinan') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'proceso opera') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'salidas') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'producidas por') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'determinar') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'entradas') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'salidas') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'realizados') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'descubrir') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'validar') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'modelos') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'herramientas') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'variables') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === 'factores') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'predictores') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'salidas') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'respuestas') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'implica') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
}

$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'observacion') {
    $verificar_122 = "correcto";
} elseif ($respuesta_122 === '') {
    $verificar_122 = '';
} else {
    $verificar_122 = "incorrecto";
}

$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === 'entradas') {
    $verificar_123 = "correcto";
} elseif ($respuesta_123 === '') {
    $verificar_123 = '';
} else {
    $verificar_123 = "incorrecto";
}

$respuesta_124 = isset($_POST['respuesta_124']) ? $_POST['respuesta_124'] : '';
if ($respuesta_124 === 'variables') {
    $verificar_124 = "correcto";
} elseif ($respuesta_124 === '') {
    $verificar_124 = '';
} else {
    $verificar_124 = "incorrecto";
}

$respuesta_125 = isset($_POST['respuesta_125']) ? $_POST['respuesta_125'] : '';
if ($respuesta_125 === 'salidas') {
    $verificar_125 = "correcto";
} elseif ($respuesta_125 === '') {
    $verificar_125 = '';
} else {
    $verificar_125 = "incorrecto";
}

$respuesta_126 = isset($_POST['respuesta_126']) ? $_POST['respuesta_126'] : '';
if ($respuesta_126 === 'respuestas') {
    $verificar_126 = "correcto";
} elseif ($respuesta_126 === '') {
    $verificar_126 = '';
} else {
    $verificar_126 = "incorrecto";
}

$respuesta_127 = isset($_POST['respuesta_127']) ? $_POST['respuesta_127'] : '';
if ($respuesta_127 === 'accion tomada') {
    $verificar_127 = "correcto";
} elseif ($respuesta_127 === '') {
    $verificar_127 = '';
} else {
    $verificar_127 = "incorrecto";
}

$respuesta_128 = isset($_POST['respuesta_128']) ? $_POST['respuesta_128'] : '';
if ($respuesta_128 === 'experimentador') {
    $verificar_128 = "correcto";
} elseif ($respuesta_128 === '') {
    $verificar_128 = '';
} else {
    $verificar_128 = "incorrecto";
}

$respuesta_129 = isset($_POST['respuesta_129']) ? $_POST['respuesta_129'] : '';
if ($respuesta_129 === 'entradas determina') {
    $verificar_129 = "correcto";
} elseif ($respuesta_129 === '') {
    $verificar_129 = '';
} else {
    $verificar_129 = "incorrecto";
}

$respuesta_130 = isset($_POST['respuesta_130']) ? $_POST['respuesta_130'] : '';
if ($respuesta_130 === 'pasivo') {
    $verificar_130 = "correcto";
} elseif ($respuesta_130 === '') {
    $verificar_130 = '';
} else {
    $verificar_130 = "incorrecto";
}

$respuesta_131 = isset($_POST['respuesta_131']) ? $_POST['respuesta_131'] : '';
if ($respuesta_131 === 'activo') {
    $verificar_131 = "correcto";
} elseif ($respuesta_131 === '') {
    $verificar_131 = '';
} else {
    $verificar_131 = "incorrecto";
}

$respuesta_132 = isset($_POST['respuesta_132']) ? $_POST['respuesta_132'] : '';
if ($respuesta_132 === 'observa el sistema') {
    $verificar_132 = "correcto";
} elseif ($respuesta_132 === '') {
    $verificar_132 = '';
} else {
    $verificar_132 = "incorrecto";
}

$respuesta_133 = isset($_POST['respuesta_133']) ? $_POST['respuesta_133'] : '';
if ($respuesta_133 === 'registra') {
    $verificar_133 = "correcto";
} elseif ($respuesta_133 === '') {
    $verificar_133 = '';
} else {
    $verificar_133 = "incorrecto";
}

$respuesta_134 = isset($_POST['respuesta_134']) ? $_POST['respuesta_134'] : '';
if ($respuesta_134 === 'cambio') {
    $verificar_134 = "correcto";
} elseif ($respuesta_134 === '') {
    $verificar_134 = '';
} else {
    $verificar_134 = "incorrecto";
}

$respuesta_135 = isset($_POST['respuesta_135']) ? $_POST['respuesta_135'] : '';
if ($respuesta_135 === 'ocurra') {
    $verificar_135 = "correcto";
} elseif ($respuesta_135 === '') {
    $verificar_135 = '';
} else {
    $verificar_135 = "incorrecto";
}

$respuesta_136 = isset($_POST['respuesta_136']) ? $_POST['respuesta_136'] : '';
if ($respuesta_136 === 'entradas') {
    $verificar_136 = "correcto";
} elseif ($respuesta_136 === '') {
    $verificar_136 = '';
} else {
    $verificar_136 = "incorrecto";
}

$respuesta_137 = isset($_POST['respuesta_137']) ? $_POST['respuesta_137'] : '';
if ($respuesta_137 === 'salidas') {
    $verificar_137 = "correcto";
} elseif ($respuesta_137 === '') {
    $verificar_137 = '';
} else {
    $verificar_137 = "incorrecto";
}

$respuesta_138 = isset($_POST['respuesta_138']) ? $_POST['respuesta_138'] : '';
if ($respuesta_138 === 'pasivo') {
    $verificar_138 = "correcto";
} elseif ($respuesta_138 === '') {
    $verificar_138 = '';
} else {
    $verificar_138 = "incorrecto";
}

$respuesta_139 = isset($_POST['respuesta_139']) ? $_POST['respuesta_139'] : '';
if ($respuesta_139 === 'costoso') {
    $verificar_139 = "correcto";
} elseif ($respuesta_139 === '') {
    $verificar_139 = '';
} else {
    $verificar_139 = "incorrecto";
}

$respuesta_140 = isset($_POST['respuesta_140']) ? $_POST['respuesta_140'] : '';
if ($respuesta_140 === 'mucho tiempo') {
    $verificar_140 = "correcto";
} elseif ($respuesta_140 === '') {
    $verificar_140 = '';
} else {
    $verificar_140 = "incorrecto";
}

$respuesta_141 = isset($_POST['respuesta_141']) ? $_POST['respuesta_141'] : '';
if ($respuesta_141 === 'improductivo') {
    $verificar_141 = "correcto";
} elseif ($respuesta_141 === '') {
    $verificar_141 = '';
} else {
    $verificar_141 = "incorrecto";
}

$respuesta_142 = isset($_POST['respuesta_142']) ? $_POST['respuesta_142'] : '';
if ($respuesta_142 === 'varia intencionalmente') {
    $verificar_142 = "correcto";
} elseif ($respuesta_142 === '') {
    $verificar_142 = '';
} else {
    $verificar_142 = "incorrecto";
}

$respuesta_143 = isset($_POST['respuesta_143']) ? $_POST['respuesta_143'] : '';
if ($respuesta_143 === 'entradas') {
    $verificar_143 = "correcto";
} elseif ($respuesta_143 === '') {
    $verificar_143 = '';
} else {
    $verificar_143 = "incorrecto";
}

$respuesta_144 = isset($_POST['respuesta_144']) ? $_POST['respuesta_144'] : '';
if ($respuesta_144 === 'activo') {
    $verificar_144 = "correcto";
} elseif ($respuesta_144 === '') {
    $verificar_144 = '';
} else {
    $verificar_144 = "incorrecto";
}

$respuesta_145 = isset($_POST['respuesta_145']) ? $_POST['respuesta_145'] : '';
if ($respuesta_145 === 'activa') {
    $verificar_145 = "correcto";
} elseif ($respuesta_145 === '') {
    $verificar_145 = '';
} else {
    $verificar_145 = "incorrecto";
}

$respuesta_146 = isset($_POST['respuesta_146']) ? $_POST['respuesta_146'] : '';
if ($respuesta_146 === 'condiciones controladas') {
    $verificar_146 = "correcto";
} elseif ($respuesta_146 === '') {
    $verificar_146 = '';
} else {
    $verificar_146 = "incorrecto";
}

$respuesta_147 = isset($_POST['respuesta_147']) ? $_POST['respuesta_147'] : '';
if ($respuesta_147 === 'logica') {
    $verificar_147 = "correcto";
} elseif ($respuesta_147 === '') {
    $verificar_147 = '';
} else {
    $verificar_147 = "incorrecto";
}

$respuesta_148 = isset($_POST['respuesta_148']) ? $_POST['respuesta_148'] : '';
if ($respuesta_148 === 'estructurada') {
    $verificar_148 = "correcto";
} elseif ($respuesta_148 === '') {
    $verificar_148 = '';
} else {
    $verificar_148 = "incorrecto";
}

$respuesta_149 = isset($_POST['respuesta_149']) ? $_POST['respuesta_149'] : '';
if ($respuesta_149 === 'poderosa') {
    $verificar_149 = "correcto";
} elseif ($respuesta_149 === '') {
    $verificar_149 = '';
} else {
    $verificar_149 = "incorrecto";
}

$respuesta_150 = isset($_POST['respuesta_150']) ? $_POST['respuesta_150'] : '';
if ($respuesta_150 === 'reflexionar') {
    $verificar_150 = "correcto";
} elseif ($respuesta_150 === '') {
    $verificar_150 = '';
} else {
    $verificar_150 = "incorrecto";
}

$respuesta_151 = isset($_POST['respuesta_151']) ? $_POST['respuesta_151'] : '';
if ($respuesta_151 === 'respuestas') {
    $verificar_151 = "correcto";
} elseif ($respuesta_151 === '') {
    $verificar_151 = '';
} else {
    $verificar_151 = "incorrecto";
}

$respuesta_152 = isset($_POST['respuesta_152']) ? $_POST['respuesta_152'] : '';
if ($respuesta_152 === 'salida') {
    $verificar_152 = "correcto";
} elseif ($respuesta_152 === '') {
    $verificar_152 = '';
} else {
    $verificar_152 = "incorrecto";
}

$respuesta_153 = isset($_POST['respuesta_153']) ? $_POST['respuesta_153'] : '';
if ($respuesta_153 === 'sistema de computo') {
    $verificar_153 = "correcto";
} elseif ($respuesta_153 === '') {
    $verificar_153 = '';
} else {
    $verificar_153 = "incorrecto";
}

$respuesta_154 = isset($_POST['respuesta_154']) ? $_POST['respuesta_154'] : '';
if ($respuesta_154 === 'casos') {
    $verificar_154 = "correcto";
} elseif ($respuesta_154 === '') {
    $verificar_154 = '';
} else {
    $verificar_154 = "incorrecto";
}

$respuesta_155 = isset($_POST['respuesta_155']) ? $_POST['respuesta_155'] : '';
if ($respuesta_155 === 'necesidad') {
    $verificar_155 = "correcto";
} elseif ($respuesta_155 === '') {
    $verificar_155 = '';
} else {
    $verificar_155 = "incorrecto";
}

$respuesta_156 = isset($_POST['respuesta_156']) ? $_POST['respuesta_156'] : '';
if ($respuesta_156 === 'realizar') {
    $verificar_156 = "correcto";
} elseif ($respuesta_156 === '') {
    $verificar_156 = '';
} else {
    $verificar_156 = "incorrecto";
}

$respuesta_157 = isset($_POST['respuesta_157']) ? $_POST['respuesta_157'] : '';
if ($respuesta_157 === 'evaluacion') {
    $verificar_157 = "correcto";
} elseif ($respuesta_157 === '') {
    $verificar_157 = '';
} else {
    $verificar_157 = "incorrecto";
}

$respuesta_158 = isset($_POST['respuesta_158']) ? $_POST['respuesta_158'] : '';
if ($respuesta_158 === 'uno o varios sistemas de computo') {
    $verificar_158 = "correcto";
} elseif ($respuesta_158 === '') {
    $verificar_158 = '';
} else {
    $verificar_158 = "incorrecto";
}

$respuesta_159 = isset($_POST['respuesta_159']) ? $_POST['respuesta_159'] : '';
if ($respuesta_159 === 'variables de entrada') {
    $verificar_159 = "correcto";
} elseif ($respuesta_159 === '') {
    $verificar_159 = '';
} else {
    $verificar_159 = "incorrecto";
}

$respuesta_160 = isset($_POST['respuesta_160']) ? $_POST['respuesta_160'] : '';
if ($respuesta_160 === 'algunos') {
    $verificar_160 = "correcto";
} elseif ($respuesta_160 === '') {
    $verificar_160 = '';
} else {
    $verificar_160 = "incorrecto";
}

$respuesta_161 = isset($_POST['respuesta_161']) ? $_POST['respuesta_161'] : '';
if ($respuesta_161 === 'muchisimos factores') {
    $verificar_161 = "correcto";
} elseif ($respuesta_161 === '') {
    $verificar_161 = '';
} else {
    $verificar_161 = "incorrecto";
}

$respuesta_162 = isset($_POST['respuesta_162']) ? $_POST['respuesta_162'] : '';
if ($respuesta_162 === 'hardware') {
    $verificar_162 = "correcto";
} elseif ($respuesta_162 === '') {
    $verificar_162 = '';
} else {
    $verificar_162 = "incorrecto";
}

$respuesta_163 = isset($_POST['respuesta_163']) ? $_POST['respuesta_163'] : '';
if ($respuesta_163 === 'software') {
    $verificar_163 = "correcto";
} elseif ($respuesta_163 === '') {
    $verificar_163 = '';
} else {
    $verificar_163 = "incorrecto";
}

$respuesta_164 = isset($_POST['respuesta_164']) ? $_POST['respuesta_164'] : '';
if ($respuesta_164 === 'ambientales') {
    $verificar_164 = "correcto";
} elseif ($respuesta_164 === '') {
    $verificar_164 = '';
} else {
    $verificar_164 = "incorrecto";
}

$respuesta_165 = isset($_POST['respuesta_165']) ? $_POST['respuesta_165'] : '';
if ($respuesta_165 === 'sociales') {
    $verificar_165 = "correcto";
} elseif ($respuesta_165 === '') {
    $verificar_165 = '';
} else {
    $verificar_165 = "incorrecto";
}

$respuesta_166 = isset($_POST['respuesta_166']) ? $_POST['respuesta_166'] : '';
if ($respuesta_166 === 'afectar') {
    $verificar_166 = "correcto";
} elseif ($respuesta_166 === '') {
    $verificar_166 = '';
} else {
    $verificar_166 = "incorrecto";
}

$respuesta_167 = isset($_POST['respuesta_167']) ? $_POST['respuesta_167'] : '';
if ($respuesta_167 === 'respuesta') {
    $verificar_167 = "correcto";
} elseif ($respuesta_167 === '') {
    $verificar_167 = '';
} else {
    $verificar_167 = "incorrecto";
}

$respuesta_168 = isset($_POST['respuesta_168']) ? $_POST['respuesta_168'] : '';
if ($respuesta_168 === 'interesados') {
    $verificar_168 = "correcto";
} elseif ($respuesta_168 === '') {
    $verificar_168 = '';
} else {
    $verificar_168 = "incorrecto";
}

$respuesta_169 = isset($_POST['respuesta_169']) ? $_POST['respuesta_169'] : '';
if ($respuesta_169 === 'desempeño') {
    $verificar_169 = "correcto";
} elseif ($respuesta_169 === '') {
    $verificar_169 = '';
} else {
    $verificar_169 = "incorrecto";
}

$respuesta_170 = isset($_POST['respuesta_170']) ? $_POST['respuesta_170'] : '';
if ($respuesta_170 === 'respuesta') {
    $verificar_170 = "correcto";
} elseif ($respuesta_170 === '') {
    $verificar_170 = '';
} else {
    $verificar_170 = "incorrecto";
}

$respuesta_171 = isset($_POST['respuesta_171']) ? $_POST['respuesta_171'] : '';
if ($respuesta_171 === 'dos formas') {
    $verificar_171 = "correcto";
} elseif ($respuesta_171 === '') {
    $verificar_171 = '';
} else {
    $verificar_171 = "incorrecto";
}

$respuesta_172 = isset($_POST['respuesta_172']) ? $_POST['respuesta_172'] : '';
if ($respuesta_172 === 'comparar dos') {
    $verificar_172 = "correcto";
} elseif ($respuesta_172 === '') {
    $verificar_172 = '';
} else {
    $verificar_172 = "incorrecto";
}

$respuesta_173 = isset($_POST['respuesta_173']) ? $_POST['respuesta_173'] : '';
if ($respuesta_173 === 'sistemas') {
    $verificar_173 = "correcto";
} elseif ($respuesta_173 === '') {
    $verificar_173 = '';
} else {
    $verificar_173 = "incorrecto";
}

$respuesta_174 = isset($_POST['respuesta_174']) ? $_POST['respuesta_174'] : '';
if ($respuesta_174 === 'decidir') {
    $verificar_174 = "correcto";
} elseif ($respuesta_174 === '') {
    $verificar_174 = '';
} else {
    $verificar_174 = "incorrecto";
}

$respuesta_175 = isset($_POST['respuesta_175']) ? $_POST['respuesta_175'] : '';
if ($respuesta_175 === 'mejor') {
    $verificar_175 = "correcto";
} elseif ($respuesta_175 === '') {
    $verificar_175 = '';
} else {
    $verificar_175 = "incorrecto";
}

$respuesta_176 = isset($_POST['respuesta_176']) ? $_POST['respuesta_176'] : '';
if ($respuesta_176 === 'adecuada') {
    $verificar_176 = "correcto";
} elseif ($respuesta_176 === '') {
    $verificar_176 = '';
} else {
    $verificar_176 = "incorrecto";
}

$respuesta_177 = isset($_POST['respuesta_177']) ? $_POST['respuesta_177'] : '';
if ($respuesta_177 === 'metrica de desempeño') {
    $verificar_177 = "correcto";
} elseif ($respuesta_177 === '') {
    $verificar_177 = '';
} else {
    $verificar_177 = "incorrecto";
}

$respuesta_178 = isset($_POST['respuesta_178']) ? $_POST['respuesta_178'] : '';
if ($respuesta_178 === 'analisis costo beneficio') {
    $verificar_178 = "correcto";
} elseif ($respuesta_178 === '') {
    $verificar_178 = '';
} else {
    $verificar_178 = "incorrecto";
}

$respuesta_179 = isset($_POST['respuesta_179']) ? $_POST['respuesta_179'] : '';
if ($respuesta_179 === 'alternativas') {
    $verificar_179 = "correcto";
} elseif ($respuesta_179 === '') {
    $verificar_179 = '';
} else {
    $verificar_179 = "incorrecto";
}

$respuesta_180 = isset($_POST['respuesta_180']) ? $_POST['respuesta_180'] : '';
if ($respuesta_180 === 'fase de diseño') {
    $verificar_180 = "correcto";
} elseif ($respuesta_180 === '') {
    $verificar_180 = '';
} else {
    $verificar_180 = "incorrecto";
}

$respuesta_181 = isset($_POST['respuesta_181']) ? $_POST['respuesta_181'] : '';
if ($respuesta_181 === 'ciclo de vida') {
    $verificar_181 = "correcto";
} elseif ($respuesta_181 === '') {
    $verificar_181 = '';
} else {
    $verificar_181 = "incorrecto";
}

$respuesta_182 = isset($_POST['respuesta_182']) ? $_POST['respuesta_182'] : '';
if ($respuesta_182 === 'producto') {
    $verificar_182 = "correcto";
} elseif ($respuesta_182 === '') {
    $verificar_182 = '';
} else {
    $verificar_182 = "incorrecto";
}

$respuesta_183 = isset($_POST['respuesta_183']) ? $_POST['respuesta_183'] : '';
if ($respuesta_183 === 'servicio') {
    $verificar_183 = "correcto";
} elseif ($respuesta_183 === '') {
    $verificar_183 = '';
} else {
    $verificar_183 = "incorrecto";
}

$respuesta_184 = isset($_POST['respuesta_184']) ? $_POST['respuesta_184'] : '';
if ($respuesta_184 === 'sistema') {
    $verificar_184 = "correcto";
} elseif ($respuesta_184 === '') {
    $verificar_184 = '';
} else {
    $verificar_184 = "incorrecto";
}

$respuesta_185 = isset($_POST['respuesta_185']) ? $_POST['respuesta_185'] : '';
if ($respuesta_185 === 'validacion') {
    $verificar_185 = "correcto";
} elseif ($respuesta_185 === '') {
    $verificar_185 = '';
} else {
    $verificar_185 = "incorrecto";
}

$respuesta_186 = isset($_POST['respuesta_186']) ? $_POST['respuesta_186'] : '';
if ($respuesta_186 === 'mejora') {
    $verificar_186 = "correcto";
} elseif ($respuesta_186 === '') {
    $verificar_186 = '';
} else {
    $verificar_186 = "incorrecto";
}

$respuesta_187 = isset($_POST['respuesta_187']) ? $_POST['respuesta_187'] : '';
if ($respuesta_187 === 'componente') {
    $verificar_187 = "correcto";
} elseif ($respuesta_187 === '') {
    $verificar_187 = '';
} else {
    $verificar_187 = "incorrecto";
}

$respuesta_188 = isset($_POST['respuesta_188']) ? $_POST['respuesta_188'] : '';
if ($respuesta_188 === 'arquitectura') {
    $verificar_188 = "correcto";
} elseif ($respuesta_188 === '') {
    $verificar_188 = '';
} else {
    $verificar_188 = "incorrecto";
}

$respuesta_189 = isset($_POST['respuesta_189']) ? $_POST['respuesta_189'] : '';
if ($respuesta_189 === 'otra situacion') {
    $verificar_189 = "correcto";
} elseif ($respuesta_189 === '') {
    $verificar_189 = '';
} else {
    $verificar_189 = "incorrecto";
}

$respuesta_190 = isset($_POST['respuesta_190']) ? $_POST['respuesta_190'] : '';
if ($respuesta_190 === 'analisis de los experimentos') {
    $verificar_190 = "correcto";
} elseif ($respuesta_190 === '') {
    $verificar_190 = '';
} else {
    $verificar_190 = "incorrecto";
}

$respuesta_191 = isset($_POST['respuesta_191']) ? $_POST['respuesta_191'] : '';
if ($respuesta_191 === 'ayuda') {
    $verificar_191 = "correcto";
} elseif ($respuesta_191 === '') {
    $verificar_191 = '';
} else {
    $verificar_191 = "incorrecto";
}

$respuesta_192 = isset($_POST['respuesta_192']) ? $_POST['respuesta_192'] : '';
if ($respuesta_192 === 'separacion de los efectos') {
    $verificar_192 = "correcto";
} elseif ($respuesta_192 === '') {
    $verificar_192 = '';
} else {
    $verificar_192 = "incorrecto";
}

$respuesta_193 = isset($_POST['respuesta_193']) ? $_POST['respuesta_193'] : '';
if ($respuesta_193 === 'diversos factores') {
    $verificar_193 = "correcto";
} elseif ($respuesta_193 === '') {
    $verificar_193 = '';
} else {
    $verificar_193 = "incorrecto";
}

$respuesta_194 = isset($_POST['respuesta_194']) ? $_POST['respuesta_194'] : '';
if ($respuesta_194 === 'rendimiento') {
    $verificar_194 = "correcto";
} elseif ($respuesta_194 === '') {
    $verificar_194 = '';
} else {
    $verificar_194 = "incorrecto";
}

$respuesta_195 = isset($_POST['respuesta_195']) ? $_POST['respuesta_195'] : '';
if ($respuesta_195 === 'determinacion') {
    $verificar_195 = "correcto";
} elseif ($respuesta_195 === '') {
    $verificar_195 = '';
} else {
    $verificar_195 = "incorrecto";
}

$respuesta_196 = isset($_POST['respuesta_196']) ? $_POST['respuesta_196'] : '';
if ($respuesta_196 === 'factor') {
    $verificar_196 = "correcto";
} elseif ($respuesta_196 === '') {
    $verificar_196 = '';
} else {
    $verificar_196 = "incorrecto";
}

$respuesta_197 = isset($_POST['respuesta_197']) ? $_POST['respuesta_197'] : '';
if ($respuesta_197 === 'efecto significativo') {
    $verificar_197 = "correcto";
} elseif ($respuesta_197 === '') {
    $verificar_197 = '';
} else {
    $verificar_197 = "incorrecto";
}

$respuesta_198 = isset($_POST['respuesta_198']) ? $_POST['respuesta_198'] : '';
if ($respuesta_198 === 'diferencia observada') {
    $verificar_198 = "correcto";
} elseif ($respuesta_198 === '') {
    $verificar_198 = '';
} else {
    $verificar_198 = "incorrecto";
}

$respuesta_199 = isset($_POST['respuesta_199']) ? $_POST['respuesta_199'] : '';
if ($respuesta_199 === 'variaciones aleatorias') {
    $verificar_199 = "correcto";
} elseif ($respuesta_199 === '') {
    $verificar_199 = '';
} else {
    $verificar_199 = "incorrecto";
}

$respuesta_200 = isset($_POST['respuesta_200']) ? $_POST['respuesta_200'] : '';
if ($respuesta_200 === 'errores de medicion') {
    $verificar_200 = "correcto";
} elseif ($respuesta_200 === '') {
    $verificar_200 = '';
} else {
    $verificar_200 = "incorrecto";
}

$respuesta_201 = isset($_POST['respuesta_201']) ? $_POST['respuesta_201'] : '';
if ($respuesta_201 === 'parametros') {
    $verificar_201 = "correcto";
} elseif ($respuesta_201 === '') {
    $verificar_201 = '';
} else {
    $verificar_201 = "incorrecto";
}

$respuesta_202 = isset($_POST['respuesta_202']) ? $_POST['respuesta_202'] : '';
if ($respuesta_202 === 'no fueron controlados') {
    $verificar_202 = "correcto";
} elseif ($respuesta_202 === '') {
    $verificar_202 = '';
} else {
    $verificar_202 = "incorrecto";
}

$respuesta_203 = isset($_POST['respuesta_203']) ? $_POST['respuesta_203'] : '';
if ($respuesta_203 === 'objetivo') {
    $verificar_203 = "correcto";
} elseif ($respuesta_203 === '') {
    $verificar_203 = '';
} else {
    $verificar_203 = "incorrecto";
}

$respuesta_204 = isset($_POST['respuesta_204']) ? $_POST['respuesta_204'] : '';
if ($respuesta_204 === 'diseño') {
    $verificar_204 = "correcto";
} elseif ($respuesta_204 === '') {
    $verificar_204 = '';
} else {
    $verificar_204 = "incorrecto";
}

$respuesta_205 = isset($_POST['respuesta_205']) ? $_POST['respuesta_205'] : '';
if ($respuesta_205 === 'maximo de informacion') {
    $verificar_205 = "correcto";
} elseif ($respuesta_205 === '') {
    $verificar_205 = '';
} else {
    $verificar_205 = "incorrecto";
}

$respuesta_206 = isset($_POST['respuesta_206']) ? $_POST['respuesta_206'] : '';
if ($respuesta_206 === 'minimo numero') {
    $verificar_206 = "correcto";
} elseif ($respuesta_206 === '') { 
    $verificar_206 = ''; 
} else {
    $verificar_206 = "incorrecto";
}

$respuesta_207 = isset($_POST['respuesta_207']) ? $_POST['respuesta_207'] : '';
if ($respuesta_207 === 'experimentos') {
    $verificar_207 = "correcto";
} elseif ($respuesta_207 === '') {
    $verificar_207 = '';
} else {
    $verificar_207 = "incorrecto";
}

$respuesta_208 = isset($_POST['respuesta_208']) ? $_POST['respuesta_208'] : '';
if ($respuesta_208 === 'ahorra') {
    $verificar_208 = "correcto";
} elseif ($respuesta_208 === '') {
    $verificar_208 = '';
} else {
    $verificar_208 = "incorrecto";
}

$respuesta_209 = isset($_POST['respuesta_209']) ? $_POST['respuesta_209'] : '';
if ($respuesta_209 === 'cantidad de trabajo') {
    $verificar_209 = "correcto";
} elseif ($respuesta_209 === '') {
    $verificar_209 = '';
} else {
    $verificar_209 = "incorrecto";
}

$respuesta_210 = isset($_POST['respuesta_210']) ? $_POST['respuesta_210'] : '';
if ($respuesta_210 === 'gastado') {
    $verificar_210 = "correcto";
} elseif ($respuesta_210 === '') {
    $verificar_210 = '';
} else {
    $verificar_210 = "incorrecto";
}

$respuesta_211 = isset($_POST['respuesta_211']) ? $_POST['respuesta_211'] : '';
if ($respuesta_211 === 'recopilacion de datos') {
    $verificar_211 = "correcto";
} elseif ($respuesta_211 === '') {
    $verificar_211 = '';
} else {
    $verificar_211 = "incorrecto";
}

$respuesta_212 = isset($_POST['respuesta_212']) ? $_POST['respuesta_212'] : '';
if ($respuesta_212 === 'apoya') {
    $verificar_212 = "correcto";
} elseif ($respuesta_212 === '') {
    $verificar_212 = '';
} else {
    $verificar_212 = "incorrecto";
}

$respuesta_213 = isset($_POST['respuesta_213']) ? $_POST['respuesta_213'] : '';
if ($respuesta_213 === 'metodos estadisticos') {
    $verificar_213 = "correcto";
} elseif ($respuesta_213 === '') {
    $verificar_213 = '';
} else {
    $verificar_213 = "incorrecto";
}

$respuesta_214 = isset($_POST['respuesta_214']) ? $_POST['respuesta_214'] : '';
if ($respuesta_214 === 'describir') {
    $verificar_214 = "correcto";
} elseif ($respuesta_214 === '') {
    $verificar_214 = '';
} else {
    $verificar_214 = "incorrecto";
}

$respuesta_215 = isset($_POST['respuesta_215']) ? $_POST['respuesta_215'] : '';
if ($respuesta_215 === 'comprender') {
    $verificar_215 = "correcto";
} elseif ($respuesta_215 === '') {
    $verificar_215 = '';
} else {
    $verificar_215 = "incorrecto";
}

$respuesta_216 = isset($_POST['respuesta_216']) ? $_POST['respuesta_216'] : '';
if ($respuesta_216 === 'variabilidad') {
    $verificar_216 = "correcto";
} elseif ($respuesta_216 === '') {
    $verificar_216 = '';
} else {
    $verificar_216 = "incorrecto";
}

$respuesta_217 = isset($_POST['respuesta_217']) ? $_POST['respuesta_217'] : '';
if ($respuesta_217 === 'variabilidad') {
    $verificar_217 = "correcto";
} elseif ($respuesta_217 === '') {
    $verificar_217 = '';
} else {
    $verificar_217 = "incorrecto";
}

$respuesta_218 = isset($_POST['respuesta_218']) ? $_POST['respuesta_218'] : '';
if ($respuesta_218 === 'observaciones') {
    $verificar_218 = "correcto";
} elseif ($respuesta_218 === '') {
    $verificar_218 = '';
} else {
    $verificar_218 = "incorrecto";
}

$respuesta_219 = isset($_POST['respuesta_219']) ? $_POST['respuesta_219'] : '';
if ($respuesta_219 === 'sistema') {
    $verificar_219 = "correcto";
} elseif ($respuesta_219 === '') {
    $verificar_219 = '';
} else {
    $verificar_219 = "incorrecto";
}

$respuesta_220 = isset($_POST['respuesta_220']) ? $_POST['respuesta_220'] : '';
if ($respuesta_220 === 'no producen') {
    $verificar_220 = "correcto";
} elseif ($respuesta_220 === '') {
    $verificar_220 = '';
} else {
    $verificar_220 = "incorrecto";
}

$respuesta_221 = isset($_POST['respuesta_221']) ? $_POST['respuesta_221'] : '';
if ($respuesta_221 === 'resultado') {
    $verificar_221 = "correcto";
} elseif ($respuesta_221 === '') {
    $verificar_221 = '';
} else {
    $verificar_221 = "incorrecto";
}

$respuesta_222 = isset($_POST['respuesta_222']) ? $_POST['respuesta_222'] : '';
if ($respuesta_222 === 'incorporar') {
    $verificar_222 = "correcto";
} elseif ($respuesta_222 === '') {
    $verificar_222 = '';
} else {
    $verificar_222 = "incorrecto";
}

$respuesta_223 = isset($_POST['respuesta_223']) ? $_POST['respuesta_223'] : '';
if ($respuesta_223 === 'toma de decisiones') {
    $verificar_223 = "correcto";
} elseif ($respuesta_223 === '') {
    $verificar_223 = '';
} else {
    $verificar_223 = "incorrecto";
}

$respuesta_224 = isset($_POST['respuesta_224']) ? $_POST['respuesta_224'] : '';
if ($respuesta_224 === 'autonomia') {
    $verificar_224 = "correcto";
} elseif ($respuesta_224 === '') {
    $verificar_224 = '';
} else {
    $verificar_224 = "incorrecto";
}

$respuesta_225 = isset($_POST['respuesta_225']) ? $_POST['respuesta_225'] : '';
if ($respuesta_225 === 'duracion') {
    $verificar_225 = "correcto";
} elseif ($respuesta_225 === '') {
    $verificar_225 = '';
} else {
    $verificar_225 = "incorrecto";
}

$respuesta_226 = isset($_POST['respuesta_226']) ? $_POST['respuesta_226'] : '';
if ($respuesta_226 === 'variabilidad') {
    $verificar_226 = "correcto";
} elseif ($respuesta_226 === '') {
    $verificar_226 = '';
} else {
    $verificar_226 = "incorrecto";
}

$respuesta_227 = isset($_POST['respuesta_227']) ? $_POST['respuesta_227'] : '';
if ($respuesta_227 === 'factores') {
    $verificar_227 = "correcto";
} elseif ($respuesta_227 === '') {
    $verificar_227 = '';
} else {
    $verificar_227 = "incorrecto";
}

$respuesta_228 = isset($_POST['respuesta_228']) ? $_POST['respuesta_228'] : '';
if ($respuesta_228 === 'potenciales') {
    $verificar_228 = "correcto";
} elseif ($respuesta_228 === '') {
    $verificar_228 = '';
} else {
    $verificar_228 = "incorrecto";
}

$respuesta_229 = isset($_POST['respuesta_229']) ? $_POST['respuesta_229'] : '';
if ($respuesta_229 === 'describir') {
    $verificar_229 = "correcto";
} elseif ($respuesta_229 === '') {
    $verificar_229 = '';
} else {
    $verificar_229 = "incorrecto";
}

$respuesta_230 = isset($_POST['respuesta_230']) ? $_POST['respuesta_230'] : '';
if ($respuesta_230 === 'importantes') {
    $verificar_230 = "correcto";
} elseif ($respuesta_230 === '') {
    $verificar_230 = '';
} else {
    $verificar_230 = "incorrecto";
}

$respuesta_231 = isset($_POST['respuesta_231']) ? $_POST['respuesta_231'] : '';
if ($respuesta_231 === 'identificar') {
    $verificar_231 = "correcto";
} elseif ($respuesta_231 === '') {
    $verificar_231 = '';
} else {
    $verificar_231 = "incorrecto";
}

$respuesta_232 = isset($_POST['respuesta_232']) ? $_POST['respuesta_232'] : '';
if ($respuesta_232 === 'documentar') {
    $verificar_232 = "correcto";
} elseif ($respuesta_232 === '') {
    $verificar_232 = '';
} else {
    $verificar_232 = "incorrecto";
}

$respuesta_233 = isset($_POST['respuesta_233']) ? $_POST['respuesta_233'] : '';
if ($respuesta_233 === 'variables') {
    $verificar_233 = "correcto";
} elseif ($respuesta_233 === '') {
    $verificar_233 = '';
} else {
    $verificar_233 = "incorrecto";
}

$respuesta_234 = isset($_POST['respuesta_234']) ? $_POST['respuesta_234'] : '';
if ($respuesta_234 === 'respuestas') {
    $verificar_234 = "correcto";
} elseif ($respuesta_234 === '') {
    $verificar_234 = '';
} else {
    $verificar_234 = "incorrecto";
}

$respuesta_235 = isset($_POST['respuesta_235']) ? $_POST['respuesta_235'] : '';
if ($respuesta_235 === 'proceso') {
    $verificar_235 = "correcto";
} elseif ($respuesta_235 === '') {
    $verificar_235 = '';
} else {
    $verificar_235 = "incorrecto";
}

$respuesta_236 = isset($_POST['respuesta_236']) ? $_POST['respuesta_236'] : '';
if ($respuesta_236 === 'construir') {
    $verificar_236 = "correcto";
} elseif ($respuesta_236 === '') {
    $verificar_236 = '';
} else {
    $verificar_236 = "incorrecto";
}

$respuesta_237 = isset($_POST['respuesta_237']) ? $_POST['respuesta_237'] : '';
if ($respuesta_237 === 'diagrama') {
    $verificar_237 = "correcto";
} elseif ($respuesta_237 === '') {
    $verificar_237 = '';
} else {
    $verificar_237 = "incorrecto";
}

$respuesta_238 = isset($_POST['respuesta_238']) ? $_POST['respuesta_238'] : '';
if ($respuesta_238 === 'causa y efecto') {
    $verificar_238 = "correcto";
} elseif ($respuesta_238 === '') {
    $verificar_238 = '';
} else {
    $verificar_238 = "incorrecto";
}

$respuesta_239 = isset($_POST['respuesta_239']) ? $_POST['respuesta_239'] : '';
if ($respuesta_239 === 'izquierda') {
    $verificar_239 = "correcto";
} elseif ($respuesta_239 === '') {
    $verificar_239 = '';
} else {
    $verificar_239 = "incorrecto";
}

$respuesta_240 = isset($_POST['respuesta_240']) ? $_POST['respuesta_240'] : '';
if ($respuesta_240 === 'derecha') {
    $verificar_240 = "correcto";
} elseif ($respuesta_240 === '') {
    $verificar_240 = '';
} else {
    $verificar_240 = "incorrecto";
}

$respuesta_241 = isset($_POST['respuesta_241']) ? $_POST['respuesta_241'] : '';
if ($respuesta_241 === '4'
|| $respuesta_241 === 'cuatro'
) {
    $verificar_241 = "correcto";
} elseif ($respuesta_241 === '') {
    $verificar_241 = '';
} else {
    $verificar_241 = "incorrecto";
}

$respuesta_242 = isset($_POST['respuesta_242']) ? $_POST['respuesta_242'] : '';
if ($respuesta_242 === 'iniciar el experimento') {
    $verificar_242 = "correcto";
} elseif ($respuesta_242 === '') {
    $verificar_242 = '';
} else {
    $verificar_242 = "incorrecto";
}

$respuesta_243 = isset($_POST['respuesta_243']) ? $_POST['respuesta_243'] : '';
if ($respuesta_243 === 'definir') {
    $verificar_243 = "correcto";
} elseif ($respuesta_243 === '') {
    $verificar_243 = '';
} else {
    $verificar_243 = "incorrecto";
}

$respuesta_244 = isset($_POST['respuesta_244']) ? $_POST['respuesta_244'] : '';
if ($respuesta_244 === 'las metricas') {
    $verificar_244 = "correcto";
} elseif ($respuesta_244 === '') {
    $verificar_244 = '';
} else {
    $verificar_244 = "incorrecto";
}

$respuesta_245 = isset($_POST['respuesta_245']) ? $_POST['respuesta_245'] : '';
if ($respuesta_245 === 'por otro') {
    $verificar_245 = "correcto";
} elseif ($respuesta_245 === '') {
    $verificar_245 = '';
} else {
    $verificar_245 = "incorrecto";
}

$respuesta_246 = isset($_POST['respuesta_246']) ? $_POST['respuesta_246'] : '';
if ($respuesta_246 === 'seleccion de factores') {
    $verificar_246 = "correcto";
} elseif ($respuesta_246 === '') {
    $verificar_246 = '';
} else {
    $verificar_246 = "incorrecto";
}

$respuesta_247 = isset($_POST['respuesta_247']) ? $_POST['respuesta_247'] : '';
if ($respuesta_247 === 'evaluacion') {
    $verificar_247 = "correcto";
} elseif ($respuesta_247 === '') {
    $verificar_247 = '';
} else {
    $verificar_247 = "incorrecto";
}

$respuesta_248 = isset($_POST['respuesta_248']) ? $_POST['respuesta_248'] : '';
if ($respuesta_248 === 'importante') {
    $verificar_248 = "correcto";
} elseif ($respuesta_248 === '') {
    $verificar_248 = '';
} else {
    $verificar_248 = "incorrecto";
}

$respuesta_249 = isset($_POST['respuesta_249']) ? $_POST['respuesta_249'] : '';
if ($respuesta_249 === 'ingenieria') {
    $verificar_249 = "correcto";
} elseif ($respuesta_249 === '') {
    $verificar_249 = '';
} else {
    $verificar_249 = "incorrecto";
}

$respuesta_250 = isset($_POST['respuesta_250']) ? $_POST['respuesta_250'] : '';
if ($respuesta_250 === 'documentar') {
    $verificar_250 = "correcto";
} elseif ($respuesta_250 === '') {
    $verificar_250 = '';
} else {
    $verificar_250 = "incorrecto";
}

$respuesta_251 = isset($_POST['respuesta_251']) ? $_POST['respuesta_251'] : '';
if ($respuesta_251 === 'propositos cientificos') {
    $verificar_251 = "correcto";
} elseif ($respuesta_251 === '') {
    $verificar_251 = '';
} else {
    $verificar_251 = "incorrecto";
}

$respuesta_252 = isset($_POST['respuesta_252']) ? $_POST['respuesta_252'] : '';
if ($respuesta_252 === 'El proposito') {
    $verificar_252 = "correcto";
} elseif ($respuesta_252 === '') {
    $verificar_252 = '';
} else {
    $verificar_252 = "incorrecto";
}

$respuesta_253 = isset($_POST['respuesta_253']) ? $_POST['respuesta_253'] : '';
if ($respuesta_253 === 'experimento') {
    $verificar_253 = "correcto";
} elseif ($respuesta_253 === '') {
    $verificar_253 = '';
} else {
    $verificar_253 = "incorrecto";
}

$respuesta_254 = isset($_POST['respuesta_254']) ? $_POST['respuesta_254'] : '';
if ($respuesta_254 === 'comportamiento') {
    $verificar_254 = "correcto";
} elseif ($respuesta_254 === '') {
    $verificar_254 = '';
} else {
    $verificar_254 = "incorrecto";
}

$respuesta_255 = isset($_POST['respuesta_255']) ? $_POST['respuesta_255'] : '';
if ($respuesta_255 === 'acerca') {
    $verificar_255 = "correcto";
} elseif ($respuesta_255 === '') {
    $verificar_255 = '';
} else {
    $verificar_255 = "incorrecto";
}

$respuesta_256 = isset($_POST['respuesta_256']) ? $_POST['respuesta_256'] : '';
if ($respuesta_256 === 'proceso') {
    $verificar_256 = "correcto";
} elseif ($respuesta_256 === '') {
    $verificar_256 = '';
} else {
    $verificar_256 = "incorrecto";
}

$respuesta_257 = isset($_POST['respuesta_257']) ? $_POST['respuesta_257'] : '';
if ($respuesta_257 === 'sistema particular') {
    $verificar_257 = "correcto";
} elseif ($respuesta_257 === '') {
    $verificar_257 = '';
} else {
    $verificar_257 = "incorrecto";
}

$respuesta_258 = isset($_POST['respuesta_258']) ? $_POST['respuesta_258'] : '';
if ($respuesta_258 === 'clasificacion') {
    $verificar_258 = "correcto";
} elseif ($respuesta_258 === '') {
    $verificar_258 = '';
} else {
    $verificar_258 = "incorrecto";
}

$respuesta_259 = isset($_POST['respuesta_259']) ? $_POST['respuesta_259'] : '';
if ($respuesta_259 === 'factores') {
    $verificar_259 = "correcto";
} elseif ($respuesta_259 === '') {
    $verificar_259 = '';
} else {
    $verificar_259 = "incorrecto";
}

$respuesta_260 = isset($_POST['respuesta_260']) ? $_POST['respuesta_260'] : '';
if ($respuesta_260 === 'evaluar') {
    $verificar_260 = "correcto";
} elseif ($respuesta_260 === '') {
    $verificar_260 = '';
} else {
    $verificar_260 = "incorrecto";
}

$respuesta_261 = isset($_POST['respuesta_261']) ? $_POST['respuesta_261'] : '';
if ($respuesta_261 === 'diversidad') {
    $verificar_261 = "correcto";
} elseif ($respuesta_261 === '') {
    $verificar_261 = '';
} else {
    $verificar_261 = "incorrecto";
}

$respuesta_262 = isset($_POST['respuesta_262']) ? $_POST['respuesta_262'] : '';
if ($respuesta_262 === 'factores') {
    $verificar_262 = "correcto";
} elseif ($respuesta_262 === '') {
    $verificar_262 = '';
} else {
    $verificar_262 = "incorrecto";
}

$respuesta_263 = isset($_POST['respuesta_263']) ? $_POST['respuesta_263'] : '';
if ($respuesta_263 === 'caracteristicas') {
    $verificar_263 = "correcto";
} elseif ($respuesta_263 === '') {
    $verificar_263 = '';
} else {
    $verificar_263 = "incorrecto";
}

$respuesta_264 = isset($_POST['respuesta_264']) ? $_POST['respuesta_264'] : '';
if ($respuesta_264 === 'desempeño') {
    $verificar_264 = "correcto";
} elseif ($respuesta_264 === '') {
    $verificar_264 = '';
} else {
    $verificar_264 = "incorrecto";
}

$respuesta_265 = isset($_POST['respuesta_265']) ? $_POST['respuesta_265'] : '';
if ($respuesta_265 === '144') {
    $verificar_265 = "correcto";
} elseif ($respuesta_265 === '') {
    $verificar_265 = '';
} else {
    $verificar_265 = "incorrecto";
}

$respuesta_266 = isset($_POST['respuesta_266']) ? $_POST['respuesta_266'] : '';
if ($respuesta_266 === '144') {
    $verificar_266 = "correcto";
} elseif ($respuesta_266 === '') {
    $verificar_266 = '';
} else {
    $verificar_266 = "incorrecto";
}

$respuesta_267 = isset($_POST['respuesta_267']) ? $_POST['respuesta_267'] : '';
if ($respuesta_267 === '144') {
    $verificar_267 = "correcto";
} elseif ($respuesta_267 === '') {
    $verificar_267 = '';
} else {
    $verificar_267 = "incorrecto";
}

$respuesta_268 = isset($_POST['respuesta_268']) ? $_POST['respuesta_268'] : '';
if ($respuesta_268 === '144') {
    $verificar_268 = "correcto";
} elseif ($respuesta_268 === '') {
    $verificar_268 = '';
} else {
    $verificar_268 = "incorrecto";
}

$respuesta_269 = isset($_POST['respuesta_269']) ? $_POST['respuesta_269'] : '';
if ($respuesta_269 === '144') {
    $verificar_269 = "correcto";
} elseif ($respuesta_269 === '') {
    $verificar_269 = '';
} else {
    $verificar_269 = "incorrecto";
}

$respuesta_270 = isset($_POST['respuesta_270']) ? $_POST['respuesta_270'] : '';
if ($respuesta_270 === '144') {
    $verificar_270 = "correcto";
} elseif ($respuesta_270 === '') {
    $verificar_270 = '';
} else {
    $verificar_270 = "incorrecto";
}

$respuesta_271 = isset($_POST['respuesta_271']) ? $_POST['respuesta_271'] : '';
if ($respuesta_271 === '144') {
    $verificar_271 = "correcto";
} elseif ($respuesta_271 === '') {
    $verificar_271 = '';
} else {
    $verificar_271 = "incorrecto";
}

$respuesta_272 = isset($_POST['respuesta_272']) ? $_POST['respuesta_272'] : '';
if ($respuesta_272 === '144') {
    $verificar_272 = "correcto";
} elseif ($respuesta_272 === '') {
    $verificar_272 = '';
} else {
    $verificar_272 = "incorrecto";
}

$respuesta_273 = isset($_POST['respuesta_273']) ? $_POST['respuesta_273'] : '';
if ($respuesta_273 === '144') {
    $verificar_273 = "correcto";
} elseif ($respuesta_273 === '') {
    $verificar_273 = '';
} else {
    $verificar_273 = "incorrecto";
}

$respuesta_274 = isset($_POST['respuesta_274']) ? $_POST['respuesta_274'] : '';
if ($respuesta_274 === '144') {
    $verificar_274 = "correcto";
} elseif ($respuesta_274 === '') {
    $verificar_274 = '';
} else {
    $verificar_274 = "incorrecto";
}

$respuesta_275 = isset($_POST['respuesta_275']) ? $_POST['respuesta_275'] : '';
if ($respuesta_275 === '144') {
    $verificar_275 = "correcto";
} elseif ($respuesta_275 === '') {
    $verificar_275 = '';
} else {
    $verificar_275 = "incorrecto";
}

$respuesta_276 = isset($_POST['respuesta_276']) ? $_POST['respuesta_276'] : '';
if ($respuesta_276 === '144') {
    $verificar_276 = "correcto";
} elseif ($respuesta_276 === '') {
    $verificar_276 = '';
} else {
    $verificar_276 = "incorrecto";
}

$respuesta_277 = isset($_POST['respuesta_277']) ? $_POST['respuesta_277'] : '';
if ($respuesta_277 === '144') {
    $verificar_277 = "correcto";
} elseif ($respuesta_277 === '') {
    $verificar_277 = '';
} else {
    $verificar_277 = "incorrecto";
}

$respuesta_278 = isset($_POST['respuesta_278']) ? $_POST['respuesta_278'] : '';
if ($respuesta_278 === '144') {
    $verificar_278 = "correcto";
} elseif ($respuesta_278 === '') {
    $verificar_278 = '';
} else {
    $verificar_278 = "incorrecto";
}

$respuesta_279 = isset($_POST['respuesta_279']) ? $_POST['respuesta_279'] : '';
if ($respuesta_279 === '144') {
    $verificar_279 = "correcto";
} elseif ($respuesta_279 === '') {
    $verificar_279 = '';
} else {
    $verificar_279 = "incorrecto";
}

$respuesta_280 = isset($_POST['respuesta_280']) ? $_POST['respuesta_280'] : '';
if ($respuesta_280 === '144') {
    $verificar_280 = "correcto";
} elseif ($respuesta_280 === '') {
    $verificar_280 = '';
} else {
    $verificar_280 = "incorrecto";
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
    height: 390vh;
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

<form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
   <h1>¿Sumar números con complemento a 10 puede causar problemas?</h1>

  <p>La respuesta es: <strong>sí</strong>. Al sumar números usando complemento a 10 pueden aparecer problemas de interpretación, en especial el <strong>overflow aritmético con signo</strong>.</p>

  <h2>1. En aritmética sin signo (unsigned)</h2>
  <p>No hay error lógico: si el resultado se pasa del espacio disponible, se descarta el acarreo y se quedan los dígitos permitidos.</p>
  <p>Ejemplo (2 dígitos):</p>
  <p>\(47 + 48 = 95\)</p>

  <h2>2. En aritmética con signo (signed, usando complemento a 10)</h2>
  <p>Aquí hay que tener cuidado: cada valor escrito pertenece a un rango positivo o negativo predefinido.</p>
  <p>Ejemplo con 2 dígitos:</p>
  <p>\(00 \text{ a } 49 \;\;\to\;\; 0 \text{ a } +49\)</p>
  <p>\(50 \text{ a } 99 \;\;\to\;\; -50 \text{ a } -1\)</p>
  <p>El problema (overflow con signo) ocurre cuando el resultado cae en la zona que contradice el signo esperado.</p>

  <h2>3. Ejemplo clásico de overflow con complemento a 10</h2>
  <p>\(47 + 48\)</p>
  <p>Ambos son positivos (están en \(00\)–\(49\)). La suma real es \(95\). Con dos dígitos queda escrito \(95\), pero en signed \(95\) representa \(-5\).</p>
  <p>Por tanto la interpretación signed sería \(47 + 48 = -5\), lo cual indica <strong>overflow signed</strong>.</p>

  <h2>4. Cuando no hay problema</h2>
  <p>Si el signo de los sumandos y el signo del resultado coinciden, no hay overflow.</p>
  <p>Ejemplo: \(60 + 60\)</p>
  <p>Unsigned: \(60 + 60 = 120\), con dos dígitos queda \(20\).</p>
  <p>Signed: \(60\) representa \(-40\), entonces \(-40 + (-40) = -80\).  
  \(-80\) se representa como \(100 - 80 = 20\), es decir, se escribe \(20\) y su valor signed es \(-80\). No hay overflow signed aquí.</p>

  <h2>Conclusión</h2>
  <p><strong>Unsigned:</strong> no hay error lógico, solo truncamiento de dígitos.</p>
  <p><strong>Signed (complemento a 10):</strong> sí puede haber overflow cuando el resultado no cabe en el rango de representación.</p>

    <hr>



    <h1>Usando la fórmula \(y - x = y + C_2(x)\)</h1>

  <p>Vamos a calcular \(33 - 24\) en binario empleando <strong>complemento a 2</strong>.</p>

  <h2>Paso 1. Escribir los números en binario (8 bits)</h2>
  <p>\(33_{10} = \texttt{00100001}_2\)</p>
  <p>\(24_{10} = \texttt{00011000}_2\)</p>

  <h2>Paso 2. Calcular el complemento a 2 de \(x = 24\)</h2>
  <ol>
    <li>Representación en 8 bits: \(\texttt{00011000}\).</li>
    <li>Complemento a 1 (invertir bits): \(\texttt{11100111}\).</li>
    <li>Sumar 1: \(\texttt{11100111} + 1 = \texttt{11101000}.\)</li>
  </ol>
  <p>Por lo tanto: \(C_2(24) = \texttt{11101000}.\)</p>

  <h2>Paso 3. Aplicar la fórmula \(y - x = y + C_2(x)\)</h2>
  <p>Ahora sumamos en binario:</p>

  <pre>
     00100001   (+33)
  +  11101000   (C₂(24))
  ---------------------
    100001001   (resultado en 9 bits)
  </pre>

  <p>Observa que aparecen <strong>9 bits</strong> porque hubo un acarreo extra a la izquierda.</p>

  <p>Como trabajamos con 8 bits, ese <em>acarreo más significativo</em> se descarta, quedando:</p>

  <pre>
     00001001
  </pre>

  <h2>Paso 4. Interpretar el resultado</h2>
  <p>\(\texttt{00001001}_2 = 9_{10}\)</p>

  <h2>✅ Resultado final</h2>
  <p>\(33 - 24 = 9\)</p>

  <h3>Resumen</h3>
  <ul>
    <li>La resta se convierte en suma con el complemento a 2.</li>
    <li>La suma dio \(100001001\), con un bit extra por acarreo.</li>
    <li>Ese bit se descarta porque el resultado debe ajustarse a 8 bits.</li>
    <li>El valor correcto es \(\texttt{00001001} = 9\).</li>
  </ul>


  <hr>
  
</div>




<div class="seccion derecha">
  
     <h1>Desbordamiento en complemento a 2 (8 bits)</h1>

  <p>Queremos entender por qué al sumar \(01111111 + 1\) obtenemos \(10000000\), y este resultado no corresponde a \(+128\) en complemento a 2.</p>

  <h2>1. Representaciones relevantes</h2>
  <p>\(01111111_2 = 127_{10}\). Es el máximo positivo representable en 8 bits con signo.</p>
  <p>\(10000000_2\) es el patrón resultante de la suma.</p>
  <p>\(2^7 = 128\).</p>

  <h2>2. La suma binaria</h2>
  <p>\[
    01111111 \; (+127) \\
  + 00000001 \; (+1) \\ \]
 
  \[  10000000 \; (\text{resultado en 8 bits})
  \]</p>

  <h2>3. ¿Por qué no es \(+128\)?</h2>
  <p>En complemento a 2 de 8 bits el bit más significativo (MSB) es el de signo:</p>
  <p>Si MSB = 0, el número es no negativo.</p>
  <p>Si MSB = 1, el número es negativo.</p>
  <p>Por lo tanto, el patrón \(10000000_2\) representa \(-128\), no \(+128\).</p>

  <h2>4. Interpretación numérica</h2>
  <p>\(01111111_2 = +127\).</p>
  <p>\(01111111_2 + 1 = 10000000_2 = -128\).</p>

  <h2>5. Relación con \(2^7\)</h2>
  <p>\(2^7 = 128\). Al sumar 1 a \(01111111\), se alcanza el valor 128. Pero en complemento a 2 ese patrón no existe como positivo: el rango llega solo hasta \(+127\). El valor \(10000000_2\) se interpreta como \(-128\).</p>

  <h2>Resumen</h2>
  <p>El mayor positivo en 8 bits con signo es \(+127\).</p>
  <p>Si le sumamos 1, obtenemos \(10000000_2\), que representa \(-128\).</p>
  <p>No se puede representar \(+128\) en 8 bits con complemento a 2.</p>
  
    <hr>
    <h3>Rango de números en complemento a 2</h3>

<p>En complemento a 2 con <span class="math">\( n \)</span> bits:</p>

<h2>Mínimo</h2>
<p><span class="math">\( -2^{\,n-1} \)</span></p>

<h2>Máximo</h2>
<p><span class="math">\( 2^{\,n-1} - 1 \)</span></p>

<h2>Ejemplo con <span class="math">\( n = 8 \)</span></h2>

<p>Mínimo: <span class="math">\( -2^7 = -128 \)</span></p>
<p>Máximo: <span class="math">\( 2^7 - 1 = 127 \)</span></p>

<h2>Rango</h2>
<p><span class="math">\([ -128, \, 127 ]\)</span></p>


    <hr>

    <h1>Operación Cost_Ticket − 1.5 en formato Q1.7.8</h1>

<p>Usaremos la <strong>fórmula de resta mediante complemento a 2</strong>:</p>

<p>\[
\text{Cost_Ticket} - 1.5 = \text{Cost_Ticket} + C_2(1.5)
\]</p>

<h2>1. Valores en Q1.7.8</h2>

<p>Cost_Ticket = 0.890625 → binario Q1.7.8:</p>
<p>\[
\text{Cost_Ticket} = 0 \; 0000000 \; 11100100
\]</p>

<p>1.5 en binario Q1.7.8:</p>
<p>\[
1.5 = 0 \; 0000001 \; 10000000
\]</p>

---

<h2>2. Calcular complemento a 2 de 1.5</h2>

<p>1. Tomamos 1.5 positivo en binario: <code>0000001 10000000</code></p>
<p>2. Complemento a 1 (invertir bits): <code>1111110 01111111</code></p>
<p>3. Sumar 1 → complemento a 2:</p>
<p>\[
C_2(1.5) = 1111110 10000000
\]</p>

---

<h2>3. Sumar Cost_Ticket + C2(1.5)</h2>

<p>
<code>
   0000000 11100100  (Cost_Ticket)<br>
+  1111110 10000000  (C2(1.5))<br>
-------------------<br>
   1111111 01100100  (resultado)
</code>
</p>

---

<h2>4. Interpretar el resultado</h2>

<p>- MSB = 1 → número negativo</p>
<p>- Para obtener magnitud, tomamos complemento a 2:</p>

<p>1. Complemento a 1: 0000000 10011011</p>
<p>2. Sumar 1: 0000000 10011100 → 0.609375</p>

<p>- Signo negativo → resultado decimal:</p>
<p>\[
\text{Cost_Ticket} - 1.5 = -0.609375
\]</p>

---

<h2>5. Resultado final en Q1.7.8</h2>
<p>\[
\boxed{1111111 \; 01100100}
\]</p>

<p>✅ En resumen:</p>
<ul>
  <li>Transformamos la resta en suma con complemento a 2: <code>Cost_Ticket + C_2(1.5)</code></li>
  <li>Sumamos los números binarios en Q1.7.8</li>
  <li>Interpretamos el resultado usando complemento a 2 si el MSB = 1</li>
  <li>Obtenemos el resultado decimal y el binario en Q1.7.8</li>
</ul>





 
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
