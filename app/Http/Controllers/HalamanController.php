<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index(){
        return view('index');
    }

    public function utama(){
        return view('halaman.halaman');
    }

    public function tentang(){
        return view('halaman/tentang');
    }

    public function kontak(){

        $data = [
            'judul' => 'Ini adalah halaman kontak !',
            'kontak' => [
                'email' => 'belaaprilia.com',
                'youtube' => 'belaaprilia'
            ]
        ];

        return view('halaman/kontak')->with($data);
    }
}
