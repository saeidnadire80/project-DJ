<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $fillable=[
        'color',
        'description',
        'plan',
        'weight'
    ];
    public function products()
    {
        return $this->belongsTo(products::class);
    }
}
