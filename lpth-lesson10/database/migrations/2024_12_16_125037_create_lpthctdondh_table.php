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
        Schema::create('lpthctdondh', function (Blueprint $table) {
            $table->string('lpthSoDH');
            $table->string('lpthMaVtu');
            $table->integer('lpthSlDat'); // Sửa từ 'interger' thành 'integer'
            
            // Tạo khóa chính trên 2 cột (lpthSoDH, lpthMaVtu)
            $table->primary(['lpthSoDH', 'lpthMaVtu']);
            
            // Tạo khóa ngoại
            $table->foreign('lpthSoDH')->references('lpthSoDH')->on('lpthdondh');
            $table->foreign('lpthMaVtu')->references('lpthMaVtu')->on('lpthvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lpthctdondh'); // Xóa bảng khi rollback
    }
};
