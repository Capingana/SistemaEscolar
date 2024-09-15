@extends('layouts.guest')
@section('guest')
    <div class="login-box">
        <div class="login-logo"> <a href="#">SIS</div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Esta é uma área segura do sistema.Confirme a sua senha antes de continuar.</p>
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <div class="input-group mb-3"> <input type="password" class="form-control" placeholder="Senha" name="password"  required autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div> 
                    <button type="submit" class="btn bnt-primary">Confirmar</button>
                </form>
            </div> 
        </div>
    </div> 
@endsection
