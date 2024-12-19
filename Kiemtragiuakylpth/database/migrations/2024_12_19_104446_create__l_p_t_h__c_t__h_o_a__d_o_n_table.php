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
        Schema::create('LPTH_CT_HOA_DON', function (Blueprint $table) {
            $table->id(); // ID tự tăng
            $table->unsignedBigInteger('lpthMaHoaDon'); // Khóa ngoại tới bảng LPTH_HOA_DON
            $table->unsignedBigInteger('lpthMaSanPham'); // Khóa ngoại tới bảng LPTH_SAN_PHAM
            $table->integer('lpthSoLuong'); // Số lượng sản phẩm
            $table->decimal('lpthDonGia', 10, 2); // Đơn giá
            $table->decimal('lpthThanhTien', 15, 2); // Thành tiền
            $table->tinyInteger('lpthTrangThai'); // Trạng thái
            $table->timestamps(); // created_at, updated_at

            // Định nghĩa khóa ngoại
            $table->foreign('lpthMaHoaDon')->references('id')->on('LPTH_HOA_DON')->onDelete('cascade');
            $table->foreign('lpthMaSanPham')->references('id')->on('LPTH_SAN_PHAM')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LPTH_CT_HOA_DON');
    }
};
