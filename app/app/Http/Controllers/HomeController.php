<?php

namespace App\Http\Controllers;

use App\Entity\Advert;
use App\Entity\AutoBrand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $relatedAdverts = Advert::all();

        $brands = AutoBrand::all();

        return view('home', compact('relatedAdverts', 'brands'));
    }
}
