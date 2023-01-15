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
        Schema::create('students', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->primary();
            $table->integer('user_id')->nullable()->index('user_id');
            $table->string('is_ring')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('school_uni')->nullable();
            $table->string('current_job')->nullable();
            $table->integer('mobile_number')->nullable();
            $table->integer('work_number')->nullable();
            $table->integer('home_number')->nullable();
            $table->string('sheiks_name')->nullable();
            $table->string('address')->nullable();
            $table->string('level')->nullable();
            $table->string('suitable_times_days')->nullable();
            $table->string('female_question')->nullable();
            $table->string('has_ijaza')->nullable();
            $table->integer('father_number')->nullable();
            $table->integer('mother_number')->nullable();
            $table->string('skills')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
