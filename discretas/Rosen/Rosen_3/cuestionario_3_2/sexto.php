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
 
 
     $respuesta_1  = '|a+b|≤|a|+|b|';
    $respuesta_2  = 'magnitud';
    $respuesta_3  = 'suma';
    $respuesta_4  = 'supera';
    $respuesta_5  = 'individuales';
    $respuesta_6  = '2';
    $respuesta_7  = '6';
    $respuesta_8  = '2';
    $respuesta_9  = '6';
    $respuesta_10 = 'O(max(a(x),b(x)))';
    $respuesta_11 = 'O(x^2)';

    $respuesta_12 = 'O(a(x)*b(x))';
    $respuesta_13 = 'O(x^2)';
    $respuesta_14 = 'rapido';
    $respuesta_15 = 'combina';
    $respuesta_16 = 'superior';
    $respuesta_17 = 'g(x)';
    $respuesta_18 = '|f(x)|≥C|g(x)|';
    $respuesta_19 = 'x>k';
    $respuesta_20 = 'O(f(x))';
    $respuesta_21 = '\Omega(x^3)';
    $respuesta_22 = 'superior';

    $respuesta_23 = 'inferior';
    $respuesta_24 = 'C_1|g(x)|≤|f(x)|≤C_2|g(x)|';
    $respuesta_25 = '\Omega(n^2)';
    $respuesta_26 = '\Theta(n^2)';
    $respuesta_27 = 'lento';
    $respuesta_28 = 'rapido';
    $respuesta_29 = 'n^2';
    $respuesta_30 = '1';
    $respuesta_31 = '1/4';
    $respuesta_32 = '1';
    $respuesta_33 = '1/4';

    $respuesta_34 = '\log x≤x';
    $respuesta_35 = 'x≥1';
    $respuesta_36 = 'f(x) = \Theta(x^n)';
    $respuesta_37 = 'x^8';
    $respuesta_38 = 'x^19';
    $respuesta_39 = 'x^99';
    $respuesta_40 = 'x';

    $respuesta_41 = '10';
    $respuesta_42 = '1';
    $respuesta_43 = 'x>1';
    $respuesta_44 = '10';
    $respuesta_45 = '1';
    $respuesta_46 = 'x>1';
    $respuesta_47 = 'O(x)';
    $respuesta_48 = 'O(x)';
    $respuesta_49 = 'no';
    $respuesta_50 = 'no';
    $respuesta_51 = 'no';
    $respuesta_52 = 'no';

    $respuesta_53 = '5';
    $respuesta_54 = '1';
    $respuesta_55 = 'x>1';
    $respuesta_56 = 'O(x)';
    $respuesta_57 = '1';
    $respuesta_58 = '1';
    $respuesta_59 = 'x>1';
    $respuesta_60 = 'O(x)';
    $respuesta_61 = '1';
    $respuesta_62 = '2';
    $respuesta_63 = 'x>2';
    $respuesta_64 = 'O(x)';

       
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 64; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
    $respuesta_1_dos =  str_replace(' ','',$respuesta_1);

   if ($respuesta_1_dos === '|a+b|\leq|a|+|b|') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1_dos === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'magnitud') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'suma') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'supera') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'individuales') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '2') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === '6') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === '2') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === '6') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
    $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
    $respuesta_10_dos =  str_replace(' ','',$respuesta_10);

    if ($respuesta_10_dos === 'O(max(a(x),b(x)))') {  
       $verificar_10 = "correcto";
    } elseif ($respuesta_10_dos === '') {
       $verificar_10 = '';
    } else {
       $verificar_10 = "incorrecto";
    }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'O(x^2)') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     $respuesta_12_dos =  str_replace(' ','',$respuesta_12);

     if ($respuesta_12_dos === 'O(a(x)*b(x))') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12_dos === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'O(x^2)') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === 'rapido') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'combina') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === 'superior') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === 'g(x)') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    $respuesta_18_dos =  str_replace(' ','',$respuesta_18);
     
    if ($respuesta_18_dos === '|f(x)|\geqC|g(x)|') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18_dos === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'x>k') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'O(f(x))') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === '\Omega(x^3)') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21 === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'superior') {  
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'inferior') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   $respuesta_24_dos =  str_replace(' ','',$respuesta_24);

   if ($respuesta_24_dos === 'C_1|g(x)|\leq|f(x)|\leqC_2|g(x)|') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24_dos === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === '\Omega(n^2)') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === '\Theta(n^2)') {  
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
   if ($respuesta_28 === 'rapido') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'n^2') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === '1') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === '1/4') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === '1') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === '1/4') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

 $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
 $respuesta_34_dos =  str_replace(' ','',$respuesta_34);
if ($respuesta_34_dos === '\logx\leqx') { 
    $verificar_34 = "correcto";
} elseif ($respuesta_34_dos === '') {
    $verificar_34 = '';
} else {
    $verificar_34 = "incorrecto";
}

 $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
 $respuesta_35_dos =  str_replace(' ','',$respuesta_35);
if ($respuesta_35_dos === 'x\geq1') { 
    $verificar_35 = "correcto";
} elseif ($respuesta_35_dos === '') {
    $verificar_35 = '';
} else {
    $verificar_35 = "incorrecto";
}

 $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
if ($respuesta_36 === 'f(x) = \Theta(x^n)') { 
    $verificar_36 = "correcto";
} elseif ($respuesta_36 === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

 $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
if ($respuesta_37 === 'x^8') { 
    $verificar_37 = "correcto";
} elseif ($respuesta_37 === '') {
    $verificar_37 = '';
} else {
    $verificar_37 = "incorrecto";
}

 $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'x^19') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

 $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === 'x^99') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39 === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === 'x') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40 === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

 $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
if ($respuesta_41 === '10') { 
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
if ($respuesta_43 === 'x>1') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43 === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}

 $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
if ($respuesta_44 === '10') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44 === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

 $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
if ($respuesta_45 === '1') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45 === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

 $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === 'x>1') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46 === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

 $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === 'O(x)') { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47 === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}

 $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
if ($respuesta_48 === 'O(x)') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48 === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

 $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === 'no') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === 'no') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'no') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'no') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === '5') { 
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
if ($respuesta_55 === 'x>1') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'O(x)') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === '1') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === '1') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'x>1') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'O(x)') { 
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
if ($respuesta_62 === '2') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'x>2') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'O(x)') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
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
    height: 419vh;
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
 

function actualizarFormula() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_1').value || "";
 


    // Construir la fórmula dinámica
    var formula = ` \\   ${f} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}
 

function actualizarFormula2() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_18').value || "";
  
    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula3() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_21').value || "";
 


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
    var f = document.getElementById('respuesta_24').value || "";
   

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula4').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula5() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_25').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula5').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula6() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_26').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula6').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula7() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_34').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula7').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_35').value || "";
  

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
    var f = document.getElementById('respuesta_36').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
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

<form action="./sexto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
       <h3>Ejemplo: Análisis Asintótico de la Sumatoria</h3>
    g(n) = <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8"> para todos.
<ol>
  <li>
    <strong>Big-O:</strong> 
    <p>\(
    f(n) = O(n^2) \quad \text{✅ } C = 
    \)
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="8">
    </p>
    <p>\[
    f(n) = 1 + 2 + \dots + n \leq n^2
    \]</p>
  </li>

  <li>
    <strong>Big-Ω:</strong>
    <p>\(
    f(n) = \Omega(n^2) \quad C =  \)<input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8">
     </p>
    <p>\[
    f(n) = 1 + 2 + \dots + n \geq \frac{n^2}{4}
    \]</p>
  </li>

  <li>
    <strong>Big-Θ:</strong>
    <p>\(
    f(n) = \Theta(n^2) \quad   C_1 = \) 
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">
    , \( C_2 = \) 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="8">
    </p>
    <p>\[
    \frac{n^2}{4} \leq f(n) \leq n^2
    \]</p>
  </li>
</ol>

    <button type="submit">Enviar</button>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
    <?php echo $verificar_31 ?>
    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <hr>


    <h3> Ejemplo:</h3>
<p>
  Sea la función:<br>
  \[
  f(x) = 3x^2 + 8x \log x
  \]
</p>

<h4> Paso 1: Buscar una cota superior para \( f(x) \)</h4>
<p>
  Sabemos que:
  \[
  8x \log x \leq 8x^2 \quad \text{porque }\]
  
    

  <span id="formula7">
        \(     \)
    </span> 
    <input type="text" name="respuesta_34" size="8" id="respuesta_34" oninput="actualizarFormula7()"
    value="<?php echo $respuesta_34?>">
    <br><br>
   \( \text{ para } \)
    <br><br>
    
    <span id="formula8">
        \(     \)
    </span> 
    <input type="text" name="respuesta_35" size="8" id="respuesta_35" oninput="actualizarFormula8()"
    value="<?php echo $respuesta_35?>">



  <br><br>
  Entonces:
  \[
  f(x) = 3x^2 + 8x \log x \leq 3x^2 + 8x^2 = 11x^2
  \]
  Esto implica:
  \[
  f(x) = O(x^2)
  \]
</p>

<h4> Paso 2: Buscar una cota inferior para \( f(x) \)</h4>
<p>
  Sabemos que \( f(x) \) tiene un término de orden \( x^2 \) (específicamente \( 3x^2 \)), por lo tanto:
  \[
  f(x) \geq 3x^2 \Rightarrow f(x) = \Omega(x^2)
  \]
</p>

<h4> Conclusión:</h4>
<p>
  Como tienes una cota superior y una cota inferior con la misma función \( x^2 \), se concluye que:
  \[
  f(x) = \Theta(x^2)
  \]
</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>
    <hr>
</div>




<div class="seccion derecha">
 

    <h2>Teorema (Grado del Polinomio)</h2>
    <p>
    Si \( f(x) = a_nx^n + \dots + a_1x + a_0 \) y \( a_n \neq 0 \), entonces:
    <br>

    <span id="formula9">
        \(     \)
    </span> 
    <input type="text" name="respuesta_36" size="15" id="respuesta_36" oninput="actualizarFormula9()"
    value="<?php echo $respuesta_36?>">
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_36 ?>
    
    </p>
    <hr>
 
     <h3>Ejemplos:</h3>
    <ul>
    <li> \( 3x^8 + 10x^7 + 221x^2 + 1444 \Rightarrow \Theta(  \)   
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="4">
    \( )  \)

    </li>
    <li> \( x^{19} - 18x^4 - 10112 \Rightarrow \Theta(  \)   
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="4">
    \( )  \)</li>

    <li> \( -x^{99} + 40001x^{98} + 100003x \Rightarrow \Theta(  \)   
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="4">
    \( )  \)</li>
    </ul>
        <button type="submit">Enviar</button>
          <?php echo $verificar_37 ?>
<?php echo $verificar_38 ?>
<?php echo $verificar_39 ?>
<hr>
    


<button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Ayuda</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    <img src="../../../../img/guia_470.png" alt="">
    </div>


     <h2>Ejercicio 1: Determinar si f(x) es O(x)</h2>
    <p> <strong>para todos los casos g(x) = 
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="4">
    </strong> </p>
    <p>
    <strong>Si se cumple, escriba los valores correpondientes, sino, escriba no</strong>
    </p>
    <h4>a) \( f(x) = 10 \)</h4>
    <p>

    Esto se cumple si elegimos \( C =  \)
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="4">
    , \( k =  \)
    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="4">
    ,  para 
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="4">
    .
    </p>
    <p><strong>Conclusión:</strong> \( f(x) = 10 \) es .
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="4">
    </p>

    <br><br>
    <h4>b) \( f(x) = 3x + 7 \)</h4>
     <p>

    Esto se cumple si elegimos \( C =  \)
    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="4">
    , \( k =  \)
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="4">
    ,  para 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="4">
    .
    </p>
    <p><strong>Conclusión:</strong> \( f(x) = 3x + 7 \) es  
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="4"></p>

    <h4>c) \( f(x) = x^2 + x + 1 \)</h4>
    Esto se cumple si elegimos \( C =  \)
    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="4">
    , \( k =  \)
    <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="4">
    ,  para 
    <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="4">
    .
    </p>
    <p><strong>Conclusión:</strong> \( f(x) = x^2 + x + 1\) es  
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="4"></p>
 

    <h4>d) \( f(x) = 5 \log x \)</h4>
        Esto se cumple si elegimos \( C =  \)
    <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="4">
    , \( k =  \)
    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="4">
    ,  para 
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="4">
    .
    </p>
 

    <p><strong>Conclusión:</strong> \( f(x) = 5 \log x \) es 
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="4">
    .</p>


    <h3>e) \( f(x) = \lfloor x \rfloor \)</h3>
    Esto se cumple si elegimos \( C =  \)
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="4">
    , \( k =  \)
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="4">
    ,  para 
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="4">
    .
    </p>
 

    <p><strong>Conclusión:</strong> \( f(x) = \lfloor x \rfloor\) es 
    <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="4">
    </p>
   

    <h3>f) \( f(x) = \lceil x/2 \rceil \)</h3>
    Esto se cumple si elegimos \( C =  \)
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="4">
    , \( k =  \)
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="4">
    ,  para 
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="4">
    .
    </p>
 

    <p><strong>Conclusión:</strong> \( f(x) = \lfloor x \rfloor\) es 
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="4">
    <br><br>
     <button type="submit">Enviar</button>
    <?php echo $verificar_40 ?>
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
<?php echo $verificar_58 ?>
<?php echo $verificar_59 ?>
<?php echo $verificar_60 ?>
<?php echo $verificar_61 ?>
<?php echo $verificar_62 ?>
<?php echo $verificar_63 ?>
<?php echo $verificar_64 ?>
        <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
     <!-- #region -->
</div>
</div>
</form>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="sexto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
