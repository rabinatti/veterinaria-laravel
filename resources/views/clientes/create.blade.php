@extends('base')
@section('conteudo')

    <form action="/clientes" method="POST">
        @csrf
        
        <label>Nome:</label>
        <input 
            type="text" 
            name="nome" 
            value="{{  old('nome')   }}"
        >
        @if($errors->has('nome'))
            <p>{{$errors->first('nome')}}
        @endif

        <label>CPF:</label>
        <input 
            type="text" 
            name="cpf" 
            value="{{ old('cpf')  }}"
        >
        @if($errors->has('cpf'))
            <p>{{$errors->first('cpf')}}
        @endif

        <label>Data de Nascimento:</label>
        <input 
            type="text" 
            name="dataNascimento" 
            placeholder="DD/MM/AAAA" 
            value="{{ old('dataNascimento')  }}">>
        @if($errors->has('dataNascimento'))
            <p>{{$errors->first('dataNascimento')}}
        @endif

        <button type="submit">Cadastrar</button>
    </form>

@endsection
