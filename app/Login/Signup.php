<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contol de personal">
    <meta name="author" content="Ing. Benitez Parga Miguel">
    <meta name="generator" content="Perosonal 0.01.1">
    <title>Signup</title>


    <!-- ESTILOS LOCALES -->
    <link rel="stylesheet" type="text/css" href="../Css/Site.css" />

    <!-- CSS ICONOS BOOTSTRAP -->
    <link rel="stylesheet" href="../font/bootstrap-icons.css" />

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />

    <!-- Css bostrap  -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />

</head>


<body>

    <!-- header -->
    <?php
include_once '../includes/Header.php';
?>



    <!-- NAV BAR -->
    <div class="container-fluid bg-light border-bottom">

        <div class="container">



            <nav class="row navbar navbar-expand-lg navbar-light justify-content-between align-items-center text-uppercase bg-light"
                aria-label="">


                <a href="#" class="col-auto">
                    <img src="../imagenes/logo.png" alt="logo" class="img-logo-univision">
                </a>



            </nav>

        </div>
    </div>


    <div class="container">

        <div class="row justify-content-center">


            <form action="../Admin/Procesos/Procesar_Usuarios.php" method="post" class="col col-xl-4 mt-3">

                <div class="card shadow mt-3">
                    <div class="card-header text-univision">
                        Registrarse
                    </div>
                    <div class="card-body">
                        <!-- USUARIO -->
                        <div class="form-group pb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" name="nombre" class="form-control form-control-sm" required>
                        </div>

                        <!-- USUARIO -->
                        <div class="form-group pb-3">
                            <label for="username" class="form-label">Nombre de usuario</label>
                            <input type="text" name="username" class="form-control form-control-sm" required>
                        </div>



                        <!-- PASSWORD -->
                        <div class="form-group pb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control form-control-sm" required>
                        </div>


                        <!-- Area o departamento -->
                        <div class="form-group pb-3">
                            <label for="Departamento" class="form-label">Área o departamento</label>
                            <select class="form-select" aria-label="Departamento" name="departamento" required>
                                <option></option>

                                <?php

include '../ConexionDB/Abrir_Conexion.php';
$Resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db3 ORDER BY Departamento ASC");

while ($row = mysqli_fetch_assoc($Resultados)) { ?>
                                <option value='<?php echo $row["ID"]; ?>'><?php echo $row["Departamento"]; ?></option>
                                <?php } ?>


                            </select>
                        </div>


                        <!-- BOTON ENVIAR -->
                        <button type="submit" class="btn btn-primary m-1" name="Insertar_Usuario">
                            <i class="bi bi-person-check-fill fs-5 me-2" value="Insertar_Usuario"></i>Agregar
                        </button>

                        <p>
                            ¿Tienes una cuenta? <a href="../index.php">Iniciar sesion</a>
                        </p>
                    </div>


                </div>



            </form>

        </div>
    </div>

    <!-- logos footer -->
    <?php
include_once '../includes/Logos-footer.php';
?>

    <footer class=" py-4 my-2">
        <p class="text-center text-muted">&copy; 2022 Benitez</p>
    </footer>




</body>

</html>