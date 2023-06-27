<?php

namespace App\Http\Controllers;
use App\Models\convocatoria;
use App\Models\proyecto;
use App\Models\proyectodetalle;
use App\Models\proyectointegrante;
use App\Models\tipoinvestigacion;
use App\Models\sublineainvestigacion;
use App\Models\financiamiento;
use App\Models\carrera;
use App\Models\gradoacademico;
use App\Models\tipoinvestigador;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function showRegistrar()
    {
        return view('proyecto.registrarproyecto');
    }
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $convocatorias = convocatoria::all();
        $tipoinvestigaciones = tipoinvestigacion::all();
        $sublineasinvestigaciones = sublineainvestigacion::all();
        $financiamientos = financiamiento::all();
        $carreras = carrera::all();
        $gradosacademicos = gradoacademico::all();
        $tipoinvestigadores = tipoinvestigador::all();

        return view ('proyecto.registrar',compact('convocatorias','tipoinvestigaciones','sublineasinvestigaciones','financiamientos','carreras','gradosacademicos','tipoinvestigadores')); 
    }

    /**
     * Store a newly created resource in storage.
     */

    public function SubirArchivo(Request $request,$nombreinput,$tipoarchivo,$codigo)
    {
        $date = Carbon::now();
        if($nombreinput=='O'){
            $Nombre = 'Proy_ArchivoOriginalidad';
        }

        if($nombreinput=='CA'){
            $Nombre = 'Proy_ArchivoCarta';
        }

        if($nombreinput=='CO'){
            $Nombre = 'Proy_ArchivoConvenio';
        }
         if($nombreinput=='P'){
            $Nombre = 'Pdet_ArchivoProyecto';
        }
        
         if($nombreinput=='R'){
            $Nombre = 'Pint_CtvitaeR';
        }
        if($nombreinput=='R1'){
            $Nombre = 'Pint_RenacytR';
        }

         if($nombreinput=='M1'){
            $Nombre = 'Pint_Ctvitae1';
        }
        if($nombreinput=='M12'){
            $Nombre = 'Pint_Renacyt1';
        }

         if($nombreinput=='M2'){
            $Nombre = 'Pint_Ctvitae2';
        }
        if($nombreinput=='M21'){
            $Nombre = 'Pint_Renacyt2';
        }

         if($nombreinput=='M3'){
            $Nombre = 'Pint_Ctvitae3';
        }
        if($nombreinput=='M31'){
            $Nombre = 'Pint_Renacyt3';
        }
         if($nombreinput=='M4'){
            $Nombre = 'Pint_Ctvitae4';
        }
        if($nombreinput=='M41'){
            $Nombre = 'Pint_Renacyt4';
        }
          if($nombreinput=='M5'){
            $Nombre = 'Pint_Ctvitae5';
        }
        if($nombreinput=='M51'){
            $Nombre = 'Pint_Renacyt5';
        }

  if($nombreinput=='M6'){
            $Nombre = 'Pint_Ctvitae6';
        }
        if($nombreinput=='M61'){
            $Nombre = 'Pint_Renacyt6';
        }



       

        //return "mmm".$request->Proy_Ubicacion;
        if($request->hasFile( $Nombre))
        {

            $file = $request->file($Nombre);
            $nombre = $codigo."-".$date->format('Y')."_".$tipoarchivo.".".$file->guessExtension();
            $ruta = public_path("pdf/".$nombre);

            if($file->guessExtension() == "pdf")
            {
                copy($file, $ruta);
                return $nombre;
            }else{
                dd("no es pdf");
            }
        }
        else {
           return '';
        }
    }

    public function store(Request $request)
    {
        $Proy_FechaInicio = Carbon::createFromDate($request->Proy_FechaInicio);
        $proyecto = new proyecto;
        $proyectodetalle = new proyectodetalle;   
        $proyectointegrante= new proyectointegrante;         
        $date = Carbon::now();        
        $codigo=(proyecto::max('PK_Proyecto')+1)."-".$date->format('Y');       
        $Proy_ArchivoOriginalidad = $this->SubirArchivo($request,'O','Originalidad',$codigo);
        $Proy_ArchivoCarta = $this->SubirArchivo($request,'CA','Carta',$codigo);
        $Proy_ArchivoConvenio = $this->SubirArchivo($request,'CO','Convenio',$codigo);
        $Pdet_ArchivoProyecto = $this->SubirArchivo($request,'P','Proyecto',$codigo);
        $Pint_CtvitaeR = $this->SubirArchivo($request,'R','Ctvitae_R',$codigo);
        $Pint_RenacytR = $this->SubirArchivo($request,'R1','Renacyt_R',$codigo);

        $Pint_Ctvitae1 = $this->SubirArchivo($request,'M1','Ctvitae_M1',$codigo);
        $Pint_Renacyt1 = $this->SubirArchivo($request,'M12','Renacyt_M1',$codigo);

        $Pint_Ctvitae2 = $this->SubirArchivo($request,'M2','Ctvitae_M2',$codigo);
        $Pint_Renacyt2 = $this->SubirArchivo($request,'M21','Renacyt_M2',$codigo);

        $Pint_Ctvitae3 = $this->SubirArchivo($request,'M3','Ctvitae_M3',$codigo);
        $Pint_Renacyt3 = $this->SubirArchivo($request,'M31','Renacyt_M3',$codigo);

       


        // ---- Creacion de la tabla proyectos-----------------------
        $proyecto->FK_Convocatoria_Proyecto = $request->FK_Convocatoria_Proyecto;
        $proyecto->FK_TipoInvestigacion_Proyecto = $request->FK_TipoInvestigacion_Proyecto;
        $proyecto->FK_SubLineaInvestigacion_Proyecto = $request->FK_SubLineaInvestigacion_Proyecto;
        $proyecto->FK_FuenteFinanciamiento_Proyecto  = $request->FK_FuenteFinanciamiento_Proyecto   ;
        $proyecto->FK_EstadoProyecto_Proyecto = 1;
        $proyecto->Proy_codigo  = $codigo;
        $proyecto->Proy_Anio =  $date->format('Y');
        $proyecto->Proy_PeriodoEjecucion = $request->Proy_PeriodoEjecucion;
        $proyecto->Proy_FechaInicio = $Proy_FechaInicio->format('Y-m-d');
        $proyecto->Proy_FechaFin = $Proy_FechaInicio->addMonths($request->Proy_PeriodoEjecucion)->format('Y-m-d');
        $proyecto->Proy_Ubicacion = $request->Proy_Ubicacion;
        $proyecto->Proy_ArchivoOriginalidad = $Proy_ArchivoOriginalidad;
        $proyecto->Proy_ArchivoCarta = $Proy_ArchivoCarta;
        $proyecto->Proy_ArchivoConvenio = $Proy_ArchivoConvenio;        
        $proyecto->Proy_PuntajePromedio = 0;
        $proyecto->Proy_Puntajebonificacion = 0;
        $proyecto->Proy_PuntajeTotal = 0;        
        $proyecto->save();
        // ---- FIN-----------------------

        // ---- Creacion de la tabla proyectodetalle-----------------------
        $proyectodetalle->FK_Proyecto_ProyectoDetalle =($this->BuscarProyectoCodigo($codigo))->PK_Proyecto;
        $proyectodetalle->Pdet_Iteracion=1;
        $proyectodetalle->Pdet_Titulo=$request->Pdet_Titulo;
        $proyectodetalle->Pdet_BienesServicios=$request->Pdet_BienesServicios;
        $proyectodetalle->Pdet_BienesCapital=$request->Pdet_BienesCapital;
        $proyectodetalle->Pdet_ArchivoProyecto=$Pdet_ArchivoProyecto;
        $proyectodetalle->save();
        // ---- FIN-----------------------

        // ---- Creacion de la tabla proyectointegrante-----------------------

        $Codigopro= $this->BuscarProyectoCodigo($codigo)->PK_Proyecto;
        $this->GuardarIntegrante($Codigopro,$request->FK_Docente_ProyectoR,1,$Pint_CtvitaeR,$Pint_RenacytR);

        $this->GuardarIntegrante($Codigopro,$request->FK_Integrante_ProyectoIntegrante1,2,$Pint_Ctvitae1,$Pint_Renacyt1);
        $this->GuardarIntegrante($Codigopro,$request->FK_Integrante_ProyectoIntegrante2,2,$Pint_Ctvitae2,$Pint_Renacyt2);
       $this->GuardarIntegrante($Codigopro,$request->FK_Integrante_ProyectoIntegrante3,2,$Pint_Ctvitae3,$Pint_Renacyt3);

       if($request->FK_Integrante_ProyectoIntegrante4 != ''){
         $Pint_Ctvitae4 = $this->SubirArchivo($request,'M4','Ctvitae_M4',$codigo);
        $Pint_Renacyt4 = $this->SubirArchivo($request,'M41','Renacyt_M4',$codigo);
            $this->GuardarIntegrante($Codigopro,$request->FK_Integrante_ProyectoIntegrante4,2,$Pint_Ctvitae4,$Pint_Renacyt4);
       }

       if($request->FK_Integrante_ProyectoIntegrante5 != ''){
         $Pint_Ctvitae5 = $this->SubirArchivo($request,'M5','Ctvitae_M5',$codigo);
        $Pint_Renacyt5 = $this->SubirArchivo($request,'M51','Renacyt_M5',$codigo);
            $this->GuardarIntegrante($Codigopro,$request->FK_Integrante_ProyectoIntegrante5,2,$Pint_Ctvitae5,$Pint_Renacyt5);
       }
       if($request->FK_Integrante_ProyectoIntegrante6 != ''){
        $Pint_Ctvitae6 = $this->SubirArchivo($request,'M6','Ctvitae_M6',$codigo);
        $Pint_Renacyt6 = $this->SubirArchivo($request,'M61','Renacyt_M6',$codigo);
            $this->GuardarIntegrante($Codigopro,$request->FK_Integrante_ProyectoIntegrante6,2,$Pint_Ctvitae6,$Pint_Renacyt6);
       }


       

        



/*

        $proyectointegrante->FK_Proyecto_ProyectoIntegrante =($this->BuscarProyectoCodigo($codigo))->PK_Proyecto;
        $proyectointegrante->FK_Integrante_ProyectoIntegrante =$request->FK_Docente_Proyecto1;
        $proyectointegrante->FK_EquipoProyecto_ProyectoIntegrante =1;
        $proyectointegrante->Pint_Ctvitae =$Pint_CtvitaeR;
        $proyectointegrante->Pint_Renacyt =$Pint_RenacytR;*/

        

        $datos= array($codigo,$request->Pdet_Titulo);
         return view ('proyecto.MensajeRegistrado',compact('datos')); 
    }

     public function GuardarIntegrante( $idproyecto,$idintegrante,$equipo,$ctvitae,$renacyt)
    {
        $proyectointegrante = new proyectointegrante;  
        $proyectointegrante->FK_Proyecto_ProyectoIntegrante = $idproyecto;
        $proyectointegrante->FK_Integrante_ProyectoIntegrante = '2';
        $proyectointegrante->FK_EquipoProyecto_ProyectoIntegrante =$equipo;
        $proyectointegrante->Pint_Ctvitae =$ctvitae;
        $proyectointegrante->Pint_Renacyt =$renacyt;
        $proyectointegrante->save();

    }

     public function BuscarProyectoCodigo($Proy_codigo)
    {
        $docente = proyecto::where('Proy_codigo',$Proy_codigo)->first();
         return $docente;

    }

    /**
     * Display the specified resource.
     *
    public function show(proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proyecto $proyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proyecto $proyecto)
    {
        //
    }
}
