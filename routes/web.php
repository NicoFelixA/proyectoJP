<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JustificanteController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['admin', 'role:admin']], function() {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/home', [HomeController::class, 'home']);

    //Rutas de alumnos
    Route::get('/consultar', [Controller::class, 'consultar']);
    Route::get('/alumno/consultar', [AlumnoController::class, 'consultar']);
    Route::get('/consultarPases', [AlumnoController::class, 'consultarPases']);
    Route::get('/alumno/consultarPases', [AlumnoController::class, 'consultarPases']);
    Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
    Route::get('/alumno/registrarPases', [AlumnoController::class, 'registrarPases']);
    Route::get('/reporte/pdf', [AlumnoController::class, 'reportePdf']);

    Route::get('/reporte/pdf/{id}', [AlumnoController::class, 'reporteAlumnoPdf']);

    //Rutas de administrador
    Route::get('/homeAdministrador', [HomeController::class, 'homeAdministrador']);

    //Ruta de ejemplo para obtener detalle de calificacion
    Route::get('alumno/materias', [AlumnoController::class, 'materias']);
    Route::get('generarQR', [AlumnoController::class, 'generaQR']);
    Route::post('guardarJustificante', [JustificanteController::class, 'guardarJustificante']);
});

Route::group(['prefix' => 'alumno','middleware' => ['alumno', 'role:alumno']], function() {
    Route::get('/home', function () {
        return view('alumno.home');
    });
});

require __DIR__.'/auth.php';
