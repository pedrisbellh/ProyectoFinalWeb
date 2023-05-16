<?php

use App\Http\Livewire\Recursos;
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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/recursos', Recursos::class);
    Route::get('/users', Users::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
