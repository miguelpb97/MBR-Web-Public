<?php

function cargarModelos() {
    $json = file_get_contents(__DIR__ . "/services.json");
    return json_decode($json, true);
}