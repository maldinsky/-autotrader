<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoDriving extends Model
{
    public $timestamps = false;

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }
}
