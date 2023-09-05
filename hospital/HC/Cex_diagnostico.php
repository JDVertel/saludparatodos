<!-- tabnuevo -->

<br>
<div class="card m-b-0">
    <div class="card-header bg-white p-0" id="h_diagn">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c_diagn" aria-expanded="true" aria-controls="c_diagn">
                <i class="fas fa-diagnoses"></i>
                Diagnostico
            </button>
        </h5>
    </div>

    <div id="c_diagn" class="collapse" aria-labelledby="h_diagn" data-parent="#accordion_HC">
        <div class="card-body">
            <!--  -->



            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Actual</span></a> </li>

                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#historialp2" role="tab"><span class="hidden-sm-up"><i class="ti-archive"></i></span> <span class="hidden-xs-down">Historial</span></a> </li>


                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">

                            <div class="tab-pane active" id="home1" role="tabpanel">
                                <div class="p-20">
                                    <!-- inicio de tab 1 -->




                                    <br>
                                    <h4> <strong>Diagnostico Principal</strong> </h4>

                                    <br>

                                    <div class="row">

                                        <div class="col-12 col-sm-12 col-md-4 -col-lg-4 ">

                                            <label for="sel_tipodiag">Clasificacion diagnostico</label>
                                            <select class="form-control required" id="tipodiag">
                                                <option></option>
                                                <option>Impresion diagnostica</option>
                                                <option>Confirmado nuevo</option>
                                                <option>Confirmado repetido</option>
                                            </select>

                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 -col-lg-4 ">
                                            <label for="sel_tipodiag">Finalidad de la consulta</label>
                                            <select class="form-control required" id="finalidad">
                                                <option></option>
                                                <option value="10">No aplica </option>
                                                <option value="01">Atencion del parto</option>
                                                <option value="02">Atencion del recien nacido</option>
                                                <option value="03">Atencion de planificacion familiar</option>
                                                <option value="04">Deteccion de alteraciones de crecimiento y desarrollo del menor de 10 años</option>
                                                <option value="05">Detección de alteración del desarrollo joven
                                                </option>
                                                <option value="06">Detección de alteración del embarazo</option>
                                                <option value="07">Detección de alteración del adulto</option>
                                                <option value="08">Detección de alteración de agudeza visual </option>
                                                <option value="09">Detección de enfermedad profesional </option>

                                            </select>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-4 -col-lg-4 ">
                                            <label for="sel_tipodiag">Causa Externa</label>
                                            <select class="form-control required" id="causaext">
                                                <option></option>
                                                <option value="01">Accidente de trabajo</option>
                                                <option value="02">Accidente de transito</option>
                                                <option value="03">Accidente rabico</option>
                                                <option value="04">Accidente ofidico</option>
                                                <option value="05">Otro tipo de accidentes</option>
                                                <option value="06">Evento catrastofico</option>
                                                <option value="07">Lesion por agresion</option>
                                                <option value="08">Lesion autoinfringida</option>
                                                <option value="09">Sospecha de maltrato fisico</option>
                                                <option value="10">Sospecha de abuso sexual</option>
                                                <option value="11">Sospecha de violencia sexual</option>
                                                <option value="12">Sospecha de maltrato emocional</option>
                                                <option value="13">Enfermedad general</option>
                                                <option value="14">Enfermedad laboral</option>
                                                <option value="15">Otra</option>
                                            </select>
                                        </div>

                                        <br>





                                    </div>

                                    <!--  -->


                                    <div class="clearfix"></div>


                                    <br>

                                    <div class="row">
                                        <div class="col-12 col-md-3 col-lg-2">
                                            <h5>Diagnostico Principal</h5>
                                            <button type="button" class="btn btn-success">BUSCAR CIE-10</button>
                                        </div>


                                        <div class="col-12 col-md-9 col-lg-10">
                                            <div class="form-group">
                                                <label for="comment">Descripcion </label>
                                                <textarea class="form-control" rows="3" id="diagp" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-12 col-md-3 col-lg-2">
                                            <h5>Relacionado Primario</h5>
                                            <button type="button" class="btn btn-success">BUSCAR CIE-10</button>
                                        </div>


                                        <div class="col-12 col-md-9 col-lg-10">
                                            <div class="form-group">
                                                <label for="comment">Descripcion </label>
                                                <textarea class="form-control" rows="3" id="diag1" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-12 col-md-3 col-lg-2">
                                            <h5>Relacionado Secundario</h5>
                                            <button type="button" class="btn btn-success">BUSCAR CIE-10</button>
                                        </div>


                                        <div class="col-12 col-md-9 col-lg-10">
                                            <div class="form-group">
                                                <label for="comment">Descripcion </label>
                                                <textarea class="form-control" rows="3" id="diag2" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-12 col-md-3 col-lg-2">
                                            <h5>Relacionado Terciario</h5>
                                            <button type="button" class="btn btn-success">BUSCAR CIE-10</button>
                                        </div>


                                        <div class="col-12 col-md-9 col-lg-10">
                                            <div class="form-group">
                                                <label for="comment">Descripcion </label>
                                                <textarea class="form-control" rows="3" id="diag3" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-12 col-md-3 col-lg-2">
                                            <h5>Relacionado Cuartenario</h5>
                                            <button type="button" class="btn btn-success">BUSCAR CIE-10</button>
                                        </div>


                                        <div class="col-12 col-md-9 col-lg-10">
                                            <div class="form-group">
                                                <label for="comment">Descripcion </label>
                                                <textarea class="form-control" rows="3" id="diag4" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>



                                    <!--  -->
                                </div>
                            </div>
                            <div class="tab-pane  p-20" id="historialp2" role="tabpanel">
                                <!-- inico de tab 2 -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="myTable2" class="table table-bordered table-striped table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>Fecha</th>
                                                        <th>Tipocita Especificacion</th>
                                                        <th>Dias evolucion</th>
                                                        <th>Clasificacion</th>
                                                        <th>Descripcion</th>
                                                        <th>Opciones</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi minus aliquam sunt hic suscipit error fugiat iure eius praesentium. Labore mollitia aliquid saepe veritatis ut ea inventore molestiae, nesciunt consequuntur!</td>
                                                        <td>Edinburgh</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>Edinburgh</td>
                                                        <td>63</td>
                                                        <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>Edinburgh</td>
                                                        <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>Edinburgh</td>
                                                        <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>Edinburgh</td>
                                                        <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>San Francisco</td>
                                                        <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>San Francisco</td>
                                                        <td>2008/12/13</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>San Francisco</td>
                                                        <td>2008/12/19</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Quinn Flynn Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores nihil quisquam, magni voluptatem ratione soluta. Nostrum sunt ea est fuga quos eum perspiciatis possimus dolore iste quas! Ad, incidunt mollitia.</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>San Francisco</td>
                                                        <td>2013/03/03</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatum nemo repellat nostrum natus fugit eligendi, velit sed cupiditate, quidem mollitia ratione eum sit at praesentium porro. Ullam, ipsum est?</td>
                                                        <td>2008/10/16</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>San Francisco</td>
                                                        <td>2012/12/18</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Tatyana Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>19</td>
                                                        <td>San Francisco</td>
                                                        <td>2010/03/17</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>San Francisco</td>
                                                        <td>2012/11/27</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>San Francisco Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore dignissimos cum reiciendis nulla tenetur! Aperiam minima magnam harum facere. Voluptatibus et provident architecto molestiae mollitia sint quis in, possimus necessitatibus?</td>
                                                        <td>2010/06/09</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>San Francisco</td>
                                                        <td>2009/04/10</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>San Francisco</td>
                                                        <td>2012/10/13</td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>



                                <!--  -->
                            </div>


                        </div>



                    </div>
                </div>
            </div><!-- fin de tab lateral  -->


            <!--  -->



        </div>
    </div>
</div>