<?php include("template/cabecera.php")?>

<?php include("administrador/config/bd.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros= $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
$links = ["matematicas/index.php", "musica/CM.php", "ecuaciones/Menu.php", "series/index.php", "algebra_lineal/Menu.php", "libro/Primero.php", "java/index.php","libro2_0/index.php", "derivadas/index.php","formulas/index.php","graficas/index.php","fisica/Menu.php","trigonometricas/index.php","integrales/Menu.php","Taylor/index.php","operaciones_basicas/index.php","SistemaDatos/Menu.php","Estadistica/Menu.php","discretas/menu.php","scala/Menu.php","ingesoft/Menu.php","Superficies/Menu.php","Ingles/Menu.php"];

echo "<p>Consulta SQL: <code>SELECT * FROM libros ORDER BY nombre ASC;</code></p>";


?>



<?php foreach($listaLibros as $libro){ ?>
  <br><br>
<div class="col-md-3" style="margin:20px;">
<div class="card" style="width: 18rem; height:300px; padding:20px; margin:10px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $libro['nombre']?></h5>
    <img class="card-img-top" style="width:200px; height:150px;" src="./img/<?php echo $libro['imagen']?>" alt="">
    <p class="card-text">Ejercicios para mejorar</p> 

    <a  href="<?php echo current($links); ?>" class="btn btn-primary">Ver mas</a>
  </div>
</div>
</div>

<?php
// Avanzar al siguiente elemento de $links
next($links);
}?>

<?php include("template/pie.php")?>