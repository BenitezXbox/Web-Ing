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

$ID_Empleado = $_POST['ID_Empleado'];

include "../../ConexionDB/Abrir_Conexion.php";

$actualizar = "UPDATE $tabla_db1 SET Nombre='$Nombre',No_Empleado='$No_Empleado',Puesto='$Puesto',Funciones_Puesto='$Funciones_Puesto',Antiguedad='$Fecha_Antiguedad',Tiempo_Puesto='$Tiempo_Puesto',Edad='$Edad',Estudios='$Estudios',Idiomas='$Idiomas',Certificaciones='$Certificaciones',Cursos='$Cursos',Software='$Software',Equipos='$Equipos',Fortalezas='$Fortalezas',Intereses='$Intereses',Areas='$Areas',Admin_Proyectos='$Conocimientos_PM',Conocimientos_Fortalezas='$Conocimientos_F',Implementacion_Flujos='$Flujos_T',Experiencia_Nube='$Experiencia_Nube',Nesecidad_Logro='$Logro',Orientacion_Resultados='$Orientacion_R',Creatividad='$Creatividad',Persistencia='$Persistencia',Enfoque_Cliente='$Persistencia',Trabajo_Equipo='$Trabajo_Equipo',Alcaldia_Municipio='$Alcaldia',Primera='$Primera_Dosis',Segunda='$Segunda_Dosis',Tercera='$Tercera_Dosis' WHERE ID_Empleado='$ID_Empleado'";

$resulatado = mysqli_query($conexion, $actualizar);

if ($resulatado) {

    echo "<script>alert('Se actualizaron los datos del empleado con exito'); window.location='/AdminPersonal/Admin/Edicion.php?ID=$ID_Empleado';</script>";

} else {

    echo "<script>
alert('no se pudieron actulizar los datos del empleado');
window.history.go(-1);
</script>";

}
include "../../ConexionDB/Cerrar_Conexion.php";