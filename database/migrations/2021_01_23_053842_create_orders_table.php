<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->text('shipping_address');
            $table->integer('division_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('zip_code')->nullable();
            $table->text('message')->nullable(); 
            $table->integer('product_finalprice')->nullable(); 
            $table->integer('pricewithcoupon')->nullable(); 
            $table->integer('is_paid')->default(0)->comment('0=COD,1=Bkash,2=Rocket,3=Nagod'); 
            $table->integer('payment_id')->nullable();
            $table->string('transaction_id')->nullable(); 
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
        Schema::dropIfExists('orders');
    }
}
