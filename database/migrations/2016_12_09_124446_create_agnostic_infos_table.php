<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgnosticInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agnostic_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id')->unsigned()->index();

            $table->integer('weight')->nullable();
            $table->date('weight_date')->nullable();
            
            $table->integer('microchip_id')->nullable();
            $table->string('microchip_co')->nullable();
            
            $table->string('insurrance_policy')->nullable();
            $table->string('insurrance_co')->nullable();
            
            $table->text('conditions')->nullable();

            $table->date('rabies_date')->nullable();
            $table->string('rabies_co')->nullable();
            
            $table->date('fecal_test')->nullable();
            $table->enum('fecal_test_results', ['Negative', 'Positive'])->nullable();

            $table->date('dental_date')->nullable();
            $table->text('dental_notes')->nullable();
            
            $table->text('other_vaccine')->nullable();
            $table->text('other_vaccine_date')->nullable();
            $table->text('other_vaccine_notes')->nullable();

            $table->string('vet_certificates_filename')->nullable();

            $table->text('notes')->nullable();
            $table->string('notes_filename')->nullable();

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
        Schema::dropIfExists('agnostic_infos');
    }
}
