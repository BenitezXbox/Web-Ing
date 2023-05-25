<?php

$Nombre           = $_POST['Nombre'];
$No_Empleado      = $_POST['No_Empleado'];
$Puesto           = $_POST['Puesto'];
$Funciones_Puesto = $_POST['Funciones_Puesto'];
$Fecha_Antiguedad = $_POST['Fecha_Antiguedad'];
$Tiempo_Puesto    = $_POST['Tiempo_Puesto'];
$Edad             = $_POST['Edad'];

$Estudios        = $_POST['Estudios'];
$Idiomas         = $_POST['Idiomas'];
$Certificaciones = $_POST['Certificaciones'];
$Cursos          = $_POST['Cursos'];
$Software        = $_POST['Software'];
$Equipos         = $_POST['Equipos'];
$Fortalezas      = $_POST['Fortalezas'];

$Intereses        = $_POST['Intereses'];
$Areas            = $_POST['Areas'];
$Conocimientos_PM = $_POST['Conocimientos_PM'];
$Conocimientos_F  = $_POST['Conocimientos_F'];
$Flujos_T         = $_POST['Flujos_T'];
$Experiencia_Nube = $_POST['Experiencia_Nube'];
$Logro            = $_POST['Logro'];

$Orientacion_R  = $_POST['Orientacion_R'];
$Creatividad    = $_POST['Creatividad'];
$Persistencia   = $_POST['Persistencia'];
$Enfoque        = $_POST['Enfoque'];
$Trabajo_Equipo = $_POST['Trabajo_Equipo'];

$Alcaldia      = $_POST['Alcaldia'];
$Primera_Dosis = $_POST['Primera_Dosis'];
$Segunda_Dosis = $_POST['Segunda_Dosis'];
$Tercera_Dosis = $_POST['Tercera_Dosis'];

include "../../ConexionDB/Abrir_Conexion.php";

$insertar = "INSERT INTO $tabla_db1 (Nombre,No_Empleado,Puesto,Funciones_Puesto,Antiguedad,Tiempo_Puesto,Edad,Estudios,Idiomas,Certificaciones,Cursos,Software,Equipos,Fortalezas,Intereses,Areas,Admin_Proyectos,Conocimientos_Fortalezas,Implementacion_Flujos,Experiencia_Nube,Nesecidad_Logro,Orientacion_Resultados,Creatividad,Persistencia,Enfoque_Cliente,Trabajo_Equipo,Alcaldia_Municipio,Primera,Segunda,Tercera) VALUES ('$Nombre','$No_Empleado','$Puesto','$Funciones_Puesto','$Fecha_Antiguedad','$Tiempo_Puesto','$Edad','$Estudios','$Idiomas','$Certificaciones','$Cursos','$Software','$Equipos','$Fortalezas','$Intereses','$Areas','$Conocimientos_PM','$Conocimientos_F','$Flujos_T','$Experiencia_Nube','$Logro','$Orientacion_R','$Creatividad','$Persistencia','$Enfoque','$Trabajo_Equipo','$Alcaldia','$Primera_Dosis','$Segunda_Dosis','$Tercera_Dosis')";

// SE VERIFICA EL NOMBRE PARA VER SI EXISTE
$Verificar_Usuario = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE Nombre = '$Nombre'");
if (mysqli_num_rows($Verificar_Usuario) > 0) {
    echo "<script>alert('El empleado ya existe en la db con ese Nomnre, Verifique he intente de nuevo.'); window.history.go(-1);</script>";
    exit;
}

// VERIFICA EL NO DE EMPLEADO
$Verificar_No_Empleado = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE No_Empleado = '$No_Empleado'");
if (mysqli_num_rows($Verificar_No_Empleado) > 0) {
    echo "<script>alert('El No de empleado ya existe en la db, Verifique he intente de nuevo.'); window.history.go(-1);</script>";
    exit;
}

// EJECUTA CONSULTA
$resultado = mysqli_query($conexion, $insertar);

// EJECUTAR CONSULTA
if (!$resultado) {
    echo "<script>alert('No se pudieron insertar los datos del empleado.');</script>";
} else {
    echo "<script>alert('Se insertaron los datos del empleado con éxito.'); window.location='/AdminPersonal/Admin/Alta_Empleados.php';</script>";
}

include "../../ConexionDB/Cerrar_Conexion.php";