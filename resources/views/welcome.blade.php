@extends('base')
@section('conteudo')

    <h1>Bem-vindo ao sistema</h1>
    <p style="color:#555; margin-bottom: 24px;">Gerencie clientes, funcionários e pets pela navegação acima.</p>

    <div style="display: flex; gap: 16px;">
        <a href="/clientes" style="background:white; border:1px solid #a5d6a7; border-radius:8px; padding:20px 32px; text-align:center; color:#2e7d32; font-weight:600;">
            👤 Clientes
        </a>
        <a href="/funcionarios" style="background:white; border:1px solid #a5d6a7; border-radius:8px; padding:20px 32px; text-align:center; color:#2e7d32; font-weight:600;">
            👨‍⚕️ Funcionários
        </a>
        <a href="/pets" style="background:white; border:1px solid #a5d6a7; padding:20px 32px; border-radius:8px; text-align:center; color:#2e7d32; font-weight:600;">
            🐶 Pets
        </a>
    </div>

@endsection