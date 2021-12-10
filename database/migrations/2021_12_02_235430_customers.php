<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('Customers');
        Schema::create('Customers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('designation_id')->unsigned();
            $table->string('fullname')->default('');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('country');
            $table->string('address');
            $table->timestamps();
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
