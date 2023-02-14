<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PictureRequest extends FormRequest
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
            'title' => ['required'],
            'picture' => ['required', 'image'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Champ requis',
            'picture.required' => 'Champ requis',
            'picture.image' => 'Le fichier doit être une image'
        ];
    }
}
