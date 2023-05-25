<?php

include "../../ConexionDB/Abrir_Conexion.php";

// BORRA USUARIO DE LA BD
if (isset($_POST['Eliminar'])) {

    $ID_Uusuario = $_POST['ID_Usuario'];

    $delete = "DELETE FROM $tabla_db2 WHERE ID='$ID_Uusuario'";

    $resulatado = mysqli_query($conexion, $delete);

    if ($resulatado) {

        echo "<script>window.location='/AdminPersonal/Admin/Adminsite.php';</script>";

    } else {

        echo "<script>
            alert('no se pudo borrar el usuario');
            window.history.go(-1);
            </script>";

    }
    include "../../ConexionDB/Cerrar_Conexion.php";

// INSERTA USUARIO EN LA BD
} elseif (isset($_POST['Insertar_Usuario'])) {

    $Nombre       = $_POST['nombre'];
    $UserName     = $_POST['username'];
    $Password     = $_POST['password'];
    $Departamento = $_POST['departamento'];
    $ID_Rol       = 2;

    $insertar = "INSERT INTO $tabla_db2(Nombre,UserName,Password,Rol_ID,ID_Departamento) VALUES ('$Nombre','$UserName','$Password','$ID_Rol','$Departamento')";

    $resulatado = mysqli_query($conexion, $insertar);

    if ($resulatado) {

        echo "<script>window.location='/AdminPersonal/index.php';</script>";

    } else {

        echo "<script>
            alert('no se pudo crear al usuario');
            window.history.go(-1);
            </script>";

    }
    include "../../ConexionDB/Cerrar_Conexion.php";

    // ACTUALIZA USUARIO
} elseif (isset($_POST['Actualiza_Usuario'])) {

    $Rol_ID = $_POST['Actualiza_Usuario'];

    $ID_Uusuario = $_POST['ID_Usuario'];

    $actualizar = "UPDATE $tabla_db2 SET Rol_ID='$Rol_ID' WHERE ID='$ID_Uusuario'";

    $resulatado = mysqli_query($conexion, $actualizar);

    if ($resulatado) {

        echo "<script>window.location='/AdminPersonal/Admin/Adminsite.php';</script>";

    } else {

        echo "<script>
        alert('no se pudieron actulizar los datos del usuario');
        window.history.go(-1);
        </script>";

    }
    include "../../ConexionDB/Cerrar_Conexion.php";

}