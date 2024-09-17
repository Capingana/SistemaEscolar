@extends('layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('classe.index') }}" class="btn btn-primary">Classes <i class="bi bi-list"></i></a>
        </h3>
    </div>
    <div class="card">
        <div class="card-body">
            <h1>{{ $classe->name }}</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Total de turma vinculadas: <strong>{{ count($classe->turmas) }}</strong></th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($classe->turmas as $turma)
                    <tr>
                        <td scope="row" class="bg-secondary text-light">
                            {{ $turma->nome }}
                        </td>
                    </tr>
                    @empty
                    <p class="text-danger">Sem turmas vinculadas...</p>
                    @endforelse
                </tbody>
            </table>
            <hr>
            <form action="{{ route('classe.destroy',$classe->id) }}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Eliminar classe <i class="nav-icon bi bi-trash"></i></button>
            </form>
        </div>
    </div>
</div>
@endsection
