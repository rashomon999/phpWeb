<?php

for ($i = 1; $i <= 230; $i++) {
    ${"respuesta_" . $i} = '';
}

for ($i = 1; $i <= 230; $i++) {
    ${"verificar_" . $i} = '';
}

// ✅ Normaliza espacios irrelevantes SOLO para comparar, nunca para mostrar
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

// ✅ inp() muestra el valor ORIGINAL sin normalizar
function inp($n, $respuesta, $verificar, $size) {
    $val = htmlspecialchars($respuesta);
    $cls = htmlspecialchars($verificar);
    echo "<input type=\"text\" name=\"respuesta_{$n}\" id=\"respuesta_{$n}\" value=\"{$val}\" size=\"{$size}\" class=\"{$cls}\">\n";
}

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';

    if ($mostrar_solucion === 'mostrar_solucion') {

        $respuesta_1  = "import { useState } from 'react';";
        $respuesta_2  = "import { login } from '../services/LoginService';";
        $respuesta_3  = "import {";
        $respuesta_4  = "Box,";
        $respuesta_5  = "Button,";
        $respuesta_6  = "Container,";
        $respuesta_7  = "Paper,";
        $respuesta_8  = "Stack,";
        $respuesta_9  = "TextField,";
        $respuesta_10 = "Typography,";
        $respuesta_11 = "} from '@mui/material';";

        $respuesta_12 = "export default function Login({ onLogin }) {";
        $respuesta_13 = "const [username, setUsername] = useState('');";
        $respuesta_14 = "const [password, setPassword] = useState('');";
        $respuesta_15 = "const [error, setError] = useState('');";
        $respuesta_16 = "const [cargando, setCargando] = useState(false);";

        $respuesta_17 = "const handleSubmit = async (e) => {";
        $respuesta_18 = "e.preventDefault();";
        $respuesta_19 = "setCargando(true);";
        $respuesta_20 = "setError('');";

        $respuesta_21 = "try {";
        $respuesta_22 = "const data = await login({ username, password });";
        $respuesta_23 = "localStorage.setItem('token', data.accessToken);";
        $respuesta_24 = "onLogin(data.accessToken);";
        $respuesta_25 = "} catch (err) {";
        $respuesta_26 = "setError(err.message);";
        $respuesta_27 = "} finally {";
        $respuesta_28 = "setCargando(false);";
        $respuesta_29 = "}";
        $respuesta_30 = "};";

        $respuesta_31 = "return (";
        $respuesta_32 = "<Box sx={{ minHeight: '100vh', display: 'grid', placeItems: 'center', px: 2 }}>";
        $respuesta_33 = '<Container maxWidth="sm">';
        $respuesta_34 = '<Paper elevation={3} sx={{ p: { xs: 3, md: 4 } }}>';
        $respuesta_35 = "<Stack spacing={3}>";
        $respuesta_36 = "<Box>";
        $respuesta_37 = '<Typography variant="h4" component="h1" fontWeight={700}>';
        $respuesta_38 = "DeliveryApp";
        $respuesta_39 = "</Typography>";
        $respuesta_40 = '<Typography color="text.secondary">';
        $respuesta_41 = "Tablero de pedidos";
        $respuesta_42 = "</Typography>";
        $respuesta_43 = "</Box>";
        $respuesta_44 = '<Box component="form" onSubmit={handleSubmit}>';
        $respuesta_45 = "<Stack spacing={2}>";
        $respuesta_46 = "<TextField";
        $respuesta_47 = 'label="Usuario"';
        $respuesta_48 = "value={username}";
        $respuesta_49 = "onChange={(e) => setUsername(e.target.value)}";
        $respuesta_50 = "fullWidth";
        $respuesta_51 = "required";
        $respuesta_52 = "/>";
        $respuesta_53 = "<TextField";
        $respuesta_54 = 'label="Contraseña"';
        $respuesta_55 = 'type="password"';
        $respuesta_56 = "value={password}";
        $respuesta_57 = "onChange={(e) => setPassword(e.target.value)}";
        $respuesta_58 = "fullWidth";
        $respuesta_59 = "required";
        $respuesta_60 = "/>";
        $respuesta_61 = "{error && (";
        $respuesta_62 = '<Alert severity="error">';
        $respuesta_63 = "{error}";
        $respuesta_64 = "</Alert>";
        $respuesta_65 = ")}";
        $respuesta_66 = "<Button";
        $respuesta_67 = 'type="submit"';
        $respuesta_68 = 'variant="contained"';
        $respuesta_69 = "disabled={cargando}";
        $respuesta_70 = ">";
        $respuesta_71 = "{cargando ? 'Ingresando...' : 'Ingresar'}";
        $respuesta_72 = "</Button>";
        $respuesta_73 = "</Stack>";
        $respuesta_74 = "</Box>";
        $respuesta_75 = "</Stack>";
        $respuesta_76 = "</Paper>";
        $respuesta_77 = "</Container>";
        $respuesta_78 = "</Box>";
        $respuesta_79 = ");";
        $respuesta_80 = "}";

        $respuesta_81 = 'src/components/Login.jsx';

        for ($i = 1; $i <= 81; $i++) {
            ${"verificar_$i"} = "correcto";
        }

    } else {

        $answers = [
            1  => "import { useState } from 'react';",
            2  => "import { login } from '../services/LoginService';",
            3  => "import {",
            4  => "Box,",
            5  => "Button,",
            6  => "Container,",
            7  => "Paper,",
            8  => "Stack,",
            9  => "TextField,",
            10 => "Typography,",
            11 => "} from '@mui/material';",
            12 => "export default function Login({ onLogin }) {",
            13 => "const [username, setUsername] = useState('');",
            14 => "const [password, setPassword] = useState('');",
            15 => "const [error, setError] = useState('');",
            16 => "const [cargando, setCargando] = useState(false);",
            17 => "const handleSubmit = async (e) => {",
            18 => "e.preventDefault();",
            19 => "setCargando(true);",
            20 => "setError('');",
            21 => "try {",
            22 => "const data = await login({ username, password });",
            23 => "localStorage.setItem('token', data.accessToken);",
            24 => "onLogin(data.accessToken);",
            25 => "} catch (err) {",
            26 => "setError(err.message);",
            27 => "} finally {",
            28 => "setCargando(false);",
            29 => "}",
            30 => "};",
            31 => "return (",
            32 => "<Box sx={{ minHeight: '100vh', display: 'grid', placeItems: 'center', px: 2 }}>",
            33 => '<Container maxWidth="sm">',
            34 => '<Paper elevation={3} sx={{ p: { xs: 3, md: 4 } }}>',
            35 => "<Stack spacing={3}>",
            36 => "<Box>",
            37 => '<Typography variant="h4" component="h1" fontWeight={700}>',
            38 => "DeliveryApp",
            39 => "</Typography>",
            40 => '<Typography color="text.secondary">',
            41 => "Tablero de pedidos",
            42 => "</Typography>",
            43 => "</Box>",
            44 => '<Box component="form" onSubmit={handleSubmit}>',
            45 => "<Stack spacing={2}>",
            46 => "<TextField",
            47 => 'label="Usuario"',
            48 => "value={username}",
            49 => "onChange={(e) => setUsername(e.target.value)}",
            50 => "fullWidth",
            51 => "required",
            52 => "/>",
            53 => "<TextField",
            54 => 'label="Contraseña"',
            55 => 'type="password"',
            56 => "value={password}",
            57 => "onChange={(e) => setPassword(e.target.value)}",
            58 => "fullWidth",
            59 => "required",
            60 => "/>",
            61 => "{error && (",
            62 => '<Alert severity="error">',
            63 => "{error}",
            64 => "</Alert>",
            65 => ")}",
            66 => "<Button",
            67 => 'type="submit"',
            68 => 'variant="contained"',
            69 => "disabled={cargando}",
            70 => ">",
            71 => "{cargando ? 'Ingresando...' : 'Ingresar'}",
            72 => "</Button>",
            73 => "</Stack>",
            74 => "</Box>",
            75 => "</Stack>",
            76 => "</Paper>",
            77 => "</Container>",
            78 => "</Box>",
            79 => ");",
            80 => "}",
            81 => 'src/components/Login.jsx',
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
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario — Login.jsx con MUI</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style_2_0.css">

<style>
    .seccion {
        width: calc(50% - 7.5px);
        padding: 20px;
        box-sizing: border-box;
        height: 250vh;
    }
    pre input[type="text"] {
        font-family: monospace;
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
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}
</script>

</head>
<body>

<form action="./tercero.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
<div class="form-container">

<!-- ============================================================
     COLUMNA IZQUIERDA
     ============================================================ -->
<div class="seccion izquierda">

    Esto se hace en:
    <?php inp(81, $respuesta_81, $verificar_81, 30); ?>

    <p class="subtitulo">Completa los espacios en blanco con el código correcto</p>

    <h2>Imports</h2>
    <pre>
<?php inp(1,  $respuesta_1,  $verificar_1,  40); ?>
<?php inp(2,  $respuesta_2,  $verificar_2,  52); ?>

<?php inp(3,  $respuesta_3,  $verificar_3,  10); ?>
<?php inp(4,  $respuesta_4,  $verificar_4,  10); ?>
<?php inp(5,  $respuesta_5,  $verificar_5,  10); ?>
<?php inp(6,  $respuesta_6,  $verificar_6,  12); ?>
<?php inp(7,  $respuesta_7,  $verificar_7,  10); ?>
<?php inp(8,  $respuesta_8,  $verificar_8,  10); ?>
<?php inp(9,  $respuesta_9,  $verificar_9,  12); ?>
<?php inp(10, $respuesta_10, $verificar_10, 14); ?>
<?php inp(11, $respuesta_11, $verificar_11, 24); ?>
</pre>
    <button type="submit">Verificar</button>
    <?php for($i=1;$i<=11;$i++) echo ${"verificar_$i"}." "; ?>
    <?php echo $verificar_81; ?>

    <hr>

    <h2>Componente y estados</h2>
    <pre>
<?php inp(12, $respuesta_12, $verificar_12, 48); ?>
  <?php inp(13, $respuesta_13, $verificar_13, 48); ?>
  <?php inp(14, $respuesta_14, $verificar_14, 48); ?>
  <?php inp(15, $respuesta_15, $verificar_15, 44); ?>
  <?php inp(16, $respuesta_16, $verificar_16, 50); ?>
</pre>
    <button type="submit">Verificar</button>
    <?php for($i=12;$i<=16;$i++) echo ${"verificar_$i"}." "; ?>

    <hr>

    <h2>handleSubmit</h2>
    <pre>
  <?php inp(17, $respuesta_17, $verificar_17, 40); ?>
    <?php inp(18, $respuesta_18, $verificar_18, 22); ?>
    <?php inp(19, $respuesta_19, $verificar_19, 22); ?>
    <?php inp(20, $respuesta_20, $verificar_20, 16); ?>

    <?php inp(21, $respuesta_21, $verificar_21, 10); ?>
      <?php inp(22, $respuesta_22, $verificar_22, 56); ?>
      <?php inp(23, $respuesta_23, $verificar_23, 56); ?>
      <?php inp(24, $respuesta_24, $verificar_24, 34); ?>
    <?php inp(25, $respuesta_25, $verificar_25, 22); ?>
      <?php inp(26, $respuesta_26, $verificar_26, 28); ?>
    <?php inp(27, $respuesta_27, $verificar_27, 18); ?>
      <?php inp(28, $respuesta_28, $verificar_28, 24); ?>
    <?php inp(29, $respuesta_29, $verificar_29, 6); ?>
  <?php inp(30, $respuesta_30, $verificar_30, 6); ?>
</pre>
    <button type="submit">Verificar</button>
    <?php for($i=17;$i<=30;$i++) echo ${"verificar_$i"}." "; ?>

    <hr>

</div>

<!-- ============================================================
     COLUMNA DERECHA
     ============================================================ -->
<div class="seccion derecha">

    <h2>return / JSX — estructura exterior</h2>
    <pre>
<?php inp(31, $respuesta_31, $verificar_31, 12); ?>
  <?php inp(32, $respuesta_32, $verificar_32, 79); ?>
    <?php inp(33, $respuesta_33, $verificar_33, 24); ?>
      <?php inp(34, $respuesta_34, $verificar_34, 56); ?>
        <?php inp(35, $respuesta_35, $verificar_35, 20); ?>
</pre>
    <button type="submit">Verificar</button>
    <?php for($i=31;$i<=35;$i++) echo ${"verificar_$i"}." "; ?>

    <hr>

    <h2>Box de título</h2>
    <pre>
          <?php inp(36, $respuesta_36, $verificar_36, 10); ?>
            <?php inp(37, $respuesta_37, $verificar_37, 62); ?>
              <?php inp(38, $respuesta_38, $verificar_38, 18); ?>
            <?php inp(39, $respuesta_39, $verificar_39, 16); ?>

            <?php inp(40, $respuesta_40, $verificar_40, 40); ?>
              <?php inp(41, $respuesta_41, $verificar_41, 22); ?>
            <?php inp(42, $respuesta_42, $verificar_42, 16); ?>
          <?php inp(43, $respuesta_43, $verificar_43, 10); ?>
</pre>
    <button type="submit">Verificar</button>
    <?php for($i=36;$i<=43;$i++) echo ${"verificar_$i"}." "; ?>

    <hr>

    <h2>Formulario — TextField Usuario</h2>
    <pre>
          <?php inp(44, $respuesta_44, $verificar_44, 48); ?>
            <?php inp(45, $respuesta_45, $verificar_45, 22); ?>
              <?php inp(46, $respuesta_46, $verificar_46, 18); ?>
                <?php inp(47, $respuesta_47, $verificar_47, 20); ?>
                <?php inp(48, $respuesta_48, $verificar_48, 20); ?>
                <?php inp(49, $respuesta_49, $verificar_49, 50); ?>
                <?php inp(50, $respuesta_50, $verificar_50, 12); ?>
                <?php inp(51, $respuesta_51, $verificar_51, 10); ?>
              <?php inp(52, $respuesta_52, $verificar_52, 6); ?>
</pre>
    <button type="submit">Verificar</button>
    <?php for($i=44;$i<=52;$i++) echo ${"verificar_$i"}." "; ?>

    <hr>

    <h2>TextField Contraseña</h2>
    <pre>
              <?php inp(53, $respuesta_53, $verificar_53, 18); ?>
                <?php inp(54, $respuesta_54, $verificar_54, 24); ?>
                <?php inp(55, $respuesta_55, $verificar_55, 20); ?>
                <?php inp(56, $respuesta_56, $verificar_56, 20); ?>
                <?php inp(57, $respuesta_57, $verificar_57, 50); ?>
                <?php inp(58, $respuesta_58, $verificar_58, 12); ?>
                <?php inp(59, $respuesta_59, $verificar_59, 10); ?>
              <?php inp(60, $respuesta_60, $verificar_60, 6); ?>
</pre>
    <button type="submit">Verificar</button>
    <?php for($i=53;$i<=60;$i++) echo ${"verificar_$i"}." "; ?>

    <hr>

    <h2>Alert de error y Button</h2>
    <pre>
              <?php inp(61, $respuesta_61, $verificar_61, 22); ?>
                <?php inp(62, $respuesta_62, $verificar_62, 30); ?>
                  <?php inp(63, $respuesta_63, $verificar_63, 12); ?>
                <?php inp(64, $respuesta_64, $verificar_64, 16); ?>
              <?php inp(65, $respuesta_65, $verificar_65, 8); ?>

              <?php inp(66, $respuesta_66, $verificar_66, 16); ?>
                <?php inp(67, $respuesta_67, $verificar_67, 18); ?>
                <?php inp(68, $respuesta_68, $verificar_68, 24); ?>
                <?php inp(69, $respuesta_69, $verificar_69, 24); ?>
              <?php inp(70, $respuesta_70, $verificar_70, 4); ?>
                <?php inp(71, $respuesta_71, $verificar_71, 50); ?>
              <?php inp(72, $respuesta_72, $verificar_72, 16); ?>
</pre>
    <button type="submit">Verificar</button>
    <?php for($i=61;$i<=72;$i++) echo ${"verificar_$i"}." "; ?>

    <hr>

    <h2>Cierre de etiquetas JSX</h2>
    <pre>
            <?php inp(73, $respuesta_73, $verificar_73, 16); ?>
          <?php inp(74, $respuesta_74, $verificar_74, 12); ?>
        <?php inp(75, $respuesta_75, $verificar_75, 14); ?>
      <?php inp(76, $respuesta_76, $verificar_76, 14); ?>
    <?php inp(77, $respuesta_77, $verificar_77, 16); ?>
  <?php inp(78, $respuesta_78, $verificar_78, 10); ?>
<?php inp(79, $respuesta_79, $verificar_79, 4); ?>
<?php inp(80, $respuesta_80, $verificar_80, 4); ?>
</pre>
    <button type="submit">Verificar</button>
    <?php for($i=73;$i<=80;$i++) echo ${"verificar_$i"}." "; ?>

    <hr>

    <strong>Si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion" value="<?php echo htmlspecialchars($mostrar_solucion); ?>">
    <button type="submit">Mostrar Solución</button>

</div>
</div>
</form>

<div class="centered-container">
    <a class="btn btn-primary" href="cuarto.php" role="button">Siguiente</a>
</div>

</body>
</html>