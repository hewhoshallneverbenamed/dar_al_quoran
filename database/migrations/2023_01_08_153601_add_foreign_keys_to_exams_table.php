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
        Schema::table('exams', function (Blueprint $table) {
            $table->foreign(['center_teacher_student_id'], 'exams_ibfk_4')->references(['id'])->on('center_teacher_student');
            $table->foreign(['teacher_id1'], 'exams_ibfk_1')->references(['id'])->on('teachers');
            $table->foreign(['teacher_id3'], 'exams_ibfk_3')->references(['id'])->on('teachers');
            $table->foreign(['teacher_id2'], 'exams_ibfk_2')->references(['id'])->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exams', function (Blueprint $table) {
            $table->dropForeign('exams_ibfk_4');
            $table->dropForeign('exams_ibfk_1');
            $table->dropForeign('exams_ibfk_3');
            $table->dropForeign('exams_ibfk_2');
        });
    }
};
