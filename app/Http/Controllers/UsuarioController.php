<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\docente;
use App\Models\carrera;
use App\Models\gradoacademico;
use App\Mail\Notificacion;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
 
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = carrera::all();
        $gradosacademicos = gradoacademico::all();
        return view ('auth.registro',compact('carreras','gradosacademicos')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $docente = new docente;
        $docente->FK_Carrera_Docente = $request->escuela;
        $docente->FK_GradoAcademico_Docente = $request->grado;
        $docente->Doce_DNI = $request->dni;
        $docente->Doce_Nombre = $request->nombre;
        $docente->Doce_Apellido = $request->apellidos;
        $docente->Doce_Celular = $request->celular;
        $docente->Doce_Correo  = $request->correo;
        $docente->Doce_Mencion =  $request->mencion;
        $docente->Doce_Estado = '1';
        $docente->save();
        $Buscardocente = docente::where('Doce_DNI',$request->dni)->firstOrFail();
        $usuario = new usuario;
        $usuario->FK_RolUsuario_Usuario = 1;
        $usuario->Usua_id = $Buscardocente->PK_Docente;;
        $usuario->Usua_Responsable = $request->nombre;
        $usuario->Usua_Correo  = $request->correo;
        $password = Str::random(8);
        $usuario->Usua_Clave =  Hash::make($password);;
        $usuario->Usu_Estado = '1';
        $usuario->save();
        Mail::to($request->correo)->send(new Notificacion("juan"));

        return view('welcome');

        //return Str::random(5);
    }

    //validar los input
   protected function validateLogin(Request $request)
    {
        $credenciales = $request->validate([
            ''=> 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
