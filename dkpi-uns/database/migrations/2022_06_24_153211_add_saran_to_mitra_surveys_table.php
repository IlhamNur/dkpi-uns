<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSaranToMitraSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mitra_surveys', function (Blueprint $table) {
            $table->text('saran1');
            $table->text('saran2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mitra_surveys', function (Blueprint $table) {
            $table->dropColumn('saran1');
            $table->dropColumn('saran2');
        });
    }
}
