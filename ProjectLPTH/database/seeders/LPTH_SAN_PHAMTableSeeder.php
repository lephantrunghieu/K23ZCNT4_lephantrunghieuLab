<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
class LPTH_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("LPTH_SAN_PHAM")->insert([
            'lpthMaSanPham'=>"VP001",
            'lpthTenSanPham'=>"Phú Quý Bò Viên",
            'lpthHinhAnh'=>"images/san-pham/Vp001.jpg",
            'lpthSoLuong'=>100,
            'lpthDonGia'=>699000,
            'lpthMaLoai'=>1,
            'lpthTrangThai'=>0
        ]);

        DB::table("LPTH_SAN_PHAM")->insert([
            'lpthMaSanPham'=>"VP002",
            'lpthTenSanPham'=>"Cây đại phú gia",
            'lpthHinhAnh'=>"images/san-pham/Vp002.jpg",
            'lpthSoLuong'=>200,
            'lpthDonGia'=>550000,
            'lpthMaLoai'=>1,
            'lpthTrangThai'=>0
        ]);

        DB::table("LPTH_SAN_PHAM")->insert([
            'lpthMaSanPham'=>"VP003",
            'lpthTenSanPham'=>"Cây hạnh phúc",
            'lpthHinhAnh'=>"images/san-pham/Vp003.jpg",
            'lpthSoLuong'=>150,
            'lpthDonGia'=>250000,
            'lpthMaLoai'=>1,
            'lpthTrangThai'=>0
        ]);

        DB::table("LPTH_SAN_PHAM")->insert([
            'lpthMaSanPham'=>"VP004",
            'lpthTenSanPham'=>"Cây hạnh phúc",
            'lpthHinhAnh'=>"images/san-pham/Vp004.jpg",
            'lpthSoLuong'=>300,
            'lpthDonGia'=>799000,
            'lpthMaLoai'=>1,
            'lpthTrangThai'=>0
        ]);

        DB::table("LPTH_SAN_PHAM")->insert([
            'lpthMaSanPham'=>"PT001",
            'lpthTenSanPham'=>"Cây thiết mộc lan",
            'lpthHinhAnh'=>"images/san-pham/PT001.jpg",
            'lpthSoLuong'=>150,
            'lpthDonGia'=>590000,
            'lpthMaLoai'=>3,
            'lpthTrangThai'=>0
        ]);

        DB::table("LPTH_SAN_PHAM")->insert([
            'lpthMaSanPham'=>"PT002",
            'lpthTenSanPham'=>"Cây Trường Sinh",
            'lpthHinhAnh'=>"images/san-pham/PT002.jpg",
            'lpthSoLuong'=>100,
            'lpthDonGia'=>150000,
            'lpthMaLoai'=>3,
            'lpthTrangThai'=>0
        ]);

        DB::table("LPTH_SAN_PHAM")->insert([
            'lpthMaSanPham'=>"PT003",
            'lpthTenSanPham'=>"Cây Hạnh Phúc",
            'lpthHinhAnh'=>"images/san-pham/PT003.jpg",
            'lpthSoLuong'=>200,
            'lpthDonGia'=>299000,
            'lpthMaLoai'=>3,
            'lpthTrangThai'=>0
        ]);

        DB::table("LPTH_SAN_PHAM")->insert([
            'lpthMaSanPham'=>"PT004",
            'lpthTenSanPham'=>"Cây Trường Sinh",
            'lpthHinhAnh'=>"images/san-pham/PT004.jpg",
            'lpthSoLuong'=>300,
            'lpthDonGia'=>199000,
            'lpthMaLoai'=>3,
            'lpthTrangThai'=>0
        ]);
    }
}
