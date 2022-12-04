<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Property extends Model
{
    use HasFactory,softDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class,'car_id');
    }
}
