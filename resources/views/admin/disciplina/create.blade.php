@extends('layouts.app')
@section('content')

<div class="card card-info card-outline mb-4">
    <div class="card-body">
        <form action="{{ route('disciplina.store') }}" method="post">
            @include('admin.disciplina.partials.form')
    </div>
    <div class="card-footer">
        <button class="btn btn-success" type="submit">Enviar</button>
    </div>
    </form>
</div>

<select id="example-getting-started" multiple="multiple">
    <option value="cheese">Cheese</option>
    <option value="tomatoes">Tomatoes</option>
    <option value="mozarella">Mozzarella</option>
    <option value="mushrooms">Mushrooms</option>
    <option value="pepperoni">Pepperoni</option>
    <option value="onions">Onions</option>
</select>


<!-- Initialize the plugin: -->

@endsection
