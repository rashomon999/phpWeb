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
        
         $respuesta_12 = '28';
        $respuesta_13 = '42';
        $respuesta_14 = '56';
        $respuesta_15 = '70';
        $respuesta_16 = '84';
        $respuesta_17 = '98';
        $respuesta_18 = '112';
 
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
    $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
   if ($respuesta_1 === '8') {  
       $verificar_1 = "correcto";
   } elseif ($respuesta_1 === '') {
       $verificar_1 = '';
   } else {
       $verificar_1 = "incorrecto";
   }

   // Verificar la respuesta de la segunda pregunta
   $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
   if ($respuesta_2 === 'truncar') {  
       $verificar_2 = "correcto";
   } elseif ($respuesta_2 === '') {
       $verificar_2 = '';
   } else {
       $verificar_2 = "incorrecto";
   }

   // Verificar la respuesta de la tercera pregunta
   $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
   if ($respuesta_3 === 'redondear sumando 1') {  
       $verificar_3 = "correcto";
   } elseif ($respuesta_3 === '') {
       $verificar_3 = '';
   } else {
       $verificar_3 = "incorrecto";
   }

   // Verificar la respuesta de la cuarta pregunta
   $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
   if ($respuesta_4 === 'parte decimal') {  
       $verificar_4 = "correcto";
   } elseif ($respuesta_4 === '') {
       $verificar_4 = '';
   } else {
       $verificar_4 = "incorrecto";
   }

   // Verificar la respuesta de la quinta pregunta
   $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
   if ($respuesta_5 === 'mantisa') {  
       $verificar_5 = "correcto";
   } elseif ($respuesta_5 === '') {
       $verificar_5 = '';
   } else {
       $verificar_5 = "incorrecto";
   }

   // Verificar la respuesta de la sexta pregunta
   $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
   if ($respuesta_6 === '11100') {  
       $verificar_6 = "correcto";
   } elseif ($respuesta_6 === '') {
       $verificar_6 = '';
   } else {
       $verificar_6 = "incorrecto";
   }

   // Verificar la respuesta de la séptima pregunta
   $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
   if ($respuesta_7 === 'abajo') {  
       $verificar_7 = "correcto";
   } elseif ($respuesta_7 === '') {
       $verificar_7 = '';
   } else {
       $verificar_7 = "incorrecto";
   }

   // Verificar la respuesta de la octava pregunta
   $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
   if ($respuesta_8 === 'arriba') {  
       $verificar_8 = "correcto";
   } elseif ($respuesta_8 === '') {
       $verificar_8 = '';
   } else {
       $verificar_8 = "incorrecto";
   }

   // Verificar la respuesta de la novena pregunta
   $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
   if ($respuesta_9 === 'Potencias de 2') {  
       $verificar_9 = "correcto";
   } elseif ($respuesta_9 === '') {
       $verificar_9 = '';
   } else {
       $verificar_9 = "incorrecto";
   }

   // Verificar la respuesta de la décima pregunta
   $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
   if ($respuesta_10 === 'suman 28') {  
       $verificar_10 = "correcto";
   } elseif ($respuesta_10 === '') {
       $verificar_10 = '';
   } else {
       $verificar_10 = "incorrecto";
   }

   // Verificar la respuesta de la undécima pregunta
   $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
   if ($respuesta_11 === 'Divisiones sucesivas') {  
       $verificar_11 = "correcto";
   } elseif ($respuesta_11 === '') {
       $verificar_11 = '';
   } else {
       $verificar_11 = "incorrecto";
   }


    // Verificar la respuesta de la primera pregunta
    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === 'Dividimos 28 sucesivamente'
    || $respuesta_12 === 'dividimos 28 sucesivamente'
    ) {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }
  
    // Verificar la respuesta de la segunda pregunta
    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === '2') { 
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
         $verificar_13 = "incorrecto";
    }
  
    // Verificar la respuesta de la tercera pregunta
    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'los residuos') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }
  
    // Verificar la respuesta de la cuarta pregunta
    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === '011100') { 
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }
  
    // Verificar la respuesta de la quinta pregunta
    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === '0.1\overline{0110}_2') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }
  
    // Verificar la respuesta de la sexta pregunta
    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === '0 011100,10110'
    || $respuesta_17 === '0011100,10110'
    ) {  
        $verificar_17 = "correcto";
        } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }
  
    // Verificar la respuesta de la séptima pregunta
    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === '14 bits') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }
  
        // Verificar la respuesta de la octava pregunta
    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === '0.003125') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
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
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style_2_0.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
 
.seccion {
    padding: 20px;
    box-sizing: border-box;
    height: 100vh;
    min-height: 190vh;
}

.seccion.derecha {
    width: calc(55% - 7.5px);  /* 55% para la derecha */
    margin-left: 15px;
    background-color: #f0f0f0;
}

/* Estilos específicos para la sección izquierda */
.seccion.izquierda {
    width: calc(45% - 7.5px);  /* 45% para la izquierda */
    background-color: #e0e0e0;
}

.hola {
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #1a1a1a;
            font-family: Arial, sans-serif;
        }
        
h1 {
            color: #f0f0f0;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .controls {
            background: #2a2a2a;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.5);
            border: 2px solid #444;
        }
        
        .control-group {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        label {
            font-weight: bold;
            font-size: 14px;
            color: #f0f0f0;
        }
        
        .color-btn {
            width: 40px;
            height: 40px;
            border: 3px solid #555;
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.2s, border-color 0.2s;
        }
        
        .color-btn:hover {
            transform: scale(1.1);
        }
        
        .color-btn.active {
            border-color: #fff;
            box-shadow: 0 0 10px rgba(255,255,255,0.5);
        }
        
        .blanco { background: #ffffff; }
        .amarillo { background: #ffeb3b; }
        .azul { background: #2196f3; }
        .rojo { background: #f44336; }
        .verde { background: #4caf50; }
        .naranja { background: #ff9800; }
        
        .tool-btn {
            padding: 10px 15px;
            background: #444;
            color: white;
            border: 2px solid #666;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s;
        }
        
        .tool-btn:hover {
            background: #555;
            transform: translateY(-2px);
        }
        
        .tool-btn.active {
            background: #666;
            border-color: #fff;
        }
        
        input[type="range"] {
            width: 120px;
        }
        
        button {
            padding: 10px 20px;
            background: #c62828;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }
        
        button:hover {
            background: #b71c1c;
        }
        
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
        
        #pizarron {
            background: #1e3a2e;
            border: 8px solid #8b7355;
            border-radius: 5px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.6), inset 0 0 20px rgba(0,0,0,0.3);
            cursor: crosshair;
            touch-action: none;
        }
        
        #pizarron.borrador {
            cursor: grab;
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
        
        // Reinicializar el pizarrón después de actualizar el DOM
        if (typeof inicializarPizarron === 'function') {
            inicializarPizarron();
        }
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    var f = document.getElementById('respuesta_16').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;
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

</script>
    
</head>
<body>  

<form action="./index.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 
 
   
  <h3>Conversión de 28.7 a Q6.7  </h3>

<div class="box">
  <strong>Regla de Aproximación mediante el Bit 
  <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="5">  
  :</strong>
  <ul>
    <li><strong>Bit 
    <input type="text"  value="<?php echo $respuesta_1; ?>" size="5" readonly>    
     = 0</strong> → 
     <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="5">
      .</li>
    <li><strong>Bit 
    <input type="text"  value="<?php echo $respuesta_1; ?>" size="5" readonly>     
     = 1</strong> → 
     <input type="text" name="respuesta_3" value="<?php echo $respuesta_3; ?>" size="17">
      a la 
     <input type="text" name="respuesta_4" value="<?php echo $respuesta_4; ?>" size="11">
       (
    <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="5">
         ).</li>
  </ul>
</div>
 
<button type="submit">Enviar</button>
<?php echo $verificar_1 ?>
<?php echo $verificar_2 ?>
<?php echo $verificar_3 ?>
<?php echo $verificar_4 ?>
<?php echo $verificar_5 ?>
<hr>
<h2>1️⃣ Convertir 28.7 a binario</h2>

<h3>Parte entera (28)</h3>
 
<h4>Método 1: 
<input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="15">    
  </h4>
<p>
<input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="24">     
  entre 
<input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="6"> 
y anotamos 
<input type="text" name="respuesta_14" value="<?php echo $respuesta_14; ?>" size="8"> 
 .</p>
 
<p>Se leen los residuos de 
<input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="5">    
  hacia 
<input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="5">
 :</p>
<p class="mono eq">28<sub>10</sub> = 
<input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="5"><sub>2</sub></p>

<h4>Método 2: 
<input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="11">    
 </h4>
<p>Buscamos qué 
<input type="text"  value="<?php echo $respuesta_9; ?>" size="11" readonly>     
 <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="6">    :</p>


<h4>En Q6 (6 bits)</h4>
<p>Usamos 6 bits para representar el valor:</p>
<p class="bits mono">
<input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="6">     
 </p>
 
<button type="submit">Enviar</button>
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
 <hr>
<h3>Parte fraccionaria: </h3>

<p>Por tanto: <span class="mono eq">0.7<sub>10</sub> =
 
 
   <span id="formula">
        \(   \)
    </span> 
 
    <input type="text" name="respuesta_16" size="10" id="respuesta_16" oninput="actualizarFormula()" 
    value="<?php echo $respuesta_16?>" size="15" >

<h2> Resultado final</h2>
<input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="11">     


<div class="grid two">
  <div>
    <p><strong>Binario (
        <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="11"> 
         ):</strong></p>
   </div>
 
</div>

<button type="submit">Enviar</button>
<?php echo $verificar_16 ?>
<?php echo $verificar_17 ?>
<?php echo $verificar_18 ?>
<hr>
<h2> Valor representado</h2>


 
<h3>Error por aproximación</h3>
= <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="5"> 
    <hr>

    


</div>




<div class="seccion derecha">
  <div class="hola"> 
<h1>📐 Pizarrón Matemático</h1>
    
    <div class="controls">
        <div class="control-group">
            <label>Tiza:</label>
            <div class="color-btn blanco active" data-color="#ffffff" title="Blanco"></div>
            <div class="color-btn amarillo" data-color="#ffeb3b" title="Amarillo"></div>
            <div class="color-btn azul" data-color="#2196f3" title="Azul"></div>
            <div class="color-btn rojo" data-color="#f44336" title="Rojo"></div>
            <div class="color-btn verde" data-color="#4caf50" title="Verde"></div>
            <div class="color-btn naranja" data-color="#ff9800" title="Naranja"></div>
        </div>
        
        <div class="control-group">
            <label>Grosor:</label>
            <input type="range" id="grosorPicker" min="2" max="12" value="3">
            <span id="grosorValor" style="color: #f0f0f0;">3</span>
        </div>
        
        <div class="control-group">
            <button class="tool-btn active" id="tizaBtn">✏️ Tiza</button>
            <button class="tool-btn" id="borradorBtn">🧽 Borrador</button>
        </div>
        
        <div class="checkbox-group">
            <input type="checkbox" id="cuadriculaCheck">
            <label for="cuadriculaCheck">Cuadrícula</label>
        </div>
        
        <button id="borrarBtn">🗑️ Borrar Todo</button>
    </div>
    
    <canvas id="pizarron" width="900" height="600"></canvas>
    
    <script>
    function inicializarPizarron() {
        const canvas = document.getElementById('pizarron');
        const ctx = canvas.getContext('2d');
        const grosorPicker = document.getElementById('grosorPicker');
        const grosorValor = document.getElementById('grosorValor');
        const borrarBtn = document.getElementById('borrarBtn');
        const tizaBtn = document.getElementById('tizaBtn');
        const borradorBtn = document.getElementById('borradorBtn');
        const cuadriculaCheck = document.getElementById('cuadriculaCheck');
        const colorBtns = document.querySelectorAll('.color-btn');
        
        let dibujando = false;
        let x = 0;
        let y = 0;
        let colorActual = '#ffffff';
        let modoActual = 'tiza';
        let mostrarCuadricula = false;
        
        // Ajustar canvas para dispositivos de alta resolución
        const dpr = window.devicePixelRatio || 1;
        const rect = canvas.getBoundingClientRect();
        canvas.width = rect.width * dpr;
        canvas.height = rect.height * dpr;
        ctx.scale(dpr, dpr);
        canvas.style.width = rect.width + 'px';
        canvas.style.height = rect.height + 'px';
        
        // Configuración inicial del contexto
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';
        
        // Dibujar cuadrícula
        function dibujarCuadricula() {
            if (mostrarCuadricula) {
                ctx.save();
                ctx.strokeStyle = 'rgba(255, 255, 255, 0.1)';
                ctx.lineWidth = 1;
                ctx.globalCompositeOperation = 'source-over';
                
                const espaciado = 30;
                
                for (let i = 0; i < rect.width; i += espaciado) {
                    ctx.beginPath();
                    ctx.moveTo(i, 0);
                    ctx.lineTo(i, rect.height);
                    ctx.stroke();
                }
                
                for (let i = 0; i < rect.height; i += espaciado) {
                    ctx.beginPath();
                    ctx.moveTo(0, i);
                    ctx.lineTo(rect.width, i);
                    ctx.stroke();
                }
                
                ctx.restore();
            }
        }
        
        dibujarCuadricula();
        
        // Eventos de colores
        colorBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                colorBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                colorActual = btn.dataset.color;
                modoActual = 'tiza';
                tizaBtn.classList.add('active');
                borradorBtn.classList.remove('active');
                canvas.classList.remove('borrador');
            });
        });
        
        // Eventos de herramientas
        tizaBtn.addEventListener('click', () => {
            modoActual = 'tiza';
            tizaBtn.classList.add('active');
            borradorBtn.classList.remove('active');
            canvas.classList.remove('borrador');
        });
        
        borradorBtn.addEventListener('click', () => {
            modoActual = 'borrador';
            borradorBtn.classList.add('active');
            tizaBtn.classList.remove('active');
            canvas.classList.add('borrador');
        });
        
        // Eventos del mouse
        canvas.addEventListener('mousedown', iniciarDibujo);
        canvas.addEventListener('mousemove', dibujar);
        canvas.addEventListener('mouseup', detenerDibujo);
        canvas.addEventListener('mouseout', detenerDibujo);
        
        // Eventos táctiles
        canvas.addEventListener('touchstart', (e) => {
            e.preventDefault();
            const touch = e.touches[0];
            const mouseEvent = new MouseEvent('mousedown', {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        });
        
        canvas.addEventListener('touchmove', (e) => {
            e.preventDefault();
            const touch = e.touches[0];
            const mouseEvent = new MouseEvent('mousemove', {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        });
        
        canvas.addEventListener('touchend', (e) => {
            e.preventDefault();
            const mouseEvent = new MouseEvent('mouseup', {});
            canvas.dispatchEvent(mouseEvent);
        });
        
        function obtenerPosicion(e) {
            const rect = canvas.getBoundingClientRect();
            return {
                x: e.clientX - rect.left,
                y: e.clientY - rect.top
            };
        }
        
        function iniciarDibujo(e) {
            dibujando = true;
            const pos = obtenerPosicion(e);
            x = pos.x;
            y = pos.y;
        }
        
        function dibujar(e) {
            if (!dibujando) return;
            
            const pos = obtenerPosicion(e);
            
            if (modoActual === 'borrador') {
                ctx.globalCompositeOperation = 'destination-out';
                ctx.lineWidth = grosorPicker.value * 3;
            } else {
                ctx.globalCompositeOperation = 'source-over';
                ctx.strokeStyle = colorActual;
                ctx.lineWidth = grosorPicker.value;
            }
            
            ctx.beginPath();
            ctx.moveTo(x, y);
            ctx.lineTo(pos.x, pos.y);
            ctx.stroke();
            
            x = pos.x;
            y = pos.y;
        }
        
        function detenerDibujo() {
            dibujando = false;
            ctx.globalCompositeOperation = 'source-over';
        }
        
        grosorPicker.addEventListener('input', () => {
            grosorValor.textContent = grosorPicker.value;
        });
        
        cuadriculaCheck.addEventListener('change', () => {
            mostrarCuadricula = cuadriculaCheck.checked;
            if (mostrarCuadricula) {
                dibujarCuadricula();
            } else {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
            }
        });
        
        borrarBtn.addEventListener('click', () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            dibujarCuadricula();
            ctx.globalCompositeOperation = 'source-over';
            ctx.lineCap = 'round';
            ctx.lineJoin = 'round';
        });
    }
    
    // Inicializar el pizarrón cuando cargue la página
    inicializarPizarron();
    </script>
</div>

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