<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LPTH_HoaDonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('LPTH_HOA_DON')->insert([
            [
                'lpthMaHoaDon' => 'HD001',
                'lpthMaKhachHang' => 1, // ID khách hàng từ bảng lpth_khach_hang
                'lpthNgayHoaDon' => '2024-12-20',
                'lpthHoTenKhachHang' => 'Nguyễn Văn A',
                'lpthEmail' => 'nguyenvana@gmail.com',
                'lpthDienThoai' => '0123456789',
                'lpthDiaChi' => '123 Đường ABC, TP. HCM',
                'lpthTongTriGia' => 15000,
                'lpthTrangThai' => 1,
            ],
            [
                'lpthMaHoaDon' => 'HD002',
                'lpthMaKhachHang' => 2, // ID khách hàng từ bảng lpth_khach_hang
                'lpthNgayHoaDon' => '2024-12-21',
                'lpthHoTenKhachHang' => 'Trần Thị B',
                'lpthEmail' => 'tranthib@gmail.com',
                'lpthDienThoai' => '0987654321',
                'lpthDiaChi' => '456 Đường XYZ, Hà Nội',
                'lpthTongTriGia' => 25000,
                'lpthTrangThai' => 0,
            ],
        ]);
    }
}
