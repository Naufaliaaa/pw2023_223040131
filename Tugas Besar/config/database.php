<?php 

$DB_HOST = 'localhost';
$DB_DATABASE = 'pw2023_223040131_tubes';
$DB_USENAME = 'root';
$DB_PASSWORD = '';

$DB_CONNECTION = mysqli_connect($DB_HOST, $DB_USENAME, $DB_PASSWORD, $DB_DATABASE);

if(!$DB_CONNECTION) {
    die("Gagal terhubung database; " . mysqli_connect_error());
}

?>