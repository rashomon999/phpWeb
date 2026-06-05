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

        // --- IMPORTS ---
        $respuesta_1  = "import { useState, useEffect } from 'react';";
        $respuesta_2  = "import { getAllDomicilios, createDomicilio, updateDomicilio, deleteDomicilio } from '../services/api';";
        $respuesta_3  = "import {";
        $respuesta_4  = "Box, Button, Chip, CircularProgress, Container, Grid,";
        $respuesta_5  = "MenuItem, Select, Stack, TextField, Typography,";
        $respuesta_6  = "} from '@mui/material';";

        // --- CONSTANTES ---
        $respuesta_7  = "const ESTADOS = ['EN_CAMINO', 'EN_REPARTO', 'ENTREGADO'];";
        $respuesta_8  = "const ESTADO_INFO = {";
        $respuesta_9  = "EN_CAMINO: { color: 'warning', icon: '🚦' },";
        $respuesta_10 = "EN_REPARTO: { color: 'info', icon: '🛵' },";
        $respuesta_11 = "ENTREGADO: { color: 'success', icon: '✅' },";
        $respuesta_12 = "};";

        // --- PedidoCard: definición y estados ---
        $respuesta_13 = "function PedidoCard({ pedido, onActualizado, onEliminado }) {";
        $respuesta_14 = "const [editando, setEditando] = useState(false);";
        $respuesta_15 = "const [guardando, setGuardando] = useState(false);";
        $respuesta_16 = "const [form, setForm] = useState({";
        $respuesta_17 = "nombreDomiciliario: pedido.nombreDomiciliario,";
        $respuesta_18 = "estado: pedido.estado,";
        $respuesta_19 = "userId: pedido.userId,";
        $respuesta_20 = "});";
        $respuesta_21 = "const info = ESTADO_INFO[pedido.estado] ?? ESTADO_INFO.EN_CAMINO;";

        // --- PedidoCard: handleGuardar ---
        $respuesta_22 = "const handleGuardar = async () => {";
        $respuesta_23 = "setGuardando(true);";
        $respuesta_24 = "try {";
        $respuesta_25 = "await updateDomicilio(pedido.id, form);";
        $respuesta_26 = "onActualizado();";
        $respuesta_27 = "setEditando(false);";
        $respuesta_28 = "} catch (e) { alert('Error al guardar: ' + e.message); }";
        $respuesta_29 = "finally { setGuardando(false); }";
        $respuesta_30 = "};";

        // --- PedidoCard: handleEliminar ---
        $respuesta_31 = "const handleEliminar = async () => {";
        $respuesta_32 = "try {";
        $respuesta_33 = "await deleteDomicilio(pedido.id);";
        $respuesta_34 = "onEliminado();";
        $respuesta_35 = "} catch (e) { alert('Error al eliminar: ' + e.message); }";
        $respuesta_36 = "};";

        // --- PedidoCard: return – contenedores genéricos ---
        $respuesta_37 = "return (";
        $respuesta_38 = "<Box sx={{ border: '1px solid', borderColor: 'divider', borderRadius: 2, p: 2 }}>";
        $respuesta_39 = "<Chip label={`\${info.icon} \${pedido.estado.replace('_', ' ')}`} color={info.color} sx={{ mb: 1 }} />";
        $respuesta_40 = "{editando ? (";
        $respuesta_41 = "<Stack spacing={2} mt={1}>";

        // --- PedidoCard: return – TextField (modo edición) ---
        $respuesta_42 = "<TextField";
        $respuesta_43 = "label=\"Nombre domiciliario\"";
        $respuesta_44 = "value={form.nombreDomiciliario}";
        $respuesta_45 = "onChange={e => setForm({ ...form, nombreDomiciliario: e.target.value })}";
        $respuesta_46 = "/>";

        // --- PedidoCard: return – Select + map ---
        $respuesta_47 = "<Select value={form.estado} onChange={e => setForm({ ...form, estado: e.target.value })}>"; 
        $respuesta_48 = "{ESTADOS.map(s => <MenuItem key={s} value={s}>{s.replace('_', ' ')}</MenuItem>)}";
        $respuesta_49 = "</Select>";

        // --- PedidoCard: return – Buttons modo edición ---
        $respuesta_50 = "<Stack direction=\"row\" spacing={1}>";
        $respuesta_51 = "<Button variant=\"contained\" onClick={handleGuardar} disabled={guardando}>";
        $respuesta_52 = "{guardando ? 'Guardando...' : 'Guardar'}";
        $respuesta_53 = "</Button>";
        $respuesta_54 = "<Button variant=\"outlined\" onClick={() => setEditando(false)}>Cancelar</Button>";
        $respuesta_55 = "</Stack>";
        $respuesta_56 = "</Stack>";

        // --- PedidoCard: return – vista lectura (Typography + Buttons) ---
        $respuesta_57 = ") : (";
        $respuesta_58 = "<>";
        $respuesta_59 = "<Typography><strong>#{pedido.id}</strong></Typography>";
        $respuesta_60 = "<Typography>{pedido.nombreDomiciliario}</Typography>";
        $respuesta_61 = "<Typography color=\"text.secondary\">{pedido.username}</Typography>";
        $respuesta_62 = "<Stack direction=\"row\" spacing={1} mt={2}>";
        $respuesta_63 = "<Button variant=\"contained\" color=\"warning\" onClick={() => setEditando(true)}>✏️ Editar</Button>";
        $respuesta_64 = "<Button variant=\"contained\" color=\"error\" onClick={handleEliminar}>🗑 Eliminar</Button>";
        $respuesta_65 = "</Stack>";
        $respuesta_66 = "</>";

        // --- PedidoCard: return – cierre contenedores ---
        $respuesta_67 = ")}";
        $respuesta_68 = "</Box>";
        $respuesta_69 = ");";
        $respuesta_70 = "}";

        // --- Dashboard: estados ---
        $respuesta_71 = "export default function Dashboard({ onLogout }) {";
        $respuesta_72 = "const [pedidos, setPedidos] = useState([]);";
        $respuesta_73 = "const [cargando, setCargando] = useState(true);";
        $respuesta_74 = "const [mostrarForm, setMostrarForm] = useState(false);";
        $respuesta_75 = "const [form, setForm] = useState({";
        $respuesta_76 = "nombreDomiciliario: '', estado: 'EN_CAMINO', userId: 1,";
        $respuesta_77 = "});";

        // --- Dashboard: cargarPedidos ---
        $respuesta_78 = "const cargarPedidos = async () => {";
        $respuesta_79 = "setCargando(true);";
        $respuesta_80 = "try {";
        $respuesta_81 = "const data = await getAllDomicilios();";
        $respuesta_82 = "setPedidos(data);";
        $respuesta_83 = "} catch (e) { console.error(e); }";
        $respuesta_84 = "finally { setCargando(false); }";
        $respuesta_85 = "};";

        // --- Dashboard: useEffect ---
        $respuesta_86 = "useEffect(() => { cargarPedidos(); }, []);";

        // --- Dashboard: handleCrear ---
        $respuesta_87 = "const handleCrear = async () => {";
        $respuesta_88 = "try {";
        $respuesta_89 = "await createDomicilio(form);";
        $respuesta_90 = "setForm({ nombreDomiciliario: '', estado: 'EN_CAMINO', userId: 1 });";
        $respuesta_91 = "setMostrarForm(false);";
        $respuesta_92 = "cargarPedidos();";
        $respuesta_93 = "} catch (e) { console.error(e); }";
        $respuesta_94 = "};";

        // --- Dashboard: return JSX ---
        $respuesta_95  = "return (";
        $respuesta_96  = "<Container maxWidth=\"lg\" sx={{ py: 4 }}>";
        $respuesta_97  = "<Stack direction=\"row\" justifyContent=\"space-between\" alignItems=\"center\" mb={3}>";
        $respuesta_98  = "<Typography variant=\"h4\" fontWeight={700}>🛵 Tablero de Pedidos</Typography>";
        $respuesta_99  = "<Stack direction=\"row\" spacing={2}>";
        $respuesta_100 = "<Button variant=\"contained\" onClick={() => setMostrarForm(!mostrarForm)}>";
        $respuesta_101 = "{mostrarForm ? '✕ Cancelar' : '+ Nuevo Pedido'}";
        $respuesta_102 = "</Button>";
        $respuesta_103 = "<Button variant=\"outlined\" color=\"error\" onClick={onLogout}>Salir</Button>";
        $respuesta_104 = "</Stack>";
        $respuesta_105 = "</Stack>";

        // --- Dashboard: form nuevo pedido ---
        $respuesta_106 = "{mostrarForm && (";
        $respuesta_107 = "<Box sx={{ width: 400, display: 'flex', flexDirection: 'column', gap: 2, mb: 4 }}>";
        $respuesta_108 = "<TextField";
        $respuesta_109 = "label=\"Nombre domiciliario\"";
        $respuesta_110 = "value={form.nombreDomiciliario}";
        $respuesta_111 = "onChange={e => setForm({ ...form, nombreDomiciliario: e.target.value })}";
        $respuesta_112 = "/>";
        $respuesta_113 = "<Select value={form.estado} onChange={e => setForm({ ...form, estado: e.target.value })}>"; 
        $respuesta_114 = "{ESTADOS.map(s =>"; 
        $respuesta_115 = "<MenuItem key={s} value={s}>{s.replace('_', ' ')}</MenuItem>"; 
        $respuesta_116 = ")}";
        $respuesta_117 = "</Select>";
        $respuesta_118 = "<Button variant=\"contained\" onClick={handleCrear}>Crear Pedido</Button>";
        $respuesta_119 = "</Box>";
        $respuesta_120 = ")}";

        // --- Dashboard: lista pedidos ---
        $respuesta_121 = "{cargando ? (";
        $respuesta_122 = "<Box display=\"flex\" justifyContent=\"center\" mt={4}><CircularProgress /></Box>";
        $respuesta_123 = ") : pedidos.length === 0 ? (";
        $respuesta_124 = "<Typography color=\"text.secondary\" mt={4}>No hay pedidos activos.</Typography>";
        $respuesta_125 = ") : (";
        $respuesta_126 = "<Grid container spacing={2}>";
        $respuesta_127 = "{pedidos.map(pedido => (";
        $respuesta_128 = "<Grid item xs={12} sm={6} md={4} key={pedido.id}>";
        $respuesta_129 = "<PedidoCard pedido={pedido} onActualizado={cargarPedidos} onEliminado={cargarPedidos} />";
        $respuesta_130 = "</Grid>";
        $respuesta_131 = "))}";
        $respuesta_132 = "</Grid>";
        $respuesta_133 = ")}";
        $respuesta_134 = "</Container>";
        $respuesta_135 = ");";
        $respuesta_136 = "}";

        for ($i = 1; $i <= 136; $i++) {
            ${"verificar_$i"} = "correcto";
        }

    } else {

        $answers = [
            1   => "import { useState, useEffect } from 'react';",
            2   => "import { getAllDomicilios, createDomicilio, updateDomicilio, deleteDomicilio } from '../services/api';",
            3   => "import {",
            4   => "Box, Button, Chip, CircularProgress, Container, Grid,",
            5   => "MenuItem, Select, Stack, TextField, Typography,",
            6   => "} from '@mui/material';",
            7   => "const ESTADOS = ['EN_CAMINO', 'EN_REPARTO', 'ENTREGADO'];",
            8   => "const ESTADO_INFO = {",
            9   => "EN_CAMINO: { color: 'warning', icon: '🚦' },",
            10  => "EN_REPARTO: { color: 'info', icon: '🛵' },",
            11  => "ENTREGADO: { color: 'success', icon: '✅' },",
            12  => "};",
            13  => "function PedidoCard({ pedido, onActualizado, onEliminado }) {",
            14  => "const [editando, setEditando] = useState(false);",
            15  => "const [guardando, setGuardando] = useState(false);",
            16  => "const [form, setForm] = useState({",
            17  => "nombreDomiciliario: pedido.nombreDomiciliario,",
            18  => "estado: pedido.estado,",
            19  => "userId: pedido.userId,",
            20  => "});",
            21  => "const info = ESTADO_INFO[pedido.estado] ?? ESTADO_INFO.EN_CAMINO;",
            22  => "const handleGuardar = async () => {",
            23  => "setGuardando(true);",
            24  => "try {",
            25  => "await updateDomicilio(pedido.id, form);",
            26  => "onActualizado();",
            27  => "setEditando(false);",
            28  => "} catch (e) { alert('Error al guardar: ' + e.message); }",
            29  => "finally { setGuardando(false); }",
            30  => "};",
            31  => "const handleEliminar = async () => {",
            32  => "try {",
            33  => "await deleteDomicilio(pedido.id);",
            34  => "onEliminado();",
            35  => "} catch (e) { alert('Error al eliminar: ' + e.message); }",
            36  => "};",
            // return – contenedores genéricos
            37  => "return (",
            38  => "<Box sx={{ border: '1px solid', borderColor: 'divider', borderRadius: 2, p: 2 }}>",
            39  => "<Chip label={`\${info.icon} \${pedido.estado.replace('_', ' ')}`} color={info.color} sx={{ mb: 1 }} />",
            40  => "{editando ? (",
            41  => "<Stack spacing={2} mt={1}>",
            // return – TextField modo edición
            42  => "<TextField",
            43  => "label=\"Nombre domiciliario\"",
            44  => "value={form.nombreDomiciliario}",
            45  => "onChange={e => setForm({ ...form, nombreDomiciliario: e.target.value })}",
            46  => "/>",
            // return – Select + map
            47  => "<Select value={form.estado} onChange={e => setForm({ ...form, estado: e.target.value })}>",
            48  => "{ESTADOS.map(s => <MenuItem key={s} value={s}>{s.replace('_', ' ')}</MenuItem>)}",
            49  => "</Select>",
            // return – Buttons modo edición
            50  => "<Stack direction=\"row\" spacing={1}>",
            51  => "<Button variant=\"contained\" onClick={handleGuardar} disabled={guardando}>",
            52  => "{guardando ? 'Guardando...' : 'Guardar'}",
            53  => "</Button>",
            54  => "<Button variant=\"outlined\" onClick={() => setEditando(false)}>Cancelar</Button>",
            55  => "</Stack>",
            56  => "</Stack>",
            // return – vista lectura
            57  => ") : (",
            58  => "<>",
            59  => "<Typography><strong>#{pedido.id}</strong></Typography>",
            60  => "<Typography>{pedido.nombreDomiciliario}</Typography>",
            61  => "<Typography color=\"text.secondary\">{pedido.username}</Typography>",
            62  => "<Stack direction=\"row\" spacing={1} mt={2}>",
            63  => "<Button variant=\"contained\" color=\"warning\" onClick={() => setEditando(true)}>✏️ Editar</Button>",
            64  => "<Button variant=\"contained\" color=\"error\" onClick={handleEliminar}>🗑 Eliminar</Button>",
            65  => "</Stack>",
            66  => "</>",
            // return – cierre
            67  => ")}",
            68  => "</Box>",
            69  => ");",
            70  => "}",
            71  => "export default function Dashboard({ onLogout }) {",
            72  => "const [pedidos, setPedidos] = useState([]);",
            73  => "const [cargando, setCargando] = useState(true);",
            74  => "const [mostrarForm, setMostrarForm] = useState(false);",
            75  => "const [form, setForm] = useState({",
            76  => "nombreDomiciliario: '', estado: 'EN_CAMINO', userId: 1,",
            77  => "});",
            78  => "const cargarPedidos = async () => {",
            79  => "setCargando(true);",
            80  => "try {",
            81  => "const data = await getAllDomicilios();",
            82  => "setPedidos(data);",
            83  => "} catch (e) { console.error(e); }",
            84  => "finally { setCargando(false); }",
            85  => "};",
            86  => "useEffect(() => { cargarPedidos(); }, []);",
            87  => "const handleCrear = async () => {",
            88  => "try {",
            89  => "await createDomicilio(form);",
            90  => "setForm({ nombreDomiciliario: '', estado: 'EN_CAMINO', userId: 1 });",
            91  => "setMostrarForm(false);",
            92  => "cargarPedidos();",
            93  => "} catch (e) { console.error(e); }",
            94  => "};",
            95  => "return (",
            96  => "<Container maxWidth=\"lg\" sx={{ py: 4 }}>",
            97  => "<Stack direction=\"row\" justifyContent=\"space-between\" alignItems=\"center\" mb={3}>",
            98  => "<Typography variant=\"h4\" fontWeight={700}>🛵 Tablero de Pedidos</Typography>",
            99  => "<Stack direction=\"row\" spacing={2}>",
            100 => "<Button variant=\"contained\" onClick={() => setMostrarForm(!mostrarForm)}>",
            101 => "{mostrarForm ? '✕ Cancelar' : '+ Nuevo Pedido'}",
            102 => "</Button>",
            103 => "<Button variant=\"outlined\" color=\"error\" onClick={onLogout}>Salir</Button>",
            104 => "</Stack>",
            105 => "</Stack>",
            106 => "{mostrarForm && (",
            107 => "<Box sx={{ width: 400, display: 'flex', flexDirection: 'column', gap: 2, mb: 4 }}>",
            108 => "<TextField",
            109 => "label=\"Nombre domiciliario\"",
            110 => "value={form.nombreDomiciliario}",
            111 => "onChange={e => setForm({ ...form, nombreDomiciliario: e.target.value })}",
            112 => "/>",
            113 => "<Select value={form.estado} onChange={e => setForm({ ...form, estado: e.target.value })}>",
            114 => "{ESTADOS.map(s =>",
            115 => "<MenuItem key={s} value={s}>{s.replace('_', ' ')}</MenuItem>",
            116 => ")}",
            117 => "</Select>",
            118 => "<Button variant=\"contained\" onClick={handleCrear}>Crear Pedido</Button>",
            119 => "</Box>",
            120 => ")}",
            121 => "{cargando ? (",
            122 => "<Box display=\"flex\" justifyContent=\"center\" mt={4}><CircularProgress /></Box>",
            123 => ") : pedidos.length === 0 ? (",
            124 => "<Typography color=\"text.secondary\" mt={4}>No hay pedidos activos.</Typography>",
            125 => ") : (",
            126 => "<Grid container spacing={2}>",
            127 => "{pedidos.map(pedido => (",
            128 => "<Grid item xs={12} sm={6} md={4} key={pedido.id}>",
            129 => "<PedidoCard pedido={pedido} onActualizado={cargarPedidos} onEliminado={cargarPedidos} />",
            130 => "</Grid>",
            131 => "))}",
            132 => "</Grid>",
            133 => ")}",
            134 => "</Container>",
            135 => ");",
            136 => "}",
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
    <title>Dashboard unificado – React + MUI (fill in the blanks)</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style_2_0.css">
    <style>
        .seccion { width: calc(50% - 7.5px); padding: 20px; box-sizing: border-box; height: 330vh; }
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

<form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
<div class="form-container">

<!-- ===================== COLUMNA IZQUIERDA ===================== -->
<div class="seccion izquierda">

    <p class="subtitulo">Completa los espacios en blanco con el código correcto</p>

    <!-- IMPORTS -->
    <h2>Imports</h2>
    <pre><?php inp(1,$respuesta_1,$verificar_1,46); ?>
<?php inp(2,$respuesta_2,$verificar_2,100); ?>
<?php inp(3,$respuesta_3,$verificar_3,10); ?>
<?php inp(4,$respuesta_4,$verificar_4,56); ?>
<?php inp(5,$respuesta_5,$verificar_5,48); ?>
<?php inp(6,$respuesta_6,$verificar_6,22); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=1;$i<=6;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- CONSTANTES -->
    <h2>Constantes 🚦 🛵 ✅</h2>
    <pre><?php inp(7,$respuesta_7,$verificar_7,56); ?>

<?php inp(8,$respuesta_8,$verificar_8,20); ?>
<?php inp(9,$respuesta_9,$verificar_9,44); ?>
<?php inp(10,$respuesta_10,$verificar_10,44); ?>
<?php inp(11,$respuesta_11,$verificar_11,44); ?>
<?php inp(12,$respuesta_12,$verificar_12,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=7;$i<=12;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: definición y estados -->
    <h2>PedidoCard – definición y estados</h2>
    <pre><?php inp(13,$respuesta_13,$verificar_13,61); ?>
<?php inp(14,$respuesta_14,$verificar_14,50); ?>
<?php inp(15,$respuesta_15,$verificar_15,50); ?>
<?php inp(16,$respuesta_16,$verificar_16,35); ?>
<?php inp(17,$respuesta_17,$verificar_17,46); ?>
<?php inp(18,$respuesta_18,$verificar_18,22); ?>
<?php inp(19,$respuesta_19,$verificar_19,22); ?>
<?php inp(20,$respuesta_20,$verificar_20,6); ?>
<?php inp(21,$respuesta_21,$verificar_21,66); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=13;$i<=21;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: handleGuardar -->
    <h2>PedidoCard – handleGuardar</h2>
    <pre><?php inp(22,$respuesta_22,$verificar_22,36); ?>
<?php inp(23,$respuesta_23,$verificar_23,22); ?>
<?php inp(24,$respuesta_24,$verificar_24,8); ?>
<?php inp(25,$respuesta_25,$verificar_25,42); ?>
<?php inp(26,$respuesta_26,$verificar_26,18); ?>
<?php inp(27,$respuesta_27,$verificar_27,20); ?>
<?php inp(28,$respuesta_28,$verificar_28,58); ?>
<?php inp(29,$respuesta_29,$verificar_29,35); ?>
<?php inp(30,$respuesta_30,$verificar_30,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=22;$i<=30;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: handleEliminar -->
    <h2>PedidoCard – handleEliminar</h2>
    <pre><?php inp(31,$respuesta_31,$verificar_31,36); ?>
<?php inp(32,$respuesta_32,$verificar_32,8); ?>
<?php inp(33,$respuesta_33,$verificar_33,34); ?>
<?php inp(34,$respuesta_34,$verificar_34,18); ?>
<?php inp(35,$respuesta_35,$verificar_35,56); ?>
<?php inp(36,$respuesta_36,$verificar_36,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=31;$i<=36;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: return – contenedores genéricos -->
    <h2>PedidoCard – return (contenedores)</h2>
    <pre><?php inp(37,$respuesta_37,$verificar_37,10); ?>
<?php inp(38,$respuesta_38,$verificar_38,81); ?>
<?php inp(39,$respuesta_39,$verificar_39,99); ?>
<?php inp(40,$respuesta_40,$verificar_40,16); ?>
<?php inp(41,$respuesta_41,$verificar_41,26); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=37;$i<=41;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: return – TextField modo edición -->
    <h2>PedidoCard – TextField (modo edición)</h2>
    <pre><?php inp(42,$respuesta_42,$verificar_42,12); ?>
<?php inp(43,$respuesta_43,$verificar_43,28); ?>
<?php inp(44,$respuesta_44,$verificar_44,34); ?>
<?php inp(45,$respuesta_45,$verificar_45,73); ?>
<?php inp(46,$respuesta_46,$verificar_46,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=42;$i<=46;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: return – Select + map -->
    <h2>PedidoCard – Select + map de estados</h2>
    <pre><?php inp(47,$respuesta_47,$verificar_47,89); ?>
<?php inp(48,$respuesta_48,$verificar_48,80); ?>
<?php inp(49,$respuesta_49,$verificar_49,10); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=47;$i<=49;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: return – Buttons modo edición -->
    <h2>PedidoCard – Buttons (modo edición)</h2>
    <pre><?php inp(50,$respuesta_50,$verificar_50,36); ?>
<?php inp(51,$respuesta_51,$verificar_51,75); ?>
<?php inp(52,$respuesta_52,$verificar_52,38); ?>
<?php inp(53,$respuesta_53,$verificar_53,10); ?>
<?php inp(54,$respuesta_54,$verificar_54,80); ?>
<?php inp(55,$respuesta_55,$verificar_55,10); ?>
<?php inp(56,$respuesta_56,$verificar_56,10); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=50;$i<=56;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: return – vista lectura (Typography + Buttons) -->
    <h2>PedidoCard – Vista lectura (Typography + Buttons)</h2>
    <pre><?php inp(57,$respuesta_57,$verificar_57,8); ?>
<?php inp(58,$respuesta_58,$verificar_58,4); ?>
<?php inp(59,$respuesta_59,$verificar_59,54); ?>
<?php inp(60,$respuesta_60,$verificar_60,55); ?>
<?php inp(61,$respuesta_61,$verificar_61,66); ?>
<?php inp(62,$respuesta_62,$verificar_62,44); ?>
<?php inp(63,$respuesta_63,$verificar_63,96); ?>
<?php inp(64,$respuesta_64,$verificar_64,87); ?>
<?php inp(65,$respuesta_65,$verificar_65,10); ?>
<?php inp(66,$respuesta_66,$verificar_66,6); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=57;$i<=66;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: return – cierre contenedores -->
    <h2>PedidoCard – Cierre de contenedores</h2>
    <pre><?php inp(67,$respuesta_67,$verificar_67,4); ?>
<?php inp(68,$respuesta_68,$verificar_68,8); ?>
<?php inp(69,$respuesta_69,$verificar_69,4); ?>
<?php inp(70,$respuesta_70,$verificar_70,2); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=67;$i<=70;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

</div><!-- /izquierda -->

<!-- ===================== COLUMNA DERECHA ===================== -->
<div class="seccion derecha">

    <!-- Dashboard: estados -->
    <h2>Dashboard – estados</h2>
    <pre><?php inp(71,$respuesta_71,$verificar_71,50); ?>
<?php inp(72,$respuesta_72,$verificar_72,52); ?>
<?php inp(73,$respuesta_73,$verificar_73,46); ?>
<?php inp(74,$respuesta_74,$verificar_74,66); ?>
<?php inp(75,$respuesta_75,$verificar_75,50); ?>
<?php inp(76,$respuesta_76,$verificar_76,54); ?>
<?php inp(77,$respuesta_77,$verificar_77,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=71;$i<=77;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: cargarPedidos -->
    <h2>Dashboard – cargarPedidos</h2>
    <pre><?php inp(78,$respuesta_78,$verificar_78,36); ?>
<?php inp(79,$respuesta_79,$verificar_79,22); ?>
<?php inp(80,$respuesta_80,$verificar_80,8); ?>
<?php inp(81,$respuesta_81,$verificar_81,42); ?>
<?php inp(82,$respuesta_82,$verificar_82,20); ?>
<?php inp(83,$respuesta_83,$verificar_83,38); ?>
<?php inp(84,$respuesta_84,$verificar_84,28); ?>
<?php inp(85,$respuesta_85,$verificar_85,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=78;$i<=85;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: useEffect + handleCrear -->
    <h2>Dashboard – useEffect y handleCrear</h2>
    <pre><?php inp(86,$respuesta_86,$verificar_86,48); ?>

<?php inp(87,$respuesta_87,$verificar_87,36); ?>
<?php inp(88,$respuesta_88,$verificar_88,8); ?>
<?php inp(89,$respuesta_89,$verificar_89,28); ?>
<?php inp(90,$respuesta_90,$verificar_90,70); ?>
<?php inp(91,$respuesta_91,$verificar_91,24); ?>
<?php inp(92,$respuesta_92,$verificar_92,18); ?>
<?php inp(93,$respuesta_93,$verificar_93,36); ?>
<?php inp(94,$respuesta_94,$verificar_94,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=86;$i<=94;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: return – header -->
    <h2>Dashboard – return (header)</h2>
    <pre><?php inp(95,$respuesta_95,$verificar_95,10); ?>
<?php inp(96,$respuesta_96,$verificar_96,46); ?>
<?php inp(97,$respuesta_97,$verificar_97,74); ?>
<?php inp(98,$respuesta_98,$verificar_98,70); ?>
<?php inp(99,$respuesta_99,$verificar_99,30); ?>
<?php inp(100,$respuesta_100,$verificar_100,66); ?>
<?php inp(101,$respuesta_101,$verificar_101,52); ?>
<?php inp(102,$respuesta_102,$verificar_102,10); ?>
<?php inp(103,$respuesta_103,$verificar_103,70); ?>
<?php inp(104,$respuesta_104,$verificar_104,10); ?>
<?php inp(105,$respuesta_105,$verificar_105,10); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=95;$i<=105;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: form nuevo pedido – TextField -->
    <h2>Dashboard – form nuevo pedido (TextField)</h2>
    <pre><span class="comment-line">{/* Form nuevo pedido */}</span>
<?php inp(106,$respuesta_106,$verificar_106,20); ?>
<?php inp(107,$respuesta_107,$verificar_107,74); ?>
<?php inp(108,$respuesta_108,$verificar_108,12); ?>
<?php inp(109,$respuesta_109,$verificar_109,28); ?>
<?php inp(110,$respuesta_110,$verificar_110,34); ?>
<?php inp(111,$respuesta_111,$verificar_111,69); ?>
<?php inp(112,$respuesta_112,$verificar_112,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=106;$i<=112;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: form nuevo pedido – Select + map -->
    <h2>Dashboard – form nuevo pedido (Select + map)</h2>
    <pre><?php inp(113,$respuesta_113,$verificar_113,72); ?>
<?php inp(114,$respuesta_114,$verificar_114,20); ?>
<?php inp(115,$respuesta_115,$verificar_115,62); ?>
<?php inp(116,$respuesta_116,$verificar_116,4); ?>
<?php inp(117,$respuesta_117,$verificar_117,10); ?>
<?php inp(118,$respuesta_118,$verificar_118,64); ?>
<?php inp(119,$respuesta_119,$verificar_119,8); ?>
<?php inp(120,$respuesta_120,$verificar_120,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=113;$i<=120;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: return – lista pedidos -->
    <h2>Dashboard – lista de pedidos</h2>
    <pre><span class="comment-line">{/* Lista de pedidos */}</span>
<?php inp(121,$respuesta_121,$verificar_121,16); ?>
<?php inp(122,$respuesta_122,$verificar_122,78); ?>
<?php inp(123,$respuesta_123,$verificar_123,36); ?>
<?php inp(124,$respuesta_124,$verificar_124,76); ?>
<?php inp(125,$respuesta_125,$verificar_125,8); ?>
<?php inp(126,$respuesta_126,$verificar_126,28); ?>
<?php inp(127,$respuesta_127,$verificar_127,28); ?>
<?php inp(128,$respuesta_128,$verificar_128,52); ?>
<?php inp(129,$respuesta_129,$verificar_129,84); ?>
<?php inp(130,$respuesta_130,$verificar_130,10); ?>
<?php inp(131,$respuesta_131,$verificar_131,6); ?>
<?php inp(132,$respuesta_132,$verificar_132,14); ?>
<?php inp(133,$respuesta_133,$verificar_133,4); ?>
<?php inp(134,$respuesta_134,$verificar_134,16); ?>
<?php inp(135,$respuesta_135,$verificar_135,4); ?>
<?php inp(136,$respuesta_136,$verificar_136,2); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=121;$i<=136;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <strong>Si desea ver las soluciones escribir: mostrar_solucion</strong><br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion" value="<?php echo htmlspecialchars($mostrar_solucion); ?>">
    <button type="submit">Mostrar Solución</button>

</div><!-- /derecha -->

</div><!-- /form-container -->
</form>

<div class="centered-container">
    <a class="btn btn-primary" href="tercero.php" role="button">Siguiente</a>
</div>

</body>
</html>