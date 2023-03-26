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
        Schema::create('tranings_item', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('category');
            $table->string('course_language');
            $table->string('duration');
            $table->string('schedule');
            $table->string('place');
            $table->string('cert_img');
            $table->string('price');
            $table->string('old_price');
            $table->string('employee_item_id');
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
        Schema::dropIfExists('tranings_item');
    }
};
