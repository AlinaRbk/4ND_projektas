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

            $table->string('title');
            $table->longText('description');
            $table->float('price', 8, 2);
            $table->string('category_title');
            $table->unsignedBigInteger('category_id');
            $table->string('image_url');

            $table->foreign('category_title')->references('title')->on('product_categories');

            $table->foreign('category_id')->references('id')->on('product_categories');

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
