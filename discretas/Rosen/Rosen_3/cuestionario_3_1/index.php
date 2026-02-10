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
        
 
       // Respuestas correctas (alineadas con las validaciones)
    $respuesta_1  = 'secuencia';
    $respuesta_2  = 'finita';
    $respuesta_3  = 'instrucciones';
    $respuesta_4  = 'calculo';
    $respuesta_5  = 'resolver';
    $respuesta_6  = 'al-juarismi';
    $respuesta_7  = 'IX';
    $respuesta_8  = 'hindues';
    $respuesta_9  = 'aritmetica';
    $respuesta_10 = 'decimal';
    $respuesta_11 = 'XVIII';

    $respuesta_12 = 'procedimientos';
    $respuesta_13 = 'resolver problemas';
    $respuesta_14 = 'entrada';
    $respuesta_15 = 'salida';
    $respuesta_16 = 'definicion';
    $respuesta_17 = 'correctitud';
    $respuesta_18 = 'finitud';
    $respuesta_19 = 'efectividad';
    $respuesta_20 = 'if ai > max then max := ai';
    $respuesta_21 = 'i';
    $respuesta_22 = 'n';

    $respuesta_23 = 'x';
    $respuesta_24 = 'ai';
    $respuesta_25 = 'i := i + 1';
    $respuesta_26 = 'if i ≤ n then location := i';
    $respuesta_27 = 'else location := 0';
    $respuesta_28 = 'creciente';
    $respuesta_29 = 'medio';
    $respuesta_30 = 'i := 1';
    $respuesta_31 = 'j := n';
    $respuesta_32 = 'while i < j';
    $respuesta_33 = 'm := ⌊(i + j) / 2⌋';

    $respuesta_34 = 'if x > a[m] then i := m + 1';
    $respuesta_35 = 'else j := m';
    $respuesta_36 = 'if x = a[i] then location := i';
    $respuesta_37 = 'else location := 0';
    $respuesta_38 = 'saltarse';
    $respuesta_39 = 'for i := 1 to n - 1';
    $respuesta_40 = 'for j := 1 to n - i';
    $respuesta_41 = 'if a[j] > a[j + 1] then';
    $respuesta_42 = 'temp := a[j]';
    $respuesta_43 = 'a[j] := a[j + 1]';
    $respuesta_44 = 'a[j + 1] := temp';

    $respuesta_45 = 'for j := 2 to n';
    $respuesta_46 = 'i := 1';
    $respuesta_47 = 'while a[j] > a[i]';
    $respuesta_48 = 'i := i + 1';
    $respuesta_49 = 'm := a[j]';
    $respuesta_50 = 'for k := 0 to j - i - 1';
    $respuesta_51 = 'a[j - k] := a[j - k - 1]';
    $respuesta_52 = 'a[i] := m';

    $respuesta_53 = 'for s := 0 to n - m';
    $respuesta_54 = 'j := 1';
    $respuesta_55 = 'while (j ≤ m and t[s + j] = p[j])';
    $respuesta_56 = 'j := j + 1';
    $respuesta_57 = 'if j > m then';
    $respuesta_58 = 'mejor opcion';
    $respuesta_59 = 'cada paso';
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'secuencia') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'finita') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'instrucciones') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'calculo') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'resolver') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
    $respuesta_6 = strtolower($respuesta_6);   
   if ($respuesta_6 === 'al-juarismi') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   $respuesta_7 = strtolower($respuesta_7);
   if ($respuesta_7 === 'IX' || $respuesta_7 === '9') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'hindues') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'aritmetica') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'decimal') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'XVIII' || $respuesta_11 === '18') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === 'procedimientos') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'resolver problemas') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     $respuesta_14 = strtolower($respuesta_14);

     if ($respuesta_14 === 'entrada') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    $respuesta_15 = strtolower($respuesta_15);
    
    if ($respuesta_15 === 'salida') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
         $respuesta_16 = strtolower($respuesta_16);

     if ($respuesta_16 === 'definicion') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    $respuesta_17 = strtolower($respuesta_17);

     if ($respuesta_17 === 'correctitud') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    $respuesta_18 = strtolower($respuesta_18);

     if ($respuesta_18 === 'finitud') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
         $respuesta_19 = strtolower($respuesta_19);

     if ($respuesta_19 === 'efectividad') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'if max < ai then max := ai' 
     || $respuesta_20 === 'if ai > max then max := ai' 
     ) {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === 'i') {  
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
   if ($respuesta_23 === 'x') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'ai') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   $respuesta_25_dos = str_replace(' ','',$respuesta_25);
   
   if ($respuesta_25_dos === 'i:=i+1') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25_dos === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
    $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
    $respuesta_26_dos = str_replace(' ','',$respuesta_26);
    
    if ($respuesta_26_dos === 'ifi≤nthenlocation:=i') {  
       $verificar_26 = "correcto";
    } elseif ($respuesta_26_dos === '') {
       $verificar_26 = '';
    } else {
       $verificar_26 = "incorrecto";
    }

   // Verificar la respuesta de la quinta pregunta
    $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
    $respuesta_27_dos = str_replace(' ','',$respuesta_27);

    if ($respuesta_27_dos === 'elselocation:=0') {  
       $verificar_27 = "correcto";
    } elseif ($respuesta_27_dos === '') {
       $verificar_27 = '';
    } else {
       $verificar_27 = "incorrecto";
    }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'creciente') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'medio') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
    $respuesta_30_dos = str_replace(' ','',$respuesta_30);

   if ($respuesta_30_dos === 'i:=1') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30_dos === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
    $respuesta_31_dos = str_replace(' ','',$respuesta_31);

   if ($respuesta_31_dos === 'j:=n') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31_dos === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
       $respuesta_32_dos = str_replace(' ','',$respuesta_32);

   if ($respuesta_32_dos === 'whilei<j') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32_dos === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
    $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';

    $respuesta_33_dos = str_replace(' ','',subject: $respuesta_33);

    if ($respuesta_33_dos === 'm:=⌊(i+j)/2⌋'
    || $respuesta_33_dos === 'm:=⌊(j+i)/2⌋'
    ) {  
       $verificar_33 = "correcto";
    } elseif ($respuesta_33_dos === '') {
       $verificar_33 = '';
    } else {
       $verificar_33 = "incorrecto";
    }

 $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
     $respuesta_34_dos = str_replace(' ','',subject: $respuesta_34);


if ($respuesta_34_dos === 'ifx>amtheni:=m+1') { 
    $verificar_34 = "correcto";
} elseif ($respuesta_34_dos === '') {
    $verificar_34 = '';
} else {
    $verificar_34 = "incorrecto";
}

 $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
      $respuesta_35_dos = str_replace(' ','',subject: $respuesta_35);

if ($respuesta_35_dos === 'elsej:=m') { 
    $verificar_35 = "correcto";
} elseif ($respuesta_35_dos === '') {
    $verificar_35 = '';
} else {
    $verificar_35 = "incorrecto";
}

 $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
       $respuesta_36_dos = str_replace(' ','',subject: $respuesta_36);
if ($respuesta_36_dos === 'ifx=aithenlocation:=i'
|| $respuesta_36_dos === 'ifai=xthenlocation:=i'
) { 
    $verificar_36 = "correcto";
} elseif ($respuesta_36_dos === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

 $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
 $respuesta_37_dos = str_replace(' ','',subject: $respuesta_37);
if ($respuesta_37_dos === 'elselocation:=0') { 
    $verificar_37 = "correcto";
} elseif ($respuesta_37_dos === '') {
    $verificar_37 = '';
} else {
    $verificar_37 = "incorrecto";
}

 $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'saltarme' || $respuesta_38 === 'saltarse') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

 $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
  $respuesta_39_dos = str_replace(' ','',subject: $respuesta_39);

if ($respuesta_39_dos === 'fori:=1ton-1') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39_dos === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
 $respuesta_40_dos = str_replace(' ','',subject: $respuesta_40);

if ($respuesta_40_dos === 'forj:=1ton-i') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40_dos === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

 $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
  $respuesta_41_dos = str_replace(' ','',subject: $respuesta_41);

if ($respuesta_41_dos === 'ifaj>aj+1then') { 
    $verificar_41 = "correcto";
} elseif ($respuesta_41_dos === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

  $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    $respuesta_42_dos = str_replace(' ','',subject: $respuesta_42);

if ($respuesta_42_dos === 'temp:=aj') { 
    $verificar_42 = "correcto";
} elseif ($respuesta_42_dos === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

 $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
 $respuesta_43_dos = str_replace(' ','',subject: $respuesta_43);

if ($respuesta_43_dos === 'aj:=aj+1') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43_dos === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}
 
                 
                 
 $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
  $respuesta_44_dos = str_replace(' ','',subject: $respuesta_44);

if ($respuesta_44_dos === 'aj+1:=temp') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44_dos === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}
 

 $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
   $respuesta_45_dos = str_replace(' ','',subject: $respuesta_45);

if ($respuesta_45_dos === 'forj:=2ton') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45_dos === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

 $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    $respuesta_46_dos = str_replace(' ','',subject: $respuesta_46);

if ($respuesta_46_dos === 'i:=1') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46_dos === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

 $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
     $respuesta_47_dos = str_replace(' ','',subject: $respuesta_47);

if ($respuesta_47_dos === 'whileaj>ai'
|| $respuesta_47_dos === 'whileai<aj'
) { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47_dos === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}

 $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
      $respuesta_48_dos = str_replace(' ','',subject: $respuesta_48);

if ($respuesta_48_dos === 'i:=i+1') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48_dos === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

 $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
       $respuesta_49_dos = str_replace(' ','',subject: $respuesta_49);

if ($respuesta_49_dos === 'm:=aj') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49_dos === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
        $respuesta_50_dos = str_replace(' ','',subject: $respuesta_50);

if ($respuesta_50_dos === 'fork:=0toj-i-1') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50_dos === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
         $respuesta_51_dos = str_replace(' ','',subject: $respuesta_51);

if ($respuesta_51_dos === 'aj-k:=aj-k-1') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51_dos === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
          $respuesta_52_dos = str_replace(' ','',subject: $respuesta_52);

if ($respuesta_52_dos === 'ai:=m') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52_dos === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 

$respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
$respuesta_53_dos = str_replace(' ','',subject: $respuesta_53);

if ($respuesta_53_dos === 'fors:=0ton-m') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53_dos === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
 $respuesta_54_dos = str_replace(' ','',subject: $respuesta_54);
if ($respuesta_54_dos === 'j:=1') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54_dos === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';

 $respuesta_55_dos = str_replace(' ','',subject: $respuesta_55);

if ($respuesta_55_dos === 'while(j≤mandts+j=pj)') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55_dos === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


$respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
$respuesta_56_dos = str_replace(' ','',subject: $respuesta_56);

if ($respuesta_56_dos === 'j:=j+1') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56_dos === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
 $respuesta_57_dos = str_replace(' ','',subject: $respuesta_57);
if ($respuesta_57_dos === 'ifj>mthen') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57_dos === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'mejor opcion') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'cada paso') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
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
        height: 465vh;
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
    // Obtener los valores de los inputs
   
    var f = document.getElementById('respuesta_11').value || "";
 


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
   
    var f = document.getElementById('respuesta_13').value || "";
  
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
   
    var f = document.getElementById('respuesta_27').value || "";
 


    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;

    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_29').value || "";
   

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
    var f = document.getElementById('respuesta_30').value || "";
  

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
    var f = document.getElementById('respuesta_6').value || "";
  

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
    var f = document.getElementById('respuesta_7').value || "";
  

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
    var f = document.getElementById('respuesta_8').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula8').innerHTML = `$$ ${formula} $$`;

    // Re-renderizar MathJax para mostrar los cambios
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula9() {
    // Obtener los valores de los inputs
    var f = document.getElementById('respuesta_9').value || "";
  

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
    var f = document.getElementById('respuesta_10').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
    // Actualizar el contenido de la fórmula en el DOM
    document.getElementById('formula10').innerHTML = `$$ ${formula} $$`;

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

    <h2>Definición 1</h2>
    <p>Un algoritmo es una 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">    
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">    
    de 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">    
    precisas para realizar un 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">    
    o para 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">    
    un problema. El término algoritmo es una corrupción del nombre
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">    
    , un matemático del siglo 
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">    
    , 
    cuyo libro sobre los números 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">    
    es la base de la notación decimal moderna. Originalmente, la palabra 
    <em>algorismo</em> se usaba para referirse a las reglas para realizar 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="8">    
    utilizando la notación
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">    
    . El <em>algorismo</em> evolucionó a la palabra <em>algoritmo</em> en el siglo
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">    
    . Con el creciente
    interés en las máquinas de computación, el concepto de algoritmo adquirió un significado más general, para incluir
    todos los 
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="11">    
    definidos para 
        <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="18">    
    , no solo los procedimientos para realizar aritmética. 
    (Discutiremos algoritmos para realizar aritmética con enteros en el Capítulo 4.)</p>
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
<?php echo $verificar_13 ?>
 
    <hr>

    <h2>PROPIEDADES DE LOS ALGORITMOS</h2>
    <p>Existen varias propiedades que los algoritmos generalmente comparten. Son útiles para tenerlas en cuenta cuando se describen algoritmos. Estas propiedades son:</p>
    <ul>
        <li><strong>
        <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">        
        .</strong> Un algoritmo tiene valores de entrada provenientes de un conjunto especificado.</li>
        <li><strong>
        <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">            
        .</strong> A partir de cada conjunto de valores de entrada, un algoritmo produce valores de salida provenientes de un conjunto especificado. Los valores de salida son la solución al problema.</li>
        <li><strong>
        <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="8">                
        .</strong> Los pasos de un algoritmo deben estar definidos de manera precisa.</li>
        <li><strong>
        <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">                    
        .</strong> Un algoritmo debe producir los valores de salida correctos para cada conjunto de valores de entrada.</li>
        <li><strong>
        <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">                        
        .</strong> Un algoritmo debe producir la salida deseada después de un número finito (pero quizás grande) de pasos para cualquier entrada en el conjunto.</li>
        <li><strong>
        <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">                        
        .</strong> Debe ser posible realizar cada paso de un algoritmo de manera exacta y en una cantidad finita de tiempo.</li>
    </ul>
    <button type="submit">Enviar</button>
    <?php echo $verificar_14 ?>
<?php echo $verificar_15 ?>
<?php echo $verificar_16 ?>
<?php echo $verificar_17 ?>
<?php echo $verificar_18 ?>
<?php echo $verificar_19 ?>
    <hr>
    <h2>ALGORITMO 1: Encontrar el Elemento Máximo en una Secuencia Finita</h2>
    <p><code style="font-size: 20px;">procedure max(a1, a2, ..., an: integers)</code></p>
    <p><code style="font-size: 20px;">max := a1</code></p>
    <p><code style="font-size: 20px;">for i := 2 to n</code></p>
    <p><code style="font-size: 20px;">
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="30">                        
    </code></p>
    <p><code style="font-size: 20px;">return max {max es el elemento más grande}</code></p>
     
    <button type="submit">Enviar</button>
    <?php echo $verificar_20 ?>
    <hr>
 
    <h2>3.1.2 Algoritmos de Búsqueda</h2>
    
    <p>El problema general de búsqueda se puede describir de la siguiente manera: Localizar un 
    elemento x en una lista de elementos distintos a<sub>1</sub>, a<sub>2</sub>, …, a<sub>n</sub>, o 
    determinar que no está en la lista. La solución a este problema de búsqueda es la ubicación del
    término en la lista que es igual a x (es decir, i es la solución si x = a<sub>i</sub>) y es 0
    si x no está en la lista.</p>
    
    <h3>LA BÚSQUEDA LINEAL</h3>
    <p>El primer algoritmo que presentaremos se llama algoritmo de búsqueda lineal, o búsqueda secuencial. El algoritmo de búsqueda lineal comienza comparando x con a<sub>1</sub>. Cuando x = a<sub>1</sub>, la solución es la ubicación de a<sub>1</sub>, es decir, 1. Cuando x ≠ a<sub>1</sub>, compara x con a<sub>2</sub>. Si x = a<sub>2</sub>, la solución es la ubicación de a<sub>2</sub>, es decir, 2. Cuando x ≠ a<sub>2</sub>, compara x con a<sub>3</sub>. Continúa este proceso, comparando x sucesivamente con cada término de la lista hasta que se encuentre una coincidencia, donde la solución es la ubicación de ese término, a menos que no ocurra ninguna coincidencia. Si toda la lista se ha buscado sin localizar x, la solución es 0. El pseudocódigo para el algoritmo de búsqueda lineal se muestra como el Algoritmo 2.</p>

    <h3>ALGORITMO 2: El Algoritmo de Búsqueda Lineal</h3>
    <p>
    <strong>x: integer</strong>
    <br>
Es el valor que quieres buscar en la lista.
    </p>
    <p>
    <strong>a1, a2, ..., an: distinct integers</strong>
    <br>
    Es la secuencia de enteros donde se va a buscar el valor x.
    </p>
    <strong>utilice: ≤</strong>
    <pre>
    procedure linear search(x: integer, a1, a2,… , an: distinct integers)
    i := 1                      
    while (<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="1">≤ <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="1"> and <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="1"> ≠ <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="1">)
        <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="28">
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="18">
     
    return location{location is the subscript of the term that equals x, or is 0 if x is not found}
    </pre>
    <br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>
    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>
    <?php echo $verificar_26 ?>
    <?php echo $verificar_27 ?>
    <hr>
    <h3>LA BÚSQUEDA BINARIA</h3>
    <p>Ahora consideraremos otro algoritmo de búsqueda. Este algoritmo puede ser utilizado cuando
    la lista tiene términos que ocurren en orden 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="8">
    (por ejemplo: si los términos son números,
    están listados de menor a mayor; si son palabras, están listadas en orden léxico o alfabético). 
    Este segundo algoritmo de búsqueda se llama algoritmo de búsqueda binaria. Procede comparando el 
    elemento que se desea localizar con el término 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8">
    de la lista. Luego, la lista se divide en dos
    sublistas más pequeñas del mismo tamaño, o donde una de estas sublistas tiene un término menos que
    la otra. La búsqueda continúa restringiendo la búsqueda a la sublista apropiada según la comparación
    del elemento que se desea localizar y el término medio.
    </p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_28 ?>
    <?php echo $verificar_29 ?>
    <hr>
        
    <h3>ALGORITMO 3: El Algoritmo de Búsqueda Binaria</h3>
  
    <strong>usar:  ⌊,⌋</strong>
    <br>
    <pre>
    procedure binary search (x: integer, a1, a2,… , an: increasing integers)
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="10">
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="10">
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="10">
        <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="17">
        <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="24">
        <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="11">
    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="28">
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="18">
    return location{location is the subscript i of the term ai equal to x,
         or 0 if x is not found}
    </pre>
    <br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_30 ?>
    <?php echo $verificar_31 ?>
    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>
    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <hr>
    <p><strong>clave busquedad binaria:</strong>m me da el indice, entonces redondear hacia arriba es 
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="8">
    un indice</p>
    <p><strong>¿Por qué se compara con \( a_i \) al final?</strong></p>

<p>Porque al final del ciclo <code>while</code>, se cumple que:</p>

<p><code>i == j</code> &rarr; ya solo queda un elemento posible en el intervalo.</p>

<p>En el algoritmo de búsqueda binaria, si el elemento existe, siempre se encuentra cuando queda como el único elemento posible, es decir, cuando <code>i = j</code>.</p>

<p>Ese único valor está en la posición <code>i</code> (que también es <code>j</code>).</p>

<p>Entonces, comparamos:</p>

<p><em>¿Ese único valor \( a_i \) es igual a \( x \)?</em></p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_38 ?>
    <hr>
 
</div>




<div class="seccion derecha">
      
    <hr>

    <h2>3.1.3 Ordenamiento</h2>

    <h3>EL ORDENAMIENTO BURBUJA</h3>
<pre><code>procedure bubblesort(a1,… , an: real numbers with n ≥ 2)
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="18">
        <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="18">
            <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="18">
                <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="11">
                <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="11">
                <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="11">
 
</code></pre>
    <br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_39 ?>
    <?php echo $verificar_40 ?>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
    <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>

 

    <hr>
      <h3>EL ORDENAMIENTO POR INSERCIÓN</h3>
    <p>El ordenamiento por inserción es un algoritmo de ordenamiento sencillo, aunque usualmente no es el más eficiente.</p>
<h3>ALGORITMO 5 El ordenamiento por inserción</h3>
<pre><code>procedure insertion sort(a1, a2,… , an: real numbers with n ≥ 2)
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="17">
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="17">
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="17">
        <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="17">
    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="17">
    <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="25">
        <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="17">
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="17">
{a1,… , an is in increasing order}</code></pre>    
    <br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <?php echo $verificar_51 ?>
    <?php echo $verificar_52 ?>

        <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Ayuda</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
<h2>La parte que no entiendes (aislada)</h2>

<pre>
m := aj
for k := 0 to j − i − 1
    aj−k := aj−k−1
ai := m
</pre>

<p>
Esta parte sirve para <strong>insertar <em>aj</em> en su lugar correcto</strong>,
pero <strong>solo cuando no está ya en la posición correcta</strong>.
</p>

 
<h2>¿Qué significa realmente <em>i</em>?</h2>

<p>Después de este ciclo:</p>

<pre>
i := 1
while aj &gt; ai
    i := i + 1
</pre>

<p>
La variable <strong>i</strong> queda siendo <strong>la posición donde debería ir <em>aj</em></strong>.
</p>

<ul>
    <li><strong>Si i = j</strong> → <em>aj</em> ya está donde debe estar</li>
    <li><strong>Si i &lt; j</strong> → hay que mover elementos para hacer espacio</li>
</ul>

<hr>

<h2>Caso 1: <strong>NO ocurre el desplazamiento</strong> ❌</h2>

<h3>Ejemplo</h3>

<pre>
[3, 5, 7, 9]
</pre>

<p>Supón que:</p>

<pre>
j = 4
aj = 9
</pre>

<p>Búsqueda de <em>i</em>:</p>

<pre>
9 &gt; 3 → i = 2
9 &gt; 5 → i = 3
9 &gt; 7 → i = 4
</pre>

<p>Resultado:</p>
<strong>esta es la clave, cuando pasa esto:</strong>
<pre>
i = j 
</pre>

<p>Ahora mira el <em>for</em>:</p>

<pre>
for k := 0 to j − i − 1
for k := 0 to 4 − 4 − 1
for k := 0 to −1   ← NO entra
</pre>

<p>Conclusión:</p>

<ul>
    <li>🚫 El ciclo <strong>no se ejecuta</strong></li>
    <li>🚫 No se mueve ningún elemento</li>
    <li>🚫 <em>ai := m</em> es redundante</li>
</ul>

<p><strong>👉 Aquí NO ocurre realmente el desplazamiento</strong></p>

    </div>
   
    

            <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Ayuda</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
<h1>Ejemplo: <strong>no entra al <code>for</code></strong></h1>
<p><strong>Sobrrescribe el valor</strong></p>
<p>Usamos este arreglo:</p>
<pre><code>[3, 5, 8, 9]</code></pre>

<p>Aquí:</p>
<ul>
    <li>el <strong>primer y segundo elemento están bien posicionados</strong></li>
    <li><code>3 &lt; 5</code></li>
</ul>

<h2>Valores iniciales</h2>
<pre><code>a1 = 3
a2 = 5
a3 = 8
a4 = 9
n  = 4</code></pre>

<h2>Iteración del algoritmo</h2>

<h3>Paso 1: comienza el <code>for</code> principal</h3>
<pre><code>for j := 2 to n</code></pre>

<p>Primera iteración:</p>
<pre><code>j = 2</code></pre>

<p>Subarreglo activo:</p>
<pre><code>[3, 5]</code></pre>

<p>Elemento a insertar:</p>
<pre><code>aj = a2 = 5</code></pre>

<h3>Paso 2: buscar la posición <code>i</code></h3>
<pre><code>i := 1
while aj > ai
    i := i + 1</code></pre>

<p>Sustituimos valores reales:</p>
<pre><code>while 5 > 3  → verdadero
    i := 2</code></pre>

<p>Ahora evaluamos de nuevo:</p>
<pre><code>while 5 > 5 → falso</code></pre>

<p>Resultado final:</p>
<pre><code>i = 2</code></pre>

<p>📌 Significado:</p>
<blockquote>
    <p>El 5 <strong>ya está en la posición correcta</strong></p>
</blockquote>

<h3>Paso 3: guardar el valor en <code>m</code></h3>
<pre><code>m := aj
m := 5</code></pre>

<h3>Paso 4: ¿entra al <code>for</code> de desplazamiento?</h3>
<p>Condición:</p>
<pre><code>j − i − 1 = 2 − 2 − 1 = −1</code></pre>

<p>El <code>for</code> es:</p>
<pre><code>for k := 0 to −1</code></pre>

<p>👉 <strong>NO se ejecuta ninguna vez</strong></p>

<h3>Paso 5: insertar <code>m</code></h3>
<pre><code>ai := m
a2 := 5</code></pre>

<p>(No cambia nada)</p>

<h2>Resultado final</h2>
<pre><code>[3, 5, 8, 9]</code></pre>

<ul>
    <li>✔️ El arreglo queda igual</li>
    <li>✔️ No hubo desplazamientos</li>
    <li>✔️ El algoritmo simplemente confirmó que estaba bien</li>
</ul>

<h2>Resumen clave 🔑</h2>
<ul>
    <li><strong>No entra al <code>for</code></strong> cuando:</li>
</ul>
<pre><code>i = j</code></pre>
<ul>
    <li>Eso significa:</li>
    <ul>
        <li>el elemento ya estaba en su lugar</li>
    </ul>
</ul>

    </div>










  <button onmousedown="mostrarMensaje5()" onmouseup="ocultarMensaje5()">Ayuda</button>
    <div id="mensaje5" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
      
<h5>intercambio con distancia de varios elementos</h5>

<h5>Arreglo inicial (índices desde 1)</h5>

<p>
Índice:&nbsp;&nbsp;1&nbsp;&nbsp;2&nbsp;&nbsp;3&nbsp;&nbsp;4&nbsp;&nbsp;5&nbsp;&nbsp;6<br>
Valor:&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;4&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;10&nbsp;&nbsp;5
</p>

<p>Los primeros 5 elementos están ordenados. Vamos a insertar el valor <strong>5</strong>.</p>

<hr>

<h5>VALORES FIJOS DEL for j</h5>

<p>
j = 6<br>
aj = 5
</p>

<hr>

<h5>1️⃣ EJECUCIÓN DEL while</h5>

<p>
i := 1<br>
while aj &gt; ai<br>
&nbsp;&nbsp;&nbsp;&nbsp;i := i + 1
</p>

<h5>Iteración del while (conteo exacto)</h5>

<table border="1" cellpadding="6">
<tr>
<th>Iteración</th>
<th>i antes</th>
<th>Comparación</th>
<th>¿Se cumple?</th>
<th>i después</th>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>5 &gt; a1 (= 2)</td>
<td>Sí</td>
<td>2</td>
</tr>
<tr>
<td>2</td>
<td>2</td>
<td>5 &gt; a2 (= 4)</td>
<td>Sí</td>
<td>3</td>
</tr>
<tr>
<td>3</td>
<td>3</td>
<td>5 &gt; a3 (= 6)</td>
<td>No</td>
<td>—</td>
</tr>
</table>

<h5>Resultado del while</h5>

<ul>
<li>El while se ejecuta <strong>2 veces</strong></li>
<li>Se detiene cuando <strong>i = 3</strong></li>
</ul>

<p>
i = 3
</p>

<p><strong>Momento clave:</strong> aquí se determina la posición donde debe insertarse el elemento.</p>

<hr>

<h5>2️⃣ ASIGNACIÓN DE m</h5>

<p>
m := aj<br>
m = 5
</p>

<p>Esta asignación ocurre <strong>una sola vez</strong>.</p>

<hr>

<h5>3️⃣ EJECUCIÓN DEL SEGUNDO for</h5>

<p>
for k := 0 to j − i<br>
&nbsp;&nbsp;&nbsp;&nbsp;aj−k := aj−k−1
</p>

<h5>Límites del for</h5>

<p>
j − i = 6 − 3 = 3
</p>

<p>
El valor de k toma los valores: <strong>0, 1, 2 y 3</strong><br>
El for se ejecuta <strong>4 veces</strong>.
</p>

<hr>

<h5>Ejecución EXACTA del for (paso a paso)</h5>

<h5>Estado inicial antes del for</h5>

<p>
2&nbsp;&nbsp;4&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;10&nbsp;&nbsp;5
</p>

<hr>

<h5>k = 0</h5>

<p>
a6 := a5
</p>

<p>
2&nbsp;&nbsp;4&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;10&nbsp;&nbsp;10
</p>

<hr>

<h5>k = 1</h5>

<p>
a5 := a4
</p>

<p>
2&nbsp;&nbsp;4&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;8&nbsp;&nbsp;10
</p>

<hr>

<h5>k = 2</h5>

<p>
a4 := a3
</p>

<p>
2&nbsp;&nbsp;4&nbsp;&nbsp;6&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;10
</p>

<hr>

<h5>k = 3 ← MOMENTO DE INTERÉS</h5>

<p>
a3 := a2
</p>

<p>
2&nbsp;&nbsp;4&nbsp;&nbsp;4&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;10
</p>

<ul>
<li>k llega exactamente hasta <strong>3</strong></li>
<li>Se desplazan todos los elementos desde la posición i hasta j − 1</li>
</ul>

<hr>

<h5>4️⃣ INSERCIÓN FINAL</h5>

<p>
ai := m<br>
a3 := 5
</p>

<hr>

<h5>Arreglo final</h5>

<p>
2&nbsp;&nbsp;4&nbsp;&nbsp;5&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;10
</p>

<hr>

<h5>RESUMEN FINAL (LO QUE TE INTERESA)</h5>

<table border="1" cellpadding="6">
<tr>
<th>Bloque</th>
<th>Veces que se ejecuta</th>
</tr>
<tr>
<td>while</td>
<td>2 veces</td>
</tr>
<tr>
<td>m := aj</td>
<td>1 vez</td>
</tr>
<tr>
<td>for k</td>
<td>4 veces (k = 0..3)</td>
</tr>
<tr>
<td>Inserción final</td>
<td>1 vez</td>
</tr>
</table>

<hr>

<h5>IDEA CLAVE</h5>

<p>
El while decide dónde insertar, el for desplaza exactamente j − i + 1 elementos, y el momento crítico ocurre cuando k = j − i.
</p>

    </div>












<button onmousedown="mostrarMensaje3()" onmouseup="ocultarMensaje3()">Ayuda</button>
    <div id="mensaje3" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
 
 <h1>Ejemplo: primer y segundo elemento mal posicionados</h1>

<p>
Usamos este arreglo (mínimo y claro):
</p>

<pre>
[5, 3, 8, 9]
</pre>

<p>👉 Aquí:</p>
<ul>
    <li>El <strong>primer y segundo elemento están mal</strong></li>
    <li><pre>5 &gt; 3</pre></li>
    <li>El resto no importa para esta iteración</li>
</ul>

<hr>

<h2>Iteración del algoritmo</h2>

<h3>Valores iniciales</h3>

<pre>
a1 = 5
a2 = 3
a3 = 8
a4 = 9
n  = 4
</pre>

<hr>

<h2>Paso 1: comienza el for</h2>

<pre>
for j := 2 to n
</pre>

<h3>Primera iteración</h3>

<pre>
j = 2
</pre>

<p>👉 Subarreglo activo:</p>

<pre>
[5, 3]
</pre>

<p>Elemento a insertar:</p>

<pre>
aj = a2 = 3
</pre>

<hr>

<h2>Paso 2: buscar la posición i</h2>

<pre>
i := 1
while aj &gt; ai
    i := i + 1
</pre>

<p>Sustituimos valores reales:</p>

<pre>
while 3 &gt; 5   → falso
</pre>

<p>👉 El <strong>while NO entra ni una vez</strong></p>

<p>Resultado:</p>

<pre>
i = 1
</pre>

<p><strong>Significado:</strong></p>
<blockquote>
    El 3 debe ir <strong>antes del 5</strong>
</blockquote>

<hr>

<h2>Paso 3: guardar el valor en m</h2>

<pre>
m := aj
m := 3
</pre>

<hr>

<h2>Paso 4: ejecutar el for de desplazamiento</h2>

<p>Código:</p>

<pre>
for k := 0 to j − i − 1
    aj−k := aj−k−1
</pre>

<p>Sustituimos valores:</p>

<pre>
j − i − 1 = 2 − 1 − 1 = 0
</pre>

<p>Entonces:</p>

<pre>
for k := 0 to 0
</pre>

<p>👉 <strong>El for se ejecuta UNA vez</strong></p>

<h3>Iteración del for</h3>

<h4>k = 0</h4>

<pre>
aj−k := aj−k−1
a2−0 := a2−1
a2 := a1
</pre>

<p>Sustituimos valores:</p>

<pre>
a2 := 5
</pre>

<p>Estado del arreglo ahora:</p>

<pre>
[5, 5, 8, 9]
</pre>

<p><strong>Nota importante:</strong></p>
<ul>
    <li>El 3 <strong>no se perdió</strong></li>
    <li>Está guardado en <strong>m</strong></li>
</ul>

<hr>

<h2>Paso 5: insertar m en la posición i</h2>

<pre>
ai := m
a1 := 3
</pre>

<hr>

<h2>Resultado final de esta iteración</h2>

<pre>
[3, 5, 8, 9]
</pre>

<p>
✔️ Primer y segundo elemento corregidos<br>
✔️ El subarreglo <strong>a1, a2</strong> ahora está ordenado
</p>

    </div>





    <hr>
    <strong>Que hace el while</strong>
    <p>El objetivo es encontrar la posición i donde debe insertarse aj</p>
<p><strong>Supón que tienes la lista:</strong></p>

<pre>[1, 3, 4, 2]
       ↑ j = 4 → aj = 2</pre>

<p>El subarreglo <code>[1, 3, 4]</code> ya está ordenado.</p>

<p><strong>El <code>while</code> hace:</strong></p>
<pre>
i = 1: ¿2 &gt; 1? ✅ → i = 2

i = 2: ¿2 &gt; 3? ❌ → se detiene
</pre>

<p>Entonces, <code>aj = 2</code> debe insertarse en la posición <code>i = 2</code>.</p>
    <hr>
    <strong> que hace el for</strong>
    <p>el for mueve todos los elementos antes del que se va a insertar hacia arriba</p>
    <p><strong>Lista original:</strong> [2, 3, 4, 5, 1]</p>

<p><strong>🔁 Iteración 4:</strong> j := 5 → aj = a5 = 1</p>
<p><code>i := 1</code>, ¿1 &gt; 2? ❌</p>

<p><strong>Guardamos el valor:</strong></p>
<pre>m := 1</pre>

<p><strong>Desplazamos:</strong></p>
<pre>
for k := 0 to 5 - 1 - 1 = 3

k = 0: a[5] := a[4] → 5  
k = 1: a[4] := a[3] → 4  
k = 2: a[3] := a[2] → 3  
k = 3: a[2] := a[1] → 2
</pre>

<p><strong>Resultado:</strong></p>
<pre>[2, 2, 3, 4, 5]</pre>

<p><strong>Insertamos <code>a1 = 1</code>:</strong></p>
<pre>[1, 2, 3, 4, 5]</pre>
<hr>
 <h5>  Definición:</h5>
  <pre>
procedure string match(n, m: positive integers, m ≤ n, 
                       t1, t2,… , tn, p1, p2,… , pm: characters)
  </pre>

  <h5>✅ ¿Qué son los argumentos aquí?</h5>
  <p>Los argumentos son los valores de entrada que se le pasan al algoritmo para que funcione correctamente. En este caso, son:</p>
  <ul>
    <li><strong>n</strong> → número de caracteres del texto <code>t</code></li>
    <li><strong>m</strong> → número de caracteres del patrón <code>p</code> (y debe cumplirse que <code>m ≤ n</code>)</li>
    <li><strong>t₁, t₂, ..., tₙ</strong> → los caracteres del texto en el que se quiere buscar</li>
    <li><strong>p₁, p₂, ..., pₘ</strong> → los caracteres del patrón que se busca</li>
  </ul>

  <h5> Ejemplo:</h5>
  <p>Supón que:</p>
  <ul>
    <li>Texto <code>t = "abracadabra"</code> → entonces <code>n = 11</code></li>
    <li>Patrón <code>p = "abra"</code> → entonces <code>m = 4</code></li>
  </ul>

  <p>Entonces los argumentos concretos que se pasan al procedimiento serían:</p>
  <pre>
string_match(11, 4, ('a','b','r','a','c','a','d','a','b','r','a'), ('a','b','r','a'))
  </pre>

  <p>Esto corresponde a:</p>
  <ul>
    <li><code>n = 11</code></li>
    <li><code>m = 4</code></li>
    <li><code>t₁..t₁₁ = 'a','b','r','a','c','a','d','a','b','r','a'</code></li>
    <li><code>p₁..p₄ = 'a','b','r','a'</code></li>
  </ul>

    <h4>ALGORITMO 6 Comparador de Cadenas Ingenuo</h4>
    <pre><code>procedure string match (n, m: positive integers, m ≤ n, t1, t2,… , 
    tn, p1, p2,… , pm: characters)
        <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="20">
            <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="17">
            <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="27">
                <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="17">
            <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="17"> print “s is a valid shift”
             </code></pre>
            <br>
            <button type="submit">Enviar</button>
            <?php echo $verificar_53 ?>
            <?php echo $verificar_54 ?>
            <?php echo $verificar_55 ?>
            <?php echo $verificar_56 ?>
            <?php echo $verificar_57 ?>

            <button onmousedown="mostrarMensaje4()" onmouseup="ocultarMensaje4()">Ayuda</button>
    <div id="mensaje4" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
        <p><strong>si no coincide una letra sale del while y no entra en el if</strong></p>
        <h2>Definiciones básicas</h2>

<pre>
n = longitud del texto
m = longitud del patrón (m ≤ n)
</pre>

<pre>
t1, t2, … , tn  → texto
p1, p2, … , pm  → patrón
</pre>

<hr>

<h2>Qué representa cada cosa</h2>

<h3>1️⃣ j ≤ m</h3>

<pre>
j ≤ m
</pre>

<p>👉 Significa:</p>
<ul>
    <li>todavía estamos dentro del patrón</li>
    <li>no hemos comparado todos sus caracteres</li>
</ul>

<hr>

<h3>2️⃣ t<sub>s+j</sub> = p<sub>j</sub></h3>

<pre>
t[s + j] = p[j]
</pre>

<p>👉 Compara:</p>
<ul>
    <li>un carácter del texto</li>
    <li>con un carácter del patrón</li>
</ul>

<p><strong>📌 El s + j es lo que más confunde:</strong></p>
<ul>
    <li><strong>s</strong> = desplazamiento del patrón</li>
    <li><strong>j</strong> = posición dentro del patrón</li>
</ul>

<hr>

<h2>Qué hace el while realmente</h2>

<ul>
    <li>Compara carácter por carácter</li>
    <li>Avanza solo si coinciden</li>
    <li>Se detiene cuando:</li>
    <ul>
        <li>hay una diferencia ❌</li>
        <li>o ya comparó todo el patrón ✅</li>
    </ul>
</ul>

<hr>

<h2>EJEMPLO ULTRA CONCRETO</h2>

<h3>Texto</h3>

<pre>
t = A B A B A C
</pre>

<h3>Patrón</h3>

<pre>
p = A B A
</pre>

<hr>

<h2>Caso 1: s = 0</h2>

<pre>
j = 1
</pre>

<h3>Iteración 1 del while</h3>

<pre>
j ≤ 3        → verdadero
t[0+1] = A
p[1] = A     → iguales
</pre>

<p>👉 entra al while</p>

<pre>
j := 2
</pre>

<h3>Iteración 2</h3>

<pre>
j ≤ 3        → verdadero
t[0+2] = B
p[2] = B     → iguales
</pre>

<p>👉 entra</p>

<pre>
j := 3
</pre>

<h3>Iteración 3</h3>

<pre>
j ≤ 3        → verdadero
t[0+3] = A
p[3] = A     → iguales
</pre>

<p>👉 entra</p>

<pre>
j := 4
</pre>

<h3>Iteración 4</h3>

<pre>
j ≤ 3        → falso
</pre>

<p>❌ sale del while</p>

<hr>

<h2>Qué significa que salió con j = 4</h2>

<pre>
j &gt; m
</pre>

<p>👉 Comparó todo el patrón<br>
👉 Coincidencia encontrada</p>

<hr>

<h2>Caso 2: s = 1 (falla)</h2>

<pre>
j = 1
t[1+1] = B
p[1] = A
</pre>

<p>❌ No entra al while ni una vez</p>

<hr>

<h2>Dibujo mental (clave)</h2>

<pre>
Texto:   A B A B A C
Índices: 1 2 3 4 5 6

s = 0
Patrón: A B A
          ↑ ↑ ↑
</pre>

<p>
El <strong>j</strong> se mueve sobre el patrón<br>
El <strong>s + j</strong> se mueve sobre el texto
</p>

    </div>

            <hr>

        <h3>3.1.5 Algoritmos Voraces</h3>
        <p>Sorprendentemente, uno de los enfoques más simples a menudo conduce a una solución de 
        un problema de optimización. Este enfoque selecciona la 
        <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="14">
        en 
        <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="14">
        , en lugar 
        de considerar todas las secuencias de pasos que podrían conducir a una solución óptima. Los 
        algoritmos que hacen lo que parece ser la “mejor” elección en cada paso se llaman 
        <strong>algoritmos voraces</strong>. Una vez que sabemos que un algoritmo voraz encuentra una 
        solución factible, necesitamos determinar si ha encontrado una solución óptima. (Observa que 
        llamamos al algoritmo “voraz” <em>ya sea que encuentre o no</em> una solución óptima). Para 
        ello, o bien probamos que la solución es óptima o mostramos que existe un contraejemplo donde 
        el algoritmo produce una solución no óptima.</p>

    <p>Para hacer estos conceptos más concretos, consideraremos el algoritmo del cajero que da cambio usando 
    monedas. (Este algoritmo se llama el <em>algoritmo del cajero</em> porque los cajeros solían usar este
     algoritmo para dar cambio en los días antes de que las cajas registradoras se volvieran electrónicas.)</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
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
