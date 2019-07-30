<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tenant_id');
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('category_id');
            $table->string('description');
            $table->decimal('price',10,2);
            $table->string('image')->nullable();
            $table->text('details')->nullable();
            $table->boolean('active');
            $table->boolean('featured')->default(0);
            $table->foreign('tenant_id')->references('id')->on('tenants');
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->softDeletes();
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
