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
        Schema::create('exams', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->primary();
            $table->integer('teacher_id1')->nullable()->index('teacher_id1');
            $table->integer('teacher_id2')->nullable()->index('teacher_id2');
            $table->integer('teacher_id3')->nullable()->index('teacher_id3');
            $table->integer('center_teacher_student_id')->nullable()->index('center_teacher_student_id');
            $table->string('b')->nullable();
            $table->string('tarik')->nullable();
            $table->string('grade')->nullable();
            $table->integer('jizie_from')->nullable();
            $table->integer('jizie_to')->nullable();
            $table->string('descision')->nullable();
            $table->string('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
};
