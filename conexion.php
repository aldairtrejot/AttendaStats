<?php
$password = "pg2024";//admin
$username = "postgres";
$dbname = "attenda";
$host = "localhost";
$port = "5432";
$options = "--client_encoding=UTF8";

try {
    $connectionDB = "host=$host port=$port dbname=$dbname user=$username password=$password options=$options";
    $connectionDBsPro = pg_pconnect($connectionDB);
} catch (\Throwable $e) {
    echo "Error connecting to data base + " . $e;
}