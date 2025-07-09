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
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'divisiones') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'cero' || $respuesta_2 === '0') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'bq') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'gcd(b,r)') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'b') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'r') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'mismo') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'a-bq') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'a') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'cero' || $respuesta_10 === '0') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'residuo') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === '2') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'x:=a') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === 'y:=b') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'whiley≠0') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     $respuesta_16_dos = str_replace('',' ', $respuesta_16);
     if ($respuesta_16_dos === 'xmody') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16_dos === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === 'x:=y') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === 'y:=r') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'x') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'y') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    $respuesta_21_dos = str_replace('',' ', $respuesta_21);
    
    if ($respuesta_21_dos === 'xmody') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21_dos === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'residuo') {  
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'x') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === '0' || $respuesta_24 === 'cero') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'x') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'logb') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   $respuesta_27_dos = str_replace('',' ', $respuesta_27);

   if ($respuesta_27_dos === 'sa+tb') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27_dos === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === '6') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === '14') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   $respuesta_30_dos = str_replace('',' ', $respuesta_30);
   if ($respuesta_30_dos === 'sa+tb') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30_dos === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'coeficientes') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'identidad') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'dos' || $respuesta_33 === '2') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'atras') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'extendido') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === '1') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === '0') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

 $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === '0') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

 $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === '1') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39 === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === 's_n a+t_nb') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40 === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

 $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
if ($respuesta_41 === '198') { 
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
if ($respuesta_43 === '54') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43 === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}

 $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
if ($respuesta_44 === '54') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44 === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

 $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
if ($respuesta_45 === '3') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45 === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

 $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === '36') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46 === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

 $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === '36') { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47 === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}

 $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
if ($respuesta_48 === '1') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48 === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

 $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === '18') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === '18') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === '2') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === '0') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === '54') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === '1') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === '36') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === '198') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === '3') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === '54') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === '4') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === '54') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === '1') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === '198') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'semejantes') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === '1') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === '0') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === '0') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === '1') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === '1') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === '3') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === '1') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === '2') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'maximo') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'unica') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

    $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
    $respuesta_74_dos = str_replace('',' ', $respuesta_74);

    if ($respuesta_74_dos === 'sa+tb') { 
        $verificar_74 = "correcto";
    } elseif ($respuesta_74_dos === '') {
        $verificar_74 = '';
    } else {
    $verificar_74 = "incorrecto";
    }

    $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
    $respuesta_75_dos = str_replace('',' ', $respuesta_75);

if ($respuesta_75_dos === 'sac+tbc=c') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75_dos === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
 $respuesta_76_dos = str_replace('',' ', $respuesta_76);

if ($respuesta_76_dos === 'sac+tbc') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76_dos === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'p') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'puede') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'primo') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'ningun') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'divide') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'multiplicar') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'dividir') { 
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
    height: 415vh;
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
<div class="seccion izquierda">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <p>Ahora describimos cómo funciona el algoritmo de Euclides en generalidad. Utilizaremos 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="9">     
    sucesivas para reducir el problema de encontrar el máximo común divisor de dos enteros positivos al 
    mismo problema con enteros más pequeños, hasta que uno de los enteros sea 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="9">  
    .</p>

    <p>El algoritmo de Euclides se basa en el siguiente resultado sobre los máximos comunes divisores y el 
    algoritmo de división.</p>

    <p><strong>LEMMA 1</strong> Sea \(a = \)
     <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="2">
    + \(r\), donde \(a\), \(b\), \(q\) y \(r\) son enteros. Entonces, 
    \(\gcd(a, b) = \)
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="6">
    .</p>

    <p><strong>Prueba:</strong> Si podemos demostrar que los divisores comunes de \(a\) y \(b\) son los mismos 
    que los divisores comunes de 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="2">
     y 
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="2">
     , habremos demostrado que \(\gcd(a, b) =\)
     <input type="text"  value="<?php echo $respuesta_4; ?>" size="6" readonly>
    , porque 
    ambos pares deben tener el 
     <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="6">
      máximo común divisor.</p>

    <p>Supongamos que \(d\) divide tanto a \(a\) como a \(b\). Entonces, se sigue que \(d\) también divide 
     <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="6">
    \(  = r\) (por el Teorema 1 de la Sección 4.1). Por lo tanto, cualquier divisor común de \(a\) y \(b\) 
    también es un divisor común de \(b\) y \(r\).</p>

    <p>Del mismo modo, supongamos que \(d\) divide tanto a \(b\) como a \(r\). Entonces, \(d\) también divide 
    \(bq + r = a\). Por lo tanto, cualquier divisor común de \(b\) y \(r\) también es un divisor 
    común de \(a\) y \(b\).</p>

    <p>Consecuentemente, \(\gcd(a, b) =  \)
    <input type="text"  value="<?php echo $respuesta_4; ?>" size="6" readonly>    
    .</p>

     <button onmousedown="mostrarImagen()" onmouseup="ocultarImagen()">Explicacion</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada" src="../../../../img/euclides_bien.png" style="display: none; max-width: 100%" width="560">

    <script>
        function mostrarImagen() {
        var imagenMostrada2 = document.getElementById('imagenMostrada');

        // Mostrar la imagen
        imagenMostrada.style.display = 'block';
        }

        function ocultarImagen() {
        var imagenMostrada = document.getElementById('imagenMostrada');

        // Ocultar la imagen al soltar el botón
        imagenMostrada.style.display = 'none';
        }
    </script>

     <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Conjetura</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../../../img/euclides_bien_dos.png" style="display: none; max-width: 100%" width="460">

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
    
    <hr>    

    <p>Supongamos que \(a\) y \(b\) son enteros positivos con
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="6">    
    \( \geq b\). Sea \(r_0 = a\) y \(r_1 = b\). 
    Cuando aplicamos sucesivamente el algoritmo de división, obtenemos:</p>

    <p>
    \[
    r_0 = r_1 q_1 + r_2 \quad 0 \leq r_2 < r_1,
    \]
    </p>
 
    \[
    r_1 = r_2 q_2 + r_3 \quad 0 \leq r_3 < r_2,
    \]

 
    \[
    \vdots
    \]

    \[
    r_{n-2} = r_{n-1} q_{n-1} + r_n \quad 0 \leq r_n < r_{n-1},
    \]


    \[
    r_{n-1} = r_n q_n.
    \]
    </p>

    <p>Eventualmente, ocurre un residuo 
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="6">       
     en esta secuencia de divisiones sucesivas, porque la secuencia 
    de restos \(a = r_0 > r_1 > r_2 > \dots \geq 0\) no puede contener más de \(a\) términos. Además, se 
    sigue del Lema 1 que:</p>

    <p>
    \[
    \gcd(a, b) = \gcd(r_0, r_1) = \gcd(r_1, r_2) = \dots = \gcd(r_{n-2}, r_{n-1}) = \gcd(r_{n-1}, r_n) = \gcd(r_n, 0) = r_n.
    \]
    </p>

    <p>Por lo tanto, el máximo común divisor es el último 
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="6">     
     no nulo en la secuencia de divisiones.</p>

       <h4>Ejemplo 16</h4>
    <p>Encuentra el máximo común divisor de 414 y 662 usando el algoritmo de Euclides.</p>

    <p><strong>Solución:</strong> El uso sucesivo del algoritmo de división da:</p>

    <p>
    \[
    662 = 414 \cdot 1 + 248
    \]
    </p>

    <p>
    \[
    414 = 248 \cdot 1 + 166 
    \]
    </p>

    <p>
    \[
    248 = 166 \cdot 1 + 82
    \]
    </p>

    <p>
    \[
    166 = 82 \cdot 2 + 2
    \]
    </p>

    <p>
    \[
    82 = 2 \cdot 41.
    \]
    </p>

    <p>Por lo tanto, \(\gcd(414, 662) = \)
        <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="6">        
    , porque 
        <input type="text"  value="<?php echo $respuesta_12; ?>" size="6" readonly>    
    es el último 
      <input type="text" value="<?php echo $respuesta_11; ?>" size="6" readonly>  
    no nulo.</p>

    <p>Podemos resumir estos pasos en forma tabular:</p>

    <table>
    <tr>
    <th>j</th>
    <th>r<sub>j</sub></th>
    <th>r<sub>j+1</sub></th>
    <th>q<sub>j+1</sub></th>
    <th>r<sub>j+2</sub></th>
    </tr>
    <tr>
    <td>0</td>
    <td>662</td>
    <td>414</td>
    <td>1</td>
    <td>248</td>
    </tr>
    <tr>
    <td>1</td>
    <td>414</td>
    <td>248</td>
    <td>1</td>
    <td>166</td>
    </tr>
    <tr>
    <td>2</td>
    <td>248</td>
    <td>166</td>
    <td>1</td>
    <td>82</td>
    </tr>
    <tr>
    <td>3</td>
    <td>166</td>
    <td>82</td>
    <td>2</td>
    <td>2</td>
    </tr>
    <tr>
    <td>4</td>
    <td>82</td>
    <td>2</td>
    <td>41</td>
    <td>0</td>
    </tr>
    </table>


     <h4>Algoritmo 1: El algoritmo de Euclides</h4>
<p>
    <strong>posibles usos: ≥ > < ≤ = ≠ ≡</strong>
</p>
<pre>
procedure gcd(a, b: positive integers)
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="6"> 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="6"> 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="6"> 
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="6"> 
        r := <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="6"> 
        <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="6"> 
        <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="6"> 
    return <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="2"> {gcd(a, b) es <input type="text"  value="<?php echo $respuesta_19; ?>" size="2" readonly>}
</pre>

  <button onmousedown="mostrarImagen3()" onmouseup="ocultarImagen3()">recursiva,scala</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada3" src="../../../../img/gcd_scala.png" style="display: none; max-width: 100%" width="560">

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
 
    <p>En el Algoritmo 1, los valores iniciales de \(x\) y \(y\) son \(a\) y \(b\), respectivamente. En cada 
    etapa del procedimiento, \(x\) es reemplazado por 
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="2">
    , y 
    <input type="text"  value="<?php echo $respuesta_20; ?>" size="2" readonly>
    es reemplazado por 
    <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="2">
    , que es 
    el 
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="6">
    residuo cuando 
    <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="2">
    se divide entre \(y\). 
    . El algoritmo 
    termina cuando \(y = \)
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="2">
    , y el valor de 
     <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="2">
    en ese punto, el último residuo no nulo en el procedimiento, 
    es el máximo común divisor de \(a\) y \(b\).</p>

    <p>Estudiaremos la complejidad temporal del algoritmo de Euclides en la Sección 5.3, donde mostraremos que el 
    número de divisiones requeridas para encontrar el máximo común divisor de \(a\) y \(b\), donde \(a \geq b\), 
    es \(O(\)
         <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="2">
    \()\).</p>


    <h3>4.3.8  Mcd como combinaciones lineales</h3>

    <p>Un resultado importante que utilizaremos a lo largo del resto de esta sección es que el máximo común divisor de dos 
    enteros \(a\) y \(b\) puede expresarse en la forma:</p>
    <p>
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">
 
    donde \(s\) y \(t\) son enteros. En otras palabras, \(\gcd(a, b)\) puede expresarse como una combinación lineal 
    con coeficientes enteros de \(a\) y \(b\). Por ejemplo, \(\gcd(6, 14) = 2\), y \(2 = (-2) \cdot   \)
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="8">
    \(+ 1 \cdot  \)
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8">
    .
    
    Enunciamos este hecho como el Teorema 6.
    </p>

    <h4>TEOREMA 6: El Teorema de Bézout</h4>
    <p>Si \(a\) y \(b\) son enteros positivos, entonces existen enteros \(s\) y \(t\) tales que:</p>
    <p>
    \(
    \gcd(a, b) =     \)
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="8">
    </p>

    <h4>Definición 6</h4>
    <p>Si \(a\) y \(b\) son enteros positivos, entonces los enteros \(s\) y \(t\) tales que 
    \(\gcd(a, b) =  \) 
     <input type="text"  value="<?php echo $respuesta_30; ?>" size="8" readonly>
    se llaman 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8">
     de Bézout de \(a\) y \(b\) (después de Étienne Bézout, 
    un matemático francés del siglo XVIII). Además, la ecuación \(\gcd(a, b) =  \) 
    <input type="text"  value="<?php echo $respuesta_30; ?>" size="8" readonly>
    se llama la 
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">
     de Bézout.</p>

    <p>No daremos una prueba formal del Teorema 6 aquí (ver Ejercicio 36 en la Sección 5.2 y [Ro10] para las pruebas). 
    Presentaremos 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="8">
    métodos diferentes que se pueden utilizar para encontrar una combinación lineal de dos enteros 
    igual a su máximo común divisor. (En esta sección, supondremos que una combinación lineal tiene 
    coeficientes enteros.)</p>

    <p>El primer método consiste en trabajar hacia 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8">    
     a través de las divisiones del algoritmo de Euclides, por 
    lo que este método requiere un pase hacia adelante y un pase hacia atrás a través de los pasos del algoritmo 
    de Euclides. Ilustraremos cómo funciona este método con un ejemplo. La principal ventaja del segundo método, 
    conocido como el algoritmo 
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
      de Euclides, es que utiliza un solo pase a través de los pasos del algoritmo 
    de Euclides para encontrar los coeficientes de Bézout de \(a\) y \(b\), a diferencia del primer método, que 
    utiliza dos pases. Para ejecutar este algoritmo 
     <input type="text" value="<?php echo $respuesta_35; ?>" size="8" readonly>
     de Euclides, establecemos \(s_0 = \)
     <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">
     , \(s_1 = \)
     <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="8">
     , 
    \(t_0 = \)
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="8">
    y \(t_1 = \)
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="8">
    , y luego dejamos que:</p>
    <p>
    \[
    s_j = s_{j-2} - q_{j-1} s_{j-1} \quad \text{y} \quad t_j = t_{j-2} - q_{j-1} t_{j-1}
    \]
    </p>
    <p>para \(j = 2, 3, \ldots, n\), donde los \(q_j\) son los cocientes en las divisiones usadas cuando el 
    algoritmo de Euclides encuentra \(\gcd(a, b)\), como se muestra en el texto. Podemos probar por inducción 
    fuerte (ver Ejercicio 44 en la Sección 5.2, o ver [Ro10]) que:</p>
    <p>
    \(
    \gcd(a, b) = 
    \)
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="8">.
    </p>
     
    </form>
</div>




<div class="seccion derecha">
    <form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
     <h4>Ejemplo 17</h4>
    <p>Expresa \(\gcd(252, 198) = 18\) como una combinación lineal de 252 y 198 trabajando hacia atrás a 
    través de los pasos del algoritmo de Euclides.</p>

    <p><strong>Solución:</strong> Para demostrar que \(\gcd(252, 198) = 18\), el algoritmo de Euclides utiliza 
    estas divisiones:</p>
    <p>
    \(
    252 = \)
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8">
      \( \cdot \)
       <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="8">
      \( + \) 
       <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="8">
    <br><br>
    \(
    198 = \) <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8">
     \( \cdot \) 
      <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="8">
     \( + \) 
     <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="8">
      
     
    <br><br>
    \(
    54 = \)
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="8">
    \( \cdot \) 
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="8">
    \( + \)  
    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="8">

    <br><br>
    \(
    36 = \)
     <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="8">
    \( \cdot \)   
     <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8">
    \( + \)
     <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="8">
     .
     
    </p>

    <p>Resumimos estos pasos en forma tabular:</p>
    <table border="1">
    <tr>
    <th>j</th>
    <th>\(r_j\)</th>
    <th>\(r_{j+1}\)</th>
    <th>\(q_{j+1}\)</th>
    <th>\(r_{j+2}\)</th>
    </tr>
    <tr>
    <td>0</td>
    <td>252</td>
    <td>198</td>
    <td>1</td>
    <td>54</td>
    </tr>
    <tr>
    <td>1</td>
    <td>198</td>
    <td>54</td>
    <td>3</td>
    <td>36</td>
    </tr>
    <tr>
    <td>2</td>
    <td>54</td>
    <td>36</td>
    <td>1</td>
    <td>18</td>
    </tr>
    <tr>
    <td>3</td>
    <td>36</td>
    <td>18</td>
    <td>2</td>
    <td>0</td>
    </tr>
    </table>

    <p>Usando la penúltima división (la tercera división), podemos expresar \(\gcd(252, 198) = 18\) como una 
    combinación lineal de 54 y 36. Encontramos que:</p>
    <p>
    \(
    18 = \)
     <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="8">
      - 
    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="8">
      \( \cdot\) 
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="8">
     .
     
    </p>
    <p>La segunda división nos dice que:</p>
    <p>
     \(
    36 = \)
     <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="8">
      - 
     <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="8">
        \( \cdot \) 
     <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="8">
     
    </p>
    <p>Sustituyendo esta expresión para 36 en la ecuación anterior, podemos expresar 18 como una 
    combinación lineal de 54 y 198. Tenemos:</p>
    <p>
    \(
    18 = 54 - 1 \cdot 36 = 54 - 1 \cdot (198 - 3 \cdot 54) = \)
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="1">
        \( \cdot\) 
     <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="1">
      - 
     <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="1">
       \( \cdot\)
     <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="1">
     .
     
    </p>
    <p>La primera división nos dice que:</p>
    <p>
    \[
    54 = 252 - 1 \cdot 198.
    \]
    </p>
    <p>Sustituyendo esta expresión para 54 en la ecuación anterior, podemos expresar 18 como una combinación 
    lineal de 252 y 198. Concluimos que:</p>
    <p>
    \[
    18 = 4 \cdot (252 - 1 \cdot 198) - 1 \cdot 198 = 4 \cdot 252 - 5 \cdot 198,
    \]
    completando la solución.</p>

    <p>El siguiente ejemplo muestra cómo resolver el mismo problema planteado en el ejemplo anterior usando el 
    algoritmo extendido de Euclides.</p>
    
    <p>la clave es jugar con los terminos  
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="8"></p> 
 

    <button onmousedown="mostrarImagen4()" onmouseup="ocultarImagen4()">Explicacion</button>
    <!-- Elemento para mostrar la imagen -->

 

    <img id="imagenMostrada4" src="../../../../img/semejantes.png" style="display: none; max-width: 100%" width="560">

    <script>
        function mostrarImagen4() {
        var imagenMostrada4 = document.getElementById('imagenMostrada4');

        // Mostrar la imagen
        imagenMostrada4.style.display = 'block';
        }

        function ocultarImagen4() {
        var imagenMostrada4 = document.getElementById('imagenMostrada4');

        // Ocultar la imagen al soltar el botón
        imagenMostrada4.style.display = 'none';
        }
    </script>
 



      <h3>Ejemplo 18</h3>
    <p>Expresa \(\gcd(252, 198) = 18\) como una combinación lineal de 252 y 198 utilizando el 
    algoritmo extendido de Euclides.</p>

    <p><strong>Solución:</strong> El Ejemplo 17 muestra los pasos que utiliza el algoritmo de Euclides 
    para encontrar \(\gcd(252, 198) = 18\). Los cocientes son \(q_1 = \)
    <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="1">
    , \(q_2 = \)
    <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="1">
    , \(q_3 = \)
    <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="1">
    , y 
    \(q_4 = \)
    <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="1">
    . Los coeficientes de Bézout deseados son los valores de \(s_4\) y \(t_4\) generados por 
    el algoritmo extendido de Euclides, donde \(s_0 = \)
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="1">
    , \(s_1 = \)
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="1">
    , \(t_0 = \)
    <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="1">
     y \(t_1 = \)
     <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="1">
     , y entonces:</p>

    <p>
    \[
    s_j = s_{j-2} - q_{j-1} s_{j-1} \quad \text{y} \quad t_j = t_{j-2} - q_{j-1} t_{j-1}
    \]
    para \(j = 2, 3, 4\). Encontramos que:
    </p>

    <p>
    \[
    s_2 = s_0 - s_1 q_1 = 1 - 0 \cdot 1 = 1, \quad t_2 = t_0 - t_1 q_1 = 0 - 1 \cdot 1 = -1,
    \]
    </p>
    <p>
    \[
    s_3 = s_1 - s_2 q_2 = 0 - 1 \cdot 3 = -3, \quad t_3 = t_1 - t_2 q_2 = 1 - (-1) \cdot 3 = 4,
    \]
    </p>
    <p>
    \[
    s_4 = s_2 - s_3 q_3 = 1 - (-3) \cdot 1 = 4, \quad t_4 = t_2 - t_3 q_3 = -1 - 4 \cdot 1 = -5.
    \]
    </p>

    <p>Como \(s_4 = 4\) y \(t_4 = -5\), vemos que \(18 = \gcd(252, 198) = 4 \cdot 252 - 5 \cdot 198\).</p>





    <p>Usaremos el Teorema 6 para desarrollar varios resultados útiles. Uno de nuestros objetivos será probar la 
    parte del teorema fundamental de la aritmética que afirma que un número entero positivo tiene como 
    <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="8">
     una 
    factorización prima. Demostraremos que si un número entero positivo tiene una factorización en primos, donde 
    los primos se escriben en orden no decreciente, entonces esta factorización es 
    <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="8">
     .</p>

    <p>Primero, necesitamos desarrollar algunos resultados sobre divisibilidad.</p>

    <h4>LEMMA 2</h4>
    <p>Si \(a\), \(b\) y \(c\) son enteros positivos tales que \(\gcd(a, b) = 1\) y \(a \mid bc\), 
    entonces \(a \mid c\).</p>

    <p><strong>Prueba:</strong> Debido a que \(\gcd(a, b) = 1\), por el teorema de Bézout existen enteros 
    \(s\) y \(t\) tales que:</p>
    <p>
     
    <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="8">
    \( = 1.
    \)
    </p>
    <p>Multiplicando ambos lados de esta ecuación por \(c\), obtenemos:</p>
    <p>
     
    <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="8">
    \(.
    \)
    </p>
    <p>Ahora podemos usar el Teorema 1 de la Sección 4.1 para demostrar que \(a \mid c\). Por la parte (ii) de ese 
    teorema, \(a \mid tbc\). Debido a que \(a \mid sac\) y \(a \mid tbc\), por la parte (i) de ese teorema, 
    concluimos que \(a\) divide
    <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="8">
    . Dado que
    <input type="text"  value="<?php echo $respuesta_76; ?>" size="8" readonly>
    \(  = c\), concluimos que \(a \mid c\), 
    completando la prueba.</p>

    <p>Usaremos la siguiente generalización del Lema 2 en la prueba de unicidad de las factorizaciones primarias. 
    (La prueba del Lema 3 se deja como Ejercicio 64 en la Sección 5.1, ya que puede llevarse a cabo más fácilmente 
    usando el método de inducción matemática, cubierto en esa sección.)</p>


    
    <h4>LEMMA 3</h4>
    <p>Si \(p\) es un primo y \(p \mid a_1 a_2 \cdots a_n\), donde cada \(a_i\) es un entero, entonces 
    <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="1">
    \( \mid a_i\) para algún \(i\).</p>

    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Dato</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">

    <p>Ahora podemos demostrar que una factorización de un entero en primos es única. Es decir, mostraremos que todo 
    entero puede escribirse como el producto de primos en orden no decreciente de, como máximo, una única manera. 
    Esta es una parte del teorema fundamental de la aritmética. Demostraremos la otra parte, que todo número entero 
    tiene una factorización en primos, en la Sección 5.2.</p>
    </div>
  

    <h4>Prueba (de la unicidad de la factorización prima de un número entero positivo):</h4>
        <button onmousedown="mostrarImagen5()" onmouseup="ocultarImagen5()">Explicacion</button>
    <!-- Elemento para mostrar la imagen -->

 

    <img id="imagenMostrada5" src="../../../../img/dividir.png" style="display: none; max-width: 100%" width="560">

    <script>
        function mostrarImagen5() {
        var imagenMostrada5 = document.getElementById('imagenMostrada5');

        // Mostrar la imagen
        imagenMostrada5.style.display = 'block';
        }

        function ocultarImagen5() {
        var imagenMostrada5 = document.getElementById('imagenMostrada5');

        // Ocultar la imagen al soltar el botón
        imagenMostrada5.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen6()" onmouseup="ocultarImagen6()">Explicacion</button>
    <!-- Elemento para mostrar la imagen -->

 

    <img id="imagenMostrada6" src="../../../../img/dividir_dos.png" style="display: none; max-width: 100%" width="560">

    <script>
        function mostrarImagen6() {
        var imagenMostrada6 = document.getElementById('imagenMostrada6');

        // Mostrar la imagen
        imagenMostrada6.style.display = 'block';
        }

        function ocultarImagen6() {
        var imagenMostrada6 = document.getElementById('imagenMostrada6');

        // Ocultar la imagen al soltar el botón
        imagenMostrada6.style.display = 'none';
        }
    </script>
     
    <p>Usaremos una prueba por contradicción. Supongamos que el número entero positivo \(n\) 
    <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="8">    
      escribirse como 
    el producto de primos de dos maneras diferentes, es decir, \(n = p_1 p_2 \cdots p_s\) y \(n = q_1 q_2 \cdots q_t\), 
    donde cada \(p_i\) y \(q_j\) es 
     <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="8">   
      tal que \(p_1 \leq p_2 \leq \cdots \leq p_s\) y 
    \(q_1 \leq q_2 \leq \cdots \leq q_t\).</p>
    <p>Cuando eliminamos todos los primos comunes de las dos factorizaciones, tenemos:</p>
    <p>
    \[
    p_{i_1} p_{i_2} \cdots p_{i_u} = q_{j_1} q_{j_2} \cdots q_{j_v},
    \]
    </p>
    <p>donde ningún primo ocurre en ambos lados de esta ecuación y \(u\) y \(v\) son enteros positivos. 
    Por el Lema 3, se sigue que \(p_{i_1}\) divide \(q_{j_k}\) para algún \(k\). Dado que 
    <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="8"> 
    primo 
    <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="8"> 
    a otro primo, esto es imposible. En consecuencia, puede haber como máximo una factorización de \(n\) 
    en primos en orden no decreciente.</p>

    <p>El Lema 2 también puede usarse para probar un resultado sobre dividir ambos lados de una congruencia por 
    el mismo entero. Hemos demostrado (Teorema 5 en la Sección 4.1) que podemos 
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="8"> 
    ambos lados de una 
    congruencia por el mismo entero. Sin embargo, 
    <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="8"> 
    ambos lados de una congruencia por un entero no siempre 
    produce una congruencia válida, como muestra el Ejemplo 19.</p>
 
    
 
     
    </form>
</div>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="quinto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
