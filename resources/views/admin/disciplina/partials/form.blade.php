<div class="card-header">
    <h3 class="card-title">
        <a href="{{ route('disciplina.index') }}" class="btn btn-primary">Disciplinas <i class="bi bi-list"></i></a>
    </h3>
</div>
@include('partials.error-message-request')
@csrf
<div class="row g-3">
    <div class="col-md-6">
        <label for="name" class="form-label">Nome da disciplina</label>
        <input type="text" class="form-control" id="validationCustom01" value="{{ $disciplina->name ?? old('name') }}"
            name="name" required="">
    </div>
    <div class="col-md-6"> <label for="codigo" class="form-label">Código da disciplina</label>
        <input type="text" class="form-control" id="validationCustom03" required=""
            value="{{ $disciplina->codigo ?? old('codigo') }}" name="codigo">
    </div>

    <div class="col-md-6"> <label for="carga_horaria_semanal" class="form-label">Carga horária
            semanal</label>
        <input type="number" class="form-control" id="validationCustom03" required=""
            value="{{ $disciplina->carga_horaria_semanal ?? old('carga_horaria_semanal') }}"
            name="carga_horaria_semanal">
    </div>
    <div class="col-md-6"> <label for="carga_horaria_mensal" class="form-label">Carga horária mensal</label>
        <input type="number" class="form-control" id="validationCustom03" required=""
            value="{{ $disciplina->carga_horaria_mensal ?? old('carga_horaria_mensal') }}" name="carga_horaria_mensal"
            disabled>
    </div>
</div>