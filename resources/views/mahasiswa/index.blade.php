@extends('layout.main')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Mahasiswa</h1>
</div>

<div class="content mx-5 my-5">

    <div class="card card-lg">
        <div class="card-body">
            @include('notifikasi.pesan')


            <a href="/mahasiswa/create" class="btn btn-primary">+ Tambah Mahasiwa</a>
            <table class="table  table-striped mt-3">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Kota</th>
                        <th>Agama</th>
                        <th class="px-7">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>
                                @if ($item->gambar)
                                    <img style="max-width:50px;max-height:50px" src="{{ url('gambar') . '/' . $item->gambar }}" alt="">
                                @endif
                            </td>
                            <th>{{ $item->nim_mhs }}</th>
                            <th>{{ $item->nama }}</th>
                            <th>{{ $item->ttl_mhs }}</th>
                            <th>{{ $item->alamat }}</th>
                            <th>{{ $item->telpon_mhs }}</th>
                            <th>{{ $item->email_mhs }}</th>
                            <th>{{ $item->kota_mhs }}</th>
                            <th>{{ $item->agama_mhs }}</th>
                            <th>
                                <a href="{{ url('/mahasiswa/'.$item->id) }}" class="btn btn-info btn-sm text-white mt-2"><i class="bi bi-info-circle"></i></a>
                                <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-warning btn-sm text-white mt-2"><i class="bi bi-pencil"></i></a>
                                <form action="/mahasiswa/{{ $item->id }}" method="post" onsubmit="return confirm('Yakin mau hapus data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm mt-2"><i class="bi bi-trash"></i></button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>

    </div>
@endsection
