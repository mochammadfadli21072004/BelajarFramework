<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Mengubah kolom 'brand' menjadi VARCHAR(100)
            $table->string('brand', 100)->change(); 
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Mengembalikan kolom 'brand' ke panjang sebelumnya (misalnya 5)
            // Ganti 5 dengan panjang asli kolom jika Anda mengingatnya
            $table->string('brand', 5)->change(); 
        });
    }
};