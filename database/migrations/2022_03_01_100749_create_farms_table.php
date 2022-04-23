<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('capital')->nullable()->default(0);
            $table->unsignedInteger('i_units')->nullable()->default(0);
            $table->unsignedInteger('c_units')->nullable()->default(0);
            $table->unsignedFloat('unit_price')->nullable()->default(0);
            $table->string('image')->nullable();
            $table->string('location');
            $table->text("description");
            $table->boolean('active')->default(0); // looking for investment
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('farm_type_id')->nullable()->constrained();
            $table->foreignId('label_id')->nullable()->constrained();

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
        Schema::dropIfExists('farms');
    }
}
