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
 
     $respuesta_70 = 'a = b + km';
    $respuesta_71 = 'a+c\equiv b+d\pmod{m}';
    $respuesta_72 = 'ac\equiv bd\pmod{m}';
    $respuesta_73 = 'simetrica';
    $respuesta_74 = 'b\equiv a\pmod{m}';
    $respuesta_75 = 'lo mismo';
    $respuesta_76 = 'a+c';
    $respuesta_77 = 'm(s+t)';
    $respuesta_78 = '18';
    $respuesta_79 = '3';
    $respuesta_80 = '77';
    $respuesta_81 = '2';
    $respuesta_82 = 'No';
    $respuesta_83 = 'dividir';
    $respuesta_84 = 'no';
    $respuesta_85 = '((a\mod m)+(b\mod m))\mod m';
    $respuesta_86 = '((a\mod m)(b\mod m))\mod m';
    $respuesta_87 = 'amodm';
    $respuesta_88 = 'bmodm';
    $respuesta_89 = 'm \mid (a-b)';
         
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
 $respuesta_70_dos = str_replace(' ','', $respuesta_70);
if ($respuesta_70_dos === 'a=b+km') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70_dos === '') {
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
  $respuesta_89_dos = str_replace(' ','' ,$respuesta_89);
if ($respuesta_89_dos === 'm\mid(a-b)') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89_dos === '') {
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
    var f = document.getElementById('respuesta_62').value || "";
  

    // Construir la fórmula dinámica
    var formula = ` \\ ${f}  \\, `;
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
    var f = document.getElementById('respuesta_89').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula20').innerHTML = `\\( ${formula} \\)`;
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
<form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
    <h3>Teorema 4</h3>
<p>Sea <span style="font-family:serif;">m</span> un entero positivo. Los enteros <span style="font-family:serif;">a</span> y <span style="font-family:serif;">b</span> son congruentes módulo <span style="font-family:serif;">m</span> si y solo si existe un entero <span style="font-family:serif;">k</span> tal que:</p>

<span id="formula14">
    \( ? \)
</span> 

<br><br>
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="20"
id="respuesta_70" oninput="actualizarFormula14()">

 

<p><strong>Demostración:</strong> Si \( a \equiv b \pmod{m} \), por la definición de 
congruencia, sabemos que 
<span id="formula20">
    \(  \)
</span> 
 
<input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="10"
id="respuesta_89" oninput="actualizarFormula20()">
 . Esto 
significa que existe un entero \( k \) tal que 
\( a - b = km \), es decir, \( a = b + km \). 
Recíprocamente, si existe un entero \( k \) tal que \( a = b + km \), entonces \( m \mid (a - b) \),
y por tanto, \( a \equiv b \pmod{m} \).</p>

<p>El conjunto de todos los enteros congruentes con un entero \( a \) módulo 
\( m \) se llama la clase de congruencia de \( a \) módulo \( m \). En el Capítulo 9 mostraremos que existen 
\( m \) clases de equivalencia disjuntas entre sí módulo 
\( m \) y que la unión de todas ellas forma el conjunto de los enteros.</p>


<button type="submit">Enviar</button>
<?php echo $verificar_70 ?>
<?php echo $verificar_89 ?>


<hr>
 
<strong>Nota (utilizar):</strong><br>
<strong>\equiv </strong>→ el símbolo de congruencia ≡
<br><br>
<strong>\pmod{m}</strong> → estilo correcto para congruencias "mod m"
<br><br>
<strong>\quad</strong> → espacio entre expresiones (pero no se utiliza)
<br>\text{y}<br> → para poner una "y" en texto normal
<hr>
 






<h3>Teorema 5</h3>
<p>Sea <span style="font-family:serif;">m</span> un entero positivo. Si
<span style="font-family:serif;">a ≡ b (mod m)</span> y <span style="font-family:serif;">c ≡ d (mod m)</span>, 
entonces:</p>

<span id="formula15">
    \( ? \)
</span> 

<br><br>
<input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="20"
id="respuesta_71" oninput="actualizarFormula15()">

\[ y  \]

<span id="formula16">
    \( ? \)
</span> 

<br><br>
<input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="20"
id="respuesta_72" oninput="actualizarFormula16()">
<br><br>
<button type="submit">Enviar</button>
<?php echo $verificar_71 ?>
<?php echo $verificar_72 ?>
<br>  
    <hr>
     <p>Cuando te dicen:</p>

    <p><em>"¿24 y 14 son congruentes módulo 6?"</em></p>

    <p>Eso no significa que haya una diferencia de orden entre 24 y 14.</p>

    <p>Porque la relación de congruencia es 
        <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="10">.</p>

    <p>Es decir:</p>

    <p>$$
    a \equiv b \pmod{m} \quad \text{si y solo si}  
    $$ 

    <span id="formula17">
    \( ? \)
    </span> 

    <br><br>
    <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="20"
    id="respuesta_74" oninput="actualizarFormula17()">
<br><br>




    <p>Entonces, sí, en congruencias, decir "24 y 14" o "14 y 24" es 
    <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="10">    
    .</>
 

    <p> La razón es que la congruencia es una relación 
      <input type="text" value="<?php echo $respuesta_73; ?>" size="10" readonly>    
    , igual que decir "Juan es amigo de Pedro" significa 
        automáticamente que "Pedro es amigo de Juan".</p>


    <button type="submit">Enviar</button>
<?php echo $verificar_73 ?>
<?php echo $verificar_74 ?>
<?php echo $verificar_75 ?>
    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Resumen</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
  <p>Así que:</p>

    <ul>
    <li>"24 es congruente con 14 módulo 6"</li>
    <li>y</li>
    <li>"14 es congruente con 24 módulo 6"</li>
    </ul>

    <p>son exactamente lo mismo.</p>

    <h3>Resumen:</h3>

    <ul>
    <li>La palabra "y" simplemente conecta los dos números que estás comparando.</li>
    <li>No cambia el orden ni el significado.</li>
    <li>Congruencia es simétrica, así que
    $$
    a \equiv b \pmod{m}
    $$
    es igual a
    $$
    b \equiv a \pmod{m}
    $$</li>
    </ul>
    </div>
    
    <hr>

      <h2>Demostración</h2>
    <p>Usamos una demostración directa.  
    Debido a que \( a \equiv b \pmod{m} \) y \( c \equiv d \pmod{m} \), por el Teorema 4 existen enteros \( s \) y \( t \) tales que:</p>
    <p>
        \( b = a + sm \)  y  \( d = c + tm \)
    </p>
    <p>Por lo tanto:</p>
    <p>
        \( b + d = (a + sm) + (c + tm) = ( \)
             <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="10">  

        ) +
        <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="10">  

    </p>
    <p>
        y
    </p>
    <p>
        \( bd = (a + sm)(c + tm) = ac + m(at + cs + stm) \)
    </p>
    <p>Así que:</p>
    <p>
        \( a + c \equiv b + d \pmod{m} \)  y  \( ac \equiv bd \pmod{m} \)
    </p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_76 ?>
    <?php echo $verificar_77 ?>


    <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Explicacion 1</button>
    <!-- Elemento para mostrar la imagen -->
 
    <img id="imagenMostrada2" src="../../../../img/congruente.png"  style="display: none; max-width: 100%" width="460">

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


 <button onmousedown="mostrarImagen()" onmouseup="ocultarImagen()">Explicacion 2</button>
    <!-- Elemento para mostrar la imagen -->
 
    <img id="imagenMostrada" src="../../../../img/congruencia_dos.png"  style="display: none; max-width: 100%" width="460">

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

    <hr>
    
 </div>




<div class="seccion derecha">
     
 
      
    <h3>Ejemplo 6</h3>
    <p>Dado que \( 7 \equiv 2 \pmod{5} \) y \( 11 \equiv 1 \pmod{5} \), entonces por el Teorema 5:</p>
    <p>
        
            <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="10">  
            \( \equiv \) 
            <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="10"> 
            \(\pmod{5} \)
    </p>
    <p>y</p>
    <p>
        <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="10">
        \( 
            \equiv  \)
            
            <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="10">
               \(  \pmod{5} \)
    </p>



    
    <h3>¡
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="10">    
    siempre se puede 
    <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="10"> 
    ambos lados de una congruencia por el mismo número!</h3>
    <p>Debemos tener cuidado al trabajar con congruencias. Algunas propiedades que podríamos esperar que sean 
        verdaderas, en realidad no lo son.  
    Por ejemplo, si \( ac \equiv bc \pmod{m} \), puede ocurrir que \( a \equiv b \pmod{m} \) 
    <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="10">
    sea cierto.  
    De manera similar, aunque \( a \equiv b \pmod{m} \) y \( c \equiv d \pmod{m} \), puede suceder que
     \( ac \equiv bd \pmod{m} \) no sea verdadero. (Ver ejercicio 43.)</p>


    <button type="submit">Enviar</button>
    <?php echo $verificar_78 ?>
    <?php echo $verificar_79 ?>
    <?php echo $verificar_80 ?> 
    <?php echo $verificar_81 ?>
    <?php echo $verificar_82 ?>
    <?php echo $verificar_83 ?>
    <?php echo $verificar_84 ?>
    <hr>
      <h3>Corolario 2</h3>
    <p>Muestra cómo encontrar los valores de la función módulo \( m \) para la suma y el producto de dos enteros usando los valores de esta función para cada uno de los enteros.</p>

    <p><strong>Corolario 2</strong>:  
    Sea \( m \) un entero positivo y \( a \) y \( b \) enteros. Entonces:</p>
    <p>
        \( (a + b) \mod m =   \)
    </p>


    <span id="formula18">
    \( ? \)
    </span> 

    <br><br>
    <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="35"
    id="respuesta_85" oninput="actualizarFormula18()">


    <p>y</p>
    <p>
        \( ab \mod m =   \)
    </p>

    <span id="formula19">
    \( ? \)
    </span> 

    <br><br>
    <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="35"
    id="respuesta_86" oninput="actualizarFormula19()">

    
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_85 ?>
    <?php echo $verificar_86 ?>
    <button onmousedown="mostrarImagen3()" onmouseup="ocultarImagen3()">Explicacion</button>
    <!-- Elemento para mostrar la imagen -->
 
    <img id="imagenMostrada3" src="../../../../img/residuo.png"  style="display: none; max-width: 100%" width="460">

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

    <hr>
    <h3>Demostración</h3>
    <p>Por las definiciones de \( \mod m \) y de congruencia módulo \( m \), sabemos que:</p>
    <p>
        \( a \equiv (  \)
            <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="10">
        \(  ) \pmod{m} \)  y  \( b \equiv ( \)
            <input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="10">

        \( ) \pmod{m} \)
    </p>
    <p>Por el Teorema 5, tenemos que:</p>
    <p>
        \( a + b \equiv (a \mod m) + (b \mod m) \pmod{m} \)
    </p>
    <p>y</p>
    <p>
        \( ab \equiv (a \mod m)(b \mod m) \pmod{m} \)
    </p>
    <p>Las igualdades en este corolario se siguen de estas últimas dos congruencias aplicando el Teorema 3.</p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_87 ?>
    <?php echo $verificar_88 ?>
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
        href="tercero.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
