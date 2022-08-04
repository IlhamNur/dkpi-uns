<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mitra_surveys_id');
            $table->unsignedBigInteger('jenis_instansis_id');
    
            $table->foreign('mitra_surveys_id')->references('id')->on('mitra_surveys');
            $table->foreign('jenis_instansis_id')->references('id')->on('jenis_instansis');
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
        Schema::dropIfExists('instansis');
    }
}
