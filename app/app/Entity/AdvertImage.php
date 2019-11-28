<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AdvertImage extends Model
{
    public $timestamps = false;
    protected $fillable = ['image'];

    public function advert()
    {
        return $this->belongsTo(Advert::class);
    }
}
