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
    <title>Registro | Usuarioweb</title>

    <!-- page css -->
    <link href="../dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

    <!-- css login spt -->
    <link href="../dist/css/style_usuarioweb.css" rel="stylesheet">
    <!-- float label -->
    <link href="../dist/css/pages/floating-label.css" rel="stylesheet">
    <link href="../dist/css/pages/other-pages.css" rel="stylesheet">
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

                        <img src="../../assets/images/spt/usuarioweb/validacion.png" class="img-fluid" alt="">


                        <br>

                        <br>
                        <h5> <strong>Antes de comenzar el registro debemos validar si cuentas con servicios activos en esta IPS </strong></h5>
                        <hr>
                        <h6> <strong>Ingresa los datos solicitados y presiona validar para consultar y continuar con el registro</strong></h6>
                        <br>
                        
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <select class="form-control">
                                    <option value="">1. Selecciona tu tipo de documento </option>
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
                                <input class="form-control" type="text" required="required" placeholder="2. Ingresa el número del documento"> </div>
                        </div>


                        <div class="form-group text-center">
                            <div class="ml-auto">
                                <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-check m-r-5"></i>Validar</a>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <img src="../../assets/images/spt/usuarioweb/logo_spt.png" class="img-fluid " width="200" alt="">
                                </div>
                            </div>
                        </div>

                    </form>



                    <!-- ''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' -->
                    <form class="form-horizontal floating-labels " id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">

                                <img src="../../assets/images/spt/usuarioweb/registro.png " class="img-fluid " alt="">
                                <br>
                            </div>
                        </div>
<!--  -->

                        <div class="alert alert-success alert-rounded"><i class="fas fa-check"></i> La validacion ha sido exitosa!!! </div>

<!--  -->
                
                        <br>
                        <p> <strong>Continua con el registro ingresando tus datos personales</strong></p>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group has-success m-b-40">
                                    <input type="text" class="form-control" id="input1" required="required"><span class="bar"></span>
                                    <label for="input1">Primer nombre</label>
                                </div>
                                <div class="form-group has-success m-b-40">
                                    <input type="text" class="form-control" id="input3" required="required"><span class="bar"></span>
                                    <label for="input3">Primer apellido</label>
                                </div>
                                <div class="form-group has-success m-b-40">
                                    <input type="date" class="form-control" id="input5" required="required"><span class="bar"></span>

                                    <label for="input5">Fecha de nacimiento</label>
                                </div>
                                <div class="form-group has-success m-b-40">
                                    <input type="email" class="form-control" id="input7" required="required"><span class="bar"></span>
                                    <label for="input7">Correo electronico</label>
                                </div>
                                <div class="form-group has-success m-b-40">
                                    <input type="number" class="form-control" id="input9" required="required"><span class="bar" required="required"></span>
                                    <label for="input9">Celular</label>
                                </div>
                                <div class="form-group has-success m-b-40">
                                    <select class="form-control" required="required">
                                        <option value=""></option>
                                        <option value="1">Clinica 1</option>
                                        <option value="2">Centro de salud</option>
                                        <option value="3">consultorio medico</option>

                                    </select><span class="bar"></span>
                                    <label for="input11">Ips de preferencia</label>
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="form-group has-success m-b-40">
                                    <input type="text" class="form-control" id="input2"><span class="bar"></span>
                                    <label for="input2">Segundo nombre</label>
                                </div>
                                <div class="form-group has-success m-b-40">
                                    <input type="text" class="form-control" id="input4"><span class="bar"></span>
                                    <label for="input4">Segundo apellido</label>
                                </div>
                                <div class="form-group has-success m-b-40">
                                    <select class="form-control" required="required">
                                        <option value=""></option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                        <option value="3">LGTBI</option>

                                    </select><span class="bar"></span>
                                    <label for="input6">Sexo</label>
                                </div>
                                <div class="form-group has-success m-b-40">
                                    <input type="email" class="form-control" id="input8" required="required"><span class="bar"></span>
                                    <label for="input8">Confirmar correo electronico</label>
                                </div>
                                <div class="form-group has-success m-b-40">
                                    <select class="form-control" required="required">
                                        <option value=""></option>
                                        <option value="1">Barrancabermeja</option>
                                        <option value="2">Bucaramanga</option>
                                        <option value="3">Bogota</option>

                                    </select><span class="bar"></span>
                                    <label for="input10">Ciudad</label>
                                </div>
                                <div class="form-group has-success m-b-40">
                                    <input type="text" class="form-control" id="input12" required="required"><span class="bar"></span>
                                    <label for="input12">Direccion</label>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <p> <strong><i class="fas fa-key"></i> Asigna tu contraseña</strong></p>
                         
                        </div>
                      
                        <div class="row">
                            <p style="text-align:justify"><i class="icon-support"></i> Se requieren minimo 8 y maximo 16 caracteres alfanumericos <strong> (letras y numeros)</strong>, y no se admiten signos de puntuacion espacios o caracteres especiales</p>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group has-danger m-b-40">
                                    <input type="password" class="form-control" id="input9" required="required"><span class="bar"></span>
                                    <label for="input9">Contraseña</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group has-danger m-b-40">
                                    <input type="password" class="form-control" id="input10" required="required"><span class="bar"></span>
                                    <label for="input1">Repetir Contraseña</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                                            <label class="custom-control custom-checkbox m-b-0">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label">Aceptar terminos y condiciones</span>
                                            </label>
                                        </div>
                                        <br>
                        <div class="col-12">
                            <button class="btn btn-success btn-lg btn-block  btn-rounded  waves-effect waves-light" type="submit">Registrar</button>
                        </div>
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