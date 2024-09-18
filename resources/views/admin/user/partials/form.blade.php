@include('partials.error-message-request')
@csrf
<div class="row g-4">
    <div class="col-md-6">
        <div class="card card-secondary card-outline mb-4">
            <div class="card-body">
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Nome de usuário</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome de usuário"
                        value="{{ $user->name ?? old('name') }}">
                </div>
                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Endereço e-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail de usuário"
                        value="{{ $user->email ?? old('email')}}">
                </div>
                <div class="mb-3"> <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control" placeholder="Senha de usuário">
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="foto"> <label
                        class="input-group-text" for="inputGroupFile02">Foto</label>
                </div>
            </div>
        </div>
        <div class="card card-secondary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Perfil de usuário</div>
            </div>
            <div class="card-body">
                <fieldset class="row mb-3">
                    <div class="col-sm-10">
                        <div class="form-check"> <input class="form-check-input" type="radio" name="gridRadios"
                                id="gridRadios1" value="admin" checked> <label class="form-check-label"
                                for="gridRadios1">
                                Administrador do sistema
                            </label> </div>
                        <div class="form-check"> <input class="form-check-input" type="radio" name="gridRadios"
                                id="gridRadios2" value="professor"> <label class="form-check-label" for="gridRadios2">
                                Professor da instituição
                            </label> </div>
                        <div class="form-check disabled"> <input class="form-check-input" type="radio" name="gridRadios"
                                id="gridRadios3" value="aluno"> <label class="form-check-label" for="gridRadios3">
                                Estudante da instituição
                            </label> </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-secondary card-outline mb-4">
            <div class="card-body">
                <input class="form-control form-control-lg" type="text" placeholder="Bilhete de identidade de usuário"
                    aria-label=".form-control-lg example" name=bi value="{{ $user->dado->bi ??old('bi') }}"> <br>
                <input class="form-control" type="text" placeholder="Telefone de usuário"
                    aria-label="default input example" name="telefone" value="{{ $user->dado->telefone ??old('telefone') }}">
                <br>
                <label for="data_nascimento">Data de nascimento</label>
                <input class="form-control form-control-sm" type="date" placeholder="Data de nascimento"
                    aria-label=".form-control-sm example" name="data_nascimento" value="{{ $user->dado->data_nascimento ?? old('data_nascimento') }}">
            </div>
        </div>
        <div class="card card-secondary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Género</div>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    {{-- <div class="col-md-6"> <label for="validationCustom01" class="form-label">Primeiro nome</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Pule este campo" required
                            disabled>
                        <div class="valid-feedback">Perfeito!</div>
                    </div>
                    <div class="col-md-6"> <label for="validationCustom02" class="form-label">Último nome</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Pule este campo" required
                            disabled>
                        <div class="valid-feedback">Perfeito!</div>
                    </div> --}}
                    <div class="col-md-6"> 
                        <select name="sexo"
                            class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Procurar...</option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer"> <button class="btn btn-primary" type="submit">Enviar dados</button> </div>
        </div>
    </div>
</div>