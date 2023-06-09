<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tenants', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->string('name');
      $table->string('token');
      $table->string('plan')->default(false);
      $table->boolean('active')->default(true);
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
    Schema::dropIfExists('tenants');
  }
}
