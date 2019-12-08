<?php

namespace App\Http\Controllers;

use App\Entity\AutoBrand;
use App\Entity\AutoGeneration;
use App\Entity\AutoModel;
use App\Http\Requests\AutoGenerationRequest;

class AutoGenerationController extends Controller
{
    public function handle(AutoGenerationRequest $request)
    {
        $autoModel = AutoModel::find($request->get('model_id'));

        return $autoModel->autoGenerations;
    }
}
