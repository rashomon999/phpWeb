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
 
     // ============================================================
    $respuesta_1   = 'patron de diseño Master-Worker describe';
    $respuesta_2   = 'ejecutar una coleccion de tareas independientes';
    $respuesta_3   = 'tareas que pueden ejecutarse concurrentemente';
    $respuesta_4   = 'un grupo de procesadores disponibles';
    $respuesta_5   = 'llamados workers';
    $respuesta_6   = 'la distribucion de tareas';
    $respuesta_7   = 'procesadores puede realizarse';
    $respuesta_8   = 'forma estatica o dinamica';
    $respuesta_9   = 'fin';
    $respuesta_10  = 'promover una carga computacional balanceada';
    $respuesta_11  = 'problemas computacionales';
    $respuesta_12  = 'resuelven dividiendolos';
    $respuesta_13  = 'subproblemas independientes';
    $respuesta_14  = 'de manera que';
    $respuesta_15  = 'implementaciones';
    $respuesta_16  = 'soluciones';
    $respuesta_17  = 'ejecutarse';
    $respuesta_18  = 'forma independiente y concurrente';
    $respuesta_19  = 'independencia';
    $respuesta_20  = 'subproblemas implica';
    $respuesta_21  = 'las tareas asociadas';
    $respuesta_22  = 'cada implementacion';
    $respuesta_23  = 'no comparten datos de lectura y escritura';
    $respuesta_24  = 'y las tareas no deben esperar los resultados';
    $respuesta_25  = 'otras tareas';
    $respuesta_26  = 'practicantes';
    $respuesta_27  = 'aprovechar';
    $respuesta_28  = 'recursos computacionales disponibles';
    $respuesta_29  = 'concurrencia inherente sin incurrir';
    $respuesta_30  = 'sobrecarga innecesaria';
    $respuesta_31  = 'diseñarse';
    $respuesta_32  = 'balancear la carga';
    $respuesta_33  = 'unidades de procesamiento disponibles';
    $respuesta_34  = 'soluciones';
    $respuesta_35  = 'dividirse';
    $respuesta_36  = 'tareas independientes';
    $respuesta_37  = 'costo de inicializar workers';
    $respuesta_38  = 'la transmision de datos';
    $respuesta_39  = 'debe ser menor que el costo de la tarea';
    $respuesta_40  = 'numero de tareas debe';
    $respuesta_41  = 'mayor';
    $respuesta_42  = 'las unidades de procesamiento disponibles';
    $respuesta_43  = 'distribucion debe';
    $respuesta_44  = 'dinamica';
    $respuesta_45  = 'carga de cada tarea es desconocida';
    $respuesta_46  = 'varia impredeciblemente';
    $respuesta_47  = 'la carga disponible soportada';
    $respuesta_48  = 'cada worker';
    $respuesta_49  = 'desconocida';
    $respuesta_50  = 'tareas';
    $respuesta_51  = 'independientes';
    $respuesta_52  = 'El patron de diseño';
    $respuesta_53  = 'aplica';
    $respuesta_54  = 'las tareas no tienen dependencias entre si';
    $respuesta_55  = 'las tareas deben rediseñarse';
    $respuesta_56  = 'eliminar dichas dependencias';
    $respuesta_57  = 'Compromisos';
    $respuesta_58  = 'comunicacion de datos y carga';
    $respuesta_59  = 'aplicar este patron de diseño';
    $respuesta_60  = 'tamaño de la tarea debe';
    $respuesta_61  = 'optimo';
    $respuesta_62  = 'acuerdo';
    $respuesta_63  = 'compromisos';
    $respuesta_64  = 'la sobrecarga de distribucion';
    $respuesta_65  = 'la carga implicada por la tarea';
    $respuesta_66  = 'tamaño de las tareas en Master-Worker';
    $respuesta_67  = 'variar de una tarea a otra';
    $respuesta_68  = 'Numero impredecible de tareas y nodos procesadores';
    $respuesta_69  = 'mayoria del tiempo no es posible';
    $respuesta_70  = 'predicciones explicitas';
    $respuesta_71  = 'entorno de ejecucion';
    $respuesta_72  = 'hardware y software';
    $respuesta_73  = 'procura lograr balanceo de carga incluso bajo entornos inciertos';
    $respuesta_74  = 'asignando tareas';
    $respuesta_75  = 'nodos procesadores inactivos';
    $respuesta_76  = 'dinamica de Master-Worker';
    $respuesta_77  = 'Fork-Join';
    $respuesta_78  = 'El numero de tareas y nodos procesadores es conocido';
    $respuesta_79  = 'el numero de tareas';
    $respuesta_80  = 'la carga de los nodos procesadores';
    $respuesta_81  = 'antes de la ejecucion';
    $respuesta_82  = 'los practicantes pueden programar el software';
    $respuesta_83  = 'asignar estaticamente las tareas';
    $respuesta_84  = 'nodo procesador mas adecuado';
    $respuesta_85  = 'garantizando balanceo de carga';
    $respuesta_86  = 'objOne:Runnable';
    $respuesta_87  = 'objTwo:Runnable';
    $respuesta_88  = 'threadPool:ThreadPool';
    $respuesta_89  = 'workerOne:Worker';
    $respuesta_90  = 'workerTwo:Worker';
    $respuesta_91  = 'execute()';
    $respuesta_92  = 'execute()';
    $respuesta_93  = 'returnPool()';
    $respuesta_94  = 'execute()';
    $respuesta_95  = 'execute()';
    $respuesta_96  = 'returnPool()';
    $respuesta_97  = 'Master';
    $respuesta_98  = '-queue: Queue';
    $respuesta_99  = '-global_results: Queue';
    $respuesta_100 = '-workers: ThreadPool';
    $respuesta_101 = '+create_tasks(): void';
    $respuesta_102 = '+launch_workers(): void';
    $respuesta_103 = '+getTask(): Object';
    $respuesta_104 = '+addPartialResult(Object): void';
    $respuesta_105 = '+processPartialResults(): Object';
    $respuesta_106 = '+shutdown_workers(): void';
    $respuesta_107 = 'Worker';
    $respuesta_108 = '-request_task(): void';
    $respuesta_109 = '+process_task(): void';
    $respuesta_110 = '1';
    $respuesta_111 = '1..*';
    $respuesta_112 = 'Master';
    $respuesta_113 = 'Master contiene la coleccion compartida';
    $respuesta_114 = 'tareas';
    $respuesta_115 = 'usualmente una cola';
    $respuesta_116 = 'donde las tareas se almacenan despues';
    $respuesta_117 = 'ser divididas';
    $respuesta_118 = 'posee una segunda cola compartida';
    $respuesta_119 = 'almacenan los resultados';
    $respuesta_120 = 'los calculos realizados por los workers';
    $respuesta_121 = 'el Master mantiene registradas las tareas';
    $respuesta_122 = 'lanza los procesadores';
    $respuesta_123 = 'recopila los resultados de los workers';
    $respuesta_124 = 'producir el resultado final';
    $respuesta_125 = 'Worker';
    $respuesta_126 = 'Workers solicitan una tarea';
    $respuesta_127 = 'la coleccion compartida de tareas registradas';
    $respuesta_128 = 'cola del master y la procesan';
    $respuesta_129 = 'resultados parciales del cálculo';
    $respuesta_130 = 'master';

        
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'patron de diseño Master-Worker describe') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'ejecutar una coleccion de tareas independientes') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'tareas que pueden ejecutarse concurrentemente') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'un grupo de procesadores disponibles') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'llamados workers') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'la distribucion de tareas') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'procesadores puede realizarse') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'forma estatica o dinamica') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'fin') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'promover una carga computacional balanceada') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'problemas computacionales') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'resuelven dividiendolos') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'subproblemas independientes') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'de manera que') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'implementaciones') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'soluciones') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'ejecutarse') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'forma independiente y concurrente') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'independencia') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'subproblemas implica') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'las tareas asociadas') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'cada implementacion') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'no comparten datos de lectura y escritura') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'y las tareas no deben esperar los resultados') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'otras tareas') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'practicantes') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'aprovechar') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'recursos computacionales disponibles') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'concurrencia inherente sin incurrir') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'sobrecarga innecesaria') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'diseñarse') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'balancear la carga') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'unidades de procesamiento disponibles') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'soluciones') { 
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
    if ($respuesta_36 === 'tareas independientes') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'costo de inicializar workers') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'la transmision de datos') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'debe ser menor que el costo de la tarea') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'numero de tareas debe') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'mayor') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'las unidades de procesamiento disponibles') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'distribucion debe') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'dinamica') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'carga de cada tarea es desconocida') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'varia impredeciblemente') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'la carga disponible soportada') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'cada worker') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'desconocida') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'tareas') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'independientes') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'El patron de diseño') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'aplica') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'las tareas no tienen dependencias entre si') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'las tareas deben rediseñarse') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'eliminar dichas dependencias') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'Compromisos') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'comunicacion de datos y carga') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'aplicar este patron de diseño') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'tamaño de la tarea debe') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'optimo') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'acuerdo') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'compromisos') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'la sobrecarga de distribucion') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'la carga implicada por la tarea') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'tamaño de las tareas en Master-Worker') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'variar de una tarea a otra') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'Numero impredecible de tareas y nodos procesadores') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'mayoria del tiempo no es posible') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'predicciones explicitas') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'entorno de ejecucion') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'hardware y software') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'procura lograr balanceo de carga incluso bajo entornos inciertos') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'asignando tareas') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'nodos procesadores inactivos') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'dinamica de Master-Worker') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'Fork-Join') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'El numero de tareas y nodos procesadores es conocido') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'el numero de tareas') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'la carga de los nodos procesadores') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'antes de la ejecucion') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'los practicantes pueden programar el software') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'asignar estaticamente las tareas') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'nodo procesador mas adecuado') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'garantizando balanceo de carga') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

     

 $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
if ($respuesta_86 === 'objOne:Runnable') { $verificar_86 = "correcto"; }
elseif ($respuesta_86 === '') { $verificar_86 = ''; }
else { $verificar_86 = "incorrecto"; }

$respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
if ($respuesta_87 === 'objTwo:Runnable') { $verificar_87 = "correcto"; }
elseif ($respuesta_87 === '') { $verificar_87 = ''; }
else { $verificar_87 = "incorrecto"; }

$respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
if ($respuesta_88 === 'threadPool:ThreadPool') { $verificar_88 = "correcto"; }
elseif ($respuesta_88 === '') { $verificar_88 = ''; }
else { $verificar_88 = "incorrecto"; }

$respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'workerOne:Worker') { $verificar_89 = "correcto"; }
elseif ($respuesta_89 === '') { $verificar_89 = ''; }
else { $verificar_89 = "incorrecto"; }

$respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'workerTwo:Worker') { $verificar_90 = "correcto"; }
elseif ($respuesta_90 === '') { $verificar_90 = ''; }
else { $verificar_90 = "incorrecto"; }

$respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'execute()') { $verificar_91 = "correcto"; }
elseif ($respuesta_91 === '') { $verificar_91 = ''; }
else { $verificar_91 = "incorrecto"; }

$respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'execute()') { $verificar_92 = "correcto"; }
elseif ($respuesta_92 === '') { $verificar_92 = ''; }
else { $verificar_92 = "incorrecto"; }

$respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'returnPool()') { $verificar_93 = "correcto"; }
elseif ($respuesta_93 === '') { $verificar_93 = ''; }
else { $verificar_93 = "incorrecto"; }

$respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'execute()') { $verificar_94 = "correcto"; }
elseif ($respuesta_94 === '') { $verificar_94 = ''; }
else { $verificar_94 = "incorrecto"; }

$respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'execute()') { $verificar_95 = "correcto"; }
elseif ($respuesta_95 === '') { $verificar_95 = ''; }
else { $verificar_95 = "incorrecto"; }

$respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'returnPool()') { $verificar_96 = "correcto"; }
elseif ($respuesta_96 === '') { $verificar_96 = ''; }
else { $verificar_96 = "incorrecto"; }


$respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'Master') { $verificar_97 = "correcto"; }
elseif ($respuesta_97 === '') { $verificar_97 = ''; }
else { $verificar_97 = "incorrecto"; }

$respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === '-queue: Queue') { $verificar_98 = "correcto"; }
elseif ($respuesta_98 === '') { $verificar_98 = ''; }
else { $verificar_98 = "incorrecto"; }

$respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === '-global_results: Queue') { $verificar_99 = "correcto"; }
elseif ($respuesta_99 === '') { $verificar_99 = ''; }
else { $verificar_99 = "incorrecto"; }

$respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === '-workers: ThreadPool') { $verificar_100 = "correcto"; }
elseif ($respuesta_100 === '') { $verificar_100 = ''; }
else { $verificar_100 = "incorrecto"; }

$respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === '+create_tasks(): void') { $verificar_101 = "correcto"; }
elseif ($respuesta_101 === '') { $verificar_101 = ''; }
else { $verificar_101 = "incorrecto"; }

$respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === '+launch_workers(): void') { $verificar_102 = "correcto"; }
elseif ($respuesta_102 === '') { $verificar_102 = ''; }
else { $verificar_102 = "incorrecto"; }

$respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === '+getTask(): Object') { $verificar_103 = "correcto"; }
elseif ($respuesta_103 === '') { $verificar_103 = ''; }
else { $verificar_103 = "incorrecto"; }

$respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === '+addPartialResult(Object): void') { $verificar_104 = "correcto"; }
elseif ($respuesta_104 === '') { $verificar_104 = ''; }
else { $verificar_104 = "incorrecto"; }

$respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === '+processPartialResults(): Object') { $verificar_105 = "correcto"; }
elseif ($respuesta_105 === '') { $verificar_105 = ''; }
else { $verificar_105 = "incorrecto"; }

$respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === '+shutdown_workers(): void') { $verificar_106 = "correcto"; }
elseif ($respuesta_106 === '') { $verificar_106 = ''; }
else { $verificar_106 = "incorrecto"; }

$respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'Worker') { $verificar_107 = "correcto"; }
elseif ($respuesta_107 === '') { $verificar_107 = ''; }
else { $verificar_107 = "incorrecto"; }

$respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === '-request_task(): void') { $verificar_108 = "correcto"; }
elseif ($respuesta_108 === '') { $verificar_108 = ''; }
else { $verificar_108 = "incorrecto"; }

$respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === '+process_task(): void') { $verificar_109 = "correcto"; }
elseif ($respuesta_109 === '') { $verificar_109 = ''; }
else { $verificar_109 = "incorrecto"; }

$respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === '1') { $verificar_110 = "correcto"; }
elseif ($respuesta_110 === '') { $verificar_110 = ''; }
else { $verificar_110 = "incorrecto"; }

$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === '1..*') { $verificar_111 = "correcto"; }
elseif ($respuesta_111 === '') { $verificar_111 = ''; }
else { $verificar_111 = "incorrecto"; }

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'Master') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'Master contiene la coleccion compartida') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'tareas') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'usualmente una cola') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'donde las tareas se almacenan despues') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === 'ser divididas') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'posee una segunda cola compartida') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'almacenan los resultados') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'los calculos realizados por los workers') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'el Master mantiene registradas las tareas') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
}


$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'lanza los procesadores') {  
    $verificar_122 = "correcto";
} elseif ($respuesta_122 === '') {
    $verificar_122 = '';
} else {
    $verificar_122 = "incorrecto";
}

$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === 'recopila los resultados de los workers') {  
    $verificar_123 = "correcto";
} elseif ($respuesta_123 === '') {
    $verificar_123 = '';
} else {
    $verificar_123 = "incorrecto";
}

$respuesta_124 = isset($_POST['respuesta_124']) ? $_POST['respuesta_124'] : '';
if ($respuesta_124 === 'producir el resultado final') {  
    $verificar_124 = "correcto";
} elseif ($respuesta_124 === '') {
    $verificar_124 = '';
} else {
    $verificar_124 = "incorrecto";
}

$respuesta_125 = isset($_POST['respuesta_125']) ? $_POST['respuesta_125'] : '';
if ($respuesta_125 === 'Worker') {  
    $verificar_125 = "correcto";
} elseif ($respuesta_125 === '') {
    $verificar_125 = '';
} else {
    $verificar_125 = "incorrecto";
}

$respuesta_126 = isset($_POST['respuesta_126']) ? $_POST['respuesta_126'] : '';
if ($respuesta_126 === 'Workers solicitan una tarea') {  
    $verificar_126 = "correcto";
} elseif ($respuesta_126 === '') {
    $verificar_126 = '';
} else {
    $verificar_126 = "incorrecto";
}

$respuesta_127 = isset($_POST['respuesta_127']) ? $_POST['respuesta_127'] : '';
if ($respuesta_127 === 'la coleccion compartida de tareas registradas') {  
    $verificar_127 = "correcto";
} elseif ($respuesta_127 === '') {
    $verificar_127 = '';
} else {
    $verificar_127 = "incorrecto";
}

$respuesta_128 = isset($_POST['respuesta_128']) ? $_POST['respuesta_128'] : '';
if ($respuesta_128 === 'cola del master y la procesan') {  
    $verificar_128 = "correcto";
} elseif ($respuesta_128 === '') {
    $verificar_128 = '';
} else {
    $verificar_128 = "incorrecto";
}

$respuesta_129 = isset($_POST['respuesta_129']) ? $_POST['respuesta_129'] : '';
if ($respuesta_129 === 'resultados parciales del calculo') {  
    $verificar_129 = "correcto";
} elseif ($respuesta_129 === '') {
    $verificar_129 = '';
} else {
    $verificar_129 = "incorrecto";
}

$respuesta_130 = isset($_POST['respuesta_130']) ? $_POST['respuesta_130'] : '';
if ($respuesta_130 === 'master') {  
    $verificar_130 = "correcto";
} elseif ($respuesta_130 === '') {
    $verificar_130 = '';
} else {
    $verificar_130 = "incorrecto";
}

$respuesta_131 = isset($_POST['respuesta_131']) ? $_POST['respuesta_131'] : '';
if ($respuesta_131 === '154') {  
    $verificar_131 = "correcto";
} elseif ($respuesta_131 === '') {
    $verificar_131 = '';
} else {
    $verificar_131 = "incorrecto";
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

<form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 

        <button onmousedown="mostrarMensaje2()" onmouseup="ocultarMensaje2()">Dato</button>
    <div id="mensaje2" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
 <h3>Idea central de Master-Worker</h3>

<p>
El patrón Master-Worker divide un problema grande en tareas pequeñas e independientes
y luego las reparte entre workers.
</p>

<h3>Ejemplo sencillo</h3>

<h4>Problema grande</h4>

<p>
Sumar dos vectores enormes.
</p>

<h4>El Master divide</h4>

<p>
En vez de hacer todo en un solo hilo:
</p>

<pre>
C1 = A1 + B1
C2 = A2 + B2
C3 = A3 + B3
...
</pre>

<p>
Cada operación se vuelve una tarea independiente.
</p>

<h4>Luego reparte</h4>

<pre>
Worker 1 -> C1
Worker 2 -> C2
Worker 3 -> C3
</pre>

<h3>Responsabilidades</h3>

<h4>Master</h4>

<p>
Se encarga de:
</p>

<ul>
  <li>dividir el problema</li>
  <li>repartir tareas</li>
  <li>coordinar workers</li>
  <li>recoger resultados</li>
</ul>

<h4>Workers</h4>

<p>
Los workers solamente ejecutan tareas.
</p>

<h3>Diferencia con Thread Pool</h3>

<h4>Master-Worker</h4>

<p>
Organiza el trabajo.
</p>

<h4>Thread Pool</h4>

<p>
Organiza los threads.
</p>

<p>
Thread Pool normalmente asume que las tareas ya existen y solamente dice:
</p>

<pre>
Dame una tarea
y yo consigo un thread para ejecutarla
</pre>

<h3>Cómo trabajan juntos</h3>

<pre>
Master divide tareas
↓
Thread Pool proporciona threads
↓
Workers ejecutan tareas
</pre>

<h3>Ejemplo visual</h3>

<pre>
Problema grande
       ↓
     Master
   /   |   \
 T1   T2   T3
  ↓    ↓    ↓
Workers/Threads
</pre>

<p>
Aquí puede verse claramente que Master-Worker está enfocado en dividir y distribuir el problema.
</p>
    </div>



  <h3>3.2.7 Patrón de Diseño Master-Worker</h3>

<h4>También conocido como:</h4>
<ul>
  <li>The Embarrassingly Parallel Pattern</li>
  <li>Task Queue</li>
  <li>Master-Slave</li>
</ul>

<h4>Intención</h4>
<p>
El 
<input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="37">
  cómo 
<input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="41">
  (es decir, 
<input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="43">
 ) en 
<input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="35">
 , 
<input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="14">
 .
</p>

<p>
Además, 
<input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="21">
  entre 
<input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="26">
  de
<input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="21">
  con el 
<input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="5">
  de 
<input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="41">
 .
</p>

<button type="submit">enviar</button>
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
<hr>
<h4>Problema</h4>
<p>
Muchos 
<input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="25">
  se 
<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="21">
  en 
<input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="25">
 ,
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="11">
  las 
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="13">
  de sus 
<input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="8">
  puedan 
<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">
  de 
<input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="31">
 .
</p>

<p>
La 
<input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="11">
  entre 
<input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="18">
  que 
<input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="16">
  a 
<input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="16">
  de solución 
<input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="37">
 , 
<input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="41">
  de 
<input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">
 .
</p>

<p>
Los 
<input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8">
  deben 
<input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">
  los 
<input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="32">
  y la 
<input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="31">
  en 
<input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="21">
 . Dada esta situación, un programa debe
<input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8">
  procurando 
<input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="15">
  entre las 
<input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="35">
 .
</p>

<button type="submit">Enviar</button>
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
    <hr>
<p>
Para ejemplificar este tipo de problemas, considere el problema de suma de vectores.
Dados los vectores A, B y C donde C = A + B, cada elemento de C se obtiene sumando
los elementos correspondientes de A y B, Ci = Ai + Bi.
</p>

<p>
Cada elemento de C puede calcularse de manera concurrente como un conjunto de subproblemas
del problema de suma de elementos de vectores.
</p>

<h4>Contexto</h4>
<p>
Los problemas cuyas 
<input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8">
  pueden 
<input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
  en 
<input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="18">
  pueden aprovechar
este patrón de diseño.
</p>

<p>
Sin embargo, algunas particularidades deben evaluarse antes de implementarlo:
</p>

<ul>
  <li>
    El 
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="22">
      (incluyendo, por ejemplo, 
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="19">
     )
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="35">
     .
  </li>

  <li>
    El 
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="18">
      ser 
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8">
      que 
    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="41">
     .
  </li>

  <li>
    La 
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="15">
      ser 
    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="7">
      si la 
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="31">
     ,
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="21">
      o cuando 
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="25">
      por 
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="12">
    es 
    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="11">
     .
  </li>
</ul>

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
    <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>  
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
<hr>
<h4>Fuerzas</h4>

<h5>Las 
<input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="5">    
  deben ser 
<input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="11">
 </h5>
<p>
<input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="14">
  Master-Worker 
<input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="8">
  cuando 
<input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="37">
 .
De lo contrario, 
<input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="24">
 para 
<input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="26">
 .
</p>

<h5>
<input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="11"> 
  entre 
<input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="26">
 </h5>
<p>
Para 
<input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="26">
 , el 
<input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="21">
  ser 
<input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="7">
  de 
<input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="8">
  con los 
<input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="10">
  entre 
<input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="24">
  y 
<input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="26">
 ,
dado que el 
<input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="33">
  puede 
<input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="21">
 .
</p>

<h5>
<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="46">    
 </h5>
<p>
La 
<input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="28">
  realizar 
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="18">
  del 
<input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="18">
  de 
<input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="16">
 .
</p>

<p>
Sin embargo, Master-Worker 
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="58">
 ,
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="16">
  a 
<input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="24">
 .
</p>

<p>
Este escenario corresponde a la versión 
<input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="25">
  y también al patrón
de diseño 
<input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="8">
 .
</p>

<h5>
<input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="51">    
 </h5>
<p>
Cuando 
<input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="15">
  y 
<input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="32">
  se conoce 
<input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="18">
 ,
<input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="41">
  para 
<input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="28">
  al 
<input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="31">
 , 
<input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="31">
 .
</p>

<button type="submit">Enviar</button>
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
<br>
<?php echo $verificar_83 ?>
<?php echo $verificar_84 ?>
<?php echo $verificar_85 ?>
<p>
Este escenario corresponde a la versión estática de Master-Worker.
</p>   
       

 <div style="position:relative; width:100%; padding-bottom:72%; display:block;">
<svg style="position:absolute; top:0; left:0; width:100%; height:100%;" 
     viewBox="0 0 680 490" role="img" xmlns="http://www.w3.org/2000/svg">
  <title>Request Processing Sequence Diagram - Thread Pool</title>
  <defs>
    <marker id="arr39" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
      <path d="M2 1L8 5L2 9" fill="none" stroke="context-stroke" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </marker>
  </defs>

  <rect x="0" y="0" width="680" height="490" fill="#e8e8e8" rx="4"/>

  <!-- CABECERAS -->
  <rect x="10"  y="10" width="120" height="38" rx="6" fill="white" stroke="#aaa" stroke-width="0.8"/>
  <rect x="190" y="10" width="120" height="38" rx="6" fill="white" stroke="#aaa" stroke-width="0.8"/>
  <rect x="390" y="10" width="150" height="38" rx="6" fill="white" stroke="#aaa" stroke-width="0.8"/>
  <rect x="560" y="10" width="110" height="38" rx="6" fill="white" stroke="#aaa" stroke-width="0.8"/>
  <!-- workerTwo cabecera mitad inferior -->
  <rect x="560" y="270" width="110" height="38" rx="6" fill="white" stroke="#aaa" stroke-width="0.8"/>

  <!-- LIFELINES -->
  <line x1="70"  y1="48" x2="70"  y2="480" stroke="#999" stroke-width="0.8" stroke-dasharray="5 4"/>
  <line x1="250" y1="48" x2="250" y2="480" stroke="#999" stroke-width="0.8" stroke-dasharray="5 4"/>
  <line x1="465" y1="48" x2="465" y2="480" stroke="#999" stroke-width="0.8" stroke-dasharray="5 4"/>
  <line x1="615" y1="48" x2="615" y2="262" stroke="#999" stroke-width="0.8" stroke-dasharray="5 4"/>
  <line x1="615" y1="308" x2="615" y2="480" stroke="#999" stroke-width="0.8" stroke-dasharray="5 4"/>

  <!-- MARCO PAR -->
  <rect x="4" y="60" width="672" height="415" rx="4" fill="none" stroke="#bbb" stroke-width="0.8"/>
  <rect x="4" y="60" width="32" height="18" rx="2" fill="#f0f0f0" stroke="#bbb" stroke-width="0.6"/>
  <text font-size="11" font-family="sans-serif" x="20" y="72" text-anchor="middle" dominant-baseline="central" fill="#555">par</text>
  <line x1="4" y1="265" x2="676" y2="265" stroke="#bbb" stroke-width="0.7" stroke-dasharray="6 4"/>

  <!-- MITAD SUPERIOR -->
  <rect x="244" y="110" width="12" height="24" rx="2" fill="#ddd" stroke="#777" stroke-width="0.6"/>
  <rect x="459" y="120" width="12" height="118" rx="2" fill="#ddd" stroke="#777" stroke-width="0.6"/>
  <rect x="609" y="138" width="12" height="80"  rx="2" fill="#ddd" stroke="#777" stroke-width="0.6"/>

  <line x1="256" y1="122" x2="459" y2="122" stroke="#444" stroke-width="0.9" marker-end="url(#arr39)"/>
  <line x1="471" y1="145" x2="609" y2="145" stroke="#444" stroke-width="0.9" marker-end="url(#arr39)"/>
  <line x1="609" y1="200" x2="471" y2="200" stroke="#444" stroke-width="0.9" marker-end="url(#arr39)"/>

  <!-- MITAD INFERIOR -->
  <rect x="64"  y="295" width="12" height="24" rx="2" fill="#ddd" stroke="#777" stroke-width="0.6"/>
  <rect x="459" y="310" width="12" height="110" rx="2" fill="#ddd" stroke="#777" stroke-width="0.6"/>
  <rect x="609" y="340" width="12" height="60"  rx="2" fill="#ddd" stroke="#777" stroke-width="0.6"/>

  <line x1="76"  y1="307" x2="459" y2="307" stroke="#444" stroke-width="0.9" marker-end="url(#arr39)"/>
  <line x1="471" y1="348" x2="609" y2="348" stroke="#444" stroke-width="0.9" marker-end="url(#arr39)"/>
  <line x1="609" y1="388" x2="471" y2="388" stroke="#444" stroke-width="0.9" marker-end="url(#arr39)"/>

  <!-- CAPTION -->
  <text font-size="11" font-family="sans-serif" font-style="italic"
        x="340" y="475" text-anchor="middle" fill="#555">
    Figure 3.9: Request Processing Sequence Diagram - Thread Pool
  </text>
</svg>

<!-- INPUTS: los % se calculan sobre el div que tiene padding-bottom:72% -->
<!-- padding-bottom:72% = 490/680 = 0.7206 ≈ 72% -->

<!-- respuesta_86: objOne:Runnable  (cabecera 1: x=10..130, y=10..48) -->
<!-- left: 10/680=1.5%  top: 10/490=2%  width:120/680=17.6%  height:38/490=7.7% -->
 <input type="text" name="respuesta_86"
  value="<?php echo $respuesta_86; ?>"
  style="position:absolute; left:1.5%; top:2%; width:17.6%; height:7.7%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_87"
  value="<?php echo $respuesta_87; ?>"
  style="position:absolute; left:27.9%; top:2%; width:17.6%; height:7.7%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_88"
  value="<?php echo $respuesta_88; ?>"
  style="position:absolute; left:57.4%; top:2%; width:22.1%; height:7.7%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_89"
  value="<?php echo $respuesta_89; ?>"
  style="position:absolute; left:82.4%; top:2%; width:16.2%; height:7.7%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_90"
  value="<?php echo $respuesta_90; ?>"
  style="position:absolute; left:82.4%; top:55.1%; width:16.2%; height:7.7%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_91"
  value="<?php echo $respuesta_91; ?>"
  style="position:absolute; left:44%; top:20%; width:16%; height:3%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_92"
  value="<?php echo $respuesta_92; ?>"
  style="position:absolute; left:71%; top:25%; width:14%; height:3%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_93"
  value="<?php echo $respuesta_93; ?>"
  style="position:absolute; left:71%; top:37%; width:16%; height:3%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_94"
  value="<?php echo $respuesta_94; ?>"
  style="position:absolute; left:20%; top:58%; width:16%; height:3%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_95"
  value="<?php echo $respuesta_95; ?>"
  style="position:absolute; left:71%; top:67%; width:14%; height:3%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_96"
  value="<?php echo $respuesta_96; ?>"
  style="position:absolute; left:71%; top:76%; width:14%; height:3%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>
</div>


<button type="submit">Enviar</button>
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

<hr>

 <div style="position:relative; width:100%; display:inline-block;">

<svg width="100%" viewBox="0 0 680 320" role="img" xmlns="http://www.w3.org/2000/svg">
  <title>Structure Diagram - Master-Worker Design Pattern</title>

  <!-- ── CLASE Master ── -->
  <!-- caja completa -->
  <rect x="20" y="20" width="360" height="240" rx="2" fill="white" stroke="#444" stroke-width="1"/>
  <!-- header Master (texto eliminado → input) -->
  <rect x="20" y="20" width="360" height="32" rx="2" fill="white" stroke="#444" stroke-width="1"/>
  <!-- separador atributos / métodos -->
  <line x1="20" y1="80" x2="380" y2="80" stroke="#444" stroke-width="0.7"/>
  <!-- líneas separadoras internas entre atributos -->
  <line x1="20" y1="108" x2="380" y2="108" stroke="#ddd" stroke-width="0.4"/>
  <line x1="20" y1="124" x2="380" y2="124" stroke="#ddd" stroke-width="0.4"/>
  <!-- separador atributos / métodos 2 (tras 3 attrs) -->
  <line x1="20" y1="140" x2="380" y2="140" stroke="#444" stroke-width="0.7"/>
  <!-- líneas entre métodos -->
  <line x1="20" y1="156" x2="380" y2="156" stroke="#ddd" stroke-width="0.4"/>
  <line x1="20" y1="172" x2="380" y2="172" stroke="#ddd" stroke-width="0.4"/>
  <line x1="20" y1="188" x2="380" y2="188" stroke="#ddd" stroke-width="0.4"/>
  <line x1="20" y1="204" x2="380" y2="204" stroke="#ddd" stroke-width="0.4"/>
  <line x1="20" y1="220" x2="380" y2="220" stroke="#ddd" stroke-width="0.4"/>
  <line x1="20" y1="236" x2="380" y2="236" stroke="#ddd" stroke-width="0.4"/>

  <!-- ── CLASE Worker ── -->
  <rect x="500" y="100" width="160" height="96" rx="2" fill="white" stroke="#444" stroke-width="1"/>
  <!-- header Worker -->
  <rect x="500" y="100" width="160" height="32" rx="2" fill="white" stroke="#444" stroke-width="1"/>
  <!-- separador -->
  <line x1="500" y1="132" x2="660" y2="132" stroke="#444" stroke-width="0.7"/>
  <line x1="500" y1="148" x2="660" y2="148" stroke="#ddd" stroke-width="0.4"/>
  <line x1="500" y1="164" x2="660" y2="164" stroke="#ddd" stroke-width="0.4"/>

  <!-- ── LÍNEA DE ASOCIACIÓN ── -->
  <line x1="380" y1="148" x2="500" y2="148" stroke="#444" stroke-width="1"/>

  <!-- ── CAPTION ── -->
  <text font-size="11" font-family="sans-serif" font-style="italic"
        x="340" y="305" text-anchor="middle" fill="#555">
    Figure 3.10: Structure Diagram - Master-Worker Design Pattern
  </text>
</svg>

<!-- ── INPUTS Master ── -->

<!-- respuesta_97: nombre clase Master -->
<input type="text" name="respuesta_97"
  value="<?php echo $respuesta_97; ?>"
  style="position:absolute; left:22%; top:6.5%; width:18%; height:9%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_98"
  value="<?php echo $respuesta_98; ?>"
  style="position:absolute; left:4%; top:26%; width:28%; height:7%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_99"
  value="<?php echo $respuesta_99; ?>"
  style="position:absolute; left:4%; top:33%; width:34%; height:5%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_100"
  value="<?php echo $respuesta_100; ?>"
  style="position:absolute; left:4%; top:38%; width:30%; height:5%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_101"
  value="<?php echo $respuesta_101; ?>"
  style="position:absolute; left:4%; top:45%; width:30%; height:5%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_102"
  value="<?php echo $respuesta_102; ?>"
  style="position:absolute; left:4%; top:52%; width:30%; height:5%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_103"
  value="<?php echo $respuesta_103; ?>"
  style="position:absolute; left:4%; top:58%; width:26%; height:5%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_104"
  value="<?php echo $respuesta_104; ?>"
  style="position:absolute; left:4%; top:64%; width:40%; height:5%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_105"
  value="<?php echo $respuesta_105; ?>"
  style="position:absolute; left:4%; top:70%; width:40%; height:5%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_106"
  value="<?php echo $respuesta_106; ?>"
  style="position:absolute; left:4%; top:76%; width:34%; height:5%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_107"
  value="<?php echo $respuesta_107; ?>"
  style="position:absolute; left:77%; top:31.5%; width:14%; height:9%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_108"
  value="<?php echo $respuesta_108; ?>"
  style="position:absolute; left:74%; top:42%; width:22%; height:5%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_109"
  value="<?php echo $respuesta_109; ?>"
  style="position:absolute; left:74%; top:50%; width:22%; height:5%;
         font-size:14px; padding:1px 3px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_110"
  value="<?php echo $respuesta_110; ?>"
  style="position:absolute; left:56%; top:40%; width:5%; height:6%;
         font-size:14px; padding:1px 2px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>

<input type="text" name="respuesta_111"
  value="<?php echo $respuesta_111; ?>"
  style="position:absolute; left:67%; top:40%; width:5%; height:4%;
         font-size:14px; padding:1px 2px; border:1px solid #aaa;
         background:#fffde7; box-sizing:border-box;"/>
</div>
   

<button type="submit">Enviar</button>
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
</div>




<div class="seccion derecha">
    
    <h4>Participantes</h4>

<h5><input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="8">
 </h5>
<p>
El 
<input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="36">
  de 
<input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="4">
 , 
<input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="18">
 ,
<input type="text" name="respuesta_116" value="<?php echo $respuesta_116; ?>" size="33">
  de 
<input type="text" name="respuesta_117" value="<?php echo $respuesta_117; ?>" size="10">
 .
</p>

<p>
También 
<input type="text" name="respuesta_118" value="<?php echo $respuesta_118; ?>" size="31">
  donde se 
<input type="text" name="respuesta_119" value="<?php echo $respuesta_119; ?>" size="21">
  de 
<input type="text" name="respuesta_120" value="<?php echo $respuesta_120; ?>" size="33">
 .
</p>

<p>
En resumen, 
<input type="text" name="respuesta_121" value="<?php echo $respuesta_121; ?>" size="35">
 , 
<input type="text" name="respuesta_122" value="<?php echo $respuesta_122; ?>" size="18">
  (workers) y 
<input type="text" name="respuesta_123" value="<?php echo $respuesta_123; ?>" size="33">
  para 
<input type="text" name="respuesta_124" value="<?php echo $respuesta_124; ?>" size="21">
 .
</p>

<h5>
<input type="text" name="respuesta_125" value="<?php echo $respuesta_125; ?>" size="8">    
 </h5>
<p>
Los 
<input type="text" name="respuesta_126" value="<?php echo $respuesta_126; ?>" size="21"> 
  desde 
<input type="text" name="respuesta_127" value="<?php echo $respuesta_127; ?>" size="40"> 
 
en la 
<input type="text" name="respuesta_128" value="<?php echo $respuesta_128; ?>" size="25"> 
 .
</p>

<p>
Finalmente, los workers retornan 
<input type="text" name="respuesta_129" value="<?php echo $respuesta_129; ?>" size="26"> 
  al 
<input type="text" name="respuesta_130" value="<?php echo $respuesta_130; ?>" size="8"> 
 .
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
<?php echo $verificar_123 ?>
<?php echo $verificar_124 ?>
<?php echo $verificar_125 ?>
<?php echo $verificar_126 ?>
<br>
<?php echo $verificar_127 ?>
<?php echo $verificar_128 ?>
<?php echo $verificar_129 ?>
<?php echo $verificar_130 ?>
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
        href="tercero.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
