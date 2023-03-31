<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriceList extends Model
{
    use softDeletes;

    protected $fillable = [
        'title',
        'price',
        'description',
        'products_id'
    ];

    protected $casts = [
        'description' => 'array',
    ];

    protected $hidden = [

    ];

    public function products()
    {
        return $this->belongsTo(Products::class, 'products_id', 'id');
    }

    public function setDescriptionAttribute($value)
    {
        $description = [];

        foreach ($value as $array_item) {
            if (!is_null($array_item['value'])) {
                $description[] = $array_item;
            }
        }

        $this->attributes['description'] = json_encode($description);
    }
}
