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
        Schema::create('lpthdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('lpthSoDH')->primary();
            $table->date('lpthNgayDH');
            $table->string('lpthMaNCC');
            $table->foreign('lpthMaNCC')->references('lpthMaNCC')->on('lpthnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lpthdondh');
    }
};
