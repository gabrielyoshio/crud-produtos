@extends('layouts.app')

@section('content')
    <h2>Novo Fornecedor</h2>

    <form action="/fornecedores" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="/fornecedores" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection