<?php
$respuesta1 = "";
$respuesta2 = "";
$respuesta3 = "";
$respuesta4 = "";
$respuesta5 = "";
$respuesta6 = "";
$pregunta1_1= "";
$ask="";

if ($_POST) {
    $pregunta1 = isset($_POST['opcion1']) ? $_POST['opcion1'] : [];
    $pregunta2 = isset($_POST['opcion2']) ? $_POST['opcion2'] : [];
    $pregunta3 = isset($_POST['opcion3']) ? $_POST['opcion3'] : [];
    $pregunta4 = isset($_POST['opcion4']) ? $_POST['opcion4'] : [];
    $pregunta5 = isset($_POST['opcion5']) ? $_POST['opcion5'] : [];
    $pregunta6 = isset($_POST['opcion6']) ? $_POST['opcion6'] : [];

    $respuesta1 = in_array('81', $pregunta1) ? "Opción correcta" : "Opción incorrecta";
    $respuesta2 = in_array('-81', $pregunta2) ? "Opción correcta" : "Opción incorrecta";
    $respuesta3 = in_array('1/81', $pregunta3) ? "Opción correcta" : "Opción incorrecta";
    $respuesta4 = in_array('25', $pregunta4) ? "Opción correcta" : "Opción incorrecta";
    $respuesta5 = in_array('9/4', $pregunta5) ? "Opción correcta" : "Opción incorrecta";
    $respuesta6 = in_array('1/8', $pregunta6) ? "Opción correcta" : "Opción incorrecta";


    $pregunta1_1= isset($_POST['eleccion1'])?$_POST['eleccion1']:[];
    $pregunta2_2= isset($_POST['eleccion2'])?$_POST['eleccion2']:[];
    $pregunta3_3 = isset($_POST['eleccion3'])? $_POST['eleccion3']:[];


    $respuesta1_1= in_array('6√2', $pregunta1_1)? "opcion correcta": "opcion incorrecta";
    $respuesta2_2 = in_array('48 a<sup>5</sup> b<sup>7</sup>', $pregunta2_2) ? "Opción correcta" : "Opción incorrecta";
    $respuesta3_3 = in_array('<Sup>x </Sup> / <Sub> 9 y<Sup>7</Sup> </Sub>', $pregunta3_3) ? "Opción correcta" : "Opción incorrecta";

    // -------------------------------------------
    $ask1= isset($_POST['desarrolle'])?$_POST['desarrolle']:[];
    $ask2= isset($_POST['desarrolle1'])?$_POST['desarrolle1']:[];
    $ask3= isset($_POST['desarrolle2'])?$_POST['desarrolle2']:[];
    $ask4= isset($_POST['desarrolle3'])?$_POST['desarrolle3']:[];

    $answer1= in_array('11x-2', $ask1)? "opcion correcta" : "opcion incorrecta";
    $answer2= in_array('4x<sup>2</sup>+7x-15', $ask2)? "opcion correcta" : "opcion incorrecta";
    $answer3= in_array('a-b', $ask3)? "opcion correcta" : "opcion incorrecta";
    $answer4= in_array('4x<sup>2</sup>+12x+9', $ask4)? "opcion correcta" : "opcion incorrecta";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Diagnóstico</title>
    <link rel="stylesheet" href="styleindex.css">
     <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    
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

</head>
<body>
    <div class="contenedor">
        <div class="seccion izquierda"><br>
            <h1>Examen diagnostico del libro de cálculo de una variable de Stewart James 7ed</h1><br>
            <hr>
            
            <form action="index.php" method="POST"  onsubmit="handleSubmit(event)">
        <ul>
            
            <li class="mi-lista">Ejercicio 1: <br><br><br><br>
                <img class="container" src="../../img/Captura de pantalla 2024-01-02 172829.png" alt=""><br>
                <input type="radio" name="opcion1[]" value="81" id="opcion1_81">81
                <input style="margin-left: 50px;" type="radio" name="opcion1[]" value="-81" id="opcion1_-81">-81 <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($pregunta1) ? $respuesta1 : ''; ?>
                <br><br><br><br>
            </li>

            <li class="mi-lista">Ejercicio 2: <br><br><br><br>
                <img  class="container" src="../../img/Captura de pantalla 2024-01-02 172858.png" alt=""><br>
                <input type="radio" name="opcion2[]" value="81" id="opcion2_81">81
                <input style="margin-left: 50px;" type="radio" name="opcion2[]" value="-81" id="opcion2_-81">-81 <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($pregunta2) ? $respuesta2 : ''; ?>
                <br><br><br><br>
            </li>

            <li class="mi-lista"> Ejercicio 3: <br><br><br><br>
                <img class="container"src="../../img/Captura de pantalla 2024-01-02 172951.png" alt=""><br>
                <input type="radio" name="opcion3[]" value="1/81"  id="opcion3_1/81">\( \frac{1}{81} \)
                <input style="margin-left: 50px;"  type="radio" name="opcion3[]" value="81/1"  id="opcion3_81/1">\( \frac{81}{1} \)
                
                <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($pregunta3) ? $respuesta3 : ''; ?>
                <br><br><br><br>
            </li>

            <li class="mi-lista">Ejercicio 4: <br><br><br><br>
                <img class="container" src="../../img/Captura de pantalla 2024-01-02 173059.png" alt=""><br>
                <input type="radio" name="opcion4[]" value="5"  id="opcion4_5">5
                <input style="margin-left: 50px;"  type="radio" name="opcion4[]" value="25"  id="opcion4_25">25 <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($pregunta4) ? $respuesta4 : ''; ?>
                <br><br><br><br>
            </li>

            <li class="mi-lista">Ejercicio 5: <br><br><br><br>
                <img class="container" src="../../img/Captura de pantalla 2024-01-02 173146.png" alt=""><br>
                <input type="radio" name="opcion5[]" value="9/4" id="opcion5_9/4">\( \frac{9}{4} \)
                <input style="margin-left: 50px;"  type="radio" name="opcion5[]" value="4/9"  id="opcion5_4/9">\( \frac{4}{9} \) <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($pregunta5) ? $respuesta5 : ''; ?>
                <br><br><br><br>
            </li>

            <li class="mi-lista">Ejercicio 6: <br><br>
             <button onmousedown="mostrarImagen100()" onmouseup="ocultarImagen100()">Ayuda</button>
             <script>
                    function mostrarImagen100() {
                    var imagen = document.getElementById('imagen100');

                    // Mostrar la imagen
                    imagen.style.display = 'block';
                    }

                    function ocultarImagen100() {
                    var imagen = document.getElementById('imagen100');

                    // Ocultar la imagen al soltar el botón
                    imagen.style.display = 'none';
                    }
                </script>

               
                <img id="imagen100" src="../../img/Captura de pantalla 2024-06-19 081635.png" style="display: none; max-width: 100%">
 
             <br><br>
                <img class="container" src="../../img/Captura de pantalla 2024-01-02 173249.png" alt=""><br>
                <input type="radio" name="opcion6[]" value="1/8" id="opcion6_1/8">\( \frac{1}{8} \)
                <input style="margin-left: 50px;"  type="radio" name="opcion6[]" value="8/1"  id="opcion6_8/1"> \( \frac{8}{1} \)
                <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($pregunta6) ? $respuesta6 : ''; ?>
                                <br><br><br><br><br><br>
            </li>
        </ul>
    </form>
        </div>

        <div class="centered-container">
        <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="nuevo.php"
        role="button"
        width="50px"
        height="50px"
        >Siguiente</a>
        </div>

        <div class="seccion derecha" >
            
            <h1 style="text-align: center;">Leyes de exponentes y simplificación de radicales</h1><br>
            <hr>
            <form action="index.php" method="POST" onsubmit="handleSubmit(event)">
        <ul>
            <li class="mi-lista">
                Ejercicio 1: <br><br>
                <img class="container" src="../../img/Captura de pantalla 2023-12-21 071555.png" alt=""><br><br>
                <input type="radio" name="eleccion1[]" value="6√2" id="eleccion1_6√2"> \( 6 \sqrt{2} \)
                <input style="margin-left: 50px" type="radio" name="eleccion1[]" value="4√6" id="eleccion1_4√6">\( 4 \sqrt{6} \)
                <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($pregunta1_1) ? $respuesta1_1 : ''; ?> 
                <br><br><br><br>
            </li>

            <li class="mi-lista">
                Ejercicio 2: <br><br>
                <img src="../../img/Captura de pantalla 2023-12-21 090552.png" alt=""><br><br>
                <input type="radio" name="eleccion2[]" value="36 a<sup>5</sup> b<sup>7</sup>" id="eleccion2_6√2">36 a<sup>5</sup> b<sup>7</sup>

                <input style="margin-left: 50px" type="radio" name="eleccion2[]" value="48 a<sup>5</sup> b<sup>7</sup>" id="eleccion2_4√6">48 a<sup>5</sup> b<sup>7</sup> <br><br>

                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($pregunta2_2) ? $respuesta2_2 : ''; ?> 
                <br><br><br><br>
            </li>

            <li class="mi-lista">
    
                Ejercicio 3: <br><br>
    
 <p>\( \left( \frac{3x^{3/2}y^3}{x^2y^{-1/2}} \right)^{-2} \)</p>                <label for="eleccion3_1" style="font-size: 16px;">
    
                <input type="radio" name="eleccion3[]" value="&lt;Sup&gt;x &lt;/sup&gt; / &lt;sub&gt; 9 y&lt;sup&gt;7&lt;/sup&gt; &lt;/sub&gt;" id="eleccion3_1">
                 \( \frac{x}{9y^6} \)
    
               <label for="eleccion3_2" style="font-size: 16px; margin-left: 20px;">    
                <input style="margin-left: 20px;" type="radio" name="eleccion3[]" value="<Sup>x </Sup> / <Sub> 9 y<Sup>7</Sup> </Sub>" id="eleccion3_2">
                \( \frac{x}{9y^7} \)
                    <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($pregunta3_3) ? $respuesta3_3 : ''; ?>     
                <br><br><br><br>
            
            </li>
                
            <h2>Desarrolle y simplifique las siguientes expresiones</h2><br><br>

            <li class="mi-lista">Ejercicio 1: <br><br>

            <img src="../../img/Captura de pantalla 2023-12-22 100056.png" alt=""><br><br>
    
                <label for="desarrolle" style="font-size: 16px;">
                <input type="radio" name="desarrolle[]" value="3x+18+8x-20" id="desarrolle">3x+18+8x-20
    

               <label for="desarrolle" style="font-size: 16px; margin-left: 20px;">  
                <input style="margin-left: 20px;" type="radio" name="desarrolle[]" value="11x-2" id="desarrolle">11x-2  <br><br>
    
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($ask1)? $answer1 : ''; ?>     
                <br><br><br><br>

            </li>

            <li class="mi-lista" >Ejercicio 2: <br><br>

            <img src="../../img/Captura de pantalla 2023-12-23 075340.png" alt=""><br><br>
    
                <label for="desarrolle_1" style="font-size: 16px;">
                <input type="radio" name="desarrolle1[]" value="4x<sup>2</sup>-5x+12x-15" id="desarrolle_1">4x<sup>2</sup>-5x+12x-15
    

               <label for="desarrolle_1" style="font-size: 16px; margin-left: 20px;">  
                <input style="margin-left: 20px;" type="radio" name="desarrolle1[]" value="4x<sup>2</sup>+7x-15" id="desarrolle_1">4x<sup>2</sup>+7x-15 <br><br>
    
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($ask2)? $answer2 : ''; ?>     
                <br><br><br><br>

            </li>



            

            <div class="in-line">

            <li class="mi-lista"> Ejercicio 3: <br><br>

            <div class="al-lado">
                <img width="146" height="59" src="../../img/Captura de pantalla 2023-12-25 085408.png" alt=""><br><br>
    
                <label for="desarrolle_2" style="font-size: 16px;">
                <input type="radio" name="desarrolle2[]" value="√a - √b" id="desarrolle_2">√a - √b
    

               <label for="desarrolle_2" style="font-size: 16px; margin-left: 20px;">  
                <input style="margin-left: 20px;" type="radio" name="desarrolle2[]" value="a-b" id="desarrolle_2">a-b <br><br>

    
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($ask3)? $answer3 : ''; ?>
            </div>  
             
            </li>




                
                <div class="al-lado" style="margin-left:150px;">
                
            <li>Ejercicio 4: <br><br>
                <img src="../../img/Captura de pantalla 2024-01-23 085513.png" alt=""><br><br>
    
                <label for="desarrolle_3" style="font-size: 16px;">
                <input type="radio" name="desarrolle3[]" value="4x<sup>2</sup>+12x+9" id="desarrolle_3">4x<sup>2</sup>+12x+9
    

               <label for="desarrolle_3" style="font-size: 16px; margin-left: 20px;">  
                <input style="margin-left: 20px;" type="radio" name="desarrolle3[]" value="a-b" id="desarrolle_3">4x <sup>2</sup>+8x+9 <br><br>

    
                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo $_POST && !empty($ask4)? $answer4 : ''; ?>     
            
            </li>
                
                </div>
            


                <br><br><br><br>

            </div>
            
            
            </li>

            <!-- <li class="mi-lista">Ejercicio 4: <br><br>

            <img src="../img/Captura de pantalla 2023-12-23 080951.png" alt=""><br><br>
    
                <label for="desarrolle_3" style="font-size: 16px;">
                <input type="radio" name="desarrolle3[]" value="4x<sup>2</sup>+12x+9" id="desarrolle_3">4x<sup>2</sup>+12x+9
    

               <label for="desarrolle_3" style="font-size: 16px; margin-left: 20px;">  
                <input style="margin-left: 20px;" type="radio" name="desarrolle3[]" value="a-b" id="desarrolle_3">4x <sup>2</sup>+8x+9 <br><br>

    
                <button type="submit" class="btn btn-success">Submit</button>
             
                
                

            </li> -->
        </ul>
    </form>
        </div>
        
    </div>
    
</body>
</html>