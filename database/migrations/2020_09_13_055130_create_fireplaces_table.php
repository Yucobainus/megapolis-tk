<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFireplacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fireplaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('portal');
            $table->string('ochag');
            $table->string('tech');
            $table->string('size');
            $table->integer('price');
            $table->string('category');
            $table->string('photo');
            $table->string('company');
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
        Schema::dropIfExists('fireplaces');
    }
}
