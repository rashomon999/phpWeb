<?php
 
$salida = ""; $salida2 = ""; $codigo = "";$codigo2 = ""; $salidaLimpia ="";
$verificar_2_2 = ""; $salida2_2 = "";$codigo2_2 = "";$verificar_3_2 = "";$salida3_2 = "";$codigo3_2 = ""; $salidaLimpia3_2  = "";
$salidaLimpia4 ="";$pregunta_4 = "";
$verificar_2_1 = "";$verificar_4_1 = "";
$respuesta_1 = ''; $respuesta_2 = ''; $respuesta_3 = ''; $respuesta_3_2 = ''; $respuesta_4 = ''; $respuesta_5 = ''; 
$respuesta_6 = ''; $respuesta_7 = ''; $respuesta_8 = ''; $respuesta_9 = '';  $respuesta_10 = '';
$respuesta_11 = ''; $respuesta_12 = ''; $respuesta_13 = ''; $respuesta_14 = ''; $respuesta_15 = '';
$verificar_1 = ''; $verificar_2 = ''; $verificar_3 = '';    $verificar_4 = ''; $verificar_5 = ''; 
$verificar_6 = ''; $verificar_7 = '';  $verificar_8 = ''; $verificar_9 = ''; $verificar_10 = ''; 
$verificar_11 = ''; $verificar_12 = ''; $verificar_13 = ''; $verificar_14 = ''; $verificar_15 = ''; 
$verificar_binary_search = ''; // Nueva variable para validar el código de búsqueda binaria


if ($_POST) {
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["codigo"])) {
        $codigo = $_POST["codigo"];
    
        // Validación del código de búsqueda binaria
        $binarySearchPattern = '/def\s+search\s*\(\s*i:\s*Int\s*,\s*j:\s*Int\s*,\s*x:\s*Int\s*,\s*a:\s*List\[Int\]\s*\)\s*:\s*Int\s*=\s*\{(?:[^{}]++|\{[^{}]*+\})*+\}/s';

        
        if (preg_match($binarySearchPattern, $codigo)) {
            $verificar_binary_search = "correcto";
        } else {
            $verificar_binary_search = "incorrecto";
        }
    
        if (!str_contains($codigo, "object") && !str_contains($codigo, "@main")) {
            $codigoFinal = "object Main extends App {\n" . $codigo . "\n}";
        } else {
            $codigoFinal = $codigo;
        }
    
        if (str_contains($codigo, "@tailrec") && !str_contains($codigoFinal, "import scala.annotation.tailrec")) {
            $codigoFinal = "import scala.annotation.tailrec\n" . $codigoFinal;
        }
    
        $archivoScala = "codigo.scala";
        file_put_contents($archivoScala, $codigoFinal);
        usleep(100000);
    
        $salida = shell_exec("scala-cli run $archivoScala 2>&1");
    
        $lineas = explode("\n", $salida);
        $salidaLimpia = array_filter($lineas, function ($linea) {
            return !str_contains($linea, "Compiling project") && !str_contains($linea, "Compiled project");
        });
    
        //echo implode("\n", $salidaLimpia); // Devuelve solo la salida del código
        // Evita que se imprima HTML adicional
    }
    
    
    if (isset($_POST['codigo2'])) {
        $codigo2 = $_POST["codigo2"];
    
        // Envolver el código en un objeto válido de Scala 3
        //cuando no queremos pasar el object
        //$codigoFinal = "object Main extends App {\n" . $codigo . "\n}";
        if (!str_contains($codigo2, "object") && !str_contains($codigo2, "@main")) {
            $codigoFinal = "object Main extends App {\n" . $codigo2 . "\n}";
        } else {
            $codigoFinal = $codigo2;  // Mantener código tal cual si ya está en formato correcto
        }
        // Guardar el código en un archivo temporal
        $archivoScala2 = "codigo2.scala";
        file_put_contents($archivoScala2, $codigoFinal);
    
       
        usleep(10000);  
    
        // Ejecutar el código Scala y capturar la salida
        $salida2 = shell_exec("scala-cli run $archivoScala2 2>&1");

        // Filtrar salida para eliminar mensajes de compilación
        $lineas = explode("\n", $salida2);
        $salidaLimpia = [];
        foreach ($lineas as $linea) {
        if (!str_contains($linea, "Compiling project") && !str_contains($linea, "Compiled project")) {
            $salidaLimpia[] = $linea;
        }
        }

        // Guardar la salida en una variable
        $resultadoScala = implode("\n", $salidaLimpia);


        $resultadoScala2 = trim(implode("\n", $salidaLimpia));
        //version cuando no queremos pasar el object
        //$salida = shell_exec("scala $archivoScala 2>&1");
    

        $salida_esperada = "List(1, 2, 3, 4, 5)";   

        if ($resultadoScala2 === $salida_esperada) {  
            $verificar_2_1 = "correcto";
        } elseif ($resultadoScala2 === '') {
            $verificar_2_1 = 'sin salida';
        } else {
            $verificar_2_1 = "incorrecto";
        }
      
    } else {
        $salida2 ="";
      
    }
    
     
    if (isset($_POST['codigo2'])) {
        $codigo2 = $_POST["codigo2"];
        
        // Normalizar el código para comparación (eliminar espacios y saltos de línea)
        $codigoNormalizado = preg_replace('/\s+/', '', $codigo2);
        
        // Verificar los componentes esenciales del pattern matching
        $tieneDefinicion = str_contains($codigoNormalizado, 'defsearch(i:Int,j:Int,x:Int,a:List[Int]):Int=');
        $tienePatternMatch = str_contains($codigoNormalizado, '(i>j,i<=j&&a(i-1)==x,i==j)match{');
        $tieneCasos = str_contains($codigoNormalizado, 'case(true,_,_)=>0') &&
                     str_contains($codigoNormalizado, 'case(_,true,_)=>i') &&
                     str_contains($codigoNormalizado, 'case(_,_,true)=>0') &&
                     str_contains($codigoNormalizado, 'case_=>search(i+1,j,x,a)');
        $tieneEjemplo = str_contains($codigoNormalizado, 'vallista=List(5,8,3,7,1)') &&
                       str_contains($codigoNormalizado, 'valresultado=search(1,lista.length,7,lista)') &&
                       str_contains($codigoNormalizado, 'println(resultado)');
    
        // Preparar el código para ejecución
        if (!str_contains($codigo2, "object") && !str_contains($codigo2, "@main")) {
            $codigoFinal = "object Main extends App {\n" . $codigo2 . "\n}";
        } else {
            $codigoFinal = $codigo2;
        }
        
        $archivoScala = "codigo2.scala";
        file_put_contents($archivoScala, $codigoFinal);
        usleep(100000);  // Pequeña pausa para asegurar la escritura
        
        // Ejecutar y capturar salida
        $salida = shell_exec("scala-cli run $archivoScala 2>&1");
        
        // Filtrar mensajes de compilación
        $lineas = explode("\n", $salida);
        $salidaLimpia = array_filter($lineas, function ($linea) {
            return !str_contains($linea, "Compiling project") && 
                   !str_contains($linea, "Compiled project");
        });
        
        $resultado = trim(implode("\n", $salidaLimpia));
        
        // Validación final
        if ($tieneDefinicion && $tienePatternMatch && $tieneCasos && $tieneEjemplo) {
            if ($resultado === "4") {
                $verificar_2_1 = "correcto";
            } elseif ($resultado === '') {
                $verificar_2_1 = 'sin salida';
            } else {
                $verificar_2_1 = "incorrecto (salida: $resultado)";
            }
        } else {
            $verificar_2_1 = "incorrecto (estructura inválida)";
        }
        
 
    } else {
        $verificar_2_1 = "";
        $salida = "";
    }

      if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["codigo3_2"])) {
        $codigo3_2 = $_POST["codigo3_2"];
    
        if (!str_contains($codigo3_2, "object") && !str_contains($codigo3_2, "@main")) {
            $codigoFinal3_2 = "object Main extends App {\n" . $codigo3_2 . "\n}";
        } else {
            $codigoFinal3_2 = $codigo3_2;
        }


        if (str_contains($codigo3_2, "@tailrec") && !str_contains($codigo3_2, "import scala.annotation.tailrec")) {
            $codigoFinal3_2 = "import scala.annotation.tailrec\n" . $codigoFinal3_2;
        }
    
        $archivoScala3_2 = "codigo3_2.scala";
        file_put_contents($archivoScala3_2, $codigoFinal3_2);
        usleep(100000);
    
        $salida3_2 = shell_exec("scala-cli run $archivoScala3_2 2>&1");
    
        // Filtrar salida para eliminar mensajes de compilación
        $lineas3_2 = explode("\n", $salida3_2);
        $salidaLimpia3_2 = array_filter($lineas3_2, function ($linea3_2) {
            return !str_contains($linea3_2, "Compiling project") && !str_contains($linea3_2, "Compiled project");
        });
    
        echo implode("\n", $salidaLimpia3_2); // Devuelve solo la salida del código
        exit; // Evita que PHP siga ejecutando el resto del HTML
    }
    

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["pregunta_4"])) {
        $pregunta_4 = $_POST["pregunta_4"];
    
        if (!str_contains($pregunta_4, "object") && !str_contains($pregunta_4, "@main")) {
            $codigoFinal4 = "object Main extends App {\n" . $pregunta_4 . "\n}";
        } else {
            $codigoFinal4 = $pregunta_4;
        }
    
        if (str_contains($pregunta_4, "@tailrec") && !str_contains($pregunta_4, "import scala.annotation.tailrec")) {
            $codigoFinal4 = "import scala.annotation.tailrec\n" . $codigoFinal4;
        }
    
        $archivoScala4 = "pregunta_4.scala";
        file_put_contents($archivoScala4, $codigoFinal4);
        usleep(100000);
    
        $salida4 = shell_exec("scala-cli run $archivoScala4 2>&1");
    
        $lineas4 = explode("\n", $salida4);
        $salidaLimpia4 = array_filter($lineas4, function ($linea4) {
            return !str_contains($linea4, "Compiling project") && !str_contains($linea4, "Compiled project");
        });
    
        echo implode("\n", $salidaLimpia4);
        exit;
    }
    

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["pregunta_5"])) {
        $pregunta_5 = $_POST["pregunta_5"];
    
        if (!str_contains($pregunta_5, "object") && !str_contains($pregunta_5, "@main")) {
            $codigoFinal5 = "object Main extends App {\n" . $pregunta_5 . "\n}";
        } else {
            $codigoFinal5 = $pregunta_5;
        }
    
        if (str_contains($pregunta_5, "@tailrec") && !str_contains($pregunta_5, "import scala.annotation.tailrec")) {
            $codigoFinal5 = "import scala.annotation.tailrec\n" . $codigoFinal5;
        }
    
        $archivoScala5 = "pregunta_5.scala";
        file_put_contents($archivoScala5, $codigoFinal5);
        usleep(100000);
    
        $salida5 = shell_exec("scala-cli run $archivoScala5 2>&1");
    
        $lineas5 = explode("\n", $salida5);
        $salidaLimpia5 = array_filter($lineas5, function ($linea5) {
            return !str_contains($linea5, "Compiling project") && !str_contains($linea5, "Compiled project");
        });
    
        echo implode("\n", $salidaLimpia5);
        exit;
    }


    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
    if ($respuesta_1 === 'object HolaMundo {') {  
        $verificar_1 = "correcto";
    } elseif ($respuesta_1 === '') {
        $verificar_1 = '';
    } else {
        $verificar_1 = "incorrecto";
    }
 
   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'def main(args: Array[String]): Unit = {') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'println') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   $codigo2 = isset($_POST['codigo2']) ? $_POST['codigo2'] : '';

    $codigo_esperado = "def numeros = List(1,2,3,4,5)\nprintln(numeros)";

    if (trim($codigo2) === $codigo_esperado) {  
    $verificar_4_1 = "correcto";
    } elseif ($codigo2 === '') {
    $verificar_4_1 = '';
    } else {
    $verificar_4_1 = "incorrecto";
    }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'def numeros = List(1,2,3,4,5)
   println(numeros)') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === '78') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '91') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre simplificación de expresiones matemáticas</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
    .imagen {
        max-width: 100%;
        height: auto;
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
        // ya no llamamos actualizarFormula ni las demás
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}





</script>
    
</head>
<body>
<div class="seccion izquierda">
    <form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
 
    <hr>

    <h3>Hacer busquedad binaria (con if/else)</h3> (no definir el objeto, sino funciones y demas) <br>
    <p><br>
    probar con: 
    val lista = List(5, 8, 3, 7, 1) <br>
    val resultado = search(1, lista.length, 7, lista) <br>
    println(resultado) // Imprime: 4 <br>
    <br>
    <textarea id="codigo" name="codigo" rows="10" cols="70" value="<?php echo $codigo; ?>" ><?php echo $codigo; ?></textarea>

    <br>
    <button onclick="ejecutarCodigo()">Ejecutar</button>

    <p>Resultado:</p>
    <pre id="resultado"></pre>
    <?php echo $salida ?>
    <?php echo $verificar_binary_search; ?></p>
    <script>
    async function ejecutarCodigo() {
        const codigo = document.getElementById("codigo").value;

        const formData = new FormData();
        formData.append("codigo", codigo);

        const respuesta = await fetch("index.php", {
            method: "POST",
            body: formData
        });

        const data = await respuesta.json(); // Recibir JSON limpio
        document.getElementById("resultado").textContent = data.salida || "Error o salida vacía";
    }

    async function ejecutarCodigo2() {
        const codigo2 = document.getElementById("codigo2").value;

        const formData = new FormData();
        formData.append("codigo2", codigo2);

        const respuesta2 = await fetch("index.php", {
            method: "POST",
            body: formData
        });

        const data2 = await respuesta2.json();
        document.getElementById("resultado2").textContent = data2.salida2 || "Error o salida vacía";
    }
    </script>

    <hr>
    <strong>Lo mismo anterior pero con pattern matching (las 3 condiciones pero en el match, en lugar de if, else, else if):
    </strong> Probar con: 
    val lista = List(5, 8, 3, 7, 1)
val resultado = search(1, lista.length, 7, lista)
println(resultado) // Output: 4
    <br><br>
    <textarea id="codigo2" name="codigo2" rows="10" cols="70" value="<?php echo $codigo2; ?>" ><?php echo htmlspecialchars($codigo2); ?></textarea>
    <br>
    <div class="acciones">
        <button class="boton-ejecutar" onclick="ejecutarCodigo2()">Validar y Ejecutar</button>
        <span class="resultado-validacion <?php echo $verificar_2_1 === 'correcto' ? 'correcto' : 'incorrecto'; ?>">
            <?php echo $verificar_2_1 ?? ''; ?>
        </span>
    </div>
    
    <div class="resultado-ejecucion">
        <h4>Salida del programa:</h4>
        <pre id="resultado2" class="salida-codigo"><?php echo $salida2 ?? ''; ?></pre>
    </div>

    
    <hr>
    <script>
    async function ejecutarCodigo2_2() {
        const codigo2_2 = document.getElementById("codigo2_2").value;

        const formData = new FormData();
        formData.append("codigo2_2", codigo2_2);

        const respuesta = await fetch("index.php", {
            method: "POST",
            body: formData
        });

        const data = await respuesta.json(); // Esperamos la respuesta en JSON
        document.getElementById("resultado2_2").textContent = data.salida;
    }
    </script>

    <strong>Implementar el algoritmo de euclides: </strong>
    <br><br>
    <textarea id="codigo2_2" name="codigo2_2" rows="10" cols="50" value="<?php echo $codigo2_2; ?>"><?php echo htmlspecialchars($codigo2_2); ?></textarea>
    <br>
    <button onclick="ejecutarCodigo2_2()">Ejecutar</button>
    <?php echo $verificar_2_2 ?>
    <p>Resultado:</p>
    <pre id="resultado2_2"></pre>
    <?php echo $salida2_2 ?>
  </form>
</div>

<div class="seccion derecha">
<form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
<strong>Ingrese la sumaRecursivaCola de los primeros 6 numeros</strong>          
<script>
    async function ejecutarCodigo3_2() {
    const codigo3_2 = document.getElementById("codigo3_2").value;

    const formData = new FormData();
    formData.append("codigo3_2", codigo3_2); 

    const respuesta3_2 = await fetch("index.php", {
        method: "POST",
        body: formData
    });

    const resultado3_2 = await respuesta3_2.text();
    document.getElementById("resultado3_2").textContent = resultado3_2;
    }
    </script>
    <br><br>
    <textarea id="codigo3_2" name="codigo3_2" rows="10" cols="50"    value="<?php echo $codigo3_2; ?>"><?php echo htmlspecialchars($codigo3_2); ?></textarea>
    <br>
    <button type="button" onclick="ejecutarCodigo3_2()">Ejecutar</button>
     <?php echo $verificar_3_2 ?>
    <p>Resultado:</p>
    <pre id="resultado3_2"></pre>
    <?php echo $salidaLimpia3_2 ?>
   
    <hr>
    <strong>Funcion recursiva para convertir entrada en linea de enteros en una lista de los 2 primeros 
    (que es lo que el usuario deberia introducir) </strong>
    <br><br>
    <strong>Son dos funciones, readInts(line) y helper(parts,acc):</strong>
    <br><br>
    <script>
    async function ejecutarPregunta_4() {
        const pregunta_4 = document.getElementById("pregunta_4").value;

        const formData = new FormData();
        formData.append("pregunta_4", pregunta_4); 

        const respuesta_4 = await fetch("index.php", {
            method: "POST",
            body: formData
        });

        const resultado_4 = await respuesta_4.text();
        document.getElementById("resultado_4").textContent = resultado_4;
    }
    </script>
     
    <textarea id="pregunta_4" name="pregunta_4" rows="10" cols="60"
    value="<?php echo htmlspecialchars($pregunta_4);?>">
    </textarea>

    <br><br>
    <button type="button" onclick="ejecutarPregunta_4()">Ejecutar</button>
    <?php echo $verificar_4; ?>
    <p>Resultado:</p>
    <pre id="resultado_4"></pre>
    <?php echo $salidaLimpia4; ?>
    <hr>


    <strong>Funcion recursiva que inserta elemento en la lista: def insert(e: Int, l: List[Int]): List[Int]</strong>
    <br><br>
    <strong>Se podria hacer una recursion lineal (con lista)</strong>
    <br><br>
    <script>
    async function ejecutarPregunta_5() {
        const pregunta_5 = document.getElementById("pregunta_5").value;

        const formData = new FormData();
        formData.append("pregunta_5", pregunta_5); 

        const respuesta_5 = await fetch("index.php", {
            method: "POST",
            body: formData
        });

        const resultado_5 = await respuesta_5.text();
        document.getElementById("resultado_5").textContent = resultado_5;
    }
    </script>

    <textarea id="pregunta_5" name="pregunta_5" rows="10" cols="60"></textarea>
    <br><br>
    <button type="button" onclick="ejecutarPregunta_5()">Ejecutar</button>
    <p>Resultado:</p>
    <pre id="resultado_5"></pre>

    <hr>
    
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