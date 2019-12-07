<?php

namespace App\Http\Controllers\Adverts;

use App\Entity\Advert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function handler(Request $request, $brand_id = 0, $model_id = 0)
    {
        $advertQuery = Advert::query();

        $advertQuery->where('status', '=', Advert::STATUS_ACTIVE);

        if($brand_id){
            $advertQuery->where('brand_id', '=', $brand_id);
        }
        if($model_id){
            $advertQuery->where('model_id', '=', $model_id);
        }

        $filterParams = $request->all();

        $adverts = $advertQuery->get();

        return view('adverts.list', compact('adverts'));
    }
}
