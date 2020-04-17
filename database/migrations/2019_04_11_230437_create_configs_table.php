<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('configs', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('tenant_id');
      $table->unsignedBigInteger('user_id');
      // $table->string('name')->nullable();
      // $table->string('docnumber')->nullable();
      $table->decimal('delivery', 10, 2)->default(0);
      $table->string('zipcode')->nullable();
      $table->string('address')->nullable();
      $table->string('neighborhood')->nullable();
      $table->string('city')->nullable();
      $table->string('us')->nullable();      
      $table->string('whatsapp')->nullable();
      $table->string('telegram')->nullable();
      $table->string('image')->nullable();
      $table->string('site')->nullable();
      $table->string('instagram')->nullable();
      $table->string('fanpage')->nullable();
      $table->text('details')->nullable();
      $table->foreign('tenant_id')->references('id')->on('tenants'); // apagar depois q retirar do login?
      $table->foreign('user_id')->references('id')->on('users');
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
    Schema::dropIfExists('configs');
  }
}
