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
 
        $respuesta_111 = '24'; 
        $respuesta_112 = '36';
        $respuesta_113 = '48';
        $respuesta_114 = '60';
        $respuesta_115 = '72';
        $respuesta_116 = '84';
        $respuesta_117 = '96';
        $respuesta_118 = '108';
        $respuesta_119 = '120';
        $respuesta_120 = '132';
        $respuesta_121 = '144';
        
 
        $respuesta_1 = 'El patron de diseño thread pool facilita la gestion de hilos';
        $respuesta_2 = '39';
        $respuesta_3 = '52';
        $respuesta_4 = '65';
        $respuesta_5 = '78';
        $respuesta_6 = '91';
        $respuesta_7 = '104';
        $respuesta_8 = '117';
        $respuesta_9 = '130';
        $respuesta_10 = '143';
        $respuesta_11 = '156';
        
 
        $respuesta_12 = '28';
        $respuesta_13 = '42';
        $respuesta_14 = '56';
        $respuesta_15 = '70';
        $respuesta_16 = '84';
        $respuesta_17 = '98';
        $respuesta_18 = '112';
        $respuesta_19 = '126';
        $respuesta_20 = '140';
        $respuesta_21 = '154';
        $respuesta_22 = '168';
        
 
        $respuesta_23 = '30';
        $respuesta_24 = '45';
        $respuesta_25 = '60';
        $respuesta_26 = '75';
        $respuesta_27 = '90';
        $respuesta_28 = '105';
        $respuesta_29 = '120';
        $respuesta_30 = '135';
        $respuesta_31 = '150';
        $respuesta_32 = '165';
        $respuesta_33 = '180';
        
 
        $respuesta_34 = '32';
        $respuesta_35 = '48';
        $respuesta_36 = '64';
        $respuesta_37 = '80';
        $respuesta_38 = '96';
        $respuesta_39 = '112';
        $respuesta_40 = '128';
        $respuesta_41 = '144';
        $respuesta_42 = '160';
        $respuesta_43 = '176';
        $respuesta_44 = '192';
        
 
        $respuesta_45 = '34';
        $respuesta_46 = '51';
        $respuesta_47 = '68';
        $respuesta_48 = '85';
        $respuesta_49 = '102';
        $respuesta_50 = '119';
        $respuesta_51 = '136';
        $respuesta_52 = '153';
        $respuesta_53 = '170';
        $respuesta_54 = '187';
        $respuesta_55 = '204';
        
 
        $respuesta_56 = '36';
        $respuesta_57 = '54';
        $respuesta_58 = '72';
        $respuesta_59 = '90';
        $respuesta_60 = '108';
        $respuesta_61 = '126';
        $respuesta_62 = '144';
        $respuesta_63 = '162';
        $respuesta_64 = '180';
        $respuesta_65 = '198';
        $respuesta_66 = '216';
        
 
        $respuesta_67 = '38';
        $respuesta_68 = '57';
        $respuesta_69 = '76';
        $respuesta_70 = '95';
        $respuesta_71 = '114';
        $respuesta_72 = '133';
        $respuesta_73 = '152';
        $respuesta_74 = '171';
        $respuesta_75 = '190';
        $respuesta_76 = '209';
        $respuesta_77 = '228';
        
 
        $respuesta_78 = '40';
        $respuesta_79 = '60';
        $respuesta_80 = '80';
        $respuesta_81 = '100';
        $respuesta_82 = '120';
        $respuesta_83 = '140';
        $respuesta_84 = '160';
        $respuesta_85 = '180';
        $respuesta_86 = '200';
        $respuesta_87 = '220';
        $respuesta_88 = '240';
        
 
        $respuesta_89 = '42';
        $respuesta_90 = '63';
        $respuesta_91 = '84';
        $respuesta_92 = '105';
        $respuesta_93 = '126';
        $respuesta_94 = '147';
        $respuesta_95 = '168';
        $respuesta_96 = '189';
        $respuesta_97 = '210';
        $respuesta_98 = '231';
        $respuesta_99 = '252';
        
         $respuesta_100 = '44';
        $respuesta_101 = '66';
        $respuesta_102 = '88';
        $respuesta_103 = '110';
        $respuesta_104 = '132'; 
        $respuesta_105 = '154';
        $respuesta_106 = '176';
        $respuesta_107 = '198';
        $respuesta_108 = '220';
        $respuesta_109 = '242';
        $respuesta_110 = '264';
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 123; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'El patron de diseño thread pool facilita la gestion de hilos') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'En entornos paralelos') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'donde algunas tareas pueden ejecutarse al mismo tiempo pero quiza en diferentes instanciaciones') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'en el mismo dispositivo') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'se deben usar hilos') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'Cada hilo ejecuta una tarea propia y comparte los recursos del dispositivo') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'Cuando muchos hilos se ejecutan concurrentemente en el mismo dispositivo') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'los recursos podrían no ser suficientes y sobrepasar la capacidad del dispositivo') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'concurrencia usualmente') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'implementa') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'varios hilos ejecutandose') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'dispositivo de computo') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'Sin embargo') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'cada uno de estos hilos consume recursos del dispositivo y') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'eventualmente') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'muchos hilos podrian sobrecargar el dispositivo') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'Gestionar estos hilos representa un problema') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'pueden reutilizarse los hilos') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'Cual seria la cantidad maxima o minima de hilos para el dispositivo') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'cada vez') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'la solucion de un problema requiere el uso') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'ejecucion concurrente de hilos') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'este patron puede utilizarse') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'hilos se usan') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'ejecutar varias tareas de computo independientes al mismo tiempo') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'estos hilos implican costos en tiempo') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'tiempo para iniciar un hilo') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'recursos') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'memoria y CPU') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'Este patron propone una solución que equilibra las implicaciones del uso de hilos') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'muchos otros patrones') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'implican el uso de hilos implementan') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'patron como parte de su solucion') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'leader/followers') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'master/workers') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'patron permite aprovechar') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'entorno multinucleo de una CPU') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'esto puede mejorar el rendimiento del sistema') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'tiene limitaciones') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'la dificultad de escalar la implementacion del patron') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'entorno distribuido') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'aplicar este patron usando muchos nodos de procesamiento') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'tareas deben') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'independientes') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'Cada una') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'tareas debe') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'ejecutarse completa') { 
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
    if ($respuesta_49 === 'hilo') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'Si existen dependencias') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'pueden ocurrir bloqueos mutuos') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'deadlocks') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'no llegar a ejecutarse') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'costo de creacion de hilos') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'relativamente alto') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'un hilo para cada tarea deberia') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'mas costoso que mantener') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'esperar hilos inactivos') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'tanto en terminos de tiempo como de recursos') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'diseñador debe configurar') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'cantidad optima de hilos dependiendo de la disponibilidad') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'recursos del dispositivo') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'de la capacidad de ejecucion al mismo tiempo') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'Esta relacion debe mantenerse dinamicamente') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'a medida que evoluciona') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'carga del dispositivo') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'Cantidad optima de hilos') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'Hilos no reutilizables') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'una tarea dura indefinidamente') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'hilo que ejecuta esta tarea no es reutilizable') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'puede que nunca termine de ejecutar la tarea') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'tipo de tarea') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'ejecutarse') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'un hilo fuera del pool') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'Worker') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'Responsable de ejecutar las tareas del ThreadPool') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'Este obtiene objetos Runnable desde su ThreadPool') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'ejecutando el metodo Runnable') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'Runnable') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'Representa la interfaz implementada') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'las tareas que el ThreadPool debe procesar') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'Esta interfaz especifica el metodo run') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'el cual es responsable de definir la tarea del objeto Runnable') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'ThreadPool') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'clase ThreadPool') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'responsable de gestionar los workers y las tareas') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'asi como su ejecucion') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'Esta clase asigna una tarea') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'cada worker') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'Cuando un worker finaliza la ejecucion') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'una tarea') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'puede solicitar') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'nueva tarea al thread pool') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'Executor') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'Representa la interfaz implementada') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'la clase ThreadPool') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'especifica el metodo execute') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'responsable de ejecutar la tarea del objeto Runnable') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'Executor') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


// Verificaciones en el else
$respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === '+execute(runnableObject:Runnable)') {
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

$respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'ThreadPool') {
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

$respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === '+returnPool()') {
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

$respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === '+execute(runnableObject:Runnable)') {
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

$respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'Runnable') {
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

$respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'Worker') {
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

$respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'executes') {
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'Cada vez') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'llega una solicitud') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'se verifica si existen hilos inactivos') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'de lo contrario') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'si no se ha excedido') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'cantidad máxima de hilos') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'se crea un nuevo hilo') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'al menos un hilo disponible') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'procesar') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'solicitud') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === 'pool envia') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'solicitud') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'ejecutada') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'debe esperar hasta') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'hilo quede inactivo') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
}

$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'el hilo regresa al pool como hilo inactivo') {  
    $verificar_122 = "correcto";
} elseif ($respuesta_122 === '') {
    $verificar_122 = '';
} else {
    $verificar_122 = "incorrecto";
}


$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === 'finaliza el procesamiento de la solicitud') {  
    $verificar_123 = "correcto";
} elseif ($respuesta_123 === '') {
    $verificar_123 = '';
} else {
    $verificar_123 = "incorrecto";
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
    height: 240vh;
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

<button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Dato</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
 <h3>Visión general del diagrama</h3>

<pre>
        Executor
            ▲
            │ implementa
            │
       ThreadPool
        /      \
 maneja        contiene tareas
      /          \
 Worker ------> Runnable
         ejecuta
</pre>

<h3>1. Executor (interfaz)</h3>

<p>
Arriba a la izquierda:
</p>

<pre>
<<interface>>
Executor
+execute(runnableObject: Runnable)
</pre>

<p>
Esta interfaz define:
</p>

<pre>
execute(Runnable tarea)
</pre>

<p>
Es decir, cualquier clase que implemente Executor debe poder ejecutar tareas Runnable.
</p>

<h4>Relación con ThreadPool</h4>

<p>
La línea punteada con triángulo significa:
</p>

<pre>
ThreadPool implementa Executor
</pre>

<p>
En UML esto se llama realización de interfaz.
</p>

<p>
Entonces:
</p>

<pre>
class ThreadPool implements Executor
</pre>

<h3>2. Runnable (interfaz)</h3>

<p>
A la derecha:
</p>

<pre>
<<interface>>
Runnable
</pre>

<p>
Representa las tareas que se van a ejecutar.
</p>

<p>
Normalmente tendría:
</p>

<pre>
run()
</pre>

<h4>Idea importante</h4>

<p>
Runnable NO es el thread.
</p>

<p>
Es solamente el trabajo a realizar.
</p>

<p>
Ejemplos:
</p>

<ul>
  <li>procesar una imagen</li>
  <li>calcular algo</li>
  <li>responder una petición web</li>
  <li>enviar un email</li>
</ul>

<h3>3. Worker</h3>

<p>
Representa un thread trabajador del pool.
</p>

<p>
El Worker:
</p>

<ul>
  <li>toma tareas Runnable</li>
  <li>las ejecuta</li>
  <li>y luego vuelve al pool</li>
</ul>

<h4>Relación Worker → Runnable</h4>

<p>
La línea con “executes” significa:
</p>

<pre>
Worker ejecuta Runnable
</pre>

<p>
Es decir:
</p>

<pre>
worker.run(tarea)
</pre>

<h4>Ejemplo mental</h4>

<pre>
Runnable = tarea
Worker = empleado
</pre>

<p>
El empleado ejecuta la tarea.
</p>

<h3>4. ThreadPool</h3>

<p>
Es la pieza central del patrón.
</p>

<pre>
ThreadPool
</pre>

<p>
Responsabilidades:
</p>

<ul>
  <li>administrar workers</li>
  <li>guardar tareas</li>
  <li>asignar tareas a workers</li>
  <li>reutilizar threads</li>
</ul>

<h4>Métodos</h4>

<pre>
+execute(runnableObject:Runnable)
+returnPool()
</pre>

<h5>execute(...)</h5>

<p>
Recibe una tarea.
</p>

<p>
Ejemplo:
</p>

<pre>
pool.execute(miTarea)
</pre>

<h5>returnPool()</h5>

<p>
Indica que un worker terminó y vuelve al pool.
</p>

<h4>Relación ThreadPool → Worker</h4>

<p>
La línea simple indica asociación:
</p>

<pre>
ThreadPool conoce y administra Workers
</pre>

<p>
Porque el pool:
</p>

<ul>
  <li>crea workers</li>
  <li>los controla</li>
  <li>les asigna tareas</li>
</ul>

<h4>Relación ThreadPool ◇── Runnable</h4>

<p>
El diamante blanco representa agregación.
</p>

<p>
Significa:
</p>

<pre>
ThreadPool contiene/manipula Runnable
</pre>

<p>
El pool mantiene tareas pendientes y las reparte.
</p>

<h3>Qué ocurre realmente en ejecución</h3>

<h4>Paso 1</h4>

<p>
Llega una tarea:
</p>

<pre>
Runnable tarea = ...
pool.execute(tarea)
</pre>

<h4>Paso 2</h4>

<p>
El ThreadPool busca un Worker libre.
</p>

<h4>Paso 3</h4>

<p>
Un Worker toma la tarea Runnable.
</p>

<h4>Paso 4</h4>

<p>
El Worker ejecuta:
</p>

<pre>
tarea.run()
</pre>

<h4>Paso 5</h4>

<p>
Cuando termina:
</p>

<pre>
Worker vuelve al pool
</pre>

<p>
Y espera otra tarea.
</p>

<h3>Nota del diagrama</h3>

<p>
La nota dice:
</p>

<blockquote>
  “Worker objects get Runnable objects from their ThreadPool”
</blockquote>

<p>
Esto significa:
</p>

<pre>
Los Workers obtienen las tareas desde el ThreadPool
</pre>

<p>
No buscan tareas por sí mismos.
</p>

<p>
El pool es quien organiza todo.
</p>

<h3>Lo más importante del patrón</h3>

<p>
El patrón separa:
</p>

<h4>La tarea</h4>

<pre>
Runnable
</pre>

<p>
de
</p>

<h4>El hilo que la ejecuta</h4>

<pre>
Worker
</pre>

<p>
y además:
</p>

<h4>El administrador de los hilos</h4>

<pre>
ThreadPool
</pre>

<h3>Analogía sencilla</h3>

<p>
Piensa en un restaurante:
</p>

<pre>
Runnable  = pedido
Worker    = cocinero
ThreadPool = administrador de cocina
</pre>

<ul>
  <li>llegan pedidos</li>
  <li>el administrador asigna pedidos</li>
  <li>los cocineros trabajan</li>
  <li>cuando terminan quedan libres para otro pedido</li>
</ul>
    </div>




     <h3>3.2.6 Patrón de Diseño Thread Pool</h3>

<h4>Intención</h4>
<p>
<input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="51">
 . 
 <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="18">
  ,
<input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="89">
 ,
<input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="18">
 , 
<input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="16"> 
 . 
<input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="68"> 
 . 
<input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="68">
  , 
<input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="74">
   .
</p>

<h4>Problema</h4>
<p>
La 
<input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="21">
  se 
<input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="11">
  teniendo 
<input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="21">
  en un 
<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="21">
 . 
<input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="11">
 , 
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="53">
 ,
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="11">
 , 
<input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="41">
 . 
<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="41">
 . Por ejemplo, ¿
<input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="24">
 ? ¿
<input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="61">
 ?
</p>

<h4>Contexto</h4>
<p>
En general, 
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="6">
  que 
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="41">
  de 
<input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="26">
 , 
<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="25">
 . Los 
<input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="14">
  para 
<input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="61">
 ; sin embargo, 
<input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="31">
(es decir, 
<input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="24">
 ) y 
 <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="8">
   (
 <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="14">   
  ). 
  <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="75">
   .
</p>

<p>
Además, 
<input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="21">
  que 
<input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="31">
  este 
<input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="31">
 . Este es el caso, por ejemplo, de los patrones de diseño
<input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="17">
  y 
<input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="17">
 .
</p>

<p>
Aunque este 
<input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="22">
  el 
<input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="28">
  y 
<input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="41">
 , 
<input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="14">
 , como 
<input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="46">
  a un 
<input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="17">
  (es decir, 
<input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="54">
 ).
</p>

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
    <?php echo $verificar_35 ?>
    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <?php echo $verificar_39 ?>
    <?php echo $verificar_40 ?>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
<hr>
<h4>Fuerzas</h4>

<h5>Todas las 
<input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="10">    
  ser 
<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="11">    
 </h5>
<p>
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="8">
  de las 
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="9">
  poder 
<input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="15">
  e 
<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="16">
  en un 
<input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="6">
 .
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="21">
 , 
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="31">
  (
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="8">    
 ).Por ejemplo, si todos los hilos del pool están esperando otra tarea, una nueva tarea 
 podría 
 <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="21">
  , provocando un deadlock entre los hilos.
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
<hr>
<h5>El 
<input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="14">    
    es 
<input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="15">
 </h5>
<p>
Crear 
<input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="27">
  ser 
<input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="23">
  y 
<input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="21">
 ,
<input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="41">
 .
</p>

<h5>
<input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="21">    
 </h5>
<p>
El 
<input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="21">
  la 
<input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="53">
de 
<input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="21">
  y 
<input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="41">
 .
<input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="41">
 , 
<input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="21">
  la 
<input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="21">
 .
</p>

<h5>
<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="18">    
 </h5>
<p>
Si 
<input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="26"> 
 , el 
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="38"> 
  porque
<input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="41"> 
 . Este 
<input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="10"> 
 debería 
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="8"> 
  mediante
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="18"> 
 .
</p>
   
<button type="submit">Enviar</button>
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
<hr>
<h4>Diagrama de Estructura - Figura 3.8</h4>

<h4>Participantes</h4>

<h5>
<input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="6">    
 </h5>
<p>
<input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="45">
 . 
<input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="45">
 , 
<input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="31">
 .
</p>

<h5>
<input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="11">    
 </h5>
<p>
<input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="31"> 
 por 
<input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="41"> 
 .
 <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="35"> 
 , 
<input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="55"> 
 .
</p>

<h5>
<input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="11">    
 </h5>
<p>
La 
<input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="13">
  es 
<input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="45">
 , 
<input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="18">
 . 
<input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="25">
  a 
<input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="11">
 . 
<input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="34">
  de 
<input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="11">
 , 
<input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="11">
  una 
<input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="21">
 .
</p>

<h5>
<input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="8">    
 </h5>
<p>

<input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="31">
  por 
<input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="17">
 . Esta interfaz 
<input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="27">
 , el cual es 
<input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="51">
 .
</p>

<button type="submit">Enviar</button>
<?php echo $verificar_75 ?>
<?php echo $verificar_76 ?>
<?php echo $verificar_77 ?>
<?php echo $verificar_78 ?>
<?php echo $verificar_79 ?>
<?php echo $verificar_80 ?>
<?php echo $verificar_81 ?>
<?php echo $verificar_82 ?>
<?php echo $verificar_83 ?>
<?php echo $verificar_84 ?>
<?php echo $verificar_85 ?>
<?php echo $verificar_86 ?>
<?php echo $verificar_87 ?>
<br>

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
<!-- Diagrama UML - Thread Pool Design Pattern -->
<!-- Pega este bloque dentro de tu <div class="seccion derecha"> -->

 

</div>




<div class="seccion derecha">
   <div style="position:relative; width:100%; display:inline-block;">

  <svg width="100%" viewBox="0 0 600 390" xmlns="http://www.w3.org/2000/svg" style="display:block;">
    <defs>
      <style>
        .b   { fill:#fff; stroke:#333; stroke-width:1; }
        .ln  { stroke:#333; stroke-width:0.9; fill:none; }
        .dk  { stroke:#333; stroke-width:0.9; stroke-dasharray:6 4; fill:none; }
        .st  { font:10px sans-serif; fill:#555; font-style:italic; }
        .ml  { font:11px sans-serif; fill:#444; }
        .nt  { font:10px sans-serif; fill:#444; }
        .sep { stroke:#333; stroke-width:0.5; opacity:0.35; fill:none; }
      </style>
    </defs>

    <!-- Executor -->
    <rect class="b" x="15" y="18" width="205" height="66" rx="2"/>
    <line class="ln" x1="15" y1="38" x2="220" y2="38"/>
    <text class="st" x="117" y="31" text-anchor="middle">&lt;&lt;interface&gt;&gt;</text>
    <line class="sep" x1="15" y1="62" x2="220" y2="62"/>

    <!-- Note -->
    <polygon points="315,18 490,18 498,28 498,76 315,76" fill="#ffffee" stroke="#999" stroke-width="0.8"/>
    <polygon points="490,18 490,28 498,28" fill="#f5f5d8" stroke="#999" stroke-width="0.8"/>
    <text class="nt" x="325" y="36">Worker objects get Runnable</text>
    <text class="nt" x="325" y="52">objects from their ThreadPool</text>

    <!-- ThreadPool -->
    <rect class="b" x="15" y="168" width="240" height="86" rx="2"/>
    <line class="ln" x1="15" y1="186" x2="255" y2="186"/>
    <line class="sep" x1="15" y1="198" x2="255" y2="198"/>
    <line class="sep" x1="15" y1="218" x2="255" y2="218"/>
    <line class="sep" x1="15" y1="238" x2="255" y2="238"/>

    <!-- Runnable -->
    <rect class="b" x="390" y="168" width="160" height="66" rx="2"/>
    <line class="ln" x1="390" y1="188" x2="550" y2="188"/>
    <text class="st" x="470" y="181" text-anchor="middle">&lt;&lt;interface&gt;&gt;</text>
    <line class="sep" x1="390" y1="214" x2="550" y2="214"/>
    <text class="ml" x="556" y="183">1</text>

    <!-- Worker -->
    <rect class="b" x="230" y="318" width="140" height="56" rx="2"/>
    <line class="ln" x1="230" y1="336" x2="370" y2="336"/>
    <line class="sep" x1="230" y1="348" x2="370" y2="348"/>
    <line class="sep" x1="230" y1="360" x2="370" y2="360"/>
    <text class="ml" x="376" y="342">1</text>

    <!-- Realización -->
    <line class="dk" x1="117" y1="168" x2="117" y2="100"/>
    <polygon points="107,100 117,84 127,100" fill="#fff" stroke="#333" stroke-width="1"/>

    <!-- Agregación -->
    <polygon points="255,201 270,194 285,201 270,208" fill="#fff" stroke="#333" stroke-width="1"/>
    <line class="ln" x1="285" y1="201" x2="390" y2="201"/>

    <!-- Asociación -->
    <line class="ln" x1="135" y1="254" x2="270" y2="318"/>

    <!-- executes -->
    <line class="ln" x1="470" y1="234" x2="470" y2="346"/>
    <line class="ln" x1="370" y1="346" x2="470" y2="346"/>
  </svg>

  <!-- respuesta_99: Executor nombre -->
  <input type="text" name="respuesta_99"
    value="<?php echo $respuesta_99; ?>"
    style="position:absolute; left:5%; top:10.5%; width:26%; height:4%; font-size:10px; padding:1px 3px; border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

  <!-- respuesta_100: Executor método -->
  <input type="text" name="respuesta_100"
    value="<?php echo $respuesta_100; ?>"
    style="position:absolute; left:3%; top:16.5%; width:32%; height:4%; font-size:10px; padding:1px 3px; border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

  <!-- respuesta_101: ThreadPool nombre -->
  <input type="text" name="respuesta_101"
    value="<?php echo $respuesta_101; ?>"
    style="position:absolute; left:8%; top:43.5%; width:25%; height:4%; font-size:10px; padding:1px 3px; border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

  <!-- respuesta_102: ThreadPool método 1 -->
  <input type="text" name="respuesta_102"
    value="<?php echo $respuesta_102; ?>"
    style="position:absolute; left:3%; top:51%; width:38%; height:4%; font-size:10px; padding:1px 3px; border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

  <!-- respuesta_103: ThreadPool método 2 -->
  <input type="text" name="respuesta_103"
    value="<?php echo $respuesta_103; ?>"
    style="position:absolute; left:3%; top:56.5%; width:38%; height:4%; font-size:10px; padding:1px 3px; border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

  <!-- respuesta_104: Runnable nombre -->
  <input type="text" name="respuesta_104"
    value="<?php echo $respuesta_104; ?>"
    style="position:absolute; left:66%; top:49%; width:22%; height:4%; font-size:10px; padding:1px 3px; border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

  <!-- respuesta_105: Worker nombre -->
  <input type="text" name="respuesta_105"
    value="<?php echo $respuesta_105; ?>"
    style="position:absolute; left:42%; top:82%; width:18%; height:4%; font-size:10px; padding:1px 3px; border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

  <!-- respuesta_106: executes label -->
  <input type="text" name="respuesta_106"
    value="<?php echo $respuesta_106; ?>"
    style="position:absolute; left:79%; top:67.5%; width:11%; height:4%; font-size:10px; padding:1px 3px; border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

</div>


<p>Figure 3.8: Structure Diagram - Thread Pool Design Pattern
</p>

<button type="submit">Enviar</button>
<?php echo $verificar_99 ?>
<?php echo $verificar_100 ?>
<?php echo $verificar_101 ?>
<?php echo $verificar_102 ?>
<?php echo $verificar_103 ?>
<?php echo $verificar_104 ?>
<?php echo $verificar_105 ?>
<?php echo $verificar_106 ?>

<hr>

<h4>Comportamiento</h4>

<h5>Escenario de Procesamiento - Figura 3.9</h5>

<p>
<input type="text" name="respuesta_107" value="<?php echo $respuesta_107; ?>" size="8">
  que 
<input type="text" name="respuesta_108" value="<?php echo $respuesta_108; ?>" size="17">
 , 
<input type="text" name="respuesta_109" value="<?php echo $respuesta_109; ?>" size="14">
 ; 
<input type="text" name="respuesta_110" value="<?php echo $respuesta_110; ?>" size="14">
 ,
<input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="14">
  la 
<input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="14">
 , 
<input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="12">
 .
</p>

<p>
Si existe 
<input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="21">
  para 
<input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="6">
  una 
<input type="text" name="respuesta_116" value="<?php echo $respuesta_116; ?>" size="12">
 , el 
<input type="text" name="respuesta_117" value="<?php echo $respuesta_117; ?>" size="12">
  la 
<input type="text" name="respuesta_118" value="<?php echo $respuesta_118; ?>" size="12">
  para ser 
<input type="text" name="respuesta_119" value="<?php echo $respuesta_119; ?>" size="12">
 ; de lo contrario, la solicitud 
<input type="text" name="respuesta_120" value="<?php echo $respuesta_120; ?>" size="12">
  que un 
<input type="text" name="respuesta_121" value="<?php echo $respuesta_121; ?>" size="15">
 .
</p>

<p>
Finalmente, 
<input type="text" name="respuesta_122" value="<?php echo $respuesta_122; ?>" size="35">
  cuando 
  <input type="text" name="respuesta_123" value="<?php echo $respuesta_123; ?>" size="35">
   .
</p>

<button type="submit">Enviar</button>
 
<?php echo $verificar_107 ?>
<?php echo $verificar_108 ?>
<?php echo $verificar_109 ?>
<?php echo $verificar_110 ?>
<?php echo $verificar_111 ?>
<?php echo $verificar_112 ?>
<?php echo $verificar_113 ?>
<?php echo $verificar_114 ?>
<?php echo $verificar_115 ?>
<?php echo $verificar_116 ?>
<?php echo $verificar_117 ?>
<?php echo $verificar_118 ?>
<?php echo $verificar_119 ?>
<?php echo $verificar_120 ?>
<?php echo $verificar_121 ?>
<?php echo $verificar_122 ?>
<?php echo $verificar_123 ?>
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
