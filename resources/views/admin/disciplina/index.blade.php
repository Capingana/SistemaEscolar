@extends('layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('disciplina.create') }}" class="btn btn-primary">Nova disciplina <i
                    class="bi bi-plus"></i></a>
        </h3>
        <div class="card-tools">
            <form action="#" method="post">
                <div class="row">
                    <div class="col-8">
                        <input type="search" name="procurar" placeholder="Procurar" class="form-control">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-secondary">Procurar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card-body p-0">

        <table class="table">
            <thead>
                <tr>
                    <th>Nome disciplina</th>
                    <th>Código</th>
                    <th>Carga horária semanal</th>
                    <th>Carga horária mensal</th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($disciplinas as $disciplina)
                <tr>
                    <td>{{ $disciplina->name }}</td>
                    <td>{{ $disciplina->codigo }}</td>
                    <td>{{ $disciplina->carga_horaria_semanal }}</td>
                    <td>{{ $disciplina->carga_horaria_mensal }}</td>
                    <td>
                        <a href="{{ route('disciplina.edit',$disciplina->id)}}" class="m-2 text-secondary size-5"><i
                                class="nav-icon bi bi-pencil-square"></i></a>
                        <a href="{{ route('disciplina.show',$disciplina->id)}}"><i class="nav-icon bi bi-eye"></i></a>
                    </td>
                </tr>
                @empty
                <p class="text-danger m-2">Sem disciplinas cadastradas.</p>
                @endforelse
            </tbody>
        </table>
        {{ $disciplinas->links() }}
    </div>
</div>
@endsection