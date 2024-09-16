@extends('layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('usuario.index') }}" class="btn btn-primary">Usuários <i class="bi bi-person"></i></a>
        </h3>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('usuario.update',$user->id) }}" method="post">
                @method("PUT")
                @include('admin.user.partials.form')
            </form>
        </div>
    </div>
</div>
@endsection
