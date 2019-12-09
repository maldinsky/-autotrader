<?php

namespace App\Entity;

use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Advert extends Model
{
    public const STATUS_MODERATION = 0;
    public const STATUS_ACTIVE = 1;
    public const STATUS_CLOSED = 2;

    public const FILTER_PARAMS = ['engine_gas'];

    protected $fillable = [
        'brand_id', 'model_id', 'generation_id','year', 'body_id', 'engine_capacity', 'modification', 'condition_id',
        'price', 'currency_id', 'description', 'engine_type_id', 'engine_gas', 'engine_hybrid', 'mileage',
        'transmission_id', 'driving_id', 'vin', 'color_id', 'interior_material_id', 'interior_color_id', 'exchange_id',
        'region_id', 'city_id', 'name', 'phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function autoBrand()
    {
        return $this->belongsTo(AutoBrand::class, 'brand_id');
    }

    public function autoModel()
    {
        return $this->belongsTo(AutoModel::class, 'model_id');
    }

    public function autoGeneration()
    {
        return $this->belongsTo(AutoGeneration::class,'generation_id');
    }

    public function autoBody()
    {
        return $this->belongsTo(AutoBody::class, 'body_id');
    }

    public function autoCondition()
    {
        return $this->belongsTo(AutoCondition::class, 'condition_id');
    }

    public function autoEngineType()
    {
        return $this->belongsTo(AutoEngineType::class, 'engine_type_id');
    }

    public function autoTransmission()
    {
        return $this->belongsTo(AutoTransmission::class, 'transmission_id');
    }

    public function autoDriving()
    {
        return $this->belongsTo(AutoDriving::class, 'driving_id');
    }

    public function autoExchange()
    {
        return $this->belongsTo(AutoExchange::class);
    }

    public function autoColor()
    {
        return $this->belongsTo(AutoColor::class, 'color_id');
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

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function scopeActive(Builder $query)
    {
        return $query->where('status', '=',self::STATUS_ACTIVE);
    }

    public function getName()
    {
        return $this->autoBrand->name . ' ' . $this->autoModel->name . (($this->autoGeneration->name) ?: '');
    }

    public function getLocation()
    {
        return $this->region->name . ', ' . $this->city->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getMainImage()
    {
        return (!empty($this->images[0])) ? Storage::url($this->images[0]->image) : '';
    }

    public function getImages()
    {
        $images = [];
        foreach($this->images as $image){
            $images[] = Storage::url($image->image);
        }
        return $images;
    }
}
