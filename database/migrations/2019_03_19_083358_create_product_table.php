<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tbl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('price', 15, 2);
            $table->integer('quantity');
            $table->string('size');
            $table->string('uniquecode',4);
            $table->string('api_token',60)->unique();
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_tbl');
    }
}
