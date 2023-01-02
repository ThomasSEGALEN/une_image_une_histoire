<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
        ];
    }

    public function messages()
    {
        return [
            'token.required' => 'Token expiré',
            'email.required' => 'Champ requis',
            'password.required' => 'Champ requis',
            'password.confirmed' => 'Les mots de passe diffèrent',
            'password.min' => '8 caractères minimum',
        ];
    }
}
