<?php

namespace App\Http\Controllers;

use App\Entity\AutoBrand;
use App\Http\Requests\ModelAutoRequest;

class ModelAutoController extends Controller
{
    public function handle(ModelAutoRequest $request)
    {
        $autoBrand = AutoBrand::find($request->get('brand_id'));

        return $autoBrand->models;
    }
}
