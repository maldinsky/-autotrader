<?php

namespace App\Http\Controllers\Admin\Adverts;

use App\Entity\Advert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Advert::all();

        return view('admin.adverts.index', ['adverts' => $adverts]);
    }

    public function create()
    {
        return view('admin.adverts.form');
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
