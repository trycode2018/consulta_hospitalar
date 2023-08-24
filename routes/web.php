<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/paciente', function () {
    return view('paciente');
})->middleware('auth');

Route::get('/medico',[App\Http\Controllers\HomeController::class, 'medico'])->middleware('auth');
Route::get('/consulta',[App\Http\Controllers\HomeController::class, 'consulta'])->middleware('auth');
Route::get('/analise',[App\Http\Controllers\HomeController::class, 'analise'])->middleware('auth');

Route::get('/user',function(){
    return Auth::user();
});

Route::post('/inserirConsulta', [App\Http\Controllers\HomeController::class, 'inserirConsulta']);
Route::post('/inserirAnalise', [App\Http\Controllers\HomeController::class, 'inserirAnalise']);
Route::post('/inserirPaciente', [App\Http\Controllers\HomeController::class, 'inserirPaciente']);
Route::post('/cadastrarMedico', [App\Http\Controllers\HomeController::class, 'cadastrarMedico']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
