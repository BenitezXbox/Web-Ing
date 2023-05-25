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
    <title>Altas Empleados / Admin</title>

    <!-- Css bostrap  -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />

    <!-- ESTILOS LOCALES -->
    <link rel="stylesheet" type="text/css" href="../Css/Site.css" />

    <!-- CSS ICONOS BOOTSTRAP -->
    <link rel="stylesheet" href="../font/bootstrap-icons.css" />

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />

</head>


<body>

    <?php
// header
include '../includes/HeaderAdmin.php';
?>

    <!-- NAV BAR -->
    <div class="container-fluid bg-light border-bottom">

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
                        data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="Home.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Alta_Empleados.php">Alta de
                                    empleados</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Consultas.php">Consulta de empleados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Documentos.php">Documentos</a>
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

    <div class="container-xxl">

        <form action="../Admin/Procesos/Insertar.php" method="post" class="needs-validation" novalidate>

            <div class="row">

                <!-- Altas -->
                <div class="col">


                    <!-- SECCION ALTAS IDENTIFICADORES GENERALES-->
                    <div class="card mb-3 mt-4">
                        <div class="card-header text-univision fw-bold  p-1">
                            <i class="bi bi-input-cursor-text fs-3 m-1 ps-3"></i>

                            Identificadores Generales.
                        </div>

                        <div class="card-body">

                            <div class="row row-cols-1 row-cols-lg-4">


                                <!-- NOMBRE -->
                                <div class="col">
                                    <label for="validationCustom01" class="form-label">Nombre.</label>
                                    <input type="text" class="form-control" name="Nombre" required>
                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>

                                <!-- NO. EMPLEADO -->
                                <div class="col">
                                    <label for="validationCustom02" class="form-label">No. Empleado.</label>
                                    <input type="text" class="form-control" id="No_Empleado" name="No_Empleado"
                                        required>
                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- PUESTO -->
                                <div class="col">
                                    <label for="validationCustom03" class="form-label">Puesto.</label>
                                    <input type="text" class="form-control" name="Puesto" required>
                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>

                                <!-- FUNCIONES DEL PUESTO -->
                                <div class="col">
                                    <label for="validationCustom04" class="form-label">Funciones Principales Del
                                        Puesto.</label>
                                    <textarea style="height: 60px" class="form-control" name="Funciones_Puesto"
                                        required></textarea>
                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>

                                <!-- FECHA DE ANTIGUEDAD -->
                                <div class="col">
                                    <label for="validationCustom05" class="form-label">Fecha De Antigüedad.</label>
                                    <input type="text" class="form-control" name="Fecha_Antiguedad" required>
                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>

                                <!-- TIEMPO EN EL PUESTO -->
                                <div class="col">
                                    <label for="validationCustom06" class="form-label">Tiempo En El Puesto.</label>
                                    <input type="text" class="form-control" name="Tiempo_Puesto" required>
                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>
                                <!-- EDAD -->
                                <div class="col">
                                    <label for="validationCustom07" class="form-label">Edad.</label>
                                    <input type="text" class="form-control" name="Edad" required>
                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>



                            </div>

                        </div>

                    </div>




                    <!-- SECCION ALTAS CONOCIMIENTOS-->
                    <div class="card mb-3">
                        <div class="card-header text-univision fw-bold  p-1">
                            <i class="bi bi-input-cursor-text fs-3 m-1 ps-3"></i>
                            Conocimientos.
                        </div>

                        <div class="card-body">

                            <div class="row row-cols-1 row-cols-lg-4">

                                <!-- ESTUDIOS -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Ultimo Grado De Estudios.</label>
                                    <input type="text" class="form-control" name="Estudios" required>
                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- IDIOMAS -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Idiomas(Nivel de dominio en
                                        %).</label>
                                    <textarea style="height: 60px" class="form-control" name="Idiomas" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="hablado, escuchado, escrito, leído"></textarea>

                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- CERTIFICACIONES -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Certificaciones.</label>

                                    <textarea style="height: 60px" class="form-control" name="Certificaciones" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Si, menciona cuales."></textarea>

                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- CURSOS -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Cursos Técnicos y/o
                                        Diplomados.</label>

                                    <textarea style="height: 60px" class="form-control" name="Cursos" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Si, menciona cuales."></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- SOFTWARE -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Software Específicos.</label>

                                    <textarea style="height: 60px" class="form-control" name="Software" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Menciona cuales."></textarea>

                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- EQUIPOS -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Equipos Específicos.</label>
                                    <textarea style="height: 60px" class="form-control" name="Equipos" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Menciona cuales."></textarea>

                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>

                                <!-- FORTALEZAS -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Fortalezas.</label>
                                    <textarea style="height: 60px" class="form-control" name="Fortalezas" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Menciona cuales son tus fortalezas."></textarea>
                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- INTERESES -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Intereses.</label>
                                    <textarea style="height: 60px" class="form-control" name="Intereses" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Menciona cuales son tus intereses."></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- AREAS -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Áreas.</label>
                                    <textarea style="height: 60px" class="form-control" name="Areas" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Si, menciona cuales."></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>



                            </div>


                        </div>

                    </div>




                    <!-- SECCION ALTAS COMPETENCIAS TECNICAS-->
                    <div class="card mb-3">
                        <div class="card-header text-univision fw-bold  p-1">
                            <i class="bi bi-input-cursor-text fs-3 m-1 ps-3"></i>
                            Competencias Técnicas.
                        </div>

                        <div class="card-body">

                            <div class="row row-cols-1 row-cols-lg-4">


                                <!-- CONOCIMIENTOS PM -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Conocimientos de PM.</label>
                                    <textarea style="height: 60px" class="form-control" name="Conocimientos_PM" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Tienes conocimientos de administracion de proyectos?"></textarea>

                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- CONOCIMIENTOS Y FORTALEZAS TEXNICAS -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Conocimientos y
                                        Fortalezas Técnicas.</label>
                                    <textarea style="height: 60px" class="form-control" name="Conocimientos_F" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Que conocimientos y fortalezas técnicas tienes (ejemplo edición, sistemas operativos, software de programación, bases de datos) cual?"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- FLUJOS DE TRANBAJO  -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Flujos De Trabajo.</label>
                                    <textarea style="height: 60px" class="form-control" name="Flujos_T" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Has implementado flujos de trabajo, procesos y procedimientos? Si, cuales?"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- eXPERIENCIA EN LA NUB  -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Experiencia Nube.</label>
                                    <textarea style="height: 60px" class="form-control" name="Experiencia_Nube" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Si, cuales y da un %"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>



                            </div>

                        </div>

                    </div>



                    <!-- SECCION ALTAS COMPETENCIAS HUMANO ADMINISTRATIVAS-->
                    <div class="card mb-3">
                        <div class="card-header text-univision fw-bold  p-1">
                            <i class="bi bi-input-cursor-text fs-3 m-1 ps-3"></i>
                            Competencias Humano-Administrativas.
                        </div>

                        <div class="card-body">

                            <div class="row row-cols-1 row-cols-lg-4">


                                <!-- NECESIDAD DE LOGRO  -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Necesidad de logro.</label>
                                    <textarea style="height: 60px" class="form-control" name="Logro" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Tendencia a trabajar para alcanzar metas"></textarea>



                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- RIENTACION A RESULTADOS. -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Orientación a Resultados.</label>
                                    <textarea style="height: 60px" class="form-control" name="Orientacion_R" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Utilizar métodos de medición para seguimiento al cumplimiento de metas"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- CREATIVIDAD -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Credibilidad.</label>

                                    <textarea style="height: 60px" class="form-control" name="Creatividad" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Coherencia entre las palabras y los actos"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>



                                <!-- PERSISTENCIA -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Persistencia.</label>

                                    <textarea style="height: 60px" class="form-control" name="Persistencia" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Tendencia al logro de metas a pesar de obstáculos"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>



                                <!-- ENFOQUE -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Enfoque En el Cliente.</label>
                                    <textarea style="height: 60px" class="form-control" name="Enfoque" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Actitud de servicio"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>



                                <!-- TRABAJO EN EQUIPO -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label"> Trabajo Equipo.</label>
                                    <textarea style="height: 60px" class="form-control" name="Trabajo_Equipo" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Promover relaciones colaborativas entre grupos de trabajo"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>



                            </div>

                        </div>

                    </div>


                    <!-- SECCION ALTAS COVID-->
                    <div class="card mb-3">
                        <div class="card-header text-univision fw-bold  p-1">
                            <i class="bi bi-input-cursor-text fs-3 m-1 ps-3"></i>
                            Vacunación COVID.
                        </div>

                        <div class="card-body">

                            <div class="row row-cols-1 row-cols-lg-4">


                                <!-- ALCALDÍA O MUNICIPIO  -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Alcaldía o Municipio.</label>
                                    <textarea style="height: 60px" class="form-control" name="Alcaldia" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Alcandía o Municipio"></textarea>



                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- FECHA DE 1a DOSIS. -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Marca y fecha 1a dosis</label>
                                    <textarea style="height: 60px" class="form-control" name="Primera_Dosis" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Marca y fecha 1a dosis"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>


                                <!-- FECHA DE 2a DOSIS. -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Marca y fecha 2a dosis</label>

                                    <textarea style="height: 60px" class="form-control" name="Segunda_Dosis" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Marca y fecha 2a dosis"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>



                                <!-- FECHA DE 3a DOSIS. -->
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Marca y fecha 3a dosis</label>

                                    <textarea style="height: 60px" class="form-control" name="Tercera_Dosis" required
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Marca y fecha 2a dosis"></textarea>


                                    <div class="invalid-feedback">
                                        Campo Obligatorio!
                                    </div>
                                </div>




                            </div>

                        </div>

                    </div>


                </div>
            </div>

            <div class="row m-1">

                <button class="btn btn-primary btn-lg" type="submit" name="btn1"> <i
                        class="bi bi-server fs-3 me-2"></i>Agregar
                    los datos del
                    empleado a la
                    DB</button>
            </div>
        </form>

    </div>



    <!-- poppers -->
    <script src="../js/popper.min.js" lang="javascript" type="text/javascript"></script>

    <!-- bosttrap -->
    <script src="../js/bootstrap.min.js" lang="javascript" type="text/javascript"></script>

    <!--    VALIDACION -->
    <script src="../js/Validation.js"></script>

    <!-- validacion -->
    <script src="../js/bootstrap-validate.js"></script>


    <script>
    bootstrapValidate('#No_Empleado', 'numeric:Solo Numeros!');
    </script>

    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>


    <?php
include_once '../Includes/Logos-footer.php';
include_once '../Includes/FooterAdmin.php';

?>




</body>

</html>