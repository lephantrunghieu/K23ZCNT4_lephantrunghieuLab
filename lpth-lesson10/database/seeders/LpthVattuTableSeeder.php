<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB facade
use Faker\Factory as Faker;

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
    $faker = Faker::create();
    foreach(range(1,50) as $index)
        {
            DB::table('lpthVATTU')->insert([
            'lpthMaVTu'=>$faker->word(4),
            // 'MaNCC'=>$faker->word(15),
            'lpthTenVtu'=>$faker->sentence(5),
            'lpthDvTinh'=>$faker->word(3),
            'lpthPhanTram'=>$faker->randomFloat('2'),0,100
            ]);
        }
    }
}
