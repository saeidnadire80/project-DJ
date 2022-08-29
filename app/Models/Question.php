<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['user_id','parent_id','Question','answer'];
    use HasFactory;
    public function child()
    {
        return $this->hasMany(Question::class,'parent_id','id');
    }
}
