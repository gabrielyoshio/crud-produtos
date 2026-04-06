<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Fornecedor;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        $fornecedores = Fornecedor::all();
        return view('produtos.create', compact('fornecedores'));
    }

    public function store(Request $request)
    {
        Produto::create($request->all());
        return redirect('/produtos');
    }

    public function edit(string $id)
    {
        $produto = Produto::findOrFail($id);
        $fornecedores = Fornecedor::all();
        return view('produtos.edit', compact('produto', 'fornecedores'));
    }

    public function update(Request $request, string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
        return redirect('/produtos');
    }

    public function destroy(string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect('/produtos');
    }
}