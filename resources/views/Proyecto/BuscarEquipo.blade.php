<div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="largemodal" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largemodal1">Registrar integrante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

            </div>
            <center>
                <div id="divmsg" style="display:none" class="alert alert-primary" role="alert">
                </div>
            </center>
            <form data-action="{{ route('registrardocente') }}" method="POST" enctype="multipart/form-data"
                id="add-user-form">
                @csrf
                <div class="modal-body">
                    <fieldset class="border p-2">
                        <legend class="float-none w-auto p-2 form-label">Datos personales</legend>
                        <div class="mb-3 row">
                            <label for="dni" class="col-md-2 form-label">DNI<span class="text-danger"> *</span></label>
                            <div class="col-md-4">
                                <input id="miembro" name="miembro" type="text" class="form-control numbersonly" hidden>
                                <input id="dni" name="dni" type="text" class="form-control numbersonly" value=""
                                    maxlength="8" readonly>
                            </div>
                            <label for="nombre" class="col-md-2 form-label ">Nombres<span class="text-danger">
                                    *</span></label>
                            <div class="col-md-4">
                                <input id="nombre" name="nombre" type="text" class="form-control UpperCase" value=""
                                    required="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="apellidos" class="col-md-2 form-label">Apellidos<span class="text-danger"> *</span></label>
                            <div class="col-md-4">
                                <input id="apellidos" name="apellidos" type="text" class="form-control UpperCase" value="" required="">
                            </div>
                            <label for="celular" class="col-md-2 form-label">Celular<span class="text-danger"> *</span></label>
                            <div class="col-md-4">
                                <input id="celular" name="celular" type="text" class="form-control numbersonly" placeholder="" required="" maxlength="9">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="border p-2">
                        <legend class="float-none w-auto p-2 form-label">Datos académicos</legend>
                        <div class="mb-3 row">
                            <label for="inputName" class="col-md-2 form-label">Tipo de investigador</label>
                            <div class="col-md-4">
                                <select id="tipoinvestigador" name="tipoinvestigador" class="form-control form-select">
                                    @foreach ($tipoinvestigadores as $tipoin)
                                    <option value="{{  $tipoin->PK_TipoInvestigador  }}">{{ $tipoin->Tinv_Nombre }}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="facultad" class="col-md-2 form-label">Facultad<span
                                    class="text-danger"> *</span></label>
                            <div class="col-md-4">
                                <select name="facultad" id="facultad"
                                    class="form-control form-select select2" required>
                                    <option value="" selected disabled>- SELECCIONE -</option>
                                    <option value="facultad1">FISeIC</option>
                                    <option value="facultad2">FDyCP</option>
                                    <option value="facultad3">FAEyC</option>
                                    <option value="facultad4">FEyCs</option>
                                    <option value="facultad5">FCA</option>
                                    <option value="facultad6">FMS</option>
                                    <option value="facultad7">FCS</option>
                                    <option value="facultad8">FCFyA</option>
                                </select>
                            </div>
                            <label for="escuela" class="col-md-2 form-label">Escuela<span
                                    class="text-danger"> *</span></label>
                            <div class="col-md-4">
                                <select id="escuela" name="escuela"
                                    class="form-control form-select select2" required>
                                    <option value="" selected disabled>- SELECCIONE -</option>
                                    @foreach ($carreras as $escu)
                                    <option value="{{  $escu->PK_Carrera }}">{{
                                        $escu->Carr_Nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="correo" class="col-md-2 form-label">Correo
                                Institucional<span class="text-danger"> *</span></label>
                            <div class="col-md-4">
                                <input id="correo" name="correo" type="email"
                                    class="form-control" value="" required="">
                            </div>
                            <label for="grado" class="col-md-2 form-label">Grado
                                Academico<span class="text-danger"> *</span></label>
                            <div class="col-md-4">
                                <select name="grado" id="grado"
                                    class="form-control form-select select2" required>
                                    <option value="" selected disabled>- SELECCIONE -</option>
                                    @foreach ($gradosacademicos as $grado)
                                    <option value="{{  $grado->PK_GradoAcademico }}">{{
                                        $grado->Gaca_Abreviatura }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="mencion" class="col-md-2 form-label">Mención<span class="text-danger"> *</span></label>
                         
                            <div class="col-md-10">
                                <input id="mencion" name="mencion" type="text" class="form-control UpperCase" required>
                            </div>
                        </div>
                    </fieldset>
                    <div>
                        <label class="mt-2"><small style="color: red">(*) Campos obligatorios</small></label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
            </form>
        </div>
    </div>
</div>