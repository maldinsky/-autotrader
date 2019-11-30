<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function cities()
    {
        return $this->hasMany('App\Entity\City');
    }

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }
}
