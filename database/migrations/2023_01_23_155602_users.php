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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_user')->autoIncrement();
            $table->string('dni', 50);
            $table->string('name_user', 50);
            $table->string('last_name', 50);
            $table->integer('phone_number');
            $table->string('email', 50);
            $table->string('emblems', 50);
            $table->string('nick_name', 50);
            $table->string('password', 255);
            $table->integer('id_company');
            $table->string('profile_image', 255);
            $table->enum('type_user', ['admin', 'worker', 'client']);
            $table->string('token', 50);
            $table->date('hidden');
            $table->string('removed_reason', 255);
            $table->foreign('id_company')->references('id_company')->on('companies');

            // Indexes
            $table->primary('id_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
