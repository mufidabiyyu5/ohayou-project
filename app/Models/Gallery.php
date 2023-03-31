<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model{
    use softDeletes;

    protected $fillable = [
        'products_id',
        'image'
    ];

    protected $hidden = [

    ];

    public function products()
    {
        return $this->belongsTo(Products::class, 'products_id', 'id');
    }
}

?>