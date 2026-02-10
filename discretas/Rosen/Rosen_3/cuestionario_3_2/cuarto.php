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
 
        $respuesta_1  = 'crecimiento';
        $respuesta_2  = 'n';
        $respuesta_3  = 'constantes';
        $respuesta_4  = 'multiplicativas';
        $respuesta_5  = 'cambiar';
        $respuesta_6  = 'base';
        $respuesta_7  = 'logaritmo';
        $respuesta_8  = 'b';
        $respuesta_9  = 'expresar';
        $respuesta_10 = 'otra';
        $respuesta_11 = 'base';

        /* ======================
           RESPUESTAS 12 – 22
        ====================== */
        $respuesta_12 = '\frac{\log_k n}{\log_k b}';
        $respuesta_13 = '\frac{\log_{10} n}{\log_{10} 2}';
        $respuesta_14 = 'O(n^d)';
        $respuesta_15 = 'O(n^d)';
        $respuesta_16 = '(\log_b n)^c = O(n^d)';
        $respuesta_17 = 'n^d = O(b^n)';
        $respuesta_18 = 'menor';
        $respuesta_19 = 'b^n = O(c^n)';
        $respuesta_20 = 'c^n = O(n!)';
        $respuesta_21 = '2';
        $respuesta_22 = '1';

        /* ======================
           RESPUESTAS 23 – 33
        ====================== */
        $respuesta_23 = '3';
        $respuesta_24 = '6';
        $respuesta_25 = '5';
        $respuesta_26 = '4';
        $respuesta_27 = 'lento';
        $respuesta_28 = 'nlogn';
        $respuesta_29 = 'n^1/2';
        $respuesta_30 = 'n^2';
        $respuesta_31 = 'dos';
        $respuesta_32 = 'mas';
        $respuesta_33 = 'subprocedimientos';

        /* ======================
           RESPUESTAS 34 – 36
        ====================== */
        $respuesta_34 = 'suma';
        $respuesta_35 = 'suma';
        $respuesta_36 = 'producto';

        /* ======================
           RESPUESTAS 37 – 40
        ====================== */
        $respuesta_37 = '|(f_1+f_2)(x)|=|f_1(x)+f_2(x)|\leq|f_1(x)|+|f_2(x)|';
        $respuesta_38 = 'x > max(k1,k2)';
        $respuesta_39 = 'max(|g1(x)|,|g2(x)|)';
        $respuesta_40 = 'C1 + C2';

        /* ======================
           RESPUESTAS 41 – 49
        ====================== */
        $respuesta_41 = '(f_1+f_2)(x)=O(g(x))';
        $respuesta_42 = 'max(|g1(x)|,|g2(x)|)';
        $respuesta_43 = 'superior';
        $respuesta_44 = 'g(x)';
        $respuesta_45 = 'O(g(x))';
        $respuesta_46 = 'C1';
        $respuesta_47 = 'C2';
        $respuesta_48 = 'C';
        $respuesta_49 = 'C1+C2';

        /* ======================
           RESPUESTAS 50 – 55
        ====================== */
        $respuesta_50 = 'C1*C2';
        $respuesta_51 = 'max(k1,k2)';
        $respuesta_52 = 'C_1C_2 |(g_1g_2)(x)| ≤ C |(g_1g_2)(x)|';
        $respuesta_53 = 'C1*C2';
        $respuesta_54 = 'O(g1(x)g2(x))';
        $respuesta_55 = 'O(g1(x))';

        /* ======================
           RESPUESTAS 56 – 60
        ====================== */
        $respuesta_56 = 'O(g2(x))';
        $respuesta_57 = 'O(g1(x)g2(x))';
        $respuesta_58 = 'O(nlogn)';
        $respuesta_59 = 'O(n)';
        $respuesta_60 = 'O(n^2logn)';

        /* ======================
           RESPUESTAS 61 – 70
        ====================== */
        $respuesta_61 = 'n>2';
        $respuesta_62 = 'n^2+3<2n^2';
        $respuesta_63 = 'O(n^2logn)';
        $respuesta_64 = 'O(n^2logn)';
        $respuesta_65 = 'O(logn)';
        $respuesta_66 = 'log2+2logx';
        $respuesta_67 = '3logx';
        $respuesta_68 = 'O(xlogx)';
        $respuesta_69 = 'x>1';
        $respuesta_70 = 'O(x^2)';
  
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 70; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {

    
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'crecimiento') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'n') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'constantes') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'multiplicativas') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'cambiar') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'base') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'logaritmo') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'b') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'expresar') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'otra') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'base') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    $respuesta_12_dos =  str_replace(' ','',$respuesta_12);
     
    if ($respuesta_12_dos === '\frac{\log_kn}{\log_kb}') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12_dos === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     $respuesta_13_dos =  str_replace(' ','',$respuesta_13);

     if ($respuesta_13_dos === '\frac{\log_{10}n}{\log_{10}2}') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13_dos === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === 'O(n^d)') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'O(n^d)') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     $respuesta_16_dos =  str_replace(' ','',$respuesta_16);

     if ($respuesta_16_dos === '(\log_bn)^c=O(n^d)') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16_dos === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     $respuesta_17_dos =  str_replace(' ','',$respuesta_17);

     if ($respuesta_17_dos === 'n^d=O(b^n)') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17_dos === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === 'menor') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';

     $respuesta_19_dos =  str_replace(' ','',$respuesta_19);
     if ($respuesta_19_dos === 'b^n=O(c^n)') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19_dos === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    $respuesta_20_dos =  str_replace(' ','',$respuesta_20);
    
    if ($respuesta_20_dos === 'c^n=O(n!)') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20_dos === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === '2') {  
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
   if ($respuesta_23 === '3') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === '6') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === '5') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === '4') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'lento') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'nlogn') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'n^1/2') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'n^2') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'dos') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'mas') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'subprocedimientos') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

 $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
if ($respuesta_34 === 'suma') { 
    $verificar_34 = "correcto";
} elseif ($respuesta_34 === '') {
    $verificar_34 = '';
} else {
    $verificar_34 = "incorrecto";
}

 $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
if ($respuesta_35 === 'suma') { 
    $verificar_35 = "correcto";
} elseif ($respuesta_35 === '') {
    $verificar_35 = '';
} else {
    $verificar_35 = "incorrecto";
}

 $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
if ($respuesta_36 === 'producto') { 
    $verificar_36 = "correcto";
} elseif ($respuesta_36 === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    $respuesta_37_dos =  str_replace(' ','',$respuesta_37);

    if ($respuesta_37_dos === '|(f_1+f_2)(x)|=|f_1(x)+f_2(x)|\leq|f_1(x)|+|f_2(x)|') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37_dos === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

 $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
 $respuesta_38_dos =  str_replace(' ','',$respuesta_38);

if ($respuesta_38_dos === 'x>max(k1,k2)') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38_dos === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

 $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
 $respuesta_39_dos =  str_replace(' ','',$respuesta_39);
if ($respuesta_39_dos === 'max(|g1(x)|,|g2(x)|)') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39_dos === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
  $respuesta_40_dos =  str_replace(' ','',$respuesta_40);

if ($respuesta_40_dos === 'C1+C2') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40_dos === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

 $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
 $respuesta_41_dos =  str_replace(' ','',$respuesta_41);

if ($respuesta_41_dos === '(f_1+f_2)(x)=O(g(x))') { 
    $verificar_41 = "correcto";
} elseif ($respuesta_41_dos === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

 $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
if ($respuesta_42 === 'max(|g1(x)|,|g2(x)|)') { 
    $verificar_42 = "correcto";
} elseif ($respuesta_42 === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

 $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
if ($respuesta_43 === 'superior') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43 === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}

 $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
if ($respuesta_44 === 'g(x)') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44 === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

 $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
if ($respuesta_45 === 'O(g(x))') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45 === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

 $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === 'C1') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46 === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

 $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === 'C2') { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47 === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}

 $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
if ($respuesta_48 === 'C') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48 === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

 $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === 'C1+C2') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === 'C1*C2') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'max(k1,k2)') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
 $respuesta_52_dos =  str_replace(' ','',$respuesta_52);

 if ($respuesta_52_dos === 'C_1C_2|(g_1g_2)(x)|\leqC|(g_1g_2)(x)|') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52_dos === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'C1*C2' || $respuesta_53 === 'C1C2') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'O(g1(x)g2(x))') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'O(g1(x))') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'O(g2(x))') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'O(g1(x)g2(x))') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

$respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
$respuesta_58_dos =  str_replace(' ','',$respuesta_58);

if ($respuesta_58_dos === 'O(nlogn)') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58_dos === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'O(n)') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
 $respuesta_60_dos =  str_replace(' ','',$respuesta_60);
if ($respuesta_60_dos === 'O(n^2logn)') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60_dos === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'n>2') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
  $respuesta_62_dos =  str_replace(' ','',$respuesta_62);
if ($respuesta_62_dos === 'n^2+3<2n^2'
    || ($respuesta_62_dos === '2n^2>n^2+3')
)
 
    { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62_dos === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'O(n^2logn)') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'O(n^2logn)') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'O(logn)') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
 $respuesta_66_dos =  str_replace(' ','',$respuesta_66);

if ($respuesta_66_dos === 'log2+2logx') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66_dos === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
 $respuesta_67_dos =  str_replace(' ','',$respuesta_67);

if ($respuesta_67_dos === '3logx') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67_dos === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'O(xlogx)') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'x>1') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'O(x^2)') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
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
    .imagen {
        max-width: 100%;
        height: auto;
    }
    .seccion {
    width: 50%; /* El 50% del ancho de la página menos el margen izquierdo */
    padding: 20px; /* importante este padding*/
    box-sizing: border-box;
    height: 199vh;
    min-height: 180vh;
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

 
function mostrarImagen() {
  document.getElementById("contenedor").innerHTML = 
    "<img src='../../../../img/respuesta.png' alt='Imagen'>";
}
 

 

function actualizarFormula7() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_37').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula7').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_41').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula8').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula9() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_52').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ = ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula10() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_90').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula10').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula11() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_11').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula12() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_12').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula12').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
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
<form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
  <p>¿Qué se puede decir si ya se conocen las estimaciones Big-O de dos funciones? Supongamos que:</p>

    <ul>
    <li>\( f_1(x) = O(g_1(x)) \)</li>
    <li>\( f_2(x) = O(g_2(x)) \)</li>
    </ul>

    <p>A partir de la definición de notación Big-O, existen constantes \( C_1, C_2, k_1, k_2 \) tales que:</p>

    <ul>
    <li>\( |f_1(x)| \leq C_1 |g_1(x)| \) cuando \( x > k_1 \)</li>
    <li>\( |f_2(x)| \leq C_2 |g_2(x)| \) cuando \( x > k_2 \)</li>
    </ul>

    <p>Para estimar la <strong>suma</strong> de \( f_1(x) \) y \( f_2(x) \), usamos la desigualdad triangular:</p>
    <span id="formula7">
        \(       =    \)
    </span> 
    <br>
    <input type="text" name="respuesta_37" size="52" id="respuesta_37" oninput="actualizarFormula7()"
    value="<?php echo $respuesta_37?>">  
    
     

    <p>Cuando, 
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="12">    
    se cumple que:</p>

    <p>\[
    |f_1(x)| + |f_2(x)| \leq C_1 |g_1(x)| + C_2 |g_2(x)| \leq C_1 |g(x)| + C_2 |g(x)| \] 
    \[
    = (C_1 + C_2)|g(x)| = C|g(x)|
    \]</p>

    <p>donde:</p>
    <ul>
    <li>\( g(x) =  \)
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="18">  
    </li>
    <li>\( C =   \)
        <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="18"> 
    </li>
    </ul>

<p>Entonces:</p>

<p>\[
|(f_1 + f_2)(x)| \leq C \cdot g(x) \quad \text{cuando} \quad x > \max(k_1, k_2)
\]</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_37 ?>
<?php echo $verificar_38 ?>
<?php echo $verificar_39 ?>
<?php echo $verificar_40 ?>
    <hr>
    <strong>reutiliza:</strong>
    
<h3>Teorema 2</h3>
<p>Si \( f_1(x) = O(g_1(x)) \) y \( f_2(x) = O(g_2(x)) \), entonces:</p>



    <span id="formula8">
        \(       =    \)
    </span> 
    <br>
    <input type="text" name="respuesta_41" size="52" id="respuesta_41" oninput="actualizarFormula8()"
    value="<?php echo $respuesta_41?>">  

    <br><br>
    <strong>donde: </strong>
    g(x) = <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="18"> 

    <br><br>
     <input type="button" value="Mostrar corolario" 
       onmousedown="mostrarMensaje()" 
       onmouseup="ocultarMensaje()">

<div id="mensaje" style="display: none; margin-top: 10px;">
    <h3>Corolario 1</h3>
    <p>Si tanto \( f_1(x) \) como \( f_2(x) \) son \( O(g(x)) \), entonces también lo es su suma:</p>
    <p>\[
    (f_1 + f_2)(x) = O(g(x))
    \]</p>
</div>

<script>
    function mostrarMensaje() {
        const mensajeDiv = document.getElementById("mensaje");
        mensajeDiv.style.display = "block";
        if (window.MathJax) {
            MathJax.typesetPromise([mensajeDiv]);
        }
    }

    function ocultarMensaje() {
        const mensajeDiv = document.getElementById("mensaje");
        mensajeDiv.style.display = "none";
    }
</script>

    
    <button type="submit">Enviar</button>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
    <hr>
<h3>Objetivo al combinar funciones con notación Big-O</h3>
<p>Cuando combinamos funciones (por suma o multiplicación), el objetivo principal es encontrar una cota 
<input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="8">     
simple 
<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8"> 
tal que la función resultante sea 
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="8"> 
.</p>

<p>En este proceso, nos apoyamos en las constantes de las cotas originales, como 
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="8">     
y 
<input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="8"> 
, 
para construir una nueva constante 
<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="8"> 
que satisfaga la definición:</p>

<ul>
  <li>Para la suma: \( C = 
     \)
    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="8"> 
    </li>
  <li>Para el producto: \( C =   \)
    <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="8"> 
  </li>
</ul>

<p>El objetivo es mantener una expresión de crecimiento <strong>lo más simple posible</strong>, pero que todavía sea una buena estimación del comportamiento asintótico de la función combinada.</p>

<p>Esto es especialmente útil al analizar algoritmos que combinan varios subprocedimientos, donde la complejidad total es la suma (o el producto) de las complejidades de cada parte.</p>
    
    <button type="submit">Enviar</button>
    <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <hr>

        <button onmousedown="mostrarMensaje4()" onmouseup="ocultarMensaje4()">Ayuda/resumen global</button>
    <div id="mensaje4" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
 
    <strong>en suma max(|g1(x)|,|g2(x)|), en multiplicacion: O(g1(x)g2(x))</strong> 
    </div>

    
</div>




<div class="seccion derecha">
 
  <h3>Estimaciones Big-O para Productos de Funciones</h3>

  <p>De manera similar, se pueden derivar estimaciones Big-O para el <strong>producto</strong> de las funciones \( f_1 \) y \( f_2 \).</p>

  <p>Cuando \( x >   \)
  <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8">   
  , se cumple que:</p>

  <p>
    \[
    |(f_1 f_2)(x)| = |f_1(x)| \cdot |f_2(x)| \leq C_1 |g_1(x)| \cdot C_2 |g_2(x)|  
    \]
  </p>
   
    <span id="formula9">
        \(    =       \)
    </span> 
    <br>
    <input type="text" name="respuesta_52" size="40" id="respuesta_52" oninput="actualizarFormula9()"
    value="<?php echo $respuesta_52?>">  


  <p>donde \( C =  \)
  <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="8">   
  .</p>

  <p>Esto implica que \( f_1(x) f_2(x) = \)    
  <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="12">  
  .</p>

    <h2>Teorema 3</h2>
    <p>Si \( f_1(x) =   \)
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="8">     
    y \( f_2(x) =   \)
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="8">
    , entonces:</p>
    <br>
  <p>\(
  (f_1 f_2)(x) = \)
  <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="12">
   
   </p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_51 ?>
    <?php echo $verificar_52 ?>
    <?php echo $verificar_53 ?>
    <?php echo $verificar_54 ?>
    <?php echo $verificar_55 ?>
    <?php echo $verificar_56 ?>
    <?php echo $verificar_57 ?>
    <hr>

    
    <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Ayuda</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
     <h5>¿Por qué el libro NO usa \( \log n = O(n) \) en este ejemplo?</h5>

<p>
Aunque es cierto que
\[
\log n = O(n),
\]
el libro no utiliza esta cota en este paso porque hacerlo
<strong>empeoraría innecesariamente la estimación final</strong>.
</p>

<h5>Consecuencia de usar \( \log n = O(n) \)</h5>

<p>
Si se reemplazara \( \log n \) por \( n \), el análisis quedaría así:
</p>

<h5>Primer término</h5>

<p>
El primer término de la función es:
</p>

<p>
\[
3n \log(n!)
\]
</p>

<p>
Del libro se sabe que:
</p>

<p>
\[
\log(n!) = O(n \log n)
\]
</p>

<p>
Por lo tanto:
</p>

<p>
\[
3n \log(n!) = O(n^2 \log n)
\]
</p>

<h5>Segundo término</h5>

<p>
El segundo término es:
</p>

<p>
\[
(n^2 + 3)\log n
\]
</p>

<p>
Si se usa la cota \( \log n = O(n) \), se obtiene:
</p>

<p>
\[
(n^2 + 3)\log n = O(n^3)
\]
</p>

<h5>Resultado final con esta aproximación</h5>

<p>
Al combinar ambos términos:
</p>

<p>
\[
f(n) = 3n \log(n!) + (n^2 + 3)\log n
\]
</p>

<p>
se concluye que:
</p>

<p>
\[
f(n) = O(n^3)
\]
</p>

<h5>¿Por qué esta estimación no es conveniente?</h5>

<p>
Aunque la estimación \( O(n^3) \) es <strong>correcta</strong>,
no es la más ajustada.
</p>

<p>
Este resultado:
</p>

<ul>
    <li>Oculta que la función crece más lento</li>
    <li>Da una cota superior innecesariamente grande</li>
    <li>Reduce la precisión del análisis asintótico</li>
</ul>

<h5>Conclusión</h5>

<p>
Por esta razón, el libro <strong>no sustituye</strong> \( \log n \) por \( O(n) \),
y mantiene el término logarítmico para obtener una cota más precisa:
</p>

<p>
\[
f(n) = O(n^2 \log n)
\]
</p>

<p>
Esta es la <strong>mejor estimación asintótica</strong> para la función dada.
</p>
    </div>




    <h2>Ejemplo 9</h2>
  <p>Dar una estimación Big-O para:</p>
  <p>\[
  f(n) = 3n \cdot \log(n!) + (n^2 + 3) \cdot \log n
  \]</p>

  <h3>Solución:</h3>
  <ul>
    <li>
    Sabemos que \( \log(n!) =  \)
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="8">
    , \( 3n =  \)
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">
    ,
    \( \log n =  \)
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8">
    , entonces:
    <br><br>
    <p>
    \(
    3n \cdot \log(n!) = \)
    <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="8">
    </p>
    <br>
    </li>
    <li>
    Para 
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="8">
    ,  
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="15">
    , por lo tanto:
    <br><br>
    \(
    (n^2 + 3) \cdot \log n =  
    \)
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="15">
    </li>
    <br>
    <br>
    <li>
      Combinando ambos términos:
      \(
      f(n) = 
      \)
      <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="15">
    </li>
    </ul>
    <br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <?php echo $verificar_60 ?>
    <?php echo $verificar_61 ?>
    <?php echo $verificar_62 ?>
    <?php echo $verificar_63 ?>
    <?php echo $verificar_64 ?>
    <?php echo $verificar_65 ?>
    <hr>


    <button onmousedown="mostrarMensaje3()" onmouseup="ocultarMensaje3()">Ayuda</button>
    <div id="mensaje3" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
   <h5>Paso clave: Analizar \( \log(x^2 + 1) \)</h5>

<p>
Este es el paso clave del análisis.
</p>

<p>
Para valores grandes de \( x \), se cumple que:
</p>

<p>
\[
x^2 + 1 \le 2x^2 \quad \text{cuando } x > 1
\]
</p>

<p>
Ahora aplicamos logaritmo a ambos lados de la desigualdad:
</p>

<p>
\[
\log(x^2 + 1) \le \log(2x^2)
\]
</p>

<p>
Usando las propiedades del logaritmo:
</p>

<p>
\[
\log(2x^2) = \log 2 + \log x^2 = \log 2 + 2\log x
\]
</p>

<p>
Como \( \log 2 \) es una constante, para \( x \) suficientemente grande se tiene que:
</p>

<p>
\[
\log 2 + 2\log x \le 3\log x  
\]
</p>
<p>
recordar:   \(3\log x = \log x^3  \)
</p>
<p>
Esto demuestra que:
</p>

<p>
\[
\log(x^2 + 1) = O(\log x)
\]
</p>

<p>
<strong>Importante:</strong> esto no significa que las funciones sean iguales, sino que crecen al mismo orden.
</p>

    </div>

     <h2>Ejemplo 10</h2>
  <p>Dar una estimación Big-O para:</p>
  <p>\[
  f(x) = (x + 1) \cdot \log(x^2 + 1) + 3x^2
  \]</p>
    aveces se trata de encontrar la cota mas ajustada, mas simple.
  <h3>Solución:</h3>
  <ul>
    <li>
      \( x + 1 = O(x) \) y para \( x > 1 \), se cumple:
      \[
      \log(x^2 + 1) \leq \log(2x^2) =  
      \]

        <p>
            = 
            <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="15">
            \( \leq  \)
            <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="15">
        </p>

      entonces: <br><br>
      \(
      (x + 1) \cdot \log(x^2 + 1) =  \)
      <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="9">
      <br><br>
    </li>
    <li>
      \( 3x^2 = O(x^2) \)
    </li>
    <li>
      Como \( x \log x \leq x^2 \) para 
      <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="6">
      , entonces: <br><br>
      \(
      f(x) =  
      \)
      <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="6">
    </li>
  </ul>
    <button type="submit">Enviar</button>
    <?php echo $verificar_66 ?>
    <?php echo $verificar_67 ?>
    <?php echo $verificar_68 ?>
    <?php echo $verificar_69 ?>
    <?php echo $verificar_70 ?>
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
        href="quinto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
