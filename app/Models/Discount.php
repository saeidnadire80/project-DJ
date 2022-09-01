<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable=['discountable_id','discountable_type','discount','code_discount','time_discount'];
    public function discountable(){
        return $this->morphTo();
    }
}
