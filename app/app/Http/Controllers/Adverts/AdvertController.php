<?php

namespace App\Http\Controllers\Adverts;

use App\Entity\Advert;
use App\Http\Controllers\Controller;

class AdvertController extends Controller
{
    public function handler($advert_id)
    {
        $advert = Advert::findOrFail($advert_id);

        return view('adverts.advert', compact('advert'));
    }
}
