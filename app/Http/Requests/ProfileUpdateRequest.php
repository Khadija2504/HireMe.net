<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'password' => ['string', 'max:255'],
            'nom' => 'string|max:255',
            'prenom' => 'string|max:255',
            'adresse' => 'string|max:255',
            'contact_information'=>'max:255|',
            'age' => 'string|max:99',
            'about_me' => 'max:255',
            'titre' => 'max:255',
            'industrie' => 'max:255',
            'poste_actuel' => 'max:55',
            'photo' => '',
            'background' => '',
        ];
    }
}
