<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=['user_id','parent_id','Question','answer','approved'];
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
    public function child()
    {
        return $this->hasMany(Question::class,'parent_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function commentable()
    {
        return $this->morphTo();
    }
}
