<form action="{{ $action }}" method="POST">
    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $dispositivo->nome) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <input type="text" name="tipo" id="tipo" value="{{ old('tipo', $dispositivo->tipo) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="modelo" class="form-label">Modelo</label>
        <input type="text" name="modelo" id="modelo" value="{{ old('modelo', $dispositivo->modelo) }}" class="form-control" required>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="ativo" id="ativo" class="form-check-input" {{ old('ativo', $dispositivo->ativo) ? 'checked' : '' }}>
        <label for="ativo" class="form-check-label">Ativo</label>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>
