<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutoGenerationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'model_id' => 'required|integer',
        ];
    }
}
