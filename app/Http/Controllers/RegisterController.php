<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Level;
use App\Models\Kelas;
use Auth;

class RegisterController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $levels = DB::table('levels')->get();
        if(Auth::check()) {
            if (Auth::user()->role_id == 1) {
                return redirect('admin');
            } elseif (Auth::user()->role_id == 2) {
                return redirect('guru');
            } elseif (Auth::user()->role_id == 3) {
                return redirect('siswa');
            }
        }else{
            return view('login-regist.register', compact('levels', 'kelas'));
        }
        
    }

    public function store(Request $request)
    {
        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'kelas_id' => $request->kelas_id,
            'email' => $request->email,
            'nisn' => mt_rand(100000000000, 999999999999),
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'level_id' => 3,
        ]);
        return redirect('login');
    }
}
