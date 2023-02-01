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
        Schema::create('resources_files', function (Blueprint $table) {
            $table->id();
            $table->string('resource_name', 255)->nullable(false);
            $table->string('location', 255)->nullable(false);
            $table->foreignId('category_id')->references('id')->on('categories')->nullable(false);
            $table->date('hidden')->nullable();
            $table->timestamps();
        });

        Schema::create('resources_url', function (Blueprint $table) {
            $table->id();
            $table->string('resource_name', 255)->nullable(false);
            $table->string('location', 255)->nullable(false);
            $table->foreignId('category_id')->references('id')->on('categories')->nullable(false);
            $table->date('hidden')->nullable();
            $table->timestamps();
        });

        Schema::create('resources_text', function (Blueprint $table) {
            $table->id();
            $table->string('resource_name', 255)->nullable(false);
            $table->string('description', 255)->nullable(false);
            $table->foreignId('category_id')->references('id')->on('categories')->nullable(false);
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
        Schema::dropIfExists('resources_files');
        Schema::dropIfExists('resources_url');
        Schema::dropIfExists('resources_text');
    }
};
