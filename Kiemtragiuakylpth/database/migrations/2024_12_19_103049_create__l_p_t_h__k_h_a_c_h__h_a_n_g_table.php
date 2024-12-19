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
        Schema::create('LPTH_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('lpthMaKhachHang',255)->unique();
            $table->string('lpthHoTenKhachHang',255);
            $table->string('lpthEmail',255);
            $table->string('lpthMatKhau',255);
            $table->string('lpthDienThoai',255);
            $table->string('lpthDiaChi',255);
            $table->date('lpthNgayDangKy');
            $table->tinyInteger('lpthTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LPTH_KHACH_HANG');
    }
};
