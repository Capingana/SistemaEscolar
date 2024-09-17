@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('turma.index') }}" class="btn btn-primary">Turmas <i class="bi bi-list"></i></a>
        </h3>
    </div>
    <div class="card">
        <div class="card-body">
            <h1>{{ $turma->nome }}</h1>
            <p>Classe: <strong>{{ $turma->classe->name }}</strong></p>
            <hr>
            <form action="{{ route('turma.destroy',$turma->id) }}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Eliminar turma<i
                        class="nav-icon bi bi-trash m-2"></i></button>
            </form>
        </div>
    </div>
</div>

@endsection