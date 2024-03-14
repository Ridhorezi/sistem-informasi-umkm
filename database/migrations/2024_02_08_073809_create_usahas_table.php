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
        // Migration jobs
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('owners')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_usaha');
            $table->foreignId('jenis_usaha_id')->constrained('business_types')->onUpdate('cascade')->onDelete('cascade');
            $table->string('lama_berdirinya_usaha');
            $table->string('nilai_pendanaan');
            $table->string('sumber_pendanaan');
            $table->string('hambatan_usaha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign(['owner_id']);
            $table->dropForeign(['jenis_usaha_id']);
        });

        Schema::dropIfExists('jobs');
    }
};