<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        // DB::unprepared('
        //     CREATE TRIGGER update_stok_keluar AFTER INSERT ON stok_keluar_spareparts
        //     FOR EACH ROW
        //     BEGIN
        //         UPDATE spareparts
        //         SET stok = stok - NEW.jumlah
        //         WHERE id = NEW.sparepart_id;
        //     END
        // ');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS update_stok_keluar');
    }
};
