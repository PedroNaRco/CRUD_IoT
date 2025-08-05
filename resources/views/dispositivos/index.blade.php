@extends('layouts.app')

@section('content')
    <h1>Dispositivos IoT</h1>

    @if (Auth::check())
    <a href="{{ route('dispositivos.create') }}" class="btn btn-primary mb-3">Novo Dispositivo</a>

    <form action="{{ route('logout')}}" method="POST">
        @csrf
    <button class="btn btn-danger mb-3">deslogar</button>
    </form>
    @else
    <a href="{{ route('login') }}" class="btn btn-success mb-3">Login</a>
    @endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dispositivos as $dispositivo)
                <tr>
                    <td>{{ $dispositivo->nome }}</td>
                    <td>{{ $dispositivo->tipo }}</td>
                    <td>{{ $dispositivo->modelo }}</td>
                    <td>{{ $dispositivo->ativo ? 'Ativo' : 'Inativo' }}</td>
                    <td>
                        @if (Auth::check())
                        <a href="{{ route('dispositivos.edit', $dispositivo) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('dispositivos.destroy', $dispositivo) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum dispositivo cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
