<?php

use App\Http\Controllers\ImprimirController;
use App\Http\Livewire\Recursos;
use App\Http\Livewire\Sobrante;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Users;
use function GuzzleHttp\Promise\all;

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


Route::get('/', function (){
    return redirect()->route('login');
});

Route::get('/imprimir', [ImprimirController::class, 'imprimir'])->name('imprimir');
Route::get('/imprimir/acta', [ImprimirController::class, 'imprimirRecurso'])->name('recursos.acta');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/recursos', Recursos::class)->name('recursos.disponibles');
    Route::get('/users', Users::class)->name('administrar.usuarios');
    Route::get('/sobrantes', Sobrante::class)->name('recursos.sobrantes');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

