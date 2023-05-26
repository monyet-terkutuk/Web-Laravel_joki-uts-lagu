@extends('session.layout')



@section('content')
<div class="row">
    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" method="post" action="/sesi/create">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="Your Name">
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                        placeholder="Email Address">
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Create Password">
                </div>

                <button class="btn btn-primary btn-user btn-block">Register Account</button>



            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="/">Already have an account? Login!</a>
            </div>
        </div>
    </div>
</div>
@endsection
