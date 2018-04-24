<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>gràcies per contactar-</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/css-thanks.min.css" rel="stylesheet" media="screen">

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

    </head>

    <body>

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-image:url('images/VILAFRANCA IV Imagen Interior Nocturna Low.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center">

                        <!-- /.logo -->
                        <div class="logo" style="margin-top: 50px"><img src="images/logo_bormujos.png" alt="logo"></div>

                        <!-- /.main title -->
                        <h2 style="margin-bottom: 50px">
                            gràcies per contactar-
                        </h2>
                        
                        <div class="row">
                            <div class="col text-center">
                                <i class="pe-7s-mail" style="font-size: 70px"></i>
                                <p>
                                    aviat d'respondrem
                                </p>
                                <div class="btn-section"><a href="index.html" class="btn-default">tornar</a></div>
        
                            </div>
                </div>
                    </div>
                </div> 
            </div> 
        </div>
        
        <?php

    // Envío info a cliente
    $correo_destinatario = $_POST['email'];
    $nombre_destinatario = $_POST['nombre'];
    $phone = $_POST['phone'];
    $nombre_remitente = "Lux de Villa Franca";
    $correo_remitente = "carolrodriguez.torres@gmail.com";
    $asunto = "Email de agradecimiento";
    $mensaje = "<h1>Hola, $nombre_destinatario</h1>

                <p>Gracias por ponerte en contacto con nosotros. Hemos recibido tu solicitud correctamente, en breve nos pondremos en contacto contigo.<br>
                
                Adjunto a este email encontrarás la información solicitada.<br>
                
                Muchas gracias por tu interés.</p> <br>

                <h2>Folleto: <a href='https://raw.githubusercontent.com/DiegoSebastian/LandingPage-Bilbao/master/Folleto-Gaztelondo-Berria-con-fotos-piloto_WEB.pdf'> Descargar </a></h2>
                <a href='https://raw.githubusercontent.com/DiegoSebastian/LandingPage-Bilbao/master/Folleto-Gaztelondo-Berria-con-fotos-piloto_WEB.pdf'><img src='https://github.com/DiegoSebastian/LandingPage-Bilbao/blob/master/images/preview-folleto.jpg?raw=true' /></a>      ";
    $mensajeCliente = "Datos del cliente: <br> 
                        Nombre: $nombre_destinatario <br> 
                        Email: $correo_destinatario <br> 
                        Número telefónico: $phone <br>
                        Mensaje: " . $_POST['mensaje'];
    
    $headers = "From: ".$nombre_remitente."\r\n"."Reply-To: ".$correo_remitente."\r\n"."X-Mailer: PHP/".phpversion();
    function mailutf8($correo_destinatario, $asunto = "(Sin Asunto)", $mensaje="", $header=""){
        $header_on = "MIME-Version: 1.0"."\r\n"."Content-type: text/html; charset=UTF-8"."\r\n";
        if(mail($correo_destinatario, "=?UTF-8?B?".base64_encode($asunto)."?=", $mensaje, $header_on.$header)){
            echo "Mensaje enviado";
        } else {
            echo "Error en el envío";
        }
    }
    mailutf8($correo_destinatario, $asunto , $mensaje, $headers);
    sleep(5);
    mailutf8($correo_remitente, 'Email de Landing page Lux de Villa Franca' , $mensajeCliente ,"From: ".$_POST['nombre']."\r\n"."Reply-To: ".$correo_destinatario ."\r\n"."X-Mailer: PHP/".phpversion());
    
?>

        <!-- /.javascript files -->
        <script src="js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>