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
        Schema::create('LPTH_QUAN_TRI', function (Blueprint $table) {
            $table->id();
            $table->string('lpthTaiKhoan',255)->unique();
            $table->string('lpthMatKhau',255);
            $table->tinyInteger('lpthTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LPTH_QUAN_TRI');
    }
};
