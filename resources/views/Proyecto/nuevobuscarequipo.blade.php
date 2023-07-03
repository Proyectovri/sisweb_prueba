 
<!-- Button trigger modal -->
  <!-- Modal -->

  <div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="largemodal" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="largemodal1">Registrar integrante</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
                    </div>
                     <form name="contactUsForm" id="contactUsForm" method="post" action="javascript:void(0)">

                      @csrf
                    <div class="modal-body">
                       
                                             
                                              <fieldset class="border p-2">
                                                    <legend  class="float-none w-auto p-2 form-label">
                                                        Datos Personales
                                                    </legend>
                                            <div class="mb-3 row">
                                                <label for="inputName" class="col-md-2 form-label">DNI</label>
                                                <div class="col-md-4">
                                                     <input id="dni" name="dni" type="text" class="form-control numbersonly" value="" required="" maxlength="8" >
                                                </div>
                                                 <label for="inputName" class="col-md-2 form-label ">Nombre</label>
                                                <div class="col-md-4">
                                                     <input id="nombre" name="nombre" type="text" class="form-control UpperCase" value="" required="">
                                                </div>
                                            </div>

                                             <div class="mb-3 row">
                                                <label for="inputName" class="col-md-2 form-label">Apellidos</label>
                                                <div class="col-md-4">
                                                     <input id="apellidos" name="apellidos" type="text" class="form-control UpperCase" value="" required="">
                                                </div>
                                                 <label for="inputName" class="col-md-2 form-label">celular</label>
                                                <div class="col-md-4">
                                                     <input id="celular" name="celular" type="text" class="form-control numbersonly" placeholder="" required="" maxlength="9">
                                                </div>
                                            </div>                                            
                                             </fieldset>
                                             <fieldset class="border p-2">
                                                    <legend  class="float-none w-auto p-2 form-label">
                                                        Datos académicos
                                                    </legend>
                                                    <div class="mb-3 row">
                                                <label for="inputName" class="col-md-2 form-label">Tipo de investigador</label>
                                                <div class="col-md-4">
                                                     <select id="escuela" name="escuela" class="form-control form-select select2">
                                                               @foreach ($tipoinvestigadores as $tipoin)
                                                                    <option value="{{  $tipoin->PK_TipoInvestigador  }}">{{  $tipoin->Tinv_Nombre }}</option>
                                                                    @endforeach  
                                                            </select>
                                                </div>
                                                 <label for="inputName" class="col-md-2 form-label">Escuela</label>
                                                <div class="col-md-4">
                                                     <select id="escuela" name="escuela" class="form-control form-select select2">
                                                                @foreach ($carreras as $escu)
                                                                    <option value="{{  $escu->PK_Carrera }}">{{  $escu->Carr_Nombre }}</option>
                                                                    @endforeach
                                                            </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                
                                                 <label for="inputName" class="col-md-2 form-label">Correo Institucional</label>
                                                <div class="col-md-4">
                                                      <input id="correo" name="correo" type="email" class="form-control" value="" required="">
                                                </div>
                                                <label for="inputName" class="col-md-2 form-label">Grado Academico</label>
                                                <div class="col-md-4">
                                                     <select name="grado" id="grado" class="form-control form-select select2">
                                                           @foreach ($gradosacademicos as $grado)
                                                                    <option value="{{  $grado->PK_GradoAcademico }}">{{  $grado->Gaca_Abreviatura }}</option>
                                                                    @endforeach
                                                            </select>
                                                </div>
                                            </div>

                                             <div class="mb-3 row">
                                                
                                                 <label for="inputName" class="col-md-2 form-label">Mencion</label>
                                                <div class="col-md-4">
                                                      <input id="mencion" name="mencion" type="text" class="form-control UpperCase" placeholder="">
                                            </div>                                            
                                             </fieldset>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" onclick="registrarintegrante()" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
                </form>
            </div>
  </div>

<script type="text/javascript">
  var form = '#contactUsForm';
  $.(form).on('submit', function(event){

    alert('hola');
  });


    
</script>

