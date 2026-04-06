@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Fornecedores</h2>
        <a href="/fornecedores/create" class="btn btn-primary">Novo Fornecedor</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fornecedores as $fornecedor)
            <tr>
                <td>{{ $fornecedor->id }}</td>
                <td>{{ $fornecedor->nome }}</td>
                <td>{{ $fornecedor->email }}</td>
                <td>{{ $fornecedor->telefone }}</td>
                <td>
                    <a href="/fornecedores/{{ $fornecedor->id }}/edit" class="btn btn-sm btn-warning">Editar</a>
                    <form action="/fornecedores/{{ $fornecedor->id }}" method="POST" style="display:inline">
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