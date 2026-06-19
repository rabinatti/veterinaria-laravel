@extends('base')
@section('conteudo')

    <p>ID: {{ $cliente->id }}</p>
    <p>Nome: {{ $cliente->nome }}</p>
    <p>CPF: {{ $cliente->cpf }}</p>
    <p>Data de Nascimento: {{ \Carbon\Carbon::parse($cliente->dataNascimento)->format('d/m/Y') }}</p>

    <a href="/clientes/{{ $cliente->id }}/edit">Editar</a>

    <form action="/clientes/{{ $cliente->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Deseja excluir este cliente?')">Excluir</button>
    </form>

    <a href="/clientes">Voltar</a>

@endsection