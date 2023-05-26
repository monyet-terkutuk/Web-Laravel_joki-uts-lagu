<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::orderBy('nim_mhs', 'desc')->paginate(7);
        return view('mahasiswa.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nim_mhs' => 'required|numeric',
            'nama' => 'required',
            'ttl_mhs' => 'required',
            'alamat' => 'required',
            'telpon_mhs' => 'required',
            'email_mhs' => 'required',
            'kota_mhs' => 'required',
            'agama_mhs' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png,svg',
        ],[
            'nim_mhs.required' => 'Nim wajib di isi!!',
            'nim_mhs.numeric' => 'Nim harus angka!',
            'nama.required' => 'Nama wajib di isi!!',
            'ttl_mhs.required' => 'Ttl wajib di isi!!',
            'alamat.required' => 'Alamat wajib di isi!!',
            'telpon_mhs.required' => 'No telepon wajib di isi!!',
            'email_mhs.required' => 'Email wajib di isi!!',
            'kota_mhs.required' => 'Kota wajib di isi!!',
            'agama_mhs.required' => 'Agama wajib di isi!!',
            'gambar.required' => 'Silahkan upload gambar!',
            'gambar.mimes' => 'Gambar harus file tipe jpg,png,jpeg!'
        ]);

        $foto_file = $request->file('gambar');
        $foto_extension = $foto_file->extension();
        $foto_name = date('ymdhis') . "." . $foto_extension;
        $foto_file->move(public_path('gambar'),$foto_name);

        // if ($request->file('gambar')) {
        //     $validated['gambar'] = $request->file('gambar')->store('gambar');
        // }


        $data =[
            'nim_mhs' => $request->input('nim_mhs'),
            'nama' => $request->input('nama'),
            'ttl_mhs' => $request->input('ttl_mhs'),
            'alamat' => $request->input('alamat'),
            'telpon_mhs' => $request->input('telpon_mhs'),
            'email_mhs' => $request->input('email_mhs'),
            'kota_mhs' => $request->input('kota_mhs'),
            'agama_mhs' => $request->input('agama_mhs'),
            'gambar' => $foto_name
        ];



        // Menyimpan pesan flash dengan key "success"
        Session::flash('success', 'Pesan berhasil disimpan.');

        Session::flash('nim_mhs', $request->nim_mhs);
        Session::flash('nama', $request->nama);
        Session::flash('ttl_mhs', $request->ttl_mhs);
        Session::flash('alamat', $request->alamat);
        Session::flash('telpon_mhs', $request->telpon_mhs);
        Session::flash('email_mhs', $request->email_mhs);
        Session::flash('kota_mhs', $request->kota_mhs);
        Session::flash('agama_mhs', $request->agama_mhs);



        Mahasiswa::create($data);
        return redirect('/mahasiswa')->with('success', 'Berhasil menambahkan mahasiswa baru!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mahasiswa::find($id);
        return view('mahasiswa.detail',[
            "title" => "Detail Mahasiswa",
            "data" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mahasiswa::where('id',$id)->first();
        return view('mahasiswa.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nim_mhs' => 'required|numeric',
            'nama' => 'required',
            'ttl_mhs' => 'required',
            'alamat' => 'required',
            'telpon_mhs' => 'required',
            'email_mhs' => 'required',
            'kota_mhs' => 'required',
            'agama_mhs' => 'required',
        ],[
            'nim_mhs.required' => 'Nim wajib di isi!!',
            'nim_mhs.numeric' => 'Nim harus angka!',
            'nama.required' => 'Nama wajib di isi!!',
            'ttl_mhs.required' => 'Ttl wajib di isi!!',
            'alamat.required' => 'Alamat wajib di isi!!',
            'telpon_mhs.required' => 'No telepon wajib di isi!!',
            'email_mhs.required' => 'Email wajib di isi!!',
            'kota_mhs.required' => 'Kota wajib di isi!!',
            'agama_mhs.required' => 'Agama wajib di isi!!',
        ]);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'mimes:jpeg,jpg,png'
            ],[
                'gambar.mimes' => 'Gambar hanya boleh JPG,JPEG,PNG'
            ]);
            $foto_file = $request->file('gambar');
            $foto_extension = $foto_file->extension();
            $foto_name = date('ymdhis') . "." . $foto_extension;
            $foto_file->move(public_path('gambar'),$foto_name);

            $data_foto = Mahasiswa::where('id', $id)->first();

            File::delete(public_path('gambar') . '/' . $data_foto->foto_name);

            // $data['gambar'] = $foto_name;

        }

        $data =[
            'nama' => $request->input('nama'),
            'ttl_mhs' => $request->input('ttl_mhs'),
            'alamat' => $request->input('alamat'),
            'telpon_mhs' => $request->input('telpon_mhs'),
            'email_mhs' => $request->input('email_mhs'),
            'kota_mhs' => $request->input('kota_mhs'),
            'agama_mhs' => $request->input('agama_mhs'),
            'gambar' => $foto_name
        ];

        // Mahasiswa::where('nim_mhs', $id)->update($data);
        Mahasiswa::where('id', $id)->update($data);
        return redirect('/mahasiswa')->with('success', 'Berhasil edit data mahasiswa!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Mahasiswa::where('id', $id)->first();
        File::delete(public_path('gambar') . '/' . $data->gambar);

        Mahasiswa::where('id', $id)->delete();
        return redirect('/mahasiswa')->with('success', 'Berhasil hapus data mahasiswa!!');
    }
}
