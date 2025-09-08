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
    height: 740vh;
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

<p>
    2. (23 puntos) Considere el volumen del sólido limitado superiormente por la superficie  
    \( x^2 + y^2 + z^2 = 2z \) e inferiormente por \( x^2 + y^2 = z \).
</p>
    <hr>

<h3>1. Reconocer la esfera</h3>

<p>Partimos de la ecuación: \(x^{2}+y^{2}+z^{2}=2z\).</p>

<p>Para identificar la superficie, se completa el cuadrado en la variable \(z\):</p>

<p>\(x^{2}+y^{2}+z^{2}-2z=0 \;\;\;\;\;\;\Rightarrow\;\;\;\;\;\; x^{2}+y^{2}+(z^{2}-2z+1)=1 \;\;\;\;\;\;\Rightarrow\;\;\;\;\;\; x^{2}+y^{2}+(z-1)^{2}=1\).</p>

<p>👉 Esto es una esfera de radio 1 y centro en \((0,0,1)\).</p>

<p>Sus extremos sobre el eje \(z\) se calculan tomando \(x=y=0\):</p>

<p>\((z-1)^{2}=1 \;\;\;\;\;\;\Rightarrow\;\;\;\;\;\; z=0 \;\;\; \text{o} \;\;\; z=2\).</p>

<p>Mira: la ecuación de la esfera era \(x^{2}+y^{2}+(z-1)^{2}=1\).</p>

<p>Si quieres ver hasta dónde llega en el eje \(z\), tomas \(x=0, y=0\). Entonces queda:</p>

<p>\((z-1)^{2}=1\).</p>

<p>De aquí: \(z-1=\pm 1 \;\;\;\;\;\;\Rightarrow\;\;\;\;\;\; z=1+1=2 \;\;\; \text{o} \;\;\; z=1-1=0\).</p>

<p>👉 Esos son los extremos verticales de la esfera: toca el eje \(z\) en los puntos \((0,0,0)\) y \((0,0,2)\).</p>


<h3>Recordemos la definición de coordenadas cilíndricas:</h3>

<p>\(x = r\cos\theta,\; y = r\sin\theta,\; z = z,\; r^{2}=x^{2}+y^{2}\).</p>

<p>Entonces, cada vez que veas \(x^{2}+y^{2}\) en una ecuación rectangular, lo puedes reemplazar por \(r^{2}\). Eso es lo que hace la tabla que mencionas.</p>

<h3>Casos de la tabla 15.5.1:</h3>

<h4>Cilindro circular</h4>
<p>En rectangular: \(x^{2}+y^{2}=c^{2}\).</p>
<p>Como \(x^{2}+y^{2}=r^{2}\):</p>
<p>\(r^{2}=c^{2}\;\;\Rightarrow\;\; r=c\).</p>

<h4>Cono circular</h4>
<p>En rectangular: \(z^{2}=c^{2}(x^{2}+y^{2})\).</p>
<p>Sustituyendo \(x^{2}+y^{2}=r^{2}\):</p>
<p>\(z^{2}=c^{2}r^{2}\;\;\Rightarrow\;\; z=\pm cr\).</p>
<p>(Normalmente se toma \(z=cr\) si solo interesa la rama positiva).</p>

<h4>Esfera</h4>
<p>En rectangular: \(x^{2}+y^{2}+z^{2}=c^{2}\).</p>
<p>Sustituyendo \(x^{2}+y^{2}=r^{2}\):</p>
<p>\(r^{2}+z^{2}=c^{2}\).</p>

<h4>Paraboloide</h4>
<p>En rectangular: \(z=c(x^{2}+y^{2})\).</p>
<p>Sustituyendo \(x^{2}+y^{2}=r^{2}\):</p>
<p>\(z=cr^{2}\).</p>

<h3>👉 En resumen:</h3>
<p>La clave está en reconocer que en coordenadas cilíndricas \(x^{2}+y^{2}=r^{2}\).</p>
<p>Con esa sustitución se simplifican mucho las superficies de revolución (cilindros, conos, esferas, paraboloides).</p>

<img src="../../../../img/guia_193.png" alt="" width="700"> 
<br><br>
<hr>

<h3>1) Ecuaciones en coordenadas rectangulares</h3>

<p>Tenemos las dos superficies:</p>

<p><strong>Esfera:</strong> \(x^{2}+y^{2}+z^{2}=2z.\)</p>

<p><strong>Paraboloide:</strong> \(z=x^{2}+y^{2}.\)</p>

<h3>2) Pasar a coordenadas cilíndricas</h3>

<p>Recordando \(x=r\cos\theta,\; y=r\sin\theta,\; r^{2}=x^{2}+y^{2}\), las ecuaciones se vuelven:</p>

<p><strong>Esfera:</strong> \(r^{2}+z^{2}=2z.\)</p>

<p><strong>Paraboloide:</strong> \(z=r^{2}.\)</p>

<p>(Éstas son equivalentes a las originales pero expresadas con \(r,\theta,z\).)</p>

<hr>
<p><strong>Podria verse como que cambiamos \( x^2+y^2\) por \( r^2 \)</strong></p>
<img src="../../../../img/guia_194.png" alt="" width="700"> 


<h3>Limites de r, Hallar la interseccion:</h3>

<p>\(r^{2}+(r^{2})^{2}=2r^{2}\).</p>

<h4>Primero expandimos:</h4>
<p>\(r^{2}+r^{4}=2r^{2}\).</p>

<h4>Pasamos todos los términos a un lado:</h4>
<p>\(r^{4}+r^{2}-2r^{2}=0 \;\;\;\Rightarrow\;\;\; r^{4}-r^{2}=0\).</p>

<h4>Factorizamos \(r^{2}\):</h4>
<p>\(r^{2}(r^{2}-1)=0\).</p>

<h4>Soluciones:</h4>
<p>\(r^{2}=0 \;\;\;\Rightarrow\;\;\; r=0\).</p>
<p>\(r^{2}-1=0 \;\;\;\Rightarrow\;\;\; r^{2}=1 \;\;\;\Rightarrow\;\;\; r=\pm 1\).</p>

<p>Pero como en coordenadas cilíndricas \(r\geq 0\), las soluciones son:</p>
<p>\(r=0\) o \(r=1\).</p>


    <hr>

    <h3>límites para \(r\):</h3>

    <h5>1.Metodo algebraico</h5>
    <p>Para los limites de r tenemos que hallar la interseccion</p>

<p>El paso de resolver la ecuación \(r^{2}(r^{2}-1)=0\) y obtener \(r=0\) o \(r=1\) nos da la curva de intersección entre el paraboloide y la esfera.</p>

<p>Ahora, sobre los límites de \(r\):</p>

<p>El mínimo valor de \(r\) en coordenadas cilíndricas siempre es el eje, es decir \(r=0\).</p>

<p>El máximo valor de \(r\) lo determina justamente la intersección: \(r=1\).</p>

<p><strong>¿Por qué?</strong><br>
Porque si \(r>1\), la parábola \(z=r^{2}\) crece más rápido que la esfera y ya no queda encerrada dentro de ella. El sólido de interés solo existe dentro del disco que se proyecta en el plano \(xy\), que es \(r\le 1\).</p>



    <h5>2.Método gráfico (en el plano \(rz\))</h5>

<p>La esfera (en corte vertical) se ve como una circunferencia centrada en \((0,1)\) con radio \(1\).</p>

<p>El paraboloide se ve como la curva \(z=r^{2}\).</p>

<p>El sólido está encerrado entre ambas superficies.</p>

<p>La intersección de esas dos curvas ocurre justamente en \(r=1,\; z=1\).</p>

<p>Como radialmente la región empieza en el eje (\(r=0\)) y llega hasta esa curva de intersección (\(r=1\)), los límites son</p>

<p>\(0 \le r \le 1.\)</p>


    <hr>
    <h3>Limites de Z:</h3>
    <h5>Despejar \(z\) en la esfera (obtener los límites en \(z\))</h5>

<p>Para poner límites en \(z\) necesitamos expresar la esfera como \(z=\) algo. Partimos de</p>

<p>\[
r^{2}+z^{2}=2z \;\;\Longrightarrow\;\; z^{2}-2z+r^{2}=0.
\]</p>

<p>Es una cuadrática en \(z\). Aplicando la fórmula:</p>

<p>\[
z=\frac{2 \pm \sqrt{4-4r^{2}}}{2} = 1 \pm \sqrt{1-r^{2}}.
\]</p>

<p>Así la esfera tiene dos hojas en \(z\) para un \(r\) dado:</p>

<p>\[
z_{\text{inf, esfera}} = 1-\sqrt{1-r^{2}}, 
\quad 
z_{\text{sup, esfera}} = 1+\sqrt{1-r^{2}}.
\]</p>

    <h3>De manera concisa:</h3>
    <h3>1. Límite inferior en \(z\) → lo da el paraboloide</h3>

<p>El paraboloide es</p>

<p>\[
z = r^2.
\]</p>

<p>Esa es la "pared de abajo" del sólido.</p>

<h3>2. Límite superior en \(z\) → lo da la esfera</h3>

    <p>La esfera en cilíndricas es</p>

    <p>\[
    r^2+z^2=2z \;\;\Longrightarrow\;\; z = 1 \pm \sqrt{1-r^2}.
    \]</p>

    <p>De esas dos ramas, tomamos la rama positiva:</p>

    <p>\[
    z = 1 + \sqrt{1-r^2}.
    \]</p>

    <p>porque es la que queda por encima del paraboloide.</p>

    <p>✅ Entonces los límites de \(z\) son:</p>

    <p>\[
    r^2 \;\le\; z \;\le\; 1+\sqrt{1-r^2}.
    \]</p>

    <hr>
    <h3>Orden de integracion:</h3>

    <p><strong>Como z en funcion de r, entonces debe ir primero que r</strong></p>

    <h3>Orden natural de integración</h3>

<p>Si ya tienes \(z\) escrito en función de \(r\) (esfera y paraboloide), entonces es más natural poner <strong>\(dz\)</strong> primero, porque los “techos” y “pisos” del sólido están descritos por esas funciones de \(r\).</p>

<p>Después pones <strong>\(dr\)</strong>, porque \(r\) queda limitado por la intersección (de 0 a 1).</p>

<p>Y al final <strong>\(\theta\)</strong>, que simplemente barre todo el ángulo de \(0\) a \(2\pi\).</p>

    <hr>

    <h3>2.2 Integración en \(z\)</h3>

<p><strong>Paso 1 — Integrar primero en \(z\)</strong> (los límites dependen de \(r\)):</p>

<p>
\[
\int_{z=r^2}^{\,1+\sqrt{1-r^2}} r\,dz
= r\Big(1+\sqrt{1-r^2}-r^2\Big).
\]
</p>

<p>Por tanto la integral triple para el volumen queda</p>

<p>
\[
V \;=\; \int_{0}^{2\pi}\int_{0}^{1} r\big(1+\sqrt{1-r^2}-r^2\big)\,dr\,d\theta.
\]
</p>

<p><strong>Paso 2 — Factorizar la integral en \(\theta\)</strong></p>

<p>Observa que el integrando <em>no depende</em> de \(\theta\). Entonces la integral en \(\theta\) se puede sacar como factor:</p>

<p>
\[
V \;=\; \left(\int_{0}^{2\pi} d\theta\right)\left(\int_{0}^{1} r\big(1+\sqrt{1-r^2}-r^2\big)\,dr\right)
= 2\pi \int_0^1 r\big(1+\sqrt{1-r^2}-r^2\big)\,dr.
\]
</p>

<p><strong>Paso 3 — Separar en tres integrales</strong></p>

<p>
\[
V = 2\pi\left(\int_0^1 r\,dr \;+\; \int_0^1 r\sqrt{1-r^2}\,dr \;-\; \int_0^1 r^3\,dr\right).
\]
</p>

<h3>2.3 Cálculo de cada término</h3>

<ol>
  <li>
    <p>\(\displaystyle \int_0^1 r\,dr = \left[\frac{r^2}{2}\right]_0^1 = \frac{1}{2}.\)</p>
  </li>
  <li>
    <p>\(\displaystyle \int_0^1 r\sqrt{1-r^2}\,dr.\)</p>
    <p>Hacemos la sustitución \(u=1-r^2\) \(\Rightarrow\) \(du=-2r\,dr\). Entonces</p>
    <p>
    \[
    \int_0^1 r\sqrt{1-r^2}\,dr
    = \frac{-1}{2}\int_{u=1}^{0} u^{1/2}\,du
    = \frac{1}{2}\int_{0}^{1} u^{1/2}\,du
    = \frac{1}{2}\cdot\frac{2}{3} = \frac{1}{3}.
    \]
    </p>
  </li>
  <li>
    <p>\(\displaystyle \int_0^1 r^3\,dr = \left[\frac{r^4}{4}\right]_0^1 = \frac{1}{4}.\)</p>
  </li>
</ol>

<h3>2.4 Sumar resultados</h3>

<p>Sumamos los tres valores dentro de la integral en \(r\):</p>

<p>
\[
\int_0^1 r\big(1+\sqrt{1-r^2}-r^2\big)\,dr
= \frac12 + \frac13 - \frac14.
\]
</p>

<p>Con denominador común \(12\):</p>

<p>
\[
\frac{6+4-3}{12} = \frac{7}{12}.
\]
</p>

<p>Finalmente, multiplicando por \(2\pi\):</p>

<p style="font-weight:700; font-size:1.05em;">
\[
\boxed{\,V = 2\pi\cdot \frac{7}{12} = \frac{7\pi}{6}\,}
\]
</p>

    <h3>Coordenadas cartesianas y coordenadas rectangulares</h3>

<p>Coordenadas cartesianas y coordenadas rectangulares son lo mismo.</p>

<p>Se llaman <strong>cartesianas</strong> en honor a René Descartes (Cartesius en latín), y <strong>rectangulares</strong> porque los ejes \(x,y,z\) son mutuamente perpendiculares, formando un sistema de referencia ortogonal (recto).</p>

<p>En resumen:</p>

<ul>
  <li><strong>Rectangulares</strong> → resalta la geometría (ejes rectos y perpendiculares).</li>
  <li><strong>Cartesianas</strong> → resalta el origen histórico (Descartes).</li>
</ul>


</div>




<div class="seccion derecha">
 
<h3>Integral Triple en coordenadas cartesianas</h3>
<br><br>
<h3>1) Ecuaciones iniciales</h3>

<p>Tenemos dos superficies:</p>

<p><strong>Esfera:</strong> \(x^{2}+y^{2}+z^{2}=2z.\)</p>
<p><strong>Paraboloide:</strong> \(z=x^{2}+y^{2}.\)</p>

<hr>


 
<h3>1. Proyección en el plano \(xy\)</h3>

<p>La región en 3D está limitada radialmente por la intersección entre la esfera y el paraboloide, que ocurre en el círculo \(r=1\) (o \(x^{2}+y^{2}=1\)).</p>

<p>Por eso, la proyección en el plano \(xy\) es el disco:</p>

<p>\(x^{2}+y^{2}\le 1.\)</p>

<p>Esto define la región sobre la cual integramos en \(x\) y \(y\).</p>

<hr>

<h3>2. Límites en \(x\) y \(y\)</h3>

<p>Para cubrir todo ese disco con integrales iteradas en cartesianas, una forma inequívoca es:</p>

<ul>
  <li>Primero, \(x\) va de \(-1\) a \(1\).</li>
  <li>Para cada \(x\), \(y\) va desde \(-\sqrt{1-x^{2}}\) hasta \(+\sqrt{1-x^{2}}\), lo que describe justo los puntos dentro del disco.</li>
</ul>

<p>Esto asegura que la región proyectada se cubre completamente sin duplicaciones ni huecos.</p>

<hr>

<h3>3) Límites en \(z\) — Despejar \(z\) en la esfera</h3>

<p>Partimos de la ecuación de la esfera:</p>

<p>\[
x^{2}+y^{2}+z^{2}=2z.
\]</p>

<p>Reordenamos para obtener una cuadrática en \(z\):</p>

<p>\[
z^{2}-2z+(x^{2}+y^{2})=0.
\]</p>

<p>Aplicando la fórmula general para la cuadrática \(az^{2}+bz+c=0\) (con \(a=1,\; b=-2,\; c=x^{2}+y^{2}\)):</p>

<p>\[
z=\frac{2\pm\sqrt{(-2)^{2}-4(1)(x^{2}+y^{2})}}{2}
= \frac{2\pm\sqrt{4-4(x^{2}+y^{2})}}{2}.
\]</p>

<hr>
<strong>Proceso:</strong>
<h3>Explicación de la simplificación en la fórmula cuadrática</h3>

<p>Partimos de la fórmula cuadrática para la ecuación en <i>z</i>:</p>

<p>
\[
z = \frac{2 \pm \sqrt{(-2)^2 - 4(1)(x^2+y^2)}}{2}
\]
</p>

<ol>
  <li>
    <b>Calculamos el discriminante:</b><br>
    \[
    (-2)^2 - 4(1)(x^2+y^2) = 4 - 4(x^2+y^2).
    \]
  </li>

  <li>
    <b>Factorizamos el 4 dentro de la raíz:</b><br>
    \[
    \sqrt{4 - 4(x^2+y^2)} = \sqrt{4\big(1-(x^2+y^2)\big)}.
    \]
  </li>

  <li>
    <b>Aplicamos la propiedad de la raíz cuadrada:</b><br>
    \[
    \sqrt{4\big(1-(x^2+y^2)\big)} = \sqrt{4}\,\sqrt{1-(x^2+y^2)}.
    \]
  </li>

  <li>
    <b>Como \(\sqrt{4}=2\):</b><br>
    \[
    \sqrt{4\big(1-(x^2+y^2)\big)} = 2\sqrt{1-(x^2+y^2)}.
    \]
  </li>

  <li>
    <b>Sustituimos en la fórmula:</b><br>
    \[
    z = \frac{2 \pm 2\sqrt{1-(x^2+y^2)}}{2}.
    \]
  </li>

  <li>
    <b>Simplificamos dividiendo todo entre 2:</b><br>
    \[
    z = 1 \pm \sqrt{1-(x^2+y^2)}.
    \]
  </li>
</ol>

<p>De esta forma, la ecuación de la esfera se separa en dos ramas:</p>
<ul>
  <li>Hoja inferior: \(z = 1 - \sqrt{1-(x^2+y^2)}\).</li>
  <li>Hoja superior: \(z = 1 + \sqrt{1-(x^2+y^2)}\).</li>
</ul>

<hr>
<p>Simplificando:</p>

<p>\[
z = 1 \pm \sqrt{1-(x^{2}+y^{2})}.
\]</p>

<p>Así la esfera tiene dos ramas en \(z\):</p>
<ul>
  <li>Hoja inferior: \(z = 1 - \sqrt{1-(x^{2}+y^{2})}.\)</li>
  <li>Hoja superior: \(z = 1 + \sqrt{1-(x^{2}+y^{2})}.\)</li>
</ul>

<hr>

<h3>4) Curva de intersección y proyección</h3>

<p>Igualando el paraboloide \(z=x^{2}+y^{2}\) con la esfera (sustituyendo en la ecuación de la esfera) obtenemos:</p>

<p>\[
x^{2}+y^{2} + (x^{2}+y^{2})^{2} = 2(x^{2}+y^{2}).
\]</p>

<p>Sea \(u=x^{2}+y^{2}\). Entonces</p>

<p>\[
u+u^{2}=2u \quad\Longrightarrow\quad u(u-1)=0.
\]</p>

<p>Las soluciones son \(u=0\) (caso trivial) o \(u=1\). La intersección no trivial es</p>

<p>\[
x^{2}+y^{2}=1,\quad z=1,
\]</p>

<p>es decir, un círculo de radio 1 en el plano \(z=1\). Por tanto la proyección es el disco \(x^{2}+y^{2}\le 1\).</p>

<hr>

<h3>5) Integral triple en coordenadas cartesianas (planteo)</h3>

<p>Tomando la forma iterada \(dz\,dy\,dx\) y cubriendo el disco proyectado con \(x\in[-1,1]\) y \(y\in[-\sqrt{1-x^{2}},\sqrt{1-x^{2}}]\), la integral del volumen es:</p>

<p>\[
\boxed{%
V=\int_{x=-1}^{1}\int_{y=-\sqrt{1-x^{2}}}^{\sqrt{1-x^{2}}}
\int_{z=x^{2}+y^{2}}^{\,1+\sqrt{1-(x^{2}+y^{2})}} dz \; dy \; dx.}
\]</p>

<p>Esta expresión es equivalente a la formulación en cilíndricas; sin embargo, en cartesianas aparecen las raíces \(\sqrt{1-(x^{2}+y^{2})}\) en los límites, por eso en la práctica se prefiere trabajar en coordenadas cilíndricas cuando hay simetría radial.</p>

    <hr>

    <h3>Resumen</h3>

    <h5>1) En el plano <em>xy</em> (la proyección)</h5>

<p>Al proyectar el sólido sobre el plano <em>xy</em>, lo que obtenemos es el disco delimitado por la intersección de la esfera y el paraboloide:</p>

<p>\(x^{2}+y^{2}\le 1.\)</p>

<p>Esto quiere decir que:</p>
<ul>
  <li>\(x\) varía de \(-1\) a \(1\).</li>
  <li>Para cada valor de \(x\), \(y\) varía entre las curvas</li>
</ul>

<p>\(y=-\sqrt{1-x^{2}}\) y \(y=+\sqrt{1-x^{2}}\).</p>

<p>Ese conjunto de límites describe exactamente el disco \(x^{2}+y^{2}\le 1\).</p>


<h5>2) En la dirección vertical (<em>z</em>)</h5>

<p>El sólido está “atrapado” entre dos superficies:</p>

<ul>
  <li><strong>Inferior (el paraboloide):</strong><br>
      \(z=x^{2}+y^{2}.\)</li>
  <li><strong>Superior (la esfera, solo su hoja de arriba):</strong><br>
      \(z=1+\sqrt{\,1-(x^{2}+y^{2})\,}.\)</li>
</ul>

<p>Por lo tanto, para cada punto \((x,y)\) dentro del disco \(x^{2}+y^{2}\le 1\), los valores de \(z\) cumplen:</p>

<p>\(x^{2}+y^{2}\le z \le 1+\sqrt{\,1-(x^{2}+y^{2})\,}.\)</p>


<h5>3) Integral en cartesianas</h5>

<p>Con todo esto, la integral triple que da el volumen es:</p>

<p>
\[
V=\int_{x=-1}^{1}\int_{y=-\sqrt{1-x^{2}}}^{\sqrt{1-x^{2}}}
\int_{z=x^{2}+y^{2}}^{\,1+\sqrt{\,1-(x^{2}+y^{2})\,}} dz \; dy \; dx.
\]
</p>

<p>Como teniamos ya las coordenadas cilindricas, podiamos haber reemplazado \( r^2\) por \( x^2+y^2\)</p>

    <hr>
    <h4>Coordenadas esfericas:</h4>

    <h3>Coordenadas esféricas: \(\rho\) como norma</h3>

<p>En coordenadas esféricas,</p>

<p>\[
\rho=\sqrt{x^{2}+y^{2}+z^{2}},
\]</p>

<p>es la distancia desde el origen hasta el punto \((x,y,z)\).</p>

<p>O sea:</p>

<ul>
  <li>En 2D (coordenadas polares), \(r=\sqrt{x^{2}+y^{2}}\) es el radio en el plano.</li>
  <li>En 3D (coordenadas esféricas), \(\rho\) es la norma euclídea del vector \((x,y,z)\).</li>
</ul>

<p>En otras palabras:</p>

<p>\[
\rho=\|(x,y,z)\|.
\]</p>

<p>👉 Por eso se dice que \(\rho\) es el “radio–vector” o la “norma”.</p>

<h2>1. Cambio de coordenadas</h2>
<p>En coordenadas esféricas usamos la relación:</p>
<p>
\(x = \rho \sin\phi \cos\theta\), 
\(y = \rho \sin\phi \sin\theta\), 
\(z = \rho \cos\phi\),
</p>
<p>y el elemento de volumen es:</p>
<p>
\(dV = \rho^2 \sin\phi \, d\rho \, d\phi \, d\theta\).
</p>

<h2>2. Pasamos las superficies a esféricas</h2>

<h3>a) La esfera</h3>
<p>Ecuación original:</p>
<p>\(x^2 + y^2 + z^2 = 2 z\).</p>
<p>En esféricas, \(x^2 + y^2 + z^2 = \rho^2\) y \(z = \rho \cos\phi\). Sustituyendo:</p>
<p>\(\rho^2 = 2 \rho \cos\phi\).</p>
<p>Si \(\rho > 0\), simplificamos:</p>
<p>\(\rho = 2 \cos\phi\).</p>

<h3>b) El paraboloide</h3>
<p>Ecuación original:</p>
<p>\(z = x^2 + y^2\).</p>
<p>En esféricas, \(z = \rho \cos\phi\) y \(x^2 + y^2 = (\rho \sin\phi)^2 = \rho^2 \sin^2\phi\). Entonces:</p>
<p>\(\rho \cos\phi = \rho^2 \sin^2\phi\).</p>
<p>Si \(\rho > 0\), dividimos por \(\rho\):</p>
<p>\(\rho = \frac{\cos\phi}{\sin^2\phi}\).</p>

<h2>3. Determinar el corte</h2>
<p>Para saber hasta dónde integramos, igualamos las dos expresiones de \(\rho\):</p>
<p>\(2 \cos\phi = \frac{\cos\phi}{\sin^2\phi}\).</p>
<p>Si \(\cos\phi \neq 0\):</p>
<p>\(2 = \frac{1}{\sin^2\phi} \implies \sin^2\phi = \frac{1}{2}\).</p>
<p>Entonces:</p>
<p>\(\phi = \frac{\pi}{4}\).</p>
<p>Ese es el ángulo de intersección entre la esfera y el paraboloide.</p>

<h3>Interpretación:</h3>

<p>Para \(0 \le \phi \le \pi/4\), la esfera \(\rho = 2 \cos \phi\) es la “pared” exterior más cercana al origen, así que \(\rho\) va desde 0 hasta la esfera.</p>

<p>Para \(\pi/4 \le \phi \le \pi/2\), el paraboloide \(\rho = \frac{\cos \phi}{\sin^2 \phi}\) se vuelve el límite exterior en esa dirección, porque ahora está “más cerca” que la esfera.</p>


<p>La función <strong>ρ</strong> toma dos valores:</p>

<ul>
  <li>La esfera: \( \rho = 2 \cos \phi \) para \( 0 \le \phi \le \frac{\pi}{4} \).</li>
  <li>El paraboloide: \( \rho = \frac{\cos \phi}{\sin^2 \phi} \) para \( \frac{\pi}{4} \le \phi \le \frac{\pi}{2} \).</li>
</ul>

    <p><strong>El valor de P es igual al del limite de integracion (a(ϕ)​) para la primera parte y tambien
        en la segunda:
    </strong></p>

    <img src="../../../../img/guia_195.png" alt="" width="600">
<p>En ese contexto \(a(\phi)\) es lo mismo que \(\rho_{\max}(\phi)\), es decir, el límite superior de \(\rho\) para cada ángulo polar \(\phi\).</p>

<p>En otras palabras:</p>

<p>\[ a(\phi) = \rho_{\max}(\phi) \]</p>

<p>Para \(0 \le \phi \le \pi/4\), la primera superficie que toca el rayo desde el origen es la esfera, así que:</p>

<p>\[ a(\phi) = 2\cos\phi \]</p>

<p>Para \(\pi/4 \le \phi \le \pi/2\), el rayo encuentra primero el paraboloide, entonces:</p>

<p>\[ a(\phi) = \frac{\cos\phi}{\sin^2 \phi} \]</p>

<p>Entonces \(a(\phi)\) cumple dos roles:</p>
<ul>
  <li>Es el límite superior de integración en la integral sobre \(\rho\).</li>
  <li>Es una función de \(\phi\), es decir, un argumento que depende del ángulo polar.</li>
</ul>


<p>
\[
\boxed{
\begin{aligned}
V = \int_{\theta=0}^{2\pi} \Bigg(
& \int_{\phi=0}^{\pi/4} \int_{\rho=0}^{2\cos\phi} \rho^2 \sin\phi \, d\rho \, d\phi \\
& + \int_{\phi=\pi/4}^{\pi/2} \int_{\rho=0}^{\frac{\cos\phi}{\sin^2\phi}} \rho^2 \sin\phi \, d\rho \, d\phi
\Bigg) d\theta.
\end{aligned}
}
\]
</p>



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
