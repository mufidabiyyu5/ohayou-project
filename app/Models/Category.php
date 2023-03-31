<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use softDeletes;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [

    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id', 'id');
    }
}
