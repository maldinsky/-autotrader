<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
