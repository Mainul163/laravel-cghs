<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduatedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduateds', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_name');
            $table->string('product_name');

            $table->string('product_name');
            $table->string('product_name');
            $table->string('product_name');
            $table->string('product_name');
            $table->string('product_name');
            $table->string('product_name');
            $table->string('product_name');
            $table->string('product_name');
            $table->string('product_name');
            
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
        Schema::dropIfExists('graduateds');
    }
}