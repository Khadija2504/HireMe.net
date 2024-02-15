<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cursus_educatifsRequest extends FormRequest
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
            'user_id' => 'required',
            'nom_cursus_educatifs' => 'required',
            'description' => 'required',
            'date' => 'required',
        ];
    }
}
