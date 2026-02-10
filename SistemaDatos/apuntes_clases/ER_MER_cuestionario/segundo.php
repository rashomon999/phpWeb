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
 
 
        
     $respuesta_1 = 'conceptual';
    $respuesta_2 = 'datos';
    $respuesta_3 = 'describir';
    $respuesta_4 = 'restricciones';
    $respuesta_5 = 'diseño logico';
    $respuesta_6 = 'Entidad';
    $respuesta_7 = 'Atributo';
    $respuesta_8 = 'Identificador';
    $respuesta_9 = 'Relacion';
    $respuesta_10 = 'Cardinalidad';
    $respuesta_11 = 'Participacion';

    $respuesta_12 = 'rectangulos';
    $respuesta_13 = 'ovalos';
    $respuesta_14 = 'rombos';
    $respuesta_15 = 'estructuras';
    $respuesta_16 = 'entidades simples';
    $respuesta_17 = 'entidad';
    $respuesta_18 = 'atributos';
    $respuesta_19 = 'columnas';
    $respuesta_20 = 'identificadores';
    $respuesta_21 = 'claves primarias';
    $respuesta_22 = 'relaciones';

    $respuesta_23 = 'claves foraneas';
    $respuesta_24 = 'arco';
    $respuesta_25 = 'exclusividad';
    $respuesta_26 = 'asociaciones';
    $respuesta_27 = 'supertipo/subtipo';
    $respuesta_28 = 'jerarquias';
    $respuesta_29 = 'generalizacion';
    $respuesta_30 = 'especializacion';
    $respuesta_31 = 'Clave Foranea';
    $respuesta_32 = 'identificador unico';
    $respuesta_33 = 'clave primaria';

    $respuesta_34 = 'cardinalidad uno';
    $respuesta_35 = 'identificador';
    $respuesta_36 = 'Clave Foranea';
    $respuesta_37 = 'cardinalidad muchos';
    $respuesta_38 = 'clave foranea';
    $respuesta_39 = 'llega';
    $respuesta_40 = 'muchos';
    $respuesta_41 = 'obligatoria';
    $respuesta_42 = 'valida';
    $respuesta_43 = 'puede';
    $respuesta_44 = 'relacion';
    $respuesta_45 = 'Clave Foranea';
    $respuesta_46 = 'muchos';
    $respuesta_47 = 'muchos cursos';
    $respuesta_48 = 'cada curso';
    $respuesta_49 = 'un solo profesor';
    $respuesta_50 = 'recibe muchos';

    $respuesta_51 = 'CURSO';
    $respuesta_52 = 'referencia';
    $respuesta_53 = 'profesor';
    
    $respuesta_54 = 'simples';
    $respuesta_55 = 'supertipo';
    $respuesta_56 = 'subtipos';
    $respuesta_57 = 'exclusiva';
    $respuesta_58 = 'arco';
    $respuesta_59 = 'Nombre';
    $respuesta_60 = 'plural';
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto"; 
    }

    } else {
 $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'conceptual') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'datos') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'describir') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'restricciones') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'diseño logico') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'Entidad') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'Atributo') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'Identificador') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'Relacion') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'Cardinalidad') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'Participacion') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'rectangulos') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'ovalos') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'rombos') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'estructuras') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'entidades simples') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'entidad') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'atributos') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'columnas') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'identificadores') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'claves primarias') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'relaciones') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'claves foraneas') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'arco') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'exclusividad') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'asociaciones') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'supertipo/subtipo') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'jerarquias') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'generalizacion') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'especializacion') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'Clave Foranea') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'identificador unico') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'clave primaria') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'cardinalidad uno') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'identificador') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'Clave Foranea') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'cardinalidad muchos') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'clave foranea') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'llega') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'muchos') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'obligatoria') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'valida') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'puede') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'relacion') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'Clave Foranea'
    || $respuesta_45 === 'clave foranea'
    ) { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'muchos') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'muchos cursos') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'cada curso') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'un solo profesor') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'recibe muchos') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'CURSO') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'referencia') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'profesor') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'simples') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

$respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'supertipo') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}

$respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'subtipos') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

$respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'exclusiva') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

$respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'arco') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

$respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'Nombre') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

$respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'plural') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

$respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === '61') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

$respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === '62') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

$respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === '63') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

$respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === '64') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

$respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === '65') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
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
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 400vh;
    }

  .title {
    text-align: center;
    font-size: 32px;
    font-weight: bold;
    color: #1f4fbf;
    margin: 20px 0;
  }

  .desc {
    text-align: center;
    max-width: 900px;
    margin: auto;
    color: #1f4fbf;
    font-size: 16px;
  }

  svg {
    display: block;
    margin: 30px auto;
  }

  .table {
    fill: #fff7a8;
    stroke: #0033cc;
    stroke-width: 2;
    rx: 8;
  }

  .header {
    fill: #0033cc;
  }

  .header-text {
    fill: white;
    font-weight: bold;
    font-size: 14px;
  }

  .cell-text {
    fill: #006600;
    font-size: 13px;
  }

  .pk {
    fill: red;
    font-weight: bold;
  }

  .fk {
    fill: blue;
    font-weight: bold;
  }

  .relation {
    stroke: black;
    stroke-width: 2;
    marker-end: url(#arrow);
  }

  .relation-dashed {
    stroke-dasharray: 6;
  }

  .note {
    fill: #1f4fbf;
    font-size: 14px;
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
    var f = document.getElementById('respuesta_1').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_2').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_3').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    var f = document.getElementById('respuesta_4').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula4').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_5').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula6() {
    var f = document.getElementById('respuesta_6').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula6').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula7() {
    var f = document.getElementById('respuesta_7').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula7').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_8').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula8').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula9() {
    var f = document.getElementById('respuesta_9').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula10() {
    var f = document.getElementById('respuesta_10').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula10').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula11() {
    var f = document.getElementById('respuesta_11').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula12() {
    var f = document.getElementById('respuesta_12').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula12').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula13() {
    var f = document.getElementById('respuesta_13').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula13').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula14() {
    var f = document.getElementById('respuesta_14').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula14').innerHTML = `$$ ${formula} $$`;
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
    
</head>
<body>  

<form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 

    <h5>Modelo Entidad–Relación (MER)</h5>

    <p>
    El <strong>Modelo Entidad–Relación (MER)</strong> es un modelo 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">
    de 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">
    utilizado para 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">
    la estructura lógica de una base de datos
    antes de su implementación en un sistema gestor.
    </p>

<p>
Este modelo permite representar de forma gráfica:
</p>

<ul>
    <li>Las <strong>entidades</strong> del sistema</li>
    <li>Los <strong>atributos</strong> que describen a cada entidad</li>
    <li>Las <strong>relaciones</strong> (asociaciones) entre entidades</li>
    <li>Las <strong>
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">    
    </strong> como cardinalidad y participación</li>
</ul>

    <p>
    El MER es independiente del modelo relacional y sirve como
    <strong>etapa previa</strong> al 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="11">
    de la base de datos.
    </p>

    <hr>

    <h5>Elementos del Modelo Entidad-Relación</h5>

    <ul>
    <li>
        <strong>
        <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">    
         :</strong>
        representa un objeto o concepto del mundo real sobre el cual
        se desea almacenar información (por ejemplo: PERSONA, CURSO, PROFESOR).
    </li>

    <li>
        <strong>
        <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">    
         :</strong>
        es una propiedad que describe a una entidad.
        Cada atributo toma valores de un dominio definido.
    </li>

    <li>
        <strong>
        <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">    
         :</strong>
        es un atributo o conjunto de atributos que identifica
        de manera única a cada ocurrencia de una entidad.
    </li>

    <li>
        <strong>
        <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="8">    
          (Asociación):</strong>
        representa la interacción o vínculo entre dos o más entidades.
    </li>

    <li>
        <strong>
        <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">    
         :</strong>
        indica cuántas ocurrencias de una entidad pueden asociarse
        con ocurrencias de otra entidad (1:1, 1:N, N:M).
    </li>

    <li>
        <strong>
        <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">    
         :</strong>
        indica si la participación de una entidad en una relación
        es obligatoria (total) u opcional (parcial).
    </li>
    </ul>
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

    <h5>Representación Visual del MER</h5>

    <p>
    En el Modelo Entidad–Relación, los elementos se representan gráficamente de la siguiente manera:
    </p>

    <ul>
    <li>
        Las <strong>entidades</strong> se representan mediante <strong>
        <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">    
         </strong>.
    </li>
    <li>
        Los <strong>atributos</strong> se representan mediante <strong>
        <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">    
         </strong>.
    </li>
    <li>
        Las <strong>relaciones</strong> se representan mediante <strong>
        <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">    
         </strong>.
    </li>
    <li>
        Las <strong>claves</strong> suelen subrayarse o marcarse como identificadores.
    </li>
    </ul>
 
    <button type="submit">Enviar</button> 
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    <hr>

    <h5>Relación entre MER y Modelo Relacional</h5>

    <p>
    El <strong>Modelo Relacional (MR)</strong> no se diseña directamente.
    Primero se construye un MER y posteriormente se realiza la
    <strong>transformación del MER al MR</strong>, obteniendo tablas,
    claves primarias y claves foráneas.
    </p>


    <hr>
    <h5>Transformación del Modelo Entidad–Relación (MER) al Modelo Relacional (MR)</h5>

    <p>
    La transformación del <strong>Modelo Entidad–Relación (MER)</strong> al
    <strong>Modelo Relacional (MR)</strong> consiste en convertir los elementos
    conceptuales del MER en 
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">
      formales del modelo relacional
    (tablas, columnas y claves).
    </p>

    <h5>Pasos Generales de la Transformación</h5>

    <ul>
    <li>
        <strong>Convertir las 
        <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="14">    
          en relaciones (tablas):</strong>
        cada 
        <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">
          del MER se transforma en una tabla del modelo relacional.
    </li>

    <li>
        <strong>Convertir los 
        <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">    
          en 
        <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">
         :</strong>
        los 
        <input type="text"  value="<?php echo $respuesta_18; ?>" size="8" readonly>
          de cada entidad se convierten en 
          <input type="text"  value="<?php echo $respuesta_19; ?>" size="8">
        (
        <input type="text"  value="<?php echo $respuesta_18; ?>" size="8" readonly>    
         ) de la tabla correspondiente.
    </li>

    <li>
        <strong>Convertir los 
        <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="12">    
          únicos en 
        <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="12">
         </strong>
    </li>

    <li>
        <strong>Convertir las 
        <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="8">    
          (asociaciones) en 
        <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="12">
         </strong>
    </li>

    <li>
        <strong>Escoger opciones de 
        <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="8">    
         :</strong>
        se define cómo se implementan las relaciones con restricciones
        de 
        <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">
          entre 
        <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8">
         .
    </li>

    <li>
        <strong>Escoger opciones para relaciones 
        <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="14">    
         :</strong>
        se selecciona la estrategia de transformación para 
        <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="8">
         
        de 
        <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="10">
         /
        <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="10">
         .
    </li>
    </ul>
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
    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>
    <?php echo $verificar_26 ?>
    <?php echo $verificar_27 ?>
    <?php echo $verificar_28 ?>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
    <hr>

</div>




<div class="seccion derecha">
   
 
    <h5> Convertir las entidades en relaciones (tablas)</h5>
    <li>Las entidades 
    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="8">    
      que no son 
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="8">    
      /
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="8">
     , 
    que no participan de una relación 
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="8">
      (
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="8">    
     ) en el MER, se transforman en relaciones.
    </li>
    <li>
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">    
      de la relación igual al de la entidad en el diagrama E/R, se ACOSTUMBRA que sea en 
    <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="8">    
     .</li>
 <hr>
<h5>Conversión de Relaciones (Asociaciones) en Claves Foráneas</h5>

<p>
Para transformar una relación del MER al MR se deben seguir las siguientes reglas:
</p>

<ul>
    <li>
        Se debe <strong>asignar un nombre de columna</strong> para la
        <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="11">
          en la tabla correspondiente.
    </li>
    </ul>
 
 
    <hr>

    <h5>Regla: Relaciones Uno a Muchos (1 : N)</h5>

    <p>
    En una relación de tipo <strong>uno a muchos (1 : N)</strong>:
    </p>

    <ul>
    <li>
        Se toma el <strong>
        <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="15">    
         </strong> (
        <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="11">    
         )
        de la entidad con 
        <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="12">
         .
    </li>

    <li>
        Dicho 
        <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
          se incorpora como 
        <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="10">
        en la entidad con 
        <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="16">
         .
    </li>

    <li>
        Es decir, la 
        <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="11">
          se coloca en la entidad
        a la que <strong>“le 
        <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="8">    
         ” la cardinalidad
        <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="8">
         </strong>.
    </li>
    </ul>

<p>
De esta forma se mantiene la correspondencia entre las tuplas
y se preserva la integridad referencial.
</p>


    <button type="submit">Enviar</button>
    <?php echo $verificar_54 ?>
    <?php echo $verificar_55 ?>
    <?php echo $verificar_56 ?>
    <?php echo $verificar_57 ?>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <?php echo $verificar_60 ?>
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
<hr>

<h5>Restricción de Obligación en la Clave Foránea</h5>

<p>
Si la relación es 
<input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8">
 en el lado de la entidad
que posee la clave foránea, entonces:
</p>

<ul>
    <li>
        La <strong>Clave Foránea debe ser NN (Not Null)</strong>.
    </li>
</ul>

<p>
Esto significa que toda tupla de la entidad con cardinalidad muchos
<strong>debe estar asociada</strong> a una tupla 
<input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="8">
  de la entidad
con cardinalidad uno.
</p>


    <button type="submit">Enviar</button>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>

<hr>
<img src="../../../img/guia_311.png" alt="" width="700"> 

<h5>Relación Uno a Muchos (1 : N)</h5>

<p>
Esto corresponde a una <strong>relación uno a muchos (1 : N)</strong>,
donde una ocurrencia de una entidad 
<input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="8">
  estar asociada con
múltiples ocurrencias de otra entidad.
</p>

<h5>Regla Clave de las Relaciones Uno a Muchos</h5>

<p>
En una 
<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8">
  <strong>1 : N</strong>, la 
  <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="9">
    </strong>
<strong>siempre se coloca en el lado “
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="5">    
 ”</strong>.
</p>

<h5>Justificación de la Regla</h5>

<p>
Esta regla se aplica porque:
</p>

<ul>
    <li>
        Un <strong>profesor</strong> puede dictar <strong>
        <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="11">    
         </strong>.
    </li>
    <li>
        Pero 
        <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="8">
          pertenece a <strong>  
          <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="13">  
           </strong>.
    </li>
</ul>

<p>
Por lo tanto, la entidad que <strong>“
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="11">    
 ”</strong> es
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8"> 
  , y es esta entidad la que necesita almacenar
la 
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="8">
  al 
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="8">
  que la dicta.
</p>


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
    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Ayuda</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
 <h5>Columna que se Agrega en la Transformación</h5>

<p>
La regla establece que:
</p>

<p>
<em>
Se toma el identificador único de la entidad con cardinalidad uno
y se incorpora en la entidad con cardinalidad muchos.
</em>
</p>

<ul>
    <li>
        <strong>Entidad con cardinalidad uno:</strong> PROFESOR
    </li>
    <li>
        <strong>Identificador único:</strong> identificación
    </li>
</ul>

<p>
En consecuencia, en la tabla <strong>CURSO</strong> se debe agregar
una columna que referencie dicho identificador.
</p>

<h5>Definición de la Clave Foránea</h5>

<p>
La columna agregada es:
</p>

<pre>
IDPROF   ← Clave Foránea (CF)
</pre>

<p>
Por esta razón, en la tabla <strong>CURSOS</strong> aparece la siguiente
definición:
</p>

<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th>Columna</th>
        <th>Tipo</th>
    </tr>
    <tr>
        <td>IDPROF</td>
        <td>FK</td>
    </tr>
</table>

<h5>Referencia de la Clave Foránea</h5>

<p>
La clave foránea <strong>IDPROF</strong> establece la siguiente referencia:
</p>

<ul>
    <li>
        <strong>Tabla referenciada:</strong> PROFESOR
    </li>
    <li>
        <strong>Columna referenciada:</strong> identificación
    </li>
</ul>
<hr>

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
        href="tercero.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
