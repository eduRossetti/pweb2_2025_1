<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/aluno', function (): string {
    return "Jackson";
});