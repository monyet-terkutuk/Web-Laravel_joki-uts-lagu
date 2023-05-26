@extends('layout/main')

@section('content')
<a href="/mahasiswa" class="btn btn-secondary"><i class="bi bi-backspace"></i></a>

<div class="content-center my-5">
    <div class="row">
        <div class="col-md-8 mx-auto my-5">
            <div class="card" style="width: 50rem">
                <div class="card-body">
                    <h3 class="text-center">Edit mahasiswa dengan nim : {{ $data->nim_mhs }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card" style="width: 50rem">
                <div class="card-body">
                    @include('notifikasi.pesan')
                    <h5 class="mb-3">Form edit mahasiswa</h5>
                    <form method="post" action="/mahasiswa/{{ $data->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nim_mhs" class="form-label">Nim Mahasiswa</label>
                            <input type="text" class="form-control" name="nim_mhs" id="nim_mhs" value="{{ $data->nim_mhs }}" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="ttl_mhs" class="form-label">Tempat Tanggal Lahir</label>
                            <input type="text" class="form-control" name="ttl_mhs" id="ttl_mhs" value="{{ $data->ttl_mhs }}" placeholder="Bandung 10 -04 -2023" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $data->alamat }}" placeholder="Bandung, Jl.kacapiring no.3, kab.Bandung Barat " aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="kota_mhs" class="form-label">Asal Kota</label>
                            <input type="text" class="form-control" name="kota_mhs" id="kota_mhs" value="{{ $data->kota_mhs }}" placeholder="Garut" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="telpon_mhs" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" name="telpon_mhs" id="telpon_mhs" value="{{ $data->telpon_mhs }}" placeholder="+628xx xxxx xxxx" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="agama_mhs" class="form-label">Agama</label>
                            <input type="text" class="form-control" name="agama_mhs" id="agama_mhs" value="{{ $data->agama_mhs }}" placeholder="Budha" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="email_mhs" class="form-label">Email Adress</label>
                            <input type="email" class="form-control" name="email_mhs" id="email_mhs" value="{{ $data->email_mhs }}" placeholder="email@kamu.com" aria-describedby="emailHelp">
                        </div>

                        @if ($data->gambar)
                        <img style="max-width:50px;max-height:50px" src="{{ url('gambar') . '/' . $data->gambar }}" alt="">
                        @endif
                        <label for="email_mhs" class="form-label">Gambar</label>
                        <div class="input-group mb-3">
                        <input type="file" class="form-control" id="gambar" name="gambar">
                        <label class="input-group-text" for="gambar">Upload</label>
                        </div>

                        <button type="submit" class="btn btn-warning">Edit Data</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
