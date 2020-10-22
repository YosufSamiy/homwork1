<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('employees', function (Blueprint $table) {

            $table->unsignedBigInteger('officesCode');
            $table->id();

            $table->integer('reportsTo');
            $table->string('lastName');
            $table->string('firstName');

            $table->string('extension');
            $table->string('email');
            $table->string('jopTitle');

             $table->timestamps();

            $table->foreign('officesCode')->references('code')->on('offices');

            //$table->foreign('officesCode')->references('Code')->on('offices');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');



    }
}
