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
        Schema::create('lpthvattu', function (Blueprint $table) {
            //$table->id();
            $table->string('lpthMaVTu')->primary();
            $table->string('lpthTenVTu')->unique();
            $table->string('lpthDvTinh');
            $table->float('lpthPhanTram');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lpthvattu');
    }
};
