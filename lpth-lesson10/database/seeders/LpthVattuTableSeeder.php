<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB facade

class LpthVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lpthvattu')->insert([
            'lpthMaVTu' => 'DD01',
            'lpthTenVTu' => 'Đầu DVD Hitachi 1 cửa',
            'lpthDvTinh' => 'Bộ',
            'lpthPhanTram' => 40,
        ]);

        DB::table('lpthvattu')->insert([
            'lpthMaVTu' => 'DD02', // Thay đổi `lpthMaVTu` để tránh trùng lặp
            'lpthTenVTu' => 'Đầu DVD Hitachi 2 cửa',
            'lpthDvTinh' => 'Bộ',
            'lpthPhanTram' => 50,
        ]);
    }
}
