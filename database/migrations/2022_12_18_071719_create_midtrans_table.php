<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMidtransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midtrans', function (Blueprint $table) {
            $table->id();
            $table->integer('payment_detail_id');
            $table->string('transaction_id');
            $table->string('order_id');
            $table->string('merchant_id');
            $table->integer('gross_amount');
            $table->string('currency');
            $table->string('payment_type');
            $table->string('transaction_time');
            $table->string('transaction_status');
            $table->string('fraud_status');
            $table->string('expire_time');
            $table->string('bank');
            $table->string('va_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('midtrans');
    }
}
