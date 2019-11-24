<?php

namespace App\Entity;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
