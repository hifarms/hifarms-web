<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_inputs', function (Blueprint $table) {
            $table->id();
            $table->string('measure');
            $table->integer('unit_price');
            $table->integer('percentage');
            $table->string('variable_name');
            $table->string('type');
            $table->boolean('fixed_asset');
            $table->foreignId('cost_farm_id')->constrained();
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
        Schema::dropIfExists('cost_inputs');
    }
}
