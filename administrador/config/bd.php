<?php
$esLocal = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']);

if ($esLocal) {
    // 🖥️ Configuración local
    $host = '127.0.0.1';
    $db = 'sitio';
    $usuario = 'root';
    $contraseña = '';
    $puerto = 3306;
} else {
    // 🌐 Producción (Railway)
    $url = getenv("MYSQL_URL");

    if ($url) {
        $parts = parse_url($url);
        $host = $parts["host"];
        $usuario = $parts["user"];
        $contraseña = $parts["pass"];
        $db = ltrim($parts["path"], '/');
        $puerto = $parts["port"];
    } else {
        // Fallback si no hay MYSQL_URL
        $host = getenv('DB_HOST');
        $db = getenv('DB_NAME');
        $usuario = getenv('DB_USER');
        $contraseña = getenv('DB_PASSWORD');
        $puerto = getenv('DB_PORT');
    }
}

try {
    $dsn = "mysql:host=$host;port=$puerto;dbname=$db;charset=utf8mb4";
    $conexion = new PDO($dsn, $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    if ($esLocal) {
        echo "❌ Error de conexión: " . $ex->getMessage();
    }
    $conexion = null;
}
?>
