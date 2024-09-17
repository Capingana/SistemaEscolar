<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateTurmaRequest extends FormRequest
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
        return [
            //
            'nome' => ['required', 'min:3', 'max:50', 'unique:turmas,nome'],
            'description' => ['required', 'min:3', 'max:255', 'unique:turmas,nome'],
            'classe_id' => ['required']
        ];
    }

    public function messages()
    {
        return [
            "nome.required" => "Informe o nome da turma.",
            "classe_id.required" => "Escolha uma turma.",
            "nome.min" => "Nome da turma muito curto.",
            "nome.max" => "Nome da turma muito longo.",
            "description.min" => "Descrição da turma muito curta.",
            "description.max" => "Descrição da turma muito longa.",
            "nome.unique" => "Já existe uma turma com este nome.",
            "description.required" => "Informe a descrição da turma.",
        ];
    }
}
