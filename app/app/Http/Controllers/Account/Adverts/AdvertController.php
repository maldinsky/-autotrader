<?php

namespace App\Http\Controllers\Account\Adverts;

use App\Entity\Advert;
use App\Entity\AutoAttributeGroup;
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
        $attributeGroups = AutoAttributeGroup::all();

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
            'regions',
            'attributeGroups'
        ));
    }

    public function store(CreateRequest $request)
    {
        $advert = Auth::getUser()->adverts()->create($request->except(['attribute_id', 'advert_images']));

        if(!empty($request->attribute_id)){
            $advert->attributes()->sync($request->attribute_id);
        }

        if(!empty($request->advert_images)){
            foreach($request->advert_images as $advert_image){
                $advert->images()->create(['image' => $advert_image]);
            }
        }
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
