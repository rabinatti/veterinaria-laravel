<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <span class="logo">🐾 Veterinária</span>
        <a href="/clientes">Clientes</a>
        <a href="/funcionarios">Funcionários</a>
        <a href="/pets">Pets</a>
    </nav>

    <div class="container">
        @yield('conteudo')
    </div>
</body>
</html>