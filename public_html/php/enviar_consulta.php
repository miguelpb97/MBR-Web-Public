<?php
require_once __DIR__ . '/../../src/ConsultaRepository.php';

$repo = new ConsultaRepository();

$nombre   = $_POST['nombre']   ?? '';
$email    = $_POST['email']    ?? '';
$telefono = $_POST['telefono'] ?? '';
$vin      = $_POST['vin']      ?? '';
$mensaje  = $_POST['mensaje']  ?? '';

// Validación mínima
if ($nombre === '' || $email === '' || $mensaje === '') {
    die('Faltan campos obligatorios.');
}

if ($repo->crearConsulta($nombre, $email, $telefono, $vin, $mensaje)) {
    require_once __DIR__ . '/../../views/consulta_enviada.php';
} else {
    echo 'Error al enviar la consulta.';
}
