<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_product',
        'price',
        'discount_price',
        'image_id',
        'description_id',
    ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function description()
    {
        return $this->hasMany(Description::class);
    }
    public function comments()
    {
        return $this->morphMany(comment::class,'commentable');
    }
    public function question()
    {
        return $this->morphMany(Question::class,'commentable');
    }
}
