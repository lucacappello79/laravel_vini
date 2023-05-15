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
        Schema::create('wines', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->year('year');
            $table->string('winery', 50);
            $table->string('color', 30);
            $table->string('type', 30);
            $table->string('alcohol_content', 5);
            $table->string('extract', 50);
            $table->string('acidity', 50);

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
        Schema::dropIfExists('wines');
    }
};
