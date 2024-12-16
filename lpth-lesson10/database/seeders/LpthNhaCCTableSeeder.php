<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class LpthNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('lpthnhacc')->insert([
            'lpthMaNCC'=>$faker->uuid(),
            // 'MaNCC'=>$faker->word(15),
            'lpthTenNCC'=>$faker->sentence(5),
            'lpthDiachi'=>$faker->address(),
            'lpthDienthoai'=>$faker->phoneNumber(10),
            'email'=>$faker->email(),
            'lpthstatus'=>$faker->boolean()
            ]);
        }
    }
}
