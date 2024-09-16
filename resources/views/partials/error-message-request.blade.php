@if ($errors->any())
@foreach ($errors->all() as $errors)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sucesso:</strong> {{ $errors }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif