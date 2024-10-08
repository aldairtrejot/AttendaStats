<?php

include '../conexion.php';

$count = returnArrayById(pg_query("SELECT COUNT (*) FROM administracion.usuario;"));
$admin = returnArrayById(pg_query("SELECT COUNT (*) FROM administracion.usuario WHERE id_rol = 1"));
$user = returnArrayById(pg_query("SELECT COUNT (*) FROM administracion.usuario WHERE id_rol = 2"));






$var = [
    'count' => $count[0],
    'admin' => $admin[0],
    'user' => $user[0],
];
echo json_encode($var);



function returnArrayById($result)
{
    if (pg_num_rows($result) > 0) {
        while ($row = pg_fetch_row($result)) {
            $response = $row;
        }
    }
    return $response;
}