<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Thêm cột 'email' vào bảng 'lpthnhacc'.
     */
    public function up(): void
    {
        if (Schema::hasTable('lpthnhacc')) { // Kiểm tra bảng tồn tại
            Schema::table('lpthnhacc', function (Blueprint $table) {
                if (!Schema::hasColumn('lpthnhacc', 'email')) { // Kiểm tra cột chưa tồn tại
                    $table->string('email')->nullable();
                }
            });
        }
    }

    /**
     * Xóa cột 'email' khi rollback.
     */
    public function down(): void
    {
        if (Schema::hasTable('lpthnhacc')) { // Kiểm tra bảng tồn tại
            Schema::table('lpthnhacc', function (Blueprint $table) {
                if (Schema::hasColumn('lpthnhacc', 'email')) { // Kiểm tra cột tồn tại
                    $table->dropColumn('email');
                }
            });
        }
    }
};
