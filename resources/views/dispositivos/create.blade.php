@extends('layouts.app')

@section('content')
    <h1>Novo Dispositivo</h1>
    <a href="{{ route('dispositivos.index') }}" class="btn btn-secondary mb-3">Voltar</a>

    @include('dispositivos._form',[
     'action' => route('dispositivos.store'),
     'method' => 'POST',
     'dispositivo' => new \App\Models\Dispositivo()])
@endsection
