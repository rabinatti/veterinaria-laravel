@extends('base')
@section('conteudo')

    <h1>Editar Funcionário</h1>
    <form action="/funcionarios/{{ $funcionario->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ empty(old('nome')) ? $funcionario->nome : old('nome') }}">
        @if($errors->has('nome'))
            <p>{{ $errors->first('nome') }}</p>
        @endif

        <label>CPF:</label>
        <input type="text" name="cpf" value="{{ empty(old('cpf')) ? $funcionario->cpf : old('cpf') }}">
        @if($errors->has('cpf'))
            <p>{{ $errors->first('cpf') }}</p>
        @endif

        <label>Data de Nascimento:</label>
        <input type="text" name="dataNascimento" placeholder="DD/MM/AAAA" value="{{ empty(old('dataNascimento')) ? \Carbon\Carbon::parse($funcionario->dataNascimento)->format('d/m/Y') : old('dataNascimento') }}">
        @if($errors->has('dataNascimento'))
            <p>{{ $errors->first('dataNascimento') }}</p>
        @endif

        <label>Salário:</label>
        <input type="number" step="0.01" name="salario" value="{{ empty(old('salario')) ? $funcionario->salario : old('salario') }}">
        @if($errors->has('salario'))
            <p>{{ $errors->first('salario') }}</p>
        @endif

        <label>Data de Contratação:</label>
        <input type="text" name="dataContratacao" placeholder="DD/MM/AAAA" value="{{ empty(old('dataContratacao')) ? \Carbon\Carbon::parse($funcionario->dataContratacao)->format('d/m/Y') : old('dataContratacao') }}">
        @if($errors->has('dataContratacao'))
            <p>{{ $errors->first('dataContratacao') }}</p>
        @endif

        <label>Senha:</label>
        <input type="password" name="senhaFuncionario">
        @if($errors->has('senhaFuncionario'))
            <p>{{ $errors->first('senhaFuncionario') }}</p>
        @endif

        <button type="submit">Atualizar</button>
    </form>

@endsection