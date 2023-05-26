@extends('layout/main')

@section('content')
<a href="/mahasiswa" class="btn btn-secondary"><i class="bi bi-backspace"></i></a>

<div class="d-flex justify-content-center">
    <div class="card mb-5" style="width: 50%">
        @if ($data->gambar)
            <img src="{{ asset('gambar/' . $data->gambar) }}" alt="..." class="img-fluid">
        @else
            <img src="https://source.unsplash.com/500x200/?college" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $data->nama }}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{ $data->nim_mhs }}</h6>
          <ul>
            <li>Alamat : {{ $data->alamat }}</li>
            <li>TTL : {{ $data->ttl_mhs }}</li>
            <li>No Telpon : {{ $data->telpon_mhs }}</li>
            <li>Email : {{ $data->email_mhs }}</li>
            <li>Kota : {{ $data->kota_mhs }}</li>
            <li>Agama : {{ $data->agama_mhs }}</li>
            <li>Dibuat : {{ $data->created_at }}</li>
          </ul>
        </div>
      </div>
</div>

@endsection
