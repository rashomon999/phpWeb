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
if ($respuesta_62 === 'n^2+3<2n^2') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
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
if ($respuesta_66 === 'log2+2logx') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === '3logx') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
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
    height: 280vh;
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

 
function mostrarImagen() {
  document.getElementById("contenedor").innerHTML = 
    "<img src='../../../../img/respuesta.png' alt='Imagen'>";
}
 

function actualizarFormula() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_12').value || "";
 


    // Construir la fórmula dinámica
    var formula = ` \\ log_b n = ${f} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}
 

function actualizarFormula2() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_13').value || "";
  
    // Construir la fórmula dinámica
    var formula = ` \\ log_2 n = ${f}  \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula3() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_16').value || "";
 


    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula3').innerHTML = `\\(${formula}\\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_17').value || "";
   

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula4').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula5() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_19').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula6() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_20').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula6').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
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
<form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
     <h2>¿Por qué no importa la base del logaritmo en notación Big-O?</h2>

    <h3> Idea clave:</h3>
    <p>Cuando hablamos de <strong>notación Big-O</strong>, solo nos importa el <em>comportamiento de 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">   
    </em> 
    de una función cuando 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">   
    crece mucho.</p>
    <p><strong>No</strong> nos importan las 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">   
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">   
    .</p>
    <p>Por eso, 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">       
    la 
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">  
    del 
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">  
    <strong>no cambia su clase de crecimiento</strong>.</p>

    <h3> Veamos esto con una propiedad matemática importante:</h3>
    <p>Cualquier logaritmo en base 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">      
    se puede 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="8">  
    en 
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">   
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">  
    k
    así ( <strong>utilizar \log </strong> ):</p>


    <span id="formula">
        \(  log_b n =   \)
    </span> 
    <input type="text" name="respuesta_12" size="19" id="respuesta_12" oninput="actualizarFormula()"
    value="<?php echo $respuesta_12?>">
    <br>
  
    <br>
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
    <hr>


      con k = 10 y b = 2. notamos que ( escriba como fraccion con log ):
   
    <span id="formula2">
        \[  log_2 n =   \]
    </span> 
    <br>
    <input type="text" name="respuesta_13" size="25" id="respuesta_13" oninput="actualizarFormula2()"
    value="<?php echo $respuesta_13?>">


    <p>Entonces:</p>

    <p style="text-align: center;">
    \[
    \log_2 n \leq 3.32 \cdot \log_{10} n \quad \text{para todo } n > 1
    \]
    </p>
    
 
    <p>¡Eso cumple perfectamente la definición de Big-O! Solo hay una constante (\( C = 3.32 \)), y eso está permitido.</p>

    <h3>Por lo tanto:</h3>
    <p style="text-align: center;">
    \[
    \log_2 n = O(\log_{10} n) \quad \text{y también} \quad \log_{10} n = O(\log_2 n)
    \]
    </p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_13 ?>

    <hr>


      <h2>Estimaciones &Uacute;tiles de Big-O con Logaritmos, Potencias y Exponenciales</h2>
  <p>Estos hechos nos ayudan a determinar relaciones Big-O entre funciones como potencias, logaritmos y funciones exponenciales \( b^n \) con \( b > 1 \).</p>



<button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Ayuda</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
<h5>1. Polinomios ( d &gt; c &gt; 1 )</h5>

<h5>Enunciado del libro</h5>
<p>
    \( n^c \text{ es } O(n^d) \)
</p>

<h5>Ejemplo</h5>
<p>
    \( n^2 \text{ es } O(n^3) \)
</p>

<hr>

<h5>2. Logaritmos vs Potencias</h5>

<h5>Enunciado del libro</h5>
<p>
    \( (\log_b n)^c \text{ es } O(n^d) \)
</p>

<h5>Ejemplo</h5>
<p>
    \( (\log_2 n)^2 \text{ es } O(n) \)
</p>

<hr>

<h5>3. Potencias vs Exponenciales</h5>

<h5>Enunciado del libro</h5>
<p>
    \( n^d \text{ es } O(b^n) \)
</p>

<h5>Ejemplo</h5>
<p>
    \( n^3 \text{ es } O(2^n) \)
</p>

<hr>

<h5>4. Comparando Exponenciales ( c &gt; b &gt; 1 )</h5>

<h5>Enunciado del libro</h5>
<p>
    \( b^n \text{ es } O(c^n) \)
</p>

<h5>Ejemplo</h5>
<p>
    \( 2^n \text{ es } O(3^n) \)
</p>

<hr>

<h5>5. Exponencial vs Factorial</h5>

<h5>Enunciado del libro</h5>
<p>
    \( c^n \text{ es } O(n!) \)
</p>

<h5>Ejemplo</h5>
<p>
    \( 2^n \text{ es } O(n!) \)
</p>

    </div>







  <h3>1. Polinomios</h3>
  <p>Si \( f(n) \) es un polinomio de grado \( d \), entonces:</p>
 
    \( f(n) =   \)
   <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">  

    <br><br>
    Si \( d > c > 1 \), entonces:
    \( n^c =    \)

    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">  

    \( \quad 
    \text{pero} \quad n^d \neq O(n^c) \)
  
    <br>
  <h3>2. Logaritmos</h3>
  <p>Si \( b > 1 \), \( c > 0 \), \( d > 0 \), entonces (c y d exponentes):</p>
 
    <span id="formula3">
        \(      =    \)
    </span> 
    <br>
    <input type="text" name="respuesta_16" size="25" id="respuesta_16" oninput="actualizarFormula3()"
    value="<?php echo $respuesta_16?>">

    \(  \text{pero} \quad n^d \neq O((\log_b n)^c) \)
    <br><br>


    <h3>3. Exponenciales vs Polinomios</h3>
    <p>Para todo \( d > 0 \) y \( b > 1 \):</p>
      
    <span id="formula4">
        \(       =    \)
    </span> 
    <br>
    <input type="text" name="respuesta_17" size="25" id="respuesta_17" oninput="actualizarFormula4()"
    value="<?php echo $respuesta_17?>">
    \( \quad \text{pero} \quad b^n \neq O(n^d) \)
    <p>
    El crecimiento polinómico es 
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">  
    que el crecimiento exponencial, especialmente cuando analizamos el comportamiento asintótico (cuando 
    \( x \to \infty \)).
    </p>


  <h3>4. Comparando Exponenciales</h3>
  <p>Si \( c > b > 1 \), entonces:</p>
    
    <span id="formula5">
        \(       =    \)
    </span> 
    <br>
    <input type="text" name="respuesta_19" size="25" id="respuesta_19" oninput="actualizarFormula5()"
    value="<?php echo $respuesta_19?>">
    \( \text{pero} \quad c^n \neq O(b^n) \)
   

    <h3>5. Factorial</h3>
    <p>Si \( c > 1 \), entonces:</p>
 
     
    <span id="formula6">
        \(       =    \)
    </span> 
    <br>
    <input type="text" name="respuesta_20" size="25" id="respuesta_20" oninput="actualizarFormula6()"
    value="<?php echo $respuesta_20?>">  
      
      \( \quad \text{pero} \quad n! \neq O(c^n) \)
 
 
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?>
    <?php echo $verificar_20 ?>
    <hr>

   
 
</div>




<div class="seccion derecha">
      <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">clave</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
  <h2>Clases de complejidad</h2>

    <ul>
        <li>\( O(\log n) \)</li>
        <li>\( O(n) \)</li>
        <li>\( O(n \log n) \)</li>
        <li>\( O(n^2) \)</li>
    </ul>

    <h3>Relaciones según la definición de Big-O</h3>

    <p>
        \[
        \log n = O(n)
        \]
    </p>

    <p>
        \[
        n \log n = O(n^2)
        \]
    </p>

    </div>



    <h3>Ejemplo 8: Orden de Crecimiento</h3>
  <p>Ordena las funciones para que cada una sea Big-O de la siguiente:</p>
  <ul>
    <li>\( f_1(n) = 8\sqrt{n} = 8n^{1/2} \)</li>
    <li>\( f_2(n) = (\log n)^2 \)</li>
    <li>\( f_3(n) = 2n \log n \)</li>
    <li>\( f_4(n) = n! \)</li>
     <li>\( f_5(n) = (1.1)^n \)</li>
    <li>\( f_6(n) = n^2 \)</li>
   
  </ul>
  <p>Por lo tanto, el orden de menor a mayor crecimiento es ( <strong>introdusca el numero del subindice</strong> ) :</p>
     <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="8">  
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="8">  
    <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="8">  
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="8">  
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">  
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8"> 
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>    
    <?php echo $verificar_23 ?>
    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>
    <?php echo $verificar_26 ?>

    <hr>
    En Big O se busca la funcion con mas 
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8"> 
    crecimiento.
    <br><br>
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="8"> 
    esta entre 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8"> 
    y
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="8"> 
    en terminos de crecimiento.
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_27 ?>
    <?php echo $verificar_28 ?>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
    <hr>

    <h2>3.2.4 El crecimiento de combinaciones de funciones</h2>

    <p>Muchos algoritmos están compuestos por 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8">     
    o 
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8"> 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="14"> 
    separados. El número de pasos que una computadora utiliza para resolver un problema con una
    entrada de tamaño dado usando un algoritmo así es la 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8"> 
    del número de pasos utilizados por estos subprocedimientos.</p>

    <p>Para dar una estimación Big-O del número total de pasos necesarios, es necesario encontrar 
    estimaciones Big-O para cada subprocedimiento y luego combinarlas.</p>

    <p>Se pueden proporcionar estimaciones Big-O de combinaciones de funciones, siempre que se tenga 
    cuidado al combinar diferentes estimaciones. En particular, a menudo es necesario estimar el
     crecimiento de la 
     <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
     y del 
     <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">
     de dos funciones.</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_31 ?>
    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>
    <?php echo $verificar_36 ?>
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
        href="cuarto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
