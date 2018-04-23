<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pandas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('FirstName');
            $table->String('LastName');
            $table->String('Email');
            $table->String('CardNumber');
            $table->String('mobil');
            $table->String('Password');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pandas');
    }
}
