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
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->decimal('price', 8, 2); 
            $table->text('description');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('SubCategory_id')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('SubCategory_id')->references('id')->on('sub_categories');
          


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
