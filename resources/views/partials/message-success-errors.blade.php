@if (session()->has('sucesso'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sucesso:</strong> {{ session('sucesso') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if (session()->has('erro'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sucesso:</strong> {{ session('erro') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif


