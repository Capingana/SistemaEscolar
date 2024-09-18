@extends('layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('usuario.index') }}" class="btn btn-primary">Usuários <i class="bi bi-person"></i></a>
        </h3>
        <div class="card-tools">
            <form action="{{ route('usuario.destroy',$user->id) }}" method="post">
                @csrf
                @method("DELETE")
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-danger">Eliminar usuário<i class="bi bi-trash m-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card direct-chat direct-chat-warning">
        <div class="card-body">
            <div class="direct-chat-messages"> 
                <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix"> <span class="direct-chat-name float-start">
                            <h2>{{ $user->name }}</h2>
                        </span><span class="direct-chat-timestamp float-end">
                           <small>Data de cadastro: <strong>{{ $user->created_at }}</strong></small>
                        </span> 
                    </div>                    
                </div> 
                <hr>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr >
                            <td>Email</td>
                            <td>Bilhete de identidade</td>
                            <td>Telefone</td>
                            <td>Data de nascimento</td>
                            <td>Sexo</td>
                            <td>Cargo</td>
                            <td>Total de turmas vinculadas</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->dado->bi }}</td>
                            <td>{{ $user->dado->telefone }}</td>
                            <td>{{ $user->dado->data_nascimento }}</td>
                            <td>{{ $user->dado->sexo }}</td>
                            <td>Sem cargo</td>
                            <td>Sem turmas</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>

</div>

@endsection