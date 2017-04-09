<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionVariableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_variable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_id')->unsigned();
            $table->foreign('session_id')
                ->references('id')
                ->on('session')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('key');
            $table->binary('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_variable');
    }
}
