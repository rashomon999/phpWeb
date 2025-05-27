<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagrama de Pruebas Estadísticas - Una Muestra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1400px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }
        svg {
            display: block;
            margin: 0 auto;
            width: 100%;
            height: auto;
        }
        .node {
            stroke: #2c3e50;
            stroke-width: 2px;
        }
        .start-node {
            fill: #3498db;
        }
        .decision-node {
            fill: #f39c12;
        }
        .test-node {
            fill: #2ecc71;
        }
        text {
            font-size: 12px;
            font-weight: bold;
            fill: #2c3e50;
        }
        .arrow {
            stroke: #2c3e50;
            stroke-width: 2px;
            fill: none;
        }
        .yes-line {
            stroke: #27ae60;
        }
        .no-line {
            stroke: #e74c3c;
        }
        .button-container {
            text-align: center;
            margin-top: 30px;
        }
        button {
            padding: 12px 24px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2980b9;
        }
        input, .multiline-textarea {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
            text-align: center;
            background-color: rgba(255,255,255,0.7);
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 13px;
            font-family: Arial, sans-serif;
        }
        .multiline-textarea {
            height: 40px;
            resize: none;
            white-space: pre-wrap;
            word-wrap: break-word;
            overflow: hidden;
            line-height: 1.4;
        }
        .correct {
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .incorrect {
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        #resultado {
            margin-top: 20px;
            padding: 15px;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
        }
        .branch-label {
            font-size: 13px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Diagrama de Pruebas Estadísticas para Una Muestra</h1>
        
        <svg width="1400" height="450">
            <!-- Nodo inicial -->
            <rect x="375" y="30" width="150" height="50" rx="5" class="node start-node"/>
            <foreignObject x="380" y="35" width="140" height="40">
                <input type="text" id="nodo1" placeholder="Una muestra">
            </foreignObject>
            
            <!-- Flecha hacia abajo -->
            <line x1="450" y1="80" x2="450" y2="110" class="arrow"/>
            
            <!-- Nodo de decisión principal - Centrado -->
            <polygon points="350,110 550,110 600,160 300,160" class="node decision-node"/>
            <foreignObject x="360" y="125" width="180" height="30">
                <input type="text" id="decision1" placeholder="Proporción, media o varianza?">
            </foreignObject>
            
            <!-- Rama izquierda (Proporción) -->
            <line x1="330" y1="135" x2="200" y2="135" class="arrow yes-line"/>
            <text x="235" y="130" class="branch-label">Proporción</text>
            <rect x="0" y="110" width="200" height="50" rx="5" class="node test-node"/>
            <foreignObject x="2" y="120" width="180" height="30">
                <input type="text" id="proporcion" placeholder="Prueba Z para proporción">
            </foreignObject>
            
            <!-- Rama derecha (Varianza) -->
            <line x1="577" y1="135" x2="700" y2="135" class="arrow no-line"/>
            <text x="605" y="130" class="branch-label">Varianza</text>
            <rect x="700" y="110" width="200" height="50" rx="5" class="node test-node"/>
            <foreignObject x="710" y="120" width="180" height="30">
                <input type="text" id="varianza" placeholder="Prueba χ²">
            </foreignObject>
            
            <!-- Rama central (Media) -->
            <line x1="450" y1="160" x2="450" y2="210" class="arrow"/>
            <text x="460" y="185" class="branch-label">Media</text>
            
            <!-- Nodo de decisión para media - Centrado -->
            <polygon points="350,210 550,210 600,260 300,260" class="node decision-node"/>
            <foreignObject x="360" y="225" width="180" height="30">
                <input type="text" id="decisionMedia" placeholder="¿Conoce σ?">
            </foreignObject>
            
            <!-- Rama Sí (conoce σ) -->
            <line x1="323" y1="235" x2="200" y2="235" class="arrow yes-line"/>
            <text x="275" y="230" class="branch-label">Sí</text>
            <rect x="50" y="210" width="200" height="50" rx="5" class="node test-node"/>
            <foreignObject x="60" y="220" width="180" height="30">
                <input type="text" id="mediaConSigma" placeholder="Prueba Z para media">
            </foreignObject>
            
            <!-- Rama No (no conoce σ) -->
            <line x1="450" y1="260" x2="450" y2="330" class="arrow no-line"/>
            <text x="460" y="295" class="branch-label">No</text>
            <rect x="400" y="330" width="100" height="50" rx="5" class="node test-node"/>
            <foreignObject x="410" y="340" width="80" height="30">
                <input type="text" id="mediaSinSigma" placeholder="Prueba t">
            </foreignObject>
        </svg>
        
        <div class="button-container">
            <button onclick="validarRespuestas()">Validar Respuestas</button>
            <div id="resultado"></div>
        </div>
        
        <script>
            // Respuestas correctas
            const respuestasCorrectas = {
                "nodo1": "Una muestra",
                "decision1": "Proporción, media o varianza?",
                "proporcion": ["Prueba Z para proporción", "Z-test proporción"],
                "varianza": ["Prueba χ²", "Prueba Chi-cuadrado", "Prueba X^2"],
                "decisionMedia": "¿Conoce σ?",
                "mediaConSigma": ["Prueba Z para media", "Z-test media"],
                "mediaSinSigma": ["Prueba t", "t-test"]
            };
            
            function validarRespuestas() {
                let correctas = 0;
                const total = Object.keys(respuestasCorrectas).length;
                const resultado = document.getElementById('resultado');
                
                // Validar cada campo
                for (const [id, alternativas] of Object.entries(respuestasCorrectas)) {
                    const input = document.getElementById(id);
                    if (!input) continue;
                    
                    const respuesta = input.value.trim();
                    let esCorrecta = false;
                    
                    // Limpiar clases anteriores
                    input.classList.remove('correct', 'incorrect');
                    
                    // Verificar si la respuesta es un array (alternativas múltiples)
                    if (Array.isArray(alternativas)) {
                        // Verificar si la respuesta coincide con alguna alternativa
                        for (const alternativa of alternativas) {
                            if (respuesta.toLowerCase() === alternativa.toLowerCase()) {
                                esCorrecta = true;
                                break;
                            }
                        }
                    } else {
                        // Comparación directa para respuestas simples
                        esCorrecta = respuesta.toLowerCase() === alternativas.toLowerCase();
                    }
                    
                    // Aplicar clase según el resultado
                    if (respuesta === "") {
                        // No hacer nada si está vacío
                    } else if (esCorrecta) {
                        input.classList.add('correct');
                        correctas++;
                    } else {
                        input.classList.add('incorrect');
                    }
                }
                
                // Mostrar resultado general
                const porcentaje = Math.round((correctas / total) * 100);
                if (porcentaje === 100) {
                    resultado.textContent = `¡Perfecto! ${correctas}/${total} correctas (${porcentaje}%)`;
                    resultado.style.color = 'green';
                } else if (porcentaje >= 70) {
                    resultado.textContent = `Bien, pero puedes mejorar: ${correctas}/${total} correctas (${porcentaje}%)`;
                    resultado.style.color = 'orange';
                } else if (correctas > 0) {
                    resultado.textContent = `Necesitas practicar más: ${correctas}/${total} correctas (${porcentaje}%)`;
                    resultado.style.color = 'red';
                } else {
                    resultado.textContent = "Ingresa tus respuestas y haz clic en Validar";
                    resultado.style.color = '#2c3e50';
                }
            }
            
            // Función para ajustar automáticamente la altura de los textareas
            function autoAdjust(textarea) {
                textarea.style.height = 'auto';
                textarea.style.height = (textarea.scrollHeight) + 'px';
            }
            
            // Ajustar inicialmente todos los textareas
            document.querySelectorAll('.multiline-textarea').forEach(textarea => {
                autoAdjust(textarea);
            });
        </script>
    </div>
</body>
</html>