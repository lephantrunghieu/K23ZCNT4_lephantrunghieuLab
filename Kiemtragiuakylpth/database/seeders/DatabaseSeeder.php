<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            LPTH_Quan_TriTableSeeder::class,
            LPTH_LOAI_SAN_PHAMTableSeeder::class,
            LPTH_SAN_PHAMTableSeeder::class,
            LPTH_KhachHangTableSeeder::class,
            LPTH_HoaDonTableSeeder::class,
            LPTH_CT_HoaDonTableSeeder::class,
        ]);

    }
}
