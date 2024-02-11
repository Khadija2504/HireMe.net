<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class registerCompanyRequest extends FormRequest
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
            'adresse' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'description' => 'required|max:255',
            'slogan' => 'required|max:255',
            'industrie' => 'required|max:255',
            'photo' => '',
            'background' => '',
            'password' => 'required|string|min:4',
        ];
    }
}
