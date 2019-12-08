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
            'brand_id' => 'required|integer',
            'model_id' => 'required|integer',
            'year' => 'required|integer',
            'body_id' => 'required|integer',
            'engine_capacity' => 'required|integer',
            'modification' => 'string|nullable|max:64',
            'condition_id' => 'required|integer',
            'price' => 'required|integer',
            'currency_id' => 'required|integer',
            'engine_type_id' => 'required|integer',
            'mileage' => 'required|integer',
            'transmission_id' => 'required|integer',
            'driving_id' => 'required|integer',
            'vin' => 'required|string|unique:adverts|max:17',
            'color_id' => 'required|integer',
            'interior_material_id' => 'required|integer',
            'interior_color_id' => 'required|integer',
            'exchange_id' => 'required|integer',
            'region_id' => 'required|integer',
            'city_id' => 'required|integer',
            'name' => 'required|string|max:64',
            'phone' => 'required|string|max:25',
            'attribute_id.*' => 'numeric',
            'advert_images.*' => 'required|string'
        ];
    }
}
