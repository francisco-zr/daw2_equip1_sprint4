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
        Schema::create('companies', function (Blueprint $table) {
            $table->integer('id_company')->autoIncrement();
            $table->string('name_company', 255);
            $table->string('email', 255);
            $table->integer('phone_number');
            $table->string('cif', 50);
            $table->string('companie_logo', 255);
            $table->date('hidden');
            $table->string('removed_reason', 255);

            // Indexes
            $table->primary('id_company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
