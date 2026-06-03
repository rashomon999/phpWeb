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

        $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
        $verificar_1 = (trim($respuesta_1) === "import { useState } from 'react';") ? "correcto" : ($respuesta_1 === '' ? '' : "incorrecto");

        $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
        $verificar_2 = (trim($respuesta_2) === "import { login } from '../services/LoginService';") ? "correcto" : ($respuesta_2 === '' ? '' : "incorrecto");

        $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
        $verificar_3 = (trim($respuesta_3) === "import {") ? "correcto" : ($respuesta_3 === '' ? '' : "incorrecto");

        $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
        $verificar_4 = (trim($respuesta_4) === "Box,") ? "correcto" : ($respuesta_4 === '' ? '' : "incorrecto");

        $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
        $verificar_5 = (trim($respuesta_5) === "Button,") ? "correcto" : ($respuesta_5 === '' ? '' : "incorrecto");

        $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
        $verificar_6 = (trim($respuesta_6) === "Container,") ? "correcto" : ($respuesta_6 === '' ? '' : "incorrecto");

        $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
        $verificar_7 = (trim($respuesta_7) === "Paper,") ? "correcto" : ($respuesta_7 === '' ? '' : "incorrecto");

        $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
        $verificar_8 = (trim($respuesta_8) === "Stack,") ? "correcto" : ($respuesta_8 === '' ? '' : "incorrecto");

        $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
        $verificar_9 = (trim($respuesta_9) === "TextField,") ? "correcto" : ($respuesta_9 === '' ? '' : "incorrecto");

        $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
        $verificar_10 = (trim($respuesta_10) === "Typography,") ? "correcto" : ($respuesta_10 === '' ? '' : "incorrecto");

        $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
        $verificar_11 = (trim($respuesta_11) === "} from '@mui/material';") ? "correcto" : ($respuesta_11 === '' ? '' : "incorrecto");

        $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
        $verificar_12 = (trim($respuesta_12) === "export default function Login({ onLogin }) {") ? "correcto" : ($respuesta_12 === '' ? '' : "incorrecto");

        $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
        $verificar_13 = (trim($respuesta_13) === "const [username, setUsername] = useState('');") ? "correcto" : ($respuesta_13 === '' ? '' : "incorrecto");

        $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
        $verificar_14 = (trim($respuesta_14) === "const [password, setPassword] = useState('');") ? "correcto" : ($respuesta_14 === '' ? '' : "incorrecto");

        $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
        $verificar_15 = (trim($respuesta_15) === "const [error, setError] = useState('');") ? "correcto" : ($respuesta_15 === '' ? '' : "incorrecto");

        $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
        $verificar_16 = (trim($respuesta_16) === "const [cargando, setCargando] = useState(false);") ? "correcto" : ($respuesta_16 === '' ? '' : "incorrecto");

        $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
        $verificar_17 = (trim($respuesta_17) === "const handleSubmit = async (e) => {") ? "correcto" : ($respuesta_17 === '' ? '' : "incorrecto");

        $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
        $verificar_18 = (trim($respuesta_18) === "e.preventDefault();") ? "correcto" : ($respuesta_18 === '' ? '' : "incorrecto");

        $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
        $verificar_19 = (trim($respuesta_19) === "setCargando(true);") ? "correcto" : ($respuesta_19 === '' ? '' : "incorrecto");

        $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
        $verificar_20 = (trim($respuesta_20) === "setError('');") ? "correcto" : ($respuesta_20 === '' ? '' : "incorrecto");

        $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
        $verificar_21 = (trim($respuesta_21) === "try {") ? "correcto" : ($respuesta_21 === '' ? '' : "incorrecto");

        $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
        $verificar_22 = (trim($respuesta_22) === "const data = await login({ username, password });") ? "correcto" : ($respuesta_22 === '' ? '' : "incorrecto");

        $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
        $verificar_23 = (trim($respuesta_23) === "localStorage.setItem('token', data.accessToken);") ? "correcto" : ($respuesta_23 === '' ? '' : "incorrecto");

        $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
        $verificar_24 = (trim($respuesta_24) === "onLogin(data.accessToken);") ? "correcto" : ($respuesta_24 === '' ? '' : "incorrecto");

        $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
        $verificar_25 = (trim($respuesta_25) === "} catch (err) {") ? "correcto" : ($respuesta_25 === '' ? '' : "incorrecto");

        $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
        $verificar_26 = (trim($respuesta_26) === "setError(err.message);") ? "correcto" : ($respuesta_26 === '' ? '' : "incorrecto");

        $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
        $verificar_27 = (trim($respuesta_27) === "} finally {") ? "correcto" : ($respuesta_27 === '' ? '' : "incorrecto");

        $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
        $verificar_28 = (trim($respuesta_28) === "setCargando(false);") ? "correcto" : ($respuesta_28 === '' ? '' : "incorrecto");

        $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
        $verificar_29 = (trim($respuesta_29) === "}") ? "correcto" : ($respuesta_29 === '' ? '' : "incorrecto");

        $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
        $verificar_30 = (trim($respuesta_30) === "};") ? "correcto" : ($respuesta_30 === '' ? '' : "incorrecto");

        $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
        $verificar_31 = (trim($respuesta_31) === "return (") ? "correcto" : ($respuesta_31 === '' ? '' : "incorrecto");

        $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
        $verificar_32 = (trim($respuesta_32) === "<Box sx={{ minHeight: '100vh', display: 'grid', placeItems: 'center', px: 2 }}>") ? "correcto" : ($respuesta_32 === '' ? '' : "incorrecto");

        $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
        $verificar_33 = (trim($respuesta_33) === '<Container maxWidth="sm">') ? "correcto" : ($respuesta_33 === '' ? '' : "incorrecto");

        $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
        $verificar_34 = (trim($respuesta_34) === '<Paper elevation={3} sx={{ p: { xs: 3, md: 4 } }}>') ? "correcto" : ($respuesta_34 === '' ? '' : "incorrecto");

        $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
        $verificar_35 = (trim($respuesta_35) === "<Stack spacing={3}>") ? "correcto" : ($respuesta_35 === '' ? '' : "incorrecto");

        $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
        $verificar_36 = (trim($respuesta_36) === "<Box>") ? "correcto" : ($respuesta_36 === '' ? '' : "incorrecto");

        $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
        $verificar_37 = (trim($respuesta_37) === '<Typography variant="h4" component="h1" fontWeight={700}>') ? "correcto" : ($respuesta_37 === '' ? '' : "incorrecto");

        $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
        $verificar_38 = (trim($respuesta_38) === "🛵 DeliveryApp") ? "correcto" : ($respuesta_38 === '' ? '' : "incorrecto");

        $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
        $verificar_39 = (trim($respuesta_39) === "</Typography>") ? "correcto" : ($respuesta_39 === '' ? '' : "incorrecto");

        $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
        $verificar_40 = (trim($respuesta_40) === '<Typography color="text.secondary">') ? "correcto" : ($respuesta_40 === '' ? '' : "incorrecto");

        $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
        $verificar_41 = (trim($respuesta_41) === "Tablero de pedidos") ? "correcto" : ($respuesta_41 === '' ? '' : "incorrecto");

        $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
        $verificar_42 = (trim($respuesta_42) === "</Typography>") ? "correcto" : ($respuesta_42 === '' ? '' : "incorrecto");

        $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
        $verificar_43 = (trim($respuesta_43) === "</Box>") ? "correcto" : ($respuesta_43 === '' ? '' : "incorrecto");

        $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
        $verificar_44 = (trim($respuesta_44) === '<Box component="form" onSubmit={handleSubmit}>') ? "correcto" : ($respuesta_44 === '' ? '' : "incorrecto");

        $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
        $verificar_45 = (trim($respuesta_45) === "<Stack spacing={2}>") ? "correcto" : ($respuesta_45 === '' ? '' : "incorrecto");

        $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
        $verificar_46 = (trim($respuesta_46) === "<TextField") ? "correcto" : ($respuesta_46 === '' ? '' : "incorrecto");

        $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
        $verificar_47 = (trim($respuesta_47) === 'label="Usuario"') ? "correcto" : ($respuesta_47 === '' ? '' : "incorrecto");

        $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
        $verificar_48 = (trim($respuesta_48) === "value={username}") ? "correcto" : ($respuesta_48 === '' ? '' : "incorrecto");

        $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
        $verificar_49 = (trim($respuesta_49) === "onChange={(e) => setUsername(e.target.value)}") ? "correcto" : ($respuesta_49 === '' ? '' : "incorrecto");

        $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
        $verificar_50 = (trim($respuesta_50) === "fullWidth") ? "correcto" : ($respuesta_50 === '' ? '' : "incorrecto");

        $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
        $verificar_51 = (trim($respuesta_51) === "required") ? "correcto" : ($respuesta_51 === '' ? '' : "incorrecto");

        $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
        $verificar_52 = (trim($respuesta_52) === "/>") ? "correcto" : ($respuesta_52 === '' ? '' : "incorrecto");

        $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
        $verificar_53 = (trim($respuesta_53) === "<TextField") ? "correcto" : ($respuesta_53 === '' ? '' : "incorrecto");

        $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
        $verificar_54 = (trim($respuesta_54) === 'label="Contraseña"') ? "correcto" : ($respuesta_54 === '' ? '' : "incorrecto");

        $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
        $verificar_55 = (trim($respuesta_55) === 'type="password"') ? "correcto" : ($respuesta_55 === '' ? '' : "incorrecto");

        $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
        $verificar_56 = (trim($respuesta_56) === "value={password}") ? "correcto" : ($respuesta_56 === '' ? '' : "incorrecto");

        $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
        $verificar_57 = (trim($respuesta_57) === "onChange={(e) => setPassword(e.target.value)}") ? "correcto" : ($respuesta_57 === '' ? '' : "incorrecto");

        $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
        $verificar_58 = (trim($respuesta_58) === "fullWidth") ? "correcto" : ($respuesta_58 === '' ? '' : "incorrecto");

        $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
        $verificar_59 = (trim($respuesta_59) === "required") ? "correcto" : ($respuesta_59 === '' ? '' : "incorrecto");

        $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
        $verificar_60 = (trim($respuesta_60) === "/>") ? "correcto" : ($respuesta_60 === '' ? '' : "incorrecto");

        $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
        $verificar_61 = (trim($respuesta_61) === "{error && (") ? "correcto" : ($respuesta_61 === '' ? '' : "incorrecto");

        $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
        $verificar_62 = (trim($respuesta_62) === '<Alert severity="error">') ? "correcto" : ($respuesta_62 === '' ? '' : "incorrecto");

        $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
        $verificar_63 = (trim($respuesta_63) === "{error}") ? "correcto" : ($respuesta_63 === '' ? '' : "incorrecto");

        $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
        $verificar_64 = (trim($respuesta_64) === "</Alert>") ? "correcto" : ($respuesta_64 === '' ? '' : "incorrecto");

        $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
        $verificar_65 = (trim($respuesta_65) === ")}") ? "correcto" : ($respuesta_65 === '' ? '' : "incorrecto");

        $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
        $verificar_66 = (trim($respuesta_66) === "<Button") ? "correcto" : ($respuesta_66 === '' ? '' : "incorrecto");

        $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
        $verificar_67 = (trim($respuesta_67) === 'type="submit"') ? "correcto" : ($respuesta_67 === '' ? '' : "incorrecto");

        $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
        $verificar_68 = (trim($respuesta_68) === 'variant="contained"') ? "correcto" : ($respuesta_68 === '' ? '' : "incorrecto");

        $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
        $verificar_69 = (trim($respuesta_69) === "disabled={cargando}") ? "correcto" : ($respuesta_69 === '' ? '' : "incorrecto");

        $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
        $verificar_70 = (trim($respuesta_70) === ">") ? "correcto" : ($respuesta_70 === '' ? '' : "incorrecto");

        $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
        $verificar_71 = (trim($respuesta_71) === "{cargando ? 'Ingresando...' : 'Ingresar'}") ? "correcto" : ($respuesta_71 === '' ? '' : "incorrecto");

        $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
        $verificar_72 = (trim($respuesta_72) === "</Button>") ? "correcto" : ($respuesta_72 === '' ? '' : "incorrecto");

        $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
        $verificar_73 = (trim($respuesta_73) === "</Stack>") ? "correcto" : ($respuesta_73 === '' ? '' : "incorrecto");

        $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
        $verificar_74 = (trim($respuesta_74) === "</Box>") ? "correcto" : ($respuesta_74 === '' ? '' : "incorrecto");

        $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
        $verificar_75 = (trim($respuesta_75) === "</Stack>") ? "correcto" : ($respuesta_75 === '' ? '' : "incorrecto");

        $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
        $verificar_76 = (trim($respuesta_76) === "</Paper>") ? "correcto" : ($respuesta_76 === '' ? '' : "incorrecto");

        $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
        $verificar_77 = (trim($respuesta_77) === "</Container>") ? "correcto" : ($respuesta_77 === '' ? '' : "incorrecto");

        $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
        $verificar_78 = (trim($respuesta_78) === "</Box>") ? "correcto" : ($respuesta_78 === '' ? '' : "incorrecto");

        $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
        $verificar_79 = (trim($respuesta_79) === ");") ? "correcto" : ($respuesta_79 === '' ? '' : "incorrecto");

        $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
        $verificar_80 = (trim($respuesta_80) === "}") ? "correcto" : ($respuesta_80 === '' ? '' : "incorrecto");

        $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
        $verificar_81 = (trim($respuesta_81) === 'src/components/Login.jsx') ? "correcto" : ($respuesta_81 === '' ? '' : "incorrecto");
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
    <input type="text" name="respuesta_81" value="<?php echo htmlspecialchars($respuesta_81); ?>" size="30">

    <p class="subtitulo">Completa los espacios en blanco con el código correcto</p>

    <h2>Imports</h2>
    <pre>
<input type="text" name="respuesta_1" value="<?php echo htmlspecialchars($respuesta_1); ?>" size="40">
<input type="text" name="respuesta_2" value="<?php echo htmlspecialchars($respuesta_2); ?>" size="52">

<input type="text" name="respuesta_3"  value="<?php echo htmlspecialchars($respuesta_3); ?>"  size="10">
<input type="text" name="respuesta_4"  value="<?php echo htmlspecialchars($respuesta_4); ?>"  size="10">
<input type="text" name="respuesta_5"  value="<?php echo htmlspecialchars($respuesta_5); ?>"  size="10">
<input type="text" name="respuesta_6"  value="<?php echo htmlspecialchars($respuesta_6); ?>"  size="12">
<input type="text" name="respuesta_7"  value="<?php echo htmlspecialchars($respuesta_7); ?>"  size="10">
<input type="text" name="respuesta_8"  value="<?php echo htmlspecialchars($respuesta_8); ?>"  size="10">
<input type="text" name="respuesta_9"  value="<?php echo htmlspecialchars($respuesta_9); ?>"  size="12">
<input type="text" name="respuesta_10" value="<?php echo htmlspecialchars($respuesta_10); ?>" size="14">
<input type="text" name="respuesta_11" value="<?php echo htmlspecialchars($respuesta_11); ?>" size="24">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_81 ?>
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?>
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?>

    <hr>

    <h2>Componente y estados</h2>
    <pre>
<input type="text" name="respuesta_12" value="<?php echo htmlspecialchars($respuesta_12); ?>" size="48">
  <input type="text" name="respuesta_13" value="<?php echo htmlspecialchars($respuesta_13); ?>" size="48">
  <input type="text" name="respuesta_14" value="<?php echo htmlspecialchars($respuesta_14); ?>" size="48">
  <input type="text" name="respuesta_15" value="<?php echo htmlspecialchars($respuesta_15); ?>" size="44">
  <input type="text" name="respuesta_16" value="<?php echo htmlspecialchars($respuesta_16); ?>" size="50">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>

    <hr>

    <h2>handleSubmit</h2>
    <pre>
  <input type="text" name="respuesta_17" value="<?php echo htmlspecialchars($respuesta_17); ?>" size="40">
    <input type="text" name="respuesta_18" value="<?php echo htmlspecialchars($respuesta_18); ?>" size="22">
    <input type="text" name="respuesta_19" value="<?php echo htmlspecialchars($respuesta_19); ?>" size="22">
    <input type="text" name="respuesta_20" value="<?php echo htmlspecialchars($respuesta_20); ?>" size="16">

    <input type="text" name="respuesta_21" value="<?php echo htmlspecialchars($respuesta_21); ?>" size="10">
      <input type="text" name="respuesta_22" value="<?php echo htmlspecialchars($respuesta_22); ?>" size="56">

      <input type="text" name="respuesta_23" value="<?php echo htmlspecialchars($respuesta_23); ?>" size="56">
      <input type="text" name="respuesta_24" value="<?php echo htmlspecialchars($respuesta_24); ?>" size="34">
    <input type="text" name="respuesta_25" value="<?php echo htmlspecialchars($respuesta_25); ?>" size="22">
      <input type="text" name="respuesta_26" value="<?php echo htmlspecialchars($respuesta_26); ?>" size="28">
    <input type="text" name="respuesta_27" value="<?php echo htmlspecialchars($respuesta_27); ?>" size="18">
      <input type="text" name="respuesta_28" value="<?php echo htmlspecialchars($respuesta_28); ?>" size="24">
    <input type="text" name="respuesta_29" value="<?php echo htmlspecialchars($respuesta_29); ?>" size="6">
  <input type="text" name="respuesta_30" value="<?php echo htmlspecialchars($respuesta_30); ?>" size="6">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?>
    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>
    <?php echo $verificar_24 ?>
    <?php echo $verificar_25 ?>
    <?php echo $verificar_26 ?>
    <?php echo $verificar_27 ?>
    <?php echo $verificar_28 ?>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>

    <hr>

</div>

<!-- ============================================================
     COLUMNA DERECHA
     ============================================================ -->
<div class="seccion derecha">

    <h2>return / JSX — estructura exterior</h2>
    <pre>
<input type="text" name="respuesta_31" value="<?php echo htmlspecialchars($respuesta_31); ?>" size="12">
  <input type="text" name="respuesta_32" value="<?php echo htmlspecialchars($respuesta_32); ?>" size="79">
    <input type="text" name="respuesta_33" value="<?php echo htmlspecialchars($respuesta_33); ?>" size="24">
      <input type="text" name="respuesta_34" value="<?php echo htmlspecialchars($respuesta_34); ?>" size="56">
        <input type="text" name="respuesta_35" value="<?php echo htmlspecialchars($respuesta_35); ?>" size="20">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_31 ?>
    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>

    <hr>

    <h2>Box de título</h2>
    <pre>
          <input type="text" name="respuesta_36" value="<?php echo htmlspecialchars($respuesta_36); ?>" size="10">
            <input type="text" name="respuesta_37" value="<?php echo htmlspecialchars($respuesta_37); ?>" size="62">
              <input type="text" name="respuesta_38" value="<?php echo htmlspecialchars($respuesta_38); ?>" size="18">
            <input type="text" name="respuesta_39" value="<?php echo htmlspecialchars($respuesta_39); ?>" size="16">

            <input type="text" name="respuesta_40" value="<?php echo htmlspecialchars($respuesta_40); ?>" size="40">
              <input type="text" name="respuesta_41" value="<?php echo htmlspecialchars($respuesta_41); ?>" size="22">
            <input type="text" name="respuesta_42" value="<?php echo htmlspecialchars($respuesta_42); ?>" size="16">
          <input type="text" name="respuesta_43" value="<?php echo htmlspecialchars($respuesta_43); ?>" size="10">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <?php echo $verificar_39 ?>
    <?php echo $verificar_40 ?>
    <?php echo $verificar_41 ?>
    <?php echo $verificar_42 ?>
    <?php echo $verificar_43 ?>

    <hr>

    <h2>Formulario — TextField Usuario</h2>
    <pre>
          <input type="text" name="respuesta_44" value="<?php echo htmlspecialchars($respuesta_44); ?>" size="48">
            <input type="text" name="respuesta_45" value="<?php echo htmlspecialchars($respuesta_45); ?>" size="22">
              <input type="text" name="respuesta_46" value="<?php echo htmlspecialchars($respuesta_46); ?>" size="18">
                <input type="text" name="respuesta_47" value="<?php echo htmlspecialchars($respuesta_47); ?>" size="20">
                <input type="text" name="respuesta_48" value="<?php echo htmlspecialchars($respuesta_48); ?>" size="20">
                <input type="text" name="respuesta_49" value="<?php echo htmlspecialchars($respuesta_49); ?>" size="50">
                <input type="text" name="respuesta_50" value="<?php echo htmlspecialchars($respuesta_50); ?>" size="12">
                <input type="text" name="respuesta_51" value="<?php echo htmlspecialchars($respuesta_51); ?>" size="10">
              <input type="text" name="respuesta_52" value="<?php echo htmlspecialchars($respuesta_52); ?>" size="6">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_44 ?>
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <?php echo $verificar_51 ?>
    <?php echo $verificar_52 ?>

    <hr>

    <h2>TextField Contraseña</h2>
    <pre>
              <input type="text" name="respuesta_53" value="<?php echo htmlspecialchars($respuesta_53); ?>" size="18">
                <input type="text" name="respuesta_54" value="<?php echo htmlspecialchars($respuesta_54); ?>" size="24">
                <input type="text" name="respuesta_55" value="<?php echo htmlspecialchars($respuesta_55); ?>" size="20">
                <input type="text" name="respuesta_56" value="<?php echo htmlspecialchars($respuesta_56); ?>" size="20">
                <input type="text" name="respuesta_57" value="<?php echo htmlspecialchars($respuesta_57); ?>" size="50">
                <input type="text" name="respuesta_58" value="<?php echo htmlspecialchars($respuesta_58); ?>" size="12">
                <input type="text" name="respuesta_59" value="<?php echo htmlspecialchars($respuesta_59); ?>" size="10">
              <input type="text" name="respuesta_60" value="<?php echo htmlspecialchars($respuesta_60); ?>" size="6">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_53 ?>
    <?php echo $verificar_54 ?>
    <?php echo $verificar_55 ?>
    <?php echo $verificar_56 ?>
    <?php echo $verificar_57 ?>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <?php echo $verificar_60 ?>

    <hr>

    <h2>Alert de error y Button</h2>
    <pre>
              <input type="text" name="respuesta_61" value="<?php echo htmlspecialchars($respuesta_61); ?>" size="22">
                <input type="text" name="respuesta_62" value="<?php echo htmlspecialchars($respuesta_62); ?>" size="30">
                  <input type="text" name="respuesta_63" value="<?php echo htmlspecialchars($respuesta_63); ?>" size="12">
                <input type="text" name="respuesta_64" value="<?php echo htmlspecialchars($respuesta_64); ?>" size="16">
              <input type="text" name="respuesta_65" value="<?php echo htmlspecialchars($respuesta_65); ?>" size="8">

              <input type="text" name="respuesta_66" value="<?php echo htmlspecialchars($respuesta_66); ?>" size="16">
                <input type="text" name="respuesta_67" value="<?php echo htmlspecialchars($respuesta_67); ?>" size="18">
                <input type="text" name="respuesta_68" value="<?php echo htmlspecialchars($respuesta_68); ?>" size="24">
                <input type="text" name="respuesta_69" value="<?php echo htmlspecialchars($respuesta_69); ?>" size="24">
              <input type="text" name="respuesta_70" value="<?php echo htmlspecialchars($respuesta_70); ?>" size="4">
                <input type="text" name="respuesta_71" value="<?php echo htmlspecialchars($respuesta_71); ?>" size="50">
              <input type="text" name="respuesta_72" value="<?php echo htmlspecialchars($respuesta_72); ?>" size="16">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_61 ?>
    <?php echo $verificar_62 ?>
    <?php echo $verificar_63 ?>
    <?php echo $verificar_64 ?>
    <?php echo $verificar_65 ?>
    <?php echo $verificar_66 ?>
    <?php echo $verificar_67 ?>
    <?php echo $verificar_68 ?>
    <?php echo $verificar_69 ?>
    <?php echo $verificar_70 ?>
    <?php echo $verificar_71 ?>
    <?php echo $verificar_72 ?>

    <hr>

    <h2>Cierre de etiquetas JSX</h2>
    <pre>
            <input type="text" name="respuesta_73" value="<?php echo htmlspecialchars($respuesta_73); ?>" size="16">
          <input type="text" name="respuesta_74" value="<?php echo htmlspecialchars($respuesta_74); ?>" size="12">
        <input type="text" name="respuesta_75" value="<?php echo htmlspecialchars($respuesta_75); ?>" size="14">
      <input type="text" name="respuesta_76" value="<?php echo htmlspecialchars($respuesta_76); ?>" size="14">
    <input type="text" name="respuesta_77" value="<?php echo htmlspecialchars($respuesta_77); ?>" size="16">
  <input type="text" name="respuesta_78" value="<?php echo htmlspecialchars($respuesta_78); ?>" size="10">
<input type="text" name="respuesta_79" value="<?php echo htmlspecialchars($respuesta_79); ?>" size="4">
<input type="text" name="respuesta_80" value="<?php echo htmlspecialchars($respuesta_80); ?>" size="4">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_73 ?>
    <?php echo $verificar_74 ?>
    <?php echo $verificar_75 ?>
    <?php echo $verificar_76 ?>
    <?php echo $verificar_77 ?>
    <?php echo $verificar_78 ?>
    <?php echo $verificar_79 ?>
    <?php echo $verificar_80 ?>

    <hr>

    <strong>Si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion" value="<?php echo $mostrar_solucion?>">
    <button type="submit">Mostrar Solución</button>

</div>
</div>
</form>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="tercero.php"
        role="button"
    >Siguiente</a>
</div>

</body>
</html>