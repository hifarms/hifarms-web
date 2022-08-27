<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedFloat('price');
            $table->unsignedInteger('unit');
            $table->string('image')->nullable();
            $table->string('location');
            $table->text('description')->nullable();
            //ready to start selling
            $table->string('user_id')->constrained()->onDelete('cascade');
            $table->boolean('active')->default(1);
            $table->unsignedInteger('unit_sold')->default(0);
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('service_type_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('product_type_id')->nullable()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
