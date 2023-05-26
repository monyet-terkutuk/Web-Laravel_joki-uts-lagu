<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'ini@admin.com',
            'password' => Hash::make('admin')
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'lagi@test.com',
            'password' => Hash::make('test')
        ]);
    }
}
