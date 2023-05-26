@extends('layout/main')

@section('content')
<a href="/lagu" class="btn btn-secondary"><i class="bi bi-backspace"></i></a>

<div class="d-flex justify-content-center my-5">
    <div class="card" style="width: 50rem">
        <div class="card-body">
            @include('notifikasi.pesan')
            <h5 class="mb-3">Form tambah Lagu</h5>
            <hr class="border-2 text-primary">
            <form method="post" action="/lagu" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label"><i class="bi bi-vinyl-fill"></i> Judul Lagu</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ Session::get('title') }}" placeholder="Enter The Sandman">
                </div>

                <div class="mb-3">
                    <label for="penyanyi" class="form-label"><i class="bi bi-mic"></i> Penyanyi</label>
                    <input type="text" class="form-control" name="penyanyi" id="penyanyi" value="{{ Session::get('penyanyi') }}" placeholder="Metallica, Twenty One Pilots, ..">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label"><i class="bi bi-music-note-list"></i> Genre</label>
                    <input type="text" class="form-control" name="genre" id="genre" value="{{ Session::get('genre') }}" placeholder="Metal, Pop, Jazz, ..">
                </div>

                <div class="mb-3">
                    <label for="album" class="form-label"><i class="bi bi-boombox-fill"></i> Album</label>
                    <input type="text" class="form-control" name="album" id="album" value="{{ Session::get('album') }}" placeholder="Nightmare, Vessel, .. ">
                </div>

                <div class="mb-3">
                    <label for="tgl_rilis" class="form-label"><i class="bi bi-calendar-date-fill"></i> Tanggal Liris</label>
                    <input type="date" class="form-control" name="tgl_rilis" id="tgl_rilis" value="{{ Session::get('tgl_rilis') }}" placeholder="2001 - 05 - 03">
                </div>


                <button type="submit" class="btn btn-info">Tambah Lagu</button>
              </form>
        </div>
      </div>
</div>

@endsection
