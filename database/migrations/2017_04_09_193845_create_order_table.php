<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid')->unique();
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')
                ->references('id')
                ->on('customer')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->float('subtotal_sterling', 8, 2);
            $table->float('tax_sterling', 8, 2);
            $table->float('shipping_sterling', 8, 2);
            $table->float('total_sterling', 8, 2);
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
        Schema::dropIfExists('order');
    }
}
