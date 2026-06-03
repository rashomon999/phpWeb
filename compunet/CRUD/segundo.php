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

        // --- PedidoCard: handleCambioEstado ---
        $respuesta_37 = "const handleCambioEstado = async (nuevoEstado) => {";
        $respuesta_38 = "try {";
        $respuesta_39 = "await updateDomicilio(pedido.id, { ...form, estado: nuevoEstado });";
        $respuesta_40 = "onActualizado();";
        $respuesta_41 = "} catch (e) { alert('Error al cambiar estado: ' + e.message); }";
        $respuesta_42 = "};";

        // --- PedidoCard: return JSX ---
        $respuesta_43 = "return (";
        $respuesta_44 = "<Box sx={{ border: '1px solid', borderColor: 'divider', borderRadius: 2, p: 2 }}>";
        $respuesta_45 = "<Chip label={`\${info.icon} \${pedido.estado.replace('_', ' ')}`} color={info.color} sx={{ mb: 1 }} />";
        $respuesta_46 = "{editando ? (";
        $respuesta_47 = "<Stack spacing={2} mt={1}>";
        $respuesta_48 = "<TextField";
        $respuesta_49 = "label=\"Nombre domiciliario\"";
        $respuesta_50 = "value={form.nombreDomiciliario}";
        $respuesta_51 = "onChange={e => setForm({ ...form, nombreDomiciliario: e.target.value })}";
        $respuesta_52 = "/>";
        $respuesta_53 = "<Select value={form.estado} onChange={e => setForm({ ...form, estado: e.target.value })}>"; 
        $respuesta_54 = "{ESTADOS.map(s => <MenuItem key={s} value={s}>{s.replace('_', ' ')}</MenuItem>)}";
        $respuesta_55 = "</Select>";
        $respuesta_56 = "<Stack direction=\"row\" spacing={1}>";
        $respuesta_57 = "<Button variant=\"contained\" onClick={handleGuardar} disabled={guardando}>";
        $respuesta_58 = "{guardando ? 'Guardando…' : 'Guardar'}";
        $respuesta_59 = "</Button>";
        $respuesta_60 = "<Button variant=\"outlined\" onClick={() => setEditando(false)}>Cancelar</Button>";
        $respuesta_61 = "</Stack>";
        $respuesta_62 = "</Stack>";
        $respuesta_63 = ") : (";
        $respuesta_64 = "<>";
        $respuesta_65 = "<Typography><strong>#{pedido.id}</strong></Typography>";
        $respuesta_66 = "<Typography>{pedido.nombreDomiciliario}</Typography>";
        $respuesta_67 = "<Typography color=\"text.secondary\">{pedido.username}</Typography>";
        $respuesta_68 = "<Stack direction=\"row\" spacing={1} mt={1} flexWrap=\"wrap\">";
        $respuesta_69 = "{ESTADOS.filter(s => s !== pedido.estado).map(s => (";
        $respuesta_70 = "<Button key={s} size=\"small\" variant=\"outlined\" onClick={() => handleCambioEstado(s)}>";
        $respuesta_71 = "→ {s.replace('_', ' ')}";
        $respuesta_72 = "</Button>";
        $respuesta_73 = "))}";
        $respuesta_74 = "</Stack>";
        $respuesta_75 = "<Stack direction=\"row\" spacing={1} mt={2}>";
        $respuesta_76 = "<Button variant=\"contained\" color=\"warning\" onClick={() => setEditando(true)}>✏️ Editar</Button>";
        $respuesta_77 = "<Button variant=\"contained\" color=\"error\" onClick={handleEliminar}>🗑 Eliminar</Button>";
        $respuesta_78 = "</Stack>";
        $respuesta_79 = "</>";
        $respuesta_80 = ")}";
        $respuesta_81 = "</Box>";
        $respuesta_82 = ");";
        $respuesta_83 = "}";

        // --- Dashboard: estados ---
        $respuesta_84 = "export default function Dashboard({ onLogout }) {";
        $respuesta_85 = "const [pedidos, setPedidos]         = useState([]);";
        $respuesta_86 = "const [cargando, setCargando]       = useState(true);";
        $respuesta_87 = "const [mostrarForm, setMostrarForm] = useState(false);";
        $respuesta_88 = "const [form, setForm] = useState({";
        $respuesta_89 = "nombreDomiciliario: '', estado: 'EN_CAMINO', userId: 1,";
        $respuesta_90 = "});";

        // --- Dashboard: cargarPedidos ---
        $respuesta_91 = "const cargarPedidos = async () => {";
        $respuesta_92 = "setCargando(true);";
        $respuesta_93 = "try {";
        $respuesta_94 = "const data = await getAllDomicilios();";
        $respuesta_95 = "setPedidos(data);";
        $respuesta_96 = "} catch (e) { console.error(e); }";
        $respuesta_97 = "finally { setCargando(false); }";
        $respuesta_98 = "};";

        // --- Dashboard: useEffect ---
        $respuesta_99 = "useEffect(() => { cargarPedidos(); }, []);";

        // --- Dashboard: handleCrear ---
        $respuesta_100 = "const handleCrear = async () => {";
        $respuesta_101 = "try {";
        $respuesta_102 = "await createDomicilio(form);";
        $respuesta_103 = "setForm({ nombreDomiciliario: '', estado: 'EN_CAMINO', userId: 1 });";
        $respuesta_104 = "setMostrarForm(false);";
        $respuesta_105 = "cargarPedidos();";
        $respuesta_106 = "} catch (e) { console.error(e); }";
        $respuesta_107 = "};";

        // --- Dashboard: return JSX ---
        $respuesta_108 = "return (";
        $respuesta_109 = "<Container maxWidth=\"lg\" sx={{ py: 4 }}>";
        $respuesta_110 = "<Stack direction=\"row\" justifyContent=\"space-between\" alignItems=\"center\" mb={3}>";
        $respuesta_111 = "<Typography variant=\"h4\" fontWeight={700}>🛵 Tablero de Pedidos</Typography>";
        $respuesta_112 = "<Stack direction=\"row\" spacing={2}>";
        $respuesta_113 = "<Button variant=\"contained\" onClick={() => setMostrarForm(!mostrarForm)}>";
        $respuesta_114 = "{mostrarForm ? '✕ Cancelar' : '+ Nuevo Pedido'}";
        $respuesta_115 = "</Button>";
        $respuesta_116 = "<Button variant=\"outlined\" color=\"error\" onClick={onLogout}>Salir</Button>";
        $respuesta_117 = "</Stack>";
        $respuesta_118 = "</Stack>";

        // --- Dashboard: form nuevo pedido ---
        $respuesta_119 = "{mostrarForm && (";
        $respuesta_120 = "<Box sx={{ width: 400, display: 'flex', flexDirection: 'column', gap: 2, mb: 4 }}>";
        $respuesta_121 = "<TextField";
        $respuesta_122 = "label=\"Nombre domiciliario\"";
        $respuesta_123 = "value={form.nombreDomiciliario}";
        $respuesta_124 = "onChange={e => setForm({ ...form, nombreDomiciliario: e.target.value })}";
        $respuesta_125 = "/>";
        $respuesta_126 = "<Select value={form.estado} onChange={e => setForm({ ...form, estado: e.target.value })}>"; 
        $respuesta_127 = "{ESTADOS.map(s =>"; 
        $respuesta_128 = "<MenuItem key={s} value={s}>{s.replace('_', ' ')}</MenuItem>"; 
        $respuesta_129 = ")}";
        $respuesta_130 = "</Select>";
        $respuesta_131 = "<Button variant=\"contained\" onClick={handleCrear}>Crear Pedido</Button>";
        $respuesta_132 = "</Box>";
        $respuesta_133 = ")}";

        // --- Dashboard: lista pedidos ---
        $respuesta_134 = "{cargando ? (";
        $respuesta_135 = "<Box display=\"flex\" justifyContent=\"center\" mt={4}><CircularProgress /></Box>";
        $respuesta_136 = ") : pedidos.length === 0 ? (";
        $respuesta_137 = "<Typography color=\"text.secondary\" mt={4}>No hay pedidos activos.</Typography>";
        $respuesta_138 = ") : (";
        $respuesta_139 = "<Grid container spacing={2}>";
        $respuesta_140 = "{pedidos.map(pedido => (";
        $respuesta_141 = "<Grid item xs={12} sm={6} md={4} key={pedido.id}>";
        $respuesta_142 = "<PedidoCard pedido={pedido} onActualizado={cargarPedidos} onEliminado={cargarPedidos} />";
        $respuesta_143 = "</Grid>";
        $respuesta_144 = "))}";
        $respuesta_145 = "</Grid>";
        $respuesta_146 = ")}";
        $respuesta_147 = "</Container>";
        $respuesta_148 = ");";
        $respuesta_149 = "}";

        for ($i = 1; $i <= 149; $i++) {
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
            37  => "const handleCambioEstado = async (nuevoEstado) => {",
            38  => "try {",
            39  => "await updateDomicilio(pedido.id, { ...form, estado: nuevoEstado });",
            40  => "onActualizado();",
            41  => "} catch (e) { alert('Error al cambiar estado: ' + e.message); }",
            42  => "};",
            43  => "return (",
            44  => "<Box sx={{ border: '1px solid', borderColor: 'divider', borderRadius: 2, p: 2 }}>",
            45  => "<Chip label={`\${info.icon} \${pedido.estado.replace('_', ' ')}`} color={info.color} sx={{ mb: 1 }} />",
            46  => "{editando ? (",
            47  => "<Stack spacing={2} mt={1}>",
            48  => "<TextField",
            49  => "label=\"Nombre domiciliario\"",
            50  => "value={form.nombreDomiciliario}",
            51  => "onChange={e => setForm({ ...form, nombreDomiciliario: e.target.value })}",
            52  => "/>",
            53  => "<Select value={form.estado} onChange={e => setForm({ ...form, estado: e.target.value })}>",
            54  => "{ESTADOS.map(s => <MenuItem key={s} value={s}>{s.replace('_', ' ')}</MenuItem>)}",
            55  => "</Select>",
            56  => "<Stack direction=\"row\" spacing={1}>",
            57  => "<Button variant=\"contained\" onClick={handleGuardar} disabled={guardando}>",
            58  => "{guardando ? 'Guardando…' : 'Guardar'}",
            59  => "</Button>",
            60  => "<Button variant=\"outlined\" onClick={() => setEditando(false)}>Cancelar</Button>",
            61  => "</Stack>",
            62  => "</Stack>",
            63  => ") : (",
            64  => "<>",
            65  => "<Typography><strong>#{pedido.id}</strong></Typography>",
            66  => "<Typography>{pedido.nombreDomiciliario}</Typography>",
            67  => "<Typography color=\"text.secondary\">{pedido.username}</Typography>",
            68  => "<Stack direction=\"row\" spacing={1} mt={1} flexWrap=\"wrap\">",
            69  => "{ESTADOS.filter(s => s !== pedido.estado).map(s => (",
            70  => "<Button key={s} size=\"small\" variant=\"outlined\" onClick={() => handleCambioEstado(s)}>",
            71  => "→ {s.replace('_', ' ')}",
            72  => "</Button>",
            73  => "))}",
            74  => "</Stack>",
            75  => "<Stack direction=\"row\" spacing={1} mt={2}>",
            76  => "<Button variant=\"contained\" color=\"warning\" onClick={() => setEditando(true)}>✏️ Editar</Button>",
            77  => "<Button variant=\"contained\" color=\"error\" onClick={handleEliminar}>🗑 Eliminar</Button>",
            78  => "</Stack>",
            79  => "</>",
            80  => ")}",
            81  => "</Box>",
            82  => ");",
            83  => "}",
            84  => "export default function Dashboard({ onLogout }) {",
            85  => "const [pedidos, setPedidos]         = useState([]);",
            86  => "const [cargando, setCargando]       = useState(true);",
            87  => "const [mostrarForm, setMostrarForm] = useState(false);",
            88  => "const [form, setForm] = useState({",
            89  => "nombreDomiciliario: '', estado: 'EN_CAMINO', userId: 1,",
            90  => "});",
            91  => "const cargarPedidos = async () => {",
            92  => "setCargando(true);",
            93  => "try {",
            94  => "const data = await getAllDomicilios();",
            95  => "setPedidos(data);",
            96  => "} catch (e) { console.error(e); }",
            97  => "finally { setCargando(false); }",
            98  => "};",
            99  => "useEffect(() => { cargarPedidos(); }, []);",
            100 => "const handleCrear = async () => {",
            101 => "try {",
            102 => "await createDomicilio(form);",
            103 => "setForm({ nombreDomiciliario: '', estado: 'EN_CAMINO', userId: 1 });",
            104 => "setMostrarForm(false);",
            105 => "cargarPedidos();",
            106 => "} catch (e) { console.error(e); }",
            107 => "};",
            108 => "return (",
            109 => "<Container maxWidth=\"lg\" sx={{ py: 4 }}>",
            110 => "<Stack direction=\"row\" justifyContent=\"space-between\" alignItems=\"center\" mb={3}>",
            111 => "<Typography variant=\"h4\" fontWeight={700}>🛵 Tablero de Pedidos</Typography>",
            112 => "<Stack direction=\"row\" spacing={2}>",
            113 => "<Button variant=\"contained\" onClick={() => setMostrarForm(!mostrarForm)}>",
            114 => "{mostrarForm ? '✕ Cancelar' : '+ Nuevo Pedido'}",
            115 => "</Button>",
            116 => "<Button variant=\"outlined\" color=\"error\" onClick={onLogout}>Salir</Button>",
            117 => "</Stack>",
            118 => "</Stack>",
            119 => "{mostrarForm && (",
            120 => "<Box sx={{ width: 400, display: 'flex', flexDirection: 'column', gap: 2, mb: 4 }}>",
            121 => "<TextField",
            122 => "label=\"Nombre domiciliario\"",
            123 => "value={form.nombreDomiciliario}",
            124 => "onChange={e => setForm({ ...form, nombreDomiciliario: e.target.value })}",
            125 => "/>",
            126 => "<Select value={form.estado} onChange={e => setForm({ ...form, estado: e.target.value })}>",
            127 => "{ESTADOS.map(s =>",
            128 => "<MenuItem key={s} value={s}>{s.replace('_', ' ')}</MenuItem>",
            129 => ")}",
            130 => "</Select>",
            131 => "<Button variant=\"contained\" onClick={handleCrear}>Crear Pedido</Button>",
            132 => "</Box>",
            133 => ")}",
            134 => "{cargando ? (",
            135 => "<Box display=\"flex\" justifyContent=\"center\" mt={4}><CircularProgress /></Box>",
            136 => ") : pedidos.length === 0 ? (",
            137 => "<Typography color=\"text.secondary\" mt={4}>No hay pedidos activos.</Typography>",
            138 => ") : (",
            139 => "<Grid container spacing={2}>",
            140 => "{pedidos.map(pedido => (",
            141 => "<Grid item xs={12} sm={6} md={4} key={pedido.id}>",
            142 => "<PedidoCard pedido={pedido} onActualizado={cargarPedidos} onEliminado={cargarPedidos} />",
            143 => "</Grid>",
            144 => "))}",
            145 => "</Grid>",
            146 => ")}",
            147 => "</Container>",
            148 => ");",
            149 => "}",
        ];

        foreach ($answers as $i => $correct) {
            // ✅ AJUSTE: normalizar() para ignorar espacios irrelevantes
            $val = normalizar(isset($_POST["respuesta_$i"]) ? $_POST["respuesta_$i"] : '');
            ${"respuesta_$i"} = $val;
            if ($val === normalizar($correct)) {
                ${"verificar_$i"} = "correcto";
            } elseif ($val === '') {
                ${"verificar_$i"} = '';
            } else {
                ${"verificar_$i"} = "incorrecto";
            }
        }
    }
}

// ✅ Normaliza espacios irrelevantes antes de comparar
function normalizar($str) {
    $str = trim($str);
    $str = preg_replace('/\s+/', ' ', $str);
    $str = preg_replace('/\s*:\s*/', ': ', $str);
    $str = preg_replace('/\s*,\s*/', ', ', $str);
    $str = preg_replace('/\{\s*/', '{ ', $str);
    $str = preg_replace('/\s*\}/', ' }', $str);
    $str = preg_replace('/\s*\[\s*/', ' [', $str);   // ← reemplaza ambas reglas de [ ]
    $str = preg_replace('/\s*\]/', ']', $str);
    $str = preg_replace('/\s*=\s*/', ' = ', $str);
    return $str;
}

function inp($n, $respuesta, $verificar, $size) {
    $val = htmlspecialchars(normalizar($respuesta));
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
        .seccion { width: calc(50% - 7.5px); padding: 20px; box-sizing: border-box; }
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
<?php inp(35,$respuesta_35,$verificar_35,52); ?>
<?php inp(36,$respuesta_36,$verificar_36,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=31;$i<=36;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: handleCambioEstado -->
    <h2>PedidoCard – handleCambioEstado</h2>
    <pre><?php inp(37,$respuesta_37,$verificar_37,48); ?>
<?php inp(38,$respuesta_38,$verificar_38,8); ?>
<?php inp(39,$respuesta_39,$verificar_39,66); ?>
<?php inp(40,$respuesta_40,$verificar_40,18); ?>
<?php inp(41,$respuesta_41,$verificar_41,56); ?>
<?php inp(42,$respuesta_42,$verificar_42,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=37;$i<=42;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- PedidoCard: return – vista normal -->
    <h2>PedidoCard – return (vista normal)</h2>
    <pre><?php inp(43,$respuesta_43,$verificar_43,10); ?>
<?php inp(44,$respuesta_44,$verificar_44,72); ?>
<?php inp(45,$respuesta_45,$verificar_45,86); ?>
<?php inp(46,$respuesta_46,$verificar_46,16); ?>
<?php inp(47,$respuesta_47,$verificar_47,24); ?>
<?php inp(48,$respuesta_48,$verificar_48,12); ?>
<?php inp(49,$respuesta_49,$verificar_49,28); ?>
<?php inp(50,$respuesta_50,$verificar_50,28); ?>
<?php inp(51,$respuesta_51,$verificar_51,60); ?>
<?php inp(52,$respuesta_52,$verificar_52,4); ?>
<?php inp(53,$respuesta_53,$verificar_53,70); ?>
<?php inp(54,$respuesta_54,$verificar_54,76); ?>
<?php inp(55,$respuesta_55,$verificar_55,10); ?>
<?php inp(56,$respuesta_56,$verificar_56,32); ?>
<?php inp(57,$respuesta_57,$verificar_57,62); ?>
<?php inp(58,$respuesta_58,$verificar_58,34); ?>
<?php inp(59,$respuesta_59,$verificar_59,10); ?>
<?php inp(60,$respuesta_60,$verificar_60,72); ?>
<?php inp(61,$respuesta_61,$verificar_61,10); ?>
<?php inp(62,$respuesta_62,$verificar_62,10); ?>
<?php inp(63,$respuesta_63,$verificar_63,8); ?>
<?php inp(64,$respuesta_64,$verificar_64,4); ?>
<?php inp(65,$respuesta_65,$verificar_65,54); ?>
<?php inp(66,$respuesta_66,$verificar_66,44); ?>
<?php inp(67,$respuesta_67,$verificar_67,56); ?>
<?php inp(68,$respuesta_68,$verificar_68,50); ?>
<?php inp(69,$respuesta_69,$verificar_69,52); ?>
<?php inp(70,$respuesta_70,$verificar_70,74); ?>
<?php inp(71,$respuesta_71,$verificar_71,26); ?>
<?php inp(72,$respuesta_72,$verificar_72,10); ?>
<?php inp(73,$respuesta_73,$verificar_73,6); ?>
<?php inp(74,$respuesta_74,$verificar_74,10); ?>
<?php inp(75,$respuesta_75,$verificar_75,36); ?>
<?php inp(76,$respuesta_76,$verificar_76,82); ?>
<?php inp(77,$respuesta_77,$verificar_77,78); ?>
<?php inp(78,$respuesta_78,$verificar_78,10); ?>
<?php inp(79,$respuesta_79,$verificar_79,6); ?>
<?php inp(80,$respuesta_80,$verificar_80,4); ?>
<?php inp(81,$respuesta_81,$verificar_81,8); ?>
<?php inp(82,$respuesta_82,$verificar_82,4); ?>
<?php inp(83,$respuesta_83,$verificar_83,2); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=43;$i<=83;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

</div><!-- /izquierda -->

<!-- ===================== COLUMNA DERECHA ===================== -->
<div class="seccion derecha">

    <!-- Dashboard: estados -->
    <h2>Dashboard – estados</h2>
    <pre><?php inp(84,$respuesta_84,$verificar_84,50); ?>
<?php inp(85,$respuesta_85,$verificar_85,52); ?>
<?php inp(86,$respuesta_86,$verificar_86,46); ?>
<?php inp(87,$respuesta_87,$verificar_87,66); ?>
<?php inp(88,$respuesta_88,$verificar_88,50); ?>
<?php inp(89,$respuesta_89,$verificar_89,54); ?>
<?php inp(90,$respuesta_90,$verificar_90,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=84;$i<=90;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: cargarPedidos -->
    <h2>Dashboard – cargarPedidos</h2>
    <pre><?php inp(91,$respuesta_91,$verificar_91,36); ?>
<?php inp(92,$respuesta_92,$verificar_92,22); ?>
<?php inp(93,$respuesta_93,$verificar_93,8); ?>
<?php inp(94,$respuesta_94,$verificar_94,42); ?>
<?php inp(95,$respuesta_95,$verificar_95,20); ?>
<?php inp(96,$respuesta_96,$verificar_96,38); ?>
<?php inp(97,$respuesta_97,$verificar_97,28); ?>
<?php inp(98,$respuesta_98,$verificar_98,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=91;$i<=98;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: useEffect + handleCrear -->
    <h2>Dashboard – useEffect y handleCrear</h2>
    <pre><?php inp(99,$respuesta_99,$verificar_99,48); ?>

<?php inp(100,$respuesta_100,$verificar_100,36); ?>
<?php inp(101,$respuesta_101,$verificar_101,8); ?>
<?php inp(102,$respuesta_102,$verificar_102,28); ?>
<?php inp(103,$respuesta_103,$verificar_103,70); ?>
<?php inp(104,$respuesta_104,$verificar_104,24); ?>
<?php inp(105,$respuesta_105,$verificar_105,18); ?>
<?php inp(106,$respuesta_106,$verificar_106,36); ?>
<?php inp(107,$respuesta_107,$verificar_107,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=99;$i<=107;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: return – header -->
    <h2>Dashboard – return (header)</h2>
    <pre><?php inp(108,$respuesta_108,$verificar_108,10); ?>
<?php inp(109,$respuesta_109,$verificar_109,46); ?>
<?php inp(110,$respuesta_110,$verificar_110,74); ?>
<?php inp(111,$respuesta_111,$verificar_111,70); ?>
<?php inp(112,$respuesta_112,$verificar_112,30); ?>
<?php inp(113,$respuesta_113,$verificar_113,66); ?>
<?php inp(114,$respuesta_114,$verificar_114,52); ?>
<?php inp(115,$respuesta_115,$verificar_115,10); ?>
<?php inp(116,$respuesta_116,$verificar_116,70); ?>
<?php inp(117,$respuesta_117,$verificar_117,10); ?>
<?php inp(118,$respuesta_118,$verificar_118,10); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=108;$i<=118;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: return – form nuevo pedido -->
    <h2>Dashboard – form nuevo pedido</h2>
    <pre><span class="comment-line">{/* Form nuevo pedido */}</span>
<?php inp(119,$respuesta_119,$verificar_119,20); ?>
<?php inp(120,$respuesta_120,$verificar_120,74); ?>
<?php inp(121,$respuesta_121,$verificar_121,12); ?>
<?php inp(122,$respuesta_122,$verificar_122,28); ?>
<?php inp(123,$respuesta_123,$verificar_123,30); ?>
<?php inp(124,$respuesta_124,$verificar_124,62); ?>
<?php inp(125,$respuesta_125,$verificar_125,4); ?>
<?php inp(126,$respuesta_126,$verificar_126,72); ?>
<?php inp(127,$respuesta_127,$verificar_127,20); ?>
<?php inp(128,$respuesta_128,$verificar_128,62); ?>
<?php inp(129,$respuesta_129,$verificar_129,4); ?>
<?php inp(130,$respuesta_130,$verificar_130,10); ?>
<?php inp(131,$respuesta_131,$verificar_131,64); ?>
<?php inp(132,$respuesta_132,$verificar_132,8); ?>
<?php inp(133,$respuesta_133,$verificar_133,4); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=119;$i<=133;$i++) echo ${"verificar_$i"}." "; ?>
    <hr>

    <!-- Dashboard: return – lista pedidos -->
    <h2>Dashboard – lista de pedidos</h2>
    <pre><span class="comment-line">{/* Lista de pedidos */}</span>
<?php inp(134,$respuesta_134,$verificar_134,16); ?>
<?php inp(135,$respuesta_135,$verificar_135,78); ?>
<?php inp(136,$respuesta_136,$verificar_136,36); ?>
<?php inp(137,$respuesta_137,$verificar_137,76); ?>
<?php inp(138,$respuesta_138,$verificar_138,8); ?>
<?php inp(139,$respuesta_139,$verificar_139,28); ?>
<?php inp(140,$respuesta_140,$verificar_140,28); ?>
<?php inp(141,$respuesta_141,$verificar_141,52); ?>
<?php inp(142,$respuesta_142,$verificar_142,84); ?>
<?php inp(143,$respuesta_143,$verificar_143,10); ?>
<?php inp(144,$respuesta_144,$verificar_144,6); ?>
<?php inp(145,$respuesta_145,$verificar_145,14); ?>
<?php inp(146,$respuesta_146,$verificar_146,4); ?>
<?php inp(147,$respuesta_147,$verificar_147,16); ?>
<?php inp(148,$respuesta_148,$verificar_148,4); ?>
<?php inp(149,$respuesta_149,$verificar_149,2); ?></pre>
    <button type="submit">Verificar</button>
    <?php for($i=134;$i<=149;$i++) echo ${"verificar_$i"}." "; ?>
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