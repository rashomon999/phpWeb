<?php include("template/cabecera.php")?>

<?php include("datos_libros.php");

$listaLibros = array_filter($libros, function($libro) {
    return $libro['categoria'] === 'especial';
});

usort($listaLibros, function($a, $b) {
    return strcmp($a['nombre'], $b['nombre']);
});

echo "<h2>Productos Especiales</h2>";
echo "<p>Materias especiales cargadas sin base de datos.</p>";

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
                <a href="<?php echo $libro['link']; ?>" class="btn btn-success">Acceso especial</a>
            </div>
        </div>
    </div>
<?php }?>
</div>

<?php include("template/pie.php")?>