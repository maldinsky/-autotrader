<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoBrand extends Model
{
    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }

    public function models()
    {
        return $this->hasMany('App\Entity\AutoModel');
    }
}
