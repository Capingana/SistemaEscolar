@extends('layouts.app')
@section('content')
<div class="card card-info card-outline mb-4">
    <div class="card-body">
        <form action="{{ route('disciplina.update',$disciplina->id) }}" method="post">
            @method("PUT")
            @include('admin.disciplina.partials.form')
    </div>
    <div class="card-footer">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
    </form>
</div>
@endsection