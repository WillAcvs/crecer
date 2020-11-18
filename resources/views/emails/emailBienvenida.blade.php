<!--Plantilla de email de Bienvenida -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


    <!-- Custom and plugin javascript -->

    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- blueimp gallery -->
    <script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/plugins/blueimp/css/blueimp-gallery.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('landing/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">

</head>

<body>
 
<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="content-wrap">
                            <table  cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <img class="img-fluid" src="{{asset('img/perfil/headermail.jpg')}}"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h1>{{$titulo}}</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h2>Estimad@ {{$user->nombre}} hemos recibido tu aportación y el pago de tu suscripción por lo que hemos Activado tu cuenta</h2> 
                                        <h2>A partir de este momento ya eres parte del Sistema de Creando Certezas, te invitamos a capacitarte para poder obtener los resultados que tanto haz deseado</h2>
                                        <p>Te recordamos Tus datos de acceso:</p>
                                        <p>email registrado: {{$user->email}}.</p>
                                        <p>Contraseña Temporal: cambiame1234</p> <br>
                                        <p>Estatus de tu Cuenta: <h3>{{$mensaje}}</h3></p>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h2>No te olvides de completar tu Perfil con todos tus datos para no tener algún inconveniente en tu camino!!!</h2>
                                        <h3>Tu camino al éxito a Comenzado!!</h3> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block aligncenter">
                                    <img class="img-fluid" src="{{asset('img/perfil/footmail.jpg')}}"/>
                                    </td>
                                </tr>
                              </table>
                        </td>
                    </tr>
                </table>
                <div class="footer">
                    <table width="100%">
                        <tr>
                            <td class="aligncenter content-block">Visita nuestro sitio <a href="#">Creandocertezas.com</a></td>
                        </tr>
                    </table>
                </div></div>
        </td>
        <td></td>
    </tr>
</table> 

</body>
</html> 