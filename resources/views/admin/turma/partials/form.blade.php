<div class="card-header">
    <h3 class="card-title">
        <a href="{{ route('turma.index') }}" class="btn btn-primary">Turmas <i class="bi bi-list"></i></a>
    </h3>
</div>
@include('partials.error-message-request')
@csrf
<div class="card-body">
    <div class="row g-3">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome da turma</label>
            <input type="text" class="form-control" id="validationCustom01" value="{{ $turma->nome ?? old('nome') }}"
                name="nome" required="">
        </div>
        <div class="col-md-6"> <label for="description" class="form-label">Descrição da turma</label>
            <input type="text" class="form-control" id="validationCustom03" required=""
                value="{{ $turma->description ?? old('description') }}" name="description">
        </div>
        <div class="col-md-6"> <label for="classe_id" class="form-label">Classe</label>
            <select class="form-select" id="validationCustom04" required="" name="classe_id">
                <option value="0" selected disabled>Escolha...</option>
                @forelse ($classes as $classe)
                <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                @empty
                <p class="text-danger">Sem classes cadastradas...</p>
                @endforelse
            </select>
        </div>
    </div>
</div>
<div class="card-footer">
    <button class="btn btn-success" type="submit">Enviar</button>
</div>
<script>
    (() => {
        "use strict";

        const forms =
            document.querySelectorAll(".needs-validation");

        Array.from(forms).forEach((form) => {
            form.addEventListener(
                "submit",
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>