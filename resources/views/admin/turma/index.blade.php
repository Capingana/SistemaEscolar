@extends('layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('turma.create') }}" class="btn btn-primary">Nova turma <i class="bi bi-plus"></i></a>
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
                    <th>Nome da turma</th>
                    <th>Classe</th>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($turmas as $turma)
                <tr>
                    <td>{{ $turma->nome }}</td>
                    <td class="bg-secondary text-light">{{ $turma->classe->name }}</td>
                    <td>
                        <a href="{{ route('turma.edit',$turma->id)}}" class="m-2 text-secondary size-5"><i
                                class="nav-icon bi bi-pencil-square"></i></a>
                        <a href="{{ route('turma.show',$turma->id)}}"><i class="nav-icon bi bi-eye"></i></a>
                    </td>
                </tr>
                @empty
                <p class="text-danger m-2">Sem turma cadastrado.</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
