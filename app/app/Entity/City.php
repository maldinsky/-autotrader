<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function region()
    {
        return $this->belongsTo('App\Entity\Region');
    }
}
