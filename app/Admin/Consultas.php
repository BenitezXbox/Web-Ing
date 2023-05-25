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
    <meta name="generator" content="Perosonal 0.02.1">
    <title>Consulta-Empleados / Admin</title>


    <!-- ESTILOS LOCALES -->
    <link rel="stylesheet" type="text/css" href="../Css/Site.css" />

    <!-- CSS ICONOS BOOTSTRAP -->
    <link rel="stylesheet" href="../font/bootstrap-icons.css">

    <link href="../favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <!-- Css bostrap  -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />

</head>


<body>


    <?php

// header
include '../includes/HeaderAdmin.php';

?>


    <!-- NAV BAR -->
    <div class=" container-fluid bg-light border-bottom">

        <div class=" container">

            <nav class="row navbar navbar-expand-lg navbar-light bg-light fs-6 justify-content-between align-items-center text-uppercase"
                aria-label="">


                <div class="col-auto">
                    <a href="#" class="col-auto">
                        <img src="../imagenes/logo.png" alt="logo" class="img-logo-univision">
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
                                <a class="nav-link" aria-current="page" href="home.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="Alta_Empleados.php">Alta de
                                    empleados</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="Consultas.php">Consulta de empleados</a>
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

               
                        <div class="col-2">
                            <form class="d-flex" action="Consultas.php" method="post">
                                <input name="Buscartxt" class="form-control me-2" type="search" placeholder="Buscar"
                                    aria-label="Search">
                                <button name="BtnBuscar" class="btn btn-outline-success" type="submit">Buscar</button>
                            </form>
                        </div> 
            




            </nav>

        </div>



    </div>


    <div class="container-xxl">


        <?php

if (isset($_POST['BtnBuscar'])) {

    $CNombre = $_POST['Buscartxt'];

    include '../ConexionDB/Abrir_Conexion.php';
    $Resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE Nombre LIKE '%" . $CNombre . "%' OR No_Empleado LIKE '%" . $CNombre . "%' OR Software LIKE '%" . $CNombre . "%' ORDER BY Nombre ASC");

    while ($row = mysqli_fetch_assoc($Resultados)) { ?>

        <!-- SECCION resultado de consulta -->
        <div class="row row-col-4 pt-3">

            <div class="col">

                <label for="busqueda" class="form-label text-dark fw-bold"><i
                        class="bi bi-server fs-3 me-2"></i>Resultados
                    de la
                    busqueda.</label>




                <!-- Identificadores Generales. -->
                <div class="card mb-3">
                    <div class="card-header text-univision fw-bold">
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




                <div class="row p-2">


                    <a href="Edicion.php?ID=<?php echo $row["ID_Empleado"]; ?>" class="btn btn-success" role="button"><i
                            class="bi bi-server fs-4 me-2"></i>Modificar
                        los datos del empleado
                        en la DB</a>

                </div>




            </div>
        </div>

        <?php }} ?>
    </div>

    </div>


    <?php
include_once '../Includes/Logos-footer.php';
include_once '../Includes/FooterAdmin.php';
?>

    <!-- bosttrap -->
    <script src="../js/bootstrap.min.js" lang="javascript" type="text/javascript"></script>
    <!-- poppers -->
    <script src="../js/popper.min.js" lang="javascript" type="text/javascript"></script>








</body>

</html>