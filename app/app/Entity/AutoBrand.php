<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoBrand extends Model
{
    public function models()
    {
        return $this->hasMany('App\Entity\AutoModel');
    }
}
