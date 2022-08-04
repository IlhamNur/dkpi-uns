<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuestionToMitraSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mitra_surveys', function (Blueprint $table) {
            $table->string('q1');
            $table->string('q2');
            $table->string('q3');
            $table->string('q4');
            $table->string('q5');
            $table->string('q6');
            $table->string('q7');
            $table->string('q8');
            $table->string('q9');
            $table->string('q10');
            $table->string('q11');
            $table->string('q12');
            $table->string('q13');
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
            $table->dropColumn('q1');
            $table->dropColumn('q2');
            $table->dropColumn('q3');
            $table->dropColumn('q4');
            $table->dropColumn('q5');
            $table->dropColumn('q6');
            $table->dropColumn('q7');
            $table->dropColumn('q8');
            $table->dropColumn('q9');
            $table->dropColumn('q10');
            $table->dropColumn('q11');
            $table->dropColumn('q12');
            $table->dropColumn('q13');
        });
    }
}
