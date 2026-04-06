@extends('layouts.app')

@section('content')
    <h2>Editar Produto</h2>

    <form action="/produtos/{{ $produto->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $produto->nome }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control">{{ $produto->descricao }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" value="{{ $produto->preco }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Estoque</label>
            <input type="number" name="estoque" class="form-control" value="{{ $produto->estoque }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Fornecedor</label>
            <select name="fornecedor_id" class="form-control">
                @foreach($fornecedores as $fornecedor)
                    <option value="{{ $fornecedor->id }}" {{ $produto->fornecedor_id == $fornecedor->id ? 'selected' : '' }}>
                        {{ $fornecedor->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="/produtos" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection