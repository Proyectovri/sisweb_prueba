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
                                           Registrar Proyecto
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{route('proyecto')}}" id='form'  enctype="multipart/form-data">
                                            @csrf
                                            <div id="wizard2">
                                                <h3>Datos Cambio de prueba</h3>
                                                <section>                                               
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-12"></div>
                                                        <div class="col-lg-8 col-md-12">
                                                            <div class="form-horizontal" >
                                                                <div class="mb-3 row">
                                                                    <label class="col-md-4 form-label">Convocatoria</label>
                                                                    <div class="col-md-8">
                                                                        <select name="FK_Convocatoria_Proyecto" class="form-control form-select select2">
                                                                            @foreach ($convocatorias as $convo)
                                                                                <option value="{{  $convo->PK_Convocatoria }}">{{  $convo->Conv_Nombre }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label class="col-md-4 form-label">Tipo Investigacion</label>
                                                                    <div class="col-md-8">
                                                                        <select name="FK_TipoInvestigacion_Proyecto" class="form-control form-select select2">
                                                                            @foreach ($tipoinvestigaciones as $tipoin)
                                                                                <option value="{{  $tipoin->PK_TipoInvestigacion }}">{{  $tipoin->Tinv_Nombre }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label class="col-md-4 form-label">Linea Investigacion</label>
                                                                    <div class="col-md-8">
                                                                        <select name="FK_SubLineaInvestigacion_Proyecto" class="form-control form-select select2">
                                                                            @foreach ($sublineasinvestigaciones as $sublinea)
                                                                                <option value="{{  $sublinea->PK_SubLineaInvestigacion }}">{{  $sublinea->SLinv_Nombre }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label class="col-md-4 form-label">Fuente de Financiamiento</label>
                                                                    <div class="col-md-8">
                                                                        <select name="FK_FuenteFinanciamiento_Proyecto" class="form-control form-select select2">
                                                                            @foreach ($financiamientos as $finan)
                                                                                <option value="{{  $finan->PK_FuenteFinanciamiento }}">{{  $finan->Ffin_Nombre }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>                                                 
                                                                <div class="mb-3 row">
                                                                    <label class="col-md-4 form-label">Lugar de Ejecucion</label>
                                                                    <div class="col-md-8">
                                                                        <input id="Proy_Ubicacion" name="Proy_Ubicacion" type="text" class="form-control" placeholder="EJEMPLO : JR. LOS GIRASOLES MZ.19 LT 05" required="" >

                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label class="col-md-4 form-label">Titulo del Proyecto</label>
                                                                    <div class="col-md-8">   
                                                                        <textarea id="Pdet_Titulo" name="Pdet_Titulo" class="form-control"   placeholder="TITULO DE LA PROPUESTA DEL PROYECTO" rows="3" required=""></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-12"></div>
                                                    </div>
                                                </section>
                                                <h3>Datos Especificos</h3>
                                                <section>                                               
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-12"></div>
                                                        <div class="col-lg-8 col-md-12">
                                                            <div class="form-horizontal">
                                                                <fieldset class="border p-2">
                                                                    <legend  class="float-none w-auto p-2 form-label">
                                                                         Tiempo de Ejecucion </legend>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Periodo Ejecucion(Meses)</label>
                                                                            <div class="col-md-8">
                                                                                <input class="form-control" type="number" id="Proy_PeriodoEjecucion" name="Proy_PeriodoEjecucion">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Fecha Inicio</label>
                                                                            <div class="col-md-8">
                                                                                <input class="form-control" type="date" name="Proy_FechaInicio" id="Proy_FechaInicio">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row" hidden>
                                                                            <label class="col-md-4 form-label">Fecha Fin</label>
                                                                            <div class="col-md-8">
                                                                                <input class="form-control" type="date" name="Proy_FechaFin" id="Proy_FechaFin">
                                                                            </div>
                                                                        </div>
                                                                </fieldset>
                                                                <fieldset class="border p-2">
                                                                    <legend  class="float-none w-auto p-2 form-label">
                                                                         Presupuesto del proyecto </legend>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Bienes y servicios(S/) </label>
                                                                            <div class="col-md-8">
                                                                                <input id="Pdet_BienesServicios" class="form-control" type="text" name="Pdet_BienesServicios" required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Bienes de capital(S/) </label>
                                                                            <div class="col-md-8">
                                                                                <input id="Pdet_BienesCapital" class="form-control" type="text" name="Pdet_BienesCapital" required="" >
                                                                            </div>
                                                                        </div>
                                                                </fieldset>                                           
                                                            </div>     
                                                        </div>
                                                        <div class="col-lg-2 col-md-12"></div>
                                                    </div>
                                                </section>
                                                <h3>Equipo Investigador</h3>
                                                <section>                                               
                                                    <div class="row">
                                                        <div class="col-lg-1 col-md-12"></div>
                                                        <div class="col-lg-10 col-md-12">
                                                            <div class="form-horizontal">
                                                                <fieldset class="border p-2">
                                                                    <legend  class="float-none w-auto p-2 form-label">
                                                                         Datos del Responsable </legend>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Nombre</label>
                                                                            <div class="col-md-8">
                                                                                <input class="form-control" type="text" name="FK_Docente_ProyectoR" value="1" hidden>
                                                                                <input class="form-control" type="text" name="Nombre_Responsable" readonly="" placeholder="DIANA DIAZ ESTRADA" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">CTV-VITAE</label>
                                                                            <div class="col-md-8">
                                                                                <input name="Pint_CtvitaeR" type="file" class="form-control form-file-input" accept="application/pdf">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">RENACYT <br>  <small style="color: red;">(opcional)</small></label>
                                                                            <div class="col-md-8">
                                                                                <input name="Pint_RenacytR" type="file" class="form-control form-file-input" name="form-file-input" accept="application/pdf"> 
                                                                            </div>
                                                                        </div>
                                                                </fieldset>
                                                                <fieldset class="border p-2">
                                                                    <legend  class="float-none w-auto p-2 form-label">
                                                                        Miembros </legend>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Miembro 1 <br> <small>Docente ordinario UNU</small></label>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group">
                                                                                    <input id="miembro1" name="miembro1" type="text" class="form-control" placeholder="Ingrese DNI" required="" onkeypress="return valideKey(event);">
                                                                                    <input id="FK_Integrante_ProyectoIntegrante1" name="FK_Integrante_ProyectoIntegrante1" type="text" class="form-control"  required="" hidden >
                                                                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="BuscarEquipo('1')"  ><i class="fe fe-search"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Ctvitae1" name="Pint_Ctvitae1"  hidden/>
                                                                                <label ID="label1" for="Pint_Ctvitae1">
                                                                                    <i class="fe fe-download-cloud"  ></i>
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Renacyt1" name="Pint_Renacyt1" accept="application/pdf" hidden/>
                                                                                <label for="Pint_Renacyt1"><i class="fe fe-download-cloud" data-bs-toggle="tooltip" title="fe fe-download-cloud"></i></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Miembro 2 <br> <small>Docente ordinario o extraordinario UNU</small></label>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group">
                                                                                    <input id="miembro2" name="miembro2" type="text" class="form-control" placeholder="Ingrese DNI" required="" onkeypress="return valideKey(event);">
                                                                                     <input id="FK_Integrante_ProyectoIntegrante2" name="FK_Integrante_ProyectoIntegrante2" type="text" class="form-control"  required="" hidden>
                                                                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="BuscarEquipo(2)"  ><i class="fe fe-search"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Ctvitae2" name="Pint_Ctvitae2" accept="application/pdf" hidden/>
                                                                                <label ID="label1" for="Pint_Ctvitae2"><i class="fe fe-download-cloud"  ></i></label>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Renacyt2" name="Pint_Renacyt2" accept="application/pdf" hidden/>
                                                                                <label for="Pint_Renacyt2"><i class="fe fe-download-cloud" data-bs-toggle="tooltip" title="fe fe-download-cloud"></i></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Miembro 3 <br> <small>Alumno UNU</small></label>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group">
                                                                                    <input id="miembro3" name="miembro3" type="text" class="form-control" placeholder="Ingrese DNI" required="">
                                                                                     <input id="FK_Integrante_ProyectoIntegrante3" name="FK_Integrante_ProyectoIntegrante3" type="text" class="form-control"  required="" hidden>
                                                                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="BuscarEquipo(3)"  ><i class="fe fe-search"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Ctvitae3" name="Pint_Ctvitae3" accept="application/pdf" hidden/>
                                                                                <label ID="label1" for="Pint_Ctvitae3"><i class="fe fe-download-cloud"  ></i></label>
                                                                            </div>
                                                                        </div>
                                                                </fieldset>    
                                                                <fieldset class="border p-2">
                                                                    <legend  class="float-none w-auto p-2 form-label">
                                                                        Colaboradores </legend>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Colabroador 1 <br> <small style="color: red">(opcional)</small></label>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group">
                                                                                    <input id="miembro4" name="miembro4" type="text" class="form-control" placeholder="Ingrese DNI" required="" onkeypress="return valideKey(event);">
                                                                                     <input id="FK_Integrante_ProyectoIntegrante4" name="FK_Integrante_ProyectoIntegrante4" type="text" class="form-control"  required="" hidden>
                                                                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="BuscarEquipo(4)"  ><i class="fe fe-search"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Ctvitae4" accept="application/pdf" hidden/>
                                                                                <label ID="label1" for="Pint_Ctvitae4"><i class="fe fe-download-cloud"  ></i></label>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Renacyt4" accept="application/pdf" hidden/>
                                                                                <label for="Pint_Renacyt4"><i class="fe fe-download-cloud" data-bs-toggle="tooltip" title="fe fe-download-cloud"></i></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Colabroador 2 <br> <small style="color: red">(opcional)</small></label>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group">
                                                                                    <input id="miembro5" name="miembro5" type="text" class="form-control" placeholder="Ingrese DNI" required="" onkeypress="return valideKey(event);">
                                                                                     <input id="FK_Integrante_ProyectoIntegrante5" name="FK_Integrante_ProyectoIntegrante5" type="text" class="form-control"  required="" hidden>
                                                                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="BuscarEquipo(5)"  ><i class="fe fe-search"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Ctvitae5" accept="application/pdf" hidden/>
                                                                                <label ID="label1" for="Pint_Ctvitae5"><i class="fe fe-download-cloud"  ></i></label>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Renacyt5" accept="application/pdf" hidden/>
                                                                                <label for="Pint_Renacyt5"><i class="fe fe-download-cloud" data-bs-toggle="tooltip" title="fe fe-download-cloud"></i></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3 row">
                                                                            <label class="col-md-4 form-label">Colaborador 3 <br> <small style="color: red">(opcional)</small></label>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group">
                                                                                    <input id="miembro6" name="miembro6" type="text" class="form-control" placeholder="Ingrese DNI" required="" onkeypress="return valideKey(event);">
                                                                                     <input id="FK_Integrante_ProyectoIntegrante6" name="FK_Integrante_ProyectoIntegrante6" type="text" class="form-control"  required="" hidden>
                                                                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="BuscarEquipo(6)"  ><i class="fe fe-search"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Ctvitae6" accept="application/pdf" hidden/>
                                                                                <label ID="Pint_Ctvitae6" for="upload"><i class="fe fe-download-cloud"  ></i></label>
                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                <input type="file" id="Pint_Renacyt6" accept="application/pdf" hidden/>
                                                                                <label for="Pint_Renacyt6"><i class="fe fe-download-cloud" data-bs-toggle="tooltip" title="fe fe-download-cloud"></i></label>
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
                                                                    <label class="col-md-4 form-label">Seleccione Proyecto</label>
                                                                    <div class="col-md-8">
                                                                        <input type="file"  name="Pdet_ArchivoProyecto" class="form-control form-file-input" name="form-file-input" accept="application/pdf">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label class="col-md-4 form-label">Seleccion dj originalidad</label>
                                                                    <div class="col-md-8">
                                                                        <input type="file" name="Proy_ArchivoOriginalidad" class="form-control form-file-input" name="form-file-input" accept="application/pdf">
                                                                    </div>
                                                                </div>  
                                                                <div class="mb-3 row">
                                                                    <label class="col-md-4 form-label">Seleccion carta de compromiso</label>
                                                                    <div class="col-md-8">
                                                                        <input type="file" name="Proy_ArchivoCarta" class="form-control form-file-input" name="form-file-input" accept="application/pdf">
                                                                        <input type="text" name="Nombre_Proy_ArchivoConvenio" value="Proy_ArchivoConvenio" hidden >
                                                                    </div>
                                                                </div>  
                                                                <div class="mb-3 row">
                                                                    <label class="col-md-4 form-label">Seleccion convenio</label>
                                                                    <div class="col-md-8">
                                                                        <input type="file" name="Proy_ArchivoConvenio" class="form-control form-file-input" name="form-file-input" accept="application/pdf">
                                                                        </div>
                                                                </div>                                                       
                                                            </div>     
                                                        </div>
                                                        <div class="col-lg-1 col-md-12"></div>
                                                    </div>
                                                </section>
                                               
                                            </div>
                                        </form>
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
<script type="text/javascript">
     window.$ = jQuery;
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
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
        else if($Iddocente.trim().length!=0 && $dni_buscar.trim().length>=8)
        {
            alert('Para realizar la busqueda debe ingresar un DNI');
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