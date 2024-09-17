@extends('layouts.app')
@section('content')
<div class="card card-info card-outline mb-4">
    <form class="needs-validation" action="{{ route('turma.store') }}" method="post">
        @include('admin.turma.partials.form')
    </form>
</div>
@endsection