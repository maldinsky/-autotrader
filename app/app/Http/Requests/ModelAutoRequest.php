<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelAutoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'brand_id' => 'required|integer|max:11',
        ];
    }
}
