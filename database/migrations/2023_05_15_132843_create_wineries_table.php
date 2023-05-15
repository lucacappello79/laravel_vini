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
        Schema::create('wineries', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->string('address', 100);
            $table->string('municipality', 30);
            $table->string('province', 30);
            $table->string('region', 30);
            $table->string('country', 30);
            $table->string('phone_number', 30);
            $table->string('mail', 50);

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
        Schema::dropIfExists('wineries');
    }
};
