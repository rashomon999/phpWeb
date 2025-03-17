<?php
if($_POST){
  print('holaaa');
}

$checkSvg ='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
<path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
</svg>';

$error =  '<svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
</svg>';
?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
  <title>Botón Triángulo</title>
</head>
<body>
  <div class="contenedor">
    <div class="inner-circle">
        <button class="triangulo-rectangulo" onclick="escribirTexto('D#m')"></button>
        <button class="triangulo-rectangulo-dos" onclick="escribirTexto('G#m')"></button>
        <button class="triangulo-rectangulo-tres" onclick="escribirTexto('C#m')"></button>
        <button class="triangulo-rectangulo-cuatro" onclick="escribirTexto('F#m')"></button>
        <button class="triangulo-rectangulo-cinco" onclick="escribirTexto('Bm')"></button>
        <button class="triangulo-rectangulo-seis" onclick="escribirTexto('E')"></button>
        <button class="triangulo-rectangulo-siete" onclick="escribirTexto('Am')"></button>
        <button class="triangulo-rectangulo-ocho" onclick="escribirTexto('Dm')"></button>
        <button class="triangulo-rectangulo-nueve" onclick="escribirTexto('Gm')"></button>
        <button class="triangulo-rectangulo-diez" onclick="escribirTexto('Cm')"></button>
        <button class="triangulo-rectangulo-once" onclick="escribirTexto('Fm')"></button>
        <button class="triangulo-rectangulo-doce" onclick="escribirTexto('Bbm')"></button>        
    </div>

    <button class="boton-triangulo" onclick="escribirTexto('F#M')"></button>
    <button class="boton-triangulo-dos" onclick="escribirTexto('BM')"></button>
    <button class="boton-triangulo-tres" onclick="escribirTexto('E')"></button>
    <button class="boton-triangulo-cuatro" onclick="escribirTexto('A')"></button>
    <button class="boton-triangulo-cinco" onclick="escribirTexto('D')"></button>
    <button class="boton-triangulo-seis" onclick="escribirTexto('GM')"></button>
    <button class="boton-triangulo-siete" onclick="escribirTexto('CM')"></button>
    <button class="boton-triangulo-ocho" onclick="escribirTexto('FM')"></button>
    <button class="boton-triangulo-nueve" onclick="escribirTexto('BbM')"></button>
    <button class="boton-triangulo-diez" onclick="escribirTexto('EbM')"></button>
    <button class="boton-triangulo-once" onclick="escribirTexto('AbM')"></button>
    <button class="boton-triangulo-doce" onclick="escribirTexto('C#M')"></button>

    <div class="lines-container">
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>      
    </div>
  </div>

  <div class="respuestas" style="margin: 110px; display: flex; flex-direction: column;"> 
    <form id="cuestionario" style="border: 2px solid black; padding: 20px;">
      CM: <br><br>
      <div>
        <label for="pregunta1">1. Introduce el sexto grado:</label>
        <input type="text" id="pregunta1" name="pregunta1" ><br><br>
        <button type="button" onclick="verificarRespuestas()">Verificar respuesta</button>
      </div>
      
      <div>
        <label for="pregunta2">2. Introduce cuarto grado:</label>
        <input type="text" id="pregunta2" name="pregunta2"><br><br>
        <button type="button" onclick="verificarRespuestas()">Verificar respuesta</button>
      </div>
      
      <div>
        <label for="pregunta3">3. Introduce el quinto grado:</label>
        <input type="text" id="pregunta3" name="pregunta3"><br><br>
        <button type="button" onclick="verificarRespuestas()">Verificar respuesta</button>
      </div>

      <div id="resultado">
        <span id="svgContainer1" style="display: none;"><?php echo $checkSvg; ?></span>
        <span id="svgContainer2" style="display: none;"><?php echo $checkSvg; ?></span>
        <span id="svgContainer3" style="display: none;"><?php echo $checkSvg; ?></span>
        
        <span id="errorContainer1" style="display: none;"><?php echo $error; ?></span>
        <span id="errorContainer2" style="display: none;"><?php echo $error; ?></span>
        <span id="errorContainer3" style="display: none;"><?php echo $error; ?></span>
    </div>
  

  <script>
    var inputActual = 1; // Variable para rastrear el input actual

    function escribirTexto(texto) {
        var inputActualId = 'pregunta' + inputActual;
        var inputActualElement = document.getElementById(inputActualId);

        if (inputActualElement && inputActualElement.value.trim() === '') {
          inputActualElement.value = texto;
          inputActual++;
        } else {
          // Si todos los inputs están llenos, reiniciar a 1
          inputActual = 1;
          inputActualId = 'pregunta' + inputActual;
          inputActualElement = document.getElementById(inputActualId);
          inputActualElement.value = texto;
          inputActual++;
    }
    }

    function verificarRespuestas() {
            var respuesta1 = document.getElementById('pregunta1').value;
            var respuesta2 = document.getElementById('pregunta2').value;
            var respuesta3 = document.getElementById('pregunta3').value;

            if (respuesta1 === 'Am') {
                document.getElementById('svgContainer1').style.display = 'inline-block';
                document.getElementById('errorContainer1').style.display = 'none';
            } else {
                document.getElementById('errorContainer1').style.display = 'inline-block';
                document.getElementById('svgContainer1').style.display = 'none';
            }

            if (respuesta2 === 'FM') {
                document.getElementById('svgContainer2').style.display = 'inline-block';
                document.getElementById('errorContainer2').style.display = 'none';
            } else {
                document.getElementById('errorContainer2').style.display = 'inline-block';
                document.getElementById('svgContainer2').style.display = 'none';
            }

            if (respuesta3 === 'GM') {
                document.getElementById('svgContainer3').style.display = 'inline-block';
                document.getElementById('errorContainer3').style.display = 'none';
            } else {
                document.getElementById('errorContainer3').style.display = 'inline-block';
                document.getElementById('svgContainer3').style.display = 'none';
            }
        }
    </script>
    </form>
    
    <div class="respuestas" style="margin-top: 20px; "> 
    <a href="DM.php" style="width: 100px; height: 30px; margin-top:20px" class="btn btn-success" type="button" onclick="siguienteFormulario()">Siguiente</a>
    </div>
    </div>

    
</body>
</html>
