<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuario', function () {
    return view('usuario.index');
});
Route::get('/layout', function () {
    return view('layouts.layout');
});
// usuario

Route::get('/usuario/login',[UsuarioController::class,'create'])->name('usuario.login');
Route::get('/usuario/create',[UsuarioController::class,'create'])->name('usuario.create');
Route::post('/usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');
