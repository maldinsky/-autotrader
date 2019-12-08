<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }
}
