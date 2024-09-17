@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-primary shadow-sm"> <i
                        class="bi bi-people"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Usuários</span> <span
                        class="info-box-number">
                        {{ count($users) }} </span> </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-danger shadow-sm"> <i
                        class="bi bi-people"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Professores</span> <span
                        class="info-box-number">50</span> </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-success shadow-sm"> <i
                        class="bi bi-people"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Alunos</span> <span
                        class="info-box-number">20.040</span> </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="nav-icon bi bi-pencil-square"></i></span>
                <div class="info-box-content"> <span class="info-box-text">Turma</span> <span
                        class="info-box-number">{{ count($turmas) }}</span> </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-secondary shadow-sm">
                    <i class="nav-icon bi bi-pencil-square"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Disciplina</span> <span
                        class="info-box-number">{{ COUNT($disciplinas) }}</span> </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-success shadow-sm">
                    <i class="nav-icon bi bi-pencil-square"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Permissões</span> <span
                        class="info-box-number">16</span> </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-primary shadow-sm">
                    <i class="bi bi-list"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Regras</span> <span
                        class="info-box-number">16</span> </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-secondary shadow-sm">
                    <i class="bi bi-list"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Departamentos</span> <span
                        class="info-box-number">3</span> </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-list"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Cursos</span> <span
                        class="info-box-number">7</span> </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-danger shadow-sm">
                    <i class="bi bi-list"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Pedidos</span> <span
                        class="info-box-number">05</span> </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-list"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Permissões e regras</span>
                    <span class="info-box-number">10</span> </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box"> <span class="info-box-icon text-bg-info shadow-sm">
                    <i class="bi bi-list"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Classes</span>
                    <span class="info-box-number">{{ count($classes) }}</span> </div>
            </div>
        </div>
    </div>
</div>
@endsection
