<?php

namespace App\Http\Controllers;

use App\Entity\Advert;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'Adverts' => Advert::all()
        ]);
    }
}
