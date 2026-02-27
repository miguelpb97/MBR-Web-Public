<?php
require_once __DIR__ . '/../../src/ConsultaRepository.php';

$repo = new ConsultaRepository();

$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$vin = $_POST['vin'] ?? '';
$mensaje = $_POST['mensaje'] ?? '';
$modelo = $_POST['modelo'] ?? 'No especificado';
$servicio = $_POST['servicio'] ?? 'No especificado';

// Validación mínima
if ($nombre === '' || $email === '' || $mensaje === '') {
    die('Faltan campos obligatorios.');
}

if ($repo->crearConsulta($nombre, $email, $telefono, $vin, $mensaje, $modelo, $servicio)) {
    require_once __DIR__ . '/../../views/request_sent-view.html';
} else {
    echo 'Error al enviar la consulta.';
}
