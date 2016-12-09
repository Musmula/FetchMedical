<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_records', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->integer('pet_id')->unsigned()->index();

            $table->date('fvrcp_vaccine')->nullable();
            $table->string('fvrcp_vendor')->nullable();

            $table->date('felv_vaccine')->nullable();
            $table->string('felv_vendor')->nullable();

            $table->date('fip_vaccine')->nullable();
            $table->string('fip_vendor')->nullable();

            $table->date('leukemia_test')->nullable();
            $table->enum('leukemia_test_results', ['Negative', 'Positive'])->nullable();

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
        Schema::dropIfExists('cat_records');
    }
}
