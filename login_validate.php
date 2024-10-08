<?php

include 'conexion.php';

$user = $_POST['user'];
$password = $_POST['password'];
$bool = false;

$query = pg_query("SELECT 
                            *
                        FROM administracion.usuario
                        WHERE '$user' = nick and MD5('$password') = password");

if (pg_num_rows($query) > 0) {
    $bool = true;
    $row = pg_fetch_array($query);
    $id_usuario = $row["id_usuario"];
    $nombre = $row["nombre"];
    $nick = $row["nick"];
    $password = $row["password"];
    $id_rol = $row["id_rol"];
    session_start();
}

echo $bool;