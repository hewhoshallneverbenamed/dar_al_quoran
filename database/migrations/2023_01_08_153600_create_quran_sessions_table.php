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
        Schema::create('quran_sessions', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->primary();
            $table->integer('center_teacher_student_id')->nullable()->index('center_teacher_student_id');
            $table->string('session_time')->nullable();
            $table->string('weekday')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quran_sessions');
    }
};
