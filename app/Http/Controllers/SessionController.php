<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(){
        return view("session.login");
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib di isi!',
            'password.required' => 'Password wajib di isi!'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/home')->with('success','Selamat Datang ! ' .  Auth::user()->name . '.');
        }else{
            return redirect('/')->withErrors('Username dan password salah!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil logout, sampai jumpa lagi !');

    }

    public function register(){
        return view('session.register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5'
        ], [
            'name.required' => 'Nama tidak boleh kosong!',
            'email.required' => 'Email wajib di isi!',
            'password.required' => 'Password wajib di isi!'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        return redirect('/')->with('success', 'Akun telah dibuat!!, Silahkan login!');
    }

}
