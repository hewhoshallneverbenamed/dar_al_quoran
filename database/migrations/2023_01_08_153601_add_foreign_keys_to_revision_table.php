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
        Schema::table('revision', function (Blueprint $table) {
            $table->foreign(['session_id'], 'revision_ibfk_1')->references(['id'])->on('quran_sessions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('revision', function (Blueprint $table) {
            $table->dropForeign('revision_ibfk_1');
        });
    }
};
