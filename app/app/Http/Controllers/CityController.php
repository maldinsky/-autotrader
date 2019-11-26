<?php

namespace App\Http\Controllers;

use App\Entity\Region;
use App\Http\Requests\CityRequest;

class CityController extends Controller
{
    public function handle(CityRequest $request)
    {
        $region = Region::find($request->get('region_id'));

        return $region->cities;
    }
}
