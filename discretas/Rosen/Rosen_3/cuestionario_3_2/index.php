<?php
 
 $respuesta_56_dos='';
  
for ($i = 0; $i <= 230; $i++) {
    ${"respuesta_" . $i} = '';
}

$verificar_30_1 = '';
$respuesta_30_1 = '';
    
 
for ($i = 0; $i <= 230; $i++) {
    ${"verificar_" . $i} = '';
}

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
 
  $respuesta_0 = 'constante';
$respuesta_1 = 'crece';
$respuesta_2 = 'tamaño';
$respuesta_3 = 'f';
$respuesta_4 = 'g';
$respuesta_5 = 'funciones';
$respuesta_6 = 'f(x)';
$respuesta_7 = 'O(g(x))';
$respuesta_8 = 'C';
$respuesta_9 = 'K';
$respuesta_10 = '|f(x)|≤C|g(x)|';
$respuesta_11 = 'siempre que x > k';

$respuesta_12 = 'conjunto';
$respuesta_13 = 'enteros';
$respuesta_14 = 'conjunto';
$respuesta_15 = 'reales';
$respuesta_16 = 'reales';
$respuesta_17 = 'f(x)';
$respuesta_18 = 'g(x)';
$respuesta_19 = 'f(x)';
$respuesta_20 = 'maximo';
$respuesta_21 = 'rapido';
$respuesta_22 = 'g(x)';

$respuesta_23 = 'constante';
$respuesta_24 = 'lento';
$respuesta_25 = 'multiplo';
$respuesta_26 = 'g(x)';
$respuesta_27 = 'x';
$respuesta_28 = 'crece';
$respuesta_29 = 'C';
$respuesta_30 = 'K';
$respuesta_31 = 'f(x)';
$respuesta_30_1 = 'x>k';
$respuesta_32 = 'O(g(x)';
$respuesta_33 = 'infinitos';

$respuesta_34 = 'c < c\'';
$respuesta_35 = 'k < k\'';
$respuesta_36 = '|f(x)| ≤ c|g(x)| ≤ c\'|g(x)|';
$respuesta_37 = 'x > k';
$respuesta_38 = 'Paul Bachmann';
$respuesta_39 = '1892';
$respuesta_40 = 'Landau';
$respuesta_41 = 'Edmund Landau';
$respuesta_42 = 'Donald Knuth';
$respuesta_43 = 'x^2 > x';
$respuesta_44 = 'x > 1';
$respuesta_45 = 'x^2 > 1';
$respuesta_46 = 'x > 1';
$respuesta_47 = '4';
$respuesta_48 = '1';
$respuesta_49 = '7';
$respuesta_50 = '1';
$respuesta_51 = 'dividir';
$respuesta_52 = 'n';
$respuesta_53 = 'C';
$respuesta_54 = 'n';
$respuesta_55 = 'depender';
$respuesta_56 = 'x^2+2x+1\leqx^2+2x^2+x^2=4x^2';
$respuesta_57 = 'x^2'; 
$respuesta_58 = '|x^2+2x+1| \leq C |x^2|'; 
        // Marcar todas como correctas
    for ($i = 1; $i <= 60; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {

    
 $respuesta_0 = isset($_POST['respuesta_0']) ? $_POST['respuesta_0'] : '';
   if ($respuesta_0 === 'constante') {  
       $verificar_0 = "correcto";
   } elseif ($respuesta_0 === '') {
       $verificar_0 = '';
   } else {
       $verificar_0 = "incorrecto";
   }

    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'crece') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'tamaño') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'f') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'g') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'funciones') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'f(x)') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'O(g(x))') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'C') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'K') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   $respuesta_10_dos = str_replace(' ','',$respuesta_10);

   if ($respuesta_10_dos === '|f(x)|\leqC|g(x)|') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10_dos === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
      $respuesta_11_dos = str_replace(' ','',$respuesta_11);

   if ($respuesta_11_dos === 'siemprequex>k') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11_dos === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === 'conjunto') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'enteros') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === 'conjunto') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'reales') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === 'reales') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === 'f(x)') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === 'g(x)') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'f(x)') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'maximo') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === 'rapido') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21 === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'g(x)') {  
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'constante') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'lento') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'multiplo') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'g(x)') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'x') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'crece') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'C') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'K') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }


   // Verificar la respuesta de la octava pregunta
   $respuesta_30_1 = isset($_POST['respuesta_30_1']) ? $_POST['respuesta_30_1'] : '';
   $respuesta_30_1_dos =  str_replace(' ','',$respuesta_30_1);
   
   if ($respuesta_30_1_dos === 'x>k') {  
       $verificar_30_1 = "correcto";
   } elseif ($respuesta_30_1_dos === '') {
       $verificar_30_1 = '';
   } else {
       $verificar_30_1 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'f(x)') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'O(g(x))') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'infinitos') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

 $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
  $respuesta_34_dos = str_replace(" ","",strtolower($respuesta_34));

if ($respuesta_34_dos === "c<c'") { 
    $verificar_34 = "correcto";
} elseif ($respuesta_34_dos === '') {
    $verificar_34 = '';
} else {
    $verificar_34 = "incorrecto";
}

 $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
 $respuesta_35_dos = str_replace(" ","",strtolower($respuesta_35));
if ($respuesta_35_dos === "k<k'") { 
    $verificar_35 = "correcto";
} elseif ($respuesta_35_dos === '') {
    $verificar_35 = '';
} else {
    $verificar_35 = "incorrecto";
}

 $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
 $respuesta_36_dos = str_replace(" ","",strtolower($respuesta_36));

if ($respuesta_36_dos === "|f(x)|\leqc|g(x)|\leqc'|g(x)|") { 
    $verificar_36 = "correcto";
} elseif ($respuesta_36_dos === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

 $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
 $respuesta_37_dos = str_replace(" ","",strtolower($respuesta_37));

if ($respuesta_37_dos === "x>k") { 
    $verificar_37 = "correcto";
} elseif ($respuesta_37_dos === '') {
    $verificar_37 = '';
} else {
    $verificar_37 = "incorrecto";
}

 $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'Paul Bachmann') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

 $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === '1892') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39 === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === 'Landau') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40 === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

 $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
if ($respuesta_41 === 'Edmund Landau') { 
    $verificar_41 = "correcto";
} elseif ($respuesta_41 === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

 $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
if ($respuesta_42 === 'Donald Knuth') { 
    $verificar_42 = "correcto";
} elseif ($respuesta_42 === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

$respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
$respuesta_43_dos = str_replace(" ","",strtolower($respuesta_43));

if ($respuesta_43_dos === 'x^2>x') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43_dos === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}

 $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
 $respuesta_44_dos = str_replace(" ","",strtolower($respuesta_44));

if ($respuesta_44_dos === 'x>1') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44_dos === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

 $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
 $respuesta_45_dos = str_replace(" ","",strtolower($respuesta_45));

if ($respuesta_45_dos === 'x^2>1') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45_dos === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

 $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
  $respuesta_46_dos = str_replace(" ","",strtolower($respuesta_46));

if ($respuesta_46_dos === 'x>1') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46_dos === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

 $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === '4') { 
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
if ($respuesta_49 === '7' || $respuesta_49 === '7') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === '1' || $respuesta_50 === '1' ) { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'dividir') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'n') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'C') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'n') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'depender') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}

 

 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
   $respuesta_56_dos =  str_replace(' ','',$respuesta_56);
if ($respuesta_56_dos === 'x^2+2x+1\leqx^2+2x^2+x^2=4x^2') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56_dos === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'x^2') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
  $respuesta_58_dos =  str_replace(' ','',$respuesta_58);

if ($respuesta_58_dos === '|x^2+2x+1|\leqC|x^2|') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58_dos === '') {
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

}}
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
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
        height: 225vh;
    min-height: 225vh;
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
   
    var f = document.getElementById('respuesta_10').value || "";
 


    // Construir la fórmula dinámica
    var formula = ` \\  ${f} \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}
 

function actualizarFormula2() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_36').value || "";
  
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
   
    var f = document.getElementById('respuesta_56').value || "";
 


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
    var f = document.getElementById('respuesta_57').value || "";
   

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
    var f = document.getElementById('respuesta_58').value || "";
  

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
    var f = document.getElementById('respuesta_71').value || "";
  

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
    var f = document.getElementById('respuesta_76').value || "";
  

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
    var f = document.getElementById('respuesta_88').value || "";
  

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
    var f = document.getElementById('respuesta_89').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula9').innerHTML = `\\( ${formula} \\)`;

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
<form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda">  
       <h4>3.2 El Crecimiento de las Funciones</h4>
            <p>
  El tiempo requerido para resolver un problema depende de más que solo la cantidad de operaciones que utiliza. 
  El tiempo también depende del hardware y el software utilizados para ejecutar el programa que implementa el 
  algoritmo. Sin embargo, cuando cambiamos el hardware y software utilizados para implementar un algoritmo, 
  podemos aproximar de cerca el tiempo requerido para resolver un problema de tamaño \( n \) multiplicando el
tiempo anterior por una 
     <input type="text" name="respuesta_0" value="<?php echo $respuesta_0; ?>" size="8"> 
. Por ejemplo, en una supercomputadora podríamos resolver un problema de tamaño
 \( n \) un millón de veces más rápido que en una PC. Sin embargo, este factor de un millón no dependerá de \( n \)
  (excepto tal vez de manera menor).
</p>
<button type="submit">Enviar</button>
<?php echo $verificar_0 ?>
    <hr>
    <p>
    Usando la notación big-O, 
    podemos comparar dos algoritmos para determinar cuál es más eficiente a medida que 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">    
    el 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">    
    de la entrada. 
    Por ejemplo, si tenemos dos algoritmos para resolver un problema, uno que usa \( 100n^2 + 17n + 4 \) operaciones
    y otro que usa \( n^3 \) operaciones, la notación big-O puede ayudarnos a ver que el primer algoritmo utiliza
    muchas menos operaciones cuando \( n \) es grande, aunque use más operaciones para valores pequeños de \( n \),
    como \( n = 10 \).
    </p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <hr>


    <h2>3.2.2 Notación Big-O</h2>
    <p>
    El crecimiento de las funciones se describe a menudo utilizando una notación especial. La Definición 1 
    describe esta notación.
    </p>

    <h3>Definición 1</h3>
    <p>
    Sean 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="2">    
    y 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="2">    
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">    
    del 
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">    
    de los 
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">
    o del 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">
    de los números 
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">
    al conjunto
    de los números 
    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="8">
    . Decimos que 
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="4">    
    es
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="4">    
    si existen constantes 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="4">    
    y 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="4">    
    tales que
    </p>
    <span id="formula">
        \(    \)
    </span> 
    <input type="text" name="respuesta_10" size="14" id="respuesta_10" oninput="actualizarFormula()"
    value="<?php echo $respuesta_10?>">
    <br><br>
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="17">    

 <br>
<p>
  Esto se lee como “
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">
  es big-oh de 
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">
  ”.]
</p>
<br>
<button type="submit">Enviar</button>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
     <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?>
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?>
    
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <hr>
 

    <h3>Observación</h3>
    <p>
    Intuitivamente, la definición de que \( f(x) \) es \( O(g(x)) \) dice que \( f(x) \) crece más 
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="8">
    que algún 
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">
    fijo de 
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8">
    a medida que 
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="8">
     sin límite.
    </p>

    <p>
    Las constantes 
     <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8">
    y 
     <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="8">
    en la definición de la notación big-O se llaman <em>testigos</em> 
    de la relación \( f(x) \) es \( O(g(x)) \). Para establecer que \( f(x) \) es \( O(g(x)) \) solo
    necesitamos un par de testigos para esta relación. Es decir, para mostrar que \( f(x) \) es \( O(g(x)) \), 
    solo necesitamos encontrar un par de constantes \( C \) y \( k \), los testigos, tal que \( |f(x)| \leq C|g(x)| \) 
    siempre que 
    <input type="text" name="respuesta_30_1" value="<?php echo $respuesta_30_1; ?>" size="8">
    
    </p>

    <button type="submit">Enviar</button>
 
<?php echo $verificar_24 ?>
<?php echo $verificar_25 ?>
<?php echo $verificar_26 ?>
<?php echo $verificar_27 ?>
<?php echo $verificar_28 ?>
<?php echo $verificar_29 ?>
<?php echo $verificar_30 ?>
<?php echo $verificar_30_1 ?>

     
    <hr>
    <p>
    Observa que cuando existe un par de testigos para la relación 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8">
    es 
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">
    , existen 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="8">
    pares de testigos. Para ver esto, nota que si \( C \) y \( k \) son un par de testigos, entonces cualquier 
    par \( C' \) y \( k' \), donde  
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8">
    y 
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
    , también es un par de testigos, porque
    </p>

    <span id="formula2">
        \(    \)
    </span> 
    <input type="text" name="respuesta_36" size="25" id="respuesta_36" oninput="actualizarFormula2()"
    value="<?php echo $respuesta_36?>">
    <br><br>
    siempre que
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="8">    
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_31 ?>
    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>
    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <hr>
 
</div>




<div class="seccion derecha">
         <h2>LA HISTORIA DE LA NOTACIÓN BIG-O</h2>
    <p>
    La notación <strong>big-O</strong> se ha utilizado en matemáticas durante más de un siglo.
    En ciencias de la computación, se utiliza ampliamente en el análisis de algoritmos, como se verá en la Sección 3.3.
    El matemático alemán 
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="14">
    introdujo por primera vez la notación big-O en 
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="4">
    en un
    importante libro sobre teoría de números.
    El símbolo big-O a veces se llama <em>símbolo de  </em>
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="4">
    , en honor al matemático alemán 
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="12">
    , quien utilizó esta notación en toda su obra.
    El uso de la notación big-O en ciencias de la computación fue popularizado por
    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="12">
    ,quien también introdujo las notaciones <strong>big-Ω</strong> y <strong>big-Θ</strong> que se definen más 
    adelante en esta sección.
    </p>
    <button type="submit">Enviar</button>
 
    <?php echo $verificar_38 ?>
    <?php echo $verificar_39 ?>
    <?php echo $verificar_40 ?>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
    <hr>
    <p>
    Demuestra que \( f(x) = x^2 + 2x + 1 \) es \( O(x^2) \).
    </p>
    <p>
        Del problema sabemos que g(x):
           <span id="formula4">
      \(    \)
    </span> 

        <input type="text" name="respuesta_57" size="5" id="respuesta_57" oninput="actualizarFormula4()"
    value="<?php echo $respuesta_57?>">

    </p>
    
    <p>
    De la formula sabemos que:
         <span id="formula5">
      \(    \)
    </span> 

        <input type="text" name="respuesta_58" size="35" id="respuesta_58" oninput="actualizarFormula5()"
    value="<?php echo $respuesta_58?>">

    </p>

    <p><strong>Queremos comparar:</strong></p>

    <ul>
    <li>\( 2x < 2x^2 \)</li>
    <li>\( 1 < x^2 \)</l>
    </ul>

    <p><strong>Para que estas desigualdades sean verdaderas, necesitas que:</strong></p>

    <ul>
    <li>
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="12">    
     , lo cual se cumple cuando 
    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="12">
    </li>
    <li>
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="12">    
    , que también se cumple cuando 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="12">
    </li>
    </ul>


    <p>de lo que se deduce que (hacer: __ signo __ signo __):</p>

      <span id="formula3">
      \(    \)
    </span> 

        <input type="text" name="respuesta_56" size="39" id="respuesta_56" oninput="actualizarFormula3()"
    value="<?php echo $respuesta_56?>">
    <br>
    <strong>Entonces, resuelve y :</strong>
    C:<input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="12">
    k:<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="12">
    <br>
    es decir formamos una funcion con multiplo \( x^2 \) que asegura que es mayor a f(x) con x>1
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_57 ?>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_56 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <hr>
    <strong>Demostrar \(7x^2\) es \( O(x^3) \) </strong>
    <br><br>
    C:<input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="12">
    k:<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="12">
    <br>
    <br>
     <button type="submit">Enviar</button>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <hr>
    <p><strong>Ejemplo 3</strong> Muestra que <code>n²</code> no es <code>O(n)</code>.</p>
    <p><strong>Solución:</strong> Para mostrar que <code>n²</code> no es <code>O(n)</code>, debemos demostrar
    que no existe ningún par de testigos <code>C</code> y <code>k</code> tales que <code>n² ≤ Cn</code> siempre
    que <code>n > k</code>. Utilizaremos una demostración por contradicción para mostrar esto.</p>
    <p>Supongamos que existen las constantes <code>C</code> y <code>k</code> para las cuales <code>n² ≤ Cn</code>
    siempre que <code>n > k</code>. Observa que cuando <code>n > 0</code>, podemos 
    <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8">
    ambos lados de la 
    desigualdad <code>n² ≤ Cn</code> por 
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="8">
    para obtener la desigualdad equivalente <code>n ≤ C</code>.
    Sin embargo, no importa cuáles sean <code>C</code> y <code>k</code>, la desigualdad <code>n ≤ C</code> no puede
    mantenerse para todos los <code>n</code> con <code>n > k</code>. En particular, una vez que fijamos un valor de
    <code>k</code>, vemos que cuando <code>n</code> es mayor que el máximo entre <code>k</code> y <code>C</code>, no 
    es cierto que <code>n ≤ C</code> aunque <code>n > k</code>. Esta contradicción demuestra que <code>n²</code> no 
    es <code>O(n)</code>.</p>
    <p>Puedes elegir cualquier constante \( C > 0 \) que te ayude a demostrar la desigualdad.</p>

<p>También puedes elegir cualquier \( k \geq 0 \) como “el punto a partir del cual empieza a cumplirse la desigualdad”.</p>

<p><strong> Pero lo que no puedes hacer:</strong></p>
<ul>
  <li>No puedes cambiar 
      <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="12">  
  según el valor de
      <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="12">
  .</li>
  <li>Una vez eliges una constante \( C \), debe funcionar para todos los \( n > k \).</li>
  <li>\( C \) no puede 
   <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="12">  
  de \( n \).</li>
  <li>Si dependiera de \( n \), ya no sería una constante, y eso rompe la definición de Big-O.</li>
</ul>
    <br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_51 ?>
    <?php echo $verificar_52 ?>
    <?php echo $verificar_53 ?>
    <?php echo $verificar_54 ?>
    <?php echo $verificar_55 ?>


     <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Ayuda</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
 <h4>¿Qué significa decir que n² es O(n)?</h4>

<p>
Decir que <strong>n² es O(n)</strong> significa que
<strong>existen constantes</strong> <em>C &gt; 0</em> y <em>k</em> tales que:
</p>

<p>
\( n^2 \le Cn \quad \text{para todo } n > k \)
</p>

<ul>
  <li><strong>C</strong>: una constante fija</li>
  <li><strong>k</strong>: el punto a partir del cual empieza a cumplirse la desigualdad</li>
  <li><strong>No pueden cambiar según n</strong></li>
</ul>

<hr>

<h4>Probemos con números (ejemplo concreto)</h4>

<p>
Supongamos que alguien dice:
</p>

<p>
“Sí, claro que se puede. Tomemos <strong>C = 100</strong> y <strong>k = 1</strong>”.
</p>

<p>
Entonces la desigualdad sería:
</p>

<p>
\( n^2 \le 100n \quad \text{para todo } n > 1 \)
</p>

<hr>

<h4>Simplificamos la desigualdad</h4>

<p>
Para <em>n &gt; 0</em>, podemos dividir ambos lados entre <em>n</em>:
</p>

<p>
\( n \le 100 \)
</p>

<hr>

<h4>Aquí aparece el problema</h4>

<p>
La desigualdad exige que:
</p>

<p>
\( n \le 100 \quad \text{para todo } n > 1 \)
</p>

<p>
Probemos algunos valores:
</p>

<table border="1" cellpadding="6" cellspacing="0">
  <tr>
    <th>n</th>
    <th>¿n ≤ 100?</th>
  </tr>
  <tr>
    <td>10</td>
    <td>✔</td>
  </tr>
  <tr>
    <td>50</td>
    <td>✔</td>
  </tr>
  <tr>
    <td>100</td>
    <td>✔</td>
  </tr>
  <tr>
    <td><strong>101</strong></td>
    <td>❌</td>
  </tr>
  <tr>
    <td><strong>1000</strong></td>
    <td>❌</td>
  </tr>
</table>

<p>
Cuando <strong>n = 101</strong>, la desigualdad se rompe:
</p>

<p>
\( 101^2 = 10201 \nleq 100 \cdot 101 = 10100 \)
</p>

    </div>
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
