@extends('base')
@section('conteudo')

    <h1>Detalhes do Funcionário</h1>

    <p>ID: {{ $funcionario->id }}</p>
    <p>Nome: {{ $funcionario->nome }}</p>
    <p>CPF: {{ $funcionario->cpf }}</p>
    <p>Data de Nascimento: {{ \Carbon\Carbon::parse($funcionario->dataNascimento)->format('d/m/Y') }}</p>
    <p>Salário: R$ {{ number_format($funcionario->salario, 2, ',', '.') }}</p>
    <p>Data de Contratação: {{ \Carbon\Carbon::parse($funcionario->dataContratacao)->format('d/m/Y') }}</p>
    <p>Ativo: {{ $funcionario->funcionarioAtivo ? 'Sim' : 'Não' }}</p>

    <a href="/funcionarios/{{ $funcionario->id }}/edit">Editar</a>

    <form action="/funcionarios/{{ $funcionario->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Deseja excluir este funcionário?')">Excluir</button>
    </form>

    <a href="/funcionarios">Voltar</a>

@endsection