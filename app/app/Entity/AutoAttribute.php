<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoAttribute extends Model
{
    public function autoAttributeGroup()
    {
        return $this->belongsTo('App\Entity\AutoAttributeGroup', 'group_id');
    }

    public function adverts()
    {
        return $this->belongsToMany('App\Entity\Advert', 'auto_advert_attribute', 'attribute_id', 'advert_id');
    }
}
