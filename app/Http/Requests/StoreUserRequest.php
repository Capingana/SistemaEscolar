<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'name' => ["required", "min:3", "max:255"],
            'email' => ["required", "email",
             //"unique:users,email"
             Rule::unique('users','email')->ignore($this->usuario,'id')
            ],
            "password" => ['required', 'min:8', 'max:100']
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Informe o nome de usuário.",
            "email.required" => "Informe o e-mail de usuário.",
            "password.required" => "Informe a senha de usuário.",
            "name.min" => "Nome de usuário deve ter no minimo 3 caracteres.",
            "name.max" => "Nome de usuário deve ter no máximo 255 caracteres.",
            "password.max" => "Senha de usuário deve ter no máximo 100 caracteres.",
            "password.min" => "Senha de usuário deve ter no mínimo 8 caracteres.",
            "email.email" => "Email de usuário inválido.",
            "email.unique" => "Já existe um usuário cadastrado este e-mail.",
        ];
    }
}
