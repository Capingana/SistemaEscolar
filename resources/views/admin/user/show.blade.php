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
                <div>
                    <h6 class="text-uppercase">Cargo:Professor</h6>
                    <p>Total de turmas:45</p>
                </div>
            </div>
        </div> 
    </div>

</div>

@endsection