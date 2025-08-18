<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario sobre el Diagrama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .correcto { color: green; font-weight: bold; }
        .incorrecto { color: red; font-weight: bold; }
    </style>
</head>
<body class="container mt-4">
    <h2 class="text-center">Cuestionario sobre el Diagrama</h2>
    <p class="text-center">Responde correctamente las preguntas sobre las conexiones del diagrama.</p>
    
    <form id="cuestionario">
        <div class="mb-3">
            <label for="pregunta1" class="form-label">¿Qué prueba se usa si conocemos &sigma;?</label>
            <input type="text" class="form-control" id="pregunta1">
            <div id="resultado1"></div>
        </div>

        <div class="mb-3">
            <label for="pregunta2" class="form-label">¿Qué prueba se usa para la varianza?</label>
            <input type="text" class="form-control" id="pregunta2">
            <div id="resultado2"></div>
        </div>

        <div class="mb-3">
            <label for="pregunta3" class="form-label">¿Qué prueba se usa para la proporción?</label>
            <input type="text" class="form-control" id="pregunta3">
            <div id="resultado3"></div>
        </div>

        <button type="button" class="btn btn-primary" onclick="verificarRespuestas()">Verificar</button>
    </form>
    
    <script>
        function verificarRespuestas() {
            const respuestasCorrectas = {
                pregunta1: "prueba Z para la media",
                pregunta2: "prueba X^2",
                pregunta3: "Prueba Z para la proporción"
            };

            for (let i = 1; i <= 3; i++) {
                let respuestaUsuario = document.getElementById(`pregunta${i}`).value.trim();
                let resultado = document.getElementById(`resultado${i}`);
                
                if (respuestaUsuario === respuestasCorrectas[`pregunta${i}`]) {
                    resultado.innerHTML = "✅ Correcto";
                    resultado.className = "correcto";
                } else {
                    resultado.innerHTML = "❌ Incorrecto";
                    resultado.className = "incorrecto";
                }
            }
        }
    </script>
</body>
</html>
