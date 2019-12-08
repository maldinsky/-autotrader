<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoGeneration extends Model
{
    public $timestamps = false;

    public function autoModels()
    {
        return $this->belongsTo(AutoModel::class);
    }
}
