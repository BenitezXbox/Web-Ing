<?php

session_start();

if (!isset($_SESSION['rol'])) {
    header('location: ../Index.php');

} else {
    if ($_SESSION['rol'] != 4) {
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
    <title>Home-Ingeniería</title>

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
include '../includes/HeaderIngenieria.php'
?>

    <!-- NAVBAR -->
    <div class="container-fluid bg-light border-bottom">

        <div class="container">



            <nav class="row navbar navbar-expand-lg navbar-light justify-content-between align-items-center text-uppercase bg-light"
                aria-label="">


                <a href="#" class="col-auto">
                    <img src="../imagenes/logo.png" alt="logo" class="img-logo-univision">

                </a>



                <div class="col-auto">

                </div>

                <div class="col-auto">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbaring"
                        aria-controls="navbaring" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbaring">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="ProyectoNASN+.php">Proyecto NAS N+</a>
                            </li>



                            <li class="nav-item">
                                <a class=" nav-link" href="../includes/logout.php">Cerrar sesión</a>
                            </li>


                        </ul>

                    </div>

                </div>



            </nav>

        </div>
    </div>



    <section class="container">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 mt-4">

            <article class="col mb-3">
                <div class="card">
                    <img src="../imagenes/incidencias.jpg" alt="formularios" class="card-img card-img-filter">
                    <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                        <h4>Proyectos.</h4>
                        <p>
                            Puede consultar los diferentes proyectos de ingeniería.
                        </p>
                    </div>
                </div>
            </article>

            <article class="col mb-3">
                <div class="card">
                    <img src="../imagenes/manuales.jpg" alt="formularios" class="card-img card-img-filter">
                    <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                        <h4>Manuales y procedimientos.</h4>
                        <p>
                            Consulta de manuales de procedimiento.
                        </p>
                        <p>
                            Consulta de toda la informacion del proyecto.
                        </p>
                    </div>
                </div>
            </article>

        </div>

    </section>


    <?php
include_once '../Includes/Logos-footer.php';
?>




    <footer class="py-4 my-2 ">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="home.php" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Crear Incidencia</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Manuales y Procedimientos</a>
            </li>
            <li class="nav-item"><a href="../Includes/logout.php" class="nav-link px-2 text-muted">Cerrar sesión</a>
            </li>



        </ul>
        <p class="text-center text-muted">&copy; 2022 Benitez</p>
    </footer>

    </div>



</body>

</html>