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
        Schema::table('rkt', function (Blueprint $table) {
            $table->string('tahun')->after('biaya_diperlukan');
        });
    }

    public function down()
    {
        Schema::table('rkt', function (Blueprint $table) {
            $table->dropColumn('tahun');
        });
    }
};
