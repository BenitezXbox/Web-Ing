<?php
// Parametros a configurar para la conexion de la base de datos
$host        = "db";
$basededatos = "personal";
$usuario     = "root";
$password    = "123123";

//Tablas
$tabla_db1 = "administracion";
$tabla_db2 = "usuarios";
$tabla_db3 = "departamentos";
$tabla_db4 = "roles";

$conexion = new mysqli($host, $usuario, $password, $basededatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}