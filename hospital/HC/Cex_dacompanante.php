<!--  -->


<div class="card m-b-0">
  <div class="card-header bg-white p-0" id="h_dacomp">
    <h5 class="mb-0">
      <button id="barra" class="btn btn-link" type="button" data-toggle="collapse" data-target="#c_dacomp" aria-expanded="true" aria-controls="c_dacomp">
        <i class="fas fa-users"></i>
        Datos del acompañante
      </button>
    </h5>
  </div>

  <div id="c_dacomp" class="collapse" aria-labelledby="h_dacomp" data-parent="#accordion_HC">
    <div class="card-body">
      <!--  -->
      <div class="row justify-content-center">

        <div class="form-group">
          <label class="custom-control custom-checkbox m-b-0">
            <input type="checkbox" class="custom-control-input">
            <br>
            <span class="custom-control-label">El paciente asiste sin acompañante</span>
          </label>
        </div>

      </div>
      <div class="panel-body">
        <form class="form">
          <div class="row">
            <div class="col-md-6 col-xs-6">
              <div class="form-group">
                <label>Nombres y Apellidos</label>
                <input type="text" class="form-control" placeholder="">
              </div>

              <div class="form-group">
                <label>Parentesco</label>
                <select class="form-control" id="parentesco">

                  <option></option>
                  <option value="Amigo">Amigo</option>
                  <option value="pareja">Pareja</option>
                  <option value="padrinos">Padrino-Madrina</option>
                  <option value="hijo">Hijo</option>
                  <option value="hija">Hija</option>
                  <option value="hermano">Hermano</option>
                  <option value="hermana">Hermana</option>
                  <option value="mama">Mama</option>
                  <option value="papa">Papa</option>
                  <option value="primos materno">Primos maternos</option>
                  <option value="primos paternos">Primos paternos</option>
                  <option value="Tios materno">Tios maternos</option>
                  <option value="Tios paterno">Tios paternos</option>
                  <option value="abuelos maternos">Abuelos maternos</option>
                  <option value="abuelos paternos">Abuelos paternos</option>
                  <option value="ninguno">Ninguno</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-xs-6">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="number" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Celular</label>
                    <input type="number" class="form-control" placeholder="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Numero de documento</label>
                <input type="number" class="form-control" placeholder="">
              </div>
            </div>
          </div>
        </form>
      </div>



      <!--  -->



    </div>
  </div>
</div>