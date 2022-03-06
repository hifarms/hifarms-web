<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    //Generic order item for market place and farm investment
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('unit');
            $table->unsignedFloat('amount');
            $table->boolean('delivered')->default(0);
            $table->boolean('cleared_to_wallet')->default(false); // indicate if user has moved his return to wallet
            $table->foreignId('product_id')->constrained();
            $table->foreignId('farm_id')->constrained();
            $table->foreignId('farm_return_type_id')->constrained();
            $table->foreignId('order_id')->constrained();
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
        Schema::dropIfExists('order_items');
    }
}
