<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLingkupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lingkups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mitra_surveys_id');
            $table->unsignedBigInteger('ruang_lingkups_id');
    
            $table->foreign('mitra_surveys_id')->references('id')->on('mitra_surveys');
            $table->foreign('ruang_lingkups_id')->references('id')->on('ruang_lingkups');
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
        Schema::dropIfExists('lingkups');
    }
}
