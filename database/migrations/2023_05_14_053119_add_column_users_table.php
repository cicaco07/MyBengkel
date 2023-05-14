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
        Schema::table('users', function(Blueprint $table){
            $table->string('username')->after('name');
            $table->string('role')->after('username');
            $table->string('alamat')->after('role');
            $table->string('no_handphone')->after('alamat');
            
            
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('username');
            $table->dropColumn('role');
            $table->dropColumn('alamat');
            $table->dropColumn('no_handphone');
            
        });
    }
};
