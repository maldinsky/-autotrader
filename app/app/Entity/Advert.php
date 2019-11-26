<?php

namespace App\Entity;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $guarded = [
        '_method',
        '_token'
    ];

    public const CONDITION_ID = [
        0 => 'С пробегом',
        1 => 'С повреждениями',
        2 => 'На запчасти',
    ];

    public const ENGINE_TYPE = [
        0 => 'Бензин',
        1 => 'Дизель',
        2 => 'Электро',
    ];

    public const TRANSMISSION_ID = [
        0 => 'Автомат',
        1 => 'Механика',
    ];

    public const DRIVING_ID = [
        0 => 'Передний',
        1 => 'Задний',
        2 => 'Подключаемый полный',
        3 => 'Постоянный полный',
    ];

    public const EXCHANGE = [
        0 => 'Не интересует',
        1 => 'Любые варианты',
        2 => 'С вашей доплатой',
        3 => 'С моей доплатой',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function autoType()
    {
        return $this->belongsTo('App\Entity\AutoType', 'type');
    }
}
