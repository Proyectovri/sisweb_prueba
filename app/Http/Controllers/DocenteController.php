<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function BuscarDocenteId($dni)
    {
        $docente = docente::where('Doce_DNI',$dni)->first();
         return response()->json($docente);



    }
      public function store(Request $request)
    {
        $docente = new docente;
        $docente->FK_Carrera_Docente = $request->escuela;
        $docente->FK_GradoAcademico_Docente = $request->grado;
        $docente->Doce_DNI = $request->dni;
        $docente->Doce_TipoDocente = 'DO';
        $docente->Doce_Nombre = $request->nombre;
        $docente->Doce_Apellido = $request->apellidos;
        $docente->Doce_Celular = $request->celular;
        $docente->Doce_Correo  = $request->correo;
        $docente->Doce_Mencion =  $request->mencion;
        $docente->Doce_Estado = '1';
        $docente->save();
        //BuscarDocenteId($request->dni);
        $Buscardocente = docente::where('Doce_DNI',$request->dni)->first();
        return response()->json(['success'=>'Laravel ajax example is being processed.']);
   
    }
   
}
