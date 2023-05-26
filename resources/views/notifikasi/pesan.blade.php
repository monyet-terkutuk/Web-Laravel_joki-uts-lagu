
@if ($errors ->any())
@foreach ($errors->all() as $item)
    <div class="alert alert-danger fade show">
        <strong>Warning!</strong> {{ $item }}
    </div>
    @endforeach
@endif

@if (Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ Session::get('success') }}
    </div>
@endif


