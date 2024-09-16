@include('partials.error-message-request')
@csrf
<div class="mt-2">
    <label for="name">Nome da classe</label>
    <input type="text" name="name" class="form-control" value="{{ $classe->name ?? old('name') }}"
        placeholder="Digite o nome da classe">
</div>
<button type="submit" class="btn btn-success mt-3">Enviar</button>