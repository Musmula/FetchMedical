<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_queues', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->integer('pet_id')->unsigned()->index();
            $table->string('name');
            $table->string('type');
            $table->text('message');

            $table->foreign('pet_id')
                  ->references('id')->on('pets')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('pet_queues');
    }
}
