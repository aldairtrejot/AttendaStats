<?php

include '../conexion.php';

$datos = [
    'nombre' => $_POST['nombre_'],
    'curp' => $_POST['curp_'],
    'rfc' => $_POST['rfc_'],
    'email' => $_POST['correo_'],
    'telefono' => $_POST['telefono_'],
    'id_dispositivo' => $_POST['no_dis_'],
    'id_estatus' => $_POST['estatus_'],
];

$_IS_RESULT = pg_insert($connectionDBsPro, 'empleados.empleado', $datos);


if ($_IS_RESULT == true) {
    echo true;
} else {
    echo false;
}