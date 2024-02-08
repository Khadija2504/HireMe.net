<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class registerUserRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|numeric|digits:10',
            'contact_information'=>'required|max:255|',
            'age' => 'required|numeric|max:99',
            'email' => 'required|email|unique:users',
            'about_me' => 'required|max:255',
            'titre' => 'required|max:255',
            'industrie' => 'required|max:255',
            'password' => 'required|string|min:4',
        ];
    }
}
