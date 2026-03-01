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
 
 
 
            // === RESPUESTAS VALIDADAS (1-61) ===
        $respuesta_1 = 'alfabeto';
        $respuesta_2 = 'conjunto finito no vacio cuyos elementos se llaman simbolos';
        $respuesta_3 = '\Sigma';
        $respuesta_4 = 'cadena';
        $respuesta_5 = 'palabra';
        $respuesta_6 = 'alfabeto';
        $respuesta_7 = 'sucesion';
        $respuesta_8 = 'secuencia';
        $respuesta_9 = 'finita';
        $respuesta_10 = 'elementos';
        $respuesta_11 = 'no tiene simbolo';

        $respuesta_12 = '\neq';
        $respuesta_13 = 'significativo';
        $respuesta_14 = 'cadenas';
        $respuesta_15 = 'sucesiones';
        $respuesta_16 = 'conjuntos secuencialmente ordenados';
        $respuesta_17 = 'alfabeto binario';
        $respuesta_18 = 'idioma castellano';
        $respuesta_19 = 'caracteres ASCII';
        $respuesta_20 = 'todas las cadenas';
        $respuesta_21 = 'incluyendo';
        $respuesta_22 = 'cadena vacia';

        $respuesta_23 = '\Sigma^*';
        $respuesta_24 = 'diferentes';
        $respuesta_25 = 'finito';
        $respuesta_26 = 'infinito';
        $respuesta_27 = 'cadena vacia';
        $respuesta_28 = 'u';
        $respuesta_29 = 'u';
        $respuesta_30 = 'continuacion';
        $respuesta_31 = 'v';
        $respuesta_32 = 'u';
        $respuesta_33 = 'u';

        $respuesta_34 = 'va';
        $respuesta_35 = 'asociativa';
        $respuesta_36 = '\lambda';
        $respuesta_37 = '0';
        $respuesta_38 = 'n';
        $respuesta_39 = '\lambda';
        $respuesta_40 = 'a_n \cdots a_2 a_1';
        $respuesta_41 = 'v';
        $respuesta_42 = 'u';
        $respuesta_43 = 'x,y';
        $respuesta_44 = 'u=xvy';

        $respuesta_45 = 'x';
        $respuesta_46 = 'y';
        $respuesta_47 = '\lambda';
        $respuesta_48 = 'subcadena';
        $respuesta_49 = 'cualquier cadena';
        $respuesta_50 = 'subcadena';
        $respuesta_51 = 'si misma';
        $respuesta_52 = 'vw';
        $respuesta_53 = 'prefijo propio';
        $respuesta_54 = 'wv';
        $respuesta_55 = 'sufijo propio';

        $respuesta_56 = 'prefijo';
        $respuesta_57 = 'sufijo';
        $respuesta_58 = 'subconjunto';
        $respuesta_59 = '\Sigma^*';
        $respuesta_60 = 'word';
        $respuesta_61 = 'L \subseteq \Sigma^*';
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
   if ($respuesta_1 === 'alfabeto') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'conjunto finito no vacio cuyos elementos se llaman simbolos') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === '\Sigma') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'cadena') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'palabra') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'alfabeto') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'sucesion') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'secuencia') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'finita') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'elementos') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'no tiene simbolo') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === '\neq') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'significativo') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'cadenas') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'sucesiones') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'conjuntos secuencialmente ordenados') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'alfabeto binario') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'idioma castellano') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'caracteres ASCII') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'todas las cadenas') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'incluyendo') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'cadena vacia') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === '\Sigma^*') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'diferentes') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'finito') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'infinito') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'cadena vacia') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'u') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'u') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'continuacion') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'v') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'u') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'u') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'va') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'asociativa') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === '\lambda') { 
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
    if ($respuesta_38 === 'n') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === '\lambda') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'a_n \cdots a_2 a_1') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'v') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'u') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'x,y') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'u=xvy') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'x') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'y') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === '\lambda') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'subcadena') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'cualquier cadena') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'subcadena') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'si misma') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'vw') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'prefijo propio') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'wv') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'sufijo propio') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'prefijo') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'sufijo') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'subconjunto') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === '\Sigma^*') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'word') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'L \subseteq \Sigma^*') { 
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
    var f = document.getElementById('respuesta_3').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_12').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula2').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_23').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula3').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    var f = document.getElementById('respuesta_36').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula4').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_39').value || " ";
    var g = document.getElementById('respuesta_40').value || " ";

    var formula = `
u^R =
\\begin{cases}
${f}, & \\text{si } u = \\lambda, \\\\
${g}, & \\text{si } u = a_1 a_2 \\cdots a_n.
\\end{cases}
`;

    document.getElementById('formula5').innerHTML = `$$${formula}$$`;

    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula6() {
    var f = document.getElementById('respuesta_47').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula6').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula7() {
    var f = document.getElementById('respuesta_59').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula7').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_61').value || "";
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

    <h2>1.1. Alfabetos y cadenas</h2>

    <p>
        Un 
        <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">
          es un 
        <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="56">
         . 
        Denotamos un alfabeto arbitrario con la letra 
            <span id="formula">
        \(   \)
    </span> 
 
    <input type="text" name="respuesta_3" size="10" id="respuesta_3" oninput="actualizarFormula()" 
    value="<?php echo $respuesta_3?>" size="15" >
 .
    </p>

    <p>
        Una 
        <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">
         o 
        <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
        (<input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="8">)
           sobre un 
        <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">
          \( \Sigma \) es cualquier
        <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">
          (o 
        <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">
         ) 
        <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="8">
          de 
        <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">
          de \( \Sigma \).
        Admitimos la existencia de una única cadena que 
        <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="18">
        ,
        la cual se denomina <strong>cadena vacía</strong> y se denota con
        \( \lambda \).
    </p>

    <p>
        La cadena vacía desempeña, en la teoría de la computación,
        un papel similar al del conjunto vacío \( \varnothing \)
        en la teoría de conjuntos.
    </p>

    <div class="example">
        <p><strong>Ejemplo</strong></p>
        <p>
            Sea \( \Sigma = \{a, b\} \) el alfabeto que consta de los dos símbolos
            <em>a</em> y <em>b</em>. Las siguientes son cadenas sobre \( \Sigma \):
        </p>
        <ul>
            <li>aba</li>
            <li>ababaaa</li>
            <li>aaaab</li>
        </ul>
    </div>

    
<p>
Obsérvese que <i>aba</i> 
            <span id="formula2">
        \(   \)
    </span> 
 
    <input type="text" name="respuesta_12" size="4" id="respuesta_12" oninput="actualizarFormula2()" 
    value="<?php echo $respuesta_12?>" size="4" >
 <i>aab</i>. El orden de los símbolos en una cadena es
 <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="9">
  ya que las 
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">
  se definen como 
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">
 , es decir,
<input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="34">
 .
</p>

<div class="ejemplo">
    <span class="label">Ejemplo</span>
    El alfabeto \( \Sigma = \{0,1\} \) se conoce como <i>
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="9">    
     </i>.
    Las cadenas sobre este alfabeto son secuencias finitas de ceros y unos,
    llamadas <i>secuencias binarias</i>, tales como
    <div class="cadenas">
        001<br>
        1011<br>
        001000001
    </div>
</div>

<div class="ejemplo">
    <span class="label">Ejemplo</span>
    \( \Sigma = \{a, b, c, \ldots, x, y, z, A, B, C, \ldots, X, Y, Z\} \),
    el alfabeto del 
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="9"> 
     . Las palabras oficiales del castellano
    (las que aparecen en el diccionario DRA) son cadenas sobre \( \Sigma \).
</div>

<div class="ejemplo">
    <span class="label">Ejemplo</span>
    El alfabeto utilizado por muchos de los llamados <i>lenguajes de programación</i>
    (como Pascal o C) es el conjunto de 
    <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="9"> 
    (o un subconjunto de él) que incluye, por lo general, las letras mayúsculas
    y minúsculas, los símbolos de puntuación y los símbolos matemáticos
    disponibles en los teclados estándares.
</div>

<p>
El conjunto de 
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="9"> 
  sobre un alfabeto \( \Sigma \),
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="9"> 
  la 
<input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="9"> 
 , se denota por 
             <span id="formula3">
        \(   \)
    </span> 
 
    <input type="text" name="respuesta_23" size="4" id="respuesta_23" oninput="actualizarFormula3()" 
    value="<?php echo $respuesta_23?>" size="4" >
 .
</p>


   <button type="submit">Enviar</button> 
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_60 ?>
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
    <?php echo $verificar_19 ?>
    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>
    <hr>
<div class="ejemplo">
    <span class="label">Ejemplo</span>
    Sea \( \Sigma = \{a, b, c\} \), entonces
    <p>
        \( \Sigma^* = \{\lambda, a, b, c, aa, ab, ac, ba, bb, bc, ca, cb, cc,
        aaa, aab, abc, baa, \ldots \} \)
    </p>
</div>



<div class="nota">
    <p>
        ✎ Algunos autores denotan la cadena vacía con la letra griega \( \varepsilon \).
        Preferimos denotarla con \( \lambda \) porque tiende a confundirse con el símbolo
        \( \in \) usado para la relación de pertenencia.
    </p>

    <p>
        ✎ Si bien un alfabeto \( \Sigma \) es un conjunto 
        <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">
         ,
        \( \Sigma^* \) es siempre un conjunto 
        <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8">
          (enumerable).
        En el caso más simple, \( \Sigma \) contiene solo un símbolo,
        \( \Sigma = \{a\} \), y
        \( \Sigma^* = \{\lambda, a, aa, aaa, aaaa, \ldots\} \).
    </p>

    <p>
        ✎ Hay que distinguir entre los siguientes cuatro objetos,
        que son todos 
        <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="8">
          entre sí:
        \( \varnothing \), \( \lambda \), \( \{\varnothing\} \) y \( \{\lambda\} \).
    </p>

    <p>
        ✎ La mayor parte de la teoría de la computación se hace con referencia
        a un alfabeto \( \Sigma \) fijo (pero arbitrario).
    </p>
</div>

<h2>1.2. Concatenación de cadenas</h2>

<p>
Dado un alfabeto \( \Sigma \) y dos cadenas \( u, v \in \Sigma^* \),
la <b>concatenación</b> de \( u \) y \( v \) se denota como
\( u \cdot v \) o simplemente \( uv \) y se define descriptivamente así:
</p>

<ol>
    <li>
        Si \( v = \lambda \), entonces
        \( u \cdot \lambda = \lambda \cdot u = u \).
        Es decir, la concatenación de cualquier cadena \( u \)
        con la 
        <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">
         , a izquierda o a derecha, es igual a 
        <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="8">
         .
    </li>

    <li>
        Si \( u = a_1 a_2 \cdots a_n \),
        \( v = b_1 b_2 \cdots b_m \), entonces
        <p>
            \( u \cdot v = a_1 a_2 \cdots a_n b_1 b_2 \cdots b_m \).
        </p>
    </li>
</ol>

<p>
Es decir, \( u \cdot v \) es la cadena formada escribiendo los símbolos de
<input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8">
  y a 
<input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="8">
  los símbolos de 
<input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8">
 .
</p>

<p>
La concatenación de cadenas se puede definir inductiva o recursivamente
de la siguiente manera. Si \( u, v \in \Sigma^* \), \( a \in \Sigma \), entonces:
</p>

<ol>
    <li><input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="2">\(  \cdot \lambda = 
    \lambda \cdot \)
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="2">
    \(  = u \).</li>
    <li>\( u \cdot (\)
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="2">    
     ) \( = (u \cdot v)a \).</li>
</ol>

<div class="propiedad">
    <p>
        <b>Propiedad.</b> La concatenación de cadenas es una operación 
        <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
         .
        Es decir, si \( u, v, w \in \Sigma^* \), entonces
    </p>

    <p style="text-align:center;">
        \( (uv)w = u(vw) \).
    </p>
</div>

<div class="demostracion">
    <p>
        <b>Demostración.</b> Se puede hacer escribiendo explícitamente las cadenas
        \( u \), \( v \), \( w \) y usando la definición descriptiva de concatenación.
        También se puede dar una demostración inductiva usando la definición
        recursiva de concatenación (ejercicio opcional). □
    </p>
</div>
    <button type="submit">Enviar</button> 
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
    <hr>
    <h2>1.3. Potencias de una cadena</h2>

<p>
Dada \( u \in \Sigma^* \) y \( n \in \mathbb{N} \), se define (descriptivamente)
\( u^n \) en la siguiente forma
</p>

<div class="formula-centro">
    \( u^0 = \)
                 <span id="formula4">
        \(   \)
    </span> 
 
    <input type="text" name="respuesta_36" size="4" id="respuesta_36" oninput="actualizarFormula4()" 
    value="<?php echo $respuesta_36?>" size="4" >
     ,  
    <br><br>
    \( u^n = \underbrace{uu\cdots u}_{n\text{ veces}}. \)
</div>

<p>
Como ejercicio, el estudiante puede dar una definición recursiva de \( u^n \).
</p>

<h2>1.4. Longitud de una cadena</h2>

<p>
La longitud de una cadena \( u \in \Sigma^* \) se denota \( |u| \) y se define
como el número de símbolos de \( u \) (contando los símbolos repetidos).
Es decir,
</p>

<div class="formula-centro">

<p>
\[
|u| =
\begin{cases}
\quad & \text{si } u = \lambda, \\
\quad & \text{si } u = a_1 a_2 \cdots a_n
\end{cases}
\]
</p>

<div style="margin-left: 40px;">
  <input type="text" name="respuesta_37"
         value="<?php echo $respuesta_37; ?>" size="8">
  <span>si \(u = \lambda\)</span>
  <br><br>
  <input type="text" name="respuesta_38"
         value="<?php echo $respuesta_38; ?>" size="8">
  <span>si \(u = a_1 a_2 \cdots a_n\)</span>
</div>

</div>

<div class="ejemplo">
    <span class="label">Ejemplo</span>
    \( |aba| = 3, \quad |baaa| = 4. \)
</div>

<div class="ejemplo">
    <span class="label">Ejemplo</span>
    Si \( w \in \Sigma^* \), \( n, m \in \mathbb{N} \), demostrar que
    \( |w^{n+m}| = |w^n| + |w^m| \).
    <br>
    Esta no es una propiedad realmente importante (no la usaremos nunca en este
    libro!); la presentamos aquí para enfatizar los conceptos involucrados
    e ilustrar los razonamientos estrictos.
</div>

   <button type="submit">Enviar</button> 
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <hr>


<h2>1.5. Reflexión o inversa de una cadena</h2>

<p>
La reflexión o inversa de una cadena \( u \in \Sigma^* \) se denota \( u^R \)
y se define descriptivamente así:
</p>

 
 
    <span id="formula5">
        \[
u^R =
\begin{cases}
, & \text{si } u = \lambda, \\
 , & \text{si } u = a_1 a_2 \cdots a_n.
\end{cases}
\]
    </span> 
 
    <input type="text" name="respuesta_39" size="4" id="respuesta_39" oninput="actualizarFormula5()" 
    value="<?php echo $respuesta_39?>" size="4" >
 
        <input type="text" name="respuesta_40" size="4" id="respuesta_40" oninput="actualizarFormula5()" 
    value="<?php echo $respuesta_40?>" size="4" >

<p>
De la definición se observa claramente que la reflexión de la reflexión
de una cadena es la misma cadena, es decir,
</p>

<div class="formula-centro">
    \( (u^R)^R = u, \quad \text{para } u \in \Sigma^*. \)
</div>

<div class="nota">
    ✎ Algunos autores escriben \( u^{-1} \) en lugar de \( u^R \)
    para denotar la reflexión de una cadena \( u \).
</div>

<div class="ejercicios">
    <span class="label">Ejercicios de la sección 1.5</span>
    <ol>
        <li>
            Dar una definición recursiva de \( u^R \).
        </li>
        <li>
            Si \( u, v \in \Sigma^* \), demostrar que
            \( (uv)^R = v^R u^R \).
            Generalizar esta propiedad a la concatenación de \( n \) cadenas.
        </li>
    </ol>
</div>
<button type="submit">Enviar</button> 
   <?php echo $verificar_39 ?>
    <?php echo $verificar_40 ?>

</div>




<div class="seccion derecha">
  <h2>1.6. Subcadenas, prefijos y sufijos</h2>

<p>
Una cadena 
<input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8">
  es una <b>subcadena</b> o una <b>subpalabra</b> de
  <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="8">
 
si existen cadenas 
<input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="8">
  tales que 
  <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8">
  .
Nótese que 
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="8">
 o 
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="8">
 pueden ser 
    <span id="formula6">
        \(   \)
    </span> 
 
    <input type="text" name="respuesta_47" size="4" id="respuesta_47" oninput="actualizarFormula6()" 
    value="<?php echo $respuesta_47?>" size="4" >
 
  y, por lo tanto,
la cadena vacía es una 
<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="8">
  de 
<input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="14">
  y toda cadena
es 
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="8">
  de 
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8">
 .
</p>

<p>
Un <b>prefijo</b> de \( u \) es una cadena \( v \) tal que
\( u = \)
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="8">
    para alguna cadena \( w \in \Sigma^* \).
Se dice que \( v \) es un <b>
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="8">    
 </b> si \( v \neq u \).
</p>

<p>
Similarmente, un <b>sufijo</b> de \( u \) es una cadena \( v \) tal que
\( u =   \) 
<input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="8">
para alguna cadena \( w \in \Sigma^* \).
Se dice que \( v \) es un <b>
<input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="8">    
 </b> si \( v \neq u \).
</p>

<p>
Obsérvese que \( \lambda \) es un 
<input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="8">
  y un 
<input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="8">
  de toda cadena \( u \)
ya que \( u\lambda = \lambda u = u \).
Por la misma razón, toda cadena \( u \) es prefijo y sufijo de sí misma.
</p>

<div class="ejemplo">
    <span class="label">Ejemplo</span>
    Sean \( \Sigma = \{a, b, c, d\} \) y \( u = bcbaadb \).
</div>


<!-- Prefijos y Sufijos del ejemplo -->

<div class="dos-columnas">
    <div class="columna">
        <b>Prefijos de \( u \):</b>
        <ul>
            <li>\( \lambda \)</li>
            <li>b</li>
            <li>bc</li>
            <li>bcb</li>
            <li>bcba</li>
            <li>bcb aa</li>
            <li>bcb aad</li>
            <li>bcb aadb</li>
        </ul>
    </div>

    <div class="columna">
        <b>Sufijos de \( u \):</b>
        <ul>
            <li>\( \lambda \)</li>
            <li>b</li>
            <li>db</li>
            <li>adb</li>
            <li>aadb</li>
            <li>baadb</li>
            <li>cbaadb</li>
            <li>bcbaadb</li>
        </ul>
    </div>
</div>

    <button type="submit">Enviar</button>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
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
    <hr>
<h2>1.7. Lenguajes</h2>

<p>
Un <b>lenguaje</b> \( L \) sobre un alfabeto \( \Sigma \) es un 
<input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="8">
  de

    <span id="formula7">
        \(   \)
    </span> 
 
    <input type="text" name="respuesta_59" size="4" id="respuesta_59" oninput="actualizarFormula7()" 
    value="<?php echo $respuesta_59?>" size="9" >

 , es decir,
</p>

 

    <span id="formula8">
        \(   \)
    </span> 
 
    <input type="text" name="respuesta_61" size="4" id="respuesta_61" oninput="actualizarFormula8()" 
    value="<?php echo $respuesta_61?>" size="9" >

<p>
Casos extremos:
</p>

<ul>
    <li>\( L = \varnothing \), lenguaje vacío.</li>
    <li>\( L = \Sigma^* \), lenguaje de todas las cadenas sobre \( \Sigma \).</li>
</ul>

<p>
Todo lenguaje \( L \) satisface
\( \varnothing \subseteq L \subseteq \Sigma^* \),
y puede ser finito o infinito.
Los lenguajes se denotan con letras mayúsculas
\( A, B, C, \ldots, L, M, N, \ldots \).
En la siguiente gráfica se visualizan dos lenguajes \( A \) y \( B \) sobre
\( \Sigma \).
</p>

<div class="diagrama">
    <!-- Diagrama simple estilo libro -->
    <svg viewBox="0 0 500 250">
        <rect x="10" y="10" width="480" height="230"
              fill="none" stroke="black" stroke-width="2"/>
        <text x="440" y="30">\( \Sigma^* \)</text>

        <ellipse cx="180" cy="140" rx="120" ry="70"
                 fill="none" stroke="black"/>
        <text x="110" y="150">A</text>

        <ellipse cx="320" cy="130" rx="120" ry="70"
                 fill="none" stroke="black"/>
        <text x="360" y="140">B</text>
    </svg>
</div>

<div class="ejemplo">
    <span class="label">Ejemplos</span>
    Los siguientes son ejemplos de lenguajes sobre los alfabetos especificados.
</div>

<ul>
    <li>
        \( \Sigma = \{a, b, c\}. \;
        L = \{a, aba, aca\}. \)
    </li>

    <li>
        \( \Sigma = \{a, b, c\}. \;
        L = \{a, aa, aaa, \ldots\} = \{a^n : n \ge 1\}. \)
    </li>

    <li>
        \( \Sigma = \{a, b, c\}. \;
        L = \{\lambda, aa, aba, ab^2a, ab^3a, \ldots\}
        = \{ab^n a : n \ge 0\} \cup \{\lambda\}. \)
    </li>

    <li>
        \( \Sigma = \{a, b, c, \ldots, x, y, z, A, B, C, \ldots, X, Y, Z\}. \;
        L = \{u \in \Sigma^* : u \text{ aparece en el diccionario español DRA}\}. \)
        <br>
        \( L \) es un lenguaje finito.
    </li>

    <li>
        \( \Sigma = \{a, b, c\}. \;
        L = \{u \in \Sigma^* : u \text{ no contiene el símbolo } c\}. \)
        <br>
        Por ejemplo, \( abbaab \in L \) pero \( abbcaa \notin L \).
    </li>

    <li>
        \( \Sigma = \{0,1\}. \;
        L = \) conjunto de todas las secuencias binarias que contienen
        un número impar de unos.
    </li>

    <li>
        \( \Sigma = \{0,1,2,3,4,5,6,7,8,9\}. \)
        El conjunto \( \mathbb{N} \) de los números naturales se puede definir
        como un lenguaje sobre \( \Sigma \), en la siguiente forma:
        <p style="text-align:center;">
            \( \mathbb{N} =
            \{u \in \Sigma^* : u = 0 \text{ ó } 0 \text{ no es un prefijo de } u\}. \)
        </p>
    </li>
</ul>

<p>
Como ejercicio, el estudiante puede definir el conjunto de los enteros
\( \mathbb{Z} = \{\ldots, -2, -1, 0, 1, 2, \ldots\} \)
como un lenguaje sobre un alfabeto adecuado.
</p>

<div class="nota">
    ✎ El concepto abstracto de “lenguaje”, tal como se ha definido, no es
    exactamente la misma noción utilizada en la expresión “lenguaje de
    programación”. Para precisar la relación entre estos conceptos,
    consideremos el alfabeto \( \Sigma \) de los caracteres ASCII.
    Un programa en C o en Pascal, por ejemplo, es simplemente una cadena de
    símbolos de \( \Sigma \) y, por tanto, un conjunto de programas es un
    lenguaje (en el sentido formal definido en esta sección).
</div>


<h2>1.8. Operaciones entre lenguajes</h2>

<p>
Puesto que los lenguajes sobre \( \Sigma \) son subconjuntos de \( \Sigma^* \),
las operaciones usuales entre conjuntos son también operaciones válidas
entre lenguajes. Así, si \( A \) y \( B \) son lenguajes sobre \( \Sigma \)
(es decir, \( A, B \subseteq \Sigma^* \)), entonces los siguientes
también son lenguajes sobre \( \Sigma \):
</p>

<div class="formula-centro">
\[
\begin{array}{ll}
A \cup B & \text{Unión} \\
A \cap B & \text{Intersección} \\
A - B   & \text{Diferencia} \\
\Sigma^* - A & \text{Complemento}
\end{array}
\]
</div>

<p>
Estas operaciones entre lenguajes se llaman
<i>operaciones conjuntistas o booleanas</i> para distinguirlas de las
<i>operaciones lingüísticas</i> (concatenación, potencia, inverso, clausura),
que son extensiones a los lenguajes de las operaciones entre cadenas.
</p>
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
