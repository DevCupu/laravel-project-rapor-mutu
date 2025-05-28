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
        Schema::create('rapor_pendidikans', function (Blueprint $table) {
            $table->id();
            $table->string('indikator'); // Misal: Kemampuan Literasi Murid
            $table->string('kategori'); // Misal: Literasi, Numerasi, Karakter, dll
            $table->text('nilai');      // Misal: "Sedang"
            $table->text('deskripsi')->nullable(); // Penjelasan
            $table->year('tahun');      // 2023, 2024
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
        Schema::dropIfExists('rapor_pendidikans');
    }
};
