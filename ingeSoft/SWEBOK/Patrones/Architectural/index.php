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
 
           $respuesta_1  = 'paquete';
    $respuesta_2  = 'decisiones';
    $respuesta_3  = 'diseño';
    $respuesta_4  = 'repetidamente';
    $respuesta_5  = 'practica';
    $respuesta_6  = 'propiedades';
    $respuesta_7  = 'reutilizacion';
    $respuesta_8  = 'describe';
    $respuesta_9  = 'clase';
    $respuesta_10 = 'tacticas';
    $respuesta_11 = 'simples';
    $respuesta_12 = 'tacticas';
    $respuesta_13 = 'unica';
    $respuesta_14 = 'mecanismo';
    $respuesta_15 = 'destinadas';
    $respuesta_16 = 'control';
    $respuesta_17 = 'preciso';
    $respuesta_18 = 'decisiones';
    $respuesta_19 = 'patrones';
    $respuesta_20 = 'combinan';
    $respuesta_21 = 'decisiones';
    $respuesta_22 = 'solo paquete';
    $respuesta_23 = 'bloques de construccion';
    $respuesta_24 = 'patrones arquitectonicos';
    $respuesta_25 = 'atomos';
    $respuesta_26 = 'moleculas';
    $respuesta_27 = 'tacticas diferentes';
    $respuesta_28 = 'encapsulan tacticas';
    $respuesta_29 = 'Un contexto';
    $respuesta_30 = 'Un problema';
    $respuesta_31 = 'Una solucion';
    $respuesta_32 = 'responsabilidades';
    $respuesta_33 = 'relaciones estaticas';
    $respuesta_34 = 'comportamiento';
    $respuesta_35 = 'tiempo de ejecucion';
    $respuesta_36 = 'interaccion';
    $respuesta_37 = 'Un conjunto de tipos de elementos';
    $respuesta_38 = 'Un conjunto de mecanismos de interaccion o conectores ';
    $respuesta_39 = 'Una disposicion topologica de los componentes';
    $respuesta_40 = 'Un conjunto de restricciones semanticas que cubren la topologia';
    $respuesta_41 = 'el comportamiento de los elementos y los mecanismos de interaccion';
    $respuesta_42 = 'atributos de calidad';
    $respuesta_43 = 'proporcionados';
    $respuesta_44 = 'configuraciones estaticas y dinamicas de los elementos';
    $respuesta_45 = 'tipo dominante de elementos que muestran';
    $respuesta_46 = 'Todos los sistemas complejos experimentan';
    $respuesta_47 = 'necesidad';
    $respuesta_48 = 'desarrollar';
    $respuesta_49 = 'evolucionar porciones';
    $respuesta_50 = 'sistema';
    $respuesta_51 = 'manera independiente';
    $respuesta_52 = 'los desarrolladores';
    $respuesta_53 = 'necesitan';
    $respuesta_54 = 'separacion clara';
    $respuesta_55 = 'de modo que los modulos';
    $respuesta_56 = 'sistema';
    $respuesta_57 = 'desarrollarse y mantenerse de forma independiente';
    $respuesta_58 = 'segmentarse';
    $respuesta_59 = 'manera';
    $respuesta_60 = 'modulos';
    $respuesta_61 = 'desarrollarse';
    $respuesta_62 = 'evolucionar';
    $respuesta_63 = 'separado';
    $respuesta_64 = 'poca interaccion';
    $respuesta_65 = 'partes';
    $respuesta_66 = 'portabilidad';
    $respuesta_67 = 'modificabilidad';
    $respuesta_68 = 'reutilizacion';
    $respuesta_69 = 'lograr';
    $respuesta_70 = 'separacion';
    $respuesta_71 = 'responsabilidades';
    $respuesta_72 = 'patron de capas divide el software';
    $respuesta_73 = 'unidades llamadas capas';
    $respuesta_74 = '171';
    $respuesta_75 = 'agrupamiento de modulos';
    $respuesta_76 = 'conjunto cohesivo de servicios';
    $respuesta_77 = 'uso permitido';
    $respuesta_78 = 'unidireccionales';
    $respuesta_79 = 'El patron de capas define capas';
    $respuesta_80 = 'agrupaciones de modulos que ofrecen un conjunto cohesivo de servicios';
    $respuesta_81 = 'y una relacion unidireccional de';
    $respuesta_82 = 'uso permitido';
    $respuesta_83 = 'tipo de modulo';
    $respuesta_84 = 'descripcion';
    $respuesta_85 = 'definir';
    $respuesta_86 = 'modulos contiene la capa';
    $respuesta_87 = 'una caracterizacion';
    $respuesta_88 = 'conjunto cohesivo de servicios que proporciona';
    $respuesta_89 = 'Uso permitido';
    $respuesta_90 = 'que es una especializacion de una relación mas generica de dependencia';
    $respuesta_91 = 'El diseño debe definir cuales son las reglas de uso entre capas';
    $respuesta_92 = 'Cada pieza de software se asigna exactamente a una capa';
    $respuesta_93 = 'Existen al menos dos capas';
    $respuesta_94 = 'Las relaciones de';
    $respuesta_95 = 'uso permitido';
    $respuesta_96 = 'no deben ser circulares';
    $respuesta_97 = 'La adicion de capas incrementa el costo inicial y la complejidad del sistema';
    $respuesta_98 = 'Las capas contribuyen a una penalizacion de rendimiento';
    $respuesta_99 = 'bien documentada de responsabilidades';   
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'paquete') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'decisiones') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'diseño') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'repetidamente') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'practica') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'propiedades') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'reutilizacion') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'describe') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'clase') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'tacticas') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'simples') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'tacticas') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'unica') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'mecanismo') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'destinadas') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'control') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'preciso') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'decisiones') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'patrones') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'combinan') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'decisiones') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'solo paquete') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'bloques de construccion') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'patrones arquitectonicos') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'atomos') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'moleculas') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'tacticas diferentes') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'encapsulan tacticas') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'Un contexto') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'Un problema') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'Una solucion') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'responsabilidades') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'relaciones estaticas') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'comportamiento') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'tiempo de ejecucion') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'interaccion') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'Un conjunto de tipos de elementos') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'Un conjunto de mecanismos de interaccion o conectores ') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'Una disposicion topologica de los componentes') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'Un conjunto de restricciones semanticas que cubren la topologia') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'el comportamiento de los elementos y los mecanismos de interaccion') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'atributos de calidad') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'proporcionados') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'configuraciones estaticas y dinamicas de los elementos') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'tipo dominante de elementos que muestran') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'Todos los sistemas complejos experimentan') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'necesidad') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'desarrollar') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'evolucionar porciones') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'sistema') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'manera independiente') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'los desarrolladores') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'necesitan') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'separacion clara') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'de modo que los modulos') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'sistema') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'desarrollarse y mantenerse de forma independiente') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'segmentarse') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'manera') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'modulos') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'desarrollarse') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'evolucionar') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'separado') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'poca interaccion') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'partes') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'portabilidad') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'modificabilidad') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'reutilizacion') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'lograr') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'separacion') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'responsabilidades') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'patron de capas divide el software') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'unidades llamadas capas') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === '171') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'agrupamiento de modulos') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'conjunto cohesivo de servicios') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'uso permitido') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'unidireccionales') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'El patron de capas define capas') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'agrupaciones de modulos que ofrecen un conjunto cohesivo de servicios') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'y una relacion unidireccional de') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'uso permitido') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'tipo de modulo') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'descripcion') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'definir') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'modulos contiene la capa') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'una caracterizacion') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'conjunto cohesivo de servicios que proporciona') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'Uso permitido') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'que es una especializacion de una relación mas generica de dependencia') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'El diseño debe definir cuales son las reglas de uso entre capas') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'Cada pieza de software se asigna exactamente a una capa') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'Existen al menos dos capas') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'Las relaciones de') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'uso permitido') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'no deben ser circulares') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'La adicion de capas incrementa el costo inicial y la complejidad del sistema') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'Las capas contribuyen a una penalizacion de rendimiento') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'bien documentada de responsabilidades') { 
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

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === '24') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === '36') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === '48') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === '60') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === '72') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === '84') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === '96') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === '108') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === '120') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === '132') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === '144') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
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
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 300vh;
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

<form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
 <h2>13. Tácticas y Patrones Arquitectónicos</h2>

<p>
<em>
“No he fracasado. Solo he encontrado 10.000 maneras que no funcionan.”
</em>
</p>

<p>
—Thomas Edison
</p>

<p>
Existen muchas maneras de diseñar mal, y solo unas pocas maneras de hacerlo bien. 
Debido a que el éxito en el diseño arquitectónico es complejo y desafiante, los diseñadores 
han buscado formas de capturar y reutilizar el conocimiento arquitectónico obtenido con esfuerzo. 
Los patrones y tácticas arquitectónicas son formas de capturar estructuras de buen diseño 
ya comprobadas, para que puedan reutilizarse.
</p>

<p>
Los patrones arquitectónicos han recibido un interés y atención crecientes, tanto de profesionales 
como de teóricos del software, durante los últimos 15 años o más. Un patrón arquitectónico:
</p>

<ul>
    <li>
        es un 
        <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">
          de 
        <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">
          de 
        <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">
          que se encuentra 
        <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">
          en la 
          <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
           ,
    </li>

    <li>
        posee 
        <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">
          conocidas que permiten su 
        <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">
         , y
    </li>

    <li>
        <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">
          una 
        <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="8">
          de arquitecturas.
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

<hr>
<p>
Debido a que los patrones se encuentran (por definición) en la práctica, no se inventan; 
se descubren. Catalogar patrones es similar al trabajo de un botánico o zoólogo linneano: 
“descubrir” patrones y describir sus características compartidas.
</p>

<p>
Y, al igual que el botánico, zoólogo o ecólogo, quien cataloga patrones intenta comprender 
cómo esas características conducen a distintos comportamientos y diferentes respuestas frente 
a condiciones ambientales.
</p>

<p>
Por esta razón, nunca existirá una lista completa de patrones: los patrones emergen 
espontáneamente como reacción a condiciones del entorno, y mientras dichas condiciones cambien, 
seguirán apareciendo nuevos patrones.
</p>

<p>
El diseño arquitectónico rara vez comienza desde primeros principios. Los arquitectos con 
experiencia suelen considerar la creación de una arquitectura como un proceso de selección, 
adaptación y combinación de patrones.
</p>

<p>
El arquitecto de software debe decidir cómo instanciar un patrón; es decir, cómo hacerlo 
encajar con el contexto específico y las restricciones del problema.
</p>

<p>
En los Capítulos 5–11 hemos visto una variedad de 
<input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">
  arquitectónicas. Estas son más 
<input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">
  que los patrones. Las 
<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">
  normalmente utilizan una 
<input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">
  estructura o 
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">
  computacional y están 
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">
  a abordar una sola fuerza arquitectónica.
</p>

<p>
Por esta razón, proporcionan un 
<input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="8">
  más 
<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">
  al arquitecto al tomar 
<input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">
  de diseño que los 
<input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">
 , los cuales normalmente 
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="8">
  múltiples 
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="8">
  de diseño en un 
<input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="14">
 .
</p>

<p>
Las tácticas son los “
<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="14">
 ” del diseño, a partir de los cuales se crean 
los 
<input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="14">
 . Las tácticas son 
<input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="14">
  y los patrones son 
<input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="14">
 .
</p>

<p>
La mayoría de los patrones consisten en (o se construyen a partir de) varias 
<input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="14">
 . 
Por esta razón decimos que los patrones 
<input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="14">
 .
</p>

<button type="submit">Enviar</button>
<?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?> 
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
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
    <hr>
<p>
En este capítulo realizaremos un breve recorrido por el universo de los patrones, abordando algunos 
de los patrones más importantes y comúnmente utilizados en arquitectura. Luego examinaremos las 
relaciones entre patrones y tácticas, mostrando cómo un patrón se construye a partir de tácticas 
y cómo las tácticas pueden utilizarse para adaptar patrones cuando el patrón que se encuentra en 
un libro o sitio web no satisface completamente las necesidades de diseño.
</p>


<h2>13.1. Patrones Arquitectónicos</h2>

<p>
Un patrón arquitectónico establece una relación entre:
</p>

<ul>
    <li>
        <strong>
        <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="14">    
         .</strong> 
        Una situación recurrente y común en el mundo que da origen a un problema.
    </li>

    <li>
        <strong>
        <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="14">    
         .</strong> 
        El problema, apropiadamente generalizado, que surge en el contexto dado. 
        La descripción del patrón presenta el problema y sus variantes, y describe 
        cualquier fuerza complementaria u opuesta. La descripción del problema 
        suele incluir atributos de calidad que deben satisfacerse.
    </li>

    <li>
        <strong>
        <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="14">    
         .</strong> 
        Una resolución arquitectónica exitosa del problema, apropiadamente abstraída. 
        La solución describe las estructuras arquitectónicas que resuelven el problema, 
        incluyendo cómo equilibrar las múltiples fuerzas involucradas.
    </li>
</ul>

<button type="submit">Enviar</button>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
    <?php echo $verificar_31 ?>
    <hr>

<p>
La solución describirá las 
<input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="14"> 
  y 
<input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="14"> 
  entre los elementos 
(utilizando una estructura de módulos), o describirá el 
<input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="14"> 
  en 
<input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="14"> 
y la 
<input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="14"> 
  entre los elementos (definiendo una estructura de componentes y conectores 
o una estructura de asignación).
</p>

<button type="submit">Enviar</button>
<?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>
    <?php echo $verificar_36 ?>
    <hr>
<p>
La solución de un patrón se determina y describe mediante:
</p>

<ul>
    <li>
        <input type="text" name="respuesta_37" value="<?php echo $respuesta_36; ?>" size="31">
        (por ejemplo, repositorios de datos, procesos y objetos)
    </li>

    <li>
        <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="44">
        (por ejemplo, llamadas a métodos, eventos o bus de mensajes)
    </li>

    <li>
        <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="31">
         
    </li>

    <li>
        <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="51">
         , 
        <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="61">
         
    </li>
</ul>

<p>
La descripción de la solución también debe dejar claro qué 
<input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="14"> 
son 
<input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="14">
  por las 
<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="61">
 .
</p>

<p>
Esta forma {contexto, problema, solución} constituye una plantilla para documentar un patrón.
</p>

<p>
Los sistemas complejos exhiben múltiples patrones al mismo tiempo. Un sistema basado 
en la web podría emplear un patrón arquitectónico cliente-servidor de tres capas, 
pero dentro de este patrón también podría utilizar replicación (<em>mirroring</em>), 
proxies, cachés, firewalls, MVC, etc., cada uno de los cuales puede emplear más patrones 
y tácticas.
</p>

<p>
Y todas estas partes del patrón cliente-servidor probablemente empleen capas 
(<em>layering</em>) para estructurar internamente sus módulos de software.
</p>


    <button type="submit">Enviar</button>
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <?php echo $verificar_39 ?>
    <?php echo $verificar_40 ?>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
    <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>  
<hr>
<h2>13.2. Visión General del Catálogo de Patrones</h2>

<p>
En esta sección presentamos una selección de patrones útiles y ampliamente utilizados. 
Este catálogo no pretende ser exhaustivo; de hecho, ningún catálogo de este tipo es posible. 
Más bien, pretende ser representativo.
</p>

<p>
Mostramos patrones de elementos en tiempo de ejecución (como <em>broker</em> o 
<em>client-server</em>) y de elementos de tiempo de diseño (como capas 
(<em>layers</em>)).
</p>

<p>
Para cada patrón listamos el contexto, el problema y la solución. Como parte de la solución, 
describimos brevemente los elementos, relaciones y restricciones de cada patrón.
</p>

<p>
Aplicar un patrón no es una proposición de “todo o nada”. Las definiciones de patrones dadas 
en los catálogos son estrictas, pero en la práctica los arquitectos pueden decidir violarlas 
de pequeñas maneras cuando existe un buen compromiso de diseño.
</p>

<p>
Esto implica sacrificar un poco de aquello que cuesta la violación, pero obteniendo algo valioso 
gracias a la desviación.
</p>

<p>
Por ejemplo, el patrón de capas prohíbe expresamente que el software de las capas inferiores 
utilice software de capas superiores. Sin embargo, puede haber casos —como mejorar el rendimiento— 
en los que una arquitectura permita algunas excepciones específicas.
</p>

<p>
Los patrones pueden categorizarse según el 
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="41">
 :
</p>

<ul>
    <li>
        Los <strong>patrones de módulos</strong> muestran módulos.
    </li>

    <li>
        Los <strong>patrones de componentes y conectores (C&amp;C)</strong> muestran 
        componentes y conectores.
    </li>

    <li>
        Los <strong>patrones de asignación</strong> muestran una combinación de elementos 
        de software (módulos, componentes y conectores) y elementos no relacionados con software.
    </li>
</ul>

<p>
La mayoría de los patrones publicados son patrones de componentes y conectores (C&amp;C), 
pero también existen patrones de módulos y patrones de asignación.
</p>

<p>
Comenzaremos con el “abuelo” de los patrones de módulos: el patrón de capas 
(<em>layered pattern</em>).
</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_45 ?>
    <hr>
</div>




<div class="seccion derecha">
 
  



     <h2>Patrones de Módulos</h2>

<h3>Patrón de Capas (<em>Layered Pattern</em>)</h3>

<p>
<strong>Contexto:</strong> 
 
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="41">
  la 
<input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="8">
  de 
<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="8">
  y 
<input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="21">
  del 
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="8">
  de   
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="17">
 . Por esta razón, 
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="14">
  del sistema 
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="11">
  una 
<input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="11">
  y 
  <input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="35">
   ,
<input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="22"> 
  del 
  <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="8"> 
    puedan 
  <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="45"> 
   .
</p>

<p>
<strong>Problema:</strong> 
El software necesita 
<input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="8">
  de tal 
<input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">
  que los 
<input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="8">
  puedan 
<input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="8">
  
y 
<input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="8">
  por 
<input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="8">
 , con 
<input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="8">
  entre las 
<input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8">
 , apoyando la 
<input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="8">
 , 
<input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="8">
  y 
<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="8">
 .
</p>

<p>
<strong>Solución:</strong> 
Para 
<input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="8">
  esta 
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="8">
  de 
<input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="8">
 , el 
<input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="31">
  
en 
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="21">
  (<em>layers</em>). 
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="8">
Cada capa es un 
<input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="21">
  que ofrece un 
<input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="8">
 .
</p>

<p>
Existen restricciones sobre la relación de “
<input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="8">
 ” entre las capas: 
las relaciones deben ser 
<input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="8">
 .
</p>

<button type="submit">Enviar</button>
<?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <?php echo $verificar_51 ?>
    <?php echo $verificar_52 ?>
    <?php echo $verificar_53 ?>
    <?php echo $verificar_54 ?>
    <?php echo $verificar_99 ?>

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
    <?php echo $verificar_65 ?>
    <?php echo $verificar_66 ?>

    <?php echo $verificar_67 ?>
<?php echo $verificar_68 ?>
<?php echo $verificar_69 ?>
<?php echo $verificar_70 ?>
<?php echo $verificar_71 ?>
<?php echo $verificar_72 ?>
<?php echo $verificar_73 ?>
<?php echo $verificar_74 ?>
<?php echo $verificar_75 ?>
<?php echo $verificar_76 ?>
<?php echo $verificar_77 ?>
<?php echo $verificar_78 ?>
<hr>
<p>
Las capas particionan completamente un conjunto de software y cada partición se expone 
a través de una interfaz pública. Las capas se crean para interactuar según una relación 
de orden estricta.
</p>

<p>
Si (A,B) pertenece a esta relación, decimos que la implementación de la capa A puede usar 
cualquiera de las facilidades públicas proporcionadas por la capa B.
</p>

<p>
En algunos casos, puede requerirse que módulos de una capa utilicen directamente módulos 
de una capa inferior no adyacente; normalmente solo se permiten usos hacia la capa 
inmediatamente inferior.
</p>

<p>
Este caso, donde software de una capa superior utiliza módulos de una capa inferior 
no adyacente, se denomina <strong>layer bridging</strong>.
</p>

<p>
Si ocurren muchas instancias de <em>layer bridging</em>, el sistema podría no cumplir 
sus objetivos de portabilidad y modificabilidad que el modelo de capas estrictas ayuda 
a alcanzar.
</p>

<p>
En este patrón no se permiten usos ascendentes (<em>upward usages</em>).
</p>

<p>
Por supuesto, nada de esto es gratuito. Alguien debe diseñar y construir las capas, 
lo que a menudo puede añadir costos iniciales y complejidad al sistema.
</p>

<p>
Además, si el esquema de capas no se diseña correctamente, puede convertirse en un obstáculo, 
al no proporcionar las abstracciones de bajo nivel que los programadores de niveles superiores 
necesitan.
</p>

<p>
Y las capas siempre añaden una penalización de rendimiento al sistema. Si se realiza una llamada 
a una función en la capa superior, esta puede tener que atravesar muchas capas inferiores antes 
de ser ejecutada por el hardware.
</p>

<p>
Cada una de estas capas añade cierta sobrecarga propia, al menos en forma de cambio de contexto 
(<em>context switching</em>).
</p>


<p>
Las capas casi siempre se representan como una pila de cajas. 
La relación de “uso permitido” se denota mediante adyacencia geométrica 
y se interpreta de arriba hacia abajo, como se muestra en la Figura 13.1.
</p>

<img src="../../../../img/guia_433.png" alt="">

<h3>Tabla 13.1. Solución del Patrón de Capas</h3>

<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>Sección</th>
        <th>Descripción</th>
    </tr>

    <tr>
        <td><strong>Visión General</strong></td>
        <td>
            <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="21">
              (
            <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="61">
             ) 
            <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="21">
              
            “
            <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="12">
             ” entre las capas. El patrón normalmente se representa 
            gráficamente apilando cajas que representan capas unas sobre otras.
        </td>
    </tr>

    <tr>
        <td><strong>Elementos</strong></td>
        <td>
            <strong>Capa (<em>Layer</em>)</strong>, un 
            <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="12">
             . 
            La 
            <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="12">
              de una capa debe 
            <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="12">
              qué 
            <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="12">
              y 
            <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="12">
              del 
            <input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="41">
             .
        </td>
    </tr>

    <tr>
        <td><strong>Relaciones</strong></td>
        <td>
            <strong>
            <input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="11">    
              (<em>Allowed to use</em>)</strong>, 
            <input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="65">
              (<em>depends-on</em>).
            <br><br>

            <input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="56"> 
            (por ejemplo, “una capa puede usar cualquier capa inferior” o 
            “una capa solo puede usar la capa inmediatamente inferior”) 
            y cualquier excepción permitida.
        </td>
    </tr>

    <tr>
        <td><strong>Restricciones</strong></td>
        <td>
            <ul>
                <li>
                    <input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="56">
                     .
                </li>

                <li>
                    <input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="41"> 
                    (aunque normalmente hay tres o más).
                </li>

                <li>
                    <input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="21">
                      “
                    <input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="14">
                     ” 
                    <input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="56">
                      
                    (es decir, una capa inferior no puede usar una capa superior).
                </li>
            </ul>
        </td>
    </tr>

    <tr>
        <td><strong>Debilidades</strong></td>
        <td>
            <ul>
                <li>
                    <input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="56">
                     .
                </li>

                <li>
                    <input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="56">
                     .
                </li>
            </ul>
        </td>
    </tr>
</table>

<button type="submit">Enviar</button>
<?php echo $verificar_79 ?>
<?php echo $verificar_80 ?>
<?php echo $verificar_81 ?>
<?php echo $verificar_82 ?>
<?php echo $verificar_83 ?>
<?php echo $verificar_84 ?>
<?php echo $verificar_85 ?>
<?php echo $verificar_86 ?>
<?php echo $verificar_87 ?>
<?php echo $verificar_88 ?>
<?php echo $verificar_89 ?>
<?php echo $verificar_90 ?>
<?php echo $verificar_91 ?>
<?php echo $verificar_92 ?>
<?php echo $verificar_93 ?>
<?php echo $verificar_94 ?>
<?php echo $verificar_95 ?>
<?php echo $verificar_96 ?>
<?php echo $verificar_97 ?>
<?php echo $verificar_98 ?>
<hr>
<h3>Algunos Puntos Más Finos sobre las Capas</h3>

<p>
Una arquitectura en capas es uno de los pocos lugares donde las conexiones 
entre componentes pueden mostrarse mediante adyacencia y donde “arriba” y “abajo” 
sí importan.
</p>

<p>
Si se invierte la Figura 13.1 de manera que C quede arriba, esto representaría 
un diseño completamente diferente.
</p>

<p>
Los diagramas que utilizan flechas entre las cajas para denotar relaciones 
mantienen su significado semántico sin importar la orientación.
</p>

<p>
El patrón de capas es uno de los patrones más utilizados en toda la ingeniería 
de software, pero a menudo me sorprende cuántas personas todavía lo interpretan mal.
</p>

<p>
Primero, es imposible mirar una pila de cajas y determinar si el 
<em>layer bridging</em> está permitido o no.
</p>

<p>
Es decir, ¿puede una capa usar cualquier capa inferior o solamente la inmediatamente inferior?
</p>

<p>
Resolver esto es extremadamente sencillo; todo lo que el arquitecto debe hacer 
es incluir la respuesta en la leyenda de la notación del diagrama 
(algo que recomendamos para todos los diagramas).
</p>

<p>
Por ejemplo, considere el patrón de capas presentado en la Figura 13.2 
de la página siguiente.
</p>

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
