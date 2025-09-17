<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemesanan_armadas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('armada_id');
            $table->unsignedBigInteger('shipment_id')->nullable();
            $table->string('pemesan_name')->nullable();
            $table->string('jenis_kendaraan');
            $table->date('tanggal_pemesanan');
            $table->text('detail_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_armadas');
    }
};
