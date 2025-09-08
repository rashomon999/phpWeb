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
   if ($respuesta_1 === 'cuarto') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'tercer') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '16') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === '16') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === '159.43.0.0') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '159.43.16.0') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === '159.43.32.0') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === '159.43.48.0') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === '159.43.64.0') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === '159.43.80.0') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === '159.43.96.0') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === '159.43.112.0') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === '159.43.15.255') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === '159.43.31.255') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === '159.43.47.255') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === '159.43.63.255') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === '	159.43.79.255') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === '159.43.95.255') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === '159.43.111.255') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === '159.43.127.255') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === '159.43.240.0') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === '159.43.255.255') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === '30') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === '45') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === '60') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === '75') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === '90') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === '105') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === '120') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === '135') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === '150') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === '165') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === '180') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === '32') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === '48') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === '64') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === '80') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === '96') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === '112') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === '128') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === '144') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === '160') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === '176') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === '192') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === '34') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === '51') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === '68') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === '85') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === '102') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === '119') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === '136') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === '153') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === '170') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === '187') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === '204') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === '36') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === '54') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === '72') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === '90') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === '108') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === '126') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === '144') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === '162') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === '180') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === '198') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === '216') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === '38') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === '57') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === '76') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === '95') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === '114') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === '133') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === '152') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === '171') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === '190') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === '209') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === '228') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === '40') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === '60') { 
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
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../style_2_0.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 450vh;
    }


  table {
    border-collapse: collapse;
    width: 100%;
    font-family: Arial, sans-serif;
    font-size: 14px;
  }
  thead th {
    background-color: #3c3c3c;
    color: white;
    text-align: center;
    padding: 8px;
    border: 2px solid black;
  }
  tbody td {
    border: 1px solid black;
    vertical-align: top;
    padding: 6px;
  }
  tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  tbody tr td:first-child {
    background-color: #dbe8ff;
    font-weight: bold;
    text-align: center;
  }
  tfoot td {
    text-align: center;
    font-style: italic;
    padding: 6px;
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
    
   <p>Para completar el cuarto paso del proceso de <i>subnetting</i> —calcular los valores decimal y de prefijo de la nueva <i>subnet mask</i>— realice los siguientes pasos.</p>
  <ol>
    <li>Determine la clase de red IP.</li>
    <li>Determine la <i>default subnet mask</i> o el prefijo para la clase de dirección.</li>
    <li>Determine cuántos bits de host fueron tomados prestados o dados a la red.</li>
    <li>Calcule la nueva <i>subnet mask</i> y el prefijo. Para calcular la nueva <i>subnet mask</i>, comience con el primer 0 binario en la <i>default subnet mask</i> y cámbielo a un 1 binario. Continúe haciendo esto, moviéndose de izquierda a derecha, por el número de bits tomados prestados.</li>
  </ol>
  <p>Por ejemplo, si la <i>default subnet mask</i> es 255.255.0.0, y si el número de bits tomados prestados es cuatro, entonces los primeros cuatro bits del tercer octeto deben cambiarse de 0s binarios a 1s binarios. En este ejemplo, la nueva <i>subnet mask</i> es 255.255.240.0.</p>
  <p>La tabla a continuación proporciona un ejemplo de estos pasos.</p>


        <table>
    <tr>
      <th>Espacio de Dirección IP Asignado</th>
      <td>159.43.0.0</td>
    </tr>
    <tr>
      <th>Clase del Espacio de Dirección IP Asignado</th>
      <td>B</td>
    </tr>
    <tr>
      <th><i>Default Subnet Mask</i> (formato decimal con puntos)</th>
      <td>255.255.0.0</td>
    </tr>
    <tr>
      <th><i>Default Subnet Mask</i> en binario</th>
      <td><code>11111111.11111111.00000000.00000000</code></td>
    </tr>
    <tr>
      <th>Número de bits de host tomados prestados</th>
      <td>4</td>
    </tr>
    <tr>
      <th>Nueva <i>Subnet Mask</i> (formato decimal con puntos)</th>
      <td>255.255.240.0</td>
    </tr>
    <tr>
      <th>Nueva <i>Subnet Mask</i> en binario</th>
      <td><code>11111111.11111111.11110000.00000000</code></td>
    </tr>
    <tr>
      <th>Nueva <i>Subnet Mask</i> (formato de prefijo)</th>
      <td>/20</td>
    </tr>
  </table>

    <br><br>

    <h3>Calculando nuevas subreds</h3>
    <p>El cálculo de las nuevas <i>subnets</i> es parte del quinto paso del proceso de <i>subnetting</i>. En la 
    <i>subnet mask</i>, el último bit tomado prestado se llama <i>Least Significant Bit (LSB)</i>. La figura siguiente 
    muestra un ejemplo.</p>

  
    <table>
    <tr>
      <th><i>Subnet Mask</i> (Dotted Decimal Format)</th>
      <th><i>Subnet Mask</i> (Binary Format)</th>
      <th colspan="8">3rd Octet Expanded</th>
    </tr>
    <tr>
      <td rowspan="3">255.255.240.0</td>
      <td rowspan="3"><code>11111111.11111111.11110000.00000000</code></td>
      <td>2⁷</td>
      <td>2⁶</td>
      <td>2⁵</td>
      <td class="highlight">2⁴</td>
      <td>2³</td>
      <td>2²</td>
      <td>2¹</td>
      <td>2⁰</td>
    </tr>
    <tr>
      <td>128</td>
      <td>64</td>
      <td>32</td>
      <td class="highlight">16</td>
      <td>8</td>
      <td>4</td>
      <td>2</td>
      <td>1</td>
    </tr>
    <tr>
      <td>1</td>
      <td>1</td>
      <td>1</td>
      <td class="highlight">1 <br>LSB</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
    </tr>
  </table>



    <p>En la <i>subnet mask</i> <b>255.255.240.0</b>, el <i>LSB</i> es el 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">
      bit del 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">
      octeto. Este bit tiene 
    un valor de 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">
     .  
    Esto es importante porque el valor del <i>LSB</i> determina los múltiplos de las nuevas subredes IP.  
    En otras palabras, los números de red de las nuevas subredes posibles avanzan en incrementos de 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">
      en
    el tercer octeto.</p>

        <button type="submit">Enviar</button> 
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <hr>

  <p>La siguiente tabla muestra las nuevas subredes posibles:</p>

  <table>
    <tr>
      <td>
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8"> 
      </td>
      <td>159.43.128.0</td>
    </tr>
    <tr>
      <td>
      <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">  
      </td>
      <td>159.43.144.0</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">
      </td>
      <td>159.43.160.0</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">
      </td>
      <td>159.43.176.0</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="8">
      </td>
      <td>159.43.192.0</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">
      </td>
      <td>159.43.208.0</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">
      </td>
      <td>159.43.224.0</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">
      </td>
      <td>159.43.240.0</td>
    </tr>
  </table>
    <button type="submit">Enviar</button> 
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?>  
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?> 
    <?php echo $verificar_12 ?>

    <hr>

  <p>El uso del valor del <i>LSB</i> para determinar las nuevas subredes posibles funciona para cualquier clase de 
  red IP con cualquier <i>subnet mask</i>.  
  </p>


    <h3>Calcular la Dirección de Broadcast y el Rango Utilizable de las Nuevas Subredes</h3>

    <p>
    Una vez que se conoce la dirección de red de las nuevas subredes, se puede calcular rápidamente la <b>dirección de broadcast</b> y
    el <b>rango utilizable</b> de hosts de cada subred.</p>

      <p>Para calcular la dirección de <i>broadcast</i> y cada una de las <i>subnets</i>, identifique la siguiente <i>subnet</i> y luego retroceda una dirección. La tabla a continuación muestra las nuevas <i>subnets</i> y sus direcciones de <i>broadcast</i>.</p>

  <table border="1" cellspacing="0" cellpadding="4">
    <tr>
      <th>Dirección de Subnet</th>
      <th>Dirección de Broadcast</th>
    </tr>
    <tr><td>
    <input type="text"  value="<?php echo $respuesta_5; ?>" size="8" readonly> 
    </td><td>
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">
    </td></tr>
    <tr><td>
    <input type="text" value="<?php echo $respuesta_6; ?>" size="8" readonly> 
    </td><td>
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">
    </td></tr>
    <tr><td>
    <input type="text"   value="<?php echo $respuesta_7; ?>" size="8" readonly> 
    </td><td>
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">
    </td></tr>
    <tr><td>
    <input type="text"  value="<?php echo $respuesta_8; ?>" size="8" readonly> 
    </td><td>
    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="8">
    </td></tr>
    <tr><td>
    <input type="text"   value="<?php echo $respuesta_9; ?>" size="8" readonly> 
    </td><td>
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">
    </td></tr>
    <tr><td>
    <input type="text"  value="<?php echo $respuesta_10; ?>" size="8" readonly> 
    </td><td>
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">
    </td></tr>
    <tr><td>
    <input type="text"   value="<?php echo $respuesta_11; ?>" size="8" readonly> 
    </td><td>
    <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">
    </td></tr>
    <tr><td>
    <input type="text"   value="<?php echo $respuesta_12; ?>" size="8" readonly> 
    </td><td>
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="8">
    </td></tr>
    <tr><td>...</td><td>...</td></tr>
    <tr><td>...</td><td>...</td></tr>
    <tr><td>...</td><td>...</td></tr>
    <tr><td>...</td><td>...</td></tr>
    <tr><td>...</td><td>...</td></tr>
    <tr><td>...</td><td>...</td></tr>
    <tr><td>...</td><td>...</td></tr>
    <tr><td>
    <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="8">    
     </td><td>
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="8">    
     </td></tr>
  </table>

    <button type="submit">Enviar</button>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?>
    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <hr>


  <p>Para calcular el rango utilizable de direcciones IP —es decir, el rango de direcciones IP que pueden asignarse a dispositivos conectados a la <i>subnet</i>— haga lo siguiente:</p>
  <ol>
    <li>Sume una dirección a la dirección de <i>subnet</i> para encontrar la primera dirección IP utilizable.</li>
    <li>Reste una dirección de la dirección de <i>broadcast</i> para encontrar la última dirección IP utilizable.</li>
  </ol>

  <p>La siguiente tabla muestra todas las nuevas posibles <i>subnets</i>; el rango utilizable de direcciones IP para cada <i>subnet</i>; y la dirección de <i>broadcast</i> para cada <i>subnet</i>.</p>

  <table border="1" cellspacing="0" cellpadding="4">
    <tr>
      <th>Dirección de Subnet</th>
      <th>Rango utilizable de direcciones IP de host</th>
      <th>Dirección de Broadcast</th>
    </tr>
    <tr><td>159.43.0.0</td><td>159.43.0.1 a 159.43.15.254</td><td>159.43.15.255</td></tr>
    <tr><td>159.43.16.0</td><td>159.43.16.1 a 159.43.31.254</td><td>159.43.31.255</td></tr>
    <tr><td>159.43.32.0</td><td>159.43.32.1 a 159.43.47.254</td><td>159.43.47.255</td></tr>
    <tr><td>159.43.48.0</td><td>159.43.48.1 a 159.43.63.254</td><td>159.43.63.255</td></tr>
    <tr><td>159.43.64.0</td><td>159.43.64.1 a 159.43.79.254</td><td>159.43.79.255</td></tr>
    <tr><td>159.43.80.0</td><td>159.43.80.1 a 159.43.95.254</td><td>159.43.95.255</td></tr>
    <tr><td>159.43.96.0</td><td>159.43.96.1 a 159.43.111.254</td><td>159.43.111.255</td></tr>
    <tr><td>159.43.112.0</td><td>159.43.112.1 a 159.43.127.254</td><td>159.43.127.255</td></tr>
    <tr><td>159.43.128.0</td><td>159.43.128.1 a 159.43.143.254</td><td>159.43.143.255</td></tr>
    <tr><td>159.43.144.0</td><td>159.43.144.1 a 159.43.159.254</td><td>159.43.159.255</td></tr>
    <tr><td>159.43.160.0</td><td>159.43.160.1 a 159.43.175.254</td><td>159.43.175.255</td></tr>
    <tr><td>159.43.176.0</td><td>159.43.176.1 a 159.43.191.254</td><td>159.43.191.255</td></tr>
    <tr><td>159.43.192.0</td><td>159.43.192.1 a 159.43.207.254</td><td>159.43.207.255</td></tr>
    <tr><td>159.43.208.0</td><td>159.43.208.1 a 159.43.223.254</td><td>159.43.223.255</td></tr>
    <tr><td>159.43.224.0</td><td>159.43.224.1 a 159.43.239.254</td><td>159.43.239.255</td></tr>
    <tr><td>159.43.240.0</td><td>159.43.240.1 a 159.43.255.254</td><td>159.43.255.255</td></tr>
  </table>

</div>




<div class="seccion derecha">
 
   <h3>Uniendo Todo / Integrando Todos los Conceptos</h3>
       <p>Aquí hay un ejemplo de clase C que demuestra todo. El espacio de direcciones IP dado es <b>209.44.33.0 /24</b>. 
    El número requerido de subredes es <b>6</b>. La tabla a continuación muestra el proceso de seis pasos de subnetting.</p>



    
  <table>
    <tr>
      <th>Paso</th>
      <th>Descripción</th>
      <th>Detalles</th>
    </tr>
    <tr>
      <td>Paso 1 – Espacio de Direcciones IP dado</td>
      <td>209.44.33.0 (Clase C)</td>
      <td>
        Máscara de Subred por Defecto = 255.255.255.0<br>
        Número por Defecto de Bits de Host = 8
      </td>
    </tr>
    <tr>
      <td>Paso 2 – Número de Subredes Requeridas</td>
      <td colspan="2">6</td>
    </tr>
    <tr>
      <td>Paso 3A – Determinar el Número de Bits a Pedir Prestados</td>
      <td colspan="2">
        3<br>
        (2<sup>n</sup> &gt; 6, donde n = el número de bits de host a pedir prestados. n = 3)<br>
        (2<sup>3</sup> = 8)
      </td>
    </tr>
    <tr>
      <td>Paso 3B – Determinar el Número de Hosts por Subred</td>
      <td colspan="2">
        30<br>
        (Número de bits de host disponibles) – n = h<br>
        8 – 3 = 5<br>
        h = 5<br>
        2<sup>h</sup> – 2 = (Número de hosts por subred)<br>
        2<sup>5</sup> = 32 – 2 = 30
      </td>
    </tr>
    <tr>
      <td>Paso 4 – Calcular la nueva máscara de subred y prefijo</td>
      <td colspan="2">
        Máscara de Subred por Defecto Clase C = 255.255.255.0<br>
        Prefijo Clase C por Defecto = /24<br>
        Nueva Máscara de Subred = 255.255.255.224<br>
        Nuevo Prefijo = /27
      </td>
    </tr>
    <tr>
      <td>Paso 5 – Aplicar la Máscara de Subred al Espacio IP</td>
      <td colspan="2">
        <table>
          <tr>
            <th>Subred</th>
            <th>Rango Utilizable</th>
            <th>Broadcast</th>
          </tr>
          <tr>
            <td>209.44.33.0</td>
            <td>209.44.33.1 – 30</td>
            <td>209.44.33.31</td>
          </tr>
          <tr>
            <td>209.44.33.32</td>
            <td>209.44.33.33 – 62</td>
            <td>209.44.33.63</td>
          </tr>
          <tr>
            <td>209.44.33.64</td>
            <td>209.44.33.65 – 94</td>
            <td>209.44.33.95</td>
          </tr>
          <tr>
            <td>209.44.33.96</td>
            <td>209.44.33.97 – 126</td>
            <td>209.44.33.127</td>
          </tr>
          <tr>
            <td>209.44.33.128</td>
            <td>209.44.33.129 – 158</td>
            <td>209.44.33.159</td>
          </tr>
          <tr>
            <td>209.44.33.160</td>
            <td>209.44.33.161 – 190</td>
            <td>209.44.33.191</td>
          </tr>
          <tr>
            <td>209.44.33.192</td>
            <td>209.44.33.193 – 222</td>
            <td>209.44.33.223</td>
          </tr>
          <tr>
            <td>209.44.33.224</td>
            <td>209.44.33.225 – 254</td>
            <td>209.44.33.255</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>Paso 6 – Asignar Direcciones IP a Dispositivos según sea Apropiado</td>
      <td colspan="2">
        La interfaz del router usualmente recibe la primera dirección IP de la subred, pero esto no es requerido.
      </td>
    </tr>
  </table>


    <p>Aquí hay un ejemplo de clase B que demuestra todo. El espacio de direcciones IP dado es <b>147.38.0.0 /16</b>. 
    El número requerido de subredes es <b>400</b>. La tabla a continuación muestra el proceso de subnetting en seis pasos.</p>

    <table>
    <tr>
      <th colspan="2">Ejemplo Clase B demostrando todo</th>
    </tr>

    <tr>
      <td colspan="2">
        El espacio de direcciones IP dado es <b>147.38.0.0 /16</b>. El número requerido de subredes es <b>400</b>. La tabla a 
        continuación muestra el proceso de subnetting en seis pasos.
      </td>
    </tr>

    <tr>
      <th>Paso 1 — Espacio de Dirección IP Dado</th>
      <td>
        147.38.0.0 (Clase B)<br>
  
      </td>
    </tr>

    <tr>
      <th>Paso 2 — Número de Subredes Requeridas</th>
      <td>400</td>
    </tr>

    <tr>
      <th>Paso 3 — Determinar Número de Bits a Pedir Prestado</th>
      <td>
        9<br>
        (2<sup>n</sup> &gt; 400, donde n = el número de bits de host a pedir prestados. n = 9)<br>
        (2<sup>9</sup> = 512)
      </td>
    </tr>

    <tr>
      <th>Paso 4 — Calcular nueva máscara de subred y prefijo</th>
      <td>
        Máscara por defecto Clase B = 255.255.0.0<br>
        Prefijo por defecto Clase B = /16<br>
        Nueva Máscara de Subred = 255.255.255.128<br>
        Nuevo Prefijo = /25
      </td>
    </tr>

    <tr>
      <th>Paso 5 — Aplicar la Máscara de Subred al Espacio IP (Solo se muestran las primeras 10)</th>
      <td>
        <table class="inner-table">
          <tr>
            <th>Subred</th>
            <th>Rango Utilizable</th>
            <th>Broadcast</th>
          </tr>
          <tr>
            <td>147.38.0.0</td>
            <td>147.38.0.1 - 147.38.0.126</td>
            <td>147.38.0.127</td>
          </tr>
          <tr>
            <td>147.38.0.128</td>
            <td>147.38.0.129 - 147.38.0.254</td>
            <td>147.38.0.255</td>
          </tr>
          <tr>
            <td>147.38.1.0</td>
            <td>147.38.1.1 - 147.38.1.126</td>
            <td>147.38.1.127</td>
          </tr>
          <tr>
            <td>147.38.1.128</td>
            <td>147.38.1.129 - 147.38.1.254</td>
            <td>147.38.1.255</td>
          </tr>
          <tr>
            <td>147.38.2.0</td>
            <td>147.38.2.1 - 147.38.2.126</td>
            <td>147.38.2.127</td>
          </tr>
          <tr>
            <td>147.38.2.128</td>
            <td>147.38.2.129 - 147.38.2.254</td>
            <td>147.38.2.255</td>
          </tr>
          <tr>
            <td>147.38.3.0</td>
            <td>147.38.3.1 - 147.38.3.126</td>
            <td>147.38.3.127</td>
          </tr>
          <tr>
            <td>147.38.3.128</td>
            <td>147.38.3.129 - 147.38.3.254</td>
            <td>147.38.3.255</td>
          </tr>
          <tr>
            <td>147.38.4.0</td>
            <td>147.38.4.1 - 147.38.4.126</td>
            <td>147.38.4.127</td>
          </tr>
          <tr>
            <td>147.38.4.128</td>
            <td>147.38.4.129 - 147.38.4.254</td>
            <td>147.38.4.255</td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <th>Paso 6 — Asignar Direcciones IP a Dispositivos según corresponda</th>
      <td>
        La interfaz del router usualmente recibe la primera dirección IP de la subred, pero esto no es requerido.
      </td>
    </tr>
  </table>


    <h3>Enmascaramiento de Subred de Longitud Variable</h3>
    <p>Cuando la máscara de subred es fija en toda la red IP, lo que significa que la máscara de subred es la misma 
    para cada subred, se denomina Enmascaramiento de Subred de Longitud Estática (SLSM). El SLSM a menudo conduce al 
    desperdicio de direcciones IP.
    </p>


    <img src="../../../img/guia_150.png" alt="">
    <p>La red IP 172.16.0.0 /16 ha sido asignada a una organización. La organización ha subdividido esta red IP en múltiples subredes /24 (255.255.255.0). Una subred /24 significa que hay ocho bits de host, lo que implica que cada subred puede soportar hasta 254 hosts.</p>  

<p>La figura anterior muestra una región de la organización. Para las LANs conectadas al enrutador de la sede central (HQ), 254 hosts por subred es apropiado. Sin embargo, para las LANs conectadas a los enrutadores de sucursales, donde solo residen 50 hosts, 254 hosts posibles son demasiados. De hecho, hay 204 direcciones IP desperdiciadas por cada sucursal. Para los enlaces WAN entre enrutadores, donde solo residen dos hosts, 254 hosts posibles es un desperdicio extremo. En realidad, hay 252 direcciones IP desperdiciadas en cada enlace WAN. Eso significa que hay un total de 1,824 direcciones IP desperdiciadas en este diseño.</p>  

<p>Con el fin de hacer un uso más eficiente del espacio de direcciones IP asignado, se puede utilizar un Enmascaramiento de Subred de Longitud Variable (VLSM). En VLSM, el número de bits de red y de host asignados a una subred puede variar según la cantidad de hosts que la subred necesite soportar.</p>  

<p>Además, implementar VLSM proporciona más niveles de jerarquía dentro del espacio de direcciones IP, porque una subred puede ser subdividida aún más. Más niveles de jerarquía ofrecen oportunidades para la agregación de rutas, también llamada <b>resumen de rutas</b>. Cuando las rutas son resumidas, una sola entrada en la tabla de enrutamiento de un enrutador representa múltiples redes más pequeñas. El resumen de rutas mejora la eficiencia de los protocolos de enrutamiento y del proceso de enrutamiento en general.</p>

     
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
