<?php
$primero = '';
$texto1="";
$texto2="";
$texto3="";
$texto4="";

if ($_POST) {
    
    $primero = isset($_POST['primero']) ? ($_POST['primero']) : '';
    //diferentes casillas, diferentes opciones
    $texto1= isset($_POST['segundo'])?$_POST['segundo']:"";
    $texto2= isset($_POST['segundo_1'])?$_POST['segundo_1']:"";
    $texto3= isset($_POST['segundo_1_2'])?$_POST['segundo_1_2']:"";
    $texto4= isset($_POST['segundo_1_2_3'])?$_POST['segundo_1_2_3']:"";

    // Validación del primero
    if ($primero === 'change') {
        $verificar_1 = "correcto";
    } elseif ($primero === '') {
        $verificar_1 = '';
    } else {
        $verificar_1 = "incorrecto";
    }

    $resultado1= isset($texto1)&&$texto1=="x^2"?"campo 1 correcto":"campo 1 incorrecto";
    $resultado2= isset($texto2)&&$texto2=="+"?"campo 2 correcto":"campo 2 incorrecto";
    $resultado3= isset($texto3)&&$texto3=="y^2"?"campo 3 correcto":"campo 3 incorrecto";
    $resultado4= isset($texto4)&&$texto4=="r^2"?"campo 4 correcto":"campo 4 incorrecto";

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre simplificación de expresiones matemáticas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .imagen {
            max-width: 100%;
            height: auto;
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
<div class="seccion izquierda">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)">
        <span class="titulo_1"><h2>Pregunta 1:</h2></span>
        <br><br>
        ¿Qué métodos puedo usar para encontrar una raíz de una ecuación
        f(x)=0 si quiero elegir entre uno rápido y otro siempre confiable? <span id="pregunta1"><?php  isset($primero) && $primero !== '' ? $primero : '__________'; ?></span> <br><br>
        <input style="margin:10px;" value="change" type="radio" name="primero" id="primero1" <?php  isset($primero) && ($primero === 'change') ? 'checked' : ''; ?>>Método de Bisección y Método de Newton
        <input style="margin:10px;" value="quantity" type="radio" name="primero" id="primero2"
            <?php if ($primero === 'quantity') echo 'checked'; ?>>Método de Bisección y Método de Euler.
        <br><br>
        <button class="btn btn-primary" type="submit">Submit</button>
        <?php echo isset($verificar_1) ? $verificar_1 : ''; ?>
        <br><br><br><br>
        <span> Notacion </span>
        <p>
            <li>
            M<sub>i</sub> es el valor máximo de f(x) en el intervalo [x<sub>i-1</sub>, x<sub>i</sub> ].
            </li>     
            <li>
            La frase "el más pequeño M<sub>i</sub> " simplemente se refiere a encontrar el límite superior más pequeño que satisface f(x) ≤ Mi, lo que en esencia define el máximo.
            </li>
            <li>
                Es decir, hay muchos numeros (por ejemplo, a) que cumplen la codicion f(x) < a (ser mayores
                a f(x)), pero M <sub>i</sub> es el menor de ellos, en otras palabras, el primero que cumple.
            </li>
            <br><br>
            <li>
                m<sub>i</sub> es el valor minimo de f(x) en el intervalo [x<sub>i-1</sub>, x<sub>i</sub>]
             </li>
             <li>
                La frase el mas grande m<sub>i</sub> se refiere a encontrar el limite inferior mas grande para el cual f(x) >= m<sub>i</sub>
             </li>
             <br><br><br>
             Se entiende entonces, que: <br>
             <li>
             El rectángulo con base [𝑥<sub>i-1</sub>, 𝑥<sub>i</sub> ] y altura 𝑀<sub>i</sub> es un rectángulo circunscrito.
             </li>
             <li>
                El rectángulo con base [x<sub>i-1</sub>, 𝑥<sub>i</sub> ] y altura 𝑚<sub>i</sub> es un rectángulo inscrito.
             </li>
             <img src="../img/Captura de pantalla 2024-12-02 150643.png" alt=""> <br> <br>
             <p>
            Llamamos a un conjunto P = {x<sub>0</sub>, x<sub>1</sub>, &hellip;, x<sub>n</sub>}</math> 
            una partición del intervalo [a, b]</math> si a = x<sub>0</sub> &lt; x<sub>1</sub> &lt; x<sub>2</sub> &lt; &hellip; &lt; x<sub>n</sub> = b</math>.
            </p>
            <p>
            Dicha partición P divide [a, b] en n intervalos, 
            [x<sub>i-1</sub>, x<sub>i</sub>], de longitudes 
            &Delta;x<sub>i</sub> = x<sub>i</sub> - x<sub>i-1</sub>.
            </p>


             <br><br>
             <img src="../img/Captura de pantalla 2024-12-02 160017.png" alt="">
             <br><br>
             <img src="../img/Captura de pantalla 2024-12-02 163019.png" alt="">
             <br><br>
             <img src="../img/Captura de pantalla 2024-12-02 163123.png" alt="">
        </p>

    </form>
</div>
<div class="seccion derecha">
    <form action="./index.php" method="POST" onsubmit="handleSubmit(event)">
        Si es continua, es integrable. <br><br>
        <img src="../img/Captura de pantalla 2024-12-03 080732.png" alt="">  <br><br>
        <img src="../img/Captura de pantalla 2024-12-03 080744.png" alt=""> <br><br>
        Ingrese la ecuacion de la circunferencia con centro en el origen. <br>
        <input   type="text" value="<?php echo $texto1?>" name="segundo" id="" style="width: 50px;">
        <input  type="text"  value="<?php echo $texto2?>" name="segundo_1"  id="" style="width: 50px;">
        <input  type="text"  value="<?php echo $texto3?>" name="segundo_1_2"  id="" style="width: 50px;">
        =
        <input  type="text"  value="<?php echo $texto4?>" name="segundo_1_2_3"  id="" style="width: 50px;">
        <br><br>

        <button class="btn btn-primary"  type="submit">Submit</button>
        <?php echo !empty($texto1)&&!empty($texto1)?$resultado1:""?>
        <?php echo !empty($texto2) && !empty($texto2) ? $resultado2 : ""; ?>
        <?php echo !empty($texto3) && !empty($texto3) ? $resultado3 : ""; ?> 
        <?php echo !empty($texto4) && !empty($texto4) ? $resultado4 : ""; ?> 

        <br><br>
        <img src="../img/Captura de pantalla 2024-12-03 095223.png" alt="">
        <img src="../img/Captura de pantalla 2024-12-03 095232.png" alt="">
        <p>Ahora, la suma de todas las longitudes de los subintervalos Δ𝑥<sub>i</sub> en una partición de 
        [0,1] es simplemente 1. Es decir, la partición P cubre todo el intervalo de 0 a 1, por lo que la
         suma de las longitudes de los subintervalos es igual a la longitud total del intervalo, que es 1</p>
        Lo anterior, claro esta, para U(f,p). En el otro caso de L(f, p) la suma seria 0.
        <br><br>
        <img src="../img/Captura de pantalla 2024-12-03 101659.png" alt="">
        </form>
</div>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="segundo.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
