<?php

function cargarModelos() {
    $json = file_get_contents(__DIR__ . "/services.json");
    return json_decode($json, true);
}

/* BBDD
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';

function cargarModelos(): array
{
    $pdo = db();

   
    $sqlClases = "SELECT id, nombre, slug, imagen FROM clases ORDER BY nombre";
    $clases = $pdo->query($sqlClases)->fetchAll();

    $resultado = [];

    foreach ($clases as $cl) {
        $slug = $cl['slug'];

        $resultado[$slug] = [
            'nombre' => $cl['nombre'],
            'imagen' => $cl['imagen'],
            'anios'  => []
        ];
    }

   
    $sqlAnios = "
        SELECT a.id, a.clase_id, a.nombre, a.imagen,
               c.slug AS clase_slug
        FROM anios a
        INNER JOIN clases c ON a.clase_id = c.id
        ORDER BY c.nombre, a.nombre
    ";
    $anios = $pdo->query($sqlAnios)->fetchAll();

    foreach ($anios as $an) {
        $claseSlug  = $an['clase_slug'];
        $nombreAnio = $an['nombre'];

        if (!isset($resultado[$claseSlug])) {
            $resultado[$claseSlug] = [
                'nombre' => $claseSlug,
                'imagen' => null,
                'anios'  => []
            ];
        }

        $resultado[$claseSlug]['anios'][$nombreAnio] = [
            'imagen'    => $an['imagen'],
            'servicios' => [],
            '_id'       => $an['id'], 
        ];
    }

    $sqlServicios = "
        SELECT s.id,
               s.anio_id,
               s.titulo,
               s.descripcion,
               s.precio,
               a.nombre AS anio_nombre,
               c.slug   AS clase_slug
        FROM servicios s
        INNER JOIN anios a  ON s.anio_id = a.id
        INNER JOIN clases c ON a.clase_id = c.id
        ORDER BY c.nombre, a.nombre, s.titulo
    ";
    $servicios = $pdo->query($sqlServicios)->fetchAll();

    foreach ($servicios as $srv) {
        $claseSlug  = $srv['clase_slug'];
        $anioNombre = $srv['anio_nombre'];

        if (!isset($resultado[$claseSlug]['anios'][$anioNombre])) {
            $resultado[$claseSlug]['anios'][$anioNombre] = [
                'imagen'    => null,
                'servicios' => []
            ];
        }

        $resultado[$claseSlug]['anios'][$anioNombre]['servicios'][] = [
            'titulo'      => $srv['titulo'],
            'descripcion' => $srv['descripcion'],
            'precio'      => (float) $srv['precio'],
        ];
    }

    foreach ($resultado as $slug => &$clase) {
        foreach ($clase['anios'] as $nombreAnio => &$anio) {
            unset($anio['_id']);
        }
    }
    unset($clase, $anio);

    return $resultado;
}
*/