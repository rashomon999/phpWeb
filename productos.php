<?php include("template/cabecera.php")?>

<?php include("administrador/config/bd.php");

// Modifica esta consulta para filtrar solo productos principales
$sentenciaSQL = $conexion->prepare("SELECT * FROM libros WHERE categoria = 'principal' ORDER BY nombre ASC");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$links = ["arquitecturaComputadores/Menu.php","compunet/Menu.php",

"contabilidad/Menu.php",
"discretas/menu.php", 
    
    "Estadistica/Menu.php"
    ,
    "fisica/Menu.php"
    ,"ingesoft/Menu.php",  "Ingles/Menu.php", 
         "java/index.php", "Matematicas/Menu.php", "musica/CM.php", 
         "operaciones_basicas/index.php", "scala/Menu.php", "SistemaDatos/Menu.php"];

echo "<p>Consulta SQL: <code>SELECT * FROM libros WHERE categoria = 'principal' ORDER BY nombre ASC;</code></p>";

// Mensaje si no hay productos
if(empty($listaLibros)) {
    echo '<div class="alert alert-info">No hay productos principales disponibles</div>';
}
?>

<?php foreach($listaLibros as $libro){ ?>
<div class="col-md-3" style="margin:20px;">
    <div class="card" style="width: 18rem; height:300px; padding:20px; margin:10px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $libro['nombre']?></h5>
            <img class="card-img-top" style="width:200px; height:150px; object-fit: contain;" src="./img/<?php echo $libro['imagen']?>" alt="<?php echo $libro['nombre']?>">
            <p class="card-text">Ejercicios para mejorar</p>
            <a href="<?php echo current($links); ?>" class="btn btn-primary">Ver más</a>
        </div>
    </div>
</div>
<?php
    next($links);
}?>



  <!-- Botón mejorado -->
<div class="text-center my-4">  <!-- Contenedor centrado con margen -->
    <a href="productos_especiales.php" class="btn btn-primary btn-lg px-4 py-2">  <!-- Tamaño grande con padding -->
        <i class="fas fa-star mr-2"></i>  <!-- Icono opcional (requiere Font Awesome) -->
        Materias en desarrollo inicial.
    </a>
</div>



<?php include("template/pie.php")?>