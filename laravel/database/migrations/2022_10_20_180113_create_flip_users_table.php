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
        Schema::create('flip_users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('fullname')->nullable();
            $table->string('email')->unique();
            $table->string('phone', 10)->unique();
            $table->datetime('date_of_birth')->nullable();
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
        Schema::dropIfExists('flip_users');
    }
};
