<!--  -->

<br>

<div class="card m-b-0">
	<div class="card-header bg-white p-0" id="h_mconsulta">
		<h5 class="mb-0">
			<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c_mconsulta" aria-expanded="true" aria-controls="c_mconsulta">
				<i class="far fa-question-circle"></i>
				Motivo consulta
			</button>
		</h5>

	</div>

	<div id="c_mconsulta" class="collapse" aria-labelledby="h_mconsulta" data-parent="#accordion_HC">
		<!-- inicio de tabs laterales  -->
		<div class="col-md-12" class="col align-self-center">
			<div class="card">
				<div class="card-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Actual</span></a> </li>

						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#historialp" role="tab"><span class="hidden-sm-up"><i class="ti-archive"></i></span> <span class="hidden-xs-down">Historial</span></a> </li>

					</ul>
					<!-- Tab panes -->
					<div class="tab-content tabcontent-border">

						<div class="tab-pane active" id="home" role="tabpanel">
							<div class="p-20">
								<!-- inicio de tab 1 -->
								<div class="row">
									<!--  -->

									<div class="col-12 col-md-10 col-lg-10"><label>Motivo de la consulta</label>
										<textarea class="resizable_textarea form-control" placeholder=""></textarea>
									</div>
									<div class="col-12 col-md-2 col-lg-2"><label for="" <label for="usr">Dias de evolucion</label>
										<input type="number" class="form-control" id="diasevol">
									</div>
								</div>

								<div class="row">

									<div class="col-12 col-md-6 col-lg-6"><label>Enfermedad actual</label>
										<textarea class="resizable_textarea form-control" placeholder=""></textarea>
									</div>
									<div class="col-12 col-md-6 col-lg-6"><label>El paciente llega por sus propios medios</label>


										<select id="heard" class="form-control" required>
											<option value="0">Seleccione la manera de ingreso del paciente</option>
											<option value="caminando">Caminando solo</option>
											<option value="caminando ayuda">Caminando ayudado por acompañante</option>
											<option value="silla ruedas">Silla de ruedas</option>
											<option value="muleta">Muletas</option>
											<option value="muleta">Caminador</option>
											<option value="muleta">Camilla</option>

										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-12 col-md-6 col-lg-6"><label>Escala de dolor</label>
										<select id="heard" class="form-control" required>
											<option value=""></option>
											<option value="0">0 - Minimo</option>
											<option value="1">1 - Poco</option>
											<option value="4">4 - Moderado</option>
											<option value="6">6 - Fuerte</option>
											<option value="8">8 - Muy fuerte</option>
											<option value="10">10 - Insoportable</option>
										</select>
									</div>
									<div class="col-12 col-md-6 col-lg-6"><label>Es gestante?</label>
										<select id="heard" class="form-control" required>
											<option value=""></option>
											<option value="net">si</option>

										</select>
									</div>
								</div>

								<!--  -->
							</div>
						</div>
						<div class="tab-pane  p-20" id="historialp" role="tabpanel">
							<!-- inico de tab 2 -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="myTable1" class="table table-bordered table-striped table-sm">
											<thead>
												<tr>
													<th>Fecha</th>
													<th>Tipocita/Especificacion</th>
													<th>Escala de dolor</th>
													<th>Motivo consulta</th>
													<th>Opciones</th>

												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>
														<button type="button" class="btn waves-effect waves-light btn-outline-warning">
															<i class="ti-search"></i> </button>
													</td>

												</tr>
												<tr>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td><button type="button" class="btn waves-effect waves-light btn-outline-warning">
															<i class="ti-search"></i> </button></td>

												</tr>
												<tr>
													<td>Ashton Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td><button type="button" class="btn waves-effect waves-light btn-outline-warning">
															<i class="ti-search"></i> </button></td>

												</tr>
												<tr>
													<td>Cedric Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td><button type="button" class="btn waves-effect waves-light btn-outline-warning">
															<i class="ti-search"></i> </button></td>

												</tr>
												<tr>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td><button type="button" class="btn waves-effect waves-light btn-outline-warning">
															<i class="ti-search"></i> </button></td>

												</tr>
												<tr>
													<td>Brielle Williamson</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>61</td>
													<td><button type="button" class="btn waves-effect waves-light btn-outline-warning">
															<i class="ti-search"></i> </button></td>

												</tr>
												<tr>
													<td>Herrod Chandler</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>59</td>
													<td><button type="button" class="btn waves-effect waves-light btn-outline-warning">
															<i class="ti-search"></i> </button></td>

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
													<td><button type="button" class="btn waves-effect waves-light btn-outline-warning"><i class="ti-search"></i> </button>/td>

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
													<td>2008/10/16</td>

												</tr>
												<tr>
													<td>Haley Kennedy</td>
													<td>Senior Marketing Designer</td>
													<td>London</td>
													<td>43</td>
													<td>2012/12/18</td>

												</tr>
												<tr>
													<td>Tatyana Fitzpatrick</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>19</td>
													<td>2010/03/17</td>

												</tr>
												<tr>
													<td>Michael Silva</td>
													<td>Marketing Designer</td>
													<td>London</td>
													<td>66</td>
													<td>2012/11/27</td>

												</tr>
												<tr>
													<td>Paul Byrd</td>
													<td>Chief Financial Officer (CFO)</td>
													<td>New York</td>
													<td>64</td>
													<td>2010/06/09</td>

												</tr>
												<tr>
													<td>Gloria Little</td>
													<td>Systems Administrator</td>
													<td>New York</td>
													<td>59</td>
													<td>2009/04/10</td>

												</tr>
												<tr>
													<td>Bradley Greer</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>41</td>
													<td>2012/10/13</td>

												</tr>

											</tbody>
										</table>
									</div>
								</div>
							</div>









						</div>

					</div>



				</div>
			</div>
		</div><!-- fin de tab lateral  -->





	</div> <!-- fin de acordeon -->
</div><!-- fin del modulo  -->