<?php

session_start();

if (!isset($_SESSION['rol'])) {
    header('location: ../Index.php');
} else {
    if ($_SESSION['rol'] != 5) {
        header('location: ../Index.php');
    }
}
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo Materialiiiii</title>


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
include '../Includes/HeaderMonitoreo.php'
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
                                <a class="nav-link active" href="Alta_Empleados.php">Monitoreo Envio Materiales TUDN</a>
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
                        Archivos.
                    </div>
                    <div class="card-body p-2">

                        <div class="row row-cols-2 p-3 justify-content-center">




                        </div>

                        <?php

class ObtieneMails
{

    //usuario de gmail, email a donde deseamos conectarnos
    public $user = "notificacionesarchivo051@gmail.com";
    //password de nuestro email
    public $password = "fjlcuzzwzwrrmnfc";
    //inforrmación necesaria para conectarnos al INBOX de gmail,
    //incluye el servidor, el puerto 993 que es para imap, e indicamos que no valide con ssl
    public $mailbox = "{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX";

    //metodo que realiza todo el trabajo
    public function obtenerAsuntosDelMails()
    {

        //conexión por medio de nuestras credenciales
        $inbox = imap_open($this->mailbox, $this->user, $this->password) or die('Cannot connect to Gmail: ' . imap_last_error());

        //HACE LA BUSQUEDA POR EL CRITERIO INDICADO EN EL ASUNTO
        $search_string = "FileCatalyst TUDN Transfer Notification";

        // LA FECHA A MOSTRAR TOMA EL DIA QUE ESTA CORRIENDO Y RESTA UN DIA PARA MOSTRAR LOS DOS ULTIMOS DIAS
        $busquedaDate = date("d-M-Y", strToTime("-1 days"));

        // SE ARMA EL CRITERIO DE BUSQUEDA CON EL ASUNTO Y DESDE QUE FECHA
        $emails = imap_search($inbox, 'SUBJECT "' . $search_string . '" SINCE "' . $busquedaDate . '"');

        //comprbamos si existen mails con el la busqueda otorgada
        if ($emails) {
            //ordena los correos LOS MAS RECIENTES AL COMIENZO
            rsort($emails);
            //ahora recorremos los mails
            foreach ($emails as $email_number) {
                //leemos las cabeceras de mail por mail enviando el inbox de nuestra conexión
                //enviando el identificdor del mail
                $overview = imap_fetch_overview($inbox, $email_number);
                $message  = imap_fetchbody($inbox, $email_number, 1);

                //condiciona si el cuerpo del correo contiene la palabra COMPLETE que es la que tiene la lista de materiales
                if (strpos($message, 'COMPLETE')) {
                    //EXTRAE TODAS LAS COINCIDENCIAS QUE TENGAN LA PALABRA COMPLETE DE TODOS LOS CUERPOS DE CORREO
                    $whatIWant = substr($message, strpos($message, 'COMPLETE'));

                    foreach ($overview as $dato) {
                        //SE ESTABLECE LA ZONA HORARIA DE MEXICO
                        date_default_timezone_set('America/Mexico_City');
                        // SE ESTABLECE EL FORMATO EN ESPANOL
                        setlocale(LC_TIME, "spanish");

                        $Nueva_Fecha = date("d-m-Y H:i:s", strtotime($dato->date));
                        $fecha       = strftime("%A, %d %h %Y %T", strtotime($Nueva_Fecha));

                    }
                    // FUNSION PARA SEPARAR LAS LINEAS DE LOS MATERIALES Y MOSTRARLAS
                    $array2 = explode(chr(10), $whatIWant);

                    foreach ($array2 as $arr) {

                        if ($arr) {

                            ?>

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-1 me-auto">
                                <div class="fw-bold "><?php echo ($arr) ?></div>
                                <div class="text-secondary"><?php echo utf8_encode($fecha) ?></div>
                            </div>
                            <span class="badge bg-success rounded-pill"> COMPLETE </span>

                            <?php

                        }

                    }

                }

            }
        }

    }

}

//creamos el objeto
$oObtieneMails = new ObtieneMails();

//ejecutamos el metodo
$oObtieneMails->obtenerAsuntosDelMails();

?>







                    </div>

                </div>


            </div>
        </div>

    </div>






    <!-- logos footer -->
    <?php
include_once '../Includes/Logos-footer.php';
include_once '../Includes/FooterMonitoreo.php';

?>



</body>

</html>