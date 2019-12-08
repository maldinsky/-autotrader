<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoTransmission extends Model
{
    public $timestamps = false;

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }
}
