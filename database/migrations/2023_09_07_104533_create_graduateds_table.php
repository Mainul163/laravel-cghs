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
            $table->string('graduated_name');
            $table->string('category');
            $table->string('mobile_number');
            $table->string('blood_group');
            $table->string('t-shirt');
            $table->string('profession');
            $table->string('profession_institute');
            $table->string('designation');
            $table->string('guest');
            $table->string('total');
            $table->string('img');
          
            
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