<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function payment()
    {
        return $this->belongsTo(Payment::class,'payment_id');
    }

    public function midtrans()
    {
        return $this->hasMany(MidTrans::class,'payment_detail_id');
    }
}
