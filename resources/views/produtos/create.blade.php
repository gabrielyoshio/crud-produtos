@extends('layouts.app')

@section('content')
    <h2>Novo Produto</h2>

    <form action="/produtos" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Estoque</label>
            <input type="number" name="estoque" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Fornecedor</label>
            <select name="fornecedor_id" class="form-control">
                @foreach($fornecedores as $fornecedor)
                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="/produtos" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection