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

            $table->text('notes')->nullable();
            $table->integer('weight')->nullable();
            $table->date('weight_date')->nullable();
            $table->string('microchip_co')->nullable();
            $table->integer('microchip_id')->nullable();
            $table->date('microchip_date')->nullable();
            $table->string('rabies_co')->nullable();
            $table->date('rabies_date')->nullable();
            $table->string('fvrcp_manufacturer')->nullable();
            $table->date('fvrcp_vaccine')->nullable();
            $table->date('fvrcp_booster')->nullable();
            $table->date('fvrcp_date')->nullable();
            $table->text('other_vaccine')->nullable();
            $table->string('deworming_medicine')->nullable();
            $table->date('deworming_1')->nullable();
            $table->date('deworming_2')->nullable();
            $table->date('deworming_3')->nullable();
            $table->string('flea_and_tick_medicine')->nullable();
            $table->date('flea_and_tick_treatement')->nullable();
            $table->text('flea_and_tick_notes')->nullable();
            $table->string('heartworm_medicine')->nullable();
            $table->date('heartworm_treatement')->nullable();
            $table->text('heartworm_notes')->nullable();
            $table->string('spay_neuter_clinic')->nullable();
            $table->date('spay_neuter_date')->nullable();
            $table->text('diet')->nullable();
            $table->text('conditions')->nullable();
            $table->text('dental_notes')->nullable();
            $table->text('history')->nullable();
            $table->date('shelter_release_date')->nullable();
            $table->string('foster')->nullable();
            $table->string('adopter')->nullable();
            $table->date('adopted')->nullable();

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
