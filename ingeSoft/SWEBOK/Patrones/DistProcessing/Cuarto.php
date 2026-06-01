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
 
           $respuesta_1   = 'aprovechar';
    $respuesta_2   = 'concurrencia';
    $respuesta_3   = 'problemas';
    $respuesta_4   = 'pueden dividirse';
    $respuesta_5   = 'varias tareas independientes';
    $respuesta_6   = 'cuyas tareas tienen la particularidad';
    $respuesta_7   = 'ser creadas dinamicamente';
    $respuesta_8   = 'diseñadores';
    $respuesta_9   = 'aprovechar';
    $respuesta_10  = 'tareas concurrentes independientes';
    $respuesta_11  = 'estas tareas pueden conocerse antes';
    $respuesta_12  = 'ejecucion del sistema';
    $respuesta_13  = 'permitiendo';
    $respuesta_14  = 'asignacion estatica';
    $respuesta_15  = 'pueden conocerse unicamente';
    $respuesta_16  = 'tiempo de ejecucion';
    $respuesta_17  = 'requiriendo asi una asignacion dinamica';
    $respuesta_18  = 'la asignacion dinamica';
    $respuesta_19  = 'bucles iterativos y recursivos';
    $respuesta_20  = 'colas de tareas';
    $respuesta_21  = 'division de funciones';
    $respuesta_22  = 'el fin de variar';
    $respuesta_23  = 'numero de tareas concurrentes';
    $respuesta_24  = 'las necesidades de computo';
    $respuesta_25  = 'los bucles iterativos';
    $respuesta_26  = 'las colas de tareas';
    $respuesta_27  = 'manejados';
    $respuesta_28  = 'patron Master/Worker';
    $respuesta_29  = 'otras estrategias';
    $respuesta_30  = 'asignación dinamica necesitan';
    $respuesta_31  = 'manera eficiente';
    $respuesta_32  = 'ser gestionadas';
    $respuesta_33  = 'los bucles recursivos';
    $respuesta_34  = 'mergesort';
    $respuesta_35  = 'dividirse';
    $respuesta_36  = 'recursiva';
    $respuesta_37  = 'mitades hasta alcanzar';
    $respuesta_38  = 'maximo';
    $respuesta_39  = 'valga la pena ser ordenado';
    $respuesta_40  = 'un unico nodo de procesamiento';
    $respuesta_41  = 'el numero de tareas de ordenamiento';
    $respuesta_42  = 'conoce';
    $respuesta_43  = 'fase de division ha finalizado';
    $respuesta_44  = 'cantidad de elementos a ordenar';
    $respuesta_45  = 'la fase de division finaliza';
    $respuesta_46  = 'las unidades de procesamiento';
    $respuesta_47  = 'comenzar la ejecucion de tareas';
    $respuesta_48  = 'ya alcanzaron el umbral';
    $respuesta_49  = 'fase de ordenamiento';
    $respuesta_50  = 'fase de mezcla';
    $respuesta_51  = 'merge';
    $respuesta_52  = 'combinar';
    $respuesta_53  = 'resultados parciales del ordenamiento';
    $respuesta_54  = 'dividirse';
    $respuesta_55  = 'conjunto de tareas independientes';
    $respuesta_56  = 'la concurrencia';
    $respuesta_57  = 'numero de tareas';
    $respuesta_58  = 'es desconocido';
    $respuesta_59  = 'ejecución';
    $respuesta_60  = 'dificultando';
    $respuesta_61  = 'estructuras de control';
    $respuesta_62  = 'gestionarlas';
    $respuesta_63  = 'dinamico';
    $respuesta_64  = 'creacion';
    $respuesta_65  = 'tareas';
    $respuesta_66  = 'Fork';
    $respuesta_67  = 'proceso';
    $respuesta_68  = 'terminacion';
    $respuesta_69  = 'unir una tarea con su tarea padre';
    $respuesta_70  = 'otras tareas creadas por el mismo fork';
    $respuesta_71  = 'Join';
    $respuesta_72  = 'Relacion entre las tareas generadas';
    $respuesta_73  = 'naturaleza';
    $respuesta_74  = 'problemas abordados';
    $respuesta_75  = 'crean relaciones complejas';
    $respuesta_76  = 'recursivas entre tareas';
    $respuesta_77  = 'tareas finalicen';
    $respuesta_78  = 'no se generen deadlocks';
    $respuesta_79  = 'Las unidades de procesamiento gestionan el forking de tareas';
    $respuesta_80  = 'asignan uno a uno a las unidades de procesamiento';
    $respuesta_81  = 'contexto';
    $respuesta_82  = 'procesadores multinucleo';
    $respuesta_83  = 'la carga y la capacidad';
    $respuesta_84  = 'La creacion';
    $respuesta_85  = 'destruccion';
    $respuesta_86  = 'asignacion de tareas a unidades de procesamiento puede ser costosa';
    $respuesta_87  = 'demasiadas tareas';
    $respuesta_88  = 'podria afectar el rendimiento general';
    $respuesta_89  = 'uso innecesario de recursos';
    $respuesta_90  = 'muy pocas tareas';
    $respuesta_91  = 'los recursos pueden quedar subutilizados';
    $respuesta_92  = 'ForkJoinMaster';
    $respuesta_93  = 'responsable';
    $respuesta_94  = 'gestionar';
    $respuesta_95  = 'threadpool donde las tareas pueden ejecutarse';
    $respuesta_96  = 'inicia la ejecucion';
    $respuesta_97  = 'el metodo invoke';
    $respuesta_98  = 'ForkJoinTask';
    $respuesta_99  = 'responsable';
    $respuesta_100 = 'evaluar';
    $respuesta_101 = 'una tarea';
    $respuesta_102 = 'dividida';
    $respuesta_103 = 'forked';
    $respuesta_104 = 'unida';
    $respuesta_105 = 'joined';
    $respuesta_106 = 'ejecutada';
    $respuesta_107 = 'evitar sobrecarga';
    $respuesta_108 = 'insuficiencia de forking';
    $respuesta_109 = 'perdida de rendimiento';
    $respuesta_110 = 'ThreadPool';
    $respuesta_111 = 'Thread';
    $respuesta_112 = 'método invoke es invocado';
    $respuesta_113 = 'ThreadPool asigna a un hilo';
    $respuesta_114 = 'ejecuta el metodo compute de la ForkJoinTask';
    $respuesta_115 = 'la tarea debe ser procesada';
    $respuesta_116 = 'dividida';
    $respuesta_117 = 'determinada';
    $respuesta_118 = 'programador';
    $respuesta_119 = 'nuevas tareas';
    $respuesta_120 = 'hilos asignados';
    $respuesta_121 = 'threadpool';
    $respuesta_122 = 'dividirse';
    $respuesta_123 = 'ForkJoinMaster';
    $respuesta_124 = '-pool: ThreadPool';
    $respuesta_125 = '+ForkJoinMaster(ForkJoinTask)';
    $respuesta_126 = '+invoke(): void';
    $respuesta_127 = 'ThreadPool';
    $respuesta_128 = 'Thread';
    $respuesta_129 = 'ForkJoinTask';
    $respuesta_130 = '+fork(): void';
    $respuesta_131 = '+join(): Object';
    $respuesta_132 = '+compute(): Object';
    $respuesta_133 = '1';
    $respuesta_134 = '1';
    $respuesta_135 = '1';
    $respuesta_136 = '*';
    $respuesta_137 = '1';
    $respuesta_138 = '*';
    $respuesta_139 = '1';
    $respuesta_140 = '*';
    $respuesta_141 = 'ForkJoinMaster:master';
    $respuesta_142 = 'ThreadPool:pool';
    $respuesta_143 = 'Thread:thread';
    $respuesta_144 = 'ForkJoinTask:task';
    $respuesta_145 = 'ForkJoinMaster(ForkJoinTask)';
    $respuesta_146 = 'invoke():void';
    $respuesta_147 = 'execute(ForkJoinTask):void';
    $respuesta_148 = 'run():void';
    $respuesta_149 = 'compute():Object';
    $respuesta_150 = 'fork():void';
    $respuesta_151 = 'join():Object';

        
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'aprovechar') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'concurrencia') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'problemas') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'pueden dividirse') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'varias tareas independientes') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'cuyas tareas tienen la particularidad') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'ser creadas dinamicamente') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'diseñadores') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'aprovechar') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'tareas concurrentes independientes') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'estas tareas pueden conocerse antes') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'ejecucion del sistema') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'permitiendo') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'asignacion estatica') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'pueden conocerse unicamente') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'tiempo de ejecucion') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'requiriendo asi una asignacion dinamica') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'la asignacion dinamica') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'bucles iterativos y recursivos') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'colas de tareas') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'division de funciones') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'el fin de variar') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'numero de tareas concurrentes') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'las necesidades de computo') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'los bucles iterativos') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'las colas de tareas') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'manejados') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'patron Master/Worker') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'otras estrategias') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'asignación dinamica necesitan') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'manera eficiente') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'ser gestionadas') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'los bucles recursivos') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'mergesort') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'dividirse') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'recursiva') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'mitades hasta alcanzar') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'maximo') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'valga la pena ser ordenado') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'un unico nodo de procesamiento') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'el numero de tareas de ordenamiento') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'conoce') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'fase de division ha finalizado') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'cantidad de elementos a ordenar') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'la fase de division finaliza') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'las unidades de procesamiento') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'comenzar la ejecucion de tareas') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'ya alcanzaron el umbral') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'fase de ordenamiento') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'fase de mezcla') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'merge') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'combinar') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'resultados parciales del ordenamiento') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'dividirse') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'conjunto de tareas independientes') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'la concurrencia') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'numero de tareas') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'es desconocido') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'ejecución') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'dificultando') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'estructuras de control') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'gestionarlas') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'dinamico') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'creacion') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'tareas') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'Fork') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'proceso') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'terminacion') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'unir una tarea con su tarea padre') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'otras tareas creadas por el mismo fork') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'Join') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'Relacion entre las tareas generadas') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'naturaleza') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'problemas abordados') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'crean relaciones complejas') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'recursivas entre tareas') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'tareas finalicen') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'no se generen deadlocks') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'Las unidades de procesamiento gestionan el forking de tareas') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'asignan uno a uno a las unidades de procesamiento') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'contexto') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'procesadores multinucleo') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'la carga y la capacidad') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'La creacion') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'destruccion') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'asignacion de tareas a unidades de procesamiento puede ser costosa') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'demasiadas tareas') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'podria afectar el rendimiento general') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'uso innecesario de recursos') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'muy pocas tareas') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'los recursos pueden quedar subutilizados') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'ForkJoinMaster') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'responsable') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'gestionar') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'threadpool donde las tareas pueden ejecutarse') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'inicia la ejecucion') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'el metodo invoke') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'ForkJoinTask') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'responsable') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'evaluar') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'una tarea') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'dividida') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === 'forked') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'unida') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'joined') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'ejecutada') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'evitar sobrecarga') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'insuficiencia de forking') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'perdida de rendimiento') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'ThreadPool') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

 
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'Thread') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'método invoke es invocado') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'ThreadPool asigna a un hilo') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'ejecuta el metodo compute de la ForkJoinTask') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'la tarea debe ser procesada') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'dividida') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === 'determinada') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'programador') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'nuevas tareas') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'hilos asignados') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'threadpool') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
} 

 

$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'dividirse') {  
    $verificar_122 = "correcto";
} elseif ($respuesta_122 === '') {
    $verificar_122 = '';
} else {
    $verificar_122 = "incorrecto";
}
$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === 'ForkJoinMaster') {
    $verificar_123 = "correcto";
} elseif ($respuesta_123 === '') {
    $verificar_123 = '';
} else {
    $verificar_123 = "incorrecto";
}

$respuesta_124 = isset($_POST['respuesta_124']) ? $_POST['respuesta_124'] : '';
if ($respuesta_124 === '-pool: ThreadPool') {
    $verificar_124 = "correcto";
} elseif ($respuesta_124 === '') {
    $verificar_124 = '';
} else {
    $verificar_124 = "incorrecto";
}

$respuesta_125 = isset($_POST['respuesta_125']) ? $_POST['respuesta_125'] : '';
if ($respuesta_125 === '+ForkJoinMaster(ForkJoinTask)') {
    $verificar_125 = "correcto";
} elseif ($respuesta_125 === '') {
    $verificar_125 = '';
} else {
    $verificar_125 = "incorrecto";
}

$respuesta_126 = isset($_POST['respuesta_126']) ? $_POST['respuesta_126'] : '';
if ($respuesta_126 === '+invoke(): void') {
    $verificar_126 = "correcto";
} elseif ($respuesta_126 === '') {
    $verificar_126 = '';
} else {
    $verificar_126 = "incorrecto";
}

$respuesta_127 = isset($_POST['respuesta_127']) ? $_POST['respuesta_127'] : '';
if ($respuesta_127 === 'ThreadPool') {
    $verificar_127 = "correcto";
} elseif ($respuesta_127 === '') {
    $verificar_127 = '';
} else {
    $verificar_127 = "incorrecto";
}

$respuesta_128 = isset($_POST['respuesta_128']) ? $_POST['respuesta_128'] : '';
if ($respuesta_128 === 'Thread') {
    $verificar_128 = "correcto";
} elseif ($respuesta_128 === '') {
    $verificar_128 = '';
} else {
    $verificar_128 = "incorrecto";
}

$respuesta_129 = isset($_POST['respuesta_129']) ? $_POST['respuesta_129'] : '';
if ($respuesta_129 === 'ForkJoinTask') {
    $verificar_129 = "correcto";
} elseif ($respuesta_129 === '') {
    $verificar_129 = '';
} else {
    $verificar_129 = "incorrecto";
}

$respuesta_130 = isset($_POST['respuesta_130']) ? $_POST['respuesta_130'] : '';
if ($respuesta_130 === '+fork(): void') {
    $verificar_130 = "correcto";
} elseif ($respuesta_130 === '') {
    $verificar_130 = '';
} else {
    $verificar_130 = "incorrecto";
}

$respuesta_131 = isset($_POST['respuesta_131']) ? $_POST['respuesta_131'] : '';
if ($respuesta_131 === '+join(): Object') {
    $verificar_131 = "correcto";
} elseif ($respuesta_131 === '') {
    $verificar_131 = '';
} else {
    $verificar_131 = "incorrecto";
}

$respuesta_132 = isset($_POST['respuesta_132']) ? $_POST['respuesta_132'] : '';
if ($respuesta_132 === '+compute(): Object') {
    $verificar_132 = "correcto";
} elseif ($respuesta_132 === '') {
    $verificar_132 = '';
} else {
    $verificar_132 = "incorrecto";
}

$respuesta_133 = isset($_POST['respuesta_133']) ? $_POST['respuesta_133'] : '';
if ($respuesta_133 === '1') {
    $verificar_133 = "correcto";
} elseif ($respuesta_133 === '') {
    $verificar_133 = '';
} else {
    $verificar_133 = "incorrecto";
}

$respuesta_134 = isset($_POST['respuesta_134']) ? $_POST['respuesta_134'] : '';
if ($respuesta_134 === '1') {
    $verificar_134 = "correcto";
} elseif ($respuesta_134 === '') {
    $verificar_134 = '';
} else {
    $verificar_134 = "incorrecto";
}

$respuesta_135 = isset($_POST['respuesta_135']) ? $_POST['respuesta_135'] : '';
if ($respuesta_135 === '1') {
    $verificar_135 = "correcto";
} elseif ($respuesta_135 === '') {
    $verificar_135 = '';
} else {
    $verificar_135 = "incorrecto";
}

$respuesta_136 = isset($_POST['respuesta_136']) ? $_POST['respuesta_136'] : '';
if ($respuesta_136 === '*') {
    $verificar_136 = "correcto";
} elseif ($respuesta_136 === '') {
    $verificar_136 = '';
} else {
    $verificar_136 = "incorrecto";
}

$respuesta_137 = isset($_POST['respuesta_137']) ? $_POST['respuesta_137'] : '';
if ($respuesta_137 === '1') {
    $verificar_137 = "correcto";
} elseif ($respuesta_137 === '') {
    $verificar_137 = '';
} else {
    $verificar_137 = "incorrecto";
}

$respuesta_138 = isset($_POST['respuesta_138']) ? $_POST['respuesta_138'] : '';
if ($respuesta_138 === '*') {
    $verificar_138 = "correcto";
} elseif ($respuesta_138 === '') {
    $verificar_138 = '';
} else {
    $verificar_138 = "incorrecto";
}

$respuesta_139 = isset($_POST['respuesta_139']) ? $_POST['respuesta_139'] : '';
if ($respuesta_139 === '1') {
    $verificar_139 = "correcto";
} elseif ($respuesta_139 === '') {
    $verificar_139 = '';
} else {
    $verificar_139 = "incorrecto";
}

$respuesta_140 = isset($_POST['respuesta_140']) ? $_POST['respuesta_140'] : '';
if ($respuesta_140 === '*') {
    $verificar_140 = "correcto";
} elseif ($respuesta_140 === '') {
    $verificar_140 = '';
} else {
    $verificar_140 = "incorrecto";
}


$respuesta_141 = isset($_POST['respuesta_141']) ? $_POST['respuesta_141'] : '';
if ($respuesta_141 === 'ForkJoinMaster:master') {
    $verificar_141 = "correcto";
} elseif ($respuesta_141 === '') {
    $verificar_141 = '';
} else {
    $verificar_141 = "incorrecto";
}

$respuesta_142 = isset($_POST['respuesta_142']) ? $_POST['respuesta_142'] : '';
if ($respuesta_142 === 'ThreadPool:pool') {
    $verificar_142 = "correcto";
} elseif ($respuesta_142 === '') {
    $verificar_142 = '';
} else {
    $verificar_142 = "incorrecto";
}

$respuesta_143 = isset($_POST['respuesta_143']) ? $_POST['respuesta_143'] : '';
if ($respuesta_143 === 'Thread:thread') {
    $verificar_143 = "correcto";
} elseif ($respuesta_143 === '') {
    $verificar_143 = '';
} else {
    $verificar_143 = "incorrecto";
}

$respuesta_144 = isset($_POST['respuesta_144']) ? $_POST['respuesta_144'] : '';
if ($respuesta_144 === 'ForkJoinTask:task') {
    $verificar_144 = "correcto";
} elseif ($respuesta_144 === '') {
    $verificar_144 = '';
} else {
    $verificar_144 = "incorrecto";
}

$respuesta_145 = isset($_POST['respuesta_145']) ? $_POST['respuesta_145'] : '';
if ($respuesta_145 === 'ForkJoinMaster(ForkJoinTask)') {
    $verificar_145 = "correcto";
} elseif ($respuesta_145 === '') {
    $verificar_145 = '';
} else {
    $verificar_145 = "incorrecto";
}

$respuesta_146 = isset($_POST['respuesta_146']) ? $_POST['respuesta_146'] : '';
if ($respuesta_146 === 'invoke():void') {
    $verificar_146 = "correcto";
} elseif ($respuesta_146 === '') {
    $verificar_146 = '';
} else {
    $verificar_146 = "incorrecto";
}

$respuesta_147 = isset($_POST['respuesta_147']) ? $_POST['respuesta_147'] : '';
if ($respuesta_147 === 'execute(ForkJoinTask):void') {
    $verificar_147 = "correcto";
} elseif ($respuesta_147 === '') {
    $verificar_147 = '';
} else {
    $verificar_147 = "incorrecto";
}

$respuesta_148 = isset($_POST['respuesta_148']) ? $_POST['respuesta_148'] : '';
if ($respuesta_148 === 'run():void') {
    $verificar_148 = "correcto";
} elseif ($respuesta_148 === '') {
    $verificar_148 = '';
} else {
    $verificar_148 = "incorrecto";
}

$respuesta_149 = isset($_POST['respuesta_149']) ? $_POST['respuesta_149'] : '';
if ($respuesta_149 === 'compute():Object') {
    $verificar_149 = "correcto";
} elseif ($respuesta_149 === '') {
    $verificar_149 = '';
} else {
    $verificar_149 = "incorrecto";
}

$respuesta_150 = isset($_POST['respuesta_150']) ? $_POST['respuesta_150'] : '';
if ($respuesta_150 === 'fork():void') {
    $verificar_150 = "correcto";
} elseif ($respuesta_150 === '') {
    $verificar_150 = '';
} else {
    $verificar_150 = "incorrecto";
}

$respuesta_151 = isset($_POST['respuesta_151']) ? $_POST['respuesta_151'] : '';
if ($respuesta_151 === 'join():Object') {
    $verificar_151 = "correcto";
} elseif ($respuesta_151 === '') {
    $verificar_151 = '';
} else {
    $verificar_151 = "incorrecto";
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
    height: 390vh;
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

<form action="./Cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 

 <h3>3.2.9 Patrón de Diseño Fork / Join</h3>

<h4>Intención</h4>
<p>
El patrón Fork/Join está diseñado para 
<input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="11">
  la 
<input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="11">
  en 
<input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="11">
  que 
<input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="11">
  en 
<input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="23">
  y 
<input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="30">
  de 
<input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="23">
 .
</p>

<h4>Problema</h4>
<p>
Los 
<input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="11">
  siempre intentan 
<input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="11">
  las 
<input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="31">
 .
Sin embargo, 
<input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="31">
  de la 
<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="18">
 ,
<input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="11">
  una 
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="15">
 , o 
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="26">
  en 
<input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="18">
 ,
<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="37">
 .
</p>

<p>
Usualmente, 
<input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="21">
  utiliza 
<input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="24">
 ,
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="12">
  o 
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="18">
  con 
<input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="11">
  el 
<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="28">
  según 
<input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="26">
 .
</p>

<p>
Por un lado, 
<input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="17">
  y 
<input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="17">
  son 
<input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="11">
  por el 
<input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="26">
 .
</p>

<p>
Por otro lado, 
<input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="16">
  de 
<input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="26">
  una 
<input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="14">
  de 
<input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="14">
 , por ejemplo, 
<input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="16">
 .
</p>

<p>
Por ejemplo, el problema 
<input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8">
  puede 
<input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
  de manera 
<input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">
 .
El archivo original a ordenar se divide en 
<input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="16">
  un umbral
(es decir, el tamaño 
<input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="8">
  para que 
<input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="25">
  por 
<input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="27">
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
<hr>
<p>
Por lo tanto, en este caso, 
<input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="33">
  se 
<input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="8">
  cuando la 
<input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="27">
  o incluso cuando se conoce la 
<input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="28">
 .
</p>

<p>
Sin embargo, mientras 
<input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="21">
 , 
<input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="28">
  pueden 
<input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="28">
  que 
<input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="19">
 .
Después de que finaliza la 
<input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="20">
 , se necesita una 
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="11">
 
(
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8">    
 ) para 
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="8">
  los   
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="33">
 .
</p>

<h4>Contexto</h4>
<p>
Este patrón debe utilizarse cuando el problema puede 
<input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="8">
  en un 
<input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="33">
  aprovechando 
<input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="14">
 , pero el 
<input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="22">
  generalmente 
<input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="14">
  antes de la 
<input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">
 , 
<input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="33">
  el uso de 
<input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="17">
  simples para 
<input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="9">
 .
</p>

<button type="submit">Enviar</button>
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
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <?php echo $verificar_60 ?>
    <?php echo $verificar_61 ?>
    <?php echo $verificar_62 ?>
<hr>
<p>
El proceso 
<input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="9">
  de 
<input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="9">
  de 
<input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="9">
  se denomina 
<input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="9">
 , y el 
<input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="9">
  de 
<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="9">
  de 
<input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="28">
  u 
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="35">
  se denomina 
<input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="9">
 .
</p>

<h4>Fuerzas</h4>

<h5>
<input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="31">    
 </h5>
<p>
Debido a la 
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="11">
  de los 
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="21">
 , se 
<input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="31">
 
o 
<input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="19">
 .
</p>

<p>
Por lo tanto, es muy importante asegurar que todas las 
<input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="16">
 
y que 
<input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="20">
 .
</p>

<button type="submit">Enviar</button>
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
<hr>
<h5>
<input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="56">    
 </h5>
<p>
Tradicionalmente, las tareas se 
<input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="46">
 ;
sin embargo, en el 
<input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="8">
  de 
<input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="15">
 , es importante considerar
<input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="21">
 .
</p>

<h5>  
<input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="11">    
 , 
<input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="11">
  y 
<input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="61">
 </h5>
<p>
Si se crean 
<input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="23">
 , esto 
<input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="34">
  del sistema debido al 
<input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="25">
 .
</p>

<p>
Sin embargo, si se crean 
<input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="16">
 , 
<input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="24">
 .
</p>

<button type="submit">Enviar</button>
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
<h4>Diagrama de Estructura - Figura 3.14</h4>

<h4>Participantes</h4>

<h5>
<input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="11">    
 </h5>
<p>
Esta clase es 
<input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="8">
  de 
<input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="8">
  un 
<input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="31">
 .
</p>

<p>
Adicionalmente, 
<input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="14">
  mediante 
<input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="14">
 .
</p>

<h5>
<input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="14">    
 </h5>
<p>
Es 
<input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="7">
  de 
<input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="7">
  cuándo 
<input type="text" name="respuesta_101" value="<?php echo $respuesta_101; ?>" size="7">
  debe ser 
<input type="text" name="respuesta_102" value="<?php echo $respuesta_102; ?>" size="7">
  (
<input type="text" name="respuesta_103" value="<?php echo $respuesta_103; ?>" size="7">    
 ),
<input type="text" name="respuesta_104" value="<?php echo $respuesta_104; ?>" size="7">
  (
<input type="text" name="respuesta_105" value="<?php echo $respuesta_105; ?>" size="7">    
 ) o 
<input type="text" name="respuesta_106" value="<?php echo $respuesta_106; ?>" size="7">
 .
</p>

<p>
Por lo tanto, esta clase es responsable de 
<input type="text" name="respuesta_107" value="<?php echo $respuesta_107; ?>" size="12">
  debido a un exceso
o 
<input type="text" name="respuesta_108" value="<?php echo $respuesta_108; ?>" size="17">
  y la consecuente 
<input type="text" name="respuesta_109" value="<?php echo $respuesta_109; ?>" size="21">
 .
</p>

<h5>
<input type="text" name="respuesta_110" value="<?php echo $respuesta_110; ?>" size="11">    
 </h5>
<p>
Esta clase tiene las mismas responsabilidades descritas en el patrón de diseño
ThreadPool (ver sección 3.2.6).
</p>

<h5>
<input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="11">    
 </h5>
<p>
Es responsable de procesar las ForkJoinTasks asignadas por el ThreadPool.
</p>

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
<?php echo $verificar_106 ?>
<?php echo $verificar_107 ?>
<?php echo $verificar_108 ?>
<?php echo $verificar_109 ?>
<?php echo $verificar_110 ?>
<?php echo $verificar_111 ?>
<hr>
 

</div>




<div class="seccion derecha">
 <h4>Comportamiento</h4>

<h5>Escenario de Procesamiento - Figura 3.15</h5>

<p>
Una vez que el 
<input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="21">
 , el 
<input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="21">
 ,
el cual 
<input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="31">
 .
</p>

<p>
Este método evalúa si 
<input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="21">
 , dividida (forked) o unida (joined).
</p>

<p>
Si la tarea es 
<input type="text" name="respuesta_116" value="<?php echo $respuesta_116; ?>" size="11">
 , esta se fragmenta de acuerdo con la lógica 
<input type="text" name="respuesta_117" value="<?php echo $respuesta_117; ?>" size="11">
  por el 
<input type="text" name="respuesta_118" value="<?php echo $respuesta_118; ?>" size="11">
  y las 
<input type="text" name="respuesta_119" value="<?php echo $respuesta_119; ?>" size="11">
  son ejecutadas en 
<input type="text" name="respuesta_120" value="<?php echo $respuesta_120; ?>" size="11">
  por el 
<input type="text" name="respuesta_121" value="<?php echo $respuesta_121; ?>" size="11">
  (buscando reutilizar los hilos).
</p>

<p>
Este punto es especialmente crítico porque debe determinar hasta qué punto
las tareas deben 
<input type="text" name="respuesta_122" value="<?php echo $respuesta_122; ?>" size="11">
  para garantizar eficiencia.
</p>
   
<button type="submit">Enviar</button>
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



<div style="position:relative; width:100%; padding-bottom:61.8%; display:block;">

<svg style="position:absolute; top:0; left:0; width:100%; height:100%;"
     viewBox="0 0 680 420" role="img" xmlns="http://www.w3.org/2000/svg">
  <title>Fork/Join Design Pattern - Structure Diagram</title>
  <defs>
    <marker id="arrowfj" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
      <path d="M2 1L8 5L2 9" fill="none" stroke="#555" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </marker>
  </defs>

  <!-- ForkJoinMaster -->
  <rect x="30" y="30" width="210" height="104" rx="4" fill="#EEEDFE" stroke="#534AB7" stroke-width="0.5"/>
  <rect x="30" y="30" width="210" height="30"  rx="4" fill="#AFA9EC" stroke="#534AB7" stroke-width="0.5"/>
  <line x1="30" y1="60"  x2="240" y2="60"  stroke="#534AB7" stroke-width="0.5"/>
  <line x1="30" y1="90"  x2="240" y2="90"  stroke="#534AB7" stroke-width="0.5"/>

  <!-- ThreadPool -->
  <rect x="450" y="30"  width="190" height="44" rx="4" fill="#E1F5EE" stroke="#0F6E56" stroke-width="0.5"/>
  <line x1="450" y1="60" x2="640" y2="60" stroke="#0F6E56" stroke-width="0.5"/>

  <!-- Thread -->
  <rect x="450" y="230" width="190" height="44" rx="4" fill="#E1F5EE" stroke="#0F6E56" stroke-width="0.5"/>
  <line x1="450" y1="262" x2="640" y2="262" stroke="#0F6E56" stroke-width="0.5"/>

  <!-- ForkJoinTask -->
  <rect x="30"  y="250" width="210" height="104" rx="4" fill="#FAECE7" stroke="#993C1D" stroke-width="0.5"/>
  <rect x="30"  y="250" width="210" height="30"  rx="4" fill="#F0997B" stroke="#993C1D" stroke-width="0.5"/>
  <line x1="30"  y1="280" x2="240" y2="280" stroke="#993C1D" stroke-width="0.5"/>

  <!-- Asociación ForkJoinMaster → ThreadPool -->
  <line x1="240" y1="52" x2="448" y2="52" stroke="#555" stroke-width="1" marker-end="url(#arrowfj)"/>

  <!-- Asociación ThreadPool → Thread -->
  <line x1="545" y1="74" x2="545" y2="228" stroke="#555" stroke-width="1" marker-end="url(#arrowfj)"/>

  <!-- Asociación ForkJoinMaster → ForkJoinTask -->
  <line x1="135" y1="134" x2="135" y2="248" stroke="#555" stroke-width="1" marker-end="url(#arrowfj)"/>

  <!-- ForkJoinTask self-reference -->
  <path d="M240 302 L290 302 L290 380 L135 380 L135 354" fill="none" stroke="#555" stroke-width="1" marker-end="url(#arrowfj)"/>

  <!-- Caption -->
  <text font-family="sans-serif" font-size="12" fill="#555" x="340" y="410" text-anchor="middle">Figure 3.14: Structure Diagram - Fork / Join Design Pattern</text>
</svg>

<!-- 
  Fórmula: left = x_svg/680*100%   top = y_svg/420*100%
  Altura wrapper = 420/680 = 61.8%
-->

<!-- ForkJoinMaster — cabecera, centro x=135, y=30..60 -->
<input type="text" name="respuesta_123"
       value="<?php echo htmlspecialchars($respuesta_123); ?>"
       style="position:absolute; left:4.4%; top:7.1%; width:30.9%; height:7.1%;
              font-size:15px; font-weight:bold; padding:1px 4px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box; text-align:center;"/>

<!-- -pool: ThreadPool — atributo, y=60..90 -->
<input type="text" name="respuesta_124"
       value="<?php echo htmlspecialchars($respuesta_124); ?>"
       style="position:absolute; left:4.4%; top:14.3%; width:30.9%; height:7.1%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- +ForkJoinMaster(ForkJoinTask) — método 1, y=90..112 -->
<input type="text" name="respuesta_125"
       value="<?php echo htmlspecialchars($respuesta_125); ?>"
       style="position:absolute; left:4.4%; top:21.4%; width:30.9%; height:6.0%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- +invoke(): void — método 2, y=112..134 -->
<input type="text" name="respuesta_126"
       value="<?php echo htmlspecialchars($respuesta_126); ?>"
       style="position:absolute; left:4.4%; top:27.4%; width:30.9%; height:6.0%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- ThreadPool — cabecera, x=450..640, y=30..60 -->
<input type="text" name="respuesta_127"
       value="<?php echo htmlspecialchars($respuesta_127); ?>"
       style="position:absolute; left:66.2%; top:7.1%; width:27.9%; height:7.1%;
              font-size:15px; font-weight:bold; padding:1px 4px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box; text-align:center;"/>

<!-- Thread — cabecera, x=450..640, y=230..262 -->
<input type="text" name="respuesta_128"
       value="<?php echo htmlspecialchars($respuesta_128); ?>"
       style="position:absolute; left:66.2%; top:54.8%; width:27.9%; height:7.6%;
              font-size:15px; font-weight:bold; padding:1px 4px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box; text-align:center;"/>

<!-- ForkJoinTask — cabecera, x=30..240, y=250..280 -->
<input type="text" name="respuesta_129"
       value="<?php echo htmlspecialchars($respuesta_129); ?>"
       style="position:absolute; left:4.4%; top:59.5%; width:30.9%; height:7.1%;
              font-size:15px; font-weight:bold; padding:1px 4px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box; text-align:center;"/>

<!-- +fork(): void — método 1 ForkJoinTask, y=280..310 -->
<input type="text" name="respuesta_130"
       value="<?php echo htmlspecialchars($respuesta_130); ?>"
       style="position:absolute; left:4.4%; top:66.7%; width:30.9%; height:6.5%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- +join(): Object — método 2 ForkJoinTask, y=310..335 -->
<input type="text" name="respuesta_131"
       value="<?php echo htmlspecialchars($respuesta_131); ?>"
       style="position:absolute; left:4.4%; top:73.8%; width:30.9%; height:6.5%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- +compute(): Object — método 3 ForkJoinTask, y=335..354 -->
<input type="text" name="respuesta_132"
       value="<?php echo htmlspecialchars($respuesta_132); ?>"
       style="position:absolute; left:4.4%; top:80.0%; width:30.9%; height:6.5%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- Multiplicidad 1 — lado ForkJoinMaster en línea →ThreadPool, y≈46 -->
<input type="text" name="respuesta_133"
       value="<?php echo htmlspecialchars($respuesta_133); ?>"
       style="position:absolute; left:35.7%; top:8.3%; width:3.5%; height:5.5%;
              font-size:15px; padding:1px 2px;
              border:1px solid #aaa; background:#fff9c4; box-sizing:border-box; text-align:center;"/>

<!-- Multiplicidad 1 — lado ThreadPool en línea →ThreadPool, y≈46 -->
<input type="text" name="respuesta_134"
       value="<?php echo htmlspecialchars($respuesta_134); ?>"
       style="position:absolute; left:62.1%; top:8.3%; width:3.5%; height:5.5%;
              font-size:15px; padding:1px 2px;
              border:1px solid #aaa; background:#fff9c4; box-sizing:border-box; text-align:center;"/>

<!-- Multiplicidad 1 — lado ThreadPool en línea →Thread, x≈552, y≈80 -->
<input type="text" name="respuesta_135"
       value="<?php echo htmlspecialchars($respuesta_135); ?>"
       style="position:absolute; left:81.6%; top:17.9%; width:3.5%; height:5.5%;
              font-size:15px; padding:1px 2px;
              border:1px solid #aaa; background:#fff9c4; box-sizing:border-box; text-align:center;"/>

<!-- Multiplicidad * — lado Thread en línea →Thread, x≈552, y≈216 -->
<input type="text" name="respuesta_136"
       value="<?php echo htmlspecialchars($respuesta_136); ?>"
       style="position:absolute; left:81.6%; top:50.0%; width:3.5%; height:5.5%;
              font-size:15px; padding:1px 2px;
              border:1px solid #aaa; background:#fff9c4; box-sizing:border-box; text-align:center;"/>

<!-- Multiplicidad 1 — lado ForkJoinMaster en línea →ForkJoinTask, x≈142, y≈144 -->
<input type="text" name="respuesta_137"
       value="<?php echo htmlspecialchars($respuesta_137); ?>"
       style="position:absolute; left:20.9%; top:33.3%; width:3.5%; height:5.5%;
              font-size:15px; padding:1px 2px;
              border:1px solid #aaa; background:#fff9c4; box-sizing:border-box; text-align:center;"/>

<!-- Multiplicidad * — lado ForkJoinTask en línea →ForkJoinTask, x≈142, y≈236 -->
<input type="text" name="respuesta_138"
       value="<?php echo htmlspecialchars($respuesta_138); ?>"
       style="position:absolute; left:20.9%; top:54.8%; width:3.5%; height:5.5%;
              font-size:15px; padding:1px 2px;
              border:1px solid #aaa; background:#fff9c4; box-sizing:border-box; text-align:center;"/>

<!-- Multiplicidad 1 — self-ref ForkJoinTask salida, x≈246, y≈296 -->
<input type="text" name="respuesta_139"
       value="<?php echo htmlspecialchars($respuesta_139); ?>"
       style="position:absolute; left:35.7%; top:68.3%; width:3.5%; height:5.5%;
              font-size:15px; padding:1px 2px;
              border:1px solid #aaa; background:#fff9c4; box-sizing:border-box; text-align:center;"/>

<!-- Multiplicidad * — self-ref ForkJoinTask entrada, x≈246, y≈372 -->
<input type="text" name="respuesta_140"
       value="<?php echo htmlspecialchars($respuesta_140); ?>"
       style="position:absolute; left:35.7%; top:86.9%; width:3.5%; height:5.5%;
              font-size:15px; padding:1px 2px;
              border:1px solid #aaa; background:#fff9c4; box-sizing:border-box; text-align:center;"/>

</div><!-- /.wrapper -->

<button type="submit">Enviar</button>
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

<div style="position:relative; width:100%; padding-bottom:63.2%; display:block;">

<svg style="position:absolute; top:0; left:0; width:100%; height:100%;"
     viewBox="25 0 680 430" role="img" xmlns="http://www.w3.org/2000/svg">
  <title>Fork/Join - Request Processing Sequence Diagram</title>
  <defs>
    <marker id="arr315" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
      <path d="M2 1L8 5L2 9" fill="none" stroke="#555" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </marker>
  </defs>

  <!-- AppClient (stick figure) -->
  <circle cx="52" cy="28" r="8" fill="none" stroke="#555" stroke-width="1.2"/>
  <line x1="52" y1="36" x2="52" y2="58" stroke="#555" stroke-width="1.2"/>
  <line x1="38" y1="44" x2="66" y2="44" stroke="#555" stroke-width="1.2"/>
  <line x1="52" y1="58" x2="38" y2="72" stroke="#555" stroke-width="1.2"/>
  <line x1="52" y1="58" x2="66" y2="72" stroke="#555" stroke-width="1.2"/>
  <text font-family="sans-serif" font-size="11" fill="#444" x="52" y="84" text-anchor="middle">AppClient</text>

  <!-- ForkJoinMaster:master -->
  <rect x="140" y="10" width="148" height="28" rx="2" fill="#EEEDFE" stroke="#534AB7" stroke-width="0.8"/>

  <!-- ThreadPool:pool -->
  <rect x="328" y="10" width="110" height="28" rx="2" fill="#E1F5EE" stroke="#0F6E56" stroke-width="0.8"/>

  <!-- Thread:thread -->
  <rect x="466" y="10" width="90" height="28" rx="2" fill="#E1F5EE" stroke="#0F6E56" stroke-width="0.8"/>

  <!-- ForkJoinTask:task -->
  <rect x="583" y="10" width="88" height="28" rx="2" fill="#FAECE7" stroke="#993C1D" stroke-width="0.8"/>

  <!-- Lifelines -->
  <line x1="52"  y1="88"  x2="52"  y2="390" stroke="#888" stroke-width="0.8" stroke-dasharray="5 4"/>
  <line x1="214" y1="38"  x2="214" y2="390" stroke="#888" stroke-width="0.8" stroke-dasharray="5 4"/>
  <line x1="383" y1="38"  x2="383" y2="390" stroke="#888" stroke-width="0.8" stroke-dasharray="5 4"/>
  <line x1="511" y1="38"  x2="511" y2="390" stroke="#888" stroke-width="0.8" stroke-dasharray="5 4"/>
  <line x1="627" y1="38"  x2="627" y2="390" stroke="#888" stroke-width="0.8" stroke-dasharray="5 4"/>

  <!-- Activation boxes -->
  <rect x="208" y="110" width="12" height="200" rx="1" fill="#AFA9EC" stroke="#534AB7" stroke-width="0.5"/>
  <rect x="377" y="160" width="12" height="60"  rx="1" fill="#9FE1CB" stroke="#0F6E56" stroke-width="0.5"/>
  <rect x="505" y="220" width="12" height="60"  rx="1" fill="#9FE1CB" stroke="#0F6E56" stroke-width="0.5"/>
  <rect x="621" y="280" width="12" height="90"  rx="1" fill="#F5C4B3" stroke="#993C1D" stroke-width="0.5"/>

  <!-- Flechas -->
  <line x1="52"  y1="115" x2="207" y2="115" stroke="#444" stroke-width="1" marker-end="url(#arr315)"/>
  <line x1="52"  y1="145" x2="207" y2="145" stroke="#444" stroke-width="1" marker-end="url(#arr315)"/>
  <line x1="220" y1="165" x2="376" y2="165" stroke="#444" stroke-width="1" marker-end="url(#arr315)"/>
  <line x1="389" y1="225" x2="504" y2="225" stroke="#444" stroke-width="1" marker-end="url(#arr315)"/>
  <line x1="517" y1="285" x2="620" y2="285" stroke="#444" stroke-width="1" marker-end="url(#arr315)"/>

  <!-- alt frame -->
  <rect x="608" y="295" width="95" height="72" rx="2" fill="none" stroke="#888" stroke-width="0.8"/>
  <rect x="608" y="295" width="28" height="14" rx="2" fill="#ddd" stroke="#888" stroke-width="0.5"/>
  <text font-family="sans-serif" font-size="9" fill="#444" x="622" y="306" text-anchor="middle">alt</text>
  <line x1="608" y1="330" x2="703" y2="330" stroke="#aaa" stroke-width="0.5" stroke-dasharray="3 2"/>
  <line x1="660" y1="317" x2="671" y2="317" stroke="#444" stroke-width="1" marker-end="url(#arr315)"/>
  <line x1="660" y1="347" x2="671" y2="347" stroke="#444" stroke-width="1" marker-end="url(#arr315)"/>

  <!-- Caption -->
  <text font-family="sans-serif" font-size="11" fill="#555" x="352" y="415" text-anchor="middle">Figure 3.15: Request Processing Sequence Diagram - Fork / Join</text>
</svg>

<!--
  viewBox="25 0 680 430"  → ancho real=680, alto=430
  padding-bottom = 430/680*100 = 63.2%
  left  = (x_svg - 25) / 680 * 100%
  top   = y_svg / 430 * 100%
-->

<!-- respuesta_141 : ForkJoinMaster:master — cabecera, rect x=140..288, y=10..38 -->
<input type="text" name="respuesta_141"
       value="<?php echo htmlspecialchars($respuesta_141); ?>"
       style="position:absolute; left:17.0%; top:2.3%; width:21.8%; height:6.5%;
              font-size:15px; font-weight:bold; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box; text-align:center;"/>

<!-- respuesta_142 : ThreadPool:pool — cabecera, rect x=328..438, y=10..38 -->
<input type="text" name="respuesta_142"
       value="<?php echo htmlspecialchars($respuesta_142); ?>"
       style="position:absolute; left:44.6%; top:2.3%; width:16.2%; height:6.5%;
              font-size:15px; font-weight:bold; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box; text-align:center;"/>

<!-- respuesta_143 : Thread:thread — cabecera, rect x=466..556, y=10..38 -->
<input type="text" name="respuesta_143"
       value="<?php echo htmlspecialchars($respuesta_143); ?>"
       style="position:absolute; left:65.1%; top:2.3%; width:13.2%; height:6.5%;
              font-size:15px; font-weight:bold; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box; text-align:center;"/>

<!-- respuesta_144 : ForkJoinTask:task — cabecera, rect x=583..671, y=10..38 -->
<input type="text" name="respuesta_144"
       value="<?php echo htmlspecialchars($respuesta_144); ?>"
       style="position:absolute; left:82.1%; top:2.3%; width:12.9%; height:6.5%;
              font-size:15px; font-weight:bold; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box; text-align:center;"/>

<!-- respuesta_145 : ForkJoinMaster(ForkJoinTask) — label flecha y=115, encima -->
<input type="text" name="respuesta_145"
       value="<?php echo htmlspecialchars($respuesta_145); ?>"
       style="position:absolute; left:4.1%; top:23.3%; width:26.5%; height:5.1%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- respuesta_146 : invoke():void — label flecha y=145, encima -->
<input type="text" name="respuesta_146"
       value="<?php echo htmlspecialchars($respuesta_146); ?>"
       style="position:absolute; left:4.1%; top:30.2%; width:26.5%; height:5.1%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- respuesta_147 : execute(ForkJoinTask):void — label flecha y=165, encima -->
<input type="text" name="respuesta_147"
       value="<?php echo htmlspecialchars($respuesta_147); ?>"
       style="position:absolute; left:28.7%; top:35.8%; width:23.5%; height:5.1%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- respuesta_148 : run():void — label flecha y=225, encima -->
<input type="text" name="respuesta_148"
       value="<?php echo htmlspecialchars($respuesta_148); ?>"
       style="position:absolute; left:53.5%; top:50.2%; width:13.2%; height:5.1%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- respuesta_149 : compute():Object — label flecha y=285, encima -->
<input type="text" name="respuesta_149"
       value="<?php echo htmlspecialchars($respuesta_149); ?>"
       style="position:absolute; left:72.6%; top:64.2%; width:12.9%; height:5.1%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- respuesta_150 : fork():void — label dentro alt, arriba del divisor -->
<input type="text" name="respuesta_150"
       value="<?php echo htmlspecialchars($respuesta_150); ?>"
       style="position:absolute; left:85.7%; top:71.9%; width:13.2%; height:5.1%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

<!-- respuesta_151 : join():Object — label dentro alt, debajo del divisor -->
<input type="text" name="respuesta_151"
       value="<?php echo htmlspecialchars($respuesta_151); ?>"
       style="position:absolute; left:85.7%; top:80.0%; width:13.2%; height:5.1%;
              font-size:15px; padding:1px 3px;
              border:1px solid #aaa; background:#fffde7; box-sizing:border-box;"/>

</div><!-- /.wrapper -->

<button type="submit">Enviar</button>
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
