<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;


class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:8',
            'email' => 'required|email|unique:users',
            'login' => 'required|min:8|unique:users|string|max:255',
            "name" => 'required',
            "dataContrat" => 'required',
            "setor" => 'required',
            "cpf" => 'required|cpf',
            "rg" => 'required',
            "ctps" => 'required',
            "tituloEleitoral" => 'required',
            "cerReserv" => 'required',
            "escolaridade" => 'required',
            "address" => 'required',
            "numero" => 'required',
            "cep" => 'required',
            "bairro" => 'required',
            "city" => 'required',
            "phone" => 'required',
            "phone2" => 'required',
            "selected" => 'required',
            "escalas" => 'required',
            "prof" => 'required',
            "pis" => 'required',
            'level' => 'required',
            'orgEmissor' => 'required',
            'uf' => 'required',
            'password' => ['required', 'confirmed', Password::
            min(8)->letters()->mixedCase()->numbers()->symbols()],        ];
    }
}
