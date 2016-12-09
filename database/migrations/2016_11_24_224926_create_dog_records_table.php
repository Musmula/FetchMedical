<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog_records', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->integer('pet_id')->unsigned()->index();

            $table->date('dhpp_vaccine')->nullable();
            $table->string('dhpp_vendor')->nullable();

            $table->date('bordetella_vaccine')->nullable();
            $table->string('bordetella_vendor')->nullable();

            $table->date('corona_vaccine')->nullable();
            $table->string('corona_vendor')->nullable();

            $table->date('parvo_vaccine')->nullable();
            $table->string('parvo_vendor')->nullable();

            $table->date('heartworm_test')->nullable();
            $table->enum('heartworm_test_results', ['Negative', 'Positive'])->nullable();

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
        Schema::dropIfExists('dog_records');
    }
}
