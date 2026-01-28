<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = ['Rafael', 'Erlano', 'Marcos', 'Davi'];
        
        // Passando a variável $alunos para a view com o nome 'alunos'
        return view('alunos.listagem', ['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Aluno salvo";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Exibindo aluno de ID: " . $id;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}