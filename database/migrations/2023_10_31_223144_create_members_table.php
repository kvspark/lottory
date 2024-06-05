<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->nullable();
            $table->string('email_address')->nullable();
            $table->string('password')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('country')->nullable();
            $table->string('total_balance')->nullable();
            $table->string('total_deposit')->nullable();
            $table->string('total_withdraw')->nullable();
            $table->string('total_wins')->nullable();
            $table->string('account_status')->nullable();
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
        Schema::dropIfExists('members');
    }
};
