@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('disciplina.index') }}" class="btn btn-primary"> Disciplinas <i class="bi bi-list"></i></a>
        </h3>
    </div>
    <div class="card">
        <div class="card-body">
            <h1>{{ $disciplina->name }}</h1>
            <p>Código: <strong>{{ $disciplina->codigo }}</strong></p>
            <p>Tempos Semanal: <strong>{{ $disciplina->carga_horaria_semanal }}</strong></p>
            <p>Tempos mensal: <strong>{{ $disciplina->carga_horaria_mensal }}</strong></p>
            <hr>
            <form action="{{ route('disciplina.destroy',$disciplina->id) }}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Eliminar disciplina<i
                        class="nav-icon bi bi-trash m-2"></i></button>
            </form>
        </div>
    </div>
</div>

@endsection