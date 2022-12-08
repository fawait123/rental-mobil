<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Other extends Model
{
    use HasFactory,softDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function property()
    {
        return $this->belongsTo(Property::class,'property_id');
    }
}
