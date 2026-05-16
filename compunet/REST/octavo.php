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

        $respuesta_1  = '@Mapper(componentModel = "spring", uses = { IUserMapper.class })';
        $respuesta_2  = 'public interface IGameMapper';
        $respuesta_3  = '@Mappings({';
        $respuesta_4  = '@Mapping(target = "id", ignore = true),';
        $respuesta_5  = '@Mapping(target = "user", ignore = true),';
        $respuesta_6  = '@Mapping(target = "comments", ignore = true)';
        $respuesta_7  = 'Game gameRequestToGame(GameRequest request);';
        $respuesta_8  = '@Mappings({';
        $respuesta_9  = '@Mapping(source = "user.id", target = "userId"),';
        $respuesta_10 = '@Mapping(source = "user.username", target = "username")';
        $respuesta_11 = 'GameResponse gameToGameResponse(Game game);';
        $respuesta_12 = 'List<GameResponse> gamesToGameResponses(List<Game> games);';
        $respuesta_13 = '@Named("gameToName")';
        $respuesta_14 = 'default String gameToName(Game game)';
        $respuesta_15 = 'return game != null ? game.getName() : null;';

        for ($i = 1; $i <= 15; $i++) {
            ${"verificar_$i"} = "correcto";
        }

    } else {

        $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
        $verificar_1 = ($respuesta_1 === '') ? '' : (($respuesta_1 === '@Mapper(componentModel = "spring", uses = { IUserMapper.class })') ? 'correcto' : 'incorrecto');

        $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
        $verificar_2 = ($respuesta_2 === '') ? '' : (($respuesta_2 === 'public interface IGameMapper') ? 'correcto' : 'incorrecto');

        $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
        $verificar_3 = ($respuesta_3 === '') ? '' : (($respuesta_3 === '@Mappings({') ? 'correcto' : 'incorrecto');

        $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
        $verificar_4 = ($respuesta_4 === '') ? '' : (($respuesta_4 === '@Mapping(target = "id", ignore = true),') ? 'correcto' : 'incorrecto');

        $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
        $verificar_5 = ($respuesta_5 === '') ? '' : (($respuesta_5 === '@Mapping(target = "user", ignore = true),') ? 'correcto' : 'incorrecto');

        $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
        $verificar_6 = ($respuesta_6 === '') ? '' : (($respuesta_6 === '@Mapping(target = "comments", ignore = true)') ? 'correcto' : 'incorrecto');

        $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
        $verificar_7 = ($respuesta_7 === '') ? '' : (($respuesta_7 === 'Game gameRequestToGame(GameRequest request);') ? 'correcto' : 'incorrecto');

        $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
        $verificar_8 = ($respuesta_8 === '') ? '' : (($respuesta_8 === '@Mappings({') ? 'correcto' : 'incorrecto');

        $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
        $verificar_9 = ($respuesta_9 === '') ? '' : (($respuesta_9 === '@Mapping(source = "user.id", target = "userId"),') ? 'correcto' : 'incorrecto');

        $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
        $verificar_10 = ($respuesta_10 === '') ? '' : (($respuesta_10 === '@Mapping(source = "user.username", target = "username")') ? 'correcto' : 'incorrecto');

        $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
        $verificar_11 = ($respuesta_11 === '') ? '' : (($respuesta_11 === 'GameResponse gameToGameResponse(Game game);') ? 'correcto' : 'incorrecto');

        $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
        $verificar_12 = ($respuesta_12 === '') ? '' : (($respuesta_12 === 'List<GameResponse> gamesToGameResponses(List<Game> games);') ? 'correcto' : 'incorrecto');

        $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
        $verificar_13 = ($respuesta_13 === '') ? '' : (($respuesta_13 === '@Named("gameToName")') ? 'correcto' : 'incorrecto');

        $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
        $verificar_14 = ($respuesta_14 === '') ? '' : (($respuesta_14 === 'default String gameToName(Game game)') ? 'correcto' : 'incorrecto');

        $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
        $verificar_15 = ($respuesta_15 === '') ? '' : (($respuesta_15 === 'return game != null ? game.getName() : null;') ? 'correcto' : 'incorrecto');
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio: IGameMapper</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style_2_0.css">
</head>
<body>

<form action="./octavo.php" method="POST" autocomplete="off">
<div class="form-container">

<div class="seccion izquierda">

<pre>
<input type="text" name="respuesta_1" value="<?php echo htmlspecialchars($respuesta_1 ?? '', ENT_QUOTES); ?>" size="71">
<input type="text" name="respuesta_2" value="<?php echo htmlspecialchars($respuesta_2 ?? '', ENT_QUOTES); ?>" size="28"> {

    <input type="text" name="respuesta_3" value="<?php echo htmlspecialchars($respuesta_3 ?? '', ENT_QUOTES); ?>" size="12">
            <input type="text" name="respuesta_4" value="<?php echo htmlspecialchars($respuesta_4 ?? '', ENT_QUOTES); ?>" size="42">
            <input type="text" name="respuesta_5" value="<?php echo htmlspecialchars($respuesta_5 ?? '', ENT_QUOTES); ?>" size="44">
            <input type="text" name="respuesta_6" value="<?php echo htmlspecialchars($respuesta_6 ?? '', ENT_QUOTES); ?>" size="42">
    })
    <input type="text" name="respuesta_7" value="<?php echo htmlspecialchars($respuesta_7 ?? '', ENT_QUOTES); ?>" size="45">

    <input type="text" name="respuesta_8" value="<?php echo htmlspecialchars($respuesta_8 ?? '', ENT_QUOTES); ?>" size="12">
            <input type="text" name="respuesta_9" value="<?php echo htmlspecialchars($respuesta_9 ?? '', ENT_QUOTES); ?>" size="52">
            <input type="text" name="respuesta_10" value="<?php echo htmlspecialchars($respuesta_10 ?? '', ENT_QUOTES); ?>" size="52">
    })
    <input type="text" name="respuesta_11" value="<?php echo htmlspecialchars($respuesta_11 ?? '', ENT_QUOTES); ?>" size="46">

    <input type="text" name="respuesta_12" value="<?php echo htmlspecialchars($respuesta_12 ?? '', ENT_QUOTES); ?>" size="58">

    <input type="text" name="respuesta_13" value="<?php echo htmlspecialchars($respuesta_13 ?? '', ENT_QUOTES); ?>" size="18">
    <input type="text" name="respuesta_14" value="<?php echo htmlspecialchars($respuesta_14 ?? '', ENT_QUOTES); ?>" size="38"> {
        <input type="text" name="respuesta_15" value="<?php echo htmlspecialchars($respuesta_15 ?? '', ENT_QUOTES); ?>" size="46">
    }
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

<hr>
<strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
<br>
<input type="text" id="mostrar_solucion" name="mostrar_solucion" value="<?php echo $mostrar_solucion ?>">
<button type="submit">Mostrar Solución</button>

</div>


<div class="seccion derecha">


</div>
</div>
</form>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="noveno.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>