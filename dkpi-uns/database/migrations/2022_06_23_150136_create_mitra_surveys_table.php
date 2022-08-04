<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra_surveys', function (Blueprint $table) {
            $table->id();
            $table->text('nama_lengkap');
            $table->text('jabatan');
            $table->string('email');
            $table->text('instansi');
            $table->string('no_hp');
            $table->text('alamat_instansi');
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
        Schema::dropIfExists('mitra_surveys');
    }
}
