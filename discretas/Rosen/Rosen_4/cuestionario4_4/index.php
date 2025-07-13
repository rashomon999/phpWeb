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
        // Establecer todas las respuestas correctas
        $respuesta_1 = 'inversos';
        $respuesta_2 = 'retroceder';
        $respuesta_3 = 'inverso';
        $respuesta_4 = 'multiplicando';
        $respuesta_5 = 'relativos';
        $respuesta_6 = 'grandes';
        $respuesta_7 = 'primo';
        $respuesta_8 = 'divide';
        $respuesta_9 = 'axequivb(modm)';
        $respuesta_10 = 'a^{p-1}\equiv1(modp)';
        $respuesta_11 = 'seudoprimo';
        $respuesta_12 = 'compuesto';
        $respuesta_13 = 'satisfacer';
        $respuesta_14 = 'compuesto';
        $respuesta_15 = 'seudoprimo';
        $respuesta_16 = 'relativamente';
        $respuesta_17 = 'a^{m-1}\equiv1(modm)';
        $respuesta_18 = 'analogos';
        $respuesta_19 = 'primitivas';
        $respuesta_20 = 'primo';
        $respuesta_21 = 'potencia';
        $respuesta_22 = 'discreto';
        $respuesta_23 = 'no divisible';
        $respuesta_24 = 'modulo';
        $respuesta_25 = 'r^e\equiva(modp)';
        $respuesta_26 = 'axequivb(modm)';
        $respuesta_27 = 'teoria';
        $respuesta_28 = 'numeros';
        $respuesta_29 = 'x';
        $respuesta_30 = '\overline{a}';
        $respuesta_31 = 'overline{a}aequiv1(modm)';
        $respuesta_32 = 'inverso';
        $respuesta_33 = 'a';
        $respuesta_34 = 'relativos';
        $respuesta_35 = 'relativos';
        $respuesta_36 = '1';
        $respuesta_37 = 'a';
        $respuesta_38 = 'unico';
        $respuesta_39 = '\overline{a}';
        $respuesta_40 = '1';
        $respuesta_41 = 'sa+tm=1';
        $respuesta_42 = 'sa+tm';
        $respuesta_43 = '1';
        $respuesta_44 = '0';
        $respuesta_45 = 'inspeccion';
        $respuesta_46 = 'm';
        $respuesta_47 = 'a';
        $respuesta_48 = '1';
        $respuesta_49 = 'multiplo';
        $respuesta_50 = 'fuerza bruta';
        $respuesta_51 = 'algoritmo de euclides';
        $respuesta_52 = 'sa+tm=1';
        $respuesta_53 = 's';
        $respuesta_54 = '2*3+1';
        $respuesta_55 = '-2*3+1*7';
        $respuesta_56 = '-2';
        $respuesta_57 = '1';
        $respuesta_58 = '3';
        $respuesta_59 = '7';
        $respuesta_60 = '3';
        $respuesta_61 = '7';
        $respuesta_62 = '-2';
        $respuesta_63 = 'el algoritmo de Euclides';
        $respuesta_64 = 'coeficientes de Bezout';
        $respuesta_65 = '101a+4620b=1';
        $respuesta_66 = '45*101+75';
        $respuesta_67 = '1*75+26';
        $respuesta_68 = '2*26+23';
        $respuesta_69 = '1*23+3';
        $respuesta_70 = '7*3+2';
        $respuesta_71 = '1*2+1';
        $respuesta_72 = '2*1';
        $respuesta_73 = 'cero';
        $respuesta_74 = 'uno';
        $respuesta_75 = 'uno';
        $respuesta_76 = '-1*23+8*3';
        $respuesta_77 = '8*26-9*23';
        $respuesta_78 = '-9*75+26*26';
        $respuesta_79 = '26*101-35*75';
        $respuesta_80 = '-35*4620+1601*101';
        $respuesta_81 = '-35';
        $respuesta_82 = '1601';
        $respuesta_83 = '1601';
        $respuesta_84 = '-2';
        $respuesta_85 = 'Multiplicamos';
        $respuesta_86 = '-2\cdot3x\equiv-2\cdot4\pmod{7}';
        $respuesta_87 = 'simplificamos';
        $respuesta_88 = 'x\equiv6\pmod{7}';
        $respuesta_89 = 'operaciones';
        $respuesta_90 = 'aritmeticas';
        $respuesta_91 = 'modulos';
        $respuesta_92 = 'congruencias';
        $respuesta_93 = 'primos';
        $respuesta_94 = 'unica';
        $respuesta_95 = 'mayores';
        $respuesta_96 = 'primos';
        $respuesta_97 = 'dos en dos';
        $respuesta_98 = 'x';
        $respuesta_99 = 'm';
        $respuesta_100 = 'solucion';

         for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }


     } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'inversos') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'retroceder') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'inverso') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'multiplicando') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'relativos') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'grandes') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'primo') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'divide') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
    $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
    $respuesta_9_dos = str_replace(' ','',$respuesta_9);
    $respuesta_9_dos = str_replace('\,','',$respuesta_9_dos);
    $respuesta_9_dos = str_replace('\\','',$respuesta_9_dos);

    if ($respuesta_9_dos === 'axequivb(modm)') {  
       $verificar_9 = "correcto";
    } elseif ($respuesta_9_dos === '') {
       $verificar_9 = '';
    } else {
        $verificar_9 = "incorrecto";
    }

    // Verificar la respuesta de la décima pregunta
    $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
    $respuesta_10_dos = str_replace(' ','',$respuesta_10);
    $respuesta_10_dos = str_replace('\,','',$respuesta_10);
    $respuesta_10_dos = str_replace('\\','',$respuesta_10);

    if ($respuesta_10_dos === 'a^{p-1}\equiv1(modp)') {  
       $verificar_10 = "correcto";
    } elseif ($respuesta_10_dos === '') {
       $verificar_10 = '';
    } else {
       $verificar_10 = "incorrecto";
    }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'seudoprimo') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === 'compuesto') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'satisfacer') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === 'compuesto') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'seudoprimo') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === 'relativamente') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
        // Verificar la respuesta de la sexta pregunta
        $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
        $respuesta_17_dos = str_replace(' ','',$respuesta_17);
        $respuesta_17_dos = str_replace('\,','',$respuesta_17);
        $respuesta_17_dos = str_replace(' \ ','',$respuesta_17);
     
        if ($respuesta_17_dos === 'a^{m-1}\equiv1(modm)') {  
            $verificar_17 = "correcto";
        } elseif ($respuesta_17_dos === '') {
            $verificar_17 = '';
        } else {
            $respuesta_17_dos = "incorrecto";
        }
  
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === 'analogos') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'primitivas') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'primo') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === 'potencia') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21 === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'discreto') {  
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'no divisible') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'modulo') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
    $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
    $respuesta_25_dos = str_replace(' ','',$respuesta_25);
    $respuesta_25_dos = str_replace('\,','',$respuesta_25);
    $respuesta_25_dos = str_replace(' \ ','',$respuesta_25);

   if ($respuesta_25_dos === 'r^e\equiva(modp)') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25_dos === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
    $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
    $respuesta_26_dos = str_replace(' ','',$respuesta_26);
    $respuesta_26_dos = str_replace('\,','',$respuesta_26);
    $respuesta_26_dos = str_replace('\\','',$respuesta_26);

    if ($respuesta_26_dos === 'axequivb(modm)') {  
       $verificar_26 = "correcto";
    } elseif ($respuesta_26_dos === '') {
       $verificar_26 = '';
    } else {
       $verificar_26 = "incorrecto";
    }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'teoria') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'numeros') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'x') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === '\overline{a}') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
    $respuesta_31_dos = str_replace(' ','',$respuesta_31);
    $respuesta_31_dos = str_replace('\,','',$respuesta_31);
    $respuesta_31_dos = str_replace('\\','',$respuesta_31);

   if ($respuesta_31_dos === 'overline{a}aequiv1(modm)') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31_dos === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'inverso') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'a') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'relativos') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'relativos') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === '1') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'a') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

 $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'unico') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

 $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === '\overline{a}') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39 === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === '1') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40 === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    $respuesta_41_dos = str_replace(' ','',$respuesta_41);
    
    if ($respuesta_41_dos === ' sa+tm=1') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    $respuesta_42_dos = str_replace(' ','',$respuesta_42);
    if ($respuesta_42_dos === 'sa+tm') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42_dos === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

 $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
if ($respuesta_43 === '1') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43 === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}

 $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
if ($respuesta_44 === '0') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44 === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

 $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
if ($respuesta_45 === 'inspeccion') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45 === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

 $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === 'm') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46 === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

 $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === 'a') { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47 === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}

 $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
if ($respuesta_48 === '1') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48 === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

 $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === 'multiplo') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === 'fuerza bruta') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'algoritmo de euclides') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'sa+tm=1') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 's') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

    $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
    $respuesta_54_dos = str_replace(' ','',$respuesta_54);
    
    if ($respuesta_54_dos === '2*3+1') { 
        $verificar_54 = "correcto";
    } elseif ($respuesta_54_dos === '') {
        $verificar_54 = '';
    } else {
        $verificar_54 = "incorrecto";
    }

    $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
    $respuesta_55_dos = str_replace(' ','',$respuesta_55);
    if ($respuesta_55_dos === '-2*3+1*7') { 
        $verificar_55 = "correcto";
    } elseif ($respuesta_55_dos === '') {
        $verificar_55 = '';
    } else {
        $verificar_55 = "incorrecto";
    }


    $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
    if ($respuesta_56 === '-2') { 
        $verificar_56 = "correcto";
    } elseif ($respuesta_56 === '') {
        $verificar_56 = '';
    } else {
        $verificar_56 = "incorrecto";
    }

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === '1') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === '3') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === '7') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === '3') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === '7') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === '-2') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

    $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
    if ($respuesta_63 === 'el algoritmo de Euclides' || $respuesta_63 === 'el algoritmo de euclides') { 
        $verificar_63 = "correcto";
    } elseif ($respuesta_63 === '') {
        $verificar_63 = '';
    } else {
        $verificar_63 = "incorrecto";
    }

    $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
    if ($respuesta_64 === 'coeficientes de Bezout' || $respuesta_64 === 'coeficientes de bezout') { 
        $verificar_64 = "correcto";
    } elseif ($respuesta_64 === '') {
        $verificar_64 = '';
    } else {
        $verificar_64 = "incorrecto";
    }

    $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
    $respuesta_65_dos = str_replace(' ','',$respuesta_65);

    if ($respuesta_65_dos === '101a+4620b=1') { 
        $verificar_65 = "correcto";
    } elseif ($respuesta_65_dos === '') {
        $verificar_65 = '';
    } else {
        $verificar_65 = "incorrecto";
    }

    $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
    if ($respuesta_66 === '45*101+75') { 
        $verificar_66 = "correcto";
    } elseif ($respuesta_66 === '') {
        $verificar_66 = '';
    } else {
        $verificar_66 = "incorrecto";
    }

    $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
    if ($respuesta_67 === '1*75+26') { 
        $verificar_67 = "correcto";
    } elseif ($respuesta_67 === '') {
        $verificar_67 = '';
    } else {
        $verificar_67 = "incorrecto";
    }

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === '2*26+23') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === '1*23+3') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === '7*3+2') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === '1*2+1') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === '2*1' || $respuesta_72 === '2*1+0') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'cero' || $respuesta_73 === '0') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'uno' || $respuesta_74 === '1') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'uno' || $respuesta_75 === '1') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === '-1*23+8*3') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === '8*26-9*23') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === '-9*75+26*26') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === '26*101-35*75') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === '-35*4620+1601*101') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === '-35') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === '1601') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === '1601') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === '-2') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'Multiplicamos' || $respuesta_85 === 'multiplicamos') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    $respuesta_86_dos = str_replace(' ','',$respuesta_86);

    if ($respuesta_86_dos === '-2\cdot3x\equiv-2\cdot4\pmod{7}'
    || $respuesta_86_dos === '-2\cdot3x\equiv-2\cdot4(mod7)'
    || $respuesta_86_dos === '-6x\equiv-8(mod7)'
    || $respuesta_86_dos === '-6x\equiv-8\pmod{7}'
    ) { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86_dos === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'simplificamos') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    $respuesta_88_dos = str_replace(' ','',$respuesta_88);
    if ($respuesta_88_dos === 'x\equiv6\pmod{7}'
    || $respuesta_88_dos === 'x\equiv6(mod7)'
    ) { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88_dos === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'operaciones') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'aritmeticas') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'modulos') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($congruenciasprimosúnica['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'congruencias') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'primos') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'unica') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'mayores') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'primos') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'dos en dos') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'x') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'm') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'solucion') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
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
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
    .imagen {
        max-width: 100%;
        height: auto;
    }
    .seccion {
    width: 50%; /* El 50% del ancho de la página menos el margen izquierdo */
    padding: 20px; /* importante este padding*/
    box-sizing: border-box;
    height: 440vh;
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
    var f = document.getElementById('respuesta_9').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_9').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula2').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_10').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula3').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    var f = document.getElementById('respuesta_17').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula4').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_25').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula5').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula6() {
    var f = document.getElementById('respuesta_26').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula6').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula7() {
    var f = document.getElementById('respuesta_26').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula7').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_30').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula8').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula9() {
    var f = document.getElementById('respuesta_31').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula9').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula10() {
    var f = document.getElementById('respuesta_30').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula10').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula11() {
    var f = document.getElementById('respuesta_39').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula11').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula12() {
    var f = document.getElementById('respuesta_39').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula12').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula13() {
    var f = document.getElementById('respuesta_86').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula13').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula14() {
    var f = document.getElementById('respuesta_88').value || "";
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

function mostrarMensaje5() {
    document.getElementById("mensaje5").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje5")]);
}

function ocultarMensaje5() {
    document.getElementById("mensaje5").style.display = 'none';
}



</script>
    
</head>
<body> 
<div class="seccion izquierda">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <p>consejo para luego: podrias necesitar: \pmod{numero}, \equiv</p>
     <h1>4.4 Resolución de Congruencias</h1>
    <h2>4.4.1 Introducción</h2>
    
    <p>
    Resolver congruencias lineales, que tienen la forma 
    <span id="formula">
        \(   \)
    </span> 
    <input type="text" name="respuesta_9"   id="respuesta_9" oninput="actualizarFormula()" 
    value="<?php echo $respuesta_9?>" size="20" >
    , es una tarea esencial en el estudio de la teoría de números y sus 
    aplicaciones, así como resolver ecuaciones lineales desempeña un papel importante en el cálculo y en el 
    álgebra lineal. 
    Para resolver congruencias lineales, usamos 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">
      módulo \( m \). Explicaremos cómo 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="8">
      a través 
    de los pasos del algoritmo de Euclides para encontrar 
     <input type="text"   value="<?php echo $respuesta_1; ?>" size="8" readonly>
    inversos módulo \( m \). 
    Una vez que hemos encontrado un 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">
      de \( a \) módulo \( m \), resolvemos la congruencia 
    <span id="formula2">
        \(   \)
    </span> 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="8">
      ambos lados de la congruencia por ese 
    <input type="text"  value="<?php echo $respuesta_3; ?>" size="8" readonly>
     .
    </p>

    <p>
    Los sistemas simultáneos de congruencias lineales se estudian desde la antigüedad. 
    Por ejemplo, el matemático chino Sun-Tsu los estudió en el siglo I. Mostraremos cómo resolver sistemas de 
    congruencias lineales con módulos que son primos 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
      dos a dos. 
    El resultado que probaremos se llama <strong>el teorema chino del resto</strong>, y nuestra demostración 
    proporcionará un método para encontrar todas las soluciones de tales sistemas de congruencias. 
    También mostraremos cómo utilizar el teorema chino del resto como base para realizar operaciones aritméticas 
    con números enteros 
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">
     .
    </p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_9 ?>
    <hr>
    <p>
    Introduciremos un resultado útil de Fermat, conocido como <strong>el pequeño teorema de Fermat</strong>, que 
    establece que si \( p \) es 
     <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">
      y no 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">
      a 
    \( a \), entonces 
    <span id="formula3">
        \(   \)
    </span> 
    <input type="text" name="respuesta_10"   id="respuesta_10" oninput="actualizarFormula3()" 
    value="<?php echo $respuesta_10?>" size="20" >. 
    Examinaremos la contraposición de esta afirmación, lo que nos llevará al concepto de un 
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">
    . 
    Un 
    <input type="text" value="<?php echo $respuesta_11; ?>" size="8" readonly>
    \( m \) en base \( a \) es un número 
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">
     \( m \) que se hace pasar por primo al 
      <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8"> 
    la congruencia 
    <span id="formula4">
        \(   \)
    </span> 
    <input type="text" name="respuesta_17"   id="respuesta_17" oninput="actualizarFormula4()" 
    value="<?php echo $respuesta_17?>" size="20" >. 
    También daremos un ejemplo de un <strong>número de Carmichael</strong>, que es un número 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">
     que es un 
     <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">
     para todas las bases \( a \) 
      <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="8">
       primas con él.
    </p>

    <p>
    También introduciremos la noción de <strong>logaritmos discretos</strong>, que son 
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">
      a los logaritmos ordinarios. 
    Para definir logaritmos discretos, primero debemos definir <strong>raíces 
    <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">    
     </strong>. 
    Una raíz primitiva de un número 
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="8">
      \( p \) es un entero \( r \) tal que todo entero 
      <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="8">
       por \( p \) es 
    congruente a una 
    <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="8">
      de \( r \) módulo \( p \). 
    Si \( r \) es una raíz primitiva de \( p \) y 
    <span id="formula5">
        \(   \)
    </span> 
    <input type="text" name="respuesta_25"   id="respuesta_25" oninput="actualizarFormula5()" 
    value="<?php echo $respuesta_25?>" size="20" >
, entonces \( e \) es el 
    logaritmo 
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="8">
      de \( a \) 
      <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="8">
       \( p \) en base \( r \). 
    Encontrar logaritmos discretos resulta ser un problema extremadamente difícil en general. 
    La dificultad de este problema es la base de la seguridad de muchos sistemas criptográficos.
    </p>

    <button type="submit">Enviar</button>
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
    
    <h2>4.4.2 Congruencias Lineales</h2>

    <p>
    Una congruencia de la forma 
    <span id="formula6">
        \(   \)
    </span> 
    <input type="text" name="respuesta_26"   id="respuesta_26" oninput="actualizarFormula6()" 
    value="<?php echo $respuesta_26?>" size="20" >
    , donde \( m \) es un entero positivo, \( a \) y \( b \) son enteros, 
    y \( x \) es una variable, 
    se llama una <strong>congruencia lineal</strong>. Estas congruencias aparecen en toda la 
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">
      de 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="8">
      y sus aplicaciones.
    </p>

    <p>
    ¿Cómo podemos resolver la congruencia lineal 
    <span id="formula7">
        \(   \)
    </span> 
    ? Es decir, ¿cómo podemos encontrar
    todos los enteros 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="8">
    que la satisfacen?
    Un método que describiremos utiliza un entero 
    <span id="formula8">
        \(   \)
    </span> 
    <input type="text" name="respuesta_30"   id="respuesta_30" oninput="actualizarFormula8()" 
    value="<?php echo $respuesta_30?>" size="15" >
     tal que 
    <span id="formula9">
        \(   \)
    </span> 
    <input type="text" name="respuesta_31"   id="respuesta_31" oninput="actualizarFormula9()" 
    value="<?php echo $respuesta_31?>" size="25" >
    , 
    si tal entero existe.
    A este número 
    <span id="formula10">
        \(   \)
    </span> 
    se le llama <strong>
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">    
      de 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="8">
     módulo \( m \)</strong>.
    El Teorema 1 garantiza que tal inverso existe siempre que \( a \) y \( m \) sean primos 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8">
     .
    </p>

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
    <h3>Teorema 1</h3>
    <p>
    Si \( a \) y \( m \) son enteros primos 
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
      y \( m &gt;  \)
    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">
    , entonces existe un inverso
    de 
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="8">
      módulo \( m \).<br>
    Además, este inverso es 
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="8">
      módulo \( m \). (Es decir, existe un único entero positivo
    <span id="formula11">
        \(   \)
    </span> 
    <input type="text" name="respuesta_39"   id="respuesta_39" oninput="actualizarFormula11()" 
    value="<?php echo $respuesta_39?>" size="11" >
    menor que \( m \) que es inverso de 
    <input type="text"  value="<?php echo $respuesta_37; ?>" size="8" readonly>
    módulo \( m \), 
    y cualquier otro inverso de 
    <input type="text"  value="<?php echo $respuesta_37; ?>" size="8" readonly>
    módulo \( m \) es congruente con 
        <span id="formula12">
        \(   \)
    </span> 
    módulo \( m \).)
    </p>


    <button onmousedown="mostrarImagen()" onmouseup="ocultarImagen()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada" src="../../../../img/inverso.png" style="display: none; max-width: 100%"  >

    <script>
        function mostrarImagen() {
        var imagenMostrada = document.getElementById('imagenMostrada');

        // Mostrar la imagen
        imagenMostrada.style.display = 'block';
        }

        function ocultarImagen() {
        var imagenMostrada = document.getElementById('imagenMostrada');

        // Ocultar la imagen al soltar el botón
        imagenMostrada.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../../../img/menor.png" style="display: none; max-width: 100%" >

    <script>
        function mostrarImagen2() {
        var imagenMostrada2 = document.getElementById('imagenMostrada2');

        // Mostrar la imagen
        imagenMostrada2.style.display = 'block';
        }

        function ocultarImagen2() {
        var imagenMostrada2 = document.getElementById('imagenMostrada2');

        // Ocultar la imagen al soltar el botón
        imagenMostrada2.style.display = 'none';
        }
    </script>


    <button onmousedown="mostrarImagen3()" onmouseup="ocultarImagen3()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada3" src="../../../../img/inverso_menor.png" style="display: none; max-width: 100%" >

    <script>
        function mostrarImagen3() {
        var imagenMostrada3 = document.getElementById('imagenMostrada3');

        // Mostrar la imagen
        imagenMostrada3.style.display = 'block';
        }

        function ocultarImagen3() {
        var imagenMostrada3 = document.getElementById('imagenMostrada3');

        // Ocultar la imagen al soltar el botón
        imagenMostrada3.style.display = 'none';
        }
    </script>

 
    <button onmousedown="mostrarImagen3()" onmouseup="ocultarImagen3()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada3" src="../../../../img/inverso_menor.png" style="display: none; max-width: 100%" >

    <script>
        function mostrarImagen3() {
        var imagenMostrada3 = document.getElementById('imagenMostrada3');

        // Mostrar la imagen
        imagenMostrada3.style.display = 'block';
        }

        function ocultarImagen3() {
        var imagenMostrada3 = document.getElementById('imagenMostrada3');

        // Ocultar la imagen al soltar el botón
        imagenMostrada3.style.display = 'none';
        }
    </script>


    <h4>Demostración:</h4>
    <p>
    Por el Teorema 6 de la Sección 4.3, como \( \gcd(a, m) =  \)
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="8">
    , existen enteros \( s \) y \( t \) tales que<br>
     <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8">
    .<br>
    Esto implica que 
    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="6">
    \(   \equiv 
    \)
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="6">
    \(  \pmod{m} \).<br>
    Como \( tm \equiv \)
     <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="6">
    \(\pmod{m} \), se sigue que \( sa \equiv 1 \pmod{m} \).<br>
    Por lo tanto, \( s \) es un inverso de \( a \) módulo \( m \).<br>
    Que este inverso sea único módulo \( m \) queda como el <em>Ejercicio 7</em>.
    </p> 

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
    <?php echo $verificar_44 ?>

    <br><br>
    <button onmousedown="mostrarImagen4()" onmouseup="ocultarImagen4()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada4" src="../../../../img/congruencia_inverso.png" style="display: none; max-width: 100%" >

    <script>
        function mostrarImagen4() {
        var imagenMostrada3 = document.getElementById('imagenMostrada4');

        // Mostrar la imagen
        imagenMostrada4.style.display = 'block';
        }

        function ocultarImagen4() {
        var imagenMostrada4 = document.getElementById('imagenMostrada4');

        // Ocultar la imagen al soltar el botón
        imagenMostrada4.style.display = 'none';
        }
    </script>


    <button onmousedown="mostrarImagen5()" onmouseup="ocultarImagen5()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada5" src="../../../../img/modulo.png" style="display: none; max-width: 100%" >

    <script>
        function mostrarImagen5() {
        var imagenMostrada5 = document.getElementById('imagenMostrada5');

        // Mostrar la imagen
        imagenMostrada5.style.display = 'block';
        }

        function ocultarImagen5() {
        var imagenMostrada5 = document.getElementById('imagenMostrada5');

        // Ocultar la imagen al soltar el botón
        imagenMostrada5.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen6()" onmouseup="ocultarImagen6()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada6" src="../../../../img/modulo_dos.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen6() {
        var imagenMostrada6 = document.getElementById('imagenMostrada6');

        // Mostrar la imagen
        imagenMostrada6.style.display = 'block';
        }

        function ocultarImagen6() {
        var imagenMostrada6 = document.getElementById('imagenMostrada6');

        // Ocultar la imagen al soltar el botón
        imagenMostrada6.style.display = 'none';
        }
    </script>

    <button onmousedown="mostrarImagen7()" onmouseup="ocultarImagen7()">Ayuda</button>
    <img id="imagenMostrada7" src="../../../../img/ordenn.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen7() {
        var imagenMostrada7 = document.getElementById('imagenMostrada7');

        // Mostrar la imagen
        imagenMostrada7.style.display = 'block';
        }

        function ocultarImagen7() {
        var imagenMostrada7 = document.getElementById('imagenMostrada7');

        // Ocultar la imagen al soltar el botón
        imagenMostrada7.style.display = 'none';
        }
    </script>
    <hr>
    <p>
    Usar la 
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="6">
      para encontrar un inverso de \( a \) módulo \( m \) es fácil cuando 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="6">
     es pequeño. 
    Para encontrar este inverso, buscamos un múltiplo de 
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="6">
      que exceda en 
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="6">
     a un 
    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="6">
      de \( m \).<br>
    Por ejemplo, para encontrar un inverso de 3 módulo 7, podemos calcular \( j \cdot 3 \) para \( j = 1, 2, \dots, 6 \), 
    deteniéndonos cuando encontremos un múltiplo de 3 que sea uno más que un múltiplo de 7.
    </p>

    <p>
    Podemos acelerar este enfoque si notamos que \( 2 \cdot 3 \equiv -1 \pmod{7} \), lo cual implica que 
    \( (-2) \cdot 3 \equiv 1 \pmod{7} \).<br>
    Por lo tanto, \( 5 \cdot 3 \equiv 1 \pmod{7} \), así que <strong>5 es un inverso de 3 módulo 7</strong>.
    </p>

    <p>
    Podemos diseñar un algoritmo más eficiente que la 
    <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="11">
     para encontrar un inverso de 
    \( a \) módulo \( m \) cuando \( \gcd(a, m) = 1 \), 
    usando los pasos del 
    <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="19">
     . 
    Al invertir estos pasos, como en el Ejemplo 17 de la Sección 4.3, obtenemos una 
    combinación lineal 
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="6">
     .
    Reduciendo ambos lados módulo \( m \), concluimos que 
    <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="6">
    es un inverso de \( a \) módulo \( m \).
    </p>


    <button type="submit">Enviar</button>
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <?php echo $verificar_51 ?>
    <?php echo $verificar_52 ?>
    <?php echo $verificar_53 ?>
    <br><br>
    <button onmousedown="mostrarImagen8()" onmouseup="ocultarImagen8()">Ayuda</button>
    <img id="imagenMostrada8" src="../../../../img/diferente.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen8() {
        var imagenMostrada8 = document.getElementById('imagenMostrada8');

        // Mostrar la imagen
        imagenMostrada8.style.display = 'block';
        }

        function ocultarImagen8() {
        var imagenMostrada8 = document.getElementById('imagenMostrada8');

        // Ocultar la imagen al soltar el botón
        imagenMostrada8.style.display = 'none';
        }
    </script>
     
    <hr>
    <h3>Ejemplo 1</h3>
    <button onmousedown="mostrarImagen9()" onmouseup="ocultarImagen9()">Ayuda</button>
    <img id="imagenMostrada9" src="../../../../img/multiplo_uno.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen9() {
        var imagenMostrada9 = document.getElementById('imagenMostrada9');

        // Mostrar la imagen
        imagenMostrada9.style.display = 'block';
        }

        function ocultarImagen9() {
        var imagenMostrada9 = document.getElementById('imagenMostrada9');

        // Ocultar la imagen al soltar el botón
        imagenMostrada9.style.display = 'none';
        }
    </script>
    <p>
    Encuentra un inverso de 3 módulo 7 hallando primero los coeficientes de Bézout de 3 y 7.<br>
    (Ya hemos mostrado que 5 es un inverso de 3 módulo 7 por inspección).
    </p>

    <p><strong>Solución:</strong> Como \( \gcd(3, 7) = 1 \), el Teorema 1 nos garantiza que existe un inverso.</p>
    <p>
    El algoritmo de Euclides aplicado a 3 y 7 da:<br>
    \( 7 =  \)
     <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="6">
    <br>
    De esta ecuación se sigue que:<br>
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="6">
    \(  = 1 \)<br>
    Esto muestra que 
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="1">
    y 
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="1">
    son coeficientes de Bézout de 
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="1">
    y 
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="1">
    .<br>
    Por lo tanto,
    <input type="text" value="<?php echo $respuesta_56; ?>" size="1" readonly>
    es un inverso de 
    <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="1">
    módulo 
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="1">
    .<br>
    Cualquier entero congruente con 
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="1">
    \( \pmod{7} \), como \( 5, -9, 12, \dots \), también es un inverso de 3.
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
    <hr>
    </form>
</div>




<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">parentesis</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    <p>Sí, esos valores que mencionas:</p>

    <p>\(\{-9,\ -2,\ 5,\ 12,\ 19,\ \dots\}\)</p>

    <p>son todos inversos de 3 módulo 7, en el sentido de que todos son congruentes con 5 módulo 7 y cumplen:</p>

    <p>\[3 \cdot x \equiv 1 \pmod{7}\]</p>

    <h3>🔍 ¿Por qué?</h3>

    <p>Porque cualquier número congruente con 5 módulo 7 se puede escribir como:</p>

    <p>\[x = 5 + 7k \quad \text{para algún } k \in \mathbb{Z}\]</p>

    <p>Y como:</p>

    <p>\[3 \cdot 5 \equiv 1 \pmod{7}\]</p>

    <p>también:</p>

    <p>\[3 \cdot (5 + 7k) = 3 \cdot 5 + 3 \cdot 7k \equiv 1 + 0 \equiv 1 \pmod{7}\]</p>

    <p>Ya sabemos que:</p>

    <p>\[3 \cdot 5 \equiv 1 \pmod{7}\]</p>

    <p>Entonces 5 es el inverso de 3 módulo 7.</p>

    <p>Según el teorema, cualquier otro inverso de 3 módulo 7 es congruente con 5 módulo 7. Es decir:</p>

    <p>Los números ..., −9, −2, 5, 12, 19, ... son todos congruentes (mod 7)</p>

    <p>Porque:</p>

    <p>\[-2 \equiv 5 \pmod{7}\]</p>
    <p>\[12 \equiv 5 \pmod{7}\]</p>
    <p>\[19 \equiv 5 \pmod{7}\]</p>
    <p>etc.</p>
    </div>


    <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">parentesis</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
      <p>La frase "Encuentre un inverso de 3 módulo 7" se traduce matemáticamente como:</p>

    <p>Encuentre un \( x \) tal que \( 3 \cdot x \equiv 1 \pmod{7} \)</p>

    <p>Es decir, se está pidiendo encontrar un valor de \( x \) tal que al multiplicar \( 3 \) por 
    \( x \) y luego dividir por \( 7 \), el residuo (o resto) de esa división sea igual a \( 1 \).</p>

    <p>En otras palabras, el inverso de 3 módulo 7 es un número \( x \) tal que:</p>

    <p>\( 3 \cdot x - 1 \) es divisible entre \( 7 \).</p>

    </div>


    
    <button onmousedown="mostrarMensaje3()" onmouseup="ocultarMensaje3()">parentesis</button>
    <div id="mensaje3" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
     <h2>Inverso Multiplicativo y Modular</h2>

    <p>El inverso multiplicativo de un número \( a \) es un número \( x \) tal que:</p>

    <p>\[
    a \cdot x = 1
    \]</p>

    <p>Esto es cierto en el contexto de los números reales o enteros cuando trabajamos en el campo 
    de los números racionales o enteros.</p>

    <p>Por otro lado, el inverso en congruencia de un número \( a \) módulo \( m \) es un 
    número \( x \) tal que:</p>

    <p>\[
    a \cdot x \equiv 1 \pmod{m}
    \]</p>

    <p>Esto significa que cuando multiplicamos \( a \) por \( x \), el residuo de esa 
    multiplicación cuando la dividimos por \( m \) debe ser 1. Dicho de otra manera:</p>

    <p>\[
    a \cdot x - 1 \text{ es múltiplo de } m
    \]</p>

    <p>Por ejemplo:</p>

    <p>Si decimos que el inverso de \( 3 \) módulo \( 7 \) es \( 5 \), estamos diciendo que:</p>

    <p>\[
    3 \cdot 5 = 15 \equiv 1 \pmod{7}
    \]</p>

    <p>Es decir, \( 15 \) deja un residuo de 1 cuando se divide por \( 7 \).</p>
    </div>
    


    <h2>Ejemplo 2: Encontrar un inverso de 101 módulo 4620</h2>

    <p><strong>Solución:</strong> Para mayor claridad, presentamos todos los pasos utilizados para calcular un 
    inverso de 101 módulo 4620. (Solo el último paso va más allá de los métodos desarrollados en la Sección 4.3 e 
    ilustrados en el Ejemplo 17 de esa sección).</p>

    <p>Primero, usamos 
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="20">    
    para mostrar que \(\gcd(101, 4620) = 1\). Luego revertimos los 
    pasos para encontrar 
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="20">
     \(a\) y \(b\) tales que:</p>

    <p style="text-align: center;">
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="20">    
    </p>

    <button type="submit">Enviar</button>
<?php echo $verificar_63 ?>
<?php echo $verificar_64 ?>
<?php echo $verificar_65 ?>
    <hr>
<p>Entonces, se sigue que \(a\) es un inverso de 101 módulo 4620.</p>

<p><strong>Algoritmo de Euclides:</strong></p>

    \( 4620 =    \)
    <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="15">
    <br><br>
    \(101 =   \)
    <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="15">
    <br><br>
    \(75 =    \)
    <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="15">
    <br><br>
    \(26 =   \)
    <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="15">
    <br><br>
    \(23 =  \) 
    <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="15">
    <br><br>
    \(3 =    \)
    <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="15">
    <br><br>
    \( 2 =   \)
    <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="15">
 
 
 

<p>Como el último residuo distinto de 
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="3">    
 es 
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="3">
, sabemos que \( \gcd(101, 4620) =  \)
<input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="3">
.</p>
 
    <button type="submit">Enviar</button>
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
    <hr>
    <p>Ahora encontramos los coeficientes de Bézout trabajando hacia atrás:</p>

    \( 1 = 3 - 1 \cdot 2 \)
    <br><br>
    \(  = 3 - 1 \cdot (23 - 7 \cdot 3) \) =
    <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="7">
    <br><br>
    \(  = -1 \cdot 23 + 8 \cdot (26 - 1 \cdot 23)  \)= 
    <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="7">
    <br><br> 
    \( = 8 \cdot 26 - 9 \cdot (75 - 2 \cdot 26)  \)= 
    <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="11">
    <br><br>
    \(= -9 \cdot 75 + 26 \cdot (101 - 1 \cdot 75)  \)=  
    <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="11">
    <br><br>
    \( = 26 \cdot 101 - 35 \cdot (4620 - 45 \cdot 101)  \)=
    <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="11">
     
 
    <br><br>

    <p>Que 
    <input type="text" value="<?php echo $respuesta_80; ?>" size="11" readonly>    
    \(  = 1\) nos dice que 
    <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="6">
     y 
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="6">
     son coeficientes de Bézout de 
    4620 y 101, y que 
     <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="6">
    es un inverso de 101 módulo 4620.</p>


    <button type="submit">Enviar</button>
    <?php echo $verificar_76 ?>
    <?php echo $verificar_77 ?>
    <?php echo $verificar_78 ?>
    <?php echo $verificar_79 ?>
    <?php echo $verificar_80 ?> 
    <?php echo $verificar_81 ?>
    <?php echo $verificar_82 ?>
    <?php echo $verificar_83 ?>
    <br><br>
    <button onmousedown="mostrarMensaje4()" onmouseup="ocultarMensaje4()">parentesis</button>
    <div id="mensaje4" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    el que voy a sustituir es el que agrupo, y que dejo con signo positivo.
    </div>

    <button onmousedown="mostrarImagen10()" onmouseup="ocultarImagen10()">Ayuda</button>
    <img id="imagenMostrada10" src="../../../../img/agrupacion.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen10() {
        var imagenMostrada10 = document.getElementById('imagenMostrada10');

        // Mostrar la imagen
        imagenMostrada10.style.display = 'block';
        }

        function ocultarImagen10() {
        var imagenMostrada10 = document.getElementById('imagenMostrada10');

        // Ocultar la imagen al soltar el botón
        imagenMostrada10.style.display = 'none';
        }
    </script>
     
    <hr>
    <h2>Ejemplo 3: ¿Cuáles son las soluciones de la congruencia lineal \(3x \equiv 4 \pmod{7}\)?</h2>
    <p><strong>Solución:</strong> Por el Ejemplo 1, sabemos que 
    <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="2">
      es un inverso de 3 módulo 7. 
    <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="6">
      ambos lados de la congruencia por 
    <input type="text" value="<?php echo $respuesta_84; ?>" size="2" readonly>
    :</p>

    <span id="formula13">
        \(   \)
    </span> 
    <input type="text" name="respuesta_86"   id="respuesta_86" oninput="actualizarFormula13()" 
    value="<?php echo $respuesta_86?>" size="20" >

 
    <br><br>
    <p>ahora 
    <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="11">    
    la congruencias</p>

 
    <p>  Las soluciones de la congruencia son todos los enteros \(x\) tales que:</p>

    <span id="formula14">
        \(   \)
    </span> 
    <input type="text" name="respuesta_88"   id="respuesta_88" oninput="actualizarFormula14()" 
    value="<?php echo $respuesta_88?>" size="20" >

 

    <p>Es decir: 6, 13, 20, … y −1, −8, −15, …</p>



    <button type="submit">Enviar</button>
    <?php echo $verificar_84 ?>
    <?php echo $verificar_85 ?>
    <?php echo $verificar_86 ?>
    <?php echo $verificar_87 ?>
    <?php echo $verificar_88 ?>


    <br><br>

    <button onmousedown="mostrarMensaje5()" onmouseup="ocultarMensaje5()">solucion</button>
    <div id="mensaje5" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
    <p>\[
    -2 \cdot 3x \equiv -2 \cdot 4 \pmod{7}
    \]</p>

    <p>Como \(-6 \equiv 1 \pmod{7}\) y \(-8 \equiv 6 \pmod{7}\), se sigue que si \(x\) es solución, entonces:</p>

    <p>\[
    x \equiv -8 \equiv 6 \pmod{7}
    \]</p>

    <p>Ahora verificamos si todo \(x\) con \(x \equiv 6 \pmod{7}\) es solución. Si asumimos eso, entonces:</p>

    <p>\[
    3x \equiv 3 \cdot 6 = 18 \equiv 4 \pmod{7}
    \]</p>

    <p>Esto muestra que todos esos \(x\) satisfacen la congruencia.</p>

    <p><strong>Conclusión:</strong> Las soluciones de la congruencia son todos los enteros \(x\) tales que:</p>

    <p>\[
    x \equiv 6 \pmod{7}
    \]</p>

    <p>Es decir: 6, 13, 20, … y −1, −8, −15, …</p>
    </div>

    <button onmousedown="mostrarImagen11()" onmouseup="ocultarImagen11()">Ayuda</button>
    <img id="imagenMostrada11" src="../../../../img/modulo_tres.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen11() {
        var imagenMostrada11 = document.getElementById('imagenMostrada11');

        // Mostrar la imagen
        imagenMostrada11.style.display = 'block';
        }

        function ocultarImagen11() {
        var imagenMostrada11 = document.getElementById('imagenMostrada11');

        // Ocultar la imagen al soltar el botón
        imagenMostrada11.style.display = 'none';
        }
    </script>



    <button onmousedown="mostrarImagen12()" onmouseup="ocultarImagen12()">Ayuda</button>
    <img id="imagenMostrada12" src="../../../../img/modulo_cuatro.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen12() {
        var imagenMostrada12 = document.getElementById('imagenMostrada12');

        // Mostrar la imagen
        imagenMostrada12.style.display = 'block';
        }

        function ocultarImagen12() {
        var imagenMostrada12 = document.getElementById('imagenMostrada12');

        // Ocultar la imagen al soltar el botón
        imagenMostrada12.style.display = 'none';
        }
    </script>



    <button onmousedown="mostrarImagen13()" onmouseup="ocultarImagen13()">Ayuda</button>
    <img id="imagenMostrada13" src="../../../../img/modulo_cinco.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen13() {
        var imagenMostrada13 = document.getElementById('imagenMostrada13');

        // Mostrar la imagen
        imagenMostrada13.style.display = 'block';
        }

        function ocultarImagen13() {
        var imagenMostrada13 = document.getElementById('imagenMostrada13');

        // Ocultar la imagen al soltar el botón
        imagenMostrada13.style.display = 'none';
        }
    </script>
      

    <button onmousedown="mostrarImagen14()" onmouseup="ocultarImagen14()">Conclusion/clave</button>
    <img id="imagenMostrada14" src="../../../../img/conclusion.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen14() {
        var imagenMostrada14 = document.getElementById('imagenMostrada14');

        // Mostrar la imagen
        imagenMostrada14.style.display = 'block';
        }

        function ocultarImagen14() {
        var imagenMostrada14 = document.getElementById('imagenMostrada14');

        // Ocultar la imagen al soltar el botón
        imagenMostrada14.style.display = 'none';
        }
    </script>

    <hr>









    <h3>4.4.3 El Teorema del Resto Chino</h3>
    <p>Los sistemas de congruencias lineales surgen en muchos contextos. Por ejemplo, como veremos más adelante, son 
    la base de un método que se puede utilizar para realizar operaciones 
    <input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="8">
    aritméticas con números 
    <input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="8">
    grandes. Tales 
    sistemas incluso pueden encontrarse como acertijos en los escritos de matemáticos antiguos chinos e hindúes, 
    como el vínculo que se da en el <strong>Ejemplo 4</strong>.</p>


    <button type="submit">Enviar</button>
    <?php echo $verificar_89 ?>
    <?php echo $verificar_90 ?>
    <hr>
    <h4>EJEMPLO 4</h4>
    <p>En el primer siglo, el matemático chino Sun-Tsu preguntó:</p>
    <blockquote>
    Hay ciertas cosas cuyo número es desconocido. Cuando se divide por 3, el residuo es 2; cuando se divide por 5, 
    el residuo es 3; y cuando se divide por 7, el residuo es 2. ¿Cuál será el número de cosas?
    </blockquote>
    <p>Este acertijo se puede traducir a la siguiente pregunta:</p>
    <blockquote>
    ¿Cuáles son las soluciones del sistema de congruencias?
    \[ x \equiv 2 \pmod{3}, \]
    \[ x \equiv 3 \pmod{5}, \]
    \[ x \equiv 2 \pmod{7}? \]
    </blockquote>
    
    <p>Resolvemos este sistema, y con ello el acertijo de Sun-Tsu, más adelante en esta sección. ◂</p>

    <p>El teorema del resto chino, nombrado así por la herencia china de los problemas que involucran sistemas 
    de congruencias lineales, establece que cuando los 
    <input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="9">
      de un sistema de 
    <input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="9">
      lineales son 
    <input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="9"> 
    entre sí, existe una solución 
    <input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="9">
      para el sistema módulo el producto de los módulos.</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_91 ?>
    <?php echo $verificar_92 ?>
    <?php echo $verificar_93 ?>
    <?php echo $verificar_94 ?>
    
    <br><br> 

    <button onmousedown="mostrarImagen15()" onmouseup="ocultarImagen15()">explicacion</button>
    <img id="imagenMostrada15" src="../../../../img/primos_dos.png" style="display: none; max-width: 100%" width="460">

    <script>
        function mostrarImagen15() {
        var imagenMostrada15 = document.getElementById('imagenMostrada15');

        // Mostrar la imagen
        imagenMostrada15.style.display = 'block';
        }

        function ocultarImagen15() {
        var imagenMostrada15 = document.getElementById('imagenMostrada15');

        // Ocultar la imagen al soltar el botón
        imagenMostrada15.style.display = 'none';
        }
    </script>
     
    <hr>
     
    <h4>TEOREMA 2: EL TEOREMA DEL RESTO CHINO</h4>
    <p>Sea \(m_1, m_2, \ldots, m_n\) enteros positivos 
    <input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="9">    
      que uno, 
    <input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="9">
      entre sí de 
    <input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="9">
     , y 
    \(a_1, a_2, \ldots, a_n\) enteros arbitrarios. Entonces el sistema</p>
    \[ x \equiv a_1 \pmod{m_1}, \]
    \[ x \equiv a_2 \pmod{m_2}, \]
    \[ \cdots \]
    \[ x \equiv a_n \pmod{m_n} \]
    <p>tiene una solución única módulo \(m = m_1m_2 \cdots m_n\). (Es decir, existe una solución 
    <input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="9">    
      tal que 
    \(0 \leq x < m\), y todas las demás soluciones son congruentes módulo
    <input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="9">
      con esta 
    <input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="9">
     .)</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_95 ?>
    <?php echo $verificar_96 ?>
    <?php echo $verificar_97 ?>
    <?php echo $verificar_98 ?> 
    <?php echo $verificar_99 ?>
    <?php echo $verificar_100 ?>
    
    <hr>

    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
    </form>
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
