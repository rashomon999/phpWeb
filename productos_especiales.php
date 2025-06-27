<?php include("template/cabecera.php")?>

<?php include("administrador/config/bd.php");

// Consulta para productos especiales
$sentenciaSQL = $conexion->prepare("SELECT * FROM libros WHERE categoria = 'especial' ORDER BY nombre ASC");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$linksEspeciales = [
    "Estadistica/Menu.php", 
    "fisica/Menu.php",
    // Añade más rutas según necesites
];

echo "<h2>Productos Especiales</h2>";
echo "<p>Consulta SQL: <code>SELECT * FROM libros WHERE categoria = 'especial' ORDER BY nombre ASC;</code></p>";

if(empty($listaLibros)) {
    echo '<div class="alert alert-warning">No hay productos especiales disponibles</div>';
}
?>

<div class="row">
<?php foreach($listaLibros as $libro){ ?>
    <div class="col-md-3" style="margin:20px;">
        <div class="card" style="width: 18rem; height:350px; padding:20px; margin:10px;">
            <div class="card-body">
                <h5 class="card-title text-primary"><?php echo $libro['nombre']?></h5>
                <img class="card-img-top" style="width:200px; height:150px; object-fit: contain;" src="./img/<?php echo $libro['imagen']?>" alt="<?php echo $libro['nombre']?>">
                <p class="card-text">Contenido exclusivo</p>
                <a href="<?php echo current($linksEspeciales); ?>" class="btn btn-success">Acceso especial</a>
            </div>
        </div>
    </div>
<?php
    next($linksEspeciales);
}?>
</div>

<?php include("template/pie.php")?>