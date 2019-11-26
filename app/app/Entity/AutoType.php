<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoType extends Model
{
    public function adverts()
    {
        return $this->hasMany('App\Entity\Advert');
    }
}
