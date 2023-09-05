<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Historia clinica Saludparatodos">
    <meta name="author" content="BDMSystems">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Historia Clinica PYP</title>
    <!-- This page multiselect -->
    <link href="../../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="../../assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../../assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="../../assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="../../assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />








    <!-- chartist CSS -->
    <link href="../../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="../../assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="../dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- page css -->
    <link href="../dist/css/pages/tab-page.css" rel="stylesheet">
    <!-- Custom CSS Saludparatodos -->
    <link href="../dist/css/style_spt.css" rel="stylesheet">

    <link href="../../assets/node_modules/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

    <link href="../../assets/node_modules/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="../../assets/node_modules/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->






</head>

<div class="card">

    <body class="skin-blue fixed-layout">

        <div class="card">

            <div class="container- fluid">
                <div class="row justify-content-center">
                </div>
                <?php
                include 'Cex_cabecera.php'
                ?>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="col-12  col-sm-12  col-md-12  col-lg-12 ">

                        <div class="collapse" id="code">
                            <div class="card card-body">

                            </div>
                        </div>
                        <div class="accordion" id="accordion_HC">

                            <?php


                            include 'PYP_a_joven.php';


                  

                            ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>

</div>

<footer class="footer">
    © 2020 Saludparatodos by BDMSystems
</footer>
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
<!-- Bootstrap popper Core JavaScript -->
<script src="../../assets/node_modules/popper/popper.min.js"></script>
<script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="../../assets/node_modules/raphael/raphael-min.js"></script>
<script src="../../assets/node_modules/morrisjs/morris.min.js"></script>
<script src="../../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="../../assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- jQuery peity -->
<script src="../../assets/node_modules/peity/jquery.peity.min.js"></script>
<script src="../../assets/node_modules/peity/jquery.peity.init.js"></script>
<script src="../dist/js/dashboard1.js"></script>
<!--Custom JavaScript -->

<script src="../../assets/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="../../assets/node_modules/bootstrap-table/dist/bootstrap-table.ints.js"></script>
<!--stickey kit -->
<script src="../../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="../../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>


<!-- This is data table -->
<script src="../../assets/node_modules/datatables/datatables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script src="../../assets/node_modules/dff/dff.js" type="text/javascript"></script>
<script type="text/javascript" src="../../assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
<!-- multiselect plugins -->
<script src="../../assets/node_modules/switchery/dist/switchery.min.js"></script>
<script src="../../assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="../../assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="../../assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="../../assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="../../assets/node_modules/dff/dff.js" type="text/javascript"></script>
<script type="text/javascript" src="../../assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
<!-- Magnific popup JavaScript -->
<script src="../../assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="../../assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>



<?php
include 'tab_scripts_datatable.php'
?>




</body>

</html>