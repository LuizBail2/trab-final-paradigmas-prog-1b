<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'responsible_id' => 'required|exists:users,id',
            'licensed' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome da empresa é obrigatório.',
            'responsible_id.required' => 'O responsável é obrigatório.',
            'responsible_id.exists' => 'O responsável informado não existe.',
            'licensed.required' => 'O campo licensed é obrigatório.',
        ];
    }
}
