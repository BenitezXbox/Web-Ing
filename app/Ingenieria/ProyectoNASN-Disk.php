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

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto NAS N+ Cambio Disco</title>

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

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="home.php">Home</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link active" href="ProyectoNASN+.php">Proyecto NAS N+</a>
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

    <div class="container-xxl">

        <nav class="row navbar navbar-expand-lg navbar-light justify-content-between align-items-center text-uppercase bg-light"
            aria-label="">


            <div class="col-auto">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsdoc"
                    aria-controls="navbarsdoc" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsdoc">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="proyectoNASN-Racks.php">Racks</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="ProyectoNASN-Doc-Quantum.php">Doc Oficial Quantum</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="https://qsupport.quantum.com/kb/flare/Content/HSeries/H4000/DocSite/Default.htm
">Quantum H400 Documentation Center</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Diagramas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ProyectoNASN-Sas.php">Conexión Cables SAS</a>
                                </li>
                                <li><a class="dropdown-item" href="ProyectoNASN-FiberChannel.php">Conexión de
                                        Fibre Channel </a></li>
                                <li><a class="dropdown-item" href="ProyectoNASN-UTP-Management.php">Conexión UTP
                                        Management</a></li>
                                <li><a class="dropdown-item" href="ProyectoNASN-PDUs.php">PDUs</a></li>
                                <li><a class="dropdown-item" href="ProyectoNASN-Nodos2B.php">Nodos UTP 2B</a></li>
                                <li><a class="dropdown-item" href="ProyectoNASN-Cargas.php">Cargas Racks</a></li>

                            </ul>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="ProyectoNASN-Share-Point.php">Share Point</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Procedimientos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ProyectoNASN-AsigCuotas.php">Asignacion de Cuotas a
                                        carpetas
                                    </a></li>
                                <li><a class="dropdown-item" href="ProyectoNASN-GenGrupos.php">Generacion Grupos
                                        Usuarios</a></li>
                                <li><a class="dropdown-item" href="ProyectoNASN-Logs.php">Recoleccion Logs</a></li>
                                <li><a class="dropdown-item active" href="ProyectoNASN-Disk.php">Cambio Disco H4000</a>
                                </li>
                                <li><a class="dropdown-item" href="ProyectoNASN-DiskStornext.php">Cambio Disco
                                        Stornext</a></li>
                                <li><a class="dropdown-item" href="ProyectoNASN-Cargas.php">xx</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>

            </div>



        </nav>


        <div class="row  pt-3">


            <div class="col">


                <div class="card mb-3 mt-3">
                    <div class="card-header text-univision fw-bold ">
                        Cambio de disco quantum H4000.
                    </div>
                    <div class="card-body p-2">

                        <div class="row p-3 pb-4 justify-content-center">

                            <div id="miPDF" class="row p-3  justify-content-center">

                                <iframe src="../Doc/PROCEDIMIENTO REEMPLAZO DISCO QUANTUM H4000.pdf" class="w-100"
                                    frameborder="0"></iframe>

                            </div>


                        </div>



                    </div>

                </div>


            </div>






        </div>




    </div>










</body>

</html>