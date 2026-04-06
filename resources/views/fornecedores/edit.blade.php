@extends('layouts.app')

@section('content')
    <h2>Editar Fornecedor</h2>

    <form action="/fornecedores/{{ $fornecedor->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $fornecedor->nome }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $fornecedor->email }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" value="{{ $fornecedor->telefone }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="/fornecedores" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection