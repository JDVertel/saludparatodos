<br>
<div class="card m-b-0">
  <div class="card-header bg-white p-0" id="h_remision">
    <h5 class="mb-0">
      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c_remision" aria-expanded="true" aria-controls="c_remision">
        <i class="far fa-hospital"></i>
        Remisiones
      </button>
    </h5>
  </div>

  <div id="c_remision" class="collapse" aria-labelledby="h_remision" data-parent="#accordion_HC">
    <div class="card-body">
      <!--  -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home6" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Actual</span></a> </li>

              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#historialp6" role="tab"><span class="hidden-sm-up"><i class="ti-archive"></i></span> <span class="hidden-xs-down">Historial</span></a> </li>




            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabcontent-border">

              <div class="tab-pane active" id="home6" role="tabpanel">
                <div class="p-20">
                  <!-- inicio de tab 1 -->




                  <div class="row justify-content-center">

                    <div class="col-12 col-md-4">
                      <div class="card ">
                        <div class="card-body">
                          <h4 class="card-title">Motivo de la remision</h4>
                          <br>
                          <textarea class="resizable_textarea form-control" placeholder=""></textarea>

                        </div>
                      </div>



                    </div>
                    <div class="col-12 col-md-6">
                      <div class="card text-justify">
                        <div class="card-body">
                          <h4 class="card-title">Diagnostico de la consulta</h4>
                          <p class="card-text">aqui va el diagnostico primario selecionado en la ventana de diagnostico Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur cupiditate doloremque odit culpa pariatur expedita quos ipsa voluptatum laboriosam. Neque, ducimus temporibus aliquid itaque autem quam praesentium libero id delectus.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                      <div class="card text-justify">
                        <div class="card-body">
                          <h4 class="card-title">Tipo se servicio al cual se remite </h4>
                          <label for="sel_tipodiag">Clasificacion Servicio</label>
                          <select class="form-control required" id="tipodiag">
                            <option></option>
                            <option>Programa pyp</option>
                            <option>Especialista</option>
                            <option>Servicio externo</option>
                          </select>
                          <br>
                          <label for="sel_tipodiag">Especificacion del servicio</label>
                          <select class="form-control required" id="tipodiag">
                            <option></option>
                            <option>programa pyp</option>
                            <option>programa pyp</option>
                            <option>programa pyp</option>
                            <option>especialidad pediatria</option>
                            <option>especialidad ortopedia</option>
                            <option>especialdidad gimnecologia</option>
                            <option>Internista</option>
                          </select>






                        </div>

                      </div>


                    </div>


                    <div class="col-12 col-md-6">
                      <div class="card text-center">
                        <div class="card-body">
                          <h4 class="card-title">Analisis de la consulta</h4>
                          <p class="card-text"> aqui va el analisis de la consulta consignado en la pestana analisis Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam id nulla quae nisi, temporibus enim mollitia aliquid nobis vero hic blanditiis magni iure, facere quas ut excepturi, nemo rem! Nam.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="card text-center">
                        <div class="card-body">
                          <h4 class="card-title">Plan de manejo</h4>
                          <p class="card-text"> aqui va el analisis de la consulta consignado en la pestana analisis Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam id nulla quae nisi, temporibus enim mollitia aliquid nobis vero hic blanditiis magni iure, facere quas ut excepturi, nemo rem! Nam.</p>
                        </div>
                      </div>
                    </div>



                    <div class="col-12 col-md-6 col-lg-6">
                      <h5> <strong> Observaciones de la remision</strong></h5>
                      <textarea class="resizable_textarea form-control" placeholder=""></textarea>
                    </div>

                  </div>


                  <!--  -->
                </div>
              </div>
              <div class="tab-pane  p-20" id="historialp6" role="tabpanel">
                <!-- inico de tab 2 -->

                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="myTable6" class="table table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>Fecha</th>
                            <th>Tipocita Especificacion</th>
                            <th>tipo de remision</th>
                            <th>Motivo de remision</th>
                            <th>Opciones</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


                          </tr>
                          <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button></td>


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