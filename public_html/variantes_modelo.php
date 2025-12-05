<?php
require_once "../config/data.php";
$MODELOS = cargarModelos();

$id = $_GET["id"] ?? null;

if (!isset($MODELOS[$id])) {
    die("Modelo no encontrado");
}

$modelo = $MODELOS[$id];

// Vista
require_once __DIR__ . '/../views/model_variants-view.php';