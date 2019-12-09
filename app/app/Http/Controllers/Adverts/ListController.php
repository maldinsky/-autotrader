<?php

namespace App\Http\Controllers\Adverts;

use App\Entity\Advert;
use App\Entity\AutoBody;
use App\Entity\AutoBrand;
use App\Entity\AutoDriving;
use App\Entity\AutoEngineType;
use App\Entity\AutoTransmission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function handler(Request $request, $brand_id = 0, $model_id = 0)
    {
        $filterAutoBrands = AutoBrand::all();
        $filterAutoBodies = AutoBody::all();
        $filterTransmissions = AutoTransmission::all();
        $filterEngines = AutoEngineType::all();
        $filterDrivings = AutoDriving::all();


        $advertQuery = Advert::query();

        $advertQuery->where('status', '=', Advert::STATUS_ACTIVE);

        if($brand_id){
            $advertQuery->where('brand_id', '=', $brand_id);
        }
        if($model_id){
            $advertQuery->where('model_id', '=', $model_id);
        }

        $filterParams = $request->all();

        $adverts = $advertQuery->paginate(15);

        return view('adverts.list', compact('adverts', 'filterAutoBrands', 'filterAutoBodies', 'filterTransmissions', 'filterEngines','filterDrivings'));
    }
}
