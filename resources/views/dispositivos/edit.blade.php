@extends('layouts.app')

@section('content')
    <h1>Editar Dispositivo</h1>
    <a href="{{ route('dispositivos.index') }}" class="btn btn-secondary mb-3">Voltar</a>

    @include('dispositivos._form', [
        'action' => route('dispositivos.update', $dispositivo),
        'method' => 'PUT',
        'dispositivo' => $dispositivo
    ])
@endsection
