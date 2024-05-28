<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $r)
    {
        if ($r->validated()) {
            if (Auth::guard('web')->attempt(
                [
                    'email' => $r->email,
                    'password' => $r->password
                ]
            )) {
                return redirect('home')->with('pesan', 'Berhasil Login');
            } else {
                return back()->with('pesan', 'Periksa Kembali Password dan Username');
            }
        }
    }

    public function register(RegisterRequest $r)
    {
        if ($r->validated()) {
            User::create([
                'name' => $r->name,
                'email' => $r->email,
                'password' => Hash::make($r->password),
            ]);

            return redirect('/')->with('pesan', 'Data Berhasil ditambahkan');
        }
    }

    public function daftar()
    {
        return view('auth.register');
    }
}
