<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'parent_id',
        'title',
        'positive_points',
        'cons',
        'comment',
        'Unknown',
        ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function child()
    {
        return $this->hasMany(comment::class,'parent_id','id');
    }
}
