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
        Schema::create('LPTH_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('lpthTenSanPham', 255);
            $table->string('lpthMaSanPham', 255)->unique();
            $table->string('lpthHinhAnh', 255);
            $table->integer('lpthSoLuong');
            $table->float('lpthDonGia');
            $table->unsignedBigInteger('lpthMaLoai'); // Khóa ngoại
            $table->tinyInteger('lpthTrangThai');
            $table->timestamps();

            // Định nghĩa khóa ngoại
            $table->foreign('lpthMaLoai')->references('id')->on('LPTH_LOAI_SAN_PHAM')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LPTH_SAN_PHAM');
    }
};
