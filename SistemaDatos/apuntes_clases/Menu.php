<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirección con Botones</title>
    <style>
        .centered-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .btn {
            display: block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: blue;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="centered-container">

        <a class="btn" href=".\algebra_relacional\index.php">Algebra Relacional</a>
        <a class="btn" href=".\cuestionario_algebra_relacional\index.php">cuestionario</a>
        <br><br>
        <a class="btn" href=".\ER_MER\Cero.php"> Transformacion a MER/ER, Transformacion a MR </a> 
        <a class="btn" href=".\ER_MER_cuestionario\index.php">Cuestionario</a> 
        <br><br>
        <a class="btn" href=".\calculoClaves\index.php">Calculo de claves</a> 
        <a class="btn" href=".\calculoClavesCuestionario\index.php">Cuestionario</a> 
        <br><br>
        SQL es un lenguaje que incluye DDL, DML, DCL, TCL y DQL.
        <br><br>
        <a class="btn" href=".\Ejercicio\index.php">Ejercicio SQL</a> 
        <a class="btn" href=".\ER\index.php">ER</a>
        <a class="btn" href=".\solucion_3FN\index.php">Solucion 3FN</a>
        <a class="btn" href=".\MER_ER\index.php">ER -> MER (normalizacion)</a>
        <a class="btn" href=".\Parcial_3\index.php">solucion parcial 3</a>
        <a class="btn" href=".\pl_sql\Menu.php"> pl / sql</a>
    </div>
</body>
</html>
