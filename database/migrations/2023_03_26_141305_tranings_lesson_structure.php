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
        Schema::create('tranings_lesson_structure', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id');
            $table->string('language');
            $table->string('lesson_name',50);
            $table->string('lesson_info',1000);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tranings_lesson_structure');
    }
};
