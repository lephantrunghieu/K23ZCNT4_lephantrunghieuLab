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
        Schema::create('LPTH_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('lpthMaHoaDon', 255)->unique(); // Mã hóa đơn duy nhất
            $table->unsignedBigInteger('lpthMaKhachHang'); // Khóa ngoại
            $table->date('lpthNgayHoaDon'); // Ngày lập hóa đơn
            $table->string('lpthHoTenKhachHang', 255); // Họ tên khách hàng
            $table->string('lpthEmail', 255); // Email
            $table->string('lpthDienThoai', 255); // Điện thoại
            $table->string('lpthDiaChi', 255); // Địa chỉ
            $table->float('lpthTongTriGia'); // Tổng trị giá
            $table->tinyInteger('lpthTrangThai'); // Trạng thái
            $table->timestamps();

            // Định nghĩa khóa ngoại
            $table->foreign('lpthMaKhachHang')->references('id')->on('lpth_khach_hang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LPTH_HOA_DON');
    }
};
