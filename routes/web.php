<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/aluno', [AlunoController::class,'index']) ->name('aluno.index');

Route::get('/aluno/create', [AlunoController::class,'create'])->name('aluno.create');

 Route::post('/aluno/store', [AlunoController::class,'store'])->name('aluno.store');

 Route::delete('/aluno/{id}', [AlunoController::class,'destroy'])->name('aluno.destroy');