@extends('base')
@section('conteudo')

    <form action="/clientes/{{ $cliente->id }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $cliente->nome }}">

        <label>CPF:</label>
        <input type="text" name="cpf" value="{{ $cliente->cpf }}">

        <label>Data de Nascimento:</label>
        <input type="text" name="dataNascimento" value="{{ \Carbon\Carbon::parse($cliente->dataNascimento)->format('d/m/Y') }}">

        <button type="submit">Atualizar</button>
    </form>

@endsection