@extends('layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('classe.index') }}" class="btn btn-primary">Classes <i class="bi bi-list"></i></a>
        </h3>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('classe.store') }}" method="post">
                @csrf
               @include('admin.classe.partials.form')
            </form>
        </div>
    </div>
    @endsection