<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjasamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerjasamas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mitra_surveys_id');
            $table->unsignedBigInteger('unit_kerjasamas_id');
    
            $table->foreign('mitra_surveys_id')->references('id')->on('mitra_surveys');
            $table->foreign('unit_kerjasamas_id')->references('id')->on('unit_kerjasamas');
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
        Schema::dropIfExists('kerjasamas');
    }
}