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
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('nama_penyewa');
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali');
            $table->integer('total_price')->nullable(false);
            $table->integer('jumlah_bayar')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
