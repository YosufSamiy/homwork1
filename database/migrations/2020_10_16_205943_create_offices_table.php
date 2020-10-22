<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {


            $table->bigIncrements('code');
            $table->string('city');
            $table->string('phone');
            $table->string('address1');
            $table->string('address2');
            $table->string('state');
            $table->string('country');
            $table->integer('PostalCode');
            $table->string('territory');
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
        Schema::dropIfExists('offices');

    }
}
