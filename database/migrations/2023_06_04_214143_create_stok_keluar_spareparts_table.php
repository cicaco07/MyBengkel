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
        // Schema::create('stok_keluar_spareparts', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedInteger('sparepart_id');
        //     $table->integer('jumlah');
        //     $table->timestamps();

        //     $table->foreign('sparepart_id')->references('id')->on('spareparts')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_keluar_spareparts');
    }
};
