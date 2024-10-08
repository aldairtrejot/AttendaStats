<?php

include '../conexion.php';

$datos = [
    'nombre' => $_POST['nombre_'],
    'nick' => $_POST['nick_'],
    'password' => MD5($_POST['password_']),
    'email' => $_POST['email_'],
    'id_rol' => $_POST['role_']
];

$_IS_RESULT = pg_insert($connectionDBsPro, 'administracion.usuario', $datos);


if ($_IS_RESULT) {
    echo true;
} else {
    echo false;
}