<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Login | Usuarioweb</title>

    <!-- page css -->
    <link href="../dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

    <!-- css login spt -->
    <link href="../dist/css/style_usuarioweb.css" rel="stylesheet">
    <link href="../dist/css/pages/floating-label.css" rel="stylesheet">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!--  <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-color:white;">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="index.html">
                        <img src="../../assets/images/spt/usuarioweb/img_login.png" class="img-fluid" alt="">
                        <center>
                            <h3>Iniciar Sesion</h3>
                        </center>


                        <div class="form-group ">
                            <div class="col-xs-12">
                                <select class="form-control">
                                    <option value="">1. Seleccione el tipo de documento</option>
                                    <option value="1">CC - Cedula de ciudadania</option>
                                    <option value="2">TI - Tarjeta de Identidad</option>
                                    <option value="3">RC - Registro Civil</option>
                                    <option value="13">PA - Pasaporte</option>
                                    <option value="12">CE - Cedula de Extranjeria</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="required" placeholder="2. Ingrese el número de documento"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="required" placeholder="3. Ingrese su contraseña"> </div>
                        </div>

                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Ingresar</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">

                                    <div class="form-group m-b-0">
                                        <div class="col-sm-12 text-center">
                                            <a href="registro.php" class="text-info m-l-5"><b>Crea tu cuenta aqui!</b></a>
                                        </div>
                                    </div>

                                    <div class="ml-auto">
                                        <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i>Olvidaste la contraseña?</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">


                                </div>
                            </div>
                        </div>

                    </form>
                    <form class="form-horizontal" id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <img src="../../assets/images/spt/usuarioweb/recuperar_c.png " class="img-fluid " alt="">
                                <br>
                                <p style="text-align:  justify;">
                                    <small>
                                        ¡Hola! <br>
                                        Si olvidaste tu contraseña, ingresa la dirección de correo electrónico con la cual te registraste y te enviaremos un email con instrucciones para la asignacion de una nueva
                                    </small>

                                </p>

                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="mail" required="required" placeholder="1. Ingresa tu Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block  btn-rounded  waves-effect waves-light" type="submit"><i class=" far fa-paper-plane"></i> Enviar email de recuperacion</button>

                            </div>
                        </div>
                        <br>
                        <button class="btn btn-info btn-lg btn-block  btn-rounded  waves-effect waves-light">Volver a login</button>
                        <br>
                        <br>
                        <p style="text-align:  justify;">Nota: <br>
                            <small>
                                Recuerda, si no recuerdas tu direccion de email o tienes problemas para acceder a ella, puedes acercarte a las oficinas de tu IPS con tu documento de identificación y solicitar el cambio a una nueva.
                            </small>
                        </p>
                        <br>
                        <br>


                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <img src="../../assets/images/spt/usuarioweb/logo_spt.png" class="img-fluid " width="200" alt="">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/node_modules/popper/popper.min.js"></script>
    <script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <script src="../dist/js/pages/jasny-bootstrap.js"></script>







    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>

</body>

</html>