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
    <link href="../dist/css/pages/tab-page.css" rel="stylesheet">
    <link href="../dist/css/pages/style_usuarioweb.css" rel="stylesheet">
    <!-- page css -->
    <link href="../dist/css/pages/other-pages.css" rel="stylesheet">
    <!-- css login spt -->
    <link href="../dist/css/style_usuarioweb.css" rel="stylesheet">
    <link href="../dist/css/pages/ribbon-page.css" rel="stylesheet">
    <link href="../../assets/node_modules/wizard/steps.css" rel="stylesheet">
    <link href="../../assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="../../assets/node_modules/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="../../assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="../../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

</head>

<body>


    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Saludparatodos</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <div class="login-register" style="background-color:white;">
        <div class="login-box card" style="padding: opx;">
            <div class="card-body">

                <img src="../../assets/images/spt/usuarioweb/dashboard.png" class="img-fluid" alt="">
                <!-- imagen de ips -->
                <div class="centrado"> </div>



            </div>


            <!--  -->
            <div class="col-md-12" style="padding: 0px;">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="../../assets/images/users/1.jpg" class="img-circle img-responsive">
                            </div>
                            <div class="col-8 text-center">
                                <h4 class="card-title">Juan Pablo Velez</h4>
                                <h6 class="card-subtitle"><strong>2</strong> Reservas actualmente</h6>
                                <h6 class="card-subtitle"><strong>3</strong> Dias para proxima consulta</h6>
                            </div>
                            <hr>
                            <div class="col-2">
                                <img src="../../assets/images/spt/usuarioweb/ips/cajasan.png" class=" img-responsive" alt="">
                            </div>
                        </div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" style="padding: 0px;">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="fas fa-home"></i></span> <span class="hidden-xs-down"> <strong>Inicio</strong></span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#citas" role="tab"><span class="hidden-sm-up"><i class="fas fa-notes-medical"></i></span> <span class="hidden-xs-down"> <strong>Citas</strong></span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#services" role="tab"><span class="hidden-sm-up"><i class="ti-layout-grid2-alt"></i></i></span> <span class="hidden-xs-down"> <strong>Servicios</strong></span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"><i class="fas fa-user"></i></span> <span class="hidden-xs-down"> <strong>Perfil</strong></span></a> </li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="home" role="tabpanel" style="padding: 0px;">
                                <div class="col-12 " id="portada">
                                    <br>

                                    <div class="col-lg-12">
                                        <h5 style="text-align:center;">Nucleo familiar administrable (4)</h5>

                                        <div class="row">
                                            <div class="col-4">
                                                <br>
                                                <button type="button" class="btn btn-success btn-circle"> <i class="fas fa-plus"></i></button>

                                                <img src="../../assets/images/spt/nucleo_fam.png" width="180" class="img-fluid" alt="Responsive image" id="imgportada">

                                            </div>
                                            <div class="col-8">

                                                <table class="table-sm">
                                                    <thead class="font-light text-black">
                                                        <tr>
                                                            <th><strong>Citas</strong> </th>
                                                            <th><strong>Nombre</strong> </th>
                                                            <th><strong>Dias rest</strong> </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="font-light text-black">
                                                        <tr>
                                                            <td>0</td>
                                                            <td>
                                                                juan david vertel holguin
                                                            </td>
                                                            <td>12</td>

                                                        </tr>
                                                        <tr>
                                                            <td>0</td>
                                                            <td>
                                                                lisa maria vertel sanchez
                                                            </td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                fernando vetel sanchez
                                                            </td>
                                                            <td>7</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                susan marcela sanchez
                                                            </td>
                                                            <td>11</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                        <hr>

                                        <h5 style="text-align:center;">Disponibilidad de citas en $ips (15d)</h5>
                                        <div class="row">
                                            <div class="col-4 col-md-4" id="portada">
                                                <img src="../../assets/images/spt/inicio.png" width="180" class="img-fluid" alt="Responsive image" id="imgportada">
                                            </div>
                                            <div class="col-8">
                                                <table class="table-sm">
                                                    <thead class="font-light text-black">
                                                        <tr>
                                                            <th><strong>Cant</strong> </th>
                                                            <th><strong>Tipo</strong> </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="font-light text-black">
                                                        <tr>
                                                            <td>
                                                                23
                                                            </td>
                                                            <td>C Externa</td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                10
                                                            </td>
                                                            <td>C Odontol</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                12
                                                            </td>
                                                            <td>C Externa</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                4
                                                            </td>
                                                            <td>C Externa</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                    </div>
                                    <!--  -->


                                </div>

                            </div>

                            <div class="tab-pane p-20" id="citas" role="tabpanel">
                                <!--  -->
                                <div class="col-lg-12 ">
                                    <center>
                                        <h4>Seleccione la opcion deseada</h4>
                                    </center>


                                    <div class="accordion" id="accordionExample1" style="padding: 0px;">
                                        <div class="card m-b-0">
                                            <div class="card-header bg-white p-0" id="heading1">
                                                <h5 class="mb-0">

                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                        <strong style="font-size: 20px;"> <i class="ti-bookmark-alt"></i> Listado de citas agendadas</strong>
                                                    </button> <br>
                                                    <small class="form-control-feedback">Listado de tus reservas activas</small>
                                                    <hr>
                                                </h5>

                                            </div>

                                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample1">
                                                <div class="card-body">
                                                    <!--  -->


                                                    <div class="row">
                                                        <div class="col-2" style="text-align:right;">
                                                            <img src="../../assets/images/users/1.jpg" class="img-circle" width="40">
                                                            <button type="button" class="btn btn-success btn-circle"> <i class="fas fa-phone"></i> </button>
                                                        </div>
                                                        <div class="col-8" id="icon">
                                                            juan david vertel /Consulta externa / Teleconsulta / Medicina general /
                                                            10:45 / 25-05-2020 / Cajasan-galan
                                                        </div>
                                                        <div class="col-2" id="icon">
                                                            <button type="button" class="btn btn-danger btn-circle"> <i class="fas fa-calendar-times"></i> </button>
                                                            <!--     <small class="form-control-feedback">Cancelar</small> -->

                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-2" style="text-align:right;">
                                                            <img src="../../assets/images/users/1.jpg" class="img-circle" width="40">
                                                            <button type="button" class="btn btn-info btn-circle"> <i class="fas fa-video"></i> </button>
                                                        </div>
                                                        <div class="col-8" id="icon">
                                                            lisa maria sanchez/ Consulta externa / Videoconsulta / Medicina general /
                                                            10:45 / 25-05-2020 / Cajasan-galan
                                                        </div>
                                                        <div class="col-2" id="icon">
                                                            <button type="button" class="btn btn-danger btn-circle"> <i class="fas fa-calendar-times"></i> </button>

                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-2" style="text-align:right;">
                                                            <img src="../../assets/images/users/1.jpg" class="img-circle" width="40">
                                                            <button type="button" class="btn btn-primary btn-circle"> <i class="fas fa-user-md"></i> </button>
                                                        </div>
                                                        <div class="col-8" id="icon">
                                                            juan david vertel/ Consulta externa / Presencial / Medicina general /
                                                            10:45 / 25-05-2020 / Cajasan-galan
                                                        </div>
                                                        <div class="col-2" id="icon">
                                                            <button type="button" class="btn btn-danger btn-circle"> <i class="fas fa-calendar-times"></i> </button>

                                                        </div>

                                                    </div>

                                                </div>
                                                <br>
                                                <!--  -->

                                            </div>

                                        </div>

                                        <div class="card m-b-0">
                                            <div class="card-header bg-white p-0" id="heading3">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                        <strong style="font-size: 20px;"> <i class=" ti-check-box"></i> Agendar nueva cita </strong>
                                                    </button> <br>
                                                    <small class="form-control-feedback">Reserva desde aquí una nueva cita</small>
                                                </h5>
                                                <hr>
                                            </div>
                                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample1">
                                                <div class="card-body">
                                                    <!--  -->
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body wizard-content ">

                                                                    <h4 class="card-title" style="text-align:center;">Nueva reserva</h4>


                                                                    <h6 class="card-subtitle" style="text-align:center;">Complete todos los pasos para realizar la reserva </a></h6>

                                                                    <form action="#" class="tab-wizard horizontal wizard-circle">
                                                                        <!-- Step 1 -->
                                                                        <h6>Tipo</h6>
                                                                        <section>

                                                                            <hr>
                                                                            <div class="form-group has-success">
                                                                                <label class="control-label">Seleccione el usuario al cual desea asignar la cita</label>
                                                                                <select class="form-control custom-select">
                                                                                    <option value="1">juan david</option>
                                                                                    <option value="2">lisa maria </option>
                                                                                </select>
                                                                            </div>

                                                                            <br>


                                                                            <div class="row">
                                                                                <div class="form-group has-success">
                                                                                    <label class="control-label"><i class="ti-layers"></i> Seleccione el tipo de consulta (clasificacion)</label>
                                                                                    <select class="form-control custom-select">
                                                                                        <option value="1">juan david</option>
                                                                                        <option value="2">lisa maria </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group has-success">
                                                                                    <label class="control-label"><i class="ti-layers-alt"></i> Seleccione la especificacion (finalidad)</label>
                                                                                    <select class="form-control custom-select">
                                                                                        <option value="1">juan david</option>
                                                                                        <option value="2">lisa maria </option>
                                                                                    </select>
                                                                                </div>


                                                                            </div>

                                                                        </section>
                                                                        <!-- Step 2 -->
                                                                        <h6>Fecha</h6>
                                                                        <section>

                                                                            <div class="col">
                                                                                <div class="text-center">
                                                                                    <h5 class="box-title m-t-30"><i class="far fa-calendar-alt"></i> Seleccione la fecha deseada</h5>
                                                                                    <p class="text-muted m-b-20">El sistema le indicara si existen citas disponibles, u opciones cercanas disponibles.</p>
                                                                                    <hr>
                                                                                    <center>
                                                                                        <div class="input-group">
                                                                                            <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                                                                                            <div class="input-group-append">
                                                                                                <span class="input-group-text"><i class="icon-calender"></i></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </center>
                                                                                </div>
                                                                                <hr>

                                                                            </div>
                                                                            <div class="alert alert-danger">Lo sentimos, no hemos encontrado citas disponibles</div>
                                                                            <div class="alert alert-warning">Hemos encontrado otras fechas con citas disponibles que te tal vez te puedan interezar

                                                                            </div>
                                                                            <div class="alert alert-success">Busqueda exitosa, presione siguiente para continuar con la reserva </div>


                                                                            <br>
                                                                        </section>
                                                                        <!-- Step 3 -->
                                                                        <h6>Profesional</h6>
                                                                        <section>

                                                                            <div class="col-md-12">
                                                                                <div class="form-group has-success">
                                                                                    <label class="control-label"><i class="fas fa-user-md"></i> Seleccione el profesional :</label>
                                                                                    <select class="form-control custom-select">
                                                                                        <option value="1">juan david</option>
                                                                                        <option value="2">lisa maria </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group has-success">
                                                                                    <label class="control-label"><i class="far fa-clock"></i> Seleccione la hora de la cita:</label>
                                                                                    <select class="form-control custom-select">
                                                                                        <option value="1">juan david</option>
                                                                                        <option value="2">lisa maria </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group has-success">
                                                                                    <label class="control-label"><i class="ti-comment"></i> Seleccione la modalidad de la cita:</label>
                                                                                    <select class="form-control custom-select">
                                                                                        <option value="1">juan david</option>
                                                                                        <option value="2">lisa maria </option>
                                                                                    </select>
                                                                                </div>
                                                                                <!--  -->

                                                                            </div>


                                                                        </section>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--  -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card m-b-0">
                                            <div class="card-header bg-white p-0" id="heading2">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                        <strong style="font-size: 20px;"> <i class="ti-pin-alt"></i> Citas en lista de espera </strong>
                                                    </button> <br>
                                                    <small class="form-control-feedback">Ingrese a la lista de espera para agendamiento de una cita especial en tu IPs </small>
                                                </h5>
                                            </div>
                                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample1">
                                                <div class="card-body">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-10"><small class="form-control-feedback">Seleccione esta opcion si desea hacer una fila virtual para reserva de algun tipo de cita que su ips preste pero que no este disponible o que este agotada. <br>le avisaremos via email cuando haya disponibilidad</small></div>
                                                        <div class="col-2" id="icon">
                                                            <button type="button" class="btn btn-info btn-circle"> <i class="ti-plus"></i> </button>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-2" style="text-align:right;" id="icon">
                                                            <button type="button" class="btn btn-danger btn-circle"> <i class="fas fa-calendar-times"></i> </button>
                                                        </div>
                                                        <div class="col-10">
                                                            <TABLE>
                                                                <TR>
                                                                    <TH>Nombre</TH>
                                                                    <TD></TD>
                                                                    <TD>Juan david</TD>
                                                                </TR>
                                                                <TR>
                                                                    <TH>Tipo de cita</TH>
                                                                    <TD></TD>
                                                                    <TD>Medicina General</TD>
                                                                </TR>
                                                                <TR>
                                                                    <TH>Especificacion</TH>
                                                                    <TD></TD>
                                                                    <TD>Consulta Externa</TD>
                                                                </TR>
                                                                <TR>
                                                                    <TH>Preferencia de horario</TH>
                                                                    <TD></TD>
                                                                    <TD>AM</TD>
                                                                </TR>
                                                                <TR>
                                                                    <TH>F solicitud</TH>
                                                                    <TD></TD>
                                                                    <TD>2020-04-04</TD>
                                                                </TR>

                                                            </TABLE>


                                                        </div>


                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-2" style="text-align:right;" id="icon">
                                                            <button type="button" class="btn btn-danger btn-circle"> <i class="fas fa-calendar-times"></i> </button>
                                                        </div>
                                                        <div class="col-10">
                                                            <TABLE>
                                                                <TR>
                                                                    <TH>Nombre</TH>
                                                                    <TD></TD>
                                                                    <TD>Lisa maria</TD>
                                                                </TR>
                                                                <TR>
                                                                    <TH>Tipo de cita</TH>
                                                                    <TD></TD>
                                                                    <TD>Medicina Especializada</TD>
                                                                </TR>
                                                                <TR>
                                                                    <TH>Especificacion</TH>
                                                                    <TD></TD>
                                                                    <TD>Fisioterapia</TD>
                                                                </TR>
                                                                <TR>
                                                                    <TH>Preferencia de horario</TH>
                                                                    <TD></TD>
                                                                    <TD>PM</TD>
                                                                </TR>
                                                                <TR>
                                                                    <TH>F solicitud</TH>
                                                                    <TD></TD>
                                                                    <TD>2020-03-26</TD>
                                                                </TR>

                                                            </TABLE>


                                                        </div>


                                                    </div>






                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--  -->
                            </div>
                            <div class="tab-pane  p-20" id="services" role="tabpanel" style="padding: 0px;">
                                <!--  -->
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#lab" role="tab"><span class="hidden-sm-up"><i class="fas fa-vial"></i></span> <span class="hidden-xs-down">Laboratorios</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vac" role="tab"><span class="hidden-sm-up"><i class="fas fa-pills"></i></span> <span class="hidden-xs-down">Medicamentos</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#imag" role="tab"><span class="hidden-sm-up"><i class="fas fa-x-ray"></i></span> <span class="hidden-xs-down">Imagenes D</span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="lab" role="tabpanel">
                                        <div class="p-20" style="padding: 0px;">
                                            <br>
                                            <div class="col-12">
                                                <h4 class="card-title"><i class="fas fa-bullseye"></i> Listado de ordenes</h4>
                                                <br>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h6>Seleccione el usuario </h6>
                                                    </div>
                                                    <div class="col-8">
                                                        <select class="form-control custom-select">
                                                            <option value="">juan david </option>
                                                            <option value="">frenando </option>
                                                        </select></div>

                                                </div>

                                                <div class="table-responsive m-t-40">
                                                    <table id="myTable1" class="table table-bordered table-striped table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>#Orden</th>
                                                                <th>Fecha orden</th>
                                                                <th>lab ok</th>
                                                                <th>Ver</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1222</td>
                                                                <td>02-06-2020</td>
                                                                <td>12/12</td>


                                                                <td>
                                                                    <button type="button" class="btn waves-effect waves-dark btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Descargar archivo .pdf"> <i class="far fa-file-pdf"></i></i></button>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12344</td>
                                                                <td>02-06-2020</td>
                                                                <td>12/12</td>
                                                                <td>
                                                                    <button type="button" class="btn waves-effect waves-dark btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Descargar archivo .pdf"> <i class="far fa-file-pdf"></i></i></button>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12344</td>
                                                                <td>02-06-2020</td>
                                                                <td>12/12</td>
                                                                <td>
                                                                    <button type="button" class="btn waves-effect waves-dark btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Descargar archivo .pdf"> <i class="far fa-file-pdf"></i></i></button>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12344</td>
                                                                <td>02-06-2020</td>
                                                                <td>12/12</td>
                                                                <td>
                                                                    <button type="button" class="btn waves-effect waves-dark btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Descargar archivo .pdf"> <i class="far fa-file-pdf"></i></i></button>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12344</td>
                                                                <td>02-06-2020</td>
                                                                <td>12/12</td>
                                                                <td>
                                                                    <button type="button" class="btn waves-effect waves-dark btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Descargar archivo .pdf"> <i class="far fa-file-pdf"></i></i></button>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12344</td>
                                                                <td>02-06-2020</td>
                                                                <td>12/12</td>
                                                                <td>
                                                                    <button type="button" class="btn waves-effect waves-dark btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Descargar archivo .pdf"> <i class="far fa-file-pdf"></i></i></button>

                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--  -->
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane  p-20" id="vac" role="tabpanel">
                                        <h3>App en desarrollo</h3>
                                    </div>
                                    <div class="tab-pane p-20" id="imag" role="tabpanel">
                                        <h3>App en desarrollo</h3>
                                    </div>
                                </div>


                                <!--  -->
                            </div>
                            <div class="tab-pane  p-20" id="profile" role="tabpanel" style="padding: 0px;">

                                <div class="col-12">
                                    <div class="card">
                                        <div class="user-bg"> <img width="100%" alt="user" src="../../assets/images/users/1.jpg"> </div>
                                        <div class="card-body">
                                            <div class="user-btm-box">
                                                <!-- .row -->

                                                <div class="row text-center m-t-10">
                                                    <div class="col-md-6 b-r"><strong>Nombres</strong>
                                                        <p>Jonathan Doe</p>
                                                    </div>

                                                    <div class="col-md-6"><strong>Apellidos</strong>
                                                        <p>Engineer</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row text-center m-t-10">
                                                    <div class="col-md-6 b-r"><strong> Identificacion/Numero</strong>
                                                        <p>CC / 13862306 </p>
                                                    </div>
                                                    <div class="col-md-6"><strong>F nacimiento / Edad</strong>
                                                        <p>04-05-1987 / 37</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row text-center m-t-10">
                                                    <div class="col-md-6 b-r"><strong>Correo electronico</strong>
                                                        <p>Jonathan@hot.com</p>
                                                    </div>
                                                    <div class="col-md-6"><strong>Celular</strong>
                                                        <p>3142213405</p>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                                <hr>
                                                <!-- .row -->
                                                <div class="row text-center m-t-10">
                                                    <div class="col-md-6 b-r"><strong>Ips de preferencia</strong>
                                                        <p>Cajasan IPs</p>
                                                    </div>
                                                    <div class="col-md-6"><strong>Ciudad de Residencia</strong>
                                                        <p>Barrancabermeja</p>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                                <hr>
                                                <!-- .row -->
                                                <div class="row text-center m-t-10">
                                                    <div class="col-md-12"><strong>Direccion</strong>
                                                        <p>E104, Dharti-2, Chandlodia Ahmedabad
                                                            <br /> Gujarat, India.</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row text-center m-t-10">
                                                    <div class="col-md-12">
                                                        <button type="button" class="btn btn-success btn-circle"> <i class="ti-pencil"></i> </button>
                                                        <p>Editar informacion</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--  -->



            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                    <div class="social">
                        <img src="../../assets/images/spt/usuarioweb/logo_spt.png" class="img-fluid " width="200" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>



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
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=default"></script>
    <!-- This Page JS -->
    <script src="../../assets/node_modules/wizard/jquery.steps.min.js"></script>
    <script src="../../assets/node_modules/wizard/jquery.validate.min.js"></script>
    <script src="../../assets/node_modules/sweetalert/sweetalert.min.js"></script>
    <script src="../../assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="../../assets/node_modules/moment/moment.js"></script>
    <script src="../../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <!-- This is data table -->
    <script src="../../assets/node_modules/datatables/datatables.min.js"></script>
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
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");

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
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
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
    <script>
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
    </script>
    <script>
        $(function() {
            $('#myTable1').DataTable();
            $(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

        $('.example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>



</body>

</html>