<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'name_description',
        'value_description'
    ];
    public function products()
    {
        return $this->belongsTo(products::class);
    }
}
