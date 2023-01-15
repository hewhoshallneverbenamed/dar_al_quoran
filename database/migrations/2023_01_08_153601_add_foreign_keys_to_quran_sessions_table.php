<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quran_sessions', function (Blueprint $table) {
            $table->foreign(['center_teacher_student_id'], 'quran_sessions_ibfk_1')->references(['id'])->on('center_teacher_student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quran_sessions', function (Blueprint $table) {
            $table->dropForeign('quran_sessions_ibfk_1');
        });
    }
};
