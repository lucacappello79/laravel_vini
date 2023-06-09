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
        Schema::create('vine_wine', function (Blueprint $table) {
            $table->unsignedBigInteger('vine_id');
            $table->unsignedBigInteger('wine_id');

            $table->foreign('vine_id')
                ->references('id')
                ->on('vines')
                ->onDelete('cascade');

            $table->foreign('wine_id')
                ->references('id')
                ->on('wines')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vine_wine');
    }
};
