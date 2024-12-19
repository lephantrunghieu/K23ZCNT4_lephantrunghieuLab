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
        Schema::create('LPTH_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id(); // Khóa chính tự tăng
            $table->string('lpthMaLoai', 255); // Mã loại sản phẩm
            $table->string('lpthTenLoai', 255); // Tên loại sản phẩm
            $table->tinyInteger('lpthTrangThai'); // Trạng thái
            $table->timestamps(); // Tự động tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LPTH_LOAI_SAN_PHAM'); // Xóa bảng nếu rollback
    }
};
