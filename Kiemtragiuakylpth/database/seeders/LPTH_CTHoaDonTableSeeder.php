<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LPTH_CTHoaDonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('LPTH_CT_HOA_DON')->insert([
            [
                'lpthMaHoaDon' => 3, // Tham chiếu tới hóa đơn ID 3
                'lpthMaSanPham' => 1, // Tham chiếu tới sản phẩm ID 1
                'lpthSoLuong' => 2,
                'lpthDonGia' => 699000.00, // Giá trị hợp lệ với kiểu decimal
                'lpthThanhTien' => 1398000.00, // 2 x 699000
                'lpthTrangThai' => 1,
            ],
            [
                'lpthMaHoaDon' => 3, // Tham chiếu tới hóa đơn ID 3
                'lpthMaSanPham' => 2,
                'lpthSoLuong' => 1,
                'lpthDonGia' => 550000.00,
                'lpthThanhTien' => 550000.00,
                'lpthTrangThai' => 1,
            ],
            [
                'lpthMaHoaDon' => 4, // Tham chiếu tới hóa đơn ID 4
                'lpthMaSanPham' => 3,
                'lpthSoLuong' => 3,
                'lpthDonGia' => 250000.00,
                'lpthThanhTien' => 750000.00, // 3 x 250000
                'lpthTrangThai' => 0,
            ],
            [
                'lpthMaHoaDon' => 4, // Tham chiếu tới hóa đơn ID 4
                'lpthMaSanPham' => 4,
                'lpthSoLuong' => 1,
                'lpthDonGia' => 799000.00,
                'lpthThanhTien' => 799000.00,
                'lpthTrangThai' => 0,
            ],
        ]);
    }
}