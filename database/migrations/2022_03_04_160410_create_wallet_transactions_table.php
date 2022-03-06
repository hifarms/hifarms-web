<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedFloat('amount')->default(0);
            $table->unsignedFloat('amount_before')->default(0);
            $table->unsignedFloat('amount_after')->default(0);
            $table->date('date');
            $table->string('description');
            $table->foreignId('wallet_id')->constrained();
            $table->foreignId('transaction_type_id')->constrained();
            $table->foreignId('transaction_status_id')->constrained();
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
        Schema::dropIfExists('wallet_transactions');
    }
}
