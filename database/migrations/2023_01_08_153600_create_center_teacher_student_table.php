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
        Schema::create('center_teacher_student', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->primary();
            $table->integer('teacher_id')->nullable()->index('teacher_id');
            $table->integer('center_id')->nullable()->index('center_id');
            $table->integer('student_id')->nullable()->index('student_id');
            $table->string('start_date')->nullable();
            $table->integer('mobile_number')->nullable();
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('center_teacher_student');
    }
};
