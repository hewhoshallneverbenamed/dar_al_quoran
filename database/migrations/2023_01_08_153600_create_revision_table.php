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
        Schema::create('revision', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id')->primary();
            $table->integer('session_id')->nullable()->index('session_id');
            $table->string('date')->nullable();
            $table->integer('jizie_from')->nullable();
            $table->integer('jizie_to')->nullable();
            $table->string('surah_from')->nullable();
            $table->string('surah_to')->nullable();
            $table->integer('page_from')->nullable();
            $table->integer('page_to')->nullable();
            $table->string('grade')->nullable();
            $table->string('notes')->nullable();
            $table->integer('ayya_from')->nullable();
            $table->integer('ayya_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revision');
    }
};
