<?php

for ($i = 1; $i <= 100; $i++) {
    ${"respuesta_" . $i} = '';
}

for ($i = 1; $i <= 100; $i++) {
    ${"verificar_" . $i} = '';
}

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';

    if ($mostrar_solucion === 'mostrar_solucion') {

        // AuthController
        $respuesta_1  = '@RestController';
        $respuesta_2  = '@RequestMapping("/api/public/auth")';
        $respuesta_3  = 'public class AuthController';
        $respuesta_4  = '@Autowired';
        $respuesta_5  = 'private IAuthService authService;';
        $respuesta_6  = '@PostMapping("/login")';
        $respuesta_7  = 'public ResponseEntity<?> login(@RequestBody LoginRequest request)';
        $respuesta_8  = 'try';
        $respuesta_9  = 'TokenResponse token = authService.login(request);';
        $respuesta_10 = 'return ResponseEntity.ok(token);';
        $respuesta_11 = 'catch (Exception e)';
        $respuesta_12 = 'return ResponseEntity.status(401).body(e.getMessage());';

        // LoginRequestDTO
        $respuesta_13 = 'public class LoginRequest';
        $respuesta_14 = 'private String username;';
        $respuesta_15 = 'private String password;';

        // TokenResponseDTO
        $respuesta_16 = 'public class TokenResponse';
        $respuesta_17 = 'String accessToken;';

        // IAuthService
        $respuesta_18 = 'public interface IAuthService';
        $respuesta_19 = 'TokenResponse login(LoginRequest request);';

        // AuthServiceImpl
        $respuesta_20 = '@Service';
        $respuesta_21 = '@RequiredArgsConstructor';
        $respuesta_22 = 'public class AuthServiceImpl implements IAuthService';
        $respuesta_23 = 'private final JwtService jwtService;';
        $respuesta_24 = 'private final UserDetailsService userDetailsService;';
        $respuesta_25 = 'private final PasswordEncoder passwordEncoder;';
        $respuesta_26 = '@Override';
        $respuesta_27 = 'public TokenResponse login(LoginRequest request)';
        $respuesta_28 = 'UserDetails userDetails = userDetailsService.loadUserByUsername(request.getUsername());';
        $respuesta_29 = 'if (userDetails == null)';
        $respuesta_30 = 'throw new RuntimeException("Usuario no encontrado");';
        $respuesta_31 = 'if (!passwordEncoder.matches(request.getPassword(), userDetails.getPassword()))';
        $respuesta_32 = 'throw new RuntimeException("Contraseña incorrecta");';
        $respuesta_33 = 'CustomUserDetails customUD = (CustomUserDetails) userDetails;';
        $respuesta_34 = 'User user = customUD.getUser();';
        $respuesta_35 = 'Authentication auth = new UsernamePasswordAuthenticationToken(userDetails, "", userDetails.getAuthorities());';
        $respuesta_36 = 'String token = jwtService.generateToken(user, auth);';
        $respuesta_37 = 'return new TokenResponse(token);';

        for ($i = 1; $i <= 37; $i++) {
            ${"verificar_$i"} = "correcto";
        }

    } else {

        // --- AuthController ---
        $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
        $verificar_1 = ($respuesta_1 === '') ? '' : (($respuesta_1 === '@RestController') ? 'correcto' : 'incorrecto');

        $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
        $verificar_2 = ($respuesta_2 === '') ? '' : (($respuesta_2 === '@RequestMapping("/api/public/auth")') ? 'correcto' : 'incorrecto');

        $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
        $verificar_3 = ($respuesta_3 === '') ? '' : (($respuesta_3 === 'public class AuthController') ? 'correcto' : 'incorrecto');

        $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
        $verificar_4 = ($respuesta_4 === '') ? '' : (($respuesta_4 === '@Autowired') ? 'correcto' : 'incorrecto');

        $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
        $verificar_5 = ($respuesta_5 === '') ? '' : (($respuesta_5 === 'private IAuthService authService;') ? 'correcto' : 'incorrecto');

        $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
        $verificar_6 = ($respuesta_6 === '') ? '' : (($respuesta_6 === '@PostMapping("/login")') ? 'correcto' : 'incorrecto');

        $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
        $verificar_7 = ($respuesta_7 === '') ? '' : (($respuesta_7 === 'public ResponseEntity<?> login(@RequestBody LoginRequest request)') ? 'correcto' : 'incorrecto');

        $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
        $verificar_8 = ($respuesta_8 === '') ? '' : (($respuesta_8 === 'try') ? 'correcto' : 'incorrecto');

        $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
        $verificar_9 = ($respuesta_9 === '') ? '' : (($respuesta_9 === 'TokenResponse token = authService.login(request);') ? 'correcto' : 'incorrecto');

        $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
        $verificar_10 = ($respuesta_10 === '') ? '' : (($respuesta_10 === 'return ResponseEntity.ok(token);') ? 'correcto' : 'incorrecto');

        $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
        $verificar_11 = ($respuesta_11 === '') ? '' : (($respuesta_11 === 'catch (Exception e)') ? 'correcto' : 'incorrecto');

        $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
        $verificar_12 = ($respuesta_12 === '') ? '' : (($respuesta_12 === 'return ResponseEntity.status(401).body(e.getMessage());') ? 'correcto' : 'incorrecto');

        // --- LoginRequestDTO ---
        $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
        $verificar_13 = ($respuesta_13 === '') ? '' : (($respuesta_13 === 'public class LoginRequest') ? 'correcto' : 'incorrecto');

        $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
        $verificar_14 = ($respuesta_14 === '') ? '' : (($respuesta_14 === 'private String username;') ? 'correcto' : 'incorrecto');

        $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
        $verificar_15 = ($respuesta_15 === '') ? '' : (($respuesta_15 === 'private String password;') ? 'correcto' : 'incorrecto');

        // --- TokenResponseDTO ---
        $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
        $verificar_16 = ($respuesta_16 === '') ? '' : (($respuesta_16 === 'public class TokenResponse') ? 'correcto' : 'incorrecto');

        $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
        $verificar_17 = ($respuesta_17 === '') ? '' : (($respuesta_17 === 'String accessToken;') ? 'correcto' : 'incorrecto');

        // --- IAuthService ---
        $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
        $verificar_18 = ($respuesta_18 === '') ? '' : (($respuesta_18 === 'public interface IAuthService') ? 'correcto' : 'incorrecto');

        $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
        $verificar_19 = ($respuesta_19 === '') ? '' : (($respuesta_19 === 'TokenResponse login(LoginRequest request);') ? 'correcto' : 'incorrecto');

        // --- AuthServiceImpl ---
        $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
        $verificar_20 = ($respuesta_20 === '') ? '' : (($respuesta_20 === '@Service') ? 'correcto' : 'incorrecto');

        $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
        $verificar_21 = ($respuesta_21 === '') ? '' : (($respuesta_21 === '@RequiredArgsConstructor') ? 'correcto' : 'incorrecto');

        $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
        $verificar_22 = ($respuesta_22 === '') ? '' : (($respuesta_22 === 'public class AuthServiceImpl implements IAuthService') ? 'correcto' : 'incorrecto');

        $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
        $verificar_23 = ($respuesta_23 === '') ? '' : (($respuesta_23 === 'private final JwtService jwtService;') ? 'correcto' : 'incorrecto');

        $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
        $verificar_24 = ($respuesta_24 === '') ? '' : (($respuesta_24 === 'private final UserDetailsService userDetailsService;') ? 'correcto' : 'incorrecto');

        $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
        $verificar_25 = ($respuesta_25 === '') ? '' : (($respuesta_25 === 'private final PasswordEncoder passwordEncoder;') ? 'correcto' : 'incorrecto');

        $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
        $verificar_26 = ($respuesta_26 === '') ? '' : (($respuesta_26 === '@Override') ? 'correcto' : 'incorrecto');

        $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
        $verificar_27 = ($respuesta_27 === '') ? '' : (($respuesta_27 === 'public TokenResponse login(LoginRequest request)') ? 'correcto' : 'incorrecto');

        $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
        $verificar_28 = ($respuesta_28 === '') ? '' : (($respuesta_28 === 'UserDetails userDetails = userDetailsService.loadUserByUsername(request.getUsername());') ? 'correcto' : 'incorrecto');

        $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
        $verificar_29 = ($respuesta_29 === '') ? '' : (($respuesta_29 === 'if (userDetails == null)') ? 'correcto' : 'incorrecto');

        $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
        $verificar_30 = ($respuesta_30 === '') ? '' : (($respuesta_30 === 'throw new RuntimeException("Usuario no encontrado");') ? 'correcto' : 'incorrecto');

        $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
        $verificar_31 = ($respuesta_31 === '') ? '' : (($respuesta_31 === 'if (!passwordEncoder.matches(request.getPassword(), userDetails.getPassword()))') ? 'correcto' : 'incorrecto');

        $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
        $verificar_32 = ($respuesta_32 === '') ? '' : (($respuesta_32 === 'throw new RuntimeException("Contraseña incorrecta");') ? 'correcto' : 'incorrecto');

        $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
        $verificar_33 = ($respuesta_33 === '') ? '' : (($respuesta_33 === 'CustomUserDetails customUD = (CustomUserDetails) userDetails;') ? 'correcto' : 'incorrecto');

        $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
        $verificar_34 = ($respuesta_34 === '') ? '' : (($respuesta_34 === 'User user = customUD.getUser();') ? 'correcto' : 'incorrecto');

        $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
        $verificar_35 = ($respuesta_35 === '') ? '' : (($respuesta_35 === 'Authentication auth = new UsernamePasswordAuthenticationToken(userDetails, "", userDetails.getAuthorities());') ? 'correcto' : 'incorrecto');

        $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
        $verificar_36 = ($respuesta_36 === '') ? '' : (($respuesta_36 === 'String token = jwtService.generateToken(user, auth);') ? 'correcto' : 'incorrecto');

        $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
        $verificar_37 = ($respuesta_37 === '') ? '' : (($respuesta_37 === 'return new TokenResponse(token);') ? 'correcto' : 'incorrecto');
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
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 370vh;
    }

</style>
 
    <script>
    function handleSubmit(event) {
        event.preventDefault();
        const formData = new FormData(event.target);
        fetch(event.target.action, { method: 'POST', body: formData })
            .then(r => r.text())
            .then(html => { document.body.innerHTML = html; });
    }

    function badge(val) {
        if (val === 'correcto') return '<span class="correcto-badge">✔</span>';
        if (val === 'incorrecto') return '<span class="incorrecto-badge">✘</span>';
        return '';
    }
    </script>

    <style>
        /* Override PHP echo output styling */
        .correcto { color: #a6e3a1; font-weight: bold; }
        .correcto::before { content: "✔ "; }
        .incorrecto { color: #f38ba8; font-weight: bold; }
        .incorrecto::before { content: "✘ "; }
    </style>

    <?php
    // Helper to wrap verificar output with span
    function badge($val) {
        if ($val === 'correcto') return '<span style="color:#a6e3a1;font-weight:bold;">✔</span> ';
        if ($val === 'incorrecto') return '<span style="color:#f38ba8;font-weight:bold;">✘</span> ';
        return '';
    }
    ?>
</head>
<body>

 

<form action="./septimo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
<div class="form-container">

    
<div class="seccion izquierda"> 
<h1>Spring Security JWT — AuthController &amp; AuthService</h1>
<p class="subtitulo">Completa los espacios en blanco con el código correcto</p>
    <h2>AuthController</h2>
    <pre>
<input type="text" name="respuesta_1" value="<?php echo htmlspecialchars($respuesta_1); ?>" size="18">
<input type="text" name="respuesta_2" value="<?php echo htmlspecialchars($respuesta_2); ?>" size="38">
<input type="text" name="respuesta_3" value="<?php echo htmlspecialchars($respuesta_3); ?>" size="28"> {

    <input type="text" name="respuesta_4" value="<?php echo htmlspecialchars($respuesta_4); ?>" size="12">
    <input type="text" name="respuesta_5" value="<?php echo htmlspecialchars($respuesta_5); ?>" size="36">

    <input type="text" name="respuesta_6" value="<?php echo htmlspecialchars($respuesta_6); ?>" size="22">
    <input type="text" name="respuesta_7" value="<?php echo htmlspecialchars($respuesta_7); ?>" size="68"> {
        <input type="text" name="respuesta_8" value="<?php echo htmlspecialchars($respuesta_8); ?>" size="6"> {
            <input type="text" name="respuesta_9" value="<?php echo htmlspecialchars($respuesta_9); ?>" size="58">
            <input type="text" name="respuesta_10" value="<?php echo htmlspecialchars($respuesta_10); ?>" size="38">
        } <input type="text" name="respuesta_11" value="<?php echo htmlspecialchars($respuesta_11); ?>" size="18"> {
            <input type="text" name="respuesta_12" value="<?php echo htmlspecialchars($respuesta_12); ?>" size="58">
        }
    }
}</pre>

    <button type="submit">Verificar</button>
    <div class="verificaciones">
        <?php for ($i=1; $i<=12; $i++) echo badge(${"verificar_$i"}); ?>
    </div>

    <hr>

    <h2>LoginRequestDTO</h2>
    <pre>
<input type="text" name="respuesta_13" value="<?php echo htmlspecialchars($respuesta_13); ?>" size="28"> {
    <input type="text" name="respuesta_14" value="<?php echo htmlspecialchars($respuesta_14); ?>" size="28">
    <input type="text" name="respuesta_15" value="<?php echo htmlspecialchars($respuesta_15); ?>" size="26">
}</pre>

    <button type="submit">Verificar</button>
    <div class="verificaciones">
        <?php for ($i=13; $i<=15; $i++) echo badge(${"verificar_$i"}); ?>
    </div>

    <hr>

    <h2>TokenResponseDTO</h2>
    <pre>
<input type="text" name="respuesta_16" value="<?php echo htmlspecialchars($respuesta_16); ?>" size="28"> {
    <input type="text" name="respuesta_17" value="<?php echo htmlspecialchars($respuesta_17); ?>" size="22">
}</pre>

    <button type="submit">Verificar</button>
    <div class="verificaciones">
        <?php for ($i=16; $i<=17; $i++) echo badge(${"verificar_$i"}); ?>
    </div>

    <hr>

    <h2>IAuthService</h2>
    <pre>
<input type="text" name="respuesta_18" value="<?php echo htmlspecialchars($respuesta_18); ?>" size="28"> {
    <input type="text" name="respuesta_19" value="<?php echo htmlspecialchars($respuesta_19); ?>" size="48">
}</pre>

    <button type="submit">Verificar</button>
    <div class="verificaciones">
        <?php for ($i=18; $i<=19; $i++) echo badge(${"verificar_$i"}); ?>
    </div>

</div>

<!-- ===== COLUMNA DERECHA ===== -->
<div class="seccion derecha">


    <h2>AuthServiceImpl</h2>
    <pre>
<input type="text" name="respuesta_20" value="<?php echo htmlspecialchars($respuesta_20); ?>" size="10">
<input type="text" name="respuesta_21" value="<?php echo htmlspecialchars($respuesta_21); ?>" size="24">
<input type="text" name="respuesta_22" value="<?php echo htmlspecialchars($respuesta_22); ?>" size="52"> {

    <input type="text" name="respuesta_23" value="<?php echo htmlspecialchars($respuesta_23); ?>" size="36">
    <input type="text" name="respuesta_24" value="<?php echo htmlspecialchars($respuesta_24); ?>" size="52">
    <input type="text" name="respuesta_25" value="<?php echo htmlspecialchars($respuesta_25); ?>" size="45">

    <input type="text" name="respuesta_26" value="<?php echo htmlspecialchars($respuesta_26); ?>" size="12">
    <input type="text" name="respuesta_27" value="<?php echo htmlspecialchars($respuesta_27); ?>" size="52"> {

        <input type="text" name="respuesta_28" value="<?php echo htmlspecialchars($respuesta_28); ?>" size="90">

        <input type="text" name="respuesta_29" value="<?php echo htmlspecialchars($respuesta_29); ?>" size="26"> {
            <input type="text" name="respuesta_30" value="<?php echo htmlspecialchars($respuesta_30); ?>" size="55">
        }

        <input type="text" name="respuesta_31" value="<?php echo htmlspecialchars($respuesta_31); ?>" size="80"> {
            <input type="text" name="respuesta_32" value="<?php echo htmlspecialchars($respuesta_32); ?>" size="52">
        }

        <input type="text" name="respuesta_33" value="<?php echo htmlspecialchars($respuesta_33); ?>" size="62">
        <input type="text" name="respuesta_34" value="<?php echo htmlspecialchars($respuesta_34); ?>" size="34">

        <input type="text" name="respuesta_35" value="<?php echo htmlspecialchars($respuesta_35); ?>" size="108">

        <input type="text" name="respuesta_36" value="<?php echo htmlspecialchars($respuesta_36); ?>" size="52">
        <input type="text" name="respuesta_37" value="<?php echo htmlspecialchars($respuesta_37); ?>" size="34">
    }
}</pre>

    <button type="submit">Verificar</button>
    <div class="verificaciones">
        <?php for ($i=20; $i<=37; $i++) echo badge(${"verificar_$i"}); ?>
    </div>

    <hr>

    <div class="solucion-area">
        <label><strong>¿Desea ver las soluciones?</strong> Escriba: <em>mostrar_solucion</em></label>
        <input type="text" id="mostrar_solucion" name="mostrar_solucion" value="<?php echo htmlspecialchars($mostrar_solucion); ?>">
        <button type="submit" style="margin-left:8px;">Mostrar Solución</button>
    </div>

</div>
</div>
</form>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="octavo.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>