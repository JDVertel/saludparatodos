     <div class="col-md-12">
         <div class="card border-info">
             <div class="card-header bg-info">
                 <h4 class="m-b-0 text-white"><i class="fas fa-hourglass-start"></i> Lista de espera de Consultas Medicas</h4>
             </div>
             <div class="card-body">

                 <div class="row">
                     <div class="col-12 col-md-4">
                         <p style="text-align: justify">
                             En ocasiones se requieren consultas específicas que están agotadas o que son realizadas esporádicamente por su IPS, este componente le permitirá enlistarse virtualmente para la asignación de citas, así en el momento en que su IPS tenga disponibilidad de esta, dispondra de esta solicitud para realizar la asignacion de la cita requerida y le será enviado un email con los datos para su asistencia.
                             <br>
                             <hr>

                             <i class="fas fa-exclamation-triangle"></i>
                             <strong>
                                 Tenga en cuenta que el proceso de agendamiento y asignación es gestionado directamente por su IPS, así como su disponibilidad.
                             </strong>

                         </p>

                         <div class="row">
                             <div class="col-md-12">
                                 <div class="card border-info">
                                     <div class="card-header bg-warning">
                                         <h4 class="m-b-0 text-white"><i class="far fa-plus-square"></i> Nueva solicitud</h4>
                                     </div>
                                     <div class="card-body">
                                         <div class="row p-t-20">

                                             <div class="row">
                                                 <div class="col-md-9">
                                                     <div class="form-group has-success">
                                                         <label class="control-label">Tipo de Consulta</label>
                                                         <select class="form-control custom-select">
                                                             <option value="07">pyp - gestantes</option>
                                                             <option value="21">pyp - planificacion familiar</option>
                                                             <option value="12">Odontologia</option>
                                                             <option value="3">Fisioterapia</option>
                                                         </select>
                                                     </div>
                                                 </div>
                                             </div>


                                             <div class="row">
                                                 <div class="col-md-9">
                                                     <div class="form-group has-success">
                                                         <label class="control-label">Horario Sugerido</label>
                                                         <select class="form-control custom-select">
                                                             <option value="am">am</option>
                                                             <option value="pm">pm</option>
                                                         </select>
                                                     </div>
                                                 </div>
                                             </div>

                                         </div>


                                         <div class="form-actions">
                                             <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Guardar</button>
                                             <button type="button" class="btn btn-inverse">Cancelar</button>
                                         </div>
                                       

                                     </div>

                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-12 col-md-8">
                         <div class="col-lg-12">
                             <div class="card">
                                 <div class="card-body">
                                     <h4 class="card-title">Tus solicitudes vigentes</h4>
                                     <div class="table-responsive">
                                         <table class="table color-table info-table table-condensed table-striped">
                                             <thead>
                                                 <tr>
                                                     <th>Fecha de solicitud</th>
                                                     <th>Tipo de consulta</th>
                                                     <th>Horario sugerido</th>
                                                     <th>Procedencia de solicitud</th>
                                                     <th>Opciones</th>

                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <tr>

                                                     <td>11/02/2019</td>
                                                     <td>pyp-gestantes</td>
                                                     <td>pm</td>
                                                     <td>Programa pyp</td>
                                                     <td><span class="label label-danger">Cancelar</span> </td>
                                                 </tr>
                                                 <tr>

                                                     <td>12/05/2019</td>
                                                     <td>Fisioterapia</td>
                                                     <td>pm</td>
                                                     <td>Consulta Externa</td>
                                                     <td><span class="label label-danger">Cancelar</span> </td>
                                                 </tr>
                                                 <tr>

                                                     <td>10/06/2019</td>
                                                     <td>Odontologia</td>
                                                     <td>am</td>
                                                     <td>Personal</td>
                                                     <td><span class="label label-danger">Cancelar</span> </td>
                                                 </tr>
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
         </div>
     </div>