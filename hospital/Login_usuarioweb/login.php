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
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/spt/favicon.png">
    <title>UsuarioWeb | Login</title>

    <!-- page css -->
    <link href="../dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- Custom CSS Saludparatodos -->
    <link href="../dist/css/style_spt_general.css" rel="stylesheet">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries 
        -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"></p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../../assets/images/spt/f_inicio6.jpg);">
        <div class="login-box card">
            <div class="card-body" id="login">
                <form class="form-horizontal form-material text-center" id="loginform" action="index.html">


                    <form class="form-horizontal form-material text-center" id="loginform" action="index.html">


                        <a href="javascript:void(0)" class="db">

                        <img src="../../assets/images/spt/ips/cajasan_nuevo .png" alt="" class="img-fluid" style="width:35%">
                        </a>
                        <br>
                        <h3>Agendamiento virtual</h3>
                <hr>
             
                        <div class="form-group m-t-40">
                            <select class="form-control">
                                <option value="">Tipo de Documento</option>
                                <option value="1">CC - Cedula de ciudadania</option>
                                <option value="2">TI - Tarjeta de Identidad</option>
                                <option value="3">RC - Registro Civil</option>
                                <option value="13">PA - Pasaporte</option>
                                <option value="12">CE - Cedula de Extranjeria</option>
                            </select>
                        </div>
                        <div class="form-group m-t-40">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder=" Numero de Documento">
                            </div>
                        </div>
                        <div class="form-group m-t-40">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Contraseña">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Recuerdame</label>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> <strong> Olvide mi contraseña</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Ingresar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">

                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                No tienes usuario ? <a href="register.php" class="text-primary m-l-5"><b><i class="far fa-user-circle"></i><strong> Registrate aqui!!</strong></b></a>
                            </div>
                            <br>
                            <br>
                        </div>


                        <!--  -->
                        <div class="row">
                            <!-- Column -->


                            <div class="col-md-12 col-lg-12 col-xlg-2">
                                <div class="card">
                                    <div class="text-center">
                                    <img src="../../assets/images/spt/logospt_negra.png" width="200" alt="Home" class="img-fluid" />
                                   
                                        <br>
                                        <h5>Gestion virtual de servicios de salud</h5>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-12 col-lg-12 col-xlg-2">
                                <div class="card">
                                    <div class=" text-center">
                                    <h6 class="text-black"> <strong>Descarga nuestra App !!</strong></h6>
                                  
                                        <a href="https://play.google.com/store/apps/details?id=appinventor.ai_bitdatamanagements.saludparatodos" target="_blank"> <img src="../../assets/images/spt/googleplay.png" alt="" class="img-fluid" style="width:25%"></a>
                                        <img src="../../assets/images/spt/appstore.png" alt="" class="img-fluid" style="width:25%">
                                     
                                    </div>
                                </div>
                            </div>


                            <!-- Column -->
                         



                        </div>



                        <!--  -->


                    </form>
                    <form class="form-horizontal" id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recuperar Contraseña</h3>
                                <p class="text-muted">Ingresa tus datos y enviaremos un Email con instrucciones para su recuperacion! </p>
                            </div>
                            <div class="col-12" id=contrasena>
                                <img src="../../assets/images/spt/candado.png" class="img-responsive">
                            </div>

                        </div>
                        <div class="form-group ">

                            <br>
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Numero de Documento">
                            </div>
                            <br>
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Enviar Email</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/node_modules/popper/popper.min.js"></script>
    <script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

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