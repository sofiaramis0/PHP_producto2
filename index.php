<?php
include($_SERVER["DOCUMENT_ROOT"]."/PHP_producto2/config.php");

$zona = new Zona();

// Añadir nueva zona
$zona->add("Zona 1");

// Obtener datos de una zona en base a un id_zona
$zona_object = $zona->get(1);

// Mostrar datos de la zona obtenida
echo $zona_object->id_zona;
echo "<br>";
echo $zona_object->descripcion;

// Eliminamos la zona de la BBDD en base a un id_zona
$zona->delete(1);
?>