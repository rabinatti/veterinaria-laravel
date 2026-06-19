@extends('base')
@section('conteudo')

    <h1>Cadastrar Funcionário</h1>
    <form action="/funcionarios" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome') }}">
        @if($errors->has('nome'))
            <p>{{ $errors->first('nome') }}</p>
        @endif

        <label>CPF:</label>
        <input type="text" name="cpf" value="{{ old('cpf') }}">
        @if($errors->has('cpf'))
            <p>{{ $errors->first('cpf') }}</p>
        @endif

        <label>Data de Nascimento:</label>
        <input type="text" name="dataNascimento" placeholder="DD/MM/AAAA" value="{{ old('dataNascimento') }}">
        @if($errors->has('dataNascimento'))
            <p>{{ $errors->first('dataNascimento') }}</p>
        @endif

        <label>Salário:</label>
        <input type="number" step="0.01" name="salario" value="{{ old('salario') }}">
        @if($errors->has('salario'))
            <p>{{ $errors->first('salario') }}</p>
        @endif

        <label>Data de Contratação:</label>
        <input type="text" name="dataContratacao" placeholder="DD/MM/AAAA" value="{{ old('dataContratacao') }}">
        @if($errors->has('dataContratacao'))
            <p>{{ $errors->first('dataContratacao') }}</p>
        @endif

        <label>Senha:</label>
        <input type="password" name="senhaFuncionario" value="{{ old('senhaFuncionario') }}">
        @if($errors->has('senhaFuncionario'))
            <p>{{ $errors->first('senhaFuncionario') }}</p>
        @endif

        <button type="submit">Cadastrar</button>
    </form>

@endsection