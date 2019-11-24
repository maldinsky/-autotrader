<?php

namespace App\Http\Controllers;

use App\Entity\AutoModel;
use Illuminate\Http\Request;

class ModelAutoController extends Controller
{
    public function getModelsByBrand(Request $request)
    {
        $autoModels = AutoModel::where('auto_brand_id', $request->get('brand_id'))->get();

        return $autoModels;
    }
}
