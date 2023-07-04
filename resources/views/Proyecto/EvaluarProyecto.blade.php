@extends('layouts.app')
@section('contents')
<div class="side-app">
    <div class="container-fluid main-container">
        <!--Row -->
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Evaluación de cumplimiento de requisitos
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-striped table-bordered text-wrap"
                                    style="width:100%">
                                    <thead>
                                        <tr class="bold">
                                            <th class="border-bottom-0">N°</th>
                                            <th class="border-bottom-0">Código</th>
                                            <th class="border-bottom-0">Responsable</th>
                                            <th class="border-bottom-0">Tipo de inv.</th>
                                            <th class="border-bottom-0">Escuela</th>
                                            <th class="text-center border-bottom-0">Estado</th>
                                            <th class="border-bottom-0">DOCS. PROYECTO</th>
                                            <th class="border-bottom-0">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#miInfo">2024-001</a>
                                            </td>
                                            <td>EUCLIDES PANDURO PADILLA</td>
                                            <td>APLICADA</td>
                                            <td>ING. CIVIL</td>
                                            <td><span class="badge bg-success rounded-pill">Registrado</span></td>
                                            <td class="w-1 text-center">
                                                <a href="#" class="btn btn-icon2 btn-white" data-bs-toggle="modal"
                                                    data-bs-target="#misDocs">
                                                    <i class="fa fa-folder-open-o fa-lg text-primary"></i>
                                                </a>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2024-002</td>
                                            <td>CESAR AGURTO CHERRE</td>
                                            <td>APLICADA</td>
                                            <td>ING. DE SISTEMAS</td>
                                            <td><span class="badge bg-primary rounded-pill">Registrado</span></td>
                                            <td class="w-1 text-center"><a href="javascript:void(0)"
                                                class="btn btn-icon2 btn-white">
                                                <i class="fa fa-folder-open-o fa-lg text-primary"></i></a></td>
                                            <td>
                                                <button type="button" id="miBoton"
                                                    class="btn btn-primary">Revisar</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>2024-003</td>
                                            <td>DIANA DIAZ ESTRADA</td>
                                            <td>BÁSICA</td>
                                            <td>ING. DE SISTEMAS</td>
                                            <td><span class="badge bg-secondary rounded-pill">Registrado</span></td>
                                            <td class="w-1 text-center"><a href="javascript:void(0)"
                                                    class="btn btn-icon2 btn-white">
                                                    <i class="fa fa-folder-open-o fa-lg text-primary"></i></a></td>
                                            <td><button type="button" class="btn btn-primary">Revisar</button></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>2024-004</td>
                                            <td>EUCLIDES PANDURO PADILLA</td>
                                            <td>BÁSICA</td>
                                            <td>ING. CIVIL</td>
                                            <td><span class="badge bg-primary rounded-pill">Registrado</span></td>
                                            <td class="w-1 text-center"><a href="javascript:void(0)"
                                                    class="btn btn-icon2 btn-white">
                                                    <i class="fa fa-folder-open-o fa-lg text-primary"></i></a></td>
                                            <td><button type="button" class="btn btn-primary">Revisar</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a class="btn-link" href="javascript:void(0)">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="misDocs" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Contenido del modal -->
            <div class="modal-header">
                <h5 class="modal-title">Documentos del proyecto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <p class="mg-b-20 text-secondary"><b>CÓDIGO: 2024-001</b></p>
                    <p class="mg-b-20"><b>TÍTULO DEL PROYECTO:</b> SISTEMA WEB PARA LA MEJORA DE LA GESTION ACADEMICA
                    </p>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">
                                Proyecto de investigación <i class="fa fa-file-pdf-o text-primary"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Declaración jurada de originalidad <i class="fa fa-file-pdf-o text-primary"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Carta de compromiso <i class="fa fa-file-pdf-o text-primary"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Convenio de colaboración <i class="fa fa-file-pdf-o text-primary"></i>
                            </a>
                        </li>
                    </ul>
                    <fieldset class="border p-2">
                        <legend class="float-none w-auto p-2 form-label">RESPONSABLE </legend>
                        <div class="mb-3 row">
                            <p class="mg-b-20">
                                <span class="text-primary"><b>EUCLIDES PANDURO PADILLA</b></span>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">
                                        CTI Vitae <i class="fa fa-file-pdf-o text-primary"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        Ficha RENACYT <i class="fa fa-file-pdf-o text-primary"></i>
                                    </a>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </fieldset>
                    <fieldset class="border p-2">
                        <legend class="float-none w-auto p-2 form-label">MIEMBROS </legend>
                        <div class="mb-3 row">
                            <p class="mg-b-20">
                                <span class="text-primary"><b>JUAN CARLOS MARIN FLORES</b></span>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            CTI Vitae <i class="fa fa-file-pdf-o text-primary"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Ficha RENACYT <i class="fa fa-file-pdf-o text-primary"></i>
                                        </a>
                                    </li>
                                </ul>
                            </p>
                            <p class="mg-b-20">
                                <span class="text-primary"><b>CESAR AGURTO CHERRE</b></span>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            CTI Vitae <i class="fa fa-file-pdf-o text-primary"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Ficha RENACYT <i class="fa fa-file-pdf-o text-primary"></i>
                                        </a>
                                    </li>
                                </ul>
                            </p>
                            <p class="mg-b-20">
                                <span class="text-primary"><b>ORIANA OLENKA MONTES BELLIDO</b></span>
                                <br>
                                <a href="javascript:void(0)">
                                    Avance Curricular <i class="fa fa-file-pdf-o text-primary"></i>
                                </a>
                            </p>
                        </div>
                    </fieldset>
                    <fieldset class="border p-2">
                        <legend class="float-none w-auto p-2 form-label">COLABORADORES </legend>
                        <div class="mb-3 row">
                            <p class="mg-b-20">
                                <span class="text-primary"><b>FRED CRUZ TORRES</b></span>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            CTI Vitae <i class="fa fa-file-pdf-o text-primary"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Ficha RENACYT <i class="fa fa-file-pdf-o text-primary"></i>
                                        </a>
                                    </li>
                                </ul>
                            </p>
                            <p class="mg-b-20">
                                <span class="text-primary"><b>MARCELO GONZALES GARCIA</b></span>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            CTI Vitae <i class="fa fa-file-pdf-o text-primary"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Ficha RENACYT <i class="fa fa-file-pdf-o text-primary"></i>
                                        </a>
                                    </li>
                                </ul>
                            </p>
                            <p class="mg-b-20">
                                <span class="text-primary"><b>KENJI AGUSTIN MURAKAMI RUBIO</b></span>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            CTI Vitae <i class="fa fa-file-pdf-o text-primary"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Ficha RENACYT <i class="fa fa-file-pdf-o text-primary"></i>
                                        </a>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div id="miInfo" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Contenido del modal -->
            <div class="modal-header">
                <h5 class="modal-title">Información del proyecto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <p class="mg-b-20 text-secondary"><b>CÓDIGO: 2024-001</b></p>
                    <p class="mg-b-20"><b>TÍTULO DEL PROYECTO:</b> SISTEMA WEB PARA LA MEJORA DE LA GESTION ACADEMICA
                    </p>
                    <p class="mg-b-10"><b>RESPONSABLE:</b> EUCLIDES PANDURO PADILLA</p>
                    <p class="mg-b-10"><b>TIPO DE INVESTIGACIÓN:</b> APLICADA</p>
                    <p class="mg-b-10"><b>LÍNEA DE INVESTIGACIÓN:</b> SISTEMAS DE INFORMACIÓN</p>
                    <p class="mg-b-10"><b>PERIODO DE EJECUCIÓN:</b> 2 AÑOS</p>
                    <p class="mg-b-10"><b>FECHA DE INICIO - FIN:</b> 25/06/2023 AL 25/06/2025</p>
                    <p class="mg-b-20"><b>PRESUPUESTO l(S/.):</b> 80500</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div id="miModal" class="modal">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Contenido del modal -->
            <div class="modal-header">
                <h5 class="modal-title">Lista de chequeo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <fieldset class="border p-2" style="border: 1px solid #4454C3 !important;">
                    <legend class="float-none w-auto p-2 form-label">
                        Datos del proyecto </legend>
                    <div class="mb-3 row">
                        <p class="mg-b-20 text-secondary"><b>CÓDIGO: 2024-002</b></p>
                        <p class="mg-b-20"><b>TÍTULO DEL PROYECTO:</b> SISTEMA WEB PARA LA MEJORA DE LA GESTION</p>
                        <p class="mg-b-10"><b>RESPONSABLE:</b> CESAR AGURTO CHERRE</p>
                    </div>
                </fieldset>
                <div>
                    <label class="p-2"><small style="color:  #4454C3">Asegurese de completar cuidadosamente la lista de
                            chequeo de acuerdo a los requisitos de la siguiente lista.</small></label>
                </div>

                <div class="">
                    <div class="table-responsive invoice-table-responsive">
                        <table class="table card-table table-vcenter table-striped  text-wrap mb-0 border">
                            <thead>
                                <tr>
                                    <th class="wd-lg-10p">Requisitos</th>
                                    <th class="wd-lg-20p">Condición</th>
                                    <th class="wd-lg-20p">Observación</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-semibold">CTI-VITAE, actualizado del responsable del Proyecto
                                        de investigación y/o innovación.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios"
                                                    value="option1">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios"
                                                    value="option2" checked="">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">CTI-VITAE, actualizado de los Miembros del Proyecto
                                        de investigación y/o innovación.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios1"
                                                    value="option1" checked="">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios1"
                                                    value="option2">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">El proyecto está elaborado teniendo en cuenta la
                                        estructura establecida en la presente base.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios2"
                                                    value="option1">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios2"
                                                    value="option2" checked="">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Declaración jurada de originalidad.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios3"
                                                    value="option1" checked="">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios3"
                                                    value="option2">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">El Docente responsable es ordinario o
                                        excepcionalmente docente contratado con registro RENACYT.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios4"
                                                    value="option1" checked="">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios4"
                                                    value="option2">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Tres (03) miembros: Dos docentes (Un docente
                                        ordinario, sin excepción) y un estudiante de la Universidad Nacional de Ucayali.
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios5"
                                                    value="option1" checked="">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios5"
                                                    value="option2">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Hasta tres (03) colaboradores, pueden ser docentes,
                                        estudiantes, graduados o investigadores externos.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios6"
                                                    value="option1" checked="">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios6"
                                                    value="option2">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">El Proyecto de investigación debe enmarcarse en las
                                        líneas investigación establecidas por la UNU y sub líneas de investigación
                                        establecidas en la Plataforma PILAR.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios7"
                                                    value="option1" checked="">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios7"
                                                    value="option2">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Constancia de Habilidad actualizada para realizar
                                        investigación, emitida por la Dirección de Investigación e Innovación del
                                        responsable del proyecto.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios8"
                                                    value="option1">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios8"
                                                    value="option2" checked="">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Constancia de Habilidad actualizada para realizar
                                        investigación, emitida por la Dirección de Investigación e Innovación de los
                                        Miembros del Proyecto.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios9"
                                                    value="option1" checked="">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios9"
                                                    value="option2">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Carta de compromiso o Convenio con la Institución
                                        cooperante si el Proyecto es interinstitucional.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios10"
                                                    value="option1">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios10"
                                                    value="option2" checked="">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Convenio específico de colaboración para Proyectos
                                        que se desarrollen en sectores o áreas que no pertenecen a la universidad.</td>
                                    <td>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios11"
                                                    value="option1">
                                                <span class="custom-control-label">Sí</span>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="example-radios11"
                                                    value="option2" checked="">
                                                <span class="custom-control-label">No</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar revisión</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<!-- Data tables js-->
<script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatable/js/jszip.min.js"></script>
<script src="../assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="../assets/js/datatables.js"></script>

<script>
    $(document).ready(function() {
    $('#miBoton').click(function() {
      $('#miModal').modal('show');
    });
  });
</script>

@endsection