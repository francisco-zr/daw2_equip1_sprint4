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
        Schema::create('emblems', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('description', 50);
            $table->longText('image');
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->date('hidden')->nullable();
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
        Schema::dropIfExists('emblems');
    }
};
