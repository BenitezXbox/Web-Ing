<?php

session_start();

if (!isset($_SESSION['rol'])) {
    header('location: ../Index.php');
} else {
    if ($_SESSION['rol'] != 1) {
        header('location: ../Index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contol de personal">
    <meta name="author" content="Ing. Benitez Parga Miguel">
    <meta name="generator" content="Perosonal 0.01.1">
    <title>Documentos-Admin</title>

    <!-- ESTILOS LOCALES -->
    <link rel="stylesheet" type="text/css" href="../Css/Site.css" />

    <!-- CSS ICONOS BOOTSTRAP -->
    <link rel="stylesheet" href="../font/bootstrap-icons.css">

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />

    <!-- Css bostrap  -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <!-- bosttrap -->
    <script src="../js/bootstrap.min.js" lang="javascript" type="text/javascript"></script>



</head>


<body>


    <?php
// header
include '../includes/HeaderAdmin.php';
?>

    <!-- NAV BAR -->
    <div class=" container-fluid bg-light border-bottom">

        <div class="container">

            <nav class="row navbar navbar-expand-lg navbar-light bg-light justify-content-between align-items-center text-uppercase"
                aria-label="">

                <div class="col-auto">
                    <a href="#" class="col-auto">
                        <img src="../imagenes/logo.png" alt="logo" class="img-logo-univision">
                    </a>
                </div>


                <div class="col-auto">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarAdminhome" aria-controls="navbarAdminhome" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarAdminhome">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="Home.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="Alta_Empleados.php">Alta de
                                    empleados</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Consultas.php">Consulta de empleados</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="Documentos.php">Documentos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Adminsite.php">Administrar Sitio</a>
                            </li>
                            <li class="nav-item">
                                <a class=" nav-link" href="../includes/logout.php">Cerrar sesión</a>
                            </li>
                        </ul>

                    </div>
                </div>



        </div>
        </nav>
    </div>


    <section class="container">

        <div class="row row-cols-1 mt-4">



            <article class="col mb-3">
                <div class="card">
                    <img src="../imagenes/deportes.png  " alt="formularios" class="card-img">

                </div>
            </article>





        </div>

    </section>


    <?php
include_once '../Includes/Logos-footer.php';
include_once '../Includes/FooterAdmin.php';
?>





    </div>



</body>

</html>