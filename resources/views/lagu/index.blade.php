@extends('layout.main')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data List Lagu</h1>
</div>

<div class="content mx-5 my-5">

    <div class="card card-lg">
        <div class="card-body">
            @include('notifikasi.pesan')


            <a href="/lagu/create" class="btn btn-primary">+ Tambah Lagu</a>
            <table class="table  table-striped mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Penyanyi</th>
                        <th>Album</th>
                        <th>Genre</th>
                        <th>Tanggal Rilis</th>
                        <th>Created At</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <th>{{ $item->title }}</th>
                            <th>{{ $item->penyanyi }}</th>
                            <th>{{ $item->album }}</th>
                            <th>{{ $item->genre }}</th>
                            <th>{{ $item->tgl_rilis }}</th>
                            <td>{{ $item->created_at->diffForHumans() }}</td>
                            <th>
                                <a href="{{ route('lagu.edit', $item->id) }}" class="btn btn-warning btn-sm text-white "><i class="bi bi-pencil"></i></a>
                                <form class="d-inline" action="/lagu/{{ $item->id }}" method="post" onsubmit="return confirm('Yakin mau hapus data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm d-inline"><i class="bi bi-trash"></i></button>
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
