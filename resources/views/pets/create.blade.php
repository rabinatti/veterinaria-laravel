@extends('base')
@section('conteudo')

    <form action="/pets" method="POST">
        @csrf
        
        <label>Nome:</label>
        <input 
            type="text" 
            name="nomePet" 
            value="{{  old('nomePet')   }}"
        >
        @if($errors->has('nomePet'))
            <p>{{$errors->first('nomePet')}}
        @endif

        <label>Raça:</label>
        <input 
            type="text" 
            name="raca" 
            value="{{ old('raca')  }}"
        >
        @if($errors->has('raca'))
            <p>{{$errors->first('raca')}}
        @endif

        <label>Data de Nascimento do Pet:</label>
        <input 
            type="text" 
            name="dataNascimentoPet" 
            placeholder="DD/MM/AAAA" 
            value="{{ old('dataNascimentoPet')  }}">>
        @if($errors->has('dataNascimentoPet'))
            <p>{{$errors->first('dataNascimentoPet')}}
        @endif

        <label>Tipo:</label>
        <input 
            type="text" 
            name="tipo" 
            value="{{ old('tipo')  }}"
        >
        @if($errors->has('tipo'))
            <p>{{$errors->first('tipo')}}
        @endif

        <label>Cliente:</label>
        <select name="idCliente">
            <option value="">Selecione um cliente</option>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ old('idCliente') == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->nome }}
                </option>
            @endforeach
        </select>
        @if($errors->has('idCliente'))
            <p>{{ $errors->first('idCliente') }}</p>
        @endif

        <button type="submit">Cadastrar</button>
    </form>

@endsection