<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|string|min:2|max:35",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|min:6|max:30",
            "core_id" => "nullable|array",
            "core_id.*" => "nullable|integer|exists:cores,id",
            "role_id" => "nullable|integer|exists:roles,id",            
        ];
    }

    public function attributes()
    {
        return [
            "name" => 'nome',
            "email" => 'email',
            "password" => "senha",
            "core_id" => "núcleo",
            "role_id" => "cargo",
        ];
    }

    public function messages()
    {
        return [
            "required" => 'O campo :attribute é obrigatório',
            "min" => "O campo :attribute precisa ter pelo menos :min caracteres",
            "max" => "O campo :attribute pode ter no maximo :max caracteres",
            "email" => "O campo email precisa ser um email valido",
            "unique" => "Este :attribute já está cadastrado",
            "exists" => "O campo :attribute não existe",
        ];
    }
}
