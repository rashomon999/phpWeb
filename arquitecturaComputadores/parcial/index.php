<?php
 
for ($i = 1; $i <= 300; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 300; $i++) {
    ${"verificar_" . $i} = '';
}

     

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
    // Respuestas de la pirámide y factores
    $respuesta_1 = 'Costo';
    $respuesta_2 = 'Velocidad';
    $respuesta_3 = 'Capacidad';
    $respuesta_4 = 'CPU register';
    $respuesta_5 = 'Cache';
    $respuesta_6 = 'Memoria principal (DRAM)';
    $respuesta_7 = 'Virtual Memory';
    $respuesta_8 = 'Cloud Storage';
    
    // Respuestas sobre factores de desempeño
    $respuesta_9 = 'memoria cache';
    $respuesta_10 = 'capacidad';
    $respuesta_11 = 'pequeña';
    $respuesta_12 = 'stride';
    $respuesta_13 = 'alto';
    $respuesta_14 = 'a';
    
    // Respuestas sobre SRAM y DRAM
    $respuesta_15 = 'celda';
    $respuesta_16 = '6 transistores';
    $respuesta_17 = 'mantener';
    $respuesta_18 = 'valor';
    $respuesta_19 = 'bit';
    $respuesta_20 = 'energia';
    $respuesta_21 = 'celda';
    $respuesta_22 = '1 transistor';
    $respuesta_23 = '1 condensador';
    $respuesta_24 = 'SRAM';
    $respuesta_25 = 'SRAM';
    $respuesta_26 = 'DRAM';
    $respuesta_27 = 'falso';
    
    // Respuestas sobre jerarquía de memoria
    $respuesta_28 = 'brecha de rendimiento';
    $respuesta_29 = 'velocidad';
    $respuesta_30 = 'procesamiento';
    $respuesta_31 = 'la CPU';
    $respuesta_32 = 'acceso';
    $respuesta_33 = 'memoria principal (RAM)';
    $respuesta_34 = 'memoria intermedia';
    $respuesta_35 = 'acceso rapido';
    $respuesta_36 = 'memoria cache';
    $respuesta_37 = 'fisicamente';
    $respuesta_38 = 'registros';
    $respuesta_39 = 'la CPU';
    $respuesta_40 = 'la memoria principal';
    $respuesta_41 = 'primera cache';
    $respuesta_42 = 'cache L1';
    $respuesta_43 = 'tamaño reducido';
    $respuesta_44 = 'tiempos';
    $respuesta_45 = 'acceso';
    $respuesta_46 = 'bajos';
    $respuesta_47 = 'cache L2';
    $respuesta_48 = 'la memoria principal';
    $respuesta_49 = 'memoria de tercer nivel';
    $respuesta_50 = 'cache L3';
    $respuesta_51 = 'memoria principal (RAM)';
    
    // Respuestas sobre direcciones
    $respuesta_52 = 'Memoria principal';
    $respuesta_53 = 'RAM';
    $respuesta_54 = 'cantidad';
    $respuesta_55 = 'bits';
    $respuesta_56 = 'necesitar';
    $respuesta_57 = 'representar';
    $respuesta_58 = 'direcciones';
    $respuesta_59 = 'memoria principal';
    $respuesta_60 = '\log_2(M)';
    $respuesta_61 = 'byte';
    $respuesta_62 = 'memoria principal';
    $respuesta_63 = 'divide';
    $respuesta_64 = 'TAG';
    $respuesta_65 = 'INDEX';
    $respuesta_66 = 'OFFSET';
    $respuesta_67 = 'Address Breakdown';
    $respuesta_68 = '\log_{2}(B)';
    $respuesta_69 = 'selecciona';
    $respuesta_70 = 'byte dentro';
    $respuesta_71 = 'bloque';
    $respuesta_72 = '\log_{2}(S)';
    $respuesta_73 = 'direccion';
    $respuesta_74 = 'linea';
    $respuesta_75 = 'set';
    $respuesta_76 = 'cache';
    $respuesta_77 = 'bloque';
    $respuesta_78 = 'm-s-b';
    $respuesta_79 = 'bloque';
    $respuesta_80 = 'memoria';
    $respuesta_81 = 'dato';
    $respuesta_82 = 'almacenado';
    $respuesta_83 = 'linea';
    $respuesta_84 = 'Index';
    $respuesta_85 = 'Valid';
    $respuesta_86 = 'Tag';
    $respuesta_87 = 'Data';
    $respuesta_88 = 'Hex';
    $respuesta_89 = 'Dirty Bit';
    $respuesta_90 = '\frac{C}{B}';
    
    // Marcar todas como correctas
    for ($i = 1; $i <= 90; $i++) {
        ${"verificar_$i"} = "correcto";
    }
    }else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'Costo') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'Velocidad') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'Capacidad' || $respuesta_3 === 'capacidad') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'CPU register') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'Cache') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'Memoria principal (DRAM)') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'Virtual Memory') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'Cloud Storage') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'memoria cache') {  
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
   if ($respuesta_11 === 'pequeña') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'stride') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'alto') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'a') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'celda') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === '6 transistores') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'mantener') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'valor') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'bit') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'energia') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'celda') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === '1 transistor') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === '1 condensador') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'SRAM') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'SRAM') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'DRAM') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'falso') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'brecha de rendimiento') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'velocidad') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'procesamiento') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'la CPU') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'acceso') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'memoria principal (RAM)') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'memoria intermedia') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'acceso rapido') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'memoria cache') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'fisicamente') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'registros') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'la CPU') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'la memoria principal') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'primera cache') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'cache L1') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'tamaño reducido') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'tiempos') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'acceso') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'bajos') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = ''; 
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'cache L2') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'la memoria principal') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'memoria de tercer nivel') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'cache L3') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'memoria principal (RAM)'
|| $respuesta_51 === 'RAM'
|| $respuesta_51 === 'memoria principal'
) { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'Memoria principal') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'RAM') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'cantidad') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'bits') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'necesitar') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'representar') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'direcciones') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'memoria principal') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === '\log_2(M)') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'byte') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'memoria principal') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
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
if ($respuesta_64 === 'TAG') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'INDEX') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'OFFSET') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'Address Breakdown') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === '\log_{2}(B)') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'selecciona') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'byte dentro') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'bloque') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === '\log_{2}(S)') {  
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'direccion') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'linea') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'set') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'cache') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'bloque') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'm-s-b') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'bloque') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'memoria') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'dato') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'almacenado') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'linea') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'Index') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'Valid') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'Tag') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'Data') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'Hex') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'Dirty Bit') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === '\frac{C}{B}' || $respuesta_90 === '\frac{Tamaño cache}{Tamaño Bloque}') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
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
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style_2_0.css"> 
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 290vh;
    }

</style>
 
<style>
   

    .piramide{
        width: 600px;
        position: relative;
    }

    /* Capas de la pirámide */
    .layer{
        width: 100%;
        height: 70px;
        border-bottom: 3px solid black;
        margin: 0 auto;
        position: relative;
    }

    .layer:nth-child(1){ width: 20%; }
    .layer:nth-child(2){ width: 35%; }
    .layer:nth-child(3){ width: 50%; }
    .layer:nth-child(4){ width: 70%; }
    .layer:nth-child(5){ width: 90%; }

    .layer input{
        position: absolute;
        left: 50%;
        top: 15px;
        transform: translateX(-50%);
        padding: 4px 8px;
        border: 1px solid #444;
        border-radius: 5px;
        background: white;
    }

    /* Etiquetas verticales */
    .etiqueta-izq{
        position: absolute;
        left: -20px;
        top: 50px;
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-weight: bold;
    }
    .etiqueta-der{
        position: absolute;
        right: -120px;
        bottom: 30px;
        font-weight: bold;
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
    var f = document.getElementById('respuesta_60').value || "";
    var formula = ` \\ m =${f} \\, `;
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_68').value || "";
    var formula = ` \\ b = ${f} \\, `;
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_72').value || "";
    var formula = ` \\ s = ${f} \\, `;
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    var f = document.getElementById('respuesta_78').value || "";
    var formula = ` \\ t = ${f} \\, `;
    document.getElementById('formula4').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_90').value || "";
    var formula = ` \\ S = ${f} \\, `;
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

 <div class="piramide">

    <div class="etiqueta-izq">
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="6">    
     /
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="6">
     </div>
    <div class="etiqueta-der">
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="6">    
     </div>

    <div class="layer">
        <input type="text"  name="respuesta_4" value="<?php echo $respuesta_4; ?>">
    </div>

    <div class="layer">
        <input type="text"  name="respuesta_5" value="<?php echo $respuesta_5; ?>">
    </div>

    <div class="layer">
        <input type="text"  name="respuesta_6" value="<?php echo $respuesta_6; ?>">
    </div>

    <div class="layer">
        <input type="text"  name="respuesta_7" value="<?php echo $respuesta_7; ?>">
    </div>

    <div class="layer">
        <input type="text"  name="respuesta_8" value="<?php echo $respuesta_8; ?>">
    </div>
</div>

    <br><br>
    <button type="submit">Enviar</button> 
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?>
    <?php echo $verificar_8 ?>

    <hr>

    <h3>Los factores que pueden afectar negativamente el desempeño de un programa pueden ser:</h3>

    <p>Una 
    <input type="text"  name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="11">    
      con una 
    <input type="text"  name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">
      muy 
    <input type="text"  name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">
      y un 
    <input type="text"  name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">
      muy 
    <input type="text"  name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">
     
    </p>
    
    <br><br>
    <button type="submit">Enviar</button> 
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?> 
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <hr>

    <h3>De los siguientes factores, ¿cuál afecta negativamente el desempeño de un programa, es decir, no permite reducir el tiempo de ejecución?</h3>

<p><strong>Pregunta 3</strong> Seleccione una:</p>

<form>
    <label>
    <input type="radio" name="respuesta_14" value="a" 
    <?php if ($respuesta_14 == "a") echo "checked"; ?>>
    a. Se accede continuamente a la memoria principal y con ello se accede a una gran cantidad de datos aprovechando la localidad temporal.
    </label>
    <br><br>

    <label>
        <input type="radio" name="respuesta_14" value="b" 
        <?php if ($respuesta_14 == "b") echo "checked"; ?>>
        b. Exhibe una buena localidad espacial al recorrer los datos con un stride de 1.
    </label>
    <br><br>

    <label>
        <input type="radio" name="respuesta_14" value="c" 
        <?php if ($respuesta_14 == "c") echo "checked"; ?>>
        c. Presenta una buena localidad temporal al acceder continuamente a una misma variable.
    </label>
    <br><br>

    <label>
        <input type="radio" name="respuesta_14" value="d" 
        <?php if ($respuesta_14 == "d") echo "checked"; ?>>
        d. Se ejecuta sobre un sistema con una CPU con varios niveles de memoria cache.
    </label>
    <br><br>

    <label>
        <input type="radio" name="respuesta_14" value="e" 
        <?php if ($respuesta_14 == "e") echo "checked"; ?>>
        e. Tener una mayor cantidad de hits de la memoria cache.
    </label>
</form>

<br><br>
<button type="submit">Enviar</button> 
<?php echo $verificar_14 ?>
<hr>

<h4>En 
<input type="text"  name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">    
  </h4>
  <p>
    Cada 
    <input type="text"  name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">
      está formada por 
    <input type="text"  name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="8">
      que pueden 
    <input type="text"  name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">
      el 
    <input type="text"  name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">
      del 
    <input type="text"  name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">
      mientras haya 
    <input type="text"  name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="8">
     .
  </p>

  <h4>En 
  <input type="text"  name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8">  
    </h4>
  <p>
    Cada 
    <input type="text"  name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="8">
      está formada por 
    <input type="text"  name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="8">
      y 
    <input type="text"  name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="8">
     .
  </p>

  <p>La 
  <input type="text"  name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="8">  
    sí utiliza flip-flops </p>
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
    <hr>

      <p>
    Las memorias con tecnologías DRAM se construyen con elementos basados en flipflops y son más rápidas que las memorias SRAM.
  </p>

    <fieldset>
      <legend id="pregunta4-legend">Pregunta 4 — Seleccione una:</legend>

      <div>
        <input type="radio" name="respuesta_27" value="verdadero" 
        <?php if ($respuesta_27 == "verdadero") echo "checked"; ?>>
        <label for="p4-falso">Verdadero</label>
      </div>

      <div> 
        <input type="radio" name="respuesta_27" value="falso" 
        <?php if ($respuesta_27 == "falso") echo "checked"; ?>>
        <label for="p4-falso">Falso</label>
      </div>
    </fieldset>


    <button type="submit">Enviar</button> 
    <?php echo $verificar_27 ?>
   <hr>

    <h1>Jerarquía de memoria (texto corregido)</h1>

    <p>Debido a la creciente 
    <input type="text"  name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="19">     
    entre la 
    <input type="text"  name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8">
      de 
    <input type="text"  name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="8">
      de 
    <input type="text"  name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8">
      y el 
    <input type="text"  name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">
      a la 
    <input type="text"  name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="16">
     , los diseñadores de sistemas incorporaron una 
    <input type="text"  name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="16">
      de 
    <input type="text"  name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
      llamada 
    <input type="text"  name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">
     , que se ubica 
    <input type="text"  name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="8">
      entre los
    <input type="text"  name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="8">
    <strong>  de 
    <input type="text"  name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="8">    
     </strong> y 
    <input type="text"  name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="8">
     . Esta 
    <input type="text"  name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8">
     , conocida como 
    <input type="text"  name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="8">
     , 
    tiene un 
    <input type="text"  name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="8">
      pero 
    <input type="text"  name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8">
      de 
    <input type="text"  name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="8">
      extremadamente 
    <input type="text"  name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="8">
     .</p>

    <p>Con el tiempo, y ante el incremento de demandas computacionales, se añadió una segunda memoria intermedia más 
    <strong>grande y ligeramente más lenta</strong>, llamada 
    <input type="text"  name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="8">
     , que se sitúa entre la caché de 
    primer nivel y 
    <input type="text"  name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="8">
     , actuando como un puente para reducir la latencia en accesos recurrentes.</p>

    <p>En sistemas modernos, se incorporó además una 
    <input type="text"  name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="19">    
      compartida entre varios núcleos del procesador, 
    denominada 
    <input type="text"  name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="8">
     , que ofrece una mayor capacidad y se posiciona justo antes de acceder a la 
    <input type="text"  name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8">
     , permitiendo optimizar el uso de la jerarquía completa de memoria.</p>

 <button type="submit">Enviar</button>
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
    <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>
        <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <?php echo $verificar_51 ?>
</div>


 

<div class="seccion derecha">
 
    <p>
    <strong>M =</strong>  
    <input type="text"  name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="14">
    (
    <input type="text"  name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="5">
    ).
    </p>

    <p>
    <strong>m = </strong>
    es la 
    <input type="text"  name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="8">
      de 
    <input type="text"  name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="8">
      que vamos a 
    <input type="text"  name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="8">
      para 
    <input type="text"  name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="8">
      cada una de las 
    <input type="text"  name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="8">
      en la 
    <input type="text"  name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">
         
    </p>


    <span id="formula">
        \[  m =  \]
    </span> 
    <br><br>
    <input type="text" name="respuesta_60" size="10" id="respuesta_60" oninput="actualizarFormula()" 
    value="<?php echo $respuesta_60?>" size="15" >

    <hr>

  <h2>1) ¿QUÉ ES UNA DIRECCIÓN?</h2>
  <p>
    Una dirección es simplemente un número (en binario o hexadecimal) que identifica un 
    <input type="text"  name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="8">
      dentro de la 
    <input type="text"  name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="8">
     .<br>
    Ejemplo: <code class="k">0x200</code> → dirección en memoria.
  </p>

  <p>
    La caché no cambia la dirección, sino que la 
    <input type="text"  name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="8">
     según:
  </p>

  <p style="font-family:monospace; font-size:1.05rem; background:#f7fbff; padding:8px; border-radius:6px; display:inline-block;">
    [ 
    <input type="text"  name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="8">
      | 
    <input type="text"  name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8">
      | 
    <input type="text"  name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="8">
      ]
  </p>

  <p>Esto se llama 
  <input type="text"  name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="15">  
   y depende del tamaño de la caché y del bloque.</p>

    <button type="submit">Enviar</button>
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
   <hr>
  <h2>2) ¿Qué representa cada parte de la dirección?</h2>

    <h6> OFFSET (
    <input type="text"  name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="15"> 
      el 
    <input type="text"  name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="15"> 
      del 
    <input type="text"  name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="15"> 
     )</h6>
  
  <p>Tamaño = <em>b</em> bits. Se calcula:</p>

    <span id="formula2">
        \[  b =  \]
    </span> 
    <br><br>
    <input type="text" name="respuesta_68" size="10" id="respuesta_68" oninput="actualizarFormula2()" 
    value="<?php echo $respuesta_68?>" size="15" >

 
  <p>Donde \(B\) es el tamaño del bloque en bytes.</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_68 ?>
    <?php echo $verificar_69 ?>
    <?php echo $verificar_70 ?>
    <?php echo $verificar_71 ?>

  <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Ayuda</button>
    <section id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
        
    <p>Ejemplo: si \(B = 16\) bytes → offset \(b = \log_2(16) = 4\) bits.</p>
  <p>Te dice: ¿qué byte del bloque quiero? (byte 0 a byte 15)</p>
  <pre><code>OFFSET = 0011  → byte 3 del bloque</code></pre>

    <h1>Combinaciones binarias para <code class="math">0000</code> (4 bits)</h1>
    <p class="lead">
      Si cada posición solo puede ser <strong>0</strong> o <strong>1</strong>, una cadena de <strong>4 bits</strong> tiene:
    </p>

    <p>
      <strong>Fórmula:</strong>
      <span class="math">\(2^4 = 16\)</span>
      — es decir, <strong>16 combinaciones posibles</strong>.
    </p>

    <h2 style="margin-top:14px; font-size:1rem">✔ Todas las combinaciones (4 bits)</h2>

    <div class="grid" aria-label="Combinaciones de 4 bits">
      <div class="cell">0000</div>
      <div class="cell">0001</div>
      <div class="cell">0010</div>
      <div class="cell">0011</div>
      <div class="cell">0100</div>
      <div class="cell">0101</div>
      <div class="cell">0110</div>
      <div class="cell">0111</div>
      <div class="cell">1000</div>
      <div class="cell">1001</div>
      <div class="cell">1010</div>
      <div class="cell">1011</div>
      <div class="cell">1100</div>
      <div class="cell">1101</div>
      <div class="cell">1110</div>
      <div class="cell">1111</div>
    </div>

    <pre><code>// Versión en línea (por si prefieres copiar/pegar)
    0000 0001 0010 0011 0100 0101 0110 0111
    1000 1001 1010 1011 1100 1101 1110 1111
    </code></pre>

    </section>
 
    <hr>
    <h4>Indica la formula de cantidad de lineas/Sets:</h4>

     <span id="formula5">
        \[  S =   \]
    </span> 
    <br><br>
    <input type="text" name="respuesta_90" size="10" id="respuesta_90" oninput="actualizarFormula5()" 
    value="<?php echo $respuesta_90?>" size="15" >

    <br>
    <h3> INDEX (selecciona cuál SET en la caché)</h3>
    <p>Tamaño = <em>s</em> bits. Se calcula:</p>

    <span id="formula3">
        \[  s =  \]
    </span> 
    <br><br>
    <input type="text" name="respuesta_72" size="10" id="respuesta_72" oninput="actualizarFormula3()" 
    value="<?php echo $respuesta_72?>" size="15" >

    <p>Donde \(S\) es el número de sets.</p>
    
    <p>El INDEX es la parte de la 
    <input type="text"  name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="8">    
      que identifica la 
    <input type="text"  name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="15">
      (o 
    <input type="text"  name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="15">
     ) específica de la 
    <input type="text"  name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="15">
      donde el 
    <input type="text"  name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="15">
      de 
    memoria debe almacenarse o buscarse.</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_72 ?>
    <?php echo $verificar_73 ?>
    <?php echo $verificar_74 ?>
    <?php echo $verificar_75 ?>
    <?php echo $verificar_76 ?>
    <?php echo $verificar_77 ?>
    <?php echo $verificar_90 ?>
    <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Ayuda</button>
    <section id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
         <p>Ejemplo: si hay 4 sets → index = 2 bits.</p>
    <pre><code>INDEX = 10  → Set 2</code></pre>
    
    </section>
 

    <hr>

  <h3> TAG (identifica qué bloque de memoria está en ese set)</h3>
  <p>Tamaño = <em>t</em> bits. Se calcula:</p>
 
    <span id="formula4">
        \[  t =  \]
    </span> 
    <br><br>
    <input type="text" name="respuesta_78" size="10" id="respuesta_78" oninput="actualizarFormula4()" 
    value="<?php echo $respuesta_78?>" size="15" >

    <p>El TAG es la parte alta de la dirección que identifica de qué 
     <input type="text"  name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="8">    
      de 
     <input type="text"  name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="8">
      proviene el 
     <input type="text"  name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="8">
      que está 
     <input type="text"  name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="8">
      en una 
     <input type="text"  name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="8">
      de caché.</p>

        <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Ayuda</button>
    <section id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    
        <p>Donde \(m\) es el tamaño de la dirección (en bits). Por ejemplo, en un caso típico:</p>
    <p>\(m = 11, \; s = 2, \; b = 4 \Rightarrow t = 11 - 2 - 4 = 5\) bits.</p>
    <p>La caché guarda el TAG para saber si el bloque almacenado es el que la CPU quiere.</p>
    <pre><code>TAG = 01011</code></pre>
    </section>
 
    <button type="submit">Enviar</button>
    <?php echo $verificar_78 ?>
    <?php echo $verificar_79 ?>
    <?php echo $verificar_80 ?> 
    <?php echo $verificar_81 ?>
    <?php echo $verificar_82 ?>
    <?php echo $verificar_83 ?>

    <hr>
  <h2><span class="star">⭐</span>3) ¿Cómo se usa la dirección en un acceso?</h2>
  <ol>
    <li>La CPU genera una dirección.</li>
    <li>La caché divide la dirección en TAG, INDEX y OFFSET.</li>
    <li>El INDEX elige el set.</li>
    <li>El TAG decide si es <em>HIT</em> o <em>MISS</em>.</li>
    <li>El OFFSET selecciona el byte dentro del bloque.</li>
  </ol>

  <h2><span class="star">⭐</span>4) ¿Qué significa cada campo de la estructura?</h2>

  <p>Tu tabla de referencia:</p>
  <p><strong>
   <input type="text"  name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="8">  
    | 
   <input type="text"  name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="8">
    | 
   <input type="text"  name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="8">
    | 
   <input type="text"  name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="8">
    (
     <input type="text"  name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="8">
     ) | 
     <input type="text"  name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="8">
     </strong></p>

  <h3>🔵 INDEX</h3>
  <p>No es un dato almacenado en la caché. Es simplemente el número del set. Se muestra en la tabla para identificar la línea que estamos mostrando.</p>
  <pre><code>Index 0 → Set 0
Index 1 → Set 1
Index 2 → Set 2</code></pre>
 
    <button type="submit">Enviar</button>

    <?php echo $verificar_84 ?>
    <?php echo $verificar_85 ?>
    <?php echo $verificar_86 ?>
    <?php echo $verificar_87 ?>
    <?php echo $verificar_88 ?>
    <?php echo $verificar_89 ?>
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
