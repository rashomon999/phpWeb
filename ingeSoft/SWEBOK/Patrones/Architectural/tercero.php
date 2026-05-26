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
        
 
        $respuesta_1 = '26';
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
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'Broker') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'locateServer()') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'locateClient()') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'registerServer()') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'unregisterServer()') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'Client-Side Proxy') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'pack_data()') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'unpack_data()') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'send_request()') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'return()') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'Server-Side Proxy') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'pack_data()') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'unpack_data()') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'call_service()') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'send_response()') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'Client') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'call_server()') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'start_task()') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'use_Broker_API()') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'Bridge') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'pack_data()') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'unpack_data()') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'forward_message()') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'transmit_message()') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'Server') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'initialize()') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'enter_main_loop()') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'run_service()') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'use_Broker_API()') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'arquitectura orientada a servicios') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'SOA') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'enterprise service bus') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'software') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'interfaz') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'usuario') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'la parte') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'aplicacion interactiva') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'modifica') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'mayor frecuencia') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'mantener separadas') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'modificaciones') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'software') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'interfaz de usuario') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'resto del sistema') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'usuarios') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'desean') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'los datos') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'diferentes perspectivas') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'grafico de barras') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'grafico circular') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'representaciones') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'reflejar') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'estado') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'datos') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'que contiene los datos de la aplicacion') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'que muestra una parte de los datos subyacentes') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'interactua con el usuario') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'que media entre el modelo') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'la vista') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'administra las notificaciones de cambios de estado') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'no es apropiado para todas las situaciones') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'diseño') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'implementacion') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'tres tipos distintos') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'diversas') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'interaccion') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'costoso') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'no tener sentido') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'interfaces de usuario relativamente simples') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'correspondencia') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'abstracciones') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'kits comerciales') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'herramientas') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'interfaces de usuario') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'perfecta') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'separan') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'entrada') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'salida') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'funciones') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'combinadas') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'widgets individuales') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'incompatibilidad') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'arquitectura') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'kit de herramientas') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'interfaz de usuario') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'notifica') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'notifies') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'conecta instancias') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'la vista y el controlador') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'al menos una instancia') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'no debe interactuar directamente') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'no justificarse') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'no adaptarse bien') { 
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
     .wrapper {
      max-width: 720px;
      width: 100%;
    }
 
    h1 {
      font-family: 'Playfair Display', 'Times New Roman', serif;
      font-size: 1.9rem;
      letter-spacing: 0.02em;
      color: var(--accent);
      margin-bottom: 0.3rem;
    }
 
    .subtitle {
      font-size: 0.85rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: #7a7060;
      margin-bottom: 2rem;
    }
 
    table {
      width: 100%;
      border-collapse: collapse;
      border-top: 2px solid var(--ink);
      border-bottom: 2px solid var(--ink);
    }
 
    tr {
      border-bottom: 1px solid var(--rule);
    }
 
    tr:last-child {
      border-bottom: none;
    }
 
    td {
      padding: 1rem 1.2rem;
      vertical-align: top;
      font-size: 0.95rem;
      line-height: 1.7;
    }
 
    td:first-child {
      font-family: 'Playfair Display', serif;
      font-size: 0.82rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--accent);
      white-space: nowrap;
      width: 130px;
      padding-top: 1.1rem;
    }
 
    td:last-child {
      border-left: 1px solid var(--rule);
    }
 
    em {
      font-style: italic;
      font-weight: 400;
    }
 
    p + p {
      margin-top: 0.7rem;
    }
 
    tr:nth-child(even) td {
      background: var(--highlight);
    }


   * { box-sizing: border-box; margin: 0; padding: 0; }
  hola {
    font-family: Georgia, serif;
    background: #d4d0c8;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 24px;
    min-height: 100vh;
  }
  .diagram {
    background: #d4d0c8;
    padding: 20px;
    width: 780px;
  }
  .uml-class {
    background: #fff;
    border: 1.5px solid #222;
    font-size: 13px;
    font-family: Georgia, serif;
    position: absolute;
  }
  .uml-class .header {
    background: #fff;
    border-bottom: 1.5px solid #222;
    padding: 4px 8px;
    font-weight: bold;
    text-align: center;
    font-size: 13px;
  }
  .uml-class .body {
    padding: 4px 8px;
    line-height: 1.6;
    font-size: 12px;
  }
  .canvas {
    position: relative;
    width: 740px;
    height: 520px;
  }
  svg.lines {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    overflow: visible;
    pointer-events: none;
  }
  .lbl {
    font-size: 12px;
    font-family: Georgia, serif;
    fill: #111;
  }


    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 310vh;
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

<form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
 
<p>
La versión original del patrón broker, tal como fue documentada por 
Gamma, Helm, Johnson y Vlissides [Gamma 94], se muestra en la Figura 13.6.
</p>

<div class="diagram">
  <div class="canvas">

    <!-- Broker (top center) -->
    <div class="uml-class" style="left:280px; top:20px; width:180px;">
      <div class="header">
      <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="15">  
       </div>
      <div class="body">
        +<input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="15">
         <br>
        +<input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="15">
        <br>
        +<input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="15">
        <br>
        +<input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="15">
        
      </div>
    </div>

    <!-- Client-Side Proxy (top left) -->
    <div class="uml-class" style="left:20px; top:60px; width:160px;">
      <div class="header">
      <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="15">  
       </div>
      <div class="body">
        +
        <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="15">
         
      </div>
    </div>

    <!-- Server-Side Proxy (top right) -->
    <div class="uml-class" style="left:560px; top:60px; width:160px;">
      <div class="header">
      <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="15">  
       </div>
      <div class="body">
        +
        <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="15">
         
      </div>
    </div>

    <!-- Client (bottom left) -->
    <div class="uml-class" style="left:20px; top:350px; width:150px;">
      <div class="header">
      <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="15">  
       </div>
      <div class="body">
        +<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="15">
         
      </div>
    </div>

    <!-- Bridge (bottom center) -->
    <div class="uml-class" style="left:270px; top:340px; width:180px;">
      <div class="header">
      <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="15">  
       </div>
      <div class="body">
        +
        <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="15">
         
      </div>
    </div>

    <!-- Server (bottom right) -->
    <div class="uml-class" style="left:555px; top:340px; width:165px;">
      <div class="header">
      <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="15">  
       </div>
      <div class="body">
        +
        <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="15">
         <br>
        +
        <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="15">        
         <br>
        +
        <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="15">
         
      </div>
    </div>

    <!-- SVG connector lines -->
    <svg class="lines">

      <!-- Broker ↔ Client-Side Proxy: horizontal line with multiplicity -->
      <!-- Broker left edge ~280, center y ~55 | CSProxy right edge ~180, center y ~110 -->
      <line x1="280" y1="65" x2="180" y2="100" stroke="#222" stroke-width="1.2"/>
      <text class="lbl" x="170" y="58">-transfers</text>
      <text class="lbl" x="248" y="58">1</text>
      <text class="lbl" x="174" y="112">*</text>

      <!-- Broker ↔ Server-Side Proxy -->
      <line x1="460" y1="65" x2="560" y2="100" stroke="#222" stroke-width="1.2"/>
      <text class="lbl" x="462" y="58">1</text>
      <text class="lbl" x="510" y="58">-transfers</text>
      <text class="lbl" x="554" y="112">*</text>

      <!-- Broker -call-> Bridge: vertical down, Broker bottom ~110 Bridge top ~340 -->
      <line x1="370" y1="145" x2="370" y2="340" stroke="#222" stroke-width="1.2"/>
      <text class="lbl" x="375" y="230">-call</text>
      <text class="lbl" x="346" y="245">1</text>
      <text class="lbl" x="346" y="335">0..1</text>

      <!-- Broker 1 — Client-Side Proxy 1 (horizontal inner) -->
      <line x1="280" y1="85" x2="180" y2="85" stroke="#222" stroke-width="1.2"/>
      <text class="lbl" x="200" y="80">1</text>
      <text class="lbl" x="258" y="80">1</text>

      <!-- Broker 1 — Server-Side Proxy 1 (horizontal inner) -->
      <line x1="460" y1="85" x2="560" y2="85" stroke="#222" stroke-width="1.2"/>
      <text class="lbl" x="462" y="80">1</text>
      <text class="lbl" x="538" y="80">1</text>

      <!-- Client-Side Proxy -call-> Client (vertical) -->
      <line x1="100" y1="185" x2="100" y2="350" stroke="#222" stroke-width="1.2"/>
      <text class="lbl" x="106" y="290">-call</text>
      <text class="lbl" x="75" y="285">1</text>
      <text class="lbl" x="75" y="355">*</text>

      <!-- Client -uses-> Bridge (horizontal) -->
      <line x1="170" y1="390" x2="270" y2="390" stroke="#222" stroke-width="1.2"/>
      <text class="lbl" x="188" y="383">-uses</text>
      <text class="lbl" x="258" y="403">*</text>

      <!-- Server-Side Proxy -call-> Server (vertical) -->
      <line x1="638" y1="185" x2="638" y2="340" stroke="#222" stroke-width="1.2"/>
      <text class="lbl" x="644" y="290">-call</text>
      <text class="lbl" x="616" y="285">1</text>
      <text class="lbl" x="616" y="355">*</text>

      <!-- Bridge -uses-> Server (horizontal) -->
      <line x1="450" y1="395" x2="555" y2="395" stroke="#222" stroke-width="1.2"/>
      <text class="lbl" x="465" y="388">-uses</text>

    </svg>
  </div>
</div>
<p>
La primera implementación ampliamente utilizada del patrón broker fue 
la <strong>Common Object Request Broker Architecture (CORBA)</strong>.
</p>

<p>
Otros usos comunes de este patrón se encuentran en 
<strong>Enterprise Java Beans (EJB)</strong> y en la plataforma 
<strong>.NET</strong> de Microsoft; esencialmente, cualquier plataforma moderna 
para proveedores y consumidores de servicios distribuidos implementa alguna forma 
de broker.
</p>

<p>
El enfoque de <strong>
<input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="25">    
  (
  <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="3">  
   )</strong> depende 
crucialmente de los brokers, más comúnmente en la forma de un 
<strong>
<input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="15">    
 </strong>.
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
<hr>
<h3>Patrón Modelo-Vista-Controlador (<em>Model-View-Controller Pattern</em>)</h3>

<p>
<strong>Contexto:</strong>  
El 
<input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="8">
  de 
<input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8">
  de 
<input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
  suele ser 
<input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">
  de una 
<input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="21">
que se 
<input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="8">
  con 
<input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="15">
.
</p>

<p>
Por esta razón, es importante 
<input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="15">
  las 
<input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="11">
  del 
<input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="8">
  de 
<input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="15">
  del 
<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="15">
 .
</p>

<p>
Los 
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="15">
  a menudo 
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="15">
visualizar 
<input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="15">
  desde 
<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="15">
 , 
como un 
<input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="15">
  o un 
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="15">
 .
</p>

<p>
Estas 
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="15">
  deben 
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="15">
  el 
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="15">
  actual de los 
<input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="15">
 .
</p>

    <button type="submit">Enviar</button>
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
    <?php echo $verificar_54 ?>
    <hr>
<p>
<strong>Problema:</strong> 
¿Cómo puede mantenerse separada la funcionalidad de la interfaz de usuario 
de la funcionalidad de la aplicación y, aun así, responder a la entrada del usuario 
o a cambios en los datos subyacentes de la aplicación?
</p>

<p>
¿Y cómo pueden crearse, mantenerse y coordinarse múltiples vistas de la interfaz 
de usuario cuando cambian los datos subyacentes de la aplicación?
</p>

<p>
<strong>Solución:</strong> 
El patrón modelo-vista-controlador (MVC) separa la funcionalidad de la aplicación 
en tres tipos de componentes:
</p>

<ul>
    <li>
        Un <strong>modelo (<em>model</em>)</strong>, 
        <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="35">
         .
    </li>

    <li>
        Una <strong>vista (<em>view</em>)</strong>, 
        <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="21">
          e 
        <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="15">
         .
    </li>

    <li>
        Un <strong>controlador (<em>controller</em>)</strong>, 
        <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="15">  
        y 
        <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="15">
         y 
        <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="15">
         .
    </li>
</ul>

<p>
MVC 
<input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="36">
 .
</p>

<p>
El 
<input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="11">
  e 
<input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="11">
  de 
<input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="11">
  de componentes, junto con sus 
<input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="11">
  formas de 
<input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="11">
 , puede resultar 
<input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="11">
 , y este costo puede 
<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="11">
  para 
<input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="41">
 .
</p>

<p>
Además, la 
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="11">
  entre las 
<input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="11">
  de MVC y los 
<input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="11">
  de 
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="11">
  para 
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="11">
  no es 
  <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="8">
   .
</p>

<p>
La vista y el controlador 
<input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="8">
  la 
<input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="8">
  y la 
<input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="8">
 , pero estas 
<input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="8">
  a menudo están 
<input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="8">
  en 
<input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="15">
 .
</p>

<p>
Esto puede generar una 
<input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="15">
  conceptual entre la 
<input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="15">
  y el 
<input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="15">
  de 
<input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="15">
 .
</p>

<button type="submit">Enviar</button>
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
<?php echo $verificar_80 ?>
<?php echo $verificar_81 ?>
<?php echo $verificar_82 ?>
<?php echo $verificar_83 ?>
<?php echo $verificar_84 ?>
<?php echo $verificar_85 ?>

<hr>
<p>
La Tabla 13.3 resume la solución del patrón MVC.
</p>

<p>
<strong>Tabla 13.3. Solución del Patrón Modelo-Vista-Controlador</strong>
</p>


    <table>
      <tbody>
        <tr>
          <td>Descripción</td>
          <td>
            <p>El patrón MVC divide la funcionalidad del sistema en tres componentes: un modelo, una vista y un controlador que actúa como mediador entre el modelo y la vista.</p>
          </td>
        </tr>
        <tr>
          <td>Elementos</td>
          <td>
            <p>El <em>modelo</em> es una representación de los datos o el estado de la aplicación, y contiene (o provee una interfaz hacia) la lógica de la aplicación.</p>
            <p>La <em>vista</em> es un componente de interfaz de usuario que produce una representación del modelo para el usuario, permite alguna forma de entrada por parte del usuario, o ambas cosas.</p>
            <p>El <em>controlador</em> gestiona la interacción entre el modelo y la vista, traduciendo las acciones del usuario en cambios sobre el modelo o sobre la vista.</p>
          </td>
        </tr>
        <tr>
          <td>Relaciones</td>
          <td>
            <p>La relación <em>
            <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="15">    
             </em>(
            <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="15">    
             ) 
            <input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="15">
              del modelo, 
            <input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="15">
             , informando a los elementos sobre los cambios de estado relevantes.</p>
          </td>
        </tr>
        <tr>
          <td>Restricciones</td>
          <td>
            <p>Debe existir 
            <input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="15">    
              de cada componente: modelo, vista y controlador.</p>
            <p>El componente modelo 
            <input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="28">    
              con el controlador.</p>
          </td>
        </tr>
        <tr>
          <td>Debilidades</td>
          <td>
            <p>La complejidad puede 
            <input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="28">    
              para interfaces de usuario simples.</p>
            <p>Las abstracciones de modelo, vista y controlador pueden 
            <input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="15">    
              a algunos conjuntos de herramientas de interfaz de usuario.</p>
          </td>
        </tr>
      </tbody>
    </table>

<button type="submit">Enviar</button>
<?php echo $verificar_86 ?>
<?php echo $verificar_87 ?>
<?php echo $verificar_88 ?>
<?php echo $verificar_89 ?>
<?php echo $verificar_90 ?>
<?php echo $verificar_91 ?>
<?php echo $verificar_92 ?>
<?php echo $verificar_93 ?>
<hr>

    <p>
Puede haber, de hecho, muchas vistas y muchos controladores asociados a un modelo.
</p>

<p>
Por ejemplo, un conjunto de datos de negocio puede representarse como columnas 
de números en una hoja de cálculo, como un gráfico de dispersión o como un gráfico circular.
</p>

<p>
Cada una de estas representaciones constituye una vista separada, y esta vista puede 
actualizarse dinámicamente a medida que cambia el modelo 
(por ejemplo, mostrando transacciones en vivo en un sistema de procesamiento de transacciones).
</p>

<p>
Un modelo puede ser actualizado por diferentes controladores; por ejemplo, un mapa podría 
ampliarse y desplazarse mediante movimientos del mouse, movimientos de trackball, pulsaciones 
del teclado o comandos de voz; cada una de estas diferentes formas de entrada necesita ser 
gestionada por un controlador.
</p>

 

</div>




<div class="seccion derecha">
 <p>
Los componentes MVC están conectados entre sí mediante algún tipo de mecanismo de notificación, 
como eventos o <em>callbacks</em>.
</p>

<p>
Estas notificaciones contienen actualizaciones de estado.
</p>

<p>
Un cambio en el modelo necesita comunicarse a las vistas para que puedan actualizarse.
</p>

<p>
Un evento externo, como una entrada del usuario, necesita comunicarse al controlador, 
el cual puede a su vez actualizar la vista y/o el modelo.
</p>

<p>
Las notificaciones pueden ser de tipo <em>push</em> o <em>pull</em>.
</p>

<p>
Debido a que estos componentes están débilmente acoplados, es fácil desarrollarlos 
y probarlos en paralelo, y los cambios en uno de ellos tienen un impacto mínimo 
sobre los demás.
</p>

<p>
Las relaciones entre los componentes de MVC se muestran en la Figura 13.7.
</p>


<div style="font-family: Georgia, serif; padding: 20px 0;">
  <div style="position:relative; width:620px; height:420px;">

    <!-- Boxes -->
    <div style="position:absolute; background:#6b7280; border-radius:14px; color:#fff; padding:12px 16px; left:190px; top:0; width:230px;">
      <div style="font-size:16px; font-weight:bold; text-align:center; margin-bottom:8px;">Model</div>
      <ul style="list-style:disc; padding-left:18px; font-size:11.5px; line-height:1.65;">
        <li>Encapsulates application state</li>
        <li>Responds to state queries</li>
        <li>Exposes application functionality</li>
        <li>Notifies views of changes</li>
      </ul>
    </div>

    <div style="position:absolute; background:#6b7280; border-radius:14px; color:#fff; padding:12px 16px; left:0; top:230px; width:235px;">
      <div style="font-size:16px; font-weight:bold; text-align:center; margin-bottom:8px;">View</div>
      <ul style="list-style:disc; padding-left:18px; font-size:11.5px; line-height:1.65;">
        <li>Renders the models</li>
        <li>Requests updates from models</li>
        <li>Sends user gestures to controller</li>
        <li>Allows controller to select view</li>
      </ul>
    </div>

    <div style="position:absolute; background:#6b7280; border-radius:14px; color:#fff; padding:12px 16px; left:370px; top:230px; width:240px;">
      <div style="font-size:16px; font-weight:bold; text-align:center; margin-bottom:8px;">Controller</div>
      <ul style="list-style:disc; padding-left:18px; font-size:11.5px; line-height:1.65;">
        <li>Defines application behavior</li>
        <li>Maps user actions to model updates</li>
        <li>Selects view for response</li>
        <li>One for each functionality</li>
      </ul>
    </div>

    <!-- SVG connectors -->
    <svg style="position:absolute; top:0; left:0; width:100%; height:100%; overflow:visible; pointer-events:none;">
      <defs>
        <marker id="mvc-ah" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="7" markerHeight="7" orient="auto-start-reverse">
          <path d="M0 0L10 5L0 10Z" fill="#444"/>
        </marker>
        <marker id="mvc-ahd" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="7" markerHeight="7" orient="auto-start-reverse">
          <path d="M0 0L10 5L0 10Z" fill="#777"/>
        </marker>
      </defs>

      <!-- State Query: View → Model (solid, margen izquierdo) -->
<polyline points="20,250 20,250 20,80 210,80"
        fill="none" stroke="#444" stroke-width="5" marker-end="url(#mvc-ah)"/>
      <text x="28" y="195" font-size="12" font-family="Georgia,serif" fill="#222" font-weight="bold">State</text>
      <text x="28" y="210" font-size="12" font-family="Georgia,serif" fill="#222" font-weight="bold">Query</text>

      <!-- Change Notification: Model → View (dashed) -->
      <polyline points="210,112 210,165 148,165 148,230"
        fill="none" stroke="#777" stroke-width="5" stroke-dasharray="10,6" marker-end="url(#mvc-ahd)"/>
      <text x="155" y="158" font-size="12" font-family="Georgia,serif" fill="#222" font-weight="bold">Change</text>
      <text x="155" y="172" font-size="12" font-family="Georgia,serif" fill="#222" font-weight="bold">Notification</text>

      <!-- State Change: Controller → Model (solid, margen derecho) -->
      <polyline points="570,265 570,265 570,60 420,60"
        fill="none" stroke="#444" stroke-width="5" marker-end="url(#mvc-ah)"/>
      <text x="530" y="195" font-size="12" font-family="Georgia,serif" fill="#222" font-weight="bold">State</text>
      <text x="522" y="210" font-size="12" font-family="Georgia,serif" fill="#222" font-weight="bold">Change</text>

      <!-- View Selection: Controller → View (solid) -->
      <polyline points="370,278 235,278"
        fill="none" stroke="#444" stroke-width="5" marker-end="url(#mvc-ah)"/>
      <text x="264" y="270" font-size="12" font-family="Georgia,serif" fill="#222" font-weight="bold">View Selection</text>

      <!-- User Gestures: View → Controller (dashed) -->
      <polyline points="235,310 370,310"
        fill="none" stroke="#777" stroke-width="5" stroke-dasharray="10,6" marker-end="url(#mvc-ahd)"/>
      <text x="252" y="328" font-size="12" font-family="Georgia,serif" fill="#222" font-weight="bold">User Gestures</text>
    </svg>
  </div>

  <!-- Leyenda -->
  <div style="border:1.5px solid #aaa; border-radius:8px; padding:12px 20px; display:inline-flex; flex-direction:column; gap:10px; margin-top:16px;">
    <span style="font-size:13px; font-weight:bold; font-family:Georgia,serif;">Key:</span>
    <div style="display:flex; align-items:center; gap:12px; font-size:12px; font-family:Georgia,serif;">
      <div style="width:90px; height:7px; background:#555; clip-path:polygon(0 20%,82% 20%,82% 0%,100% 50%,82% 100%,82% 80%,0 80%);"></div>
      <span>Method Invocations</span>
    </div>
    <div style="display:flex; align-items:center; gap:12px; font-size:12px; font-family:Georgia,serif;">
      <div style="width:90px; height:7px; background:repeating-linear-gradient(90deg,#777 0px,#777 8px,transparent 8px,transparent 13px); clip-path:polygon(0 20%,82% 20%,82% 0%,100% 50%,82% 100%,82% 80%,0 80%);"></div>
      <span>Events</span>
    </div>
  </div>
</div>


<p><strong>Figura 13.7. El patrón modelo-vista-controlador</strong></p>

<p>
El patrón MVC es ampliamente utilizado en bibliotecas de interfaces de usuario 
como las clases Swing de Java, el framework ASP.NET de Microsoft, el kit de desarrollo 
de software Flex de Adobe, el framework Qt de Nokia y muchos otros.
</p>

<p>
Como consecuencia, es común que una sola aplicación contenga muchas instancias de MVC 
(a menudo una por cada objeto de interfaz de usuario).
</p>


<h3>Patrón Pipe-and-Filter</h3>

<p>
<strong>Contexto:</strong> 
Muchos sistemas necesitan transformar flujos de elementos de datos discretos, 
desde la entrada hasta la salida.
</p>

<p>
Muchos tipos de transformaciones ocurren repetidamente en la práctica y, por lo tanto, 
es deseable crear estas transformaciones como partes independientes y reutilizables.
</p>

<p>
<strong>Problema:</strong> 
Estos sistemas necesitan dividirse en componentes reutilizables y débilmente acoplados, 
con mecanismos de interacción simples y genéricos.
</p>

<p>
De esta manera, pueden combinarse flexiblemente entre sí.
</p>

<p>
Los componentes, al ser genéricos y débilmente acoplados, pueden reutilizarse fácilmente.
</p>

<p>
Los componentes, al ser independientes, pueden ejecutarse en paralelo.
</p>

<p>
<strong>Solución:</strong> 
El patrón de interacción en el patrón pipe-and-filter se caracteriza por transformaciones 
sucesivas de flujos de datos.
</p>

<p>
Los datos llegan a los puertos de entrada de un filtro, son transformados y luego se envían 
a través de un pipe desde sus puertos de salida hacia el siguiente filtro.
</p>

<p>
Un único filtro puede consumir datos desde uno o más puertos y producir datos hacia uno 
o más puertos.
</p>

<p>
Existen varias debilidades asociadas con el patrón pipe-and-filter.
</p>

<p>
Por ejemplo, este patrón normalmente no es una buena elección para sistemas interactivos, 
ya que no permite ciclos (los cuales son importantes para la retroalimentación del usuario).
</p>

<p>
Además, tener grandes cantidades de filtros independientes puede añadir una cantidad 
considerable de sobrecarga computacional, porque cada filtro se ejecuta como su propio 
hilo o proceso.
</p>

<p>
Asimismo, los sistemas pipe-and-filter pueden no ser apropiados para cálculos de larga duración 
sin añadir alguna forma de funcionalidad de checkpoint/restore, ya que la falla de cualquier 
filtro (o pipe) puede causar el fallo de toda la tubería.
</p>

<p>
La solución del patrón pipe-and-filter se resume en la Tabla 13.4.
</p>

<p>
<strong>Tabla 13.4. Solución del Patrón Pipe-and-Filter</strong>
</p>


<table>
  <tbody>
    <tr>
      <td>Descripción</td>
      <td>
        <p>Los datos se transforman desde las entradas externas de un sistema hasta sus salidas externas mediante una serie de transformaciones realizadas por sus filtros, conectados por tuberías (<em>pipes</em>).</p>
      </td>
    </tr>
    <tr>
      <td>Elementos</td>
      <td>
        <p><em>Filtro</em> (<em>Filter</em>), que es un componente que transforma los datos leídos en su(s) puerto(s) de entrada en datos escritos en su(s) puerto(s) de salida. Los filtros pueden ejecutarse de forma concurrente entre sí. Los filtros pueden transformar los datos de manera incremental; es decir, pueden comenzar a producir salida tan pronto como comienzan a procesar la entrada. Las características importantes incluyen las tasas de procesamiento, los formatos de datos de entrada/salida y la transformación ejecutada por el filtro.</p>
        <p><em>Tubería</em> (<em>Pipe</em>), que es un conector que transporta datos desde el(los) puerto(s) de salida de un filtro hasta el(los) puerto(s) de entrada de otro filtro. Una tubería tiene una única fuente para su entrada y un único destino para su salida. Una tubería preserva la secuencia de elementos de datos y no altera los datos que pasan a través de ella. Las características importantes incluyen el tamaño del búfer, el protocolo de interacción, la velocidad de transmisión y el formato de los datos que pasan por la tubería.</p>
      </td>
    </tr>
    <tr>
      <td>Relaciones</td>
      <td>
        <p>La relación de <em>conexión</em> (<em>attachment</em>) asocia la salida de los filtros con la entrada de las tuberías y viceversa.</p>
      </td>
    </tr>
    <tr>
      <td>Restricciones</td>
      <td>
        <p>Las tuberías conectan los puertos de salida de los filtros con los puertos de entrada de otros filtros.</p>
        <p>Los filtros conectados deben coincidir en el tipo de datos que se transfieren a través de la tubería de conexión.</p>
        <p>Las especializaciones del patrón pueden restringir la asociación de componentes a un grafo acíclico o a una secuencia lineal, denominada a veces <em>pipeline</em>.</p>
        <p>Otras especializaciones pueden establecer que los componentes tengan ciertos puertos con nombres definidos, como los puertos <em>stdin</em>, <em>stdout</em> y <em>stderr</em> de los filtros UNIX.</p>
      </td>
    </tr>
    <tr>
      <td>Debilidades</td>
      <td>
        <p>El patrón tubería-filtro no suele ser una buena opción para sistemas interactivos.</p>
        <p>Contar con un gran número de filtros independientes puede añadir una cantidad considerable de sobrecarga computacional.</p>
        <p>Los sistemas tubería-filtro pueden no ser adecuados para cómputos de larga duración.</p>
      </td>
    </tr>
  </tbody>
</table>

</div>
</div>
 </form>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="cuarto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
