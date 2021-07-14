<div class="row">
  <div class="col-md-12">
      <div class="card  ">
        <div class="card-header p-0 pt-0">

            <h3>   <a  href="<?php echo $path."internacion/listado-internacion" ?>" class="btn btn-outline-primary  btn-sm ml-3"> <span class="fa  fa-arrow-left"></span> ir listado internacion</a> Registrar Nueva internación</h3>

        </div>
        <div class="card-body">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <form class="form " method="post">
                  <div class="row">

                    <div class="col-sm-4">
                     <label>Paciente</label>
                      <div class="col-sm-12  mb-3 pl-0 ml-0">
                         <div class="input-group  ">
                           <input type="hidden" name="id_historia" id="id_historia" value="">
                             <input type="hidden" name="idpaciente" id="idpaciente" class="form-control form-control-sm">
                             <input type="text" name="nombre_paciente" id="nombre_paciente" class="form-control form-control-sm" readonly>
                             <span class="input-group-append">
                               <button type="button" class="btn btn-info btn-flat btn-sm" onclick="dataTable('cl-paciente2')" data-toggle="modal" data-target="#md-buscar-paciente" >Buscar Paciente</button>
                             </span>
                       </div>
                     </div>
                    </div>

                    <div class="col-sm-3">
                       <!-- text input -->
                       <div class="form-group">
                         <label>Fecha Internamiento</label>
                          <input type="date" class="form-control form-control-sm" name="fecha_internamiento" value="" >
                       </div>
                     </div>
                     <div class="col-sm-3">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Fecha Alta</label>
                           <input type="date" class="form-control form-control-sm" name="fecha_alta" value="" >
                        </div>
                      </div>
                      <div class="col-sm-2">
                         <!-- text input -->
                         <div class="form-group">
                           <label>Hora Alta</label>
                           <div class="input-group date" id="timepicker4" data-target-input="nearest">
                             <input type="text" class="form-control form-control-sm datetimepicker-input" name="hora_alta"   data-target="#timepicker4"/>
                             <div class="input-group-append" data-target="#timepicker4" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="far fa-clock"></i></div>
                             </div>
                             </div>
                         </div>
                       </div>


                     <div class="col-sm-12">
                       <!-- text input -->
                       <div class="form-group">
                         <label>Motivo Internamiento</label>
                         <textarea name="motivo_internamiento" class="form-control"  rows="2"  cols="80"  style="resize: none;"></textarea>
                       </div>
                     </div>

                      <div class="col-sm-12">
                         <!-- text input -->
                         <div class="form-group">
                           <label>otros</label>
                            <textarea class="form-control" name="otros" rows="2" cols="80"   style="resize: none;"></textarea>
                         </div>
                       </div>
                       <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Veterinario</label>
                              <select class="form-control form-control-sm" name="id_veterinario">
                                <option value="">Seleccione</option>
                                <option value="1-vetrinario">veterinario 01</option>
                              </select>
                          </div>
                        </div>

                  </div>

                  <?php $citas=new TableController();
                        $citas->registerInternamiento();

                   ?>
                  <div class="col-sm-2"  style="float:right">
                    <button type="submit" class="btn btn-block btn-success btn-flat" name="button" >Guardar</button>
                  </div>
                 </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<?php include 'modal/md-buscar-paciente.php'; ?>
