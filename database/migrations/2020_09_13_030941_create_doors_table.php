<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->string('size');
            $table->string('notice')->default('Нет');
            $table->string('photo');
//            $table->string('picUrl');
            $table->string('company');
            $table->string('type');
            $table->integer('price')->default(0);

            /*Buldoors*/
            $table->string('mainLock')->default('Нет');
            $table->string('addLock')->default('Нет');
            $table->string('cilindr')->default('Нет');
            $table->string('zadv')->default('Нет');
            $table->string('arm')->default('Нет');
            $table->string('glazok')->default('Нет');
            $table->string('front')->default('Нет');
            $table->string('back')->default('Нет');
    

            /*Dara*/
            $table->string('polotno')->default('Нет');
            $table->string('glass')->default('Нет');
            $table->integer('costForPolotno')->default(0);

            /*Gardian*/
            $table->string('character')->default('Нет');
            $table->string('fill')->default('Нет');
            $table->string('tipone')->default('Нет');
            $table->string('tiptwo')->default('Нет');
            $table->string('tipthree')->default('Нет');



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
        Schema::dropIfExists('doors');
    }
}
