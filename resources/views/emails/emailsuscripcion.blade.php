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
                                        <h2>Tu Suscripción ha ha Vencido</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h2>Estimad@ {{$user->nombre}}</h2> 
                                        <h2>Te recordamos que para continuar con los beneficios de Creando Certezas es necesario contar con la cuenta activa cumpliendo con la suscripción Mensual</h2>
                                        <p>El importe de tu suscripción es de: {{$user->pago}}.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <h3>Banco: Inbursa</h3> 
                                        <h3>Nombre: Creando Certezas S. de R.L. de C.V.</h3>
                                        <h3>No. de Cuenta: 50057122366</h3>
                                        <h3>CLABE Interbancaria: 036068500571223660</h3>
                                        <h3>No. de Tarjeta: 4004 4305 0014 0196</h3><br>
                                        
                                        <h2>No olvides enviar tu comprobante al correo: creandocertezas@gmail.com para activar tu cuenta</h2>
                                        <h3>Sigue cosechando el fruto de tu esfuerzo!!</h3> 
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