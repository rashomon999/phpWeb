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
 
           $respuesta_1 = 'a';
    $respuesta_2 = 'b';
    $respuesta_3 = 'a \neq 0';
    $respuesta_4 = 'c';
    $respuesta_5 = 'b=ac';
    $respuesta_6 = 'b/a';
    $respuesta_7 = 'entero';
    $respuesta_8 = 'divisor';
    $respuesta_9 = 'factor';
    $respuesta_10 = 'multiplo';
    $respuesta_11 = 'a \nmid b';
    
    $respuesta_12 = 'divide';
    $respuesta_13 = 'multiplo';
    $respuesta_14 = '12';
    $respuesta_15 = 'enteros';
    $respuesta_16 = 'positivos';
    $respuesta_17 = 'dk';
    $respuesta_18 = 'k';
    $respuesta_19 = 'numero';
    $respuesta_20 = 'divisibles';
    $respuesta_21 = 'd';
    $respuesta_22 = 'n';
    
    $respuesta_23 = 'numero';
    $respuesta_24 = 'k';
    $respuesta_25 = '0';
    $respuesta_26 = 'dk';
    $respuesta_27 = 'n';
    $respuesta_28 = '0';
    $respuesta_29 = 'k';
    $respuesta_30 = 'n/d';
    $respuesta_31 = 'no';
    $respuesta_32 = 'mayores';
    $respuesta_33 = 'n';
    
    $respuesta_34 = 'd';
    $respuesta_35 = 'a \mid b';
    $respuesta_36 = 'a \mid c';
    $respuesta_37 = 'a \mid (b + c)';
    $respuesta_38 = 'a \mid b';
    $respuesta_39 = 'a \mid bc';
    $respuesta_40 = 'c';
    $respuesta_41 = 'a \mid b';
    $respuesta_42 = 'b \mid c';
    $respuesta_43 = 'a \mid c';
    $respuesta_44 = 'a';
    $respuesta_45 = 'entero';
    $respuesta_46 = 'd';
    $respuesta_47 = 'entero';
    $respuesta_48 = 'positivo';
    $respuesta_49 = 'q';
    $respuesta_50 = 'r';
    $respuesta_51 = '0';
    $respuesta_52 = 'r';
    $respuesta_53 = 'd';
    $respuesta_54 = 'dq+r';
    $respuesta_55 = 'divisor';
    $respuesta_56 = 'dividendo';
    $respuesta_57 = 'cociente';
    $respuesta_58 = 'residuo';
    $respuesta_59 = 'a div d';
    $respuesta_60 = 'a mod d';
    $respuesta_61 = 'a\text{div}d=\left\lfloor\frac{a}{d}\right\rfloor';
    $respuesta_62 = 'a\text{mod}d=a-d\left\lfloor\frac{a}{d}\right\rfloor';
    $respuesta_63 = 'divide';
    $respuesta_64 = 'a-b';
    $respuesta_65 = 'funcion';
    $respuesta_66 = 'a \bmod m = b \bmod m';
    $respuesta_67 = 'a';
    $respuesta_68 = 'b';
    $respuesta_69 = 'm';
    $respuesta_70 = 'mismo residuo';
    $respuesta_71 = 'a+c\equivb+d\pmod{m}';
    $respuesta_72 = 'ac\equivbd\pmod{m}';
    $respuesta_73 = 'simetrica';
    $respuesta_74 = 'b\equiva\pmod{m}';
    $respuesta_75 = 'lo mismo';
    $respuesta_76 = 'a+c';
    $respuesta_77 = 'm(s+t)';
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'a') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'b') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'a \neq 0') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'c') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';

   // Eliminar espacios en blanco
   $respuesta_normalizada = preg_replace('/\s+/', '', $respuesta_5);
   
   if ($respuesta_normalizada === 'b=ac' || $respuesta_normalizada === 'ac=b') {
       $verificar_5 = "correcto";
   } elseif ($respuesta_normalizada === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }
   
   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'b/a') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'entero') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   $respuesta_8 = isset($_POST['respuesta_8']) ? strtolower(trim($_POST['respuesta_8'])) : '';
   $respuesta_9 = isset($_POST['respuesta_9']) ? strtolower(trim($_POST['respuesta_9'])) : '';
   
   $valores = [$respuesta_8, $respuesta_9];
   sort($valores); // Ordena alfabéticamente
   
   if ($valores === ['divisor', 'factor']) {
       $verificar_8 = "correcto";
       $verificar_9 = "correcto";
   } else {
       $verificar_8 = $respuesta_8 === '' ? '' : "incorrecto";
       $verificar_9 = $respuesta_9 === '' ? '' : "incorrecto";
   }
   

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'multiplo') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';

   // Elimina todos los espacios en blanco
   $respuesta_normalizada = preg_replace('/\s+/', '', $respuesta_11);
   $solucion_normalizada = preg_replace('/\s+/', '', 'a \nmid b');
   
   if ($respuesta_normalizada === $solucion_normalizada) {
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }
   

     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === 'divide') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'multiplo') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === '12') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'enteros') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === 'positivos') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === 'dk') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === 'k') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'numero') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'divisibles') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === 'd') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21 === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'n') {  
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'numero') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'k') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === '0') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'dk') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'n') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === '0') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'k') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'n/d') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'no') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'mayores') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'n') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

 $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
if ($respuesta_34 === 'd') { 
    $verificar_34 = "correcto";
} elseif ($respuesta_34 === '') {
    $verificar_34 = '';
} else {
    $verificar_34 = "incorrecto";
}

 $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
if ($respuesta_35 === 'a \mid b') { 
    $verificar_35 = "correcto";
} elseif ($respuesta_35 === '') {
    $verificar_35 = '';
} else {
    $verificar_35 = "incorrecto";
}

 $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
if ($respuesta_36 === 'a \mid c') { 
    $verificar_36 = "correcto";
} elseif ($respuesta_36 === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

 $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
if ($respuesta_37 === 'a \mid (b + c)'
|| $respuesta_37 === 'a \mid (b+c)') { 
    $verificar_37 = "correcto";
} elseif ($respuesta_37 === '') {
    $verificar_37 = '';
} else {
    $verificar_37 = "incorrecto";
}

 $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'a \mid b') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

 $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === 'a \mid bc') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39 === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === 'c') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40 === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

 $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
if ($respuesta_41 === 'a \mid b') { 
    $verificar_41 = "correcto";
} elseif ($respuesta_41 === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

 $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
if ($respuesta_42 === 'b \mid c') { 
    $verificar_42 = "correcto";
} elseif ($respuesta_42 === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

 $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
if ($respuesta_43 === 'a \mid c') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43 === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}

 $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
if ($respuesta_44 === 'a') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44 === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

 $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
if ($respuesta_45 === 'entero') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45 === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

 $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === 'd') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46 === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

 $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === 'entero') { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47 === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}

 $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
if ($respuesta_48 === 'positivo') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48 === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

 $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === 'q') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === 'r') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === '0') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'r') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'd') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'dq+r' || $respuesta_54 === 'qd+r') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'divisor') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'dividendo') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'cociente') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'residuo') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'a div d') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'a mod d') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}


function normalizar($cadena) {
        // Elimina '\,' (espacio fino), '\' y espacios normales
        $cadena = str_replace('\,', '', $cadena);
        return strtolower(preg_replace('/[\s\\\\]+/', '', $cadena));
    }


 

// Pregunta 61
$respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : ''; 
$respuesta_61_normalizada = normalizar($respuesta_61);

$respuestas_validas_61 = [
    'a\text{div}d=\left\lfloor\frac{a}{d}\right\rfloor',
    'adivd=\left\lfloor\frac{a}{d}\right\rfloor',
    'a\operatorname{div}d=\left\lfloor\frac{a}{d}\right\rfloor',
    '\lfloor\frac{a}{d}\rfloor'
];

$verificar_61 = '';
foreach ($respuestas_validas_61 as $r) {
    if ($respuesta_61_normalizada === normalizar($r)) {
        $verificar_61 = 'correcto';
        break;
    }
}
if ($verificar_61 === '' && $respuesta_61 !== '') {
    $verificar_61 = 'incorrecto';
}

// Pregunta 62
$respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : ''; 
$respuesta_62_normalizada = normalizar($respuesta_62);

$respuestas_validas_62 = [
    'a\text{mod}d=a-d\left\lfloor\frac{a}{d}\right\rfloor',
    'amodd=a-d\left\lfloor\frac{a}{d}\right\rfloor',
    'a\operatorname{mod}d=a-d\left\lfloor\frac{a}{d}\right\rfloor',
    'a-d\lfloor\frac{a}{d}\rfloor'
];

$verificar_62 = '';
foreach ($respuestas_validas_62 as $r) {
    if ($respuesta_62_normalizada === normalizar($r)) {
        $verificar_62 = 'correcto';
        break;
    }
}
if ($verificar_62 === '' && $respuesta_62 !== '') {
    $verificar_62 = 'incorrecto';
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'divide') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'a-b') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'funcion') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'a \bmod m = b \bmod m') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'a') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'b') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'm') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'mismo residuo') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}


$respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';

// Elimina espacios
$respuesta_normalizada = preg_replace('/\s+/', '', $respuesta_71);

// Solución esperada sin espacios
$solucion = 'a+c\equivb+d\pmod{m}';

if ($respuesta_normalizada === $solucion) {
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}



$respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';

// Elimina espacios y normaliza
$respuesta_normalizada = preg_replace('/\s+/', '', $respuesta_72);

// También normalizá la solución esperada
$solucion = 'ac\equivbd\pmod{m}'; // ✔️ sin la "x"


$solucion_normalizada = preg_replace('/\s+/', '', $solucion);

if ($respuesta_normalizada === $solucion_normalizada) {
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}


 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'simetrica') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
  $respuesta_74_dos = str_replace(' ','' ,$respuesta_74);

if ($respuesta_74_dos === 'b\equiva\pmod{m}') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74_dos === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'lo mismo') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
 $respuesta_76_dos = str_replace(' ','' ,$respuesta_76);

if ($respuesta_76_dos === 'a+c') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76_dos === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
  $respuesta_77_dos = str_replace(' ','' ,$respuesta_77);

if ($respuesta_77_dos === 'm(s+t)') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77_dos === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === '18') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === '3') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === '77') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === '2') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

 $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
if ($respuesta_82 === 'No') { 
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
if ($respuesta_84 === 'no') { 
    $verificar_84 = "correcto";
} elseif ($respuesta_84 === '') {
    $verificar_84 = '';
} else {
    $verificar_84 = "incorrecto";
}

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    $respuesta_85_dos = str_replace(' ','' ,$respuesta_85);

if ($respuesta_85_dos === '((a\modm)+(b\modm))\modm') { 
    $verificar_85 = "correcto";
} elseif ($respuesta_85_dos === '') {
    $verificar_85 = '';
} else {
    $verificar_85 = "incorrecto";
}

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    $respuesta_86_dos = str_replace(' ','' ,$respuesta_86);
    
    if ($respuesta_86_dos === '((a\modm)(b\modm))\modm') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86_dos === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

 $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
 $respuesta_87_dos = str_replace(' ','' ,$respuesta_87);

if ($respuesta_87_dos === 'amodm') { 
    $verificar_87 = "correcto";
} elseif ($respuesta_87_dos === '') {
    $verificar_87 = '';
} else {
    $verificar_87 = "incorrecto";
}

 $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
 $respuesta_88_dos = str_replace(' ','' ,$respuesta_88);

if ($respuesta_88_dos === 'bmodm') { 
    $verificar_88 = "correcto";
} elseif ($respuesta_88_dos === '') {
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
    height: 470vh;
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
      
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    // Obtener el valor del input
    var f = document.getElementById('respuesta_3').value || "";

    // Construir la fórmula dinámica, sin el formato de ecuación en bloque
    var formula = `${f}`;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula').innerHTML = `\\( ${formula} \\)`;  // MathJax para fórmulas en línea

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

 
function actualizarFormula2() {
    // Obtener el valor del input
    var f = document.getElementById('respuesta_11').value || "";

    // Construir la fórmula dinámica, sin el formato de ecuación en bloque
    var formula = `${f}`;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula2').innerHTML = `\\( ${formula} \\)`;  // MathJax para fórmulas en línea

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

 



function actualizarFormula3() {
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_35').value || "";
 


    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula3').innerHTML = `\\( ${formula} \\)`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_36').value || "";
   

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
    var f = document.getElementById('respuesta_37').value || "";
  

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
    var f = document.getElementById('respuesta_38').value || "";
  

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
    var f = document.getElementById('respuesta_39').value || "";
  

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
    var f = document.getElementById('respuesta_42').value || "";
  

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
    var f = document.getElementById('respuesta_43').value || "";
  

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
    var f = document.getElementById('respuesta_61').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ a\\text{div}d = ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula12() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_62').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ a\\text{mod}d = ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula12').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula13() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_66').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula13').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula14() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_70').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula14').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}



function actualizarFormula15() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_71').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula15').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula16() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_72').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula16').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula17() {
    var f = document.getElementById('respuesta_74').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula17').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula18() {
    var f = document.getElementById('respuesta_85').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula18').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula19() {
    var f = document.getElementById('respuesta_86').value || "";
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
    <h3>Definición 1</h3>
    <p>
    Si 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="2">
    y 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="2">
    son enteros con
    <span id="formula">
    \(  ? \)
    </span>
    , 
    decimos que \( a \) divide a \( b \) si existe un entero 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="6">
    tal que
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="6">
    (o equivalentemente, si 
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="6">
    es un 
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="6">
    ).
    Cuando \( a \) divide a \( b \) decimos que \( a \) es un 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="6">
    o 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="6">
    de \( b \),
    y que \( b \) es un 
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="6">
    de \( a \).
    La notación \( a \mid b \) denota que \( a \) divide a \( b \).
    Escribimos 
    <span id="formula2">
    \( ? \)
    </span>
    cuando \( a \) no divide a \( b \).
    </p>
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8" 
    id="respuesta_3" oninput="actualizarFormula()">
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="6" 
    id="respuesta_11" oninput="actualizarFormula2()">
    <br><br>
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




    <h3>Ejemplo 1</h3>
<p><strong>Determinar si</strong> \( 3 \mid 7 \) <strong>y si</strong> \( 3 \mid 12 \).</p>

<p><strong>Para \( 3 \mid 7 \):</strong> Esto quiere decir que \( 3 \) 
<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="2">
a \( 7 \), pero no es cierto porque \( 7 \) 
no es un 
<input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="4">
de \( 3 \). En este caso, <strong>3</strong> es el <strong>factor</strong> o <strong>divisor    
</strong> de <strong>7</strong>, pero no se cumple \( 3 \mid 7 \).</p>

<p><strong>Para \( 3 \mid 12 \):</strong> La división es exacta, ya que \( 12 = 3 \times 4 \), lo que indica que \( 3 \)
 divide exactamente a \( 12 \). En este caso, <strong>3</strong> es un <strong>divisor o factor</strong> de <strong>12</strong>,
  y 
  <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="2">
  es un <strong>múltiplo</strong> de <strong>3</strong>.</p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    <hr>
     <strong>Ahora a es dividendo (en la defincion 1 es el divisor) </strong> <br>
    <strong>Nota: Ahora d es a (en contraste a la definicion 1)</strong>
    <br><br>
    <h3>Ejemplo 2</h3>
    <p><strong>Sean</strong> \( n \) <strong>y</strong> \( d \) <strong>enteros positivos. </p> 
    
    <p>¿Cuántos enteros positivos no mayores que</strong> \( n \) <strong>son divisibles por    \( d \)? </strong> </p>
     

    <p><strong>Solución:</strong>  
Los 
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="4">
<input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="4">
divisibles por \( d \) son todos los enteros de la forma 
<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="4">
, donde 
<input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="4">
es un entero positivo.
Por lo tanto, el 
<input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="4">
de enteros positivos 
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="4">
por 
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="4">
que no exceden 
<input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="4">
es igual al 
<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="4">
de enteros 
<input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="4">
con
</p>
<p>
<input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="4">
\(  &lt; \)
<input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="4">
\( \leq  \) 
<input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="4">
, 

o con
<input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="4"> 
\( &lt; \)  
<input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="4">
\( \leq  \)
<input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="4">
.


Por lo tanto, hay \( \left\lfloor n/d \right\rfloor \) enteros positivos 
<input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="4">
<input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="4">
 que 
 <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="4">
 que son divisibles por 
 <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="4">
 . ◂
 <br><br>
 <button type="submit">Enviar</button>
 <?php echo $verificar_15 ?>
<?php echo $verificar_16 ?>
<?php echo $verificar_17 ?>
<?php echo $verificar_18 ?>
<?php echo $verificar_19 ?>
<?php echo $verificar_20 ?>
<?php echo $verificar_21 ?>
<?php echo $verificar_22 ?>
<?php echo $verificar_23 ?>
<br>
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

</p>
    <hr>
    
<h3>Teorema 1</h3> (suma, multiplicacion, transitividad)
<p><strong>Sean</strong> \( a \), \( b \) <strong>y</strong> \( c \) <strong>enteros, donde</strong> \( a \neq 0 \). <strong>Entonces:</strong></p>
<ul>
  <li>(i) si 
  <span id="formula3">
    \( ? \)
    </span>  
   y 
   <span id="formula4">
    \( ? \)
    </span> 
   , entonces 
   <span id="formula5">
    \( ? \)
    </span> 
    ;</li>

  <li>(ii) si 
  <span id="formula6">
    \( ? \)
    </span>   
   , 
  
  entonces 
  <span id="formula7">
    \( ? \)
    </span>  
 
  
  para todo entero 
  <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="4">

  ;</li>
  <li>(iii) si 
  <span id="formula8">
    \( ? \)
    </span>   
 
    y 
    <span id="formula9">
    \( ? \)
    </span>   
    , entonces
    <span id="formula10">
    \( ? \)
    </span> 
    .</li>
    </ul>

    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="4" 
    id="respuesta_35" oninput="actualizarFormula3()">

    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="4" 
    id="respuesta_36" oninput="actualizarFormula4()">

    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="8" 
    id="respuesta_37" oninput="actualizarFormula5()">    

    <br><br>

    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="8" 
    id="respuesta_38" oninput="actualizarFormula6()">  

    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="8" 
    id="respuesta_39" oninput="actualizarFormula7()">  
    <br><br>
    
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8" 
    id="respuesta_41" oninput="actualizarFormula8()"> 

    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="8" 
    id="respuesta_42" oninput="actualizarFormula9()"> 


    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="6" 
    id="respuesta_43" oninput="actualizarFormula10()"> 
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_35 ?>
    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <?php echo $verificar_39 ?>
    <?php echo $verificar_40 ?>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
    <?php echo $verificar_43 ?>
    <hr>
  
    
 </div>




<div class="seccion derecha">
      

       
<h2>4.1.3 El Algoritmo de la División</h2>

<p>Cuando un entero se divide entre un entero positivo, hay un cociente y un residuo,
como muestra el algoritmo de la división.</p>

<h3>Teorema 2 — El Algoritmo de la División</h3>
<p>Sea 
<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="4">    
un 
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="4">
y 
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="4">
un 
<input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="4">
<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="4">

. Entonces existen enteros únicos 
<input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="4">
y 
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="4">
, con 
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="4">
\( \leq \)
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="4">
\(<\), 
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="4">

tales que</p>

<p>a = <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="10"></p>

<p>Dejamos la demostración del algoritmo de la división para la Sección 5.2. (Ver Ejemplo 5 y Ejercicio 37 en esa sección.)</p>

<button type="submit">Enviar</button>
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


    <h4>Observación</h4>
    <p>El Teorema 2 en realidad no es un algoritmo. (¿Por qué no?) Sin embargo, utilizamos su nombre tradicional.</p>

    <h3>Definición 2</h3>
    <p>En la igualdad dada en el algoritmo de la división, \( d \) se llama el 
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="5">    
    ,
    \( a \) el 
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="5">
    , \( q \) el 
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="5">
    y \( r \) el 
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="5">
    . Esta notación se usa para
    expresar el cociente y el residuo:</p>
    
    <p>
    q =  <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="9">
    </p>
 
    <p>
    r =  <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="9">
    </p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_55 ?>
    <?php echo $verificar_56 ?>
    <?php echo $verificar_57 ?>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <?php echo $verificar_60 ?>

    <hr>
    a sigue siendo dividendo (en la defincion 1 es el divisor): 
    <br><br>
    <h4>Observación</h4>
    <p>Observa que tanto \( a \, \text{div} \, d \) como \( a \, \text{mod} \, d \) para un \( d \) 
    fijo son funciones sobre el conjunto de los enteros. Además, cuando \( a \) es un entero y \( d \) 
    es un entero positivo, tenemos:</p>

    <span id="formula11">
    \[ a\text{div}d = \]
    </span> 

    <span id="formula12">
    \[ a\text{mod}d =  \]
    </span> 

    <br><br>
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="25" 
    id="respuesta_61" oninput="actualizarFormula11()"> 

    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="25" 
    id="respuesta_62" oninput="actualizarFormula12()"> 

    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_61 ?>
    <?php echo $verificar_62 ?>
    <br><br>
    herramientas: \left\lfloor, \right\rfloor
    <hr>
    <h2>4.1.4 Aritmética Modular</h2>
    
    <h3>Definición 3</h3>
    <br><br>
    notas necesarias: \pmod{m} \equiv
    
    <p>
    Si \( a \) y \( b \) son enteros y \( m \) es un entero positivo, entonces decimos que \( a \) es 
    congruente con \( b \) módulo \( m \) si \( m \) 
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="4">
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="4">
    . Usamos la notación \( a \equiv b \pmod{m} \) para indicarlo.
    </p>

<p>
Decimos que \( a \equiv b \pmod{m} \) es una congruencia y que \( m \) es su módulo (plural: moduli). Si \( a \) y \( b \) 
no son congruentes módulo \( m \), escribimos \( a \not\equiv b \pmod{m} \).
</p>

<p>
Aunque ambas notaciones, \( a \equiv b \pmod{m} \) y \( a \bmod m = b \), incluyen "mod", representan conceptos
fundamentalmente diferentes. La primera representa una relación sobre el conjunto de los enteros, mientras que
la segunda representa una 
<input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="4">

. Sin embargo, están estrechamente relacionadas, como se describe
en el siguiente teorema.


</p>
<button type="submit">Enviar</button>
<?php echo $verificar_63 ?>
<?php echo $verificar_64 ?>
<?php echo $verificar_65 ?>

<br>

<h3>Teorema 3</h3>
<br><br>
notas necesarias: \bmod
<p>Sean \( a \) y \( b \) enteros, y \( m \) un entero positivo. Entonces:</p>

<p style="text-align:center;"><strong>\[
a \equiv b \pmod{m} \quad \text{si y solo si}  
\]</strong></p>
<span id="formula13">
    \( ? \)
    </span> 

<br><br>
<input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="20"
id="respuesta_66" oninput="actualizarFormula13()">
 
<p>
La demostración del Teorema 3 se deja como ejercicio. Recuerda que \( a \bmod m \) y \( b \bmod m \) 
son los residuos al dividir 
<input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="4">
y 
<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="4">
por 
<input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="4">
. Así, el Teorema 3 afirma que \( a \equiv b \pmod{m} \) 
si y solo si \( a \) y \( b \) tienen el 
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="13">
  al dividirlos entre \( m \).
</p>
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
        href="segundo.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
