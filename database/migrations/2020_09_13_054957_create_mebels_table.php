<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMebelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mebels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->integer('price');
            $table->string('photo');
            $table->string('category');
            $table->string('notice')->default('Нет');
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
        Schema::dropIfExists('mebels');
    }
}
