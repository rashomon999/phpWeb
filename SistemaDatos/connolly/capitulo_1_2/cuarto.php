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
  
        
 // RESPUESTAS CORRECTAS (las mismas que se validan)
        $respuesta_1  = 'redundancia de datos';
        $respuesta_2  = 'escala';
        $respuesta_3  = 'Consistencia';
        $respuesta_4  = 'datos';
        $respuesta_5  = 'requisitos';
        $respuesta_6  = 'informacion';
        $respuesta_7  = 'cantidad';
        $respuesta_8  = 'datos';
        $respuesta_9  = 'accesibilidad';
        $respuesta_10 = 'capacidad';
        $respuesta_11 = 'Comparticion';

        $respuesta_12 = 'productividad';
        $respuesta_13 = 'integridad';
        $respuesta_14 = 'seguridad';
        $respuesta_15 = 'estandares';
        $respuesta_16 = 'Tamaño';
        $respuesta_17 = 'Costo';
        $respuesta_18 = 'hardware';
        $respuesta_19 = 'conversion';
        $respuesta_20 = 'Rendimiento';
        $respuesta_21 = 'falla';
        $respuesta_22 = 'Sistema de Gestión de Bases de Datos';

        $respuesta_23 = 'DBMS';
        $respuesta_24 = ' sistema basado en archivos';
        $respuesta_25 = 'redundancia';
        $respuesta_26 = 'dependencia';
        $respuesta_27 = 'definir';
        $respuesta_28 = 'mantener';
        $respuesta_29 = 'concurrencia';
        $respuesta_30 = 'entorno';
        $respuesta_31 = 'hardware';
        $respuesta_32 = 'concurrencia';
        $respuesta_33 = 'complejidad';

        $respuesta_34 = 'fallos';
        $respuesta_35 = 'abstracta';
        $respuesta_36 = 'general';
        $respuesta_37 = 'requisitos';
        $respuesta_38 = 'recurso compartido';
        $respuesta_39 = 'vista';
        $respuesta_40 = '1971';
        $respuesta_41 = 'American National Standards Institute';
        $respuesta_42 = 'ANSI';
        $respuesta_43 = 'Standards Planning and Requirements Committee';
        $respuesta_44 = 'SPARC';
        $respuesta_45 = 'ANSI/X3/SPARC';

        $respuesta_46 = '1975';
        $respuesta_47 = 'ANSI';
        $respuesta_48 = '1975';
        $respuesta_49 = 'usuarios perciben los datos';
        $respuesta_50 = 'DBMS';
        $respuesta_51 = 'sistema operativo';
        $respuesta_52 = 'vista';
        $respuesta_53 = 'externo';
        $respuesta_54 = 'conceptual';
        $respuesta_55 = 'interno';

        $respuesta_56 = 'mapeo';
        $respuesta_57 = 'independencia';
        $respuesta_58 = 'vision';
        $respuesta_59 = 'usuario';
        $respuesta_60 = 'fisicamente';
        $respuesta_61 = 'usuarios';
        $respuesta_62 = 'directamente';
        $respuesta_63 = 'fisicos';
        $respuesta_64 = 'DBA';
        $respuesta_65 = 'cambiar';
        $respuesta_66 = 'interna';

        $respuesta_67 = 'fisicos';
        $respuesta_68 = 'conceptual';
        $respuesta_69 = 'objetivo principal';
        $respuesta_70 = 'ocultando ciertos detalles';
        $respuesta_71 = 'almacenan';
        $respuesta_72 = 'manipulan';
        $respuesta_73 = 'almacenan realmente';
        $respuesta_74 = 'estructuras de datos';
         
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'redundancia de datos') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'escala') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'Consistencia' 
   || $respuesta_3 === 'consistencia') { 
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'datos') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'requisitos') { 
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'informacion') { 
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'cantidad') { 
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'datos') {
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'accesibilidad') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'capacidad') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'Comparticion') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === 'productividad') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'integridad') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === 'seguridad') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'estandares') {  
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === 'Tamaño') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === 'Costo') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === 'hardware') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'conversion') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'Rendimiento') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === 'falla') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21 === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'Sistema de Gestión de Bases de Datos'
     || $respuesta_22 === 'sistema de gestion de bases de datos'
     ) { 
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'DBMS') { 
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'sistema basado en archivos') { 
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'redundancia') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'dependencia') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'definir') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'mantener') { 
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'concurrencia') { 
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'entorno') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'hardware') { 
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'jerarquicos') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'complejidad') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

   // Verificar la respuesta de la primera pregunta (16 * 2)
$respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
if ($respuesta_34 === 'fallos') { 
    $verificar_34 = "correcto";
} elseif ($respuesta_34 === '') {
    $verificar_34 = '';
} else {
    $verificar_34 = "incorrecto";
}

// Verificar la respuesta de la segunda pregunta (16 * 3)
$respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
if ($respuesta_35 === 'abstracta') { 
    $verificar_35 = "correcto";
} elseif ($respuesta_35 === '') {
    $verificar_35 = '';
} else {
    $verificar_35 = "incorrecto";
}

// Verificar la respuesta de la tercera pregunta (16 * 4)
$respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
if ($respuesta_36 === 'general') { 
    $verificar_36 = "correcto";
} elseif ($respuesta_36 === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

 $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
if ($respuesta_37 === 'requisitos') { 
    $verificar_37 = "correcto";
} elseif ($respuesta_37 === '') {
    $verificar_37 = '';
} else {
    $verificar_37 = "incorrecto";
}

 
$respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'recurso compartido') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

// Verificar la respuesta de la sexta pregunta (16 * 7)
$respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === 'vista') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39 === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === '1971') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40 === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

 $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
if ($respuesta_41 === 'American National Standards Institute') { 
    $verificar_41 = "correcto";
} elseif ($respuesta_41 === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

 $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
if ($respuesta_42 === '(ANSI)'||
$respuesta_42 === 'ANSI') { 
    $verificar_42 = "correcto";
} elseif ($respuesta_42 === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

 $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
if ($respuesta_43 === 'Standards Planning and Requirements Committee') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43 === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}

 
$respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
if ($respuesta_44 === 'SPARC') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44 === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

 
$respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
if ($respuesta_45 === 'ANSI/X3/SPARC') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45 === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

// Verificar la respuesta de la segunda pregunta (17 * 3)
$respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === '1975') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46 === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

// Verificar la respuesta de la tercera pregunta (17 * 4)
$respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === 'ANSI') { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47 === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}

// Verificar la respuesta de la cuarta pregunta (17 * 5)
$respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
if ($respuesta_48 === '1975') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48 === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

// Verificar la respuesta de la quinta pregunta (17 * 6)
$respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === 'usuarios perciben los datos') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

// Verificar la respuesta de la sexta pregunta (17 * 7)
$respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === 'DBMS') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

// Verificar la respuesta de la séptima pregunta (17 * 8)
$respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'sistema operativo') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

// Verificar la respuesta de la octava pregunta (17 * 9)
$respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'vista') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'externo') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'conceptual') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'interno') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


// Verificar la respuesta de la primera pregunta (18 * 2)
$respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'mapeo') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'independencia') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'vision') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

// Verificar la respuesta de la cuarta pregunta (18 * 5)
$respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'usuario') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

// Verificar la respuesta de la quinta pregunta (18 * 6)
$respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'fisicamente') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'usuarios') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'directamente') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'fisicos') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'DBA') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

// Verificar la respuesta de la décima pregunta (18 * 11)
$respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'cambiar') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

// Verificar la respuesta de la undécima pregunta (18 * 12)
$respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'interna') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

// Verificar la respuesta de la primera pregunta (19 * 2)
$respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'fisicos') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

// Verificar la respuesta de la segunda pregunta (19 * 3)
$respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'conceptual') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}
 

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'objetivo principal') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'ocultando ciertos detalles') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'almacenan') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'manipulan') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'almacenan fisicamente') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'estructuras de datos') { 
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
    .imagen {
        max-width: 100%;
        height: auto;
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




</script>
    
</head>
<body>
<form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
    <table border="1">
    <caption>Tabla 1.2 Ventajas de los DBMSs</caption>
    <tr>
        <th>Ventaja</th>
        <th>Ventaja</th>
    </tr>
    <tr>
        <td>Control de la 
        <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="18">     
        </td>
        <td>Economía de 
        <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8"> 
        </td>
    </tr>
    <tr>
        <td>
        <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">     
        de los 
        <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">
        </td>
        <td>Equilibrio de 
        <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">    
        en conflicto</td>
    </tr>
    <tr>
        <td>Más 
        <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">    
        a partir de la misma 
        <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">
        de 
        <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">
    </td>
        <td>Mejor 
        <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="8">    
        y 
        <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8"> 
        de respuesta de los datos</td>
    </tr>
    <tr>
        <td>
        <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="9">     
        de datos</td>
        <td>Aumento de la 
        <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="10">     
        </td>
    </tr>
    <tr>
        <td>Mejora de la 
        <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">         
        de los datos</td>
        <td>Mantenimiento mejorado mediante independencia de datos</td>
    </tr>
    <tr>
        <td>Mejora de la 
        <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">     
        </td>
        <td>Aumento de la concurrencia</td>
    </tr>
    <tr>
        <td>Aplicación de 
        <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">     
        </td>
        <td>Mejor respaldo y servicios de recuperación</td>
    </tr>
</table>

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
            <?php echo $verificar_14 ?>
            <?php echo $verificar_15 ?>





<table border="1">
    <caption>Tabla 1.3 Desventajas de los DBMSs </caption>
    <tr>
        <th>Desventajas</th>
    </tr>
    <tr>
        <td>Complejidad</td>
    </tr>
    <tr>
        <td>
        <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="8">     
        </td>
    </tr>
    <tr>
        <td>
        <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">         
        de la DBMS</td>
    </tr>
    <tr>
        <td>Costos adicionales de 
        <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">         
        </td>
    </tr>
    <tr>
        <td>Costo de 
        <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">         
        </td>
    </tr>
    <tr>
        <td>
        <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="8">         
        </td>
    </tr>
    <tr>
        <td>Mayor impacto de una 
        <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="8">
        </td>
    </tr>
</table>
<button type="submit">Enviar</button>
            <?php echo $verificar_16 ?>
            <?php echo $verificar_17 ?>
            <?php echo $verificar_18 ?>
            <?php echo $verificar_19 ?>
            <?php echo $verificar_20 ?>
            <?php echo $verificar_21 ?>
            <hr>
    <strong>Resumen del capitulo</strong>
    <br><br><br>
    El 
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="32">
    (<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="5">)
    es la base de los sistemas de información
    modernos y ha transformado la operación de muchas organizaciones. Su predecesor, el  
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="24">,
    presentaba problemas como
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">,
    de datos y 
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8"> 
    entre programas y datos.
    <br><br>
    El enfoque de bases de datos surgió para resolver estos problemas. Un DBMS permite
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">, 
    crear,
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="8"> 
    y controlar el acceso a una base de datos, ofreciendo seguridad, integridad, 
    control de 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8"> 
     y recuperación.
    <br><br>
    El 
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="8"> 
    DBMS incluye 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8"> 
    , software, datos, procedimientos y personas como 
    administradores y usuarios. A lo largo del tiempo, han evolucionado desde sistemas
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">
     y de red en los años 60, hasta el modelo relacional propuesto por Codd 
    en 1970, y posteriormente los DBMS orientados a objetos.
    <br><br>
    Las ventajas del DBMS incluyen control de redundancia, consistencia, seguridad e integridad.
    Sin embargo, presenta desventajas como 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="8">
    , costos elevados, menor rendimiento y 
    mayor impacto en caso de 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8">.
    <br><br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>
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
    <hr>
    <br>
    <strong>Capitulo 2</strong>

    <h1>Arquitectura de los Sistemas de Bases de Datos</h1>

    <p>Un 
    <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="14" >    
      de un sistema de bases de datos es proporcionar a los 
    usuarios una <strong>visión 
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">    
    de los datos</strong>, 
    <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="21" >
      sobre cómo se 
      <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="8" >
        y 
      <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="8" >
       . Por lo tanto, el punto de
     partida para el diseño de una base de datos 
    debe ser una descripción <strong>
    <input type="text"  value="<?php echo $respuesta_35; ?>" size="8" readonly >    
    y 
    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">
    </strong> de los 
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="8">
    de 
    información de la organización que se representará en la base de datos.</p>

    <p>En este capítulo, y a lo largo del libro, usamos el término 
    <strong>"organización"</strong> de manera flexible para referirnos a toda 
    la organización o solo a una parte de ella. Por ejemplo, en el caso de estudio 
    <strong>DreamHome</strong>, podemos estar interesados en modelar:</p>

    <ul>
        <li>Las entidades del "mundo real" como <strong>Staff, PropertyForRent,
             PrivateOwner y Client</strong>.</li>
        <li>Los <strong>atributos</strong> que describen características de cada
         entidad (por ejemplo, cada miembro del <strong>Staff</strong> tiene un 
        <strong>nombre, puesto y salario</strong>).</li>
        <li>Las <strong>relaciones</strong> entre estas entidades
         (por ejemplo, <strong>Staff gestiona PropertyForRent</strong>).</li>
    </ul>

    <p>Además, dado que una base de datos es un <strong>
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="18">
    </strong>,
     cada usuario puede necesitar una 
     <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="8">
     diferente de los datos almacenados 
    en la base de datos. Para satisfacer estos requerimientos, la arquitectura de
     la mayoría de los <strong>DBMS comerciales</strong> actuales se basa, en cierta 
    medida, en la <strong>arquitectura ANSI-SPARC</strong>.</p>

    <p>En este capítulo, analizamos diversas <strong>características arquitectónicas
    y funcionales</strong> de los DBMS.</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_69 ?>
    <?php echo $verificar_35 ?>
    <?php echo $verificar_70 ?>
    <?php echo $verificar_71 ?>
    <?php echo $verificar_72 ?>
    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <?php echo $verificar_39 ?>
</div>




<div class="seccion derecha">
     

    <h1>2.1 La Arquitectura de Tres Niveles ANSI-SPARC</h1>
    <p>Una de las primeras propuestas para una terminología estándar y una arquitectura general
    para los sistemas de bases de datos fue presentada en 
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="8">
    por el <strong>DBTG</strong>, designado por <strong>CODASYL</strong> en 
    <input type="text"  value="<?php echo $respuesta_40; ?>" size="8" readonly>
    .</p>

    <p>El <strong>DBTG</strong> reconoció la necesidad de un enfoque de dos niveles con una vista
     del sistema llamada <strong>esquema</strong> y vistas de usuario llamadas 
    <strong>subesquemas</strong>. Posteriormente, el 
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="32" > 
    <strong> 
    (<input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="8" >  )   
    </strong>, 
    
    a través de su
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="32" >     

    <strong> 
    (<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8" >)
    </strong>, también conocido como 
    
    <strong>
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="10" >    
    </strong>,

    propuso en 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="10" >    
    una terminología y arquitectura similar (
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="10" >     
        , 
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="10" >     
    
        ).</p>

    <p>La arquitectura <strong>ANSI-SPARC</strong> introdujo la necesidad de un
    <strong>enfoque de tres niveles</strong> con un catálogo del sistema. Estas 
    propuestas reflejaban aquellas publicadas por las organizaciones de usuarios 
    de IBM <strong>Guide</strong> y <strong>Share</strong> algunos años antes, y 
    se centraban en la necesidad de una capa independiente de la implementación para aislar
    los programas de los problemas de representación subyacentes 
    (<strong>Guide/Share, 1970</strong>).</p>
    <p>Aunque el modelo <strong>ANSI-SPARC</strong> no se convirtió en un estándar formal, todavía
    proporciona una base para comprender algunas de las 
    funcionalidades de un <strong>DBMS</strong>.</p>
    
    
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
    <hr>

    <h2>Niveles de Abstracción</h2>
    <p>Para nuestros propósitos, el punto fundamental de estos y otros informes posteriores es la
    identificación de <strong>tres niveles de abstracción</strong>, es decir, tres niveles 
    distintos en los que se pueden describir los datos. Estos niveles forman una
    <strong>arquitectura de tres niveles</strong> que comprende:</p>
    <ul>
        <li><strong>Nivel 
        <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="10" >          
        </strong></li>
        <li><strong>Nivel 
        <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="10" >      
         </strong></li>
        <li><strong>Nivel
        <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="10" >      
         </strong></li>
        <br>
        <button type="submit">Enviar</button>
        <?php echo $verificar_53 ?> 
        <?php echo $verificar_54 ?>
        <?php echo $verificar_55 ?>
    </ul>
    <p>Tal como se muestra en la Figura 2.1.</p>
    
    <h2>Descripción de los Niveles</h2>
    <ul>
        <li>La forma en que los <strong>
        <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="24" >     
        </strong>   se denomina <strong>nivel externo</strong>.</li>

        <li>La forma en que el <strong>
        <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="10" >    
        </strong> y el <strong>
        <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="14" >  
        </strong> 
        perciben los datos es el <strong>nivel interno</strong>, donde los datos 
        se 
        <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="17" >
          utilizando 
          <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="17" >
            y organizaciones de archivos.</li>

        <li>El <strong>nivel conceptual</strong> proporciona tanto el <strong>
        <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="10" >          
        </strong> 
        como la <strong>
        <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="10" >          
        deseada</strong> entre los niveles externo e interno.</li>
    </ul>
    
    <h2>Objetivo de la Arquitectura de Tres Niveles</h2>
    <p>El objetivo de la arquitectura de tres niveles es <strong>separar</strong> la 
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="10" >      
      que
     cada 
     <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="10" > 
     tiene de la base de datos de la manera en que esta se representa 
     <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="10" >   
      .</p>
    <p>Existen varias razones por las que esta separación es deseable:</p>
    <ul>
        <li>Cada usuario debe poder acceder a los mismos datos, pero con una 
            <strong>
            <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="10" >      
            personalizada</strong> de los mismos.
        Cada usuario debe poder modificar su forma de ver los datos, y 
            estos cambios no deben afectar a otros usuarios.</li>
    </ul> 
    <br>
    <button type="submit">Enviar</button>
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

    <hr>
    <ul>
    <li>Los 
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="10" >    
    no deberían tener que tratar 
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="10" > 
    con los detalles <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="10" >
    del almacenamiento
     de la base de datos, como indexación o hashing (ver Apéndice F). En otras palabras,
    la interacción del usuario con la base de datos debe ser independiente de las consideraciones
    de almacenamiento.</li>

    <li>El Administrador de Base de Datos (
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="8" >
        ) debería poder 
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8" >
    las estructuras de almacenamiento
    de la base de datos sin afectar las vistas de los usuarios.</li>

    <li>La estructura 
    <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="8" >    
    de la base de datos no debería verse afectada por cambios en los 
    aspectos 
    <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="8" >
    del almacenamiento, como la transición a un nuevo dispositivo de
    almacenamiento.</li>

    <li>El DBA debería poder cambiar la estructura 
    <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="8" >    
    de la base de datos sin afectar
    a todos los usuarios.</li>

    </ul>
    <br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_61 ?>
        <?php echo $verificar_62 ?>
        <?php echo $verificar_63 ?>
        <?php echo $verificar_64 ?>
        <?php echo $verificar_65 ?>
        <?php echo $verificar_66 ?>
        <?php echo $verificar_67 ?>
        <?php echo $verificar_68 ?>
        
    
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
