<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => ['required', 'email'],
            'name' => ['required', 'string'],
            'reason' => ['required', 'string'],
            'how' => ['required', 'string'],
            'message' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Champ requis',
            'email.email' => 'Adresse e-mail requise',
            'name.required' => 'Champ requis',
            'name.string' => 'Chaîne de caractères attendue',
            'reason.required' => 'Champ requis',
            'reason.string' => 'Chaîne de caractères attendue',
            'how.required' => 'Champ requis',
            'how.string' => 'Chaîne de caractères attendue',
            'message.required' => 'Champ requis',
            'message.string' => 'Chaîne de caractères attendue',
        ];
    }
}
