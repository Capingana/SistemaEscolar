@extends('layouts.guest')
@section('guest')
    <div class="login-box">
        <div class="login-logo"> <a href="#">SIS</a></div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Esqueceu sua senha ? Não tem problema.Basta nos informar seu endereço 
                    e-mail e enviaremos por e-mail um link de redefinição de senha que permitirá que voçe escolha uma nova.</p>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="input-group mb-3"> <input type="email" class="form-control" placeholder="Email de acesso"
                            name="email" value="{{ old('email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                    </div> 
                    <button type="submit" class="btn btn-primary">Link de redefinição de e-mail</button>
                </form>
            </div> 
        </div>
    </div> 
@endsection

