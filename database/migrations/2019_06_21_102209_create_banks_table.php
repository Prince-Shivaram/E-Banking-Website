<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->String('faname');
            $table->String('lname');
            $table->String('mobile');
            $table->String('email');
            $table->String('account');
            $table->String('cif');
            $table->String('balance');
            $table->String('debitcard');
            $table->String('dob');
            $table->String('user_id');
            $table->String('gender');
            $table->String('password');
            $table->String('ipin');
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
        Schema::dropIfExists('banks');
    }
}
