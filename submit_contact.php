<?php
// Configuración de la base de datos (modificar con tus credenciales)
$host = 'localhost';
$db   = 'maderas_los_puentes';
$user = 'usuario_db';
$pass = 'contraseña_db';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Recoger datos del formulario
$nombre  = $_POST['nombre']  ?? '';
$correo  = $_POST['correo']  ?? '';
$mensaje = $_POST['mensaje'] ?? '';
$ip      = $_SERVER['REMOTE_ADDR'];
$fecha   = date('Y-m-d H:i:s');

// Guardar en la base de datos
$sql = "INSERT INTO contactos (nombre, correo, mensaje, ip, fecha) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
if ($stmt->execute([$nombre, $correo, $mensaje, $ip, $fecha])) {
    // Enviar correo de notificación (configura el correo destino y remitente)
    $to = "tu_correo@dominio.com";
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $nombre\nCorreo: $correo\nMensaje: $mensaje";
    $headers = "From: gerente@maderaslospuentes.com";
    mail($to, $subject, $body, $headers);

    header("Location: contacto.html?mensaje=exito");
    exit();
} else {
    header("Location: contacto.html?mensaje=error");
    exit();
}
?>
