<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFineSetupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_fine_setup', function (Blueprint $table) {
            $table->id('fine_setup_id_pk')->uniqid;
            $table->string('fineType');
            $table->string('fineValue');
            $table->string('lateFeeFrequency');
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
        Schema::dropIfExists('_fine_setup');
    }
}
