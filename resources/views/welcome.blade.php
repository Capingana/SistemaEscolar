<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<style>
    body {
        min-height: 75rem;
        padding-top: 4.5rem;
    }
</style>

<body class="antialiased">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIS | SISTEMA DE CONTROLE DE NOTAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                @if (Route::has('login'))
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Painel</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrar-se</a>
                    </li>
                    @endif
                    @endauth
                </ul>
                @endif
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Procurar por..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Procurar</button>
                </form>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="bg-body-tertiary p-5 rounded">
            <h1>SIS</h1>
            <p class="lead">O SIS é um sistema de gestão de notas de alunos do ensino primário.</p>
            <a class="btn btn-lg btn-primary" href="#" role="button">Gerir alunos &raquo;</a>
        </div>
    </main>
</body>

</html>