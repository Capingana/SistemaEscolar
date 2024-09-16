@include('partials.error-message-request')
@csrf
<div class="mt-2">
    <label for="name">Nome de usuário</label>
    <input type="text" name="name" class="form-control" placeholder="Nome de usuário" value="{{ old('name') }}">
</div>
<div class="mt-2">
    <label for="email">E-mail de usuário</label>
    <input type="email" name="email" class="form-control" placeholder="E-mail de usuário" value="{{old('email')}}">
</div>
<div class="mt-2">
    <label for="password">Senha de usuário</label>
    <input type="password" name="password" class="form-control" placeholder="Senha de usuário">
</div>
<div class="mt-2">
    <button type="submit" class="btn btn-success">Enviar</button>
</div>
