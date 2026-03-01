<?php
 
for ($i = 1; $i <= 150; $i++) {
    ${"respuesta_" . $i} = '';
}
 

     
for ($i = 1; $i <= 150; $i++) {
    ${"verificar_" . $i} = '';
}

     

$mostrar_solucion = ''; 
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {        
 
     // Definir las respuestas correctas textuales según las validaciones
        $respuesta_1 = 'la disciplina';
        $respuesta_2 = 'los procesos para desempeñarse dentro de';
        $respuesta_3 = 'esa disciplina';
        $respuesta_4 = 'el resultado de aplicar esa disciplina';
        $respuesta_5 = 'la etapa en el life cycle de un sistema de software durante la cual esos procesos producen esos resultados';
        $respuesta_6 = 'El termino design se utiliza de maneras distintas pero estrechamente relacionadas para referirse a';
        $respuesta_7 = 'Una software design description';
        $respuesta_8 = 'SDD';
        $respuesta_9 = 'documenta';
        $respuesta_10 = 'el resultado del software design';
        $respuesta_11 = 'la implementacion y la toma de decisiones';
        $respuesta_12 = 'representacion del software creada para facilitar el analisis';
        $respuesta_13 = 'la planificacion';
        $respuesta_14 = 'La software design description se utiliza como un medio para comunicar informacion de';
        $respuesta_15 = 'software design';
        $respuesta_16 = 'y puede considerarse como un plano o modelo del sistema';
        $respuesta_17 = 'que puede adoptar muchas formas';
        $respuesta_18 = 'abarca el refinamiento de ese software en componentes';
        $respuesta_19 = 'la organizacion de esos componentes';
        $respuesta_20 = 'La SDD';
        $respuesta_21 = 'definicion';
        $respuesta_22 = 'interfaces';
        $respuesta_23 = 'software';
        $respuesta_24 = 'mundo exterior';
        $respuesta_25 = 'visto como una actividad del life cycle';
        $respuesta_26 = 'life cycle'; // también acepta 'ciclo de vida'
        $respuesta_27 = 'aplicacion';
        $respuesta_28 = 'disciplina';
        $respuesta_29 = 'software engineering';
        $respuesta_30 = 'software requirements';
        $respuesta_31 = 'analizan';
        $respuesta_32 = 'definir';
        $respuesta_33 = 'caracteristicas externas';
        $respuesta_34 = 'estructura interna';
        $respuesta_35 = 'software';
        $respuesta_36 = 'base';
        $respuesta_37 = 'construccion';
        $respuesta_38 = 'diseño arquitectonico';
        $respuesta_39 = 'diseño de alto nivel';
        $respuesta_40 = 'diseño detallado';
        $respuesta_41 = 'diseño arquitectonico';
        $respuesta_42 = 'la arquitectura de software';
        $respuesta_43 = 'Pensamiento de diseño';
        $respuesta_44 = 'Design Thinking';
        $respuesta_45 = 'Context of Software Design';
        $respuesta_46 = 'Aspectos clave';
        $respuesta_47 = 'Principios';
        $respuesta_48 = 'Software Design Fundamentals';
        $respuesta_49 = 'Software Design Process';
        $respuesta_50 = 'High-Level Design';
        $respuesta_51 = 'Detailed Design';
        $respuesta_52 = 'Software Design Qualities';
        $respuesta_53 = 'Concurrencia';
        $respuesta_54 = 'Control and Event Handling';
        $respuesta_55 = 'Data Persistence';
        $respuesta_56 = 'Distribucion de Componentes';
        $respuesta_57 = 'Errors and Exception Handling, Fault Tolerance';
        $respuesta_58 = 'Recording Software Design';
        $respuesta_59 = 'Diseño basado en modelos';
        $respuesta_60 = 'Structural Design Descriptions';
        $respuesta_61 = 'Behavioral Design Descriptions';
        $respuesta_62 = 'Patrones y Estilos de Diseño';
        $respuesta_63 = 'Software Design Strategies and Methods';
        $respuesta_64 = 'Object-Oriented Design';
        $respuesta_65 = 'Diseño Basado en Componentes';
        $respuesta_66 = 'Orientado a eventos';
        $respuesta_67 = 'Orientado al dominio';
        $respuesta_68 = 'Software Design Quality Analysis and Evaluation';
        $respuesta_69 = 'Revisiones';
        $respuesta_70 = 'Quality Attributes';
        $respuesta_71 = 'Quality Analysis and Evaluation Techniques';
        $respuesta_72 = 'Measures and Metrics';
        $respuesta_73 = 'diseño';
        $respuesta_74 = 'satisfacer';
        $respuesta_75 = 'puede verse como una forma de problem-solving';
        $respuesta_76 = 'wicked problem';
        $respuesta_77 = 'sin una solucion definitiva';
        $respuesta_78 = 'limites';
        $respuesta_79 = 'diseño';
        $respuesta_80 = 'diseño';
        $respuesta_81 = 'objetivos';
        $respuesta_82 = 'restricciones';
        $respuesta_83 = 'alternativas';
        $respuesta_84 = 'representaciones';
        $respuesta_85 = 'soluciones';
        $respuesta_86 = 'comprender la necesidad o el problema';
        $respuesta_87 = 'idear una solucion';
        $respuesta_88 = 'cristalizar un proposito u objetivo';
        $respuesta_89 = 'formular un concepto';
        $respuesta_90 = 'lograrse el proposito';
        $respuesta_91 = 'idear un mecanismo';
        $respuesta_92 = 'introducir una notacion';
        $respuesta_93 = 'describir el uso';
        $respuesta_94 = 'crear';
        $respuesta_95 = 'vocabulario';
        $respuesta_96 = 'expresar';
        $respuesta_97 = 'problema';
        $respuesta_98 = 'rol';
        $respuesta_99 = 'encaja';
        $respuesta_100 = 'life cycle';
        $respuesta_101 = 'caracteristicas';
        $respuesta_102 = 'roles';
        $respuesta_103 = 'requerimientos de software';
        $respuesta_104 = 'construccion de software';
        $respuesta_105 = 'pruebas de software';
        $respuesta_106 = 'mantenimiento de software';
        $respuesta_107 = 'transformacion';
        $respuesta_108 = 'requisitos';
        $respuesta_109 = 'conjunto';
        $respuesta_110 = 'problemas';
        $respuesta_111 = 'resolver';
        $respuesta_112 = 'arquitectura de software';
        $respuesta_113 = 'arquitectura';
        $respuesta_114 = 'restringe';
        $respuesta_115 = 'diseño';
        $respuesta_116 = 'fundamentales';
        $respuesta_117 = 'sistema';
        $respuesta_118 = 'componentes principales';
        $respuesta_119 = 'interconexiones';
        $respuesta_120 = 'estilos';
        $respuesta_121 = 'patrones';
        $respuesta_122 = 'utilizarse';
        $respuesta_123 = 'principios arquitectonicos';
        $respuesta_124 = 'proporcionar';
        $respuesta_125 = 'guia';
        $respuesta_126 = 'implementadores';
        $respuesta_127 = 'construir';
        $respuesta_128 = 'base';
        $respuesta_129 = 'estrategia general';
        $respuesta_130 = 'pruebas';
        $respuesta_131 = 'test cases';
        $respuesta_132 = 'diseño';
        $respuesta_133 = 'correctamente';
        $respuesta_134 = 'uso de principios cientificos';
        $respuesta_135 = 'informacion tecnica e imaginacion en la definicion de un sistema de software para realizar funciones';
        $respuesta_136 = 'con maxima economia y eficiencia';
        $respuesta_137 = 'Integration and Interoperability';
        $respuesta_138 = 'Assurance, security, and safety';
        $respuesta_139 = 'Variabilidad';
        $respuesta_140 = 'Lenguajes Especializados y Especificos del Dominio';
        $respuesta_141 = 'Design Rationale';
        $respuesta_142 = 'General Strategies';
        $respuesta_143 = 'Function-Oriented Design';
        $respuesta_144 = 'or Structured';
        $respuesta_145 = 'Data-Centered Design';
        $respuesta_148 = 'Context of Software Design';
         
        // Marcar todas como correctas
    for ($i = 1; $i <= 133; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'la disciplina') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'los procesos para desempeñarse dentro de') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'esa disciplina') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'el resultado de aplicar esa disciplina') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'la etapa en el life cycle de un sistema de software durante la cual esos procesos producen esos resultados') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'El termino design se utiliza de maneras distintas pero estrechamente relacionadas para referirse a'
   ) {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'Una software design description') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'SDD') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'documenta') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'el resultado del software design') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'la implementacion y la toma de decisiones') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'representacion del software creada para facilitar el analisis') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'la planificacion') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'La software design description se utiliza como un medio para comunicar informacion de') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'software design') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'y puede considerarse como un plano o modelo del sistema') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'que puede adoptar muchas formas') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'abarca el refinamiento de ese software en componentes') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'la organizacion de esos componentes') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'La SDD') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'definicion') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'interfaces') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'software') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'mundo exterior') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'visto como una actividad del life cycle') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'life cycle'
   || $respuesta_26 === 'ciclo de vida'
   ) {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'aplicacion') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'disciplina') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'software engineering') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'software requirements') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'analizan') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'definir') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'caracteristicas externas') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'estructura interna') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'software') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'base') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'construccion') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'diseño arquitectonico'
    || $respuesta_38 === 'architectural design'
    ) { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'diseño de alto nivel') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'diseño detallado') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'diseño arquitectonico'
    || $respuesta_41 === 'architectural design'
    ) { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'la arquitectura de software'
    || $respuesta_42 === 'architecting' 
    ) { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'Pensamiento de diseño'
    ||
    $respuesta_43 === 'Design Thinking'
    
    ) { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'Design Thinking') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'Contexto del diseño de software'
    || $respuesta_45 === 'Context of Software Design'
    || $respuesta_45 === 'Context of software design'
    ) { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'Aspectos clave'
    || $respuesta_46 === 'Key Issues'
    ) { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'Principios'
    || $respuesta_47 === 'Principles'
    ) { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'Fundamentos del diseño de software'
    || $respuesta_48 === 'Software Design Fundamentals'
    ) { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'Proceso de diseño de software'
    || $respuesta_49 === 'Software Design Process'
    ) { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'Diseño de alto nivel'
    || $respuesta_50 === 'High-Level Design' 
    ) { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'Diseño detallado'
||  $respuesta_51 === 'Detailed Design'  
) { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'Cualidades del diseño de software'
|| $respuesta_52 === 'Software Design Qualities'  

) { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'Concurrencia'
|| $respuesta_53 === 'Concurrency'  
) { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'Control y Manejo de Eventos'
|| $respuesta_54 === 'Control and Event Handling'
) { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'Data Persistence'
|| $respuesta_55 === 'Persistencia de Datos'  
) { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'Distribucion de Componentes'
|| $respuesta_56 === 'Distribution of Components'
) { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'Errors and Exception Handling, Fault Tolerance'
|| $respuesta_57 === 'Manejo de Errores y Excepciones, Tolerancia a Fallos' 
) { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'Documentacion del diseño de software'
|| $respuesta_58 === 'Recording Software Design'  
) { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'Diseño basado en modelos'
|| $respuesta_59 === 'Model-Based Design' 
) { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'Structural Design Descriptions'
|| $respuesta_60 === 'Descripciones Estructurales del Diseño'
) { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'Descripciones Conductuales del Diseño'
|| $respuesta_61 === 'De comportamiento' 
|| $respuesta_61 === 'Behavioral Design Descriptions' 
) { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'Design Patterns and Styles'
|| $respuesta_62 === 'Patrones y Estilos de Diseño'
) { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'Estrategias y Metodos de Diseño de Software'
||  $respuesta_63 === 'Software Design Strategies and Methods'
 
) { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'Diseño orientado a objetos'
|| $respuesta_64 === 'Object-Oriented Design'
) { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'Diseño Basado en Componentes'
|| $respuesta_65 === 'Component-Based Design'
) { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'Orientado a eventos'
|| $respuesta_66 === 'Event-Driven Desig'
) { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'Orientado al dominio'
|| $respuesta_67 === 'Domain-Driven Design' 
) { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'Software Design Quality Analysis and Evaluation') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'Revisiones') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'Atributos de calidad'
|| $respuesta_70 === 'Quality Attributes' 
) { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'Quality Analysis and Evaluation Techniques'
|| $respuesta_71 === 'Measures and Metrics' 
) { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'Measures and Metrics'
||$respuesta_72 === 'Medidas y Metricas'  
) { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'diseño') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'satisfacer') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'puede verse como una forma de problem-solving') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'wicked problem') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'sin una solucion definitiva') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'limites') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'diseño') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'diseño') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'objetivos') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'restricciones') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'alternativas') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'representaciones') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'soluciones') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'comprender la necesidad o el problema') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'idear una solucion') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'cristalizar un proposito u objetivo') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'formular un concepto') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'lograrse el proposito') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'idear un mecanismo') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'introducir una notacion') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'describir el uso') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'crear') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'vocabulario') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'expresar') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'problema') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'rol') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'encaja') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'life cycle'
|| $respuesta_100 === 'ciclo de vida'
) { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'caracteristicas') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'roles') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === 'requerimientos de software') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'construccion de software') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'pruebas de software') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'mantenimiento de software') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'transformacion') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'requisitos') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'conjunto') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'problemas') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

 $respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'resolver') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'arquitectura de software') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'arquitectura') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'restringe') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'diseño') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'fundamentales') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === 'sistema') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'componentes principales') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'interconexiones') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'estilos') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'patrones') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
}

$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'utilizarse') {  
    $verificar_122 = "correcto";
} elseif ($respuesta_122 === '') {
    $verificar_122 = '';
} else {
    $verificar_122 = "incorrecto";
}

$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === 'principios arquitectonicos') {  
    $verificar_123 = "correcto";
} elseif ($respuesta_123 === '') {
    $verificar_123 = '';
} else {
    $verificar_123 = "incorrecto";
}

$respuesta_124 = isset($_POST['respuesta_124']) ? $_POST['respuesta_124'] : '';
if ($respuesta_124 === 'proporcionar') {  
    $verificar_124 = "correcto";
} elseif ($respuesta_124 === '') {
    $verificar_124 = '';
} else {
    $verificar_124 = "incorrecto";
}

$respuesta_125 = isset($_POST['respuesta_125']) ? $_POST['respuesta_125'] : '';
if ($respuesta_125 === 'guia') {  
    $verificar_125 = "correcto";
} elseif ($respuesta_125 === '') {
    $verificar_125 = '';
} else {
    $verificar_125 = "incorrecto";
}

$respuesta_126 = isset($_POST['respuesta_126']) ? $_POST['respuesta_126'] : '';
if ($respuesta_126 === 'implementadores') {  
    $verificar_126 = "correcto";
} elseif ($respuesta_126 === '') {
    $verificar_126 = '';
} else {
    $verificar_126 = "incorrecto";
}

$respuesta_127 = isset($_POST['respuesta_127']) ? $_POST['respuesta_127'] : '';
if ($respuesta_127 === 'construir') {  
    $verificar_127 = "correcto";
} elseif ($respuesta_127 === '') {
    $verificar_127 = '';
} else {
    $verificar_127 = "incorrecto";
}

$respuesta_128 = isset($_POST['respuesta_128']) ? $_POST['respuesta_128'] : '';
if ($respuesta_128 === 'base') {  
    $verificar_128 = "correcto";
} elseif ($respuesta_128 === '') {
    $verificar_128 = '';
} else {
    $verificar_128 = "incorrecto";
}

$respuesta_129 = isset($_POST['respuesta_129']) ? $_POST['respuesta_129'] : '';
if ($respuesta_129 === 'estrategia general') {  
    $verificar_129 = "correcto";
} elseif ($respuesta_129 === '') {
    $verificar_129 = '';
} else {
    $verificar_129 = "incorrecto";
}

$respuesta_130 = isset($_POST['respuesta_130']) ? $_POST['respuesta_130'] : '';
if ($respuesta_130 === 'pruebas') {  
    $verificar_130 = "correcto";
} elseif ($respuesta_130 === '') {
    $verificar_130 = '';
} else {
    $verificar_130 = "incorrecto";
}

$respuesta_131 = isset($_POST['respuesta_131']) ? $_POST['respuesta_131'] : '';
if ($respuesta_131 === 'test cases') {  
    $verificar_131 = "correcto";
} elseif ($respuesta_131 === '') {
    $verificar_131 = '';
} else {
    $verificar_131 = "incorrecto";
}

$respuesta_132 = isset($_POST['respuesta_132']) ? $_POST['respuesta_132'] : '';
if ($respuesta_132 === 'diseño') {  
    $verificar_132 = "correcto";
} elseif ($respuesta_132 === '') {
    $verificar_132 = '';
} else {
    $verificar_132 = "incorrecto";
}

$respuesta_133 = isset($_POST['respuesta_133']) ? $_POST['respuesta_133'] : '';
if ($respuesta_133 === 'correctamente') {  
    $verificar_133 = "correcto";
} elseif ($respuesta_133 === '') {
    $verificar_133 = '';
} else {
    $verificar_133 = "incorrecto";
}

$respuesta_134 = isset($_POST['respuesta_134']) ? $_POST['respuesta_134'] : '';
if ($respuesta_134 === 'uso de principios cientificos') {  
    $verificar_134 = "correcto";
} elseif ($respuesta_134 === '') {
    $verificar_134 = '';
} else {
    $verificar_134 = "incorrecto";
}

$respuesta_135 = isset($_POST['respuesta_135']) ? $_POST['respuesta_135'] : '';
if ($respuesta_135 === 'informacion tecnica e imaginacion en la definicion de un sistema de software para realizar funciones') {  
    $verificar_135 = "correcto";
} elseif ($respuesta_135 === '') {
    $verificar_135 = '';
} else {
    $verificar_135 = "incorrecto";
}

$respuesta_136 = isset($_POST['respuesta_136']) ? $_POST['respuesta_136'] : '';
if ($respuesta_136 === 'con maxima economia y eficiencia') {  
    $verificar_136 = "correcto";
} elseif ($respuesta_136 === '') {
    $verificar_136 = '';
} else {
    $verificar_136 = "incorrecto";
}


 $respuesta_137 = isset($_POST['respuesta_137']) ? $_POST['respuesta_137'] : '';
if ($respuesta_137 === 'Integration and Interoperability'
|| $respuesta_137 === 'Integración e Interoperabilidad' 
) {  
    $verificar_137 = "correcto";
} elseif ($respuesta_137 === '') {
    $verificar_137 = '';
} else {
    $verificar_137 = "incorrecto";
}

$respuesta_138 = isset($_POST['respuesta_138']) ? $_POST['respuesta_138'] : '';
if ($respuesta_138 === 'Aseguramiento, Seguridad y Seguridad Operacional'
|| $respuesta_138 === 'Assurance, Security, and Safety'
|| $respuesta_138 === 'Assurance, security, and safety'
|| $respuesta_138 === 'Assurance, security, and safety'
) {  
    $verificar_138 = "correcto";
} elseif ($respuesta_138 === '') {
    $verificar_138 = '';
} else {
    $verificar_138 = "incorrecto";
}

$respuesta_139 = isset($_POST['respuesta_139']) ? $_POST['respuesta_139'] : '';
if ($respuesta_139 === 'Variabilidad'
|| $respuesta_139 === 'Variability'
) {  
    $verificar_139 = "correcto";
} elseif ($respuesta_139 === '') {
    $verificar_139 = '';
} else {
    $verificar_139 = "incorrecto";
}

$respuesta_140 = isset($_POST['respuesta_140']) ? $_POST['respuesta_140'] : '';
if ($respuesta_140 === 'Lenguajes Especializados y Especificos del Dominio'
|| $respuesta_140 === 'Specialized and Domain-Specific Language'  
) {  
    $verificar_140 = "correcto";
} elseif ($respuesta_140 === '') {
    $verificar_140 = '';
} else {
    $verificar_140 = "incorrecto";
}


$respuesta_141 = isset($_POST['respuesta_141']) ? $_POST['respuesta_141'] : '';
if ($respuesta_141 === 'Justificacion del Diseño'
|| $respuesta_141 === 'Design Rationale' 
|| $respuesta_141 === 'Design rationale'
|| $respuesta_141 === 'design Rationale'  
) {  
    $verificar_141 = "correcto";
} elseif ($respuesta_141 === '') {
    $verificar_141 = '';
} else {
    $verificar_141 = "incorrecto";
}

$respuesta_142 = isset($_POST['respuesta_142']) ? $_POST['respuesta_142'] : '';
if ($respuesta_142 === 'General Strategies'
|| $respuesta_142 === 'Estrategias Generales'
) {  
    $verificar_142 = "correcto";
} elseif ($respuesta_142 === '') {
    $verificar_142 = '';
} else {
    $verificar_142 = "incorrecto";
}

$respuesta_143 = isset($_POST['respuesta_143']) ? $_POST['respuesta_143'] : '';
if ($respuesta_143 === 'Diseño Orientado a Funciones'
|| $respuesta_143 === 'Function-Oriented Design'
) {  
    $verificar_143 = "correcto";
} elseif ($respuesta_143 === '') {
    $verificar_143 = '';
} else {
    $verificar_143 = "incorrecto";
}

$respuesta_144 = isset($_POST['respuesta_144']) ? $_POST['respuesta_144'] : '';
if ($respuesta_144 === 'o Diseño Estructurado'
|| $respuesta_144 === 'or Structured')
{  
    $verificar_144 = "correcto";
} elseif ($respuesta_144 === '') {
    $verificar_144 = '';
} else {
    $verificar_144 = "incorrecto";
}

$respuesta_145 = isset($_POST['respuesta_145']) ? $_POST['respuesta_145'] : '';
if ($respuesta_145 === 'Data-Centered Design'
|| $respuesta_145 === 'Diseño Centrado en Datos'
) {  
    $verificar_145 = "correcto";
} elseif ($respuesta_145 === '') {
    $verificar_145 = '';
} else {
    $verificar_145 = "incorrecto";
}

$respuesta_146 = isset($_POST['respuesta_146']) ? $_POST['respuesta_146'] : '';
if ($respuesta_146 === 'Software Design Fundamentals') {  
    $verificar_146 = "correcto";
} elseif ($respuesta_146 === '') {
    $verificar_146 = '';
} else {
    $verificar_146 = "incorrecto";
}

$respuesta_147 = isset($_POST['respuesta_147']) ? $_POST['respuesta_147'] : '';
if ($respuesta_147 === 'Design Thinking') {  
    $verificar_147 = "correcto";
} elseif ($respuesta_147 === '') {
    $verificar_147 = '';
} else {
    $verificar_147 = "incorrecto";
}

 
$respuesta_148 = isset($_POST['respuesta_148']) ? $_POST['respuesta_148'] : '';
if ($respuesta_148 === 'Context of Software Design') {  
    $verificar_148 = "correcto";
} elseif ($respuesta_148 === '') {
    $verificar_148 = '';
} else {
    $verificar_148 = "incorrecto";
}

$respuesta_149 = isset($_POST['respuesta_149']) ? $_POST['respuesta_149'] : '';
if ($respuesta_149 === '149') {  
    $verificar_149 = "correcto";
} elseif ($respuesta_149 === '') {
    $verificar_149 = '';
} else {
    $verificar_149 = "incorrecto";
}

$respuesta_150 = isset($_POST['respuesta_150']) ? $_POST['respuesta_150'] : '';
if ($respuesta_150 === '150') {  
    $verificar_150 = "correcto";
} elseif ($respuesta_150 === '') {
    $verificar_150 = '';
} else {
    $verificar_150 = "incorrecto";
}

$respuesta_151 = isset($_POST['respuesta_151']) ? $_POST['respuesta_151'] : '';
if ($respuesta_151 === '151') {  
    $verificar_151 = "correcto";
} elseif ($respuesta_151 === '') {
    $verificar_151 = '';
} else {
    $verificar_151 = "incorrecto";
}

$respuesta_152 = isset($_POST['respuesta_152']) ? $_POST['respuesta_152'] : '';
if ($respuesta_152 === '152') {  
    $verificar_152 = "correcto";
} elseif ($respuesta_152 === '') {
    $verificar_152 = '';
} else {
    $verificar_152 = "incorrecto";
}

$respuesta_153 = isset($_POST['respuesta_153']) ? $_POST['respuesta_153'] : '';
if ($respuesta_153 === '153') {  
    $verificar_153 = "correcto";
} elseif ($respuesta_153 === '') {
    $verificar_153 = '';
} else {
    $verificar_153 = "incorrecto";
}

$respuesta_154 = isset($_POST['respuesta_154']) ? $_POST['respuesta_154'] : '';
if ($respuesta_154 === '154') {  
    $verificar_154 = "correcto";
} elseif ($respuesta_154 === '') {
    $verificar_154 = '';
} else {
    $verificar_154 = "incorrecto";
}

$respuesta_155 = isset($_POST['respuesta_155']) ? $_POST['respuesta_155'] : '';
if ($respuesta_155 === '155') {  
    $verificar_155 = "correcto";
} elseif ($respuesta_155 === '') {
    $verificar_155 = '';
} else {
    $verificar_155 = "incorrecto";
}

$respuesta_156 = isset($_POST['respuesta_156']) ? $_POST['respuesta_156'] : '';
if ($respuesta_156 === '156') {  
    $verificar_156 = "correcto";
} elseif ($respuesta_156 === '') {
    $verificar_156 = '';
} else {
    $verificar_156 = "incorrecto";
}

$respuesta_157 = isset($_POST['respuesta_157']) ? $_POST['respuesta_157'] : '';
if ($respuesta_157 === '157') {  
    $verificar_157 = "correcto";
} elseif ($respuesta_157 === '') {
    $verificar_157 = '';
} else {
    $verificar_157 = "incorrecto";
}

$respuesta_158 = isset($_POST['respuesta_158']) ? $_POST['respuesta_158'] : '';
if ($respuesta_158 === '158') {  
    $verificar_158 = "correcto";
} elseif ($respuesta_158 === '') {
    $verificar_158 = '';
} else {
    $verificar_158 = "incorrecto";
}

$respuesta_159 = isset($_POST['respuesta_159']) ? $_POST['respuesta_159'] : '';
if ($respuesta_159 === '159') {  
    $verificar_159 = "correcto";
} elseif ($respuesta_159 === '') {
    $verificar_159 = '';
} else {
    $verificar_159 = "incorrecto";
}

$respuesta_160 = isset($_POST['respuesta_160']) ? $_POST['respuesta_160'] : '';
if ($respuesta_160 === '160') {  
    $verificar_160 = "correcto";
} elseif ($respuesta_160 === '') {
    $verificar_160 = '';
} else {
    $verificar_160 = "incorrecto";
}

$respuesta_161 = isset($_POST['respuesta_161']) ? $_POST['respuesta_161'] : '';
if ($respuesta_161 === '161') {  
    $verificar_161 = "correcto";
} elseif ($respuesta_161 === '') {
    $verificar_161 = '';
} else {
    $verificar_161 = "incorrecto";
}

$respuesta_162 = isset($_POST['respuesta_162']) ? $_POST['respuesta_162'] : '';
if ($respuesta_162 === '162') {  
    $verificar_162 = "correcto";
} elseif ($respuesta_162 === '') {
    $verificar_162 = '';
} else {
    $verificar_162 = "incorrecto";
}

$respuesta_163 = isset($_POST['respuesta_163']) ? $_POST['respuesta_163'] : '';
if ($respuesta_163 === '163') {  
    $verificar_163 = "correcto";
} elseif ($respuesta_163 === '') {
    $verificar_163 = '';
} else {
    $verificar_163 = "incorrecto";
}

$respuesta_164 = isset($_POST['respuesta_164']) ? $_POST['respuesta_164'] : '';
if ($respuesta_164 === '164') {  
    $verificar_164 = "correcto";
} elseif ($respuesta_164 === '') {
    $verificar_164 = '';
} else {
    $verificar_164 = "incorrecto";
}

$respuesta_165 = isset($_POST['respuesta_165']) ? $_POST['respuesta_165'] : '';
if ($respuesta_165 === '165') {  
    $verificar_165 = "correcto";
} elseif ($respuesta_165 === '') {
    $verificar_165 = '';
} else {
    $verificar_165 = "incorrecto";
}

$respuesta_166 = isset($_POST['respuesta_166']) ? $_POST['respuesta_166'] : '';
if ($respuesta_166 === '166') {  
    $verificar_166 = "correcto";
} elseif ($respuesta_166 === '') {
    $verificar_166 = '';
} else {
    $verificar_166 = "incorrecto";
}

$respuesta_167 = isset($_POST['respuesta_167']) ? $_POST['respuesta_167'] : '';
if ($respuesta_167 === '167') {  
    $verificar_167 = "correcto";
} elseif ($respuesta_167 === '') {
    $verificar_167 = '';
} else {
    $verificar_167 = "incorrecto";
}

$respuesta_168 = isset($_POST['respuesta_168']) ? $_POST['respuesta_168'] : '';
if ($respuesta_168 === '168') {  
    $verificar_168 = "correcto";
} elseif ($respuesta_168 === '') {
    $verificar_168 = '';
} else {
    $verificar_168 = "incorrecto";
}

$respuesta_169 = isset($_POST['respuesta_169']) ? $_POST['respuesta_169'] : '';
if ($respuesta_169 === '169') {  
    $verificar_169 = "correcto";
} elseif ($respuesta_169 === '') {
    $verificar_169 = '';
} else {
    $verificar_169 = "incorrecto";
}

$respuesta_170 = isset($_POST['respuesta_170']) ? $_POST['respuesta_170'] : '';
if ($respuesta_170 === '170') {  
    $verificar_170 = "correcto";
} elseif ($respuesta_170 === '') {
    $verificar_170 = '';
} else {
    $verificar_170 = "incorrecto";
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
    .imagen {
        max-width: 100%;
        height: auto;
    }
    .seccion {
    width: 50%; /* El 50% del ancho de la página menos el margen izquierdo */
    padding: 20px; /* importante este padding*/
    box-sizing: border-box;
    height: 215vh;
    min-height: 215vh;
    }



    
/* CONTENEDOR PRINCIPAL */
.tree{
    display:flex;
    flex-direction:column;
    align-items:center;
}

/* FILAS */
.row{
    display:flex;
    gap:25px;
    margin-top:40px;
}

/* CAJAS */
.box{
    background:white;
    border:2px solid #333;
    border-radius:8px;
    padding:12px 5px;
    width:270px;
    box-shadow:0 4px 8px rgba(0,0,0,0.1);
}

.box h3{
    text-align:center;
    margin:0 0 10px 0;
    font-size:15px;
}

.box ul{
    padding-left:18px;
    margin:0;
    font-size:13px;
}

/* LINEAS CONECTORAS */
.connector{
    width:2px;
    height:30px;
    background:#333;
}

.horizontal{
    height:2px;
    width:85%;
    background:#333;
    margin-top:30px;
}

/* TITULO */
.caption{
    margin-top:40px;
    font-weight:bold;
    font-size:16px;
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
    <h5>INTRODUCTION</h5>

<p>
Este capítulo considera el <strong>software design</strong> desde varias perspectivas—enfocándose en conceptos básicos, 
contexto y procesos, cualidades y estrategias del <strong>software design</strong>, y en el registro y la evaluación de diseños.
</p>

<p>
<input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="88">    
 : 
(1) 
<input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">
  (“<input type="text" name="respuesta_134" value="<?php echo $respuesta_134; ?>" size="24">, 
  <input type="text" name="respuesta_135" value="<?php echo $respuesta_135; ?>" size="91">
    [prespecified] 
    <input type="text" name="respuesta_136" value="<?php echo $respuesta_136; ?>" size="29">
    ”) [11]; (2) 
<input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="38">
    
<input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="8">
 ; (3) 
<input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="32">
  ; y (4) 
<input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="98">
 
 .
</p>

<p>
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="28"> 
  (<input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="6"> )</strong> 
<input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="8"> 
<input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="28">
    <strong>
    
 </strong>. 
Es una “
<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="52"> 
 , 
 <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="11">
, 
<input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="36">
 .   
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="79"> 
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="12"> 
<input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="54">
   ” [11].
</p>

<p>
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="6">, 
<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="31">
,  
<input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="51">
 , 

<input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="33">
  y la 
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="8">
  de 
<input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="8">
  entre ellos y entre el 
<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="8">
  y el 
<input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="12">
  hasta un nivel de detalle que permite su construcción.
</p>

    <p>
    El <strong>software design</strong>,  
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="33">
 , es la 
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">
      de la 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="8">
      de <strong>
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="16">    
     </strong> en la cual los <strong>
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="18">    
     </strong> se 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8">
      para 
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">
      las 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="18">
      y la 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="14">
      del 
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
      como 
    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">
      para la 
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="8">
      del software.
    </p>

<p>
El <strong>software design</strong> tiene lugar en tres etapas:
</p>

<ul>
  <li>
  <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="16">  
  del sistema de software</li>
  <li>
  <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="16">  
    o <strong>external-facing design</strong> del sistema y sus componentes</li>
  <li>
  <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="16">  
    o <strong>internal-facing design</strong></li>
</ul>


<p>
El 
<input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="16">
es una parte de 
<input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="21">
, tratado en el 
<strong>Software Architecture KA</strong>.
</p>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_6 ?>
    <?php echo $verificar_1 ?>
    <?php echo $verificar_134 ?>
    <?php echo $verificar_135 ?>
    <?php echo $verificar_136 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_7 ?>
    <?php echo $verificar_8 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_11 ?>
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_20 ?>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?>
 
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
<div class="tree">

    <!-- Nodo raíz -->
    <div class="box" style="width:300px; text-align:center;">
        <h3>Software Design</h3>
    </div>

    <div class="connector"></div>
    <div class="horizontal"></div>

    <!-- Subcategorías -->
    <div class="row">

        <div class="box">
            <h3>
            <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="31">    
             </h3>
            <ul>
                <li>
                1.1. <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="19">    
                (
                 <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="14">   
                 )</li>
                <li>
                1.2. <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="31">    
                 </li>
                <li>
                1.3. <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="14">    
                 </li>
                <li>
                1.4. <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="14">    
                 </li>
            </ul>
        </div>

        <div class="box">
            <h3>
            <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="31">     
             </h3>
            <ul>
                <li>
                2.1. <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="31">    
                 </li>
                <li>
                2.2 <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="31">    
                 </li>
            </ul>
        </div>

        <div class="box">
            <h3>
            <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="31">    
             </h3>
            <ul>
                <li>
                3.1. <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="9">    
                </li>
                <li>
                3.2. <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="24">    
                </li>
                <li>
                3.3. <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="21">    
                </li>
                <li>
                3.4. <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="24">    
                </li>
                <li>
                3.5. <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="41">    
                </li>
                <li>
                3.6. <input type="text" name="respuesta_137" value="<?php echo $respuesta_137; ?>" size="31">    
                </li>
                <li>
                3.7. <input type="text" name="respuesta_138" value="<?php echo $respuesta_138; ?>" size="31">    
                </li>
                <li>
                3.8. <input type="text" name="respuesta_139" value="<?php echo $respuesta_139; ?>" size="31">    
                </li>
            </ul>
        </div>

        <div class="box">
            <h3>
            <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="35">    
             </h3>
            <ul>
                <li>
                4.1. Model-Based Design  
                 </li>
                <li>
                4.2. <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="31">    
                 </li>
                <li>
                4.3. <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="31">    
                 </li>
                <li>
                4.4. Design Patterns and Styles    
                </li>
                <li>
                4.6. Specialized and Domain-Specific Language   
                </li>
                <li>
                4.7. <input type="text" name="respuesta_141" value="<?php echo $respuesta_141; ?>" size="31">    
                </li>
            </ul>
        </div>

        <div class="box">
            <h3>
            <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="36">    
             </h3>
            <ul>
                <li>
                5.1. <input type="text" name="respuesta_142" value="<?php echo $respuesta_142; ?>" size="31">    
                </li>
                <li>
                5.2. <input type="text" name="respuesta_143" value="<?php echo $respuesta_143; ?>" size="31">   
                (o <input type="text" name="respuesta_144" value="<?php echo $respuesta_144; ?>" size="31">) 
                  </li>
               <li>
                5.3. <input type="text" name="respuesta_145" value="<?php echo $respuesta_145; ?>" size="31">    
                </li>
                <li>
                5.4. <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="31">    
                 </li>
                <li>5.5. User-Centered Design</li>
                <li>5.6. Component-Based Design (CBD)</li>
                <li>
                5.7. Event-Driven Design  
                 </li>
                <li>
                5.8. Aspect-Oriented Design (AOD)    
                </li>
                <li>
                5.9. Constraint-Based Design  
                </li>
                    <li>
                5.10. Domain-Driven Design 
                </li>
                <li>
                5.11.     Other Methods
                </li>
            </ul>
        </div>

        <div class="box">
            <h3>
            <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="41">    
             </h3>
            <ul>
                <li>
                6.1. Design Reviews and Audits   
                 </li>
                <li>
                6.2 <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="31">    
                 </li>
                <li>
                6.3. Quality Analysis and Evaluation Techniques  
                 </li>
                <li>
                6.4. <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="31">    
                </li>
                <li>
                6.5. Verification, Validation, and Certification    
                </li>
            </ul>
        </div>

    </div>

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
    <?php echo $verificar_54 ?>
    <?php echo $verificar_55 ?>



    <?php echo $verificar_56 ?>
    <?php echo $verificar_57 ?>
    <?php echo $verificar_137 ?>
    <?php echo $verificar_138 ?>
    <?php echo $verificar_139 ?>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <?php echo $verificar_60 ?>
    <?php echo $verificar_61 ?>
    <?php echo $verificar_62 ?>
    <?php echo $verificar_140 ?>
    <?php echo $verificar_141 ?>
    <?php echo $verificar_63 ?>
    <?php echo $verificar_142 ?>
    <?php echo $verificar_143 ?>
    <?php echo $verificar_144 ?>
    <?php echo $verificar_145 ?>
    <?php echo $verificar_64 ?>
    <?php echo $verificar_65 ?>
    <?php echo $verificar_66 ?>

    <?php echo $verificar_67 ?>
<?php echo $verificar_68 ?>
<?php echo $verificar_69 ?>
<?php echo $verificar_70 ?>
<?php echo $verificar_71 ?>
<?php echo $verificar_72 ?>
    <div class="caption">
        Figure 3.1 — Breakdown of topics for the Software Design KA
    </div>
    <hr>
         En la seccion 4, 4.1 Diseño basado en modelos no se estudio, tampoco parte 4.3 (Behavioral Design Descriptions) 
         
         y todo el 4.4 (Design Patterns and Styles), 4.5 ( Specialized and Domain-Specific
Languages)

    <p>En el capitulo se hace casi todo 5.4 y del 5.5 (User-Centered Design) hasta el final 
    (Component-Based Design,Event-Driven Design,Aspect-Oriented Design,Constraint-Based Design,Domain-Driven Design,
    Other Methods)    
    (5.11) no se hace</p>


</div>
 

 
</div>




<div class="seccion derecha">
 
 
<h2>1. <input type="text" name="respuesta_146" value="<?php echo $respuesta_146; ?>" size="29"> [3*][4*]</h2>

<p>
Los conceptos, nociones y terminología introducidos aquí forman una base para comprender el rol y el alcance del 
<strong>software design</strong>.
</p>

<h3>1.1. <input type="text" name="respuesta_147" value="<?php echo $respuesta_147; ?>" size="11"> [3* c1, c2, c3]</h3>
<p>[4* c1, c2] [20]</p>

<p>
El 
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="8">
  está en todas partes, en las cosas y organizaciones que han sido creadas para 
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="8">
  una necesidad o resolver un problema.
</p>

<p>
En un sentido general, el <strong>design</strong>   
<input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="44">
 . Por ejemplo, el concepto de un 
<input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="11">
 —un problema 
<input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="20">
  es interesante en términos de comprender los 
<input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="8">
  del 
<input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="8">
 . Muchas otras nociones y conceptos nos ayudan a entender el 
 <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="8">
en su sentido general: 
<input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="8">
 , 
<input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="8">
 , 
<input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="8">
 , 
<input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="12">
  y 
<input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="8">
 . 
(Véase también <strong>Design as a Problem-Solving Activity</strong> en <strong>Engineering Foundations KA</strong>.)
</p>

<p>
El <strong>design thinking</strong> comprende dos elementos esenciales: (1) 
<input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="35">
  y (2) 
<input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="16">
 . Ross, Goodenough e Irvine ofrecen una elaboración del <strong>design thinking</strong> apropiada para el software:
</p>

<p>
Este proceso consta de cinco pasos básicos: (1) 
<input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="29">
   ; (2) 
<input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="16">
   sobre cómo puede 
<input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="16">
 ; (3) 
<input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="16">
  que implemente la estructura conceptual; (4) 
<input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="18">
para expresar las capacidades del mecanismo e invocar su uso; (5) 
<input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="16">
 de la notación en un contexto 
específico del problema para invocar el mecanismo de modo que se alcance el propósito. [20]
</p>

<p>
Esto es particularmente apropiado porque gran parte del <strong>software design</strong> consiste en 
<input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="8">
  el 
<input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="8">
  necesario para 
<input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="8">
  un 
<input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="8">
 , expresar su solución e implementar dicha solución. Los pasos 
enfatizan la naturaleza lingüística de la resolución de problemas en <strong>software design</strong>. Este es un 
patrón recurrente que se observa a lo largo del <strong>high-level design</strong>, el <strong>detailed design</strong> 
y el <strong>architecting</strong> (véase <strong>Architecting in the Large</strong> en 
<strong>Software Architecture KA</strong>). Por lo tanto, el <strong>Software Design</strong> es un proceso práctico de 
transformar un enunciado del problema en un enunciado de la solución. El <strong>software design</strong> comparte 
similitudes con otros tipos de <strong>design</strong>. El <strong>design</strong> puede entenderse más a fondo 
mediante la <strong>design theory</strong> [8].
</p>
    <button type="submit">Enviar</button> 
    <?php echo $verificar_146 ?>
        <?php echo $verificar_147 ?>
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
<br><br>
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
<hr>
<h3>1.2. <input type="text" name="respuesta_148" value="<?php echo $respuesta_148; ?>" size="22">  [4* c13, c14]</h3>
<p>[21* c19, c20]</p>

<p>
El <strong>software design</strong> es una parte importante del proceso de <strong>software development</strong>. 
Comprender el 
<input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="8">
  del <strong>software design</strong> implica ver cómo 
<input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="8">
  dentro del <strong>software development 
<input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="8">
 </strong> (véase <strong>Software Process KA</strong>). Para comprender ese contexto, es importante entender 
    las principales 
    <input type="text" name="respuesta_101" value="<?php echo $respuesta_101; ?>" size="11">
      y 
    <input type="text" name="respuesta_102" value="<?php echo $respuesta_102; ?>" size="8">
      de <strong>
    <input type="text" name="respuesta_103" value="<?php echo $respuesta_103; ?>" size="23">    
     </strong>, <strong>
    <input type="text" name="respuesta_104" value="<?php echo $respuesta_104; ?>" size="23">    
     </strong>, 
    <strong>
    <input type="text" name="respuesta_105" value="<?php echo $respuesta_105; ?>" size="16">    
     </strong> y <strong>
    <input type="text" name="respuesta_106" value="<?php echo $respuesta_106; ?>" size="24">    
     </strong>. El contexto varía según muchos factores, 
    incluido el grado de formalidad y la etapa del <strong>life cycle</strong>.
</p>

<p>
El <strong>software design</strong> es la 
<input type="text" name="respuesta_107" value="<?php echo $respuesta_107; ?>" size="12"> 
  de los requisitos, necesidades y preocupaciones del 
cliente y de otros interesados en especificaciones de diseño implementables. Sus contextos incluyen los siguientes:
</p>

<ul>
  <li>
    La relación del <strong>Software Design</strong> con 
     <input type="text" value="<?php echo $respuesta_103; ?>" size="25" readonly>  
    : los 
    <input type="text" name="respuesta_108" value="<?php echo $respuesta_108; ?>" size="8"> 
      establecen un 
    <input type="text" name="respuesta_109" value="<?php echo $respuesta_109; ?>" size="8"> 
      de 
    <input type="text" name="respuesta_110" value="<?php echo $respuesta_110; ?>" size="8"> 
      que el <strong>software design</strong> debe 
    <input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="8"> 
     .
  </li>
  <li>
    La relación del <strong>Software Design</strong> con <strong>
    <input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="22">     
     </strong>: en los casos 
    en que se ha establecido una 
    <input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="9">
     , dicha 
     <input type="text" value="<?php echo $respuesta_113; ?>" size="9" readonly>
     <input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="9">
         el 
    <input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="9">     
      al capturar aspectos 
      <input type="text" name="respuesta_116" value="<?php echo $respuesta_116; ?>" size="11">
    del 
    <input type="text" name="respuesta_117" value="<?php echo $respuesta_117; ?>" size="9">
     , tales como sus 
     <input type="text" name="respuesta_118" value="<?php echo $respuesta_118; ?>" size="21">
       y sus 
     <input type="text" name="respuesta_119" value="<?php echo $respuesta_119; ?>" size="12">
      , 
    <strong>application programming interfaces (APIs)</strong>, 
    <input type="text" name="respuesta_120" value="<?php echo $respuesta_120; ?>" size="9">
      y 
    <input type="text" name="respuesta_121" value="<?php echo $respuesta_121; ?>" size="9">
      que deben 
      <input type="text" name="respuesta_122" value="<?php echo $respuesta_122; ?>" size="9">
      , y 
      <input type="text" name="respuesta_123" value="<?php echo $respuesta_123; ?>" size="21">
        que deben observarse y aplicarse.
  </li>
  <li>
    La relación del <strong>Software Design</strong> con <strong>
    <input type="text" value="<?php echo $respuesta_104; ?>" size="21" readonly>    
    software construction</strong>: el 
    <strong>software design</strong> debe 
    <input type="text" name="respuesta_124" value="<?php echo $respuesta_124; ?>" size="9">
      una 
    <input type="text" name="respuesta_125" value="<?php echo $respuesta_125; ?>" size="9">
      a los 
    <input type="text" name="respuesta_126" value="<?php echo $respuesta_126; ?>" size="14">
      sobre cómo 
    <input type="text" name="respuesta_127" value="<?php echo $respuesta_127; ?>" size="9">
      el sistema.
  </li>
  <li>
    La relación del <strong>Software Design</strong> con <strong>
    <input type="text" value="<?php echo $respuesta_105; ?>" size="15" readonly>     
     </strong>: el <strong>software design</strong> proporciona una 
     <input type="text" name="respuesta_128" value="<?php echo $respuesta_128; ?>" size="9">
       para una 
     <input type="text" name="respuesta_129" value="<?php echo $respuesta_129; ?>" size="14">
       de 
     <input type="text" name="respuesta_130" value="<?php echo $respuesta_130; ?>" size="9">
       y para los 
     <input type="text" name="respuesta_131" value="<?php echo $respuesta_131; ?>" size="9">
     que aseguran que el 
    <input type="text" name="respuesta_132" value="<?php echo $respuesta_132; ?>" size="9">
      se implemente 
    <input type="text" name="respuesta_133" value="<?php echo $respuesta_133; ?>" size="11">
      y funcione según lo previsto.
  </li>
</ul>

    <button type="submit">Enviar</button> 
    <?php echo $verificar_148 ?>
    <?php echo $verificar_98 ?>
<?php echo $verificar_99 ?>
<?php echo $verificar_100 ?>
<?php echo $verificar_101 ?>
<?php echo $verificar_102 ?>
<?php echo $verificar_103 ?>
<?php echo $verificar_104 ?>
<?php echo $verificar_105 ?>
<?php echo $verificar_106 ?>
<?php echo $verificar_107 ?>
<?php echo $verificar_108 ?>
<?php echo $verificar_109 ?>
<?php echo $verificar_110 ?>
<?php echo $verificar_111 ?>
<?php echo $verificar_112 ?>
<br><br>
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
<br><br>
<?php echo $verificar_125 ?>
<?php echo $verificar_126 ?>
<?php echo $verificar_127 ?>
<?php echo $verificar_128 ?>
<?php echo $verificar_129 ?>
<?php echo $verificar_130 ?>
<?php echo $verificar_131 ?>
<?php echo $verificar_132 ?>
<?php echo $verificar_133 ?>

     <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>

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
