<?php
 
for ($i = 1; $i <= 80; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 80; $i++) {
    ${"verificar_" . $i} = '';
}

     

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer todas las respuestas correctas para las tablas de multiplicar
        
         $respuesta_1 = 'directrices';
        $respuesta_2 = 'diseñar';
        $respuesta_3 = 'implementacion';
        $respuesta_4 = 'lenguaje';
        $respuesta_5 = 'programacion';
        $respuesta_6 = 'SOLID';
        $respuesta_7 = 'Single Responsibility Principle';
        $respuesta_8 = 'SRP';
        $respuesta_9 = 'Open/Closed Principle';
        $respuesta_10 = 'OCP';
        $respuesta_11 = 'Liskov Substitution Principle';
        
        $respuesta_12 = 'LSP';
        $respuesta_13 = 'Interface Segregation Principle';
        $respuesta_14 = 'ISP';
        $respuesta_15 = 'Dependency Inversion Principle';
        $respuesta_16 = 'DIP';
        $respuesta_17 = 'soluciones';
        $respuesta_18 = 'bajo nivel';
        $respuesta_19 = 'implementacion';
        $respuesta_20 = 'problemas comunes';
        $respuesta_21 = 'orientada';
        $respuesta_22 = 'objetos';
        
        $respuesta_23 = 'implementacion';
        $respuesta_24 = 'problema concreto';
        $respuesta_25 = 'Principle';  // o 'Principio'
        $respuesta_26 = 'Pattern';    // o 'Patron'
        $respuesta_27 = 'Framework';
        $respuesta_28 = 'tres componentes';
        $respuesta_29 = 'responsabilidades unicas';
        $respuesta_30 = 'inyectar dependencias';
        $respuesta_31 = 'crearlas internamente';
        $respuesta_32 = 'acoplamiento';
        $respuesta_33 = 'cohesion';
        
        $respuesta_34 = 'antes del codigo';
        $respuesta_35 = 'infraestructura';
        $respuesta_36 = 'objetos';
        $respuesta_37 = 'clases';
        $respuesta_38 = 'framework MVC';
        $respuesta_39 = 'Contenedor IoC';
        $respuesta_40 = 'Soporte de plantillas DAO';
        $respuesta_41 = 'factory';
        $respuesta_42 = 'configuracion';
        $respuesta_43 = 'abstracciones';
        $respuesta_44 = 'crear instancias';
        
        $respuesta_45 = 'delegan responsabilidades';
        $respuesta_46 = 'abstraccion';
        $respuesta_47 = 'delegada';
        $respuesta_48 = 'setter';
        $respuesta_49 = 'constructor';
        $respuesta_50 = 'no tiene conocimiento';
        $respuesta_51 = 'El ecosistema Spring';
        $respuesta_52 = 'Spring Core';
        $respuesta_53 = 'Spring MVC';
        $respuesta_54 = 'Spring Persistencia';
        $respuesta_55 = 'Spring Security';
        
        $respuesta_56 = 'Spring Cloud';
        $respuesta_57 = 'Otros proyectos Spring';
        $respuesta_58 = 'Spring Boot';
        $respuesta_59 = 'caracteristicas';
        $respuesta_60 = 'IOC';
        $respuesta_61 = 'inyeccion';
        $respuesta_62 = 'dependencias';
        $respuesta_63 = 'internacionalizacion';
        $respuesta_64 = 'establecer';
        $respuesta_65 = 'obtener';
        $respuesta_66 = 'programacion orientada a aspectos';
        
        $respuesta_67 = 'Advices';
        $respuesta_68 = 'Pointcuts';
        $respuesta_69 = 'integracion';
        $respuesta_70 = 'AspectJ';
        $respuesta_71 = 'la base de datos';
        $respuesta_72 = 'aplicaciones web';
        $respuesta_73 = 'Core';
        $respuesta_74 = 'Beans';
        $respuesta_75 = 'Context';
        $respuesta_76 = 'Lenguaje de Expresiones';
        $respuesta_77 = 'AOP';
        $respuesta_78 = 'Aspectos';
        $respuesta_79 = 'Instrumentacion';
        $respuesta_80 = 'ApplicationContext';
 
        // Marcar todas como correctas
    for ($i = 1; $i <= 80; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'directrices') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'diseñar') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'implementacion') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'lenguaje') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'programacion') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'SOLID') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'Single Responsibility Principle') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'SRP') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'Open/Closed Principle') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'OCP') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'Liskov Substitution Principle') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'LSP') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'Interface Segregation Principle') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'ISP') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'Dependency Inversion Principle') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'DIP') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'soluciones') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'bajo nivel') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'implementacion') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'problemas comunes') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'orientada') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'objetos') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'implementacion') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'problema concreto') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'Principle'
   || $respuesta_25 === 'Principio'
   ) { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'Pattern'||
   $respuesta_26 === 'Patron') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'Framework') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'tres componentes') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'responsabilidades unicas') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'inyectar dependencias') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'crearlas internamente') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'acoplamiento') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'cohesion') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'antes del codigo') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'infraestructura') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'objetos') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'clases') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'framework MVC') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'Contenedor IoC') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'Soporte de plantillas DAO') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'factory') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'configuracion') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'abstracciones') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'crear instancias') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'delegan responsabilidades') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'abstraccion') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'delegada') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'setter') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'constructor') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'no tiene conocimiento') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'El ecosistema Spring') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'Spring Core') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'Spring MVC') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'Spring Persistencia') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'Spring Security') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'Spring Cloud') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'Otros proyectos Spring') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'Spring Boot') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'caracteristicas') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'IOC') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'inyeccion') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'dependencias') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'internacionalizacion') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'establecer') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'obtener') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'programacion orientada a aspectos') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'Advices') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'Pointcuts') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'integracion') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'AspectJ') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'la base de datos') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'aplicaciones web') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'Core') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'Beans') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'Context') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'Lenguaje de Expresiones') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'AOP') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'Aspectos') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'Instrumentacion') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'ApplicationContext') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
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
    height: 230vh;
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

 <p>
Los <strong>frameworks</strong> a menudo implementan <em>patrones y principios de diseño</em> para ayudarte a escribir mejor código.
</p>

<ul>
  <li>
    <strong>Principio de Diseño:</strong>
    Proporciona 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">
      de alto nivel para 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">
      mejores aplicaciones de software.
    No ofrecen guías de 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">
      y no están ligados a ningún 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">
      de 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
     .
    Los principios <strong>
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">    
     </strong> (
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="18">
      (
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="2">    
     ),
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="15">
      (
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="2">    
     ), 
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">
      (
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="2">    
     ), 
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="18">
      (
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="2">    
     ), 
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="18">
      (
    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="2">    
     )) son uno de los conjuntos más populares de principios de diseño.
  </li>
    <br>
  <li>
    <strong>Patrón de Diseño:</strong>
    Proporciona 
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">
      de 
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">
      relacionadas con la 
    <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">
      de 
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="15">
      en la programación 
    <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="8">
      a 
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="8">
     .
    En otras palabras, un patrón de diseño sugiere una 
    <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="8">
      específica para un 
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="15">
      de programación orientada a objetos.
    Ejemplos: Singleton, Factory, Command, Observer, etc.
  </li>
</ul>

<div style="width: 600px; font-family: Arial, sans-serif; border: 2px solid #ccc;">

  <!-- PRINCIPLE -->
  <div style="display:flex; background:#2f5d8a; color:white; padding:12px;">
    <div style="flex:1; text-align:center;">Inversion of Control (IoC)</div>
    <div style="flex:1; text-align:center;">Dependency Inversion Principle (DIP)</div>
    <div style="width:120px; text-align:center; font-weight:bold;">
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">    
     </div>
  </div>

  <!-- PATTERN -->
  <div style="display:flex; background:#7b5aa6; color:white; padding:12px;">
    <div style="flex:1; text-align:center;">Dependency Injection (DI)</div>
    <div style="width:120px; text-align:center; font-weight:bold; background:#f2f2f2; color:#333;">
        <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8">
       
    </div>
  </div>

  <!-- FRAMEWORK -->
  <div style="display:flex; background:#8bc34a; color:white; padding:12px;">
    <div style="flex:1; text-align:center;">IoC Container</div>
    <div style="width:120px; text-align:center; font-weight:bold; background:#f2f2f2; color:#333;">
        <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">
       
    </div>
  </div>

</div>


<p>
Los <strong>frameworks</strong> a menudo implementan patrones y principios de diseño como los siguientes:
</p>

<ul>
    <li>
    <strong>Framework Modelo-Vista-Controlador (MVC):</strong>
    separa la lógica de la aplicación en 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="14">
    con 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="14">
    .
    </li>

    <li>
    <strong>Framework de Inyección de Dependencias (DI):</strong>
    te permite 
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="14">
      en tus clases o módulos en lugar de 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="14">
     , reduciendo el 
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">
      y aumentando la 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="8">
     .
    </li>

    <li>
    <strong>Framework de Desarrollo Guiado por Pruebas (TDD):</strong>
    fomenta escribir pruebas 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="14">
     para ayudar a seguir el principio de responsabilidad única (SRP) y 
    refactorizar el código para lograr mayor cohesión y menor acoplamiento.
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
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
    <?php echo $verificar_31 ?>
    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>

        <?php echo $verificar_34 ?>
    <hr>
<h2>¿Qué es Spring?</h2>

<ul>
  <li>
    El <strong>framework Spring</strong> proporciona un modelo de programación y configuración
    para aplicaciones empresariales basadas en Java.
  </li>

  <li>
    Spring se enfoca en la “
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
     ” (plumbing) de las aplicaciones empresariales
    para que los equipos puedan concentrarse en la lógica de negocio a nivel de aplicación.
  </li>
</ul>

 

<ul>
  <li>
    <strong>Un contenedor:</strong>
    <ul>
      <li>Crea 
      <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">  
        y los pone a disposición de tu aplicación.</li>
      <li>
        Utiliza una estructura XML declarativa para definir los componentes
        que “viven” dentro del contenedor.
      </li>
    </ul>
  </li>

  <li>
    <strong>Un Framework:</strong>
    <ul>
      <li>
        Proporciona una infraestructura de 
        <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="8">
          que facilita la realización de tareas.
      </li>
      <li>
        Por ejemplo, los Templates (plantillas) ofrecen una abstracción que oculta
        los detalles del acceso a datos y las llamadas remotas.
      </li>
    </ul>
  </li>
</ul>

<ul>
  <li>
    Spring es un framework ligero que aborda cada <em>capa (tier)</em> en una aplicación web:
    <ul>
      <li>
        <strong>Capa de Presentación:</strong>
        Un 
        <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="14">
          similar a Struts, pero más potente y fácil de usar.
      </li>

      <li>
        <strong>Capa de Negocio:</strong>
        <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="14">
          ligero y soporte para AOP.
      </li>

      <li>
        <strong>Capa de Persistencia:</strong>
        <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="14">
          para ORMs populares y JDBC.
      </li>
    </ul>
  </li>
</ul>

<p>JDBC es una API (Interfaz de Programación de Aplicaciones) de Java</p>
<p>ORM (Object-Relational Mapping):
Un ORM es una herramienta o framework que convierte automáticamente las tablas de una 
base de datos en objetos de tu lenguaje de programación (en Java, serían clases y objetos).</p>

<h2>Inversión de Control (IoC)</h2>

<ul>
  <li>
    El concepto básico del principio de Inversión de Control es que los programadores
    no necesitan crear sus objetos directamente; en su lugar, deben describir cómo
    deben crearse mediante reglas definidas, por ejemplo, en clases 
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="14">
      y/o
    archivos de 
    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="14">
     .
  </li>

  <li>
    Posteriormente, el código de tu aplicación no conecta directamente los componentes
    de implementación entre sí, sino que utiliza 
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="14">
     , como interfaces,
    que los representan. Spring proporciona las implementaciones reales.
  </li>
</ul>
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
<h2>El siguiente patrón (pero no limitado a este) implementa el principio IoC</h2>

<div style="border:1px solid #ccc; padding:20px; font-family: Arial, sans-serif; max-width:700px;">

  <!-- PRINCIPIO -->
  <div style="background:#2f5d8a; color:white; text-align:center; padding:12px; font-weight:bold;">
    Inversión de Control (Principio)
  </div>

  <!-- PATRONES -->
  <div style="margin-top:20px;">
    <p><strong>Patrones:</strong></p>
    <ul>
      <li>Localizador de Servicios (Service Locator)</li>
      <li>Factory (Fábrica)</li>
      <li>Método Plantilla (Template Method)</li>
      <li>Inyección de Dependencias (Dependency Injection)</li>
      <li>Fábrica Abstracta (Abstract Factory)</li>
      <li>Estrategia (Strategy)</li>
    </ul>
  </div>

</div>

<h2>Inyección de Dependencias (Dependency Injection)</h2>

<ul>
  <li>
    La inyección de dependencias es un patrón utilizado para 
    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="14">
      de objetos que 
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="14">
      a otros objetos. Sin embargo, en tiempo de compilación,
    la “clase llamadora” 
    <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="14">
      de la implementación concreta de la clase
    de la dependencia a la que delegará en tiempo de ejecución. Esto se debe a que el código
    de la clase delegadora está programado en función de la 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="14">
      de la interfaz de la clase 
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="14">
     .
  </li>

  <li>
    Con Spring, la implementación de la inyección de dependencias puede lograrse
    mediante técnicas de inyección por <em>
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="14">    
     </em> y/o por 
    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="14">
     .
  </li>
</ul>
    <button type="submit">Enviar</button> 
    <?php echo $verificar_44 ?> 
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
</div>




<div class="seccion derecha">
 
<h2>El ecosistema Spring</h2>

<div style="font-family: Arial, sans-serif; max-width: 900px;">

  <!-- FILA SUPERIOR -->
  <div style="background:#5aa469; color:white; text-align:center; padding:14px; font-weight:bold; margin-bottom:10px;">
    <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="14">
     
  </div>

  <!-- GRID PRINCIPAL -->
  <div style="
    display:grid;
    grid-template-columns: repeat(3, 1fr);
    gap:10px;
    margin-bottom:10px;
  ">
    <div style="background:#3e4a5e; color:white; padding:20px; text-align:center;">
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="14">    
     </div>
    <div style="background:#3e4a5e; color:white; padding:20px; text-align:center;">
    <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="14">    
     </div>
    <div style="background:#3e4a5e; color:white; padding:20px; text-align:center;">
    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="14">    
     </div>

    <div style="background:#3e4a5e; color:white; padding:20px; text-align:center;">
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="14">    
     </div>
    <div style="background:#3e4a5e; color:white; padding:20px; text-align:center;">
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="14">    
     </div>
    <div style="background:#3e4a5e; color:white; padding:20px; text-align:center;">
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="14">    
     </div>
  </div>

  <!-- BASE -->
  <div style="background:#5aa469; color:white; text-align:center; padding:16px; font-weight:bold;">
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="14">
     
  </div>

</div>
<h2>Módulos Core</h2>

<ul>
    <li>
        <strong>
        <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="6">    
          y 
        <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="6">
         :</strong> estos módulos proporcionan 
        <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="9">
          de 
        <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="9">
          e 
        <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="9">
          de 
        <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="9">
         .
    </li>
    <li>
        <strong>
        <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="6">    
         :</strong> este módulo soporta 
        <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="9">
          (I18N), EJB y JMS.
    </li>
    <li>
        <strong>
        <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="16">    
         :</strong> es una extensión del EL definido en JSP. Proporciona soporte para 
        <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="9">
          y 
        <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="9">
          valores de propiedades e incluso para la invocación de métodos.
    </li>
    <li>
        <strong>
        <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="4">    
         , 
        <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="6">
          e 
        <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="9">
         :</strong> estos módulos soportan la implementación de 
        <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="9">
         , donde se pueden usar 
        <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="9">
          y 
        <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="9">
         .
    </li>
    <li>
        Aspectos:el módulo de aspectos proporciona soporte para la 
        <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="9">
          con 
        <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="9">
         .
    </li>
    <li>
        <strong>Acceso a Datos / Integración:</strong> estos módulos básicamente proporcionan soporte para interactuar 
        con 
        <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="9">
         .
    </li>
    <li>
        <strong>Web:</strong> este grupo proporciona soporte para crear 
        <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="9">
         .
    </li>
</ul>
    <button type="submit">Enviar</button>   
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
<?php echo $verificar_79 ?>
<hr>
<h2>Spring es como una fábrica</h2>
<p>Crea las instancias de tus clases a través de la configuración</p>

<ul>
    <li>
        <strong>API del programador (
        <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="9">    
         ):</strong>
        es el punto de acceso que utiliza el programador para interactuar con Spring.
    </li>
    <li>
        <strong>Solicitud de Bean por identificador:</strong>
        el programador solicita un bean usando su identificador.
    </li>
    <li>
        <strong>Instancia de clase con todas sus dependencias conectadas:</strong>
        Spring devuelve una instancia completamente configurada.
    </li>
</ul>
<button type="submit">Enviar</button>
<?php echo $verificar_80 ?>
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
