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
 
 
            // Definir todas las respuestas correctas para mostrar la solución
    $respuesta_1 = 'Derivados';
    $respuesta_2 = 'En la practica';
    $respuesta_3 = 'los requerimientos pueden ser sensibles al contexto y depender de la perspectiva';
    $respuesta_4 = 'Un interesado externo';
    $respuesta_5 = 'imponer';
    $respuesta_6 = 'alcance';
    $respuesta_7 = 'este seria';
    $respuesta_8 = 'para todo';
    $respuesta_9 = 'involucra';
    $respuesta_10 = 'cientos';
    $respuesta_11 = 'ingenieros';
    
    $respuesta_12 = 'software';
    $respuesta_13 = 'decision';
    $respuesta_14 = 'estilo';
    $respuesta_15 = 'no seria un';
    $respuesta_16 = 'sino una';
    $respuesta_17 = 'de diseño';
    $respuesta_18 = 'vista';
    $respuesta_19 = 'perspectiva';
    $respuesta_20 = 'consideraria';
    $respuesta_21 = 'no fue planteado';
    $respuesta_22 = 'interesado externo';
    
    $respuesta_23 = 'impuesto';
    $respuesta_24 = 'desarrollo mas grande';
    $respuesta_25 = 'encaja';
    $respuesta_26 = 'decision';
    $respuesta_27 = 'diseño';
    $respuesta_28 = 'punto de vista';
    $respuesta_29 = 'actores externos';
    $respuesta_30 = 'pero como';
    $respuesta_31 = 'requerimiento';
    $respuesta_32 = 'derivado';
    $respuesta_33 = 'actividades';
    
    $respuesta_34 = 'gestion';
    $respuesta_35 = 'desarrollo';
    $respuesta_36 = 'entenderse';
    $respuesta_37 = 'llegar a un acuerdo sobre que software se va a construir';
    $respuesta_38 = 'gestion';
    $respuesta_39 = 'considerarse';
    $respuesta_40 = 'mantener ese acuerdo a lo largo del tiempo';
    $respuesta_41 = 'actividad';
    $respuesta_42 = 'desarrollo';
    $respuesta_43 = 'gestion';
    $respuesta_44 = 'desarrollo';
    
    $respuesta_45 = 'El objetivo de la elicitacion de requerimientos es hacer emerger los requerimientos candidatos';
    $respuesta_46 = 'Elicitacion de Requerimientos';
    $respuesta_47 = 'captura';
    $respuesta_48 = 'descubrimiento';
    $respuesta_49 = 'adquisicion';
    $respuesta_50 = 'incompletitud';
    
    $respuesta_51 = 'inadecuada';
    $respuesta_52 = 'bien';
    $respuesta_53 = 'minimizar';
    $respuesta_54 = 'incompletitud';
    $respuesta_55 = 'Los requerimientos provienen';
    
    $respuesta_56 = 'de muchas fuentes diferentes';
    $respuesta_57 = 'Todas las';
    $respuesta_58 = 'fuentes potenciales de';
    $respuesta_59 = 'requerimientos deben ser';
    $respuesta_60 = 'identificadas';
    $respuesta_61 = 'evaluadas';
    $respuesta_62 = 'Un actor';
    $respuesta_63 = 'definirse';
    $respuesta_64 = 'persona';
    $respuesta_65 = 'grupo';
    $respuesta_66 = 'organizacion';
    
    $respuesta_67 = 'este activamente involucrado en el';
    $respuesta_68 = 'proyecto';
    $respuesta_69 = 'se vea afectado';
    $respuesta_70 = 'por el resultado';
    $respuesta_71 = 'del proyecto';
    $respuesta_72 = 'pueda influir en el';
    $respuesta_73 = 'resultado';
    $respuesta_74 = 'del proyecto';
    $respuesta_75 = 'limitan';
    $respuesta_76 = 'clientes';
    $respuesta_77 = 'compradores';
    $respuesta_78 = 'usuarios';
    $respuesta_79 = 'expertos en la materia';
    $respuesta_80 = 'personal de operaciones';
    $respuesta_81 = 'personal de soporte';
    $respuesta_82 = 'organismos profesionales';
    $respuesta_83 = 'organismos reguladores';
    $respuesta_84 = 'grupos de interes';
    $respuesta_85 = 'personas';
    $respuesta_86 = 'negativamente';
    $respuesta_87 = 'desarrolladores';
    
    $respuesta_88 = 'Las clases de';
    $respuesta_89 = 'actores';
    $respuesta_90 = 'son grupos de actores';
    $respuesta_91 = 'que tienen perspectivas y necesidades similares';
    $respuesta_92 = 'Trabajar en un proyecto de software en terminos de';
    $respuesta_93 = 'clases de actores en lugar de con';
    $respuesta_94 = 'actores individuales';
    $respuesta_95 = 'puede aportar';
    $respuesta_96 = 'informacion adicional importante';
    $respuesta_97 = 'Muchos proyectos';
    $respuesta_98 = 'se benefician';
    $respuesta_99 = 'de realizar';
    $respuesta_100 = 'un analisis';
    $respuesta_101 = 'de actores';
    $respuesta_102 = 'para identificar tantas clases';
    $respuesta_103 = 'importantes';
    $respuesta_104 = 'actores';
    $respuesta_105 = 'posible';
    $respuesta_106 = 'Esto reduce';
    $respuesta_107 = 'posibilidad';
    $respuesta_108 = 'requerimientos';
    $respuesta_109 = 'sesgados';
    $respuesta_110 = 'actores';
    $respuesta_111 = 'representados';
    $respuesta_112 = 'detrimento';
    $respuesta_113 = 'menos';
    $respuesta_114 = 'El analisis de';
    $respuesta_115 = 'actores tambien puede';
    $respuesta_116 = 'informar';
    $respuesta_117 = 'procesos';
    $respuesta_118 = 'resolucion';
    $respuesta_119 = 'conflictos';
    $respuesta_120 = 'requerimientos';
    $respuesta_121 = 'clase';
    $respuesta_122 = 'conflicto';
    
    $respuesta_123 = 'Los requerimientos no se limitan';
    $respuesta_124 = 'provenir';
    $respuesta_125 = 'personas';
    $respuesta_126 = 'no humanas';
    $respuesta_127 = 'documentacion';
    $respuesta_128 = 'versiones';
    $respuesta_129 = 'declaraciones';
    $respuesta_130 = 'conceptos';
    $respuesta_131 = 'otros sistemas';
    $respuesta_132 = 'contexto empresarial';
    $respuesta_133 = 'politicas';
    $respuesta_134 = 'procesos';
    $respuesta_135 = 'entorno';
    $respuesta_136 = 'Existe';
    $respuesta_137 = 'amplia variedad';
    $respuesta_138 = 'tecnicas';
    $respuesta_139 = 'elicitacion';
    $respuesta_140 = 'actores';
    $respuesta_141 = 'tecnicas';
    $respuesta_142 = 'ciertas clases';
    $respuesta_143 = 'actores';
    $respuesta_144 = 'con actores';
    $respuesta_145 = 'entrevistas';
    $respuesta_146 = 'reuniones';
    $respuesta_147 = 'lluvias de ideas';
    $respuesta_148 = 'desarrollo';
    $respuesta_149 = 'planificacion';
    $respuesta_150 = 'analisis';
    $respuesta_151 = 'grupos focales';
    $respuesta_152 = 'cuestionarios';
    $respuesta_153 = 'encuestas de mercado';
    $respuesta_154 = 'prototipado';
    $respuesta_155 = 'prototipos de interfaz de usuario';
    $respuesta_156 = 'baja';
    $respuesta_157 = 'alta fidelidad';
    $respuesta_158 = 'mapeo de historias de usuario';
    $respuesta_159 = 'dificil';
    $respuesta_160 = 'dificultades';
    $respuesta_161 = 'describir';
    $respuesta_162 = 'tareas';
    $respuesta_163 = 'omitir';
    $respuesta_164 = 'no estar dispuestos';
    $respuesta_165 = 'ser incapaces';
    $respuesta_166 = 'no es una actividad pasiva';
    $respuesta_167 = 'dispone';
    $respuesta_168 = 'cooperativos';
    $respuesta_169 = 'trabajar';
    $respuesta_170 = 'correcta';
    $respuesta_171 = 'producto';
    $respuesta_172 = 'tacitos';
    $respuesta_173 = 'aun no recopilada';
    $respuesta_174 = 'Los requerimientos tambien pueden obtenerse de fuentes distintas a las partes interesadas';
    $respuesta_175 = 'fuentes';
    $respuesta_176 = 'tecnicas incluyen';
    $respuesta_177 = 'versiones anteriores del sistema';
    $respuesta_178 = 'base de datos';
    $respuesta_179 = 'seguimiento de defectos de versiones anteriores del sistema';
    $respuesta_180 = 'otros sistemas';
    $respuesta_181 = 'interconectan';
    $respuesta_182 = 'sistema en desarrollo';
    $respuesta_183 = 'evaluacion comparativa con la competencia';
    $respuesta_184 = 'benchmarking';
    $respuesta_185 = 'busqueda en la literatura';
    $respuesta_186 = 'House of Quality del despliegue de la funcion calidad';
    $respuesta_187 = 'observacion';
    $respuesta_188 = 'ingeniero de software';
    $respuesta_189 = 'trabajo';
    $respuesta_190 = 'entorno';
    $respuesta_191 = 'realiza';
    $respuesta_192 = 'aprendizaje mediante practica';
    $respuesta_193 = 'ingeniero de software aprende realizando el trabajo';
    $respuesta_194 = 'descripciones de escenarios de uso';
    $respuesta_195 = 'descomposicion';
    $respuesta_196 = 'capacidades';
    $respuesta_197 = 'epicas';
    $respuesta_198 = 'caracteristicas';
    $respuesta_199 = 'historias';
    $respuesta_200 = 'analisis de tareas';
    $respuesta_201 = 'pensamiento de diseño';
    $respuesta_202 = 'requerimientos de seguridad';
    $respuesta_203 = 'Seguridad';
    $respuesta_204 = 'normas y regulaciones aplicables';
    $respuesta_205 = 'Analisis de requerimientos';
    $respuesta_206 = 'Es poco probable que los requerimientos se obtengan en su forma final';
    $respuesta_207 = 'Normalmente';
    $respuesta_208 = 'investigacion adicional';
    $respuesta_209 = 'requerimientos verdaderos';
    $respuesta_210 = 'sugeridos';
    $respuesta_211 = 'informacion';
    $respuesta_212 = 'elicitada';
    $respuesta_213 = 'ayuda';
    $respuesta_214 = 'desarrolladores';
    $respuesta_215 = 'comprender';
    $respuesta_216 = 'significado';
    $respuesta_217 = 'implicaciones';
    $respuesta_218 = 'requerimientos candidatos';
    $respuesta_219 = 'individualmente';
    $respuesta_220 = 'contexto';
    $respuesta_221 = 'conjunto completo de requerimientos';
    $respuesta_222 = 'propiedades deseables';
    $respuesta_223 = 'requerimientos';
    $respuesta_224 = 'analisis basico';
    $respuesta_225 = 'establecer cualquiera';
    $respuesta_226 = 'propiedades';
    $respuesta_227 = 'aun no se cumplan';
    $respuesta_228 = 'ser inequivoco';
    $respuesta_229 = 'interpretado de una sola manera';
    $respuesta_230 = 'ser comprobable';
    $respuesta_231 = 'cuantificado';
    $respuesta_232 = 'demostrar claramente';
    $respuesta_233 = 'cumplimiento';
    $respuesta_234 = 'incumplimiento';
    $respuesta_235 = 'ser vinculante';
    $respuesta_236 = 'significa';
    $respuesta_237 = 'clientes';
    $respuesta_238 = 'dispuestos';
    $respuesta_239 = 'no dispuestos';
    $respuesta_240 = 'prescindir de el';
    $respuesta_241 = 'ser atomico';
    $respuesta_242 = 'representar una sola decision';
    $respuesta_243 = 'representar necesidades reales';
    $respuesta_244 = 'verdaderas';
    $respuesta_245 = 'interesados';
    $respuesta_246 = 'stakeholders';
    $respuesta_247 = 'usar';
    $respuesta_248 = 'vocabulario';
    $respuesta_249 = 'interesados';
    $respuesta_250 = 'ser aceptable';
    $respuesta_251 = 'todos los interesados';
    $respuesta_252 = 'El conjunto completo de requerimientos';
    $respuesta_253 = 'completo';
    $respuesta_254 = 'abordan';
    $respuesta_255 = 'condiciones limite';
    $respuesta_256 = 'las condiciones excepcionales';
    $respuesta_257 = 'las necesidades de seguridad';
    $respuesta_258 = 'conciso';
    $respuesta_259 = 'No contiene contenido innecesario';
    $respuesta_260 = 'internamente consistente';
    $respuesta_261 = 'Ningun requerimiento entra en conflicto con otro';
    $respuesta_262 = 'externamente consistente';
    $respuesta_263 = 'Ningun requerimiento entra en conflicto con el material fuente';
    $respuesta_264 = 'factible';
    $respuesta_265 = 'posible';
    $respuesta_266 = 'viable';
    $respuesta_267 = 'rentable';
    $respuesta_268 = 'restricciones';
    $respuesta_269 = 'costo';
    $respuesta_270 = 'cronograma';
    $respuesta_271 = 'personal';
    $respuesta_272 = 'entre otras';
    $respuesta_273 = 'declaracion elicitada';
    $respuesta_274 = 'solucion';
    $respuesta_275 = 'verdadero';
    $respuesta_276 = 'resolver';
    $respuesta_277 = 'riesgo';
    $respuesta_278 = 'implementar';
    $respuesta_279 = 'solucion suboptima';
    $respuesta_280 = 'preguntar';
    $respuesta_281 = 'requerimiento';
    $respuesta_282 = 'verdadero';
    $respuesta_283 = 'Si eso no se hace';
    $respuesta_284 = 'problema';
    $respuesta_285 = 'interesado no se resuelve';


    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === 'Derivados') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'En la practica') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'los requerimientos pueden ser sensibles al contexto y depender de la perspectiva') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'Un interesado externo' 
   || $respuesta_4 === 'un interesado externo'
   || $respuesta_4 === 'Un stakeholder externo'
   || $respuesta_4 === 'un stakeholder externo'
   ) {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'imponer') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === 'alcance') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'este seria') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'para todo') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'involucra') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'cientos') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'ingenieros') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'software') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'decision') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'estilo') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'no seria un') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'sino una') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'de diseño') {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'vista') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
    // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === 'perspectiva') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }
  
    // Verificar la respuesta de la novena pregunta
    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'consideraria') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }
  
    // Verificar la respuesta de la décima pregunta
    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === 'no fue planteado') {  
         $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }
  
    // Verificar la respuesta de la undécima pregunta
    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === 'interesado externo'
    || $respuesta_22 === 'stakeholder externo'
    ) {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

     // Verificar la respuesta de la primera pregunta
   $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
   if ($respuesta_23 === 'impuesto') {  
       $verificar_23 = "correcto";
   } elseif ($respuesta_23 === '') {
       $verificar_23 = '';
   } else {
       $verificar_23 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
   if ($respuesta_24 === 'desarrollo mas grande') {  
       $verificar_24 = "correcto";
   } elseif ($respuesta_24 === '') {
       $verificar_24 = '';
   } else {
       $verificar_24 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
   if ($respuesta_25 === 'encaja') { 
       $verificar_25 = "correcto";
   } elseif ($respuesta_25 === '') {
       $verificar_25 = '';
   } else {
       $verificar_25 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
   if ($respuesta_26 === 'decision') {  
       $verificar_26 = "correcto";
   } elseif ($respuesta_26 === '') {
       $verificar_26 = '';
   } else {
       $verificar_26 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
   if ($respuesta_27 === 'diseño') {  
       $verificar_27 = "correcto";
   } elseif ($respuesta_27 === '') {
       $verificar_27 = '';
   } else {
       $verificar_27 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
   if ($respuesta_28 === 'punto de vista') {  
       $verificar_28 = "correcto";
   } elseif ($respuesta_28 === '') {
       $verificar_28 = '';
   } else {
       $verificar_28 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
   if ($respuesta_29 === 'actores externos' || $respuesta_29 === 'stakeholders'
   || $respuesta_29 === 'interesados externos'
   ) {  
       $verificar_29 = "correcto";
   } elseif ($respuesta_29 === '') {
       $verificar_29 = '';
   } else {
       $verificar_29 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
   if ($respuesta_30 === 'pero como') {  
       $verificar_30 = "correcto";
   } elseif ($respuesta_30 === '') {
       $verificar_30 = '';
   } else {
       $verificar_30 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
   if ($respuesta_31 === 'requerimiento') {  
       $verificar_31 = "correcto";
   } elseif ($respuesta_31 === '') {
       $verificar_31 = '';
   } else {
       $verificar_31 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
   if ($respuesta_32 === 'derivado') {  
       $verificar_32 = "correcto";
   } elseif ($respuesta_32 === '') {
       $verificar_32 = '';
   } else {
       $verificar_32 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
   if ($respuesta_33 === 'actividades') {  
       $verificar_33 = "correcto";
   } elseif ($respuesta_33 === '') {
       $verificar_33 = '';
   } else {
       $verificar_33 = "incorrecto";
   }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === 'gestion') { 
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === 'desarrollo') { 
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'entenderse') { 
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
    $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'llegar a un acuerdo sobre que software se va a construir') { 
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'gestion') { 
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'considerarse') { 
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === 'mantener ese acuerdo a lo largo del tiempo') { 
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === 'actividad') { 
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'desarrollo') { 
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'gestion') { 
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
    $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'desarrollo') { 
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
    $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === 'El objetivo de la elicitacion de requerimientos es hacer emerger los requerimientos candidatos') { 
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
    $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'Elicitacion de Requerimientos'
    || $respuesta_46 === 'Elicitacion de requerimientos'
    ) { 
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
    $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'captura') { 
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === 'descubrimiento') { 
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
    $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'adquisicion') { 
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
    $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'incompletitud') { 
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
    $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

 $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
if ($respuesta_51 === 'inadecuada') { 
    $verificar_51 = "correcto";
} elseif ($respuesta_51 === '') {
    $verificar_51 = '';
} else {
    $verificar_51 = "incorrecto";
}

 $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
if ($respuesta_52 === 'bien') { 
    $verificar_52 = "correcto";
} elseif ($respuesta_52 === '') {
    $verificar_52 = '';
} else {
    $verificar_52 = "incorrecto";
}

 $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
if ($respuesta_53 === 'minimizar') { 
    $verificar_53 = "correcto";
} elseif ($respuesta_53 === '') {
    $verificar_53 = '';
} else {
    $verificar_53 = "incorrecto";
}

 $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
if ($respuesta_54 === 'incompletitud') { 
    $verificar_54 = "correcto";
} elseif ($respuesta_54 === '') {
    $verificar_54 = '';
} else {
    $verificar_54 = "incorrecto";
}

 $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
if ($respuesta_55 === 'Los requerimientos provienen') { 
    $verificar_55 = "correcto";
} elseif ($respuesta_55 === '') {
    $verificar_55 = '';
} else {
    $verificar_55 = "incorrecto";
}


 $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
if ($respuesta_56 === 'de muchas fuentes diferentes') { 
    $verificar_56 = "correcto";
} elseif ($respuesta_56 === '') {
    $verificar_56 = '';
} else {
    $verificar_56 = "incorrecto";
}

 $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
if ($respuesta_57 === 'Todas las') { 
    $verificar_57 = "correcto";
} elseif ($respuesta_57 === '') {
    $verificar_57 = '';
} else {
    $verificar_57 = "incorrecto";
}

 $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
if ($respuesta_58 === 'fuentes potenciales de') { 
    $verificar_58 = "correcto";
} elseif ($respuesta_58 === '') {
    $verificar_58 = '';
} else {
    $verificar_58 = "incorrecto";
}

 $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
if ($respuesta_59 === 'requerimientos deben ser') { 
    $verificar_59 = "correcto";
} elseif ($respuesta_59 === '') {
    $verificar_59 = '';
} else {
    $verificar_59 = "incorrecto";
}

 $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
if ($respuesta_60 === 'identificadas') { 
    $verificar_60 = "correcto";
} elseif ($respuesta_60 === '') {
    $verificar_60 = '';
} else {
    $verificar_60 = "incorrecto";
}

 $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
if ($respuesta_61 === 'evaluadas') { 
    $verificar_61 = "correcto";
} elseif ($respuesta_61 === '') {
    $verificar_61 = '';
} else {
    $verificar_61 = "incorrecto";
}

 $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
if ($respuesta_62 === 'Un actor') { 
    $verificar_62 = "correcto";
} elseif ($respuesta_62 === '') {
    $verificar_62 = '';
} else {
    $verificar_62 = "incorrecto";
}

 $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
if ($respuesta_63 === 'definirse') { 
    $verificar_63 = "correcto";
} elseif ($respuesta_63 === '') {
    $verificar_63 = '';
} else {
    $verificar_63 = "incorrecto";
}

 $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
if ($respuesta_64 === 'persona') { 
    $verificar_64 = "correcto";
} elseif ($respuesta_64 === '') {
    $verificar_64 = '';
} else {
    $verificar_64 = "incorrecto";
}

 $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
if ($respuesta_65 === 'grupo') { 
    $verificar_65 = "correcto";
} elseif ($respuesta_65 === '') {
    $verificar_65 = '';
} else {
    $verificar_65 = "incorrecto";
}

 $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
if ($respuesta_66 === 'organizacion') { 
    $verificar_66 = "correcto";
} elseif ($respuesta_66 === '') {
    $verificar_66 = '';
} else {
    $verificar_66 = "incorrecto";
}

 $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
if ($respuesta_67 === 'este activamente involucrado en el') { 
    $verificar_67 = "correcto";
} elseif ($respuesta_67 === '') {
    $verificar_67 = '';
} else {
    $verificar_67 = "incorrecto";
}

 $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
if ($respuesta_68 === 'proyecto') { 
    $verificar_68 = "correcto";
} elseif ($respuesta_68 === '') {
    $verificar_68 = '';
} else {
    $verificar_68 = "incorrecto";
}

 $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
if ($respuesta_69 === 'se vea afectado') { 
    $verificar_69 = "correcto";
} elseif ($respuesta_69 === '') {
    $verificar_69 = '';
} else {
    $verificar_69 = "incorrecto";
}

 $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
if ($respuesta_70 === 'por el resultado') { 
    $verificar_70 = "correcto";
} elseif ($respuesta_70 === '') {
    $verificar_70 = '';
} else {
    $verificar_70 = "incorrecto";
}

 $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
if ($respuesta_71 === 'del proyecto') { 
    $verificar_71 = "correcto";
} elseif ($respuesta_71 === '') {
    $verificar_71 = '';
} else {
    $verificar_71 = "incorrecto";
}

 $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
if ($respuesta_72 === 'pueda influir en el') { 
    $verificar_72 = "correcto";
} elseif ($respuesta_72 === '') {
    $verificar_72 = '';
} else {
    $verificar_72 = "incorrecto";
}

 $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
if ($respuesta_73 === 'resultado') { 
    $verificar_73 = "correcto";
} elseif ($respuesta_73 === '') {
    $verificar_73 = '';
} else {
    $verificar_73 = "incorrecto";
}

 $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
if ($respuesta_74 === 'del proyecto') { 
    $verificar_74 = "correcto";
} elseif ($respuesta_74 === '') {
    $verificar_74 = '';
} else {
    $verificar_74 = "incorrecto";
}

 $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
if ($respuesta_75 === 'limitan') { 
    $verificar_75 = "correcto";
} elseif ($respuesta_75 === '') {
    $verificar_75 = '';
} else {
    $verificar_75 = "incorrecto";
}

 $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
if ($respuesta_76 === 'clientes') { 
    $verificar_76 = "correcto";
} elseif ($respuesta_76 === '') {
    $verificar_76 = '';
} else {
    $verificar_76 = "incorrecto";
}

 $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
if ($respuesta_77 === 'compradores') { 
    $verificar_77 = "correcto";
} elseif ($respuesta_77 === '') {
    $verificar_77 = '';
} else {
    $verificar_77 = "incorrecto";
}

 $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
if ($respuesta_78 === 'usuarios') { 
    $verificar_78 = "correcto";
} elseif ($respuesta_78 === '') {
    $verificar_78 = '';
} else {
    $verificar_78 = "incorrecto";
}

 $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
if ($respuesta_79 === 'expertos en la materia') { 
    $verificar_79 = "correcto";
} elseif ($respuesta_79 === '') {
    $verificar_79 = '';
} else {
    $verificar_79 = "incorrecto";
}

 $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
if ($respuesta_80 === 'personal de operaciones') { 
    $verificar_80 = "correcto";
} elseif ($respuesta_80 === '') {
    $verificar_80 = '';
} else {
    $verificar_80 = "incorrecto";
}

 $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
if ($respuesta_81 === 'personal de soporte') { 
    $verificar_81 = "correcto";
} elseif ($respuesta_81 === '') {
    $verificar_81 = '';
} else {
    $verificar_81 = "incorrecto";
}

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === 'organismos profesionales') { 
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === 'organismos reguladores') { 
       $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === 'grupos de interes') { 
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === 'personas') { 
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === 'negativamente') { 
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === 'desarrolladores') { 
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === 'Las clases de') { 
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

 $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
if ($respuesta_89 === 'actores') { 
    $verificar_89 = "correcto";
} elseif ($respuesta_89 === '') {
    $verificar_89 = '';
} else {
    $verificar_89 = "incorrecto";
}

 $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
if ($respuesta_90 === 'son grupos de actores') { 
    $verificar_90 = "correcto";
} elseif ($respuesta_90 === '') {
    $verificar_90 = '';
} else {
    $verificar_90 = "incorrecto";
}

 $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
if ($respuesta_91 === 'que tienen perspectivas y necesidades similares') { 
    $verificar_91 = "correcto";
} elseif ($respuesta_91 === '') {
    $verificar_91 = '';
} else {
    $verificar_91 = "incorrecto";
}

 $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
if ($respuesta_92 === 'Trabajar en un proyecto de software en terminos de') { 
    $verificar_92 = "correcto";
} elseif ($respuesta_92 === '') {
    $verificar_92 = '';
} else {
    $verificar_92 = "incorrecto";
}

 $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
if ($respuesta_93 === 'clases de actores en lugar de con') { 
    $verificar_93 = "correcto";
} elseif ($respuesta_93 === '') {
    $verificar_93 = '';
} else {
    $verificar_93 = "incorrecto";
}

 $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
if ($respuesta_94 === 'actores individuales') { 
    $verificar_94 = "correcto";
} elseif ($respuesta_94 === '') {
    $verificar_94 = '';
} else {
    $verificar_94 = "incorrecto";
}

 $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
if ($respuesta_95 === 'puede aportar') { 
    $verificar_95 = "correcto";
} elseif ($respuesta_95 === '') {
    $verificar_95 = '';
} else {
    $verificar_95 = "incorrecto";
}

 $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
if ($respuesta_96 === 'informacion adicional importante') { 
    $verificar_96 = "correcto";
} elseif ($respuesta_96 === '') {
    $verificar_96 = '';
} else {
    $verificar_96 = "incorrecto";
}

 $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
if ($respuesta_97 === 'Muchos proyectos') { 
    $verificar_97 = "correcto";
} elseif ($respuesta_97 === '') {
    $verificar_97 = '';
} else {
    $verificar_97 = "incorrecto";
}

 $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
if ($respuesta_98 === 'se benefician') { 
    $verificar_98 = "correcto";
} elseif ($respuesta_98 === '') {
    $verificar_98 = '';
} else {
    $verificar_98 = "incorrecto";
}

 $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
if ($respuesta_99 === 'de realizar') { 
    $verificar_99 = "correcto";
} elseif ($respuesta_99 === '') {
    $verificar_99 = '';
} else {
    $verificar_99 = "incorrecto";
}


 $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
if ($respuesta_100 === 'un analisis') { 
    $verificar_100 = "correcto";
} elseif ($respuesta_100 === '') {
    $verificar_100 = '';
} else {
    $verificar_100 = "incorrecto";
}

 $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
if ($respuesta_101 === 'de actores') { 
    $verificar_101 = "correcto";
} elseif ($respuesta_101 === '') {
    $verificar_101 = '';
} else {
    $verificar_101 = "incorrecto";
}

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === 'para identificar tantas clases') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === 'importantes') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === 'actores') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === 'posible') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === 'Esto reduce') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === 'posibilidad') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === 'requerimientos') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === 'sesgados') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === 'actores') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === 'representados') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === 'detrimento') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === 'menos') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === 'El analisis de') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === 'actores tambien puede') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === 'informar') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === 'procesos') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === 'resolucion') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === 'conflictos') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === 'requerimientos') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}
 
$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === 'clase') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
}


 

$respuesta_122 = isset($_POST['respuesta_122']) ? $_POST['respuesta_122'] : '';
if ($respuesta_122 === 'conflicto') {  
    $verificar_122 = "correcto";
} elseif ($respuesta_122 === '') {
    $verificar_122 = '';
} else {
    $verificar_122 = "incorrecto";
}

$respuesta_123 = isset($_POST['respuesta_123']) ? $_POST['respuesta_123'] : '';
if ($respuesta_123 === 'Los requerimientos no se limitan') {  
    $verificar_123 = "correcto";
} elseif ($respuesta_123 === '') {
    $verificar_123 = '';
} else {
    $verificar_123 = "incorrecto";
}

$respuesta_124 = isset($_POST['respuesta_124']) ? $_POST['respuesta_124'] : '';
if ($respuesta_124 === 'provenir') {  
    $verificar_124 = "correcto";
} elseif ($respuesta_124 === '') {
    $verificar_124 = '';
} else {
    $verificar_124 = "incorrecto";
}

$respuesta_125 = isset($_POST['respuesta_125']) ? $_POST['respuesta_125'] : '';
if ($respuesta_125 === 'personas') {  
    $verificar_125 = "correcto";
} elseif ($respuesta_125 === '') {
    $verificar_125 = '';
} else {
    $verificar_125 = "incorrecto";
}

$respuesta_126 = isset($_POST['respuesta_126']) ? $_POST['respuesta_126'] : '';
if ($respuesta_126 === 'no humanas') {  
    $verificar_126 = "correcto";
} elseif ($respuesta_126 === '') {
    $verificar_126 = '';
} else {
    $verificar_126 = "incorrecto";
}

$respuesta_127 = isset($_POST['respuesta_127']) ? $_POST['respuesta_127'] : '';
if ($respuesta_127 === 'documentacion') {  
    $verificar_127 = "correcto";
} elseif ($respuesta_127 === '') {
    $verificar_127 = '';
} else {
    $verificar_127 = "incorrecto";
}

$respuesta_128 = isset($_POST['respuesta_128']) ? $_POST['respuesta_128'] : '';
if ($respuesta_128 === 'versiones') {  
    $verificar_128 = "correcto";
} elseif ($respuesta_128 === '') {
    $verificar_128 = '';
} else {
    $verificar_128 = "incorrecto";
}

$respuesta_129 = isset($_POST['respuesta_129']) ? $_POST['respuesta_129'] : '';
if ($respuesta_129 === 'declaraciones') {  
    $verificar_129 = "correcto";
} elseif ($respuesta_129 === '') {
    $verificar_129 = '';
} else {
    $verificar_129 = "incorrecto";
}

$respuesta_130 = isset($_POST['respuesta_130']) ? $_POST['respuesta_130'] : '';
if ($respuesta_130 === 'conceptos') {  
    $verificar_130 = "correcto";
} elseif ($respuesta_130 === '') {
    $verificar_130 = '';
} else {
    $verificar_130 = "incorrecto";
}

$respuesta_131 = isset($_POST['respuesta_131']) ? $_POST['respuesta_131'] : '';
if ($respuesta_131 === 'otros sistemas') {  
    $verificar_131 = "correcto";
} elseif ($respuesta_131 === '') {
    $verificar_131 = '';
} else {
    $verificar_131 = "incorrecto";
}

$respuesta_132 = isset($_POST['respuesta_132']) ? $_POST['respuesta_132'] : '';
if ($respuesta_132 === 'contexto empresarial') {  
    $verificar_132 = "correcto";
} elseif ($respuesta_132 === '') {
    $verificar_132 = '';
} else {
    $verificar_132 = "incorrecto";
}

$respuesta_133 = isset($_POST['respuesta_133']) ? $_POST['respuesta_133'] : '';
if ($respuesta_133 === 'politicas') {  
    $verificar_133 = "correcto";
} elseif ($respuesta_133 === '') {
    $verificar_133 = '';
} else {
    $verificar_133 = "incorrecto";
}

$respuesta_134 = isset($_POST['respuesta_134']) ? $_POST['respuesta_134'] : '';
if ($respuesta_134 === 'procesos') {  
    $verificar_134 = "correcto";
} elseif ($respuesta_134 === '') {
    $verificar_134 = '';
} else {
    $verificar_134 = "incorrecto";
}

$respuesta_135 = isset($_POST['respuesta_135']) ? $_POST['respuesta_135'] : '';
if ($respuesta_135 === 'entorno') {  
    $verificar_135 = "correcto";
} elseif ($respuesta_135 === '') {
    $verificar_135 = '';
} else {
    $verificar_135 = "incorrecto";
}

$respuesta_136 = isset($_POST['respuesta_136']) ? $_POST['respuesta_136'] : '';
if ($respuesta_136 === 'Existe') {  
    $verificar_136 = "correcto";
} elseif ($respuesta_136 === '') {
    $verificar_136 = '';
} else {
    $verificar_136 = "incorrecto";
}

$respuesta_137 = isset($_POST['respuesta_137']) ? $_POST['respuesta_137'] : '';
if ($respuesta_137 === 'amplia variedad') {  
    $verificar_137 = "correcto";
} elseif ($respuesta_137 === '') {
    $verificar_137 = '';
} else {
    $verificar_137 = "incorrecto";
}

$respuesta_138 = isset($_POST['respuesta_138']) ? $_POST['respuesta_138'] : '';
if ($respuesta_138 === 'tecnicas') {  
    $verificar_138 = "correcto";
} elseif ($respuesta_138 === '') {
    $verificar_138 = '';
} else {
    $verificar_138 = "incorrecto";
}

$respuesta_139 = isset($_POST['respuesta_139']) ? $_POST['respuesta_139'] : '';
if ($respuesta_139 === 'elicitacion') {  
    $verificar_139 = "correcto";
} elseif ($respuesta_139 === '') {
    $verificar_139 = '';
} else {
    $verificar_139 = "incorrecto";
}

$respuesta_140 = isset($_POST['respuesta_140']) ? $_POST['respuesta_140'] : '';
if ($respuesta_140 === 'actores') {  
    $verificar_140 = "correcto";
} elseif ($respuesta_140 === '') {
    $verificar_140 = '';
} else {
    $verificar_140 = "incorrecto";
}

$respuesta_141 = isset($_POST['respuesta_141']) ? $_POST['respuesta_141'] : '';
if ($respuesta_141 === 'tecnicas') {  
    $verificar_141 = "correcto";
} elseif ($respuesta_141 === '') {
    $verificar_141 = '';
} else {
    $verificar_141 = "incorrecto";
}

$respuesta_142 = isset($_POST['respuesta_142']) ? $_POST['respuesta_142'] : '';
if ($respuesta_142 === 'ciertas clases') {  
    $verificar_142 = "correcto";
} elseif ($respuesta_142 === '') {
    $verificar_142 = '';
} else {
    $verificar_142 = "incorrecto";
}

$respuesta_143 = isset($_POST['respuesta_143']) ? $_POST['respuesta_143'] : '';
if ($respuesta_143 === 'actores') {  
    $verificar_143 = "correcto";
} elseif ($respuesta_143 === '') {
    $verificar_143 = '';
} else {
    $verificar_143 = "incorrecto";
}

$respuesta_144 = isset($_POST['respuesta_144']) ? $_POST['respuesta_144'] : '';
if ($respuesta_144 === 'con actores') {  
    $verificar_144 = "correcto";
} elseif ($respuesta_144 === '') {
    $verificar_144 = '';
} else {
    $verificar_144 = "incorrecto";
}

$respuesta_145 = isset($_POST['respuesta_145']) ? $_POST['respuesta_145'] : '';
if ($respuesta_145 === 'entrevistas') {  
    $verificar_145 = "correcto";
} elseif ($respuesta_145 === '') {
    $verificar_145 = '';
} else {
    $verificar_145 = "incorrecto";
}

$respuesta_146 = isset($_POST['respuesta_146']) ? $_POST['respuesta_146'] : '';
if ($respuesta_146 === 'reuniones') {  
    $verificar_146 = "correcto";
} elseif ($respuesta_146 === '') {
    $verificar_146 = '';
} else {
    $verificar_146 = "incorrecto";
}

$respuesta_147 = isset($_POST['respuesta_147']) ? $_POST['respuesta_147'] : '';
if ($respuesta_147 === 'lluvias de ideas') {  
    $verificar_147 = "correcto";
} elseif ($respuesta_147 === '') {
    $verificar_147 = '';
} else {
    $verificar_147 = "incorrecto";
}

$respuesta_148 = isset($_POST['respuesta_148']) ? $_POST['respuesta_148'] : '';
if ($respuesta_148 === 'desarrollo') {  
    $verificar_148 = "correcto";
} elseif ($respuesta_148 === '') {
    $verificar_148 = '';
} else {
    $verificar_148 = "incorrecto";
}

$respuesta_149 = isset($_POST['respuesta_149']) ? $_POST['respuesta_149'] : '';
if ($respuesta_149 === 'planificacion') {  
    $verificar_149 = "correcto";
} elseif ($respuesta_149 === '') {
    $verificar_149 = '';
} else {
    $verificar_149 = "incorrecto";
}

$respuesta_150 = isset($_POST['respuesta_150']) ? $_POST['respuesta_150'] : '';
if ($respuesta_150 === 'analisis') {  
    $verificar_150 = "correcto";
} elseif ($respuesta_150 === '') {
    $verificar_150 = '';
} else {
    $verificar_150 = "incorrecto";
}

$respuesta_151 = isset($_POST['respuesta_151']) ? $_POST['respuesta_151'] : '';
if ($respuesta_151 === 'grupos focales') {  
    $verificar_151 = "correcto";
} elseif ($respuesta_151 === '') {
    $verificar_151 = '';
} else {
    $verificar_151 = "incorrecto";
}

$respuesta_152 = isset($_POST['respuesta_152']) ? $_POST['respuesta_152'] : '';
if ($respuesta_152 === 'cuestionarios') {  
    $verificar_152 = "correcto";
} elseif ($respuesta_152 === '') {
    $verificar_152 = '';
} else {
    $verificar_152 = "incorrecto";
}

$respuesta_153 = isset($_POST['respuesta_153']) ? $_POST['respuesta_153'] : '';
if ($respuesta_153 === 'encuestas de mercado') {  
    $verificar_153 = "correcto";
} elseif ($respuesta_153 === '') {
    $verificar_153 = '';
} else {
    $verificar_153 = "incorrecto";
}

$respuesta_154 = isset($_POST['respuesta_154']) ? $_POST['respuesta_154'] : '';
if ($respuesta_154 === 'prototipado') {  
    $verificar_154 = "correcto";
} elseif ($respuesta_154 === '') {
    $verificar_154 = '';
} else {
    $verificar_154 = "incorrecto";
}

$respuesta_155 = isset($_POST['respuesta_155']) ? $_POST['respuesta_155'] : '';
if ($respuesta_155 === 'prototipos de interfaz de usuario') {  
    $verificar_155 = "correcto";
} elseif ($respuesta_155 === '') {
    $verificar_155 = '';
} else {
    $verificar_155 = "incorrecto";
}

$respuesta_156 = isset($_POST['respuesta_156']) ? $_POST['respuesta_156'] : '';
if ($respuesta_156 === 'baja') {  
    $verificar_156 = "correcto";
} elseif ($respuesta_156 === '') {
    $verificar_156 = '';
} else {
    $verificar_156 = "incorrecto";
}

$respuesta_157 = isset($_POST['respuesta_157']) ? $_POST['respuesta_157'] : '';
if ($respuesta_157 === 'alta fidelidad') {  
    $verificar_157 = "correcto";
} elseif ($respuesta_157 === '') {
    $verificar_157 = '';
} else {
    $verificar_157 = "incorrecto";
}

$respuesta_158 = isset($_POST['respuesta_158']) ? $_POST['respuesta_158'] : '';
if ($respuesta_158 === 'mapeo de historias de usuario') {  
    $verificar_158 = "correcto";
} elseif ($respuesta_158 === '') {
    $verificar_158 = '';
} else {
    $verificar_158 = "incorrecto";
}

$respuesta_159 = isset($_POST['respuesta_159']) ? $_POST['respuesta_159'] : '';
if ($respuesta_159 === 'dificil') {  
    $verificar_159 = "correcto";
} elseif ($respuesta_159 === '') {
    $verificar_159 = '';
} else {
    $verificar_159 = "incorrecto";
}

$respuesta_160 = isset($_POST['respuesta_160']) ? $_POST['respuesta_160'] : '';
if ($respuesta_160 === 'dificultades') {  
    $verificar_160 = "correcto";
} elseif ($respuesta_160 === '') {
    $verificar_160 = '';
} else {
    $verificar_160 = "incorrecto";
}

$respuesta_161 = isset($_POST['respuesta_161']) ? $_POST['respuesta_161'] : '';
if ($respuesta_161 === 'describir') {  
    $verificar_161 = "correcto";
} elseif ($respuesta_161 === '') {
    $verificar_161 = '';
} else {
    $verificar_161 = "incorrecto";
}

$respuesta_162 = isset($_POST['respuesta_162']) ? $_POST['respuesta_162'] : '';
if ($respuesta_162 === 'tareas') {  
    $verificar_162 = "correcto";
} elseif ($respuesta_162 === '') {
    $verificar_162 = '';
} else {
    $verificar_162 = "incorrecto";
}

$respuesta_163 = isset($_POST['respuesta_163']) ? $_POST['respuesta_163'] : '';
if ($respuesta_163 === 'omitir') {  
    $verificar_163 = "correcto";
} elseif ($respuesta_163 === '') {
    $verificar_163 = '';
} else {
    $verificar_163 = "incorrecto";
}

$respuesta_164 = isset($_POST['respuesta_164']) ? $_POST['respuesta_164'] : '';
if ($respuesta_164 === 'no estar dispuestos') {  
    $verificar_164 = "correcto";
} elseif ($respuesta_164 === '') {
    $verificar_164 = '';
} else {
    $verificar_164 = "incorrecto";
}

$respuesta_165 = isset($_POST['respuesta_165']) ? $_POST['respuesta_165'] : '';
if ($respuesta_165 === 'ser incapaces') {  
    $verificar_165 = "correcto";
} elseif ($respuesta_165 === '') {
    $verificar_165 = '';
} else {
    $verificar_165 = "incorrecto";
}

$respuesta_166 = isset($_POST['respuesta_166']) ? $_POST['respuesta_166'] : '';
if ($respuesta_166 === 'no es una actividad pasiva') {  
    $verificar_166 = "correcto";
} elseif ($respuesta_166 === '') {
    $verificar_166 = '';
} else {
    $verificar_166 = "incorrecto";
}

$respuesta_167 = isset($_POST['respuesta_167']) ? $_POST['respuesta_167'] : '';
if ($respuesta_167 === 'dispone') {  
    $verificar_167 = "correcto";
} elseif ($respuesta_167 === '') {
    $verificar_167 = '';
} else {
    $verificar_167 = "incorrecto";
}

$respuesta_168 = isset($_POST['respuesta_168']) ? $_POST['respuesta_168'] : '';
if ($respuesta_168 === 'cooperativos') {  
    $verificar_168 = "correcto";
} elseif ($respuesta_168 === '') {
    $verificar_168 = '';
} else {
    $verificar_168 = "incorrecto";
}

$respuesta_169 = isset($_POST['respuesta_169']) ? $_POST['respuesta_169'] : '';
if ($respuesta_169 === 'trabajar') {  
    $verificar_169 = "correcto";
} elseif ($respuesta_169 === '') {
    $verificar_169 = '';
} else {
    $verificar_169 = "incorrecto";
}

$respuesta_170 = isset($_POST['respuesta_170']) ? $_POST['respuesta_170'] : '';
if ($respuesta_170 === 'correcta') {  
    $verificar_170 = "correcto";
} elseif ($respuesta_170 === '') {
    $verificar_170 = '';
} else {
    $verificar_170 = "incorrecto";
}

$respuesta_171 = isset($_POST['respuesta_171']) ? $_POST['respuesta_171'] : '';
if ($respuesta_171 === 'producto') {  
    $verificar_171 = "correcto";
} elseif ($respuesta_171 === '') {
    $verificar_171 = '';
} else {
    $verificar_171 = "incorrecto";
}

$respuesta_172 = isset($_POST['respuesta_172']) ? $_POST['respuesta_172'] : '';
if ($respuesta_172 === 'tacitos') {  
    $verificar_172 = "correcto";
} elseif ($respuesta_172 === '') {
    $verificar_172 = '';
} else {
    $verificar_172 = "incorrecto";
}

$respuesta_173 = isset($_POST['respuesta_173']) ? $_POST['respuesta_173'] : '';
if ($respuesta_173 === 'aun no recopilada') {  
    $verificar_173 = "correcto";
} elseif ($respuesta_173 === '') {
    $verificar_173 = '';
} else {
    $verificar_173 = "incorrecto";
}

$respuesta_174 = isset($_POST['respuesta_174']) ? $_POST['respuesta_174'] : '';
if ($respuesta_174 === 'Los requerimientos tambien pueden obtenerse de fuentes distintas a las partes interesadas') {  
    $verificar_174 = "correcto";
} elseif ($respuesta_174 === '') {
    $verificar_174 = '';
} else {
    $verificar_174 = "incorrecto";
}

$respuesta_175 = isset($_POST['respuesta_175']) ? $_POST['respuesta_175'] : '';
if ($respuesta_175 === 'fuentes') {  
    $verificar_175 = "correcto";
} elseif ($respuesta_175 === '') {
    $verificar_175 = '';
} else {
    $verificar_175 = "incorrecto";
}

$respuesta_176 = isset($_POST['respuesta_176']) ? $_POST['respuesta_176'] : '';
if ($respuesta_176 === 'tecnicas incluyen') {  
    $verificar_176 = "correcto";
} elseif ($respuesta_176 === '') {
    $verificar_176 = '';
} else {
    $verificar_176 = "incorrecto";
}

$respuesta_177 = isset($_POST['respuesta_177']) ? $_POST['respuesta_177'] : '';
if ($respuesta_177 === 'versiones anteriores del sistema') {  
    $verificar_177 = "correcto";
} elseif ($respuesta_177 === '') {
    $verificar_177 = '';
} else {
    $verificar_177 = "incorrecto";
}

$respuesta_178 = isset($_POST['respuesta_178']) ? $_POST['respuesta_178'] : '';
if ($respuesta_178 === 'base de datos') {  
    $verificar_178 = "correcto";
} elseif ($respuesta_178 === '') {
    $verificar_178 = '';
} else {
    $verificar_178 = "incorrecto";
}

$respuesta_179 = isset($_POST['respuesta_179']) ? $_POST['respuesta_179'] : '';
if ($respuesta_179 === 'seguimiento de defectos de versiones anteriores del sistema') {  
    $verificar_179 = "correcto";
} elseif ($respuesta_179 === '') {
    $verificar_179 = '';
} else {
    $verificar_179 = "incorrecto";
}

$respuesta_180 = isset($_POST['respuesta_180']) ? $_POST['respuesta_180'] : '';
if ($respuesta_180 === 'otros sistemas') {  
    $verificar_180 = "correcto";
} elseif ($respuesta_180 === '') {
    $verificar_180 = '';
} else {
    $verificar_180 = "incorrecto";
}

$respuesta_181 = isset($_POST['respuesta_181']) ? $_POST['respuesta_181'] : '';
if ($respuesta_181 === 'interconectan') {  
    $verificar_181 = "correcto";
} elseif ($respuesta_181 === '') {
    $verificar_181 = '';
} else {
    $verificar_181 = "incorrecto";
}

$respuesta_182 = isset($_POST['respuesta_182']) ? $_POST['respuesta_182'] : '';
if ($respuesta_182 === 'sistema en desarrollo') {  
    $verificar_182 = "correcto";
} elseif ($respuesta_182 === '') {
    $verificar_182 = '';
} else {
    $verificar_182 = "incorrecto";
}

$respuesta_183 = isset($_POST['respuesta_183']) ? $_POST['respuesta_183'] : '';
if ($respuesta_183 === 'evaluacion comparativa con la competencia') {  
    $verificar_183 = "correcto";
} elseif ($respuesta_183 === '') {
    $verificar_183 = '';
} else {
    $verificar_183 = "incorrecto";
}

$respuesta_184 = isset($_POST['respuesta_184']) ? $_POST['respuesta_184'] : '';
if ($respuesta_184 === 'benchmarking') {  
    $verificar_184 = "correcto";
} elseif ($respuesta_184 === '') {
    $verificar_184 = '';
} else {
    $verificar_184 = "incorrecto";
}

$respuesta_185 = isset($_POST['respuesta_185']) ? $_POST['respuesta_185'] : '';
if ($respuesta_185 === 'busqueda en la literatura') {  
    $verificar_185 = "correcto";
} elseif ($respuesta_185 === '') {
    $verificar_185 = '';
} else {
    $verificar_185 = "incorrecto";
}

$respuesta_186 = isset($_POST['respuesta_186']) ? $_POST['respuesta_186'] : '';
if ($respuesta_186 === 'House of Quality del despliegue de la funcion calidad') {  
    $verificar_186 = "correcto";
} elseif ($respuesta_186 === '') {
    $verificar_186 = '';
} else {
    $verificar_186 = "incorrecto";
}

$respuesta_187 = isset($_POST['respuesta_187']) ? $_POST['respuesta_187'] : '';
if ($respuesta_187 === 'observacion') {  
    $verificar_187 = "correcto";
} elseif ($respuesta_187 === '') {
    $verificar_187 = '';
} else {
    $verificar_187 = "incorrecto";
}

$respuesta_188 = isset($_POST['respuesta_188']) ? $_POST['respuesta_188'] : '';
if ($respuesta_188 === 'ingeniero de software') {  
    $verificar_188 = "correcto";
} elseif ($respuesta_188 === '') {
    $verificar_188 = '';
} else {
    $verificar_188 = "incorrecto";
}

$respuesta_189 = isset($_POST['respuesta_189']) ? $_POST['respuesta_189'] : '';
if ($respuesta_189 === 'trabajo') {  
    $verificar_189 = "correcto";
} elseif ($respuesta_189 === '') {
    $verificar_189 = '';
} else {
    $verificar_189 = "incorrecto";
}

$respuesta_190 = isset($_POST['respuesta_190']) ? $_POST['respuesta_190'] : '';
if ($respuesta_190 === 'entorno') {  
    $verificar_190 = "correcto";
} elseif ($respuesta_190 === '') {
    $verificar_190 = '';
} else {
    $verificar_190 = "incorrecto";
}

$respuesta_191 = isset($_POST['respuesta_191']) ? $_POST['respuesta_191'] : '';
if ($respuesta_191 === 'realiza') {  
    $verificar_191 = "correcto";
} elseif ($respuesta_191 === '') {
    $verificar_191 = '';
} else {
    $verificar_191 = "incorrecto";
}

$respuesta_192 = isset($_POST['respuesta_192']) ? $_POST['respuesta_192'] : '';
if ($respuesta_192 === 'aprendizaje mediante practica') {  
    $verificar_192 = "correcto";
} elseif ($respuesta_192 === '') {
    $verificar_192 = '';
} else {
    $verificar_192 = "incorrecto";
}

$respuesta_193 = isset($_POST['respuesta_193']) ? $_POST['respuesta_193'] : '';
if ($respuesta_193 === 'ingeniero de software aprende realizando el trabajo') {  
    $verificar_193 = "correcto";
} elseif ($respuesta_193 === '') {
    $verificar_193 = '';
} else {
    $verificar_193 = "incorrecto";
}

$respuesta_194 = isset($_POST['respuesta_194']) ? $_POST['respuesta_194'] : '';
if ($respuesta_194 === 'descripciones de escenarios de uso') {  
    $verificar_194 = "correcto";
} elseif ($respuesta_194 === '') {
    $verificar_194 = '';
} else {
    $verificar_194 = "incorrecto";
}

$respuesta_195 = isset($_POST['respuesta_195']) ? $_POST['respuesta_195'] : '';
if ($respuesta_195 === 'descomposicion') {  
    $verificar_195 = "correcto";
} elseif ($respuesta_195 === '') {
    $verificar_195 = '';
} else {
    $verificar_195 = "incorrecto";
}

$respuesta_196 = isset($_POST['respuesta_196']) ? $_POST['respuesta_196'] : '';
if ($respuesta_196 === 'capacidades') {  
    $verificar_196 = "correcto";
} elseif ($respuesta_196 === '') {
    $verificar_196 = '';
} else {
    $verificar_196 = "incorrecto";
}

$respuesta_197 = isset($_POST['respuesta_197']) ? $_POST['respuesta_197'] : '';
if ($respuesta_197 === 'epicas') {  
    $verificar_197 = "correcto";
} elseif ($respuesta_197 === '') {
    $verificar_197 = '';
} else {
    $verificar_197 = "incorrecto";
}

$respuesta_198 = isset($_POST['respuesta_198']) ? $_POST['respuesta_198'] : '';
if ($respuesta_198 === 'caracteristicas'
|| $respuesta_198 === 'features'
) {  
    $verificar_198 = "correcto";
} elseif ($respuesta_198 === '') {
    $verificar_198 = '';
} else {
    $verificar_198 = "incorrecto";
}

$respuesta_199 = isset($_POST['respuesta_199']) ? $_POST['respuesta_199'] : '';
if ($respuesta_199 === 'historias') {  
    $verificar_199 = "correcto";
} elseif ($respuesta_199 === '') {
    $verificar_199 = '';
} else {
    $verificar_199 = "incorrecto";
}

$respuesta_200 = isset($_POST['respuesta_200']) ? $_POST['respuesta_200'] : '';
if ($respuesta_200 === 'analisis de tareas') {  
    $verificar_200 = "correcto";
} elseif ($respuesta_200 === '') {
    $verificar_200 = '';
} else {
    $verificar_200 = "incorrecto";
}

 
 

$respuesta_201 = isset($_POST['respuesta_201']) ? $_POST['respuesta_201'] : '';
if ($respuesta_201 === 'pensamiento de diseño') {
    $verificar_201 = "correcto";
} elseif ($respuesta_201 === '') {
    $verificar_201 = '';
} else {
    $verificar_201 = "incorrecto";
}

$respuesta_202 = isset($_POST['respuesta_202']) ? $_POST['respuesta_202'] : '';
if ($respuesta_202 === 'requerimientos de seguridad') {
    $verificar_202 = "correcto";
} elseif ($respuesta_202 === '') {
    $verificar_202 = '';
} else {
    $verificar_202 = "incorrecto";
}

$respuesta_203 = isset($_POST['respuesta_203']) ? $_POST['respuesta_203'] : '';
if ($respuesta_203 === 'Seguridad') {
    $verificar_203 = "correcto";
} elseif ($respuesta_203 === '') {
    $verificar_203 = '';
} else {
    $verificar_203 = "incorrecto";
}

$respuesta_204 = isset($_POST['respuesta_204']) ? $_POST['respuesta_204'] : '';
if ($respuesta_204 === 'normas y regulaciones aplicables') {
    $verificar_204 = "correcto";
} elseif ($respuesta_204 === '') {
    $verificar_204 = '';
} else {
    $verificar_204 = "incorrecto";
}

$respuesta_205 = isset($_POST['respuesta_205']) ? $_POST['respuesta_205'] : '';
if ($respuesta_205 === 'Analisis de requerimientos') {
    $verificar_205 = "correcto";
} elseif ($respuesta_205 === '') {
    $verificar_205 = '';
} else {
    $verificar_205 = "incorrecto";
}

$respuesta_206 = isset($_POST['respuesta_206']) ? $_POST['respuesta_206'] : '';
if ($respuesta_206 === 'Es poco probable que los requerimientos se obtengan en su forma final') {
    $verificar_206 = "correcto";
} elseif ($respuesta_206 === '') {
    $verificar_206 = '';
} else {
    $verificar_206 = "incorrecto";
}

$respuesta_207 = isset($_POST['respuesta_207']) ? $_POST['respuesta_207'] : '';
if ($respuesta_207 === 'Normalmente') {
    $verificar_207 = "correcto";
} elseif ($respuesta_207 === '') {
    $verificar_207 = '';
} else {
    $verificar_207 = "incorrecto";
}

$respuesta_208 = isset($_POST['respuesta_208']) ? $_POST['respuesta_208'] : '';
if ($respuesta_208 === 'investigacion adicional') {
    $verificar_208 = "correcto";
} elseif ($respuesta_208 === '') {
    $verificar_208 = '';
} else {
    $verificar_208 = "incorrecto";
}

$respuesta_209 = isset($_POST['respuesta_209']) ? $_POST['respuesta_209'] : '';
if ($respuesta_209 === 'requerimientos verdaderos') {
    $verificar_209 = "correcto";
} elseif ($respuesta_209 === '') {
    $verificar_209 = '';
} else {
    $verificar_209 = "incorrecto";
}

$respuesta_210 = isset($_POST['respuesta_210']) ? $_POST['respuesta_210'] : '';
if ($respuesta_210 === 'sugeridos') {
    $verificar_210 = "correcto";
} elseif ($respuesta_210 === '') {
    $verificar_210 = '';
} else {
    $verificar_210 = "incorrecto";
}

$respuesta_211 = isset($_POST['respuesta_211']) ? $_POST['respuesta_211'] : '';
if ($respuesta_211 === 'informacion') {
    $verificar_211 = "correcto";
} elseif ($respuesta_211 === '') {
    $verificar_211 = '';
} else {
    $verificar_211 = "incorrecto";
}

$respuesta_212 = isset($_POST['respuesta_212']) ? $_POST['respuesta_212'] : '';
if ($respuesta_212 === 'elicitada') {
    $verificar_212 = "correcto";
} elseif ($respuesta_212 === '') {
    $verificar_212 = '';
} else {
    $verificar_212 = "incorrecto";
}

$respuesta_213 = isset($_POST['respuesta_213']) ? $_POST['respuesta_213'] : '';
if ($respuesta_213 === 'ayuda') {
    $verificar_213 = "correcto";
} elseif ($respuesta_213 === '') {
    $verificar_213 = '';
} else {
    $verificar_213 = "incorrecto";
}

$respuesta_214 = isset($_POST['respuesta_214']) ? $_POST['respuesta_214'] : '';
if ($respuesta_214 === 'desarrolladores') {
    $verificar_214 = "correcto";
} elseif ($respuesta_214 === '') {
    $verificar_214 = '';
} else {
    $verificar_214 = "incorrecto";
}

$respuesta_215 = isset($_POST['respuesta_215']) ? $_POST['respuesta_215'] : '';
if ($respuesta_215 === 'comprender') {
    $verificar_215 = "correcto";
} elseif ($respuesta_215 === '') {
    $verificar_215 = '';
} else {
    $verificar_215 = "incorrecto";
}

$respuesta_216 = isset($_POST['respuesta_216']) ? $_POST['respuesta_216'] : '';
if ($respuesta_216 === 'significado') {
    $verificar_216 = "correcto";
} elseif ($respuesta_216 === '') {
    $verificar_216 = '';
} else {
    $verificar_216 = "incorrecto";
}

$respuesta_217 = isset($_POST['respuesta_217']) ? $_POST['respuesta_217'] : '';
if ($respuesta_217 === 'implicaciones') {
    $verificar_217 = "correcto";
} elseif ($respuesta_217 === '') {
    $verificar_217 = '';
} else {
    $verificar_217 = "incorrecto";
}

$respuesta_218 = isset($_POST['respuesta_218']) ? $_POST['respuesta_218'] : '';
if ($respuesta_218 === 'requerimientos candidatos') {
    $verificar_218 = "correcto";
} elseif ($respuesta_218 === '') {
    $verificar_218 = '';
} else {
    $verificar_218 = "incorrecto";
}

$respuesta_219 = isset($_POST['respuesta_219']) ? $_POST['respuesta_219'] : '';
if ($respuesta_219 === 'individualmente') {
    $verificar_219 = "correcto";
} elseif ($respuesta_219 === '') {
    $verificar_219 = '';
} else {
    $verificar_219 = "incorrecto";
}

$respuesta_220 = isset($_POST['respuesta_220']) ? $_POST['respuesta_220'] : '';
if ($respuesta_220 === 'contexto') {
    $verificar_220 = "correcto";
} elseif ($respuesta_220 === '') {
    $verificar_220 = '';
} else {
    $verificar_220 = "incorrecto";
}

$respuesta_221 = isset($_POST['respuesta_221']) ? $_POST['respuesta_221'] : '';
if ($respuesta_221 === 'conjunto completo de requerimientos') {
    $verificar_221 = "correcto";
} elseif ($respuesta_221 === '') {
    $verificar_221 = '';
} else {
    $verificar_221 = "incorrecto";
}

$respuesta_222 = isset($_POST['respuesta_222']) ? $_POST['respuesta_222'] : '';
if ($respuesta_222 === 'propiedades deseables') {
    $verificar_222 = "correcto";
} elseif ($respuesta_222 === '') {
    $verificar_222 = '';
} else {
    $verificar_222 = "incorrecto";
}

$respuesta_223 = isset($_POST['respuesta_223']) ? $_POST['respuesta_223'] : '';
if ($respuesta_223 === 'requerimientos') {
    $verificar_223 = "correcto";
} elseif ($respuesta_223 === '') {
    $verificar_223 = '';
} else {
    $verificar_223 = "incorrecto";
}

$respuesta_224 = isset($_POST['respuesta_224']) ? $_POST['respuesta_224'] : '';
if ($respuesta_224 === 'analisis basico') {
    $verificar_224 = "correcto";
} elseif ($respuesta_224 === '') {
    $verificar_224 = '';
} else {
    $verificar_224 = "incorrecto";
}

$respuesta_225 = isset($_POST['respuesta_225']) ? $_POST['respuesta_225'] : '';
if ($respuesta_225 === 'establecer cualquiera') {
    $verificar_225 = "correcto";
} elseif ($respuesta_225 === '') {
    $verificar_225 = '';
} else {
    $verificar_225 = "incorrecto";
}

$respuesta_226 = isset($_POST['respuesta_226']) ? $_POST['respuesta_226'] : '';
if ($respuesta_226 === 'propiedades') {
    $verificar_226 = "correcto";
} elseif ($respuesta_226 === '') {
    $verificar_226 = '';
} else {
    $verificar_226 = "incorrecto";
}

$respuesta_227 = isset($_POST['respuesta_227']) ? $_POST['respuesta_227'] : '';
if ($respuesta_227 === 'aun no se cumplan') {
    $verificar_227 = "correcto";
} elseif ($respuesta_227 === '') {
    $verificar_227 = '';
} else {
    $verificar_227 = "incorrecto";
}

$respuesta_228 = isset($_POST['respuesta_228']) ? $_POST['respuesta_228'] : '';
if ($respuesta_228 === 'ser inequivoco') {
    $verificar_228 = "correcto";
} elseif ($respuesta_228 === '') {
    $verificar_228 = '';
} else {
    $verificar_228 = "incorrecto";
}

$respuesta_229 = isset($_POST['respuesta_229']) ? $_POST['respuesta_229'] : '';
if ($respuesta_229 === 'interpretado de una sola manera') {
    $verificar_229 = "correcto";
} elseif ($respuesta_229 === '') {
    $verificar_229 = '';
} else {
    $verificar_229 = "incorrecto";
}

$respuesta_230 = isset($_POST['respuesta_230']) ? $_POST['respuesta_230'] : '';
if ($respuesta_230 === 'ser comprobable') {
    $verificar_230 = "correcto";
} elseif ($respuesta_230 === '') {
    $verificar_230 = '';
} else {
    $verificar_230 = "incorrecto";
}

$respuesta_231 = isset($_POST['respuesta_231']) ? $_POST['respuesta_231'] : '';
if ($respuesta_231 === 'cuantificado') {
    $verificar_231 = "correcto";
} elseif ($respuesta_231 === '') {
    $verificar_231 = '';
} else {
    $verificar_231 = "incorrecto";
}

$respuesta_232 = isset($_POST['respuesta_232']) ? $_POST['respuesta_232'] : '';
if ($respuesta_232 === 'demostrar claramente') {
    $verificar_232 = "correcto";
} elseif ($respuesta_232 === '') {
    $verificar_232 = '';
} else {
    $verificar_232 = "incorrecto";
}

$respuesta_233 = isset($_POST['respuesta_233']) ? $_POST['respuesta_233'] : '';
if ($respuesta_233 === 'cumplimiento') {
    $verificar_233 = "correcto";
} elseif ($respuesta_233 === '') {
    $verificar_233 = '';
} else {
    $verificar_233 = "incorrecto";
}

$respuesta_234 = isset($_POST['respuesta_234']) ? $_POST['respuesta_234'] : '';
if ($respuesta_234 === 'incumplimiento') {
    $verificar_234 = "correcto";
} elseif ($respuesta_234 === '') {
    $verificar_234 = '';
} else {
    $verificar_234 = "incorrecto";
}

$respuesta_235 = isset($_POST['respuesta_235']) ? $_POST['respuesta_235'] : '';
if ($respuesta_235 === 'ser vinculante') {
    $verificar_235 = "correcto";
} elseif ($respuesta_235 === '') {
    $verificar_235 = '';
} else {
    $verificar_235 = "incorrecto";
}

$respuesta_236 = isset($_POST['respuesta_236']) ? $_POST['respuesta_236'] : '';
if ($respuesta_236 === 'significa') {
    $verificar_236 = "correcto";
} elseif ($respuesta_236 === '') {
    $verificar_236 = '';
} else {
    $verificar_236 = "incorrecto";
}

$respuesta_237 = isset($_POST['respuesta_237']) ? $_POST['respuesta_237'] : '';
if ($respuesta_237 === 'clientes') {
    $verificar_237 = "correcto";
} elseif ($respuesta_237 === '') {
    $verificar_237 = '';
} else {
    $verificar_237 = "incorrecto";
}

$respuesta_238 = isset($_POST['respuesta_238']) ? $_POST['respuesta_238'] : '';
if ($respuesta_238 === 'dispuestos') {
    $verificar_238 = "correcto";
} elseif ($respuesta_238 === '') {
    $verificar_238 = '';
} else {
    $verificar_238 = "incorrecto";
}

$respuesta_239 = isset($_POST['respuesta_239']) ? $_POST['respuesta_239'] : '';
if ($respuesta_239 === 'no dispuestos') {
    $verificar_239 = "correcto";
} elseif ($respuesta_239 === '') {
    $verificar_239 = '';
} else {
    $verificar_239 = "incorrecto";
}

$respuesta_240 = isset($_POST['respuesta_240']) ? $_POST['respuesta_240'] : '';
if ($respuesta_240 === 'prescindir de el') {
    $verificar_240 = "correcto";
} elseif ($respuesta_240 === '') {
    $verificar_240 = '';
} else {
    $verificar_240 = "incorrecto";
}

$respuesta_241 = isset($_POST['respuesta_241']) ? $_POST['respuesta_241'] : '';
if ($respuesta_241 === 'ser atomico') {
    $verificar_241 = "correcto";
} elseif ($respuesta_241 === '') {
    $verificar_241 = '';
} else {
    $verificar_241 = "incorrecto";
}

$respuesta_242 = isset($_POST['respuesta_242']) ? $_POST['respuesta_242'] : '';
if ($respuesta_242 === 'representar una sola decision') {
    $verificar_242 = "correcto";
} elseif ($respuesta_242 === '') {
    $verificar_242 = '';
} else {
    $verificar_242 = "incorrecto";
}

$respuesta_243 = isset($_POST['respuesta_243']) ? $_POST['respuesta_243'] : '';
if ($respuesta_243 === 'representar necesidades reales') {
    $verificar_243 = "correcto";
} elseif ($respuesta_243 === '') {
    $verificar_243 = '';
} else {
    $verificar_243 = "incorrecto";
}

$respuesta_244 = isset($_POST['respuesta_244']) ? $_POST['respuesta_244'] : '';
if ($respuesta_244 === 'verdaderas') {
    $verificar_244 = "correcto";
} elseif ($respuesta_244 === '') {
    $verificar_244 = '';
} else {
    $verificar_244 = "incorrecto";
}

$respuesta_245 = isset($_POST['respuesta_245']) ? $_POST['respuesta_245'] : '';
if ($respuesta_245 === 'interesados') {
    $verificar_245 = "correcto";
} elseif ($respuesta_245 === '') {
    $verificar_245 = '';
} else {
    $verificar_245 = "incorrecto";
}

$respuesta_246 = isset($_POST['respuesta_246']) ? $_POST['respuesta_246'] : '';
if ($respuesta_246 === 'stakeholders') {
    $verificar_246 = "correcto";
} elseif ($respuesta_246 === '') {
    $verificar_246 = '';
} else {
    $verificar_246 = "incorrecto";
}

$respuesta_247 = isset($_POST['respuesta_247']) ? $_POST['respuesta_247'] : '';
if ($respuesta_247 === 'usar') {
    $verificar_247 = "correcto";
} elseif ($respuesta_247 === '') {
    $verificar_247 = '';
} else {
    $verificar_247 = "incorrecto";
}

$respuesta_248 = isset($_POST['respuesta_248']) ? $_POST['respuesta_248'] : '';
if ($respuesta_248 === 'vocabulario') {
    $verificar_248 = "correcto";
} elseif ($respuesta_248 === '') {
    $verificar_248 = '';
} else {
    $verificar_248 = "incorrecto";
}

$respuesta_249 = isset($_POST['respuesta_249']) ? $_POST['respuesta_249'] : '';
if ($respuesta_249 === 'interesados') {
    $verificar_249 = "correcto";
} elseif ($respuesta_249 === '') {
    $verificar_249 = '';
} else {
    $verificar_249 = "incorrecto";
}

$respuesta_250 = isset($_POST['respuesta_250']) ? $_POST['respuesta_250'] : '';
if ($respuesta_250 === 'ser aceptable') {
    $verificar_250 = "correcto";
} elseif ($respuesta_250 === '') {
    $verificar_250 = '';
} else {
    $verificar_250 = "incorrecto";
}

$respuesta_251 = isset($_POST['respuesta_251']) ? $_POST['respuesta_251'] : '';
if ($respuesta_251 === 'todos los interesados') {
    $verificar_251 = "correcto";
} elseif ($respuesta_251 === '') {
    $verificar_251 = '';
} else {
    $verificar_251 = "incorrecto";
}

$respuesta_252 = isset($_POST['respuesta_252']) ? $_POST['respuesta_252'] : '';
if ($respuesta_252 === 'El conjunto completo de requerimientos') {
    $verificar_252 = "correcto";
} elseif ($respuesta_252 === '') {
    $verificar_252 = '';
} else {
    $verificar_252 = "incorrecto";
}

$respuesta_253 = isset($_POST['respuesta_253']) ? $_POST['respuesta_253'] : '';
if ($respuesta_253 === 'completo') {
    $verificar_253 = "correcto";
} elseif ($respuesta_253 === '') {
    $verificar_253 = '';
} else {
    $verificar_253 = "incorrecto";
}

$respuesta_254 = isset($_POST['respuesta_254']) ? $_POST['respuesta_254'] : '';
if ($respuesta_254 === 'abordan') {
    $verificar_254 = "correcto";
} elseif ($respuesta_254 === '') {
    $verificar_254 = '';
} else {
    $verificar_254 = "incorrecto";
}

$respuesta_255 = isset($_POST['respuesta_255']) ? $_POST['respuesta_255'] : '';
if ($respuesta_255 === 'condiciones limite') {
    $verificar_255 = "correcto";
} elseif ($respuesta_255 === '') {
    $verificar_255 = '';
} else {
    $verificar_255 = "incorrecto";
}

$respuesta_256 = isset($_POST['respuesta_256']) ? $_POST['respuesta_256'] : '';
if ($respuesta_256 === 'las condiciones excepcionales') {
    $verificar_256 = "correcto";
} elseif ($respuesta_256 === '') {
    $verificar_256 = '';
} else {
    $verificar_256 = "incorrecto";
}

$respuesta_257 = isset($_POST['respuesta_257']) ? $_POST['respuesta_257'] : '';
if ($respuesta_257 === 'las necesidades de seguridad') {
    $verificar_257 = "correcto";
} elseif ($respuesta_257 === '') {
    $verificar_257 = '';
} else {
    $verificar_257 = "incorrecto";
}

$respuesta_258 = isset($_POST['respuesta_258']) ? $_POST['respuesta_258'] : '';
if ($respuesta_258 === 'conciso') {
    $verificar_258 = "correcto";
} elseif ($respuesta_258 === '') {
    $verificar_258 = '';
} else {
    $verificar_258 = "incorrecto";
}

$respuesta_259 = isset($_POST['respuesta_259']) ? $_POST['respuesta_259'] : '';
if ($respuesta_259 === 'No contiene contenido innecesario') {
    $verificar_259 = "correcto";
} elseif ($respuesta_259 === '') {
    $verificar_259 = '';
} else {
    $verificar_259 = "incorrecto";
}

$respuesta_260 = isset($_POST['respuesta_260']) ? $_POST['respuesta_260'] : '';
if ($respuesta_260 === 'internamente consistente') {
    $verificar_260 = "correcto";
} elseif ($respuesta_260 === '') {
    $verificar_260 = '';
} else {
    $verificar_260 = "incorrecto";
}

$respuesta_261 = isset($_POST['respuesta_261']) ? $_POST['respuesta_261'] : '';
if ($respuesta_261 === 'Ningun requerimiento entra en conflicto con otro') {
    $verificar_261 = "correcto";
} elseif ($respuesta_261 === '') {
    $verificar_261 = '';
} else {
    $verificar_261 = "incorrecto";
}

$respuesta_262 = isset($_POST['respuesta_262']) ? $_POST['respuesta_262'] : '';
if ($respuesta_262 === 'externamente consistente') {
    $verificar_262 = "correcto";
} elseif ($respuesta_262 === '') {
    $verificar_262 = '';
} else {
    $verificar_262 = "incorrecto";
}

$respuesta_263 = isset($_POST['respuesta_263']) ? $_POST['respuesta_263'] : '';
if ($respuesta_263 === 'Ningun requerimiento entra en conflicto con el material fuente') {
    $verificar_263 = "correcto";
} elseif ($respuesta_263 === '') {
    $verificar_263 = '';
} else {
    $verificar_263 = "incorrecto";
}

$respuesta_264 = isset($_POST['respuesta_264']) ? $_POST['respuesta_264'] : '';
if ($respuesta_264 === 'factible') {
    $verificar_264 = "correcto";
} elseif ($respuesta_264 === '') {
    $verificar_264 = '';
} else {
    $verificar_264 = "incorrecto";
}

$respuesta_265 = isset($_POST['respuesta_265']) ? $_POST['respuesta_265'] : '';
if ($respuesta_265 === 'posible') {
    $verificar_265 = "correcto";
} elseif ($respuesta_265 === '') {
    $verificar_265 = '';
} else {
    $verificar_265 = "incorrecto";
}

$respuesta_266 = isset($_POST['respuesta_266']) ? $_POST['respuesta_266'] : '';
if ($respuesta_266 === 'viable') {
    $verificar_266 = "correcto";
} elseif ($respuesta_266 === '') {
    $verificar_266 = '';
} else {
    $verificar_266 = "incorrecto";
}

$respuesta_267 = isset($_POST['respuesta_267']) ? $_POST['respuesta_267'] : '';
if ($respuesta_267 === 'rentable') {
    $verificar_267 = "correcto";
} elseif ($respuesta_267 === '') {
    $verificar_267 = '';
} else {
    $verificar_267 = "incorrecto";
}

$respuesta_268 = isset($_POST['respuesta_268']) ? $_POST['respuesta_268'] : '';
if ($respuesta_268 === 'restricciones') {
    $verificar_268 = "correcto";
} elseif ($respuesta_268 === '') {
    $verificar_268 = '';
} else {
    $verificar_268 = "incorrecto";
}

$respuesta_269 = isset($_POST['respuesta_269']) ? $_POST['respuesta_269'] : '';
if ($respuesta_269 === 'costo') {
    $verificar_269 = "correcto";
} elseif ($respuesta_269 === '') {
    $verificar_269 = '';
} else {
    $verificar_269 = "incorrecto";
}

$respuesta_270 = isset($_POST['respuesta_270']) ? $_POST['respuesta_270'] : '';
if ($respuesta_270 === 'cronograma') {
    $verificar_270 = "correcto";
} elseif ($respuesta_270 === '') {
    $verificar_270 = '';
} else {
    $verificar_270 = "incorrecto";
}

$respuesta_271 = isset($_POST['respuesta_271']) ? $_POST['respuesta_271'] : '';
if ($respuesta_271 === 'personal') {
    $verificar_271 = "correcto";
} elseif ($respuesta_271 === '') {
    $verificar_271 = '';
} else {
    $verificar_271 = "incorrecto";
}

$respuesta_272 = isset($_POST['respuesta_272']) ? $_POST['respuesta_272'] : '';
if ($respuesta_272 === 'entre otras') {
    $verificar_272 = "correcto";
} elseif ($respuesta_272 === '') {
    $verificar_272 = '';
} else {
    $verificar_272 = "incorrecto";
}

$respuesta_273 = isset($_POST['respuesta_273']) ? $_POST['respuesta_273'] : '';
if ($respuesta_273 === 'declaracion elicitada') {
    $verificar_273 = "correcto";
} elseif ($respuesta_273 === '') {
    $verificar_273 = '';
} else {
    $verificar_273 = "incorrecto";
}

$respuesta_274 = isset($_POST['respuesta_274']) ? $_POST['respuesta_274'] : '';
if ($respuesta_274 === 'solucion') {
    $verificar_274 = "correcto";
} elseif ($respuesta_274 === '') {
    $verificar_274 = '';
} else {
    $verificar_274 = "incorrecto";
}

$respuesta_275 = isset($_POST['respuesta_275']) ? $_POST['respuesta_275'] : '';
if ($respuesta_275 === 'verdadero') {
    $verificar_275 = "correcto";
} elseif ($respuesta_275 === '') {
    $verificar_275 = '';
} else {
    $verificar_275 = "incorrecto";
}

$respuesta_276 = isset($_POST['respuesta_276']) ? $_POST['respuesta_276'] : '';
if ($respuesta_276 === 'resolver') {
    $verificar_276 = "correcto";
} elseif ($respuesta_276 === '') {
    $verificar_276 = '';
} else {
    $verificar_276 = "incorrecto";
}

$respuesta_277 = isset($_POST['respuesta_277']) ? $_POST['respuesta_277'] : '';
if ($respuesta_277 === 'riesgo') {
    $verificar_277 = "correcto";
} elseif ($respuesta_277 === '') {
    $verificar_277 = '';
} else {
    $verificar_277 = "incorrecto";
}

$respuesta_278 = isset($_POST['respuesta_278']) ? $_POST['respuesta_278'] : '';
if ($respuesta_278 === 'implementar') {
    $verificar_278 = "correcto";
} elseif ($respuesta_278 === '') {
    $verificar_278 = '';
} else {
    $verificar_278 = "incorrecto";
}

$respuesta_279 = isset($_POST['respuesta_279']) ? $_POST['respuesta_279'] : '';
if ($respuesta_279 === 'solucion suboptima') {
    $verificar_279 = "correcto";
} elseif ($respuesta_279 === '') {
    $verificar_279 = '';
} else {
    $verificar_279 = "incorrecto";
}

$respuesta_280 = isset($_POST['respuesta_280']) ? $_POST['respuesta_280'] : '';
if ($respuesta_280 === 'preguntar') {
    $verificar_280 = "correcto";
} elseif ($respuesta_280 === '') {
    $verificar_280 = '';
} else {
    $verificar_280 = "incorrecto";
}


$respuesta_281 = isset($_POST['respuesta_281']) ? $_POST['respuesta_281'] : '';
if ($respuesta_281 === 'requerimiento') {
    $verificar_281 = "correcto";
} elseif ($respuesta_281 === '') {
    $verificar_281 = '';
} else {
    $verificar_281 = "incorrecto";
}

$respuesta_282 = isset($_POST['respuesta_282']) ? $_POST['respuesta_282'] : '';
if ($respuesta_282 === 'verdadero') {
    $verificar_282 = "correcto";
} elseif ($respuesta_282 === '') {
    $verificar_282 = '';
} else {
    $verificar_282 = "incorrecto";
}

$respuesta_283 = isset($_POST['respuesta_283']) ? $_POST['respuesta_283'] : '';
if ($respuesta_283 === 'Si eso no se hace') {
    $verificar_283 = "correcto";
} elseif ($respuesta_283 === '') {
    $verificar_283 = '';
} else {
    $verificar_283 = "incorrecto";
}

$respuesta_284 = isset($_POST['respuesta_284']) ? $_POST['respuesta_284'] : '';
if ($respuesta_284 === 'problema') {
    $verificar_284 = "correcto";
} elseif ($respuesta_284 === '') {
    $verificar_284 = '';
} else {
    $verificar_284 = "incorrecto";
}

$respuesta_285 = isset($_POST['respuesta_285']) ? $_POST['respuesta_285'] : '';
if ($respuesta_285 === 'interesado no se resuelve') {
    $verificar_285 = "correcto";
} elseif ($respuesta_285 === '') {
    $verificar_285 = '';
} else {
    $verificar_285 = "incorrecto";
}

$respuesta_286 = isset($_POST['respuesta_286']) ? $_POST['respuesta_286'] : '';
if ($respuesta_286 === '286') {
    $verificar_286 = "correcto";
} elseif ($respuesta_286 === '') {
    $verificar_286 = '';
} else {
    $verificar_286 = "incorrecto";
}

$respuesta_287 = isset($_POST['respuesta_287']) ? $_POST['respuesta_287'] : '';
if ($respuesta_287 === '287') {
    $verificar_287 = "correcto";
} elseif ($respuesta_287 === '') {
    $verificar_287 = '';
} else {
    $verificar_287 = "incorrecto";
}

$respuesta_288 = isset($_POST['respuesta_288']) ? $_POST['respuesta_288'] : '';
if ($respuesta_288 === '288') {
    $verificar_288 = "correcto";
} elseif ($respuesta_288 === '') {
    $verificar_288 = '';
} else {
    $verificar_288 = "incorrecto";
}

$respuesta_289 = isset($_POST['respuesta_289']) ? $_POST['respuesta_289'] : '';
if ($respuesta_289 === '289') {
    $verificar_289 = "correcto";
} elseif ($respuesta_289 === '') {
    $verificar_289 = '';
} else {
    $verificar_289 = "incorrecto";
}

$respuesta_290 = isset($_POST['respuesta_290']) ? $_POST['respuesta_290'] : '';
if ($respuesta_290 === '290') {
    $verificar_290 = "correcto";
} elseif ($respuesta_290 === '') {
    $verificar_290 = '';
} else {
    $verificar_290 = "incorrecto";
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

<form action="./quinto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 

   <h3>1.10. Requerimientos <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="9"></h3>
    <p>
    <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="9">    
    , 
    <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="75">
    .  
    <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="18">
     puede 
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
      un requerimiento de 
    <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="8">
     , y 
    <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="8">
      un requerimiento 
    <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="8">
      el proyecto, incluso si ese proyecto 
    <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="8">
      a 
    <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">
      de 
    <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="8">
      de 
    <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">
     . La 
    <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="8">
      de un arquitecto de usar un 
    <input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8">
      de arquitectura de tuberías y filtros 
    <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="8">
      requerimiento desde la perspectiva de los interesados generales del 
    proyecto, 
    <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="8">
     decisión  
    <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="8">
       . Pero esa misma decisión, 
    <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="8">
      desde la 
    <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="8">
      de un subequipo responsable de construir un filtro en particular, se 
    <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="8">
      un requerimiento.</p>

    <p>La industria aeroespacial ha usado durante mucho tiempo el término requerimiento 
    <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">    
      para referirse a un 
    requerimiento que 
    <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="12">
      por un 
    <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="15">
      al proyecto general, sino que fue 
    <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="8">
      dentro del equipo de 
    <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="18">
     . La decisión del arquitecto sobre tuberías y filtros 
    <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="8">
      con esta definición. Esa elección sería vista como una
    <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8">
      de 
    <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="8">
      desde el 
    <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="10">
      de los 
    <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="15">
     , 
    <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="8">
      un 
    <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="10">
      para los subequipos responsables de desarrollar cada filtro. (Ver también [9, c4].)</p>

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

    <hr>
    <h3>1.11. Actividades de Requisitos de Software [1*, c1pp15-18] [2*, s4.2]</h3>
    <p>La Figura 1.3 muestra las 
    <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="8">    
      de 
    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8">
      y 
    <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="8">
      de requerimientos. El 
    <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="8">
      de requerimientos, en 
    su conjunto, puede 
    <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="8">
      como “
    <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="50">
     ”. En cambio, la 
    <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="8">
      de requerimientos puede 
    <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="8">
      como “
    <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="40">
    ”. Cada 
    <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="8">
      se presenta en esta área de conocimiento. Las actividades de 
    <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="8">
      de 
    requerimientos se presentan como temas separados, 
    mientras que la 
    <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="8">
      de requerimientos se presenta como un solo tema. (Ver también [5, c1] [6, 2].)</p>

    <h2>2. 
    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="24">    
      [1*, c6-7] [2*, s4.3]</h2>
    <p>
    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="90">    
    . También se la denomina 
    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="8"> 
     de requerimientos, 
     <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="11">
       de requerimientos o 
     <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="8">
       de requerimientos. Como se indicó anteriormente, 
    uno de los problemas en el trabajo de requerimientos en proyectos de software del mundo real es la 
    <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="11">
     . 
    Esto puede ser el resultado de una elicitación 
    <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="8">
     . Aunque no hay garantía de que un conjunto de requerimientos 
    sea completo, una elicitación 
    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="8">
      ejecutada ayuda a 
    <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="8">
      la 
    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="11">
     . (Ver también [5, c2-3] [6, c3-7].)</p>

    <br>
    <button type="submit">Enviar</button>
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
    <br>
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
    <hr>
    <h3>2.1. Fuentes de Requerimientos [1*, c6] [2*, s4.3]</h3>
    <p>  
    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="25">    
      —pueden ser elicitados—   
    <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="25">
       . 
    <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="5">
       
    <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="17">
       
    <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="21">
        
    <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="8">
      y 
    <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="8">
     . 
    <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="8">
      puede 
    <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="8">
      como cualquier 
    <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="8">
     , 
    <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8">
      u 
    <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="8">
      que:</p>
    <ul>
    <li>  
    <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="29">     
    <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="4">
     ;</li>
    <li>  
    <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="11">    
        
    <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="11">
        
    <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="8">
     ;</li>
    <li>
    <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="13">    
        
    <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="5">
        
    <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="8">
     .</li>
    </ul>

    <p>Los actores típicos en proyectos de software incluyen, pero no se 
    <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="8">    
      a los siguientes:</p>
    <ul>
    <li>
    <input type="text" name="respuesta_76" value="<?php echo $respuesta_76; ?>" size="8">    
      — aquellos que pagan por la construcción del software (por ejemplo, la gerencia de la organización);</li>
    <li>
    <input type="text" name="respuesta_77" value="<?php echo $respuesta_77; ?>" size="8">    
      — aquellos que deciden si un producto de software será puesto en servicio;</li>
    <li>
    <input type="text" name="respuesta_78" value="<?php echo $respuesta_78; ?>" size="8">    
      — aquellos que interactúan directa o indirectamente con el software; los usuarios a menudo pueden 
    subdividirse en clases de usuarios distintas que varían en frecuencia de uso, tareas realizadas, nivel de 
    habilidad y conocimiento, nivel de privilegio, etc.;</li>
    <li>
    <input type="text" name="respuesta_79" value="<?php echo $respuesta_79; ?>" size="20">    
      (SMEs);</li>
    <li>
    <input type="text" name="respuesta_80" value="<?php echo $respuesta_80; ?>" size="20">    
     ;</li>
    <li>
    <input type="text" name="respuesta_81" value="<?php echo $respuesta_81; ?>" size="15">    
      de producto de primer nivel;</li>
    <li>
    <input type="text" name="respuesta_82" value="<?php echo $respuesta_82; ?>" size="20">    
      relevantes;</li>
    <li>
    <input type="text" name="respuesta_83" value="<?php echo $respuesta_83; ?>" size="20">    
     ;</li>
    <li>
    <input type="text" name="respuesta_84" value="<?php echo $respuesta_84; ?>" size="15">    
      especial;</li>
    <li>
    <input type="text" name="respuesta_85" value="<?php echo $respuesta_85; ?>" size="8">    
      que podrían verse 
    <input type="text" name="respuesta_86" value="<?php echo $respuesta_86; ?>" size="10">
      afectadas si el proyecto tiene éxito;</li>
    <li>
    <input type="text" name="respuesta_87" value="<?php echo $respuesta_87; ?>" size="10">    
     .</li>
    </ul>

    <button type="submit">Enviar</button>
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
    <?php echo $verificar_83 ?>
    <?php echo $verificar_84 ?>
    <?php echo $verificar_85 ?>
    <?php echo $verificar_86 ?>
    <?php echo $verificar_87 ?>

    <hr>



    <p>  
    <input type="text" name="respuesta_88" value="<?php echo $respuesta_88; ?>" size="8">    
        
    <input type="text" name="respuesta_89" value="<?php echo $respuesta_89; ?>" size="4">
        
    <input type="text" name="respuesta_90" value="<?php echo $respuesta_90; ?>" size="17">
        
    <input type="text" name="respuesta_91" value="<?php echo $respuesta_91; ?>" size="43">
       . 
      
    <input type="text" name="respuesta_92" value="<?php echo $respuesta_92; ?>" size="45">
      
    <input type="text" name="respuesta_93" value="<?php echo $respuesta_93; ?>" size="28">
        
    <input type="text" name="respuesta_94" value="<?php echo $respuesta_94; ?>" size="15">
        
    <input type="text" name="respuesta_95" value="<?php echo $respuesta_95; ?>" size="12">
        
    <input type="text" name="respuesta_96" value="<?php echo $respuesta_96; ?>" size="29">
       .</p>

    <p>  
    <input type="text" name="respuesta_97" value="<?php echo $respuesta_97; ?>" size="14">    
        
    <input type="text" name="respuesta_98" value="<?php echo $respuesta_98; ?>" size="8">
        
    <input type="text" name="respuesta_99" value="<?php echo $respuesta_99; ?>" size="8">
        
    <input type="text" name="respuesta_100" value="<?php echo $respuesta_100; ?>" size="8">
        
    <input type="text" name="respuesta_101" value="<?php echo $respuesta_101; ?>" size="8">
        
    <input type="text" name="respuesta_102" value="<?php echo $respuesta_102; ?>" size="23">
        
    <input type="text" name="respuesta_103" value="<?php echo $respuesta_103; ?>" size="8">
      de 
    <input type="text" name="respuesta_104" value="<?php echo $respuesta_104; ?>" size="8">
      como sea 
    <input type="text" name="respuesta_105" value="<?php echo $respuesta_105; ?>" size="8">
     . 
    <input type="text" name="respuesta_106" value="<?php echo $respuesta_106; ?>" size="8">
      la 
    <input type="text" name="respuesta_107" value="<?php echo $respuesta_107; ?>" size="8">
      de que los 
    <input type="text" name="respuesta_108" value="<?php echo $respuesta_108; ?>" size="10">
      estén 
    <input type="text" name="respuesta_109" value="<?php echo $respuesta_109; ?>" size="8">
      hacia los 
    <input type="text" name="respuesta_110" value="<?php echo $respuesta_110; ?>" size="8">
      mejor 
    <input type="text" name="respuesta_111" value="<?php echo $respuesta_111; ?>" size="8">
      y en 
    <input type="text" name="respuesta_112" value="<?php echo $respuesta_112; ?>" size="8">
      de los 
    <input type="text" name="respuesta_113" value="<?php echo $respuesta_113; ?>" size="8">
      representados. 
    <input type="text" name="respuesta_114" value="<?php echo $respuesta_114; ?>" size="10">
        
    <input type="text" name="respuesta_115" value="<?php echo $respuesta_115; ?>" size="18">
        
    <input type="text" name="respuesta_116" value="<?php echo $respuesta_116; ?>" size="8">  
    los 
    <input type="text" name="respuesta_117" value="<?php echo $respuesta_117; ?>" size="8">
      de negociación y 
    <input type="text" name="respuesta_118" value="<?php echo $respuesta_118; ?>" size="8">
      de 
    <input type="text" name="respuesta_119" value="<?php echo $respuesta_119; ?>" size="8">
      cuando los 
    <input type="text" name="respuesta_120" value="<?php echo $respuesta_120; ?>" size="10">
      de una 
    <input type="text" name="respuesta_121" value="<?php echo $respuesta_121; ?>" size="8">
      de actores entran en 
    <input type="text" name="respuesta_122" value="<?php echo $respuesta_122; ?>" size="8">
      con los de otra. (Ver también [5, c3] [6, c3].)</p>

    <p>  
    <input type="text" name="respuesta_123" value="<?php echo $respuesta_123; ?>" size="27">    
      a 
    <input type="text" name="respuesta_124" value="<?php echo $respuesta_124; ?>" size="8">
      solo de 
    <input type="text" name="respuesta_125" value="<?php echo $respuesta_125; ?>" size="8">
     . Otras fuentes de requerimientos 
    <input type="text" name="respuesta_126" value="<?php echo $respuesta_126; ?>" size="8">
      pueden incluir:</p>
    <ul>
    <li>
    <input type="text" name="respuesta_127" value="<?php echo $respuesta_127; ?>" size="11">    
      como requerimientos de 
    <input type="text" name="respuesta_128" value="<?php echo $respuesta_128; ?>" size="7">
      anteriores, 
    <input type="text" name="respuesta_129" value="<?php echo $respuesta_129; ?>" size="9">
      de misión, 
    <input type="text" name="respuesta_130" value="<?php echo $respuesta_130; ?>" size="8">
      de operación;</li>
    <li>
    <input type="text" name="respuesta_131" value="<?php echo $respuesta_131; ?>" size="9">    
     ;</li>
    <li>
    <input type="text" name="respuesta_132" value="<?php echo $respuesta_132; ?>" size="17">    
      más amplio, incluyendo 
    <input type="text" name="respuesta_133" value="<?php echo $respuesta_133; ?>" size="8">
      y 
    <input type="text" name="respuesta_134" value="<?php echo $respuesta_134; ?>" size="8">
      organizacionales;</li>
    <li>
    <input type="text" name="respuesta_135" value="<?php echo $respuesta_135; ?>" size="8">    
      computacional.</li>
    </ul>
   
    <button type="submit">Enviar</button>
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
    <?php echo $verificar_128 ?>
    <?php echo $verificar_129 ?>
    <?php echo $verificar_130 ?>
    <?php echo $verificar_131 ?>
    <?php echo $verificar_132 ?>
    <?php echo $verificar_133 ?>    
    <?php echo $verificar_134 ?>
    <?php echo $verificar_135 ?>                
    <hr>
</div>




<div class="seccion derecha">
   
 <h3>2.2. Técnicas Comunes de Elicitación de Requisitos [1*, c7] [2*, s4.3]</h3>
    <p>
    <input type="text" name="respuesta_136" value="<?php echo $respuesta_136; ?>" size="8">    
      una 
    <input type="text" name="respuesta_137" value="<?php echo $respuesta_137; ?>" size="11">
      de 
    <input type="text" name="respuesta_138" value="<?php echo $respuesta_138; ?>" size="8">
      que pueden usarse para 
    <input type="text" name="respuesta_139" value="<?php echo $respuesta_139; ?>" size="8">
      de requerimientos de los 
    <input type="text" name="respuesta_140" value="<?php echo $respuesta_140; ?>" size="8">
     . 
    Algunas 
    <input type="text" name="respuesta_141" value="<?php echo $respuesta_141; ?>" size="8">
      funcionan mejor con 
    <input type="text" name="respuesta_142" value="<?php echo $respuesta_142; ?>" size="9">
      de 
    <input type="text" name="respuesta_143" value="<?php echo $respuesta_143; ?>" size="8">
      que con otras. Las técnicas comunes de 
    elicitación 
    <input type="text" name="respuesta_144" value="<?php echo $respuesta_144; ?>" size="8">
      incluyen las siguientes:</p>
    
    <ul>
    <li>
    <input type="text" name="respuesta_145" value="<?php echo $respuesta_145; ?>" size="8">    
     ;</li>
    <li>
    <input type="text" name="respuesta_146" value="<?php echo $respuesta_146; ?>" size="8">    
     , posiblemente incluyendo 
    <input type="text" name="respuesta_147" value="<?php echo $respuesta_147; ?>" size="16">
       ;</li>
    <li>
    <input type="text" name="respuesta_148" value="<?php echo $respuesta_148; ?>" size="8">    
      conjunto de aplicaciones (JAD), 
    <input type="text" name="respuesta_149" value="<?php echo $respuesta_149; ?>" size="8">
      conjunta de requerimientos (JRP) y otros talleres facilitados;</li>
    <li>
    <input type="text" name="respuesta_150" value="<?php echo $respuesta_150; ?>" size="8">    
      de protocolos;</li>
    <li>
    <input type="text" name="respuesta_151" value="<?php echo $respuesta_151; ?>" size="11">    
     ;</li>
    <li>
    <input type="text" name="respuesta_152" value="<?php echo $respuesta_152; ?>" size="8">    
      y 
    <input type="text" name="respuesta_153" value="<?php echo $respuesta_153; ?>" size="19">
     ;</li>
    <li>
    <input type="text" name="respuesta_154" value="<?php echo $respuesta_154; ?>" size="8">    
      exploratorio, incluyendo 
    <input type="text" name="respuesta_155" value="<?php echo $respuesta_155; ?>" size="29">
      de 
    <input type="text" name="respuesta_156" value="<?php echo $respuesta_156; ?>" size="4">
      y 
    <input type="text" name="respuesta_157" value="<?php echo $respuesta_157; ?>" size="8">
     ;</li>
    <li>
    <input type="text" name="respuesta_158" value="<?php echo $respuesta_158; ?>" size="29">    
     .</li>
    </ul>

    <p>La elicitación puede ser 
    <input type="text" name="respuesta_159" value="<?php echo $respuesta_159; ?>" size="8">    
     , y el ingeniero de software debe saber que, por ejemplo, los usuarios 
    pueden tener 
    <input type="text" name="respuesta_160" value="<?php echo $respuesta_160; ?>" size="8">
      para 
    <input type="text" name="respuesta_161" value="<?php echo $respuesta_161; ?>" size="8">
      sus 
    <input type="text" name="respuesta_162" value="<?php echo $respuesta_162; ?>" size="8">
     , 
    <input type="text" name="respuesta_163" value="<?php echo $respuesta_163; ?>" size="8">
      información importante o 
    <input type="text" name="respuesta_164" value="<?php echo $respuesta_164; ?>" size="15">
      o 
    <input type="text" name="respuesta_165" value="<?php echo $respuesta_165; ?>" size="10">
      de cooperar. La elicitación 
    <input type="text" name="respuesta_166" value="<?php echo $respuesta_166; ?>" size="23">
     . Incluso si se 
    <input type="text" name="respuesta_167" value="<?php echo $respuesta_167; ?>" size="8">
      de actores 
    <input type="text" name="respuesta_168" value="<?php echo $respuesta_168; ?>" size="8">
      y elocuentes, el ingeniero de software debe
    <input type="text" name="respuesta_169" value="<?php echo $respuesta_169; ?>" size="8">
      arduamente para obtener la información 
    <input type="text" name="respuesta_170" value="<?php echo $respuesta_170; ?>" size="8">
     . Muchos requerimientos de 
    <input type="text" name="respuesta_171" value="<?php echo $respuesta_171; ?>" size="8">
      son 
    <input type="text" name="respuesta_172" value="<?php echo $respuesta_172; ?>" size="8">
      o solo pueden encontrarse en información 
    <input type="text" name="respuesta_173" value="<?php echo $respuesta_173; ?>" size="14">
     .</p>

    <button type="submit">Enviar</button>
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
    <?php echo $verificar_160 ?>
    <?php echo $verificar_161 ?>    
    <?php echo $verificar_162 ?>
    <?php echo $verificar_163 ?>
    <?php echo $verificar_164 ?>
    <?php echo $verificar_165 ?>
    <?php echo $verificar_166 ?>
    <?php echo $verificar_167 ?>
    <?php echo $verificar_168 ?>
    <?php echo $verificar_169 ?>
    <?php echo $verificar_170 ?>
    <?php echo $verificar_171 ?>
    <?php echo $verificar_172 ?>
    <?php echo $verificar_173 ?>

    <hr>
    <p>
    <input type="text" name="respuesta_174" value="<?php echo $respuesta_174; ?>" size="85">    
     . Tales 
    <input type="text" name="respuesta_175" value="<?php echo $respuesta_175; ?>" size="8">
      y 
    <input type="text" name="respuesta_176" value="<?php echo $respuesta_176; ?>" size="14">
      lo siguiente:</p>

    <ul>
    <li>
    <input type="text" name="respuesta_177" value="<?php echo $respuesta_177; ?>" size="30">    
     ;</li>
    <li>
    <input type="text" name="respuesta_178" value="<?php echo $respuesta_178; ?>" size="11">     
      de 
      <input type="text" name="respuesta_179" value="<?php echo $respuesta_179; ?>" size="55">
       ;</li>
    <li>
    <input type="text" name="respuesta_180" value="<?php echo $respuesta_180; ?>" size="14">    
      que se 
    <input type="text" name="respuesta_181" value="<?php echo $respuesta_181; ?>" size="11">
      con el 
    <input type="text" name="respuesta_182" value="<?php echo $respuesta_182; ?>" size="16">
     ;</li>
    <li>
    <input type="text" name="respuesta_183" value="<?php echo $respuesta_183; ?>" size="38">    
    (
    <input type="text" name="respuesta_184" value="<?php echo $respuesta_184; ?>" size="11">
    );</li>
    <li>
    <input type="text" name="respuesta_185" value="<?php echo $respuesta_185; ?>" size="20">    
    ;</li>
    <li>
    <input type="text" name="respuesta_186" value="<?php echo $respuesta_186; ?>" size="50">    
      (QFD);</li>
    <li>
    <input type="text" name="respuesta_187" value="<?php echo $respuesta_187; ?>" size="10">    
     , donde el 
     <input type="text" name="respuesta_188" value="<?php echo $respuesta_188; ?>" size="18">
       estudia el 
     <input type="text" name="respuesta_189" value="<?php echo $respuesta_189; ?>" size="6">
       y el 
     <input type="text" name="respuesta_190" value="<?php echo $respuesta_190; ?>" size="5">
       en que se 
     <input type="text" name="respuesta_191" value="<?php echo $respuesta_191; ?>" size="7">
      ;</li>
    <li>
    <input type="text" name="respuesta_192" value="<?php echo $respuesta_192; ?>" size="25">    
      (apprenticing), donde el 
      <input type="text" name="respuesta_193" value="<?php echo $respuesta_193; ?>" size="45"> 
       ;</li>
    <li>
    <input type="text" name="respuesta_194" value="<?php echo $respuesta_194; ?>" size="30">    
     ;</li>
    <li>
    <input type="text" name="respuesta_195" value="<?php echo $respuesta_195; ?>" size="11">    
      (por ejemplo, de 
      <input type="text" name="respuesta_196" value="<?php echo $respuesta_196; ?>" size="8">
        en 
      <input type="text" name="respuesta_197" value="<?php echo $respuesta_197; ?>" size="8">
       , en 
      <input type="text" name="respuesta_198" value="<?php echo $respuesta_198; ?>" size="8">
       , en 
      <input type="text" name="respuesta_199" value="<?php echo $respuesta_199; ?>" size="8">
       );</li>
    <li>
    <input type="text" name="respuesta_200" value="<?php echo $respuesta_200; ?>" size="15">    
     ;</li>
    <li>
    <input type="text" name="respuesta_201" value="<?php echo $respuesta_201; ?>" size="20">    
      (empatizar, definir, idear, prototipar, probar);</li>
    <li>ISO/IEC 25010: “Ingeniería de sistemas y software – Requisitos de calidad y evaluación (SQuaRE) – Modelos de 
    calidad del sistema y del software”;</li>
    <li>
    <input type="text" name="respuesta_202" value="<?php echo $respuesta_202; ?>" size="25">    
     , como se discute en el área de conocimiento de 
     <input type="text" name="respuesta_203" value="<?php echo $respuesta_203; ?>" size="6">
      ;</li>
    <li>
    <input type="text" name="respuesta_204" value="<?php echo $respuesta_204; ?>" size="30">    
     .</li>
    </ul>

    <p>(Ver también [5, c3] [6, c4-7].)</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_174 ?>
    <?php echo $verificar_174 ?>
<?php echo $verificar_175 ?>
<?php echo $verificar_176 ?>
<?php echo $verificar_177 ?>
<?php echo $verificar_178 ?>
<?php echo $verificar_179 ?>
<?php echo $verificar_180 ?>
<?php echo $verificar_181 ?>
<?php echo $verificar_182 ?>
<?php echo $verificar_183 ?>
<?php echo $verificar_184 ?>
<br>
<?php echo $verificar_185 ?>
<?php echo $verificar_186 ?>
<?php echo $verificar_187 ?>
<?php echo $verificar_188 ?>
<?php echo $verificar_189 ?>
<?php echo $verificar_190 ?>
<?php echo $verificar_191 ?>
<?php echo $verificar_192 ?>
<?php echo $verificar_193 ?>
<br>
<?php echo $verificar_194 ?>
<?php echo $verificar_195 ?>
<?php echo $verificar_196 ?>
<?php echo $verificar_197 ?>
<?php echo $verificar_198 ?>
<?php echo $verificar_199 ?>
<?php echo $verificar_200 ?>
<?php echo $verificar_201 ?>
<?php echo $verificar_202 ?>
<?php echo $verificar_203 ?>
<?php echo $verificar_204 ?>

    <hr>

    <h3>3.
    <input type="text" name="respuesta_205" value="<?php echo $respuesta_205; ?>" size="22">     
      [1*, c8-9]</h3>
    <p>
    <input type="text" name="respuesta_206" value="<?php echo $respuesta_206; ?>" size="65">    
    . 
    <input type="text" name="respuesta_207" value="<?php echo $respuesta_207; ?>" size="10">
      se necesita una
    <input type="text" name="respuesta_208" value="<?php echo $respuesta_208; ?>" size="18"> 
      para revelar los 
    <input type="text" name="respuesta_209" value="<?php echo $respuesta_209; ?>" size="22">
      y completos 
    <input type="text" name="respuesta_210" value="<?php echo $respuesta_210; ?>" size="8">
      por la 
    <input type="text" name="respuesta_211" value="<?php echo $respuesta_211; ?>" size="8">
      originalmente 
    <input type="text" name="respuesta_212" value="<?php echo $respuesta_212; ?>" size="8">
     . El análisis de requerimientos 
    <input type="text" name="respuesta_213" value="<?php echo $respuesta_213; ?>" size="8">
      a los 
    <input type="text" name="respuesta_214" value="<?php echo $respuesta_214; ?>" size="12">
      de software a 
    <input type="text" name="respuesta_215" value="<?php echo $respuesta_215; ?>" size="8">
      el 
    <input type="text" name="respuesta_216" value="<?php echo $respuesta_216; ?>" size="8">
      y las 
    <input type="text" name="respuesta_217" value="<?php echo $respuesta_217; ?>" size="11">
      de los 
    <input type="text" name="respuesta_218" value="<?php echo $respuesta_218; ?>" size="22">
     , tanto 
    <input type="text" name="respuesta_219" value="<?php echo $respuesta_219; ?>" size="12">
      como en el 
    <input type="text" name="respuesta_220" value="<?php echo $respuesta_220; ?>" size="8">
      del 
    <input type="text" name="respuesta_221" value="<?php echo $respuesta_221; ?>" size="32">
     .</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_205 ?>
<?php echo $verificar_206 ?>
<?php echo $verificar_207 ?>
<?php echo $verificar_208 ?>
<?php echo $verificar_209 ?>
<?php echo $verificar_210 ?>
<?php echo $verificar_211 ?>
<?php echo $verificar_212 ?>
<?php echo $verificar_213 ?>
<?php echo $verificar_214 ?>
<?php echo $verificar_215 ?>
<br>
<?php echo $verificar_216 ?>
<?php echo $verificar_217 ?>
<?php echo $verificar_218 ?>
<?php echo $verificar_219 ?>
<?php echo $verificar_220 ?>
<?php echo $verificar_221 ?>

    <hr>

    <h4>3.1. Análisis Básico de Requisitos [1*, c8-9]</h4>
    <p>La siguiente lista de 
    <input type="text" name="respuesta_222" value="<?php echo $respuesta_222; ?>" size="20">    
      de los 
    <input type="text" name="respuesta_223" value="<?php echo $respuesta_223; ?>" size="11">
      puede guiar el 
    <input type="text" name="respuesta_224" value="<?php echo $respuesta_224; ?>" size="11">
     . El ingeniero 
    de software busca 
    <input type="text" name="respuesta_225" value="<?php echo $respuesta_225; ?>" size="18">
      de estas 
    <input type="text" name="respuesta_226" value="<?php echo $respuesta_226; ?>" size="8">
      que 
    <input type="text" name="respuesta_227" value="<?php echo $respuesta_227; ?>" size="16">
     . Cada requerimiento debe:</p>
    <ul>
    <li>
    <input type="text" name="respuesta_228" value="<?php echo $respuesta_228; ?>" size="10">    
      (
    <input type="text" name="respuesta_229" value="<?php echo $respuesta_229; ?>" size="29">    
     );</li>
    <li>
    <input type="text" name="respuesta_230" value="<?php echo $respuesta_230; ?>" size="12">    
      (
        <input type="text" name="respuesta_231" value="<?php echo $respuesta_231; ?>" size="10">
         ), es decir, que se pueda 
    <input type="text" name="respuesta_232" value="<?php echo $respuesta_232; ?>" size="18">
      el 
    <input type="text" name="respuesta_233" value="<?php echo $respuesta_233; ?>" size="10">
      o 
    <input type="text" name="respuesta_234" value="<?php echo $respuesta_234; ?>" size="12">
     ;</li>
    <li>
    <input type="text" name="respuesta_235" value="<?php echo $respuesta_235; ?>" size="12">    
     , lo que 
    <input type="text" name="respuesta_236" value="<?php echo $respuesta_236; ?>" size="12">
      que los 
    <input type="text" name="respuesta_237" value="<?php echo $respuesta_237; ?>" size="12">
      estén 
    <input type="text" name="respuesta_238" value="<?php echo $respuesta_238; ?>" size="12">
      a pagar por él y 
    <input type="text" name="respuesta_239" value="<?php echo $respuesta_239; ?>" size="12">
      a 
    <input type="text" name="respuesta_240" value="<?php echo $respuesta_240; ?>" size="11">
     ;</li>
    <li>
    <input type="text" name="respuesta_241" value="<?php echo $respuesta_241; ?>" size="11">    
     , es decir, 
    <input type="text" name="respuesta_242" value="<?php echo $respuesta_242; ?>" size="26">
     ;</li>
    <li>
    <input type="text" name="respuesta_243" value="<?php echo $respuesta_243; ?>" size="25">    
      y 
    <input type="text" name="respuesta_244" value="<?php echo $respuesta_244; ?>" size="11">
      de los 
    <input type="text" name="respuesta_245" value="<?php echo $respuesta_245; ?>" size="11">
      (
    <input type="text" name="respuesta_246" value="<?php echo $respuesta_246; ?>" size="11">
     );</li>
    <li>
    <input type="text" name="respuesta_247" value="<?php echo $respuesta_247; ?>" size="5">    
      el 
    <input type="text" name="respuesta_248" value="<?php echo $respuesta_248; ?>" size="11">
      de los 
    <input type="text" name="respuesta_249" value="<?php echo $respuesta_249; ?>" size="11">
     ;</li>
    <li>
    <input type="text" name="respuesta_250" value="<?php echo $respuesta_250; ?>" size="11">    
      para 
    <input type="text" name="respuesta_251" value="<?php echo $respuesta_251; ?>" size="17">
     .</li>
    </ul>

    <p>
    <input type="text" name="respuesta_252" value="<?php echo $respuesta_252; ?>" size="36">    
      debe ser:</p>
    <ul>
    <li>
    <input type="text" name="respuesta_253" value="<?php echo $respuesta_253; ?>" size="8">    
      — Los requerimientos 
    <input type="text" name="respuesta_254" value="<?php echo $respuesta_254; ?>" size="8"> 
        adecuadamente las 
      <input type="text" name="respuesta_255" value="<?php echo $respuesta_255; ?>" size="15"> 
       , 
      <input type="text" name="respuesta_256" value="<?php echo $respuesta_256; ?>" size="25"> 
        y 
      <input type="text" name="respuesta_257" value="<?php echo $respuesta_257; ?>" size="25"> 
       ;</li>
    <li>
    <input type="text" name="respuesta_258" value="<?php echo $respuesta_258; ?>" size="8">    
      — 
    <input type="text" name="respuesta_259" value="<?php echo $respuesta_259; ?>" size="30">
     ;</li>
    <li>
    <input type="text" name="respuesta_260" value="<?php echo $respuesta_260; ?>" size="20">    
      — 
      <input type="text" name="respuesta_261" value="<?php echo $respuesta_261; ?>" size="45">
       ;</li>
    <li>
    <input type="text" name="respuesta_262" value="<?php echo $respuesta_262; ?>" size="20">    
      — 
    <input type="text" name="respuesta_263" value="<?php echo $respuesta_263; ?>" size="60">
     ;</li>
    <li>
    <input type="text" name="respuesta_264" value="<?php echo $respuesta_264; ?>" size="8">    
      — Es 
      <input type="text" name="respuesta_265" value="<?php echo $respuesta_265; ?>" size="8">
        crear una solución 
      <input type="text" name="respuesta_266" value="<?php echo $respuesta_266; ?>" size="8">
        y 
      <input type="text" name="respuesta_267" value="<?php echo $respuesta_267; ?>" size="8">
        dentro de las 
      <input type="text" name="respuesta_268" value="<?php echo $respuesta_268; ?>" size="8">
        de 
      <input type="text" name="respuesta_269" value="<?php echo $respuesta_269; ?>" size="8">
       , 
      <input type="text" name="respuesta_270" value="<?php echo $respuesta_270; ?>" size="8">
       , 
      <input type="text" name="respuesta_271" value="<?php echo $respuesta_271; ?>" size="8">
     , 
    <input type="text" name="respuesta_272" value="<?php echo $respuesta_272; ?>" size="8">
     .</li>
    </ul>

    <p>En algunos casos, una 
    <input type="text" name="respuesta_273" value="<?php echo $respuesta_273; ?>" size="15">    
      representa una 
    <input type="text" name="respuesta_274" value="<?php echo $respuesta_274; ?>" size="8">
      a implementar en lugar del 
    <input type="text" name="respuesta_275" value="<?php echo $respuesta_275; ?>" size="8">
      problema a 
    <input type="text" name="respuesta_276" value="<?php echo $respuesta_276; ?>" size="8">
     . Esto conlleva el 
    <input type="text" name="respuesta_277" value="<?php echo $respuesta_277; ?>" size="8">
      de 
    <input type="text" name="respuesta_278" value="<?php echo $respuesta_278; ?>" size="8">
      una 
    <input type="text" name="respuesta_279" value="<?php echo $respuesta_279; ?>" size="16">
     . La técnica de 
    los “5 porqués” (por ejemplo, [3*, c4]) consiste en 
    <input type="text" name="respuesta_280" value="<?php echo $respuesta_280; ?>" size="8">
      repetidamente: “¿Por qué este es el 
      <input type="text" name="respuesta_281" value="<?php echo $respuesta_281; ?>" size="11">
       ?” 
    para converger hacia el 
    <input type="text" name="respuesta_282" value="<?php echo $respuesta_282; ?>" size="8">
      problema. La repetición se detiene cuando la respuesta es: “
    <input type="text" name="respuesta_283" value="<?php echo $respuesta_283; ?>" size="15">
     , 
    entonces el 
    <input type="text" name="respuesta_284" value="<?php echo $respuesta_284; ?>" size="8">
      del 
    <input type="text" name="respuesta_285" value="<?php echo $respuesta_285; ?>" size="22">
     ”. A menudo se llega al verdadero problema en dos o tres ciclos, 
    pero la técnica se llama “5 porqués” para incentivar a los ingenieros a profundizar lo más posible.</p>

 
<button type="submit">Enviar</button>
<?php echo $verificar_222 ?>
<?php echo $verificar_223 ?>
<?php echo $verificar_224 ?>
<?php echo $verificar_225 ?>
<?php echo $verificar_226 ?>
<?php echo $verificar_227 ?>
<?php echo $verificar_228 ?>
<?php echo $verificar_229 ?>
<?php echo $verificar_230 ?>
<?php echo $verificar_231 ?>
<?php echo $verificar_232 ?>
<?php echo $verificar_233 ?>
<?php echo $verificar_234 ?>
<br>
<?php echo $verificar_235 ?>
<?php echo $verificar_236 ?>
<?php echo $verificar_237 ?>
<?php echo $verificar_238 ?>
<?php echo $verificar_239 ?>
<?php echo $verificar_240 ?>
<?php echo $verificar_241 ?>
<?php echo $verificar_242 ?>
<?php echo $verificar_243 ?>
<?php echo $verificar_244 ?>
<?php echo $verificar_245 ?>
<?php echo $verificar_246 ?>
<?php echo $verificar_247 ?>
<br>
<?php echo $verificar_248 ?>
<?php echo $verificar_249 ?>
<?php echo $verificar_250 ?>
<?php echo $verificar_251 ?>
<?php echo $verificar_252 ?>
<?php echo $verificar_253 ?>
<?php echo $verificar_254 ?>
<?php echo $verificar_255 ?>
<?php echo $verificar_256 ?>
<?php echo $verificar_257 ?>
<?php echo $verificar_258 ?>
 
<?php echo $verificar_259 ?>
<?php echo $verificar_260 ?>
<br>
<?php echo $verificar_261 ?>
 
<?php echo $verificar_262 ?>
<?php echo $verificar_263 ?>
<?php echo $verificar_264 ?>
 
<?php echo $verificar_265 ?>
<?php echo $verificar_266 ?>
<?php echo $verificar_267 ?>
<?php echo $verificar_268 ?>
 
<?php echo $verificar_269 ?>
<?php echo $verificar_270 ?>
<?php echo $verificar_271 ?>
<?php echo $verificar_272 ?>
<br>
<?php echo $verificar_273 ?>
<?php echo $verificar_274 ?>
<?php echo $verificar_275 ?>
<?php echo $verificar_276 ?>
<?php echo $verificar_277 ?>
<?php echo $verificar_278 ?>
<?php echo $verificar_279 ?>
<?php echo $verificar_280 ?>
<?php echo $verificar_281 ?>
<?php echo $verificar_282 ?>
<?php echo $verificar_283 ?>
<?php echo $verificar_284 ?>
<?php echo $verificar_285 ?>
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
        href="sexto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
