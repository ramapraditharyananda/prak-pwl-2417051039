<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Hapus primary key lama
        DB::statement('ALTER TABLE users DROP CONSTRAINT users_pkey');

        // Hapus kolom id lama
        DB::statement('ALTER TABLE users DROP COLUMN id');

        // Buat id baru menggunakan UUID
        Schema::table('users', function (Blueprint $table) {
            $table->uuid('id')->primary()->first();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus primary key UUID
        DB::statement('ALTER TABLE users DROP CONSTRAINT users_pkey');

        // Hapus kolom UUID
        DB::statement('ALTER TABLE users DROP COLUMN id');

        // Kembalikan id menjadi bigint
        Schema::table('users', function (Blueprint $table) {
            $table->id()->first();
        });
    }
};