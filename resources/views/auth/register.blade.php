@extends('layouts.guest')
@section('guest')
    <div class="register-box">
        <div class="register-logo"> <a href="#">SIS</a> </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Criar novo usuário</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Digite o nome de usuário" name="name"
                            value="{{ old('name') }}">
                        <div class="input-group-text">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            <span class="bi bi-person"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3"> <input type="email" class="form-control"
                            placeholder="Digite o seu e-mail" name="email" value="{{ old('email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                    </div>
                    <div class="input-group mb-3"> <input type="password" class="form-control"
                            placeholder="Digite uma senha forte" name="password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div>
                    <div class="input-group mb-3"> <input type="password" class="form-control" placeholder="Repetir senha"
                            name="password_confirmation">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p class="mb-0"> <a href="{{ route('login') }}" class="text-center">
                                    Já estou registrado
                                </a> </p>
                        </div>
                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit"
                                    class="btn btn-primary w-100">Registrar</button> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
