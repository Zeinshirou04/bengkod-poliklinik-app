<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('periksa', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_pasien')->constrained(table:'users', indexName:'index_detail_pasien');
            $table->foreignId('id_dokter')->constrained(table:'users', indexName:'index_detail_dokter');

            $table->dateTime('tgl_periksa');
            $table->text('catatan');
            $table->integer('biaya_periksa');
            $table->timestamps();
        });

        Schema::create('detail_periksa', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_periksa')->constrained(table:'periksa', indexName:'index_detail_periksa');
            $table->foreignId('id_obat')->constrained(table:'obat', indexName:'index_detail_obat');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksa');
        Schema::dropIfExists('detail_periksa');
    }
};
