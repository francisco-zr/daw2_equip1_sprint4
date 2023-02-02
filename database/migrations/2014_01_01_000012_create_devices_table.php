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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('mac_ethernet')->nullable();
            $table->string('mac_wifi')->nullable();
            $table->text('description')->nullable();
            $table->string('state')->nullable();
            $table->string('tag')->nullable();
            $table->string('serial_number');
            $table->foreignId('type_device_id')->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('devices');
    }
};
