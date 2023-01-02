<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'lastname' => ['required'],
            'firstname' => ['required'],
            'email' => ['required', 'email'],
            'role' => ['required', 'min:1', 'max:1'],
        ];
    }

    public function messages()
    {
        return [
            'lastname.required' => 'Champ requis',
            'firstname.required' => 'Champ requis',
            'email.required' => 'Champ requis',
            'role.required' => 'Valeur requise',
            'role.min' => 'Une valeur minimum',
            'role.max' => 'Une valeur maximum',
        ];
    }
}
