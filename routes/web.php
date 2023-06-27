<?php
use App\Mail\Notificacion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProyectoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
return view('auth.login');
    });*/

Route::get('/', function () {
return view('auth.login');
    });

Route::controller(UsuarioController::class)->group(function () {
    Route::get('registrar', 'create')->name('registrar');
    Route::post('registrar', 'store')->name('registrar');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'showLoginForm')->name('login');
    Route::post('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
    //Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::controller(ProyectoController::class)->group(function () {
    Route::get('proyecto', 'create')->name('proyecto');
    Route::post('proyecto', 'store')->name('proyecto');
});

Route::controller(DocenteController::class)->group(function () {
    Route::post('registrardocente', 'store')->name('registrardocente');
});


Route::get('docente/{id}', [DocenteController::class, 'BuscarDocenteId'])->name('animal.editar');

Route::resource('todo', DocenteController::class);

    Route::get('dashboard', function () {return view('layouts.app');})->name('dashboard'); 

