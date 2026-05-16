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

        $respuesta_1  = '@RestController';
        $respuesta_2  = '@RequestMapping("/rest/games")';
        $respuesta_3  = '@RequiredArgsConstructor';
        $respuesta_4  = 'public class GameRestController';
        $respuesta_5  = 'private final GameService gameService;';
        $respuesta_6  = 'private final IGameMapper gameMapper;';

        // getAllGames
        $respuesta_7  = '@GetMapping';
        $respuesta_8  = 'public ResponseEntity<List<GameResponse>> getAllGames()';
        $respuesta_9  = 'List<GameResponse> response = gameMapper.gamesToGameResponses(gameService.findAll());';
        $respuesta_10 = 'return ResponseEntity.status(HttpStatus.OK).body(response);';

        // getGameById
        $respuesta_11 = '@GetMapping("/{id}")';
        $respuesta_12 = 'public ResponseEntity<GameResponse> getGameById(@PathVariable Long id)';
        $respuesta_13 = 'Game game = gameService.findById(id);';
        $respuesta_14 = 'return ResponseEntity.status(HttpStatus.OK).body(gameMapper.gameToGameResponse(game));';

        // getGamesByUser
        $respuesta_15 = '@GetMapping("/user/{userId}")';
        $respuesta_16 = 'public ResponseEntity<List<GameResponse>> getGamesByUser(@PathVariable Long userId)';
        $respuesta_17 = 'List<GameResponse> response = gameMapper.gamesToGameResponses(gameService.findByUserId(userId));';
        $respuesta_18 = 'return ResponseEntity.status(HttpStatus.OK).body(response);';

        // createGame
        $respuesta_19 = '@PostMapping';
        $respuesta_20 = 'public ResponseEntity<GameResponse> createGame(@RequestBody GameRequest request)';
        $respuesta_21 = 'Game game = gameMapper.gameRequestToGame(request);';
        $respuesta_22 = 'Game created = gameService.save(game, request.getUserId());';
        $respuesta_23 = 'return ResponseEntity.status(HttpStatus.CREATED).body(gameMapper.gameToGameResponse(created));';

        // updateGame
        $respuesta_24 = '@PutMapping("/{id}")';
        $respuesta_25 = 'public ResponseEntity<GameResponse> updateGame(@PathVariable Long id, @RequestBody GameRequest request)';
        $respuesta_26 = 'Game game = gameMapper.gameRequestToGame(request);';
        $respuesta_27 = 'Game updated = gameService.update(id, game, request.getUserId());';
        $respuesta_28 = 'return ResponseEntity.status(HttpStatus.OK).body(gameMapper.gameToGameResponse(updated));';

        // deleteGame
        $respuesta_29 = '@DeleteMapping("/{id}")';
        $respuesta_30 = 'public ResponseEntity<Void> deleteGame(@PathVariable Long id)';
        $respuesta_31 = 'gameService.deleteById(id);';
        $respuesta_32 = 'return ResponseEntity.status(HttpStatus.NO_CONTENT).build();';

        for ($i = 1; $i <= 32; $i++) {
            ${"verificar_$i"} = "correcto";
        }

    } else {

        $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
        $verificar_1 = ($respuesta_1 === '') ? '' : (($respuesta_1 === '@RestController') ? 'correcto' : 'incorrecto');

        $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
        $verificar_2 = ($respuesta_2 === '') ? '' : (($respuesta_2 === '@RequestMapping("/rest/games")') ? 'correcto' : 'incorrecto');

        $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
        $verificar_3 = ($respuesta_3 === '') ? '' : (($respuesta_3 === '@RequiredArgsConstructor') ? 'correcto' : 'incorrecto');

        $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
        $verificar_4 = ($respuesta_4 === '') ? '' : (($respuesta_4 === 'public class GameRestController') ? 'correcto' : 'incorrecto');

        $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
        $verificar_5 = ($respuesta_5 === '') ? '' : (($respuesta_5 === 'private final GameService gameService;') ? 'correcto' : 'incorrecto');

        $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
        $verificar_6 = ($respuesta_6 === '') ? '' : (($respuesta_6 === 'private final IGameMapper gameMapper;') ? 'correcto' : 'incorrecto');

        // getAllGames
        $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
        $verificar_7 = ($respuesta_7 === '') ? '' : (($respuesta_7 === '@GetMapping') ? 'correcto' : 'incorrecto');

        $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
        $verificar_8 = ($respuesta_8 === '') ? '' : (($respuesta_8 === 'public ResponseEntity<List<GameResponse>> getAllGames()') ? 'correcto' : 'incorrecto');

        $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
        $verificar_9 = ($respuesta_9 === '') ? '' : (($respuesta_9 === 'List<GameResponse> response = gameMapper.gamesToGameResponses(gameService.findAll());') ? 'correcto' : 'incorrecto');

        $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
        $verificar_10 = ($respuesta_10 === '') ? '' : (($respuesta_10 === 'return ResponseEntity.status(HttpStatus.OK).body(response);') ? 'correcto' : 'incorrecto');

        // getGameById
        $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
        $verificar_11 = ($respuesta_11 === '') ? '' : (($respuesta_11 === '@GetMapping("/{id}")') ? 'correcto' : 'incorrecto');

        $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
        $verificar_12 = ($respuesta_12 === '') ? '' : (($respuesta_12 === 'public ResponseEntity<GameResponse> getGameById(@PathVariable Long id)') ? 'correcto' : 'incorrecto');

        $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
        $verificar_13 = ($respuesta_13 === '') ? '' : (($respuesta_13 === 'Game game = gameService.findById(id);') ? 'correcto' : 'incorrecto');

        $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
        $verificar_14 = ($respuesta_14 === '') ? '' : (($respuesta_14 === 'return ResponseEntity.status(HttpStatus.OK).body(gameMapper.gameToGameResponse(game));') ? 'correcto' : 'incorrecto');

        // getGamesByUser
        $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
        $verificar_15 = ($respuesta_15 === '') ? '' : (($respuesta_15 === '@GetMapping("/user/{userId}")') ? 'correcto' : 'incorrecto');

        $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
        $verificar_16 = ($respuesta_16 === '') ? '' : (($respuesta_16 === 'public ResponseEntity<List<GameResponse>> getGamesByUser(@PathVariable Long userId)') ? 'correcto' : 'incorrecto');

        $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
        $verificar_17 = ($respuesta_17 === '') ? '' : (($respuesta_17 === 'List<GameResponse> response = gameMapper.gamesToGameResponses(gameService.findByUserId(userId));') ? 'correcto' : 'incorrecto');

        $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
        $verificar_18 = ($respuesta_18 === '') ? '' : (($respuesta_18 === 'return ResponseEntity.status(HttpStatus.OK).body(response);') ? 'correcto' : 'incorrecto');

        // createGame
        $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
        $verificar_19 = ($respuesta_19 === '') ? '' : (($respuesta_19 === '@PostMapping') ? 'correcto' : 'incorrecto');

        $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
        $verificar_20 = ($respuesta_20 === '') ? '' : (($respuesta_20 === 'public ResponseEntity<GameResponse> createGame(@RequestBody GameRequest request)') ? 'correcto' : 'incorrecto');

        $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
        $verificar_21 = ($respuesta_21 === '') ? '' : (($respuesta_21 === 'Game game = gameMapper.gameRequestToGame(request);') ? 'correcto' : 'incorrecto');

        $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
        $verificar_22 = ($respuesta_22 === '') ? '' : (($respuesta_22 === 'Game created = gameService.save(game, request.getUserId());') ? 'correcto' : 'incorrecto');

        $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
        $verificar_23 = ($respuesta_23 === '') ? '' : (($respuesta_23 === 'return ResponseEntity.status(HttpStatus.CREATED).body(gameMapper.gameToGameResponse(created));') ? 'correcto' : 'incorrecto');

        // updateGame
        $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
        $verificar_24 = ($respuesta_24 === '') ? '' : (($respuesta_24 === '@PutMapping("/{id}")') ? 'correcto' : 'incorrecto');

        $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
        $verificar_25 = ($respuesta_25 === '') ? '' : (($respuesta_25 === 'public ResponseEntity<GameResponse> updateGame(@PathVariable Long id, @RequestBody GameRequest request)') ? 'correcto' : 'incorrecto');

        $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
        $verificar_26 = ($respuesta_26 === '') ? '' : (($respuesta_26 === 'Game game = gameMapper.gameRequestToGame(request);') ? 'correcto' : 'incorrecto');

        $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
        $verificar_27 = ($respuesta_27 === '') ? '' : (($respuesta_27 === 'Game updated = gameService.update(id, game, request.getUserId());') ? 'correcto' : 'incorrecto');

        $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
        $verificar_28 = ($respuesta_28 === '') ? '' : (($respuesta_28 === 'return ResponseEntity.status(HttpStatus.OK).body(gameMapper.gameToGameResponse(updated));') ? 'correcto' : 'incorrecto');

        // deleteGame
        $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
        $verificar_29 = ($respuesta_29 === '') ? '' : (($respuesta_29 === '@DeleteMapping("/{id}")') ? 'correcto' : 'incorrecto');

        $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
        $verificar_30 = ($respuesta_30 === '') ? '' : (($respuesta_30 === 'public ResponseEntity<Void> deleteGame(@PathVariable Long id)') ? 'correcto' : 'incorrecto');

        $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
        $verificar_31 = ($respuesta_31 === '') ? '' : (($respuesta_31 === 'gameService.deleteById(id);') ? 'correcto' : 'incorrecto');

        $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
        $verificar_32 = ($respuesta_32 === '') ? '' : (($respuesta_32 === 'return ResponseEntity.status(HttpStatus.NO_CONTENT).build();') ? 'correcto' : 'incorrecto');
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio: GameRestController</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style_2_0.css">


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

        // Asegúrate de que MathJax procese el nuevo contenido
        if (window.MathJax) {
            MathJax.typeset();
        }
        actualizarFormula();
        actualizarFormula2();
        actualizarFormula3();
        actualizarFormula4();
        actualizarFormula5();
        actualizarFormula6();
        actualizarFormula7();
        actualizarFormula8();
        actualizarFormula9();
        actualizarFormula10();
        actualizarFormula11();
        actualizarFormula12();
        actualizarFormula13();
        actualizarFormula14();
        actualizarFormula15();
        actualizarFormula16();
        actualizarFormula17();
        actualizarFormula18();
        actualizarFormula19();
        actualizarFormula20();
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}
    </script>
</head>
<body>

<form action="./noveno.php" onsubmit="handleSubmit(event)" method="POST" autocomplete="off">
<div class="form-container">
<div class="seccion izquierda">

<pre>
<input type="text" name="respuesta_1" value="<?php echo htmlspecialchars($respuesta_1 ?? '', ENT_QUOTES); ?>" size="18">
<input type="text" name="respuesta_2" value="<?php echo htmlspecialchars($respuesta_2 ?? '', ENT_QUOTES); ?>" size="31">
<input type="text" name="respuesta_3" value="<?php echo htmlspecialchars($respuesta_3 ?? '', ENT_QUOTES); ?>" size="24">
<input type="text" name="respuesta_4" value="<?php echo htmlspecialchars($respuesta_4 ?? '', ENT_QUOTES); ?>" size="31"> {
    <input type="text" name="respuesta_5" value="<?php echo htmlspecialchars($respuesta_5 ?? '', ENT_QUOTES); ?>" size="38">
    <input type="text" name="respuesta_6" value="<?php echo htmlspecialchars($respuesta_6 ?? '', ENT_QUOTES); ?>" size="36">

    <input type="text" name="respuesta_7" value="<?php echo htmlspecialchars($respuesta_7 ?? '', ENT_QUOTES); ?>" size="12">
    <input type="text" name="respuesta_8" value="<?php echo htmlspecialchars($respuesta_8 ?? '', ENT_QUOTES); ?>" size="58"> {
        <input type="text" name="respuesta_9" value="<?php echo htmlspecialchars($respuesta_9 ?? '', ENT_QUOTES); ?>" size="88">
        <input type="text" name="respuesta_10" value="<?php echo htmlspecialchars($respuesta_10 ?? '', ENT_QUOTES); ?>" size="58">
    }

    <input type="text" name="respuesta_11" value="<?php echo htmlspecialchars($respuesta_11 ?? '', ENT_QUOTES); ?>" size="22">
    <input type="text" name="respuesta_12" value="<?php echo htmlspecialchars($respuesta_12 ?? '', ENT_QUOTES); ?>" size="71"> {
        <input type="text" name="respuesta_13" value="<?php echo htmlspecialchars($respuesta_13 ?? '', ENT_QUOTES); ?>" size="40">
        <input type="text" name="respuesta_14" value="<?php echo htmlspecialchars($respuesta_14 ?? '', ENT_QUOTES); ?>" size="88">
    }

    <input type="text" name="respuesta_15" value="<?php echo htmlspecialchars($respuesta_15 ?? '', ENT_QUOTES); ?>" size="28">
    <input type="text" name="respuesta_16" value="<?php echo htmlspecialchars($respuesta_16 ?? '', ENT_QUOTES); ?>" size="85"> {
        <input type="text" name="respuesta_17" value="<?php echo htmlspecialchars($respuesta_17 ?? '', ENT_QUOTES); ?>" size="98">
        <input type="text" name="respuesta_18" value="<?php echo htmlspecialchars($respuesta_18 ?? '', ENT_QUOTES); ?>" size="58">
    }
</pre>
<button type="submit">Enviar</button>
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
<?php echo $verificar_12 ?>
<?php echo $verificar_13 ?>
<?php echo $verificar_14 ?>
<?php echo $verificar_15 ?>
<?php echo $verificar_16 ?>
<?php echo $verificar_17 ?>
<?php echo $verificar_18 ?>

<pre>
    <input type="text" name="respuesta_19" value="<?php echo htmlspecialchars($respuesta_19 ?? '', ENT_QUOTES); ?>" size="14">
    <input type="text" name="respuesta_20" value="<?php echo htmlspecialchars($respuesta_20 ?? '', ENT_QUOTES); ?>" size="78"> {
        <input type="text" name="respuesta_21" value="<?php echo htmlspecialchars($respuesta_21 ?? '', ENT_QUOTES); ?>" size="52">
        <input type="text" name="respuesta_22" value="<?php echo htmlspecialchars($respuesta_22 ?? '', ENT_QUOTES); ?>" size="60">
        <input type="text" name="respuesta_23" value="<?php echo htmlspecialchars($respuesta_23 ?? '', ENT_QUOTES); ?>" size="98">
    }

    <input type="text" name="respuesta_24" value="<?php echo htmlspecialchars($respuesta_24 ?? '', ENT_QUOTES); ?>" size="18">
    <input type="text" name="respuesta_25" value="<?php echo htmlspecialchars($respuesta_25 ?? '', ENT_QUOTES); ?>" size="108"> {
        <input type="text" name="respuesta_26" value="<?php echo htmlspecialchars($respuesta_26 ?? '', ENT_QUOTES); ?>" size="52">
        <input type="text" name="respuesta_27" value="<?php echo htmlspecialchars($respuesta_27 ?? '', ENT_QUOTES); ?>" size="66">
        <input type="text" name="respuesta_28" value="<?php echo htmlspecialchars($respuesta_28 ?? '', ENT_QUOTES); ?>" size="96">
    }

    <input type="text" name="respuesta_29" value="<?php echo htmlspecialchars($respuesta_29 ?? '', ENT_QUOTES); ?>" size="18">
    <input type="text" name="respuesta_30" value="<?php echo htmlspecialchars($respuesta_30 ?? '', ENT_QUOTES); ?>" size="65"> {
        <input type="text" name="respuesta_31" value="<?php echo htmlspecialchars($respuesta_31 ?? '', ENT_QUOTES); ?>" size="30">
        <input type="text" name="respuesta_32" value="<?php echo htmlspecialchars($respuesta_32 ?? '', ENT_QUOTES); ?>" size="48">
    }
}
</pre>

<button type="submit">Enviar</button>
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
<?php echo $verificar_31 ?>
<?php echo $verificar_32 ?>

</div>
<div class="seccion derecha">
 

<hr>
<strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
<br>
<input type="text" id="mostrar_solucion" name="mostrar_solucion" value="<?php echo $mostrar_solucion ?>">
<button type="submit">Mostrar Solución</button>

</div>
</div>
</form>

</body>
</html>