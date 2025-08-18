<?php
 
 
for ($i = 1; $i <= 310; $i++) {
    ${"respuesta_" . $i} = '';
}


     
for ($i = 1; $i <= 310; $i++) {
    ${"verificar_" . $i} = '';
}
     

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
    // Establecer todas las respuestas correctas
    
    // Sección 1 (Preguntas 1-11)
    $respuesta_1 = 'trabajo';
    $respuesta_2 = 'valor';
    $respuesta_3 = 'diseñados';
    $respuesta_4 = 'maximizar';
    $respuesta_5 = 'transparencia';
    $respuesta_6 = 'informacion';
    $respuesta_7 = 'inspeccionan';
    $respuesta_8 = 'base';
    $respuesta_9 = 'adaptacion';
    $respuesta_10 = 'contiene';
    $respuesta_11 = 'compromiso';
    
    // Sección 2 (Preguntas 12-22)
    $respuesta_12 = 'garantizar';
    $respuesta_13 = 'informacion';
    $respuesta_14 = 'mejore';
    $respuesta_15 = 'enfoque';
    $respuesta_16 = 'medir';
    $respuesta_17 = 'progreso';
    $respuesta_18 = 'Objetivo del Producto';
    $respuesta_19 = 'Objetivo del Sprint';
    $respuesta_20 = 'Definición de Terminado';
    $respuesta_21 = 'reforzar';
    $respuesta_22 = 'empirismo';
    
    // Sección 3 (Preguntas 23-33)
    $respuesta_23 = 'Scrum Team';
    $respuesta_24 = 'interesados';
    $respuesta_25 = 'lista';
    $respuesta_26 = 'ordenada';
    $respuesta_27 = 'necesita';
    $respuesta_28 = 'mejorar';
    $respuesta_29 = 'fuente';
    $respuesta_30 = 'realizado';
    $respuesta_31 = 'Scrum Team';
    $respuesta_32 = 'Terminados';
    $respuesta_33 = 'preparados';
    
    // Sección 4 (Preguntas 34-44)
    $respuesta_34 = 'seleccionados';
    $respuesta_35 = 'evento';
    $respuesta_36 = 'Sprint Planning';
    $respuesta_37 = 'transparencia';
    $respuesta_38 = 'refinamiento';
    $respuesta_39 = 'dividir';
    $respuesta_40 = 'elementos';
    $respuesta_41 = 'pequeños';
    $respuesta_42 = 'continua';
    $respuesta_43 = 'detalles';
    $respuesta_44 = 'descripcion';
    
    // Sección 5 (Preguntas 45-55)
    $respuesta_45 = 'atributos';
    $respuesta_46 = 'Developers';
    $respuesta_47 = 'dimensionamiento';
    $respuesta_48 = 'Product Owner';
    $respuesta_49 = 'Developers';
    $respuesta_50 = 'seleccionar';
    $respuesta_51 = 'describe';
    $respuesta_52 = 'futuro';
    $respuesta_53 = 'objetivo';
    $respuesta_54 = 'Scrum Team';
    $respuesta_55 = 'Product Backlog';
    
    // Sección 6 (Preguntas 56-66)
    $respuesta_56 = 'definir';
    $respuesta_57 = 'qué';
    $respuesta_58 = 'vehiculo';
    $respuesta_59 = 'entregar';
    $respuesta_60 = 'limite';
    $respuesta_61 = 'interesadas';
    $respuesta_62 = 'usuarios';
    $respuesta_63 = 'clientes';
    $respuesta_64 = 'servicio';
    $respuesta_65 = 'fisico';
    $respuesta_66 = 'largo plazo';
    
    // Sección 7 (Preguntas 67-77)
    $respuesta_67 = 'cumplir';
    $respuesta_68 = 'abandonar';
    $respuesta_69 = 'Objetivo del Sprint';
    $respuesta_70 = 'por qué';
    $respuesta_71 = 'Product Backlog';
    $respuesta_72 = 'qué';
    $respuesta_73 = 'plan';
    $respuesta_74 = 'entregar';
    $respuesta_75 = 'Increment';
    $respuesta_76 = 'cómo';
    $respuesta_77 = 'plan';
    
    // Sección 8 (Preguntas 78-88)
    $respuesta_78 = 'por';
    $respuesta_79 = 'para';
    $respuesta_80 = 'Developers';
    $respuesta_81 = 'trabajo';
    $respuesta_82 = 'planean';
    $respuesta_83 = 'Sprint';
    $respuesta_84 = 'Objetivo del Sprint';
    $respuesta_85 = 'actualiza';
    $respuesta_86 = 'aprende';
    $respuesta_87 = 'inspeccionar';
    $respuesta_88 = 'Daily Scrum';
    
    // Sección 9 (Preguntas 89-99)
    $respuesta_89 = 'proposito';
    $respuesta_90 = 'Developers';
    $respuesta_91 = 'flexibilidad';
    $respuesta_92 = 'lograrlo';
    $respuesta_93 = 'Scrum Team';
    $respuesta_94 = 'Sprint Planning';
    $respuesta_95 = 'Sprint Backlog';
    $respuesta_96 = 'Objetivo del Sprint';
    $respuesta_97 = 'diferente';
    $respuesta_98 = 'Product Owner';
    $respuesta_99 = 'alcance';
    
    // Sección 10 (Preguntas 100-110)
    $respuesta_100 = 'Sprint Backlog';
    $respuesta_101 = 'peldaño';
    $respuesta_102 = 'Objetivo del Producto';
    $respuesta_103 = 'suma';
    $respuesta_104 = 'anteriores';
    $respuesta_105 = 'verifica';
    $respuesta_106 = 'funcionen';
    $respuesta_107 = 'utilizable';
    $respuesta_108 = 'crear';
    $respuesta_109 = 'dentro';
    $respuesta_110 = 'Sprint';
    
    // Sección 11 (Preguntas 111-121)
    $respuesta_111 = 'Sprint Review';
    $respuesta_112 = 'empirismo';
    $respuesta_113 = 'interesados';
    $respuesta_114 = 'final';
    $respuesta_115 = 'nunca';
    $respuesta_116 = 'trabajo';
    $respuesta_117 = 'a menos que';
    $respuesta_118 = 'Definicion de Terminado';
    $respuesta_119 = 'descripcion';
    $respuesta_120 = 'estado';
    $respuesta_121 = 'Increment';
    
    // Sección 12 (Preguntas 122-132)
    $respuesta_122 = 'medidas';
    $respuesta_123 = 'calidad';
    $respuesta_124 = 'producto';
    $respuesta_125 = 'Product Backlog';
    $respuesta_126 = 'Definicion de Terminado';
    $respuesta_127 = 'transparencia';
    $respuesta_128 = 'todos';
    $respuesta_129 = 'entendimiento';
    $respuesta_130 = 'trabajo';
    $respuesta_131 = 'Increment';
    $respuesta_132 = 'Product Backlog';
    
    // Sección 13 (Preguntas 133-143)
    $respuesta_133 = 'Definicion de Terminado';
    $respuesta_134 = 'Sprint Review';
    $respuesta_135 = 'Increment';
    $respuesta_136 = 'estandares';
    $respuesta_137 = 'Scrum Teams';
    $respuesta_138 = 'Definicion de Terminado';
    $respuesta_139 = 'Developers';
    $respuesta_140 = 'adherirse';
    $respuesta_141 = 'misma';
    $respuesta_142 = 'inmutable';
    $respuesta_143 = 'partes';
    
    // Sección 14 (Preguntas 144-154)
    $respuesta_144 = 'no es';
    $respuesta_145 = 'totalidad';
    $respuesta_146 = 'contenedor';
    $respuesta_147 = 'tecnicas';
    $respuesta_148 = 'metodologias';
    $respuesta_149 = 'practicas';
    $respuesta_150 = 'Ken Schwaber';
    $respuesta_151 = 'Jeff Sutherland';
    $respuesta_152 = 'OOPSLA';
    $respuesta_153 = '1995';
    $respuesta_154 = 'Ken y Jeff';
    
    // Sección 15 (Preguntas 155-157)
    $respuesta_155 = '30';
    $respuesta_156 = 'patrones';
    $respuesta_157 = 'productividad';

    // Marcar todas como correctas
    $verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = $verificar_5 = $verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
    $verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = $verificar_16 = $verificar_17 = $verificar_18 = $verificar_19 = $verificar_20 = 
    $verificar_21 = $verificar_22 = $verificar_23 = $verificar_24 = $verificar_25 = $verificar_26 = $verificar_27 = $verificar_28 = $verificar_29 = $verificar_30 = 
    $verificar_31 = $verificar_32 = $verificar_33 = $verificar_34 = $verificar_35 = $verificar_36 = $verificar_37 = $verificar_38 = $verificar_39 = $verificar_40 = 
    $verificar_41 = $verificar_42 = $verificar_43 = $verificar_44 = $verificar_45 = $verificar_46 = $verificar_47 = $verificar_48 = $verificar_49 = $verificar_50 = 
    $verificar_51 = $verificar_52 = $verificar_53 = $verificar_54 = $verificar_55 = $verificar_56 = $verificar_57 = $verificar_58 = $verificar_59 = $verificar_60 = 
    $verificar_61 = $verificar_62 = $verificar_63 = $verificar_64 = $verificar_65 = $verificar_66 = $verificar_67 = $verificar_68 = $verificar_69 = $verificar_70 = 
    $verificar_71 = $verificar_72 = $verificar_73 = $verificar_74 = $verificar_75 = $verificar_76 = $verificar_77 = $verificar_78 = $verificar_79 = $verificar_80 = 
    $verificar_81 = $verificar_82 = $verificar_83 = $verificar_84 = $verificar_85 = $verificar_86 = $verificar_87 = $verificar_88 = $verificar_89 = $verificar_90 = 
    $verificar_91 = $verificar_92 = $verificar_93 = $verificar_94 = $verificar_95 = $verificar_96 = $verificar_97 = $verificar_98 = $verificar_99 = $verificar_100 = 
    $verificar_101 = $verificar_102 = $verificar_103 = $verificar_104 = $verificar_105 = $verificar_106 = $verificar_107 = $verificar_108 = $verificar_109 = $verificar_110 = 
    $verificar_111 = $verificar_112 = $verificar_113 = $verificar_114 = $verificar_115 = $verificar_116 = $verificar_117 = $verificar_118 = $verificar_119 = $verificar_120 = 
    $verificar_121 = $verificar_122 = $verificar_123 = $verificar_124 = $verificar_125 = $verificar_126 = $verificar_127 = $verificar_128 = $verificar_129 = $verificar_130 = 
    $verificar_131 = $verificar_132 = $verificar_133 = $verificar_134 = $verificar_135 = $verificar_136 = $verificar_137 = $verificar_138 = $verificar_139 = $verificar_140 = 
    $verificar_141 = $verificar_142 = $verificar_143 = $verificar_144 = $verificar_145 = $verificar_146 = $verificar_147 = $verificar_148 = $verificar_149 = $verificar_150 = 
    $verificar_151 = $verificar_152 = $verificar_153 = $verificar_154 = $verificar_155 = $verificar_156 = $verificar_157 = "correcto";
}else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'trabajo') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'valor') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'diseñados') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'maximizar') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'transparencia') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'informacion') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'inspeccionan') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'base') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'adaptacion') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'contiene') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'compromiso') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


     // Verificar la respuesta de la primera pregunta
     $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
     if ($respuesta_12 === 'garantizar') {  
         $verificar_12 = "correcto";
     } elseif ($respuesta_12 === '') {
         $verificar_12 = '';
     } else {
         $verificar_12 = "incorrecto";
     }
  
     // Verificar la respuesta de la segunda pregunta
     $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
     if ($respuesta_13 === 'informacion') { 
         $verificar_13 = "correcto";
     } elseif ($respuesta_13 === '') {
         $verificar_13 = '';
     } else {
         $verificar_13 = "incorrecto";
     }
  
     // Verificar la respuesta de la tercera pregunta
     $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
     if ($respuesta_14 === 'mejore') {  
         $verificar_14 = "correcto";
     } elseif ($respuesta_14 === '') {
         $verificar_14 = '';
     } else {
         $verificar_14 = "incorrecto";
     }
  
     // Verificar la respuesta de la cuarta pregunta
     $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
     if ($respuesta_15 === 'enfoque') { 
         $verificar_15 = "correcto";
     } elseif ($respuesta_15 === '') {
         $verificar_15 = '';
     } else {
         $verificar_15 = "incorrecto";
     }
  
     // Verificar la respuesta de la quinta pregunta
     $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
     if ($respuesta_16 === 'medir') {  
         $verificar_16 = "correcto";
     } elseif ($respuesta_16 === '') {
         $verificar_16 = '';
     } else {
         $verificar_16 = "incorrecto";
     }
  
     // Verificar la respuesta de la sexta pregunta
     $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
     if ($respuesta_17 === 'progreso') {  
         $verificar_17 = "correcto";
     } elseif ($respuesta_17 === '') {
         $verificar_17 = '';
     } else {
         $verificar_17 = "incorrecto";
     }
  
     // Verificar la respuesta de la séptima pregunta
     $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
     if ($respuesta_18 === 'Objetivo del Producto' || $respuesta_18 === 'objetivo del producto') {  
         $verificar_18 = "correcto";
     } elseif ($respuesta_18 === '') {
         $verificar_18 = '';
     } else {
         $verificar_18 = "incorrecto";
     }
  
     // Verificar la respuesta de la octava pregunta
     $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
     if ($respuesta_19 === 'Objetivo del Sprint' || $respuesta_19 === 'objetivo del sprint') {  
         $verificar_19 = "correcto";
     } elseif ($respuesta_19 === '') {
         $verificar_19 = '';
     } else {
         $verificar_19 = "incorrecto";
     }
  
     // Verificar la respuesta de la novena pregunta
     $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
     if ($respuesta_20 === 'Definicion de Terminado' || $respuesta_20 === 'definicion de terminado') {  
         $verificar_20 = "correcto";
     } elseif ($respuesta_20 === '') {
         $verificar_20 = '';
     } else {
         $verificar_20 = "incorrecto";
     }
  
     // Verificar la respuesta de la décima pregunta
     $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
     if ($respuesta_21 === 'reforzar') {  
         $verificar_21 = "correcto";
     } elseif ($respuesta_21 === '') {
         $verificar_21 = '';
     } else {
         $verificar_21 = "incorrecto";
     }
  
     // Verificar la respuesta de la undécima pregunta
     $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
     if ($respuesta_22 === 'empirismo') {  
         $verificar_22 = "correcto";
     } elseif ($respuesta_22 === '') {
         $verificar_22 = '';
     } else {
         $verificar_22 = "incorrecto";
     }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'Scrum Team'  || $respuesta_23 === 'scrum team') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'interesados') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'lista') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'ordenada') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'necesita') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'mejorar') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'fuente') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'realizado') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'Scrum Team' || $respuesta_31 === 'scrum team') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'Terminados' || $respuesta_32 === 'terminados') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'preparados') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'seleccionados') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'evento') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'Sprint Planning' || $respuesta_36 === 'sprint planning') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'transparencia') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

 $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
if ($respuesta_38 === 'refinamiento') { 
    $verificar_38 = "correcto";
} elseif ($respuesta_38 === '') {
    $verificar_38 = '';
} else {
    $verificar_38 = "incorrecto";
}

 $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
if ($respuesta_39 === 'dividir') { 
    $verificar_39 = "correcto";
} elseif ($respuesta_39 === '') {
    $verificar_39 = '';
} else {
    $verificar_39 = "incorrecto";
}

 $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
if ($respuesta_40 === 'elementos') { 
    $verificar_40 = "correcto";
} elseif ($respuesta_40 === '') {
    $verificar_40 = '';
} else {
    $verificar_40 = "incorrecto";
}

 $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
if ($respuesta_41 === 'pequeños') { 
    $verificar_41 = "correcto";
} elseif ($respuesta_41 === '') {
    $verificar_41 = '';
} else {
    $verificar_41 = "incorrecto";
}

 $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
if ($respuesta_42 === 'continua') { 
    $verificar_42 = "correcto";
} elseif ($respuesta_42 === '') {
    $verificar_42 = '';
} else {
    $verificar_42 = "incorrecto";
}

 $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
if ($respuesta_43 === 'detalles') { 
    $verificar_43 = "correcto";
} elseif ($respuesta_43 === '') {
    $verificar_43 = '';
} else {
    $verificar_43 = "incorrecto";
}

 $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
if ($respuesta_44 === 'descripcion') { 
    $verificar_44 = "correcto";
} elseif ($respuesta_44 === '') {
    $verificar_44 = '';
} else {
    $verificar_44 = "incorrecto";
}

 $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
if ($respuesta_45 === 'atributos') { 
    $verificar_45 = "correcto";
} elseif ($respuesta_45 === '') {
    $verificar_45 = '';
} else {
    $verificar_45 = "incorrecto";
}

 $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
if ($respuesta_46 === 'Developers' || $respuesta_46 === 'developers') { 
    $verificar_46 = "correcto";
} elseif ($respuesta_46 === '') {
    $verificar_46 = '';
} else {
    $verificar_46 = "incorrecto";
}

 $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
if ($respuesta_47 === 'dimensionamiento') { 
    $verificar_47 = "correcto";
} elseif ($respuesta_47 === '') {
    $verificar_47 = '';
} else {
    $verificar_47 = "incorrecto";
}

 $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
if ($respuesta_48 === 'Product Owner' || $respuesta_48 === 'product owner') { 
    $verificar_48 = "correcto";
} elseif ($respuesta_48 === '') {
    $verificar_48 = '';
} else {
    $verificar_48 = "incorrecto";
}

 $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
if ($respuesta_49 === 'Developers' || $respuesta_49 === 'developers') { 
    $verificar_49 = "correcto";
} elseif ($respuesta_49 === '') {
    $verificar_49 = '';
} else {
    $verificar_49 = "incorrecto";
}

 $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
if ($respuesta_50 === 'seleccionar') { 
    $verificar_50 = "correcto";
} elseif ($respuesta_50 === '') {
    $verificar_50 = '';
} else {
    $verificar_50 = "incorrecto";
}

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'describe') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'futuro') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'objetivo') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'Scrum Team' || $respuesta_54 === 'scrum team') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'Product Backlog' || $respuesta_55 === 'product backlog') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'definir') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'qué' || $respuesta_57 === 'que') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'vehiculo') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'entregar') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'limite') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'interesadas') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'usuarios') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'clientes') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'servicio') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'fisico') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'largo plazo') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'cumplir') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'abandonar') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'Objetivo del Sprint' || $respuesta_69 === 'objetivo del sprint') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'por qué' || $respuesta_70 === 'por que') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'Product Backlog'  || $respuesta_71 === 'product backlog') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'qué' || $respuesta_72 === 'que') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'plan') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'entregar') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'Increment' || $respuesta_75 === 'increment') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'cómo' || $respuesta_76 === 'como') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'plan') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'por') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'para') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'Developers' || $respuesta_80 === 'developers') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'trabajo') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'planean') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'Sprint' || $respuesta_83 === 'sprint') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'Objetivo del Sprint' || $respuesta_84 === 'objetivo del sprint') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'actualiza') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'aprende') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'inspeccionar') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'Daily Scrum' || $respuesta_88 === 'daily scrum') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'proposito') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'Developers' || $respuesta_90 === 'developers') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'flexibilidad') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'lograrlo') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'Scrum Team' || $respuesta_93 === 'scrum team') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'Sprint Planning' || $respuesta_94 === 'sprint planning') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'Sprint Backlog' || $respuesta_95 === 'sprint backlog') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'Objetivo del Sprint' || $respuesta_96 === 'objetivo del sprint') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'diferente') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'Product Owner' || $respuesta_98 === 'product owner') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'alcance') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'Sprint Backlog' || $respuesta_100 === 'sprint backlog') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'peldaño') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'Objetivo del Producto' || $respuesta_102 === 'objetivo del producto') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === 'suma') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'anteriores') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'verifica') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'funcionen') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'utilizable') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'crear') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'dentro') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'Sprint') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'Sprint Review' || $respuesta_111 === 'sprint review') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'empirismo') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'interesados') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'final') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'nunca') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'trabajo') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === 'a menos que') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'Definicion de Terminado' || $respuesta_118 === 'definicion de terminado') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'descripcion') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'estado') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'Increment') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
}



 
$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'medidas') {  
    $verificar_122 = "correcto";
} elseif ($respuesta_122 === '') {
    $verificar_122 = '';
} else {
    $verificar_122 = "incorrecto";
}

$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === 'calidad') {  
    $verificar_123 = "correcto";
} elseif ($respuesta_123 === '') {
    $verificar_123 = '';
} else {
    $verificar_123 = "incorrecto";
}

$respuesta_124 = isset($_POST['respuesta_124']) ? $_POST['respuesta_124'] : '';
if ($respuesta_124 === 'producto') {  
    $verificar_124 = "correcto";
} elseif ($respuesta_124 === '') {
    $verificar_124 = '';
} else {
    $verificar_124 = "incorrecto";
}

$respuesta_125 = isset($_POST['respuesta_125']) ? $_POST['respuesta_125'] : '';
if ($respuesta_125 === 'Product Backlog') {  
    $verificar_125 = "correcto";
} elseif ($respuesta_125 === '') {
    $verificar_125 = '';
} else {
    $verificar_125 = "incorrecto";
}

$respuesta_126 = isset($_POST['respuesta_126']) ? $_POST['respuesta_126'] : '';
if ($respuesta_126 === 'Definicion de Terminado' || $respuesta_126 === 'definicion de terminado') {  
    $verificar_126 = "correcto";
} elseif ($respuesta_126 === '') {
    $verificar_126 = '';
} else {
    $verificar_126 = "incorrecto";
}

$respuesta_127 = isset($_POST['respuesta_127']) ? $_POST['respuesta_127'] : '';
if ($respuesta_127 === 'transparencia') {  
    $verificar_127 = "correcto";
} elseif ($respuesta_127 === '') {
    $verificar_127 = '';
} else {
    $verificar_127 = "incorrecto";
}

$respuesta_128 = isset($_POST['respuesta_128']) ? $_POST['respuesta_128'] : '';
if ($respuesta_128 === 'todos') {  
    $verificar_128 = "correcto";
} elseif ($respuesta_128 === '') {
    $verificar_128 = '';
} else {
    $verificar_128 = "incorrecto";
}

$respuesta_129 = isset($_POST['respuesta_129']) ? $_POST['respuesta_129'] : '';
if ($respuesta_129 === 'entendimiento') {  
    $verificar_129 = "correcto";
} elseif ($respuesta_129 === '') {
    $verificar_129 = '';
} else {
    $verificar_129 = "incorrecto";
}

$respuesta_130 = isset($_POST['respuesta_130']) ? $_POST['respuesta_130'] : '';
if ($respuesta_130 === 'trabajo') {  
    $verificar_130 = "correcto";
} elseif ($respuesta_130 === '') {
    $verificar_130 = '';
} else {
    $verificar_130 = "incorrecto";
}

$respuesta_131 = isset($_POST['respuesta_131']) ? $_POST['respuesta_131'] : '';
if ($respuesta_131 === 'Increment' || $respuesta_131 === 'increment') {  
    $verificar_131 = "correcto";
} elseif ($respuesta_131 === '') {
    $verificar_131 = '';
} else {
    $verificar_131 = "incorrecto";
}

$respuesta_132 = isset($_POST['respuesta_132']) ? $_POST['respuesta_132'] : '';
if ($respuesta_132 === 'Product Backlog' || $respuesta_132 === 'product backlog') {  
    $verificar_132 = "correcto";
} elseif ($respuesta_132 === '') {
    $verificar_132 = '';
} else {
    $verificar_132 = "incorrecto";
}

$respuesta_133 = isset($_POST['respuesta_133']) ? $_POST['respuesta_133'] : '';
if ($respuesta_133 === 'Definicion de Terminado' || $respuesta_133 === 'definicion de terminado') {  
    $verificar_133 = "correcto";
} elseif ($respuesta_133 === '') {
    $verificar_133 = '';
} else {
    $verificar_133 = "incorrecto";
}

$respuesta_134 = isset($_POST['respuesta_134']) ? $_POST['respuesta_134'] : '';
if ($respuesta_134 === 'Sprint Review' || $respuesta_134 === 'sprint review') {  
    $verificar_134 = "correcto";
} elseif ($respuesta_134 === '') {
    $verificar_134 = '';
} else {
    $verificar_134 = "incorrecto";
}

$respuesta_135 = isset($_POST['respuesta_135']) ? $_POST['respuesta_135'] : '';
if ($respuesta_135 === 'Increment' || $respuesta_135 === 'increment') {  
    $verificar_135 = "correcto";
} elseif ($respuesta_135 === '') {
    $verificar_135 = '';
} else {
    $verificar_135 = "incorrecto";
}

$respuesta_136 = isset($_POST['respuesta_136']) ? $_POST['respuesta_136'] : '';
if ($respuesta_136 === 'estandares') {  
    $verificar_136 = "correcto";
} elseif ($respuesta_136 === '') {
    $verificar_136 = '';
} else {
    $verificar_136 = "incorrecto";
}

$respuesta_137 = isset($_POST['respuesta_137']) ? $_POST['respuesta_137'] : '';
if ($respuesta_137 === 'Scrum Teams' || $respuesta_137 === 'scrum teams') {  
    $verificar_137 = "correcto";
} elseif ($respuesta_137 === '') {
    $verificar_137 = '';
} else {
    $verificar_137 = "incorrecto";
}

$respuesta_138 = isset($_POST['respuesta_138']) ? $_POST['respuesta_138'] : '';
if ($respuesta_138 === 'Definicion de Terminado'|| $respuesta_138 === 'definicion de terminado') {  
    $verificar_138 = "correcto";
} elseif ($respuesta_138 === '') {
    $verificar_138 = '';
} else {
    $verificar_138 = "incorrecto";
}

$respuesta_139 = isset($_POST['respuesta_139']) ? $_POST['respuesta_139'] : '';
if ($respuesta_139 === 'Developers' || $respuesta_139 === 'developers') {  
    $verificar_139 = "correcto";
} elseif ($respuesta_139 === '') {
    $verificar_139 = '';
} else {
    $verificar_139 = "incorrecto";
}

$respuesta_140 = isset($_POST['respuesta_140']) ? $_POST['respuesta_140'] : '';
if ($respuesta_140 === 'adherirse') {  
    $verificar_140 = "correcto";
} elseif ($respuesta_140 === '') {
    $verificar_140 = '';
} else {
    $verificar_140 = "incorrecto";
}

$respuesta_141 = isset($_POST['respuesta_141']) ? $_POST['respuesta_141'] : '';
if ($respuesta_141 === 'misma') {  
    $verificar_141 = "correcto";
} elseif ($respuesta_141 === '') {
    $verificar_141 = '';
} else {
    $verificar_141 = "incorrecto";
}

$respuesta_142 = isset($_POST['respuesta_142']) ? $_POST['respuesta_142'] : '';
if ($respuesta_142 === 'inmutable') {  
    $verificar_142 = "correcto";
} elseif ($respuesta_142 === '') {
    $verificar_142 = '';
} else {
    $verificar_142 = "incorrecto";
}

$respuesta_143 = isset($_POST['respuesta_143']) ? $_POST['respuesta_143'] : '';
if ($respuesta_143 === 'partes') {  
    $verificar_143 = "correcto";
} elseif ($respuesta_143 === '') {
    $verificar_143 = '';
} else {
    $verificar_143 = "incorrecto";
}

$respuesta_144 = isset($_POST['respuesta_144']) ? $_POST['respuesta_144'] : '';
if ($respuesta_144 === 'no es') {  
    $verificar_144 = "correcto";
} elseif ($respuesta_144 === '') {
    $verificar_144 = '';
} else {
    $verificar_144 = "incorrecto";
}

$respuesta_145 = isset($_POST['respuesta_145']) ? $_POST['respuesta_145'] : '';
if ($respuesta_145 === 'totalidad') {  
    $verificar_145 = "correcto";
} elseif ($respuesta_145 === '') {
    $verificar_145 = '';
} else {
    $verificar_145 = "incorrecto";
}

$respuesta_146 = isset($_POST['respuesta_146']) ? $_POST['respuesta_146'] : '';
if ($respuesta_146 === 'contenedor') {  
    $verificar_146 = "correcto";
} elseif ($respuesta_146 === '') {
    $verificar_146 = '';
} else {
    $verificar_146 = "incorrecto";
}

$respuesta_147 = isset($_POST['respuesta_147']) ? $_POST['respuesta_147'] : '';
if ($respuesta_147 === 'tecnicas') {  
    $verificar_147 = "correcto";
} elseif ($respuesta_147 === '') {
    $verificar_147 = '';
} else {
    $verificar_147 = "incorrecto";
}

$respuesta_148 = isset($_POST['respuesta_148']) ? $_POST['respuesta_148'] : '';
if ($respuesta_148 === 'metodologias') {  
    $verificar_148 = "correcto";
} elseif ($respuesta_148 === '') {
    $verificar_148 = '';
} else {
    $verificar_148 = "incorrecto";
}

$respuesta_149 = isset($_POST['respuesta_149']) ? $_POST['respuesta_149'] : '';
if ($respuesta_149 === 'practicas') {  
    $verificar_149 = "correcto";
} elseif ($respuesta_149 === '') {
    $verificar_149 = '';
} else {
    $verificar_149 = "incorrecto";
}

$respuesta_150 = isset($_POST['respuesta_150']) ? $_POST['respuesta_150'] : '';
if ($respuesta_150 === 'Ken Schwaber') {  
    $verificar_150 = "correcto";
} elseif ($respuesta_150 === '') {
    $verificar_150 = '';
} else {
    $verificar_150 = "incorrecto";
}

$respuesta_151 = isset($_POST['respuesta_151']) ? $_POST['respuesta_151'] : '';
if ($respuesta_151 === 'Jeff Sutherland') {  
    $verificar_151 = "correcto";
} elseif ($respuesta_151 === '') {
    $verificar_151 = '';
} else {
    $verificar_151 = "incorrecto";
}

$respuesta_152 = isset($_POST['respuesta_152']) ? $_POST['respuesta_152'] : '';
if ($respuesta_152 === 'OOPSLA') {  
    $verificar_152 = "correcto";
} elseif ($respuesta_152 === '') {
    $verificar_152 = '';
} else {
    $verificar_152 = "incorrecto";
}

$respuesta_153 = isset($_POST['respuesta_153']) ? $_POST['respuesta_153'] : '';
if ($respuesta_153 === '1995') {  
    $verificar_153 = "correcto";
} elseif ($respuesta_153 === '') {
    $verificar_153 = '';
} else {
    $verificar_153 = "incorrecto";
}

$respuesta_154 = isset($_POST['respuesta_154']) ? $_POST['respuesta_154'] : '';
if ($respuesta_154 === 'Ken y Jeff') {  
    $verificar_154 = "correcto";
} elseif ($respuesta_154 === '') {
    $verificar_154 = '';
} else {
    $verificar_154 = "incorrecto";
}

$respuesta_155 = isset($_POST['respuesta_155']) ? $_POST['respuesta_155'] : '';
if ($respuesta_155 === '30') {  
    $verificar_155 = "correcto";
} elseif ($respuesta_155 === '') {
    $verificar_155 = '';
} else {
    $verificar_155 = "incorrecto";
}

$respuesta_156 = isset($_POST['respuesta_156']) ? $_POST['respuesta_156'] : '';
if ($respuesta_156 === 'patrones') {  
    $verificar_156 = "correcto";
} elseif ($respuesta_156 === '') {
    $verificar_156 = '';
} else {
    $verificar_156 = "incorrecto";
}

$respuesta_157 = isset($_POST['respuesta_157']) ? $_POST['respuesta_157'] : '';
if ($respuesta_157 === 'productividad') {  
    $verificar_157 = "correcto";
} elseif ($respuesta_157 === '') {
    $verificar_157 = '';
} else {
    $verificar_157 = "incorrecto";
}

$respuesta_158 = isset($_POST['respuesta_158']) ? $_POST['respuesta_158'] : '';
if ($respuesta_158 === 'Product Backlog' || $respuesta_158 === 'product backlog') {  
    $verificar_158 = "correcto";
} elseif ($respuesta_158 === '') {
    $verificar_158 = '';
} else {
    $verificar_158 = "incorrecto";
}

$respuesta_159 = isset($_POST['respuesta_159']) ? $_POST['respuesta_159'] : '';
if ($respuesta_159 === 'Sprint Backlog' || $respuesta_159 === 'sprint backlog') {  
    $verificar_159 = "correcto";
} elseif ($respuesta_159 === '') {
    $verificar_159 = '';
} else {
    $verificar_159 = "incorrecto";
}

$respuesta_160 = isset($_POST['respuesta_160']) ? $_POST['respuesta_160'] : '';
if ($respuesta_160 === 'Increment' || $respuesta_160 === 'increment' ) {  
    $verificar_160 = "correcto";
} elseif ($respuesta_160 === '') {
    $verificar_160 = '';
} else {
    $verificar_160 = "incorrecto";
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
    <link rel="stylesheet" href="../../../style.css"> 
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
<div class="seccion izquierda">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>Artefactos de Scrum</h2>
    
    <p>
    Los artefactos de Scrum representan 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="9">
     o 
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="9">
     . Están 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="9">
      para 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="9">
      la 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="9">
      de la 
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="9">
      clave. Por lo tanto, todas las personas que los 
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="9">
      tienen la misma 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="9">
      de 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="9">
     .
    </p>
  
    <p>
    Cada artefacto 
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="9">
     un 
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="9">
      para 
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="9">
      que proporcione 
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="9">
      que 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="9">
      la transparencia y el 
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="9">
      frente al cual se pueda 
    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="9">
      el 
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="9">
     :
    </p>
  
    <ul>
        <li>Para el 
        <input type="text" name="respuesta_158" value="<?php echo $respuesta_158; ?>" size="20">     
         , es el 
        <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="20">    
        .</li>
        <li>Para el 
        <input type="text" name="respuesta_159" value="<?php echo $respuesta_159; ?>" size="20">     
         , es el 
        <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="20">    
        .</li>
        <li>Para el 
        <input type="text" name="respuesta_160" value="<?php echo $respuesta_160; ?>" size="20">     
          es la 
        <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="20">    
        .</li>
    </ul>
  
    <p>
    Estos compromisos existen para 
    <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="9">
    el 
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="9">
     y los valores de Scrum para el 
    <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="9">
     y sus
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="9">
     .
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
    
    <hr>

    <h3>Product Backlog</h3>
    <p>
    El Product Backlog es una 
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="9">
      emergente y 
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="9">
      de lo que se 
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="9">
      para 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="9">
      el producto. Es la única 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="9">
      del trabajo 
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="9">
      por el 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="9">
    .
    </p>
    <p>
    Los elementos del Product Backlog que el Scrum Team puede dar por 
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="9">
     dentro de un Sprint se consideran 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="9">
      para ser 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="9">
      en un
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="9">
      de 
    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="12">
    . Suelen adquirir este
    grado de 
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="9">
      tras las actividades de 
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="9">
     . El refinamiento del Product Backlog es el acto de 
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="9">
      y definir aún más los 
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="9">
      del Product Backlog en elementos más 
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="9">
      y
    precisos. Esta es una actividad 
    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="9">
      para agregar 
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="9">
     , como una 
    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="9">
     , orden y tamaño.
    Los 
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="9">
      suelen variar según el ámbito del trabajo.
    </p>
    <p>
    Los 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="9">
      que realizarán el trabajo son responsables del 
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="14">
     . El 
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="9">
      puede influir en los 
    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="9">
      ayudándolos a entender y 
    <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="9">
      sus mejores alternativas.
    </p>



    <button type="submit">Enviar</button>
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
    <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>

    <hr>

    <h4>Compromiso: Objetivo del Producto</h4>
    <p>
    El Objetivo del Producto 
    <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="9">
      un estado 
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="9">
      del producto que puede servir como un 
    <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="9">
      para que el 
    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="9">
      planifique. El Objetivo del Producto está en el 
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="9">
     . El resto del Product Backlog emerge para 
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="9">
      "
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="9">
    " cumplirá con el Objetivo del Producto.
    </p>
    <p>
    Un producto es un 
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="9">
      para 
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="9">
      valor. Tiene un 
    <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="9">
      claro, personas 
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="9">
      conocidas, 
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="9">
      o 
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="9">
      bien definidos. 
    Un producto puede ser un 
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="9">
     , un producto 
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="9">
      o algo más abstracto.
    </p>
    <p>
    El Objetivo del Producto es el objetivo a 
    <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="9"> 
    del Scrum Team. Ellos deben 
    <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="9">
     (o 
    <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="9">
     )
    un objetivo antes de asumir el siguiente.
    </p>



   <h2>Sprint Backlog</h2>
  <p>
    El Sprint Backlog se compone del 
    <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="9">
     (
    <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="9">    
    ), el conjunto de elementos del 
    <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="9">
     seleccionados para el Sprint (
    <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="9">    
    ), así como un 
    <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="9">
     de acción para 
    <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="9">
     el 
    <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="9">
    (
    <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="9">
    ).
  </p>
  <p>
    El Sprint Backlog es un 
    <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="9">
      realizado 
    <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="9">
      y 
    <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="9">
      los 
    <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="9">
     . Es una imagen muy visible y en tiempo
    real del 
    <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="9">
      que los Developers 
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="9">
      realizar durante el 
    <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="9">
      para lograr el 
    <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="9">
    .
    En consecuencia, el Sprint Backlog se 
    <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="9">
      a lo largo del Sprint a medida que se 
    <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="9">
      más. Debe
    tener suficientes detalles para que puedan 
    <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="9">
      su progreso en la 
    <input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="9">
    .
  </p>

  <h4>Compromiso: Objetivo del Sprint</h4>
  <p>
    El Objetivo del Sprint es el único 
    <input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="9">
      del Sprint. Si bien el Objetivo del Sprint es un compromiso de los 
    <input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="9">
     , proporciona 
    <input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="9">
      en términos del trabajo exacto necesario para 
    <input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="9">
     . El Objetivo del Sprint también crea coherencia y enfoque, lo que alienta al 
    <input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="9">
     a trabajar en
    conjunto en lugar de en iniciativas separadas.
  </p>
  <p>
    El Objetivo del Sprint se crea durante el evento 
    <input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="9">
     y se agrega al 
    <input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="9">
    . Mientras
    los Developers trabajan durante el Sprint, tienen en mente el 
    <input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="9">
    . Si el trabajo resulta ser
    <input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="9">
      de lo que esperaban, colaboran con el 
    <input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="9">
      para negociar el 
    <input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="9">
      del 
    <input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="9">
     dentro del Sprint sin afectar el Objetivo del Sprint.
  </p>

  <hr>
    </form>
</div>




<div class="seccion derecha">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
    <h2>Increment</h2>
    <p>
    Un Increment es un 
    <input type="text" name="respuesta_101" value="<?php echo $respuesta_101; ?>" size="9">
     concreto hacia el 
    <input type="text" name="respuesta_102" value="<?php echo $respuesta_102; ?>" size="9">
     . Cada Increment se 
    <input type="text" name="respuesta_103" value="<?php echo $respuesta_103; ?>" size="9">
      a todos los Increments 
    <input type="text" name="respuesta_104" value="<?php echo $respuesta_104; ?>" size="9">
      y se 
    <input type="text" name="respuesta_105" value="<?php echo $respuesta_105; ?>" size="9">
      minuciosamente, lo que garantiza que todos los Increments
    <input type="text" name="respuesta_106" value="<?php echo $respuesta_106; ?>" size="9">
      juntos. Para proporcionar valor, el Increment debe ser 
    <input type="text" name="respuesta_107" value="<?php echo $respuesta_107; ?>" size="9">
     .
    </p>
    <p>
    Se pueden 
    <input type="text" name="respuesta_108" value="<?php echo $respuesta_108; ?>" size="9">
      múltiples Increments 
    <input type="text" name="respuesta_109" value="<?php echo $respuesta_109; ?>" size="9">v
      de un 
    <input type="text" name="respuesta_110" value="<?php echo $respuesta_110; ?>" size="9">
     . La suma de los Increments se presenta en la
    <input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="9">
      apoyando así el 
    <input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="9">
     . Sin embargo, se puede entregar un Increment a los
    <input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="9">
      antes del 
    <input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="9">
      del Sprint. La Sprint Review 
    <input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="9">
      debe considerarse una puerta para liberar valor.
    </p>
    <p>
    El 
    <input type="text" name="respuesta_116" value="<?php echo $respuesta_116; ?>" size="9">
      no puede considerarse parte de un Increment 
    <input type="text" name="respuesta_117" value="<?php echo $respuesta_117; ?>" size="9"> 
    cumpla con la 
    <input type="text" name="respuesta_118" value="<?php echo $respuesta_118; ?>" size="16">
    .
    </p>

    <h4>Compromiso: Definición de Terminado</h4>
    <p>
    La Definición de Terminado es una 
    <input type="text" name="respuesta_119" value="<?php echo $respuesta_119; ?>" size="9">
     formal del 
    <input type="text" name="respuesta_120" value="<?php echo $respuesta_120; ?>" size="9">
      del 
    <input type="text" name="respuesta_121" value="<?php echo $respuesta_121; ?>" size="9">
      cuando cumple con las
    <input type="text" name="respuesta_122" value="<?php echo $respuesta_122; ?>" size="9">
      de 
    <input type="text" name="respuesta_123" value="<?php echo $respuesta_123; ?>" size="9">
      requeridas para el 
    <input type="text" name="respuesta_124" value="<?php echo $respuesta_124; ?>" size="9">
     .
    </p>
    <p>
    En el momento en que un elemento del 
    <input type="text" name="respuesta_125" value="<?php echo $respuesta_125; ?>" size="9">
     cumple con la 
    <input type="text" name="respuesta_126" value="<?php echo $respuesta_126; ?>" size="9">
     , nace un Increment.
    </p>
    <p>
    La Definición de Terminado crea 
    <input type="text" name="respuesta_127" value="<?php echo $respuesta_127; ?>" size="9">
      al brindar a 
    <input type="text" name="respuesta_128" value="<?php echo $respuesta_128; ?>" size="9">
      un 
    <input type="text" name="respuesta_129" value="<?php echo $respuesta_129; ?>" size="9">
      compartido de qué
    <input type="text" name="respuesta_130" value="<?php echo $respuesta_130; ?>" size="9">
      se completó como parte del 
    <input type="text" name="respuesta_131" value="<?php echo $respuesta_131; ?>" size="9">
     . Si un elemento del 
    <input type="text" name="respuesta_132" value="<?php echo $respuesta_132; ?>" size="9">
     no cumple con la
    <input type="text" name="respuesta_133" value="<?php echo $respuesta_133; ?>" size="9">
     , no se puede publicar ni presentar en la 
    <input type="text" name="respuesta_134" value="<?php echo $respuesta_134; ?>" size="9">
    . En su lugar, vuelve al
    Product Backlog para su consideración futura.
    </p>
    <p>
    Si la Definición de Terminado para un 
    <input type="text" name="respuesta_135" value="<?php echo $respuesta_135; ?>" size="9">
      es parte de los 
    <input type="text" name="respuesta_136" value="<?php echo $respuesta_136; ?>" size="9">
      de la organización, todos los
    <input type="text" name="respuesta_137" value="<?php echo $respuesta_137; ?>" size="9">
      deben seguirla como mínimo. Si no es un estándar organizacional, el Scrum Team debe crear una 
    <input type="text" name="respuesta_138" value="<?php echo $respuesta_138; ?>" size="9">
      apropiada para el producto.
    </p>
    <p>
    Los 
    <input type="text" name="respuesta_139" value="<?php echo $respuesta_139; ?>" size="9">
      deben 
    <input type="text" name="respuesta_140" value="<?php echo $respuesta_140; ?>" size="9">
      a la Definición de Terminado. Si hay varios Scrum Teams trabajando
    juntos en un producto, deben definir y cumplir mutuamente la
    <input type="text" name="respuesta_141" value="<?php echo $respuesta_141; ?>" size="9">
      Definición de Terminado.
    </p>

   <h2>Nota final</h2>
    <p>
    Scrum es gratuito y se ofrece en esta Guía. El marco de trabajo Scrum, como se describe aquí, es
    <input type="text" name="respuesta_142" value="<?php echo $respuesta_142; ?>" size="9">
     . Si bien es posible implementar solo 
    <input type="text" name="respuesta_143" value="<?php echo $respuesta_143; ?>" size="9">
      de Scrum, el resultado 
    <input type="text" name="respuesta_144" value="<?php echo $respuesta_144; ?>" size="9">
     Scrum. Scrum existe
    solo en su 
    <input type="text" name="respuesta_145" value="<?php echo $respuesta_145; ?>" size="9">
      y funciona bien como un 
    <input type="text" name="respuesta_146" value="<?php echo $respuesta_146; ?>" size="9">
      para otras 
    <input type="text" name="respuesta_147" value="<?php echo $respuesta_147; ?>" size="9">
     , 
    <input type="text" name="respuesta_148" value="<?php echo $respuesta_148; ?>" size="9">
      y 
    <input type="text" name="respuesta_149" value="<?php echo $respuesta_149; ?>" size="9">
     .
    </p>

    <h2>Historia de la Guía de Scrum</h2>
    <p>
    <input type="text" name="respuesta_150" value="<?php echo $respuesta_150; ?>" size="9">
      y 
    <input type="text" name="respuesta_151" value="<?php echo $respuesta_151; ?>" size="9">
     copresentaron Scrum por primera vez en la Conferencia 
    <input type="text" name="respuesta_152" value="<?php echo $respuesta_152; ?>" size="9">
      en
    <input type="text" name="respuesta_153" value="<?php echo $respuesta_153; ?>" size="9">
     . Básicamente, documentó el aprendizaje que 
    <input type="text" name="respuesta_154" value="<?php echo $respuesta_154; ?>" size="9">
     adquirieron en los años anteriores y
    publicaron la primera definición formal de Scrum.
    </p>
    <p>
    La Guía de Scrum documenta Scrum como se ha desarrollado, evolucionado y sostenido durante más de
    <input type="text" name="respuesta_155" value="<?php echo $respuesta_155; ?>" size="9">
     años por 
    <input type="text"  value="<?php echo $respuesta_150; ?>" size="9" readonly>
      y 
    <input type="text"   value="<?php echo $respuesta_151; ?>" size="9" readonly>
     . Otras fuentes proporcionan 
    <input type="text" name="respuesta_156" value="<?php echo $respuesta_156; ?>" size="9">
     , procesos y enfoques
    que complementan el marco de trabajo Scrum. Estos pueden aumentar la 
    <input type="text" name="respuesta_157" value="<?php echo $respuesta_157; ?>" size="9">
     , el valor, la
    creatividad y la satisfacción con los resultados.
    </p>
    <p>
    La historia completa de Scrum se describe en otros lugares. Para honrar los primeros sitios donde se
    probó y comprobó, reconocemos a Individual Inc., Newspage, Fidelity Investments e IDX (ahora GE
    Medical).
    </p>

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
        href="tercero.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
