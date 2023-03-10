<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class CompanyRequest extends FormRequest
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
            'name' => 'required|min:8|unique:companies',
            'email' => 'required|email|unique:companies',
            'login' => 'required|min:8|unique:companies',
            'plano' => 'required',
            'password' => ['required', 'confirmed', Password::
            min(8)->letters()->mixedCase()->numbers()->symbols()],

        ];
    }
}
