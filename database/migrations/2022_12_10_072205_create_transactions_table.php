<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//         id_customer
// id_property
// id_company
// name
// email
// telp
// company
// company address
// town/ city
// postal_code
// start_oder
// end_order
// note
// total_price
// range
// price

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('property_id');
            $table->integer('company_id');
            $table->string('name');
            $table->string('email');
            $table->string('telp');
            $table->string('company');
            $table->text('company_address');
            $table->string('city');
            $table->string('postal_code');
            $table->date('start_order');
            $table->date('end_order');
            $table->integer('total_price');
            $table->integer('price');
            $table->integer('number_of_days');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
