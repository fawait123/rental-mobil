<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Car extends Model
{
    use HasFactory,softDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];


    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class,'type_id');
    }
}
