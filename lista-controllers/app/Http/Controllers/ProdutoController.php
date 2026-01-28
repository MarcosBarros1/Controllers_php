<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create()
    {
        // Retorna a view com o formulário
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        // Recebe o dado e mostra na tela
        $nome = $request->input('nome');
        return "Produto cadastrado com sucesso: " . $nome;
    }
}