<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::orderBy('nim_mhs', 'desc')->paginate(1);
        return view('mahasiswa.index')->with('data', $data);
    }

    public function detail($id){
        $data = Mahasiswa::find($id);
        return view('mahasiswa.detail',[
            "title" => "Detail Mahasiswa",
            "data" => $data
        ]);
    }
}
