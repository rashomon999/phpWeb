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
 
    $respuesta_1  = 'replicacion de datos globales';
    $respuesta_2  = 'la fusion de los resultados de las tareas individuales en calculos globales';
    $respuesta_3  = 'Separable Dependencies Design Pattern';
    $respuesta_4  = 'Master';
    $respuesta_5  = 'Worker';
    $respuesta_6  = 'Task';
    $respuesta_7  = 'ThreadPool';
    $respuesta_8  = 'arquitectonica';
    $respuesta_9  = 'proxy-cache';
    $respuesta_10 = 'hay datos duplicables para ser consultados muchas veces por muchos cliente';
    $respuesta_11 = 'hacer que los clientes interactuen con una copia de la receta guardada en nodos de procesamiento intermedio';
    $respuesta_12 = 'Reliable messaging';
    $respuesta_13 = 'Broker';
    $respuesta_14 = 'Producers-Consumers';
    $respuesta_15 = 'broker';
    $respuesta_16 = 'hay multiples clientes de software que deben interactuar con multiples servidores de software;';
    $respuesta_17 = 'la escogencia de cual servidor atiende a un cliente dado';
    $respuesta_18 = 'se resuelve por un criterio dado';
    $respuesta_19 = 'dinamicamente';
    $respuesta_20 = 'hacer que tanto clientes como servidores se registren en el componente que resuelve que servidor debe atender a que cliente';
    $respuesta_21 = 'Un patron de diseño arquitectonico aplicado en un contexto erroneo lo hace interpretar como un patron de diseño detallado,';
    $respuesta_22 = 'mientras que lo contrario es falso';
    $respuesta_23 = 'El alcance de la aplicacion de un patron de diseño detallado es bien localizado en una porcion delimitada y no significativa del sistema';
    $respuesta_24 = 'Proxy-cache';
    $respuesta_25 = 'Publisher-subscriber';
    $respuesta_26 = 'Broker';
    $respuesta_27 = 'detallada';
    $respuesta_28 = 'publisher-suscriber';
    $respuesta_29 = 'componentes de software interesados';
    $respuesta_30 = 'enterarse de cambios de estado de otros componentes';
    $respuesta_31 = 'siendo innecesario que estos ultimos conozcan la identidad';
    $respuesta_32 = 'los primeros';
    $respuesta_33 = 'hacer que los interesados se registren en los sensores';
    $respuesta_34 = 'de modo que estos le notifiquen';
    $respuesta_35 = 'los interesados cuando detecten algo importante';
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
        
        // Soluciones del SVG
$respuesta_122 = ':ForkJoinMaster';
$respuesta_123 = 'ThreadPool';
$respuesta_124 = ':Thread';
$respuesta_125 = ':ForkJoinTask';
$respuesta_126 = ':Thread';
$respuesta_127 = ':ForkJoinTask';
$respuesta_128 = 'ForkJoinMaster(FT)';
$respuesta_129 = 'invoke()';
$respuesta_130 = 'execute(FT)';
$respuesta_131 = 'run()';
$respuesta_132 = 'compute()';
$respuesta_133 = 'run()';
$respuesta_134 = 'compute()';
$respuesta_135 = 'fork()';
$respuesta_136 = 'join()';
$respuesta_137 = 'fork()';
$respuesta_138 = 'join()';

// Cambiar el loop de marcar correctas hasta 138
for ($i = 1; $i <= 138; $i++) {
    ${"verificar_$i"} = "correcto";
}

 

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'replicacion de datos globales') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'la fusion de los resultados de las tareas individuales en calculos globales') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'Separable Dependencies Design Pattern') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'Master') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'Worker') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'Task') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'ThreadPool') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'arquitectonica') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'proxy-cache') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'hay datos duplicables para ser consultados muchas veces por muchos clientes') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'hacer que los clientes interactuen con una copia de la receta guardada en nodos de procesamiento intermedio') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'Reliable messaging') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'Broker') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'Producers-Consumers') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'broker') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'hay multiples clientes de software que deben interactuar con multiples servidores de software') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'la escogencia de cual servidor atiende a un cliente dado') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'se resuelve por un criterio dado') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'dinamicamente') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'hacer que tanto clientes como servidores se registren en el componente que resuelve que servidor debe atender a que cliente') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'Un patron de diseño arquitectonico aplicado en un contexto erroneo lo hace interpretar como un patron de diseño detallado') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'mientras que lo contrario es falso') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'El alcance de la aplicacion de un patron de diseño detallado es bien localizado en una porcion delimitada y no significativa del sistema') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'Proxy-cache') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'Publisher-subscriber') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'Broker') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'detallada') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'publisher-suscriber') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'componentes de software interesados') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'enterarse de cambios de estado de otros componentes') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'siendo innecesario que estos ultimos conozcan la identidad') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'los primeros') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'hacer que los interesados se registren en los sensores') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'de modo que estos le notifiquen') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'los interesados cuando detecten algo importante') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === '64') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === '80') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === '96') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === '112') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === '128') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === '144') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === '160') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === '176') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === '192') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === '34') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === '51') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === '68') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === '85') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === '102') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === '119') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === '136') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === '153') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === '170') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === '187') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === '204') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === '36') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === '54') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === '72') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
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

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === '180') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === '198') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === '216') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === '38') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === '57') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === '76') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === '95') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === '114') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === '133') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === '152') { 
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


// ===== INPUTS DEL DIAGRAMA SVG =====
$answers = [
    122 => 'Client',        // Header 1
    123 => 'ForkJoinMaster',// Header 2
    124 => 'ThreadPool',    // Header 3
    125 => ':ForkJoinTask',        // Header 4
    126 => 'Task',          // Header 5
    127 => 'Result',        // Header 6
    128 => 'request()',     // Mensaje 1
    129 => 'compute()',     // Mensaje 2
    130 => 'fork()',        // Mensaje 3
    131 => 'execute()',     // Mensaje 4
    132 => 'assign()',      // Mensaje 5
    133 => 'run()',         // Mensaje 6
    134 => 'join()',        // Mensaje 7
    135 => 'for each worker',  // Loop1-a
    136 => 'submit task',      // Loop1-b
    137 => 'for each task',    // Loop2-a
    138 => 'collect result',   // Loop2-b
];

foreach ($answers as $i => $correct) {
    ${"respuesta_$i"} = isset($_POST["respuesta_$i"]) ? $_POST["respuesta_$i"] : '';
    if (${"respuesta_$i"} === $correct) {
        ${"verificar_$i"} = "correcto";
    } elseif (${"respuesta_$i"} === '') {
        ${"verificar_$i"} = '';
    } else {
        ${"verificar_$i"} = "incorrecto";
    }
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

 
    <title>Respuesta Correcta</title>
</head>
<body>

    <p>
        Si tenemos que diseñar una solución de software para un problema que requiere
        procesamiento de un gran volumen de datos con la mejor latencia posible, y se
        puede seguir una estrategia de divide y vencerás, entonces el patrón de diseño
        más adecuado para aplicar, sabiendo que facilita la descomposición al eliminar
        las dependencias entre tareas simples a través de la 
        <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="26">
         
        y 
        <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="66">
         , es:
        <strong>
        <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="35">    
         </strong>.
    </p>

    <h3>Componentes del patrón</h3>

    <ol>
        <li>
        <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">    
         : <strong>VERDADERO</strong></li>
        <li>
        <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">    
         : <strong>VERDADERO</strong></li>
        <li>
        <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">    
         : <strong>VERDADERO</strong></li>
        <li>Thread: <strong>FALSO</strong></li>
        <li>
        <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">    
         : <strong>VERDADERO</strong></li>
        <li>ForkJoinMaster: <strong>FALSO</strong></li>
        <li>Queue: <strong>FALSO</strong></li>
        <li>Producer: <strong>FALSO</strong></li>
        <li>Consumer: <strong>FALSO</strong></li>
        <li>ForkJoinTask: <strong>FALSO</strong></li>
    </ol>
     <button type="submit">Enviar</button> 
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?>  
    <hr>

 <h4>Complete el diagrama de secuencia del flujo normal de eventos del patrón ForkJoin</h4>
  <p>Coloque en cada espacio el elemento correcto tomado del banco de respuestas.</p>
  


<svg style="width:100%; height:auto; display:block; margin-top:20px;"
     viewBox="0 0 1150 400" xmlns="http://www.w3.org/2000/svg">

  <defs>
    <marker id="arrR" viewBox="0 0 10 10" refX="10" refY="5" markerWidth="6" markerHeight="6" orient="auto">
      <path d="M0 1L10 5L0 9Z" fill="#333"/>
    </marker>
    <style>
      .header-box { fill: #ffffff; stroke: #333333; stroke-width: 1; }
      .header-top { fill: #5bc0de; stroke: #333333; stroke-width: 1; }
      .lifeline { stroke: #666666; stroke-width: 1; stroke-dasharray: 4 4; }
      .activation { fill: #7fd2ec; stroke: #333333; stroke-width: 1; }
      .msg-line { stroke: #333333; stroke-width: 1; }
    </style>
  </defs>

  <rect width="1150" height="400" fill="#ffffff" stroke="#333333" stroke-width="1"/>

  <!-- Actor (usuario) -->
  <circle cx="35" cy="20" r="6" fill="white" stroke="#333" stroke-width="1.2"/>
  <line x1="35" y1="26" x2="35" y2="42" stroke="#333" stroke-width="1.2"/>
  <line x1="23" y1="32" x2="47" y2="32" stroke="#333" stroke-width="1.2"/>
  <line x1="35" y1="42" x2="27" y2="55" stroke="#333" stroke-width="1.2"/>
  <line x1="35" y1="42" x2="43" y2="55" stroke="#333" stroke-width="1.2"/>
  <line x1="35" y1="55" x2="35" y2="385" stroke="#666666" stroke-width="1" stroke-dasharray="4 4"/>

  <!-- Header 1: respuesta_122 -->
  <rect x="165" y="15" width="120" height="30" class="header-box"/>
  <rect x="165" y="15" width="120" height="5" class="header-top"/>
  <rect x="280" y="15" width="5" height="30" class="header-top"/>
  <foreignObject x="167" y="20" width="116" height="22">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_122" name="respuesta_122"
           value="<?php echo htmlspecialchars($respuesta_122); ?>"
           class="<?php echo $verificar_122; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;font-family:sans-serif;text-align:center;outline:none;"/>
  </foreignObject>
  <line x1="225" y1="45" x2="225" y2="385" class="lifeline"/>

  <!-- Header 2: respuesta_123 -->
  <rect x="330" y="15" width="110" height="30" class="header-box"/>
  <rect x="330" y="15" width="110" height="5" class="header-top"/>
  <rect x="435" y="15" width="5" height="30" class="header-top"/>
  <foreignObject x="332" y="20" width="106" height="22">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_123" name="respuesta_123"
           value="<?php echo htmlspecialchars($respuesta_123); ?>"
           class="<?php echo $verificar_123; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;font-family:sans-serif;text-align:center;outline:none;"/>
  </foreignObject>
  <line x1="385" y1="45" x2="385" y2="385" class="lifeline"/>

  <!-- Header 3: respuesta_124 -->
  <rect x="480" y="15" width="110" height="30" class="header-box"/>
  <rect x="480" y="15" width="110" height="5" class="header-top"/>
  <rect x="585" y="15" width="5" height="30" class="header-top"/>
  <foreignObject x="482" y="20" width="106" height="22">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_124" name="respuesta_124"
           value="<?php echo htmlspecialchars($respuesta_124); ?>"
           class="<?php echo $verificar_124; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;font-family:sans-serif;text-align:center;outline:none;"/>
  </foreignObject>
  <line x1="535" y1="45" x2="535" y2="385" class="lifeline"/>

  <!-- Header 4: respuesta_125 -->
  <rect x="650" y="15" width="110" height="30" class="header-box"/>
  <rect x="650" y="15" width="110" height="5" class="header-top"/>
  <rect x="755" y="15" width="5" height="30" class="header-top"/>
  <foreignObject x="652" y="20" width="106" height="22">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_125" name="respuesta_125"
           value="<?php echo htmlspecialchars($respuesta_125); ?>"
           class="<?php echo $verificar_125; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;font-family:sans-serif;text-align:center;outline:none;"/>
  </foreignObject>
  <line x1="705" y1="45" x2="705" y2="385" class="lifeline"/>

  <!-- Header 5: respuesta_126 -->
  <rect x="800" y="15" width="110" height="30" class="header-box"/>
  <rect x="800" y="15" width="110" height="5" class="header-top"/>
  <rect x="905" y="15" width="5" height="30" class="header-top"/>
  <foreignObject x="802" y="20" width="106" height="22">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_126" name="respuesta_126"
           value="<?php echo htmlspecialchars($respuesta_126); ?>"
           class="<?php echo $verificar_126; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;font-family:sans-serif;text-align:center;outline:none;"/>
  </foreignObject>
  <line x1="855" y1="45" x2="855" y2="385" class="lifeline"/>

  <!-- Header 6: respuesta_127 -->
  <rect x="950" y="15" width="120" height="30" class="header-box"/>
  <rect x="950" y="15" width="120" height="5" class="header-top"/>
  <rect x="1065" y="15" width="5" height="30" class="header-top"/>
  <foreignObject x="952" y="20" width="116" height="22">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_127" name="respuesta_127"
           value="<?php echo htmlspecialchars($respuesta_127); ?>"
           class="<?php echo $verificar_127; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;font-family:sans-serif;text-align:center;outline:none;"/>
  </foreignObject>
  <line x1="1010" y1="45" x2="1010" y2="385" class="lifeline"/>

  <!-- Barras de activación -->
  <rect x="30" y="55" width="10" height="320" class="activation"/>
  <rect x="220" y="85" width="10" height="290" class="activation"/>
  <rect x="380" y="160" width="10" height="50" class="activation"/>
  <rect x="530" y="190" width="10" height="35" class="activation"/>
  <rect x="700" y="220" width="10" height="155" class="activation"/>
  <rect x="850" y="240" width="10" height="30" class="activation"/>
  <rect x="1005" y="260" width="10" height="115" class="activation"/>

  <!-- Mensaje 1: respuesta_128 -->
  <line x1="40" y1="90" x2="220" y2="90" class="msg-line" marker-end="url(#arrR)"/>
  <foreignObject x="70" y="65" width="130" height="22">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_128" name="respuesta_128"
           value="<?php echo htmlspecialchars($respuesta_128); ?>"
           class="<?php echo $verificar_128; ?>"
           style="width:100%;border:1px solid #ccc;font-size:14px;text-align:center;outline:none;"/>
  </foreignObject>

  <!-- Mensaje 2: respuesta_129 -->
  <line x1="40" y1="125" x2="220" y2="125" class="msg-line" marker-end="url(#arrR)"/>
  <foreignObject x="90" y="100" width="80" height="22">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_129" name="respuesta_129"
           value="<?php echo htmlspecialchars($respuesta_129); ?>"
           class="<?php echo $verificar_129; ?>"
           style="width:100%;border:1px solid #ccc;font-size:14px;text-align:center;outline:none;"/>
  </foreignObject>

  <!-- Mensaje 3: respuesta_130 -->
  <line x1="230" y1="160" x2="380" y2="160" class="msg-line" marker-end="url(#arrR)"/>
  <rect x="255" y="145" width="110" height="25" fill="white" stroke="#333333"/>
  <foreignObject x="257" y="148" width="106" height="20">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_130" name="respuesta_130"
           value="<?php echo htmlspecialchars($respuesta_130); ?>"
           class="<?php echo $verificar_130; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;text-align:center;outline:none;"/>
  </foreignObject>

  <!-- Mensaje 4: respuesta_131 -->
  <line x1="390" y1="190" x2="530" y2="190" class="msg-line" marker-end="url(#arrR)"/>
  <rect x="415" y="175" width="100" height="25" fill="white" stroke="#333333"/>
  <foreignObject x="417" y="178" width="96" height="20">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_131" name="respuesta_131"
           value="<?php echo htmlspecialchars($respuesta_131); ?>"
           class="<?php echo $verificar_131; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;text-align:center;outline:none;"/>
  </foreignObject>

  <!-- Mensaje 5: respuesta_132 -->
  <line x1="540" y1="220" x2="700" y2="220" class="msg-line" marker-end="url(#arrR)"/>
  <rect x="565" y="205" width="90" height="25" fill="white" stroke="#333333"/>
  <foreignObject x="567" y="208" width="86" height="20">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_132" name="respuesta_132"
           value="<?php echo htmlspecialchars($respuesta_132); ?>"
           class="<?php echo $verificar_132; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;text-align:center;outline:none;"/>
  </foreignObject>

  <line x1="390" y1="235" x2="700" y2="235" class="msg-line" stroke-width="1"/>

  <!-- Mensaje 6: respuesta_133 -->
  <line x1="710" y1="250" x2="850" y2="250" class="msg-line" marker-end="url(#arrR)"/>
  <rect x="735" y="235" width="95" height="25" fill="white" stroke="#333333"/>
  <foreignObject x="737" y="238" width="91" height="20">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_133" name="respuesta_133"
           value="<?php echo htmlspecialchars($respuesta_133); ?>"
           class="<?php echo $verificar_133; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;text-align:center;outline:none;"/>
  </foreignObject>

  <!-- Mensaje 7: respuesta_134 -->
  <line x1="860" y1="270" x2="1005" y2="270" class="msg-line" marker-end="url(#arrR)"/>
  <rect x="885" y="255" width="100" height="25" fill="white" stroke="#333333"/>
  <foreignObject x="887" y="258" width="96" height="20">
    <input xmlns="http://www.w3.org/1999/xhtml"
           type="text"
           id="respuesta_134" name="respuesta_134"
           value="<?php echo htmlspecialchars($respuesta_134); ?>"
           class="<?php echo $verificar_134; ?>"
           style="width:100%;border:none;background:transparent;font-size:14px;text-align:center;outline:none;"/>
  </foreignObject>

  <!-- Loop 1 -->
  <g transform="translate(675, 275)">
    <rect width="150" height="85" fill="white" stroke="#333" stroke-width="1"/>
    <polygon points="0,0 15,0 0,15" fill="white" stroke="#333" stroke-width="1"/>
    <line x1="0" y1="15" x2="15" y2="15" stroke="#333" stroke-width="1"/>
    <line x1="15" y1="0" x2="15" y2="15" stroke="#333" stroke-width="1"/>

    <!-- Loop1-a: respuesta_135 -->
    <path d="M 30,15 L 45,15 L 45,35 L 30,35" fill="none" stroke="#333" stroke-width="1.2" marker-end="url(#arrR)"/>
    <rect x="30" y="20" width="5" height="15" fill="white" stroke="#333" stroke-width="1"/>
    <foreignObject x="53" y="15" width="90" height="22">
      <input xmlns="http://www.w3.org/1999/xhtml"
             type="text"
             id="respuesta_135" name="respuesta_135"
             value="<?php echo htmlspecialchars($respuesta_135); ?>"
             class="<?php echo $verificar_135; ?>"
             style="width:100%;border:1px solid #ccc;font-size:14px;text-align:left;outline:none;"/>
    </foreignObject>

    <!-- Loop1-b: respuesta_136 -->
    <path d="M 30,50 L 45,50 L 45,70 L 30,70" fill="none" stroke="#333" stroke-width="1.2" marker-end="url(#arrR)"/>
    <rect x="30" y="55" width="5" height="15" fill="white" stroke="#333" stroke-width="1"/>
    <foreignObject x="53" y="50" width="90" height="22">
      <input xmlns="http://www.w3.org/1999/xhtml"
             type="text"
             id="respuesta_136" name="respuesta_136"
             value="<?php echo htmlspecialchars($respuesta_136); ?>"
             class="<?php echo $verificar_136; ?>"
             style="width:100%;border:1px solid #ccc;font-size:14px;text-align:left;outline:none;"/>
    </foreignObject>
  </g>

  <!-- Loop 2 -->
  <g transform="translate(975, 275)">
    <rect width="165" height="85" fill="white" stroke="#333" stroke-width="1"/>
    <polygon points="0,0 15,0 0,15" fill="white" stroke="#333" stroke-width="1"/>
    <line x1="0" y1="15" x2="15" y2="15" stroke="#333" stroke-width="1"/>
    <line x1="15" y1="0" x2="15" y2="15" stroke="#333" stroke-width="1"/>

    <!-- Loop2-a: respuesta_137 -->
    <path d="M 35,15 L 50,15 L 50,35 L 35,35" fill="none" stroke="#333" stroke-width="1.2" marker-end="url(#arrR)"/>
    <rect x="35" y="20" width="5" height="15" fill="white" stroke="#333" stroke-width="1"/>
    <foreignObject x="58" y="15" width="100" height="22">
      <input xmlns="http://www.w3.org/1999/xhtml"
             type="text"
             id="respuesta_137" name="respuesta_137"
             value="<?php echo htmlspecialchars($respuesta_137); ?>"
             class="<?php echo $verificar_137; ?>"
             style="width:100%;border:1px solid #ccc;font-size:14px;text-align:left;outline:none;"/>
    </foreignObject>

    <!-- Loop2-b: respuesta_138 -->
    <path d="M 35,50 L 50,50 L 50,70 L 35,70" fill="none" stroke="#333" stroke-width="1.2" marker-end="url(#arrR)"/>
    <rect x="35" y="55" width="5" height="15" fill="white" stroke="#333" stroke-width="1"/>
    <foreignObject x="58" y="50" width="100" height="22">
      <input xmlns="http://www.w3.org/1999/xhtml"
             type="text"
             id="respuesta_138" name="respuesta_138"
             value="<?php echo htmlspecialchars($respuesta_138); ?>"
             class="<?php echo $verificar_138; ?>"
             style="width:100%;border:1px solid #ccc;font-size:14px;text-align:left;outline:none;"/>
    </foreignObject>
  </g>

</svg>
 
  <br>
  <button type="submit" class="btn btn-primary mt-2">Verificar</button>
 <?php echo $verificar_122 ?>
<?php echo $verificar_123 ?>
<?php echo $verificar_124 ?>
<?php echo $verificar_125 ?>
<?php echo $verificar_126 ?>
<?php echo $verificar_127 ?>
<?php echo $verificar_128 ?>
<?php echo $verificar_129 ?>
<?php echo $verificar_130 ?>
<?php echo $verificar_131 ?>
<?php echo $verificar_132 ?>
<?php echo $verificar_133 ?>
<?php echo $verificar_134 ?>
<?php echo $verificar_135 ?>
<?php echo $verificar_136 ?>
<?php echo $verificar_137 ?>
<?php echo $verificar_138 ?>
<hr>
 <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%;">
    <tr>
        <th>Proyecto</th>
        <td>Sistema de administración remota para máquinas de café</td>
    </tr>

    <tr>
        <th>Escenario y contexto</th>
        <td>
            Agregar de manera remota un producto adicional a las recetas (productos)
            de todas las máquinas de café del sistema, que cuenta con 3500 máquinas;
            el sistema debe permitir agregarlo, interrumpiendo la operación de las
            máquinas en no más de 2 minutos.
        </td>
    </tr>

    <tr>
        <th>Objetivo del negocio</th>
        <td>
            Aumentar el portafolio de productos para ofrecerle más opciones al cliente
            y tener mayor oportunidad de venta. Minimizar costos operativos.
        </td>
    </tr>

    <tr>
        <th>QA's Relevantes</th>
        <td>Configurabilidad, disponibilidad</td>
    </tr>

    <tr>
        <th>Estímulo</th>
        <td>Añadir nuevos productos (recetas) sin que implique nuevos ingredientes</td>
    </tr>

    <tr>
        <th>Fuente de Estímulo</th>
        <td>
            El negocio lanza nuevo producto (bebida de café) para vender en sus máquinas.
        </td>
    </tr>

    <tr>
        <th>Artefacto(s)</th>
        <td>
            Componente producto/receta, componente de comunicación entre Máquina de Café
            y AdminRemota (si lo hay), componente de interfaz de usuario de administración remota.
        </td>
    </tr>

    <tr>
        <th>Respuesta</th>
        <td>
            Producto nuevo agregado a las recetas de todas las máquinas de café.
        </td>
    </tr>

    <tr>
        <th>Medida de Respuesta</th>
        <td>2 minutos (deadline)</td>
    </tr>

    <tr>
        <th>Preguntas Relevantes</th>
        <td></td>
    </tr>

    <tr>
        <th>Otros Aspectos</th>
        <td>
            Un servidor puede actualizar a máximo 1000 máquinas de café al tiempo,
            en 1.5 minutos.
        </td>
    </tr>
</table>
  <p>En el escenario descrito, un patrón de diseño que puede aplicarse en forma
</p>


 <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="11">
    <br><br>
 <button type="submit">Enviar</button>
    <?php echo $verificar_8 ?>
    <hr>
    <p>para actualizar las recetas de una nueva bebida en todas las máquinas de café desde el administrador central se denomina</p>
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="11">
    <p>es aplicable (adaptada al problema) cuando:</p>
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="69">
    y la solución (adaptada al problema) establece que se debe:
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="100">

        <br><br>
 <button type="submit">Enviar</button>
    <?php echo $verificar_8 ?>
     <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?> 
    <hr>

</div>




<div class="seccion derecha">
    <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%;">
    <tr>
        <td><strong>PROYECTO:</strong></td>
        <td>Sistema de Control del MIO</td>
    </tr>

    <tr>
        <td><strong>ESCENARIO QAW:</strong></td>
        <td>
            En la proyección del SITM-MIO se contará con 3000 buses en la ciudad, y ésta estará dividida en regiones
            (e.g., norte, sur, oriente y occidente), cada región con su DataCenter.
            Todos los buses enviarán sus datagramas (datos de los 40 sensores de cada bus) cada 20 segundos al
            DataCenter que tengan más cercano, en cada momento.
            Cada datagrama tiene un tipo de evento (accidente, movilidad lenta, etc.).
            En cada DataCenter se reciben los datagramas en una cola, y cada tipo de datagrama es procesado por un
            tipo de componente especializado respectivamente.
            Con esta cantidad de mensajes, eventualmente los DataCenter pueden colapsar o perder datagramas.
            Es crítico <strong>no perder ninguno</strong> de estos datagramas para mantener una operación con acción
            oportuna frente a eventualidades de la misma, y lo que implica cada datagrama debe reflejarse
            <strong>inmediatamente</strong> en el Administrador Centralizado.
        </td>
    </tr>

    <tr>
        <td><strong>META DE NEGOCIO:</strong></td>
        <td>
            Maximizar la confiabilidad y disponibilidad de las funciones de los DataCenter para no perder
            datagramas y cumplir mejor los planes de servicio de operación.
        </td>
    </tr>
</table>

<br>

<table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%;">
    <tr>
        <td rowspan="8" style="writing-mode: vertical-rl; text-align: center;">
            <strong>ELEMENTOS</strong>
        </td>
        <td><strong>ATRIBUTO DE CALIDAD:</strong></td>
        <td>Confiabilidad / Concurrencia / Desempeño.</td>
    </tr>

    <tr>
        <td><strong>ESTÍMULO:</strong></td>
        <td>Muchos datagramas llegando a los DataCenter desde los buses, concurrentemente.</td>
    </tr>

    <tr>
        <td><strong>FUENTE DE ESTÍMULO:</strong></td>
        <td>
            Operación de muchos buses rodando por la ciudad, cumpliendo con sus tareas en el plan de servicio de operación.
        </td>
    </tr>

    <tr>
        <td><strong>MEDIO AMBIENTE:</strong></td>
        <td>Operación diaria del SITM-MIO.</td>
    </tr>

    <tr>
        <td><strong>ARTEFACTOS:</strong></td>
        <td>
            Componentes encargados de enviar los datagramas en los buses,
            componente que recibe los datagramas en los DataCenter.
        </td>
    </tr>

    <tr>
        <td><strong>RESPUESTA:</strong></td>
        <td>
            Los DataCenter reciben el 100% de los datagramas (no pierde ninguno)
            y los procesan rápidamente.
        </td>
    </tr>

    <tr>
        <td><strong>MEDIDA DE LA RESPUESTA:</strong></td>
        <td>
            100% de los datagramas recibidos y procesados eficientemente.
        </td>
    </tr>

    <tr>
        <td><strong>PREGUNTAS / Aspectos relacionados:</strong></td>
        <td>
            Un nodo de procesamiento puede recibir y procesar simultáneamente
            1000 datagramas sin perder ninguno.
        </td>
    </tr>
</table>

<p>Indique cúales patrones de diseño combinaría para satisfacer el escenario de QAW, y plantee en nu
diagrama de deployment cómo los introduciría en su diseñо:</p>

<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="16">
<input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="5">
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="21">

<br><br>
<button type="submit">Enviar</button>
<?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
        <hr>

    <p>
    En los espacios en blanco, escriba todo en minúsculas, nombres en inglés.
En la generalización del SITM-MIO, para una ciudad grande, se ha dividido la ciudad en 4 regiones: norte, sur, este y oeste. Estas regiones podrían
cambiar cuando la ciudad crezca.
    </p>

    <p>
Para el almacenamiento, se ha dispuesto que cada región tenga su centro de acopio de datos (DataCenter), de modo que los datos de tráfico de los
BUSES que tansitan por una región deben almacenarse en el DataCenter respectivo, al igual que los datos de las ESTACIONES que pertenecen a dicha
región.
    </p>

    <p>El patrón de diseño 
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">
    es aplicable (adaptado al problema) cuando:
    </p>

    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="86">;
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="51">,
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="27">,
    <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="11">
    <p> 
</p>

    <p>
    y la solución (adaptada al problema) establece que se debe:
    </p>
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="115">

    <button type="submit">Enviar</button>
     <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?> 
    <?php echo $verificar_20 ?>
    <hr>
    <p>Son diferencias entre un patrón de diseño arquitectónico y un patrón de diseño detallado:</p>
    
    <li>
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="115">,
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="31">
    </li> 

    <li>
<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="125">
    </li>

    <button type="submit">Enviar</button>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>

    <hr>
    <p>
    Dado el siguiente escenario de QAW, cuáles patrones de diseño combinaría como los más
adecuados para resolverlo?
    </p>
 


<table>
<tr>
    <th>Proyecto</th>
    <td>Sistema de administración remota para máquinas de café</td>
</tr>

<tr>
    <th>Escenario y contexto</th>
    <td>
        Agregar de manera remota un producto adicional a las recetas (productos) de todas las máquinas de café del sistema, que cuenta con 3500 máquinas; el sistema debe permitir agregarlo, interrumpiendo la operación de las máquinas en no más de 2 minutos.
    </td>
</tr>

<tr>
    <th>Objetivo del negocio</th>
    <td>
        Aumentar el portafolio de productos para ofrecerle más opciones al cliente y tener mayor oportunidad de venta. Minimizar costos operativos.
    </td>
</tr>

<tr>
    <th>QA’s Relevantes</th>
    <td>
        Configurabilidad, disponibilidad
    </td>
</tr>

<tr>
    <th>Estímulo</th>
    <td>
        Añadir nuevos productos (recetas) sin que implique nuevos ingredientes
    </td>
</tr>

<tr>
    <th>Fuente de Estímulo</th>
    <td>
        El negocio lanza nuevo producto (bebida de café) para vender en sus máquinas
    </td>
</tr>

<tr>
    <th>Artefacto(s)</th>
    <td>
        Componente producto/receta, componente de comunicación entre Máquina de Café y AdminRemota (si lo hay), componente de interfaz de usuario de administración remota.
    </td>
</tr>

<tr>
    <th>Respuesta</th>
    <td>
        Producto nuevo agregado a las recetas de todas las máquinas de café.
    </td>
</tr>

<tr>
    <th>Medida de Respuesta</th>
    <td>
        2 minutos (deadline)
    </td>
</tr>

<tr>
    <th>Preguntas Relevantes</th>
    <td>
        — 
    </td>
</tr>

<tr>
    <th>Otros Aspectos</th>
    <td>
        Un servidor puede actualizar a máximo 1000 máquinas de café al tiempo, en 1.5 minutos.
    </td>
</tr>

</table>


 <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="31">
<input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="31">
<input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="31">

<br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>
    <?php echo $verificar_26 ?>
    <hr>
    <p>
    En los espacios en blanco, escriba todo en minúsculas, nombres en inglés.
Considere el siguiente sistema de software de un avión que usted y su empresa han aceptado desarrollar:
al
Hay muchos sensores en los aviones, entre ellos de velocidad, altitud y presión de la cabina. Estos sensores deben estar continuamente enviando datos
sistema central. Éste debe analizar la situación en cada momento, actualizando inmediatamente las visualizaciones del tablero de control
correspondientes a los sensores conectados, identificar las situaciones de peligro, y en tal caso, informar a los componentes externos que se encargan
de tratar estas situaciones (luces de alarma, sonidos de alarma, dispositivo de control de las máscaras de oxígeno, señales de alerta a torres de control
cercanas).
En el escenario descrito, el patrón de diseño que duede aplicarse en forma
    </p>
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">

    <p>para resolver el problema dado, se denomina  
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="15">
y es aplicable (adaptado al problema) cuando:
</p>

hay 
<input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="33">
  en 
<input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="51">
  , 
<input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="54">
  de 
<input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="11">
 <!-- #region -->
 

<p>
y la solución (adaptada al problema) establece que se debe:
</p>
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="47">
 , 
 <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="31">
  a 
 <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="47">
  
    <br><br>
    <button type="submit">Enviar</button>
    <?php echo $verificar_27 ?>
    <?php echo $verificar_28 ?>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
     <?php echo $verificar_31 ?>
    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>
    <hr>

    

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
