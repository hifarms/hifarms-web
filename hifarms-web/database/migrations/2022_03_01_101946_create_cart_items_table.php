<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //Generic cart item for market place and farm investment
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('unit');
            $table->unsignedInteger('price');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('farm_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('farm_return_type_id')->constrained()->onDelete('cascade');
            $table->string('temp_id')->nullable(); // temp id for guest visitor
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
        Schema::dropIfExists('cart_items');
    }
}
