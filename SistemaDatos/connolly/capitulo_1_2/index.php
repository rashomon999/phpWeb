<?php
 
 
for ($i = 1; $i <= 230; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 230; $i++) {
    ${"verificar_" . $i} = '';
}


$respuesta_64_0 = '';
$respuesta_64_1 = '';
$respuesta_64_2 = '';


$respuesta_60_0 = ''; $respuesta_60_1 = ''; $respuesta_60_2 = ''; $respuesta_60_3 = ''; $respuesta_60_4 = '';
$respuesta_60_5 = ''; $respuesta_60_6 = '';  $respuesta_60_7 = '';

$respuesta_74_0 = '';

$verificar_60_0 = ''; $verificar_60_1 = ''; $verificar_60_2 = ''; $verificar_60_3 = '';   
$verificar_60_4 = '';   $verificar_60_5 = '';   $verificar_60_6 = '';   $verificar_60_7 = '';  
 
 $verificar_61 = ''; $verificar_62 = ''; $verificar_63 = ''; $verificar_64 = ''; $verificar_64_0 = '';
$verificar_64_1 = ''; $verificar_64_2 = '';
  $verificar_74_0 = '';
$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas para las tablas de multiplicar

       // ===== RESPUESTAS TEXTUALES (1–11)
    $respuesta_1  = 'Un conjunto de programas de';
    $respuesta_2  = 'aplicacion que brindan';
    $respuesta_3  = 'servicios a los';
    $respuesta_4  = 'usuarios finales';
    $respuesta_5  = 'Como la generacion';
    $respuesta_6  = 'de informes';
    $respuesta_7  = 'Cada programa';
    $respuesta_8  = 'define';
    $respuesta_9  = 'gestiona sus propios';
    $respuesta_10 = 'datos';
    $respuesta_11 = 'almacenar';

    // ===== RESPUESTAS 12–22
    $respuesta_12 = 'aceptable';
    $respuesta_13 = 'gran';
    $respuesta_14 = 'elementos';
    $respuesta_15 = 'almacenarlos';
    $respuesta_16 = 'recuperarlos';
    $respuesta_17 = 'referencias cruzadas';
    $respuesta_18 = 'procesar';
    $respuesta_19 = 'desarrollado';
    $respuesta_20 = 'respuesta';
    $respuesta_21 = 'necesidades';
    $respuesta_22 = 'industria';

    // ===== RESPUESTAS 23–33
    $respuesta_23 = 'acceso';
    $respuesta_24 = 'eficiente';
    $respuesta_25 = 'datos';
    $respuesta_26 = 'almacenamiento';
    $respuesta_27 = 'centralizado';
    $respuesta_28 = 'datos';
    $respuesta_29 = 'enfoque';
    $respuesta_30 = 'descentralizado';
    $respuesta_31 = 'departamento';
    $respuesta_32 = 'personal';
    $respuesta_33 = 'procesamiento de datos';

    // ===== RESPUESTAS 34–59
    $respuesta_34 = 'controlaba';
    $respuesta_35 = 'separacion y aislamiento de datos';
    $respuesta_36 = 'duplicacion de datos';
    $respuesta_37 = 'dependencia de los datos';
    $respuesta_38 = 'formatos de archivos incompatibles';
    $respuesta_39 = 'consultas fijas';
    $respuesta_40 = 'proliferacion de programas de aplicacion';
    $respuesta_41 = 'Un archivo es una coleccion';
    $respuesta_42 = 'de registros';
    $respuesta_43 = 'que contienen datos relacionados logicamente';
    $respuesta_44 = 'La definicion de los datos esta incrustada';
    $respuesta_45 = 'programas';
    $respuesta_46 = 'en lugar de almacenarse por';
    $respuesta_47 = 'separado';
    $respuesta_48 = 'independientemente';
    $respuesta_49 = 'No hay control sobre el acceso';
    $respuesta_50 = 'y la manipulacion de los datos mas alla';
    $respuesta_51 = 'programas';
    $respuesta_52 = 'base de datos';
    $respuesta_53 = 'sistema de gestion de base de datos';
    $respuesta_54 = 'Una coleccion compartida de datos';
    $respuesta_55 = 'DBMS';
    $respuesta_56 = 'logicamente relacionados';
    $respuesta_57 = 'y su descripcion';
    $respuesta_58 = 'satisfacer';
    $respuesta_59 = 'informacion';

    // ===== RESPUESTAS COMPUESTAS (60)
    $respuesta_60_0 = 'La base de datos ya no es propiedad de un solo departamento';
    $respuesta_60_1 = 'coleccion autodocumentada';
    $respuesta_60_2 = 'no solo almacena los datos operativos de la organizacion';
    $respuesta_60_3 = 'registros integrados';
    $respuesta_60_4 = 'catalogo del sistema';
    $respuesta_60_5 = 'diccionario de datos';
    $respuesta_60_6 = 'metadatos';
    $respuesta_60_7 = 'datos sobre datos';
    $respuesta_60   = 'autodocumentada';

    // ===== RESPUESTAS 61–85
    $respuesta_61 = 'independencia';
    $respuesta_62 = 'programa';
    $respuesta_63 = 'datos';
    $respuesta_64 = 'separa';
    $respuesta_64_0 = 'estructura';
    $respuesta_64_1 = 'programas';
    $respuesta_64_2 = 'aplicacion';
    $respuesta_65 = 'propiedad';
    $respuesta_66 = 'asociacion';
    $respuesta_67 = 'Sistema de gestion de base de datos';
    $respuesta_68 = 'DBMS';
    $respuesta_69 = 'Un sistema de software que permite a los usuarios';
    $respuesta_70 = 'definir';
    $respuesta_71 = 'crear';
    $respuesta_72 = 'mantener';
    $respuesta_73 = 'controlar';
    $respuesta_74_0 = 'definir';
    $respuesta_74 = 'DDL';
    $respuesta_75 = 'lenguaje de manipulacion de datos';
    $respuesta_76 = 'proporciona';
    $respuesta_77 = 'controlado';
    $respuesta_78 = 'seguridad';
    $respuesta_79 = 'interactua';
    $respuesta_80 = 'subconjunto';
    $respuesta_81 = 'hardware';
    $respuesta_82 = 'software';
    $respuesta_83 = 'datos';
    $respuesta_84 = 'procedimientos';
    $respuesta_85 = 'personas';
    $respuesta_86 = 'Sistema basado en archivos';
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    // Verificar la respuesta de la primera pregunta
   $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'Un conjunto de programas de') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'aplicacion que brindan') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'servicios a los') { 
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'usuarios finales') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'Como la generacion') { 
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'de informes') { 
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'Cada programa') { 
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'define') {
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'gestiona sus propios') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'datos') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'almacenar') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === 'aceptable') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'gran') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === 'elementos') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'almacenarlos') {  
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === 'recuperarlos') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === 'referencias cruzadas') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === 'procesar') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'desarrollado') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'respuesta') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === 'necesidades') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21 === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'industria') { 
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'acceso') { 
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'eficiente') { 
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'datos') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'almacenamiento') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'centralizado') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'datos') { 
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'enfoque') { 
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'descentralizado') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'departamento') { 
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

    $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'personal') { 
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

    $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'procesamiento de datos') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

 $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
if ($respuesta_34 === 'controlaba') { 
    $verificar_34 = "correcto";
} elseif ($respuesta_34 === '') {
    $verificar_34 = '';
} else {
    $verificar_34 = "incorrecto";
}

 $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
if ($respuesta_35 === 'separacion y aislamiento de datos') { 
    $verificar_35 = "correcto";
} elseif ($respuesta_35 === '') {
    $verificar_35 = '';
} else {
    $verificar_35 = "incorrecto";
}

 $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
if ($respuesta_36 === 'duplicacion de datos') { 
    $verificar_36 = "correcto";
} elseif ($respuesta_36 === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

 $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
if ($respuesta_37 === 'dependencia de los datos') { 
    $verificar_37 = "correcto";
} elseif ($respuesta_37 === '') {
    $verificar_37 = '';
} else {
    $verificar_37 = "incorrecto";
}

 $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'formatos de archivos incompatibles') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

 $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === 'consultas fijas') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39 === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === 'proliferacion de programas de aplicacion') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40 === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

 $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
if ($respuesta_41 === 'Un archivo es una coleccion') { 
    $verificar_41 = "correcto";
} elseif ($respuesta_41 === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

 $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
if ($respuesta_42 === 'de registros') { 
    $verificar_42 = "correcto";
} elseif ($respuesta_42 === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

 $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
if ($respuesta_43 === 'que contienen datos relacionados logicamente') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43 === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}


$respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
if ($respuesta_44 === 'La definicion de los datos esta incrustada') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44 === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}


$respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
if ($respuesta_45 === 'programas') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45 === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}


$respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === 'en lugar de almacenarse por') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46 === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}



$respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === 'separado') { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47 === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}



$respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
if ($respuesta_48 === 'independientemente') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48 === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}



$respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === 'No hay control sobre el acceso') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === 'y la manipulacion de los datos mas alla') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'programas') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 
$respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'base de datos') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 
$respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'sistema de gestion de base de datos') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 
$respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'Una coleccion compartida de datos') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 
$respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'DBMS') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 
$respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'logicamente relacionados') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 
$respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'y su descripcion') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 
$respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'satisfacer') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 
$respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'informacion') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}



// Verificar la respuesta de la quinta pregunta (18 * 6)
$respuesta_60_0 = isset($_POST['respuesta_60_0']) ? $_POST['respuesta_60_0'] : '';
if ($respuesta_60_0 === 'La base de datos ya no es propiedad de un solo departamento') { 
    $verificar_60_0 = "correcto";
} elseif ($respuesta_60_0 === '') {
    $verificar_60_0 = '';
} else {
    $verificar_60_0 = "incorrecto";
}

$respuesta_60_1 = isset($_POST['respuesta_60_1']) ? $_POST['respuesta_60_1'] : '';
if ($respuesta_60_1 === 'coleccion autodocumentada') { 
    $verificar_60_1 = "correcto";
} elseif ($respuesta_60_1 === '') {
    $verificar_60_1 = '';
} else {
    $verificar_60_1 = "incorrecto";
}

$respuesta_60_2 = isset($_POST['respuesta_60_2']) ? $_POST['respuesta_60_2'] : '';
if ($respuesta_60_2 === 'no solo almacena los datos operativos de la organizacion') { 
    $verificar_60_2 = "correcto";
} elseif ($respuesta_60_2 === '') {
    $verificar_60_2 = '';
} else {
    $verificar_60_2 = "incorrecto";
}

$respuesta_60_3 = isset($_POST['respuesta_60_3']) ? $_POST['respuesta_60_3'] : '';
if ($respuesta_60_3 === 'registros integrados') { 
    $verificar_60_3 = "correcto";
} elseif ($respuesta_60_3 === '') {
    $verificar_60_3 = '';
} else {
    $verificar_60_3 = "incorrecto";
}

$respuesta_60_4 = isset($_POST['respuesta_60_4']) ? $_POST['respuesta_60_4'] : '';
if ($respuesta_60_4 === 'catalogo del sistema') { 
    $verificar_60_4 = "correcto";
} elseif ($respuesta_60_4 === '') {
    $verificar_60_4 = '';
} else {
    $verificar_60_4 = "incorrecto";
}
 


$respuesta_60_5 = isset($_POST['respuesta_60_5']) ? $_POST['respuesta_60_5'] : '';
if ($respuesta_60_5 === 'diccionario de datos') { 
    $verificar_60_5 = "correcto";
} elseif ($respuesta_60_5 === '') {
    $verificar_60_5 = '';
} else {
    $verificar_60_5 = "incorrecto";
}


$respuesta_60_6 = isset($_POST['respuesta_60_6']) ? $_POST['respuesta_60_6'] : '';
if ($respuesta_60_6 === 'metadatos') { 
    $verificar_60_6 = "correcto";
} elseif ($respuesta_60_6 === '') {
    $verificar_60_6 = '';
} else {
    $verificar_60_6 = "incorrecto";
}


$respuesta_60_7 = isset($_POST['respuesta_60_7']) ? $_POST['respuesta_60_7'] : '';
if ($respuesta_60_7 === 'datos sobre datos') { 
    $verificar_60_7 = "correcto";
} elseif ($respuesta_60_7 === '') {
    $verificar_60_7 = '';
} else {
    $verificar_60_7 = "incorrecto";
}


// Verificar la respuesta de la quinta pregunta (18 * 6)
$respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'autodocumentada') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}




// Verificar la respuesta de la sexta pregunta (18 * 7)
$respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'independencia') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

// Verificar la respuesta de la séptima pregunta (18 * 8)
$respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'programa') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

// Verificar la respuesta de la octava pregunta (18 * 9)
$respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'datos') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

// Verificar la respuesta de la novena pregunta (18 * 10)
$respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'separa') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

// Verificar la respuesta de la novena pregunta (18 * 10)
$respuesta_64_0 = isset($_POST['respuesta_64_0']) ? $_POST['respuesta_64_0'] : '';
if ($respuesta_64_0 === 'estructura') { 
    $verificar_64_0 = "correcto";
} elseif ($respuesta_64_0 === '') {
    $verificar_64_0 = '';
} else {
    $verificar_64_0 = "incorrecto";
}

// Verificar la respuesta de la novena pregunta (18 * 10)
$respuesta_64_1 = isset($_POST['respuesta_64_1']) ? $_POST['respuesta_64_1'] : '';
if ($respuesta_64_1 === 'programas') { 
    $verificar_64_1 = "correcto";
} elseif ($respuesta_64_1 === '') {
    $verificar_64_1 = '';
} else {
    $verificar_64_1 = "incorrecto";
}

// Verificar la respuesta de la novena pregunta (18 * 10)
$respuesta_64_2 = isset($_POST['respuesta_64_2']) ? $_POST['respuesta_64_2'] : '';
if ($respuesta_64_2 === 'aplicacion') { 
    $verificar_64_2 = "correcto";
} elseif ($respuesta_64_2 === '') {
    $verificar_64_2 = '';
} else {
    $verificar_64_2 = "incorrecto";
}



// Verificar la respuesta de la décima pregunta (18 * 11)
$respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'propiedad') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'asociacion') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}
 
$respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'Sistema de gestion de base de datos') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 
$respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'DBMS') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 
$respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'Un sistema de software que permite a los usuarios') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 
$respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'definir') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 
$respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'crear') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

// Verificar la respuesta de la sexta pregunta (19 * 7)
$respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'mantener') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

// Verificar la respuesta de la séptima pregunta (19 * 8)
$respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'controlar') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

// Verificar la respuesta de la octava pregunta (19 * 9)
$respuesta_74_0 = isset($_POST['respuesta_74_0']) ? $_POST['respuesta_74_0'] : '';
if ($respuesta_74_0 === 'definir') { 
    $verificar_74_0 = "correcto";
} elseif ($respuesta_74_0 === '') {
    $verificar_74_0 = '';
} else {
    $verificar_74_0 = "incorrecto";
}

// Verificar la respuesta de la octava pregunta (19 * 9)
$respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'DDL') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'lenguaje de manipulacion de datos') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

// Verificar la respuesta de la décima pregunta (19 * 11)
$respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'proporciona') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

// Verificar la respuesta de la undécima pregunta (19 * 12)
$respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'controlado') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

// Verificar la respuesta de la primera pregunta (20 * 2)
$respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'seguridad') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

// Verificar la respuesta de la segunda pregunta (20 * 3)
$respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'interactua') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

// Verificar la respuesta de la tercera pregunta (20 * 4)
$respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'subconjunto') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'hardware') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

 $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
if ($respuesta_82 === 'software') { 
    $verificar_82 = "correcto";
} elseif ($respuesta_82 === '') {
    $verificar_82 = '';
} else {
    $verificar_82 = "incorrecto";
}

 $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
if ($respuesta_83 === 'datos') { 
    $verificar_83 = "correcto";
} elseif ($respuesta_83 === '') {
    $verificar_83 = '';
} else {
    $verificar_83 = "incorrecto";
}

// Verificar la respuesta de la séptima pregunta (20 * 8)
$respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
if ($respuesta_84 === 'procedimientos') { 
    $verificar_84 = "correcto";
} elseif ($respuesta_84 === '') {
    $verificar_84 = '';
} else {
    $verificar_84 = "incorrecto";
}

// Verificar la respuesta de la octava pregunta (20 * 9)
$respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
if ($respuesta_85 === 'personas') { 
    $verificar_85 = "correcto";
} elseif ($respuesta_85 === '') {
    $verificar_85 = '';
} else {
    $verificar_85 = "incorrecto";
}

 $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
if ($respuesta_86 === 'Sistema basado en archivos') { 
    $verificar_86 = "correcto";
} elseif ($respuesta_86 === '') {
    $verificar_86 = '';
} else {
    $verificar_86 = "incorrecto";
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

     .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 270vh;
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
<form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
    Conelly Cap. 1 y 2.    
    <hr>
            <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="25">
            <br>
              
            <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="25"> 
              
            <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="18">
              
            <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="10">
              
            <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="10"> 
             .
              
            <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="15">
              
            <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="10">. 
             
            <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="11">
            <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="4">
            y 
            <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="16"> 
             
            <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="4">
            <br>
            <p>
            Los sistemas de archivos son un intento temprano por computarizar el sistema manual 
            de archivos.
            </p>
             
            <button type="submit">Enviar</button>
            <?php echo $verificar_86 ?>
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
            <hr>
            <br>
            El Sistema de archivos manual funciona bien mientras la cantidad de 
            elementos a 
            <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="10">
           sea pequeña. Incluso funciona de manera 
           <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="10">
           cuando hay un 
           <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="10">
           numero de 
           <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="10"> 
           y solo necesitamos 
           <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="10">
           y
           <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="10">.
           <br>
           Sin embargo, el sistema manual falla cuando necesitamos hacer 
           <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="16">
           o
           <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="10">
           la informacion en los archivos. <br>
           <button type="submit">Enviar</button>
           <?php echo $verificar_11 ?>
           <?php echo $verificar_12 ?>
           <?php echo $verificar_13 ?>
            <?php echo $verificar_14 ?>
            <?php echo $verificar_15 ?>
            <?php echo $verificar_16 ?>
            <?php echo $verificar_17 ?>
            <?php echo $verificar_18 ?>
            <br><br>
            El Sistema basado en archivos fue 
            <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="10">
            en 
            <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="10">
            a las 
            <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="10">
            de la 
            <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="10">
            para un 
            <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="10">
            mas 
            <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="10"> 
            a los 
            <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="10">.
            <br>
            <button type="submit">Enviar</button>
            <?php echo $verificar_19 ?>
            <?php echo $verificar_20 ?>
            <?php echo $verificar_21 ?>
            <?php echo $verificar_22 ?>
            <?php echo $verificar_23 ?>
            <?php echo $verificar_24 ?>
            <?php echo $verificar_25 ?>
            <br><br><br>
            Sin embargo, en lugar de establecer un 
            <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="11">
            <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="10">
            para los 
            <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="10">
            operativos de la organizacion, se adopto un 
            <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="10">
            <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="10">
            , donde cada 
            <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="10">
            con la asistencia del 
            <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="10">
            de 
            <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="19">
              (DP), almacenaba y 
            <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="10">
            sus propios datos.
            <br><br><br>
            <button type="submit">Enviar</button>
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
            <strong>Limitaciones del sistema basado en archivos</strong> <br><br>
            1.<input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="35"><br>
            2.<input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="29"><br>
            3.<input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="29"><br>
            4.<input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="34"><br>
            5.<input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="29"> 
            /<input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="39"><br><br>
            <button type="submit">Enviar</button>
            <br>
            <?php echo $verificar_35 ?>
            <?php echo $verificar_36 ?>
            <?php echo $verificar_37 ?>
            <?php echo $verificar_38 ?>
            <?php echo $verificar_39 ?>
            <?php echo $verificar_40 ?>
            <br><br><br>
            <strong>Archivo:</strong><br>
            <br>
              
            <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="22">
              
            <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="9">
              
            <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="41">
            <br><br>
            <button type="submit">Enviar</button>
            <?php echo $verificar_41 ?>
            <?php echo $verificar_42 ?>
            <?php echo $verificar_43 ?>
            <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Ayuda</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
<h5>1️⃣ Archivo</h5>

<p><strong>Definición clara:</strong></p>

<blockquote>
  Un <strong>archivo</strong> es una colección de <strong>registros</strong> que contienen datos relacionados lógicamente.
</blockquote>

<p><strong>Ideas clave:</strong></p>

<ul>
  <li>Es <strong>simple</strong>.</li>
  <li>Normalmente pertenece a <strong>una sola aplicación</strong>.</li>
  <li>No tiene reglas complejas de control.</li>
  <li>No “sabe” nada sobre otros archivos.</li>
</ul>

<p><strong>Ejemplo:</strong></p>

<ul>
  <li><code>alumnos.txt</code></li>
  <li><code>ventas.csv</code></li>
</ul>

<p>Cada programa:</p>

<ul>
  <li>Abre el archivo</li>
  <li>Lee</li>
  <li>Modifica</li>
  <li>Guarda</li>
</ul>

<p>👉 Si otro programa quiere usar esos datos, <strong>debe copiar el archivo o volver a programar todo</strong>.</p>

<hr>

<h5>2️⃣ Base de datos</h5>

<p><strong>Definición clara:</strong></p>

<blockquote>
  Una <strong>base de datos</strong> es una colección <strong>compartida</strong> de datos lógicamente relacionados <strong>y su descripción</strong>, diseñada para satisfacer las necesidades de información de una organización.
</blockquote>

<p><strong>Aquí aparecen cosas nuevas importantes:</strong></p>

<h5>🔹 “Compartida”</h5>

<ul>
  <li>Muchos usuarios y aplicaciones acceden <strong>al mismo tiempo</strong>.</li>
  <li>No es “mi archivo”, es <strong>de toda la organización</strong>.</li>
</ul>

<h5>🔹 “Y su descripción”</h5>

<p>Incluye <strong>metadatos</strong>:</p>

<ul>
  <li>tablas</li>
  <li>tipos de datos</li>
  <li>claves</li>
  <li>relaciones</li>
  <li>restricciones</li>
</ul>

<p>👉 Eso <strong>no existe</strong> en un archivo simple.</p>

<h5>🔹 “Satisfacer necesidades de información”</h5>

<p>Está pensada para:</p>

<ul>
  <li>consultas</li>
  <li>reportes</li>
  <li>análisis</li>
  <li>decisiones</li>
</ul>

    </div>
            <br><br>
            Todas las limitaciones mencionadas anteriormente del enfoque basado en archivos pueden
            atribuirse a dos factores:

            <li> 
            <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="36">
            en los 
            <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="8">
            de aplicación, 
              
            <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="23">
              
            <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="6">
            e 
            <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="18">
            .
            </li>
             
            <li>
             
            <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="26">
              
            <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="35">
              del
            que imponen los 
            <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8">
            de aplicación.
            </li>
             
            Para lograr una mayor eficiencia, se necesitaba un nuevo enfoque. De esta necesidad surgieron 
            la 
            <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="14">
            y el 
            <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="32">
            (
                <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="5">
                 , por sus siglas en inglés).

            En esta sección, proporcionamos una definición más formal de estos términos y examinamos 
            los componentes que podríamos esperar en un entorno de 
            <input type="text"  value="<?php echo $respuesta_55; ?>" size="5" readonly>
             .
            <br><br>
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
            <?php echo $verificar_55 ?> 
            <br><br>
            <strong>Base de datos</strong>
              
            <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="31">
             
             
            <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="21">
                
            <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="11">
            , diseñada para            
            <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="8">
            las necesidades de 
            <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">
            de una organización.
            <br>
            <button type="submit">Enviar</button>
            <?php echo $verificar_54 ?>
            <?php echo $verificar_56 ?>
            <?php echo $verificar_57 ?>
            <?php echo $verificar_58 ?>
            <?php echo $verificar_59 ?>
 
</div>




<div class="seccion derecha">
     <p>
    <input type="text" name="respuesta_60_0" value="<?php echo $respuesta_60_0; ?>" size="56">
     , sino que es un recurso corporativo compartido.
    La base de datos 
    <input type="text" name="respuesta_60_2" value="<?php echo $respuesta_60_2; ?>" size="51">
     , sino también una descripción
    de estos datos. Por esta razón, una base de datos también se define como una 
     
    <input type="text" name="respuesta_60_1" value="<?php echo $respuesta_60_1; ?>" size="23">
    de 
     
    <input type="text" name="respuesta_60_3" value="<?php echo $respuesta_60_3; ?>" size="15">    
    . La descripción de los datos se conoce como el 
    <input type="text" name="respuesta_60_4" value="<?php echo $respuesta_60_4; ?>" size="18">    
    (o 
    <input type="text" name="respuesta_60_5" value="<?php echo $respuesta_60_5; ?>" size="15"> 
    o 
    <input type="text" name="respuesta_60_6" value="<?php echo $respuesta_60_6; ?>" size="10">  
    , es decir, 
    <input type="text" name="respuesta_60_7" value="<?php echo $respuesta_60_7; ?>" size="18">  ”).
    </p>
    <button type="submit">Enviar</button>
    <?php echo $verificar_60_0 ?>
    <?php echo $verificar_60_1 ?>
    <?php echo $verificar_60_2 ?>
    <?php echo $verificar_60_3 ?>
    <?php echo $verificar_60_4 ?>
    <?php echo $verificar_60_5 ?>
    <?php echo $verificar_60_6 ?>
    <?php echo $verificar_60_7 ?>


    <hr>
    <br>
    
    Es la naturaleza 
    <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="15">
    de una base de datos la que proporciona 
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="12">
    entre el 
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="8">
    y los 
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="8">
    . <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_60 ?>
    <?php echo $verificar_61 ?>
    <?php echo $verificar_62 ?>
    <?php echo $verificar_63 ?>
    <br><br><br>
    <p>El enfoque de bases de datos 
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="8">
    la 
    <input type="text" name="respuesta_64_0" value="<?php echo $respuesta_64_0; ?>" size="8">
    de los datos de los 
    <input type="text" name="respuesta_64_1" value="<?php echo $respuesta_64_1; ?>" size="8">
    de 
    <input type="text" name="respuesta_64_2" value="<?php echo $respuesta_64_2; ?>" size="8">
    . </p>
    <br><br><br>

    Un atributo es una 
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8">
    que describe algún aspecto del objeto que deseamos registrar,
    y una relación es una 
    <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="8">
    entre entidades.
    <br><br><br>
    <button type="submit">Enviar</button>
        
    <?php echo $verificar_64 ?>
    <?php echo $verificar_64_0 ?>
    <?php echo $verificar_64_1 ?>
    <?php echo $verificar_64_2 ?>
    <?php echo $verificar_65 ?>
    <?php echo $verificar_66 ?>

    <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Ayuda</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
         <h5>🔷 DDL (Data Definition Language)</h5>
    <p>
        Se usa para <strong>definir o modificar la estructura</strong> de la base de datos
        (tablas, esquemas, restricciones, etc.).
    </p>

    <h5>📌 CREATE</h5>
    <p>Crear una tabla</p>
    <pre><code>
CREATE TABLE Estudiante (
    id_estudiante INT PRIMARY KEY,
    nombre VARCHAR(50),
    edad INT,
    carrera VARCHAR(50)
);
    </code></pre>

    <hr>

    <h5>📌 ALTER</h5>
    <p>Modificar la estructura de una tabla</p>
    <pre><code>
ALTER TABLE Estudiante
ADD email VARCHAR(100);
    </code></pre>

    <hr>

    <h5>📌 DROP</h5>
    <p>Eliminar una tabla completamente</p>
    <pre><code>
DROP TABLE Estudiante;
    </code></pre>

    <hr>

    
    <hr>

    <h5>🔷 DML (Data Manipulation Language)</h5>
    <p>
        Se usa para <strong>manipular los datos</strong> almacenados en las tablas.
    </p>

    <hr>

    <h5>📌 INSERT</h5>
    <p>Insertar registros</p>
    <pre><code>
INSERT INTO Estudiante (id_estudiante, nombre, edad, carrera)
VALUES (1, 'Luis', 20, 'Ingeniería de Sistemas');
    </code></pre>

    <hr>

    <h5>📌 SELECT</h5>
    <p>Consultar datos</p>
    <pre><code>
SELECT nombre, carrera
FROM Estudiante
WHERE edad > 18;
    </code></pre>

    <hr>

    <h5>📌 UPDATE</h5>
    <p>Actualizar registros existentes</p>
    <pre><code>
UPDATE Estudiante
SET edad = 21
WHERE id_estudiante = 1;
    </code></pre>

    <hr>

    <h5>📌 DELETE</h5>
    <p>Eliminar registros</p>
    <pre><code>
DELETE FROM Estudiante
WHERE id_estudiante = 1;
    </code></pre>

    <hr>

    <h5>🔑 Diferencia clave (resumen rápido)</h5>

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>DDL</th>
                <th>DML</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Define la estructura</td>
                <td>Manipula los datos</td>
            </tr>
            <tr>
                <td>CREATE, ALTER, DROP</td>
                <td>INSERT, SELECT, UPDATE, DELETE</td>
            </tr>
            <tr>
                <td>Cambios permanentes</td>
                <td>Cambios sobre registros</td>
            </tr>
            <tr>
                <td>No usa WHERE</td>
                <td>Usa WHERE</td>
            </tr>
        </tbody>
    </table>
    </div>





    <button onmousedown="mostrarMensaje3()" onmouseup="ocultarMensaje3()">Ayuda</button>
    <div id="mensaje3" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">

        <h5>DBMS, DDL y DML</h5>

    <p>
        Un <strong>DBMS (Database Management System)</strong> es el
        <strong>software</strong> que gestiona la base de datos.
        Dentro de él <strong>se soportan varios lenguajes</strong>, entre ellos:
    </p>

    <ul>
        <li><strong>DDL (Data Definition Language)</strong></li>
        <li><strong>DML (Data Manipulation Language)</strong></li>
    </ul>

    <p>Es decir:</p>

    <blockquote>
        <strong>
            El DBMS <em>incluye</em> o <em>soporta</em> DDL y DML,
            pero <u>no se divide</u> en ellos.
        </strong>
    </blockquote>

    <hr>

    <h5>📌 Relación correcta (esquema conceptual)</h5>

    <pre><code>
DBMS
 ├── DDL  → Definición de la estructura
 ├── DML  → Manipulación de los datos
 ├── DCL  → Control de permisos (GRANT, REVOKE)
 └── TCL  → Control de transacciones (COMMIT, ROLLBACK)
    </code></pre>
    </div>
    <hr>
    <br>
        <strong>
            <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="31">
             </strong>
        (<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="4">):    
        <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="44">
        <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="8">,
        <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="8">, 
        <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="8">,
         y 
         <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="8">
         el acceso a la base de datos.
         <br>
         <button type="submit">Enviar</button>
        <?php echo $verificar_67 ?>
        <?php echo $verificar_68 ?>
        <?php echo $verificar_69 ?>
        <?php echo $verificar_70 ?>
        <?php echo $verificar_71 ?>
        <?php echo $verificar_72 ?>
        <?php echo $verificar_73 ?>
         <br>
         Tipicamente un DBMS ofrece las siguientes ventajas: <br><br>
         <li>
          Permite a los usuarios 
          <input type="text" name="respuesta_74_0" value="<?php echo $respuesta_74_0; ?>" size="8"> 
          la base de datos, generalmente a través de un Lenguaje 
         de Definición de Datos (
            <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="8"> 
         ). El 
         <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" disabled size="8">
         permite a los usuarios especificar los tipos de 
         datos y estructuras, así como las restricciones sobre los datos que se almacenarán
          en la base de datos.
         </li>
         <br>
         <button type="submit">Enviar</button>
         <?php echo $verificar_74 ?>
         <?php echo $verificar_74_0 ?>
         <br><br>
        <li>
        Permite a los usuarios insertar, actualizar, eliminar y recuperar datos de la base de datos,
        generalmente a través de un 
        <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>"   size="30">
        (DML). Tener un repositorio 
        central para todos los datos y descripciones de los datos permite que el DML ofrezca una
        instalación general de consultas a estos datos, llamada lenguaje de consultas. La provisión
        de un lenguaje de consultas alivia los problemas de los sistemas basados en archivos, 
        donde el usuario tiene que trabajar con un conjunto fijo de consultas o existe una proliferación 
        de programas, lo que causa problemas importantes de gestión del software.
        El lenguaje de consultas más común es el Lenguaje de Consultas Estructuradas
        (SQL, pronunciado “S-Q-L” o, a veces, “See-Quel”), que ahora es tanto el lenguaje 
        formal como el estándar de facto para los DBMS relacionales. Para enfatizar la importancia
        de SQL, dedicamos los capítulos 6-9 y el Apéndice I a un estudio exhaustivo de este lenguaje.
        </li>
        <br>
        <button type="submit">Enviar</button>
        <?php echo $verificar_75 ?>
        <br><br>
        <li>
    
        <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>"   size="8">
        acceso 
        <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>"   size="8">
        a la base de datos. Por ejemplo, puede proporcionar:
        – Un sistema de 
        <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>"   size="8">
        , que impide el acceso no autorizado a la base de datos;
        – Un sistema de integridad, que mantiene la consistencia de los datos almacenados;
        – Un sistema de control de concurrencia, que permite el acceso compartido a la base de datos;
        – Un sistema de control de recuperación, que restaura la base de datos a un estado consistente 
        previo tras una falla de hardware o software;
        </li>
        <button type="submit">Enviar</button>
        <?php echo $verificar_76 ?>
        <?php echo $verificar_77 ?>
        <?php echo $verificar_78 ?>
        <br><br>
        <strong>Programas de Aplicación</strong>
        Un programa de computadora que 
        <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>"   size="8"> <br>
        con la base de datos emitiendo una solicitud apropiada
        (típicamente una declaración SQL) al DBMS.
        <button type="submit">Enviar</button>
        <?php echo $verificar_79 ?>
        <br><br>
        <hr>
        <strong>View</strong>
        Un mecanismo de vista permite a cada usuario tener su propia vista de la base de datos
         (una vista es, en esencia, un 
         <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>"   size="8">
         de la base de datos).
         <br>
         <button type="submit">Enviar</button>
         <?php echo $verificar_80 ?>
         <br><br>
         <hr>
         <strong>1.3.4 Componentes del entorno DBMS</strong>
        Podemos identificar cinco componentes principales en el entorno DBMS: 
        <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>"   size="8">
        , 
        <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>"   size="8">
        , 
        <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>"   size="8">
        , 
        <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>"   size="14">
        y 
        <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>"   size="8">
        <br><br><br>
        <button type="submit">Enviar</button>
        <?php echo $verificar_81 ?>
        <?php echo $verificar_82 ?>
        <?php echo $verificar_83 ?>
        <?php echo $verificar_84 ?>
        <?php echo $verificar_85 ?>
        <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
     <!-- #endregion -->
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
