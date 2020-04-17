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
      $table->string('title');
      $table->string('image1')->nullable();
      $table->string('image2')->nullable();
      $table->string('image3')->nullable();
      $table->decimal('price', 10, 2)->nullable();      
      $table->text('details')->nullable();
      $table->text('nutritional_value')->nullable();
      $table->text('origin_inputs')->nullable();
      $table->text('serving_suggestion')->nullable();
      $table->text('linked_revenue')->nullable();
      $table->text('service_suggestion')->nullable();
      $table->text('harmonization')->nullable();
      $table->text('curiosities')->nullable();
      $table->boolean('active')->default(1);
      $table->boolean('featured')->default(0);
      $table->foreign('tenant_id')->references('id')->on('tenants');
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
