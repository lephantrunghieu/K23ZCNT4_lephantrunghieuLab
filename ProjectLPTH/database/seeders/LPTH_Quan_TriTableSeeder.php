<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB Facade

class LPTH_Quan_TriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['lpthTaiKhoan' => 'lephantrunghieu@gmail.com', 'lpthMatKhau' => md5('Trunghieu123@'), 'lpthTrangThai' => 0],
            ['lpthTaiKhoan' => '0925222830', 'lpthMatKhau' => md5('Trunghieu123@'), 'lpthTrangThai' => 0],
        ];

        foreach ($data as $item) {
            DB::table('LPTH_QUAN_TRi')->updateOrInsert(
                ['lpthTaiKhoan' => $item['lpthTaiKhoan']], // Điều kiện kiểm tra
                $item // Dữ liệu cần chèn hoặc cập nhật
            );
        }
    }
}
