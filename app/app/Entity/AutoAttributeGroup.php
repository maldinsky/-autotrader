<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoAttributeGroup extends Model
{
    public function autoAttributes()
    {
        return $this->hasMany('App\Entity\AutoAttribute', 'group_id');
    }
}
