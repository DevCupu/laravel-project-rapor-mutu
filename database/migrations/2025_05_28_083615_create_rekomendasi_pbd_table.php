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
        Schema::create('rekomendasi_pbd', function (Blueprint $table) {
            $table->id();
            $table->string('kategori'); // Contoh: "Link and Match", "Karakter", dst
            $table->string('masalah');
            $table->text('kegiatan_benahi');
            $table->text('kegiatan_arkas');
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
        Schema::dropIfExists('rekomendasi_pbd');
    }
};
