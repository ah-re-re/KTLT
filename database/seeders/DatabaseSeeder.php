<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

//         \App\Models\Admin_account::factory()->create([
//             'name' => 'Admin User',
//             'email' => 'admin@gmail.com',
//             'phone' => '00000',
//             'password' => Hash::make('admin123'),
//         ]);

        DB::table('admin_account')->insert([
            'name' => 'Admin User',
            'image' => 'default.jpg',
            'email' => 'admin@gmail.com',
            'phone' => '00000',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('banner')->insert([
            'image' => null,
            'content' => null,
            'url' => 'shop/all',
        ]);
        DB::table('banner')->insert([
            'image' => null,
            'content' => null,
            'url' => 'shop/all',
        ]);
        DB::table('banner')->insert([
            'image' => null,
            'content' => null,
            'url' => 'shop/all',
        ]);
        DB::table('banner')->insert([
            'image' => null,
            'content' => null,
            'url' => 'shop/all',
        ]);
        DB::table('banner')->insert([
            'image' => null,
            'content' => null,
            'url' => 'shop/all',
        ]);
        DB::table('banner')->insert([
            'image' => null,
            'content' => null,
            'url' => 'shop/all',
        ]);
        DB::table('banner')->insert([
            'image' => null,
            'content' => null,
            'url' => 'shop/all',
        ]);
    }
}
