<?php

namespace App\Http\Controllers\Account\Adverts;

use App\Entity\Advert;
use App\Entity\AutoBrand;
use App\Entity\AutoModel;
use App\Entity\AutoType;
use App\Http\Controllers\Controller;
use http\Client\Request;

class AdvertController extends Controller
{
    public function index()
    {
        $autoBrands = AutoBrand::all();
        $autoTypes = AutoType::all();

        return view('account.adverts.form', compact('autoBrands', 'autoTypes'));
    }
}
