<?php

include '../conexion.php';
include '../login_validate.php';

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['id_usuario']) && 
    isset($_SESSION['nombre']) && 
    isset($_SESSION['nick']) && 
    isset($_SESSION['password']) && 
    isset($_SESSION['id_rol'])) {

} else {
    header('Location: ../login.php');
}