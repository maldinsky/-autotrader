<?php

namespace App\Entity;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = [
        'type', 'brand_id', 'model_id', 'year', 'body_id', 'modification', 'condition_id', 'price', 'currency_id',
        'description', 'engine_type', 'engine_gas', 'engine_hybrid', 'mileage', 'transmission_id', 'driving_id', 'vin',
        'color_id', 'interior_material_id', 'interior_color_id', 'exchange', 'region_id', 'city_id', 'name', 'phone'
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

    public function autoBrand()
    {
        return $this->belongsTo(AutoBrand::class, 'brand_id');
    }

    public function autoModel()
    {
        return $this->belongsTo(AutoModel::class, 'model_id');
    }

    public function autoBody()
    {
        return $this->belongsTo(AutoBody::class, 'body_id');
    }

    public function attributes()
    {
        return $this->belongsToMany('App\Entity\AutoAttribute', 'auto_advert_attribute', 'advert_id', 'attribute_id');
    }

    public function images()
    {
        return $this->hasMany(AdvertImage::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
