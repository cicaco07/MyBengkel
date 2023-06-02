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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('dealer_id');
            // $table->enum('problem',['Ganti Ban', 'Ganti Oli', 'Service Rutin', 'Lain-lain']);
            $table->string('problem', 50);
            $table->string('plat_num');

            $table->string('recommended_service')->nullable();
            $table->dateTime('plan_date')->nullable();
            $table->string('price')->nullable();
            $table->enum('status',['waiting', 'accept', 'done'])->default('waiting');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('dealer_id')->references('id')->on('dealer');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
