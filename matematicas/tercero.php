<?php
$dibujo1='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check-lg" viewBox="0 0 16 16">
<path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022"/>
</svg>';

$cencal='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-x-lg" viewBox="0 0 16 16">
<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
</svg>';

$dibujo='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gold" class="bi bi-trophy" viewBox="0 0 16 16">
<path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
</svg>';
$contador = 0;

$agora = "";
$v_agora = "";
$agora2 = "";
$v_agora2 = "";
$agora3 = "";
$v_agora3 = "";



                $mujer41= isset($_POST['mujer40'])?$_POST['mujer40']:'';
                if($mujer41 === 'xy(x<sup>2</sup>-4)'){
                    $mujer42 = 'correcto';
                }elseif($mujer41 === ''){
                    $mujer42 = '';
                }else{
                    $mujer42 = 'incorrecto';
                } 


                $agora = isset($_POST['agora'])?$_POST['agora']:'';

                if($agora === '3x^2-2x-5'){
                    $v_agora= "correcto";
                     
                }  elseif ($agora === '') {
                    $v_agora = '';
                } else{
                    $v_agora = "incorrecto";
                }

                $agora2 = isset($_POST['agora2'])?$_POST['agora2']:'';

                if($agora2 === 'x^2+x+2'){
                    $v_agora2= "correcto";
                     
                }  elseif ($agora2 === '') {
                    $v_agora2 = '';
                } else{
                    $v_agora2 = "incorrecto";
                }


                $agora3 = isset($_POST['agora3'])?$_POST['agora3']:'';

                if($agora3 === '2x^2-4x+8'){
                    $v_agora3= "correcto";
                     
                }  elseif ($agora3 === '') {
                    $v_agora3 = '';
                } else{
                    $v_agora3 = "incorrecto";
                }




                $mujer60 = isset($_POST['mujer60'])?$_POST['mujer60']:'';

                if($mujer60 === 'x'){
                    $mujer6_1= $dibujo1;
                    $contador++;
                }elseif($mujer60 === ''){
                    $mujer6_1 = '';
                }else{
                    $mujer6_1 = $cencal;
                }
               

                $joven = isset($_POST['joven'])?$_POST['joven']:'';
                if($joven === 'suma'){
                    $joven_1 = $dibujo1;
                    $contador++;
                }elseif($joven === ''){
                    $joven_1 = '';
                }else{
                    $joven_1= $cencal;
                }
                
                $mujer61 = isset($_POST['mujer61'])?$_POST['mujer61']:'';

                if($mujer61 === '2'){
                    $mujer61_1= $dibujo1;
                    $contador++;
                }elseif($mujer61 === ''){
                    $mujer61_1 = '';
                }else{
                    $mujer61_1 = $cencal;
                }


                $mujer62 = isset($_POST['mujer62'])?$_POST['mujer62']:'';

                if($mujer62 === 'x'){
                    $mujer62_1= $dibujo1;
                    $contador++;
                }elseif($mujer62 === ''){
                    $mujer62_1 = '';
                }else{
                    $mujer62_1 = $cencal;
                }


                $joven1 = isset($_POST['joven1'])?$_POST['joven1']:'';
                if($joven1 === 'suma1'){
                    $joven1_1 = $dibujo1;
                    $contador++;
                }elseif($joven1 === ''){
                    $joven1_1 = '';
                }else{
                    $joven1_1= $cencal;
                }


                $joven2 = isset($_POST['joven2'])?$_POST['joven2']:'';
                if($joven2 === 'resta2'){
                    $joven2_1 = $dibujo1;
                    $contador++;
                }elseif($joven1 === ''){
                    $joven2_1 = '';
                }else{
                    $joven2_1= $cencal;
                }

                $joven3 = isset($_POST['joven3'])?$_POST['joven3']:'';
                if($joven3 === 'suma3'){
                    $joven3_1 = $dibujo1;
                    $contador++;
                }elseif($joven3 === ''){
                    $joven3_1 = '';
                }else{
                    $joven3_1= $cencal;
                }

                $mujer63 = isset($_POST['mujer63'])?$_POST['mujer63']:'';

                if($mujer63 === '1'){
                    $mujer63_1= $dibujo1;
                    $contador++;
                }elseif($mujer63 === ''){
                    $mujer63_1 = '';
                }else{
                    $mujer63_1 = $cencal;
                }

                $mujer66 = isset($_POST['mujer66'])?$_POST['mujer66']:'';

                if($mujer66 === 'x'){
                    $mujer66_1= $dibujo1;
                    $contador++;
                }elseif($mujer66 === ''){
                    $mujer66_1 = '';
                }else{
                    $mujer66_1 = $cencal;
                }

                $mujer67 = isset($_POST['mujer67'])?$_POST['mujer67']:'';

                if($mujer67 === '1'){
                    $mujer67_1= $dibujo1;
                    $contador++;
                }elseif($mujer67 === ''){
                    $mujer67_1 = '';
                }else{
                    $mujer67_1 = $cencal;
                }


                ///

                $mujer64 = isset($_POST['mujer64'])?$_POST['mujer64']:'';

                if($mujer64 === 'x'){
                    $mujer64_1= $dibujo1;
                    $contador++;
                }elseif($mujer64 === ''){
                    $mujer64_1 = '';
                }else{
                    $mujer64_1 = $cencal;
                }

                $mujer65 = isset($_POST['mujer65'])?$_POST['mujer65']:'';

                if($mujer65 === '2'){
                    $mujer65_1= $dibujo1;
                    $contador++;
                }elseif($mujer65 === ''){
                    $mujer65_1 = '';
                }else{
                    $mujer65_1 = $cencal;
                }

                $mentira= isset($_POST['mentira'])?$_POST['mentira']:'';
                if($mentira === '-x-1'){
                    $mala = 'correcto';
                }elseif($mentira === ''){
                    $mala = '';
                }else{
                    $mala = 'incorrecto';
                } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

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
        
        
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}
    </script>
    
</head>
<body>
        <div class="seccion izquierda">
        <form action="tercero.php" method="POST" onsubmit="handleSubmit(event)">
            <br>
            <h1>Continuacion: Factorizar</h1>
            <br>
            <hr>
            <ul>

                 
                
                
                <br><br> 
                <li class="mi-lista">Ejercicio 6:
                <br><br>
                    <img src="../img/Captura de pantalla 2024-01-28 182316.png" alt=""><br><br>
                    <input type="radio" name="mujer40" value="xy(x<sup>2</sup>-4)" id="" <?php print (isset($mujer42) && $mujer42 === 'correcto')?'checked':''; ?>> xy (x<sup>2</sup>-4)

                    <input style="margin-left: 50px;" type="radio" name="mujer40" value="xy(x<sup>2</sup>-4x)" id="">xy (x<sup>2</sup>-4x)
                    
                    <br><br>
                    <button class="btn btn-primary" type="submit">Submit</button>

                    <?php print isset($mujer42)?$mujer42:''; ?>
                </li><br><br> 


                <hr>

                <h2>Inicio -> Simplifique la siguiente expresion:</h2>

 

                



                

                <li>Ejercicio1:<br><br>
                    pista: 2 esta tanto en el 1 fator del numerador y denominador.
                    <img src="../img/Captura de pantalla 2024-01-28 203230.png" alt="">
                    <br><br>
                    <div style="border-box:flex; text-align:center; margin:0; padding:0; flex-direction:row; width:350px " >
                        (<input size=2 type="text" name="mujer60" value="<?php print isset($mujer60)?$mujer60:''; ?>" id="">

                        <!-- simplemente se selcciona la opcion que se envia, mas simple -->
                        <select name="joven" id="">
                            <option value="" selected disabled></option>
                            <option value="suma" <?php echo (isset($joven) && $joven === 'suma') ? 'selected' : ''; ?>>+</option>
                            <option value="resta" <?php echo (isset($joven) && $joven === 'resta') ? 'selected' : ''; ?>>-</option>
                        </select>
                        
                        <input size=2 type="text" name="mujer61" id="" value="<?php print isset($mujer61)?$mujer61:''; ?>">)


                        (<input size=2 type="text" name="mujer62" id="" value="<?php print isset($mujer62)?$mujer62:''; ?>">
                        <select name="joven1" id="">
                            <option value="" selected disable></option>
                            <option value="suma1" <?php echo (isset($joven1) && $joven1 === 'suma1') ? 'selected' : ''; ?>>+</option>
                            <option value="resta1" <?php echo (isset($joven1) && $joven1 === 'resta1') ? 'selected' : ''; ?>>-</option>
                        </select>
                        <input size=2 type="text" name="mujer63" id="" value="<?php print isset($mujer63)?$mujer63:''; ?>">)
                        <hr>


                        (<input size=2 type="text" name="mujer64" id="" value="<?php print isset($mujer64)?$mujer64:''; ?>">
                        <select name="joven2" id="">
                            <option value="" disable></option>
                            <option value="suma2" <?php echo (isset($joven2) && $joven2 === 'suma2') ? 'selected' : ''; ?>>+</option>
                            <option value="resta2" <?php echo (isset($joven2) && $joven2 === 'resta2') ? 'selected' : ''; ?>>-</option>
                        </select>
                        <input size=2 type="text" name="mujer65" id="" value="<?php print isset($mujer65)?$mujer65:''; ?>">)


                        (<input size=2 type="text" name="mujer66" id="" value="<?php print isset($mujer66)?$mujer66:''; ?>">
                        <select name="joven3" id="">
                            <option value="" disable></option>
                            <option value="suma3" <?php echo (isset($joven3) && $joven3 === 'suma3') ? 'selected' : ''; ?>>+</option>
                            <option value="resta3" <?php echo (isset($joven3) && $joven3 === 'resta3') ? 'selected' : ''; ?>>-</option>
                        </select>
                        <input size=2 type="text" name="mujer67" id="" value="<?php print isset($mujer67)?$mujer67:''; ?>">)

                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?php print isset($mujer6_1)?$mujer6_1:'';?>
                    <?php print isset($joven_1)?$joven_1:'';?>
                    <?php print isset($mujer61_1)?$mujer61_1:'';?>
                    <?php print isset($mujer62_1)?$mujer62_1:'';?>
                    <?php print isset($joven1_1)?$joven1_1:'';?>
                    <?php print isset($mujer63_1)?$mujer63_1:'';?>
                    <?php print isset($mujer66_1)?$mujer66_1:'';?>
                    <?php print isset($mujer67_1)?$mujer67_1:'';?>
                    <?php print isset($mujer64_1)?$mujer64_1:'';?>
                    <?php print isset($mujer65_1)?$mujer65_1:'';?>
                    <?php print isset($joven2_1)?$joven2_1:'';?>
                    <?php print isset($joven3_1)?$joven3_1:'';?>
                    <?php echo $contador === 12 ? $dibujo : ''; ?>
            </li>
            <br><br>
     
            
            <hr>
            <li> ejercicio 2: <br><br>
                <img src="../img/Captura de pantalla 2024-04-08 094258.png" alt=""> <br><br>
                <input type="radio" value="x-1" name="mentira">x-1 
                <input type="radio" value="-x-1" name="mentira" >-x-1 <br>
                <button class="btn btn-primary" type="submit" >Submit</button>
                
                <?php print isset($mala)?$mala:''; ?>
            </li>

            <hr>
            <br><br><br>
            <li>

             ejercicio3: <br><br>
            Introduzca el resultado de:
            \( \frac{3x^4-2x^3+x^2-10}{x^2+2} \) <br><br>
            <input type="text" class="text" name="agora" value="<?php echo $agora?>"> <br><br>
            <button class="btn btn-primary" type="submit" >Submit</button> <br>
            <?php echo  $v_agora ?>

            </li>
            </ul>
            
        </form>   
        </div>

        <div class="seccion derecha">
        <form action="tercero.php" method="POST" onsubmit="handleSubmit(event)">
            <br><br>
            Ejericio 4.
            Introduzca el resultado de:  
            \( \frac{x^3+x}{x-1} \) <br><br> 
            <input type="text" class="text" name="agora2" value="<?php echo $agora2?>"> <br><br>
            <button class="btn btn-primary" type="submit" >Submit</button> <br>
            <?php echo  $v_agora2 ?>
            <br>
            <hr>
            <br><br>



            Ejericio 4.
            Introduzca el resultado de:  
            \( \frac{2x^3-1}{x+2} \) <br><br> 
            <input type="text" class="text" name="agora3" value="<?php echo $agora3?>"> <br><br>
            <button class="btn btn-primary" type="submit" >Submit</button> <br>
            <?php echo  $v_agora3 ?>
            <br>
            <hr>
            <br><br>
       </form>
        </div>
  
</form>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="cuarto.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>