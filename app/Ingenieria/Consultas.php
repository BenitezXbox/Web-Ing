<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contol de personal">
    <meta name="author" content="Ing. Benitez Parga Miguel">
    <meta name="generator" content="Perosonal 0.02.1">
    <title>Consulta</title>


    <!-- ESTILOS LOCALES -->
    <link rel="stylesheet" type="text/css" href="Css/Site.css" />

    <!-- CSS ICONOS BOOTSTRAP -->
    <link rel="stylesheet" href="./font/bootstrap-icons.css">

    <link href="./favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>


<body>


    <div class="container-xxl">

        <!-- HEADER -->
        <header class="header">
            <div class="container-fluid">

                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <img src="./imagenes/banner1.png" alt="dfs" class=" img-fluid">

                    </div>

                </div>

            </div>

        </header>



        <!-- NAV BAR -->
        <div class=" container-fluid bg-light">

            <div class=" container">

                <nav class="row navbar navbar-expand-lg navbar-light bg-light justify-content-between align-items-center text-uppercase"
                    aria-label="">


                    <div class="col-auto">
                        <a href="#" class="col-auto">
                            <img src="./imagenes/logo.png" alt="logo" class="img-logo-univision">
                        </a>
                    </div>


                    <div class="col-auto">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarsExample07">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="Index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Loging.php">Loging</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link active" href="Consultas.php">Consulta de empleados</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-auto">
                        <form class="d-flex" action="Consultas_Consulta.php" method="post">
                            <input name="Buscartxt" class="form-control me-2" type="search" placeholder="Buscar"
                                aria-label="Search">
                            <button name="BtnBuscar" class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>

            </div>
            </nav>
        </div>


        <?php

if (isset($_POST['BtnBuscar'])) {

    include "Abrir_Conexion.php";
    $CNombre    = $_POST['Buscartxt'];
    $Resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE Nombre LIKE '%" . $CNombre . "%' OR No_Empleado LIKE '%" . $CNombre . "%' OR Software LIKE '%" . $CNombre . "%' ORDER BY Nombre ASC");
    while ($row = mysqli_fetch_assoc($Resultados)) { ?>



        <!-- SECCION resultado de consulta -->
        <div class="row row-col-4 pt-3">

            <div class="col">

                <label for="busqueda" class="form-label text-dark fw-bold"><i
                        class="bi bi-server fs-3 me-2"></i>Resultados de la busqueda.</label>




                <!-- Identificadores Generales. -->
                <div class="card mb-3">
                    <div class="card-header  text-univision fw-bold">
                        Identificadores Generales.
                    </div>
                    <div class="card-body p-2">

                        <div class="row row-cols-2 row-cols-lg-4 pt-3">

                            <div class="col">
                                <label for="No.empleado" class="form-label">Nombre.</label>
                                <input type="text" class="form-control text-success" disabled
                                    value='<?php echo $row["Nombre"]; ?>'>
                            </div>

                            <div class="col">
                                <label for="Correo" class="form-label">No.empleado.</label>
                                <input type="text" class="form-control text-success" disabled
                                    value='<?php echo $row["No_Empleado"]; ?>'>
                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Puesto.</label>
                                <input type="text" class="form-control" disabled value='<?php echo $row["Puesto"]; ?>'>
                            </div>


                            <div class="col">
                                <label for="Telefono" class="form-label">Funciones del Puesto.</label>

                                <textarea style="height: 60px" class="form-control"
                                    disabled><?php echo $row["Funciones_Puesto"]; ?></textarea>
                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Antiguedad en el puesto.</label>
                                <input type="text" class="form-control" disabled
                                    value='<?php echo $row["Antiguedad"]; ?>'>
                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Tiempo en el puesto.</label>
                                <input type="text" class="form-control" disabled
                                    value='<?php echo $row["Tiempo_Puesto"]; ?>'>
                            </div>




                            <div class="col">
                                <label for="Telefono" class="form-label">Edad.</label>
                                <input type="text" class="form-control" disabled value='<?php echo $row["Edad"]; ?>'>
                            </div>

                        </div>
                    </div>

                </div>


                <!-- Conocimientos -->
                <div class="card mb-3">
                    <div class="card-header text-univision fw-bold">
                        Conocimientos.
                    </div>
                    <div class="card-body p-2">

                        <div class="row row-cols-2 row-cols-lg-4 pt-3">

                            <div class="col">
                                <label for="Telefono" class="form-label">Estudios.</label>
                                <input type="text" class="form-control" disabled
                                    value='<?php echo $row["Estudios"]; ?>'>
                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Idiomas.</label>
                                <textarea style="height: 60px" class="form-control"
                                    disabled><?php echo $row["Idiomas"]; ?></textarea>


                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Certificaciones.</label>
                                <textarea style="height: 60px" class="form-control"
                                    disabled><?php echo $row["Certificaciones"]; ?></textarea>



                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Cursos.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Cursos"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Software.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Software"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Equipos.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Equipos"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Fortalezas.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Fortalezas"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Intereses.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Intereses"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Áreas.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Areas"]; ?></textarea>

                            </div>

                        </div>
                    </div>

                </div>




                <!-- Competencias Técnicas. -->
                <div class="card mb-3">
                    <div class="card-header text-univision fw-bold">
                        Competencias Técnicas.
                    </div>
                    <div class="card-body p-2">

                        <div class="row row-cols-2 row-cols-lg-4 pt-3">


                            <div class="col">
                                <label for="Telefono" class="form-label">Administracion de proyectos.</label>
                                <input type="text" class="form-control" disabled
                                    value='<?php echo $row["Admin_Proyectos"]; ?>'>
                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Conocimientos y Fortalezas.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Conocimientos_Fortalezas"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Implementacion de Flujos.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Implementacion_Flujos"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Experienccia en la nube.</label>
                                <input type="text" class="form-control" disabled
                                    value='<?php echo $row["Experiencia_Nube"]; ?>'>
                            </div>

                        </div>
                    </div>

                </div>




                <!-- Competencias Humano-Administrativas. -->
                <div class="card mb-3">
                    <div class="card-header text-univision fw-bold">
                        Competencias Humano-Administrativas.
                    </div>
                    <div class="card-body p-2">

                        <div class="row row-cols-2 row-cols-lg-4 pt-3">

                            <div class="col">
                                <label for="Telefono" class="form-label">Nesecidad en logros.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Nesecidad_Logro"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Orientacion a Resultados.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Orientacion_Resultados"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Creatividad.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Creatividad"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Persistencia.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Persistencia"]; ?></textarea>


                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Enfoque Cliente.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Enfoque_Cliente"]; ?></textarea>

                            </div>

                            <div class="col">
                                <label for="Telefono" class="form-label">Trabajo en equipo.</label>
                                <textarea class="form-control" disabled
                                    style="height: 60px"><?php echo $row["Trabajo_Equipo"]; ?></textarea>

                            </div>

                        </div>
                    </div>

                </div>



                <!-- SECCION ALTAS COVID-->
                <div class="card mb-3">
                    <div class="card-header text-univision fw-bold">
                        Vacunación COVID.
                    </div>

                    <div class="card-body">

                        <div class="row row-cols-1 row-cols-lg-4">


                            <!-- ALCALDÍA O MUNICIPIO  -->
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Alcaldía o Municipio.</label>
                                <textarea style="height: 60px" class="form-control" name="Alcaldia"
                                    disabled><?php echo $row["Alcaldia_Municipio"]; ?></textarea>




                            </div>


                            <!-- FECHA DE 1a DOSIS. -->
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Marca y fecha 1a Dosis.</label>
                                <textarea style="height: 60px" class="form-control" name="Primera_Dosis"
                                    disabled><?php echo $row["Primera"]; ?></textarea>



                            </div>


                            <!-- FECHA DE 2a DOSIS. -->
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Marca y fecha 2a Dosis.</label>

                                <textarea style="height: 60px" class="form-control" name="Segunda_Dosis"
                                    disabled><?php echo $row["Segunda"]; ?></textarea>



                            </div>



                            <!-- FECHA DE 3a DOSIS. -->
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Marca y fecha 3a Dosis.</label>

                                <textarea style="height: 60px" class="form-control" name="Tercera_Dosis"
                                    disabled><?php echo $row["Tercera"]; ?></textarea>



                            </div>




                        </div>

                    </div>

                </div>


            </div>
        </div>

        <?php }} ?>
    </div>

    </div>



    <!-- LOGOS -->
    <div class=" bg-dark mt-5">
        <div class="container-fluid">
            <div class="row row-cols-2 row-cols-sm-3 align-items-center justify-content-around py-5">
                <!-- LOGO UNIVISION -->
                <a href="https://corporate.televisaunivision.com/es/" class="col-lg-1 mb-2 mb-lg-0">
                    <img src="./imagenes/canales/imagen 1.png" alt="Univision">
                </a>
                <!-- LOGO TELEVISA -->
                <a href="https://www.televisa.com/" class="col-lg-1 mb-2 mb-lg-0">
                    <img src="./imagenes/canales/imagen 2.png" alt="TELEVISA">
                </a>
                <!-- LOGO UNIVISION -->
                <a href="https://www.univision.com/" class="col-lg-1 mb-2 mb-lg-0">
                    <img src="./imagenes/canales/imagen 3.png" alt="UNIVISION">
                </a>
                <!-- LOGO PRENDE TV -->
                <a href="https://www.prende.tv/" class="col-lg-1 mb-2 mb-lg-0">
                    <img src="./imagenes/canales/imagen 4.png" alt="PRENDE TV">
                </a>
                <!-- LOGO UNIMAS -->
                <a href="https://www.univision.com/unimas" class="col-lg-1 mb-2 mb-lg-0">
                    <img src="./imagenes/canales/imagen 5.png" alt="UNIMAS">
                </a>
                <!-- LOGO TUDN -->
                <a href="https://www.tudn.mx/" class="col-lg-1 mb-2 mb-lg-0">
                    <img src="./imagenes/canales/imagen 6.png" alt="TUDN">
                </a>
                <!-- LOGO GALAVISION -->
                <a href="https://www.univision.com/galavision" class="col-lg-1 mb-2 mb-lg-0">
                    <img src="./imagenes/canales/imagen 7.png" alt="GALAVISION">
                </a>
                <!-- LOGO UFORIA -->
                <a href="https://www.univision.com/radio" class="col-lg-1 mb-2 mb-lg-0">
                    <img src="./imagenes/canales/imagen 8.png" alt="UFORIA">
                </a>
                <!-- LOGO LAS ESTRELLAS -->
                <a href="https://www.lasestrellas.tv/" class="col-lg-1 mb-2 mb-lg-0">
                    <img src="./imagenes/canales/imagen 9.png" alt="LAS ESTRELLAS">
                </a>
            </div>
        </div>
    </div>


    <footer class="py-4 my-2">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="Alta_Empleados.php" class="nav-link px-2 text-muted">Loging</a></li>

            </li>

        </ul>
        <p class="text-center text-muted">&copy; 2022 Benitez</p>
    </footer>



    <!-- poppers -->
    <script src=" js/popper.min.js" lang="javascript" type="text/javascript"></script>

    <!-- bosttrap -->
    <script src="js/bootstrap.min.js" lang="javascript" type="text/javascript"></script>



</body>

</html>