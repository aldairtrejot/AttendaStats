<?php

include '../conexion.php';

$allEmployee = returnArrayById(pg_query("SELECT COUNT (*) FROM empleados.empleado;"));
$bajaEmployee = returnArrayById(pg_query("SELECT COUNT (*) FROM empleados.empleado WHERE id_estatus = 2"));
$altaEmployee = returnArrayById(pg_query("SELECT COUNT (*) FROM empleados.empleado WHERE id_estatus = 1"));






$var = [
    'allEmployee' => $allEmployee[0],
    'bajaEmployee' => $bajaEmployee[0],
    'altaEmployee' => $altaEmployee[0],
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