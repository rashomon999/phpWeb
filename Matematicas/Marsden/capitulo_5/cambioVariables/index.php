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
   if ($respuesta_1 === '26') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === '39') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '52') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === '65') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === '78') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '91') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === '104') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === '117') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === '130') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === '143') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === '156') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === '28') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === '42') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === '56') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === '70') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === '84') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === '98') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === '112') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === '126') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === '140') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === '154') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === '168') {  
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
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../style_2_0.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 890vh;
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

function mostrarMensaje5() {
    document.getElementById("mensaje5").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje5")]);
}

function ocultarMensaje5() {
    document.getElementById("mensaje5").style.display = 'none';
}



</script>
    
</head>
<body>  

<form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 

 
  <h2>Cambio de variables en integrales dobles</h2>

  <p>
    En un cambio de variables en integrales dobles hay dos motivaciones posibles (a veces se combinan):
  </p>

  <ul>
    <li>
      <b>Simplificar la región de integración (los límites).</b><br>
      → Escoges \(u, v\) de modo que las curvas/límites del dominio se vuelvan rectas simples o intervalos constantes.
    </li>
    <li>
      <b>Simplificar el integrando.</b><br>
      → Escoges \(u, v\) de modo que la expresión dentro de la integral se reduzca a una forma mucho más fácil.
      <br>Ejemplo: dada la integral
      \[
      \iint_T e^{\left(\tfrac{y - x}{y + x}\right)} \, dx\,dy,
      \]
      donde \(T\) es el interior del triángulo con vértices en \((0,0), (0,1)\) y \((1,0)\).
    </li>
  </ul>

  <p>
    👉 En este problema, la región inicial \(T\) ya es bastante sencilla: es un triángulo recto con límites lineales:
  </p>

  <p style="text-align:center;">
    \(0 \leq x \leq 1, \quad 0 \leq y \leq 1 - x.\)
  </p>

  <p>
    No hay nada “feo” que justifique un cambio de variables para los límites.
  </p>

  <p>
    En cambio, el integrando
    \[
    e^{\tfrac{y - x}{y + x}}
    \]
    es incómodo en coordenadas cartesianas. Pero si escoges
  </p>

  <p style="text-align:center;">
    \(u = y + x, \quad v = y - x,\)
  </p>

  <p>
    la fracción se convierte simplemente en
    \[
    \tfrac{v}{u},
    \]
    mucho más manejable.
  </p>

  <p>
    Esa es la verdadera motivación aquí: <b>simplificar el integrando, no los límites</b>.
  </p>

    <p style="font-size: 1.1em;">
    📌 <b>Resumen:</b><br>
    En muchos problemas, el cambio se elige para que los límites se vuelvan fáciles (regiones rectangulares o triangulares “bonitas”).<br><br>
    En este, la región ya era simple, así que la clave fue elegir \(u, v\) que simplificaran la expresión del integrando.
  </p>

    <hr>

<h2>Paso a paso: Despejar \(x\) y \(y\)</h2>

<ol>
  <li>
    <b>Sistema de ecuaciones original:</b>
    \[
    \begin{cases}
    u = y - x \\[4pt]
    v = y + x
    \end{cases}
    \]
  </li>

  <li>
    <b>Objetivo:</b> Resolver el sistema para \(x\) y \(y\).
  </li>

  <li>
    <b>Método:</b> Sumar y restar las ecuaciones.
    <ul>
      <li>
        Sumamos las dos ecuaciones:
        \[
        u+v = (y-x) + (y+x) = 2y
        \quad\Longrightarrow\quad
        y = \tfrac{u+v}{2}.
        \]
      </li>
      <li>
        Restamos la primera ecuación de la segunda:
        \[
        v-u = (y+x) - (y-x) = 2x
        \quad\Longrightarrow\quad
        x = \tfrac{v-u}{2}.
        \]
      </li>
    </ul>
  </li>

  <li>
    <b>Resultado final:</b>
    \[
    x = \tfrac{v-u}{2}, \qquad y = \tfrac{u+v}{2}.
    \]
  </li>
</ol>

    <hr>

    <h2>Paso: Transformación de la región T</h2>

<h3>Paso a paso: Transformar las fronteras y desigualdades</h3>

<h3>1. Transformar la frontera \( x=0 \) </h3>
<p>
En el plano \( (x,y) \), \( x=0 \) es el eje \( y \). 
Sustituimos \( x=0 \) en la expresión de \( x \) en términos de \( u \) y \( v \):
</p>

$$
x=\frac{v-u}{2}=0 \quad\Longrightarrow\quad v-u=0 \quad\Longrightarrow\quad v=u.
$$

<p><strong>Conclusión:</strong> En el plano \( (u,v) \), la frontera \( x=0 \) se convierte 
en la recta 
\( v=u \)
 .</p>

<hr>

<h3>2. Transformar la frontera  \( y=0 \)</h3>
<p>
En el plano
\( (x,y) \), \( y=0 \) es el eje \( x \). 
Sustituimos \( y=0 \) en la expresión de \( y \):
</p>

$$
y=\frac{u+v}{2}=0 \quad\Longrightarrow\quad u+v=0 \quad\Longrightarrow\quad v=-u.
$$

<p><strong>Conclusión:</strong> En el plano 
\( (u,v) \), la frontera \( y=0 \) se convierte en la 
recta   \( v=-u \) .</p>

<hr>

<h3>3. Transformar la frontera \( x+y=1 \) </h3>
<p>
En el plano 
\( (x,y) \) la hipotenusa es \(x+y=1 \). Usando las expresiones en \(u,v\):
</p>

$$
x+y=\frac{v-u}{2}+\frac{u+v}{2}=\frac{2v}{2}=v.
$$

<p>Por tanto,</p>

$$
x+y=1 \quad\Longrightarrow\quad v=1.
$$

<p><strong>Conclusión:</strong> En \( (u,v) \), la frontera 
\( x+y=1 \)  se convierte en la recta horizontal 
\( v= 1\)
 .</p>

<hr>



<h2>Transformar las desigualdades \(x \ge 0\) y \(y \ge 0\)</h2>

<p>
Dentro del triángulo \(T\) se cumple \(x \ge 0\) y \(y \ge 0\).
</p>

<ul>
  <li>
    Para \(x \ge 0\):
    \[
    x=\tfrac{v-u}{2}\ge 0 \;\;\Longrightarrow\;\; v-u \ge 0 \;\;\Longrightarrow\;\; v \ge u.
    \]
  </li>

  <li>
    Para \(y \ge 0\):
    \[
    y=\tfrac{u+v}{2}\ge 0 \;\;\Longrightarrow\;\; u+v \ge 0 \;\;\Longrightarrow\;\; v \ge -u.
    \]
  </li>
</ul>

<p>
Combinando ambas desigualdades obtenemos
</p>

\[
v \ge u \quad\text{y}\quad v \ge -u \;\;\Longrightarrow\;\; -v \le u \le v.
\]

<p>
Además, como \(v = x+y\) y en \(T\) se tiene \(0 \le x+y \le 1\), entonces
</p>

\[
0 \le v \le 1.
\]

 
<h3>Región transformada en \((u,v)\)</h3>
<p>
    <Strong>Aqui tomamos la desicion, que nos conviene tener como contante para que se recorra despues. 
        esa es la pregunta.
    </Strong>

    <p>
        el “barrido” siempre se hace desde la integral más interna hacia afuera.
    </p>

    <strong>Es mejor ir de abajo hacia arriba:</strong>

    <p>
Para \(v\): los límites dicen \(0 \leq v \leq 1\).  
Eso se traduce en “subir” en \(v\), de abajo \((0)\) hacia arriba \((1)\).
</p>

<p>
Para \(u\): los límites dicen \(-v \leq u \leq v\).  
Eso significa que, para cada \(v\) fijo, \(u\) empieza en \(-v\) (más a la izquierda) y termina en \(+v\) (más a la derecha).
</p>


</p>
<p>
La región \(T\) se transforma en
</p>

\[
\{(u,v):\; 0 \le v \le 1,\; -v \le u \le v\}.
\]

 


 <hr>
    <p>
Ese símbolo \(\tfrac{\partial u}{\partial x}\) significa la derivada parcial de \(u\) respecto a \(x\), manteniendo las demás variables (en este caso \(y\)) constantes.
</p>

<p>En otras palabras: 
Considera \(x\) como una función de \(u\) y \(v\), y deriva respecto a \(u\) manteniendo \(v\) fijo. por eso 
se toma la parte x=.... para esta parte.
 </p>
 
 <h2>Jacobiano</h2>

 


<p>
Recuerda que antes encontramos:
</p>

\[
x = \tfrac{v - u}{2}, \qquad y = \tfrac{u + v}{2}.
\]

<p>
Entonces, tenemos dos formas de derivar según la relación que usemos:
</p>

 
<p><b>(a) Derivadas de \(x(u,v), y(u,v)\):</b></p>

<p>
Para \(x(u,v) = \tfrac{v - u}{2}\):
</p>

\[
\frac{\partial x}{\partial u} = -\tfrac{1}{2}, 
\quad 
\frac{\partial x}{\partial v} = \tfrac{1}{2}.
\]

<p>
Para \(y(u,v) = \tfrac{u + v}{2}\):
</p>

\[
\frac{\partial y}{\partial u} = \tfrac{1}{2}, 
\quad 
\frac{\partial y}{\partial v} = \tfrac{1}{2}.
\]

<p>
Estas son las que se usan en el Jacobiano directo \(\tfrac{\partial(x,y)}{\partial(u,v)}\).
</p>

 
<p><b>(b) Derivadas de \(u(x,y), v(x,y)\):</b></p>

<p>
Recordemos que originalmente:
\[
u = y - x, \qquad v = y + x.
\]
</p>

\[
\frac{\partial u}{\partial x} = -1, 
\quad 
\frac{\partial v}{\partial x} = 1,
\]

\[
\frac{\partial u}{\partial y} = 1, 
\quad 
\frac{\partial v}{\partial y} = 1.
\]

<p>
Estas corresponden al Jacobiano inverso \(\tfrac{\partial(u,v)}{\partial(x,y)}\).
</p>

 
<p><b>Cálculo del Jacobiano:</b></p>

\[
J = \frac{\partial(x,y)}{\partial(u,v)} =
\begin{vmatrix}
\frac{\partial x}{\partial u} & \frac{\partial x}{\partial v}\\[4pt]
\frac{\partial y}{\partial u} & \frac{\partial y}{\partial v}
\end{vmatrix}
=
\begin{vmatrix}
-\tfrac{1}{2} & \tfrac{1}{2} \\[4pt]
\tfrac{1}{2} & \tfrac{1}{2}
\end{vmatrix}
= -\tfrac{1}{2}.
\]

<p>
Por tanto,
</p>

\[
|J| = \tfrac{1}{2}, \quad dx\,dy = \tfrac{1}{2}\,du\,dv.
\]

<hr>

<p>
En una integral doble del tipo
</p>

\[
\iint_R f(x,y)\,dx\,dy
\]

<p>
cuando decides el orden de integración, <b>la variable que va de externa debe tener límites que no dependan de la otra</b>, es decir, <b>constantes</b>.
</p>

<hr>

<p><Strong>En este caso, por simplicidad nos queda util decir que v es la externa (
es la que esta expresada entre constantes    ).</Strong></p>

<h3>Razón</h3>

<p>
Si pones primero \(dv\) y luego \(du\):
</p>

\[
\int_{v=\text{constante inferior}}^{\text{constante superior}}
\int_{u=\text{función de }v}^{\text{función de }v} f(u,v)\,du\,dv,
\]

<p>
entonces los límites de \(v\) (externa) son constantes, y los de \(u\) (interna) pueden depender de \(v\).
</p>

<p>
Si lo haces al revés (primero \(du\) y luego \(dv\)):
</p>

\[
\int_{u=\text{constante inferior}}^{\text{constante superior}}
\int_{v=\text{función de }u}^{\text{función de }u} f(u,v)\,dv\,du,
\]

<p>
los límites de \(u\) (externa) son constantes, y los de \(v\) (interna) pueden depender de \(u\).
</p>

 

<p>
👉 En otras palabras:
</p>

<ul>
  <li><b>Externa</b> = siempre constante a constante.</li>
  <li><b>Interna</b> = puede depender de la externa.</li>
</ul>
 
<hr>

<h2>Paso : Integral en las nuevas variables</h2>
<p>Como resulto anteriormente:</p>
\[
\{(u,v):\; 0 \le v \le 1,\; -v \le u \le v\}.
\]

<p>
El integrando es \(e^{u/v}\), por tanto:
</p>
<p>
\( I = \int_{v=0}^1 \int_{u=-v}^v e^{u/v}\,\frac{1}{2}\,du\,dv. \)
</p>
<hr>

 
 <h2>1. Integral iterada (orden de integración)</h2>

<p>Supongamos que tienes:</p>

<p>
\[
\iint_R f(u,v)\, dA = \int_{u_1}^{u_2} \left( \int_{\alpha(u)}^{\beta(u)} f(u,v)\, dv \right) du
\]
</p>

<p>
Aquí:
<ul>
  <li>La <strong>interna</strong> es en <em>v</em>, o sea 
    \(\displaystyle \int_{\alpha(u)}^{\beta(u)} f(u,v)\,dv\).
  </li>
  <li>La <strong>externa</strong> es en <em>u</em>, de <em>u₁</em> a <em>u₂</em>.</li>
</ul>
</p>

<hr>

<h2>2. Interpretación geométrica</h2>

<p>Si integras primero en <em>v</em>:</p>
<ul>
  <li>Para un <em>u</em> fijo, recorres un <strong>segmento vertical</strong> en la dirección de <em>v</em>, desde la curva inferior 
    <em>v = α(u)</em> hasta la curva superior <em>v = β(u)</em>. 👉 Es “de abajo hacia arriba”.
  </li>
  <li>Luego, la integral externa en <em>u</em> barre todos esos segmentos cuando 
    <em>u</em> va de <em>u₁</em> a <em>u₂</em>. 👉 Es “de izquierda a derecha”.
  </li>
</ul>

<hr>

<h2>3. Caso contrario</h2>

<p>Si el orden fuera:</p>

<p>
\[
\int_{v_1}^{v_2} \left( \int_{\gamma(v)}^{\delta(v)} f(u,v)\, du \right) dv
\]
</p>

<p>Entonces:</p>
<ul>
  <li><strong>Interna:</strong> en <em>u</em>, para un <em>v</em> fijo, de <em>γ(v)</em> a <em>δ(v)</em>. 👉 Se recorre “de izquierda a derecha”.</li>
  <li><strong>Externa:</strong> en <em>v</em>, barres de abajo hacia arriba.</li>
</ul>

<hr>

<h2>4. Idea clave</h2>

<p>
La integral interna siempre define un segmento en la dirección de la variable que se está integrando.
La integral externa barre esos segmentos a lo largo de la otra variable.
</p>

<p>
✅ Entonces, como dijiste:
</p>

<ul>
  <li>Si la interna es <em>dv</em>, empiezas “de abajo hacia arriba”.</li>
  <li>Si la interna es <em>du</em>, empiezas “de izquierda a derecha”.</li>
</ul>

 <h2>Porque elegimos v como externa:</h2>

<p>
\[
0 \le v \le 1,\quad -v \le u \le v.
\]
</p>

<p>
Eso describe un rombo en el plano \((u,v)\).
</p>

<h3>Si tomo \(v\) como externa</h3>

<p>
Escribo:
</p>

<p>
\[
0 \le v \le 1,\quad -v \le u \le v.
\]
</p>

<p>
Aquí el rango de \(v\) (la externa) es fijo: de \(0\) a \(1\). Perfecto.
</p>

<h3>Si tomo \(u\) como externa</h3>

<p>
Ya no puedo decir simplemente \(\;0 \le v \le 1\;\), porque entonces la condición \(-v \le u \le v\) no se está respetando. Para cada \(u\), no todos los \(v\) entre \(0\) y \(1\) sirven, sino solo los que cumplen
</p>

<p>
\[
v \ge |u|.
\]
</p>

<p>
Es decir:
</p>

<p>
\[
-1 \le u \le 1,\quad |u| \le v \le 1.
\]
</p>


<img src="../../../../img/guia_191.png" alt="" width="600"> 


</div>




<div class="seccion derecha">


<p>Aqui se observa que como la interna es u, comenzamos de izquierda a derecha y nos encontramos con u=-v y u=v,
en geogebra (y=x,y=-x). La otra empieza en la minima 0 y va hasta 1.

</p>

<p><strong>Podemos:</strong>imaginar que el orden de donde vamos a comenzar a ver va a determinar
las contantes respecto a las cuales despues van a recorrer funciones.</p>
<hr>
 <h2>Paso : Integración respecto a \(u\)</h2>
<h2>Segundo cambio de variable (local, dentro de la integral en <em>u</em>)</h2>

<p>
Cuando llegamos a la integral iterada en (<em>u,v</em>):
</p>

<p>
\[
I = \frac{1}{2} \int_0^1 \int_{-v}^{v} e^{u/v} \, du \, dv,
\]
</p>

<p>
vemos que el integrando depende de <em>u/v</em>. Aquí ocurre el segundo cambio de variable, que es solo para simplificar la integral interna:
</p>

<p><b>Definimos:</b></p>

\[
t = \frac{u}{v}.
\]

<p><b>Derivamos respecto a <em>u</em>, tratando <em>v</em> como constante:</b></p>

\[
dt = \frac{1}{v} \, du \quad \Longrightarrow \quad du = v \, dt.
\]

<p><b>Cambiamos los límites de integración (en términos de <em>t</em>):</b></p>

<ul>
  <li>Cuando \(u = -v \Rightarrow t = -1\).</li>
  <li>Cuando \(u = v \Rightarrow t = 1\).</li>
</ul>

<p><b>La integral interna ahora es:</b></p>

\[
\int_{u=-v}^{v} e^{u/v} \, du = \int_{t=-1}^{1} e^t \, v \, dt = v \int_{-1}^{1} e^t \, dt = v(e - e^{-1}).
\]

<hr>
<h2>Paso : Integral después del cambio de variable interno</h2>
<p>
Después de hacer el cambio \( t = \frac{u}{v}\)  en la integral interna, obtuvimos:
</p>
<p>
\[
\int_{u=-v}^{v} e^{u/v} \, du = v (e - e^{-1}).
\]
</p>
<p>
Entonces, la integral doble original se transforma en una integral <strong>simple</strong> respecto a \(v\):
</p>
<p>
\[
I = \frac{1}{2} \int_0^1 v (e - e^{-1}) \, dv.
\]
</p>
<p>
Aquí <code>1/2</code> viene del <strong>Jacobiano</strong> del cambio de variables  \( (x,y) \to (u,v) \).
</p>

 
<h2> Factorizamos constantes</h2>
<p>
Observa que \(e - e^{-1} \) es una constante con respecto a \(v\), así que podemos sacarla fuera de la integral:
</p>
<p>
\[
I = \frac{1}{2} (e - e^{-1}) \int_0^1 v \, dv.
\]
</p>


<h3> Evaluamos la integral \(\int_0^1 v \, dv\)</h3>
<p>
Recordemos que:
</p>
<p>
\[
\int v \, dv = \frac{v^2}{2} + C.
\]
</p>
<p>
Por lo tanto, evaluando entre los límites 0 y 1:
</p>
<p>
\[
\int_0^1 v \, dv = \left[ \frac{v^2}{2} \right]_0^1 = \frac{1^2}{2} - \frac{0^2}{2} = \frac{1}{2}.
\]
</p>

<hr>

<h3> Sustituimos y multiplicamos</h3>
<p>
Ahora sustituimos este resultado en la integral:
</p>
<p>
\[
I = \frac{1}{2} (e - e^{-1}) \cdot \frac{1}{2} = \frac{e - e^{-1}}{4}.
\]
</p>

<hr>

<h3>✅ Resumen del razonamiento</h3>
<ol>
  <li>La integral interna en \(u\) dio \(v (e - e^{-1})\).</li>
  <li>La integral externa en \(v\) recorre los límites de \(0\) a \(1\).</li>
  <li>Se saca la constante \(e - e^{-1}\) de la integral.</li>
  <li>Se integra \(v\) respecto a \(v\), obteniendo \(\frac{1}{2}\).</li>
  <li>Multiplicando todo junto da el resultado final \(\frac{e - e^{-1}}{4}\).</li>
</ol>



<hr>

<h2>Paso 8: Resultado final</h2>
<p>
\(\boxed{ I = \tfrac{e - e^{-1}}{4} }\)
</p>
<hr>
 
<img src="../../../../img/guia_192.png" alt="" width="600"> 


<h2>🔴 Matriz original</h2>
<p>Sea una matriz <em>A</em> de tamaño 2×3:</p>
<p>
\[
A = 
\begin{pmatrix}
\color{red}{a_{11}} & a_{12} & a_{13} \\
a_{21} & a_{22} & a_{23}
\end{pmatrix}
\]
</p>
<ul>
  <li>La <strong>primera fila</strong> es \((a_{11}, a_{12}, a_{13})\)</li>
  <li>La <strong>segunda fila</strong> es \((a_{21}, a_{22}, a_{23})\)</li>
</ul>

<h2>🔄 Matriz transpuesta</h2>
<p>La transpuesta <em>A<sup>T</sup></em> intercambia filas por columnas:</p>
<p>
\[
A^T =
\begin{pmatrix}
\color{red}{a_{11}} & a_{21} \\
a_{12} & a_{22} \\
a_{13} & a_{23}
\end{pmatrix}
\]
</p>
<p>Observa:</p>
<ul>
  <li>La <strong>primera fila original</strong> <span style="color:red;">\((a_{11}, a_{12}, a_{13})\)</span> se convierte en la <strong>primera columna</strong> de \(A^T\):
    \[
    \begin{pmatrix}
    \color{red}{a_{11}} \\
    a_{12} \\
    a_{13}
    \end{pmatrix}
    \]
  </li>
  <li>La <strong>segunda fila original</strong> \((a_{21}, a_{22}, a_{23})\) se convierte en la <strong>segunda columna</strong> de \(A^T\)</li>
</ul>

<h2>🔹 Idea clave</h2>
<p>
- <strong>Transposición:</strong> filas → columnas, columnas → filas.<br>
- Un vector columna \(\mathbf{v}\) se convierte en vector fila \(\mathbf{v}^T\):
</p>
<p>
\[
\mathbf{v} = 
\begin{pmatrix} v_1 \\ v_2 \\ v_3 \end{pmatrix}
\quad \Longrightarrow \quad
\mathbf{v}^T = \begin{pmatrix} v_1 & v_2 & v_3 \end{pmatrix}
\]
</p>
<p>La “columna roja” \(v_1\) pasa de columna a fila, manteniendo su posición relativa como primer elemento.</p>









    <hr>
    <p>En un cambio de variables uno casi siempre necesita el determinante</p>

<p style="text-align:center;">
\[
\det\!\left(\frac{\partial(x,y)}{\partial(u,v)}\right),
\]
</p>

<p>es decir, el determinante de la **inversa** (que en valor absoluto te dio \(1/2\)).</p>

<hr>

<p><strong>Entonces, ¿qué pinta tiene el \(-2\)?</strong></p>

<p>Ese \(-2\) es el determinante del Jacobiano “forward”, es decir</p>

<p style="text-align:center;">
\[
\det\!\left(\frac{\partial(u,v)}{\partial(x,y)}\right) = -2.
\]
</p>

<p>Interpretación geométrica:</p>
<ul>
  <li><strong>Magnitud</strong> (\(|-2|=2\)): la transformación \((x,y)\mapsto(u,v)\) <em>duplica áreas</em>. Si un conjunto tiene área \(1\) en \((x,y)\), su imagen en \((u,v)\) tendrá área \(2\).</li>
  <li><strong>Signo</strong> (\(-\)): indica que la transformación <em>invierte la orientación</em> (como una reflexión).</li>
</ul>

<p>Por eso, al tomar la inversa, el determinante se hace recíproco: \(\det(\partial(x,y)/\partial(u,v))=1/(-2)=-\tfrac{1}{2}\), y su valor absoluto es \(\tfrac{1}{2}\).</p>

<hr>

<p><strong>¿Por qué normalmente no usamos \(-2\) directamente en las integrales?</strong></p>

<p>En las integrales necesitamos expresar \(dx\,dy\) en función de \(du\,dv\). La regla es</p>

<p style="text-align:center;">
\[
dx\,dy \;=\; \left|\det\!\left(\frac{\partial(x,y)}{\partial(u,v)}\right)\right|\, du\,dv.
\]
</p>

<p>Como ya vimos,</p>

<p style="text-align:center;">
\[
\det\!\left(\frac{\partial(x,y)}{\partial(u,v)}\right)
= \frac{1}{\det\!\left(\frac{\partial(u,v)}{\partial(x,y)}\right)}
= \frac{1}{-2} = -\tfrac{1}{2},
\]
\[
\Rightarrow\quad
\left|\det\!\left(\frac{\partial(x,y)}{\partial(u,v)}\right)\right| = \tfrac{1}{2}.
\]
</p>

<p>De ahí el factor \(1/2\) que aparece en la integral después del cambio de variables. El \(-2\) aparece si calculas el Jacobiano en el sentido contrario (de \((x,y)\) a \((u,v)\)); su utilidad es informar sobre la <em>escala</em> (magnitud) y la <em>orientación</em> (signo) de la transformación, pero en la fórmula de la integral se usa el determinante de la inversa (o su valor absoluto).</p>

    <hr>

    <h2>Interpretación del Jacobiano y su determinante</h2>

<p>En el cambio de variables necesitamos usar el Jacobiano inverso:</p>
<p style="text-align:center;">
\[
dx\,dy \;=\; \left| \det\!\left(\frac{\partial(x,y)}{\partial(u,v)}\right) \right| \, du\,dv,
\]
</p>
<p>Que en tu caso vale <strong>1/2</strong>. Esto tiene una interpretación geométrica directa:</p>
<ul>
  <li><strong>\(|\det| = \frac{1}{2}\)</strong>: indica que cada región infinitesimal en el plano \((u,v)\) se reduce a la mitad cuando se transforma al plano \((x,y)\). Por eso aparece el factor <code>½</code> en la integral.</li>
</ul>

<hr>

<p>El determinante “forward”, es decir:</p>
<p style="text-align:center;">
\[
\det\!\left(\frac{\partial(u,v)}{\partial(x,y)}\right) = -2,
\]
</p>
<p>también tiene una interpretación importante:</p>
<ul>
  <li><strong>\(|-2| = 2\)</strong>: significa que la transformación \((x,y)\to(u,v)\) <em>duplica áreas</em>.</li>
  <li><strong>El signo negativo (\(-\))</strong>: indica que la transformación <em>invierte la orientación</em> (como ocurre en una reflexión).</li>
</ul>

<hr>

<p>En resumen:</p>
<ul>
  <li>El valor <strong>1/2</strong> (determinante de la inversa en valor absoluto) nos indica cómo <em>cambia el área</em> en el cálculo de integrales.</li>
  <li>El valor <strong>-2</strong> (determinante del Jacobiano directo) nos da información adicional sobre la <em>escala</em> (áreas ×2) y la <em>orientación</em> (invertida).</li>
</ul>

 

<p>
Cuando calculas
</p>

<p>
\[
J = \frac{\partial(x,y)}{\partial(u,v)},
\]
ese es el Jacobiano de la transformación 
\((u,v) \to (x,y)\).
En tu caso:
</p>

<p>
\[
\det(J) = \tfrac{1}{2}.
\]
👉 Esto te dice que en el paso a la integral debes multiplicar por \(\tfrac{1}{2}\), 
porque cada unidad de área en \((u,v)\) se transforma en media unidad en \((x,y)\).
</p>

<p>
En cambio, si calculas
</p>

<p>
\[
J^{-1} = \frac{\partial(u,v)}{\partial(x,y)},
\]
ese es el Jacobiano de la transformación inversa 
\((x,y) \to (u,v)\).
En tu caso:
</p>

<p>
\[
\det(J^{-1}) = -2.
\]
👉 Esto significa que cada unidad de área en \((x,y)\) se transforma en dos unidades en \((u,v)\), 
pero además con cambio de orientación (el signo negativo indica inversión).
</p>

<p>
<b>En resumen:</b>
</p>

<ul>
  <li>\((u,v) \to (x,y)\): \(\det = +\tfrac{1}{2}\) → reduce área, mantiene orientación.</li>
  <li>\((x,y) \to (u,v)\): \(\det = -2\) → expande área, invierte orientación.</li>
</ul>





<h3>Factor de escala entre áreas</h3>


<p>En el sentido de que no te falte un dato: es el <strong>factor de escala</strong> entre áreas cuando pasas de
\( (u,v) \) a \( (x,y) \). En transformaciones lineales:</p>


<p>
\[ dx\,dy = \left| \frac{\partial(x,y)}{\partial(u,v)} \right| \, du\,dv. \]
</p>


<p>El determinante jacobiano no te da un área absoluta, sino la <em>razón</em> (escala local) de cualquier área en el plano
\( (u,v) \) respecto a su imagen en \( (x,y) \).</p>


<p>Aquí \[ |J| = \tfrac{1}{2} \] significa: cada área en \( (u,v) \) se convierte en un área mitad en \( (x,y) \). Si un parche en \( (u,v) \) mide \( A \), su imagen mide \( \tfrac{1}{2}A \). No necesitas conocer \( A \) para saber la relación.</p>


<h3>Ejemplo numérico y relación recíproca</h3>


<p>Por eso, una vez calculas \[ \mathrm{Área}(T') = 1, \] sabes que
\[ \mathrm{Área}(T) = |J|\cdot \mathrm{Área}(T') = \tfrac{1}{2}\cdot 1 = 0.5. \]
Si en cambio usaras el jacobiano inverso
\[ \left| \frac{\partial(u,v)}{\partial(x,y)} \right| = 2, \]
leerías la relación al revés: áreas en \( (x,y) \) se vuelven el doble en \( (u,v) \). Ambas afirmaciones son consistentes porque son recíprocas.</p>

    <hr>
    <h3>B)</h3>

    <h3>b. (4 puntos) Transformación lineal y conservación de áreas</h3>

<p>Cuando lo que te interesa es <b>el área de una región</b>, el integrando siempre es \(1\):</p>

<p>
\[
\text{Área}(R) = \iint_R 1 \, dA.
\]
</p>

<p>Por eso:</p>

<ul>
  <li>En la parte (a), el integrando original era \(e^{(y-x)/(y+x)}\), y al hacer el cambio de variable pasó a ser \(e^{u/v}\).</li>
  <li>En la parte (b), ya no nos interesa ningún integrando “extra”: lo único que queremos es el área → entonces integramos \(1\).</li>
</ul>

<p>Después, el jacobiano entra en juego porque al cambiar de variables:</p>

<p>
\[
\iint_T 1 \, dx\,dy \;=\; \iint_{T'} |J|\cdot 1 \, du\,dv.
\]
</p>

<p>Y eso es lo que nos permite comparar:</p>

<ul>
  <li>Área en el plano \((x,y)\).</li>
  <li>Área en el plano \((u,v)\), multiplicada por \(|J|\).</li>
</ul>

<hr>

<h4>Verificación Numérica</h4>

<p><strong>Área de la región original \(T\):</strong></p>
<p>\[
\text{Área}(T) = \tfrac{1}{2}\times\text{base}\times\text{altura} = \tfrac{1}{2}\times 1 \times 1 = 0.5.
\]</p>

<p><strong>Área de la región transformada \(T'\) en el plano \((u,v)\):</strong></p>
<p>La región \(T'\) está definida por:</p>
<p>\(0 \le v \le 1,\quad -v \le u \le v.\)</p>

<p>Entonces:</p>
<p>\[
\text{Área}(T') = \iint_{T'} du\,dv
= \int_0^1 \int_{-v}^v du\,dv
= \int_0^1 (v-(-v))\,dv
= \int_0^1 2v\,dv
= \big[v^2\big]_0^1
= 1.
\]</p>

<p>La relación entre áreas es:</p>
<p>\[
\text{Área}(T) = \iint_T dx\,dy = \iint_{T'} |J|\,du\,dv
= |J| \cdot \text{Área}(T')
= \tfrac{1}{2}\cdot 1 = 0.5.
\]</p>

<p><strong>Conclusión:</strong><br>
La transformación <strong>no conserva áreas</strong>, sino que las contrae por un factor de \( \tfrac{1}{2} \).</p>

<hr>
 
<p><strong>2. Cómo se traduce en <code>dblquad</code></strong></p>

<p>La sintaxis de <code>dblquad</code> es:</p>

<p>
<code>integrate.dblquad(func, a, b, gfun, hfun)</code>
</p>

<p>
<i>a, b</i> → intervalo de la variable externa.
</p>

<p>
<i>gfun(v), hfun(v)</i> → límites de la variable interna, que pueden depender de la externa.
</p>

<p>En tu caso:</p>

<pre>
res, err = integrate.dblquad(
    f,                 # funcion
    0, 1,              # v: [0,1]  → externa
    lambda v: -v,      # u inferior → interna
    lambda v: v        # u superior → interna
)
</pre>

<p><strong>Observaciones:</strong></p>

<ul>
  <li><strong>v</strong> es la externa porque varía en el rango \([0,1]\).</li>
  <li><strong>u</strong> es la interna porque se integra primero, y sus límites dependen de \(v\).</li>
</ul>


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
