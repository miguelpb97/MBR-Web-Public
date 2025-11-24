<?php
require_once __DIR__ . '/../../src/Auth.php';

Auth::startSession();

$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['usuario'] ?? '';
    $pass = $_POST['password'] ?? '';

    if (Auth::login($user, $pass)) {
        header('Location: admin_consultas.php');
        exit;
    } else {
        $error = 'Usuario o contraseña incorrectos.';
    }
}

require_once __DIR__ . '/../../views/admin_login_form.php';
