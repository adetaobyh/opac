<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->level_id == 1) {
                return redirect('admin');
            } elseif (Auth::user()->level_id == 2) {
                return redirect('guru');
            } elseif (Auth::user()->level_id == 3) {
                return redirect('siswa');
            }
        }
        return view('login-regist.login');
    }

    public function loginAttempt(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'status' => 'active'
        ];

        if (Auth::Attempt($data)) {
            if (Auth::user()->level_id == 1) {
                return redirect('admin');
            } elseif (Auth::user()->level_id == 2) {
                return redirect('pengawas');
            } elseif (Auth::user()->level_id == 3) {
                return redirect('buku');
            }
        }else{
            Alert::error('Error', 'Email Atau Password Salah');
            return redirect('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
}
