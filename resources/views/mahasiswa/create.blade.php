@extends('layout/main')

@section('content')
<a href="/mahasiswa" class="btn btn-secondary"><i class="bi bi-backspace"></i></a>

<div class="d-flex justify-content-center my-5">
    <div class="card" style="width: 50rem">
        <div class="card-body">
            @include('notifikasi.pesan')
            <h5 class="mb-3">Form tambah mahasiswa</h5>
            <form method="post" action="/mahasiswa" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nim_mhs" class="form-label">Nim Mahasiswa</label>
                    <input type="text" class="form-control" name="nim_mhs" id="nim_mhs" value="{{ Session::get('nim_mhs') }}">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ Session::get('nama') }}">
                </div>

                <div class="mb-3">
                    <label for="ttl_mhs" class="form-label">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" name="ttl_mhs" id="ttl_mhs" value="{{ Session::get('ttl_mhs') }}" placeholder="Bandung 10 -04 -2023">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ Session::get('alamat') }}" placeholder="Bandung, Jl.kacapiring no.3, kab.Bandung Barat ">
                </div>

                <div class="mb-3">
                    <label for="kota_mhs" class="form-label">Asal Kota</label>
                    <input type="text" class="form-control" name="kota_mhs" id="kota_mhs" value="{{ Session::get('kota_mhs') }}" placeholder="Garut">
                </div>

                <div class="mb-3">
                    <label for="telpon_mhs" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" name="telpon_mhs" id="telpon_mhs" value="{{ Session::get('telpon_mhs') }}" placeholder="+628xx xxxx xxxx">
                </div>

                <div class="mb-3">
                    <label for="agama_mhs" class="form-label">Agama</label>
                    <input type="text" class="form-control" name="agama_mhs" id="agama_mhs" value="{{ Session::get('agama_mhs') }}" placeholder="Budha">
                </div>

                <div class="mb-3">
                    <label for="email_mhs" class="form-label">Email Adress</label>
                    <input type="email" class="form-control" name="email_mhs" id="email_mhs" value="{{ Session::get('email_mhs') }}" placeholder="email@kamu.com">
                </div>

                <label for="email_mhs" class="form-label">Gambar</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    <label class="input-group-text" for="gambar">Upload</label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
</div>

@endsection
