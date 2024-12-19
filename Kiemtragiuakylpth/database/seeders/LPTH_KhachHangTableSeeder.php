<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LPTH_KhachHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('LPTH_KHACH_HANG')->insert([
            [
                'lpthMaKhachHang' => 'KH001',
                'lpthHoTenKhachHang' => 'Nguyễn Văn A',
                'lpthEmail' => 'nguyenvana@gmail.com',
                'lpthMatKhau' => bcrypt('123456'), // Mã hóa mật khẩu
                'lpthDienThoai' => '0123456789',
                'lpthDiaChi' => '123 Đường ABC, TP. HCM',
                'lpthNgayDangKy' => '2024-12-20',
                'lpthTrangThai' => 1,
            ],
            [
                'lpthMaKhachHang' => 'KH002',
                'lpthHoTenKhachHang' => 'Trần Thị B',
                'lpthEmail' => 'tranthib@gmail.com',
                'lpthMatKhau' => bcrypt('123456'),
                'lpthDienThoai' => '0987654321',
                'lpthDiaChi' => '456 Đường XYZ, Hà Nội',
                'lpthNgayDangKy' => '2024-12-21',
                'lpthTrangThai' => 1,
            ],
            [
                'lpthMaKhachHang' => 'KH003',
                'lpthHoTenKhachHang' => 'Lê Phan C',
                'lpthEmail' => 'lephanc@gmail.com',
                'lpthMatKhau' => bcrypt('123456'),
                'lpthDienThoai' => '0912345678',
                'lpthDiaChi' => '789 Đường DEF, Đà Nẵng',
                'lpthNgayDangKy' => '2024-12-22',
                'lpthTrangThai' => 0,
            ],
        ]);
    }
}
