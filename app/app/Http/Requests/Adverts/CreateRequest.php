<?php

namespace App\Http\Requests\Adverts;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => 'required|integer|max:11',
            'brand_id' => 'required|integer|max:20',
            'model_id' => 'required|integer|max:20',
            'year' => 'required|integer|max:11',
            'body_id' => 'required|integer|max:20',
            'modification' => 'max:64',
            'condition_id' => 'required|integer|max:11',
            'price' => 'required|integer|max:11',
            'currency_id' => 'required|integer|max:11',
            'engine_type' => 'required|integer|max:11',
            'mileage' => 'required|integer|max:20',
            'transmission_id' => 'required|integer|max:11',
            'driving_id' => 'required|integer||max:11',
            'vin' => 'required|string:|max:17',
            'color_id' => 'required|integer|max:11',
            'interior_material_id' => 'required|integer|max:11',
            'interior_color_id' => 'required|integer|max:11',
            'exchange_id' => 'required|integer|max:11',
            'region_id' => 'required|integer|max:11',
            'city_id' => 'required|integer|max:11',
            'name' => 'required|string|max:64',
            'phone' => 'required|string|max:25',
        ];
    }
}
