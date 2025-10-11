```php
<?php
// Inicializar variables de respuestas y verificaciones
for ($i = 1; $i <= 100; $i++) {
    ${"respuesta_" . $i} = '';
    ${"verificar_" . $i} = '';
}

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {
        // Establecer respuestas correctas para el cuestionario
        $respuesta_1 = 'C(A^T)';
        $respuesta_2 = 'todas las combinaciones lineales de sus filas';
        $respuesta_3 = 'filas no nulas del resultado escalonado reducido (RREF)';
        $respuesta_4 = 'no depende de b';
        $respuesta_5 = 'b no pertenece al espacio columna de A';
        $respuesta_6 = 'C(A^T)';
        $respuesta_7 = 'C(A)';
        $respuesta_8 = 'N(A)';
        $respuesta_9 = 'N(A^T)';
        $respuesta_10 = '4 vectores en R^3';
        $respuesta_11 = 'A x = b';
        $respuesta_12 = 'inconsistente';
        $respuesta_13 = 'R^3';
        $respuesta_14 = 'R^4';
        $respuesta_15 = 'b^T A = 0^T';
        $respuesta_16 = 'A x = 0';
        $respuesta_17 = 'A^T y = 0';
        $respuesta_18 = 'R^3';
        $respuesta_19 = 'R^4';
        $respuesta_20 = 'α r_1 + β r_2';
        $respuesta_21 = 'r_1 × r_2';
        $respuesta_22 = 'a x + b y + c z = 0';
        $respuesta_23 = 's r_1 + t r_2';
        $respuesta_24 = 'x · v = 0';
        $respuesta_25 = 'ortogonales a todas las filas de A';
        $respuesta_26 = 'A^T b = 0';
        $respuesta_27 = 'b^T A = 0^T';
        $respuesta_28 = 'N(A^T) = C(A)^⊥';
        $respuesta_29 = 'ortogonal a todas las columnas de A';
        $respuesta_30 = 'u_i · u_j = 0';
        $respuesta_31 = '||u_i|| = 1';
        $respuesta_32 = 'A^T A \hat{x} = A^T b';
        $respuesta_33 = 'p = A \hat{x}';
        $respuesta_34 = 'u_j^{n-1}';
        $respuesta_35 = 'np.random.rand(n)';
        $respuesta_36 = 'u / np.linalg.norm(u)';
        $respuesta_37 = 'V @ np.ones(n)';
        $respuesta_38 = '1';
        $respuesta_39 = 'np.linalg.inv(V) @ b';
        $respuesta_40 = 'np.linalg.qr(V)';
        $respuesta_41 = 'np.linalg.solve(V, b)';
        $respuesta_42 = 'np.linalg.cond(V)';
        $respuesta_43 = 'np.linalg.norm(x - 1)';
        $respuesta_44 = '@';
        $respuesta_45 = 'producto matricial';
        $respuesta_46 = 'R x = Q^T b';
        $respuesta_47 = 'triangular superior';
        $respuesta_48 = 'np.dot(R[i, i+1:], x_qr[i+1:])';
        
        // Marcar todas como correctas
        for ($i = 1; $i <= 100; $i++) {
            ${"verificar_$i"} = "correcto";
        }
    } else {
        // Verificar respuestas individuales
        $respuesta_1 = isset($_POST['respuesta_1']) ? trim($_POST['respuesta_1']) : '';
        $respuesta_2 = isset($_POST['respuesta_2']) ? trim($_POST['respuesta_2']) : '';
        $respuesta_3 = isset($_POST['respuesta_3']) ? trim($_POST['respuesta_3']) : '';
        $respuesta_4 = isset($_POST['respuesta_4']) ? trim($_POST['respuesta_4']) : '';
        $respuesta_5 = isset($_POST['respuesta_5']) ? trim($_POST['respuesta_5']) : '';
        $respuesta_6 = isset($_POST['respuesta_6']) ? trim($_POST['respuesta_6']) : '';
        $respuesta_7 = isset($_POST['respuesta_7']) ? trim($_POST['respuesta_7']) : '';
        $respuesta_8 = isset($_POST['respuesta_8']) ? trim($_POST['respuesta_8']) : '';
        $respuesta_9 = isset($_POST['respuesta_9']) ? trim($_POST['respuesta_9']) : '';
        $respuesta_10 = isset($_POST['respuesta_10']) ? trim($_POST['respuesta_10']) : '';
        $respuesta_11 = isset($_POST['respuesta_11']) ? trim($_POST['respuesta_11']) : '';
        $respuesta_12 = isset($_POST['respuesta_12']) ? trim($_POST['respuesta_12']) : '';
        $respuesta_13 = isset($_POST['respuesta_13']) ? trim($_POST['respuesta_13']) : '';
        $respuesta_14 = isset($_POST['respuesta_14']) ? trim($_POST['respuesta_14']) : '';
        $respuesta_15 = isset($_POST['respuesta_15']) ? trim($_POST['respuesta_15']) : '';
        $respuesta_16 = isset($_POST['respuesta_16']) ? trim($_POST['respuesta_16']) : '';
        $respuesta_17 = isset($_POST['respuesta_17']) ? trim($_POST['respuesta_17']) : '';
        $respuesta_18 = isset($_POST['respuesta_18']) ? trim($_POST['respuesta_18']) : '';
        $respuesta_19 = isset($_POST['respuesta_19']) ? trim($_POST['respuesta_19']) : '';
        $respuesta_20 = isset($_POST['respuesta_20']) ? trim($_POST['respuesta_20']) : '';
        $respuesta_21 = isset($_POST['respuesta_21']) ? trim($_POST['respuesta_21']) : '';
        $respuesta_22 = isset($_POST['respuesta_22']) ? trim($_POST['respuesta_22']) : '';
        $respuesta_23 = isset($_POST['respuesta_23']) ? trim($_POST['respuesta_23']) : '';
        $respuesta_24 = isset($_POST['respuesta_24']) ? trim($_POST['respuesta_24']) : '';
        $respuesta_25 = isset($_POST['respuesta_25']) ? trim($_POST['respuesta_25']) : '';
        $respuesta_26 = isset($_POST['respuesta_26']) ? trim($_POST['respuesta_26']) : '';
        $respuesta_27 = isset($_POST['respuesta_27']) ? trim($_POST['respuesta_27']) : '';
        $respuesta_28 = isset($_POST['respuesta_28']) ? trim($_POST['respuesta_28']) : '';
        $respuesta_29 = isset($_POST['respuesta_29']) ? trim($_POST['respuesta_29']) : '';
        $respuesta_30 = isset($_POST['respuesta_30']) ? trim($_POST['respuesta_30']) : '';
        $respuesta_31 = isset($_POST['respuesta_31']) ? trim($_POST['respuesta_31']) : '';
        $respuesta_32 = isset($_POST['respuesta_32']) ? trim($_POST['respuesta_32']) : '';
        $respuesta_33 = isset($_POST['respuesta_33']) ? trim($_POST['respuesta_33']) : '';
        $respuesta_34 = isset($_POST['respuesta_34']) ? trim($_POST['respuesta_34']) : '';
        $respuesta_35 = isset($_POST['respuesta_35']) ? trim($_POST['respuesta_35']) : '';
        $respuesta_36 = isset($_POST['respuesta_36']) ? trim($_POST['respuesta_36']) : '';
        $respuesta_37 = isset($_POST['respuesta_37']) ? trim($_POST['respuesta_37']) : '';
        $respuesta_38 = isset($_POST['respuesta_38']) ? trim($_POST['respuesta_38']) : '';
        $respuesta_39 = isset($_POST['respuesta_39']) ? trim($_POST['respuesta_39']) : '';
        $respuesta_40 = isset($_POST['respuesta_40']) ? trim($_POST['respuesta_40']) : '';
        $respuesta_41 = isset($_POST['respuesta_41']) ? trim($_POST['respuesta_41']) : '';
        $respuesta_42 = isset($_POST['respuesta_42']) ? trim($_POST['respuesta_42']) : '';
        $respuesta_43 = isset($_POST['respuesta_43']) ? trim($_POST['respuesta_43']) : '';
        $respuesta_44 = isset($_POST['respuesta_44']) ? trim($_POST['respuesta_44']) : '';
        $respuesta_45 = isset($_POST['respuesta_45']) ? trim($_POST['respuesta_45']) : '';
        $respuesta_46 = isset($_POST['respuesta_46']) ? trim($_POST['respuesta_46']) : '';
        $respuesta_47 = isset($_POST['respuesta_47']) ? trim($_POST['respuesta_47']) : '';
        $respuesta_48 = isset($_POST['respuesta_48']) ? trim($_POST['respuesta_48']) : '';

        // Verificar respuestas
        $verificar_1 = ($respuesta_1 === 'C(A^T)') ? 'correcto' : ($respuesta_1 === '' ? '' : 'incorrecto');
        $verificar_2 = ($respuesta_2 === 'todas las combinaciones lineales de sus filas') ? 'correcto' : ($respuesta_2 === '' ? '' : 'incorrecto');
        $verificar_3 = ($respuesta_3 === 'filas no nulas del resultado escalonado reducido (RREF)') ? 'correcto' : ($respuesta_3 === '' ? '' : 'incorrecto');
        $verificar_4 = ($respuesta_4 === 'no depende de b') ? 'correcto' : ($respuesta_4 === '' ? '' : 'incorrecto');
        $verificar_5 = ($respuesta_5 === 'b no pertenece al espacio columna de A') ? 'correcto' : ($respuesta_5 === '' ? '' : 'incorrecto');
        $verificar_6 = ($respuesta_6 === 'C(A^T)') ? 'correcto' : ($respuesta_6 === '' ? '' : 'incorrecto');
        $verificar_7 = ($respuesta_7 === 'C(A)') ? 'correcto' : ($respuesta_7 === '' ? '' : 'incorrecto');
        $verificar_8 = ($respuesta_8 === 'N(A)') ? 'correcto' : ($respuesta_8 === '' ? '' : 'incorrecto');
        $verificar_9 = ($respuesta_9 === 'N(A^T)') ? 'correcto' : ($respuesta_9 === '' ? '' : 'incorrecto');
        $verificar_10 = ($respuesta_10 === '4 vectores en R^3') ? 'correcto' : ($respuesta_10 === '' ? '' : 'incorrecto');
        $verificar_11 = ($respuesta_11 === 'A x = b') ? 'correcto' : ($respuesta_11 === '' ? '' : 'incorrecto');
        $verificar_12 = ($respuesta_12 === 'inconsistente') ? 'correcto' : ($respuesta_12 === '' ? '' : 'incorrecto');
        $verificar_13 = ($respuesta_13 === 'R^3') ? 'correcto' : ($respuesta_13 === '' ? '' : 'incorrecto');
        $verificar_14 = ($respuesta_14 === 'R^4') ? 'correcto' : ($respuesta_14 === '' ? '' : 'incorrecto');
        $verificar_15 = ($respuesta_15 === 'b^T A = 0^T') ? 'correcto' : ($respuesta_15 === '' ? '' : 'incorrecto');
        $verificar_16 = ($respuesta_16 === 'A x = 0') ? 'correcto' : ($respuesta_16 === '' ? '' : 'incorrecto');
        $verificar_17 = ($respuesta_17 === 'A^T y = 0') ? 'correcto' : ($respuesta_17 === '' ? '' : 'incorrecto');
        $verificar_18 = ($respuesta_18 === 'R^3') ? 'correcto' : ($respuesta_18 === '' ? '' : 'incorrecto');
        $verificar_19 = ($respuesta_19 === 'R^4') ? 'correcto' : ($respuesta_19 === '' ? '' : 'incorrecto');
        $verificar_20 = ($respuesta_20 === 'α r_1 + β r_2') ? 'correcto' : ($respuesta_20 === '' ? '' : 'incorrecto');
        $verificar_21 = ($respuesta_21 === 'r_1 × r_2') ? 'correcto' : ($respuesta_21 === '' ? '' : 'incorrecto');
        $verificar_22 = ($respuesta_22 === 'a x + b y + c z = 0') ? 'correcto' : ($respuesta_22 === '' ? '' : 'incorrecto');
        $verificar_23 = ($respuesta_23 === 's r_1 + t r_2') ? 'correcto' : ($respuesta_23 === '' ? '' : 'incorrecto');
        $verificar_24 = ($respuesta_24 === 'x · v = 0') ? 'correcto' : ($respuesta_24 === '' ? '' : 'incorrecto');
        $verificar_25 = ($respuesta_25 === 'ortogonales a todas las filas de A') ? 'correcto' : ($respuesta_25 === '' ? '' : 'incorrecto');
        $verificar_26 = ($respuesta_26 === 'A^T b = 0') ? 'correcto' : ($respuesta_26 === '' ? '' : 'incorrecto');
        $verificar_27 = ($respuesta_27 === 'b^T A = 0^T') ? 'correcto' : ($respuesta_27 === '' ? '' : 'incorrecto');
        $verificar_28 = ($respuesta_28 === 'N(A^T) = C(A)^⊥') ? 'correcto' : ($respuesta_28 === '' ? '' : 'incorrecto');
        $verificar_29 = ($respuesta_29 === 'ortogonal a todas las columnas de A') ? 'correcto' : ($respuesta_29 === '' ? '' : 'incorrecto');
        $verificar_30 = ($respuesta_30 === 'u_i · u_j = 0') ? 'correcto' : ($respuesta_30 === '' ? '' : 'incorrecto');
        $verificar_31 = ($respuesta_31 === '||u_i|| = 1') ? 'correcto' : ($respuesta_31 === '' ? '' : 'incorrecto');
        $verificar_32 = ($respuesta_32 === 'A^T A \hat{x} = A^T b') ? 'correcto' : ($respuesta_32 === '' ? '' : 'incorrecto');
        $respuesta_33 = ($respuesta_33 === 'p = A \hat{x}') ? 'correcto' : ($respuesta_33 === '' ? '' : 'incorrecto');
        $verificar_34 = ($respuesta_34 === 'u_j^{n-1}') ? 'correcto' : ($respuesta_34 === '' ? '' : 'incorrecto');
        $verificar_35 = ($respuesta_35 === 'np.random.rand(n)') ? 'correcto' : ($respuesta_35 === '' ? '' : 'incorrecto');
        $verificar_36 = ($respuesta_36 === 'u / np.linalg.norm(u)') ? 'correcto' : ($respuesta_36 === '' ? '' : 'incorrecto');
        $verificar_37 = ($respuesta_37 === 'V @ np.ones(n)') ? 'correcto' : ($respuesta_37 === '' ? '' : 'incorrecto');
        $verificar_38 = ($respuesta_38 === '1') ? 'correcto' : ($respuesta_38 === '' ? '' : 'incorrecto');
        $verificar_39 = ($respuesta_39 === 'np.linalg.inv(V) @ b') ? 'correcto' : ($respuesta_39 === '' ? '' : 'incorrecto');
        $verificar_40 = ($respuesta_40 === 'np.linalg.qr(V)') ? 'correcto' : ($respuesta_40 === '' ? '' : 'incorrecto');
        $verificar_41 = ($respuesta_41 === 'np.linalg.solve(V, b)') ? 'correcto' : ($respuesta_41 === '' ? '' : 'incorrecto');
        $verificar_42 = ($respuesta_42 === 'np.linalg.cond(V)') ? 'correcto' : ($respuesta_42 === '' ? '' : 'incorrecto');
        $verificar_43 = ($respuesta_43 === 'np.linalg.norm(x - 1)') ? 'correcto' : ($respuesta_43 === '' ? '' : 'incorrecto');
        $verificar_44 = ($respuesta_44 === '@') ? 'correcto' : ($respuesta_44 === '' ? '' : 'incorrecto');
        $verificar_45 = ($respuesta_45 === 'producto matricial') ? 'correcto' : ($respuesta_45 === '' ? '' : 'incorrecto');
        $verificar_46 = ($respuesta_46 === 'R x = Q^T b') ? 'correcto' : ($respuesta_46 === '' ? '' : 'incorrecto');
        $verificar_47 = ($respuesta_47 === 'triangular superior') ? 'correcto' : ($respuesta_47 === '' ? '' : 'incorrecto');
        $verificar_48 = ($respuesta_48 === 'np.dot(R[i, i+1:], x_qr[i+1:])') ? 'correcto' : ($respuesta_48 === '' ? '' : 'incorrecto');
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario de Álgebra Lineal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .form-container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .section {
            margin-bottom: 20px;
        }
        h2, h3 {
            color: #343a40;
        }
        input[type="text"] {
            margin: 5px;
            padding: 5px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .correcto {
            color: green;
            font-weight: bold;
            margin-left: 10px;
        }
        .incorrecto {
            color: red;
            font-weight: bold;
            margin-left: 10px;
        }
        button {
            margin: 10px 5px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script>
        function handleSubmit(event) {
            event.preventDefault();
            const form = event.target;
            fetch(form.action, {
                method: form.method,
                body: new FormData(form)
            })
            .then(response => response.text())
            .then(html => {
                document.body.innerHTML = html;
                MathJax.typeset();
            });
        }
    </script>
</head>
<body>
<form action="" method="POST" autocomplete="off" onsubmit="handleSubmit(event)">
    <div class="form-container">
        <h2>Cuestionario: Conceptos de Álgebra Lineal</h2>

        <!-- Sección 1: Espacio Fila -->
        <div class="section">
            <h3>1. Espacio Fila \( C(A^T) \)</h3>
            <p>El espacio fila de una matriz \( A \) está formado por 
            <input type="text" name="respuesta_1" value="<?php echo htmlspecialchars($respuesta_1); ?>" size="8"> 
            , que son 
            <input type="text" name="respuesta_2" value="<?php echo htmlspecialchars($respuesta_2); ?>" size="30"> 
            .</p>
            <span class="<?php echo $verificar_1; ?>"><?php echo $verificar_1; ?></span>
            <span class="<?php echo $verificar_2; ?>"><?php echo $verificar_2; ?></span>
            <p>Las 
            <input type="text" name="respuesta_3" value="<?php echo htmlspecialchars($respuesta_3); ?>" size="40"> 
            son una base del espacio fila de \( A \).</p>
            <span class="<?php echo $verificar_3; ?>"><?php echo $verificar_3; ?></span>
        </div>

        <!-- Sección 2: Inconsistencia en Sistemas -->
        <div class="section">
            <h3>2. Inconsistencia en \( A\mathbf{x} = \mathbf{b} \)</h3>
            <p>El espacio fila de \( A \) 
            <input type="text" name="respuesta_4" value="<?php echo htmlspecialchars($respuesta_4); ?>" size="15"> 
            . La inconsistencia ocurre cuando 
            <input type="text" name="respuesta_5" value="<?php echo htmlspecialchars($respuesta_5); ?>" size="30"> 
            .</p>
            <span class="<?php echo $verificar_4; ?>"><?php echo $verificar_4; ?></span>
            <span class="<?php echo $verificar_5; ?>"><?php echo $verificar_5; ?></span>
        </div>

        <!-- Sección 3: Resumen de Espacios -->
        <div class="section">
            <h3>3. Resumen de Espacios</h3>
            <p>Espacio fila 
            <input type="text" name="respuesta_6" value="<?php echo htmlspecialchars($respuesta_6); ?>" size="8"> 
            : Filas no nulas del RREF de \( A \).</p>
            <span class="<?php echo $verificar_6; ?>"><?php echo $verificar_6; ?></span>
            <p>Espacio columna 
            <input type="text" name="respuesta_7" value="<?php echo htmlspecialchars($respuesta_7); ?>" size="8"> 
            : Columnas de \( A \).</p>
            <span class="<?php echo $verificar_7; ?>"><?php echo $verificar_7; ?></span>
            <p>Espacio nulo 
            <input type="text" name="respuesta_8" value="<?php echo htmlspecialchars($respuesta_8); ?>" size="8"> 
            : Soluciones de \( A\mathbf{x}=0 \).</p>
            <span class="<?php echo $verificar_8; ?>"><?php echo $verificar_8; ?></span>
            <p>Espacio nulo de \( A^T \) 
            <input type="text" name="respuesta_9" value="<?php echo htmlspecialchars($respuesta_9); ?>" size="8"> 
            : Soluciones de \( A^T \mathbf{y}=0 \).</p>
            <span class="<?php echo $verificar_9; ?>"><?php echo $verificar_9; ?></span>
        </div>

        <!-- Sección 4: Dependencia Lineal de Filas -->
        <div class="section">
            <h3>4. Dependencia Lineal de Filas</h3>
            <p>Las filas son linealmente dependientes porque hay 
            <input type="text" name="respuesta_10" value="<?php echo htmlspecialchars($respuesta_10); ?>" size="15"> 
            .</p>
            <span class="<?php echo $verificar_10; ?>"><?php echo $verificar_10; ?></span>
        </div>

        <!-- Sección 5: b en Espacios -->
        <div class="section">
            <h3>5. ¿\( \mathbf{b} \) Pertenece a los Espacios?</h3>
            <p>\( \mathbf{b} \in C(A) \) si el sistema 
            <input type="text" name="respuesta_11" value="<?php echo htmlspecialchars($respuesta_11); ?>" size="8"> 
            tiene solución; si no, es 
            <input type="text" name="respuesta_12" value="<?php echo htmlspecialchars($respuesta_12); ?>" size="15"> 
            .</p>
            <span class="<?php echo $verificar_11; ?>"><?php echo $verificar_11; ?></span>
            <span class="<?php echo $verificar_12; ?>"><?php echo $verificar_12; ?></span>
            <p>\( \mathbf{b} \in C(A^T) \): Dimensiones incompatibles (\( \mathbb{R}^4 \) vs 
            <input type="text" name="respuesta_13" value="<?php echo htmlspecialchars($respuesta_13); ?>" size="8"> 
            ).</p>
            <span class="<?php echo $verificar_13; ?>"><?php echo $verificar_13; ?></span>
            <p>\( \mathbf{b} \in N(A^T) \) si 
            <input type="text" name="respuesta_15" value="<?php echo htmlspecialchars($respuesta_15); ?>" size="15"> 
            .</p>
            <span class="<?php echo $verificar_15; ?>"><?php echo $verificar_15; ?></span>
        </div>

        <!-- Sección 6: Diferencia N(A) y N(A^T) -->
        <div class="section">
            <h3>6. Diferencia entre \( N(A) \) y \( N(A^T) \)</h3>
            <p>\( N(A) \): Soluciones de 
            <input type="text" name="respuesta_16" value="<?php echo htmlspecialchars($respuesta_16); ?>" size="8"> 
            , en 
            <input type="text" name="respuesta_18" value="<?php echo htmlspecialchars($respuesta_18); ?>" size="8"> 
            .</p>
            <span class="<?php echo $verificar_16; ?>"><?php echo $verificar_16; ?></span>
            <span class="<?php echo $verificar_18; ?>"><?php echo $verificar_18; ?></span>
            <p>\( N(A^T) \): Soluciones de 
            <input type="text" name="respuesta_17" value="<?php echo htmlspecialchars($respuesta_17); ?>" size="8"> 
            , en 
            <input type="text" name="respuesta_19" value="<?php echo htmlspecialchars($respuesta_19); ?>" size="8"> 
            .</p>
            <span class="<?php echo $verificar_17; ?>"><?php echo $verificar_17; ?></span>
            <span class="<?php echo $verificar_19; ?>"><?php echo $verificar_19; ?></span>
        </div>

        <!-- Sección 7: Plano del Espacio Fila -->
        <div class="section">
            <h3>7. Plano del Espacio Fila</h3>
            <p>El plano es \{ 
            <input type="text" name="respuesta_20" value="<?php echo htmlspecialchars($respuesta_20); ?>" size="15"> 
            : \( \alpha, \beta \in \mathbb{R} \) \}.</p>
            <span class="<?php echo $verificar_20; ?>"><?php echo $verificar_20; ?></span>
            <p>Vector normal: 
            <input type="text" name="respuesta_21" value="<?php echo htmlspecialchars($respuesta_21); ?>" size="8"> 
            .</p>
            <span class="<?php echo $verificar_21; ?>"><?php echo $verificar_21; ?></span>
            <p>Ecuación del plano: 
            <input type="text" name="respuesta_22" value="<?php echo htmlspecialchars($respuesta_22); ?>" size="15"> 
            .</p>
            <span class="<?php echo $verificar_22; ?>"><?php echo $verificar_22; ?></span>
        </div>

        <!-- Sección 8: Complemento Ortogonal -->
        <div class="section">
            <h3>8. Complemento Ortogonal</h3>
            <p>Forma paramétrica del plano: \( \mathbf{p} = \) 
            <input type="text" name="respuesta_23" value="<?php echo htmlspecialchars($respuesta_23); ?>" size="15"> 
            .</p>
            <span class="<?php echo $verificar_23; ?>"><?php echo $verificar_23; ?></span>
            <p>\( V^\perp = \{ x \in \mathbb{R}^n : \) 
            <input type="text" name="respuesta_24" value="<?php echo htmlspecialchars($respuesta_24); ?>" size="15"> 
            para todo \( v \in V \) \}.</p>
            <span class="<?php echo $verificar_24; ?>"><?php echo $verificar_24; ?></span>
        </div>

        <!-- Sección 9: N(A^T) -->
        <div class="section">
            <h3>9. \( N(A^T) \)</h3>
            <p>\( N(A^T) = \{ y \in \mathbb{R}^m : A^T y = 0 \} \), vectores 
            <input type="text" name="respuesta_25" value="<?php echo htmlspecialchars($respuesta_25); ?>" size="30"> 
            .</p>
            <span class="<?php echo $verificar_25; ?>"><?php echo $verificar_25; ?></span>
            <p>\( \mathbf{b} \in N(A^T) \Leftrightarrow \) 
            <input type="text" name="respuesta_26" value="<?php echo htmlspecialchars($respuesta_26); ?>" size="15"> 
            o 
            <input type="text" name="respuesta_27" value="<?php echo htmlspecialchars($respuesta_27); ?>" size="15"> 
            .</p>
            <span class="<?php echo $verificar_26; ?>"><?php echo $verificar_26; ?></span>
            <span class="<?php echo $verificar_27; ?>"><?php echo $verificar_27; ?></span>
            <p>Teorema: 
            <input type="text" name="respuesta_28" value="<?php echo htmlspecialchars($respuesta_28); ?>" size="20"> 
            , y 
            <input type="text" name="respuesta_29" value="<?php echo htmlspecialchars($respuesta_29); ?>" size="30"> 
            .</p>
            <span class="<?php echo $verificar_28; ?>"><?php echo $verificar_28; ?></span>
            <span class="<?php echo $verificar_29; ?>"><?php echo $verificar_29; ?></span>
        </div>

        <!-- Sección 10: Ortonormal -->
        <div class="section">
            <h3>10. Ortonormal</h3>
            <p>\( u_i \cdot u_j = 0 \) si \( i \neq j \); 
            <input type="text" name="respuesta_30" value="<?php echo htmlspecialchars($respuesta_30); ?>" size="15"> 
            .</p>
            <span class="<?php echo $verificar_30; ?>"><?php echo $verificar_30; ?></span>
            <p>\( \|u_i\| = 1 \); 
            <input type="text" name="respuesta_31" value="<?php echo htmlspecialchars($respuesta_31); ?>" size="15"> 
            .</p>
            <span class="<?php echo $verificar_31; ?>"><?php echo $verificar_31; ?></span>
        </div>

        <!-- Sección 11: Mínimos Cuadrados -->
        <div class="section">
            <h3>11. Mínimos Cuadrados</h3>
            <p>\( A^T A \hat{x} = A^T b \); 
            <input type="text" name="respuesta_32" value="<?php echo htmlspecialchars($respuesta_32); ?>" size="20"> 
            .</p>
            <span class="<?php echo $verificar_32; ?>"><?php echo $verificar_32; ?></span>
            <p>Proyección \( \mathbf{p} = \) 
            <input type="text" name="respuesta_33" value="<?php echo htmlspecialchars($respuesta_33); ?>" size="10"> 
            .</p>
            <span class="<?php echo $verificar_33; ?>"><?php echo $verificar_33; ?></span>
        </div>

        <!-- Sección 12: Matriz de Vandermonde -->
        <div class="section">
            <h3>12. Matriz de Vandermonde</h3>
            <p>Entrada: 
            <input type="text" name="respuesta_34" value="<?php echo htmlspecialchars($respuesta_34); ?>" size="15"> 
            en columnas de potencias.</p>
            <span class="<?php echo $verificar_34; ?>"><?php echo $verificar_34; ?></span>
            <p>\( \mathbf{u} = \) 
            <input type="text" name="respuesta_35" value="<?php echo htmlspecialchars($respuesta_35); ?>" size="20"> 
            ; normalizar \( \mathbf{u} = \) 
            <input type="text" name="respuesta_36" value="<?php echo htmlspecialchars($respuesta_36); ?>" size="25"> 
            .</p>
            <span class="<?php echo $verificar_35; ?>"><?php echo $verificar_35; ?></span>
            <span class="<?php echo $verificar_36; ?>"><?php echo $verificar_36; ?></span>
            <p>\( \mathbf{b} = \) 
            <input type="text" name="respuesta_37" value="<?php echo htmlspecialchars($respuesta_37); ?>" size="15"> 
            ; solución teórica \( \mathbf{x} = \) 
            <input type="text" name="respuesta_38" value="<?php echo htmlspecialchars($respuesta_38); ?>" size="5"> 
            .</p>
            <span class="<?php echo $verificar_37; ?>"><?php echo $verificar_37; ?></span>
            <span class="<?php echo $verificar_38; ?>"><?php echo $verificar_38; ?></span>
        </div>

        <!-- Sección 13: Métodos de Solución -->
        <div class="section">
            <h3>13. Métodos de Solución</h3>
            <p>Inversa: \( \mathbf{x}_{inv} = \) 
            <input type="text" name="respuesta_39" value="<?php echo htmlspecialchars($respuesta_39); ?>" size="25"> 
            .</p>
            <span class="<?php echo $verificar_39; ?>"><?php echo $verificar_39; ?></span>
            <p>QR: 
            <input type="text" name="respuesta_40" value="<?php echo htmlspecialchars($respuesta_40); ?>" size="20"> 
            .</p>
            <span class="<?php echo $verificar_40; ?>"><?php echo $verificar_40; ?></span>
            <p>Solve: \( \mathbf{x}_{sol} = \) 
            <input type="text" name="respuesta_41" value="<?php echo htmlspecialchars($respuesta_41); ?>" size="25"> 
            .</p>
            <span class="<?php echo $verificar_41; ?>"><?php echo $verificar_41; ?></span>
            <p>Condición: 
            <input type="text" name="respuesta_42" value="<?php echo htmlspecialchars($respuesta_42); ?>" size="20"> 
            ; Error: 
            <input type="text" name="respuesta_43" value="<?php echo htmlspecialchars($respuesta_43); ?>" size="25"> 
            .</p>
            <span class="<?php echo $verificar_42; ?>"><?php echo $verificar_42; ?></span>
            <span class="<?php echo $verificar_43; ?>"><?php echo $verificar_43; ?></span>
        </div>

        <!-- Sección 14: Producto Matricial y Sustitución -->
        <div class="section">
            <h3>14. Producto Matricial y Sustitución</h3>
            <p>\( @ \) significa 
            <input type="text" name="respuesta_44" value="<?php echo htmlspecialchars($respuesta_44); ?>" size="5"> 
            : 
            <input type="text" name="respuesta_45" value="<?php echo htmlspecialchars($respuesta_45); ?>" size="20"> 
            .</p>
            <span class="<?php echo $verificar_44; ?>"><?php echo $verificar_44; ?></span>
            <span class="<?php echo $verificar_45; ?>"><?php echo $verificar_45; ?></span>
            <p>En QR: 
            <input type="text" name="respuesta_46" value="<?php echo htmlspecialchars($respuesta_46); ?>" size="15"> 
            ; \( R \) es 
            <input type="text" name="respuesta_47" value="<?php echo htmlspecialchars($respuesta_47); ?>" size="20"> 
            .</p>
            <span class="<?php echo $verificar_46; ?>"><?php echo $verificar_46; ?></span>
            <span class="<?php echo $verificar_47; ?>"><?php echo $verificar_47; ?></span>
            <p>Suma en sustitución: 
            <input type="text" name="respuesta_48" value="<?php echo htmlspecialchars($respuesta_48); ?>" size="30"> 
            .</p>
            <span class="<?php echo $verificar_48; ?>"><?php echo $verificar_48; ?></span>
        </div>

        <button type="submit">Enviar</button>
        <button type="submit" name="mostrar_solucion" value="mostrar_solucion">Mostrar Soluciones</button>
    </div>
</form>
</body>
</html>