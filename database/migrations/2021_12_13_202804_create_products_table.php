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
<<<<<<< HEAD
            $table->decimal('price', 8, 2);
            $table->string('product_slug');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('subcategory_id')->unsigned();
            $table->text('description')->nullable();
=======
            $table->decimal('price', 8, 2); 
            $table->text('description');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('SubCategory_id')->nullable();
>>>>>>> 17b1dd3e82d3a7afce0d0378263762f760eee65d
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
