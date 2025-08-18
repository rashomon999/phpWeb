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
    $respuesta_1 = 'Requerimientos';
    $respuesta_2 = 'Requerimientos del Proyecto';
    $respuesta_3 = 'Requerimientos del Producto';
    $respuesta_4 = 'Requerimientos Funcionales';
    $respuesta_5 = 'Requerimientos No Funcionales';
    $respuesta_6 = 'Restricciones Tecnológicas';
    $respuesta_7 = 'Restricciones de Calidad de Servicio';
    $respuesta_8 = 'Los requerimientos funcionales';
    $respuesta_9 = 'especifican comportamientos observables';
    $respuesta_10 = 'software debe proporcionar';
    $respuesta_11 = 'politicas';
    $respuesta_12 = 'deben';
    $respuesta_13 = 'aplicadas';
    $respuesta_14 = 'procesos';
    $respuesta_15 = 'deben';
    $respuesta_16 = 'a cabo';
    $respuesta_17 = 'Ejemplos';
    $respuesta_18 = 'politicas';
    $respuesta_19 = 'siempre';
    $respuesta_20 = 'nunca';
    $respuesta_21 = 'procesos';
    $respuesta_22 = 'especificar';
    $respuesta_23 = 'depositar';
    $respuesta_24 = 'retirar';
    $respuesta_25 = 'transferir';
    $respuesta_26 = 'Incluso';
    $respuesta_27 = 'altamente tecnico';
    $respuesta_28 = 'implementa';
    $respuesta_29 = 'protocolo';
    $respuesta_30 = 'Los requerimientos no funcionales de alguna manera';
    $respuesta_31 = 'restringen las tecnologias';
    $respuesta_32 = 'usarse en la implementacion';
    $respuesta_33 = 'plataformas';
    $respuesta_34 = 'computacion';
    $respuesta_35 = 'motores';
    $respuesta_36 = 'base de datos';
    $respuesta_37 = 'precisos';
    $respuesta_38 = 'resultados';
    $respuesta_39 = 'rapidez';
    $respuesta_40 = 'presentarse';
    $respuesta_41 = 'resultados';
    $respuesta_42 = 'Cuantos';
    $respuesta_43 = 'Algunos requerimientos no funcionales';
    $respuesta_44 = 'relacionarse';
    $respuesta_45 = 'operacion';
    $respuesta_46 = 'software';
    $respuesta_47 = 'dividirse';
    $respuesta_48 = 'restricciones tecnologicas';
    $respuesta_49 = 'restricciones de calidad de servicio';
    $respuesta_50 = 'relaciones esenciales entre si';
    $respuesta_51 = 'afectan positiva o negativamente';
    $respuesta_52 = 'requieren';
    $respuesta_53 = 'siempre';
    $respuesta_54 = 'modifique';
    $respuesta_55 = 'considere';
    $respuesta_56 = 'impacto';
    $respuesta_57 = 'causar';
    $respuesta_58 = 'Estos requerimientos obligan';
    $respuesta_59 = 'prohiben';
    $respuesta_60 = 'el uso de tecnologias de automatizacion';
    $respuesta_61 = 'especificas';
    $respuesta_62 = 'nombradas';
    $respuesta_63 = 'infraestructuras definidas';
    $respuesta_64 = 'no restringen';
    $respuesta_65 = 'especificas';
    $respuesta_66 = 'nombradas';
    $respuesta_67 = 'En su lugar';
    $respuesta_68 = 'especifican';
    $respuesta_69 = 'niveles aceptables';
    $respuesta_70 = 'desempeño';
    $respuesta_71 = 'mostrar';
    $respuesta_72 = 'solucion automatizada';
    $respuesta_73 = 'tiempo de respuesta';
    $respuesta_74 = 'el rendimiento';
    $respuesta_75 = '25010';
    $respuesta_76 = 'categoria';
    $respuesta_77 = 'provenir';
    $respuesta_78 = 'diferentes';
    $respuesta_79 = 'otras';
    $respuesta_80 = 'elicitacion';
    $respuesta_81 = 'fuente';
    $respuesta_82 = 'analisis';
    $respuesta_83 = 'categoria';
    $respuesta_84 = 'especificacion';
    $respuesta_85 = 'categoria';
    $respuesta_86 = 'autoridades';
    $respuesta_87 = 'validacion';
    $respuesta_88 = 'categoria';
    $respuesta_89 = 'diferentes';
    $respuesta_90 = 'software';
    $respuesta_91 = 'distintas';
    $respuesta_92 = 'complejidad';
    $respuesta_93 = 'abordarse';
    $respuesta_94 = 'politicas';
    $respuesta_95 = 'procesos';
    $respuesta_96 = 'tecnologia';
    $respuesta_97 = 'pequeños';
    $respuesta_98 = 'divide';
    $respuesta_99 = 'venceras';
    $respuesta_100 = 'experiencia';
    $respuesta_101 = 'politicas';
    $respuesta_102 = 'procesos';
    $respuesta_103 = 'tecnologia';
    $respuesta_104 = 'mezclados';
    $respuesta_105 = 'no entiende';
    $respuesta_106 = 'declararse';
    $respuesta_107 = 'existiera';
    $respuesta_108 = 'restricciones';
    $respuesta_109 = 'no funcionales';
    $respuesta_110 = 'abarcan';
    $respuesta_111 = 'un area tematica';
    $respuesta_112 = 'dominio';
    $respuesta_113 = 'convertirse';
    $respuesta_114 = 'funcionales';
    $respuesta_115 = 'dominio hijo';
    $respuesta_116 = 'convertirse';
    $respuesta_117 = 'inducir';
    $respuesta_118 = 'funcionales';
    $respuesta_119 = 'dominio hijo';
    $respuesta_120 = 'seguridad';
    $respuesta_121 = 'convertirse';
    $respuesta_122 = 'inducir';
    $respuesta_123 = 'funcionales';
    $respuesta_124 = 'dominio hijo';
    $respuesta_125 = 'auditoria';
    $respuesta_126 = 'Descomponer';
    $respuesta_127 = 'complejidad';
    $respuesta_128 = 'El Consejo Internacional de Ingenieria de Sistemas';
    $respuesta_129 = 'INCOSE';
    $respuesta_130 = 'define un sistema como';
    $respuesta_131 = 'una combinacion interactiva de elementos para lograr un objetivo definido';
    $respuesta_132 = 'Estos incluyen hardware';
    $respuesta_133 = 'software';
    $respuesta_134 = 'firmware';
    $respuesta_135 = 'personas';
    $respuesta_136 = 'informacion';
    $respuesta_137 = 'tecnicas';
    $respuesta_138 = 'instalaciones';
    $respuesta_139 = 'servicios';
    $respuesta_140 = 'otros elementos de soporte';
    $respuesta_141 = 'util';
    $respuesta_142 = 'obligatorio';
    $respuesta_143 = 'aplican';
    $respuesta_144 = 'sistemas mas grandes';
    $respuesta_145 = 'aplican';
    $respuesta_146 = 'sistema mas grande';
    $respuesta_147 = 'derivarse';
    $respuesta_148 = 'software';
    $respuesta_149 = 'sistema';
    $respuesta_150 = 'interes';
    $respuesta_151 = 'hardware';
    $respuesta_152 = 'sistema';
    $respuesta_153 = 'soporte se consideran';
    $respuesta_154 = 'plataforma';
    $respuesta_155 = 'infraestructura';
    $respuesta_156 = 'de modo que';
    $respuesta_157 = 'sistema';
    $respuesta_158 = 'mayoria';
    $respuesta_159 = 'software';
    $respuesta_160 = 'un elemento';
    $respuesta_161 = 'software';
    $respuesta_162 = 'Los requerimientos del software';
    $respuesta_163 = 'software';
    $respuesta_164 = 'sistema';

    // Marcar todas como correctas
    $verificar_1 = $verificar_2 = $verificar_3 = $verificar_4 = $verificar_5 = 
    $verificar_6 = $verificar_7 = $verificar_8 = $verificar_9 = $verificar_10 = 
    $verificar_11 = $verificar_12 = $verificar_13 = $verificar_14 = $verificar_15 = 
    $verificar_16 = $verificar_17 = $verificar_18 = $verificar_19 = $verificar_20 = 
    $verificar_21 = $verificar_22 = $verificar_23 = $verificar_24 = $verificar_25 = 
    $verificar_26 = $verificar_27 = $verificar_28 = $verificar_29 = $verificar_30 = 
    $verificar_31 = $verificar_32 = $verificar_33 = $verificar_34 = $verificar_35 = 
    $verificar_36 = $verificar_37 = $verificar_38 = $verificar_39 = $verificar_40 = 
    $verificar_41 = $verificar_42 = $verificar_43 = $verificar_44 = $verificar_45 = 
    $verificar_46 = $verificar_47 = $verificar_48 = $verificar_49 = $verificar_50 = 
    $verificar_51 = $verificar_52 = $verificar_53 = $verificar_54 = $verificar_55 = 
    $verificar_56 = $verificar_57 = $verificar_58 = $verificar_59 = $verificar_60 = 
    $verificar_61 = $verificar_62 = $verificar_63 = $verificar_64 = $verificar_65 = 
    $verificar_66 = $verificar_67 = $verificar_68 = $verificar_69 = $verificar_70 = 
    $verificar_71 = $verificar_72 = $verificar_73 = $verificar_74 = $verificar_75 = 
    $verificar_76 = $verificar_77 = $verificar_78 = $verificar_79 = $verificar_80 = 
    $verificar_81 = $verificar_82 = $verificar_83 = $verificar_84 = $verificar_85 = 
    $verificar_86 = $verificar_87 = $verificar_88 = $verificar_89 = $verificar_90 = 
    $verificar_91 = $verificar_92 = $verificar_93 = $verificar_94 = $verificar_95 = 
    $verificar_96 = $verificar_97 = $verificar_98 = $verificar_99 = $verificar_100 = 
    $verificar_101 = $verificar_102 = $verificar_103 = $verificar_104 = $verificar_105 = 
    $verificar_106 = $verificar_107 = $verificar_108 = $verificar_109 = $verificar_110 = 
    $verificar_111 = $verificar_112 = $verificar_113 = $verificar_114 = $verificar_115 = 
    $verificar_116 = $verificar_117 = $verificar_118 = $verificar_119 = $verificar_120 = 
    $verificar_121 = $verificar_122 = $verificar_123 = $verificar_124 = $verificar_125 = 
    $verificar_126 = $verificar_127 = $verificar_128 = $verificar_129 = $verificar_130 = 
    $verificar_131 = $verificar_132 = $verificar_133 = $verificar_134 = $verificar_135 = 
    $verificar_136 = $verificar_137 = $verificar_138 = $verificar_139 = $verificar_140 = 
    $verificar_141 = $verificar_142 = $verificar_143 = $verificar_144 = $verificar_145 = 
    $verificar_146 = $verificar_147 = $verificar_148 = $verificar_149 = $verificar_150 = 
    $verificar_151 = $verificar_152 = $verificar_153 = $verificar_154 = $verificar_155 = 
    $verificar_156 = $verificar_157 = $verificar_158 = $verificar_159 = $verificar_160 = 
    $verificar_161 = $verificar_162 = $verificar_163 = $verificar_164 = "correcto";
}else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'Requerimientos' || $respuesta_1 === 'Requerimientos de software') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'Requerimientos del Proyecto') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'Requerimientos del Producto') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'Requerimientos Funcionales') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'Requerimientos No Funcionales') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'Restricciones Tecnológicas') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'Restricciones de Calidad de Servicio') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'Los requerimientos funcionales') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'especifican comportamientos observables') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'software debe proporcionar') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'politicas') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'deben') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'aplicadas') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'procesos') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'deben') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'a cabo') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'Ejemplos') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'politicas') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'siempre') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'nunca') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'procesos') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'especificar') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'depositar') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'retirar') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'transferir') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'Incluso') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'altamente tecnico') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'implementa') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'protocolo') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'Los requerimientos no funcionales de alguna manera') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'restringen las tecnologias') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'usarse en la implementacion') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'plataformas') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'computacion') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'motores') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'base de datos') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'precisos') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'resultados') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'rapidez') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'presentarse') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'resultados') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'Cuantos') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'Algunos requerimientos no funcionales') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'relacionarse') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'operacion') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'software') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'dividirse') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'restricciones tecnologicas') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'restricciones de calidad de servicio') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'relaciones esenciales entre si') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'afectan positiva o negativamente') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'requieren') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'siempre') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'modifique') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'considere') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'impacto') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'causar') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'Estos requerimientos obligan') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'prohiben') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'el uso de tecnologias de automatizacion') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'especificas') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'nombradas') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'infraestructuras definidas') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'no restringen') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'especificas') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'nombradas') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'En su lugar') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'especifican') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'niveles aceptables') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'desempeño') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'mostrar') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'solucion automatizada') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'tiempo de respuesta') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'el rendimiento') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === '25010') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'categoria') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'provenir') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'diferentes') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'otras') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'elicitacion') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'fuente') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'analisis') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'categoria') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'especificacion') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'categoria') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'autoridades') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'validacion') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'categoria') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'diferentes') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'software') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'distintas') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'complejidad') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'abordarse') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'politicas') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'procesos') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'tecnologia') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'pequeños') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'divide') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'venceras') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'experiencia') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'politicas') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'procesos') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === 'tecnologia') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'mezclados') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'no entiende') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'declararse') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'existiera') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'restricciones') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'no funcionales') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'abarcan') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'un area tematica') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'dominio') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'convertirse') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'funcionales') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'dominio hijo') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'convertirse') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === 'inducir') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'funcionales') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'dominio hijo') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'seguridad') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'convertirse') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
}



$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'inducir') {  
    $verificar_122 = "correcto";
} elseif ($respuesta_122 === '') {
    $verificar_122 = '';
} else {
    $verificar_122 = "incorrecto";
}

$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === 'funcionales') {  
    $verificar_123 = "correcto";
} elseif ($respuesta_123 === '') {
    $verificar_123 = '';
} else {
    $verificar_123 = "incorrecto";
}

$respuesta_124 = isset($_POST['respuesta_124']) ? $_POST['respuesta_124'] : '';
if ($respuesta_124 === 'dominio hijo') {  
    $verificar_124 = "correcto";
} elseif ($respuesta_124 === '') {
    $verificar_124 = '';
} else {
    $verificar_124 = "incorrecto";
}

$respuesta_125 = isset($_POST['respuesta_125']) ? $_POST['respuesta_125'] : '';
if ($respuesta_125 === 'auditoria') {  
    $verificar_125 = "correcto";
} elseif ($respuesta_125 === '') {
    $verificar_125 = '';
} else {
    $verificar_125 = "incorrecto";
}

$respuesta_126 = isset($_POST['respuesta_126']) ? $_POST['respuesta_126'] : '';
if ($respuesta_126 === 'Descomponer') {  
    $verificar_126 = "correcto";
} elseif ($respuesta_126 === '') {
    $verificar_126 = '';
} else {
    $verificar_126 = "incorrecto";
}

$respuesta_127 = isset($_POST['respuesta_127']) ? $_POST['respuesta_127'] : '';
if ($respuesta_127 === 'complejidad') {  
    $verificar_127 = "correcto";
} elseif ($respuesta_127 === '') {
    $verificar_127 = '';
} else {
    $verificar_127 = "incorrecto";
}

$respuesta_128 = isset($_POST['respuesta_128']) ? $_POST['respuesta_128'] : '';
if ($respuesta_128 === 'El Consejo Internacional de Ingenieria de Sistemas') {  
    $verificar_128 = "correcto";
} elseif ($respuesta_128 === '') {
    $verificar_128 = '';
} else {
    $verificar_128 = "incorrecto";
}

$respuesta_129 = isset($_POST['respuesta_129']) ? $_POST['respuesta_129'] : '';
if ($respuesta_129 === 'INCOSE') {  
    $verificar_129 = "correcto";
} elseif ($respuesta_129 === '') {
    $verificar_129 = '';
} else {
    $verificar_129 = "incorrecto";
}

$respuesta_130 = isset($_POST['respuesta_130']) ? $_POST['respuesta_130'] : '';
if ($respuesta_130 === 'define un sistema como') {  
    $verificar_130 = "correcto";
} elseif ($respuesta_130 === '') {
    $verificar_130 = '';
} else {
    $verificar_130 = "incorrecto";
}

$respuesta_131 = isset($_POST['respuesta_131']) ? $_POST['respuesta_131'] : '';
if ($respuesta_131 === 'una combinacion interactiva de elementos para lograr un objetivo definido') {  
    $verificar_131 = "correcto";
} elseif ($respuesta_131 === '') {
    $verificar_131 = '';
} else {
    $verificar_131 = "incorrecto";
}

$respuesta_132 = isset($_POST['respuesta_132']) ? $_POST['respuesta_132'] : '';
if ($respuesta_132 === 'Estos incluyen hardware') {  
    $verificar_132 = "correcto";
} elseif ($respuesta_132 === '') {
    $verificar_132 = '';
} else {
    $verificar_132 = "incorrecto";
}

$respuesta_133 = isset($_POST['respuesta_133']) ? $_POST['respuesta_133'] : '';
if ($respuesta_133 === 'software') {  
    $verificar_133 = "correcto";
} elseif ($respuesta_133 === '') {
    $verificar_133 = '';
} else {
    $verificar_133 = "incorrecto";
}

$respuesta_134 = isset($_POST['respuesta_134']) ? $_POST['respuesta_134'] : '';
if ($respuesta_134 === 'firmware') {  
    $verificar_134 = "correcto";
} elseif ($respuesta_134 === '') {
    $verificar_134 = '';
} else {
    $verificar_134 = "incorrecto";
}

$respuesta_135 = isset($_POST['respuesta_135']) ? $_POST['respuesta_135'] : '';
if ($respuesta_135 === 'personas') {  
    $verificar_135 = "correcto";
} elseif ($respuesta_135 === '') {
    $verificar_135 = '';
} else {
    $verificar_135 = "incorrecto";
}

$respuesta_136 = isset($_POST['respuesta_136']) ? $_POST['respuesta_136'] : '';
if ($respuesta_136 === 'informacion') {  
    $verificar_136 = "correcto";
} elseif ($respuesta_136 === '') {
    $verificar_136 = '';
} else {
    $verificar_136 = "incorrecto";
}

$respuesta_137 = isset($_POST['respuesta_137']) ? $_POST['respuesta_137'] : '';
if ($respuesta_137 === 'tecnicas') {  
    $verificar_137 = "correcto";
} elseif ($respuesta_137 === '') {
    $verificar_137 = '';
} else {
    $verificar_137 = "incorrecto";
}

$respuesta_138 = isset($_POST['respuesta_138']) ? $_POST['respuesta_138'] : '';
if ($respuesta_138 === 'instalaciones') {  
    $verificar_138 = "correcto";
} elseif ($respuesta_138 === '') {
    $verificar_138 = '';
} else {
    $verificar_138 = "incorrecto";
}

$respuesta_139 = isset($_POST['respuesta_139']) ? $_POST['respuesta_139'] : '';
if ($respuesta_139 === 'servicios') {  
    $verificar_139 = "correcto";
} elseif ($respuesta_139 === '') {
    $verificar_139 = '';
} else {
    $verificar_139 = "incorrecto";
}

$respuesta_140 = isset($_POST['respuesta_140']) ? $_POST['respuesta_140'] : '';
if ($respuesta_140 === 'otros elementos de soporte') {  
    $verificar_140 = "correcto";
} elseif ($respuesta_140 === '') {
    $verificar_140 = '';
} else {
    $verificar_140 = "incorrecto";
}

$respuesta_141 = isset($_POST['respuesta_141']) ? $_POST['respuesta_141'] : '';
if ($respuesta_141 === 'util') {  
    $verificar_141 = "correcto";
} elseif ($respuesta_141 === '') {
    $verificar_141 = '';
} else {
    $verificar_141 = "incorrecto";
}

$respuesta_142 = isset($_POST['respuesta_142']) ? $_POST['respuesta_142'] : '';
if ($respuesta_142 === 'obligatorio') {  
    $verificar_142 = "correcto";
} elseif ($respuesta_142 === '') {
    $verificar_142 = '';
} else {
    $verificar_142 = "incorrecto";
}

$respuesta_143 = isset($_POST['respuesta_143']) ? $_POST['respuesta_143'] : '';
if ($respuesta_143 === 'aplican') {  
    $verificar_143 = "correcto";
} elseif ($respuesta_143 === '') {
    $verificar_143 = '';
} else {
    $verificar_143 = "incorrecto";
}

$respuesta_144 = isset($_POST['respuesta_144']) ? $_POST['respuesta_144'] : '';
if ($respuesta_144 === 'sistemas mas grandes') {  
    $verificar_144 = "correcto";
} elseif ($respuesta_144 === '') {
    $verificar_144 = '';
} else {
    $verificar_144 = "incorrecto";
}

$respuesta_145 = isset($_POST['respuesta_145']) ? $_POST['respuesta_145'] : '';
if ($respuesta_145 === 'aplican') {  
    $verificar_145 = "correcto";
} elseif ($respuesta_145 === '') {
    $verificar_145 = '';
} else {
    $verificar_145 = "incorrecto";
}

$respuesta_146 = isset($_POST['respuesta_146']) ? $_POST['respuesta_146'] : '';
if ($respuesta_146 === 'sistema mas grande') {  
    $verificar_146 = "correcto";
} elseif ($respuesta_146 === '') {
    $verificar_146 = '';
} else {
    $verificar_146 = "incorrecto";
}

$respuesta_147 = isset($_POST['respuesta_147']) ? $_POST['respuesta_147'] : '';
if ($respuesta_147 === 'derivarse') {  
    $verificar_147 = "correcto";
} elseif ($respuesta_147 === '') {
    $verificar_147 = '';
} else {
    $verificar_147 = "incorrecto";
}

$respuesta_148 = isset($_POST['respuesta_148']) ? $_POST['respuesta_148'] : '';
if ($respuesta_148 === 'software') {  
    $verificar_148 = "correcto";
} elseif ($respuesta_148 === '') {
    $verificar_148 = '';
} else {
    $verificar_148 = "incorrecto";
}

$respuesta_149 = isset($_POST['respuesta_149']) ? $_POST['respuesta_149'] : '';
if ($respuesta_149 === 'sistema') {  
    $verificar_149 = "correcto";
} elseif ($respuesta_149 === '') {
    $verificar_149 = '';
} else {
    $verificar_149 = "incorrecto";
}

$respuesta_150 = isset($_POST['respuesta_150']) ? $_POST['respuesta_150'] : '';
if ($respuesta_150 === 'interes') {  
    $verificar_150 = "correcto";
} elseif ($respuesta_150 === '') {
    $verificar_150 = '';
} else {
    $verificar_150 = "incorrecto";
}

$respuesta_151 = isset($_POST['respuesta_151']) ? $_POST['respuesta_151'] : '';
if ($respuesta_151 === 'hardware') {  
    $verificar_151 = "correcto";
} elseif ($respuesta_151 === '') {
    $verificar_151 = '';
} else {
    $verificar_151 = "incorrecto";
}

$respuesta_152 = isset($_POST['respuesta_152']) ? $_POST['respuesta_152'] : '';
if ($respuesta_152 === 'sistema') {  
    $verificar_152 = "correcto";
} elseif ($respuesta_152 === '') {
    $verificar_152 = '';
} else {
    $verificar_152 = "incorrecto";
}

$respuesta_153 = isset($_POST['respuesta_153']) ? $_POST['respuesta_153'] : '';
if ($respuesta_153 === 'soporte se consideran') {  
    $verificar_153 = "correcto";
} elseif ($respuesta_153 === '') {
    $verificar_153 = '';
} else {
    $verificar_153 = "incorrecto";
}

$respuesta_154 = isset($_POST['respuesta_154']) ? $_POST['respuesta_154'] : '';
if ($respuesta_154 === 'plataforma') {  
    $verificar_154 = "correcto";
} elseif ($respuesta_154 === '') {
    $verificar_154 = '';
} else {
    $verificar_154 = "incorrecto";
}

$respuesta_155 = isset($_POST['respuesta_155']) ? $_POST['respuesta_155'] : '';
if ($respuesta_155 === 'infraestructura') {  
    $verificar_155 = "correcto";
} elseif ($respuesta_155 === '') {
    $verificar_155 = '';
} else {
    $verificar_155 = "incorrecto";
}

$respuesta_156 = isset($_POST['respuesta_156']) ? $_POST['respuesta_156'] : '';
if ($respuesta_156 === 'de modo que') {  
    $verificar_156 = "correcto";
} elseif ($respuesta_156 === '') {
    $verificar_156 = '';
} else {
    $verificar_156 = "incorrecto";
}

$respuesta_157 = isset($_POST['respuesta_157']) ? $_POST['respuesta_157'] : '';
if ($respuesta_157 === 'sistema') {  
    $verificar_157 = "correcto";
} elseif ($respuesta_157 === '') {
    $verificar_157 = '';
} else {
    $verificar_157 = "incorrecto";
}

$respuesta_158 = isset($_POST['respuesta_158']) ? $_POST['respuesta_158'] : '';
if ($respuesta_158 === 'mayoria') {  
    $verificar_158 = "correcto";
} elseif ($respuesta_158 === '') {
    $verificar_158 = '';
} else {
    $verificar_158 = "incorrecto";
}

$respuesta_159 = isset($_POST['respuesta_159']) ? $_POST['respuesta_159'] : '';
if ($respuesta_159 === 'software') {  
    $verificar_159 = "correcto";
} elseif ($respuesta_159 === '') {
    $verificar_159 = '';
} else {
    $verificar_159 = "incorrecto";
}

$respuesta_160 = isset($_POST['respuesta_160']) ? $_POST['respuesta_160'] : '';
if ($respuesta_160 === 'un elemento') {  
    $verificar_160 = "correcto";
} elseif ($respuesta_160 === '') {
    $verificar_160 = '';
} else {
    $verificar_160 = "incorrecto";
}


$respuesta_161 = isset($_POST['respuesta_161']) ? $_POST['respuesta_161'] : '';
if ($respuesta_161 === 'software') {  
    $verificar_161 = "correcto";
} elseif ($respuesta_161 === '') {
    $verificar_161 = '';
} else {
    $verificar_161 = "incorrecto";
}

$respuesta_162 = isset($_POST['respuesta_162']) ? $_POST['respuesta_162'] : '';
if ($respuesta_162 === 'Los requerimientos del software') {  
    $verificar_162 = "correcto";
} elseif ($respuesta_162 === '') {
    $verificar_162 = '';
} else {
    $verificar_162 = "incorrecto";
}

$respuesta_163 = isset($_POST['respuesta_163']) ? $_POST['respuesta_163'] : '';
if ($respuesta_163 === 'software') {  
    $verificar_163 = "correcto";
} elseif ($respuesta_163 === '') {
    $verificar_163 = '';
} else {
    $verificar_163 = "incorrecto";
}

$respuesta_164 = isset($_POST['respuesta_164']) ? $_POST['respuesta_164'] : '';
if ($respuesta_164 === 'sistema') {  
    $verificar_164 = "correcto";
} elseif ($respuesta_164 === '') {
    $verificar_164 = '';
} else {
    $verificar_164 = "incorrecto";
}

$respuesta_165 = isset($_POST['respuesta_165']) ? $_POST['respuesta_165'] : '';
if ($respuesta_165 === '34534') {  
    $verificar_165 = "correcto";
} elseif ($respuesta_165 === '') {
    $verificar_165 = '';
} else {
    $verificar_165 = "incorrecto";
}

$respuesta_166 = isset($_POST['respuesta_166']) ? $_POST['respuesta_166'] : '';
if ($respuesta_166 === '34534') {  
    $verificar_166 = "correcto";
} elseif ($respuesta_166 === '') {
    $verificar_166 = '';
} else {
    $verificar_166 = "incorrecto";
}

$respuesta_167 = isset($_POST['respuesta_167']) ? $_POST['respuesta_167'] : '';
if ($respuesta_167 === '34534') {  
    $verificar_167 = "correcto";
} elseif ($respuesta_167 === '') {
    $verificar_167 = '';
} else {
    $verificar_167 = "incorrecto";
}

$respuesta_168 = isset($_POST['respuesta_168']) ? $_POST['respuesta_168'] : '';
if ($respuesta_168 === '34534') {  
    $verificar_168 = "correcto";
} elseif ($respuesta_168 === '') {
    $verificar_168 = '';
} else {
    $verificar_168 = "incorrecto";
}

$respuesta_169 = isset($_POST['respuesta_169']) ? $_POST['respuesta_169'] : '';
if ($respuesta_169 === '34534') {  
    $verificar_169 = "correcto";
} elseif ($respuesta_169 === '') {
    $verificar_169 = '';
} else {
    $verificar_169 = "incorrecto";
}

$respuesta_170 = isset($_POST['respuesta_170']) ? $_POST['respuesta_170'] : '';
if ($respuesta_170 === '34534') {  
    $verificar_170 = "correcto";
} elseif ($respuesta_170 === '') {
    $verificar_170 = '';
} else {
    $verificar_170 = "incorrecto";
}

$respuesta_171 = isset($_POST['respuesta_171']) ? $_POST['respuesta_171'] : '';
if ($respuesta_171 === '34534') {  
    $verificar_171 = "correcto";
} elseif ($respuesta_171 === '') {
    $verificar_171 = '';
} else {
    $verificar_171 = "incorrecto";
}

$respuesta_172 = isset($_POST['respuesta_172']) ? $_POST['respuesta_172'] : '';
if ($respuesta_172 === '34534') {  
    $verificar_172 = "correcto";
} elseif ($respuesta_172 === '') {
    $verificar_172 = '';
} else {
    $verificar_172 = "incorrecto";
}

$respuesta_173 = isset($_POST['respuesta_173']) ? $_POST['respuesta_173'] : '';
if ($respuesta_173 === '34534') {  
    $verificar_173 = "correcto";
} elseif ($respuesta_173 === '') {
    $verificar_173 = '';
} else {
    $verificar_173 = "incorrecto";
}

$respuesta_174 = isset($_POST['respuesta_174']) ? $_POST['respuesta_174'] : '';
if ($respuesta_174 === '34534') {  
    $verificar_174 = "correcto";
} elseif ($respuesta_174 === '') {
    $verificar_174 = '';
} else {
    $verificar_174 = "incorrecto";
}

$respuesta_175 = isset($_POST['respuesta_175']) ? $_POST['respuesta_175'] : '';
if ($respuesta_175 === '34534') {  
    $verificar_175 = "correcto";
} elseif ($respuesta_175 === '') {
    $verificar_175 = '';
} else {
    $verificar_175 = "incorrecto";
}

$respuesta_176 = isset($_POST['respuesta_176']) ? $_POST['respuesta_176'] : '';
if ($respuesta_176 === '34534') {  
    $verificar_176 = "correcto";
} elseif ($respuesta_176 === '') {
    $verificar_176 = '';
} else {
    $verificar_176 = "incorrecto";
}

$respuesta_177 = isset($_POST['respuesta_177']) ? $_POST['respuesta_177'] : '';
if ($respuesta_177 === '34534') {  
    $verificar_177 = "correcto";
} elseif ($respuesta_177 === '') {
    $verificar_177 = '';
} else {
    $verificar_177 = "incorrecto";
}

$respuesta_178 = isset($_POST['respuesta_178']) ? $_POST['respuesta_178'] : '';
if ($respuesta_178 === '34534') {  
    $verificar_178 = "correcto";
} elseif ($respuesta_178 === '') {
    $verificar_178 = '';
} else {
    $verificar_178 = "incorrecto";
}

$respuesta_179 = isset($_POST['respuesta_179']) ? $_POST['respuesta_179'] : '';
if ($respuesta_179 === '34534') {  
    $verificar_179 = "correcto";
} elseif ($respuesta_179 === '') {
    $verificar_179 = '';
} else {
    $verificar_179 = "incorrecto";
}

$respuesta_180 = isset($_POST['respuesta_180']) ? $_POST['respuesta_180'] : '';
if ($respuesta_180 === '34534') {  
    $verificar_180 = "correcto";
} elseif ($respuesta_180 === '') {
    $verificar_180 = '';
} else {
    $verificar_180 = "incorrecto";
}

$respuesta_181 = isset($_POST['respuesta_181']) ? $_POST['respuesta_181'] : '';
if ($respuesta_181 === '34534') {  
    $verificar_181 = "correcto";
} elseif ($respuesta_181 === '') {
    $verificar_181 = '';
} else {
    $verificar_181 = "incorrecto";
}

$respuesta_182 = isset($_POST['respuesta_182']) ? $_POST['respuesta_182'] : '';
if ($respuesta_182 === '34534') {  
    $verificar_182 = "correcto";
} elseif ($respuesta_182 === '') {
    $verificar_182 = '';
} else {
    $verificar_182 = "incorrecto";
}

$respuesta_183 = isset($_POST['respuesta_183']) ? $_POST['respuesta_183'] : '';
if ($respuesta_183 === '34534') {  
    $verificar_183 = "correcto";
} elseif ($respuesta_183 === '') {
    $verificar_183 = '';
} else {
    $verificar_183 = "incorrecto";
}

$respuesta_184 = isset($_POST['respuesta_184']) ? $_POST['respuesta_184'] : '';
if ($respuesta_184 === '34534') {  
    $verificar_184 = "correcto";
} elseif ($respuesta_184 === '') {
    $verificar_184 = '';
} else {
    $verificar_184 = "incorrecto";
}

$respuesta_185 = isset($_POST['respuesta_185']) ? $_POST['respuesta_185'] : '';
if ($respuesta_185 === '34534') {  
    $verificar_185 = "correcto";
} elseif ($respuesta_185 === '') {
    $verificar_185 = '';
} else {
    $verificar_185 = "incorrecto";
}

$respuesta_186 = isset($_POST['respuesta_186']) ? $_POST['respuesta_186'] : '';
if ($respuesta_186 === '34534') {  
    $verificar_186 = "correcto";
} elseif ($respuesta_186 === '') {
    $verificar_186 = '';
} else {
    $verificar_186 = "incorrecto";
}

$respuesta_187 = isset($_POST['respuesta_187']) ? $_POST['respuesta_187'] : '';
if ($respuesta_187 === '34534') {  
    $verificar_187 = "correcto";
} elseif ($respuesta_187 === '') {
    $verificar_187 = '';
} else {
    $verificar_187 = "incorrecto";
}

$respuesta_188 = isset($_POST['respuesta_188']) ? $_POST['respuesta_188'] : '';
if ($respuesta_188 === '34534') {  
    $verificar_188 = "correcto";
} elseif ($respuesta_188 === '') {
    $verificar_188 = '';
} else {
    $verificar_188 = "incorrecto";
}

$respuesta_189 = isset($_POST['respuesta_189']) ? $_POST['respuesta_189'] : '';
if ($respuesta_189 === '34534') {  
    $verificar_189 = "correcto";
} elseif ($respuesta_189 === '') {
    $verificar_189 = '';
} else {
    $verificar_189 = "incorrecto";
}

$respuesta_190 = isset($_POST['respuesta_190']) ? $_POST['respuesta_190'] : '';
if ($respuesta_190 === '34534') {  
    $verificar_190 = "correcto";
} elseif ($respuesta_190 === '') {
    $verificar_190 = '';
} else {
    $verificar_190 = "incorrecto";
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
    height: 370vh;
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

<form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 

  <div class="diagram-container" style="display: flex; justify-content: center; align-items: center; background: #f5f5f5; padding: 20px;">
    <div style="text-align: center;">
        <h2 style="color: #2c3e50; font-size: 24px; margin-bottom: 20px;">Categorías de Requisitos de Software</h2>
        <svg width="800" height="400" viewBox="0 0 800 400">
            <defs>
                <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="9" refY="3.5" orient="auto">
                    <polygon points="0 0, 10 3.5, 0 7" fill="#2c3e50"/>
                </marker>
                <filter id="nodeShadow" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="3"/>
                    <feOffset dx="3" dy="3" result="offsetblur"/>
                    <feComposite in="SourceGraphic" in2="offsetblur" operator="over"/>
                </filter>
            </defs>

            <!-- NODO RAIZ: REQUERIMIENTOS (respuesta_1) -->
            <rect x="300" y="20" width="200" height="50" rx="15" ry="15" fill="#ecf0f1" stroke="#2c3e50" stroke-width="3" filter="url(#nodeShadow)"/>
            <foreignObject x="300" y="30" width="200" height="30">
                <input xmlns="http://www.w3.org/1999/xhtml" type="text" name="respuesta_1"
                       value="<?php echo $respuesta_1; ?>"
                       style="width: 100%; font-size: 16px; text-align: center; font-weight: bold; color: #2c3e50; border: none; background: transparent;"/>
            </foreignObject>

            <!-- CONEXIONES PRIMARIAS -->
            <path stroke="#3498db" stroke-width="2.5" fill="none" d="M 400 70 L 250 120" marker-end="url(#arrowhead)"/>
            <path stroke="#3498db" stroke-width="2.5" fill="none" d="M 400 70 L 550 120" marker-end="url(#arrowhead)"/>

            <!-- NIVEL 2: CATEGORÍAS PRINCIPALES -->
            <rect x="150" y="120" width="200" height="40" rx="10" ry="10" fill="#dfe6e9" stroke="#2c3e50" stroke-width="2"/>
            <foreignObject x="150" y="130" width="200" height="20">
                <input xmlns="http://www.w3.org/1999/xhtml" type="text" name="respuesta_2"
                       value="<?php echo $respuesta_2; ?>"
                       style="width: 100%; font-size: 14px; text-align: center; color: #2c3e50; border: none; background: transparent;"/>
            </foreignObject>

            <rect x="450" y="120" width="200" height="40" rx="10" ry="10" fill="#dfe6e9" stroke="#2c3e50" stroke-width="2"/>
            <foreignObject x="450" y="130" width="200" height="20">
                <input xmlns="http://www.w3.org/1999/xhtml" type="text" name="respuesta_3"
                       value="<?php echo $respuesta_3; ?>"
                       style="width: 100%; font-size: 14px; text-align: center; color: #2c3e50; border: none; background: transparent;"/>
            </foreignObject>

            <!-- CONEXIONES SECUNDARIAS (de Requerimientos del Producto) -->
            <path stroke="#6c5ce7" stroke-width="2" fill="none" d="M 550 160 L 400 210" marker-end="url(#arrowhead)"/>
            <path stroke="#6c5ce7" stroke-width="2" fill="none" d="M 550 160 L 700 210" marker-end="url(#arrowhead)"/>

            <!-- NIVEL 3: SUBCATEGORÍAS -->
            <rect x="300" y="210" width="200" height="40" rx="8" ry="8" fill="#b2bec3" stroke="#2c3e50" stroke-width="1.5"/>
            <foreignObject x="300" y="220" width="200" height="20">
                <input xmlns="http://www.w3.org/1999/xhtml" type="text" name="respuesta_4"
                       value="<?php echo $respuesta_4; ?>"
                       style="width: 100%; font-size: 12px; text-align: center; color: #2c3e50; border: none; background: transparent;"/>
            </foreignObject>

            <rect x="500" y="210" width="200" height="40" rx="8" ry="8" fill="#b2bec3" stroke="#2c3e50" stroke-width="1.5"/>
            <foreignObject x="500" y="220" width="200" height="20">
                <input xmlns="http://www.w3.org/1999/xhtml" type="text" name="respuesta_5"
                       value="<?php echo $respuesta_5; ?>"
                       style="width: 100%; font-size: 12px; text-align: center; color: #2c3e50; border: none; background: transparent;"/>
            </foreignObject>

            <!-- CONEXIONES TERCIARIAS (de Requerimientos No Funcionales) -->
            <path stroke="#e74c3c" stroke-width="2" fill="none" d="M 600 250 L 400 300" marker-end="url(#arrowhead)"/>
            <path stroke="#e74c3c" stroke-width="2" fill="none" d="M 600 250 L 600 300" marker-end="url(#arrowhead)"/>

            <!-- NIVEL 4: SUBCATEGORÍAS DE NONFUNCTIONAL -->
            <rect x="300" y="300" width="200" height="40" rx="8" ry="8" fill="#95afc0" stroke="#2c3e50" stroke-width="1.5"/>
            <foreignObject x="300" y="310" width="200" height="20">
                <input xmlns="http://www.w3.org/1999/xhtml" type="text" name="respuesta_6"
                       value="<?php echo $respuesta_6; ?>"
                       style="width: 100%; font-size: 10px; text-align: center; color: #2c3e50; border: none; background: transparent;"/>
            </foreignObject>

            <rect x="500" y="300" width="200" height="40" rx="8" ry="8" fill="#95afc0" stroke="#2c3e50" stroke-width="1.5"/>
            <foreignObject x="500" y="310" width="200" height="20">
                <input xmlns="http://www.w3.org/1999/xhtml" type="text" name="respuesta_7"
                       value="<?php echo $respuesta_7; ?>"
                       style="width: 100%; font-size: 10px; text-align: center; color: #2c3e50; border: none; background: transparent;"/>
            </foreignObject>
        </svg>
    </div>
</div>
    
    <button type="submit">Enviar</button> 
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?>  


    <hr>

    <h3>1.4. 
    <input type="text"  value="<?php echo $respuesta_4; ?>"  size="23">    
    </h3>
    <p>
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="28"> 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="36">    
    que el 
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="24">
    :
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="9">
      que 
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="9">
      ser 
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="9">
      y 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="9">
      que 
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="9">
      llevarse 
    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="9">
    . 
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="9">
      de 
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="9">
     en un 
    software bancario podrían ser: “una cuenta 
    <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="9">
      debe tener al menos un cliente como su propietario”, 
    y “el saldo de una cuenta 
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="9">
      debe ser negativo”.</p>
    
    <p>Ejemplos de 
    <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="9">    
      podrían 
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="9">    
      el significado de 
    <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="9">
      dinero en una cuenta, 
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="9">
      dinero de una cuenta y 
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="9">
      dinero de una cuenta a otra.</p>

    <p>
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="9">    
      el software 
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="14">
      (no orientado a negocios), como el que 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="9">
      el 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="9">
      de 
    comunicaciones de red TCP/IP, tiene políticas y procesos: “un Puerto podrá existir con cero, una o muchas 
    Conexiones asociadas, pero una Conexión existirá exactamente en un Puerto asociado”, “los estados aceptables 
    de una Conexión serán ‘escucha’, ‘syn enviado’, ‘establecida’, ‘cerrando’,...”, y “si el tiempo de vida de
    un Segmento llega a cero, ese Segmento debe ser eliminado”. (Ver [5, c1] [6, c10] [9, c4].)</p>

    <button type="submit">Enviar</button> 
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



    <hr>


    <h3>
    <input type="text"  value="<?php echo $respuesta_5; ?>"  size="26">      
    </h3>
    
    <p>
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="47">    
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="21"> 
     que deben 
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="25">
    : ¿Qué 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="9">
     de 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="9">
     ? ¿Qué 
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="9">
      de 
    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="9">
     ? ¿Qué tan 
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="9"> 
    deben ser los 
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="9">
    ? ¿Con qué 
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="9">
      deben 
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="9">
      los
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="9">
    ? ¿
    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="9">
      registros de un 
    cierto tipo deben almacenarse?</p>

    <p>
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="35">    
     pueden 
    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="9">
      con la 
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="9">
      del 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="9">
     . (Ver el área 
    de conocimiento de Operación y Mantenimiento). (Ver también [5, c1] [6, c11] [9, c4].)</p>
    
    <p>Los requerimientos no funcionales pueden 
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="9">    
      además en 
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="24">
      y 
    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="29">
     . Tienen 
    <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="24">
      que los 
    <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="30">
    ,
    y 
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="9">
      que, 
    <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="9">
      que se 
    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="9">
      un requerimientos no funcional, se 
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="9">
      el 
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="9">
      que puede 
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="9">
      sobre los demás.</p>

    <button type="submit">Enviar</button> 
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
    <?php echo $verificar_52 ?>
    <?php echo $verificar_53 ?>
    <?php echo $verificar_54 ?>
    <?php echo $verificar_55 ?>
    <?php echo $verificar_56 ?>
    <?php echo $verificar_57 ?>

    <hr>

    <h3>1.6. Restricciones Tecnológicas</h3>
    <p>
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="26">    
      —o 
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="5">
    -
    <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="35">
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="9">
      y 
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="9">
      o 
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="20">
    . Ejemplos son los requerimientos para usar plataformas de computación específicas 
    (por ejemplo, Windows™, MacOS™, Android OS™, iOS™), lenguajes de programación (por ejemplo, Java, C++, C#, Python),
    compatibilidad con navegadores web específicos (por ejemplo, Chrome™, Safari™, Edge™), motores de base de datos
    determinados (por ejemplo, Oracle™, SQL Server™, MySQL™), y tecnologías generales (por ejemplo, computadoras de
    conjunto reducido de instrucciones —RISC—, bases de datos relacionales).</p>
    
    <p>Un requerimientos que prohíba el uso de punteros sería otro ejemplo. (Ver también [9, c4].)</p>


    <button type="submit">Enviar</button>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <?php echo $verificar_60 ?>
    <?php echo $verificar_61 ?>
    <?php echo $verificar_62 ?>
    <?php echo $verificar_63 ?>

    <hr>

    <h3>1.7. Restricciones de Calidad de Servicio</h3>
    <p>Estos requerimientos 
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="18">    
      el uso de tecnologías 
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="9">
      o 
    <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="9">
     . 
    <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="9">
     , 
    <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="9">
      los 
    <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="15">
      de 
    <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="9">
      que debe 
    <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="9">
      una 
    <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="18">
     . Ejemplos son el 
    <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="15">
     , 
    <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="11">
     (throughput), la precisión, la confiabilidad y la escalabilidad.</p>
    <p>La norma ISO/IEC 
    <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="6">    
     : “Ingeniería de sistemas y software – Requisitos de calidad y evaluación de sistemas y 
    software (SQuaRE) – Modelos de calidad de sistemas y software” [27] contiene una gran lista de los tipos de 
    características de calidad que pueden ser relevantes para el software. (Ver también [9, c4].)</p>
    <p>La seguridad y la protección también son un tema particularmente importante donde los requerimientos tienden a 
    ser pasados por alto. (Ver el área de conocimiento de Seguridad para obtener detalles sobre los tipos de 
    requerimientos de seguridad específicos que deben considerarse). (Ver también [2*, c13].)</p>

    <button type="submit">Enviar</button>
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
    <hr>
</div>




<div class="seccion derecha">
     <h3>1.8. ¿Por Qué Categorizar los Requisitos de Esta Manera?</h3>
    
    <p>Categorizar los requerimientos de esta manera es útil por las siguientes razones:</p><ul>
    <li>los requerimientos en una 
    <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="6">    
      tienden a 
    <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="6">
      de fuentes 
    <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="6">
      a las de 
    <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="6">
      categorías;</li>
    <li>las técnicas de 
    <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="6">    
      a menudo varían según la 
    <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="6">
     ;</li>
    <li>las técnicas de 
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="6">    
      varían según la 
    <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="6">
     ;</li>
    <li>las técnicas de 
    <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="6">    
      varían según la 
    <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="6">
     ;</li>
    <li>las 
    <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="6">    
      de 
    <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="6">
      varían según la 
    <input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="6">
     ;</li>
    <li>las 
    <input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="6">    
      categorías afectan al 
    <input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="6">
      resultante de 
    <input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="6">
      maneras.</li>
    </ul>

    <button type="submit">Enviar</button>
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
    <?php echo $verificar_88 ?>
    <?php echo $verificar_89 ?>
    <?php echo $verificar_90 ?>
    <?php echo $verificar_91 ?>

    <hr>

    <p>Además, organizar los requerimientos en estas categorías es beneficioso por las siguientes razones:</p>
    <ul>
    <li>la 
    <input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="9">    
      puede gestionarse mejor porque diferentes áreas pueden 
    <input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="6">
      por separado; los 
    ingenieros de software pueden tratar con la complejidad de las 
    <input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="6">
      y 
    <input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="6">
      sin preocuparse al mismo 
    tiempo por cuestiones de 
    <input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="6">
      de automatización (y viceversa). Un gran problema se convierte en dos más 
    <input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="6">
     . Esto es una gestión clásica de la complejidad mediante 
    <input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="6">
      y 
    <input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="6">
     ;</li>
    <li>se pueden aislar áreas de 
    <input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="9">    
      distintas; las partes interesadas, no los ingenieros de software, son 
    los expertos en las 
    <input type="text" name="respuesta_101" value="<?php echo $respuesta_101; ?>" size="6">
      y 
    <input type="text" name="respuesta_102" value="<?php echo $respuesta_102; ?>" size="6">
      que se van a automatizar. Los ingenieros de software, no las partes
    interesadas, son los expertos en 
    <input type="text" name="respuesta_103" value="<?php echo $respuesta_103; ?>" size="6">
     . Cuando a un experto del negocio se le presentan requerimientos 
    funcionales y no funcionales 
    <input type="text" name="respuesta_104" value="<?php echo $respuesta_104; ?>" size="6">
      para su revisión o validación, puede rendirse porque 
    <input type="text" name="respuesta_105" value="<?php echo $respuesta_105; ?>" size="9">
     —o 
    incluso no le interesan— los temas tecnológicos. El revisor de requerimientos relevante puede centrarse solo en 
    el subconjunto de requerimientos que le corresponde.</li>
    </ul>

    <button type="submit">Enviar</button>
    <?php echo $verificar_92 ?>
    <?php echo $verificar_93 ?>
    <?php echo $verificar_94 ?>
    <?php echo $verificar_95 ?>
    <?php echo $verificar_96 ?>
    <?php echo $verificar_97 ?>
    <?php echo $verificar_98 ?> 
    <?php echo $verificar_99 ?>
    <?php echo $verificar_100 ?>
    <?php echo $verificar_101 ?>
    <?php echo $verificar_102 ?>
    <?php echo $verificar_103 ?>
    <?php echo $verificar_104 ?>
    <?php echo $verificar_105 ?>
    <hr>
    <p>El Filtro de Tecnología Perfecta, descrito originalmente en [18, c1-4] pero también explicado en [8] y [9, c4], 
    ayuda a separar los requerimientos funcionales de los no funcionales. En pocas palabras, los requerimientos 
    funcionales son aquellos que todavía necesitarían 
    <input type="text" name="respuesta_106" value="<?php echo $respuesta_106; ?>" size="6">
      incluso si 
    <input type="text" name="respuesta_107" value="<?php echo $respuesta_107; ?>" size="6">
      una computadora con velocidad 
    infinita, memoria ilimitada, costo cero, sin fallos, etc., sobre la cual construir el software. Todos los demás
     requerimientos del producto de software son 
     <input type="text" name="respuesta_108" value="<?php echo $respuesta_108; ?>" size="9">
       sobre tecnologías de automatización y, por lo tanto, 
     son 
     <input type="text" name="respuesta_109" value="<?php echo $respuesta_109; ?>" size="11">
     .</p>

    <p>Los sistemas grandes a menudo 
    <input type="text" name="respuesta_110" value="<?php echo $respuesta_110; ?>" size="6">    
      más de 
    <input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="12">
      o 
    <input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="6">
     . Como se explica en [9, c6], el diseño 
    recursivo muestra cómo los requerimientos no funcionales en un dominio padre pueden 
    <input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="6">
      o inducir requerimientos
    <input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="9">
      en un 
    <input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="9">
    . Por ejemplo, un requerimientos no funcional sobre la seguridad del usuario en un 
    dominio bancario padre puede 
    <input type="text" name="respuesta_116" value="<?php echo $respuesta_116; ?>" size="6">
      o 
    <input type="text" name="respuesta_117" value="<?php echo $respuesta_117; ?>" size="6">
      requerimientos 
    <input type="text" name="respuesta_118" value="<?php echo $respuesta_118; ?>" size="9">
      en un 
    <input type="text" name="respuesta_119" value="<?php echo $respuesta_119; ?>" size="9">
      de 
    <input type="text" name="respuesta_120" value="<?php echo $respuesta_120; ?>" size="9">
     .
    De manera similar, los requerimientos no funcionales transversales sobre auditoría y gestión de transacciones 
    en un dominio bancario padre pueden 
    <input type="text" name="respuesta_121" value="<?php echo $respuesta_121; ?>" size="6">
      o 
    <input type="text" name="respuesta_122" value="<?php echo $respuesta_122; ?>" size="6">
      requerimientos 
    <input type="text" name="respuesta_123" value="<?php echo $respuesta_123; ?>" size="9">
      en un 
    <input type="text" name="respuesta_124" value="<?php echo $respuesta_124; ?>" size="9">
      de 
    <input type="text" name="respuesta_125" value="<?php echo $respuesta_125; ?>" size="6">
    y un dominio hijo de transacciones.
    <input type="text" name="respuesta_126" value="<?php echo $respuesta_126; ?>" size="9">
     sistemas grandes en un conjunto de dominios relacionados reduce 
    significativamente la 
    <input type="text" name="respuesta_127" value="<?php echo $respuesta_127; ?>" size="6">
    .</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_106 ?>
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
    <?php echo $verificar_124 ?>
    <?php echo $verificar_125 ?>
    <?php echo $verificar_126 ?>
    <?php echo $verificar_127 ?>

    <hr>


    <h3>1.9. Requisitos del Sistema y Requisitos del Software</h3>
    <p>
    <input type="text" name="respuesta_128" value="<?php echo $respuesta_128; ?>" size="45">    
    (
    <input type="text" name="respuesta_129" value="<?php echo $respuesta_129; ?>" size="8"> 
    ) 
    <input type="text" name="respuesta_130" value="<?php echo $respuesta_130; ?>" size="20">
    “
    <input type="text" name="respuesta_131" value="<?php echo $respuesta_131; ?>" size="70">
    . 
    <input type="text" name="respuesta_132" value="<?php echo $respuesta_132; ?>" size="20">
    , 
    <input type="text" name="respuesta_133" value="<?php echo $respuesta_133; ?>" size="9">
     , 
    <input type="text" name="respuesta_134" value="<?php echo $respuesta_134; ?>" size="9">
     , 
    <input type="text" name="respuesta_135" value="<?php echo $respuesta_135; ?>" size="9">
     ,
    <input type="text" name="respuesta_136" value="<?php echo $respuesta_136; ?>" size="9">
     , 
    <input type="text" name="respuesta_137" value="<?php echo $respuesta_137; ?>" size="9">
     , 
    <input type="text" name="respuesta_138" value="<?php echo $respuesta_138; ?>" size="9">
     , 
    <input type="text" name="respuesta_139" value="<?php echo $respuesta_139; ?>" size="9">
      y 
    <input type="text" name="respuesta_140" value="<?php echo $respuesta_140; ?>" size="23">
    ” [24].</p>

    <p>En algunos casos, es 
    <input type="text" name="respuesta_141" value="<?php echo $respuesta_141; ?>" size="9"> 
      o 
    <input type="text" name="respuesta_142" value="<?php echo $respuesta_142; ?>" size="9">
      distinguir entre requerimientos del sistema y requerimientos del software. 
    Los requerimientos del sistema se 
    <input type="text" name="respuesta_143" value="<?php echo $respuesta_143; ?>" size="9">
      a 
    <input type="text" name="respuesta_144" value="<?php echo $respuesta_144; ?>" size="18">
      —por ejemplo, un vehículo autónomo.
       <input type="text" name="respuesta_162" value="<?php echo $respuesta_162; ?>" size="27">
        se 
    <input type="text" name="respuesta_145" value="<?php echo $respuesta_145; ?>" size="9">
      solo a 
    <input type="text" name="respuesta_160" value="<?php echo $respuesta_160; ?>" size="9">
      de 
      <input type="text" name="respuesta_161" value="<?php echo $respuesta_161; ?>" size="9">
       dentro de ese 
    <input type="text" name="respuesta_146" value="<?php echo $respuesta_146; ?>" size="16">
     . Algunos requerimientos del 
     <input type="text" name="respuesta_163" value="<?php echo $respuesta_163; ?>" size="9">
      pueden 
    <input type="text" name="respuesta_147" value="<?php echo $respuesta_147; ?>" size="9">
      de los requerimientos del 
      <input type="text" name="respuesta_164" value="<?php echo $respuesta_164; ?>" size="9">
       . (Ver también [5, c1].)</p>
 
    <p>En otros casos, el 
    <input type="text" name="respuesta_148" value="<?php echo $respuesta_148; ?>" size="9">    
      es en sí mismo el 
    <input type="text" name="respuesta_149" value="<?php echo $respuesta_149; ?>" size="9">
      de 
    <input type="text" name="respuesta_150" value="<?php echo $respuesta_150; ?>" size="9">
     , y el 
    <input type="text" name="respuesta_151" value="<?php echo $respuesta_151; ?>" size="9">
      y el 
    <input type="text" name="respuesta_152" value="<?php echo $respuesta_152; ?>" size="9">
      de 
    <input type="text" name="respuesta_153" value="<?php echo $respuesta_153; ?>" size="18">
      la 
    <input type="text" name="respuesta_154" value="<?php echo $respuesta_154; ?>" size="11">
      o 
    <input type="text" name="respuesta_155" value="<?php echo $respuesta_155; ?>" size="9">
     , 
    <input type="text" name="respuesta_156" value="<?php echo $respuesta_156; ?>" size="9">
      los requerimientos del 
    <input type="text" name="respuesta_157" value="<?php echo $respuesta_157; ?>" size="9">
       son en su 
    <input type="text" name="respuesta_158" value="<?php echo $respuesta_158; ?>" size="9">
      requerimientos del 
    <input type="text" name="respuesta_159" value="<?php echo $respuesta_159; ?>" size="9">
     .</p>

    <button type="submit">Enviar</button>
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
    <?php echo $verificar_139 ?>
    <?php echo $verificar_140 ?>
    <?php echo $verificar_141 ?>
    <?php echo $verificar_142 ?>
    <?php echo $verificar_143 ?>
    <?php echo $verificar_144 ?>
    <?php echo $verificar_145 ?>
    <?php echo $verificar_146 ?>
    <?php echo $verificar_147 ?>
    <?php echo $verificar_148 ?>
    <?php echo $verificar_149 ?>
    <?php echo $verificar_150 ?>
    <?php echo $verificar_151 ?>
    <?php echo $verificar_152 ?>
    <?php echo $verificar_153 ?>
    <?php echo $verificar_154 ?>
    <?php echo $verificar_155 ?>
    <?php echo $verificar_156 ?>
    <?php echo $verificar_157 ?>
    <?php echo $verificar_158 ?>
    <?php echo $verificar_159 ?>

    <img src="../../../../img/guia_50.png" alt=""  > 

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
        href="quinto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
