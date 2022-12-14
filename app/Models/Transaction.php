<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function property()
    {
        return $this->belongsTo(Property::class,'property_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class,'transaction_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }
}
