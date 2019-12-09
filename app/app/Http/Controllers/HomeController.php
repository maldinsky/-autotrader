<?php

namespace App\Http\Controllers;

use App\Entity\Advert;
use App\Entity\AutoBrand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $relatedAdverts = Advert::active()->get();

        $brands = AutoBrand::whereHas('adverts', function($query){
            $query->active();
        })->withCount(['adverts' => function($query){
            $query->active();
        }])->get();

        return view('home', compact('relatedAdverts', 'brands'));
    }
}
