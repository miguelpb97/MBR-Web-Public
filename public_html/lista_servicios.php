<?php
require_once "../config/data.php";
$MODELOS = cargarModelos();

$id   = $_GET["id"] ?? null;
$anio = $_GET["anio"] ?? null;

if (!isset($MODELOS[$id])) die("Modelo no encontrado");
if (!isset($MODELOS[$id]['anios'][$anio])) die("Año no disponible");

$modelo    = $MODELOS[$id];
$infoAnio  = $modelo['anios'][$anio];
$servicios = $infoAnio['servicios'];

// Vista
require_once __DIR__ . '/../views/service_list-view.php';