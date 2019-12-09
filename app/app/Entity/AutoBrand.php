<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoBrand extends Model
{
    public $timestamps = false;

    public function adverts()
    {
        return $this->hasMany(Advert::class, 'brand_id');
    }

    public function AutoModels()
    {
        return $this->hasMany(AutoModel::class);
    }
}
