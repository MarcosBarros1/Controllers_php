<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Atividade 1
    public function index()
    {
        return "Lista de cursos";
    }

    // Atividade 2
    public function create()
    {
        return view('cursos.create');
    }

    // Atividade 3
    public function listagem()
    {
        $cursos = ['ADS', 'Zootecnia', 'Química'];
        
        // Passando a variável $cursos para a view com o nome 'cursos'
        return view('cursos.listagem', ['cursos' => $cursos]);
    }

    // Atividade 4
    public function show($id)
    {
        return "Curso selecionado: ID " . $id;
    }

    // Atividade 5
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return "Curso cadastrado: " . $nome;
    }
}