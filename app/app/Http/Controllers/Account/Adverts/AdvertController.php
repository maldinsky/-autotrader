<?php

namespace App\Http\Controllers\Account\Adverts;

use App\Entity\AutoBrand;
use App\Entity\AutoType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Adverts\CreateRequest;
use Auth;

class AdvertController extends Controller
{
    public function index()
    {
        $autoBrands = AutoBrand::all();
        $autoTypes = AutoType::all();

        return view('account.adverts.form', compact('autoBrands', 'autoTypes'));
    }

    public function create()
    {
        $autoBrands = AutoBrand::all();
        $autoTypes = AutoType::all();

        return view('account.adverts.form', compact('autoBrands', 'autoTypes'));
    }

    public function store(CreateRequest $request)
    {
        Auth::getUser()->adverts()->create($request->toArray());
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
