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
        // Establecer todas las respuestas correctas para las tablas de multiplicar
 
    $respuesta_1 = 'El Modelo de interconexion de sistemas abiertos';
    $respuesta_2 = 'interconexion';
    $respuesta_3 = 'sistemas abiertos';
    $respuesta_4 = 'se utiliza para describir';
    $respuesta_5 = 'protocolos';
    $respuesta_6 = 'de red';
    $respuesta_7 = 'Debido a que rara vez se implementa en redes reales';
    $respuesta_8 = 'estandarizar el desarrollo de las redes reales';
    $respuesta_9 = 'no propietaria';
    $respuesta_10 = 'grupos';
    $respuesta_11 = 'funcionalidad';
    
    $respuesta_12 = 'red';
    $respuesta_13 = 'protocolo';
    $respuesta_14 = 'siete';
    $respuesta_15 = 'Open Systems Interconnection';
    $respuesta_16 = 'se considera una referencia para';
    $respuesta_17 = 'Aplicacion';
    $respuesta_18 = 'Presentacion';
    $respuesta_19 = 'Sesion';
    $respuesta_20 = 'Transporte';
    $respuesta_21 = 'Red';
    $respuesta_22 = 'Enlace de datos';
    
    $respuesta_23 = 'Fisico';
    $respuesta_24 = 'fisica';
    $respuesta_25 = 'Gestiona señales entre los';
    $respuesta_26 = 'sistemas';
    $respuesta_27 = 'de red';
    $respuesta_28 = 'enlace de datos';
    $respuesta_29 = 'Divide los datos en tramas que pueden ser transmitidas por la capa fisica';
    $respuesta_30 = 'datos';
    $respuesta_31 = 'tramas';
    $respuesta_32 = 'transmitidas';
    $respuesta_33 = 'fisica';
    
    $respuesta_34 = 'red';
    $respuesta_35 = 'Traduce direcciones de red y dirige los datos del emisor al receptor';
    $respuesta_36 = 'red';
    $respuesta_37 = 'dirige';
    $respuesta_38 = 'datos';
    $respuesta_39 = 'emisor';
    $respuesta_40 = 'receptor';
    $respuesta_41 = 'transporte';
    $respuesta_42 = 'Asegura que los datos se transfieren de forma fiable en la secuencia correcta';
    $respuesta_43 = 'datos';
    $respuesta_44 = 'transfieren';
    $respuesta_45 = 'forma fiable';
    $respuesta_46 = 'secuencia correcta';
    $respuesta_47 = 'sesion';
    $respuesta_48 = 'Coordina y gestiona las conexiones de usuario';
    $respuesta_49 = 'gestiona';
    $respuesta_50 = 'conexiones';
    
    $respuesta_51 = 'usuario';
    $respuesta_52 = 'presentacion';
    $respuesta_53 = 'Da formato';
    $respuesta_54 = 'cifra y comprime los datos';
    $respuesta_55 = 'comprime';
    $respuesta_56 = 'datos';
    $respuesta_57 = 'aplicacion';
    $respuesta_58 = 'Media entre aplicaciones de software y otras capas de servicios de red';
    $respuesta_59 = 'aplicaciones';
    $respuesta_60 = 'software';
    $respuesta_61 = 'capas';
    $respuesta_62 = 'servicios';
    $respuesta_63 = 'red';
    $respuesta_64 = 'conjunto';
    $respuesta_65 = 'protocolos';
    $respuesta_66 = 'estandar';
    $respuesta_67 = 'Internet';
    $respuesta_68 = 'Protocolo';
    $respuesta_69 = 'Control';
    $respuesta_70 = 'Transmision';
    $respuesta_71 = 'Protocolo Internet';
    $respuesta_72 = 'TCP/IP';
    $respuesta_73 = 'incluye';
    $respuesta_74 = 'orientados';
    $respuesta_75 = 'red';
    $respuesta_76 = 'soporte';
    $respuesta_77 = 'aplicaciones';
    $respuesta_78 = '3 y 4';
    $respuesta_79 = 'dos versiones';
    $respuesta_80 = 'operan';
    $respuesta_81 = 'Capa 3';
    $respuesta_82 = 'IPv4';
    $respuesta_83 = 'IPv6';
    $respuesta_84 = 'IPv4';
    $respuesta_85 = 'cuarta';
    $respuesta_86 = 'protocolo IP';
    $respuesta_87 = 'usado';
    $respuesta_88 = 'conexion';
    $respuesta_89 = 'dispositivos';
    $respuesta_90 = 'Internet';
    $respuesta_91 = 'esquema';
    $respuesta_92 = 'direcciones';
    $respuesta_93 = '32 bit';
    $respuesta_94 = '4 mil millones';
    $respuesta_95 = 'sin direcciones';
    $respuesta_96 = 'IPv6';
    $respuesta_97 = 'desarrollado';
    $respuesta_98 = 'IPv6';
    $respuesta_99 = 'IPng';
    $respuesta_100 = 'ultima';
    $respuesta_101 = 'IP';
    $respuesta_102 = 'actualizacion';
    $respuesta_103 = 'evolucionada';
    $respuesta_104 = 'IPv4';
    $respuesta_105 = 'IPv6';
    $respuesta_106 = 'permitir';
    $respuesta_107 = 'crecimiento';
    $respuesta_108 = 'numero';
    $respuesta_109 = 'cantidad';
    $respuesta_110 = 'estandares';
    
    $respuesta_111 = 'conjunto TCP/IP';
    $respuesta_112 = 'modelo OSI';
    $respuesta_113 = 'TCP/IP';
    $respuesta_114 = 'marco OSI';
    $respuesta_115 = 'coincidencia';
    $respuesta_116 = 'TCP/IP';
    $respuesta_117 = 'añadir informacion';
    $respuesta_118 = 'direccionamiento';
    $respuesta_119 = 'transmiten';
    $respuesta_120 = 'pila OSI';
    $respuesta_121 = 'datagramas';
    $respuesta_122 = 'unidades de datos de protocolo';
    $respuesta_123 = 'segmentos';
    $respuesta_124 = 'capa de red';
    $respuesta_125 = 'paquetes';
    $respuesta_126 = 'desglosan';
    $respuesta_127 = 'tramas';
    $respuesta_128 = 'informacion';
    $respuesta_129 = 'bits';
    $respuesta_130 = 'la pasa';
    $respuesta_131 = 'pila OSI';
    $respuesta_132 = 'desencapsulacion';
    $respuesta_133 = 'orientados a conexion';
    $respuesta_134 = 'no orientados a conexion';
    $respuesta_135 = 'TCP';
    $respuesta_136 = 'protocolo';
    $respuesta_137 = 'de tres vias';
    $respuesta_138 = 'orientadas a conexion';
    $respuesta_139 = 'Datagramas de Usuario';
    $respuesta_140 = 'no orientado a conexion';
    $respuesta_141 = 'velocidad';
    $respuesta_142 = 'comprobacion';
    $respuesta_143 = 'errores';
    $respuesta_144 = 'UDP';
    $respuesta_145 = 'integridad';
    $respuesta_146 = 'puerto';
    $respuesta_147 = 'integridad';
    $respuesta_148 = 'direccion IP';
    $respuesta_149 = 'direccion fisica';
    $respuesta_150 = 'MAC';
    $respuesta_151 = 'red local';
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'El Modelo de interconexion de sistemas abiertos'
   || $respuesta_1 === 'El modelo de interconexion de sistemas abiertos'
   ) {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'interconexion') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'sistemas abiertos') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'se utiliza para describir') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'protocolos') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'de red') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'Debido a que rara vez se implementa en redes reales') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'estandarizar el desarrollo de las redes reales') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'no propietaria') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'grupos') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'funcionalidad') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'red') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'protocolo') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'siete') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'Open Systems Interconnection') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'se considera una referencia para') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'Aplicacion'
    || $respuesta_17 === 'aplicacion'
    ) {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'Presentacion'
    || $respuesta_18 === 'presentacion'
    ) {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'Sesion'
    || $respuesta_19 === 'sesion'
    ) {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'Transporte'
    || $respuesta_20 === 'transporte'
    ) {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'Red'
    || $respuesta_21 === 'red'
    ) {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'Enlace de datos'
    || $respuesta_22 === 'enlace de datos'
    ) {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'Fisico'
   || $respuesta_23 === 'fisico'
   || $respuesta_23 === 'fisica'
   ) {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'fisica') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'Gestiona señales entre los') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'sistemas') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'de red') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'enlace de datos') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'Divide los datos en tramas que pueden ser transmitidas por la capa fisica') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'datos') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'tramas') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'transmitidas') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'fisica') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'red') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'Traduce direcciones de red y dirige los datos del emisor al receptor') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'red') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'dirige') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'datos') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'emisor') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'receptor') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'transporte') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'Asegura que los datos se transfieren de forma fiable en la secuencia correcta') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'datos') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'transfieren') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'forma fiable') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'secuencia correcta') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'sesion') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'Coordina y gestiona las conexiones de usuario') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'gestiona') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'conexiones') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'usuario') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'presentacion') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'Da formato') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'cifra y comprime los datos') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'comprime') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'datos') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'aplicacion') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'Media entre aplicaciones de software y otras capas de servicios de red') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'aplicaciones') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'software') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'capas') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'servicios') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'red') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'conjunto') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'protocolos') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'estandar') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'Internet') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'Protocolo') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'Control') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'Transmision') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'Protocolo Internet') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'TCP/IP') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'incluye') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'orientados') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'red') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'soporte') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'aplicaciones') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === '3 y 4') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'dos versiones') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'operan') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'Capa 3'
|| $respuesta_81 === 'capa 3'
) { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'IPv4') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'IPv6') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'IPv4') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'cuarta') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'protocolo IP') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'usado') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'conexion') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'dispositivos') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'Internet'
|| $respuesta_90 === 'internet'
) { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'esquema') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'direcciones') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === '32 bit') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === '4 mil millones') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'sin direcciones') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'IPv6') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'desarrollado') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'IPv6') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'IPng') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'ultima') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'IP') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'actualizacion') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === 'evolucionada') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'IPv4') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'IPv6') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'permitir') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'crecimiento') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'numero') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'cantidad') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'estandares') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'conjunto TCP/IP') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'modelo OSI') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'TCP/IP') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'marco OSI') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'coincidencia') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'TCP/IP') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === 'añadir informacion') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'direccionamiento') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'transmiten') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'pila OSI') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'datagramas') {
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
}

$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'unidades de datos de protocolo') {
    $verificar_122 = "correcto";
} elseif ($respuesta_122 === '') {
    $verificar_122 = '';
} else {
    $verificar_122 = "incorrecto";
}

$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === 'segmentos') {
    $verificar_123 = "correcto";
} elseif ($respuesta_123 === '') {
    $verificar_123 = '';
} else {
    $verificar_123 = "incorrecto";
}

$respuesta_124 = isset($_POST['respuesta_124']) ? $_POST['respuesta_124'] : '';
if ($respuesta_124 === 'capa de red') {
    $verificar_124 = "correcto";
} elseif ($respuesta_124 === '') {
    $verificar_124 = '';
} else {
    $verificar_124 = "incorrecto";
}

$respuesta_125 = isset($_POST['respuesta_125']) ? $_POST['respuesta_125'] : '';
if ($respuesta_125 === 'paquetes') {
    $verificar_125 = "correcto";
} elseif ($respuesta_125 === '') {
    $verificar_125 = '';
} else {
    $verificar_125 = "incorrecto";
}

$respuesta_126 = isset($_POST['respuesta_126']) ? $_POST['respuesta_126'] : '';
if ($respuesta_126 === 'desglosan') {
    $verificar_126 = "correcto";
} elseif ($respuesta_126 === '') {
    $verificar_126 = '';
} else {
    $verificar_126 = "incorrecto";
}

$respuesta_127 = isset($_POST['respuesta_127']) ? $_POST['respuesta_127'] : '';
if ($respuesta_127 === 'tramas') {
    $verificar_127 = "correcto";
} elseif ($respuesta_127 === '') {
    $verificar_127 = '';
} else {
    $verificar_127 = "incorrecto";
}

$respuesta_128 = isset($_POST['respuesta_128']) ? $_POST['respuesta_128'] : '';
if ($respuesta_128 === 'informacion') {
    $verificar_128 = "correcto";
} elseif ($respuesta_128 === '') {
    $verificar_128 = '';
} else {
    $verificar_128 = "incorrecto";
}

$respuesta_129 = isset($_POST['respuesta_129']) ? $_POST['respuesta_129'] : '';
if ($respuesta_129 === 'bits') {
    $verificar_129 = "correcto";
} elseif ($respuesta_129 === '') {
    $verificar_129 = '';
} else {
    $verificar_129 = "incorrecto";
}

$respuesta_130 = isset($_POST['respuesta_130']) ? $_POST['respuesta_130'] : '';
if ($respuesta_130 === 'la pasa') {
    $verificar_130 = "correcto";
} elseif ($respuesta_130 === '') {
    $verificar_130 = '';
} else {
    $verificar_130 = "incorrecto";
}

$respuesta_131 = isset($_POST['respuesta_131']) ? $_POST['respuesta_131'] : '';
if ($respuesta_131 === 'pila OSI') {
    $verificar_131 = "correcto";
} elseif ($respuesta_131 === '') {
    $verificar_131 = '';
} else {
    $verificar_131 = "incorrecto";
}

$respuesta_132 = isset($_POST['respuesta_132']) ? $_POST['respuesta_132'] : '';
if ($respuesta_132 === 'desencapsulacion') {
    $verificar_132 = "correcto";
} elseif ($respuesta_132 === '') {
    $verificar_132 = '';
} else {
    $verificar_132 = "incorrecto";
}

$respuesta_133 = isset($_POST['respuesta_133']) ? $_POST['respuesta_133'] : '';
if ($respuesta_133 === 'orientados a conexion') {
    $verificar_133 = "correcto";
} elseif ($respuesta_133 === '') {
    $verificar_133 = '';
} else {
    $verificar_133 = "incorrecto";
}

$respuesta_134 = isset($_POST['respuesta_134']) ? $_POST['respuesta_134'] : '';
if ($respuesta_134 === 'no orientados a conexion') {
    $verificar_134 = "correcto";
} elseif ($respuesta_134 === '') {
    $verificar_134 = '';
} else {
    $verificar_134 = "incorrecto";
}

$respuesta_135 = isset($_POST['respuesta_135']) ? $_POST['respuesta_135'] : '';
if ($respuesta_135 === 'TCP') {
    $verificar_135 = "correcto";
} elseif ($respuesta_135 === '') {
    $verificar_135 = '';
} else {
    $verificar_135 = "incorrecto";
}

$respuesta_136 = isset($_POST['respuesta_136']) ? $_POST['respuesta_136'] : '';
if ($respuesta_136 === 'protocolo') {
    $verificar_136 = "correcto";
} elseif ($respuesta_136 === '') {
    $verificar_136 = '';
} else {
    $verificar_136 = "incorrecto";
}

$respuesta_137 = isset($_POST['respuesta_137']) ? $_POST['respuesta_137'] : '';
if ($respuesta_137 === 'de tres vias') {
    $verificar_137 = "correcto";
} elseif ($respuesta_137 === '') {
    $verificar_137 = '';
} else {
    $verificar_137 = "incorrecto";
}

$respuesta_138 = isset($_POST['respuesta_138']) ? $_POST['respuesta_138'] : '';
if ($respuesta_138 === 'orientadas a conexion') {
    $verificar_138 = "correcto";
} elseif ($respuesta_138 === '') {
    $verificar_138 = '';
} else {
    $verificar_138 = "incorrecto";
}

$respuesta_139 = isset($_POST['respuesta_139']) ? $_POST['respuesta_139'] : '';
if ($respuesta_139 === 'Datagramas de Usuario') {
    $verificar_139 = "correcto";
} elseif ($respuesta_139 === '') {
    $verificar_139 = '';
} else {
    $verificar_139 = "incorrecto";
}

$respuesta_140 = isset($_POST['respuesta_140']) ? $_POST['respuesta_140'] : '';
if ($respuesta_140 === 'no orientado a conexion') {
    $verificar_140 = "correcto";
} elseif ($respuesta_140 === '') {
    $verificar_140 = '';
} else {
    $verificar_140 = "incorrecto";
}

$respuesta_141 = isset($_POST['respuesta_141']) ? $_POST['respuesta_141'] : '';
if ($respuesta_141 === 'velocidad') {
    $verificar_141 = "correcto";
} elseif ($respuesta_141 === '') {
    $verificar_141 = '';
} else {
    $verificar_141 = "incorrecto";
}

$respuesta_142 = isset($_POST['respuesta_142']) ? $_POST['respuesta_142'] : '';
if ($respuesta_142 === 'comprobacion') {
    $verificar_142 = "correcto";
} elseif ($respuesta_142 === '') {
    $verificar_142 = '';
} else {
    $verificar_142 = "incorrecto";
}

$respuesta_143 = isset($_POST['respuesta_143']) ? $_POST['respuesta_143'] : '';
if ($respuesta_143 === 'errores') {
    $verificar_143 = "correcto";
} elseif ($respuesta_143 === '') {
    $verificar_143 = '';
} else {
    $verificar_143 = "incorrecto";
}

$respuesta_144 = isset($_POST['respuesta_144']) ? $_POST['respuesta_144'] : '';
if ($respuesta_144 === 'UDP') {
    $verificar_144 = "correcto";
} elseif ($respuesta_144 === '') {
    $verificar_144 = '';
} else {
    $verificar_144 = "incorrecto";
}

$respuesta_145 = isset($_POST['respuesta_145']) ? $_POST['respuesta_145'] : '';
if ($respuesta_145 === 'integridad') {
    $verificar_145 = "correcto";
} elseif ($respuesta_145 === '') {
    $verificar_145 = '';
} else {
    $verificar_145 = "incorrecto";
}

$respuesta_146 = isset($_POST['respuesta_146']) ? $_POST['respuesta_146'] : '';
if ($respuesta_146 === 'puerto') {
    $verificar_146 = "correcto";
} elseif ($respuesta_146 === '') {
    $verificar_146 = '';
} else {
    $verificar_146 = "incorrecto";
}

$respuesta_147 = isset($_POST['respuesta_147']) ? $_POST['respuesta_147'] : '';
if ($respuesta_147 === 'integridad') {
    $verificar_147 = "correcto";
} elseif ($respuesta_147 === '') {
    $verificar_147 = '';
} else {
    $verificar_147 = "incorrecto";
}

$respuesta_148 = isset($_POST['respuesta_148']) ? $_POST['respuesta_148'] : '';
if ($respuesta_148 === 'direccion IP') {
    $verificar_148 = "correcto";
} elseif ($respuesta_148 === '') {
    $verificar_148 = '';
} else {
    $verificar_148 = "incorrecto";
}

$respuesta_149 = isset($_POST['respuesta_149']) ? $_POST['respuesta_149'] : '';
if ($respuesta_149 === 'direccion fisica') {
    $verificar_149 = "correcto";
} elseif ($respuesta_149 === '') {
    $verificar_149 = '';
} else {
    $verificar_149 = "incorrecto";
}

$respuesta_150 = isset($_POST['respuesta_150']) ? $_POST['respuesta_150'] : '';
if ($respuesta_150 === 'MAC') {
    $verificar_150 = "correcto";
} elseif ($respuesta_150 === '') {
    $verificar_150 = '';
} else {
    $verificar_150 = "incorrecto";
}

$respuesta_151 = isset($_POST['respuesta_151']) ? $_POST['respuesta_151'] : '';
if ($respuesta_151 === 'red local') {
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
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../style_2_0.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 250vh;
    }


  table {
    border-collapse: collapse;
    width: 100%;
    font-family: Arial, sans-serif;
    font-size: 14px;
  }
  thead th {
    background-color: #3c3c3c;
    color: white;
    text-align: center;
    padding: 8px;
    border: 2px solid black;
  }
  tbody td {
    border: 1px solid black;
    vertical-align: top;
    padding: 6px;
  }
  tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  tbody tr td:first-child {
    background-color: #dbe8ff;
    font-weight: bold;
    text-align: center;
  }
  tfoot td {
    text-align: center;
    font-style: italic;
    padding: 6px;
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
Fundamentos de Ciberseguridad (Guía de Estudio, 2ª edición, Nexus)
<hr>
 <p><b>TEMA 2 — EL MODELO OSI</b></p>

    <p>
      
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="42">
 
      (
        <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="25">
         , OSI)   
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="19">
        
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
        
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="3">
     .   
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="48">
       ,  
      <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="28">
          
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="39">
       . OSI fue la primera definición abierta 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="10">
      para redes.
    </p>

    <p>
    El modelo OSI define 
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="5">
      de 
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="10">
      requeridos para los equipos de la 
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="5">
      en capas, donde cada capa 
    implementa un 
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">
      estándar para su funcionalidad. Hay 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">
      capas del modelo OSI, que se muestran en la 
    figura 3.2
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
    <hr>
    <div class="osi-container">
        <div class="title">Figura 3.2—Las capas de OSI</div>
        <div class="layer">7. <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8"> </div>
        <div class="layer">6. <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8"> </div>
        <div class="layer">5. <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8"> </div>
        <div class="layer">4. <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="8"> </div>
        <div class="layer">3. <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="8"> </div>
        <div class="layer">2. <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="11"> </div>
        <div class="layer">1. <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="8"> </div>
    </div>
    <button type="submit">Enviar</button> 
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?>
    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>
    <hr>
    <p>
    Cada capa OSI realiza una función específica para la red:
    </p>

    <ul>
    <li><b>La capa 
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="4">    
      (Capa 1)</b> —   
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="21">
        
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="6">
       
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="4">
     </li>
    <li><b>La capa de 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="12">    
      (Capa 2)</b> — 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="66">
 
     </li>
    <li><b>La capa de 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="4">    
      (Capa 3)</b> — 
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="62">
     </li>
    <li><b>La capa de 
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8">    
      (Capa 4)</b> — 
    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="71">
 
     </li>
    <li><b>La capa de 
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="4">    
      (Capa 5)</b> — 
    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="41">
 
     </li>
    <li><b>La capa de 
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="8">    
      (Capa 6)</b> —   
    <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="8">
     , 
    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="21">
 
     </li>
    <li><b>La capa de 
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="8">    
      (Capa 7)</b> — 
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="64">
 
     </li>
    </ul>

    <button type="submit">Enviar</button> 
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
    <?php echo $verificar_63 ?>
    <hr>
    <p><b>TCP/IP</b></p>

<p>
El 
<input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="8">
  de 
<input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8">
  utilizado como el 
<input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="8">
  de facto para 
<input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="8">
  es conocido como el 
<input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="8">
  de 
<input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="8">
  de 
<input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="8">
 /
<input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="16">
  (
<input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="8">    
 ). El modelo TCP/IP 
<input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="8">
  tanto protocolos 
<input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="8">
  a 
<input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="4">
  como de 
<input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="8">
  a 
<input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="8">
 , operando en las Capas 
<input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="8">
  del modelo OSI.
</p>

<p><b>Versiones del protocolo de Internet</b></p>

<p>
Actualmente, existen 
<input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="10">
  del protocolo IP que 
<input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="4">
  en la 
<input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="4">
  — 
<input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="2">
  e 
<input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="2">
 .


<input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="2">
  es la 
<input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="4">
  revisión del 
<input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="8">
  y el más 
<input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="4">
  para la 
<input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="8">
  de 
<input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="8">
  en 
<input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="8">
 . Utiliza un 
<input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="8">
  de 
<input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="8">
  de 
<input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="4">
  que permite algo más de 
<input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="9">
  de direcciones. Con el actual predominio de 
dispositivos conectados a Internet, se espera que tarde o temprano IPv4 se quede 
<input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="10">
  disponibles. Por este 
motivo, 
<input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="4">
  ha sido 
<input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="8">
  para hacer frente a esta preocupación.
</p>

<p>
<input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="4">
 , también llamado 
<input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="4">
  (nueva generación) es la 
<input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="5">
  versión de 
<input type="text" name="respuesta_101" value="<?php echo $respuesta_101; ?>" size="2">
  y es una 
<input type="text" name="respuesta_102" value="<?php echo $respuesta_102; ?>" size="8">
  más 
<input type="text" name="respuesta_103" value="<?php echo $respuesta_103; ?>" size="9">
  de 
<input type="text" name="respuesta_104" value="<?php echo $respuesta_104; ?>" size="2">
 . 
<input type="text" name="respuesta_105" value="<?php echo $respuesta_105; ?>" size="2">
  fue creada para 
<input type="text" name="respuesta_106" value="<?php echo $respuesta_106; ?>" size="8">
  un 
<input type="text" name="respuesta_107" value="<?php echo $respuesta_107; ?>" size="8">
  de Internet para el 
<input type="text" name="respuesta_108" value="<?php echo $respuesta_108; ?>" size="8">
  de equipos conectados y la 
<input type="text" name="respuesta_109" value="<?php echo $respuesta_109; ?>" size="8">
  de datos 
transmitidos. Se espera que IPv4 e IPv6 coexistan durante algún tiempo.
</p>


<p>
La figura 3.3 muestra algunos de los 
<input type="text" name="respuesta_110" value="<?php echo $respuesta_110; ?>" size="8">
  asociados con el 
<input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="12">
  y dónde encajan dentro del 
<input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="8">
 .
Es interesante observar que el conjunto de protocolos 
<input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="8">
  se desarrolló antes que el 
<input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="8">
 ; por lo tanto, no hay ninguna 
<input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="8">
  directa entre los estándares de 
<input type="text" name="respuesta_116" value="<?php echo $respuesta_116; ?>" size="8">
  y las capas del marco.
</p>

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
<br>
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
<?php echo $verificar_86 ?>
<?php echo $verificar_87 ?>
<?php echo $verificar_88 ?>
<?php echo $verificar_89 ?>
<?php echo $verificar_90 ?>
<?php echo $verificar_91 ?>
<?php echo $verificar_92 ?>
<?php echo $verificar_93 ?>
<?php echo $verificar_94 ?>
<br>

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
<br>

<?php echo $verificar_109 ?>
<?php echo $verificar_110 ?>
<?php echo $verificar_111 ?>
<?php echo $verificar_112 ?>
<?php echo $verificar_113 ?>
<?php echo $verificar_114 ?>
<?php echo $verificar_115 ?>
<?php echo $verificar_116 ?>
    <button onmousedown="mostrarImagen4()" onmouseup="ocultarImagen4()">Explicacion</button>
    <!--   <img src="../../../img/guia_80.png" alt=""> Elemento para mostrar la imagen -->

    <img id="imagenMostrada4" src="../../../img/guia_81.png" style="display: none; max-width: 100%" width="560" height="400">

    <script>
        function mostrarImagen4() {
        var imagenMostrada4 = document.getElementById('imagenMostrada4');

        // Mostrar la imagen
        imagenMostrada4.style.display = 'block';
        }

        function ocultarImagen4() {
        var imagenMostrada4 = document.getElementById('imagenMostrada4');

        // Ocultar la imagen al soltar el botón
        imagenMostrada4.style.display = 'none';
        }
    </script> 
     <button onmousedown="mostrarImagen5()" onmouseup="ocultarImagen5()">Explicacion</button>
    <!--   <img src="../../../img/guia_80.png" alt=""> Elemento para mostrar la imagen -->

    <img id="imagenMostrada5" src="../../../img/guia_82.png" style="display: none; max-width: 100%" width="560" height="400">

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
 
</div>




<div class="seccion derecha">
    <p><b>ENCAPSULACIÓN</b></p>

<p>
La encapsulación es el proceso de 
<input type="text" name="respuesta_117" value="<?php echo $respuesta_117; ?>" size="14">
  de 
<input type="text" name="respuesta_118" value="<?php echo $respuesta_118; ?>" size="14">
  de datos a medida que se 
<input type="text" name="respuesta_119" value="<?php echo $respuesta_119; ?>" size="8">
  por la 
<input type="text" name="respuesta_120" value="<?php echo $respuesta_120; ?>" size="8">
 .
Cada capa confía en los servicios proporcionados por la capa inferior. Cada capa del modelo OSI sólo se comunica con su par
de destino. Lo hace utilizando 
<input type="text" name="respuesta_121" value="<?php echo $respuesta_121; ?>" size="8">
  o 
  <input type="text" name="respuesta_122" value="<?php echo $respuesta_122; ?>" size="27">
    (PDU). Consulte la figura 3.3 anterior para los
nombres de PDU.
</p>

<p>
El modelo OSI se muestra en la figura 3.4. Los datos de la capa superior se transmiten a la capa de transporte como
<input type="text" name="respuesta_123" value="<?php echo $respuesta_123; ?>" size="8">
  y son “envueltos” con una cabecera para su identificación. Estos segmentos se transmiten a la 
<input type="text" name="respuesta_124" value="<?php echo $respuesta_124; ?>" size="8">
  en forma de 
<input type="text" name="respuesta_125" value="<?php echo $respuesta_125; ?>" size="8">
  de nuevo con una cabecera. Los datos se 
<input type="text" name="respuesta_126" value="<?php echo $respuesta_126; ?>" size="8">
  en 
<input type="text" name="respuesta_127" value="<?php echo $respuesta_127; ?>" size="8">
  en la capa de enlace de datos y también tienen
<input type="text" name="respuesta_128" value="<?php echo $respuesta_128; ?>" size="8">
  de control anexa. En la capa física, los datos se transforman en 
<input type="text" name="respuesta_129" value="<?php echo $respuesta_129; ?>" size="8">
  (1s y 0s) para su entrega a la red de destino.
</p>

<p>
Una vez en el destino, cada capa del extremo receptor se despoja de la información de direccionamiento correspondiente y 
<input type="text" name="respuesta_130" value="<?php echo $respuesta_130; ?>" size="8">
  a la 
<input type="text" name="respuesta_131" value="<?php echo $respuesta_131; ?>" size="8">
  hasta que el mensaje es entregado. Este proceso se llama 
<input type="text" name="respuesta_132" value="<?php echo $respuesta_132; ?>" size="14">
 .
</p>
    <button type="submit">Enviar</button>
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
    <?php echo $verificar_128 ?>
    <?php echo $verificar_129 ?>
    <?php echo $verificar_130 ?>
    <?php echo $verificar_131 ?>
    <?php echo $verificar_132 ?>

         <button onmousedown="mostrarImagen6()" onmouseup="ocultarImagen6()">Explicacion</button>
    <!--   <img src="../../../img/guia_80.png" alt=""> Elemento para mostrar la imagen -->

    <img id="imagenMostrada6" src="../../../img/guia_346.png" style="display: none; max-width: 100%" width="560" height="400">

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

<button onmousedown="mostrarImagen()" onmouseup="ocultarImagen()">Explicacion</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada" src="../../../img/guia_340.png" style="display: none; max-width: 100%" width="560" height="400">

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
<hr>
  

<button onmousedown="mostrarImagen2()" onmouseup="ocultarImagen2()">Explicacion</button>
    <!--   <img src="../../../img/guia_79.png" alt=""> Elemento para mostrar la imagen -->

    <img id="imagenMostrada2" src="../../../img/guia_79.png" style="display: none; max-width: 100%" width="560" height="400">

    <script>
        function mostrarImagen2() {
        var imagenMostrada2 = document.getElementById('imagenMostrada2');

        // Mostrar la imagen
        imagenMostrada2.style.display = 'block';
        }

        function ocultarImagen() {
        var imagenMostrada2 = document.getElementById('imagenMostrada2');

        // Ocultar la imagen al soltar el botón
        imagenMostrada2.style.display = 'none';
        }
    </script>
<p>
Los servicios de comunicaciones en la Capa 4 del modelo OSI se categorizan como 
<input type="text" name="respuesta_133" value="<?php echo $respuesta_133; ?>" size="17">
  o 
<input type="text" name="respuesta_134" value="<?php echo $respuesta_134; ?>" size="21">
 . 
<input type="text" name="respuesta_135" value="<?php echo $respuesta_135; ?>" size="8">
  proporciona una entrega confiable y secuenciada con comprobación de errores. Las conexiones se establecerán
a partir de un
<input type="text" name="respuesta_136" value="<?php echo $respuesta_136; ?>" size="8">
  de enlace 
<input type="text" name="respuesta_137" value="<?php echo $respuesta_137; ?>" size="8">
  (<i>three-way handshake</i>), y por lo tanto son 
<input type="text" name="respuesta_138" value="<?php echo $respuesta_138; ?>" size="18">
 , 
tal y como se muestra en la figura 3.5. El Protocolo de 
<input type="text" name="respuesta_139" value="<?php echo $respuesta_139; ?>" size="19">
  (UDP) es un protocolo 
<input type="text" name="respuesta_140" value="<?php echo $respuesta_140; ?>" size="19">
  utilizado en
los escenarios donde la 
<input type="text" name="respuesta_141" value="<?php echo $respuesta_141; ?>" size="8">
  es más importante que la 
<input type="text" name="respuesta_142" value="<?php echo $respuesta_142; ?>" size="10">
  de 
<input type="text" name="respuesta_143" value="<?php echo $respuesta_143; ?>" size="8">
  y la entrega garantizada. 
<input type="text" name="respuesta_144" value="<?php echo $respuesta_144; ?>" size="8">
  hace uso de las sumas de verificación (<i>checksums</i>) para la 
<input type="text" name="respuesta_145" value="<?php echo $respuesta_145; ?>" size="8">
  de los datos.
</p>
    <button type="submit">Enviar</button>
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
    <button onmousedown="mostrarImagen3()" onmouseup="ocultarImagen3()">Explicacion</button>
    <!--   <img src="../../../img/guia_80.png" alt=""> Elemento para mostrar la imagen -->

    <img id="imagenMostrada3" src="../../../img/guia_80.png" style="display: none; max-width: 100%" width="560" height="400">

    <script>
        function mostrarImagen3() {
        var imagenMostrada3 = document.getElementById('imagenMostrada3');

        // Mostrar la imagen
        imagenMostrada3.style.display = 'block';
        }

        function ocultarImagen() {
        var imagenMostrada3 = document.getElementById('imagenMostrada3');

        // Ocultar la imagen al soltar el botón
        imagenMostrada3.style.display = 'none';
        }
    </script> 
     
    <hr>
 

<h4> Cómo funciona la encapsulación</h4>
<p>
  Piensa en tus datos como una <strong>carta</strong> que vas a enviar:
</p>
<ul>
  <li><strong>Datos:</strong> La carta que escribiste (contenido de la aplicación).</li>
  <li><strong>Capa de transporte (TCP/UDP):</strong> Pone un sobre interno con la dirección del destinatario (
  <input type="text" name="respuesta_146" value="<?php echo $respuesta_146; ?>" size="8">  
   ) y un sello de 
  <input type="text" name="respuesta_147" value="<?php echo $respuesta_147; ?>" size="8">
   .</li>
  <li><strong>Capa de red (IP):</strong> Pone otro sobre con la 
  <input type="text" name="respuesta_148" value="<?php echo $respuesta_148; ?>" size="8">
    de origen y destino (como la dirección de la casa).</li>
  <li><strong>Capa de enlace (Ethernet/Wi-Fi):</strong> Pone la 
  <input type="text" name="respuesta_149" value="<?php echo $respuesta_149; ?>" size="11">
    (
  <input type="text" name="respuesta_150" value="<?php echo $respuesta_150; ?>" size="2">  
   ) y prepara el paquete para salir por la 
  <input type="text" name="respuesta_151" value="<?php echo $respuesta_151; ?>" size="8">
   .</li>
</ul>
<p>
  Al final, tu carta parece una <strong>muñeca rusa de sobres</strong>, cada capa le pone el suyo antes de salir.
</p>
    <button type="submit">Enviar</button>


<?php echo $verificar_146 ?>
<?php echo $verificar_147 ?>
<?php echo $verificar_148 ?>
<?php echo $verificar_149 ?>
<?php echo $verificar_150 ?>
<?php echo $verificar_151 ?>

 

  <button onmousedown="mostrarMensaje()" onmouseup="ocultarMensaje()">ayudar</button>
    <div id="mensaje" style="display: none; margin-top: 10px; padding: 10px; background-color: #f0f0f0;">
     <strong>parentesis</strong>
    
    <h4>Contexto</h4>
<p>
  Cuando envías datos por una red (por ejemplo, un mensaje de WhatsApp):
</p>
<ul>
  <li>Tu aplicación genera los <strong>datos crudos</strong> → el mensaje de texto.</li>
  <li>Esos datos deben <strong>viajar por varias capas del modelo OSI</strong> para llegar a otra persona.</li>
  <li>Cada capa agrega su propia <strong>información de control</strong> para que los datos lleguen completos y a la
   persona correcta.</li>
</ul>
<p>
  A ese proceso de agregar información de cada capa alrededor de los datos originales se le llama 
  <strong>encapsulación</strong>.
</p>
<h4> Visualización sencilla</h4>
<p>
  Imagina que tus datos originales son <strong>DATO</strong>:
</p>

<pre>
Aplicación:          [DATO]
Transporte (TCP):    [TCP | DATO]
Red (IP):            [IP | TCP | DATO]
Enlace (Ethernet):   [ETH | IP | TCP | DATO]
</pre>

<p>
    <strong>es decir que cuando llega a enlace tiene mucha informacion distinta almacenada</strong>
</p>
<p>
  Cuando llega al destino, se hace lo contrario: <strong>desencapsulación</strong>.<br>
  Cada capa “abre su sobre” y entrega el contenido a la capa superior.
</p>
    </div>
 
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
