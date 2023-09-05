   <body id="agendamiento1">

       <div class="card-body">

           <div class="col-md-12">
               <div class="card border-info">
                   <div class="card-header bg-info">
                       <h4 class="m-b-0 text-white"><i class="far fa-calendar-plus"></i> Agendar nueva cita</h4>
                   </div>
                   <div class="card-body">





                       <h3 class="card-title">1. Seleccione el tipo de cita </h3>
                       <p class="card-text">Ingrése sus datos y el asistente lo guiara a través del proceso de agendamiento</p>

                   </div>







               </div>


               <!-- Step 1 -->


               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="wlocation2"> Tipo de Cita - cantidad: <span class="danger">*</span> </label>
                           <select class="custom-select form-control required" id="tipocita" name="location">
                               <option value="">Seleccione</option>
                               <option value="c_ex">consulta Externa - (3)</option>
                               <option value="c_esp">Consuta Especializada - (5)</option>
                               <option value="c_od">Consulta Odontologica - (1)</option>
                           </select>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="wlocation2"> Especificacion de la Cita - cantidad  : <span class="danger">*</span> </label>
                           <select class="custom-select form-control required" id="especif" name="location">
                               <option value="">Seleccione</option>
                               <option value="pyp_g">pyp-gestante - (1)</option>
                               <option value="pyp_planf">pyp-planificacion familiar - (2)</option>
                               <option value="pyp_cron">pyp-cronicos - (2)</option>
                           </select>
                       </div>
                   </div>
               </div>
               <div class="row justify-content-end">
                   <!--    <button type="button" class="btn waves-effect waves-light btn-outline-danger">Cancelar</button> -->
                   <br>
                   <button type="button" class="btn waves-effect waves-light btn-outline-success">Siguiente <i class="fas fa-angle-double-right"></i></button>
               </div>

           </div>
           <!-- 
           <h4 class="card-title">Agendamiento de Consulta Medica</h4>
           <h6 class="card-subtitle"></h6>

           <img src="" alt=""> -->


       </div>


   </body>

   <!-- Step 2 -->