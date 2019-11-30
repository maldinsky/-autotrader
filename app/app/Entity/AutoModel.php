<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoModel extends Model
{
    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }
}
