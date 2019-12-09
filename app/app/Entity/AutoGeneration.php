<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoGeneration extends Model
{
    public $timestamps = false;

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }

    public function autoModels()
    {
        return $this->belongsTo(AutoModel::class);
    }
}
