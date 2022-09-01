<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_product',
        'category_id',
        'price',
        'visit'
    ];
    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }

    public function discounts()
    {
        return $this->morphMany(Discount::class,'discountable');
    }

    public function descriptions()
    {
        return $this->hasMany(Description::class);
    }
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

}
