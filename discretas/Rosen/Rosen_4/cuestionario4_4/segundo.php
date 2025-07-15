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
        // Establecer todas las respuestas correctas
        $respuesta_1 = 'dividido';
        $respuesta_2 = 'relativamente';
        $respuesta_3 = 'solucion';
        $respuesta_4 = 'unica';
        $respuesta_5 = '78';
        $respuesta_6 = '\frac{m}{m_k}';
        $respuesta_7 = 'producto';
        $respuesta_8 = 'factores comunes';
        $respuesta_9 = 'k';
        $respuesta_10 = '1';
        $respuesta_11 = 'M_k y_k\equiv1\pmod{m_k}';
        $respuesta_12 = 'j';
        $respuesta_13 = 'k';
        $respuesta_14 = '0';
        $respuesta_15 = 'x\equiva_kM_ky_k\equiva_k\pmod{m_k}';
        $respuesta_16 = '105';
        $respuesta_17 = '35';
        $respuesta_18 = '21';
        $respuesta_19 = '15';
        $respuesta_20 = '2';
        $respuesta_21 = '1';
        $respuesta_22 = '1';
        $respuesta_23 = '2*35*2';
        $respuesta_24 = '3*21*1';
        $respuesta_25 = '2*15*1';
        $respuesta_26 = '233\equiv23\pmod{105}';
        $respuesta_27 = '23';
        $respuesta_28 = '2';
        $respuesta_29 = '3';
        $respuesta_30 = '2';
        $respuesta_31 = 'igualdad';
        $respuesta_32 = '5t+1';
        $respuesta_33 = '5t+1\equiv2\pmod{6}';
        $respuesta_34 = 't\equiv5\pmod{6}';
        $respuesta_35 = '6u+5';
        $respuesta_36 = '30u+26';
        $respuesta_37 = '30u+26\equiv3\pmod{7}';
        $respuesta_38 = 'u\equiv6\pmod{7}';
        $respuesta_39 = '7v+6';
        $respuesta_40 = 'x=30u+26';
        $respuesta_41 = 'x=30(7v+6)+26=210v+206';
        $respuesta_42 = 'x\equiv206\pmod{210}';
        $respuesta_43 = 'relativamente primos';
        $respuesta_44 = 'dos a dos';
        $respuesta_45 = 'm';
        $respuesta_46 = 'n-tupla';
        $respuesta_47 = 'residuos';
        $respuesta_48 = 'dividirlo';
        $respuesta_49 = 'a \bmod m_1';
        $respuesta_50 = 'a \bmod m_2';
        $respuesta_51 = 'a \bmod m_n';
        $respuesta_52 = '0';
        $respuesta_53 = '0';
        $respuesta_54 = '1';
        $respuesta_55 = '1';
        $respuesta_56 = '2';
        $respuesta_57 = '2';
        $respuesta_58 = '0';
        $respuesta_59 = '3';
        $respuesta_60 = '1';
        $respuesta_61 = '0';
        $respuesta_62 = '2';
        $respuesta_63 = '1';
        $respuesta_64 = '0';
        $respuesta_65 = '2';
        $respuesta_66 = '1';
        $respuesta_67 = '3';
        $respuesta_68 = '2';
        $respuesta_69 = '0';
        $respuesta_70 = '0';
        $respuesta_71 = '1';
        $respuesta_72 = '1';
        $respuesta_73 = '2';
        $respuesta_74 = '2';
        $respuesta_75 = '3';
        $respuesta_76 = '2';
        $respuesta_77 = '1';
        $respuesta_78 = 'mayor';
        $respuesta_79 = 'resultados';
        $respuesta_80 = 'componente';
        $respuesta_81 = 'componente';
        $respuesta_82 = 'residuos';
        $respuesta_83 = 'm_i';
        $respuesta_84 = 'recuperamos';
        $respuesta_85 = 'paralelo';
        $respuesta_86 = 'residuos';
        $respuesta_87 = 'relativamente';
        $respuesta_88 = 'mayor';
        $respuesta_89 = 'menor';
        $respuesta_90 = '89403930';
        $respuesta_91 = 'dividirlo';
        $respuesta_92 = 'cuatro modulos';
        $respuesta_93 = '33';
        $respuesta_94 = '8';
        $respuesta_95 = '9';
        $respuesta_96 = '89';
        $respuesta_97 = '32';
        $respuesta_98 = '92';
        $respuesta_99 = '42';
        $respuesta_100 = '16';
        $respuesta_101 = '4';
        $respuesta_102 = 'en lugar';
        $respuesta_103 = '110';
        $respuesta_104 = 'componente a componente';
        $respuesta_105 = 'reducimos';
        $respuesta_106 = '65,2,51,10';
        $respuesta_107 = '65';
        $respuesta_108 = '2';
        $respuesta_109 = '51';
        $respuesta_110 = '10';
        $respuesta_111 = 'menor';
        $respuesta_112 = 'mayores';
        $respuesta_113 = 'modulos';
        $respuesta_114 = '2^k-1';
        $respuesta_115 = 'encontrar';
        $respuesta_116 = '2^{\gcd(a,b)}-1';

        // Marcar todas como correctas usando un bucle for
        for ($i = 1; $i <= 116; $i++) {
            ${"verificar_$i"} = "correcto";
        }
    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'dividido') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'relativamente') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'solucion') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'unica') {  
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
   if ($respuesta_6 === '\frac{m}{m_k}') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'producto') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'factores comunes') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'k') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === '1') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   $respuesta_11_dos = str_replace(' ','',$respuesta_11);

   if ($respuesta_11_dos === 'M_k y_k\equiv1\pmod{m_k}') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11_dos === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'j') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'k') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === '0') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    $respuesta_15_dos = str_replace(' ','',$respuesta_15);

    if ($respuesta_15_dos === 'x\equiva_kM_ky_k\equiva_k\pmod{m_k}') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15_dos === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === '105') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === '35') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === '21') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === '15') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === '2') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === '1') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === '1') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === '2*35*2') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === '3*21*1') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === '2*15*1') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   $respuesta_26_dos = str_replace(' ','',$respuesta_26);

   if ($respuesta_26_dos === '233\equiv23\pmod{105}') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26_dos === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === '23') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === '2') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === '3') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === '2') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'igualdad') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   $respuesta_32_dos = str_replace(' ','',$respuesta_32);
   if ($respuesta_32_dos === '5t+1') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32_dos === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   $respuesta_33_dos = str_replace(' ','',$respuesta_33);
   if ($respuesta_33_dos === '5t+1\equiv2\pmod{6}') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33_dos === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    $respuesta_34_dos = str_replace(' ','',$respuesta_34);
    if ($respuesta_34_dos === 't\equiv5\pmod{6}') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34_dos === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === '6u+5') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === '30u+26') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    $respuesta_37_dos = str_replace(' ','',$respuesta_37);
    if ($respuesta_37_dos === '30u+26\equiv3\pmod{7}') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37_dos === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    $respuesta_38_dos = str_replace(' ','',$respuesta_38);
    if ($respuesta_38_dos === 'u\equiv6\pmod{7}') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38_dos === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    $respuesta_39_dos = str_replace(' ','',$respuesta_39);

    if ($respuesta_39 === '7v+6') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
    $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    $respuesta_40_dos = str_replace(' ','',$respuesta_40);

    if ($respuesta_40_dos === 'x=30u+26') { 
        $verificar_40 = "correcto"; 
    } elseif ($respuesta_40_dos === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    $respuesta_41_dos = str_replace(' ','',$respuesta_41);
    if ($respuesta_41_dos === 'x=30(7v+6)+26=210v+206') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41_dos === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    $respuesta_42_dos = str_replace(' ','',$respuesta_42);
    if ($respuesta_42_dos === 'x\equiv206\pmod{210}') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42_dos === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'relativamente primos') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
        $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'dos a dos') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
        $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'm') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
        $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

 $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === 'n-tupla') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46 === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'residuos') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'dividirlo') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
        $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

 $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === 'a \bmod m_1') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === 'a \bmod m_2') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'a \bmod m_n') { 
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
if ($respuesta_53 === '0') { 
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
if ($respuesta_55 === '1') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === '2') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === '2') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === '0') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === '3') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === '1') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === '0') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === '2') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === '1') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === '0') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === '2') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === '1') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === '3') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === '2') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === '0') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === '0') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === '1') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === '1') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === '2') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === '2') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === '3') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === '2') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === '1') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'mayor') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'resultados') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'componente') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'componente') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'residuos') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'm_i') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'recuperamos') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'paralelo') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'residuos') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'relativamente') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'mayor') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'menor') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === '89403930') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'dividirlo') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'cuatro modulos') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === '33') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === '8') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === '9') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === '89') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === '32') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === '92') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === '42') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === '16') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === '4') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'en lugar') { 
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
if ($respuesta_104 === 'componente a componente') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'reducimos') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
 $respuesta_106_dos = str_replace(' ','',$respuesta_106);
if ($respuesta_106_dos === '65,2,51,10') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106_dos === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === '65') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === '2') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === '51') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === '10') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'menor') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'mayores') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'modulos') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
 $respuesta_114_dos = str_replace(' ','',$respuesta_114);

if ($respuesta_114_dos === ' 2^k-1') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114_dos === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'encontrar') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
$respuesta_116_dos = str_replace(' ','',$respuesta_116);

if ($respuesta_116_dos === '2^{\gcd(a,b)}-1') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116_dos === '') {
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
    height: 430vh;
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
    var f = document.getElementById('respuesta_6').value || "";
    var formula = ` \\ M_k = ${f} \\, `;
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_11').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_15').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    var f = document.getElementById('respuesta_26').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula4').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_33').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula6() {
    var f = document.getElementById('respuesta_34').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula6').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula7() {
    var f = document.getElementById('respuesta_37').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula7').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_38').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula8').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula9() {
    var f = document.getElementById('respuesta_41').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula10() {
    var f = document.getElementById('respuesta_42').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula10').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula11() { 
    var f = document.getElementById('respuesta_49').value || "";
    var g = document.getElementById('respuesta_50').value || "";
    var h = document.getElementById('respuesta_51').value || "";
 

    var formula = ` \\ (${f}, ${g}, \\ldots, ${h})   \\, `;
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula12() {
    var f = document.getElementById('respuesta_107').value || "";
    var g = document.getElementById('respuesta_108').value || "";
    var h = document.getElementById('respuesta_109').value || "";
    var i = document.getElementById('respuesta_110').value || "";

    var formula = `
        \\[
        \\begin{aligned}
        x &\\equiv ${f} \\pmod{99} \\\\
        x &\\equiv ${g} \\pmod{98} \\\\
        x &\\equiv ${h} \\pmod{97} \\\\
        x &\\equiv ${i} \\pmod{95}
        \\end{aligned}
        \\]
    `;

    document.getElementById('formula12').innerHTML = formula;
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula13() {
    var f = document.getElementById('respuesta_114').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula13').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula14() {
    var f = document.getElementById('respuesta_116').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula14').innerHTML = `\\( ${formula} \\)`;
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
    <script>
 
    function ocultarImagen21() {
        document.getElementById('imagenMostrada21').style.display = 'none';
    }

    function mostrarImagen22() {
        document.getElementById('imagenMostrada22').style.display = 'block';
    }
    function ocultarImagen22() {
        document.getElementById('imagenMostrada22').style.display = 'none';
    }

    function mostrarImagen23() {
        document.getElementById('imagenMostrada23').style.display = 'block';
    }
    function ocultarImagen23() {
        document.getElementById('imagenMostrada23').style.display = 'none';
    }

    function mostrarImagen24() {
        document.getElementById('imagenMostrada24').style.display = 'block';
    }
    function ocultarImagen24() {
        document.getElementById('imagenMostrada24').style.display = 'none';
    }

    function mostrarImagen25() {
        document.getElementById('imagenMostrada25').style.display = 'block';
    }
    function ocultarImagen25() {
        document.getElementById('imagenMostrada25').style.display = 'none';
    }

    function mostrarImagen26() {
        document.getElementById('imagenMostrada26').style.display = 'block';
    }
    function ocultarImagen26() {
        document.getElementById('imagenMostrada26').style.display = 'none';
    }
</script>
</head>
<body> 
<div class="seccion izquierda">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <p>
    El producto de primos (o números primos entre sí) 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">
      por uno de ellos da un número 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">
      primo con ese uno.
    </p>  
    
    <h4>Demostración:</h4>
    <p>Para establecer este teorema, necesitamos demostrar que existe una 
     <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">     
      y que es 
     <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">
      módulo 
     <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
     . 
    Mostraremos que existe una 
    <input type="text"  value="<?php echo $respuesta_3; ?>" size="8" readonly>
      describiendo una manera de construirla; demostrar que la 
      <input type="text"  value="<?php echo $respuesta_3; ?>" size="8" readonly>
    es 
    <input type="text"  value="<?php echo $respuesta_4; ?>" size="8" readonly>
    módulo 
    <input type="text" value="<?php echo $respuesta_5; ?>" size="8" readonly>
    es el Ejercicio 30.</p>


    <p>Para construir una solución simultánea, primero dejemos</p>
    
 
    <span id="formula">
        \[   M_k = \]
    </span> 
    <input type="text" name="respuesta_6"   id="respuesta_6" oninput="actualizarFormula()" 
    value="<?php echo $respuesta_6?>" size="20" >

    <p>para \(k = 1, 2, \ldots, n\). Es decir, \(M_k\) es el 
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">    
      de los módulos excepto \(m_k\). Debido a que 
    \(m_i\) y \(m_k\) no tienen 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="13">
      mayores que 1 cuando \(i \neq \)
      <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="13">
      , se sigue que \(\gcd(m_k, M_k) = \)
      <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="13">
      . 
    En consecuencia, por el Teorema 1, sabemos que existe un entero \(y_k\), un inverso de \(M_k\) 
    módulo \(m_k\), tal que</p>

    <span id="formula2">
        \[     \]
    </span> 
    <input type="text" name="respuesta_11"   id="respuesta_11" oninput="actualizarFormula2()" 
    value="<?php echo $respuesta_11?>" size="20" >

 
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
    <hr>
    <p>Para construir una solución simultánea, formamos la suma</p>
    \[ x = a_1 M_1 y_1 + a_2 M_2 y_2 + \cdots + a_n M_n y_n. \]

    <p>Ahora mostraremos que \(x\) es una solución simultánea. Primero, observemos que como \(M_j \equiv 0 \pmod{m_k}\) 
    siempre que 
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="1">
    \( \neq \)
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="1">
    , todos los términos excepto el \(k\)-ésimo en esta suma son congruentes a 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="1">
    módulo \(m_k\). 
    Como \(M_k y_k \equiv 1 \pmod{m_k}\), vemos que</p>

    <span id="formula3">
        \[     \]
    </span> 
    <input type="text" name="respuesta_15"   id="respuesta_15" oninput="actualizarFormula3()" 
    value="<?php echo $respuesta_15?>" size="27" >
    

    <p>para \(k = 1, 2, \ldots, n\). Hemos demostrado que \(x\) es una solución simultánea 
    para las \(n\) congruencias.</p>

    <button onmousedown="mostrarImagen()" onmouseup="ocultarImagen()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada" src="../../../../img/chino.png" style="display: none; max-width: 100%"  >

    <script>
        function mostrarImagen() {
        var imagenMostrada = document.getElementById('imagenMostrada');

        // Mostrar la imagen
        imagenMostrada.style.display = 'block';
        }

        function ocultarImagen() {
        var imagenMostrada = document.getElementById('imagenMostrada');

        // Ocultar la imagen al soltar el botón
        imagenMostrada.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../../../img/chino_dos.png" style="display: none; max-width: 100%" >

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

    <img id="imagenMostrada3" src="../../../../img/chino_tres.png" style="display: none; max-width: 100%" >

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


    <button onmousedown="mostrarImagen4()" onmouseup="ocultarImagen4()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada4" src="../../../../img/chino_ultimo.png" style="display: none; max-width: 100%" >

    <script>
        function mostrarImagen4() {
        var imagenMostrada3 = document.getElementById('imagenMostrada4');

        // Mostrar la imagen
        imagenMostrada4.style.display = 'block';
        }

        function ocultarImagen4() {
        var imagenMostrada4 = document.getElementById('imagenMostrada4');

        // Ocultar la imagen al soltar el botón
        imagenMostrada4.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen5()" onmouseup="ocultarImagen5()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada5" src="../../../../img/chino_last.png" style="display: none; max-width: 100%" >

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

    <br><br>
    <strong>ayudas final.</strong> 
    <br><br>
    <button onmousedown="mostrarImagen6()" onmouseup="ocultarImagen6()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada6" src="../../../../img/sumaExplicacion.png" style="display: none; max-width: 100%" width="460">

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
     
    <button onmousedown="mostrarImagen7()" onmouseup="ocultarImagen7()">Ayuda</button>
    <img id="imagenMostrada7" src="../../../../img/Explicacion_suma_dos.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen7() {
        var imagenMostrada7 = document.getElementById('imagenMostrada7');

        // Mostrar la imagen
        imagenMostrada7.style.display = 'block';
        }

        function ocultarImagen7() {
        var imagenMostrada7 = document.getElementById('imagenMostrada7');

        // Ocultar la imagen al soltar el botón
        imagenMostrada7.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen8()" onmouseup="ocultarImagen8()">Ayuda</button>
    <img id="imagenMostrada8" src="../../../../img/explicacion_cuatro.png" style="display: none; max-width: 100%"  >

    <script>
        function mostrarImagen8() {
        var imagenMostrada8 = document.getElementById('imagenMostrada8');

        // Mostrar la imagen
        imagenMostrada8.style.display = 'block';
        }

        function ocultarImagen8() {
        var imagenMostrada8 = document.getElementById('imagenMostrada8');

        // Ocultar la imagen al soltar el botón
        imagenMostrada8.style.display = 'none';
        }
    </script>

     <button onmousedown="mostrarImagen9()" onmouseup="ocultarImagen9()">Ayuda</button>
    <img id="imagenMostrada9" src="../../../../img/Explicacion_cinco.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen9() {
        var imagenMostrada9 = document.getElementById('imagenMostrada9');

        // Mostrar la imagen
        imagenMostrada9.style.display = 'block';
        }

        function ocultarImagen9() {
        var imagenMostrada9 = document.getElementById('imagenMostrada9');

        // Ocultar la imagen al soltar el botón
        imagenMostrada9.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen10()" onmouseup="ocultarImagen10()">Ayuda</button>
    <img id="imagenMostrada10" src="../../../../img/Explicacion_seis.png" style="display: none; max-width: 100%" >

    <script>
        function mostrarImagen10() {
        var imagenMostrada10 = document.getElementById('imagenMostrada10');

        // Mostrar la imagen
        imagenMostrada10.style.display = 'block';
        }

        function ocultarImagen10() {
        var imagenMostrada10 = document.getElementById('imagenMostrada10');

        // Ocultar la imagen al soltar el botón
        imagenMostrada10.style.display = 'none';
        }
    </script>
     
    <p><strong>Ejemplos 0</strong></p>

       <button onmousedown="mostrarImagen11()" onmouseup="ocultarImagen11()">Ayuda</button>
    <img id="imagenMostrada11" src="../../../../img/primero.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen11() {
        var imagenMostrada11 = document.getElementById('imagenMostrada11');

        // Mostrar la imagen
        imagenMostrada11.style.display = 'block';
        }

        function ocultarImagen11() {
        var imagenMostrada11 = document.getElementById('imagenMostrada11');

        // Ocultar la imagen al soltar el botón
        imagenMostrada11.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen12()" onmouseup="ocultarImagen12()">Ayuda</button>
    <img id="imagenMostrada12" src="../../../../img/segundo.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen12() {
        var imagenMostrada12 = document.getElementById('imagenMostrada12');

        // Mostrar la imagen
        imagenMostrada12.style.display = 'block';
        }

        function ocultarImagen12() {
        var imagenMostrada12 = document.getElementById('imagenMostrada12');

        // Ocultar la imagen al soltar el botón
        imagenMostrada12.style.display = 'none';
        }
    </script>


    <button onmousedown="mostrarImagen13()" onmouseup="ocultarImagen13()">Ayuda</button>
    <img id="imagenMostrada13" src="../../../../img/tercero.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen13() {
        var imagenMostrada13 = document.getElementById('imagenMostrada13');

        // Mostrar la imagen
        imagenMostrada13.style.display = 'block';
        }

        function ocultarImagen13() {
        var imagenMostrada13 = document.getElementById('imagenMostrada13');

        // Ocultar la imagen al soltar el botón
        imagenMostrada13.style.display = 'none';
        }
    </script>


    <button onmousedown="mostrarImagen14()" onmouseup="ocultarImagen14()">Ayuda</button>
    <img id="imagenMostrada14" src="../../../../img/cuarto.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen14() {
        var imagenMostrada14 = document.getElementById('imagenMostrada14');

        // Mostrar la imagen
        imagenMostrada14.style.display = 'block';
        }

        function ocultarImagen14() {
        var imagenMostrada14 = document.getElementById('imagenMostrada14');

        // Ocultar la imagen al soltar el botón
        imagenMostrada14.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen15()" onmouseup="ocultarImagen15()">Ayuda</button>
    <img id="imagenMostrada15" src="../../../../img/quinto.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen15() {
        var imagenMostrada15 = document.getElementById('imagenMostrada15');

        // Mostrar la imagen
        imagenMostrada15.style.display = 'block';
        }

        function ocultarImagen15() {
        var imagenMostrada15 = document.getElementById('imagenMostrada15');

        // Ocultar la imagen al soltar el botón
        imagenMostrada15.style.display = 'none';
        }
    </script>
    
    <button onmousedown="mostrarImagen16()" onmouseup="ocultarImagen16()">Ayuda</button>
    <img id="imagenMostrada16" src="../../../../img/conclusion_final.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen16() {
        var imagenMostrada16 = document.getElementById('imagenMostrada16');

        // Mostrar la imagen
        imagenMostrada16.style.display = 'block';
        }

        function ocultarImagen16() {
        var imagenMostrada16 = document.getElementById('imagenMostrada16');

        // Ocultar la imagen al soltar el botón
        imagenMostrada16.style.display = 'none';
        }
    </script>
   
    <p>El <strong>Ejemplo 5</strong> ilustra cómo usar la construcción dada en nuestra demostración del 
    teorema del resto chino para resolver un sistema de congruencias. Resolvemos el sistema dado en 
    el <strong>Ejemplo 4</strong>, que surge en el acertijo de Sun-Tsu.</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <hr>

    <h3>Ejemplo 5</h3>

    <p>
    <blockquote>
    ¿Cuáles son las soluciones del sistema de congruencias?
    \[ x \equiv 2 \pmod{3}, \]
    \[ x \equiv 3 \pmod{5}, \]
    \[ x \equiv 2 \pmod{7}? \]
    </blockquote>
    </p>
    
    <p>Para resolver el sistema de congruencias del Ejemplo 4, primero dejemos \(m = 
    \)
    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="1">
    , 
    \(M_1 =  \),
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="1">
    \(M_2 =  \)
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="1">
    , y \(M_3 =  \)
    <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="1">
    . 
    <br><br>
    Vemos que 
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="1">
     es un inverso de \(M_1 =  \) 
    <input type="text"  value="<?php echo $respuesta_17; ?>" size="1" readonly>
    módulo 3; 
    <br><br>
    <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="1">
     es un inverso de \(M_2 =  \) 
    <input type="text" value="<?php echo $respuesta_18; ?>" size="1" readonly>
    módulo 5; y 
    <br><br>
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="1">
     es un inverso de \(M_3 = \)
    <input type="text"  value="<?php echo $respuesta_19; ?>" size="1" readonly>
    módulo 7. 
    <br><br>

    <button type="submit">Enviar</button>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?>
    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>

    <hr>
    Las soluciones a este sistema son los valores de \(x\) tales que:</p>
    \( x \equiv a_1M_1y_1 + a_2M_2y_2 + a_3M_3y_3 =
    \)
    
    <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="4">+
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="4">+
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="4"> 
    = 
    
    <span id="formula4">
        \[     \]
    </span> 
    <input type="text" name="respuesta_26"   id="respuesta_26" oninput="actualizarFormula4()" 
    value="<?php echo $respuesta_26?>" size="22" >
 

    <br><br>
    <p>Se sigue que 
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="1">     
      es el menor entero positivo que es una solución simultánea. Concluimos que 
    <input type="text"  value="<?php echo $respuesta_27; ?>" size="1"> 
      es el menor 
    entero positivo que deja un residuo de 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="1"> 
     cuando se divide entre 3, un residuo de 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="1"> 
     cuando se divide entre 5, 
    y un residuo de 
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="1"> 
     cuando se divide entre 7. ◂</p>

    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">parentesis</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    >Para resolver el sistema de congruencias del Ejemplo 4, primero dejemos \(m = 3 \cdot 5 \cdot 7 = 105\), 
    \(M_1 = m / 3 = 35\), \(M_2 = m / 5 = 21\), y \(M_3 = m / 7 = 15\). Vemos que 2 es un inverso de \(M_1 = 35\) 
    módulo 3, porque \(35 \cdot 2 \equiv 2 \cdot 2 \equiv 1 \pmod{3}\); 1 es un inverso de \(M_2 = 21\) módulo 5, 
    porque \(21 \equiv 1 \pmod{5}\); y 1 es un inverso de \(M_3 = 15\) módulo 7, porque \(15 \equiv 1 \pmod{7}\). 
    Las soluciones a este sistema son los valores de \(x\) tales que:</p>
    \[ x \equiv a_1M_1y_1 + a_2M_2y_2 + a_3M_3y_3 = 2 \cdot 35 \cdot 2 + 3 \cdot 21 \cdot 1 + 2 \cdot 15 
    \cdot 1 = 233 \equiv 23 \pmod{105}. \]
    <p>Se sigue que 23 es el menor entero positivo que es una solución simultánea. Concluimos que 23 es el menor 
    entero positivo que deja un residuo de 2 cuando se divide entre 3, un residuo de 3 cuando se divide entre 5, 
    y un residuo de 2 cuando se divide entre 7. ◂
    </div>
    




    <h3>Ejemplo 6</h3>
    <p>Use el método de sustitución hacia atrás para encontrar todos los enteros \(x\) tales que:</p>
    \[ x \equiv 1 \pmod{5}, \]
    \[ x \equiv 2 \pmod{6}, \]
    \[ x \equiv 3 \pmod{7}. \]
    

    <button type="submit">Enviar</button>
    <?php echo $verificar_23 ?>
    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>
    <?php echo $verificar_26 ?>
    <?php echo $verificar_27 ?>
    <?php echo $verificar_28 ?>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
    <hr>

    <h4>Solución:</h4>
    <p>Por el Teorema 4 en la Sección 4.1, la primera congruencia puede ser reescrita como una 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8">     
    , 
    \(x =  \)
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">
    , donde \(t\) es un entero. 
    Sustituyendo esta expresión para \(x\) en la segunda congruencia, 
    nos dice que:</p>

    <span id="formula5">
        \[     \]
    </span> 
    <input type="text" name="respuesta_33"   id="respuesta_33" oninput="actualizarFormula5()" 
    value="<?php echo $respuesta_33?>" size="22" >
 
    <p>lo que se puede resolver para mostrar que 
    <span id="formula6">
        \(     \)
    </span> 
    <input type="text" name="respuesta_34"   id="respuesta_34" oninput="actualizarFormula6()" 
    value="<?php echo $respuesta_34?>" size="22" >    
    (como el lector debería verificar). 
    Usando el Teorema 4 en la Sección 4.1 nuevamente, vemos que  
    \(t =  \)
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
    , donde \(u\) es un entero. 
    Sustituyendo esta expresión para \(t\) de nuevo en la ecuación \(x = \)
    <input type="text"   value="<?php echo $respuesta_32; ?>" size="8" readonly>
    , nos dice que:</p>
    \( x =   \)
    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">.
    <p>Insertamos esto en la tercera ecuación para obtener:</p>
    <span id="formula7">
        \(     \)
    </span> 
    <input type="text" name="respuesta_37"   id="respuesta_37" oninput="actualizarFormula7()" 
    value="<?php echo $respuesta_37?>" size="22">   
 
    <p>Resolver esta congruencia nos dice que 
    <span id="formula8">
        \(     \)
    </span> 
    <input type="text" name="respuesta_38"   id="respuesta_38" oninput="actualizarFormula8()" 
    value="<?php echo $respuesta_38?>" size="22" >     
    (como el lector debería verificar). Por lo 
    tanto, el Teorema 4 en la Sección 4.1 nos dice que \(u =  \)
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="8">
    , donde \(v\) es un entero. Sustituyendo 
    esta expresión para \(u\) en la ecuación 
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="8">
     , nos dice que:</p>
    <span id="formula9">
        \(     \)
    </span> 
    <input type="text" name="respuesta_41"   id="respuesta_41" oninput="actualizarFormula9()" 
    value="<?php echo $respuesta_41?>" size="22" >  



    <button type="submit">Enviar</button>
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
    <hr>

    <p>Traduciendo esto de nuevo a una congruencia, encontramos la solución para las congruencias simultáneas:</p>
    <span id="formula10">
        \(     \)
    </span> 
    <input type="text" name="respuesta_42"   id="respuesta_42" oninput="actualizarFormula10()" 
    value="<?php echo $respuesta_42?>" size="22">  
     


    <button onmousedown="mostrarImagen17()" onmouseup="ocultarImagen17()">Ayuda</button>
    <img id="imagenMostrada17" src="../../../../img/pasos_1.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen17() {
        var imagenMostrada17 = document.getElementById('imagenMostrada17');

        // Mostrar la imagen
        imagenMostrada17.style.display = 'block';
        }

        function ocultarImagen17() {
        var imagenMostrada17 = document.getElementById('imagenMostrada17');

        // Ocultar la imagen al soltar el botón
        imagenMostrada17.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen18()" onmouseup="ocultarImagen18()">Ayuda</button>
    <img id="imagenMostrada18" src="../../../../img/pasos_2.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen18() {
        var imagenMostrada18 = document.getElementById('imagenMostrada18');

        // Mostrar la imagen
        imagenMostrada18.style.display = 'block';
        }

        function ocultarImagen18() {
        var imagenMostrada18 = document.getElementById('imagenMostrada18');

        // Ocultar la imagen al soltar el botón
        imagenMostrada18.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen19()" onmouseup="ocultarImagen19()">Ayuda</button>
    <img id="imagenMostrada19" src="../../../../img/pasos_3.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen19() {
        var imagenMostrada19 = document.getElementById('imagenMostrada19');

        // Mostrar la imagen
        imagenMostrada19.style.display = 'block';
        }

        function ocultarImagen19() {
        var imagenMostrada19 = document.getElementById('imagenMostrada19');

        // Ocultar la imagen al soltar el botón
        imagenMostrada19.style.display = 'none';
        }
    </script>
 
    <button onmousedown="mostrarImagen20()" onmouseup="ocultarImagen20()">Ayuda</button>
    <img id="imagenMostrada20" src="../../../../img/pasos_4.png" style="display: none; max-width: 100%" >

    <script>
        function mostrarImagen20() {
        var imagenMostrada20 = document.getElementById('imagenMostrada20');

        // Mostrar la imagen
        imagenMostrada20.style.display = 'block';
        }

        function ocultarImagen20() {
        var imagenMostrada20 = document.getElementById('imagenMostrada20');

        // Ocultar la imagen al soltar el botón
        imagenMostrada20.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen21()" onmouseup="ocultarImagen21()">Ayuda</button>
    <img id="imagenMostrada21" src="../../../../img/pasos_5.png" style="display: none; max-width: 100%"  width="460">

    <script>
        function mostrarImagen21() {
        var imagenMostrada21 = document.getElementById('imagenMostrada21');

        // Mostrar la imagen
        imagenMostrada21.style.display = 'block';
        }

        function ocultarImagen21() {
        var imagenMostrada21 = document.getElementById('imagenMostrada21');

        // Ocultar la imagen al soltar el botón
        imagenMostrada21.style.display = 'none';
        }
    </script>
   
   <p>
    <strong>solucion final</strong>
   </p>
   <!-- Botón 22 -->
    <button onmousedown="mostrarImagen22()" onmouseup="ocultarImagen22()">Ayuda</button>
    <img id="imagenMostrada22" src="../../../../img/solucion_primero.png" style="display: none; max-width: 100%" >

    <!-- Botón 23 -->
    <button onmousedown="mostrarImagen23()" onmouseup="ocultarImagen23()">Ayuda</button>
    <img id="imagenMostrada23" src="../../../../img/paso_3.png" style="display: none; max-width: 100%" >

    <!-- Botón 24 -->
    <button onmousedown="mostrarImagen24()" onmouseup="ocultarImagen24()">Ayuda</button>
    <img id="imagenMostrada24" src="../../../../img/paso_final.png" style="display: none; max-width: 100%"  width="460">

 
    <P>la tecnica es tratar al sistema como un sistema real de ecuaciones,inecuaciones, 
    restando a ambos lados, reemplazando...</P>
    
    <button type="submit">Enviar</button>
    <?php echo $verificar_42 ?>

    <hr>
    </form>
</div>




<div class="seccion derecha">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>4.4.4 Aritmética Computacional con Enteros Grandes</h2>

    <p>Supongamos que \( m_1, m_2, \ldots, m_n \) son módulos 
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="14">
    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="11">    
    y que 
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="11">
    es su producto. 
    Por el teorema chino del resto, podemos demostrar (ver Ejercicio 28) que un entero \( a \) con \( 0 \leq a < m \) puede 
    representarse de forma única mediante la 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="11">
      compuesta por sus 
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="11">
      al 
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="11">
      entre \( m_i \), 
    para \( i = 1, 2, \ldots, n \). Es decir, podemos representar \( a \) de forma única como:</p>
 

    <span id="formula11">
        \[  (?, ? , \ldots, ? )   \]
    </span> 
    <br>
    <input type="text" name="respuesta_49"   id="respuesta_49" oninput="actualizarFormula11()" 
    value="<?php echo $respuesta_49?>" size="22">  
    <input type="text" name="respuesta_50"   id="respuesta_50" oninput="actualizarFormula11()" 
    value="<?php echo $respuesta_50?>" size="22">  
    <input type="text" name="respuesta_51"   id="respuesta_51" oninput="actualizarFormula11()" 
    value="<?php echo $respuesta_51?>" size="22">  

    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <?php echo $verificar_51 ?>
    <hr>

    <h3>Ejemplo 7</h3>
    <p>¿Cuáles son los pares utilizados para representar los enteros no negativos menores que 12 cuando 
    se representan por el par ordenado donde el primer componente es el residuo del entero al dividirlo 
    entre 3 y el segundo componente es el residuo al dividirlo entre 4?</p>

    <p><strong>Solución:</strong> Tenemos las siguientes representaciones, obtenidas al encontrar el residuo de cada 
    entero al dividirlo entre 3 y entre 4:</p>

    <p>
    0 = (
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="1">    
    ,
    <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="1"> 
    ) &nbsp;&nbsp; 4 = (
    <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="1">,
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="1">
    ) &nbsp;&nbsp; 8 = (
    <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="1"> ,
    <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="1"> 
    )<br>
    1 = (
    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="1">
    ,
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="1">    
    ) &nbsp;&nbsp; 5 = (
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="1">,
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="1">
    ) &nbsp;&nbsp; 9 = (
    <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="1">,
    <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="1">
    )<br>
    2 = (
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="1">
    ,
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="1">     
    ) &nbsp;&nbsp; 6 = (
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="1">,
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="1">
    ) &nbsp;&nbsp; 10 = (
    <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="1">,
    <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="1">
    )<br>
    3 = (
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="1">
    ,
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="1">
    ) &nbsp;&nbsp; 7 = (
    <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="1">,
    <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="1">    
    ) &nbsp;&nbsp; 11 = (
    <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="1">,
    <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="1">
    )
    </p>

    <p>Para realizar operaciones aritméticas con enteros grandes, seleccionamos módulos \( m_1, m_2, \ldots, m_n \), 
    donde cada \( m_i \) es un entero mayor que 
     <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="1">
     , \( \gcd(m_i, m_j) =  \)
     <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="1">
     siempre que \( i \ne j \), y 
    \( m = m_1 m_2 \cdots m_n \) es 
    <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="6">
      que los 
      <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="9">
      resultados de las operaciones aritméticas que queremos 
    realizar.</p>


    <p>Una vez que hemos seleccionado nuestros módulos, realizamos operaciones aritméticas con enteros grandes 
    efectuando operaciones 
    <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="9">
      a 
    <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="9">
      sobre las n-tuplas que representan estos enteros usando sus 
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="9">
      al dividirlos por 
    <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="9">
     , para \( i = 1, 2, \ldots, n \). Una vez calculado el valor de cada 
    componente en el resultado, 
    <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="9">
      su valor resolviendo un sistema de \( n \) congruencias módulo 
    \( m_i \), para \( i = 1, 2, \ldots, n \).</p>


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
    <?php echo $verificar_80 ?> 
    <?php echo $verificar_81 ?>
    <?php echo $verificar_82 ?>
    <?php echo $verificar_83 ?>
    <?php echo $verificar_84 ?>
    <hr>
    <p>Este método de realizar aritmética con enteros grandes tiene varias ventajas importantes. Primero, puede 
    utilizarse para realizar aritmética con enteros más grandes de lo que normalmente se puede manejar en una 
    computadora. Segundo, los cálculos con respecto a los diferentes módulos pueden hacerse en 
    <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="9">
     , acelerando 
    la aritmética.</p>
    
    <h3>Ejemplo 8</h3>
    <p>Supongamos que realizar aritmética con enteros menores que 100 en cierto procesador es mucho más rápido 
    que hacerla con enteros más grandes. Podemos restringir casi todos nuestros cálculos a enteros menores que 100 
    si representamos enteros usando sus 
    <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="9">
      módulo enteros 
    <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="9">
      primos dos a dos menores que 100. 
    Por ejemplo, podemos usar los módulos 99, 98, 97 y 95. (Estos enteros son relativamente primos dos a dos, ya 
    que ningún par tiene un factor común 
    <input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="9">
      que 1.)</p>

    <p>Por el teorema chino del resto, todo entero no negativo 
     <input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="9">    
      que 
    <input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="9"> 
     puede representarse de forma única mediante sus 
    residuos al 
    <input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="9">
      por estos 
    <input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="14">
     .</p>


    <button type="submit">Enviar</button>
    <?php echo $verificar_85 ?>
    <?php echo $verificar_86 ?>
    <?php echo $verificar_87 ?>
    <?php echo $verificar_88 ?>
    <?php echo $verificar_89 ?>
    <?php echo $verificar_90 ?>
    <?php echo $verificar_91 ?>
    <?php echo $verificar_92 ?>
    <hr>
    <p>Por ejemplo, representamos 123,684 como (
    <input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="1">,
    <input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="1">,
    <input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="1">,
    <input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="1">),
    porque:</p>

    <ul>
    <li>123,684 mod 99 = 
    <input type="text"  value="<?php echo $respuesta_93; ?>" size="1" readonly>    
    </li>
    <li>123,684 mod 98 = 
    <input type="text" value="<?php echo $respuesta_94; ?>" size="1" readonly>
    </li>
    <li>123,684 mod 97 = 
    <input type="text" value="<?php echo $respuesta_95; ?>" size="1" readonly>
    </li>
    <li>123,684 mod 95 = 
    <input type="text" value="<?php echo $respuesta_96; ?>" size="1" readonly>
    </li>
    </ul>

    <p>De forma similar, representamos 413,456 como (
    <input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="1">,
    <input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="1">,
    <input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="1">,
    <input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="1">
    ).</p>


    <p>Para hallar la suma de 123,684 y 413,456, trabajamos con estas 
    <input type="text" name="respuesta_101" value="<?php echo $respuesta_101; ?>" size="1">    
    -tuplas 
    <input type="text" name="respuesta_102" value="<?php echo $respuesta_102; ?>" size="7"> 
     de con los dos enteros 
    directamente. Sumamos las 
    <input type="text"   value="<?php echo $respuesta_101; ?>" size="1" readonly> 
    -tuplas 
    <input type="text" name="respuesta_104" value="<?php echo $respuesta_104; ?>" size="19"> 
      y 
      <input type="text" name="respuesta_105" value="<?php echo $respuesta_105; ?>" size="8"> 
        cada componente con respecto al 
    módulo apropiado. Esto da como resultado:</p>

<p style="text-align: center;">
    (<input type="text" name="respuesta_106" value="<?php echo $respuesta_106; ?>" size="11">)
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
    <hr>
    <p>Para hallar la suma, es decir, el entero representado por
    <input type="text" value="<?php echo $respuesta_106; ?>" size="11" readonly>
    , necesitamos resolver el sistema 
    de congruencias:</p>

    <span id="formula12">
        \[     
    \begin{aligned}
    x &\equiv ? \pmod{99} \\
    x &\equiv ? \pmod{98} \\
    x &\equiv ? \pmod{97} \\
    x &\equiv ? \pmod{95}
    \end{aligned} \]
    </span> 
    <br>
    <input type="text" name="respuesta_107"   id="respuesta_107" oninput="actualizarFormula12()" 
    value="<?php echo $respuesta_107?>" size="22">  
    <input type="text" name="respuesta_108"   id="respuesta_108" oninput="actualizarFormula12()" 
    value="<?php echo $respuesta_108?>" size="22">  
    <input type="text" name="respuesta_109"   id="respuesta_109" oninput="actualizarFormula12()" 
    value="<?php echo $respuesta_109?>" size="22">  
    <input type="text" name="respuesta_110"   id="respuesta_110" oninput="actualizarFormula12()" 
    value="<?php echo $respuesta_110?>" size="22">  
  

    <p>Puede demostrarse (ver Ejercicio 53) que 537,140 es la única solución no negativa de este sistema 
    <input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="6">
     que 
    <input type="text"  value="<?php echo $respuesta_90; ?>" size="9" readonly> 
    . Por consiguiente, 537,140 es la suma. Nótese que solo cuando necesitamos recuperar 
    el entero representado por 
    <input type="text" value="<?php echo $respuesta_106; ?>" size="11" readonly>
    es necesario realizar aritmética con enteros 
    <input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="6">
      que 100.</p>

    <p>Elecciones particularmente buenas para los 
    <input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="6">    
      usados en aritmética con enteros grandes son conjuntos 
    de enteros de la forma  
    <span id="formula13">
    \( ?  \)
    </span> 
    <input type="text" name="respuesta_114"   id="respuesta_114" oninput="actualizarFormula13()" 
    value="<?php echo $respuesta_114?>" size="7">  
    , donde \( k \) es un entero positivo, ya que es fácil realizar aritmética 
    binaria módulo estos enteros, y también es fácil 
    <input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="6"> 
      conjuntos de tales enteros que sean relativamente 
    primos dos a dos. 
    (La segunda razón es consecuencia del hecho de que \( \gcd(2^a - 1, 2^b - 1) =  \)
    <span id="formula14">
    \( ?  \)
    </span> 
    <input type="text" name="respuesta_116"   id="respuesta_116" oninput="actualizarFormula14()" 
    value="<?php echo $respuesta_116?>" size="7">  
    , como 
    muestra el Ejercicio 37 de la Sección 4.3.)</p>

    <button type="submit">Enviar</button>
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
b
    <br><br>
    
    
    
    
    
    
    <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">parentesis</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
     <p>Elecciones particularmente buenas para los módulos usados en aritmética con enteros grandes son conjuntos 
    de enteros de la forma \( 2^k - 1 \)
    , donde \( k \) es un entero positivo, ya que es fácil realizar aritmética 
    binaria módulo estos enteros, y también es fácil encontrar conjuntos de tales enteros que sean relativamente 
    primos dos a dos. 
    (La segunda razón es consecuencia del hecho de que \( \gcd(2^a - 1, 2^b - 1) = 2^{\gcd(a,b)} - 1 \), como 
    muestra el Ejercicio 37 de la Sección 4.3.)</p>

    <p>Supongamos, por ejemplo, que podemos realizar aritmética con enteros menores que \( 2^{35} \) fácilmente 
    en nuestra computadora, pero que trabajar con enteros más grandes requiere procedimientos especiales. Podemos 
    usar módulos relativamente primos dos a dos menores que \( 2^{35} \) para realizar aritmética con enteros tan 
    grandes como su producto. 
    Por ejemplo, como muestra el Ejercicio 38 de la Sección 4.3, los enteros 
    \( 2^{35} - 1, 2^{34} - 1, 2^{33} - 1, 2^{31} - 1, 2^{29} - 1 \) y \( 2^{23} - 1 \) son 
    relativamente primos dos a dos. 
    Como el producto de estos seis módulos excede \( 2^{184} \), podemos realizar aritmética con enteros tan grandes 
    como \( 2^{184} \) (mientras los resultados no excedan este número) realizando aritmética módulo cada uno de estos 
    seis módulos, ninguno de los cuales excede \( 2^{35} \).</p>
    </div>

    <button onmousedown="mostrarImagen25()" onmouseup="ocultarImagen25()">Ayuda</button>
    <img id="imagenMostrada25" src="../../../../img/explicacion_formula_gcd.png" 
    style="display: none; max-width: 100%"  >

    <hr>
    <p><strong>siguiente</strong></p>
    <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
        

    </form>
</div>

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
