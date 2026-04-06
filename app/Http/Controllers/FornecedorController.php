<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        Fornecedor::create($request->all());
        return redirect('/fornecedores');
    }

    public function edit(string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedores.edit', compact('fornecedor'));
    }

    public function update(Request $request, string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());
        return redirect('/fornecedores');
    }

    public function destroy(string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();
        return redirect('/fornecedores');
    }
}