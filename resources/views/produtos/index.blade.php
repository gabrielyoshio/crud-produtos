@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Produtos</h2>
        <a href="/produtos/create" class="btn btn-primary">Novo Produto</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Fornecedor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>R$ {{ $produto->preco }}</td>
                <td>{{ $produto->estoque }}</td>
                <td>{{ $produto->fornecedor->nome }}</td>
                <td>
                    <a href="/produtos/{{ $produto->id }}/edit" class="btn btn-sm btn-warning">Editar</a>
                    <form action="/produtos/{{ $produto->id }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection