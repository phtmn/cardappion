<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tenant_id');

            $table->string('title');
            $table->text('details')->nullable();
            $table->string('slug',100)->nullable();
            $table->string('url')->nullable()->unique();
            $table->decimal('promotion_value',10,2)->nullable();
            $table->date('expiration_date')->nullable();
            $table->string('image')->nullable();
            $table->boolean('active')->default(1);

            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');

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
        Schema::dropIfExists('promotions');
    }
}
