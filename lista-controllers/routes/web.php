<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

// Atividade 1
Route::get('/cursos', [CursoController::class, 'index']);

// Atividade 2
Route::get('/cursos/novo', [CursoController::class, 'create']);

// Atividade 3
Route::get('/cursos/lista', [CursoController::class, 'listagem']);

// Atividade 5
Route::post('/cursos/salvar', [CursoController::class, 'store']);

// Atividade 4
Route::get('/cursos/{id}', [CursoController::class, 'show']);

// Atividade 6:
Route::resource('/alunos', AlunoController::class);

// Atividade 7
Route::get('/disciplinas', [DisciplinaController::class, 'index']); // Listar
Route::get('/disciplinas/create', [DisciplinaController::class, 'create']); // Form
Route::post('/disciplinas/store', [DisciplinaController::class, 'store']); // Salvar
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']); // Visualizar

// Atividade final
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);