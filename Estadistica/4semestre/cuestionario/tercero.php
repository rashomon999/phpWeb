<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagrama de Pruebas Estadísticas - Dos Muestras</title>
    <!-- Configuración de MathJax -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            width: 1400px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        svg {
            display: block;
            margin: 20px auto;
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
        .end-node {
            fill: #e74c3c;
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
            margin-top: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #2980b9;
        }
        input, .multiline-textarea {
            width: 100%;
            padding: 5px;
            margin: 2px 0;
            box-sizing: border-box;
            text-align: center;
            background-color: rgba(255,255,255,0.7);
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 12px;
            font-family: Arial, sans-serif;
        }
        .multiline-textarea {
            height: 60px;
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
        /* Estilos para el editor de fórmulas */
        .mathjax-editor {
            width: 100%;
            min-height: 40px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: rgba(255,255,255,0.7);
            text-align: center;
            font-size: 12px;
            font-family: Arial, sans-serif;
        }
        .mathjax-preview {
            min-height: 20px;
            margin-top: 5px;
            padding: 3px;
            border: 1px dashed #ddd;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Diagrama de Pruebas Estadísticas para Dos Muestras</h1>
        
        <svg width="1400" height="650">
            <!-- Nodo inicial -->
            <rect x="625" y="20" width="150" height="50" rx="5" class="node start-node"/>
            <foreignObject x="630" y="25" width="140" height="40">
                <input type="text" id="nodo1" placeholder="Dos muestras">
             </foreignObject>
            
            <!-- Flecha hacia abajo -->
            <line x1="700" y1="70" x2="700" y2="100" class="arrow"/>
            
            <!-- Nodo de decisión principal -->
            <polygon points="575,100 825,100 875,150 525,150" class="node decision-node"/>
            <foreignObject x="580" y="110" width="240" height="30">
                <input type="text" id="decision1" placeholder="Proporciones, medias o varianzas?">
            </foreignObject>
            
            <!-- Rama izquierda (Proporciones) -->
            <line x1="545" y1="125" x2="350" y2="125" class="arrow yes-line"/>
            <rect x="150" y="100" width="200" height="50" rx="5" class="node test-node"/>
            <foreignObject x="155" y="105" width="190" height="40">
                <input type="text" id="proporciones1" placeholder="Prueba Z de proporciones">
             </foreignObject>
            
            <!-- Rama derecha (Varianzas) -->
            <line x1="850" y1="125" x2="1050" y2="125" class="arrow no-line"/>
            <rect x="1050" y="100" width="240" height="50" rx="5" class="node test-node"/>
            <foreignObject x="1055" y="105" width="230" height="40">
                <input type="text" id="varianzas1" placeholder="Prueba F de relación de varianzas">
            </foreignObject>
            
            <!-- Rama central (Medias) -->
            <line x1="700" y1="150" x2="700" y2="200" class="arrow"/>
            
            <!-- Nodo de medias -->
            <rect x="625" y="200" width="150" height="50" rx="5" class="node test-node"/>
            <foreignObject x="630" y="205" width="140" height="40">
                <input type="text" id="medias1" placeholder="¿Son independientes?">
            </foreignObject>
            
            <!-- Rama Sí (independientes) -->
            <line x1="625" y1="225" x2="450" y2="225" class="arrow yes-line"/>
            <rect x="250" y="200" width="200" height="50" rx="5" class="node test-node"/>
            <foreignObject x="255" y="205" width="190" height="40">
                <input type="text" id="independientes1" placeholder="Prueba t para muestras independientes">
             </foreignObject>

            <!-- Rama No (dependientes) -->
            <line x1="700" y1="250" x2="700" y2="300" class="arrow no-line"/>
            
            <!-- Nodo de independientes (MODIFICADO PARA SOPORTAR MATHJAX) -->
            <rect x="625" y="300" width="150" height="80" rx="5" class="node decision-node"/>
            <foreignObject x="630" y="305" width="140" height="70">
                <div style="display: flex; flex-direction: column; height: 100%;">
                    <input type="text" id="independientes" 
                           placeholder="¿Conoce σ₁ y σ₂?" 
                           style="margin-bottom: 5px;"
                           oninput="updateSigmaPreview()">
                    <div id="sigma-preview" class="mathjax-preview"></div>
                </div>
            </foreignObject>

            <!-- Resto del diagrama (sin cambios) -->
            <!-- Rama Sí (conoce σ) -->
            <line x1="625" y1="380" x2="450" y2="380" class="arrow yes-line"/>
            <rect x="300" y="350" width="150" height="70" rx="5" class="node test-node"/>
            <foreignObject x="305" y="355" width="140" height="60">
                <textarea id="conoce1" 
                          placeholder="Prueba Z para diferencia de medias" 
                          class="multiline-textarea"
                          oninput="autoAdjust(this)"></textarea>
            </foreignObject>
             
            <!-- Rama No (no conoce σ) -->
            <line x1="775" y1="380" x2="950" y2="380" class="arrow no-line"/>
            <rect x="950" y="350" width="150" height="70" rx="5" class="node test-node"/>
            <foreignObject x="955" y="355" width="140" height="60">
                <textarea id="noconoce" 
                          placeholder="Prueba F de igualdad de varianzas" 
                          class="multiline-textarea"
                          oninput="autoAdjust(this)"></textarea>
            </foreignObject>
            
            <!-- Flecha hacia abajo desde Prueba F -->
            <line x1="1025" y1="420" x2="1025" y2="470" class="arrow"/>
            
            <!-- Nodo de varianzas iguales -->
            <rect x="950" y="470" width="150" height="50" rx="5" class="node decision-node"/>
            <foreignObject x="955" y="475" width="140" height="40">
                <input type="text" id="var_iguales" placeholder="¿Las varianzas son iguales?">
            </foreignObject>
            
            <!-- Rama Sí (varianzas iguales) -->
            <line x1="1025" y1="520" x2="1025" y2="570" class="arrow yes-line"/>
            <rect x="950" y="570" width="150" height="70" rx="5" class="node test-node"/>
            <foreignObject x="955" y="575" width="140" height="60">
                <textarea id="iguales" 
                          placeholder="Prueba t para diferencia de medias con varianzas iguales" 
                          class="multiline-textarea"
                          oninput="autoAdjust(this)"></textarea>
            </foreignObject>
            
            <!-- Rama No (varianzas diferentes) -->
            <line x1="1100" y1="495" x2="1200" y2="495" class="arrow no-line"/>
            <rect x="1200" y="470" width="180" height="70" rx="5" class="node test-node"/>
            <foreignObject x="1205" y="475" width="170" height="60">
                <textarea id="diferentes" 
                          placeholder="Prueba t para diferencia de medias con varianzas diferentes" 
                          class="multiline-textarea"
                          oninput="autoAdjust(this)"></textarea>
            </foreignObject>
            
            <!-- textos descriptivos -->
            <text x="460" y="120" font-size="12">Proporción</text>
            <text x="900" y="120" font-size="12">Varianza</text>
            <text x="680" y="180" font-size="12">Media</text>
            <text x="700" y="270" font-size="14">Si</text>
            <text x="560" y="220" font-size="14">No</text>
            <text x="560" y="340" font-size="14">Si</text>
            <text x="860" y="340" font-size="14">No</text>
        </svg>
        
        <div class="button-container">
            <button onclick="validarRespuestas()">Validar Respuestas</button>
            <div id="resultado"></div>
         </div>
        
        <script>
            // Configuración de MathJax
            MathJax = {
                tex: {
                    inlineMath: [['\\(', '\\)']],
                    displayMath: [['\\[', '\\]']],
                    processEscapes: true
                },
                options: {
                    ignoreHtmlClass: 'tex2jax_ignore',
                    processHtmlClass: 'tex2jax_process'
                }
            };

            function updateSigmaPreview() {
    const input = document.getElementById('independientes');
    const preview = document.getElementById('sigma-preview');
    
    // Versión inline (fórmulas dentro del texto)
    preview.innerHTML = `\\( ${input.value} \\)`;
    
    MathJax.typesetPromise([preview]).catch(err => {
        console.error('Error al renderizar MathJax:', err);
        preview.textContent = input.value;
    });
}

            // Función para ajustar automáticamente la altura de los textareas
            function autoAdjust(textarea) {
                textarea.style.height = 'auto';
                textarea.style.height = (textarea.scrollHeight) + 'px';
            }
            
            // Respuestas correctas actualizadas
            const respuestasCorrectas = {
                "nodo1": "Dos muestras",
                "decision1": "Proporciones, medias o varianzas?",
                "proporciones1": "Prueba Z de proporciones",
                "varianzas1": "Prueba F de relacion de varianzas",
                "medias1": "¿Son independientes?",
                "independientes1": "Prueba t para muestras independientes",
                "independientes": { latex: "\\text{¿conoce }\\sigma_1\\text{ y }\\sigma_2\\text{?}",
                alternativas: [
                "¿conoce σ₁ y σ₂?",
                "¿conoce σ1 y σ2?",
                "\\text{¿conoce }\\sigma_1\\text{ y }\\sigma_2\\text{ ?}"
                ]
                },
                "conoce1": "Prueba Z para diferencia de medias",
                "noconoce": "Prueba F de igualdad de varianzas",
                "var_iguales": "¿Las varianzas son iguales?",
                "iguales": "Prueba t para diferencia de medias con varianzas iguales",
                "diferentes": "Prueba t para diferencia de medias con varianzas diferentes"
            };
            
            function validarRespuestas() {
    let correctas = 0;
    const total = Object.keys(respuestasCorrectas).length;
    
    Object.keys(respuestasCorrectas).forEach(id => {
        const input = document.getElementById(id);
        if (!input) return;
        
        const respuestaUsuario = (input.value || input.textContent).trim();
        let respuestaCorrecta = respuestasCorrectas[id];
        
        // Manejar nuevo formato de respuesta (objeto con alternativas)
        if (typeof respuestaCorrecta === 'object') {
            respuestaCorrecta = respuestaCorrecta.latex;
        }
        
        // Limpiar clases
        if (input.classList) input.classList.remove('correct', 'incorrect');
        
        // Comparación especial para el campo de fórmulas
        if (id === 'independientes') {
            const normalizar = (str) => {
                return str.toLowerCase()
                    .replace(/[\\{}¿?]/g, '')
                    .replace(/\s+/g, '')
                    .replace(/[₁₂]/g, m => m === '₁' ? '1' : '2')
                    .replace(/σ|\\sigma/g, 'σ');
            };
            
            const esCorrecta = [
                normalizar(respuestaCorrecta),
                ...(respuestasCorrectas[id].alternativas || []).map(normalizar)
            ].includes(normalizar(respuestaUsuario));
            
            if (esCorrecta) {
                input.classList.add('correct');
                correctas++;
            } else if (respuestaUsuario !== "") {
                input.classList.add('incorrect');
            }
        } else {
            // Validación normal para otros campos
            if (respuestaUsuario.toLowerCase() === respuestaCorrecta.toLowerCase()) {
                if (input.classList) input.classList.add('correct');
                correctas++;
            } else if (respuestaUsuario !== "") {
                if (input.classList) input.classList.add('incorrect');
            }
        }
    });
                
                const porcentaje = Math.round((correctas / total) * 100);
                const resultado = document.getElementById('resultado');
                
                if (porcentaje === 100) {
                    resultado.textContent = `¡Perfecto! ${correctas}/${total} correctas (${porcentaje}%)`;
                    resultado.style.color = 'green';
                } else if (porcentaje >= 70) {
                    resultado.textContent = `Bien, pero puedes mejorar: ${correctas}/${total} correctas (${porcentaje}%)`;
                    resultado.style.color = 'orange';
                } else {
                    resultado.textContent = `Necesitas practicar más: ${correctas}/${total} correctas (${porcentaje}%)`;
                    resultado.style.color = 'red';
                }
            }
            
            // Ajustar inicialmente todos los textareas
            document.querySelectorAll('.multiline-textarea').forEach(textarea => {
                autoAdjust(textarea);
            });
        </script>
    </div>
</body>
</html>