<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim_mhs' => '2211001',
            'nama' => 'Bela Aprilia',
            'ttl_mhs' => 'Dunia 00 - 00 - 0000',
            'alamat' => 'Dunia',
            'telpon_mhs' => '00000000000',
            'email_mhs' => 'email@bella.com',
            'kota_mhs' => 'kota mahasiswa',
            'agama_mhs' => 'agama',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('mahasiswa')->insert([
            'nim_mhs' => '2211002',
            'nama' => 'Salsa Risdayanti',
            'ttl_mhs' => 'Dunia 00 - 00 - 0000',
            'alamat' => 'Dunia',
            'telpon_mhs' => '00000000000',
            'email_mhs' => 'email@bella.com',
            'kota_mhs' => 'kota mahasiswa',
            'agama_mhs' => 'agama',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('mahasiswa')->insert([
            'nim_mhs' => '2211003',
            'nama' => 'Marjito Unyu',
            'ttl_mhs' => 'Dunia 00 - 00 - 0000',
            'alamat' => 'Dunia',
            'telpon_mhs' => '00000000000',
            'email_mhs' => 'email@bella.com',
            'kota_mhs' => 'kota mahasiswa',
            'agama_mhs' => 'agama',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
