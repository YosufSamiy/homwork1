<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('cod');
            $table->integer('productLineId');
            $table->string('name');
            $table->integer('scale');
            $table->integer('vendor');
            $table->integer('pdtDescription');
            $table->string('qtyLnStock');
            $table->decimal('buyPrice', 19, 0);
            $table->string('msrp');











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
        Schema::dropIfExists('products');
    }
}
