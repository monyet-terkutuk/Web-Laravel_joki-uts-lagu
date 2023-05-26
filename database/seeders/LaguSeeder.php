<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaguSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lagu')->insert([
            'title' => 'Nightmare',
            'penyanyi' => 'Avenged Sevenfold',
            'album' => 'Nightmare',
            'genre' => 'Metal',
            'tgl_rilis' => '10 - 04 -2004',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('lagu')->insert([
            'title' => 'Kerinduan',
            'penyanyi' => 'Rhoma Irama',
            'album' => 'Teuapal',
            'genre' => 'Dangdut',
            'tgl_rilis' => '10 - 04 -2001',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('lagu')->insert([
            'title' => 'Sampai Jadi Debu',
            'penyanyi' => 'Banda Neira',
            'album' => 'Gak Tau',
            'genre' => 'Balad',
            'tgl_rilis' => '10 - 04 -2012',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
