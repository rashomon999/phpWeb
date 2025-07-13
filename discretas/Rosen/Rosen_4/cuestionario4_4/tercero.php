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
        
        // Tabla del 12
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
        
        // Tabla del 13
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
        
        // Tabla del 14
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
        
        // Tabla del 15
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
        
        // Tabla del 16
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
        
        // Tabla del 17
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
        
        // Tabla del 18
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
        
        // Tabla del 19
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
        
        // Tabla del 20
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
        
        // Tabla del 21
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
        
        // Tabla del 22
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
    $verificar_1 = $verificar_2 = $verificar_3 = /* ... todas las variables de verificación ... */ $verificar_122 = "correcto";
    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'divide') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   $respuesta_2_dos = str_replace(' ','',$respuesta_2);

   if ($respuesta_2_dos === 'a^{p-1}-1') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2_dos === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'p') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'primo') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'no sea divisible') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'Leonhard Euler'
   || $respuesta_6 === 'Leonhard euler'
   ||$respuesta_6 === 'leonhard euler'
   ) {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'p es primo') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'no divisible') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'p') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   $respuesta_10_dos = str_replace(' ','',$respuesta_10);

   if ($respuesta_10_dos === 'a^{p-1}\equiv1\pmod{p}'
   || $respuesta_10_dos === 'a^{p-1}\equiv1(modp)'
   ) {  
       $respuesta_10_dos = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   $respuesta_11_dos = str_replace(' ','',$respuesta_11);

   if ($respuesta_11_dos === 'a^p\equiva\pmod{p}'
   || $respuesta_11_dos === 'a^p\equiva(modp)'
   ) {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11_dos === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    $respuesta_12_dos = str_replace(' ','',$respuesta_12);

    if ($respuesta_12_dos === 'a^{p-1}=1') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12_dos === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'restos') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'potencias') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    $respuesta_15_dos = str_replace(' ','',$respuesta_15);

    if ($respuesta_15_dos === '7^{10}\equiv1\pmod{11}'
    || $respuesta_15_dos === '7^{10}\equiv1(mod11)'
    ) { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15_dos === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    $respuesta_16_dos = str_replace(' ','',$respuesta_16);

    if ($respuesta_16_dos === '(7^{10})^k\equiv1\pmod{11}'
    || $respuesta_16_dos === '(7^{10})^k\equiv1(mod11)'
    ) {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16_dos === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === '222') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === '10') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    $respuesta_19_dos = str_replace(' ','',$respuesta_19);

    if ($respuesta_19_dos === '22*10+2') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19_dos === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    $respuesta_20_dos = str_replace(' ','',$respuesta_20);

    if ($respuesta_20_dos === '(7^{10})^{22}\cdot7^2\equiv49\pmod{11}'
    || $respuesta_20_dos === '(7^{10})^{22}\cdot7^2\equiv49(mod11)'
    ) {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    $respuesta_21_dos = str_replace(' ','',$respuesta_21);

    if ($respuesta_21_dos === '49\equiv5\pmod{11}'
    || $respuesta_21_dos === '49\equiv5(mod11)'
    ) {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    $respuesta_22_dos = str_replace(' ','',$respuesta_22);

    if ($respuesta_22_dos === '7^{222}\mod11=5'
    || $respuesta_22_dos === '7^222\mod11=5'
    || $respuesta_22_dos === '7^{222}(mod11)=5'
    || $respuesta_22_dos === '7^222(mod11)=5'
    ||  $respuesta_22_dos === '7^{222}\pmod{11}=5' 
    ||  $respuesta_22_dos === '7^222\pmod{11}=5' 
    ) {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22_dos === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'primo') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'p-1') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   $respuesta_25_dos = str_replace(' ','',$respuesta_25);

   if ($respuesta_25_dos === 'q(p-1)+r') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25_dos === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   $respuesta_26_dos = str_replace(' ','',$respuesta_26);
   if ($respuesta_26_dos === 'p-1') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26_dos === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   $respuesta_27_dos = str_replace(' ','',$respuesta_27);

   if ($respuesta_27_dos === 'a^n\modp'
   || $respuesta_27_dos === 'a^n(modp)'
   || $respuesta_27_dos === 'a^n\pmod{p}' 
   ) {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27_dos === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   $respuesta_28_dos = str_replace(' ','',$respuesta_28);

   if ($respuesta_28_dos === 'a^r\modp'
   || $respuesta_28_dos === 'a^r(modp)'
   || $respuesta_28_dos === 'a^r\pmod{p}'
   ) {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28_dos === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'no es divisible') {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   $respuesta_30_dos = str_replace(' ','',$respuesta_30);

   if ($respuesta_30_dos === 'p\leq\sqrt{n}') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30_dos === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'ineficiente') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === '\sqrt{n}') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'divisiones') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'divide') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    $respuesta_35_dos = str_replace(' ','',$respuesta_35);

    if ($respuesta_35_dos === '2^{n-1}\equiv1\pmod{n}'
    || $respuesta_35_dos === '2^{n-1}\equiv1(modn)'
    ) { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35_dos === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'primo') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'primo impar') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    $respuesta_38_dos = str_replace(' ','',$respuesta_38);

    if ($respuesta_38_dos === '16\equiv1\pmod{5}'
    || $respuesta_38_dos === '16\equiv1(mod5)'
    ) { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38_dos === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'primo impar') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'primo') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'primo') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    $respuesta_42_dos = str_replace(' ','',$respuesta_42);

    if ($respuesta_42_dos === '2^{n-1}\equiv1\pmod{n}'
    || $respuesta_42_dos === '2^{n-1}\equiv1(modn)'
    ) { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42_dos === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'pseudoprimos en base 2') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'compuesto') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    $respuesta_45_dos = str_replace(' ','',$respuesta_45);

    if ($respuesta_45_dos === '2^{340}\equiv1\pmod{341}'
    || $respuesta_45_dos === '2^{340}\equiv1(mod341)'
    ) { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45_dos === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'distinto') { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
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
    height: 250vh;
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
        actualizarFormula21();  
        actualizarFormula22();  
        actualizarFormula23();   
        actualizarFormula24();   
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    var f = document.getElementById('respuesta_2').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_10').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_11').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    var f = document.getElementById('respuesta_12').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula4').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_15').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula6() {
    var f = document.getElementById('respuesta_16').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula6').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula7() {
    var f = document.getElementById('respuesta_20').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula7').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_21').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula8').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula9() {
    var f = document.getElementById('respuesta_22').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula10() {
    var f = document.getElementById('respuesta_27').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula10').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula11() {
    var f = document.getElementById('respuesta_28').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula12() {
    var f = document.getElementById('respuesta_30').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula12').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula13() {
    var f = document.getElementById('respuesta_32').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula13').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula14() {
    var f = document.getElementById('respuesta_35').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula14').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula15() {
    var f = document.getElementById('respuesta_35').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula15').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula16() {
    var f = document.getElementById('respuesta_38').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula16').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula17() {
    var f = document.getElementById('respuesta_42').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula17').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula18() {
    var f = document.getElementById('respuesta_45').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula18').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula19() {
    var f = document.getElementById('respuesta_47').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula19').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula20() {
    var f = document.getElementById('respuesta_49').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula20').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula21() {
    var f = document.getElementById('respuesta_71').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula21').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula22() {
    var f = document.getElementById('respuesta_82').value || "";
    var g = document.getElementById('respuesta_83').value || "";
    var h = document.getElementById('respuesta_84').value || "";
    var formula = ` \\ ${f},${g},${h} \\, `;
    document.getElementById('formula22').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula23() {
    var f = document.getElementById('respuesta_85').value || "";
    var g = document.getElementById('respuesta_86').value || "";
    var h = document.getElementById('respuesta_87').value || "";
    var formula = ` \\ b^{560} = ${f}, b^{560} = ${g}, b^{560} = ${h} \\, `;
    document.getElementById('formula23').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}


function actualizarFormula24() {
    var f = document.getElementById('respuesta_71').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula24').innerHTML = `\\( ${formula} \\)`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula25() {
    var f = document.getElementById('respuesta_126').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula25').innerHTML = `\\( ${formula} \\)`;
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
    <h2>4.4.5 Teorema Pequeño de Fermat</h2>
    <p>El matemático francés Pierre de Fermat, uno de los principales matemáticos de la primera mitad del siglo XVII, 
    hizo muchos descubrimientos importantes en la teoría de números. Uno de los más útiles de estos establece que \( p \) 
    <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="8">
    <span id="formula">
        \(     \)
    </span> 
    <input type="text" name="respuesta_2"   id="respuesta_2" oninput="actualizarFormula()" 
    value="<?php echo $respuesta_2?>" size="9" >
    siempre que
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="1">
    sea 
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="6">
      y \( a \) sea un número entero que 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="15">  
        por \( p \).</p>

    <p>Fermat anunció este resultado en una carta a uno de sus corresponsales. Sin embargo, no incluyó 
    una prueba en la carta, afirmando que temía que la prueba fuera demasiado larga. Aunque Fermat nunca 
    publicó una prueba de este hecho, no cabe duda de que sabía cómo probarlo, a diferencia del resultado 
    conocido como el último teorema de Fermat. La primera prueba publicada se atribuye a 
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="10">
    .</p>

    <h3>Teorema 3: Teorema Pequeño de Fermat</h3>
    <p>Si 
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="10">    
    y \( a \) es un número entero 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="10"> 
    por 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="1"> 
    , entonces:</p>

    <span id="formula2">
        \[     \]
    </span> 
    <input type="text" name="respuesta_10"   id="respuesta_10" oninput="actualizarFormula2()" 
    value="<?php echo $respuesta_10?>" size="20" >
  
    <p>Además, para todo número entero \( a \), se cumple:</p>

    <span id="formula3">
        \[     \]
    </span> 
    <input type="text" name="respuesta_11"   id="respuesta_11" oninput="actualizarFormula3()" 
    value="<?php echo $respuesta_11?>" size="20" >
    
 

    <p><strong>Observación:</strong> El teorema pequeño de Fermat nos dice que si \( a \in \mathbb{Z}_p \), 
    entonces 
    <span id="formula4">
     \(     \)
    </span> 
    <input type="text" name="respuesta_12"   id="respuesta_12" oninput="actualizarFormula4()" 
    value="<?php echo $respuesta_12?>" size="7" >
     en \( \mathbb{Z}_p \).</p>

    <p>La prueba del Teorema 3 se esboza en el Ejercicio 19.</p>

    <p>El teorema pequeño de Fermat es extremadamente útil para calcular los 
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">     
      módulo \( p \) de grandes 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8"> 
      de enteros, como ilustra el siguiente ejemplo.</p>
  

    <h3>Ejemplo 9: Calcular \( 7^{222} \mod 11 \)</h3>
    <p>Solución: Podemos usar el teorema pequeño de Fermat para evaluar \( 7^{222} \mod 11 \) en lugar de 
    usar el algoritmo rápido de exponenciación modular.</p>
    
    <p>Por el teorema pequeño de Fermat, sabemos que:</p>

    <span id="formula5">
        \[     \]
    </span> 
    <input type="text" name="respuesta_15"   id="respuesta_15" oninput="actualizarFormula5()" 
    value="<?php echo $respuesta_15?>" size="22">
 
    <p>Por lo tanto, 
    <span id="formula6">
        \(     \)
    </span> 
    <input type="text" name="respuesta_16"   id="respuesta_16" oninput="actualizarFormula6()" 
    value="<?php echo $respuesta_16?>" size="22" >       
    
    para todo entero positivo \( k \). Para aprovechar esta 
    congruencia, dividimos el exponente 
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8"> 
    entre 
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8"> 
    :</p>
    <p  style="text-align:center"> \(
    222 =   \,\)<input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8"> 
    </p>
    <p>Entonces:</p>
    <p><strong>utilizar \cdot</strong></p>
    <span id="formula7">
        \[     \]
    </span> 
    <input type="text" name="respuesta_20"   id="respuesta_20" oninput="actualizarFormula7()" 
    value="<?php echo $respuesta_20?>" size="30">
    
    <p>Como 
    <span id="formula8">
        \(     \)
    </span> 
    <input type="text" name="respuesta_21"   id="respuesta_21" oninput="actualizarFormula8()" 
    value="<?php echo $respuesta_21?>" size="22" >         
     , concluimos que:</p>


    <span id="formula9">
        \[     \]
    </span> 
    <input type="text" name="respuesta_22"   id="respuesta_22" oninput="actualizarFormula9()" 
    value="<?php echo $respuesta_22?>" size="22" > 
   

    <p>Este ejemplo ilustra cómo usar el teorema pequeño de Fermat para calcular \( a^n \mod p \), donde 
    \( p \) es 
    <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="8"> 
      y \( p \nmid a \).</p>

    <p>Primero, usamos el algoritmo de la división para encontrar el cociente \( q \) y el residuo \( r \) 
    cuando \( n \) se divide por 
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="8"> 
    , es decir:</p>

    <p style="text-align: center;">\(
    n = \)<input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">    
     

    \(
    \text{con} \quad 0 \leq r < \)
    
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8"> 
   
     
    </p>
    
    <p>Entonces:</p>
    
    <p>\[
    a^n = a^{q(p - 1) + r} = (a^{p - 1})^q \cdot a^r \equiv 1^q \cdot a^r \equiv a^r \pmod{p}
    \]</p>
    
    <p>Por lo tanto, para encontrar 
    <span id="formula10">
        \(     \)
    </span> 
    <input type="text" name="respuesta_27"   id="respuesta_27" oninput="actualizarFormula10()" 
    value="<?php echo $respuesta_27?>" size="22">      
    , solo necesitamos calcular 
    <span id="formula11">
        \(     \)
    </span> 
    <br>
    <input type="text" name="respuesta_28"   id="respuesta_28" oninput="actualizarFormula11()" 
    value="<?php echo $respuesta_28?>" size="22">  
     . Aprovecharemos 
    esta simplificación muchas veces en nuestro estudio de la teoría de números.</p>


    <button onmousedown="mostrarImagen()" onmouseup="ocultarImagen()">Ayuda</button>
    <!-- Elemento para mostrar la imagen -->

    <img id="imagenMostrada" src="../../../../img/congruencia_fermat.png" style="display: none; max-width: 100%" width="460" >

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
     

 

    </form> 
</div>




<div class="seccion derecha">
    <form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
        <h2>4.4.6 Pseudoprimos</h2>

    <p>En la Sección 4.2 mostramos que un número entero \( n \) es primo cuando 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="12">     
      por ningún primo 
    \( p \) tal que 
    <span id="formula12">
    \(     \)
    </span> 
    <br>
    <input type="text" name="respuesta_30"   id="respuesta_30" oninput="actualizarFormula12()" 
    value="<?php echo $respuesta_30?>" size="22"> 
     . Desafortunadamente, usar este criterio para mostrar que un número dado 
    es primo resulta 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="8"> 
    . Requiere encontrar todos los primos que no exceden 
    <span id="formula13">
    \( ?  \)
    </span> 
    <input type="text" name="respuesta_32"   id="respuesta_32" oninput="actualizarFormula13()" 
    value="<?php echo $respuesta_32?>" size="7">  
    y realizar 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="8">
    de prueba con cada uno para verificar si 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8">
    a \( n \).</p>

    <p>¿Existen métodos más eficientes para determinar si un número entero es primo? Según algunas fuentes, los 
    antiguos matemáticos chinos creían que \( n \) era un primo impar si, y solo si:</p>

    <span id="formula14">
    \[   \]
    </span> 
    <input type="text" name="respuesta_35"   id="respuesta_35" oninput="actualizarFormula14()" 
    value="<?php echo $respuesta_35?>" size="22">  

 

    <p>Si esto fuera cierto, sería una prueba de primalidad eficiente. ¿Por qué creían que esta congruencia podía 
    usarse para determinar si un entero \( n > 2 \) es 
    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="6">
     ? Primero, observaron que la congruencia se cumple 
    siempre que \( n \) sea un 
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="11">
     . Por ejemplo, 5 es primo y:</p>

 
    
    <span id="formula16">
    \[   \]
    </span> 
    <input type="text" name="respuesta_38"   id="respuesta_38" oninput="actualizarFormula16()" 
    value="<?php echo $respuesta_38?>" size="22"> 


    <p>Por el pequeño teorema de Fermat, sabemos que esta observación es correcta: es decir, 
     <span id="formula15">
    \(   \)
    </span> 
    siempre que \( n \) sea un  
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="11">
     . En segundo lugar, nunca encontraron 
    un número compuesto \( n \) para el cual se cumpliera esta congruencia. Sin embargo, los antiguos chinos 
    estaban solo parcialmente en lo correcto. Tenían razón al pensar que la congruencia se cumple si \( n \) 
    es 
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="11">
     , pero estaban equivocados al concluir que \( n \) debe ser 
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="11">
      si la congruencia se cumple.</p>

    <p>Desafortunadamente, existen enteros compuestos \( n \) tales que:</p>

    <span id="formula17">
    \[   \]
    </span> 
    <input type="text" name="respuesta_42"   id="respuesta_42" oninput="actualizarFormula17()" 
    value="<?php echo $respuesta_42?>" size="22"> 

    

    <p>A estos enteros se les llama <strong>
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="19">    
    </strong>.</p>

    <button type="submit">enviar</button>


    <h3>Ejemplo 10</h3>

    <p>El número entero 341 es un pseudoprimo en base 2 porque es 
    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8">      
      (\( 341 = 11 \cdot 31 \)) y, como 
    muestra el Ejercicio 37:</p>

    <span id="formula18">
    \[   \]
    </span> 
    <input type="text" name="respuesta_45"   id="respuesta_45" oninput="actualizarFormula18()" 
    value="<?php echo $respuesta_45?>" size="22"> 
 
    <p>Podemos usar un entero 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="8">      
    de 2 como base al estudiar pseudoprimos.</p>
    </form>
</div>

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
