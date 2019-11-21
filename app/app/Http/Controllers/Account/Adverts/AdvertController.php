<?php

namespace App\Http\Controllers\Account\Adverts;

use App\Entity\Advert;
use App\Http\Controllers\Controller;

class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Advert::all();

        return view('account.adverts.index', ['adverts' => $adverts]);
    }
}
