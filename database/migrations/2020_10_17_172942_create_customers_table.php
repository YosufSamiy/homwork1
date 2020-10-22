<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('salesRepEmployeeNum');
            $table->string('name');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('phone');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');

            $table->integer('PostalCode');
            $table->string('country');


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
        Schema::dropIfExists('customers');
    }
}
