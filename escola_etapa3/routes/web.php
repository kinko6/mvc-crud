<?php

use App\Http\Controllers;


Route::get('/', function () {
    return view('welcome'); // Página inicial
});

// Rotas para Professores
Route::resource('teachers', TeacherController::class);

// Rotas para Disciplinas
Route::resource('disciplines', DisciplineController::class);
