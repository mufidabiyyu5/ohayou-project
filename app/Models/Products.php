<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model{
    use softDeletes;

    protected $fillable = [
        'title',
        'price',
        'description',
        'sold',
        'material',
        'isbestselling',
        'category_id'
    ];

    protected $hidden = [

    ];

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function galleries(){
        return $this->hasMany(Gallery::class, 'products_id', 'id');
    }

    public function price_list(){
        return $this->hasMany(PriceList::class, 'products_id', 'id');
    }
}

?>