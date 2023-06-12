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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('spareparts_id');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->integer('total');
            $table->timestamps();
            
            $table->foreign('service_id')->references('id')->on('service');
            $table->foreign('spareparts_id')->references('id')->on('spareparts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
