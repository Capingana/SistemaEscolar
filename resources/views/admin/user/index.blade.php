@extends('layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('usuario.create') }}" class="btn btn-primary">Novo usuário <i class="bi bi-plus"></i></a>
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
    </div> <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome completo</th>
                    <th>E-mail</th>
                    <th>Criado em</th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="{{ route('usuario.edit',$user->id)}}" class="m-2 text-secondary size-5"><i
                                class="nav-icon bi bi-pencil-square"></i></a>
                        <a href="{{ route('usuario.show',$user->id)}}"><i class="nav-icon bi bi-eye"></i></a>
                        <a href="#" class="text-danger"><i class="nav-icon bi bi-trash"></i></a>
                    </td>
                </tr>
                @empty
                <p class="text-danger m-2">Sem usuários cadastrados.</p>
                @endforelse
            </tbody>
        </table>
    </div> 
</div>

@endsection