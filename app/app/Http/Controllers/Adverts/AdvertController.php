<?php

namespace App\Http\Controllers\Adverts;

use App\Entity\Advert;
use App\Entity\AutoAttributeGroup;
use App\Entity\AutoBrand;
use App\Http\Controllers\Controller;

class AdvertController extends Controller
{
    public function handler($advert_id)
    {
        $advert = Advert::findOrFail($advert_id);

        $advertAttributeGroups = $advert->attributes->groupBy('autoAttributeGroup.name');

        return view('adverts.advert', compact('advert', 'advertAttributeGroups'));
    }
}
