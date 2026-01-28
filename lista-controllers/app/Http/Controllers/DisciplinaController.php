<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = ['Desenvolvimento Web', 'Banco de Dados', 'Gestão de Projetos'];


        // Passando a variável $disciplinas para a view com o nome 'disciplinas'
        return view('disciplinas.listagem', ['disciplinas' => $disciplinas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('disciplinas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return "Disciplina cadastrada: " . $nome;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Exibindo disciplina de ID: " . $id;
    }

}