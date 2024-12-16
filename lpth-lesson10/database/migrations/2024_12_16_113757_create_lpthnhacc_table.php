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
        Schema::create('lpthnhacc', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('lpthMaNCC')->primary();
            $table->string('lpthTenNCC');
            $table->string('lpthDiachi');
            $table->string('lpthDienthoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lpthnhacc');
    }
};
