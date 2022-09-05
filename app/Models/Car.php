<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    const PUBLISHED = 'published';
    const NOT_PUBLISHED = 'not published';

    protected $fillable = [
        'creator_id',
        'name',
        'description',
        'price',
        'type_of_auction',
        'status',
        'localisation',
        'VIN',
        'mark',
        'modal',
        'generation',
        'category',
        'year_of_production',
        'engine_capacity',
        'mileage',
        'engine_power',
        'fuel',
        'transmission',
        'body',
        'country',
        'color',
        'steering',
        'condition',
        'doors',
        'additional_equipment',
        'photos',
        'url',
        'slug',
        'published_at',
        'views'
    ];

    public function creator(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'creator_id');
    }
}
