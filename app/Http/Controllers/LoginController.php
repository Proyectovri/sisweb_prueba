<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{

    public function __construct()
    {
        //$this->middleware('guest',['only'=>'showLoginForm']);
    }

    //Mostrar la vista auth/login
    public function showLoginForm()
    {
        return view('welcome');
    }

    //validar los input
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'Usua_Correo' => 'required|string',
            'Usua_Clave' => 'required|string',
        ]);
    }

    //login
    public function login(Request $request)
    {
        $datos  = $this->validate($request, [
            'Usua_Correo' => 'email|required|string',
            'Usua_Clave' => 'required|string'
        ]);
        // valida si lo datos son correctos crea la sesion
        if (!Auth::attempt(['Usua_Correo' => $datos['Usua_Correo'], 'password' => $datos['Usua_Clave']])) {
            return back()->withErrors([$this->username() => trans('auth.failed')])->withInput(request([$this->username()]));
        }

        $request->session()->regenerate();


        return redirect()->route('dashboard');


        /*//$this->validateLogin($request);

         if(!Auth::attempt($request, $request->boolean('remember'))) {
            return back()->withErrors([$this->username() => trans('auth.failed')])->withInput(request([$this->username()]));
        }
        
        $request->session()->regenerate();
        return view('welcome');

        credentiales = $this->validate($request,[
            'Usua_Correo' => 'email|required|string',
            'Usua_Clave' => 'required|string',
        ]);

        if(Auth::attempt($credentiales)) {
           return "buenas credenciales";
        }*/
    }

    //cerrar sesion
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        return view('auth.login');
    }
    public function getAuthPassword()
    {

        return "Usua_Clave";
    }

    //definir cual es campo de validacion 
    public function username()
    {
        return 'email';
    }
}
