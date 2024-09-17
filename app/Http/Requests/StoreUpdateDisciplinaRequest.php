<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDisciplinaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->segment(2);
        return [
            //
            "name" => ["required", "unique:disciplinas,name,{$id},id", "min:3", "max:100"],
            "codigo" => ["required", "min:3", "max:100"],
            "carga_horaria_semanal" => ["required", "numeric"],
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Informe o nome da disciplina",
            "name.unique" => "Já existe uma disciplina com este nome.",
            "name.min" => "Nome da disciplina muito curto.",
            "name.max" => "Nome da disciplina muito longo.",
            "codigo.required" => "Informe o código da disciplina.",
            "codigo.min" => "Código da disciplina muito curto.",
            "codigo.max" => "Código da disciplina muito longo.",
            "carga_horaria_semanal.required" => "Informe a carga horária semanal da disciplina.",
            "carga_horaria_semanal.numeric" => "A carga horária semanal deve ser um número.",
        ];
    }
}
