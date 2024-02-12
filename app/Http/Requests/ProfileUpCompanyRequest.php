<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpCompanyRequest extends FormRequest
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
            'nom' => 'string|max:255',
            'adresse' => 'max:255',
            'email' => 'email|unique:users',
            'description' => 'max:255',
            'slogan' => 'max:255',
            'industrie' => 'max:255',
            'photo' => '',
            'background' => '',
            'password' => 'string|min:4',
        ];
    }
}
