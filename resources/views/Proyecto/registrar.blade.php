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
                            Registrar proyecto
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('proyecto')}}" id='form' enctype="multipart/form-data">
                            @csrf
                            <div id="wizard2">
                                <h3>Datos del proyecto</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-12"></div>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="form-horizontal">
                                                <div class="mb-3 row">
                                                    <label for="FK_Convocatoria_Proyecto"
                                                        class="col-md-4 form-label">Convocatoria<span
                                                            class="text-danger"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select name="FK_Convocatoria_Proyecto"
                                                            id="FK_Convocatoria_Proyecto"
                                                            class="form-control form-select select2" required>
                                                            <option value="" selected disabled>- SELECCIONE -</option>
                                                            @foreach ($convocatorias as $convo)
                                                            <option value="{{  $convo->PK_Convocatoria }}">{{
                                                                $convo->Conv_Nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 form-label"
                                                        for="FK_TipoInvestigacion_Proyecto">Tipo de investigación<span
                                                            class="text-danger"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select name="FK_TipoInvestigacion_Proyecto"
                                                            id="FK_TipoInvestigacion_Proyecto"
                                                            class="form-control form-select select2" required>
                                                            <option value="" selected disabled>- SELECCIONE -</option>
                                                            @foreach ($tipoinvestigaciones as $tipoin)
                                                            <option value="{{  $tipoin->PK_TipoInvestigacion }}">{{
                                                                $tipoin->Tinv_Nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 form-label"
                                                        for="FK_SubLineaInvestigacion_Proyecto">Linea de
                                                        investigación<span class="text-danger"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select name="FK_SubLineaInvestigacion_Proyecto"
                                                            id="FK_SubLineaInvestigacion_Proyecto"
                                                            class="form-control form-select select2" required>
                                                            <option value="" selected disabled>- SELECCIONE -</option>
                                                            @foreach ($sublineasinvestigaciones as $sublinea)
                                                            <option value="{{  $sublinea->PK_SubLineaInvestigacion }}">
                                                                {{ $sublinea->SLinv_Nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 form-label"
                                                        for="FK_FuenteFinanciamiento_Proyecto">Fuente de
                                                        financiamiento<span class="text-danger"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select name="FK_FuenteFinanciamiento_Proyecto"
                                                            id="FK_FuenteFinanciamiento_Proyecto"
                                                            class="form-control form-select select2" required>
                                                            <option value="" selected disabled>- SELECCIONE -</option>
                                                            @foreach ($financiamientos as $finan)
                                                            <option value="{{  $finan->PK_FuenteFinanciamiento }}">{{
                                                                $finan->Ffin_Nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 form-label" for="Proy_Ubicacion">Lugar de
                                                        ejecución<span class="text-danger"> *</span></label>
                                                    <div class="col-md-8">
                                                        <textarea id="Proy_Ubicacion" name="Proy_Ubicacion"
                                                            class="form-control UpperCase"
                                                            placeholder="JR. LOS GIRASOLES MZ.19 LT. 05" rows="2"
                                                            required=""></textarea>

                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 form-label" for="Pdet_Titulo">Título del
                                                        proyecto<span class="text-danger"> *</span></label>
                                                    <div class="col-md-8">
                                                        <textarea id="Pdet_Titulo" name="Pdet_Titulo"
                                                            class="form-control UpperCase"
                                                            placeholder="TITULO DE LA PROPUESTA DEL PROYECTO" rows="3"
                                                            required=""></textarea>
                                                    </div>
                                                </div>
                                                <fieldset class="border p-2"
                                                    style="border: 1px solid #4454C3 !important;">
                                                    <legend class="float-none w-auto p-2 form-label">
                                                        Tiempo de Ejecución<span class="text-danger"> *</span></legend>
                                                    <div class="mb-3 row">
                                                        <label class="col-md-3 form-label"
                                                            for="Proy_PeriodoEjecucion">Periodo de ejecución
                                                            (años)<span class="text-danger"> *</span></label>
                                                        <div class="col-md-3">
                                                            <input class="form-control" type="number"
                                                                id="Proy_PeriodoEjecucion" name="Proy_PeriodoEjecucion"
                                                                min="1" required>
                                                        </div>
                                                        <label class="col-md-3 form-label" for="Proy_FechaInicio">Fecha
                                                            de inicio<span class="text-danger"> *</span></label>
                                                        <div class="col-md-3">
                                                            <input class="form-control" type="date"
                                                                name="Proy_FechaInicio" id="Proy_FechaInicio" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">

                                                        <label class="col-md-3 form-label" for="Proy_FechaFin">Fecha de
                                                            fin</label>
                                                        <div class="col-md-3">
                                                            <input class="form-control" type="date" name="Proy_FechaFin"
                                                                id="Proy_FechaFin" readonly>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="border p-2"
                                                    style="border: 1px solid #4454C3 !important;">
                                                    <legend class="float-none w-auto p-2 form-label">
                                                        Presupuesto del proyecto </legend>
                                                    <div class="mb-3 row">
                                                        <label class="col-md-3 form-label"
                                                            for="Pdet_BienesServicios">Bienes y servicios (S/.)<span
                                                                class="text-danger"> *</span>
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input id="Pdet_BienesServicios"
                                                                class="form-control numbersonly" type="text"
                                                                name="Pdet_BienesServicios" required>
                                                        </div>
                                                        <label class="col-md-3 form-label"
                                                            for="Pdet_BienesCapital">Bienes de capital (S/.)<span
                                                                class="text-danger"> *</span>
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input id="Pdet_BienesCapital"
                                                                class="form-control numbersonly" type="text"
                                                                name="Pdet_BienesCapital" required>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-12"></div>
                                    </div>
                                </section>
                                <h3>Equipo investigador</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-12"></div>
                                        <div class="col-lg-10 col-md-12">
                                            <div class="form-horizontal">
                                                <fieldset class="border p-2">
                                                    <legend class="float-none w-auto p-2 form-label">
                                                        Datos del responsable </legend>
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 form-label"
                                                            for="FK_Docente_ProyectoR">Nombre</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" type="text"
                                                                name="FK_Docente_ProyectoR" id="FK_Docente_ProyectoR"
                                                                value="1" hidden>
                                                            <input class="form-control" type="text"
                                                                name="Nombre_Responsable" readonly=""
                                                                placeholder="EUCLIDES PANDURO PADILLA">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="Pint_CtvitaeR" class="col-md-4 form-label">CTI
                                                            Vitae<span class="text-danger"> *</span></label>
                                                        <div class="col-md-8">
                                                            <input name="Pint_CtvitaeR" id="Pint_CtvitaeR" type="file"
                                                                class="form-control form-file-input "
                                                                accept="application/pdf" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 form-label" for="Pint_RenacytR">Ficha
                                                            RENACYT <br> <small
                                                                style="color: #4454C3;">(opcional)</small></label>
                                                        <div class="col-md-8">
                                                            <input name="Pint_RenacytR" id="Pint_RenacytR" type="file"
                                                                class="form-control form-file-input"
                                                                name="form-file-input" accept="application/pdf">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="border p-2">
                                                    <legend class="float-none w-auto p-2 form-label">
                                                        Miembros </legend>
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 form-label" for="miembro1">Miembro 1<span
                                                                class="text-danger"> *</span><br> <small>Docente
                                                                ordinario UNU</small></label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input id="miembro1" name="miembro1" type="text"
                                                                    class="form-control numbersonly"
                                                                    placeholder="Ingrese DNI" required=""
                                                                    onkeypress="return valideKey(event);">
                                                                <input id="FK_Integrante_ProyectoIntegrante1"
                                                                    name="FK_Integrante_ProyectoIntegrante1" type="text"
                                                                    class="form-control" required="" hidden>
                                                                <a id="buscarDNI_1" href="javascript:void(0)"
                                                                    class="btn btn-primary"
                                                                    onclick="BuscarEquipo('1')"><i
                                                                        class="fe fe-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Ctvitae1" name="Pint_Ctvitae1"
                                                                accept="application/pdf" hidden />
                                                            <label for="Pint_Ctvitae1" class="btn btn-white"
                                                                data-bs-toggle="tooltip" title="Adjuntar CTI Vitae">
                                                                <i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Renacyt1" name="Pint_Renacyt1"
                                                                accept="application/pdf" hidden />
                                                            <label for="Pint_Renacyt1" class="btn btn-white"
                                                                data-bs-toggle="tooltip" title="Adjuntar ficha RENACYT">
                                                                <i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>
                                                            <small
                                                                style="color: #4454C3; font-size:0.80em">(opcional)</small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 form-label" for="miembro2">Miembro 2<span
                                                                class="text-danger"> *</span> <br> <small>Docente
                                                                ordinario o extraordinario UNU</small></label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input id="miembro2" name="miembro2" type="text"
                                                                    class="form-control numbersonly"
                                                                    placeholder="Ingrese DNI" required=""
                                                                    onkeypress="return valideKey(event);">
                                                                <input id="FK_Integrante_ProyectoIntegrante2"
                                                                    name="FK_Integrante_ProyectoIntegrante2" type="text"
                                                                    class="form-control" required="" hidden>
                                                                <a id="buscarDNI_2" href="javascript:void(0)"
                                                                    class="btn btn-primary" onclick="BuscarEquipo(2)"><i
                                                                        class="fe fe-search"></i></a>
                                                            </div>
                                                        </div>
                                                        {{-- ARCHIVOS --}}
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Ctvitae2" name="Pint_Ctvitae2"
                                                                accept="application/pdf" hidden required />
                                                            <label for="Pint_Ctvitae2" class="btn btn-white"
                                                                data-bs-toggle="tooltip" title="Adjuntar CTI Vitae">
                                                                <i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>

                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Renacyt2" name="Pint_Renacyt2"
                                                                accept="application/pdf" hidden />
                                                            <label for="Pint_Renacyt2" class="btn btn-white"
                                                                data-bs-toggle="tooltip" title="Adjuntar ficha RENACYT">
                                                                <i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>
                                                            <small
                                                                style="color: #4454C3; font-size:0.80em">(opcional)</small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 form-label" for="miembro3">Miembro 3<span
                                                                class="text-danger"> *</span> <br> <small>Alumno
                                                                UNU</small></label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input id="miembro3" name="miembro3" type="text"
                                                                    class="form-control numbersonly"
                                                                    placeholder="Ingrese DNI" required=""
                                                                    onkeypress="return valideKey(event);">
                                                                <input id="FK_Integrante_ProyectoIntegrante3"
                                                                    name="FK_Integrante_ProyectoIntegrante3" type="text"
                                                                    class="form-control" required="" hidden>
                                                                <a id="buscarDNI_3" href="javascript:void(0)"
                                                                    class="btn btn-primary" onclick="BuscarEquipo(3)"><i
                                                                        class="fe fe-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Ctvitae3" name="Pint_Ctvitae3"
                                                                accept="application/pdf" hidden required />
                                                            <label for="Pint_Ctvitae3" class="btn btn-white"
                                                                data-bs-toggle="tooltip"
                                                                title="Adjuntar avance curricular">
                                                                <i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="border p-2">
                                                    <legend class="float-none w-auto p-2 form-label">
                                                        Colaboradores </legend>
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 form-label" for="miembro4">Colaborador
                                                            1<span class="text-danger"> *</span> <br></label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input id="miembro4" name="miembro4" type="text"
                                                                    class="form-control numbersonly"
                                                                    placeholder="Ingrese DNI" required=""
                                                                    onkeypress="return valideKey(event);">
                                                                <input id="FK_Integrante_ProyectoIntegrante4"
                                                                    name="FK_Integrante_ProyectoIntegrante4" type="text"
                                                                    class="form-control" required="" hidden>
                                                                <a id="buscarDNI_4" href="javascript:void(0)"
                                                                    class="btn btn-primary" onclick="BuscarEquipo(4)"><i
                                                                        class="fe fe-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Ctvitae4"
                                                                accept="application/pdf" hidden required />
                                                            <label for="Pint_Ctvitae4" class="btn btn-white"
                                                                data-bs-toggle="tooltip" title="Adjuntar CTI Vitae">
                                                                <i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>

                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Renacyt4"
                                                                accept="application/pdf" hidden />
                                                            <label for="Pint_Renacyt4" class="btn btn-white"
                                                                data-bs-toggle="tooltip" title="Adjuntar ficha RENACYT">
                                                                <i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>
                                                            <small
                                                                style="color: #4454C3; font-size:0.80em">(opcional)</small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 form-label" for="miembro5">Colaborador 2
                                                            <br> <small
                                                                style="color: #4454C3">(opcional)</small></label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input id="miembro5" name="miembro5" type="text"
                                                                    class="form-control numbersonly"
                                                                    placeholder="Ingrese DNI" required=""
                                                                    onkeypress="return valideKey(event);">
                                                                <input id="FK_Integrante_ProyectoIntegrante5"
                                                                    name="FK_Integrante_ProyectoIntegrante5" type="text"
                                                                    class="form-control" required="" hidden>
                                                                <a id="buscarDNI_5" href="javascript:void(0)"
                                                                    class="btn btn-primary" onclick="BuscarEquipo(5)"><i
                                                                        class="fe fe-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Ctvitae5"
                                                                accept="application/pdf" hidden required />
                                                            <label for="Pint_Ctvitae5" class="btn btn-white"
                                                                data-bs-toggle="tooltip" title="Adjuntar CTI Vitae"><i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Renacyt5"
                                                                accept="application/pdf" hidden />
                                                            <label for="Pint_Renacyt5" class="btn btn-white"
                                                                data-bs-toggle="tooltip"
                                                                title="Adjuntar ficha RENACYT"><i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>
                                                            <small
                                                                style="color: #4454C3; font-size:0.80em">(opcional)</small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 form-label" for="miembro6">Colaborador 3
                                                            <br> <small
                                                                style="color: #4454C3">(opcional)</small></label>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <input id="miembro6" name="miembro6" type="text"
                                                                    class="form-control numbersonly"
                                                                    placeholder="Ingrese DNI" required=""
                                                                    onkeypress="return valideKey(event);">
                                                                <input id="FK_Integrante_ProyectoIntegrante6"
                                                                    name="FK_Integrante_ProyectoIntegrante6" type="text"
                                                                    class="form-control" required="" hidden>
                                                                <a id="buscarDNI_6" href="javascript:void(0)"
                                                                    class="btn btn-primary" onclick="BuscarEquipo(6)"><i
                                                                        class="fe fe-search"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Ctvitae6"
                                                                accept="application/pdf" hidden required />
                                                            <label for="Pint_Ctvitae6" class="btn btn-white"
                                                                data-bs-toggle="tooltip" title="Adjuntar CTI Vitae"><i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <input type="file" id="Pint_Renacyt6"
                                                                accept="application/pdf" hidden />
                                                            <label for="Pint_Renacyt6" class="btn btn-white"
                                                                data-bs-toggle="tooltip"
                                                                title="Adjuntar ficha RENACYT"><i
                                                                    class="fe fe-upload-cloud fe-lg text-primary"></i></label>
                                                            <small
                                                                style="color: #4454C3; font-size:0.80em">(opcional)</small>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-12"></div>
                                    </div>
                                </section>
                                <h3>Documentos del Proyecto</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-1 col-md-12"></div>
                                        <div class="col-lg-10 col-md-12">
                                            <div class="form-horizontal">
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 form-label"
                                                        for="Pdet_ArchivoProyecto">Proyecto de investigación<span
                                                            class="text-danger"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="file" name="Pdet_ArchivoProyecto"
                                                            id="Pdet_ArchivoProyecto"
                                                            class="form-control form-file-input" name="form-file-input"
                                                            accept="application/pdf">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 form-label"
                                                        for="Proy_ArchivoOriginalidad">Declaración Jurada de
                                                        originalidad<span class="text-danger"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="file" name="Proy_ArchivoOriginalidad"
                                                            id="Proy_ArchivoOriginalidad"
                                                            class="form-control form-file-input" name="form-file-input"
                                                            accept="application/pdf">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 form-label" for="Proy_ArchivoCarta">Carta de
                                                        compromiso<br> <small
                                                            style="color: #4454C3">(opcional)</small></label>
                                                    <div class="col-md-8">
                                                        <input type="file" name="Proy_ArchivoCarta"
                                                            id="Proy_ArchivoCarta" class="form-control form-file-input"
                                                            name="form-file-input" accept="application/pdf">
                                                        <input type="text" name="Nombre_Proy_ArchivoConvenio"
                                                            value="Proy_ArchivoConvenio" hidden>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 form-label"
                                                        for="Proy_ArchivoConvenio">Convenio de colaboración<br>
                                                        <small style="color: #4454C3">(opcional)</small></label>
                                                    <div class="col-md-8">
                                                        <input type="file" name="Proy_ArchivoConvenio"
                                                            id="Proy_ArchivoConvenio"
                                                            class="form-control form-file-input" name="form-file-input"
                                                            accept="application/pdf">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-12"></div>
                                    </div>
                                </section>
                            </div>
                        </form>
                        <div>
                            <label class="mt-2"><small style="color: red">(*) Campos obligatorios</small></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('proyecto.BuscarEquipo')
<!-- Modal -->
<div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Show User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

<!-- tooltip js -->
<script src="../assets/js/tooltip.js"></script>

<script type="text/javascript">
    window.$ = jQuery;
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

jQuery(document).ready(function(){
            // Listen for the input event.
            $(".numbersonly").on("input", function (evt) {
               jQuery(this).val(jQuery(this).val().replace(/[^0-9.,]/g, '').replace(/,/g,'.'));
             })
            $(".UpperCase").on("keypress", function () {
              $input=$(this);
              setTimeout(function () {
               $input.val($input.val().toUpperCase());
              },50);
             })
        });

     function valideKey(evt)
     {
        var code = (evt.which) ? evt.which : evt.keyCode;
        if(code==8) 
        { 
            return true;
        } 
        else if(code>=48 && code<=57) 
        { 
            return true;
        } 
        else
        { 
            return false;
        }
    }

    function BuscarEquipo($id)
    {
        $dni_buscar=$('#miembro'+$id).val();
        $Iddocente=$('#FK_Integrante_ProyectoIntegrante'+$id).val();
        document.getElementById("mencion").disabled=false;
  
        if($dni_buscar.trim().length===0 && $Iddocente.trim().length===0)
        {
            $('#miembro'+$id).focus();

        }
        else if($dni_buscar.trim().length != 8)
        {
            $('#miembro'+$id).focus();
        }
        else
        {
            $.get('docente/'+$dni_buscar,function(data)
            {
                let isEmpty = Object.entries(data).length === 0;
                if(!isEmpty)
                {
                    if($id == 1 && data['Doce_TipoIntegrante']==1)
                    {
                        //if(data['PK_Docente']=)
                    console.log(data['Doce_Nombre']);
                    $('#miembro'+$id).val(data['Doce_Nombre']+" "+data['Doce_Apellido']);
                    $('#FK_Integrante_ProyectoIntegrante'+$id).val(data['PK_Docente']);
                    } 
                    else if($id == 2 && data['Doce_TipoIntegrante']<=2)
                    {
                       $('#miembro'+$id).val(data['Doce_Nombre']+" "+data['Doce_Apellido']);
                        $('#FK_Integrante_ProyectoIntegrante'+$id).val(data['PK_Docente']);  
                    } 
                    else if($id == 3 && data['Doce_TipoIntegrante']==5)
                    {
                        $('#miembro'+$id).val(data['Doce_Nombre']+" "+data['Doce_Apellido']);
                        $('#FK_Integrante_ProyectoIntegrante'+$id).val(data['PK_Docente']); 
                    }
                    else if($id == 4 || $id == 5 || $id == 6 )
                    {
                         $('#miembro'+$id).val(data['Doce_Nombre']+" "+data['Doce_Apellido']);
                        $('#FK_Integrante_ProyectoIntegrante'+$id).val(data['PK_Docente']); 
                    }
                    else{
                        alert('El dni que busca esta registrado como '+data['Doce_TipoIntegrante']);
                    }                    
                }
                else
                {  
                    $('#dni').val($dni_buscar);
                    if($id==1 ||  $id==3)
                    {
                        document.getElementById("tipoinvestigador").selectedIndex=$id-1;
                        $('#tipoinvestigador option:not(:selected)').attr('disabled',true);                         
                    } 
                    if($id==3){
                        document.getElementById("mencion").disabled=true;
                    }                
                    $('#userShowModal').modal('show');                
                }               
            })
        }
    }    

    var form = '#add-user-form';
    $(form).on('submit', function(event){
        event.preventDefault();
        var url = $(this).attr('data-action');
        $.ajax({
            url: url,
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
                $(form).trigger("reset");
                $('#userShowModal').modal('hide');
            },
            error: function(response) {
            }
        });
    });

    $('input[type="file"]').on('change', function(){
      var ext = $( this ).val().split('.').pop();
      if ($( this ).val() != '') {
        if(ext == "pdf"){
          alert("La extensión es: " + ext);
          if($(this)[0].files[0].size > 1048576){
            console.log("El documento excede el tamaño máximo");
                     
            $(this).val('');
          }else{
        
          }
        }
        else
        {
          $( this ).val('');
          alert("Extensión no permitida: " + ext);
        }
      }
    });


              $("#upload1").on("keypress", function () {
              
              setTimeout(function () {
                $('#label1').html('hola');
              },50);
             })

</script>

@endsection