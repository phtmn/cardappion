<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tenant_id');
            $table->string('invoice_number')->default(0);
            $table->string('name')->nullable();
            $table->string('whatsapp', 11)->nullable();
            $table->string('telegram', 11)->nullable();
            $table->text('zipcode')->nullable();
            $table->text('address')->nullable();
            $table->text('neighborhood')->nullable();
            $table->text('city')->nullable();
            $table->text('num')->nullable();
            $table->text('obs')->nullable();
            $table->char('payment', 1)->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->decimal('delivery', 10, 2)->nullable();
            $table->decimal('change', 10, 2)->nullable();
            $table->string('status', 1)->nullable();
            $table->boolean('delivered')->default(false)->nullable();
            $table->timestamps();

            $table->foreign('tenant_id')->references('id')->on('tenants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
