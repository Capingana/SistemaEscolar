
@extends('layouts.guest')
@section('guest')
    <div class="login-box">
        <div class="login-logo"> <a href="../index2.html">SIS</a> </div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Faça login para iniciar sua sessão</p>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3"> <input type="email" class="form-control" placeholder="Email de acesso"
                            name="email" value="{{ old('email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                    </div>
                    <div class="input-group mb-3"> <input type="password" class="form-control" placeholder="Senha"
                            name="password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div> <!--begin::Row-->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                    name="remember">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Lembrar-me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Logar</button>
                            </div>
                        </div>
                    </div>
                </form>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        <p class="mb-1">
                            Esqueceu sua senha ?
                        </p>
                    </a>
                @endif
                <p class="mb-0">
                    <a href="{{ route('register') }}" class="text-center">
                        Registrar novo usuário
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
