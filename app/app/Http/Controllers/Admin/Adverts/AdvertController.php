<?php

namespace App\Http\Controllers\Admin\Adverts;

use App\Entity\Advert;
use App\Http\Controllers\Controller;

class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Advert::all();

        return view('admin.adverts.index', ['adverts' => $adverts]);
    }
}
