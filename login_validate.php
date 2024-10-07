<?php

include 'conexion.php';

$user = $_POST['user'];
$password = $_POST['password'];
$bool = false;

$query = pg_query ("SELECT 
                            *
                        FROM administracion.usuario
                        WHERE '$user' = nick and MD5('$password') = password");

if (pg_num_rows($query) > 0) {
    $bool = true;
}

echo $bool;