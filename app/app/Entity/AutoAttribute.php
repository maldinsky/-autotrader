<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoAttribute extends Model
{
    public $timestamps = false;

    public function autoAttributeGroup()
    {
        return $this->belongsTo(AutoAttributeGroup::class, 'group_id');
    }

    public function adverts()
    {
        return $this->belongsToMany(Advert::class, 'auto_advert_attribute', 'attribute_id', 'advert_id');
    }
}
