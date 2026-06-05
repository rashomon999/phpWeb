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

        // --- axiosClient.js ---
        $respuesta_1  = "import axios from \"axios\";";
        $respuesta_2  = "const axiosClient = axios.create({";
        $respuesta_3  = "baseURL: \"http://localhost:8080\",";
        $respuesta_4  = "});";
        $respuesta_5  = "axiosClient.interceptors.request.use((config) => {";
        $respuesta_6  = "const token = localStorage.getItem(\"token\");";
        $respuesta_7  = "if (token) {";
        $respuesta_8  = 'config.headers.Authorization = `Bearer ${token}`;';
        $respuesta_9  = "}";
        $respuesta_10 = "return config;";
        $respuesta_11 = "});";
        $respuesta_12 = "export default axiosClient;";

        // --- App.jsx ---
        $respuesta_13 = "import { useState } from 'react';";
        $respuesta_14 = "import Login from './components/Login';";
        $respuesta_15 = "import Dashboard from './components/Dashboard';";
        $respuesta_16 = "export default function App() {";
        $respuesta_17 = "const [autenticado, setAutenticado] = useState(";
        $respuesta_18 = "!!localStorage.getItem('token')";
        $respuesta_19 = ");";
        $respuesta_20 = "const handleLogin = (token) => {";
        $respuesta_21 = "localStorage.setItem('token', token);";
        $respuesta_22 = "setAutenticado(true);";
        $respuesta_23 = "};";
        $respuesta_24 = "const handleLogout = () => {";
        $respuesta_25 = "localStorage.removeItem('token');";
        $respuesta_26 = "setAutenticado(false);";
        $respuesta_27 = "};";
        $respuesta_28 = "return autenticado";
        $respuesta_29 = "? <Dashboard onLogout={handleLogout} />";
        $respuesta_30 = ": <Login onLogin={handleLogin} />;";
        $respuesta_31 = "}";

        // --- api.js ---
        $respuesta_32 = "import axiosClient from \"../lib/axios/axiosClient\";";
        $respuesta_33 = "export async function login(credentials) {";
        $respuesta_34 = "try {";
        $respuesta_35 = "const response = await axiosClient.post(\"/api/v1/auth/login\", credentials);";
        $respuesta_36 = "return response.data;";
        $respuesta_37 = "} catch (error) {";
        $respuesta_38 = "console.error(\"Error en login:\", error);";
        $respuesta_39 = "throw error;";
        $respuesta_40 = "}";
        $respuesta_41 = "}";

        for ($i = 1; $i <= 41; $i++) {
            ${"verificar_$i"} = "correcto";
        }

    } else {

        $answers = [
            // axiosClient.js
            1  => "import axios from \"axios\";",
            2  => "const axiosClient = axios.create({",
            3  => "baseURL: \"http://localhost:8080\",",
            4  => "});",
            5  => "axiosClient.interceptors.request.use((config) => {",
            6  => "const token = localStorage.getItem(\"token\");",
            7  => "if (token) {",
            8  => 'config.headers.Authorization = `Bearer ${token}`;',
            9  => "}",
            10 => "return config;",
            11 => "});",
            12 => "export default axiosClient;",
            // App.jsx
            13 => "import { useState } from 'react';",
            14 => "import Login from './components/Login';",
            15 => "import Dashboard from './components/Dashboard';",
            16 => "export default function App() {",
            17 => "const [autenticado, setAutenticado] = useState(",
            18 => "!!localStorage.getItem('token')",
            19 => ");",
            20 => "const handleLogin = (token) => {",
            21 => "localStorage.setItem('token', token);",
            22 => "setAutenticado(true);",
            23 => "};",
            24 => "const handleLogout = () => {",
            25 => "localStorage.removeItem('token');",
            26 => "setAutenticado(false);",
            27 => "};",
            28 => "return autenticado",
            29 => "? <Dashboard onLogout={handleLogout} />",
            30 => ": <Login onLogin={handleLogin} />;",
            31 => "}",
            // api.js
            32 => "import axiosClient from \"../lib/axios/axiosClient\";",
            33 => "export async function login(credentials) {",
            34 => "try {",
            35 => "const response = await axiosClient.post(\"/api/v1/auth/login\", credentials);",
            36 => "return response.data;",
            37 => "} catch (error) {",
            38 => "console.error(\"Error en login:\", error);",
            39 => "throw error;",
            40 => "}",
            41 => "}",
        ];

        foreach ($answers as $i => $correct) {
            $val = isset($_POST["respuesta_$i"]) ? $_POST["respuesta_$i"] : '';
            ${"respuesta_$i"} = $val;
            if (normalizar($val) === normalizar($correct)) {
                ${"verificar_$i"} = "correcto";
            } elseif (trim($val) === '') {
                ${"verificar_$i"} = '';
            } else {
                ${"verificar_$i"} = "incorrecto";
            }
        }
    }
}

function normalizar($str) {
    $str = trim($str);
    $str = preg_replace('/\s+/', ' ', $str);
    $str = preg_replace('/\s*:\s*/', ': ', $str);
    $str = preg_replace('/\s*,\s*/', ', ', $str);
    $str = preg_replace('/\s*=\s*/', ' = ', $str);
    $str = preg_replace('/\{\{\s*/', '{{ ', $str);
    $str = preg_replace('/\s*\}\}/', ' }}', $str);
    $str = preg_replace('/(?<!\{)\{\s*/', '{ ', $str);
    $str = preg_replace('/\s*\}(?!\})/', ' }', $str);
    $str = preg_replace('/\s*\[\s*/', ' [', $str);
    $str = preg_replace('/\s*\]/', ']', $str);
    $str = preg_replace('/\s+/', ' ', $str);
    return trim($str);
}

function inp($n, $respuesta, $verificar, $size) {
    $val = htmlspecialchars($respuesta);
    $cls = htmlspecialchars($verificar);
    echo "<input type=\"text\" name=\"respuesta_{$n}\" id=\"respuesta_{$n}\" value=\"{$val}\" size=\"{$size}\" class=\"{$cls}\">\n";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>axiosClient + App + api.js – Fill in the blanks</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style_2_0.css">
    <style>
        .seccion { width: calc(50% - 7.5px); padding: 20px; box-sizing: border-box; height: 160vh; }
        pre { white-space: pre-wrap; }
        .comment-line { color: #6a9955; font-style: italic; }
    </style>
</head>
<script>
function handleSubmit(event) {
    event.preventDefault();
    const formData = new FormData(event.target);
    fetch(event.target.action, { method: 'POST', body: formData })
        .then(response => response.text())
        .then(html => { document.body.innerHTML = html; })
        .catch(error => { console.error('Error:', error); });
}
</script>
<body>

<form action="./cuarto.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
<div class="form-container">

<!-- ===================== COLUMNA IZQUIERDA ===================== -->
<div class="seccion izquierda">

    <p class="subtitulo">Completa los espacios en blanco con el código correcto</p>

    <!-- axiosClient.js -->
    <h2>axiosClient.js – Configuración de Axios</h2>
    <pre><?php inp(1,$respuesta_1,$verificar_1,30); ?>

<?php inp(2,$respuesta_2,$verificar_2,40); ?>
<?php inp(3,$respuesta_3,$verificar_3,40); ?>
<?php inp(4,$respuesta_4,$verificar_4,6); ?>

<?php inp(5,$respuesta_5,$verificar_5,56); ?>
<?php inp(6,$respuesta_6,$verificar_6,50); ?>
<?php inp(7,$respuesta_7,$verificar_7,16); ?>
<?php inp(8,$respuesta_8,$verificar_8,56); ?>
<?php inp(9,$respuesta_9,$verificar_9,4); ?>
<?php inp(10,$respuesta_10,$verificar_10,16); ?>
<?php inp(11,$respuesta_11,$verificar_11,4); ?>

<?php inp(12,$respuesta_12,$verificar_12,28); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=1;$i<=12;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- App.jsx: imports y export -->
    <h2>App.jsx – Imports</h2>
    <pre><?php inp(13,$respuesta_13,$verificar_13,34); ?>
<?php inp(14,$respuesta_14,$verificar_14,42); ?>
<?php inp(15,$respuesta_15,$verificar_15,46); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=13;$i<=15;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- App.jsx: estado autenticado -->
    <h2>App.jsx – Estado autenticado</h2>
    <pre><?php inp(16,$respuesta_16,$verificar_16,36); ?>
<?php inp(17,$respuesta_17,$verificar_17,50); ?>
<?php inp(18,$respuesta_18,$verificar_18,38); ?>
<?php inp(19,$respuesta_19,$verificar_19,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=16;$i<=19;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- App.jsx: handleLogin -->
    <h2>App.jsx – handleLogin</h2>
    <pre><?php inp(20,$respuesta_20,$verificar_20,32); ?>
<?php inp(21,$respuesta_21,$verificar_21,40); ?>
<?php inp(22,$respuesta_22,$verificar_22,22); ?>
<?php inp(23,$respuesta_23,$verificar_23,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=20;$i<=23;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

</div><!-- /izquierda -->

<!-- ===================== COLUMNA DERECHA ===================== -->
<div class="seccion derecha">

    <!-- App.jsx: handleLogout -->
    <h2>App.jsx – handleLogout</h2>
    <pre><?php inp(24,$respuesta_24,$verificar_24,26); ?>
<?php inp(25,$respuesta_25,$verificar_25,38); ?>
<?php inp(26,$respuesta_26,$verificar_26,24); ?>
<?php inp(27,$respuesta_27,$verificar_27,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=24;$i<=27;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- App.jsx: return -->
    <h2>App.jsx – return (renderizado condicional)</h2>
    <pre><?php inp(28,$respuesta_28,$verificar_28,20); ?>
<?php inp(29,$respuesta_29,$verificar_29,42); ?>
<?php inp(30,$respuesta_30,$verificar_30,36); ?>
<?php inp(31,$respuesta_31,$verificar_31,2); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=28;$i<=31;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>
    <img src="../../img/guia_466.png" alt="">
    <!-- api.js -->
    <h2>LoginService – Import y función login</h2>
    <pre><?php inp(32,$respuesta_32,$verificar_32,56); ?>

<?php inp(33,$respuesta_33,$verificar_33,42); ?>
<?php inp(34,$respuesta_34,$verificar_34,8); ?>
<?php inp(35,$respuesta_35,$verificar_35,80); ?>
<?php inp(36,$respuesta_36,$verificar_36,22); ?>
<?php inp(37,$respuesta_37,$verificar_37,22); ?>
<?php inp(38,$respuesta_38,$verificar_38,46); ?>
<?php inp(39,$respuesta_39,$verificar_39,14); ?>
<?php inp(40,$respuesta_40,$verificar_40,4); ?>
<?php inp(41,$respuesta_41,$verificar_41,2); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=32;$i<=41;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <strong>Si desea ver las soluciones escribir: mostrar_solucion</strong><br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion" value="<?php echo htmlspecialchars($mostrar_solucion); ?>">
    <button type="submit">Mostrar Solución</button>

</div><!-- /derecha -->

</div><!-- /form-container -->
</form>

<div class="centered-container">
    <a class="btn btn-primary" href="quinto.php" role="button">Siguiente</a>
</div>

</body>
</html>