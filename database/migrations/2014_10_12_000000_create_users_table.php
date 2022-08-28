<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('provider_id')->nullable();
            $table->string('avatar')->default('img/Profile.png');
            $table->string('address')->nullable();
            $table->unsignedInteger('phone')->nullable();
            $table->string('state')->nullable();
            $table->string('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->string('activated')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_verified')->default(0);
            $table->string('country')->nullable();
            $table->string('refer_by_id')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('role_id')->default(2)->constrained()->onDelete('cascade');
            $table->foreignId('bank_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('wallet_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
