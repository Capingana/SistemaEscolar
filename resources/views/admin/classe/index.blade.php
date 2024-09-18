@extends('layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('classe.create') }}" class="btn btn-primary">Nova classe <i class="bi bi-plus"></i></a>
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
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Nome da classe</th>
                    <th>Turmas da classe</th>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($classes as $classe)
                <tr>
                    
                    <td>{{ $classe->name }}</td>
                    <td class="bg-secondary text-light">
                        @foreach ($classe->turmas as $turma)
                            <small>{{ $turma->nome }}</small><br>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('classe.edit',$classe->id)}}" class="m-2 text-secondary size-5"><i
                                class="nav-icon bi bi-pencil-square"></i></a>
                        <a href="{{ route('classe.show',$classe->id)}}"><i class="nav-icon bi bi-eye"></i></a>
                    </td>
                </tr>
                @empty
                <p class="text-danger m-2">Sem classe cadastrado.</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection