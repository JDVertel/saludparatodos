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
    <link rel="icon" type="../image/png" sizes="16x16" href="../../assets/images/spt/favicon.png">
    <title>Registro de Usuario</title>
    <link href="../../assets/node_modules/wizard/steps.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="../../assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- Custom CSS Saludparatodos -->
    <link href="../dist/css/style_spt_general.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">resgitro saludparatodos</p>
        </div>
    </div>


    <!-- Validation wizard -->
    <div class="row" id="validation">
        <div class="col-12">
            <div class="card wizard-content">
                <div class="card-body">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-5 col-md-5">
                                <img src="../../assets/images/spt/laboratorio.png" alt="" id="portada" class="img-fluid">
                            </div>
                            <div class="col-7 col-md-7">
                                <h4 id="alerta">Bienvenido al Formulario de Registro de usuario web </h4>
                                <h6 id="alerta">Ingresa los datos solicitados y el asistente te guiara a través proceso de registro. </h6>
                                <h4 id="alerta"><i class="fas fa-exclamation-triangle"></i> Recuerda</h4>
                                <h6 id="alerta">Solo puedes registrarte en nuestra plataforma si tu IPS pertenece a nuestro grupo de socios, Este es un servicio reservado a nuestros socios y sus pacientes </h6>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="validation-wizard wizard-circle">
                        <!-- Step 1 -->
                        <h6><i class="fas fa-id-card"></i> Identificate</h6>
                        <section>
                            <div class="container">


                                <div class="col-md-12">
                                    <div class="card border-info">
                                        <div class="card-header bg-info">
                                            <h4 class="m-b-0 text-white"><i class="far fa-id-card"></i> Identificaciòn</h4>
                                        </div>
                                        <div class="card-body">

                                            <div class="row ">
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="tipodoc">Seleccione su tipo de Documento<span class="danger">*</span> </label>
                                                        <select class="custom-select form-control required" id="tipodoc" name="tipodoc">
                                                            <option value="">Seleccione</option>
                                                            <option value="1">CC - Cedula de ciudadania</option>
                                                            <option value="2">TI - Tarjeta de Identidad</option>
                                                            <option value="3">RC - Registro Civil</option>
                                                            <option value="13">PA - Pasaporte</option>
                                                            <option value="12">CE - Cedula de Extranjeria</option>



                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="numdoc">Numero de Documento<span class="danger">*</span></label>
                                                        <input type="text" class="form-control required" id="numdoc"> </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>


                            </div>
                        </section>
                        <!-- Step 2 -->
                        <h6><i class="far fa-user"></i> Ingresa tus datos </h6>
                        <section>
                            <div class="container">


                                <div class="col-md-12">
                                    <div class="card border-info">
                                        <div class="card-header bg-info">
                                            <h4 class="m-b-0 text-white"><i class="far fa-id-card"></i> Identificaciòn</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row" id="datosok">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label><strong>Tipo de identificacion:</strong> </label><br>
                                                        <label>CC</label>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label> <strong>Numero de identificacion :</strong> </label><br>
                                                        <label>138654326 </label>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label><strong>Nombres</strong> </label><br>
                                                        <label>Juan Pablo</label>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label> <strong>Apellidos</strong></label><br>
                                                        <label>Sanchez Rios</label>

                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>

                                <!--  -->


                                <div class="col-md-12">
                                    <div class="card border-info">
                                        <div class="card-header bg-info">
                                            <h4 class="m-b-0 text-white"><i class="fas fa-user"></i> Datos personales</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label>Ciudad</label>
                                                        <select class="custom-select form-control required" id="ciudad" name="ciudad">
                                                            <option value="">Seleccione</option>
                                                            <option value="1">Barrancabermeja</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label>IPS de preferencia</label>
                                                        <select class="custom-select form-control required" id="ips" name="ips">
                                                            <option value="">Seleccione</option>
                                                            <option value="1">Cajasan</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label>Direccion de Residencia</label>
                                                        <input type="text" class="form-control required" id="dir">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control required" id="email" name="email"> </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label>Telefono</label>
                                                        <input type="tel" class="form-control required" id="tel" name="tel">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label>Registro de usuario</label><br>
                                                        <label><strong>138654326</strong></label>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="card border-info">
                                        <div class="card-header bg-info">
                                            <h4 class="m-b-0 text-white"><i class="fas fa-key"></i> Credenciales de Acceso</h4>
                                        </div>
                                        <div class="card-body">

                                            <p> <strong>Como debe estar compuesta tu contraseña? </strong></p>
                                            <ul class="list-group">
                                                <li class="list-group-item"><i class="fas fa-check"></i> Mínimo 8 caracteres</li>
                                                <li class="list-group-item"><i class="fas fa-check"></i> Máximo 16 caracteres</li>
                                                <li class="list-group-item"><i class="fas fa-check"></i> Al menos una letra mayúscula</li>
                                                <li class="list-group-item"><i class="fas fa-check"></i> Al menos una letra minúscula</li>
                                                <li class="list-group-item"><i class="fas fa-check"></i> Al menos un número</li>
                                                <li class="list-group-item"><i class="fas fa-check"></i> No se aceptan caracteres especiales (ñ@$!%*?&) o espacios.</li>
                                            </ul>
                                            <br>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label>Contraseña</label>


                                                        <input type="password" class="form-control required" id="pass1" name="pass1">
                                                        <small class="form-control-feedback">Alfanumérico min 8, max 16 caracteres no especiales </small>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label>Repetir Contraseña</label>
                                                        <input type="password" class="form-control required" id="pass2" name="pass2"> <small class="form-control-feedback">Alfanumérico min 8, max 16 caracteres no especiales </small> </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>








                            </div>
                        </section>
                        <!-- Step 3 -->
                        <h6><i class="far fa-envelope"></i> Valida tu Email</h6>
                        <section>
                            <br>
                            <div class="container">

                                <div class="row justify-content-center">

                                    <img src="../../assets/images/spt/candado.png " alt="">


                                </div>
                                <br>
                                <div class="row justify-content-center" ">
                                    <h5 id=" center">Hemos enviado un Email de confirmacion a juandavidvertel@hot.com , revisa tu bandeja de entrada y confirma tu Email</h5>
                                </div>
                                <div class="row justify-content-center">
                                    <h6>Recuerda que este proceso es necesario para validar el registro e ingreso a la plataforma</h6>
                                </div>
                                <div class="row">

                                </div>

                            </div>





                        </section>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- vertical wizard -->

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->

    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
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
    <script src="../../assets/node_modules/moment/moment.js"></script>
    <!-- This Page JS -->
    <script src="../../assets/node_modules/wizard/jquery.steps.min.js"></script>
    <script src="../../assets/node_modules/wizard/jquery.validate.min.js"></script>
    <script src="../../assets/node_modules/sweetalert/sweetalert.min.js"></script>
    <script>
        //Custom design form example
        $(".tab-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit"
            },
            onFinished: function(event, currentIndex) {
                swal("No olvides revisar tu Email!", "Recuerda que para iniciar seccion debes confirmar tu Email primero");

            }
        });


        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit"
            },
            onStepChanging: function(event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function(event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function(event, currentIndex) {
                swal("No olvides revisar tu Email!", "Recuerda que para iniciar seccion debes confirmar tu Email primero");
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element)
            },
            rules: {
                email: {
                    email: !0
                }
            }
        })
    </script>
</body>

</html>