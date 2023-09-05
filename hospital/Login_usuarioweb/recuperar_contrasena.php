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
            <p class="loader__label">Elite Hospital</p>
        </div>
    </div>

    <!--  -->
    <div class="container">
        <br>
        <img src="../../assets/images/spt/logospt_negra.png" width="350" alt="Home" class="img-fluid" />
        </a>
        <br>
        <br>
        <h4><strong><i class="fas fa-key"></i> Asignar nueva contraseña</strong></h4>
        <br>
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
                    <small class="form-control-feedback">Alfanumérico min 8, max 16 caracteres no especiales ni espacios </small>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>Repetir Contraseña</label>
                    <input type="password" class="form-control required" id="pass2" name="pass2"> <small class="form-control-feedback">Alfanumérico min 8, max 16 caracteres no especiales ni espacios</small> </div>
            </div>
        </div>
        <button>Guardar cambios</button>
    </div>



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