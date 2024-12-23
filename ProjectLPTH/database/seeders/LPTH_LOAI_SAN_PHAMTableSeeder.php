<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LPTH_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('LPTH_LOAI_SAN_PHAM')->insert([
            'lpthMaLoai'=>"L001",
            'lpthTenLoai'=>"Cây Cảnh văn phòng",
            'lpthTrangThai'=>0
        ]);

        DB::table('LPTH_LOAI_SAN_PHAM')->insert([
            'lpthMaLoai'=>"L002",
            'lpthTenLoai'=>"Cây Để Bàn",
            'lpthTrangThai'=>0
        ]);

        DB::table('LPTH_LOAI_SAN_PHAM')->insert([
            'lpthMaLoai'=>"L003",
            'lpthTenLoai'=>"Cây Cảnh Phong Thủy",
            'lpthTrangThai'=>0
        ]);

        DB::table('LPTH_LOAI_SAN_PHAM')->insert([
            'lpthMaLoai'=>"L004",
            'lpthTenLoai'=>"MC CÂY",
            'lpthTrangThai'=>0
        ]);
    }
}
