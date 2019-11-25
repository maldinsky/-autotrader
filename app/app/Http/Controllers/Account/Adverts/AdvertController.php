<?php

namespace App\Http\Controllers\Account\Adverts;

use App\Entity\Advert;
use App\Entity\AutoBody;
use App\Entity\AutoBrand;
use App\Entity\AutoColor;
use App\Entity\AutoInteriorColor;
use App\Entity\AutoInteriorMaterial;
use App\Entity\AutoType;
use App\Entity\Currency;
use App\Entity\Region;
use App\Http\Controllers\Controller;
use App\Http\Requests\Adverts\CreateRequest;
use Auth;

class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Auth::getUser()->adverts;

        return view('account.adverts.list', compact('adverts'));
    }

    public function create()
    {
        $autoBrands = AutoBrand::all();
        $autoTypes = AutoType::all();
        $autoBodies = AutoBody::all();
        $conditions = Advert::CONDITION_ID;
        $currencies = Currency::all();
        $engines = Advert::ENGINE_TYPE;
        $transmissions = Advert::TRANSMISSION_ID;
        $drivings = Advert::DRIVING_ID;
        $colors = AutoColor::all();
        $interiorColors = AutoInteriorColor::all();
        $interiorMaterials = AutoInteriorMaterial::all();
        $exchanges = Advert::EXCHANGE;
        $regions = Region::all();

        return view('account.adverts.create', compact(
            'autoBrands',
            'autoTypes' ,
            'autoBodies',
            'conditions',
            'currencies',
            'engines',
            'transmissions',
            'drivings',
            'colors',
            'interiorColors',
            'interiorMaterials',
            'exchanges',
            'regions'
        ));
    }

    public function store(CreateRequest $request)
    {
        Auth::getUser()->adverts()->create($request->toArray());
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

        $advert = Advert::find($id);
        $autoBrands = AutoBrand::all();
        $autoTypes = AutoType::all();

        return view('account.adverts.edit', compact('autoBrands', 'autoTypes', 'advert'));
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
