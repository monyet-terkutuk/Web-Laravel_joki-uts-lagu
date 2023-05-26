@extends('layout/main')
@section('content')
    <h1>{{ $judul }}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet esse perferendis reiciendis, eaque ex quas eum ipsam deleniti excepturi suscipit amet inventore soluta assumenda illum autem voluptatibus asperiores repellendus similique!</p>

    <p>
        <ul>
            <li>Email : {{ $kontak['email'] }}</li>
            <li>Youtube : {{ $kontak['youtube'] }}</li>
        </ul>
    </p>

@endsection
