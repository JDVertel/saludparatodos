<?php
@session_start();

if (isset($_SESSION["DATOSORDENPDF"])) {
    //print_r($_SESSION["DATOSPDF"]);
    $datos = $_SESSION["DATOSORDENPDF"];
    $usuario = $_SESSION["usuario"];
    $datosPaciente = $datos["DatosPaciente"];
    $datosExamen = $datos["DatosExamen"];
    //$idLaboratorio = $datos["Laboratorio"];
    $idOrden = $datos["Orden"];
    $edad = $datos["Edad"];
    //$profesional = $datos["BACTERIOLOGO"];
    //$nombreProfesional = $profesional["NOMBRE1MEDICO"] . ' ' . $profesional["NOMBRE2MEDICO"] . ' ' . $profesional["APELLIDO1MEDICO"] . ' ' . $profesional["APELLIDO2MEDICO"];
    //$registro = $profesional["REGISTROMEDICO"];
}

$fechaActual = getdate();
$strHoraActualPDF = str_pad(strval($fechaActual['mday']), 2, "0", STR_PAD_LEFT) . '/' .
        str_pad(strval($fechaActual['mon']), 2, "0", STR_PAD_LEFT) . '/' .
        strval($fechaActual['year']) . ' ' .
        str_pad(strval($fechaActual['hours']), 2, "0", STR_PAD_LEFT) . ':' .
        str_pad(strval($fechaActual['minutes']), 2, "0", STR_PAD_LEFT);


 if ($datosPaciente != NULL) { 
    ?>
    <!DOCTYPE html> 
    <html lang="en">
        <head>
            <title>PDF</title>       
        </head>
        <body>
            <div style="font-size: 10px!important; width: 100%">
                <table style="width: 100%">
                    <tr>
                        <td style="text-align: left; width: 20%"><img src="view/images/ips/890200106/746.png" alt="" style="width: 50px; height: 30px" ></td>
                        <td style="text-align: center; width: 60%"><h5>Resultados de Examen de Laboratorio</h5></td>
                        <td style="text-align: right; width: 20%"><img src="view/images/logospt_negra.png" style="width: 120px; height: 20px; " alt="salud"></td>
                    </tr>
                </table>                
                <div style="width: 100%;">               
                    <table style="width: 100%;">
                        <tbody>
                            <tr style="font-size: 10px">
                                <td style="width: 10%; text-align: right"><strong>IPS: </strong></td>
                                <td style="width: 20%"><?php echo $datosPaciente[0]["NOMBREIPS"] ?></td>
                                <td style="width: 10%; text-align: right"><strong>EPS: </strong></td>
                                <td style="width: 20%"><?php echo $datosPaciente[0]["NOMBREEPS"] ?></td>
                                <td style="width: 15%; text-align: right"><strong>Fecha Orden: </strong></td>
                                <td style="width: 25%"><?php echo $datosPaciente[0]["FECHAORDEN"]; ?></td>
                            </tr>                            
                            <tr style="font-size: 10px">
                                <?php
                                $nombrePaciente = $datosPaciente[0]["NOMBRE1"] . " " . $datosPaciente[0]["NOMBRE2"];
                                $apellidosPaciente = $datosPaciente[0]["APELLIDO1"] . " " . $datosPaciente[0]["APELLIDO2"];
                                ?>
                                <td style="text-align: right"><strong>Nombres: </strong></td>
                                <td style="font-size: 10px"><?php echo strtoupper($nombrePaciente); ?></td>
                                <td style="text-align: right"><strong>Apellidos: </strong></td>
                                <td><?php echo strtoupper($apellidosPaciente); ?></td>
                                <td style="text-align: right"><strong>Número Orden: </strong></td>
                                <td><?php echo str_pad(strval($idOrden), 8, "0", STR_PAD_LEFT); ?></td>
                            </tr>
                            <tr style="font-size: 10px">
                                <td style="text-align: right"><strong>Identificación: </strong></td>
                                <td><?php echo $datosPaciente[0]["TIPO_DOC"] . "-" . $datosPaciente[0]["DOCUMENTO"]; ?></td>
                                <td style="text-align: right"><strong>Edad: </strong> </td>
                                <td><?php echo $edad; ?></td>
                                <td style="text-align: right"><strong>Fecha impresion: </strong> </td>
                                <td><?php echo $strHoraActualPDF; ?></td>
                            </tr>
                            <tr style="font-size: 10px">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align: right"><strong>Impreso por: </strong></td>
                                <td><?php echo $usuario; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <div style="width: 100%;">
                        <br>
                        <?php
                        $datosLaboratorio = $datosPaciente[0];
                        $fila = 0;
                        foreach ($datosPaciente as $row => $value) {
                            $datosLaboratorio = $value;
                            $nombreProfesional = $datosLaboratorio["NOMBRE1MEDICO"] . ' ' . $datosLaboratorio["NOMBRE2MEDICO"] . ' ' . $datosLaboratorio["APELLIDO1MEDICO"] . ' ' . $datosLaboratorio["APELLIDO2MEDICO"];
                            $registroMedico = $datosLaboratorio["REGISTROMEDICO"];
                            ?>
                            <div style="width: 100%;">                                  
                                <b style="font-size: 11px">Datos de Laboratorio</b><br>
                                <table style="width: 100%">
                                    <thead>
                                        <tr style="background-color: #CCC; font-size: 10px">
                                            <th style="width: 20%; padding: 5px">TIPO LABORATORIO</th>
                                            <th style="width: 20%; padding: 5px">ALIAS</th>
                                            <th style="width: 10%; padding: 5px">CODIGO</th>
                                            <th style="width: 50%; padding: 5px">NOMBRE CUPS</th>
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        <tr>
                                            <td style="width: 20%; font-size: 10px"><?php echo $datosLaboratorio["TIPOLABORATORIO"]; ?></td>
                                            <td style="width: 20%; font-size: 10px"><?php echo $datosLaboratorio["ALIAS"]; ?></td>
                                            <td style="width: 10%; font-size: 10px"><?php echo $datosLaboratorio["CODIGOCUPS"]; ?></td>
                                            <td style="font-size: 9px; width: 50%"><div><?php echo $datosLaboratorio["NOMBRECUPS"]; ?></div></td>                                
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="width: 100%;">
                                <br>
                                <b style="font-size: 11px">Resultados del Examen</b><br>
                                <?php
                                $exam = $datosExamen[$fila];
                                $cantidadResultados = count($exam);

                                $tablaExtendida = false;
                                $continuar = 0;
                                if ($cantidadResultados > 0 && $cantidadResultados <= 9) {
                                    $tablaExtendida = false;
                                } elseif ($cantidadResultados > 9) {
                                    $tablaExtendida = true;
                                }
                                ?>
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 50%">
                                            <div style="width: 100%">
                                                <table style="width: 100%">
                                                    <thead>
                                                        <tr style="background-color: #CCC; font-size: 10px">
                                                            <th style="width: 30%; padding: 5px">Variable</th>
                                                            <th style="width: 25%; padding: 5px">Referencia</th>
                                                            <th style="width: 20%; padding: 5px">Resultado</th>
                                                            <th style="width: 25%; padding: 5px">Medida</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if ($tablaExtendida == false) {
                                                            for ($i = 0; $i < $cantidadResultados; $i++) {
                                                                ?>
                                                                <tr>
                                                                    <td style="width: 20%; font-size: 10px"><?= $exam[$i]["NOMBRE"] ?></td>
                                                                    <td style="width: 25%; font-size: 10px"><?= $exam[$i]["VALORREF"] ?></td>
                                                                    <td style="width: 20%; font-size: 10px"><?= $exam[$i]["VALOR"] ?></td>
                                                                    <td style="width: 25%; font-size: 10px"><?= $exam[$i]["TIPOMEDIDA"] ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        } else {
                                                            for ($i = 0; $i < 9; $i++) {
                                                                ?>
                                                                <tr>
                                                                    <td style="width: 20%; font-size: 10px"><?= $exam[$i]["NOMBRE"] ?></td>
                                                                    <td style="width: 25%; font-size: 10px"><?= $exam[$i]["VALORREF"] ?></td>
                                                                    <td style="width: 20%; font-size: 10px"><?= $exam[$i]["VALOR"] ?></td>
                                                                    <td style="width: 25%; font-size: 10px"><?= $exam[$i]["TIPOMEDIDA"] ?></td>
                                                                </tr>
                                                                <?php
                                                                $continuar++;
                                                            }
                                                        }
                                                        ?>                                            
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        <td style="width: 50%">
                                            <div style="width: 100%">
                                                <?php if ($tablaExtendida == true) { ?>
                                                    <table style="width: 100%">
                                                        <thead>
                                                            <tr style="background-color: #CCC; font-size: 10px">
                                                                <th style="width: 30%; padding: 5px">Variable</th>
                                                                <th style="width: 25%; padding: 5px">Referencia</th>
                                                                <th style="width: 20%; padding: 5px">Resultado</th>
                                                                <th style="width: 25%; padding: 5px">Medida</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                
                                                            <?php
                                                            for ($j = $continuar; $j < $cantidadResultados; $j++) {
                                                                ?>
                                                                <tr>
                                                                    <td style="width: 20%; font-size: 10px"><?= $exam[$j]["NOMBRE"] ?></td>
                                                                    <td style="width: 25%; font-size: 10px"><?= $exam[$j]["VALORREF"] ?></td>
                                                                    <td style="width: 20%; font-size: 10px"><?= $exam[$j]["VALOR"] ?></td>
                                                                    <td style="width: 25%; font-size: 10px"><?= $exam[$j]["TIPOMEDIDA"] ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div style="width: 100%;">                        
                                <table style="width: 100%;">                                      
                                    <tr>
                                        <td style="width: 60%; font-size: 10px"><strong>Observaciones</strong><br/><br/><?php echo $datosLaboratorio["OBSERVACIONES"]; ?></td>                   
                                        <td style="width: 40%; font-size: 10px">
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td style="text-align: right"><strong>Bacteriólogo: </strong></td>
                                                    <td><?php echo $nombreProfesional; ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Registro: </strong></td>
                                                    <td><?php echo $registroMedico; ?></td>
                                                </tr>
                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>                        
                                </table>
                            </div>
                            <hr />
                            <?php
                            $fila++;
                        }
                        ?>                        
                    </div>                    
                </div>
            </div>
        </body>
    </html>
    <?php 
} 