<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoAttributeGroup extends Model
{
    public $timestamps = false;

    public function autoAttributes()
    {
        return $this->hasMany(AutoAttribute::class, 'group_id');
    }
}
