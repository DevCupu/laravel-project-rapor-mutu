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
        Schema::create('rkt', function (Blueprint $table) {
            $table->id();
            $table->string('identifikasi');
            $table->string('akar_masalah');
            $table->string('kegiatan_benahi');
            $table->text('penjelasan_implementasi');
            $table->boolean('biaya_diperlukan')->default(false); // true = butuh biaya, false = tidak
            $table->string('tahun');
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
        Schema::dropIfExists('rkt');
    }
};
