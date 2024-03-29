<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class competences_userRequest extends FormRequest
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
            'users_id' => '',
            'type_user' => 'required',
            'competences_id' => 'required',
            'offre_demploi_id' => '',
        ];
    }
}
