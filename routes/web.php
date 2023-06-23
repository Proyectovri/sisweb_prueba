<?php
use App\Mail\Notificacion;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\UsuarioController;

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

Route::get('/', function () {
    //return (new Notificacion("juan"))->render();
    $response = Mail::to('betxymarianelarojas@gmail.com')->send(new Notificacion("juan"));
    dump($response);
    });


Route::controller(UsuarioController::class)->group(function () {
    Route::get('registrar', 'create')->name('registrar');
    Route::post('registrar', 'store')->name('registrar');
});