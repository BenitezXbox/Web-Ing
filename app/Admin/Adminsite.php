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

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Site</title>

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
include '../includes/headerAdmin.php'
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
                                <a class="nav-link" href="Alta_Empleados.php">Alta Empleados</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Consultas.php">Consulta
                                    Empleados</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Documentos.php">Documentos</a>
                            </li>


                            <a class="nav-link active" href="Adminsite.php">Administrar Sitio</a>
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

        <!-- SECCION resultado de consulta -->
        <div class="row row-col-4 pt-3">

            <div class="col">


                <!-- Status DB -->
                <div class="card mb-3 mt-3">
                    <div class="card-header text-univision fw-bold bi bi-server">
                        Base de datos.
                    </div>
                    <div class="card-body p-2">

                        <div class="row row-cols-2 p-3 justify-content-center">


                            <?php

include '../ConexionDB/Abrir_Conexion.php';
$Resultados        = mysqli_query($conexion, "SELECT ID FROM $tabla_db2");
$ResultadoUsuarios = mysqli_num_rows($Resultados);
?>
                            <!-- usuarios registrados -->
                            <div class="col col-5 col-lg-2 m-2 p-2 shadow border border-danger rounded-3">
                                <p class="d-flex justify-content-between">Usuarios</p>
                                <div class="d-flex justify-content-center">
                                    <h1 class="d-flex justify-content-center"><?php echo $ResultadoUsuarios; ?></h1>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <p class="d-flex justify-content-center">Usuarios registrados</passthru>
                                </div>
                            </div>
                            <?php

include '../ConexionDB/Abrir_Conexion.php';
$Resultados     = mysqli_query($conexion, "SELECT ID FROM $tabla_db4");
$ResultadoRoles = mysqli_num_rows($Resultados);
?>
                            <!-- roles -->
                            <div class="col col-5 col-lg-2 m-2 p-2 shadow border border-danger rounded-3">
                                <p class="d-flex justify-content-between">Roles</p>
                                <div class="d-flex justify-content-center">
                                    <h1 class="d-flex justify-content-center"><?php echo $ResultadoRoles; ?></h1>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <p class="d-flex justify-content-center">Actuales</passthru>
                                </div>
                            </div>
                            <?php

include '../ConexionDB/Abrir_Conexion.php';
$Resultados             = mysqli_query($conexion, "SELECT ID FROM $tabla_db3");
$ResultadoDepartamentos = mysqli_num_rows($Resultados);
?>

                            <!-- departamentos -->
                            <div class="col col-5 col-lg-2 m-2 p-2 shadow border border-danger rounded-3">
                                <p class="d-flex justify-content-between">Departamentos</p>
                                <div class="d-flex justify-content-center">
                                    <h1 class="d-flex justify-content-center"><?php echo $ResultadoDepartamentos; ?>
                                    </h1>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <p class="d-flex justify-content-between">Dep, que reportan</p>
                                </div>
                            </div>

                            <?php

include '../ConexionDB/Abrir_Conexion.php';
$Resultados            = mysqli_query($conexion, "SELECT ID_Empleado FROM $tabla_db1");
$ResultadoRegEmpleados = mysqli_num_rows($Resultados);
?>

                            <!-- Empleados -->
                            <div class="col col-5 col-lg-2 m-2 p-2 shadow border border-danger rounded-3">
                                <p class="d-flex justify-content-between">Empleados</p>
                                <div class="d-flex justify-content-center">
                                    <h1 class="d-flex justify-content-center"><?php echo $ResultadoRegEmpleados; ?>
                                    </h1>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <p class="d-flex justify-content-between">Registros Empleados</p>
                                </div>
                            </div>


                        </div>



                        <div class="row row-col-4 pt-3">

                            <div class="col">


                                <!-- roles asignar card. -->
                                <div class="card mb-3 mt-3">
                                    <div class="card-header text-univision fw-bold bi bi-person-badge">
                                        Asignar Rol a usuario.
                                    </div>
                                    <div class="card-body p-2">



                                        <?php

// usuarios
include '../ConexionDB/Abrir_Conexion.php';
$Resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db2 ORDER BY NOMBRE ASC");

while ($row = $Resultados->fetch_assoc()) {

    ?>

                                        <div class="row row-cols-2   justify-content-center">

                                            <!-- Nombre -->
                                            <div class="col-3 col-ms-6 mt-2">

                                                <input type="text" class="form-control text-success"
                                                    value='<?php echo $row["Nombre"]; ?>'>
                                            </div>

                                            <!-- User Name -->
                                            <div class="col-3 mt-2">

                                                <input type="text" class="form-control text-success"
                                                    value='<?php echo $row["UserName"]; ?>'>
                                            </div>




                                            <!-- Rol -->
                                            <div class="col-3 mt-2">

                                                <form id="form<?php echo $row["ID"]; ?>"
                                                    action="./Procesos/Procesar_Usuarios.php" method="POST">

                                                    <select class="form-select  mb-3" id="<?php echo $row["ID"]; ?>"
                                                        name="Actualiza_Usuario" onchange="CambiaRol(this)">

                                                        <?php

    include '../ConexionDB/Abrir_Conexion.php';
    $ResultadosRol = mysqli_query($conexion, "SELECT * FROM $tabla_db4");
    while ($rowrol = $ResultadosRol->fetch_assoc()) {
        ?>




                                                        <option value="<?php echo $rowrol["ID"]; ?>">
                                                            <?php echo $rowrol["Rol"]; ?>
                                                        </option>




                                                        <script>
                                                        var valueToSetRol1 = "<?php echo $row["Rol_ID"]; ?>";
                                                        var selectRol1 = document.getElementById(
                                                            '<?php echo $row["ID"]; ?>');
                                                        setSelectedValueIndexNews(selectRol1, valueToSetRol1);

                                                        function setSelectedValueIndexNews(selectObj,
                                                            valueToSet) {
                                                            for (var i = 0; i < selectObj.options.length; i++) {
                                                                if (selectObj.options[i].value == valueToSet) {
                                                                    selectObj.options[i].selected = true;

                                                                }
                                                            }
                                                        }
                                                        </script>



                                                        <?php } ?>

                                                    </select>

                                                    <input class="form-control form-control-sm visually-hidden"
                                                        type="text" name="ID_Usuario" value='<?php echo $row["ID"]; ?>'>
                                            </div>


                                            <div class="col-2 mt-2 ">



                                                <input type="hidden" name="IDUsuario" value='<?php echo $row["ID"]; ?>'>

                                                <button class="btn  btn-danger btn-md" type="submit" name="Eliminar"><i
                                                        class="bi bi-person-x-fill fs-5 me-2"
                                                        value="eliminar"></i>Eliminar</button>

                                            </div>



                                            </form>


                                        </div>



                                        <?php }
; ?>






                                    </div>

                                </div>


                            </div>
                        </div>







                    </div>

                </div>


            </div>
        </div>

    </div>




    <script>
    function CambiaRol(e) {
        var id = "form" + e.id;
        var formulario = document.getElementById(id);
        formulario.submit();
    }
    </script>






    <!-- logos footer -->
    <?php
include_once '../Includes/Logos-footer.php';
include_once '../Includes/FooterAdmin.php';

?>



</body>

</html>