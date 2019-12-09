<?php

namespace App\Http\Controllers\Account\Adverts;

use App\Entity\Advert;
use App\Entity\AutoAttributeGroup;
use App\Entity\AutoBody;
use App\Entity\AutoBrand;
use App\Entity\AutoColor;
use App\Entity\AutoCondition;
use App\Entity\AutoDriving;
use App\Entity\AutoEngineType;
use App\Entity\AutoExchange;
use App\Entity\AutoInteriorColor;
use App\Entity\AutoInteriorMaterial;
use App\Entity\AutoTransmission;
use App\Entity\Currency;
use App\Entity\Region;
use App\Http\Controllers\Controller;
use App\Http\Requests\Adverts\CreateRequest;
use Auth;
use Illuminate\Support\Facades\Storage;

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
        $autoBodies = AutoBody::all();
        $conditions = AutoCondition::all();
        $currencies = Currency::all();
        $engines = AutoEngineType::all();
        $transmissions = AutoTransmission::all();
        $drivings = AutoDriving::all();
        $colors = AutoColor::all();
        $interiorColors = AutoInteriorColor::all();
        $interiorMaterials = AutoInteriorMaterial::all();
        $exchanges = AutoExchange::all();
        $regions = Region::all();
        $attributeGroups = AutoAttributeGroup::all();

        return view('account.adverts.create', compact(
            'autoBrands',
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
        $advert = Advert::find($id);

        return view('account.adverts.show', compact('advert'));
    }

    public function edit($id)
    {
        $advert = Advert::find($id);
        $autoBrands = AutoBrand::all();
        $autoModels = $advert->autoBrand->autoModels;
        $autoGenerations = $advert->autoModel->autoGenerations;
        $autoBodies = AutoBody::all();
        $conditions = AutoCondition::all();
        $currencies = Currency::all();
        $engines = AutoEngineType::all();
        $transmissions = AutoTransmission::all();
        $drivings = AutoDriving::all();
        $colors = AutoColor::all();
        $interiorColors = AutoInteriorColor::all();
        $interiorMaterials = AutoInteriorMaterial::all();
        $exchanges = AutoExchange::all();
        $regions = Region::all();
        $cities = $advert->region->cities;
        $attributeGroups = AutoAttributeGroup::all();
        $advertImages = $advert->images;

        $images = [];
        foreach($advertImages as $advertImage){
            $images[] = [
                'name' => 'Фото',
                'size' => Storage::size($advertImage->image),
                'type' => Storage::mimeType($advertImage->image),
                'file' => Storage::url($advertImage->image)
            ];
        }

        return view('account.adverts.edit', compact(
            'advert',
            'autoBrands',
            'autoModels',
            'autoGenerations',
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
            'cities',
            'attributeGroups',
            'images')
        );
    }

    public function update(CreateRequest $request, $id)
    {
        $advert = Advert::findOrFail($id);
        $advert->fill($request->except(['attribute_id', 'advert_images']));

        if(!empty($request->attribute_id)){
            $advert->attributes()->sync($request->attribute_id);
        }

        if(!empty($request->advert_images)){
            foreach($request->advert_images as $advert_image){
                $advert->images()->create(['image' => $advert_image]);
            }
        }

        $advert->save();

        return redirect()->route('account.adverts.show', $advert->id);
    }

    public function destroy($id)
    {

    }
}
