<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoBrand extends Model
{
    public $timestamps = false;

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }

    public function AutoModels()
    {
        return $this->hasMany(AutoModel::class);
    }
}
