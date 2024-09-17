@extends('layouts.app')
@section('content')
<div class="card card-info card-outline mb-4">
    <form class="needs-validation" action="{{ route('turma.update',$turma->id) }}" method="post">
        @method("PUT")
        @include('admin.turma.partials.form')
    </form>
</div>
@endsection