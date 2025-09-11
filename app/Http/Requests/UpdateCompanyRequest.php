<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'responsible_id' => 'sometimes|required|exists:users,id',
            'licensed' => 'sometimes|required|boolean',
        ];
    }
}
