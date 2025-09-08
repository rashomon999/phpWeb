<?php
 
 
for ($i = 1; $i <= 121; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 121; $i++) {
    ${"verificar_" . $i} = '';
}

     

if ($_POST) {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'decisiones') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'sistema') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'informacion') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'entradas') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'proceso') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'salidas') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'sistema') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'informacion') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'entradas') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'realizan') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'documentos') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === 'entradas') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'flujo') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === 'documentos') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'Recibos de caja' || $respuesta_15 === 'Recibos de Caja') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === 'Comprobantes de egreso') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === 'Facturas de compra') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === 'Facturas de venta') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'Nominas') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'Consignaciones') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === 'Notas de debito y credito') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21 === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'Pagares') {  
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'documento') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'informacion') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'transacciones') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'Revision y Clasificacion'
    || $respuesta_26 === 'Revision y clasificacion'
    || $respuesta_26 === 'revision y clasificacion'
   ) {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'Medicion') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'Reconocimiento') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'Saldos') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'Balance de prueba') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'Ajustes') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'Cierre') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'Saldos de Balance') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

 $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
if ($respuesta_34 === 'aplicamos') { 
    $verificar_34 = "correcto";
} elseif ($respuesta_34 === '') {
    $verificar_34 = '';
} else {
    $verificar_34 = "incorrecto";
}

 $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
if ($respuesta_35 === 'juicio') { 
    $verificar_35 = "correcto";
} elseif ($respuesta_35 === '') {
    $verificar_35 = '';
} else {
    $verificar_35 = "incorrecto";
}

 $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
if ($respuesta_36 === 'criterio') { 
    $verificar_36 = "correcto";
} elseif ($respuesta_36 === '') {
    $verificar_36 = '';
} else {
    $verificar_36 = "incorrecto";
}

 $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
if ($respuesta_37 === 'informes financieros') { 
    $verificar_37 = "correcto";
} elseif ($respuesta_37 === '') {
    $verificar_37 = '';
} else {
    $verificar_37 = "incorrecto";
}

 $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'periodo') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

 $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === 'tiempo') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39 === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === 'informacion') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40 === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

 $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
if ($respuesta_41 === 'equilibrio') { 
    $verificar_41 = "correcto";
} elseif ($respuesta_41 === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

 $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
if ($respuesta_42 === 'partida doble') { 
    $verificar_42 = "correcto";
} elseif ($respuesta_42 === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

 $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
if ($respuesta_43 === 'cierre') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43 === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}

 $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
if ($respuesta_44 === 'no habra') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44 === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

 $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
if ($respuesta_45 === 'transacciones') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45 === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

 $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === 'saldos') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46 === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

 $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === 'informacion') { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47 === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}

 $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
if ($respuesta_48 === 'estados financieros') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48 === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

 $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === 'balance general') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === 'activos') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'pasivos') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'patrimonio') { 
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
if ($respuesta_54 === 'resultados') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'ingresos') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'gastos') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'estado') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'efectivo') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'efectivo') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'estado') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'cambios') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'patrimonio') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'patrimonio') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'revelaciones') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'claridad') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'estados financieros') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'informe') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'contabilidad financiera') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'proceso contable') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'Usuarios externos') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'Mandatorio') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'NIIF') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'Historica') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'Completa') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'resumida') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'Multiusuario') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'publica') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'Usuarios internos') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'Opcional') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'Enfocada') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'futuro') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

 $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
if ($respuesta_82 === 'fragmentarse') { 
    $verificar_82 = "correcto";
} elseif ($respuesta_82 === '') {
    $verificar_82 = '';
} else {
    $verificar_82 = "incorrecto";
}

 $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
if ($respuesta_83 === 'Hecha') { 
    $verificar_83 = "correcto";
} elseif ($respuesta_83 === '') {
    $verificar_83 = '';
} else {
    $verificar_83 = "incorrecto";
}

 $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
if ($respuesta_84 === 'medida') { 
    $verificar_84 = "correcto";
} elseif ($respuesta_84 === '') {
    $verificar_84 = '';
} else {
    $verificar_84 = "incorrecto";
}

 $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
if ($respuesta_85 === 'usuario') { 
    $verificar_85 = "correcto";
} elseif ($respuesta_85 === '') {
    $verificar_85 = '';
} else {
    $verificar_85 = "incorrecto";
}

 $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
if ($respuesta_86 === 'administrativa') { 
    $verificar_86 = "correcto";
} elseif ($respuesta_86 === '') {
    $verificar_86 = '';
} else {
    $verificar_86 = "incorrecto";
}

 $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
if ($respuesta_87 === '1973') { 
    $verificar_87 = "correcto";
} elseif ($respuesta_87 === '') {
    $verificar_87 = '';
} else {
    $verificar_87 = "incorrecto";
}

 $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
if ($respuesta_88 === 'IASC') { 
    $verificar_88 = "correcto";
} elseif ($respuesta_88 === '') {
    $verificar_88 = '';
} else {
    $verificar_88 = "incorrecto";
}

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'NICs') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === '2001') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'IASB') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'IASCF') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === '2010') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'normas') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'mundial') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'presentacion') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'informacion financiera') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'mejoran') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'comunicacion') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'inversionistas') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'contables') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'desarrollar') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === 'revisar') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'promover') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'acuerdo') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'interpretar') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'no define') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'estandar') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'no deroga') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'conflicto') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'prevalecen') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'NIIF') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'reducir') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'periodicamente') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'experiencia') {  
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
    height: 350vh;
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
       
     <h1>Introducción a la contabilidad</h1>

    <p><strong>Para empezar, debemos recordar que la contabilidad es una herramienta útil para tomar 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">  
      financieras.</strong> Como 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">        
      de 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">
     , tiene 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">
     , un 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
      y 
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">
     .</p>

    <h2>Entradas</h2>
    <p>En el 
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">    
      de 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">
     , las 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="8">
      se 
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">
      a través de 
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">
     .</p>

    <p>En las 
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">    
     , tenemos un 
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">
      de 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">
     . Entre ellos podemos recibir:</p>
    <ul>
    <li>
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="15">    
     </li>
    <li>
    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="20">    
     </li>

    <li>
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="15">    
     </li>

    <li>
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="15">    
     </li>

    <li>
    <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">    
     </li>

    <li>
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="11">    
     </li>

    <li>
    <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="25">    
       </li>

    <li>
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="8">    
     </li>

    <li>    
    Cualquier tipo de 
    <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="8">
      que contenga
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="8">
      sobre 
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">
      realizadas</li>
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

    <hr>


<p>En el proceso, 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8">    
      un
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
      o 
    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">
      y la técnica cuenta para el resultado. Entonces tendremos los     
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="16">
     . Veamos cada uno de ellos.</p>

    <p>Es importante destacar que cuando hacemos información financiera, siempre será por un 
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="8">    
      de 
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="8">
     , 
    así que con toda esa 
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="8">
      que se nos ha dado, debemos alcanzar un 
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8">
      que llamamos 
    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="14">
     ,
    donde debemos mantener esa partida doble siempre, es decir, de dónde viene el dinero y en qué se convierte.</p>





    <h2>Proceso</h2>

    <ol>
    <li>
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="18">    
    </li>
    <li>
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">    
     </li>
    <li>
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="12">     
     </li>
    <li>
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8">     
     </li>
    <li>
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="15">     
     </li>
    <li>
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8">     
     </li>
    <li>
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">     
     </li>
    <li>
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="15">     
     </li>
    </ol>
  
     <button type="submit">Enviar</button>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>
    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <?php echo $verificar_39 ?>
    <?php echo $verificar_40 ?>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
    <?php echo $verificar_26 ?>
    <?php echo $verificar_27 ?>
    <?php echo $verificar_28 ?>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
    <?php echo $verificar_31 ?>
    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>

    <hr>

    <p>Hacemos el 
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="8">    
      contable, es decir, ya 
    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8">
      más 
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="8">
      para mostrar los 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="8">
      del balance. 
    Con esto habremos terminado lo que llamamos el 
    <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="12">
     ; ahora nos dedicamos a tirar la 
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="8">
      financiera que es nuestra salida.</p>





    
    <h2>Salidas — Informes financieros</h2>
    <p>Para ello hacemos algunos 
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="15">    
    , algunos de ellos:</p>
    <ul>
    <li>El 
    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="14">    
     : que es el que muestra 
    <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="8">
     , 
    <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8">
      y 
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="8">
     .</li>
    <li>El 
    <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="8">    
      de 
    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="8">
     : que nos muestra los 
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="8">
      y 
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="8">
     .</li>
    <li>El 
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="8">    
      de 
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="8">
     : que muestra de dónde proviene el 
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">
      en la empresa.</li>

    <li>El 
    <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="8">    
      de 
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="8">
      en el
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="8">
     : que nos muestra los cambios en 
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="8">
     .</li>
    
    <li>Las 
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="8">    
     : que nos da 
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8">
     .</li>

    </ul>

    <p>
    estos 
    <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="14">
      forman el 
    <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="8">
      de 
    <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="20">
     .
    </p>

    <p>
    Pero con esa contabilidad que hemos hecho en ese proceso también podemos llegar a informes que son de contabilidad
    <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="8">
    </p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_69 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
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
    <?php echo $verificar_61 ?>
    <?php echo $verificar_62 ?>
    <?php echo $verificar_63 ?>
    <?php echo $verificar_64 ?>
    <?php echo $verificar_65 ?>
    <?php echo $verificar_66 ?>
    <?php echo $verificar_67 ?>
    <?php echo $verificar_68 ?>
    <?php echo $verificar_86 ?>

    <hr>
    <h2>Contabilidad financiera vs contabilidad administrativa</h2>

    <h2>Contabilidad Financiera</h2>
    <ul>
    <li>
    <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="15">    
     </li>
    <li>
    <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="8">    
      (
    <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="8">
     )</li>
    <li>
    <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="8">    
     </li>
    <li>
    <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="8">    
      y 
    <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="8">
     </li>
    <li>
    <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="8">    
     , 
    <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="8">
     </li>
    </ul>

    <h2>Contabilidad Administrativa</h2>
    <ul>
    <li>
    <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="17">    
     </li>
    <li>
    <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="8">    
     </li>
    <li>
    <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="8">    
      al 
    <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="8">
     </li>
    <li>Puede 
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="8">    
     </li>
    <li>
    <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="8">    
      a la 
    <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="8">
      del 
    <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="8">
     </li>
    </ul>


    <button type="submit">Enviar</button>
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

    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">Solucion</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
   <p>La contabilidad financiera se dirige a usuarios externos, a terceros 
    que tengan una relación económica con nosotros o planeen tenerla. La contabilidad administrativa es para usuarios 
    internos, es decir, para quienes manejan nuestra empresa.</p>

    <p>También se diferencian en que la contabilidad financiera es obligatoria en nuestro caso colombiano, la ley 1314 
    nos dice que debemos llevar las normas internacionales de información financiera. La contabilidad administrativa 
    es opcional; cada empresa tendrá su propia normativa.</p>

    <p>La contabilidad financiera es completamente histórica: no podremos registrar cualquier hecho que no haya ocurrido 
    aunque la contabilidad incluya estimaciones; esas estimaciones se deben a la misma característica de la contabilidad, 
    pero no porque queramos registrar hechos que no sean reales. La contabilidad administrativa se enfoca en el futuro, 
    es decir, en ella pensamos en hacer informes proyectados para poder gestionar el negocio, sabiendo dónde estamos.</p>

    <p>Siguiendo con nuestro objetivo, la contabilidad financiera es completa y resumida, mientras que la contabilidad 
    administrativa puede ser fragmentada, para hacer solo la parte que se requiere. En la contabilidad financiera se 
    proporciona información multiusuario; la información que proviene de la contabilidad financiera es la misma para 
    todos y es pública. En la contabilidad administrativa los informes están adaptados al usuario según lo requiera.</p>

    <p class="note"><strong>En este curso nos vamos a centrar en la contabilidad financiera.</strong> Dejaremos la 
    contabilidad administrativa para revisar más tarde cuando se lleve a cabo nuestro próximo curso.</p>

    </div>
     

</div>




<div class="seccion derecha">
  

    <div class="section">
    <p>Hay organizaciones como el Comité de Normas Internacionales de Contabilidad con sus siglas en inglés IASC
    ( International Accounting Standards Committee), el Consejo 
        de Normas Internacionales de Contabilidad con sus siglas IASB
        ( International Accounting Standards Board)
        , y la Fundación del Comité de Normas Internacionales de 
        Contabilidad IASCF
        ( International Accounting Standards Committee Foundation)
        .</p>
</div>

<div class="section">
    <h2>Origen y Evolución del IASC y IASB</h2>
    <p>El IASC se originó en 
    <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="8">    
      por acuerdo de los representantes de los profesionales de la contabilidad de varios países, Alemania, Australia, 
    Estados Unidos, Francia y los Países Bajos, Irlanda, Japón, México y el Reino Unido, y con el objetivo de formular un 
    conjunto de normas contables que pudieran ser generalmente aceptado y aplicado en diferentes países para promover la 
    armonización de los datos y su comparabilidad.</p>

    <p>El
    <input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="8">    
      promulgó un conjunto sustancial de normas, entre las que se encuentran las
    Normas Internacionales de Contabilidad (
    <input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="8">
     )
    y otras guías que conformó el marco conceptual para la preparación y presentación de estados financieros cuya 
    última publicación fue realizada en 1989. Este marco fue adoptado directamente por muchas empresas en el mundo.</p>

    <p>En el año 2000 el IASC creó la Fundación del Comité de Normas Internacionales de Contabilidad (IASCF) para llevar a cabo 
    la supervisión del IASC. El IASC se disolvió en 
    <input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="8">
      y fue sustituido por el 
    <input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="8">
      constituido en la misma fecha.</p>

    <p>El IASB se considera un organismo independiente del sector privado que desarrolla y aprueba las Normas Internacionales 
    de Información Financiera que continúa bajo la supervisión de la 
    <input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="8">
      Foundation en Londres y su principal objetivo es 
    el establecimiento de información financiera armonizada y la aprobación de normas internacionales de información financiera 
    y otros documentos conexos, entre los que se encuentran las interpretaciones desarrolladas por el Comité de Interpretaciones 
    de Información Financiera.</p>

    <p>En septiembre de 
    <input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="8">    
     , el IASB emitió el nuevo marco conceptual derogando el vigente desde 1989. Antes de comenzar a 
    describir 
    el marco conceptual es necesario comprender el concepto de NIIF
    (International Financial Reporting Standards)
    .</p>

    <strong>Concepto NIIF (International Financial Reporting Standards)</strong>
 
    <p>
        La IFRS Foundation establece 
        <input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="8">
          utilizadas a nivel 
        <input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="8">
          para la 
        <input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="8">
          de 
        <input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="8">
          
        que 
        <input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="8">
          la 
        <input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="8">
          entre las empresas y los 
        <input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="8">
         . Somos una organización independiente y sin 
        fines de lucro, fundada sobre la creencia de que una mejor información por parte de las empresas conduce a mejores 
        decisiones de inversión. Nuestras normas —llamadas IFRS Standards— fomentan la transparencia, la comparabilidad y la
         confianza en la información financiera.
    </p>
    https://www.ifrs.org/about-us/who-we-are/
    <p>
        IFRS significa International Financial Reporting Standards, que en español se traduce como Normas Internacionales de 
        Información Financiera (NIIF).
    </p>
    <p>
    Estándar global: Las Normas Internacionales de Información Financiera (NIIF) son reglas 
    <input type="text" name="respuesta_101" value="<?php echo $respuesta_101; ?>" size="8">
      globales utilizadas 
    por empresas públicas en 168 jurisdicciones, proporcionando coherencia y 
    transparencia en la información financiera
    </p>
</div>

<div class="section">
    <h2>Propósito y Valor Normativo del Marco Conceptual</h2>
    <p>Es importante aclarar el propósito y el valor normativo del marco conceptual y las diferencias que surgen con las NIIF. 
    Al promulgar este marco conceptual se da un contexto general en el que los diferentes usuarios de la información 
    financiera pueden actuar, como el IASB, las firmas de auditoría, los usuarios y otros organismos encargados de emitir 
    normas contables, que se benefician de diferentes maneras:</p>

    <ul>
        <li>El IASB puede 
        <input type="text" name="respuesta_102" value="<?php echo $respuesta_102; ?>" size="8">    
          futuras NIIF y 
        <input type="text" name="respuesta_103" value="<?php echo $respuesta_103; ?>" size="8">
          las existentes, así como 
        <input type="text" name="respuesta_104" value="<?php echo $respuesta_104; ?>" size="8">
          la armonización de 
        las regulaciones, las normas contables y los procedimientos asociados con la presentación de los estados 
        financieros, proporcionando una base para reducir el número de tratamientos contables alternativos permitidos 
        por las NIIF.</li>

        <li>Para empresas individuales, responsables de preparar la información, tendrán una visión clara de cómo aplicar 
        las NIIF y cómo abordar ciertos aspectos que aún no han sido objeto de una NIC.</li>

        <li>Para los auditores, este marco les ayuda a formarse una opinión sobre si los estados financieros están de 
        <input type="text" name="respuesta_105" value="<?php echo $respuesta_105; ?>" size="8">
          con las NIIF.</li>

        <li>Los usuarios de los estados financieros podrán 
        <input type="text" name="respuesta_106" value="<?php echo $respuesta_106; ?>" size="8">    
          la información contenida en los estados preparados 
        de acuerdo con las NIIF y comprender el enfoque seguido por el IASB en la formulación de NIIF.</li>

        <li>Por último, otros organismos nacionales responsables de establecer las normas locales se benefician de la 
        promulgación del enfoque NIIF.</li>
    </ul>
</div>

<div class="section">
    <h2>Características y Limitaciones del Marco Conceptual</h2>
    <p>Una vez explicada la definición de las NIIF y la finalidad normativa del marco conceptual, cabe destacar los 
        siguientes puntos:</p>

    <ol>
        <li>En primer lugar, el marco conceptual
        <input type="text" name="respuesta_107" value="<?php echo $respuesta_107; ?>" size="8">    
          estándares para ningún problema particular de medición o divulgación.</li>
        <li>Segundo, el marco conceptual no es un 
        <input type="text" name="respuesta_108" value="<?php echo $respuesta_108; ?>" size="8">    
         .</li>
        <li>Tercero, el marco conceptual 
        <input type="text" name="respuesta_109" value="<?php echo $respuesta_109; ?>" size="8">     
         ninguna cláusula específica.</li>
        <li>En cuarto lugar, en algunos casos, el IASB reconoce que el marco conceptual puede entrar en 
        <input type="text" name="respuesta_110" value="<?php echo $respuesta_110; ?>" size="8">     
           con una 
            NIIF específica, en cuyo caso 
            <input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="8"> 
              los requerimientos de la 
              <input type="text" name="respuesta_112" value="<?php echo $respuesta_111; ?>" size="8"> 
               .</li>

        <li>Quinto, dado que el marco conceptual para definir nuevas NIIF y revisar las existentes ya ha sido establecido,
             el Consejo tiene como objetivo 
             <input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="8"> 
               el número de conflictos entre el marco y las NIIF a lo largo del tiempo.</li>
        
             <li>En sexto lugar, el marco conceptual se revisa 
             <input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="8">    
               sobre la base de la 
             <input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="8"> 
               del consejo
            haya adquirirdo con él.</li>
    </ol>

    <p>El IASB está elaborando actualmente un proyecto para actualizar el marco conceptual de las normas internacionales 
        por fases. El documento presentado contiene tres partes ya desarrolladas, que son los capítulos 1, 3 y 4.</p>

    <p>El IASB aclara que el capítulo 2 trata del concepto de entidad informante, pero aún no se ha desarrollado. Las dos 
        primeras partes del documento, que publicó el IASB, contienen:</p>

    <ol>
        <li>En primer lugar, el objetivo de la información financiera de propósito general</li>
        <li>En segundo lugar, las características cualitativas de la información financiera útil</li>
    </ol>

    <p>La tercera parte es el texto restante del marco conceptual publicado en 1989 por la Guía del IASC.</p>
</div>
 


</div>
   
</form>

</div>
</div>

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
