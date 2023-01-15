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
        Schema::table('center_teacher_student', function (Blueprint $table) {
            $table->foreign(['teacher_id'], 'center_teacher_student_ibfk_1')->references(['id'])->on('teachers');
            $table->foreign(['center_id'], 'center_teacher_student_ibfk_3')->references(['id'])->on('centers');
            $table->foreign(['student_id'], 'center_teacher_student_ibfk_2')->references(['id'])->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('center_teacher_student', function (Blueprint $table) {
            $table->dropForeign('center_teacher_student_ibfk_1');
            $table->dropForeign('center_teacher_student_ibfk_3');
            $table->dropForeign('center_teacher_student_ibfk_2');
        });
    }
};
